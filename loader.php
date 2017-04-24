<?php
Theme::load(function(){
	PostRegister::addPostMeta('page','test','meta/page.php');
	Theme::registerStyle('css/style.css');
});

