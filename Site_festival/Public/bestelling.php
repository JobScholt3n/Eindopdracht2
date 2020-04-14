<?php
require_once('../../Site_festival/Private/initialize.php');
require_once(SHARED_PATH . '/Header.php');
?>
<div id="bestelling">
    <h2><b>Tickets kopen</b></h2>
    <form action="bestellingBevestiging.php" method="post">
        <dl>
            <dt>Hoeveel tickets:</dt>
            <dd>
                    <input type="number" name="hoeveelheidTickets" min="1">
            </dd>
        </dl>
        <dl>
            <dt>Soort ticket</dt>
            <select name="soortTicket">
                <option value="Normaal">Normaal</option>
                <option value="Premium">Premium</option>
                <option value="Vip">Vip</option>
            </select>
        </dl>
        <dl><input type="submit" value="Submit"></dl>
    </form>
</div>
<?php
require_once(SHARED_PATH . '/Footer.php');
?>
