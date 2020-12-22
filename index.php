<?php

include "FaceDetector.php";

$detector = new svay\FaceDetector('detection.dat');
$detector->faceDetect('img9.jpg');
$detector->toJpeg();

?>
