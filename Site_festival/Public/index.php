<?php
require_once('../Private/initialize.php');
require_once(SHARED_PATH . '/Header.php');
?>
    <div id="textHome">
        <p><strong>Welkom!</strong> <br> Het festival begint op 5 juni tot en met 7 juni. Dit betekent dat je kaartjes
            kan kopen voor de vrijdag, zaterdag en zondag! Je kunt kiezen tussen verschillende soorten tickets. Meer
            informatie over de tickets kun je onder aan de pagina bekijken. Waar het spektakel gaat plaatsvinden is
            FestivalLaan 69.</p>
        <img class="ticketPlaatje" src="Images/TicketBasic.png">
        <p><b>Basic Ticket:</b> Dit kaartje kost €40,- met dit kaartje kunt u het festival betreden maar heeft u geen
            extra voordelen.</p>
        <img class="ticketPlaatje" src="Images/TicketPremium.png">
        <p><b>Premium Ticket: </b>Dit kaartje kost €60,- met dit kaartje kunt u het festival betreden, krijgt u toegang
            tot de premium weg dit houdt in dat je niet zo lang hoeft te wachten op je drinken, eten en bij de muntjes!
        </p>
        <img class="ticketPlaatje" src="Images/TicketVip.png">
        <p><b>Vip Ticket: </b>Dit kaartje kost €100,- met dit kaartje kunt u het festival betreden, krijgt u net zoals
            bij de premium ticket toegang to de premium weg en er is een aparte vip room waar je het festival op een ideale plek kan meemaken!</p>
    </div>
    <div class="container">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" id="slider">
                <div class="item active">
                    <img src="Images/FestivalPlaatje1.jpg" style="width:100%;">
                </div>

                <div class="item">
                    <img src="Images/FestivalPlaatje2.jpg" style="width:100%;">
                </div>

                <div class="item">
                    <img src="Images/FestivalPlaatje3.jpg" style="width:100%;">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>


<?php
require_once(SHARED_PATH . '/Footer.php');
?>