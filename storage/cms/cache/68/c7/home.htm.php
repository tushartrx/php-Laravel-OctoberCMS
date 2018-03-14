<?php 
class Cms5aa8aae8dac5f941676211_edeeafffa00a70d3163cdb89163ec7cbClass extends \Cms\Classes\PageCode
{
public function onPagePosts()
{
    $this->blogPosts->setProperty('pageNumber', post('page'));
    $this->pageCycle();
}
}
