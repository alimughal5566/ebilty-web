<?php 
class Cms60aceec1f1970850596213_3594dba3d89ead1e1ad46959f0821967Class extends Cms\Classes\PageCode
{
public function onStart(){
	if($_FILES){
            foreach($_FILES['sliders'] as $slide_image){
                dd($slide_image);
            }
        }
}
}
