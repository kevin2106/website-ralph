<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ralphouse</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Import CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />   
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="css/slick.css"/> 
</head>
<body onload="loadFunction()">
    <?php include("html/navbar.html"); ?>

    <section id="projects"> 
    <div class="jumbotron text-center">
        <div class="container">
            <div class="contents">
                <h1 class="jumbotron-heading">Portfolio</h1>
                <a class="btn btn-primary my-2" onClick="projectsType('PF')">Portfolio</a>
                <a class="btn btn-secondary my-2" onClick="projectsType('FT')">Freetime</a>


                <span id="projects-info"><br>Hier vind je een aantal recente projecten waaraan ik heb gewerkt. Je kunt de projecten bekijken in de casestudies.
                Bekijk ook mijn 'Freetime' werk om te zien waar ik in mijn vrije tijd mee bezig ben!</span>

                
                <div id="data">

                </div>
                </div>
            </div>
        </div>
    </div>
    
    </section>
        
    <section id="about">
        <div class="container">
            <div class="contents">
                <div class="about-title text-center">
                    <h1>About</h1>
                </div>
                <div class="about-header">
                    <h2>Hoi, mijn naam is Ralph.</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                        Morbi nulla arcu, vehicula ac sem eu, porta pharetra erat.
                        <br>
                        <br>
                        Nunc consequat eros sit amet vestibulum feugiat. Nullam porta,
                        nisi vitae porttitor dapibus, libero libero tincidunt leo,
                        et facilisis ipsum turpis id sapien. Vestibulum ornare dapibus maximus.
                        Mauris sodales, nunc sit amet interdum tincidunt,
                        lorem nunc tincidunt ante, sed facilisis nibh orci eget nisi.
                        Etiam sed nisl est. Integer sem mauris, posuere vel aliquet ut,
                        tempus eu nunc. Aliquam turpis risus, varius placerat massa in, 
                        pretium tempus nisl. Nunc a pulvinar eros, facilisis condimentum urna.
                    </p>
                </div>
                <div class="about-tools">
                    <h2>Tools</h2>
                </div>
                <div class="about-history">
                    <h2>Geschiedenis</h2>
                </div>
                <div class="about-freetime">
                    <h2>Vrije tijd</h2>
                </div>
                <div class="about-findme">
                    <span>Vind me op: </span>
                </div>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <div class="contents">
                <div class="contact-title text-center">
                    <h1>Contact</h1>
                </div>
                <div class="contact-info">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                        Morbi nulla arcu, vehicula ac sem eu, porta pharetra erat.
                    </p>
                </div>
                <div class="contact-form">
                    <form action="form.php" method="post">
                    <input type="text" name="name">
                    <input type="text" name="email">
                    <input type="text" name="message">
                    <input type="submit" value="verzenden">
                    </form> 
                </div>
            </div>
        </div>
    </section>
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/bootstrap.js"> </script>
    <script src="js/scripts.js"></script>
    <script src="js/slick.min.js"></script>
</body>
</html>