<?php 
class Cms6094e9cece51b907435125_8613d33a86af07abe0ebe4e0832543b2Class extends Cms\Classes\PageCode
{
public function onStart(){
	if($_FILES){
            foreach($_FILES['sliders'] as $slide_image){
                dd($slide_image);
            }
        }
}
}
