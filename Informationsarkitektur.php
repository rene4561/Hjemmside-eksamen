<!DOCTYPE html>
<html lang="da">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Informationsarkitektur</title>
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
                    <h1>Informationsarkitektur</h1>
                    <p>En hjemmeside er, i sin essens, en masse siders information fordelt på tværs af dokumenter. Disse sider kan være forbundne på utallige måder gennem hyperlinks, hvilket kan betyde at en hjemmesides kompleksitet kan være enorm. For at denne kompleksitet ikke skal blive til et problem for brugeren, er informationsarkitektur blevet konceptualiseret. </p> 
                    <p>Formålet med informationsarkitektur er at skabe et hierarki og struktur til navigering af hjemmesiden. Ligeledes at det føles naturligt for brugeren, og at de selv føler kontrol over hvor de bliver navigeret hen.</p>
                    <p>Alle brugere danner sig en forestilling om, hvor tingene er placeret på hjemmesiden – god informationsarkitektur er derfor, at brugerens forestilling bliver til virkelighed.</p>
                    <p id="kildereferant">- Kommunikation i multimediedesign, s.165-166 </p>
                    <blockquote>Good information architecture enables people to find and do what they came for. Great information architecture takes find out of the equation: The site behaves as the visitor expects.
                    Poor or missing information architecture neuters content, design, and programming and devalues the site for its owners as well as the audience it was created to serve.
                    It's like a film with no director. The actors may be good, the sets may be lovely, but audiences will leave soon after the opening credits.</blockquote>
                    <p id="kildereferant">- Jeffrey Zeldman (stifter af A List Apart)</p>
                </div>
                <section id="underemne1">
                    <h2>LATCH</h2>
                    <p>Ifølge Richard Saul Wurmann findes der 5 forskellige måder at organisere information på – gennem location, alphabet, time, category og hierarchy.</p>
                    <p>Lokation dækker information, som er inddelt efter fysisk eller geografisk placering.</p>
                    <img src="Modeller/metro.png" alt="Et kort over en metrostation">
                    <p>Alfabetisk inddeling er i sig selv meget sigende. Her inddeler man sin information fra A-Å eller den anden vej rundt. Denne sortering bliver oftest anvendt i ordbøger og leksikoner.</p>
                    <p>Tid kan ses som en tidslinje eller historik. </p>
                    <img src="Modeller/timeline.png" alt="En tidslinje over Star Wars">
                    <p>Kategorisortering er kendetegnet ved fællestræk eller relaterede emner - dette er den primære sortering på denne hjemmeside.</p>
                    <p>Hierarki kan ses som en række sammenhængende elementer – disse kunne blive inddelt efter pris, størrelse, vægt mm.</p>
                    <p id="kildereferant">- Kommunikation i multimediedesign, s.167</p>
                    <p>Alle disse inddelingsformer kan blandes på kryds og tværs. Dette gøres blandt andet i mange musikforretninger, hvor alle musikgenre er kategoriseret. Indenfor disse kategorier er musikken derefter inddelt alfabetisk. </p>
                </section>
                <section id="underemne2">
                    <h2>Værktøjer</h2>
                    <p>Her kan man finde en række værktøjer, som kan anvendes i forskellige sammenhænge til at forbedre brugeroplevelsen.</p>
                    <section>
                        <h2>Site map</h2>
                        <p>Et site map er et kort over ens hjemmeside. Dette kan give et indblik i, hvordan de forskellige sider er skruet sammen – dette udgøres af de mest overordnede emner, og anvendes ofte som værktøj til at udtænke navigation.</p>
                        <p id="kildereferant">-	PlanningAndHighLevelDesign s. 6</p>
                        <img src="Modeller/site%20map.png" alt="Et eksempel et et site map">
                    </section>
                    <section>
                        <h2>Wireframe</h2>
                        <p>En wireframe er en skitsering af, hvordan en sides indhold skal fordeles. Her overvejes hvad der ligger sig til hvad – glem ikke internettets konventioner. </p>
                        <p id="kildereferant">-	PlanningAndHighLevelDesign s. 5</p>
                    </section>
                    <section>
                        <h2>User journey</h2>
                        <p>En user jouney er en journal, hvori man dokumenterer brugerens oplevelser, når de skal navigere på hjemmesiden - efter et bestemt mål afgivet af undersøgeren. Dette kan vise problemstillinger, som hjemmesiden kan indeholde, men det kan også vise, hvad der fungerede godt. Disse er gode til at identificere nogle uforudsigelige problemer, og er et godt grundlag at arbejde videre på.</p>
                        <p id="kildereferant">-	Thalion</p>
                        <img src="Modeller/user%20journey.png">
                    </section>
                    <section>
                        <h2>User flow</h2>
                        <p>Et user flow visualiserer brugerens gang gennem hjemmesiden. Denne adskiller sig fra journey map, da den ikke forklarer brugerens følelser for produktet. Dette er ideelt at bruge, når man skal kortlægge alle brugerens muligheder med produktet. Disse giver mulighed for, at man derefter kan udvælge nogle processer, som man tænker der skal testes – evt. gennem user journeys.</p>
                        <p id="kildereferant">-	Thalion</p>
                        <img src="Modeller/user%20flow.png">
                    </section>
                    <section>
                        <h2>Kortsortering</h2>
                        <p>Kortsortering er en test som giver indsigt i, hvor sigende navngivning og fordeling af emner i navigationslinjen er. Dette er vigtigt at teste, da ikke-sigende navne kan skabe forvirring blandt brugerne, da de ikke kan finde det, som de leder efter.</p>
                        <p>Selve testen har 2 varianter: den lukkede og den åbne. Forskellen på dem er, at i den åbne test skal testpersonen selv navngive kategorierne, hvor de i den lukkede bedes om at placere emnerne i de allerede eksisterende grupper.</p>
                        <p>Testens udføres som følgende: Deltagerne får udleveret ét kort ad gangen, hvor de skal placere det i en gruppe – udformningen af dette varierer efter testvariant. Efter kortene er blevet fordelt, bedes de gennemgå deres tanker og refleksioner.</p>
                        <p id="kildereferant">-	Usability s. 86-95</p>
                    </section>
                    <section>
                    <h2>Gangstertest</h2>
                        <p>Gangstertests formål er at tjekke en hjemmesides informationsarkitektur. Mere specifikt, så tester den sidens navigation, og om det forekommer klart og tydeligt, hvor man befinder sig på hjemmesiden på et givet tidspunkt. Ideelt set skal man overholde alle internettets konventioner om navigation.</p>
                        <p>Testens præmis er, at man er blevet smidt i bagagerummet af en bil og læsset af et tilfældigt sted. Nu skal man dertil prøve at finde ud af, hvor man befinder sig. Her stiller man testpersonen en række spørgsmål som går på:</p>
                        <p>Hvilket website er du på?</p>
                        <p>Hvor er websitets globale menu?</p>
                        <p>Hvilken underside er du på?</p>
                        <p>Hvilke muligheder har du på denne side?</p>
                        <p>Hvordan er du kommet hertil?</p>
                        <p>Hvor kan du søge?</p>
                        <p>Efter testen evaluerer man sidens navigation ved at give mellem 0-3 points til hvert spørgsmål - hvor 3 er godt, og 0 er skidt. </p>
                        <p id="kildereferant">-	Usability s. 42-47</p>
                    </section>
                </section>
                <section id="kilder"> <!-- Kilde oversigt -->
                    <h2>Kilder:</h2>
                    <p>Anne Mette Busch, "Kommunikation i multimediedesign"</p>
                    <p>Ole Gregersen &amp; Ian Wisler-Poulsen, "Usability"</p>
                    <p>Moodleroom, "PlanningAndHighLevelDesign.pdf” - Informationsarkitektur</p>
                    <p>Thalion, "<a href="https://medium.com/sketch-app-sources/user-journey-maps-or-user-flows-what-to-do-first-48e825e73aa8">https://medium.com/sketch-app-sources/user-journey-maps-or-user-flows-what-to-do-first-48e825e73aa8</a>" - User Journey Maps or User Flows, what to do first?</p>
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