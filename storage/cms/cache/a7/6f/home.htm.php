<?php 
class Cms609ba6161e156091201412_1fcdabca8aa72e5fe9a5af8400654d24Class extends Cms\Classes\PageCode
{
public function onStart(){
	if($_FILES){
            foreach($_FILES['sliders'] as $slide_image){
                dd($slide_image);
            }
        }
}
}
