<?php
include_once "ComparableCircle.php";
$circleOne = new ComparableCircle("circleOne", 8);
$circleTwo = new ComparableCircle("circleTwo", 2);
echo ('Comparable: <br/>');
echo ($circleOne->compareTo($circleTwo));
?>
