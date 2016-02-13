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
    <div id='top' class='height-half' style='background-image: url(/img_src/about_cover.jpg)'>

        <?php
            $navbar = $_SERVER['DOCUMENT_ROOT']."/navbar/navbar.php";
            include_once($navbar);
        ?>

        <p>
            <span class='headline-size'>About Us</span>
            <br><br>
            <span class='title-size'>Why we started, and who we are.</span>
        </p>
    </div>

    <div class='section-container first-sec'>
        <div class='section-title title-size'>About Us</div>
        <p class='accent-size' style='color: #26361B'>In November 2013, a man's charcoal fire burned out of control, starting a massive forest fire on the Eastern coast of Madagascar. The fire ravaged the man's land as well as over 20 acres of nearby rain forest of Parc Ivoloina.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin condimentum erat et urna aliquam, ac placerat turpis tincidunt. Nunc risus ipsum, ullamcorper ut nunc venenatis, sodales elementum enim. Sed volutpat convallis mauris, eu lacinia sapien mollis vitae. Curabitur tempor ultrices lectus, eget tincidunt erat imperdiet quis. Curabitur at tempus quam, vitae semper odio. Praesent vulputate hendrerit porta. Proin ac facilisis metus, porta egestas sem.</p>
        <p>Maecenas nibh turpis, molestie non enim vel, iaculis vehicula quam. Aliquam dapibus hendrerit placerat. Vivamus commodo fringilla euismod. Fusce id lacus ac dolor finibus elementum. Etiam scelerisque faucibus maximus. Ut non faucibus nibh. Phasellus a vulputate quam, in consectetur turpis. Ut lacinia viverra imperdiet. Proin iaculis elit est, eget vestibulum justo rhoncus et. Nullam imperdiet, diam condimentum convallis venenatis, eros nibh blandit nibh, sit amet blandit sapien dolor sit amet sapien. Donec eleifend elit et nisl maximus venenatis. Pellentesque consectetur feugiat erat. Suspendisse pharetra odio ornare odio dapibus, eu bibendum magna viverra. Vestibulum congue mattis malesuada.</p>
    </div>

    <div class='section-container last-sec'>
        <div class='section-title title-size'>Who We Are</div>
        <div class='pad-below-3em'>
            <a href='#'><div class='circle-button triptych'>
                <img src='/icon_src/everyman.png'/>
            </div></a>
            <a href='#'><div class='circle-button triptych'>
                <img src='/icon_src/everyman.png'/>
            </div></a>
            <a href='#'><div class='circle-button triptych'>
                <img src='/icon_src/everyman.png'/>
            </div></a>
        </div>
        <div class='pad-below-3em'>
            <a href='#'><div class='circle-button triptych'>
                <img src='/icon_src/everyman.png'/>
            </div></a>
            <a href='#'><div class='circle-button triptych'>
                <img src='/icon_src/everyman.png'/>
            </div></a>
            <a href='#'><div class='circle-button triptych'>
                <img src='/icon_src/everyman.png'/>
            </div></a>
        </div>
        <div>
            <a href='#'><div class='circle-button triptych'>
                <img src='/icon_src/everyman.png'/>
            </div></a>
            <a href='#'><div class='circle-button triptych'>
                <img src='/icon_src/everyman.png'/>
            </div></a>
            <a href='#'><div class='circle-button triptych'>
                <img src='/icon_src/everyman.png'/>
            </div></a>
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



