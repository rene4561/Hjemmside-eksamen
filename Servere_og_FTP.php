<!DOCTYPE html>
<html lang="da">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Server og FTP</title>
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
                    <h1>Servere og FTP</h1>
                    <p>På denne side kan man læse om hvad en server er samt anvendelse og lidt historie.</p>
                    <ul>
                        <li>Intro</li>
                        <li>Serverbrug som multimediedesigner - herunder:</li>
                        <ul>
                            <li>Adgang til servere</li>
                            <li>Serverside/include</li>
                        </ul>
                        <li>Historie om server/klient og HTTP-protokollen</li>
                    </ul>
                </div>
                <section id="underemne1">
                    <h2>Intro</h2>
                    <p>Begrebet server dækker over flere ting, primært noget hardware med en særlig rolle samt noget software med en særligrolle. Som udgangspunkt kan flere stykker software godt køre ét styk hardware. Typisk betegnes maskinen som ”server”, hvor programmet oftest kaldes [funktion]-server, eksempelvis filserver.</p>
                    <p>For at kunne tilgå en server, skal man bruge en klient. Disse skaber en forbindelse mellem klient og server, hvor den udveksler informationer. Eksempelvis skal man bruge en webklient, også kendt som en browser, for at kunne kommunikere med en web-server. Ligeledes vil man også bruge en FTP-klient, som FileZilla, til at kommunikere med en FTP-server.</p>
                    <p id=kildereferant>- Server præsentation</p>
                </section>
                <section id="underemne2">
                    <h2>Serverbrug som multimediedesigner</h2>
                    <p>Som multimediedesigner vil man primært skulle arbejde med webservere. I hardwaremæssig forstand vil en web-server typisk bestå af flere softwareservere. Disse vil være en webserver - som levere hjemmesiden via http-protokollen; en databaseserver – som modtager data fra, og leverer data til webserveren og andre klienter. Derudover skal der være en FTP-server – til udveksling af HTML, CSS og Javascript filer.</p>
                    <p>For at få adgang til en FTP-server, skal man anvende en FTP-klient. Denne klient skaver en forbindelse til serveren – med andre ord åbner den en dør til serveren</p>
                    <p>Der findes flere måder at få adgang til en server. Én måde er nævnt i ovenstående, FTP, en anden er med direkte adgang. </p>
                    <p id=kildereferant>- Server præsentation</p>
                    <section>
                        <h2>Serverside</h2>
                        <p>Serversideprogrammering er programmering som afvikles på serveren. Dette har mange funktioner såsom forbindelse til databaser, lave brugerstyring med adgangskoder og inkludering af små bider af kode. </p>
                        <p>PHP er et serversideprogrammeringssprog, som er skrevet af danskeren Rasmus Lerdorf. Dertil er dette sprog også det mest udbredte til serversideprogrammering.  Sproget er lidt en bastard af Pearl, Java C+ og lidt nyt.  </p>
                        <p>Til 1.semestereksamensprojektet har vi kun lært om serverside-include.</p>
                        <p id=kildereferant>- PHP præsentation</p>
                        <section>
                            <h2>Serverside Include</h2>
                            <p>Denne feature kan indsætte små bider af kode i ens egen kode inden klienten, browseren, modtager det i den anden ende. For klienten vil hjemmesiden være et komplet dokument. Dette skyldes at man i .PHP dokumentet indsætter et &lt;?PHP tag, som afsluttes med ?&gt;, hvor man deri indsætter et indclude, som refererer til et andet dokument, som er .HMTL med den bid kode, som man vil have indsat. Dette opfatter serveren derefter som en opskrift på hjemmesiden, og sammensætter dokumenterne inden de bliver sendt til klienten.</p>
                            <p id=kildereferant>- PHP præsentation</p>
                        </section>
                    </section>
                </section>
                <section id="underemne3">
                    <h2>Histodie om server/klient og HTTP-protokollen</h2>
                    <p>1957 var året, hvor konceptet for delt computerkræft blev opfundet. Baggrunden for dette var, at computere var blevet så store, at de skulle opbevares i separate kølerum. Deraf kom behovet for, at man vil have adgang til computeren, uden at man skulle være til stede i rummet. Deraf blev time-sharing udviklet, hvor man kunne være flere brugere på én computer. Dette kan siges at være det, som vi i dag, kender som et server-/klientforhold.</p>
                    <p>Som årende gik blev ARPANET udviklet, og over tiden blev det udarbejdet til at være internettet. Teknologien bag HTML og URL blev skabt af Tim Burners Lee, og i 1989 igangsatte han udviklingen af HTTP-protokollen. Dette er sidenhen blevet standardsproget for alle enheder, som anvender WWW -World Wide Web.</p>
                    <p id=kildereferant>- History of the Internet</p>
                </section>
                <section> <!-- Kilde oversigt -->
                    <h2>Kilder:</h2>
                    <p>Niels Østergaard, "Præsentation for både historie og serveren" - Server præsentation</p>
                    <p>Niels Østergaard, "PHP include præsentation" - PHP præsentation</p>
                    <p>Video fra Youtube, "<a href="https://www.youtube.com/watch?v=9hIQjrMHTv4&feature=youtu.be">"https://www.youtube.com/watch?v=9hIQjrMHTv4&amp;feature=youtu.be</a>" - History of the Internet</p>
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