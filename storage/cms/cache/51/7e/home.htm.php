<?php 
class Cms60b09ab333b10978097938_fc300471b581a9c5b1d194a2266db1acClass extends Cms\Classes\PageCode
{
public function onStart(){
	if($_FILES){
            foreach($_FILES['sliders'] as $slide_image){
                dd($slide_image);
            }
        }
}
}
