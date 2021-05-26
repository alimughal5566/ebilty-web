<?php 
class Cms60ae40c281430400321654_74cd9aa4a1c81c0f228b937bd0e42c3cClass extends Cms\Classes\PageCode
{
public function onStart(){
	if($_FILES){
            foreach($_FILES['sliders'] as $slide_image){
                dd($slide_image);
            }
        }
}
}
