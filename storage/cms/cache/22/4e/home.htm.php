<?php 
class Cms60617605bb6e7053906698_91ec507e378a6689b5ec612dfe4d336cClass extends Cms\Classes\PageCode
{
public function onStart(){
	if($_FILES){
            foreach($_FILES['sliders'] as $slide_image){
                dd($slide_image);
            }
        }
}
}
