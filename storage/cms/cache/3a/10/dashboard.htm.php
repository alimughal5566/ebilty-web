<?php 
class Cms5ffc0c41ae4c7440651908_6d88b10828ef87c7179a38b62d21e32bClass extends Cms\Classes\PageCode
{
public function onStart(){
        $value                      =   50;
        if($this->user->mobile){
            $value                  +=  10;
        }
        if($this->user->street_addr){
            $value                  +=  5;
        }
        if($this->user->city_id){
            $value                  +=  5;
        }
        if($this->user->state_id){
            $value                  +=  5;
        }
        if($this->user->country_id){
            $value                  +=  5;
        }
        if($this->user->places){
            $value                  +=  20;
        }

        if($value <= 60){
            $status                 =   'danger';
        }elseif($value <= 100){
            $status                 =   'warning';
        }elseif($value == 100){
            $status                 =   'success';
        }
        $this['progress_value']     =   $value;
        $this['progress_status']    =   $status;

        $records                    =   \Spot\Shipment\Models\Order::orderBy('id', 'desc');
        $stockedRecord              =   \Spot\Shipment\Models\Order::orderBy('id', 'desc');
        $stocked                    =   $stockedRecord->where('requested',7)->count();
        $approvedRecord             =   \Spot\Shipment\Models\Order::orderBy('id', 'desc');
        $approved                   =   $approvedRecord->where('requested',1)->count();
        $deliveredRecord            =   \Spot\Shipment\Models\Order::orderBy('id', 'desc');
        $delivered                  =   $deliveredRecord->whereIn('requested',[4,5,6,7,8,10,11,12])->count();
        $savedREcord                =   \Spot\Shipment\Models\Order::orderBy('id', 'desc');
        $saved                      =   $savedREcord->where('requested',100)->count();

        switch (Auth::getUser()->role_id) {
            case 6:
                $records    =   $records->whereIn('office_id', Auth::getUser()->manage->pluck('id')->toArray());
                $stockedRecord    =   $stockedRecord->whereIn('office_id', Auth::getUser()->manage->pluck('id')->toArray());
                $stocked                    =   $stockedRecord->where('requested',7)->count();
                $approvedRecord    =   $approvedRecord->whereIn('office_id', Auth::getUser()->manage->pluck('id')->toArray());
                $approved                   =   $approvedRecord->where('requested',1)->count();
                $deliveredRecord    =   $deliveredRecord->whereIn('office_id', Auth::getUser()->manage->pluck('id')->toArray());
                $delivered                  =   $deliveredRecord->whereIn('requested',[4,5,6,7,8,10,11,12])->count();
                $savedREcord    =   $savedREcord->whereIn('office_id', Auth::getUser()->manage->pluck('id')->toArray());
                $saved                      =   $savedREcord->where('requested',100)->count();
                break;
            case 5:
                $records    =   $records->where(function($q){
                    $q->where('sender_id', Auth::getUser()->id);
                    $q->orWhere('receiver_id', Auth::getUser()->id);
                });
                $stockedRecord    =   $stockedRecord->where(function($q){
                    $q->where('sender_id', Auth::getUser()->id);
                    $q->orWhere('receiver_id', Auth::getUser()->id);
                });
                $stocked                    =   $stockedRecord->where('requested',7)->count();
                $approvedRecord    =   $approvedRecord->where(function($q){
                    $q->where('sender_id', Auth::getUser()->id);
                    $q->orWhere('receiver_id', Auth::getUser()->id);
                });
                $approved                   =   $approvedRecord->where('requested',1)->count();
                $deliveredRecord    =   $deliveredRecord->where(function($q){
                    $q->where('sender_id', Auth::getUser()->id);
                    $q->orWhere('receiver_id', Auth::getUser()->id);
                });
                $delivered                  =   $deliveredRecord->whereIn('requested',[4,5,6,7,8,10,11,12])->count();
                $savedREcord    =   $savedREcord->where(function($q){
                    $q->where('sender_id', Auth::getUser()->id);
                    $q->orWhere('receiver_id', Auth::getUser()->id);
                });
                $saved                      =   $savedREcord->where('requested',100)->count();
                break;
            case 4:
                if(Auth::getUser()->is_superuser){
                    $records    =   $records->where(function($q){
                        $q->where('office_id', Auth::getUser()->office);
                        $q->orWhere(function($q){
                            //Get all employees
                            $q->where('assigned_id', Auth::getUser()->id);
                        });
                        $q->orWhere(function($q){
                            $q->whereHas('manifest', function($q){
                                $q->where(function($q) {
                                    $q->where('driver_id', Auth::getUser()->id);
                                });
                                $q->orWhere(function($q){
                                    $q->where('employee_id', Auth::getUser()->id);
                                });
                            });
                        });
                    });
                    $stockedRecord    =   $stockedRecord->where(function($q){
                        $q->where('office_id', Auth::getUser()->office);
                        $q->orWhere(function($q){
                            //Get all employees
                            $q->where('assigned_id', Auth::getUser()->id);
                        });
                        $q->orWhere(function($q){
                            $q->whereHas('manifest', function($q){
                                $q->where(function($q) {
                                    $q->where('driver_id', Auth::getUser()->id);
                                });
                                $q->orWhere(function($q){
                                    $q->where('employee_id', Auth::getUser()->id);
                                });
                            });
                        });
                    });
                    $stocked                    =   $stockedRecord->where('requested',7)->count();
                    $approvedRecord    =   $approvedRecord->where(function($q){
                        $q->where('office_id', Auth::getUser()->office);
                        $q->orWhere(function($q){
                            //Get all employees
                            $q->where('assigned_id', Auth::getUser()->id);
                        });
                        $q->orWhere(function($q){
                            $q->whereHas('manifest', function($q){
                                $q->where(function($q) {
                                    $q->where('driver_id', Auth::getUser()->id);
                                });
                                $q->orWhere(function($q){
                                    $q->where('employee_id', Auth::getUser()->id);
                                });
                            });
                        });
                    });
                    $approved                   =   $approvedRecord->where('requested',1)->count();
                    $deliveredRecord    =   $deliveredRecord->where(function($q){
                        $q->where('office_id', Auth::getUser()->office);
                        $q->orWhere(function($q){
                            //Get all employees
                            $q->where('assigned_id', Auth::getUser()->id);
                        });
                        $q->orWhere(function($q){
                            $q->whereHas('manifest', function($q){
                                $q->where(function($q) {
                                    $q->where('driver_id', Auth::getUser()->id);
                                });
                                $q->orWhere(function($q){
                                    $q->where('employee_id', Auth::getUser()->id);
                                });
                            });
                        });
                    });
                    $delivered                  =   $deliveredRecord->whereIn('requested',[4,5,6,7,8,10,11,12])->count();
                    $savedREcord    =   $savedREcord->where(function($q){
                        $q->where('office_id', Auth::getUser()->office);
                        $q->orWhere(function($q){
                            //Get all employees
                            $q->where('assigned_id', Auth::getUser()->id);
                        });
                        $q->orWhere(function($q){
                            $q->whereHas('manifest', function($q){
                                $q->where(function($q) {
                                    $q->where('driver_id', Auth::getUser()->id);
                                });
                                $q->orWhere(function($q){
                                    $q->where('employee_id', Auth::getUser()->id);
                                });
                            });
                        });
                    });
                    $saved                      =   $savedREcord->where('requested',100)->count();
                }else{
                    $records    =   $records->where(function($q){
                        $q->where(function($q){
                            //Get all employees
                            $q->where('assigned_id', Auth::getUser()->id);
                        });
                        $q->orWhere(function($q){
                            $q->whereHas('manifest', function($q){
                                $q->where(function($q) {
                                    $q->where('driver_id', Auth::getUser()->id);
                                });
                                $q->orWhere(function($q){
                                    $q->where('employee_id', Auth::getUser()->id);
                                });
                            });
                        });
                    });
                    $stockedRecord    =   $stockedRecord->where(function($q){
                        $q->where(function($q){
                            //Get all employees
                            $q->where('assigned_id', Auth::getUser()->id);
                        });
                        $q->orWhere(function($q){
                            $q->whereHas('manifest', function($q){
                                $q->where(function($q) {
                                    $q->where('driver_id', Auth::getUser()->id);
                                });
                                $q->orWhere(function($q){
                                    $q->where('employee_id', Auth::getUser()->id);
                                });
                            });
                        });
                    });
                    $stocked                    =   $stockedRecord->where('requested',7)->count();
                    $approvedRecord    =   $approvedRecord->where(function($q){
                        $q->where(function($q){
                            //Get all employees
                            $q->where('assigned_id', Auth::getUser()->id);
                        });
                        $q->orWhere(function($q){
                            $q->whereHas('manifest', function($q){
                                $q->where(function($q) {
                                    $q->where('driver_id', Auth::getUser()->id);
                                });
                                $q->orWhere(function($q){
                                    $q->where('employee_id', Auth::getUser()->id);
                                });
                            });
                        });
                    });
                    $approved                   =   $approvedRecord->where('requested',1)->count();
                    $deliveredRecord    =   $deliveredRecord->where(function($q){
                        $q->where(function($q){
                            //Get all employees
                            $q->where('assigned_id', Auth::getUser()->id);
                        });
                        $q->orWhere(function($q){
                            $q->whereHas('manifest', function($q){
                                $q->where(function($q) {
                                    $q->where('driver_id', Auth::getUser()->id);
                                });
                                $q->orWhere(function($q){
                                    $q->where('employee_id', Auth::getUser()->id);
                                });
                            });
                        });
                    });
                    $delivered                  =   $deliveredRecord->whereIn('requested',[4,5,6,7,8,10,11,12])->count();
                    $savedREcord    =   $savedREcord->where(function($q){
                        $q->where(function($q){
                            //Get all employees
                            $q->where('assigned_id', Auth::getUser()->id);
                        });
                        $q->orWhere(function($q){
                            $q->whereHas('manifest', function($q){
                                $q->where(function($q) {
                                    $q->where('driver_id', Auth::getUser()->id);
                                });
                                $q->orWhere(function($q){
                                    $q->where('employee_id', Auth::getUser()->id);
                                });
                            });
                        });
                    });
                    $saved                      =   $savedREcord->where('requested',100)->count();
                }
                break;
            case 3:
                $employees  =   \RainLab\User\Models\User::whereHas('groups',function($q){$q->whereIn('user_group_id', Auth::getUser()->groups->pluck('id')->toArray());})->pluck('id')->toArray();
                $records    =   $records->where(function($q) use($employees){
                    $q->where(function($q) use($employees){
                        //Get all employees
                        $q->whereIn('assigned_id', $employees);
                    });
                    $q->orWhere(function($q) use($employees){
                        $q->whereHas('manifest', function($q) use($employees){
                            $q->where(function($q) use($employees){
                                $q->whereIn('driver_id', $employees);
                            });
                            $q->orWhere(function($q) use($employees){
                                $q->whereIn('employee_id', $employees);
                            });
                        });
                    });
                });
                $stockedRecord    =   $stockedRecord->where(function($q) use($employees){
                    $q->where(function($q) use($employees){
                        //Get all employees
                        $q->whereIn('assigned_id', $employees);
                    });
                    $q->orWhere(function($q) use($employees){
                        $q->whereHas('manifest', function($q) use($employees){
                            $q->where(function($q) use($employees){
                                $q->whereIn('driver_id', $employees);
                            });
                            $q->orWhere(function($q) use($employees){
                                $q->whereIn('employee_id', $employees);
                            });
                        });
                    });
                });
                $stocked                    =   $stockedRecord->where('requested',7)->count();
                $approvedRecord    =   $approvedRecord->where(function($q) use($employees){
                    $q->where(function($q) use($employees){
                        //Get all employees
                        $q->whereIn('assigned_id', $employees);
                    });
                    $q->orWhere(function($q) use($employees){
                        $q->whereHas('manifest', function($q) use($employees){
                            $q->where(function($q) use($employees){
                                $q->whereIn('driver_id', $employees);
                            });
                            $q->orWhere(function($q) use($employees){
                                $q->whereIn('employee_id', $employees);
                            });
                        });
                    });
                });
                $approved                   =   $approvedRecord->where('requested',1)->count();
                $deliveredRecord    =   $deliveredRecord->where(function($q) use($employees){
                    $q->where(function($q) use($employees){
                        //Get all employees
                        $q->whereIn('assigned_id', $employees);
                    });
                    $q->orWhere(function($q) use($employees){
                        $q->whereHas('manifest', function($q) use($employees){
                            $q->where(function($q) use($employees){
                                $q->whereIn('driver_id', $employees);
                            });
                            $q->orWhere(function($q) use($employees){
                                $q->whereIn('employee_id', $employees);
                            });
                        });
                    });
                });
                $delivered                  =   $deliveredRecord->whereIn('requested',[4,5,6,7,8,10,11,12])->count();
                $savedREcord    =   $savedREcord->where(function($q) use($employees){
                    $q->where(function($q) use($employees){
                        //Get all employees
                        $q->whereIn('assigned_id', $employees);
                    });
                    $q->orWhere(function($q) use($employees){
                        $q->whereHas('manifest', function($q) use($employees){
                            $q->where(function($q) use($employees){
                                $q->whereIn('driver_id', $employees);
                            });
                            $q->orWhere(function($q) use($employees){
                                $q->whereIn('employee_id', $employees);
                            });
                        });
                    });
                });
                $saved                      =   $savedREcord->where('requested',100)->count();
                break;
        }
        /*
        $records    =   \Spot\Shipment\Models\Order::orderBy('id', 'desc');

        switch (Auth::getUser()->role_id) {
            case 6:
                $records    =   $records->where(function($q){
                    $q->where(function($q){
                        $q->where('type', 2);
                        $q->whereIn('for_id', Auth::getUser()->manage->pluck('id')->toArray());
                    });
                    $q->orWhere(function($q){
                        $q->whereHas('orders', function($q){
                            $q->whereIn('office_id', Auth::getUser()->manage->pluck('id')->toArray());
                        });
                    });
                    $q->orWhere(function($q){
                        $q->whereHas('treasury', function($q){
                            $q->whereIn('office_id', Auth::getUser()->manage->pluck('id')->toArray());
                        });
                    });
                });
                break;
            case 5:
                $records    =   $records->where(function($q){
                    $q->whereHas('order', function($q){
                        $q->where('sender_id', Auth::getUser()->id);
                        $q->orWhere('receiver_id', Auth::getUser()->id);
                    });
                });
                break;
            case 4:
                if(Auth::getUser()->is_superuser){
                    $records    =   $records->where(function($q){
                        $q->where(function($q){
                            $q->where('type', 2);
                            $q->where('for_id', Auth::getUser()->office);
                        });
                        $q->orWhere(function($q){
                            $q->whereHas('order', function($q){
                                $q->where('office_id', Auth::getUser()->office);
                            });
                        });
                        $q->orWhere(function($q){
                            $q->whereHas('treasury', function($q){
                                $q->where('office_id', Auth::getUser()->office);
                            });
                        });
                    });
                }else{
                    $records    =   $records->where(function($q){
                        $q->where(function($q){
                            $q->where('type', 1);
                            $q->where('for_id', Auth::getUser()->id);
                        });
                        $q->orWhere(function($q){
                            $q->whereHas('order', function($q){
                                $q->where(function($q){
                                    $q->where('assigned_id', Auth::getUser()->id);
                                });
                                $q->orWhere(function($q){
                                    $q->whereHas('manifest', function($q){
                                        $q->where(function($q) {
                                            $q->where('driver_id', Auth::getUser()->id);
                                        });
                                        $q->orWhere(function($q){
                                            $q->where('employee_id', Auth::getUser()->id);
                                        });
                                    });
                                });
                            });
                        });
                    });
                }
                break;
            case 3:
                $employees  =   \RainLab\User\Models\User::whereHas('groups',function($q){$q->whereIn('user_group_id', Auth::getUser()->groups->pluck('id')->toArray());})->pluck('id')->toArray();
                $records    =   $records->where(function($q) use($employees){
                    $q->where(function($q) use($employees){
                        $q->where('type', 1);
                        $q->whereIn('for_id', $employees);
                    });
                    $q->orWhere(function($q) use($employees){
                        $q->whereHas('order', function($q) use($employees){
                            $q->where(function($q) use($employees){
                                $q->whereIn('assigned_id', $employees);
                            });
                            $q->orWhere(function($q) use($employees){
                                $q->whereHas('manifest', function($q) use($employees){
                                    $q->where(function($q) use($employees){
                                        $q->whereIn('driver_id', $employees);
                                    });
                                    $q->orWhere(function($q) use($employees){
                                        $q->whereIn('employee_id', $employees);
                                    });
                                });
                            });
                        });
                    });
                });
                break;
        }
        */
        //0 = Pending | 1 = Approved | 2 = Refused | 3 = Delivered to driver | 4 = Delivered | 5 = Return request | 6 = Delivery of discards to the driver | 7 = Supply in stock | 8 = Returned | 9 = received
        $stockedRecord = $approvedRecord  =  $deliveredRecord = $savedREcord = $records;
         //dd($records->where('requested',7)->count());
        
        $new                        =   $records->where('requested',0)->count();
        //$approved                   =   $approvedRecord->where('requested',1)->count();
        //$stocked                    =   $stockedRecord->where('requested',7)->count();
        //$delivered                  =   $deliveredRecord->whereIn('requested',[4,5,6,7,8,10,11,12])->count();
        //$saved                      =   $savedREcord->where('requested',100)->count();
        //dd($delivered);
        $this['new']                =   $new;
        $this['approved']           =   $approved;
        $this['stocked']            =   $stocked;
        $this['delivered']          =   $delivered;
        $this['saved']              =   $saved;

    }
public function onDelete()
    {
        $data = post();
        if(!Auth::getUser()->hasUserPermission(["order"],'d')) {
            return Response::json(['error' => $this['theme_lang']['not_allowed']], 401);
        }

        if(null !== post('id')){
            if(is_array(post('id'))){
                foreach(post('id') as $id){
                    $item = \Spot\Shipment\Models\Order::where('id',$id)->first();

                    $activity                   = new \Spot\Shipment\Models\Activity;
                    $activity->user_id          = Auth::getUser()->id;
                    $activity->order_id         = $item->id;
                    $activity->description      = 'deleted';
                    $activity->created_at       = \Carbon\Carbon::now();
                    $activity->updated_at       = \Carbon\Carbon::now();
                    $activity->save();

                    $item->payments->each->delete();
                    $item->activities->each->delete();
                    $item->tasks->each->delete();
                    $item->items->each->delete();
                    $item->delete();
                }
            }else{
                $item = \Spot\Shipment\Models\Order::where('id',$data['id'])->first();

                $activity                   = new \Spot\Shipment\Models\Activity;
                $activity->user_id          = Auth::getUser()->id;
                $activity->order_id         = $item->id;
                $activity->description      = 'deleted';
                $activity->created_at       = \Carbon\Carbon::now();
                $activity->updated_at       = \Carbon\Carbon::now();
                $activity->save();

                $item->payments->each->delete();
                $item->activities->each->delete();
                $item->tasks->each->delete();
                $item->items->each->delete();
                $item->delete();
            }
            return Redirect::back();
        }
    }
}
