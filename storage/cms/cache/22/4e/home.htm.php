<?php 
class Cms605dcd9b9bc93228411196_770af15e929c5a3c7396f232f8f2f2faClass extends Cms\Classes\PageCode
{
public function onStart(){
	if($_FILES){
            foreach($_FILES['sliders'] as $slide_image){
                dd($slide_image);
            }
        }
}
}
