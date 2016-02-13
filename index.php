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
            <br><br>
            <span class='title-size'>Restoring Forest Habitats.</span>
        </p>
        <div id='top-join-us'>
            <form>
                <input name='email' placeholder='Email' class='input-email'>
                <div class='button' id='button-join-us'>JOIN US</div>
            </form>
        </div>
    </div>

    <div class='section-container first-sec'>
        <div class='section-title title-size'>Why Madagascar</div>
        <div class='stat-triptych triptych'>
            <p class='stat-number'><span class='counter'>12,000</span>+</p>
            <p class='stat-desc'>of Madagascar's plant species are found nowhere else in the world</p>
        </div>
        <div class='stat-triptych triptych'>
            <p class='stat-number'>~<span class='counter'>90</span>%</p>
            <p class='stat-desc'>of all plant and animal species found in Madagascar are endemic</p>
        </div>
        <div class='stat-triptych triptych'>
            <p class='stat-number'><span class='counter'>90</span>%</p>
            <p class='stat-desc'>of Madagascar's original forest lost in past 2,350 years</p>
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
                <p class='stat-number'><span class='counter'>3103</span></p>
                <p class='stat-desc'>seedlings 1 year old</p>
            </div>
            <div class='stat-triptych triptych'>
                <p class='stat-number'><span class='counter'>1000</span>+</p>
                <p class='stat-desc'>germinations ready for pot</p>
            </div>
            <div class='stat-triptych triptych'>
                <p class='stat-number'><span class='counter'>1000</span>+</p>
                <p class='stat-desc'>1 year old in "wild nursery" on burned land ready for planting</p>
            </div>
        </div>
        <a href='https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=SJQDUHJ9MWVRS&lc=US&item_name=Green%20Again%20Madagascar&item_number=Ivoloina%20Park%20Project&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted'><div class='button vertical-center'>DONATE</div></a>
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
    
    <script src='/home.js'></script>
    
    <!-- Counter up API: https://github.com/bfintal/Counter-Up -->
    <script src="/scripts/waypoints.min.js"></script>
    <script src="/scripts/jquery.counterup.min.js"></script>
</body>
</html>



