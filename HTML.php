<!DOCTYPE html>
<html lang="da">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>HTML</title>
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
                    <h1>HTML</h1>
                    <p>HTML, en forkortelse af HyperText Markup Language, er et kodesprog, hvis primære formål er at markere tekst og billeder op på en hjemmeside. Derudover er det et strukturskabende sprog, da HTML også er et hierarkisksprog, som skaber en naturlig struktur gennem nesting af elementer. Læs om disse emner:</p>
                    <ul>
                        <li>Syntakts</li>
                        <li>Semantiske tags</li>
                        <li>Kodeskik</li> 
                    </ul>
                </div>
                <section id="underemne1">
                    <h2>Syntaks</h2>
                    <p>Byggestenene, som anvendes i HTML, er kaldet elementer. Disse består af flere komponenter: tags, attributter, værdier og noget indhold som påvirkes. For at forstå og anvende HTML skal man lære dets syntaks. Alle elementer starter med et tag, og slutter oftest også med et. I dette tag kan man have noget indhold, såsom tekst, som påvirkes at funktionen fra tagget.</p>
                    <p>Et eksempel på dette kunne være, at noget tekst som indskrives i et &lt;h1&gt; tag. Dette tags funktion er at opmærke indholdet i tagget, som værende en vigtig overskrift. Deraf vil teksten få påtaget funktionen som en vigtig overskrift.</p>
                    <p>Derudover kan man også tillægge tags med et eller flere attributter, disse giver tagget yderligere egenskaber. Et attribut kræver dog også, at det får tillagt en værdi. Et eksempel på et attribut kunne lyde:</p>
                    <p>Hvis man skriver et HTML dokument kræver det at man nester alt HTML-koden i et &lt;html&gt;. Dette tag kan dertil tillægges attributtet lang, som beskriver sproget anvendt i dokumentet, denne attribut skal dertil tillægges en værdi. Dette kunne være da, som er værdien for dansk. HTML tagget, som koden befinder sig i, vil derfor have den egenskab at sproget er på dansk.</p>
                    <p>Nogle tags skal tillægges attributter for at have fuld funktion, såsom &lt;a&gt; og &lt;img&gt;.</p>
                    <p id=kildereferant>- Niels Østergaard</p>
                    <img src="Modeller/HTML_syntaks.png" alt="Illustration af HTML syntaks">
                </section>
                <section id="underemne2">
                    <h2>HTML semantik</h2>
                    <p>I verdenen af HTML findes der et sæt tags, som er kaldet semantiske tags, disse har en særlig vigtighed hvad angår SEO. Semantiske tags er, i sin enkelthed, tags som siger noget om indholdet i det. Disse tags bruges dermed til at beskrive indholdet til mennesker, men dertil også søgemaskiner. For mennesker bliver det nemmere at gennemlæse koden, hvor de dertil også hurtigt kan få et overblik over hvad indhold der er på siden, og hvilken funktion det har. Dertil hjælper semantiske tags søgemaskiner med at afkode hvad indholdet er, og hvordan det er struktureret – fra vigtigt til knapt så vigtigt indhold. Det kunne, eksempelvis, hjælpe søgemaskinen med at udpege et firmanavn fremfor alt andet indhold på siden. </p>
                    <p id=kildereferant>- Niels Østergaard</p>
                    <img src="Modeller/HTML_nesting.png" alt="Illustration af semantiske HTML elementer som er nestet inde i hinanden">
                </section>
                <section id="underemne3">
                    <h2>Kodeskik</h2>
                    <p>God kodeskik er en vigtig egenskab at besidde, da det hjælper en selv og evt. andre med at holde styr på HTML-koden. Der er flere ting som indgår i god kodeskik; en af disse er at gøre brug af et korrekt indryk med brug af tabulatorknappen ”tab” på et tastatur. Dette skaber jævnt whitespace mellem elementerne. Dette hjælper med at forstå, hvad indhold som er nestet samt hvad der ikke er. Dertil giver det mulighed for at forstå strukturen på siden - i en HTML forstand. </p>
                    <p>Kommentarer er endnu en teknik, som er med til at gøre koden nemmere at forstå. Starten af en kommentar angives som &lt;!--, og afsluttes dertil med et --&gt;. Alt det man skriver derimellem, vil ikke være synligt på hjemmesiden, kun hvis man kigger i kildekoden. Det man kan skrive i et kommentarfelt kunne være ting som: hvilken betydning et stykke kode har, en opsummering af indholdet inde i sektion mm.</p> 
                     <p id=kildereferant>- Niels Østergaard</p>
                </section>
                 <section> <!-- Kilde oversigt -->
                    <h2>Kilder:</h2>
                    <p>Niels Østergaard, "Intro til HTML (Præsentation)" PDF </p>
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