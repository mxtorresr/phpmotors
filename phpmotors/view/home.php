<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
        <link rel="stylesheet" href="css/motorstyle.css">
        <title>Home</title>
    </head> 

    <body>
            <header>
                <div class="container">
                    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/header.php'; ?>
                </div>
            </header>

            <nav>
                <?php //require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/navigation.php'; 
                echo $navList; ?>
            </nav>

            <main>
               <h1>Welcome to PHP Motors!</h1>
               <div class="uppercontent">
                    <p class="cardescription"> <b>DMC Delorean</b><br>
                        3 Cup holders<br>
                        Superman doors<br>
                        Fuzzy dice!<br>
                    </p>
                    <div class="first">
                    <img class="delorean" src="/phpmotors/images/delorean.jpg" alt="Delorean">
                    </div>
                    <div class="second">
                    <img class="owntoday" src="images/site/own_today.png" alt="owntoday">
                    </div>
                </div>
                <div class="flexcont">
                    <!-- <div class="container"> -->
                    <div class="reviewscontainer">
                        <p>DMC Delorean Reviews</p>
                        <ul>
                            <li>"So fast its almost like traveling in time." (4/5)</li>
                            <li>"Coolest ride on the road" (4/5)</li>
                            <li>"I'm feeling Marty McFly!." (5/5)</li>
                            <li>"The most futuristic ride of our day." (4.5/5)</li>
                            <li>"80's livin and I love it." (5/5)</li>
                        </ul>
                    </div>
                    <!-- </div> -->
                    <!-- <div class="container"> -->
                    <div class="upgradescontainer">
                        <p>Delorean Upgrades</p>
                        <div class="grid">
                            <figure>
                                <div class="icon">
                                <img class="item" src="/phpmotors/images/upgrades/flux-cap.png" alt="flux_capacitator"><br>
                                </div>
                                <div class="caption">
                                <p>Flux Capacitor</p>
                                </div>
                            </figure>
                            <figure>
                                <div class="icon">
                                <img class="item" src="/phpmotors/images/upgrades/flame.jpg" alt="flame"><br>
                                </div>
                                <div class="caption">
                                <p>Flame Decals</p>
                                </div>
                            </figure>
                       </div>
                       <div class="grid">
                            <figure>
                                <div class="icon">
                                <img class="item" src="/phpmotors/images/upgrades/bumper_sticker.jpg" alt="bumper_sticker"><br>
                                </div>
                                <div class="caption">
                                <p>Bumper Stickers</p>
                                </div>
                            </figure>
                            <figure>
                                <div class="icon">
                                <img class="item" src="/phpmotors/images/upgrades/hub-cap.jpg" alt="hub_caps"><br>
                                </div>
                                <div class="caption">
                                <p>Hub Caps</p>
                                </div>
                            </figure>
                        </div>
                    </div>
                    <!-- </div>  -->
                </div>    
            </main>

            <footer>
            <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/footer.php'; ?>
            </footer>
    </body>
</html>