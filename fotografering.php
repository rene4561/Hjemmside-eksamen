<!DOCTYPE html>
<html lang="da">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Fotografering</title>
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
                    <h1>Fotografering</h1>
                    <p>Under dette emne kan man læse om kameraets funktioner og en kort showcase af billeder.</p>
                    <ul>
                        <li><a href="#underemne1">Kamera anatomi – herunder objektiver</a></li>
                        <li><a href="#underemne2">Kamenaets funktioner</a></li>
                        <li><a href="#indstilling">Indstillinger</a></li>
                        <li><a href="#underemne3">Showcase</a></li>
                    </ul>
                </div>
                <section id="underemne1">
                    <h2>Kamera anatomi</h2>
                    <p>I undervisningen har vi anvendt et Canon Eos 80D spejlrefleks kamera. Når man anvender sådan et kamera, kræves det, at man har styr på et par forskellige funktioner i kameraet. Forud for dette kræves en kort forklaring på hvordan et spejlrefleks kamera fungerer. </p>
                    <p>Et digitalt spejlreflekskamera er et kamera som tager billeder ved, at en sensor optager udefrakommende lys. Dette vil derefter blive omdannet til et billede. Det væsentlige er at man skal forestille sig, at de sensorer der sidder i kameraet, er sultne efter lys og bliver gradvist mættet, som de eksponeres for lys.</p>
                    <p id=kildereferant>- Niels PDF</p>
                    <h2>Objektiver</h2>
                    <p>Udover kameraet anvender man også det der kaldes et objektiv. Disse er opbygget af en række linser, som giver forskellige brændvidder. Disse kommer i mange størrelser og former, og har en effekt på kameraets perception af virkeligheden. </p>
                    <img src="modeller/objektiver.png" alt="Billede af en masse forskellige objektiver">
                    <p>Brændvidden på et kamera er afstanden, målt i millimeter, fra den midterste linse til kamerasensoren. Dette har den betydning, at lyset sensoren opfanger vinkels forskelligt alt efter brændvidden. Når afstanden er kort, er det en vidvinkel, en bred vinkel, og når afstanden er stor, så er det en tele. </p>
                    <p id=kildereferant>- Niels PDF</p>
                    <img src="modeller/br%C3%A6ndvidde.jpg" alt="Illustration af brændvidder - fra bred til tele">
                </section>
                <section id="underemne2">
                    <h2>Kameraets funktioner</h2>
                    <p>Lukkeren er en skærm, som holder lyset ude. Dette betyder, at sensoren ikke får noget lys, medmindre denne åbnes. Det er dennes åbningstid man justerer på når man indstiller lukker tiden. Dermed betyder det, at jo længere lukkeren er åben, desto lysere bliver billedet. Dertil bliver bevægende objekter sløret, da sensoren opfanger lys fra mere end én position af objektet.</p>
                    <p id=kildereferant>- Niels PDF</p>
                    <img src="modeller/shutterspeed.png" alt="Billeder der viser bevægelse med forskellige lukke tider">
                    <h2>Blænde</h2>
                    <p>Blænden afgør hvor høj dybdeskarphed kameraet har. Dette skyldes at blænden bestemmer hvor meget lys der kommer igennem linsen, og dermed begrænser hvor meget der er i fokus. Enheden man indstiller i kaldes f-stop – hvor lavt f-stop tillader mere lys, men mindre i fokus, og højt f-stop mindre lys, men dybdeskarpheden øges.</p>
                    <p id=kildereferant>- Niels PDF</p>
                    <img src="modeller/dybde.PNG" alt="Et billede, af en Warhammer figur, der viser hvordan blænden ændre dybdeskarpheden">
                    <h2>ISO</h2>
                    <p>ISO er sensorernes lysfølsomhed. Dette betyder, at man kan få mere lys i et billede på kortere tid. Dog er der det minus, at der vil være mere ’støj’ fra sensoren. Dette betyder at billedet kan se grynet ud, og det vil gerne undgås. ISO har en standard værdi på 100, og kan nå op på værdier som 6400. </p>
                    <p id=kildereferant>- Niels PDF</p>
                    <img src="modeller/ISO.jpg" alt="Et billede, af en Warhammer figur, som viser hvordan ISO påvirker et billede">
                    <h2 id="indstilling">Indstilling af kameraet</h2>
                    <p>Når man indstiller kameraet, er det vigtigt at have alle disse funktioner med i sine overvejelser, da sammenspillet mellem alle disse indstiller kan være komplekst. Udover man skal tænke på hvad, man skal tage et billede af, skal man også tænke på hvilke omgivelser og forhold man tager billedet under, da dette kan have indflydelse på hvordan man skal indstille kameraet. Nedenfor er en lille manual til kamera indstillings navne:</p>
                    <dl>
                        <dt>Manuel (M)</dt>
                        <dd>Her kan man indstille både blænde og lukkertid.</dd>
                        <dt>Tidsforvalg (Tv)</dt>
                        <dd>Her indstiller man selv lukkertiden, men kameraet bestemmer blænden.</dd>
                        <dt>Blændeforvalg (Av)</dt>
                        <dd>Her indstiller man selv blænden, men kameraet bestemmer lukkertiden.</dd>
                        <dt>Program (P)</dt>
                        <dd>– Kameraet finder selv det den mener er den bedste løsning på hhv. lukkertid og blænde. Dette er smart hvis man skal tage hurtige billede.</dd>
                    </dl>
                    <p>Man skal derudover huske at indstille kameraet til, at tage billeder i RAW-format. Dette giver det bedste resultat, da kameraet ikke komprimere billedet.</p>
                    <p id=kildereferant>- Niels PDF</p>
                </section>
                <section id="underemne3">
                    <h2>Showcase</h2>
                    <p>Denne sektion er tiltænkt som en showcase at mit kameraarbejde under studiet. Siden vil blive opdateret løbende med nye tilføjelser.</p>
                    <h2>HEAT - One page projektet</h2>
                    <p>Under One-page projektet fik Simone og jeg til opgave at lave en hjemmeside til energidrikken HEAT, fra Nutramino.</p>
                    <p>Dertil ville vi tage en række produktfotos. Forud for fotograferingen undersøgte vi hvordan man kunne tage gode produkt billeder, dertil fandt et tutorial fra Brian Rodgers Jr., som er professionel fotograf. Nedenfor ses det endelige resultat.</p>
                    <img src="modeller/heat_d%C3%A5ser.png" alt="Billede af 3 HEAT energi dåser ved siden af hindanden">
                    <p>Fidusen her er at man tager billeder at produktet, med belysning fra forskellige sider, fremfor at få perfekt belysning i første omgang. Idéen her er at hver belysning skal fremhæve en bestemt del af produktet. Dette giver en stor kontrol over hvordan belysningen er i det endelige produkt Derefter sammenlægges alle billederne i Photoshop, hvor de dertil også bliver justeret.</p>
                    <p id=kildereferant>- Brian Rodgers</p>
                    <img src="modeller/3%20vinkler%20heat.PNG" alt="Her ses en HEAT energidrik med 3 forskellige belysninger">
                    <p>Her ses billederne vi tog individuelt. En yderligere bemærkning - vi brugte et stykke sort lamineret pap til at skabe refleksionen af dåsen.</p>
                    <img src="modeller/studie.jpg" alt="Et billede af Simone og jegs fotostudie">
                </section>
                <section id="kilder"> <!-- Kilde oversigt -->
                    <h2>Kilder:</h2>
                    <p>Niels Østergaard, "Præsentation om kamerafunktionalitet" - PDF </p>
                    <p>Brian Rodgers, "<a href="https://www.youtube.com/watch?v=oqa9pbsTJQ0&feature=youtu.be">https://www.youtube.com/watch?v=oqa9pbsTJQ0&amp;feature=youtu.be</a>" - How To Photograph And Composite A Commercial Beverage Image In Photoshop.</p>
                </section>
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