<?php


class Leveranciers
{
    // properties - eigenschappen ------------
    protected $klantid;
    protected $naam;
    protected $contact;
    protected $email;
    protected $adres;
    protected $postcode;
    protected $woonplaats;

    // methoden - functies -------------------
    // constructor
    public function __construct($naam = NULL, $contact = NULL, $email = NULL, $adres = NULL, $postcode = NULL, $woonplaats = NULL)
    {
        $this->naam = $naam;
        $this->contact = $contact;
        $this->email = $email;
        $this->adres = $adres;
        $this->postcode = $postcode;
        $this->woonplaats = $woonplaats;


    }

    // setters
    public function set_naam($naam)
    {
        $this->naam = $naam;
    }

    public function set_contact($contact)
    {
        $this->contact = $contact;
    }

    public function set_email($email)
    {
        $this->email = $email;
    }

    public function set_adres($adres)
    {
        $this->adres = $adres;
    }

    public function set_postcode($postcode)
    {
        $this->postcode = $postcode;
    }

    public function set_woonplaats($woonplaats)
    {
        $this->postcode = $woonplaats;
    }


    public function get_naam()
    {
        return $this->naam;
    }

    public function get_contact()
    {
        return $this->contact;
    }

    public function get_email()
    {
        return $this->email;
    }

    public function get_adres()
    {
        return $this->postcode;
    }

    public function get_postcode()
    {
        return $this->postcode;
    }

    public function get_woonplaats()
    {
        return $this->woonplaats;
    }


    public function afdrukken()
    {
        echo $this->get_naam();
        echo "<br/>";
        echo $this->get_contact();
        echo "<br/>";
        echo $this->get_email();
        echo "<br/><br/>";
        echo $this->get_adres();
        echo "<br/>";
        echo $this->get_postcode();
        echo "<br/>";
        echo $this->get_woonplaats();
        echo "<br/>";
    }

    public function createStudent()
    {
        require "conn.php";

        $naam = $this->get_naam();
        $contact = $this->get_contact();
        $email = $this->get_email();
        $adres = $this->get_adres();
        $postcode = $this->get_postcode();
        $woonplaats = $this->get_woonplaats();

        $sql = "INSERT INTO leveranciers ( levnaam, levcontact, levEmail, levAdres, levPostcode, levWoonplaats)
            VALUES (' $naam', '$contact', '$email', '$adres', '$postcode', '$woonplaats')";

// voer de query uit
        if (mysqli_query($con, $sql)) {
            echo "<p class='klantMaded'>Leverancier aangemaakt!</p>";

        } else {
            echo "Fout bij het aanmaken van de klant: " . mysqli_error($con);

        }

    }

    public function readStudent()
    {
        require 'conn.php';


        if (isset($_GET['delete'])) {
            $id = $_GET['delete'];
            $sql = $conn->prepare('DELETE FROM leveranciers WHERE levID = ?');
            $sql->execute([$id]);
        }


        $sql = $conn->prepare('SELECT * FROM leveranciers');
        $sql->execute();
        echo '<div style="display: flex; padding: 24px; font-size: 20px; justify-content: center; text-align: center; color: white; flex-direction: column; "><table>';
        echo '<tr><th>Naam</th><th>Contact</th><th>Email</th><th>Adres</th><th>Postcode</th><th>Woonplaats</th><th>Acties</th><th>Acties</th><th>Acties</th></tr>';

        foreach ($sql as $leverancier) {
            echo '<tr>';
            echo '<td>' . $leverancier['levNaam'] . '</td>';
            echo '<td>' . $leverancier['levContact'] . '</td>';
            echo '<td>' . $leverancier['levEmail'] . '</td>';
            echo '<td>' . $leverancier['levAdres'] . '</td>';
            echo '<td>' . $leverancier['levPostcode'] . '</td>';
            echo '<td>' . $leverancier['levWoonplaats'] . '</td>';
            echo '<td><a href="?delete=' . $leverancier['levID'] . '">Delete</a></td>';
            echo '<td><a href="create_leverancier1.php">Create</a></td>';
            echo '<td><a href="update_leverancier1.php">Update</a></td>';


            echo '</tr>';


        }

        echo '</table></div>';
    }

    public function updateLeverancier($levid)
    {
        require 'conn.php';

        $naam = $this->get_naam();
        $contact = $this->get_contact();
        $mail = $this->get_email();
        $adres = $this->get_adres();
        $postcode = $this->get_postcode();
        $woonplaats = $this->get_woonplaats();

        $sql = "UPDATE leveranciers 
    SET levNaam = '$naam', 
        levContact = '$contact', 
        levEmail = '$mail', 
        levAdres = '$adres', 
        levPostcode = '$postcode', 
        levWoonplaats = '$woonplaats' 
    WHERE levID = $levid;";

        if (mysqli_query($con, $sql)) {
            echo "<p class='klantUpdated'>Klant succesvol bijgewerkt!</p>";
        } else {
            echo "Fout bij het bijwerken van de klant: " . mysqli_error($con);
        }
    }

    public function deleteStudent()
    {


    }

    public function searchleverancier($levid)
    {
        require "conn.php";

        // prepare statement
        $sql = $conn->prepare("
        SELECT levID, levNaam, levContact, levEmail, levAdres, levPostcode, levWoonplaats
        FROM leveranciers
        WHERE levID = :levID
    ");

        // bind parameter to statement
        $sql->bindParam(":levID", $levid);
        $sql->execute();

        // get data from array and assign to object properties
        foreach ($sql as $leverancier) {
            $this->naam = $leverancier["levNaam"];
            $this->contact = $leverancier["levContact"];
            $this->email = $leverancier["levEmail"];
            $this->adres = $leverancier["levAdres"];
            $this->postcode = $leverancier["levPostcode"];
            $this->woonplaats = $leverancier["levWoonplaats"];
            echo ' <a href="read_leverancier.php">Read</a>';
        }

    }
}
