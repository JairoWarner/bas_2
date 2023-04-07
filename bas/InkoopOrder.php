<?php


class InkoopOrder




{
    // properties - eigenschappen ------------
    protected $inkOrdID;
    protected $levID;
    protected $artID;
    protected $inkOrdDatum;
    protected $inkOrdBestAantal;
    protected $inkOrdStatus;

    // methoden - functies -------------------
    // constructor
    public function __construct($inkOrdID = NULL, $levID = NULL, $artID = NULL, $inOrdDatum = NULL, $inkOrdBestAantal = NULL, $inkOrdStatus = NULL)
    {
        $this->inkOrdID = $inkOrdID;
        $this->levID = $levID;
        $this->artID = $artID;
        $this->inkOrdDatum = $inOrdDatum;
        $this->inkOrdBestAantal = $inkOrdBestAantal;
        $this->inkOrdStatus = $inkOrdStatus;

    }


// setters
    public function set_leverancierID($levID)
    {
        $this->LevID = $levID;
    }

    public function set_artikelID($artID)
    {
        $this->artID = $artID;
    }

    public function set_inkOrdDatum($inkOrdDatum)
    {
        $this->inkOrdDatum = $inkOrdDatum;
    }

    public function set_inkOrdBestAantal($inkordBestAantal)
    {
        $this->inkOrdBestAantal = $inkordBestAantal;
    }

    public function set_inkOrdStatus($inkOrdStatus)
    {
        $this->inkOrdStatus = $inkOrdStatus;
    }


// Getter methods

    public function get_levID()
    {
        return $this->levID;
    }

    public function get_artID()
    {
        return $this->artID;
    }

    public function get_inkOrdDatum()
    {
        return $this->inkOrdDatum;
    }

    public function get_inkOrdBestAantal()
    {
        return $this->inkOrdBestAantal;
    }

    public function get_inkOrdStatus()
    {
        return $this->inkOrdStatus;
    }




    //---------------------------------------------
    public function afdrukken()
    {
        echo $this->get_levID();
        echo "<br/>";
        echo $this->get_artID();
        echo "<br/>";
        echo $this->get_inkOrdDatum();
        echo "<br/><br/>";
        echo $this->get_inkOrdBestAantal();
        echo "<br/>";
        echo $this->get_inkOrdStatus();
        echo "<br/>";
    }

    public function createInkOrder()
    {
        require "conn.php";

        $levID = $this->get_levID();
        $artID = $this->get_artID();
        $inkOrdDatum = $this->get_inkOrdDatum();
        $inkOrdBestAantal = $this->get_inkOrdBestAantal();
        $inkOrdStatus = $this->get_inkOrdStatus();

        $sql = "INSERT INTO inkooporders ( levID, artID, inkOrdDatum, inkOrdBestAantal, inkOrdStatus)
            VALUES ('$levID', '$artID', '$inkOrdDatum', '$inkOrdBestAantal', '$inkOrdStatus')";

// voer de query uit
        if (mysqli_query($con, $sql)) {
            echo "<p class='inkOrdMaded'>Torrie geklaard</p>";

        } else {
            echo "Fout bij het aanmaken van de torrie: " . mysqli_error($con);

        }

    }

    public function readInkOrder()
    {
        require 'conn.php';


        if (isset($_GET['delete'])) {
            $id = $_GET['delete'];
            $sql = $conn->prepare('DELETE FROM inkooporders WHERE inkOrdID = ?');
            $sql->execute([$id]);
        }


        $sql = $conn->prepare('SELECT * FROM inkooporders');
        $sql->execute();
        echo '<div style="display: flex; padding: 24px; font-size: 20px; justify-content: center; text-align: center; color: white; flex-direction: column; "><table>';
        echo '<tr><th>levID</th><th>artID</th><th>inkOrdDatum</th><th>inkOrdBestAantal</th> <th>inkOrdStatus</th> <th>Acties</th><th>Acties</th><th>Acties</th><th>Acties</th> </tr>';

        foreach ($sql as $inkOrder) {
            echo '<tr>';
            echo '<td>' . $inkOrder['levID'] . '</td>';
            echo '<td>' . $inkOrder['artID'] . '</td>';
            echo '<td>' . $inkOrder['inkOrdDatum'] . '</td>';
            echo '<td>' . $inkOrder['inkOrdBestAantal'] . '</td>';
            echo '<td>' . $inkOrder['inkOrdStatus'] . '</td>';
            echo '<td><a href="create_InkoopOrder1.php">Create</a></td>';
            echo '<td><a href="?delete=' . $inkOrder['inkOrdID'] . '">Delete</a></td>';
            echo '<td><a href="update_inkooporder1.php">Update</a></td>';
            echo '<td><a href="">Zoeken</a></td>';


            echo '</tr>';


        }

        echo '</table></div>';
    }

    public function updateInkOrder($inkOrdID)
    {
        require 'conn.php';

        $levID = $this->get_levID();
        $artID = $this->get_artID();
        $inkOrdDatum = $this->get_inkOrdDatum();
        $inkOrdBestAantal = $this->get_inkOrdBestAantal();
        $inkOrdStatus = $this->get_inkOrdStatus();

        $sql = "UPDATE inkooporders SET levID = '$levID', artID = '$artID', inkOrdDatum = '$inkOrdDatum', inkOrdBestAantal = '$inkOrdBestAantal', inkOrdStatus = '$inkOrdStatus' WHERE inkOrdID = $inkOrdID";

        if (mysqli_query($con, $sql)) {
            echo "<p class='inkOrdUpdated'>inkooporder succesvol bijgewerkt!</p>";
        } else {
            echo "Fout bij het bijwerken van de inkooporder: " . mysqli_error($con);
        }
    }

    public function searchInkOrder($inkOrdID)
    {
        require "conn.php";

        // prepare statement
        $sql = $conn->prepare("
        SELECT inkOrdID, levID, artID, inkOrdDatum, inkOrdBestAantal, inkOrdStatus
        FROM inkooporders
        WHERE inkOrdID = :inkOrdID
    ");

        // bind parameter to statement
        $sql->bindParam(":inkOrdID", $inkOrdID);
        $sql->execute();

        // get data from array and assign to object properties
        foreach
        ($sql as $inkOrder) {
            $this->levID = $inkOrder["levID"];
            $this->artID = $inkOrder["artID"];
            $this->inkOrdDatum = $inkOrder["inkOrdDatum"];
            $this->inkOrdBestAantal = $inkOrder["inkOrdBestAantal"];
            $this->inkOrdStatus = $inkOrder["inkOrdStatus"];
        }
    }



}
