<?php 
class Cms5ffc0c42aa76b843692247_7c72b302fada71faad8e55bb36a1d7fbClass extends Cms\Classes\PartialCode
{
public function onStart(){
        $data = post();

        if(isset($data['start']) && isset($data['end'])){
            //dd($data['start']);
            $start   =   \Carbon\Carbon::parse(\Carbon\Carbon::createFromFormat($this['settings']['dateformat'], $data['start']));
            $end     =   \Carbon\Carbon::parse(\Carbon\Carbon::createFromFormat($this['settings']['dateformat'], $data['end']));


            $start          = $start->copy()->startOfDay();
            $end            = $end->copy()->endOfDay();

            //var_dump(\Spot\Shipment\Models\Payment_v2::where('payment_status',0)->where('for_id',1)->where('date', '>=', $start)->where('date', '<=', $end)->sum('amount') );

            $this['PendingPayments']    =   Currency::format( 
            \Spot\Shipment\Models\Payment_v2::where('payment_status',0)->where('for_id',1)->where('date', '>=', $start)->where('date', '<=', $end)->sum('amount') );

            //$this['PendingPayments']        =   Currency::format( str_replace('-','',\Spot\Shipment\Models\Payment::whereIn//('status',[1,3])->whereIn('payment_type',['courier_fee','return_package_fee'])->where('date', '>=', //$start)->where('date', '<=', $end)->where(function($q){
            //    if(Auth::getUser()->role_id == 6){
            //        $q->where(function($q){
            //            $q->where('type', 2);
            //            $q->whereIn('for_id', Auth::getUser()->manage->pluck('id')->toArray());
            //        });
            //        $q->whereHas('order', function($q){
            //            $q->whereIn('office_id', Auth::getUser()->manage->pluck('id')->toArray());
            //        });
            //    }
            //})->sum('amount')) );

            $this['CurrentMonthSales']      =   Currency::format(
            \Spot\Shipment\Models\Payment_v2::whereIn('payment_status',[1,2])->where('for_id',1)->where('date', '>=', $start)->where('date', '<=', $end)->sum('amount') );

            //$this['CurrentMonthSales']      =   Currency::format(str_replace('-','',\Spot\Shipment\Models\Payment::where('s//tatus',5)->whereIn('payment_type',['courier_fee','return_package_fee'])->where('date', '>=', //$start)->where('date', '<=', $end)->where(function($q){
            //    if(Auth::getUser()->role_id == 6){
            //        $q->where(function($q){
            //            $q->where('type', 2);
            //            $q->whereIn('for_id', Auth::getUser()->manage->pluck('id')->toArray());
            //        });
            //        $q->whereHas('order', function($q){
            //            $q->whereIn('office_id', Auth::getUser()->manage->pluck('id')->toArray());
            //        });
            //    }
            //})->sum('amount')));


            $shipments                     =   \Spot\Shipment\Models\Order::where('created_at', '>=', $start)->where('created_at', '<=', $end)->where(function($q){
                if(Auth::getUser()->role_id == 6){
                    $q->whereIn('office_id', Auth::getUser()->manage->pluck('id')->toArray());
                }
            })->count();
            $delayed                        =   \Spot\Shipment\Models\Order::whereIn('requested', [0,1,3])
                                                    ->where('delivery_date', '<', \Carbon\Carbon::now()->format('Y-m-d'))
                                                    ->where('created_at', '>=', $start)->where('created_at', '<=', $end)->where(function($q){
                                                        if(Auth::getUser()->role_id == 6){
                                                            $q->whereIn('office_id', Auth::getUser()->manage->pluck('id')->toArray());
                                                        }
                                                    })->count();
            if($shipments != 0){
                $this['shipping']               =  ceil($delayed/$shipments*100);
            }else{
                $this['shipping']               =  0;
            }

            $time_diff                  = $start->diffInDays($end, false);
            $PendingPaymentsChart       =   '';
            $CurrentMonthSalesChart     =   '';
            $shippingChart              =   '';
            for($x=0;$x<=$time_diff;$x++){
                $start_date          = $start->addDays($x)->copy()->startOfDay();
                $end_date            = $start->addDays($x)->copy()->endOfDay();

                $PendingPaymentsChart       .= \Spot\Shipment\Models\Payment_v2::where('payment_status',0)->where('for_id',1)->where('date', '>=', $start)->where('date', '<=', $end)->sum('amount').',';

                //$PendingPaymentsChart       .=   str_replace('-','',\Spot\Shipment\Models\Payment::whereIn('status',[1,3])-//>whereIn('payment_type',['courier_fee','return_package_fee'])->where('date', '>=', //$start_date)->where('date', '<=', $end_date)->where(function($q){
                   // if(Auth::getUser()->role_id == 6){
                   //     $q->where(function($q){
                   //         $q->where('type', 2);
                   //         $q->whereIn('for_id', Auth::getUser()->manage->pluck('id')->toArray());
                   //     });
                   //     $q->orWhere(function($q){
                   //         $q->whereHas('order', function($q){
                   //             $q->whereIn('office_id', Auth::getUser()->manage->pluck('id')->toArray());
                   //         });
                   //     });
                   //     $q->orWhere(function($q){
                   //         $q->whereHas('treasury', function($q){
                   //             $q->whereIn('office_id', Auth::getUser()->manage->pluck('id')->toArray());
                   //         });
                   //     });
                   // }
                //})->sum('amount')).',';

                $CurrentMonthSalesChart     .= \Spot\Shipment\Models\Payment_v2::whereIn('payment_status',[1,2])->where('for_id',1)->where('date', '>=', $start)->where('date', '<=', $end)->sum('amount').',';

               // $CurrentMonthSalesChart     .=   str_replace('-','',\Spot\Shipment\Models\Payment::where('status',5)->where//In('payment_type',['courier_fee','return_package_fee'])->where('date', '>=', $start_date)->where('date', //'<=', $end_date)->where(function($q){
                 //   if(Auth::getUser()->role_id == 6){
                 //       $q->where(function($q){
                 //           $q->where('type', 2);
                 //           $q->whereIn('for_id', Auth::getUser()->manage->pluck('id')->toArray());
                 //       });
                 //       $q->orWhere(function($q){
                 //           $q->whereHas('order', function($q){
                 //               $q->whereIn('office_id', Auth::getUser()->manage->pluck('id')->toArray());
                 //           });
                 //       });
                 //       $q->orWhere(function($q){
                 //           $q->whereHas('treasury', function($q){
                 //               $q->whereIn('office_id', Auth::getUser()->manage->pluck('id')->toArray());
                 //           });
                 //       });
                 //   }
                //})->sum('amount')).',';
                
                $shipments                     =   \Spot\Shipment\Models\Order::where('created_at', '>=', $start_date)->where('created_at', '<=', $end_date)->where(function($q){
                    if(Auth::getUser()->role_id == 6){
                        $q->whereIn('office_id', Auth::getUser()->manage->pluck('id')->toArray());
                    }
                })->count();
                $delayed                        =   \Spot\Shipment\Models\Order::whereIn('requested', [0,1,3])->where('delivery_date', '>',\Carbon\Carbon::now())->where('created_at', '>=', $start_date)->where('created_at', '<=', $end_date)->where(function($q){
                    if(Auth::getUser()->role_id == 6){
                        $q->whereIn('office_id', Auth::getUser()->manage->pluck('id')->toArray());
                    }
                })->count();
                if($shipments != 0){
                    $shippingChart          .=  ($delayed/$shipments*100).',';
                }else{
                    $shippingChart          .=  (0).',';
                }

            }
            $this['PendingPaymentsChart']       =   $PendingPaymentsChart;
            $this['CurrentMonthSalesChart']     =   $CurrentMonthSalesChart;
            $this['shippingChart']              =   $shippingChart;

        }else{
            $this['PendingPayments']    =   Currency::format( 
            \Spot\Shipment\Models\Payment_v2::where('payment_status',0)->where('for_id',1)->sum('amount') );
            //dd($this['PendingPayments']);


            $this['CurrentMonthSales']      =   Currency::format(
            \Spot\Shipment\Models\Payment_v2::whereIn('payment_status',[1,2])->where('for_id',1)->sum('amount') );
            
            $shipments                     =   \Spot\Shipment\Models\Order::where(function($q){
                                                    if(Auth::getUser()->role_id == 6){
                                                        $q->whereIn('office_id', Auth::getUser()->manage->pluck('id')->toArray());
                                                    }
                                                })->count();
            $delayed                        =   \Spot\Shipment\Models\Order::whereIn('requested', [0,1,3])
                                                    ->where('delivery_date', '<',\Carbon\Carbon::now())
                                                    ->where(function($q){
                                                        if(Auth::getUser()->role_id == 6){
                                                            $q->whereIn('office_id', Auth::getUser()->manage->pluck('id')->toArray());
                                                        }
                                                    })->count();
            if($shipments != 0){
                $this['shipping']               =  ceil($delayed/$shipments*100);
            }else{
                $this['shipping']               =  0;
            }

           // $this['PendingPaymentsChart']       =   $this['PendingPayments'] ;
            //$this['CurrentMonthSalesChart']     =   $this['CurrentMonthSales'] ;
            //$this['shippingChart']              =   $this['shipping'] ;

        }
    }
}
