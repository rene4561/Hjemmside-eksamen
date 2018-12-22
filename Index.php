<!DOCTYPE html>
<html lang="da">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Forside til mit eksamensprojekt</title>
        <link rel="stylesheet" type="text/css" href="mystyle.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="mynav.js"></script>  
    </head>
    <body>
        <?php
            include "minnav.include"
        ?>
        <div id=pagewrap>
            <section id="webudvikling">
                <a href="Webudvikling/webudvikling.php">
                    <div class="emnecontainer">
                        <div class="thumbcontainer">
                            <img src="Billeder/web-page_1300-265.jpg" alt="Illustration af HTML kode">
                        </div>
                        <div class="tekstcontainer">
                            <h2>Webudvikling</h2>
                            <p>Læs om alt det tekniske bag produktionen af hjemmesider.</p>
                        </div>
                    </div>
                </a>
            </section>
            <section id="design">
                <a href="Design/design.php">
                    <div class="emnecontainer">
                        <div class="thumbcontainer">
                            <img src="Billeder/design.png" alt="Abstrakt geometrisk figur">
                        </div>
                        <div class="tekstcontainer">
                            <h2>Design</h2>
                            <p>Læs om grafisk design af webindhold.</p>
                        </div>
                    </div>
                </a>
            </section>
            <section id="interface">
                <a href="Interface/interface.php">
                     <div class="emnecontainer">
                         <div class="thumbcontainer">
                            <img src="Billeder/interface.jpg" alt="Illustration af mobiltelefon">
                         </div>
                        <div class="tekstcontainer">
                            <h2>Interface design</h2>
                            <p>Interface er kontanken mellem bruger og maskine. Giv dem en god opvelelse.</p>
                        </div>
                    </div>
                </a>
            </section>
            <section id="kommunikation">
                <a href="Kommunikation/kommunikation.php">
                    <div class="emnecontainer">
                        <div class="thumbcontainer">
                            <img src="Billeder/kommunikation.jpg" alt="Illustation af 2 mennesker der kommunikerer">
                         </div>
                         <div class="tekstcontainer">
                            <h2>Kommunikation</h2>   
                            <p>Læs om kommunikation på forskellige platforme, samt videnskabsteori.</p>
                        </div>
                    </div>
                </a>
            </section>
            <section id="virksomhed">
                <a href="Virksomhed/virksomhed.php">
                    <div class="emnecontainer">
                        <div class="thumbcontainer">
                            <img src="Billeder/virksomhedsforst%C3%A5else.png" alt="Liste af forskellige virksomhedstyper">
                        </div>
                        <div class="tekstcontainer">
                            <h2>Virksomhedsforståelse</h2>
                            <p>Læs om virksmhedsforståelse - herunder Business Model Canvas.</p>
                        </div>
                    </div>
                </a>
            </section>
            <section id="projekter">
                <a href="Projekter/projekter.php">
                    <div class="emnecontainer">
                        <div class="thumbcontainer">
                            <img src="Billeder/design%20thinking.png" alt="Design thinking prossesen">                
                        </div>
                        <div class="tekstcontainer">
                            <h2>Projekter</h2>
                            <p>Her kan du læse om de projekter vi har lavet - dertil de metoder vi har anvendt.</p>
                        </div>
                    </div>
                </a>
            </section>   
            <section id="omsiden">
                <a href="Om_siden/omsiden.php">
                    <div class="emnecontainer">
                        <div class="thumbcontainer">
                            <img src="Billeder/Mig.jpg" alt="Et billede af René">
                        </div>
                        <div class="tekstcontainer">
                            <h2>Om siden</h2>
                            <p>Få indblik i produktionen bag sitet, samt de overvejelser jeg har gjordt mig undervejs.</p>
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