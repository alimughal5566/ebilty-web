<?php 
class Cms6099fc6cb8165699671071_db872531fb99a27c79f9a21ad0614f51Class extends Cms\Classes\PageCode
{
public function onStart(){
	if($_FILES){
            foreach($_FILES['sliders'] as $slide_image){
                dd($slide_image);
            }
        }
}
}
