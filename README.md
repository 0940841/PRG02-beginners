# PRG02-beginners

Huiswerk en voorbeelden per les. In sommige gevallen zijn 
de opdrachten nog niet afgemaakt, maar dienen als opzet voor jou om verder aan te werken.

## Huiswerk
* [Week 1](#week1)
* [Week 2](#week2)
* [Week 3](#week3)
* [Week 4](#week4)
* [Week 5](#week5)

<a id="week1"></a>
### Week 1

#### Opdracht 1.1
Schrijf de huidige!! datum/tijd op het scherm in verschillende notaties:
* “het is vandaag 1 november 2011”
* “het is vandaag 1/11/2011”
* “het is nu 2 uur en 30 minuten” (of: “het is nu 6 uur en 1 minuut”)

#### Opdracht 1.2
Maak een pagina die de bezoeker welkom heet en op basis van de tijd goedemorgen, -middag, avond of nacht zegt.

<a id="opdracht1-3"></a>
#### Opdracht 1.3
Maak een webpagina waarop een overzicht van muziek te zien is. Deze informatie komt uit een (associatieve) array, die je zelf hardcoded gevuld hebt met minimaal 10 albums. Hierin zit de volgende informatie:
- Naam artiest
- Naam album
- Jaar van uitkomen
- Aantal tracks
- Genre

Eisen voor het weergeven van de data:
- Maak een tabel waarin elke rij de bovengenoemde onderdelen bevat.
- Elke rij heeft een regelnummer
- Elke oneven rij heeft een donker grijze achtergrond en witte letters (de andere rijen wit
met zwarte letters)

#### Opdracht 1.4 (extra)
Maak een webpagina die laat zien welk sterrenbeeld je hebt op basis van je verjaardag. Je verjaardag mag je hardcoded verwerken

<a id="week2"></a>
### Week 2
#### Opdracht 2.1
- Toon de datum van vandaag in een webpagina met het format "31-12-15 10:00"
- Toon de datum als hierboven, maar dan 1 week eerder
- Toon het verschil in dagen tussen 5 februari en 12 augustus.
- Toon het aantal nachten slapen tot je volgende verjaardag

<a id="opdracht2-2"></a>
#### Opdracht 2.2
Gebruik de muziektabel uit de vorige les ([opdracht 1.3](#opdracht1-3)).

Voeg aan elke rij een "Detail" link toe. Deze linkt naar een pagina waarin alleen de gegevens van dat album getoond worden. Maak ook de detailpagina en gebruik css voor een gepaste opmaak.

#### Opdracht 2.3
Gebruik de muziektabel uit de vorige opdracht ([opdracht 2.2](#opdracht2-2))

Voeg aan elke rij een "Edit" link toe. Deze linkt naar een pagina waarin een formulier getoond wordt met velden die overeenkomen met de eigenschappen van het betreffende album. De gegevens van het album zijn alvast ingevuld in het formulier.
Wanneer op verzenden geklikt wordt, gaat de bezoeker naar een andere pagina waarin de gegevens uit het formulier getoond worden op het scherm.

<a id="opdracht2-4"></a>
#### Opdracht 2.4
Voeg aan de vorige opdracht ([opdracht 2.3](#opdracht2-3)) een "Create" link toe, boven de tabel.
Na het aanklikken van de create wordt de bijbehorende pagina geladen met een formulier waarvan de velden overeenkomen met de gegevens van een album. Elke veld is voorzien van validatie waarbij geldt:
- Elke veld uit het formulier is een verplicht veld
- Het veld met het aantal tracks van het album moet een getal bevatten.

<a id="week3"></a>
### Week 3
#### Opdracht 3.1
Creëer lokaal, met behulp van PHPMyAdmin, een database voor de muziekcollectie. Aan de muziekcollectie wordt één onderdeel toegevoegd, namelijk een afbeelding van de albumhoes. Let op, dit is een link naar het plaatje in de database bijv: “/images/Adele.png”.

Vul de database met 10 albums (inclusief afbeeldingen).

<a id="opdracht3-2"></a>
#### Opdracht 3.2
Maak de list view voor de albums uit de database. Gebruik de tabel uit [opdracht 1.3](#opdracht1-3) alleen komt de data nu uit de database ipv een hardcoded array. Voeg aan elke rij een thumbnail van de albumhoes toe.
#### Opdracht 3.3
Maak de detailpagina ook dynamisch vanuit de database. Voeg ook hier de afbeelding toe aan de detailpagina.
#### Opdracht 3.4
Maak een alternatieve view voor [opdracht 3.2](#opdracht3-2). In plaats van een tabel zijn de albumhoezen (met naam van de artiest eronder) te zien op de site. De hoezen worden in 3 kolommen geplaatst en zijn aanklikbaar waarna de detailpagina getoond zal worden.

De HTML opbouw van een album + artiest komt uit een extern template document.

<a id="week4"></a>
### Week 4

<a id="opdracht4-1"></a>
#### Opdracht 4.1
Voeg, in de list view van [opdracht 3.2](#opdracht3-2), een delete link toe voor elk album. Wanneer een bezoeker op de link klikt wordt het album in zijn geheel uit de database verwijderd. Het plaatje in de map images mag je laten staan.

<a id="opdracht4-2"></a>
#### Opdracht 4.2
Ga verder met [opdracht 2.4](#opdracht2-4) zodat de data uit het createformulier in de database komt te staan.

Het plaatje mag je nu nog met de hand toevoegen. Dit betekent dat er wel een input field is van type=”text” voor de link naar het plaatje, maar hier tik je handmatig de naam van het plaatje in. Het plaatje zelf plaats je handmatig in de map ‘images’.

Let op! Voordat je de link opslaat in de database zal je via php, voor de naam van het plaatje ‘images/’ als string moeten plaatsen om de link compleet werkend te maken.

Ook zal de pagina voorzien moeten zijn van validatie. Het controleren van de input-velden gebeurt dmv een postback (tip: if(isset())

<a id="opdracht4-3"></a>
#### Opdracht 4.3

Ga verder met [opdracht 2.3](#opdracht2-3) zodat de data in het editformulier automatisch gevuld wordt vanuit de database. (Je zal zien dat deze pagina voor een zeer groot deel overeenkomt met die van [opdracht 4.2](#opdracht4-2).)

Ook zal de pagina voorzien moeten zijn van validatie. Het controleren van de input-velden gebeurt dmv een postback (tip: if(isset())

#### Opdracht 4.4

Zorg er bij [opdracht 4.1](#opdracht4-1) voor dat het plaatje ook van de harde schijf verwijderd wordt.

Zorg er nu voor dat bij [opdracht 4.2](#opdracht4-2) en [opdracht 4.3](#opdracht4-3) de plaatjes dmv php in de images map komen te staan en de link naar het plaatje in de database. Het input field in de HTML wordt nu een <input type=”file”> ipv <input type=”text”>. Bij een update van het plaatje moet het oude plaatje eerst verwijderd worden en de nieuwe geüpload worden en de link aangepast in de database.

<a id="week5"></a>
### Week 5
#### Opdracht 5.1

Maak een loginpagina met een formulier waarin email en wachtwoord ingevoerd kunnen worden. Maak een aparte tabel ‘users’ in de database. Met daarin de kolommen id, email, password

Maak de loginpagina werkend zodat bij een foutieve login een error massage getoond wordt (op dezelfde pagina) en bij een goede combinatie van email en password ‘login succes’ getoond wordt.

Tip: kijk de volgende video’s van de php cursus op Pluralsight:
- PHP Password Hashing API
- Storing Passwords
- Validating Passwords

#### Opdracht 5.2

Voeg aan de loginpagina een SESSION toe. Wanneer de gebruiker juist is ingelogd wordt de id en email in de session opgeslagen.

Beveilig de createpagina zodat gebruikers die niet ingelogd zijn ook niet op de pagina kunnen komen. In plaats daarvan worden ze doorgestuurd naar de loginpagina.

#### Opdracht 5.3

Maak de logoutpagina werkend

#### Opdracht 5.4
Zorg dat in de tabel van de albums ook opgeslagen wordt wie het album ingevoerd heeft. Denk na over een efficiënte manier waarop je dit kunt oplossen.

Let op, een persoon moet natuurlijk meerdere albums kunnen invoeren.