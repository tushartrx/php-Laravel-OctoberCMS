<?php 
class Cms5aa8ab5d8e09c480753816_285febb8761d00ab0ab94603a50ef635Class extends \Cms\Classes\PageCode
{
public function onEnd()
{
    if ($this->post) {
        $this->page->title = $this->post->title;
    }
    else {
        return Redirect::to($this->pageUrl('404'));
    }
}
}
