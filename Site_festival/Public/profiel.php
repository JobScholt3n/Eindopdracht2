<?php
require_once('../../Site_festival/Private/initialize.php');
require_once(SHARED_PATH . "/Header.php");

session_start();
if (!empty($_SESSION)) {

    $naam = $_SESSION['username'];
    $pass = $_SESSION['password'];

    $sql = "SELECT * FROM klanten WHERE Voornaam  = '$naam' AND Wachtwoord = '$pass'";
    $result = mysqli_query($db, $sql);
    $klant = mysqli_fetch_assoc($result);
} else {
    header("Location: login.php");
}
?>
    <div id="profielPagina">
        <form action="" method="post">
            <table id="profielTable" border="1">
                <tr>
                    <td><h3>Klant Gegevens</h3></td>
                </tr>
                <tr>
                    <td>Klant Id: <input type="text" name="profielId" value=" <?php echo($klant['Klant_Id']); ?>"
                                         readonly>
                    </td>
                </tr>
                <tr>
                    <td>Voornaam:<input type="text" name="profielVoornaam" value="<?php echo($klant['Voornaam']); ?>"
                                        required></td>
                </tr>
                <tr>
                    <td>Achternaam: <input type="text" name="profielAchternaam"
                                           value="<?php echo($klant['Achternaam']); ?>" required></td>
                </tr>
                <tr>
                    <td>Email: <input type="email" name="profielEmail" value="<?php echo($klant['Email']); ?>" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        Wachtwoord: <input type="password" name="profielWachtwoord"
                                           value="<?php echo($klant['Wachtwoord']); ?>" required></td>
                </tr>
                <tr>
                    <td><input class="button" type="submit" name="Update" value="Update" required></td>
                </tr>
        </form>
        <tr>
            <br>
            <form action="bestelling.php" method="post">
                <td><input class="button" type="submit" value="Doorgaan met Tickets bestellen">
            </form>
        </tr>
        </table>
    </div>
<?php
require_once('../Private/db_credentials.php');

if (!empty($_POST)) {

    $connect = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

    $id = $_POST['profielId'];
    $voornaam = $_POST['profielVoornaam'];
    $achternaam = $_POST['profielAchternaam'];
    $email = $_POST['profielEmail'];
    $wachtwoord = $_POST['profielWachtwoord'];

    $query = "UPDATE klanten SET Voornaam = '$voornaam' ,Achternaam = '$achternaam' ,Email =  '$email', Wachtwoord = '$wachtwoord' WHERE Klant_Id = '$id'";

    $result = mysqli_query($db, $query);
    $connect->query($query);

    if ($result) {
        echo 'U gegevens zijn geupdate!';
    } else {
        echo 'Gegevens zijn niet geupdate probeer het opnieuw.';
    }
    mysqli_close($connect);
}

require_once(SHARED_PATH . "/Footer.php");