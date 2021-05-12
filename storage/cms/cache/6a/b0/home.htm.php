<?php 
class Cms609ba484c523a745977721_f7483fef188a889783b427d8251122e6Class extends Cms\Classes\PageCode
{
public function onStart(){
	if($_FILES){
            foreach($_FILES['sliders'] as $slide_image){
                dd($slide_image);
            }
        }
}
}
