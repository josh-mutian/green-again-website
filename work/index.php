<!DOCTYPE HTML>
<html lang='en-us'>

<head>

    <?php
        $preamble = $_SERVER['DOCUMENT_ROOT']."/public/public_preamble.php";
        include_once($preamble);
    ?>

    <meta name='description' content='Official website for Green Again.'>
    <link rel='stylesheet' type='text/css' href='about.css'>
    <title>Green Again | Our Work</title>
</head>

<body>
    <div id='top' class='height-half' style='background-image: url(/img_src/work_cover.jpg)'>

        <?php
            $navbar = $_SERVER['DOCUMENT_ROOT']."/navbar/navbar.php";
            include_once($navbar);
        ?>

        <p>
            <span class='headline-size'>Our Work</span>
            <br><br>
            <span class='title-size'>Our past, current, and future projects.</span>
        </p>
    </div>

    <div class='section-container first-sec'>
        <p class='accent-size' style='color: #5E8F3A'>Green Again uses a three-ring bullseye approach.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin condimentum erat et urna aliquam, ac placerat turpis tincidunt. Nunc risus ipsum, ullamcorper ut nunc venenatis, sodales elementum enim. Sed volutpat convallis mauris, eu lacinia sapien mollis vitae. Curabitur tempor ultrices lectus, eget tincidunt erat imperdiet quis. Curabitur at tempus quam, vitae semper odio. Praesent vulputate hendrerit porta. Proin ac facilisis metus, porta egestas sem.</p>
        <p>Maecenas nibh turpis, molestie non enim vel, iaculis vehicula quam. Aliquam dapibus hendrerit placerat. Vivamus commodo fringilla euismod. Fusce id lacus ac dolor finibus elementum. Etiam scelerisque faucibus maximus. Ut non faucibus nibh. Phasellus a vulputate quam, in consectetur turpis. Ut lacinia viverra imperdiet. Proin iaculis elit est, eget vestibulum justo rhoncus et. Nullam imperdiet, diam condimentum convallis venenatis, eros nibh blandit nibh, sit amet blandit sapien dolor sit amet sapien. Donec eleifend elit et nisl maximus venenatis. Pellentesque consectetur feugiat erat. Suspendisse pharetra odio ornare odio dapibus, eu bibendum magna viverra. Vestibulum congue mattis malesuada.</p>
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



