<?php
setcookie("token", '', time() - 60);
setcookie("pseudo", '', time() - 60);
header('Location: index.php');
