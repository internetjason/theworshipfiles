<?php
$pagetitle = "This page has moved - The Worship Files";
$pagedesc = "We have a new site with a ton more songs, but it looks like you've clicked on an old link. ";
$logosrc = "img/the-worship-files-logo-250-white.png";

require_once('header.php');

$song = $_SERVER['REQUEST_URI'];
$song = str_replace("-"," ",$song);
$song = str_replace("/","",$song);
$song = ucwords($song);
?>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-heading">404 Error</div>
                <div class="intro-lead-in">It looks like you tried getting to &quot;<?=$song;?>&quot; using a
                link that no longer works. Click the button below and you should find what you're looking for.</div>
                <a href="<?=$path;?>song-list" class="btn btn-xl">Browse all songs</a>
            </div>
        </div>
    </header>

<?php require_once('footer.php'); ?>
