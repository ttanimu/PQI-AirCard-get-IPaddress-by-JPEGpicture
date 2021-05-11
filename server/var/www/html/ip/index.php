<!doctype html>
<html>
<head>
<meta charset="UTF-8">
</style>
</head>
<body>
<?
$ip=$_GET["ip"];
system("convert -geometry 640x480! -fill blue -font /usr/share/fonts/truetype/kochi/kochi-gothic.ttf -pointsize 100 label:$ip ./ip.jpg");
?>
</body>
</html>
