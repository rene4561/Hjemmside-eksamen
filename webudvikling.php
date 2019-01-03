<!DOCTYPE html>
<html lang="da">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Webudvikling</title>
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
                <a href="HTML.php">
                    <div class="emnecontainer">
                        <div class="thumbcontainer">
                            <img src="Thumbnails/HTML5.png" alt="HTML5 logo">
                        </div>
                        <div class="tekstcontainer">
                            <h2>HTML</h2>
                            <p>Læs om HTML syntaks, semantiske tags og kodeskik.</p>
                        </div>
                    </div>
                </a>
            </section>
            <section id="design">
                <a href="CSS.php">
                    <div class="emnecontainer">
                        <div class="thumbcontainer">
                            <img src="Thumbnails/CSS.jpg" alt="CSS logo">
                        </div>
                        <div class="tekstcontainer">
                            <h2>CSS</h2>
                            <p>CSS er sproget der styler webbet. Læs om dets syntaks og funktioner.</p>
                        </div>
                    </div>
                </a>
            </section>
            <section id="interface">
                <a href="Servere_og_FTP.php">
                     <div class="emnecontainer">
                         <div class="thumbcontainer">
                            <img src="Thumbnails/server_klient.png" alt="Illustration server/klient forholdet">
                         </div>
                        <div class="tekstcontainer">
                            <h2>Servere og FTP</h2>
                            <p>Læs om brug af server, samt dets historie</p>
                        </div>
                    </div>
                </a>
            </section>
            <section id="kommunikation">
                <a href="Versionsstyring.php">
                    <div class="emnecontainer">
                        <div class="thumbcontainer">
                            <img src="Thumbnails/Versionsstyring.png" alt="Illustration af versionsstyring">
                         </div>
                         <div class="tekstcontainer">
                            <h2>Versionsstyring</h2>   
                            <p>Læs om mentalliten af versionsstyring og anvdendel af GitHub.</p>
                        </div>
                    </div>
                </a>
            </section>
            <section id="virksomhed">
                <a href="Bootstrap.php">
                    <div class="emnecontainer">
                        <div class="thumbcontainer">
                            <img src="Thumbnails/Bootstrap.jpg" alt="Bootstrap logo og en computer med bootstrap på skærmen">
                        </div>
                        <div class="tekstcontainer">
                            <h2>Bootstrap</h2>
                            <p>Læs om hvad bootstrap er.</p>
                        </div>
                    </div>
                </a>
            </section>
            <section id="projekter">
                <a href="SEO.php">
                    <div class="emnecontainer">
                        <div class="thumbcontainer">
                            <img src="Thumbnails/SEO.png" alt="Illustation af SEO">
                        </div>
                        <div class="tekstcontainer">
                            <h2>SEO, Seach Engine Optimization</h2>
                            <p>Læs om hvad SEO er, og hvordan man skaber god SEO.</p>
                        </div>
                     </div>
                </a>
            </section>   
            <section id="omsiden">
                <a href="Webbetsperioder.php">
                    <div class="emnecontainer">
                        <div class="thumbcontainer">
                            <img src="Thumbnails/webperioder.png" alt="Et billede af Apple hjemmeside i 90'eren">
                        </div>
                        <div class="tekstcontainer">
                            <h2>Webbets perioder</h2>
                            <p>Læs om webbets perioder, og deres kendetegn.</p>
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