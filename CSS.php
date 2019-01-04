<!DOCTYPE html>
<html lang="da">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CSS</title>
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
                    <h1>CSS</h1>
                    <p>CSS, også kaldet cascading style sheets, er et kodesprog der beskriver udseende. Det muliggør dermed, at man kan adskille struktur og udseende fra hinanden. </p>
                    <p>I dette afsnit kan du læse om følgende:</p>
                    <ul>
                        <li><a href="#underemne1">CSS-implementering</a></li>
                        <li><a href="#underemne2">CSS-syntaks</a></li>
                        <li><a href="#underemne3">Kaskaderegler</a></li>
                        <li><a href="#underemne4">CSS box model</a></li>
                        <li><a href="#underemne5">CSS grid</a></li>
                    </ul>
                </div>
                <section id="underemne1">
                    <h2>CSS-implementering</h2>
                    <p>I sin essens bruger man CSS til at style sin HTML. Dette gør man igennem regler, rules, som kan navngives og refereres til i sin HTML. Disse regler kan implementeres på 3 forskellige måder – igennem et såkaldt stylesheet, indlejret (embeded) og i det man kalder inline.</p>
                    <p>De forskellige implementeringer har fordele og ulemper. Primært skal man aldrig bruge inline, da det ødelægger idéen med at adskille struktur og layout. Grundet at inline css skrives direkte ind i HTML koden. Dertil bliver det også svært at rette på et elements stilering, da man skal finde det specifikke stedelement med den specifikke stilering.</p>
                    <p id=kildereferant>-W3, CSS How to</p>
                    <img src="Modeller/CSS_inline.png" alt="CSS som er skrevet inline i HTML koden.">
                    <p>Indlejret CSS skrives også i HTML dokumentet, men er derimod adskilt fra koden, da det skrives i et &lt;style&gt; tag, som skal placeres i &lt;head&gt; tagget. Dette har den fordel, at det kun påvirker det dokument, det er indlejret i. Dog er det stadig upraktisk, hvis man har 10, eller flere, HTML sider, hvis man vil have en gennemgående stil på alle sider. Dette skyldes, at man skal rette i hvert dokument. hvis man ændrer én stilering på en givet HTML side.</p>
                    <p id=kildereferant>-W3, CSS How to</p>
                    <img src="Modeller/CSS_embeded.png" alt="Et eksempel på CSS som er indlejret i HTML head">
                    <p>Eksterne stylesheets har den fordel, at man kan ændre udseende på en hel hjemmeside med kun én fil. Måden man implementerer eksterne stylesheets på, er ved at linke til dem gennem &lt;link&gt; tagget. Heri specificerer man navnet på stylesheetet, mystyle.css, gennem href attributtet. Relationen fra HTML-dokumentet til CSS-dokumentet beskrives også gennem rel attributtet. Dertil anvendes type til at beskrive medietypen linket referer til.</p>
                    <p id=kildereferant>-W3, CSS How to</p>
                    <img src="Modeller/CSS_ekstern.png" alt="Et eksempel på et CSS stylesheet, som ligger udenfor HTML dokumentet">
                </section>
                <section id="underemne2">
                    <h2>Hvordan skriver man så CSS?</h2>
                    <p>CSS-syntaks er, ligesom HTML syntaks, meget simpel. Når man skriver CSS, startes en sætning med en selector. Disse fortæller hvad der skal stilleres på, dertil findes der mange forskellige selectors. De 3 oftest anvendte selectors er:</p>
                    <p>Element - denne rammer alle elementer af dens type, eks. p, som ville ramme alle &lt;p&gt; elementer.</p>
                    <p>.class - denne ville ramme alle elementer med dens class, eks. .intro, denne vil ramme alle elementer med class=”intro”.</p>
                    <p>#id – denne anvendes til at ramme et specifikt element, med det valgte id, eks. #firstname, denne vil ramme det element som indeholder id=”firstname”.</p>
                    <p>Efter valgt selector skal man starte en deklaration. Disse startes med en tuborgklamme, {, og afsluttes dertil også med tilsvarende. Inde i deklarationerne skriver man en række egenskaber, som tillægges værdier. Disse 2 adskilles med et kolon, også kaldet en property/value separator. Desuden afsluttes egenskaber med et semikolon, dette er også kendt som en declaration seperator. Man kan derudover skrive flere deklarationer under samme selector. Derfor er det vigtigt at afslutte hver deklaration af med en decleration seperator, da det er den der adskiller deklarationerne.</p>
                    <p id=kildereferant>-Intro til CSS</p>
                    <p>Man kan med god samvittighed drage paralleller til attributter i HTML, da der findes mange ligheder i syntaksen.</p>
                    <img src="Modeller/CSS_syntakts.png" alt="Illustration af CSS syntaks">
                </section>
                <section id="underemne3">
                    <h2>C’et i CSS</h2>
                    <p>Cascade, på dansk kaskade, er en betegnelse - brugt til at berkrive handlingen af, at passere noget ned til en række af andre, en form for nedarvning. For CSS betyder dette, at det er bygget op efter et kaskaderegelsæt, som forvalter modstridende CSS-deklarationer. </p>
                    <section>
                        <p>Disse regler bestemmer dermed hvilke deklarationer der fremtræder, og hvilke der fravælges. Den første regel, og mest gennerelle regel, er source order eller kilderækkefølgen. Den seneste deklaration er den gældende. Dette betyder, at hvis du har 2 deklarationer som rammer det samme element, er det den seneste, nederste, deklaration som er gældende. Et eksempel på dette: </p>
                        <img src="Modeller/CSS_kaskade.png" alt="Her styles et h1 tag, hvor kaskadereglen styrer farven">
                        <p>Der bruges 2 forskellige farver på det samme element, måden CSS afgør, hvilken farve den skal anvende er ved kilderækkefølgen, i dette tilfælde, vil h1 fremstå med navy blå skrift. Derimod hvis orange stod under navy, ville teksten være orange.</p>
                        <p id=kildereferant>-Intro til CSS</p>
                    </section>
                    <section>
                        <h2>CSS specificity</h2>
                        <p>Den anden regel, som CSS benytter sig af, er specificity - eller specifikation på dansk. Denne regel har overgår kilderækkefølgereglen, og vælger dermed den mest specifikke deklaration på et givet element. Dette er bedst forklaret illustreret gennem et eksempel:</p>
                        <p>Her er angivet 2 deklarationer som begge rammer &lt;p&gt; elementer. Med kilderækkefølgereglen vil p-elementerne fremstå orange, men det gør de ikke i dette tilfælde.</p>
                        <img src="Modeller/CSS_specifik.png" alt="Her er der 2 deklerationer som modsiger hindanden - den mest specifikke styrer farven">
                        <p>Grundet at den navy blå farves selector er mere specifikt rettet mod &lt;p&gt; elementerne inde i &lt;body&gt; elementet. Derfor vil teksten blive blå fremfor orange i dette eksempel. </p>
                        <p>Der findes også en undtagelsesregel, denne er kaldet !important. Denne har veto over alle andre regler, men skal undgås, da det overstreger hele konceptet med kaskadereglerne.</p>
                        <p id=kildereferant>-Intro til CSS</p>
                    </section>
                </section>
                <section id="underemne4">
                    <h2>CSS Box Model</h2>
                    <p>HTML elementer kan betragtes som kasser, når de bearbejdes i CSS. Dertil kan man anvende CSS box model, som et redskab til at forstå indholds design og layout. Kassen omklamrer hvert HTML element, og har flere bestanddele: content, padding, border og margin.</p>
                    <img src="Modeller/CSS_boxmodel.png" alt="Her ses CSS box model">
                    <p>Content, eller indhold, er der hvor tekst og billeder er til stede. Padding rydder området omkring indholdet ud til border, og er som standard transparent. Dernæst er der border, eller kanten, af kassen. Denne er som udgangspunkt 0px bred – dermed usynlig som standard. Sidst er margin, eller margen, som rydder området udenfor kassen – dermed skaber det afstand til andre nærtliggende elementer.</p>
                    <p id=kildereferant>-Intro til CSS</p>
                </section>
                <section id="underemne5">
                    <h2>G’r’id vi har altid kunnet dette</h2>
                    <p>I efteråret 2017 blev CSS grid system introduceret. Dette system har gjort det let og intuitivt, at designe hjemmesider i et gitter. Dette betyder, at man kan placere indhold i et 2 dimensionalt gitter, hvor man kan bestemme både hvilken række, og hvilken kolonne indholdet skal placeres i på samme tid. </p>
                    <p>For at anvende grid skal man ’tænde’ for det ved at skrive display: grid, i en deklaration på et container element. Dette vil dermed gøre alle direkte child elementer til grid items. Dernæst skal man skabe gitteret, og dette gør man primært ved at tænde samt tillægge nogle grid-template-comlumns. Størrelsen på disse angives i enheden fr, som er en forkortelse af fractions -  brøkdele på dansk. Disse brøkdele repræsenterer brøkdele indenfor containeren.</p>
                    <p>Der findes 2 forskellige måder at positionere items i gitteret. Jeg vil blot fokusere på den ene af teknikkerne, da det er den vi har anvendt i undervisningen. </p>
                    <p id=kildereferant>-Grid.pdf</p>
                    <p>For at positionere ting i gitteret kræver det, at hver item får tildelt et såkaldt grid-area. Disse kan kaldes hvad som helst, dog anbefales det at bruge sigende navne såsom: ”hovedindhold”, ”navigation”, ”banner” mm. I eksemplet anvendes der bogstaverne a-e, for forståelsens skyld.</p>
                    <img src="Modeller/CSS_gridarea.png" alt="En række selectors med tilskrevne grid areas">
                    <p>Nu hvor alle items har fået tildelt et grid-area, kan de opstilles i gitteret. Et bud på en opstilling kunne være som følgende:</p>
                    <img src="Modeller/CSS_template.png" alt="Et grid tempel, hvor alle areas er tildelt en plads.">
                    <p>Denne fordeling ville skabe et layout, som vil se ud som nedenstående. Et godt kneb at kende til er, at ét grid-area kan spænde over flere rækker/kolonner. Formerne skal dog enten være kvadratiske eller rektangulære, dvs. at det er ikke muligt at skabe items som eksempelvis er L formet.</p>
                    <p id=kildereferant>-Rachel Andrew</p>
                    <img src="Modeller/CSS_gridlayout.png" alt="En illustration af hvordan layoutet i ovenstående vil se ud">
                </section>
                <section id="kilder"> <!-- Kilde oversigt -->
                    <h2>Kilder:</h2>
                    <p>W3Schools.com, "<a href="https://www.w3schools.com/css/css_howto.asp">https://www.w3schools.com/css/css_howto.asp</a>" - CSS How to</p>
                    <p>Niels Østergaard, "Intro til CSS.pdf"</p>
                    <p>Niels Østergaard, "Grids.pdf"</p>
                    <p>Rachel Andrew, "<a href="https://alistapart.com/article/the-new-css-layout-excerpt">https://alistapart.com/article/the-new-css-layout-excerpt</a>" - The New CSS Layout, An Excerpt</p>
                </section>
                <aside id="pause1">
                    <a href="http://www.csszengarden.com/">
                        <div class="pause">
                            <div class="pausetekst">
                                <h2>CSS Zen Garden</h2>
                                <p>Dette er et værktøj som viser mulighederne med CSS. Få inspiration til layout.</p>    
                            </div>
                            <div class="pauseimg">
                                <img src="pausebilleder/CSS/CSS_zen.JPG">
                            </div>
                        </div> <!--pause1 slut -->
                    </a>
                </aside>
                <aside id="pause2">
                    <a href="https://www.w3schools.com/cssref/default.asp">
                        <div class="pause">
                            <div class="pausetekst">
                                <h2>CSS Referencer</h2>
                                <p>Her kan du se alle CSS properties.</p>    
                            </div>
                            <div class="pauseimg">
                                <img src="pausebilleder/CSS/w3schools.png">
                            </div>
                        </div> <!--pause2 slut -->
                    </a>
              </aside>
                <aside id="pause3">
                    <a href="https://www.w3schools.com/csSref/css_selectors.asp">
                        <div class="pause">
                            <div class="pausetekst">
                                <h2>CSS selectors</h2>
                                <p>Se en oversigt over alle selectors i CSS.</p>    
                            </div>
                            <div class="pauseimg">
                                <img src="pausebilleder/CSS/w3schools.png">
                            </div>
                        </div> <!--pause3 slut -->
                    </a>
              </aside> 
                <aside id="pause4">
                    <a href="https://gridbyexample.com/">
                        <div class="pause">
                            <div class="pausetekst">
                                <h2>Grid by Example</h2>
                                <p>Dette er en hjemmeside hvor man kan læse alt om CSS Grid Layout.</p>    
                            </div>
                            <div class="pauseimg">
                                <img src="pausebilleder/CSS/gridbyexample.JPG">
                            </div>
                        </div> <!--pause4 slut -->
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