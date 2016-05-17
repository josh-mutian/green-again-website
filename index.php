<!DOCTYPE HTML>
<html lang='en-us'>

<head>

    <?php
        $preamble = $_SERVER['DOCUMENT_ROOT']."/public/public_preamble.php";
        include_once($preamble);
    ?>

    <meta name='description' content='Official website for Green Again.'>
    <link rel='stylesheet' type='text/css' href='home.css'>
    <title>Green Again | Home</title>
</head>

<body>
    <div id='top' class='height-full' style='background-image: url(/img_src/home_cover.jpg)'>

        <?php
            $navbar = $_SERVER['DOCUMENT_ROOT']."/navbar/navbar.php";
            include_once($navbar);
        ?>

        <p>
            <span class='headline-size'>Green Again: Madagascar</span>
            <br><br><br><br>
            <span class='title-size'>Restoring Forest Habitats</span>
        </p>
        <div id='top-join-us'>
            <a href='http://eepurl.com/bR6YoL' target="_blank"><div class='button' id='button-join-us'>JOIN US</div></a>
        </div>
    </div>

    <div class='section-container first-sec'>
        <div class='section-title title-size'>Why Madagascar</div>
        <div class='stat-triptych triptych'>
            <p class='stat-number'><span class='counter'>3</span>%</p>
            <p class='stat-desc'>of the world’s entire biodiversity is found only in Madagascar</p>
        </div>
        <div class='stat-triptych triptych'>
            <p class='stat-number'><span class='counter'>87</span>%</p>
            <p class='stat-desc'>of Madagascar's rainforest have been lost in the last 100 years</p>
        </div>
        <div class='stat-triptych triptych'>
            <p class='stat-number'><span class='counter'>11</span>%</p>
            <p class='stat-desc'>of the original rainforests are all that currently remain</p>
        </div>
    </div>

    <div class='green-back section-container' id='mission-statement'>
        <div class='section-title title-size'>Our Mission</div>
        <div class='accent-size align-left'>We seek to replant an area of Madagascar's rain forest burned down by an unnatural forest fire as well as encourage cultural understanding through a real world demonstration of how to live sustainably.</div>
    </div>

    <div class='section-container'>
        <div class='section-title title-size'>Our Impact</div>
        <div class='pad-below-3em'>
            <div class='stat-triptych triptych'>
                <p class='stat-number'><span class='counter'>12,637</span></p>
                <p class='stat-desc'>trees planted in restoration areas</p>
            </div>
            <div class='stat-triptych triptych'>
                <p class='stat-number'><span class='counter'>3,103</span></p>
                <p class='stat-desc'>one-year-old seedlings growing</p>
            </div>
            <div class='stat-triptych triptych'>
                <p class='stat-number'><span class='counter'>4,536</span></p>
                <p class='stat-desc'>wild-nursery trees ready for planting</p>
            </div>
        </div>
        <!-- <a href='https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=SJQDUHJ9MWVRS&lc=US&item_name=Green%20Again%20Madagascar&item_number=Ivoloina%20Park%20Project&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted'><div class='button vertical-center' target="_blank">DONATE</div></a> -->
        <a href='/donate'><div class='button vertical-center' target="_blank">DONATE</div></a>

    </div>

    <div class='green-back section-container' id='learn-more'>
        <div class='section-title title-size'>Learn More</div>
        <a href='/work'><div class='home-link triptyc'>
            <img src='/img_src/learn_more_project.jpg'/>
            <p>Our Work</p>
        </div></a>
        <div class='home-link triptyc'>
            <img src='/img_src/learn_more_data.jpg'/>
            <p>Data (coming soon)</p>
        </div>
        <a href='/about'><div class='home-link triptyc'>
            <img src='/img_src/learn_more_about.jpg'/>
            <p>About</p>
        </div></a>
    </div>

    <div class='section-container last-sec'>
        <div class='section-title title-size'>How You Can Get Involved</div>
        <div class='pad-below-3em'>
            <p class='section-title subtitle-size'>Spread the word</p>
            <a href='https://www.facebook.com/GreenAgainMadagascar' target="_blank"><div class='circle-button triptych'>
                <img src='/icon_src/fb_logo.png'/>
            </div></a>
            <div class='circle-button triptych'>
                <img src='/icon_src/twitter_logo.png'/>
            </div>
            <div class='circle-button triptych'>
                <img src='/icon_src/instg_logo.png'/>
            </div>
        </div>
        <div>
            <p class='section-title subtitle-size'>Get in touch: we'd love to hear from you</p>
            <a href='http://eepurl.com/bR6YoL' target="_blank"><div class='button' id='button-join-us'>JOIN US</div></a>
        </div>
    </div>

    <?php
        $footer = $_SERVER['DOCUMENT_ROOT']."/footer/footer.php";
        include_once($footer);
        $scripts = $_SERVER['DOCUMENT_ROOT']."/public/public_scripts.php";
        include_once($scripts);
    ?>
    
    <script src='/home.js'></script>
    
    <!-- Counter up API: https://github.com/bfintal/Counter-Up -->
    <script src="/scripts/waypoints.min.js"></script>
    <script src="/scripts/jquery.counterup.min.js"></script>
</body>
</html>



