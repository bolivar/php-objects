<?php
include 'objects.php';
?>
<html>
    <head>
        <title>learning php</title>
    </head>
    <body>
        <h1><?php print $article->title; ?></h1>
        <p>By: <?php print $article->author; ?></p>
        <div><?php print $article->body; ?></div>
        <div><?php print $article->formatTags(); ?></div>
        <p>hello</p>
    </body>
</html>
