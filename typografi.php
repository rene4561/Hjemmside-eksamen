<!DOCTYPE html>
<html lang="da">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Typografi</title>
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
                    <h1>Typografi</h1>
                    <p>Typografi er som den danske ordbog siger det: ”arrangement af bogstaver, tekst og illustrationer i en bestemt tekst herunder fx valg af skrifttype og -størrelse”. Typografi er mere end bare skrifttypen, det er med til at danne et helt billede af et design, hvor tekst indgår. Det er dertil med til at forme en læsers holdning og opfattelse af det givne budskab. </p>
                    <p>I dette afsnit kan man læse om følgende: </p>
                    <ul>
                        <li>Grundbegreber</li>
                        <li>Typaceface detaljer</li>
                        <li>Kombinationer (sans,'tema', textface/typeface</li>
                    </ul>
                </div>
                <section id="underemne1">
                    <h2>Grundbegreber</h2>
                    <p>Det første man skal bide mærke i, når man taler om typografi, er at font og typeface er 2 forskellige begreber. En font er kun et delelement af den overordnede typeface. Fonten er en specifik skrifttype, som Arial Regular eller Arial Italic, disse indgår deraf i fontfamilien ’Arial’. En typeface er dertil en betegnelse for samlingen af font weigts. En anden måde at se på det er, som skrevet i artikel af John Brownlee:</p>
                    <blockquote>”In brief: A font is what you use, a typeface is what you see.”</blockquote>
                    <p>X-height er en betegnelse for højden på minusklerne, små bogstaver, dog er ascenders og descenders ikke en del af x-height. Som tommelfingerregel er typefaces med kort x-height svære at læse end dem med høj x-height.</p>
                    <p>Counters er den lukkede del af bogstaver, som n og d. Typefaces med små counters er, ligesom dem med kort x-height, svære at læse.</p>
                    <p>Serif og Sans serif er henholdsvis typefaces med og uden ’fødder’. Traditionelt har man anvendt serif typefaces som text faces, da man siger, at serif danner en naturlig linje for øjet at følge. Dertil har man også ment at sans serifs primært skal benyttes som display face, da de står i god kontrast til serif typefaces. I dag kan man dog benytte sig af begge til hvilken som helst rolle.</p>
                    <p id=kildereferant>- Type Burrito</p>
                    <img src="modeller/font_anatomi.png" alt="Her er ovenstående begreber illustreret på ordet kind">
                    <p>Contrast er forskellen mellem den tykkeste og tyndeste del af et bogstav. Høj contrast typefaces er også svære at læse i små størrelser. Det skyldes, at de tynde linjer kan virke ubehagelige for læseren. </p>
                    <img src="modeller/font_kontrast.png" alt="Font kontrast illustration">
                    <p>Color har, som navnet ellers hentyder til, intet at gøre med farven på skriften. Det dækker over hvor mørk, eller lys, en blok af tekst er, når man ser på den med lidt afstand. Mørke typefaces kan være svære at læse, hvis de anvendes i lange tekstafsnit, da teksten kan virke alt for tæt. Dette kan, til dels, justeres med højere leading. </p>
                    <img src="modeller/font_color.png" alt="Her ses to tekst paragraffer, med hhv høj og lav color">
                    <p>Leading kan oversættes til linjeafstand, og som regel vil man anvende 120% linjeafstand, da det typisk er nemmest af læse.</p>
                    <img src="modeller/font_leading.jpg" alt="Font leading illustration" >
                </section>
                <section id="underemne2">
                    <h2>Hvad er god typeface?</h2>
                    <p>Der findes et hav af typefaces på internettet, men det kan være svært at afkode hvilke der er gode, og hvilke der er knapt så gode. Heldigvis findes der en række tips, som er nyttige, mens man søger.</p>
                    <p>Først kan det være en god idé at tjekke om typefacet har alle de bogstaver, som man skal bruge. Ikke alle typefaces har eksempelvis æøå. De fleste gode typefaces har de fleste, hvis ikke alle, specielle bogstaver for alle latin alfabetiske sprog. </p>
                    <p>Dertil kan det også være hensigtsmæssigt at tjekke efter specialtegn såsom ’&amp;’ tegn og lignende. Disse er små detaljer, som tilføjer en sans af fuldendthed til sin typografi.</p>
                    <p>Når man udvælger et typeface til text face, skal man tjekke om der er følgende weights: regular, italic, bold og bold italic.</p>
                    <p>Et veludtænkt typeface har som regel også et komplet sæt af glyffer som krøllede citat-tegn (”). Der findes mange af disse tegn, og man anvender ikke nødvendigvis dem alle, men det er godt at have mulighed for at anvende dem. </p>
                    <p>Traking og kerning, er 2 begreber der fortæller noget om afstanden mellem bogstaver.</p>
                    <p>Tracking kan oversættes til, at være afstanden mellem bogstaverne i et ord. Gode typefaces har som regel god afstand mellem bogstaverne, men dette kan også justeres, da der findes nogle variabler, hvor det kan være favorabelt at øge eller sænke afstanden. Et eksempel på en situation hvor man kunne ønske en højere afstand kunne være, hvis man har meget lange linjer. Her kunne det overvejes at øge afstanden.</p>
                    <p id=kildereferant>- Type Burrito</p>
                    <img src="modeller/font_tracking.jpg" alt="Illustration af 3 tekster med forsellig tracking">
                    <p> En god typeface er også kerned. Det vil sige, afstanden mellem 2 givne bogstaver. Ikke alle bogstaver har samme proportioner og deraf kan de, hvis ikke kerned korrekt, have forskellige afstande mellem nogle bogstavkombinationer. Dette kan resultere i at en læser kan føle sig forstyrret af et ujævnt mellemrum mellem bogstaver.</p>
	               <blockqoute src="https://www.webfx.com/blog/web-design/the-basics-of-typography/">” Remember: good typography is never noticed.”</blockqoute>
                    <img src="modeller/font_kerning.jpg" alt="2 tekster hvor den ene er kerned, og den anden er ikke">
                    <p>Den sidste regel er lidt mere abstrakt end de andre. Det er også vigtigt at se på bogstavernes kvalitet. Ting man kan holde øje med, er gentagende elementer som kurverne på n, h og m, de burde se jævnbyrdige ud. Dette gælder også om, at alt det ovenstående er gennemgående på alle bogstaver; er contrat ens?</p>
                    <p>Generelt kan man sige, at man kan skal følge sin egen mavefornemmelse med kvaliteten på typefacet. </p>
                    <p id=kildereferant>- Type Burrito</p>
                </section>
                <section id="underemne3">
                    <h2>Kombinering af typefaces</h2>
                    <p>Når det vedrører kombinering af type faces siges det, at der findes én overordnet regel – unity and variety.</p>
                    <p>Dette betyder, at når man skal matche 2 type faces, skal de begge have nogle ligheder – så de ser sammenhængende ud. Dertil skal de også være forskellige nok til, at designet ikke bliver kedeligt og alt for sammenhængende.</p>
                    <p>Der findes flere måder at opfylde disse krav på, nedenfor ses der et par basale eksempler:</p>
                    <p>Man kan altid anvende samme font familie. Her er man sikret at skrifttyperne parrer godt sammen, dog kan man risikere at det bliver lidt for ensartet.</p>
                    <p>Serif og sans serif, er et klassisk match. Her har man med afsat variation, da en har fødder og den anden har ikke. Derefter gælder det bare at finde lidt lighed mellem de 2 type faces. Her kan man se efter lignende x-heights, ens former – runde, kantet, mm.</p>
                    <p id=kildereferant>- Type Burrito</p>
                </section>
                <section>
                    <h2>Kilder:</h2>
                    <p>Type Borrito, "<a href="http://typeburrito.com/2016/03/18/stop-feeling-dumb-about-pairing-fonts.html">http://typeburrito.com/2016/03/18/stop-feeling-dumb-about-pairing-fonts.html</a>" - Stop Feeling Dumb About Pairing Fonts</p>
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