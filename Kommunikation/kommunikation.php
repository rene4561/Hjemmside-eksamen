<!DOCTYPE html>
<html lang="da">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Forside til mit eksamensprojekt</title>
        <link rel="stylesheet" type="text/css" href="mystyle.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Glegoo|Ubuntu:300" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="mynav.js"></script>  
    </head>
    <body>
        <?php
            include "../minnav.include"
        ?>
        <div id=pagewrap>
            <section id="webudvikling">
                <a href="Videnskabsteori.php">
                    <div class="emnecontainer">
                        <div class="thumbcontainer">
                            <img src="Thumbnails/videnskabsteori.jpg" alt="Illustration af videnskabeligt udstyr">
                        </div>
                        <div class="tekstcontainer">
                            <h2>Videnskabsteori</h2>
                            <p>Læs om videnskabsteori, samt de forskellige paradigmer.</p>
                        </div>
                    </div>
                </a>
            </section>
            <section id="design">
                <a href="Pr%C3%A6sentationsteknik.php">
                    <div class="emnecontainer">
                        <div class="thumbcontainer">
                            <img src="Thumbnails/pr%C3%A6sentation.png" alt="Illustation af en mand som præsentere noget for et publikum">
                        </div>
                        <div class="tekstcontainer">
                            <h2>Præsentationsteknik</h2>
                            <p>Læs om præsentationsteknik, dertil en række værktøjer til forberedelse af en præsentation.</p>
                        </div>
                    </div>
                </a>
            </section>
            <section id="interface">
                <a href="Tekstproduktion.php">
                     <div class="emnecontainer">
                         <div class="thumbcontainer">
                            <img src="Thumbnails/tekstproduktion.png" alt="Illustation af en blækpindpen og en bog">
                         </div>
                        <div class="tekstcontainer">
                            <h2>Tekstproduktion</h2>
                            <p>Læs om hvordan man skriver tekster til forskellige platforme.</p>
                        </div>
                    </div>
                </a>
            </section>
        </div>
        <footer>
            <div id="footerkontakt">
            <h2>Kontakt</h2>
                <p>Email: rene4561@student.eadania.dk</p>
            </div>
            <div id=footerinfo>
                <p>Denne side er udarbejdet som et eksamensprojekt af René Støvlbæk Krog - eadania Skive, MMD 2018</p>
            </div>
        </footer>
    </body>
</html>