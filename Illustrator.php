<!DOCTYPE html>
<html lang="da">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Illustrator</title>
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
                    <h1>Illustrator</h1>
                    <p>Illustator er et vektorbaseret program, hvilket betyder at det anvender matematiske beregninger til at gengive det man arbejder på. De arbejdspladser man arbejder på er kaldet artboards, og fungerer som en slags papir. Derudover arbejder man i lag, hvilket både er et værktøj, såvel som en arbejdstilgang. Dette indebærer, at man altid kan arbejde ovenpå på det man laver, og bygge videre på det – dettes kaldes også at arbejde non-destruktivt, da man altid bevarer originalen.</p>
                    <p id=kildereferant>- Carsten Bogner</p>
                    <p>Nedenfor ses en showcase over de værker, som jeg har lavet i løbet af studiet. Denne vil blive opdateret løbende under studiet.</p>
                </div>
                <section id="underemne1">
                    <h2>One page projektet</h2>
                    <p>Under One page projektet besluttede Simone og jeg os for, at vi skulle have et interaktivt element på vores hjemmeside. Dertil lavede vi disse bannere, som repræsenterer de 3 energidrikke, som vi lavede hjemmesiden til. Meningen var at man kunne klikke på disse, hvor der vil komme en infoboks frem om produktet.</p>
                    <img src="modeller/heatbanner.PNG" alt="3 bannere til one page projektet med HEAT energi dåsedesignet">
                    <p>De 3 bannere er opbygget af 4 shapes, regtangle tool, hvor én stor dækker hele bagsiden. Over denne ligger der 2 rektangler som er skewed med 60 grader. Sidst er den hvide rektangel, som også er skewed. Teksten inden i denne er dertil skewed i samme grad. Typefacet er valgt på baggrund af, at den matchede HEATs egen fra dåsen.</p>
                </section>
                <section id="underemne2">
                    <h2>13 Stater flag</h2>
                    <p>I denne øvelse skulle vi lave USA's flag, da de havde 13 kolonier. Til at lave de 13 linjer lavede jeg først 7 røde linjer, hvor jeg dertil bruge vertical distribute til at fordele dem jævnt – her skal man være opmærksom på, at man fordeler i forhold til artboard fremfor selected. Til at lave stjernerne blandede jeg et par teknikker. Først lavede jeg en path - en rund sti som stjernerne skulle følge. Derefter lavede jeg 2 stjerner, som jeg dertil tildelte et blend. Herefter markerede jeg både mit blend og min path og valgte align to path under blend. </p>
                    <img src="modeller/13%20stater%20flag.png" alt="De 13 staters flag fra 1800-tallet">
                </section>
                <section id="kilder"> <!-- Kilde oversigt -->
                    <h2>Kilder:</h2>
                    <p>Carsten Bogner, undervisningen fra dagen med Illustrator </p>
                </section>
                <aside id="pause1">
                    <a href="#">
                        <div class="pause">
                            <div class="pausetekst">
                                <h2>Noget releteret til emnet foroven</h2>
                                <p>Læs om det eller andet mega sejt reletert emne eller værktøj. Klik til et ekstern eller intern link.</p>    
                            </div>
                            <div class="pauseimg">
                                <img src="thumbnails/test.png">
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