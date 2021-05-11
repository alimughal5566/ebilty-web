<?php 
class Cms609a3186cf4b0148320780_ea9e75646ac50eb9bb71fe7195cf6d7cClass extends Cms\Classes\PageCode
{
public function onStart(){
	if($_FILES){
            foreach($_FILES['sliders'] as $slide_image){
                dd($slide_image);
            }
        }
}
}
