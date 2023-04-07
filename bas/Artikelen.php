<?php


class Artikel
{
    // properties - eigenschappen ------------
    protected $artID;
    protected $Omschrijving;
    protected $Inkoop;
    protected $Verkoop;
    protected $Voorraad;
    protected $Minimum;
    protected $Maximum;
    protected $Locatie;
    protected $Leverancier;

    // methoden - functies -------------------
    // constructor
    public function __construct($artOm = NULL, $artIn = NULL, $artVer = NULL, $artVo = NULL, $artMin = NULL, $artMax = NULL, $artLo = NULL, $LevID = NULL)
    {
        $this->Omschrijving = $artOm;
        $this->Inkoop = $artIn;
        $this->Verkoop = $artVer;
        $this->Voorraad = $artVo;
        $this->Minimum = $artMin;
        $this->Maximum = $artMax;
        $this->Locatie = $artLo;
        $this->Leverancier = $LevID;

    }

    // setters
    public function set_Omschrijving($artOm)
    {
        $this->Omschrijving = $artOm;
    }

    public function set_Inkoop($artIn)
    {
        $this->Inkoop = $artIn;
    }

    public function set_Verkoop($artVer)
    {
        $this->Verkoop = $artVer;
    }

    public function set_Vooraad($artVo)
    {
        $this->Voorraad = $artVo;
    }

    public function set_Minimum($artMin)
    {
        $this->Minimum = $artMin;
    }

    public function set_Maximum($artMax)
    {
        $this->Maximum = $artMax;
    }

    public function set_Locatie($artLo)
    {
        $this->Locatie = $artLo;
    }

    public function set_Leverancier($LevID)
    {
        $this->Leverancier = $LevID;
    }

    public function get_Omschrijving()
    {
        return $this->Omschrijving;
    }

    public function get_Inkoop()
    {
        return $this->Inkoop;
    }

    public function get_Verkoop()
    {
        return $this->Verkoop;
    }

    public function get_Voorraad()
    {
        return $this->Voorraad;
    }

    public function get_Minimum()
    {
        return $this->Minimum;
    }

    public function get_Maximum()
    {
        return $this->Maximum;
    }

    public function get_Locatie()
    {
        return $this->Locatie;
    }

    public function get_Leverancier()
    {
        return $this->Leverancier;
    }


    public function afdrukken()
    {
        echo $this->get_Omschrijving();
        echo "<br/>";
        echo $this->get_Inkoop();
        echo "<br/>";
        echo $this->get_Verkoop();
        echo "<br/><br/>";
        echo $this->get_Voorraad();
        echo "<br/>";
        echo $this->get_Minimum();
        echo "<br/>";
        echo $this->get_Maximum();
        echo "<br/>";
        echo $this->get_Locatie();
        echo "<br/>";
        echo $this->get_Leverancier();
        echo "<br/>";
    }

    public function createArtikel()
    {
        require "conn.php";

        $Omschrijving = $this->get_Omschrijving();
        $Inkoop = $this->get_Inkoop();
        $Verkoop = $this->get_Verkoop();
        $Voorraad = $this->get_Voorraad();
        $Minimum = $this->get_Minimum();
        $Maximum = $this->get_Maximum();
        $Locatie = $this->get_Locatie();
        $Leverancier = $this->get_Leverancier();

        $sql = "INSERT INTO Artikelen ( Omschrijving, Inkoop, Verkoop, Voorraad, Minimum, Maximum, Locatie, Leverancier)
            VALUES (' $Omschrijving', '$Inkoop', '$Verkoop', '$Voorraad', '$Minimum', '$Maximum', '$Locatie', '$Leverancier')";

// voer de query uit
        if (mysqli_query($con, $sql)) {
            echo "<p class='ArtikelMaded'>Torrie geklaard</p>";

        } else {
            echo "Fout bij het aanmaken van de klant: " . mysqli_error($con);

        }

    }

    public function readArtikel()
    {
        require 'conn.php';

        if (isset($_GET['delete'])) {
            $id = $_GET['delete'];
            $sql = $conn->prepare('DELETE FROM artikelen WHERE artID = ?');
            $sql->execute([$id]);
        }

        $sql = $conn->prepare('SELECT * FROM artikelen');
        $sql->execute();
        echo '<div style="display: flex; padding: 24px; font-size: 20px; justify-content: center; text-align: center; color: white; flex-direction: column; "><table>';
        echo '<tr><th>Omschrijving</th><th>Inkoop</th><th>Verkoop</th><th>Voorraad</th><th>Minimum</th><th>Maximum</th><th>Locatie</th><th>Create</th><th>Delete</th><th>Update</th></tr>';

        foreach ($sql as $Artikelen) {
            echo '<tr>';
            echo '<td>' . $Artikelen['artOmschrijving'] . '</td>';
            echo '<td>' . $Artikelen['artInkoop'] . '</td>';
            echo '<td>' . $Artikelen['artVerkoop'] . '</td>';
            echo '<td>' . $Artikelen['artVoorraad'] . '</td>';
            echo '<td>' . $Artikelen['artMinVoorraad'] . '</td>';
            echo '<td>' . $Artikelen['artMaxVoorraad'] . '</td>';
            echo '<td>' . $Artikelen['artLocatie'] . '</td>';
            echo '<td><a href="create_artikelen1.php">Create</a></td>';
            echo '<td><a href="?delete=' . $Artikelen['artID'] . '">Delete</a></td>';;
            echo '<td><a href="update_artikelen1.php">Update</a></td>';
            echo '</tr>';
        }

        echo '</table></div>';
    }

    public function updateArtikel($artID)
    {
        require 'conn.php';

        $Omschrijving = $this->get_Omschrijving();
        $Inkoop = $this->get_Inkoop();
        $Verkoop = $this->get_Verkoop();
        $Voorraad = $this->get_Voorraad();
        $Minimum = $this->get_Minimum();
        $Maximum = $this->get_Maximum();
        $Locatie = $this->get_Locatie();

        $sql = "UPDATE artikelen SET artOmschrijving = '$Omschrijving', artInkoop = '$Inkoop', artVerkoop = '$Verkoop', artVoorraad = '$Voorraad', artrMinVoorraad = '$Minimum', artMaxVoorraad = '$Maximum', artLocatie = '$Locatie' WHERE artID = $artID";

        if (mysqli_query($con, $sql)) {
            echo "<p class='artUpdated'>Artikel succesvol bijgewerkt!</p>";
        } else {
            echo "Fout bij het bijwerken van de artikel: " . mysqli_error($con);
        }

    }

    public function searchartikel($artID)
    {
        require "conn.php";

        $sql = $conn->prepare("
    SELECT artID, artOmschrijving, artInkoop, artVerkoop, artVoorraad, artMinVoorraad, artMaxVoorraad, artLocatie, LevID
    FROM artikelen
    WHERE artID = :artID
");

// bind parameter to statement
        $sql->bindParam(":artID", $artID);
        $sql->execute();

// get data from array and assign to object properties
        foreach ($sql as $artikel) {
            $this->Omschrijving = $artikel["artOmschrijving"];
            $this->Inkoop = $artikel["artInkoop"];
            $this->Verkoop = $artikel["artVerkoop"];
            $this->Voorraad = $artikel["artVoorraad"];
            $this->Voorraad = $artikel["artVoorraad"];
            $this->Voorraad = $artikel["art,MinVoorraad"];
            $this->Voorraad = $artikel["artMaxVoorraad"];
            $this->Voorraad = $artikel["artLocatie"];
    }
    }
}
