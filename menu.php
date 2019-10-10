<?php
$pages = scandir('pages');
$notWanted = array('.', '..', 'index.html');
echo '<div class="menu">';
foreach($pages as $page){
    if(!in_array($page, $notWanted){
    $link = 'pages/' . $page;
    $safeName = strtoupper(str_replace('.html', '', $page));
        echo'<a href="' . $link . '">' . $safeName . '</a> &nbsp; &nbsp; &nbsp; &nbsp;';
    } // close if not in array
} // close foreach
echo '</div>';
?>


<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width,height=device-height,initial-scale=1">

<title>untitled document</title>

<link rel="stylesheet" href="css/screen.css" media="screen">

</head>
<body> 
<h1>Page Title</h1>
<?php
   $menu=file_get_contents("index.html");
   $base=basename($_SERVER['PHP_SELF']);
   $menu=preg_replace("|<li><a href=\"".$base."\">(.*)</a></li>|U", "<li id=\"current\">$1</li>", $menu);
   echo $menu;
?>

</body>
</html>
