<?php
require_once('../../Site_festival/Private/initialize.php');
require_once(SHARED_PATH . '/Header.php');


$Gebruikersnaam = $_POST["registratieNaam"];
$Email = $_POST["email"];
$Wachtwoord = $_POST["password"];

if ($_POST['formulier'] == "registreren") {
    $sql = "INSERT INTO klanten (Klant_ID,Voornaam,Achternaam,Email,Wachtwoord) VALUES (NULL, '{$_POST['registratieNaam']}','{$_POST['registratieAchternaam']}','{$_POST['email']}','{$_POST['password']}')";
    if (!$db->query($sql)) {
        exit("Error description " . $db->error);
    }
}
?>
<div id="registratieBevestig">
<dl>
    <dt><?php echo "Gebruikersnaam: " . $Gebruikersnaam; ?></dt>
</dl>
<dl>
    <dt>
    <dt><?php echo "Email: " . $Email; ?></dt>
    </dt>
</dl>
<dl>
    <dt>
    <dt><?php echo "Wachtwoord: " . $Wachtwoord; ?></dt>
    </dt>
</dl>
<dl>
    <p>Druk nu op 'inloggen' en log in met de gegevens die hier staan om tickets te bestellen!</p>
</dl>
</div>

<?php

require_once(SHARED_PATH . '/Footer.php');
?>
