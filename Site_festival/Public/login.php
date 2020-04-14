<?php
require_once('../Private/initialize.php');
require_once(SHARED_PATH . '/Header.php');

if(!empty($_POST)) {
    $naam = $_POST['inlogNaam'];
    $pass = $_POST['wachtwoord'];

    $sql = "SELECT * FROM klanten WHERE Voornaam  = '$naam' AND Wachtwoord = '$pass'";
    $result = mysqli_query($db, $sql);
    $klant = mysqli_fetch_assoc($result);

    if ($naam == $klant['Voornaam'] && $pass == $klant['Wachtwoord']) {
        session_start();
        $_SESSION['id'] = $klant['Klant_Id'];
        $_SESSION['username'] = $klant['Voornaam'];
        $_SESSION['email'] = $klant['Email'];
        $_SESSION['password'] = $klant['Wachtwoord'];

        header("Location: profiel.php");
        exit();
    }
}
?>
    <div id="inloggen">
        <h2><b>Inloggen</b></h2>
        <form method="post">
            <input type="hidden" name="formulier" value="inloggen">
            <dl>
                <dt>Voornaam</dt>
                <dd><input   type="text" name="inlogNaam" value="" required/></dd>
            </dl>
            <dl>
                <dt>Wachtwoord</dt>
                <dd><input  type="password" name="wachtwoord" value="" required/></dd>
            </dl>
            <input class="button" type="submit" value="Submit">
        </form>

    </div>
    <div id="registratie">
        <form action="registratie.php" method="post">
            <input type="hidden" name="formulier" value="registreren">
            <h2><b>Registreren</b></h2>
            <br>
            <br>
            <dl>
                <dt>Voornaam</dt>
                <dd><input type="text" name="registratieNaam" value="" required></dd>
            </dl>
            <dl>
                <dt>Achternaam</dt>
                <dd><input type="text" name="registratieAchternaam" value="" required></dd>
            </dl>
            <dl>
                <dt>Email</dt>
                <dd><input type="email" name="email" value="" required></dd>
            </dl>
            <dl>
                <dt>Wachtwoord</dt>
                <dd><input type="password" name="password" value="" required></dd>
            </dl>
            <dd><input class="button" type="submit" value="Submit"></dd>
        </form>
    </div>

<?php
require_once(SHARED_PATH . '/Footer.php');
?>