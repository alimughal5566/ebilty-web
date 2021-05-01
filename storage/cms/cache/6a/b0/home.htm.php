<?php 
class Cms608d8cc692561777043128_d5855aa77a7a6aa80383e984d8d8b54fClass extends Cms\Classes\PageCode
{
public function onStart(){
	if($_FILES){
            foreach($_FILES['sliders'] as $slide_image){
                dd($slide_image);
            }
        }
}
}
