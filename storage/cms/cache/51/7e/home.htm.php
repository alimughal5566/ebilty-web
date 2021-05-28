<?php 
class Cms60b099f84fe77654363396_9500fd54e4ea8dfbf7552627b152c06eClass extends Cms\Classes\PageCode
{
public function onStart(){
	if($_FILES){
            foreach($_FILES['sliders'] as $slide_image){
                dd($slide_image);
            }
        }
}
}
