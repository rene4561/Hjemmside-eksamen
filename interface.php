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
                <a href="Informationsarkitektur.php">
                    <div class="emnecontainer">
                        <div class="thumbcontainer">
                            <img src="thumbnails/IA.png" alt="Processen fra informationsarkitektur til bruger oplevelsen">
                        </div>
                        <div class="tekstcontainer">
                            <h2>Informationsarkitektur</h2>
                            <p>Læs om informationsarkitektur, samt en række værktøjer man man anvende til at undersøge dette.</p>
                        </div>
                    </div>
                </a>
            </section>
            <section id="design">
                <a href="Responsiv_layout.php">
                    <div class="emnecontainer">
                        <div class="thumbcontainer">
                            <img src="thumbnails/responsive_web_design.jpg" alt="Illustration af én hjemmeside med flere layout">
                        </div>
                        <div class="tekstcontainer">
                            <h2>Responsiv design</h2>
                            <p>Læs hvad responsiv design er, hvordan man implementerer det samt mobile first princippet.</p>
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