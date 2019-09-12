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
