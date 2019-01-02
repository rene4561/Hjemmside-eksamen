<!DOCTYPE html>
<html lang="da">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Grafisk design</title>
        <link rel="stylesheet" type="text/css" href="mystyle.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Glegoo|Ubuntu:300" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="mynav.js"></script>  
    </head>
    <body>
        <?php
            include "minnav.include"
        ?>
        <div id=pagewrap>
            <section id="webudvikling">
                <a href="Illustrator.php">
                    <div class="emnecontainer">
                        <div class="thumbcontainer">
                            <img src="thumbnails/Illustrator.png" alt="Illustrator logo på en computer skærm">
                        </div>
                        <div class="tekstcontainer">
                            <h2>Illustrator</h2>
                            <p>Læs om hvad illustator er, samt se en lille showcase med forklaringer.</p>
                        </div>
                    </div>
                </a>
            </section>
            <section id="design">
                <a href="photoshop.php">
                    <div class="emnecontainer">
                        <div class="thumbcontainer">
                            <img src="thumbnails/adobe-photoshop-logo.png" alt="Photoshop logo">
                        </div>
                        <div class="tekstcontainer">
                            <h2>Photoshop</h2>
                            <p>Læs om hvad photoshop er, samt se en lille showcase med forklaringer.</p>
                        </div>
                    </div>
                </a>
            </section>
            <section id="interface">
                <a href="fotografering.php">
                     <div class="emnecontainer">
                         <div class="thumbcontainer">
                            <img src="thumbnails/fotografering.png" alt="Illustration af et kamera">
                         </div>
                        <div class="tekstcontainer">
                            <h2>Fotografering</h2>
                            <p>Læs om hvordan man anvender et kamera, samt en lille showcase.</p>
                        </div>
                    </div>
                </a>
            </section>
            <section id="kommunikation">
                <a href="farver.php">
                    <div class="emnecontainer">
                        <div class="thumbcontainer">
                            <img src="thumbnails/farver.png" alt="En vivl af alle alle tertriære farver">
                         </div>
                         <div class="tekstcontainer">
                            <h2>Farver</h2>   
                            <p>Læs om farvers indfludelse på mennesker, samt sympolik.</p>
                        </div>
                    </div>
                </a>
            </section>
            <section id="virksomhed">
                <a href="typografi.php">
                    <div class="emnecontainer">
                        <div class="thumbcontainer">
                            <img src="thumbnails/typografi.png" alt="billede af en tekst med ordet typography">
                        </div>
                        <div class="tekstcontainer">
                            <h2>Typografi</h2>
                            <p>Læs om hvad typografi er, font-anotomi, samt typeface virke og kombinationer.</p>
                        </div>
                    </div>
                </a>
            </section>
            <section id="projekter">
                <a href="Gestaltlove.php">
                    <div class="emnecontainer">
                        <div class="thumbcontainer">
                            <img src="thumbnails/gestalt-principles.png" alt="Illustation af gestaltlovene i teksten gestalt">    
                        </div>
                        <div class="tekstcontainer">
                            <h2>Gestaltlovene</h2>
                            <p>Læs om de forskellige gestaltlove.</p>
                        </div>
                     </div>
                </a>
            </section>   
            <section id="omsiden">
                <a href="Quick_and_dirty.php">
                    <div class="emnecontainer">
                        <div class="thumbcontainer">
                            <img src="thumbnails/rapid%20video.png" alt="Illustation af et videokamera">
                        </div>
                        <div class="tekstcontainer">
                            <h2>Rapid video</h2>
                            <p>Læs video produktion, samt hvad rapid video er</p>
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