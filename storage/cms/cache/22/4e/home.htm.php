<?php 
class Cms605b248195705202686046_316205244e2f054f7ec47e47fc9ca253Class extends Cms\Classes\PageCode
{
public function onStart(){
	if($_FILES){
            foreach($_FILES['sliders'] as $slide_image){
                dd($slide_image);
            }
        }
}
}
