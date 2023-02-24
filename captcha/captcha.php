<?php
session_start();
 
// Generate random captcha code
$captcha = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 6);
 
// Save captcha code in session variable
$_SESSION["captcha"] = $captcha;
 
// Set image width and height
$width = 100;
$height = 38;
 
// Create image
$im = imagecreate($width, $height);
 
// Define colors
$bg_color = imagecolorallocate($im, 220, 220, 220); // gray
$text_color = imagecolorallocate($im, 0, 0, 0); // black
 
// Fill background with color
imagefill($im, 0, 0, $bg_color);
 
// Set font size and file path
$font_size = 20;
$font_file = __DIR__ . "/arial.ttf";
 
// Calculate x and y positions for text
$text_box = imagettfbbox($font_size, 0, $font_file, $captcha);
$x = ($width - $text_box[2]) / 2;
$y = ($height - $text_box[5]) / 2;
 
// Draw captcha code on image
imagettftext($im, $font_size, 0, $x, $y, $text_color, $font_file, $captcha);
 
// Set content type header to image/png
header("Content-type: image/png");
 
// Output image
imagepng($im);
 
// Free memory
imagedestroy($im);
?>
