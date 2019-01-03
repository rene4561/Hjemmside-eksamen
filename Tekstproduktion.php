<!DOCTYPE html>
<html lang="da">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tekstproduktion</title>
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
                    <h1>Tekstproduktion</h1>
                    <p>Multimediedesignere skal kunne kommunikere på flere forskellige medier, og i den forbindelse, skal man kende til de forskellige måder man kan kommunikere på for virksomheden - i dette tilfælde i forhold til tekstlig kommunikation - ligeledes at kunne strukturere og producere dem. Det vil jeg komme ind på i dette afsnit, for ”concent is king!” </p>
                    <p id="kildereferant">- Kommunikation i multimediedesign s.236.</p>
                    <p>På denne side kan man læse om følgende emner:</p>
                    <ul>
                        <li>Artiklen - herunder nyhedsartiklen og den subjektive artikel </li>
                        <li>Produkt- og emnebeskrivelse</li>
                        <li>Brochuren</li>
                        <li>Annoncen</li>
                        <li>Webtekst</li>
                        <li>Sociale medier</li>
                    </ul>
                </div>
                <section id="underemne1">
                    <h2>Artiklen</h2>
                    <blockquote>”Grundlæggende er den klassiske artikel en samlet betegnelse for en kortere, afsluttet, selvstændig behandling af et emne, som kan stå i en avis, et tidsskrift, et nyhedsmedie online osv.” (multimeidedesign s. 240).</blockquote>
                    <p>Kort fortalt er målet med en artikel, at man skaber interesse via et hurtigt overblik over det indhold, som artiklen indeholder. Derudover kan den behandle forskellige emner samt have forskellige formål. </p>
                    <p>Grundlæggende når man skal skrive en artikel, så skal man være opmærksom på sine kilder. Dertil skal man undgå følgende kilder: Kilder man ikke kan tjekke, kilder man har fælles interesse med og kilder man personligt kan lide.</p>
                    <p>Dertil skal man også være opmærksom på, hvilke billeder man vil anvende i sin artikel. Man skelner mellem disse to typer af billeder: Virkelige billeder - altså reportage billeder eller dokumentation og Arrangerede billeder - dvs. illustrationer, modelbilleder og lignende.</p>
                    <p>Til sidst skal man også tænke over sin opsætning. Nedenfor nævnes fagbegreberne: Rubrik - altså overskriften. Trompet - dvs. en overlinje, som beskriver noget generelt om emnet- eksempelvis, hvor vi er verden. Manchet - denne kan nemt forveksles med en underrubrik, men forskellen er, at en manchet er en konklusion eller et referat af artiklen. Byline - den beskriver, hvem der har skrevet artiklen eller taget billedet. Kolofon - her skrives der informationer om mediet selv, eksempelvis, kontaktinformation til avisen. Sidst, vinkling - her skal man vurdere hvilket perspektiv man vil skrive artiklen ud fra.</p>
                    <p id="kildereferant">- Kommunikation i multimediedesign ss.236-240</p>
                    <img src="Modeller/tekstp_artikel.png" alt="Artikel opstillingstermer anvendt i praksis">
                    <section>
                        <h2>Nyhedsarriklen</h2>
                        <p>Denne artikels formål er, som navnet lyder, at den kan formidle nyheder ud til læseren. Journalisten skal, ved anvendelse af denne artikeltype, forholde sig objektiv til historien.</p>
                        <p>Artiklen er kendetegnet ved at være struktureret via nyhedstrekanten. Dens formål er at give læseren en hurtig forståelse for: hvem, hvad, hvorfor og hvordan i forhold til nyheden. Det betyder at det vigtigste står først i artiklen, og de uddybende detaljer kommer herefter. Man kan i nedenstående figur nærstudere, hvordan nyhedstrekanten er skruet sammen samt hvilke elementer, der hører til hvor. </p>
                        <p>Derudover er det et kompositionsprincip, som gør at læseren nødvendigvis ikke behøver læse hele artiklen - hvis artiklen altså er godt skrevet. </p>
                        <img src="Modeller/tekstp_nyhedstrekant.png" alt="Nyehdstrekanten" id="nyhedstrekant">
                        <h2>De fem nyhedskriteriee</h2>
                        <p>Derudover anvender man de fem nyhedskriterier, som er med til at bestemme artiklens nyhedsværdi. En artikel skal nødvendigvis ikke opfylde alle fem nyhedskriterier, men hvis det er en nyhedsartikel, så fylder den oftest to eller tre nyhedskriterier. </p>
                        <p>De fem nyhedskriterier er: </p>
                        <dl>
                            <dt>Væsenlighed</dt>
                            <dd>Noget der har grundlæggende betydning, eller konsekvens for mange mennesker. Eksempelvis: ”Skatten stiger næste år”. </dd>
                            <dt>Sensation</dt>
                            <dd>Noget der fascinerer eller chokerer. Det er ofte de små og skæve historier i nogle aviser, som kan være forsidehistorier i andre aviser. 
                            Eksempelvis: ”Mand bider hund” eller ”Kvinde overlevede en måned under sammenstyrtet hus”.</dd>
                            <dt>Konflikt</dt>
                            <dd>Når sager eller personer er på kollisionskurs. 
                            Eksempelvis: ”Vred far anklager kommune for sjusk”.</dd>
                            <dt>Identifikation</dt>
                            <dd>Noget som læseren kan genkende sig selv i. En historie, der får læseren til at tænke ’det kunne være mig’, ’bare det var mig’ eller ’godt, det ikke er mig’. 
                            Eksempelvis: ”Ni ud af ti danskere spiser for meget sukker”.</dd>
                            <dt>Atkualitet</dt>
                            <dd>Noget der er oppe i tiden. Historien må gerne udspringe af stof som i forvejen cirkulerer i andre medier. Langt de fleste nyheder udspringer af dette nyhedskriterium. 
                            Eksempelvis: ”Et parti vælger ny formand” eller ”et containerskib er sejlet ind i en bro”.
                            </dd>
                        </dl>
                        <p id="kildereferant">- Kommunikation i multimediedesign ss.240-241</p>
                    </section>
                    <section>
                        <h2>Den subjektive artikel</h2>
                        <p>Foruden de objektive artikler findes der også subjektive artikler. Ved brug af denne artikeltype anvender man et andet kompositionsprincip, og kommodemodellen er et ofte anvendt princip i denne forbindelse. </p>
                        <p>Kommoden fungerer ved, at selve kommoden er rammen; hvem, hvad hvor, hvornår og hvorfor? og dernæst konklusionen. Der er så en masse skuffer, som man kan hive ud i for at opnå mere information. Dette betyder altså, at alle skuffer i dette kompositionsprincip, er lige vigtige, og at man som læser, derfor kan udvælge de emner, som de ønsker at læse - så de undgår at skulle læse hele artiklen. </p>
                        <p id="kildereferant">- Kommunikation i multimediedesign ss.241-242</p>
                        <img src="Modeller/tekstp_subjektiv.jpg" alt="Kommoedemodellen, med de mange stuffer">
                    </section>
                </section>
                <section id="underemne2">
                    <h2>Produkt- og emnebeskrivelse</h2>
                    <p>Udover de to ovennævnte artikeltyper, så findes der også produkt- og emnetekster, hvis formål er at skabe interesse og øget lyst til, eksempelvis, at købe et produkt eller at ændre adfærd. </p>
                    <p>Til strukturering af denne artikeltype kunne man anvende Hey-You-See-So modellen:</p>
                    <p id="kildereferant">- Kommunikation i multimediedesign s.242</p>
                    <img src="Modeller/tekstp_produkt.jpg" alt="Her ses Hey-you-See-So modellen" id="hey-you-see-so">
                </section>
                <section id="underemne3">
                    <h2>Brochuren</h2>
                    <p>Dette er en anden slags tekst, og her ligger fokusset på, hvordan typografi og billeder understøtter indholdet - altså teksten. Med det sagt, så er der nogle punkter til eftertanke nedenfor:</p>
                    <ul>
                        <li>Overordnet formål - altså vinklen.</li>
                        <li>Målgruppe - rig eller fattig, ung eller gammel med mere.</li>
                        <li>Produkt/emne - med andre ord, hvad det er konkrete formål.</li>
                        <li>Stilvalg - hvilken følelse og æstetiske træk skal brochuren have, dette gælder også indholdet.</li>
                        <li>Medieformatets detaljer - hvad bliver det trykt på, hvilket format og hvilken farvekode? </li>
                        <li>Distribution - hvor vil folk finde denne brochure, og i hvilken kontekst? </li>
                        <li>Informationsarkitektur - hvor eller hvordan skal det hele hænge sammen i forhold til forside, bagside og midtersiderne?
                        Forsiden indeholder virksomhedens logo, og skal have et flot billede. 
                        Midtersiderne indeholder flotte billeder af produkterne og gode tekster dertil - de skal også appellere til kundernes følelser. 
                        Bagsiden indeholder virksomhedens kontaktinformationer og andre informationer.</li>
                    </ul>
                    <p>Idéen er at overveje ovenstående, og dernæst skrive indholdet med disse overvejelser bag øret. Derefter kan man gå i gang med designprocessen.</p>
                    <p id="kildereferant">- Kommunikation i multimediedesign ss.243-244</p>
                </section>
                <section id="underemne4">
                    <h2>Annoncen</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adiEn annonce er en tekst som skal være nem og hurtig for læseren, at kunne skimte nedover. Dens formål er at den skal fange modtageren øjeblikkeligt. 
                    Kompositionsmæssigt kan man anvende nedenstående model, som vejledning til tekstelementernes placering i annoncen.</p>
                    <img src="Modeller/tekstp_annonce.png" alt="Illustration af annonce layout">
                    <section>
                        <p>Dertil kan man anvende AIDA-modellen, når man skal opbygge annoncen. AIDA beskriver den effekt, som modtageren gerne skulle opnå ved at se annoncen for eksempel. </p>
                        <p>Attention - modtageren skal blive opmærksom på budskabet, det kan for eksempel være i form af en opsigtsvækkende overskrift.</p>
                        <p>Interest - modtageren skal opnå yderligere interesse for det, i dette tilfælde, annoncen vil fortælle, sælge og lignende. </p>
                        <p>Desire - hvis interessen skabes hos modtageren, så kan det føre til, at modtageren ønsker at ændre adfærd, købe produktet og lignende. </p>
                        <p>Action - modtageren handler på, i dette tilfælde, annoncen. 
                        Eksempelvis: vedkommende køber produktet.</p>
                        <img src="Modeller/tekstp_AIDA.jpg" alt="AIDA modellen">
                    </section>
                    <section>
                        Indholdet, som skrives, skal også skrives så den passer til indholdet samt målgruppen. Dertil kan man anvende nedenstående forskellige strategier - strategierne er blandbare:
                        <ul>
                            <li>USP (Unique Selling Proposition) - denne bygger på her og nu tilbud eller kvalitet, udbud, sted og lignende.</li>
                            <li>ESP (Emotional Selling Proposition) - man appellerer til patos, altså følelserne, på både godt og ondt. </li>
                            <li>ISP (Ironic Selling Proposition) - man anvender ironi eller sort humor. </li>
                            <li>BSP (Brand Selling Proposition) - dvs. hvis et brand er større end produktet der sælges. </li>
                            <li>OSP (Orginizational Selling Proposition) - dvs. brands som anses for at være værdifulde p.ga. deres styrke på markedet. 
                            Eksempelvis: Coca Colas navn, altså Coca Cola, har en værdi på markedet, fordi navnet er penge værd. </li>
                        </ul>
                    </section>
                <p id="kildereferant">- Kommunikation i multimediedesign ss.244-246</p>
                </section>
                <section id="underemne5">
                    <h2>Webtekst</h2>
                    <p>Når man skriver webtekst, er det vigtigt at man ikke falder i fælden med at skrive tekst som en tryktekst.</p>
                    <p>Man skal huske at når en bruger lander på en hjemmeside, er de på en mission. De har et mål eller en mission, som skal fuldføres. Derfor er brugeren meget informationssøgende, hvor de leder efter hints, der kan dirigere dem videre.</p>
                    <p>Man skal være bevidst om, at skimning på en hjemmeside ikke nødvendigvis foregår som på traditionelt vis. Over årene har internettet udviklet en række konventioner, som gør at brugere læser anderledes på nettet. De har forventninger om, at nogle elementer har en fast plads såsom navigation. Derfra skimmer brugere ofte i form af et F.</p>
                    <p>Derfor kan man, med god samvittighed, låne fra journalistikkens verden. <a href="#nyhedstrekant">Nyhedstrekanten</a> og <a href="#hey-you-see-so">hey-you-see-so modellen</a> er velegnet som skabelon for en webtekst. </p>
                    <p>Dertil er det godt at inddele sin tekst i mange små afsnit med sigende overskrifter. Man skal også holde sig til ét emne per afsnit – hvis man vil gå hele vejen, kan man også fremhæve et par nøgleord med fed skrift.</p>
                    <p>Tekst skal skrives i bydeform, hvilket gør teksten mere forståelig for brugeren. Det er generelt vigtigt at man taler i brugerens sprog, da siden er til for at opfylde deres behov.</p>
                    <p>Endnu en konvention, som man kan benytte sig af, er brugen af hypertext eller rettere links. Brugere ved at et link fører dem videre, derfor leder de tit efter disse. Dertil er det en god idé at skrive sigende links – altså nogle som gør det klart for brugeren, hvad de kommer ind på.</p>
                    <p id="kildereferant">- Online kommunikation</p>
                </section>
                <section id="underemne6">
                    <h2>De Sociale medier</h2>
                    <p>Dette afsnit tager udgangspunkt i Facebook. </p>
                    <p>Når man tænker på at lave tekst til de sociale medier er der 2 overordnende principper, som man skal have styr på - reach og konverteringsrate. </p>
                    <p>Reach dækker over, hvor mange ens indhold når ud til. Der er flere faktorer der bestemmer ens reach: hvis siden er ny, det er længe siden man sidst har postet eller hvis ens opslag ikke skaber interesse. </p>
                    <p>Interesse måles, i Facebooks verden, på hvor mange der interagerer med det indhold, som man producere. Det vil sige ting som likes og kommentarer. </p>
                    <p>En strategi, som man kan benytte sig af, er at være sympatisk over for brugerne. Man skal ikke skrive alt for formelle posts, for det kan folk ikke relatere sig til. For at understøtte det, kan man henvende sig direkte til kunden ved at anvende bydeform.</p>
                    <p id="kildereferant">- Casten Guldborg</p>
                    <img src="Modeller/tekstp_social.png" alt="Et Facebook opslag, skrevet af en hund">
                    <section>
                        <h2>Konverteringsrate</h2>
                        <p>Når man nu har fået et højt reach, er det også med at få det udnyttet. Det man skal forstå her er, hvordan man får Facebookbrugere over til ens hjemmeside. Det ironiske er, at det ikke bare sker af sig selv. </p>
                        <p>For at få lokket brugere over på sin hjemmeside kræver det, primært, at man angiver et link dertil. Derudover skal man skabe et behov, eller en årsag, til at de skal gå væk fra Facebook – dette skaber dog dårlig reach, da Facebook ikke kan lide, at man dirigerer brugere væk fra deres hjemmeside. Dertil er det vigtigt altid at veksle mellem posts der skaber reach, og posts der konvergerer.</p>
                        <p>Når man prøver at sælge noget på Facebook, skal man ikke prøve at sælge dem produktet via traditionel markedsføring, men rettere sælge det via drømmen bag produktet.  </p>
                        <p id="kildereferant">- Casten Guldborg</p>
                        <img src="Modeller/tekstp_konvertering.png" alt="Her ses hvordan man kan sælge et jakkesæt, uden at nævne jakkesættet">
                    </section>
                </section>
                <section> <!-- Kilde oversigt -->
                    <h2>Kilder:</h2>
                    <p>Anne Mette Busch, "kommunikation i multimediedesign" - kap. 17</p>
                    <p>Carsten Guldborg, "Online-Marketing__1-dage__Carsten_Guldborg__low_ress" - PDF</p>
                    <p>Nanna Friis, "Online kommunikation" - kap. 5</p>
                    
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