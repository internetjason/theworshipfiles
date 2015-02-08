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


    <!-- Songs Section -->
    <section>
        <div class="container">
            <div class="row">
            	<div class="col-lg-offset-1 col-lg-10">
                	<h2 class="text-center"><?=$songinfo[0];?></h2>
                   	<p class="item-intro text-muted text-center"><?=$songinfo[2];?></p>
                    <p class="text-center"><button id="selectbutton" class="btn btn-success btn-sm">Select All Lyrics/Chords</button></p>
<pre id="songtext">
<?=$file_content;?>
</pre>
                    <button type="button" class="btn btn-primary" onClick="history.back(1);"><i class="fa fa-arrow-left"></i> Go Back</button>
                </div>
            </div>
        </div>
    </section>

<script>
    function SelectText(element) {
        var doc = document
        , text = doc.getElementById(element)
        , range, selection
        ;
        if (doc.body.createTextRange) {
            range = document.body.createTextRange();
            range.moveToElementText(text);
            range.select();
        } else if (window.getSelection) {
            selection = window.getSelection();
            range = document.createRange();
            range.selectNodeContents(text);
            selection.removeAllRanges();
            selection.addRange(range);
        }
    }

    $(function() {
        $('#selectbutton').click(function() {
            SelectText('songtext');
        });
    });

jQuery( document ).ready(function($) {
	jQuery( 'pre' ).click( function() {
		var refNode = $( this )[0];
		if ( $.browser.msie ) {
			var range = document.body.createTextRange();
			range.moveToElementText( refNode );
			range.select();
		} else if ( $.browser.mozilla || $.browser.opera || $.browser.chrome ) {
			var selection = window.getSelection();
			var range = document.createRange();
			range.selectNodeContents( refNode );
			selection.removeAllRanges();
			selection.addRange( range );
		} else if ( $.browser.safari ) {
			var selection = window.getSelection();
			selection.setBaseAndExtent( refNode, 0, refNode, 1 );
		}
	});
});
</script>

<?php require_once('footer.php'); ?>
