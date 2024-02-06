<?php
$imgs = dir('usr/files/19Ubicate123');
while (($img = $imgs -> read()) !==false) {
 if (preg_match('/jpeg/',  $img)){
 echo "<img src = 'img/$img'>";
 }
}
?>
