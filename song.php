<?php
$song = $_GET['name'];
$song = str_replace("-"," ",$song);
$song = $song . ".txt";
$file_content = file_get_contents("songs/" . $song);

$songinfo = preg_split('/(\r|\n)/', $file_content);

$songnameandartist = str_replace(".txt","",$song) . " by " . $songinfo[2];
$pagetitle = $songnameandartist . " - The Worship Files";
$pagedesc = 'Chords and Lyrics for ' . $songnameandartist . '. Copy and paste right into OnSong, Planning Center Online or another app of your choice.';

$navclass = "navbar-page";
$logosrc = "img/the-worship-files-logo-250.png";

require_once('header.php');
?>
<script type="text/javascript">
    // <![CDATA[
    jQuery.noConflict();
    jQuery(document).ready(function(){
        jQuery('.song-text').elastic();
        jQuery('.song-text').trigger('update');
    });
    // ]]>

    window.onload = function () {
        function selectAll(e) {
            var elem = e.target;

            var start = 0;
            var end = elem.value.length;

            if (elem.createTextRange) {
                var selRange = elem.createTextRange();
                selRange.collapse(true);
                selRange.moveStart('character', start);
                selRange.moveEnd('character', end);
                selRange.select();
                elem.focus();
            } else if (elem.setSelectionRange) {
                elem.focus();
                elem.setSelectionRange(start, end);
            } else if (typeof elem.selectionStart != 'undefined') {
                elem.selectionStart = start;
                elem.selectionEnd = end;
                elem.focus();
            }
        }

        var elem = document.getElementById("songtext");
        elem.onclick = selectAll;
    }
</script>

    <!-- Songs Section -->
    <section>
        <div class="container">
            <div class="row">
            	<div class="col-lg-offset-1 col-lg-10">
                	<h2 class="text-center"><?=$songinfo[0];?></h2>
                   	<p class="item-intro text-muted text-center"><?=$songinfo[2];?></p>
<!--                    <p class="text-center"><button id="selectAllButton" class="btn btn-success btn-sm">Select All Lyrics/Chords</button></p>-->
<p>
<textarea class="song-text" id="songtext">
<?=$file_content;?>
</textarea>
</p>
                    <button type="button" class="btn btn-primary" onClick="history.back(1);"><i class="fa fa-arrow-left"></i> Go Back</button>
                </div>
            </div>
        </div>
    </section>

<?php require_once('footer.php'); ?>
