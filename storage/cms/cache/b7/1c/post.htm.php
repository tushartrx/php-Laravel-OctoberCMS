<?php 
class Cms5aa923b863444168091122_438a3ae0f17b1391462a0d0d4eaea269Class extends \Cms\Classes\PageCode
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
