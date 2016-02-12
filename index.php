<!DOCTYPE HTML>
<html lang='en-us'>

<head>
    <meta charset='UTF-8'>
    <meta name='description' content='Official website for Green Again.'>
    <link rel='stylesheet' type='text/css' href='home.css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600|Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>
    <script src='/jquery-2.2.0.min.js'></script>
    <title>Green Again | Home</title>
</head>

<body>
    <div id='top' class='height-full'>
        <?php
            $nav_dir = $_SERVER['DOCUMENT_ROOT']."/nav/nav.php";
            include_once($nav_dir);
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
            <p class='stat-number'>3%</p>
            <p class='stat-desc'>of the world's biodiversity is in Madagascar</p>
        </div>
        <div class='stat-tryptic'>
            <p class='stat-number'>3%</p>
            <p class='stat-desc'>of the world's biodiversity is in Madagascar</p>
        </div>
        <div class='stat-tryptic'>
            <p class='stat-number'>3%</p>
            <p class='stat-desc'>of the world's biodiversity is in Madagascar</p>
        </div>
    </div>

    <div class='green-back, section-container' id='mission-statement'>
        <p class='section-title'>Our Mission</p>
        <p class='section-slogan'>We seek to replant an area of Madagascar's rainforest burned down by an unnatural forest fire as well as encourage cultural understanding through a real world demonstration of how to live sustainably</p>
    </div>

    <div class='section-container'>
        <p class='section-title'>Our Impact</p>
        <div class='stat-tryptic'>
            <p class='stat-number'>3103</p>
            <p class='stat-desc'>seedlings 1 year old</p>
        </div>
        <div class='stat-tryptic'>
            <p class='stat-number'>1000+</p>
            <p class='stat-desc'>germinations ready for pot</p>
        </div>
        <div class='stat-tryptic'>
            <p class='stat-number'>4000+</p>
            <p class='stat-desc'>1 year old in "wild nursery" on burned land ready for planting</p>
        </div>
    </div>

    <?php
        $nav_dir = $_SERVER['DOCUMENT_ROOT']."/footer/footer.php";
        include_once($nav_dir);
    ?>
    <script src='/home.js'></script>
    <script src='/nav/nav.js'></script>
</body>
</html>



