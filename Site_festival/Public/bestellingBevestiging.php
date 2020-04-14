<?php
require_once('../../Site_festival/Private/initialize.php');
require_once(SHARED_PATH . '/Header.php');

$hoeveelheidTickets = $_POST["hoeveelheidTickets"];
$soortTicket = $_POST["soortTicket"];

if (!empty($_POST['hoeveelheidTickets']) && !empty($_POST['soortTicket'])) {
    $sql = "INSERT INTO tickets (Ticket_Id,AantalTickets,SoortTicket) VALUES (NULL, '{$_POST['hoeveelheidTickets']}','{$_POST['soortTicket']}')";
    if (!$db->query($sql)) {
        exit("Error description " . $db->error);
    }
}
if (!empty($_POST["hoeveelheidTickets"])) {
    ?>
    <div id="bestellingBevestig">
        <h2>Bedankt voor uw aankoop!</h2>
        <table>
            <tr>
                <td><?php echo "Hoeveel Tickets: " . $hoeveelheidTickets . "<br>"; ?></td>
            </tr>
            <tr>
                <td><?php echo "Soort Ticket: " . $soortTicket . "<br>"; ?></td>
            </tr>
        </table>
    </div>
<?php
} else {
    header("Location: bestelling.php");
}
require_once(SHARED_PATH . '/Footer.php');
?>