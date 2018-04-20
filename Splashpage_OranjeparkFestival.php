<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=320, initial-scale=1.0, maximum-scale=1.0, user-scalable=0,">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>$gatewayname | Connect</title>
</head>
<script language="javascript" type="text/javascript">
    function toggle_visibility(id) {
        var e = document.getElementById(id);
        if (e.style.display == 'block') {
            e.style.display = 'none';
        } else {
            e.style.display = 'block';
        }
    }
</script>
<style>
    html{
        background-image:url('Background_Oranjefestival.png');
        background-repeat:no-repeat;
        background-size: cover;
        background-position:center center;
        height: 100%;
    }
    body{
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-size: 15px;
        color: #222222;
        margin: 0;

    }
    .advertentie{
        margin: 0 auto 5em auto;
        text-align: center;
        width: 60%;
        height: auto;
        border: 3px solid white;
    }
    .banner{
        color: white;
        /* background: black; */
        background-image: url("logo.png");
        background-position: center;
        background-repeat: no-repeat;
        background-size: contain;
        padding: 18em 0 14em 0;
        font-size: 3vw
    }
    .sponsorLogo{
        background-color: #F6BB93;
        border: 3px solid white;
        color: #EE541E;
        margin: 5em auto 5em auto;
        width: 80%;
    }
    .page-footer{
        font-weight: 900;
        font-size: 20px;
    }
    .conditions{
        display: none;
        height:140px;
        width:97%;
        background-color: #F6BB93;
        border: 3px solid white;
        color: #EE541E;
        overflow:auto;
        font-size: 17px;
        margin-bottom:15px;
        padding:5px;
    }
    .conditions small{
        font-size: 17px;
    }
    .button {
        filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#f9f9f9', endColorstr='#e9e9e9');
        -moz-border-radius:3px;
        -webkit-border-radius:3px;
        border-radius:3px;
        background-color: #F6BB93;
        border: 3px solid white;
        color: #EE541E;
        display:inline-block;
        font-family:arial;
        font-size:18px;
        font-weight:bold;
        padding: 10px;
        text-decoration:none;
        margin-bottom: 1em;
    }
    .button:hover {
        filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#e9e9e9', endColorstr='#f9f9f9');
    }
    .button:active {
        position:relative;
        top:1px;
    }
    .buttons{
        display: flex;
        flex-direction: column;
        align-items: flex-end;
        margin-right: 1em;
    }
    #termsButton{
        width: 400px;
    }
