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
    <?php
        $nav_dir = $_SERVER['DOCUMENT_ROOT']."/footer/footer.php";
        include_once($nav_dir);
    ?>
    <script src='/home.js'></script>
    <script src='/nav/nav.js'></script>
</body>
</html>