<!DOCTYPE html>
<html lang="da">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Versionsstyring</title>
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
            <section id="indhold">
                <div id="oversigt">
                    <h1>Versionsstyring</h1>
                    <p>Læs om følgende:</p>
                    <ul>
                        <li>Intro</li>
                        <li>Git</li>
                        <li>GitHub herunder samarbejde</li> 
                    </ul>
                </div>
                <section id="underemne1">
                    <h2>Intro</h2>
                    <p>Versionsstyring er et redskab, som hjælper med at holde overblik igennem et projekts forløb. I kodningens verden kan man anvende et VCS, version control system, som bringer en masse fordele og redskaber – dette uddybes senere. Med versionsstyring undgår man: at undgå fejl, hjælper med at rette evt. fejl og sidst hjælper det med at holde styr på flere delprojekter. </p>
                    <p id=kildereferant>- Versionsstyring pdf</p>
                </section>
                <section id="underemne2">
                    <h2>Git</h2>
                    <p>Til versionsstyrring anvender vi GitHub, som er baseret på Git-protokollen. Git opstod som et sideprojekt, da Linus Thorvald skrev systemet til at holde styr på udviklingen af styresystemet Linux. Der findes mange gittjenester såsom GitLab, BitBucket mm. Derudover kan man også oprette sin egen git-server.</p>
                    <p id=kildereferant>- Versionsstyring pdf</p>
                </section>
                <section id="underemne3">
                    <h2>GitHub</h2>
                    <p>GitHub er en webplatform, hvor man kan oprette Git-repositories, som lageres i skyen. Disse repositories kan man derefter finde og dele på hjemmesiden <a href="https://github.com/">GitHub.com</a>.</p>
                    <p>For at anvende GitHub skal man kende et par begreber/værktøjer. </p>
                    <p>Repositories kan betegnes som projektmappen, her ligger alle de gældende filer på projektet.</p> 
                    <p>Branches kan oversættes til forgreninger. Disse kan oprettes til at arbejde på forskellige dele af koden, hvor man ikke berører masteren. En master, eller master branch, er hovedforløbet af projektet - altså den endelige fil. Branches kan altid merges sammen med masteren, eller andre branches, hvor man sammenlægger altkoden fra de 2 versioner. </p>
                    <p>En anden feature i GitHub er det, der er kaldet Commit. Disse kan betragtes som versionerne af projektet, hvor man ”gemmer” hver gang man laver et commit. Det der adskiller commit fra en normal gemmefunktion er, at man altid kan se tilbage på de forrige versioner. Det er derfor godt at commit ofte, og dertil skrive kommentar med forklaring af ændringer. </p>
                    <p>Når man inspicerer forskellene mellem 2 commits, kan man få overblik over koden og de forskelle de har. Dette er kaldet diffs - forkortelse af differences.   </p>
                    <p id=kildereferant>- Versionsstyring pdf</p>
                    <section>
                        <h2>Samarbejde og skylagring på GitHub</h2>
                        <p>GitHub gør det også muligt at arbejde flere om ét projekt. Dette skyldes at man har mulighed for at lagre alt sit arbejde i skyen, og dette gøres gennem et push af ens lokale filer til skyen. Herfra får andre, som arbejder på projektet, mulighed for at se ens pull request, som er et forslag til en ny version. Derefter kan medarbejderne vælge om de vil pull - altså trække den med i projektet eller ej. </p>
                    </section>
                </section>
                <section id="kilder">
                    <h2>Kilder:</h2>
                    <p>Niels Østergaard, "Versionsstyring" - pdf</p>
                </section>
                <aside id="pause1">
                    <a href="https://github.com/rene4561">
                        <div class="pause">
                            <div class="pausetekst">
                                <h2>Min GitHub-side</h2>
                                <p>Dette er et link til min GitHub-side.</p>    
                            </div>
                            <div class="pauseimg">
                                <img src="pausebilleder/version/Octocat.png">
                            </div>
                        </div> <!--pause1 slut -->
                    </a>
              </aside> 
            </section> <!--indhold slut-->
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