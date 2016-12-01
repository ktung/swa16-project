<?php
$url = $_GET['url'];
setcookie('url', $url);
header('location: '. $url);
