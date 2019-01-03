<!DOCTYPE html>
<html lang="da">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Responsiv design</title>
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
                    <h1>Responsiv design</h1>
                    <p>På denne side forklares de 4 overordnede layoutformer på en hjemmeside. Dertil vil mobile first tankegangens fordele blive forklaret.
                    Der findes 4 overordnede layoutformer, som man kan anvende på en hjemmeside:</p>
                    <ul>
                        <li>Statisk</li>
                        <li>Flydende</li>
                        <li>Adaptiv</li>
                        <li>Responsiv</li>
                    </ul>
                </div>
                <section id="underemne1">
                    <h2>Statisk layout</h2>
                    <p>Det statiske layout er, som navnet indikerer, statisk. Dette betyder at hjemmesidens layout har en fast bredde, dertil retter layoutet sig ikke efter skærmstørrelse. Der er meget der taler imod at bruge denne layoutform, dog er der en lille fordel. Layoutet virker rigtig godt på den tiltænkte skærmstørrelse, man kan sige at den er skræddersyet, og dermed har man også fuld kontrol over det endelige design.</p>
                    <p>Det frabedes dog at anvende denne form, da layoutet kun passer til den ene skærm. Dette forhindrer en masse besøgene i at få en god oplevelse ud fra hjemmesiden, da de højst sandsynligt ikke har lige netop den skærm, som siden er tilpasset til.
                    </p>
                    <p id=kildereferant>- Niels Østergaard</p>
                    <img src="modeller/statisk.png" alt="Illustation af et statisk layout">
                </section>
                <section id="underemne2">
                    <h2>Flydende layout</h2>
                    <p>I denne layoutform tilpasser elementerne sig skærmstørrelse. Bredderne angives i procent, og deraf vil elementerne strække og skrumpe sig efter forholdende, dog er der oftest en grænse for, hvor små elementerne kan blive. Dette er godt, da indholdet på hjemmesiden, passer til alle skærme, hvilket betyder, at alle der kommer ind på hjemmesiden, har fuld funktionalitet. Dette resulterer dog i, at man som designer af hjemmesiden, mister megen kontrol over det æstetiske, da alt indhold flyder rundt efter behov fra brugeren.</p>
                    <p id=kildereferant>- Niels Østergaard</p>
                    <img src="modeller/flydende.png" alt="Illustration af et flydede layout">
                </section>
                <section id="underemne3">
                    <h2>Adaptiv layout</h2>
                    <p>Et adaptivt layout er en form, der består at en række forskellige statiske layouts. Dette medfører at man, som designer, har fuld kontrol over hvordan layoutet ser ud på de specificerede skærmstørrelser. Dette betyder at brugeren får en god brugeroplevelse, hvis siden er god vel og mærket, da siden er tilpasset til dem. Denne form anvendes igennem CSS @media queries, hvor man indtaster skærmbredden og typisk ender denne layoutform som værende en mobile last tilgang.</p>
                    <p id=kildereferant>- Niels Østergaard</p>
                    <img src="modeller/adaptiv.png" alt="Illustration af et adaptivt layout">
                </section>
                <section id="underemne4">
                    <h2>Responsiv layout</h2>
                    <p>Det responsive layout er en blanding af det flydende layout og det adaptive layout. Layoutet anvender @media quiries, hvor man definerer nogle layouts til forskellige skærmbredder. Derudover angiver man også de fleste elementbredder i procent. Dette resulterer i at man har et layout, som tilpasser sig brugerens skærmstørrelse, men hvis deres skærm ikke matcher den specifikke bredde, så vil layoutet stadig tilpasse sig skærmen.</p>
                    <p>Dertil skal man huske at tilføje viewport i et &lt;meta&gt; i sin HTML. Uden denne kan mobile enheder forsøge at skalere et desktop-site ned på mobilen.</p>
                    <p id=kildereferant>- Niels Østergaard</p>
                </section>
                <section id="underemne5">
                    <h2>Mobile first</h2>
                    <p>Mobile first er en designfilosofi der lyder på, at man skal designe en hjemmeside til mobilen først og derfra arbejde sig mod desktop. Dette er en god strategi at benytte sig af, da det allerede er besværligt at tilpasse informationen, fra en hjemmeside, på en lille skærm. Endnu et argument der taler for at designe mobile first er, at de fleste brugere anvender mobile enheder fremfor desktop i dag. Dermed vil det være mest hensigtsmæssig, at designe den bedst mulige løsning til dem.</p>
                    <p>Når man arbejder med mobile first, tager man udgangspunkt i indholdshierarkiet på hjemmesiden. For man skal overveje nøje hvad der er vigtigt, og hvad der er knapt så vigtigt - for man arbejder med begrænset plads. Derfor starter man med at tilpasse sin CSS til mobile enheder hvor layoutet testes. 
                    Derfra tilføjer man break points, igennem @media quiries, og tilpasser sidens CSS til de nye skærmstørrelser. Ved at gøre dette starter man med en god og velovervejet informationsarkitektur, derfra kan man tilføje flere features til enheder der kan håndtere dem, som man tilføjer break points.</p>
                    <p id=kildereferant>- Niels Østergaard</p>
                    <img src="modeller/mobilefirst.png" alt="Illustration af mobile first tilgangen">
                    <p>Hvis man designer desktop først risikere man, at brugeroplevelsen bliver ringere på mindre enheder. </p>
                    <img src="modeller/pcfirst.png" alt="Illustration af pc first tilgangen">
                </section>
                <section id="kilder"> <!-- Kilde oversigt -->
                    <h2>Kilder:</h2>
                    <p>Niels Østergaard, "responsiv i praksis" - Under CSS grid</p>
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