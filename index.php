<?php
$pagetitle = "The Worship Files - Worship Songs Chords and Lyrics";
$pagedesc = "Worship song chords and lyrics formatted for OnSong and Planning Center Online. No bells and whistles, just easy copy/paste for those who need it.";
$logosrc = "img/the-worship-files-logo-250-white.png";
require_once('header.php');
?>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Welcome To</div>
                <h1 class="intro-heading">The Worship Files</h1>
                <a href="song-list" class="btn btn-xl">Start Browsing Songs</a>
            </div>
        </div>
    </header>

    <!-- Songs Section -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">About</h2>
                    <h3 class="section-subheading text-muted">Worship Chords and Lyrics for OnSong &amp; Planning Center Online</h3>
                </div>
            </div>
            <div class="row">
            	<div class="col-lg-12">
                	<p>I am always looking for great tools to aid in the planning and leading of worship. The OnSong app for iPad
                    and iPhone and Planning Center Online are two of essential tools in my arsenal (and I should also mention the iKlip).
                    As such, I am constantly loading up chords and lyrics to worship songs in each program. I've found that the formatting
                    can be exactly the same for both, which is nice, but there’s a problem – every chord and lyric repository on the internet!
                    Don't get me wrong, they’re really great tools – they’re just a little too great. All of the features like hyperlinks
                    that show chords charts when you hover, auto-scrollers, key changers, etc. all make for a web-fun but iPad un-friendly experience.
                    It's even quite cumbersome on the computer since every copy/paste ends up having odd spacing or crazy hyperlinks everywhere.</p>

                    <p>Enter <em>The Worship Files</em>. This is an old domain name that I've resurrected for the purpose of proving OnSong and
                    Planning Center Online friendly formats. All of the songs here are actually uploaded straight from my OnSong app and there
                    are some scripts that display them here on the site automatically. Feel free <a href="song-list">browse the songs</a> and copy/paste into your OnSong, PCO or other
                    app. I hope the site is helpful!</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Resources Section -->
    <section id="resources" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Resources</h2>
                    <h3 class="section-subheading text-muted">Some great tools for planning and leading worship</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <img class="img-responsive img-centered img-resources" src="img/onsong-app-for-worship-chords-lyrics-ios7.png" alt="chords and lyrics for onsong ios app">
                    <h4 class="service-heading">OnSong App for iOS</h4>
                    <p class="text-muted">OnSong is a terrific app for iOS that replaces the mess of paper and binders with performance-ready, interactive, digital chord charts on your mobile device.</p>
                    <a href="http://onsongapp.com/" target="_blank" class="btn btn-success">read more and download</a>
                </div>
                <div class="col-md-4">
                    <img class="img-responsive img-centered img-resources" src="img/planning-center-services-app-chords-lyrics.png" alt="worship chords for planning center format">
                    <h4 class="service-heading">Planning Center Online</h4>
                    <p class="text-muted">Planning Center Online is a cloud application to help schedule your teams, manage your music, and revolutionize the way you plan your worship services.</p>
                    <a href="http://get.planningcenteronline.com/" target="_blank" class="btn btn-success">learn more and sign up</a>
                </div>
                <div class="col-md-4">
                    <img class="img-responsive img-centered img-resources" src="img/loop-community-for-worship.png" alt="loop community for worship leaders">
                    <h4 class="service-heading">Loop Community</h4>
                    <p class="text-muted">The Loop Community is a massive repository of premium loop tracks for live worship. Download expertly made loops or get trained on how to make your own.</p>
                    <a href="http://loopcommunity.com/" target="_blank" class="btn btn-success">browse, listen, learn</a>
                </div>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-offset-1 col-lg-10 text-center">
                    <h2 class="section-heading">Contact Me</h2>
                    <h3 class="section-subheading text-muted">Enter your info below and I'll get back to you as soon as possible. I don't
                    want to deal with file uploads and such, so if you have a song you want to submit, upload it somewhere and paste the
                    link in the message.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

<?php require_once('footer.php'); ?>
