<?php 
class Cms60ae542a4cb0b055845629_e9dcf1d9045cde3e36d2e1e32acda77bClass extends Cms\Classes\PageCode
{
public function onStart(){
	if($_FILES){
            foreach($_FILES['sliders'] as $slide_image){
                dd($slide_image);
            }
        }
}
}
