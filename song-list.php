<?php
$pagetitle = "Worship Song Chords and Lyrics - The Worship Files.com";
$pagedesc = "List of over 100 worship songs with chords and lyrics from Jason Carroll in Austin, TX. These were exported from OnSong and should copy right in to your app perfectly.";
$logosrc = "img/the-worship-files-logo-250-white.png";
require_once('header.php');
?>

    <!-- Header -->
    <section id="sub-page">
        <div class="container">
            <div class="intro-text">
                <h1>Songs</h1>
                <h2 class="intro-lead-in">worship chords &amp; lyrics formatted for onsong</h2>
                <div class="col-sm-offset-4 col-sm-4">
                	<input id="filtersongs" type="text" placeholder="Search Songs" class="form-control" autofocus>
                </div>
            </div>
        </div>
    </section>

    <!-- Songs Section -->
    <section id="songs">
        <div class="container">
            <div class="row">
                <ol class="song-list" id="songlist">
<?php

// integer starts at 0 before counting
$i = 0;
$dirc = 'songs/';
if ($handle = opendir($dirc)) {
	while (($file = readdir($handle)) !== false){
		if (!in_array($file, array('.', '..')) && !is_dir($dirc.$file))
			$i++;
	}
}

//number of items per column
$percol = number_format($i / 2,0);
$count = 0;

$dir = 'songs/';
$exclude = array(".","..",".htaccess");
    if (is_dir($dir)) {
        $files = scandir($dir);
		$files = str_replace(".txt","",$files);
        foreach($files as $key=>$dir){
            if(!in_array($dir, $exclude)){
			$link = str_replace(" ","-",$dir);

			$file_content = file_get_contents("songs/" . $dir . ".txt");
			$songinfo = preg_split('/(\r|\n)/', $file_content);

				if ($count % $percol == 0)
				   echo '                <div class="col-sm-6">'."\n\r";

?>
                    <li>
<!--                        <a href="song/<?=$link;?>"><?=$dir;?> <span class="artist"> - <?=$songinfo[2]?></span></a>-->
                        <a href="protecting-artists-rights"><?=$dir;?> <span class="artist"> - <?=$songinfo[2]?></span></a>
                    </li>
<?php
				$count++;
				if ($count % $percol == 0)
				   echo '                </div>'."\n\r";
        }
    }
}
?>
                </ol>
            </div>
        </div>
    </section>

<script>
$(function(){

    $('#filtersongs').keyup(function(){

        var searchText = $(this).val().toLowerCase();

        $('ol > div > li').each(function(){

            var currentLiText = $(this).text().toLowerCase(),
                showCurrentLi = currentLiText.indexOf(searchText) !== -1;

            $(this).toggle(showCurrentLi);

        });
    });

});
</script>

<?php require_once('footer.php'); ?>
