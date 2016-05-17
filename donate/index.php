<!DOCTYPE HTML>
<html lang='en-us'>

<head>

    <?php
        $preamble = $_SERVER['DOCUMENT_ROOT']."/public/public_preamble.php";
        include_once($preamble);
    ?>

    <meta name='description' content='Official website for Green Again.'>
    <link rel='stylesheet' type='text/css' href='donate.css'>
    <title>Green Again | Donate</title>
</head>

<body>
    <?php
        $navbar = $_SERVER['DOCUMENT_ROOT']."/navbar/navbar.php";
        include_once($navbar);
    ?>
    <div id='top' class='height-half' style='background-image: url(/img_src/work_cover.jpg)'>
        <p style='top: 60%'>
            <span class='headline-size'>Donate</span>
            <br><br>
        </p>
    </div>

     <div class='section-container first-sec'>
        <div class='section-title title-size'>Why Donate</div>
        <p>Donate to Save the Diversity and Homes of So Many</p>
        <p>Donate for the environment. Green Again will purchase burnt land with donated money and replant a rainforest reserve area, surrounding forest plots to act as a buffer, and an exterior buffer zone for local families to garden and plant their rice fields. This wide scale reforestation program is a solution to carbon pollution, climate change, and protecting biodiversity.</p>
        <p>Donate for the people. Green Again works hard for the east coast greater region, where Parc Ivoloina is one of the most visited forest reserves. We work for the city of Tamatave, where Ivoloina’s collaboration with the University provides each class of students with a hands-on opportunity to learn in their eco-studies. We work for Ambanivato, the village closest to the park, where our project offers a wonderful chance for employment.</p>
    </div>


    <div class='green-back section-container' id='donation-form'>
        <!-- <div class='section-title title-size'>Highlights</div> -->
        <form> <!-- action="" -->
            <fieldset class='fieldset'>
                <legend class='donate-section-title'>Amount</legend>
                <p> Please select your gift amount</p>
                <input type="radio" name="amount" value="twenty-five"> $25  
                <input type="radio" name="amount" value="fifty"> $50 
                <input type="radio" name="amount" value="hundred"> $100 
                <input type="radio" name="amount" value="two-hundred-fifty"> $250 
            </fieldset>

            <fieldset class='fieldset' id='info'>
                <legend class='donate-section-title'>Your Information</legend>
                First Name
                <input type="text" name="firstname"><br>
                Last Name
                <input type="text" name="lastname"><br>
                Email Address
                <input type="text" name="email"><br>
            </fieldset>

            <fieldset class='fieldset' id='payment'>
                <legend class='donate-section-title'>Payment Information</legend>
                Payment method <br>
                <input type="radio" name="method" value="creditcard"> Credit card<br>
                
                Credit card number
                <input type="text" name="card"><br>
                Expiration date
                <select name="Month">
                  <option value="January">January</option>
                  <option value="February">February</option>
                  <option value="March">March</option>
                  <option value="April">April</option>
                  <option value="May">May</option>
                  <option value="June">June</option>
                  <option value="July">July</option>
                  <option value="August">August</option>
                  <option value="September">September</option>
                  <option value="October">October</option>
                  <option value="November">November</option>
                  <option value="December">December</option>
                </select>
                <select name="Year">
                  <option value="2016">2016</option>
                  <option value="2017">2017</option>
                  <option value="2018">2018</option>
                  <option value="2019">2019</option>
                  <option value="2020">2020</option>
                  <option value="2021">2021</option>
                  <option value="2022">2022</option>
                  <option value="2023">2023</option>
                </select>
                <br>

                CVV:
                <input type="text" name="cvv"><br>

            </fieldset>

            <input type="submit" value="Submit">
        </form>
    </div>

    <?php
        $footer = $_SERVER['DOCUMENT_ROOT']."/footer/footer.php";
        include_once($footer);
        $scripts = $_SERVER['DOCUMENT_ROOT']."/public/public_scripts.php";
        include_once($scripts);
    ?>
    
    <script src='donate.js'></script>

</body>
</html>