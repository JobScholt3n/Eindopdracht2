<?php
require_once('../../Site_festival/Private/initialize.php');
require_once(SHARED_PATH . "/Header.php");
require_once('../Private/db_credentials.php');
?>

<form action="profielGegevensAanpassen.php" method="post">
    <table>
        <tr>
            <td>Voer hier uw id in om de gegevens te veranderen: <input type="text" name="id" required><br><br></td>
        </tr>
        <tr>
            <td>
                Voornaam: <input type="text" name="voornaam" required><br><br>
            </td>
        </tr>
        <tr>
            <td>
                Achternaam: <input type="text" name="achternaam" required><br><br>
            </td>
        </tr>
        <tr>
            <td>
                Email: <input type="email" name="email" required><br><br>
            </td>
        </tr>
        <tr>
            <td>
                Wachtwoord: <input type="password" name="wachtwoord" required><br><br>
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" name="Update" value="Update" required><br><br>
            </td>
        </tr>
    </table>
</form>

<?php
if(!empty($_POST))
{

    $connect = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

    $id = $_POST['id'];
    $voornaam = $_POST['voornaam'];
    $achternaam= $_POST['achternaam'];
    $email = $_POST['email'];
    $wachtwoord = $_POST['wachtwoord'];

    $query = "UPDATE klanten SET Voornaam = '$voornaam' ,Achternaam = '$achternaam' ,Email =  '$email', Wachtwoord = '$wachtwoord' WHERE `Klant_Id` = '$id'";

    $result = mysqli_query($db, $query);

    if($result)
    {
        echo 'U gegevens zijn geupdate!';
    }else{
        echo 'Gegevens zijn niet geupdate probeer het opnieuw.';
    }
    mysqli_close($connect);
}
require_once(SHARED_PATH . "/Footer.php");
