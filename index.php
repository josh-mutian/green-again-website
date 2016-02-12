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
    <div id='top' class='height-full'>

        <?php
            $navbar = $_SERVER['DOCUMENT_ROOT']."/navbar/navbar.php";
            include_once($navbar);
        ?>

        <p>Restoring Forest Habitats.</p>
        <div id='top-join-us'>
            <form>
                <input name='email' placeholder='Email' class='input-email'>
                <div class='button' id='button-join-us'>JOIN US</div>
            </form>
        </div>
    </div>

    <div class='section-container'>
        <p class='section-title'>The Problem</p>
        <div class='stat-tryptic'>
            <p class='stat-number'><span class='counter'>3</span>%</p>
            <p class='stat-desc'>of the world's biodiversity is in Madagascar</p>
        </div>
        <div class='stat-tryptic'>
            <p class='stat-number'><span class='counter'>3</span>%</p>
            <p class='stat-desc'>of the world's biodiversity is in Madagascar</p>
        </div>
        <div class='stat-tryptic'>
            <p class='stat-number'><span class='counter'>3</span>%</p>
            <p class='stat-desc'>of the world's biodiversity is in Madagascar</p>
        </div>
    </div>

    <div class='green-back, section-container' id='mission-statement'>
        <p class='section-title'>Our Mission</p>
        <p class='section-slogan'>We seek to replant an area of Madagascar's rain forest burned down by an unnatural forest fire as well as encourage cultural understanding through a real world demonstration of how to live sustainably.</p>
    </div>

    <div class='section-container'>
        <p class='section-title'>Our Impact</p>
        <div class='stat-tryptic tryptic'>
            <p class='stat-number'><span class='counter'>3103</span></p>
            <p class='stat-desc'>seedlings 1 year old</p>
        </div>
        <div class='stat-tryptic tryptic'>
            <p class='stat-number'><span class='counter'>1000</span>+</p>
            <p class='stat-desc'>germinations ready for pot</p>
        </div>
        <div class='stat-tryptic tryptic'>
            <p class='stat-number'><span class='counter'>1000</span>+</p>
            <p class='stat-desc'>1 year old in "wild nursery" on burned land ready for planting</p>
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



