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
    <?php
        $navbar = $_SERVER['DOCUMENT_ROOT']."/navbar/navbar.php";
        include_once($navbar);
    ?>
    <div id='top' class='height-half' style='background-image: url(/img_src/work_cover.jpg)'>
        <p style='top: 60%'>
            <span class='headline-size'>Our Work</span>
            <br><br>
            <span class='title-size'>Our past, current, and future projects.</span>
        </p>
    </div>

    <div class='section-container first-sec'>
        <p class='accent-size' style='color: #5E8F3A'>Ecological Restoration</p>
        <p>The purpose of all Green Again’s projects and work is the “ecological restoration” of rainforest ecosystems in Madagascar -- not simply replanting or regrowing these forests. “Ecological restoration is the process of assisting the recovery of an ecosystem that has been degraded, damaged, or destroyed.” -- definition from the “Society for Ecological Restoration”</p>        
        <p>Ecological restoration is a long term commitment to the land. The goal is not just to replant areas of the forest, but to create a self sustaining environment and restore the original specifies of floral and fauna. To read about the nine attributes listed below provide a basis for determining when restoration has been accomplished, visit <a href="http://www.ser.org/resources/resources-detail-view/ser-international-primer-on-ecological-restoration">SER</a>.</p>
        <p class='accent-size' style='color: #5E8F3A'>Current Project</p>
        <p>Parc Ivoloina is small but highly visited. It is 700 acres wide with 15,000 visitors annually (70% of which are malagasy).</p>
        <p>Data: We enter our data on-site so that we can immediately capture the scientific data in our restoration process. We have feedback loops to change M.O. on demand and provide real-time transparency for our stakeholders.</p>
        <p>We tested 5 different planting frameworks, 4 germination experiments, and several planting treatments. We planted 38 pioneer species and the trees are growing fast. There is a slight canopy already forming and several exotic species such as the eucalyptus, acacia, and guava are thriving.</p>
        <p class='accent-size' style='color: #5E8F3A'> A Focus on Sustainability</p>
        <p>A central challenge of our work is to ensure that restored rainforest areas remain protected for the long term.  Green Again uses a three-ring approach for this:</p>
        <p>1. Restore a centrally located rainforest reserve which can be insulated and protected by surrounding plots</p>
        <p>2. Replant surrounding forest plots as a buffer to be sustainably logged by families in the organization as their primary source of income</p>
        <p>3. Establish another buffering zone exterior to that for gardening and rice fields</p>
    </div>
    
    <div class='section-container last-sec'>
        <div class='section-title title-size'>Highlights</div>
        <p>3 x 3 grid of static images goes here</p>
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



