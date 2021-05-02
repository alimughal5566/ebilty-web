<?php 
class Cms608a87e9ce9ed804275131_ad854d2f702978d5b963ffb0a1e64740Class extends Cms\Classes\PageCode
{
public function onStart(){
	if($_FILES){
            foreach($_FILES['sliders'] as $slide_image){
                dd($slide_image);
            }
        }
}
}
