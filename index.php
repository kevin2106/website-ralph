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
</head>
<body onload="loadFunction()">
    <?php include("html/navbar.html"); ?>

    <section id="projects"> 
    <div class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">Portfolio</h1>
            <a class="btn btn-primary my-2" onClick="projectsType('PF')">Portfolio</a>
            <a class="btn btn-secondary my-2" onClick="projectsType('FT')">Freetime</a>


            <span id="projects-info">Hier vind je een aantal recente projecten waaraan ik heb gewerkt. Je kunt de projecten bekijken in de casestudies.
            Bekijk ook mijn 'Freetime' werk om te zien waar ik in mijn vrije tijd mee bezig ben!</span>

            <div class="projectsImages">

            </div>
            <div id="data"></div>

        </div>
    </div>
    
    </section>
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/bootstrap.js"> </script>
    <script src="js/scripts.js"></script>
</body>
</html>