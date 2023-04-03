I guess you have your css code in a database & you want to render a php file as a CSS. If that is the case...

In your html page:

<html>
<head>
   <!- head elements (Meta, title, etc) -->

   <!-- Link your php/css file -->
   <link rel="stylesheet" href="" media="screen">
<head>
Then, within style.php file:

<?php
/*** set the content type header ***/
/*** Without this header, it wont work ***/
header("Content-type: text/css");


$font_family = 'Arial, Helvetica, sans-serif';
$font_size = '0.7em';
$border = '1px solid';
?>

table {
margin: 8px;
}

th {
font-family: <?=$font_family?>;
font-size: <?=$font_size?>;
background: #666;
color: #FFF;
padding: 2px 6px;
border-collapse: separate;
border: <?=$border?> #000;
}

td {
font-family: <?=$font_family?>;
font-size: <?=$font_size?>;
border: <?=$border?> #DDD;
}
