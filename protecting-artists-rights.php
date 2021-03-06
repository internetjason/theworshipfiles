<?php
$pagetitle = "The Worship Files - Protecting Artist Rights";
$pagedesc = "Let's do our best to protect the artists who are writing these great worship songs.";
$logosrc = "img/the-worship-files-logo-250.png";
$contactscripts = '<script src="' . $path . '/js/jqBootstrapValidation.js"></script>
<script src="' . $path . '/js/contact_vote.js"></script>';
require_once('header.php');
?>

<!-- Form Section -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <form name="sentMessage" id="voteForm" novalidate>
                    <div class="row">
                        <h1 class="text-center">Protecting Artists' Rights</h1>
                        <div class="form-group lead text-center">
                            Would you be willing to pay a $1/mo. subscription fee to legally
                            view/copy/paste/download chords &amp; lyrics in a way that protects artists' rights?<br>
                            <input name="vote" id="vote" type='hidden' value="Yes" />
                            <div class="btn-group" data-toggle="buttons">
                                <button type="button" class="btn btn-default btn-lg active" data-radio-name="vote">Yes</button>
                                <button type="button" class="btn btn-default btn-lg" data-radio-name="vote">No</button>
                            </div>

                            <script>
                                $('.btn[data-radio-name]').click(function() {
                                    $('.btn[data-radio-name="' + $(this).data('radioName') + '"]').removeClass('active');
                                    $('input[name="' + $(this).data('radioName') + '"]').val(
                                        $(this).text()
                                    );
                                });
                            </script>

                        </div>

                        <div class="col-md-6 col-md-offset-3">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name." name="name">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address." name="email">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>

                        <div class="clearfix"></div>

                        <div class="col-lg-12 text-center">
                            <div id="success"></div>
                            <button type="submit" class="btn btn-xl">Send Message</button>
                            <br><br>
                            <p>Read below for an explanation of why you're seeing this form.</p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<section class="bg-light-gray padding-small">
    <div class="container">
        <div class="row">
            <div class="col-sm-offset-1 col-sm-10">
                <h2 class="item-intro text-muted text-center">Here's the deal...</h2>
                <p>
                    I have been notified that any site offering free chords and lyrics to copyrighted material
                    is in breach of laws meant to protect artists. While there are some high quality paid
                    sites out there, my personal opinion is that the barrier to entry is too high, thus
                    causing people to "justify the means" by continuing to seek out the "free" sites to obtain
                    the materials they desire. The publishing companies have been in contact with me and are
                    open to the idea of a model more affordable to the user (you). I'm trying to gauge how many
                    people would be willing to pay just a dollar for a community-driven site for submiting and
                    obtaining chords and lyrics to worship songs. My plan would always be to keep the site
                    ad-free and to give 100% of the proceeds to the publishing companies so they can pay
                    royalties to the artists who are writing these great songs. After all, we want to support
                    them in a manner that enables them to keep writing!
                </p>

            </div>
        </div>
    </div>
</section>

<?php require_once('footer.php'); ?>
