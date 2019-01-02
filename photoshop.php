<!DOCTYPE html>
<html lang="da">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Forside til mit eksamensprojekt</title>
        <link rel="stylesheet" type="text/css" href="../mystyle.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Glegoo|Ubuntu:300" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="../mynav.js"></script>  
    </head>
    <body>
        <?php
            include "../minnav.include"
        ?>
        <div id=pagewrap>
            <section id="indhold">
                <div id="oversigt">
                    <h1>Illustrator</h1>
                    <p>Photoshop er et pixelbaseret program, hvilket betyder at det anvender pixels til at gengive det man arbejder på. De arbejdspladser man arbejder på er kaldet artboards, og fungerer som en slags papir. Derudover arbejder man i lag, hvilket både er et værktøj, såvel som en arbejdstilgang. Dette indebærer, at man altid kan arbejde ovenpå på det man laver, og bygge videre på det – dette kaldes også at arbejde non-destruktivt, da man altid bevarer originalen.</p>
                    <p>Nedenfor ses en showcase over de værker, som jeg har lavet i løbet af studiet. Denne vil blive opdateret løbende under studiet.</p>
                </div>
                <section id="underemne1">
                    <h2>Out Of Frame</h2>
                    <p>Dette var en øvelse, hvor vi primært skulle arbejde med fritlægning og billedekomposition. Øvelsen gik ud på at vi skulle lave et billede, hvor der indgik en ramme som vi brød ud af. Derefter skulle vi konceptualisering og skitsere idéen. Dette gav os et indblik i, hvilke elementer vi skulle bruge til produktionen. Min idé lød på at jeg skulle hænge i rammen, som står oprejst, og inde i rammen skulle der være en høj kløft eller lignende.</p>
                    <img src="modeller/out_of_frame.jpg" alt="René der hænger fra en ramme, med et langt fald nedenfor">
                    <p>Det første jeg gjorde, med hjælp fra medstuderende, var at tage billederne som jeg skulle bruge til produktionen. Først tog vi et billede af skolens reklameskilte, da jeg synes at det var en god ramme til mit koncept. Derefter tog vi billedet af mig. På originalbilledet står jeg på en stol, og holder i gelænderet på skolen trappe.</p>
                    <p>Herefter tog jeg det videre til Photoshop, hvor jeg fritlagde billederne. Først anvendte jeg quick selection tool til en grov fritlægning af billederne. Derefter fintilpassede jeg fritlægningen vha. en layermask, hvor jeg brugte brush tool til at færdiggøre fritlægningen manuelt.</p>
                    <p>Derefter skulle jeg justere farverne i alle min lag, så de så ens ud - altså så de så mere sammenhængende ud. Dette gjorde jeg med en række adjustment layers. En lille detalje jeg tilføjede var, at jeg ændrede farven på min T-shirt fra en blå til en gråsort. Dette gjorde jeg ved at bruge color selector, hvor jeg fik valgt alt det blå på min T-shirt – dette lavede jeg dernæst til en layer mask. Derefter lavede jeg et adjustment layer, som ændrede hue/saturation, hvor jeg lagde denne layer mask over.
                    </p>
                </section>
                <section id="underemne2">
                    <h2>Personligt projekt – En bestillingsopgave</h2>
                    <p>Dette billede er ikke et jeg lavede på studiet, men et jeg lavede i min fritid. Baggrunden for at jeg skulle lave billedet er, at jeg har en ven, som gerne vil give sin lillebror et ’gavekort’ i julegave. Deraf faldt vi i snak, og jeg tilbød at lave et for ham. Vi snakkede om hvad indholdet skulle være, og svaret var ”noget med spil”. </p>
                    <img src="modeller/Gavekort.png" alt="Et gavekort med videospilskaraktere fra Borderlands, Assasins creed, Warcraft og Starwars">
                    <p>Det første jeg fokuserede på at lave, var baggrunden og guldplaketten. Det skal siges, at plaketten var min idé, som vi begge synes var lidt sjov. Vi valgte at bruge den. Baggrunden lavede jeg hovedsageligt ved at anvende repeat last step genvejstasten. Først lavede jeg en cirkel, derefter brugte jeg tasten, som skabte en mindre cirkel. Dette gjorde jeg et par gange, til jeg havde en del og gradvist mindre cirkler. Derefter kopierede og roterede jeg alle cirklerne – dette gentog jeg indtil, at jeg var nået hele artboardet rundt.</p>
                    <p>Plakken består af 2 dele: gulddelen og trædelen - jeg startede jeg gulddelen. Efter jeg lavede den form jeg ønskede, skulle jeg få den til at ligne guld. Det der udgør hovedbestanddelen er en layer style, forkort med fx i photoshop, denne hedder color gradient. Her anvendte jeg en teknik, som i miniaturemalerverdenen hedder NMM - Non-Metallic-Metal. Den korte udgave er, at man anvender en række skygger: mid-tones og highlights.</p>
                    <p>Træet er en lidt mere kompliceret sag. Først laver man en brun baggrund med den ønskede tone, derefter skal man tilføje et noise filter. Dernæst tilføjede jeg et cloud filter, som jeg fade’ede – for at gøre effekten mindre frembrusende. Jeg tilføjede også en lille smule gaussian blur for at bringe effektenerne sammen. Sidst tilføjede jeg et distort twirl filter. Dette skaber en række bølger i billedet, som samlet set får det hele til at ligne træ.</p>
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