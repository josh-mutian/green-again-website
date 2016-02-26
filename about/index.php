<!DOCTYPE HTML>
<html lang='en-us'>

<head>

    <?php
        $preamble = $_SERVER['DOCUMENT_ROOT']."/public/public_preamble.php";
        include_once($preamble);
    ?>

    <meta name='description' content='Official website for Green Again.'>
    <link rel='stylesheet' type='text/css' href='about.css'>
    <title>Green Again | About</title>
</head>

<body>
    <?php
        $navbar = $_SERVER['DOCUMENT_ROOT']."/navbar/navbar.php";
        include_once($navbar);
    ?>
    <div id='top' class='height-half' style='background-image: url(/img_src/about_cover.jpg)'>
        <p style='top: 60%'>
            <span class='headline-size'>About Us</span>
            <br><br>
            <span class='title-size'>Why we started, and who we are.</span>
        </p>
    </div>

    <div class='section-container first-sec'>
        <p class='accent-size' style='color: #5E8F3A'>In November 2013, a man's charcoal fire burned out of control, starting a massive forest fire on the Eastern coast of Madagascar. The fire ravaged the man's land as well as over 20 acres of nearby rain forest of Parc Ivoloina, one of the most widely visited forest reserves in Africa.</p>
        <p>Green Again formed in response to this tragedy.  With support from park management and academic advisers at the University of Tamatave, Green Again is working to restore the burned areas in Parc Ivoloina by 2019.</p>
        <p>Green Again is committed to a sustainable approach to ecological restoration that develops ongoing support and involvement among local residents.  Our goal is to include the Malagasy people in the restoration work in a way that allows them to improve their standard of living while restoring barren land back into primary forest reserves.</p>
    </div>

    <div class='section-container'>
        <div class='section-title title-size'>Who We Are</div>
        <div class='pad-below-3em'>
            <a href='#'><div class='man-button triptych'>
                <img src='/icon_src/everyman.png'/>
            </div></a>

            <a href='#'><div class='man-button triptych'>
                <img src='/icon_src/everyman.png'/>
            </div></a>


            <a href='#'><div class='man-button triptych'>
                <img src='/icon_src/everyman.png'/>
            </div></a>
        </div>
    </div>

    <div class='section-container last-sec'>
        <div class='section-title title-size'>How You Can Get Involved</div>
        <div class='pad-below-3em'>
            <p class='section-title subtitle-size'>Spread the word</p>
            <a href='#'><div class='circle-button triptych'>
                <img src='/icon_src/fb_logo.png'/>
            </div></a>
            <a href='#'><div class='circle-button triptych'>
                <img src='/icon_src/twitter_logo.png'/>
            </div></a>
            <a href='#'><div class='circle-button triptych'>
                <img src='/icon_src/instg_logo.png'/>
            </div></a>
        </div>
        <div>
            <p class='section-title subtitle-size'>Get in touch: we'd love to hear from you</p>
            <form>
                <input name='email' placeholder='Email' class='input-email'>
                <div class='button' id='button-join-us'>JOIN US</div>
            </form>
        </div>
    </div>

    <?php
        $footer = $_SERVER['DOCUMENT_ROOT']."/footer/footer.php";
        include_once($footer);
        $scripts = $_SERVER['DOCUMENT_ROOT']."/public/public_scripts.php";
        include_once($scripts);
    ?>
    
    <script src='/about/about.js'></script>
    
    <!-- Counter up API: https://github.com/bfintal/Counter-Up -->
    <script src="/scripts/waypoints.min.js"></script>
    <script src="/scripts/jquery.counterup.min.js"></script>
</body>
</html>



