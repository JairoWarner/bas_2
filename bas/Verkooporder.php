<?php


class Verkooporder
{
    // properties - eigenschappen ------------
    protected $verOrdID;
    protected $KlantID;
    protected $artID;
    protected $verkOrdDatum;
    protected $verkOrdBestAantal;
    protected $verkOrdStatus;

    // methoden - functies -------------------
    // constructor
    public function __construct($verOrdID = NULL, $KlantID = NULL, $artID = NULL, $verkOrdDatum = NULL, $verkOrdBestAantal = NULL, $verkOrdStatus = NULL)
    {
        $this->verOrdID = $verOrdID;
        $this->KlantID = $KlantID;
        $this->artID = $artID;
        $this->verkOrdDatum = $verkOrdDatum;
        $this->verkOrdBestAantal = $verkOrdBestAantal;
        $this->verkOrdStatus = $verkOrdStatus;
    }

    // setters
    public function set_verOrdID($verOrdID)
    {
        $this->verOrdID = $verOrdID;
    }

    public function set_KlantID($KlantID)
    {
        $this->KlantID = $KlantID;
    }

    public function set_artID($artID)
    {
        $this->artID = $artID;
    }

    public function set_verkOrdDatum($verkOrdDatum)
    {
        $this->verkOrdDatum = $verkOrdDatum;
    }

    public function set_verkOrdBestAantal($verkOrdBestAantal)
    {
        $this->verkOrdBestAantal = $verkOrdBestAantal;
    }

    public function set_verkOrdStatus($verkOrdStatus)
    {
        $this->verkOrdStatus = $verkOrdStatus;
    }


    public function get_verOrdID()
    {
        return $this->verOrdID;
    }

    public function get_KlantID()
    {
        return $this->KlantID;
    }

    public function get_artID()
    {
        return $this->artID;
    }

    public function get_verkOrdDatum()
    {
        return $this->verkOrdDatum;
    }

    public function get_verkOrdBestAantal()
    {
        return $this->verkOrdBestAantal;
    }

    public function get_verkOrdStatus()
    {
        return $this->verkOrdStatus;
    }


    public function afdrukken()
    {
        echo $this->get_verkOrdDatum();
        echo "<br/>";
        echo $this->get_verkOrdBestAantal();
        echo "<br/>";
        echo $this->get_verkOrdStatus();
        echo "<br/><br/>";
    }


    public function createVerkooporder()
    {
        require "conn.php";

        $klantID = $this->get_KlantID();
        $artID = $this->get_artID();
        $verkOrdDatum = $this->get_verkOrdDatum();
        $verkOrdBestAantal = $this->get_verkOrdBestAantal();
        $verkOrdStatus = $this->get_verkOrdStatus();

        $sql = "INSERT INTO verkooporders (KlantID, artID, verkOrdDatum, varkOrdBestAantal, verkOrdStatus)
            VALUES ('$klantID', '$artID', '$verkOrdDatum', '$verkOrdBestAantal', '$verkOrdStatus')";

        // voer de query uit
        if (mysqli_query($con, $sql)) {
            echo "<p class='verkooporderMaded'>Verkooporder succesvol aangemaakt!</p>";

        } else {
            echo "Fout bij het aanmaken van de verkooporder: " . mysqli_error($con);

        }

    }
    public function readStudent()
    {
        require 'conn.php';


        if (isset($_GET['delete'])) {
            $id = $_GET['delete'];
            $sql = $conn->prepare('DELETE FROM verkooporders WHERE verOrdID = ?');
            $sql->execute([$id]);
        }


        $sql = $conn->prepare('SELECT * FROM verkooporders');
        $sql->execute();
        echo '<div style="display: flex; padding: 24px; font-size: 20px; justify-content: center; text-align: center; color: white; flex-direction: column; "><table>';
        echo '<tr><th>Datum</th><th>Aantal</th><th>Status</th><th>Acties</th><th>Acties</th><th>Acties</th></tr>';

        foreach ($sql as $lverkooporder) {
            echo '<tr>';
            echo '<td>' . $lverkooporder['verkOrdDatum'] . '</td>';
            echo '<td>' . $lverkooporder['verkOrdBestAantal'] . '</td>';
            echo '<td>' . $lverkooporder['verkOrdStatus'] . '</td>';
            echo '<td><a href="create_verkooporder.php">Create</a></td>';
            echo '<td><a href="?delete=' . $lverkooporder['verOrdID'] . '">Delete</a></td>';
            echo '<td><a href="update_verkooporder1.php">update</a></td>';


            echo '</tr>';


        }

        echo '</table></div>';
    }

    public function updateVerkooporder($verid)
    {
        require 'conn.php';

        $datum = $this->get_verkOrdDatum();
        $aantal = $this->get_verkOrdBestAantal();
        $status = $this->get_verkOrdStatus();


        $sql = "UPDATE verkooporders SET verkOrdDatum = '$datum', verkOrdBestAantal = '$aantal', verkOrdStatus = '$status' WHERE verOrdID = $verid";

        if (mysqli_query($con, $sql)) {
            echo "<p class='VerOrdUpdated'>Verkooporder succesvol bijgewerkt!</p>";
        } else {
            echo "Fout bij het bijwerken van de verkooporder: " . mysqli_error($con);
        }
    }

    public function searchverkooporder($verid)
    {
        require "conn.php";

        // prepare statement
        $sql = $conn->prepare("
        SELECT verOrdID, KlantID, artID, verkOrdDatum, verkOrdBestAantal, verkOrdStatus
        FROM verkooporders
        WHERE verOrdID = :verID
    ");

        // bind parameter to statement
        $sql->bindParam(":verOrdID", $verid);
        $sql->execute();

        // get data from array and assign to object properties
        foreach ($sql as $verkoop) {
           $this->verkOrdDatum = $verkoop["verkOrdDatum"];
           $this->verkOrdBestAantal = $verkoop["verkOrdBestAantal"];
           $this->verkOrdStatus = $verkoop["verkOrdStatus"];
        }

    }

}


