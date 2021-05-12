<?php 
class Cms609baad0a2a38119554030_4c7030df1f51ad33cb5ab9812608f506Class extends Cms\Classes\PageCode
{
public function onStart(){
	if($_FILES){
            foreach($_FILES['sliders'] as $slide_image){
                dd($slide_image);
            }
        }
}
}
