<!DOCTYPE html>
<html lang="da">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Farver og farvelære</title>
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
                    <h1>Farver og farvevalg</h1>
                    <p>Farvevalg er en kompliceret sag. Der findes mange studier om hvordan farver påvirker mennesker, men i størstedelen af tilfældene bliver man nødt til at erkende, at farvernes betydning kommer meget an på modtagerens personlige og kulturelle baggrund.</p>
                    <p>På denne side kan man læse om:</p>
                    <ul>
                        <li><a href="#underemne1">Farvers påvirkning</a></li>
                        <li><a href="#underemne2">Farver i praksis</a></li>
                        <li><a href="#underemne3">Farvesammensætning</a></li>
                        <li><a href="#underemne4">Farvekoder</a></li>
                    </ul>
                </div>
                <section id="underemne1">
                    <h2>Farvers virkning på mennesker </h2>
                    <p>Nogle af de antagelser, som man har gjort sig i Vesten er, blandt andet, at nogle farver vækker bestemte følelser. Man kan se en oversigt over farverne, og hvilke følelser de kan fremkalde nedenfor: </p>
                    <p id=kildereferant>- Jerry Cao</p>
                    <img src="modeller/farve_virkning.jpg" alt="En liste over farver og deres virkning på mennesker">
                    <p>Man kan også sige, at farver appellerer forskelligt til køn, og det kan man se i cirkeldiagrammerne nedenfor:</p>
                    <p id=kildereferant>- Jerry Cao</p>
                    <img src="modeller/farve_favorit.png" alt="En statestik over mænd og kvinders ynglings og hade farver">
                    <p>Som tidligere skrevet så skal man være opmærksom på, at farverne ikke udelukkende kan opdeles på følgende måde. Det afhænger stadig i stor grad af, hvilken kulturel baggrund og personlighed modtageren har.  </p>
                    <p id=kildereferant>- Ulla Gjeset Schjølberg</p>
                </section>
                <section id="underemne2">
                    <h2>Farveteori i praksis</h2>
                    <p>Man kan dog kombinere disse to teorier: om farverne som henvender sig til bestemte køn samt at de kan fremkalde bestemt følelser. Man kan anvende kombination til at skabe et design til et bestemt produkt eller brand, som henvender sig til et bestemt køn. Et eksempel på dette kan være L'Oréal Paris' hjemmeside, som man kan se nedenfor.</p>
                    <img src="modeller/farve_praksis.jpg" alt="Et screenshot af Loreal parises hjemmeside">
                    <p>Her man kan se, at den sorte farve blive brugt til at fremhæve det eksklusive - altså at produktet har en vis kvalitet. Derudover anvender L’Oreal lilla til at understrege det luksuriøse ved produktet, og dertil at det også henvender sig mest til kvinder. Til sidst kan man også sige, at den hvide skrift giver siden et moderne og smart udseende.</p>
                </section>
                <section id="underemne3">
                    <h2>Sammenspil mellem farver</h2>
                    <p>At anvende farver der vækker forskellige følelser, er én ting, men en anden er at vælge farver med et godt sammenspil. Der findes flere måder at kombinere farver på, og de har alle deres styrker og svagheder.</p>
                    <section>
                        <h2>Triadiske farver</h2>
                        <p>Den mest basale og balancerede metode er det triadiske farveskema. Her vælger man 3 farver med 120 graders mellemrum på farvehjulet. Dette skaber en nem og afbalanceret farvepalet, hvor man kan bruge farverne som henholdsvis bagrund, indhold og navigation.</p>
                        <p id=kildereferant>- Jerry Cao</p>
                        <img src="modeller/farve_tre.png" alt="Model af triadisk farvesammensætning">
                    </section>
                    <section>
                        <h2>Komplementære farver</h2>
                        <p>En anden metode er af vælge 2 nærtliggende farver på farvehjulet, og derefter vælger 2 andre ud fra de komplementære farver af de første 2. Dette kan give gode resultater, men kræver at man leger lidt med det før det virker, da det kan være svært af skabe et samlet udseende.</p>
                        <p id=kildereferant>- Jerry Cao</p>
                        <img src="modeller/farve_komplementer.png" alt="Model af komplementær farvesammensætning">
                    </section>
                    <section>
                        <h2>Analoge farver</h2>
                        <p>Analoge farver er også en mulighed. Her vælger man en farve, og derefter de nærtliggende farver. Dette fremhæver den følelser man ønsker, og giver et meget farvefyldt udseende. Man skal dog være forsigtig med dette, da farverne kan virke alt for fremtrædende. </p>
                        <p id=kildereferant>- Jerry Cao</p>
                        <img src="modeller/farve_analog.png" alt="Model af analog farvesammensætning">
                    </section>
                </section>
                <section id="underemne4">
                    <h2>Farvekoder</h2>
                    <p>Når man arbejde med farver igennem IT, findes der hovedsageligt 3 typer farvekode som anvendes – RBG- og HEX- og HSB-farver.</p>
                    <section>
                        <h2>RBG</h2>
                        <p>RGB er en forkortelse af Red Green Blue. Disse farver er de 3 farver, som dioder i en skærm kan benytte sig af. Farvesystemet er additiv, hvilket betyder at farverne tilføjer lys til hinanden. Dette har dertil den betydning at, når man skriver RGB farvekode, så indtaster man en værdi, som går fra 0 – 255, for hver farve, altså hvor meget af den er tilstede.</p>
                        <p id=kildereferant>- Carsten Bogner</p>
                        <p>Et eksempel på en RGB farvekode er: R:51 G:102 B:153 – denne farve er tilsvarende en ”kongeblå”. *</p>
                        <img src="modeller/farve_RGB.png" alt="RGB farverne">
                        <p>I CSS kan man anvende det man kalder RGBA, en forkortelse af Red Green Blue Alpha. Alpha beskriver hvor gennemsigtig en farve er – denne indtastes som en værdi mellem 0 – 1, hvor 0 er helt gennemsigtig, og 1 er modsat. Et eksempel på dette er: R:51 G:102 B:153 A:0.5. </p>
                        <p id=kildereferant>- Carsten Bogner</p>
                        <p>I CSS angives dette som hhv. rgb(51, 102, 153); og rgba(51, 102, 153, 0.5);</p>
                    </section>
                    <section>
                        <h2>HEX</h2>
                        <p>Hex farver er en anden fortolkning af RGB farvekoden. Her angiver man RGB-farverne fra 00 – FF. Et eksempel på dette kunne være: #336699 – dette er den samme farve som i RBG-eksemplet.</p>
                        <p id=kildereferant>- Carsten Bogner</p>
                    </section>
                    <section>
                        <h2>HSB</h2>
                        <p>Systemet HSB er kulør, mætning og lyshed. Kulør, eller hue, er en graduering eller variation af en farve. En anden måde at forklarer det er, den grad har den på farvehjulet – dette angives derfor i grader, som i en vinkel.</p>
                        <p>Mætning, eller saturation, betegner hvor meget gråtoning farven indeholder – dette angives som en procentuel værdi.</p>
                        <p>Lyshed, eller brightness, beskriver mængden af ren sort/hvis der er blandet i farven – dette angives også i procentuelt.</p>
                        <p id=kildereferant>- Carsten Bogner</p>
                        <img src="modeller/farve_HSB.jpg" alt="Model af HSB farvediamanten">
                    </section>
                </section>
                <section id="kilder"> <!-- Kilde oversigt -->
                    <h2>Kilder:</h2>
                    <p>Jerry Cao, "<a href="https://designmodo.com/color-psychology-web-design/">https://designmodo.com/color-psychology-web-design/</a>" - Understanding Color Psychology for Impactful Web Design </p>
                    <p>Ulla Gjeset Schjølberg, "<a href="https://videnskab.dk/sporg-videnskaben/hvordan-pavirker-farver-os">https://videnskab.dk/sporg-videnskaben/hvordan-pavirker-farver-os</a>" - Hvordan påvirker farver os?</p>
                    <p>Carsten Bogner, "Præsentation: Farvelære" - og noter fra undervisningsdagen</p>
                </section>
                <aside id="pause3">
                    <a href="https://color.adobe.com/da/create/color-wheel/">
                        <div class="pause">
                            <div class="pausetekst">
                                <h2>Adobe color-wheel</h2>
                                <p>Dette redskab hjælper med at sammensætte farverkombinationer.</p>    
                            </div>
                            <div class="pauseimg">
                                <img src="pausebilleder/design/farve/colorwheel.png">
                            </div>
                        </div> 
                    </a>
                </aside><!--pause3 slut -->
                <aside id="pause2">
                    <a href="http://www.flatuicolorpicker.com/">
                        <div class="pause">
                            <div class="pausetekst">
                                <h2>Flat UI colorpicker</h2>
                                <p>Denne er en farve paletside, som hjælper med at udforske farver</p>    
                            </div>
                            <div class="pauseimg">
                                <img src="pausebilleder/design/farve/slack.png">
                            </div>
                        </div> <!--pause3 slut -->
                    </a>
                </aside> 
                <aside id="pause4">
                    <a href="https://color.hailpixel.com/">
                        <div class="pause">
                            <div class="pausetekst">
                                <h2>Color dot</h2>
                                <p>På denne side kan man se på farver ved at bevæge musen rundt på skærmen.</p>    
                            </div>
                            <div class="pauseimg">
                                <img src="pausebilleder/design/farve/colordot.png">
                            </div>
                        </div> <!--pause3 slut -->
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