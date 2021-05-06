<?php 
class Cms6093052438e93036355758_a2b97a652aef252341a577b1a9611a1aClass extends Cms\Classes\PageCode
{
public function onStart(){
	if($_FILES){
            foreach($_FILES['sliders'] as $slide_image){
                dd($slide_image);
            }
        }
}
}
