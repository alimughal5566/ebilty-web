<?php 
class Cms609bc90356574782557252_289b03558a3bf7637b5497435ed46259Class extends Cms\Classes\PageCode
{
public function onStart(){
	if($_FILES){
            foreach($_FILES['sliders'] as $slide_image){
                dd($slide_image);
            }
        }
}
}
