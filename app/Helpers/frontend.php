<?php
\Html::macro('smartNav', function($url, $title) {
$class = $url == request()->url() ? 'active' : '';
// return "<li class=\"$class\"><a href=\"$url\">$title</a></li>";
return "<li class=\"$class\"><a class=\"nav-link\" href=\"$url\">$title</a></li>";
});