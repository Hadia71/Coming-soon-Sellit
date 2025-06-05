<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sellit/HostARental</title>
    <link rel="stylesheet" href="hostARental.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body>
    <header class="HAR">
        <div class="logo"><h1>Sellit</h1></div>
        
        <div class="HAR-rightcontainer">
            <div class="tagline"><p>Ready to Rent it?</p></div>
            <a href="../rentalSetup/rentalSetup.html" style="text-decoration: none;">
            <button class="Button-Rent-it" id="rentIt"><h4>Rent Setup</h4></button>
        </div>
    </header>
    <section class="HAR-upper">
        <a href="../home.html" style="text-decoration: none;"><button class="Button-back-home" id="buttonBackHome"><h4>Home</h4></button></a>
        <div class="rent-it-title">Rent your Property</div>
        <div class="rent-it-titlesmall">and Earn</div>
        <p class="general-paragraph-HAR">By setting up your property on listing you can explore new opportunities to earn</p>
    </section>
    <section class="maps">
        <form method="POST" action="hostARental.php" class="search-bar" >
            <div class="search-section">
                <p>
                    <label for="where">Where</label>
                    <input class="Where" type="text" name="address" placeholder="Enter address">
                </p>
                <input class="searchButton" type="submit" name="submit_address" value="Search">
            </div>

        </form>  
        <?php
        if (isset($_POST["submit_address"])) {
            $address = $_POST["address"];
            ?>
            <div class="map-container"><iframe width="600" height="450" src="https://maps.google.com/maps?q=<?php echo $address; ?>&output=embed"></iframe></div>
            
            <?php
        }
        ?>

    </section>

    <section class="tutorial-section">
        <h3 class="title">It's easy to get started on Sellit</h3>
        <p class="title-para">Watch the tutorial to get step-by-step instructions on how to set up your place for listing.</p>
        <video class="tutorial" width="360" height="360" controls autoplay loop muted>
            <source src="tutorial.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="line-below-before"></div>
    </section>
    <section class="hosting-guide">
        <h4 class="steps">Get started in 3 simple steps</h4>
        <div class="place-listing">
            <div class="content-container">
                <div class="text">
                    <h5>Tell us about your place</h5>
                    <p>Share basic info about your place to help users understand better.</p>
                </div>
                <img src="list.png" alt="List Image" width="100" height="100">
            </div>
            <div class="line-below"></div>
        </div>
        <div class="place-standout">
            <div class="content-container">
                <div class="text">
                    <h5>Make it standout</h5>
                    <p>Name your place, describe it, and add some cool photos.</p>
                </div>
                <img src="stanout.png" alt="Stand Out Image" width="100" height="100">
            </div>
            <div class="line-below"></div>
        </div>
        <div class="place-publish">
            <div class="content-container">
                <div class="text">
                    <h5>Finish up and Publish</h5>
                    <p>Choose a price, verify, and publish your listing.</p>
                </div>
                <img src="publish.png" alt="Publish Image" width="100" height="100">
            </div>
            <div class="line-below"></div>
        </div>
    </section>
    
    <script src="hostARental.js"></script>
</body>
</html>





