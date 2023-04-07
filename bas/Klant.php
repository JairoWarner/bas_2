<?php


class Klant
{
    // properties - eigenschappen ------------
    protected $klantid;
    protected $naam;
    protected $mail;
    protected $adres;
    protected $postcode;
    protected $woonplaats;

    // methoden - functies -------------------
    // constructor
    public function __construct($naam = NULL, $mail = NULL, $adres = NULL, $postcode = NULL, $woonplaats = NULL)
    {
        $this->naam = $naam;
        $this->mail = $mail;
        $this->adres = $adres;
        $this->postcode = $postcode;
        $this->woonplaats = $woonplaats;

    }

    // setters
    public function set_klant($naam)
    {
        $this->naam = $naam;
    }

    public function set_mail($mail)
    {
        $this->mail = $mail;
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
        $this->woonplaats = $woonplaats;
    }


    public function get_naam()
    {
        return $this->naam;
    }

    public function get_mail()
    {
        return $this->mail;
    }

    public function get_adres()
    {
        return $this->adres;
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
        echo $this->get_mail();
        echo "<br/>";
        echo $this->get_adres();
        echo "<br/><br/>";
        echo $this->get_postcode();
        echo "<br/>";
        echo $this->get_woonplaats();
        echo "<br/>";
    }

    public function createStudent()
    {
        require "conn.php";

        $naam = $this->get_naam();
        $mail = $this->get_mail();
        $adres = $this->get_adres();
        $postcode = $this->get_postcode();
        $woonplaats = $this->get_woonplaats();

        $sql = "INSERT INTO klanten ( klantnaam, klantEmail, klantadres, klantpostcode, klantWoonplaats)
            VALUES (' $naam', '$mail', '$adres', '$postcode', '$woonplaats')";

// voer de query uit
        if (mysqli_query($con, $sql)) {
            echo "<p class='klantMaded'>Klant succesvol aangemaakt!</p>";

        } else {
            echo "Fout bij het aanmaken van de klant: " . mysqli_error($con);

        }

    }

    public function readStudent()
    {
        require 'conn.php';


        if (isset($_GET['delete'])) {
            $id = $_GET['delete'];
            $sql = $conn->prepare('DELETE FROM klanten WHERE klantID = ?');
            $sql->execute([$id]);
        }


        $sql = $conn->prepare('SELECT * FROM klanten');
        $sql->execute();
        echo '<div style="display: flex; padding: 24px; font-size: 20px; justify-content: center; text-align: center; color: white; flex-direction: column; "><table>';
        echo '<tr><th>Naam</th><th>Email</th><th>Adres</th><th>Postcode</th> <th>Woonplaats</th> <th>Acties</th><th>Acties</th><th>Acties</th></tr>';

        foreach ($sql as $klant) {
            echo '<tr>';
            echo '<td>' . $klant['klantNaam'] . '</td>';
            echo '<td>' . $klant['klantEmail'] . '</td>';
            echo '<td>' . $klant['klantAdres'] . '</td>';
            echo '<td>' . $klant['klantPostcode'] . '</td>';
            echo '<td>' . $klant['KlantWoonplaats'] . '</td>';
            echo '<td><a href="create_klant1.php">Create</a></td>';
            echo '<td><a href="?delete=' . $klant['klantID'] . '">Delete</a></td>';;
            echo '<td><a href="update_klant1.php">Update</a></td>';

            echo '</tr>';


        }

        echo '</table></div>';
    }

    public function updateStudent($klantid)
    {
        require 'conn.php';

        $naam = $this->get_naam();
        $mail = $this->get_mail();
        $adres = $this->get_adres();
        $postcode = $this->get_postcode();
        $woonplaats = $this->get_woonplaats();

        $sql = "UPDATE klanten SET klantnaam = '$naam', klantEmail = '$mail', klantadres = '$adres', klantpostcode = '$postcode', klantWoonplaats = '$woonplaats' WHERE klantID = $klantid";

        if (mysqli_query($con, $sql)) {
            echo "<p class='klantUpdated'>Klant succesvol bijgewerkt!</p>";
        } else {
            echo "Fout bij het bijwerken van de klant: " . mysqli_error($con);
        }
    }


    public function searchStudent($klantid)
    {
        require "conn.php";

        // prepare statement
        $sql = $conn->prepare("
        SELECT klantID, klantNaam, klantEmail, klantAdres, klantPostcode, KlantWoonplaats
        FROM klanten
        WHERE klantID = :klantID
    ");

        // bind parameter to statement
        $sql->bindParam(":klantID", $klantid);
        $sql->execute();

        // get data from array and assign to object properties
        foreach
        ($sql as $klant) {
            $this->naam = $klant["klantNaam"];
            $this->mail = $klant["klantEmail"];
            $this->adres = $klant["klantAdres"];
            $this->postcode = $klant["klantPostcode"];
            $this->woonplaats = $klant["KlantWoonplaats"];
        }
    }
}