</style>
<body>
    <div class="content">
        <div class="banner">
            <p><h1><center>Login op onze WiFi</center></h1></p>
        </div>
        <div class="advertentie">
        <?php
        $timezone = date_default_timezone_get();
        $date = date('m/d/Y h:i:s a', time());
        ?>
        </div>
        <div class="buttons">
            <button id="termsButton" class="button" type="submit"  onclick="toggle_visibility('terms');">Lees hier onze algemene voorwaarden</button>         
            <div id="terms" class="conditions">				
                <p><strong>Door verder te gaan, gaat u akkoord met de voorwaarden.</strong></p>
                <p><small><strong>Voorwaarden</strong></small></p>
                <p><small>Door gebruik te maken van onze internetservice, stemt u ermee in dat er aanzienlijke veiligheids-, privacy- en vertrouwelijkheidsrisico’s hangen aan de toegang tot of verzending van informatie over het internet. Het maakt niet uit of de verbinding wordt gefaciliteerd via bedrading of via draadloze technologie. Beveiligingsproblemen omvatten, zonder beperkingen, onderschepping van dataverzendingen, verlies van gegevens of virussen en andere programma’s die uw computer kunnnen beschadigen.</small></p>
                <p><small>Vervolgens gaat u ermee akkoord dat de eigenaar en/of provider van dit netwerk niet verantwoordelijk is voor enige onderscheppingen van data, computervirussen, verlies van data, bestandscorruptie, hackers of schade aan uw computer of andere apparaten die het resultaat zijn van de verzending of download van informatie of materialen via de internetservice.</small></p>
                <p><small>Gebruik van het draadloze netwerk is onderworpen aan de algemene beperkingen die hieronder worden uitgelicht. Als abnormaal, illegaal of ongeautoriseerd gedrag is gedetecteerd, inclusief een grote consumptie aan brandbreedte, heeft de netwerkprovider het recht om het apparaat in kwestie te ontkoppelen van het draadloze netwerk.</small></p>
                <p><small><strong>>Voorbeelden van illegaal gebruik</strong></small></p>
                <p><small>De volgende voorbeelden zijn slechts representatieve voorbeelden en omvatten geen uitgebreide lijst van illegaal gebruik:</small></p>
                <ol>
                    <li>Spammen en inbreuk maken op privacy – Het verzenden van ongevraagde bulk- en of commerciële berichten via internet met behulp van de service of gebruik van de service voor activiteiten die inbreuk maken op de privacy van een ander.</li>
                    <li>Schendingen van het intellectueel eigendomsrecht – Elke vorm van activiteit die de intellectuele eigendomsrechten van anderen schendt of verduistert, inclusief patenten, auteursrechten, handelsmerken, servicemerken, bedrijfsgeheimen of andere eigendomsrechten van derden.</li>
                    <li>Toegang verkrijgen tot illegale of niet-geautoriseerde computers, accounts, apparatuur of netwerken van een andere partij, of poging doen om beveiligingsmaatregelen van een ander systeem te doorbreken / omzeilen. Dit omvat alle activiteiten die kunnen worden gebruikt als voorloper voor een poging tot systeempenetratie, inclusief, maar niet beperkt tot, poortscans, stealth-scans of andere activiteiten voor het verzamelen van informatie.</li>
                    <li>De overdracht van technologie, software of ander materiaal in strijd met toepasselijke exportwetten en -voorschriften.</li>
                    <li>Overtredingen van exportcontrole.</li>
                    <li>Gebruik van de Service in strijd met toepasselijke wet- en regelgeving, inclusief, maar niet beperkt tot, het adverteren, verzenden of anderszins beschikbaar stellen van ponzi-schema's, piramidespelen, fraudeloos opladen van creditcards, piraterij-software of het maken van fraudeloze aanbiedingen om producten te verkopen of te kopen, voorwerpen of diensten.</li>
                    <li>Dreigingen uiten.</li>
                    <li>Distributie van pornografisch materiaal naar minderjarigen.</li>
                    <li>Kinderpornografie.</li>
                </ol>

                <p><small><strong>Voorbeelden van onacceptabel gebruik</strong></small></p>
                <p><small>De volgende voorbeelden zijn slechts representatieve voorbeelden en omvatten geen uitgebreide lijst van onacceptabel gebruik:</small></p>
                <ol>
                    <li>Bewerkingen met hoge bandbreedte, zoals grote bestandsoverdrachten en het delen van media via peer-to-peer programma’s (dat wil zeggen torrents).</li>
                    <li>Lasterlijke of beledigende taal.</li>
                    <li>Obscure en onfatsoenlijke spraak of materialen.</li>
                    <li>Het gebruiken van de Service voor het verzenden, plaatsen, uploaden of anderszins beschikbaar stellen van lasterlijk, intimiderend, beledigend of bedreigend materiaal of taal die lichamelijk letsel bemoedigen, vernietiging van eigendom of een ander lastigvallen.</li>
                    <li>Het vervalsen of verkeerd voorstellen van berichtkoppen, geheel of gedeeltelijk, om de opsteller van het bericht te maskeren.</li>
                    <li>Vergemakkelijking van een schending van deze gebruiksvoorwaarden.</li>
                    <li>Hacken.</li>
                    <li>Het verspreiden van internetvirussen, Trojaanse paarden of andere destructieve activiteiten.</li>
                    <li>Informatie verspreiden over het maken en verzenden van internetvirussen, wormen, Trojaanse paarden, pingelen, overstromingen, bomaanslagen of denial-of-service-aanvallen. Ook activiteiten die het gebruik van of het interferen met het vermogen van anderen om het knooppunt of een aangesloten netwerk, systeem, service of apparatuur effectief te gebruiken, verstoren.</li>
                    <li>Advertenties, uitzendingen of anderszins beschikbaar stellen van softwareproducten, producten of diensten die zijn ontworpen om deze gebruiksvoorwaarden te schenden, waaronder het faciliteren van de middelen om spam te plegen, initiatie van pingelen, overstromingen, bomaanslagen, denial of service-aanvallen en piraterij van software.</li>
                    <li>De verkoop, overdracht of verhuur van de Service aan klanten, clienten of andere derde partijen, hetzij rechtstreeks, hetzij als onderdeel van een dienst of product gecreëerd voor wederverkoop.</li>
                    <li>Informatie zoeken over wachtwoorden of gegevens van een andere gebruiker.</li>
                    <li>Het maken van ongeoorloofde kopieën van bedrijfseigen software of het aanbieden van ongeoorloofde kopieën van bedrijfseigen software aan anderen.</li>
                    <li>Onderscheppen of onderzoeken van de inhoud van berichten, bestanden of communicatie in transit in een datanetwerk.</li>
                </ol>
            </div>
            <div class="row">
                <form method="get" action="$authaction">
                    <input name="tok" value="$tok" type="hidden">
                    <input name="redir" value="$redir" type="hidden">
                    <button class="button" type="submit">Login</button>
                </form>
            </div>
        </div>
    </div>
    <div class="page-footer">
        <p><center><img alt="WeeFree Logo" src="https://weefree.nl/bestanden/weefree/default/logo-wit.png" width="150"></center></p>
    </div>
</body>
</html>