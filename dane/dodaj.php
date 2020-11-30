  <?php
      $conn = mysqli_connect("localhost", "root", "", "dane")
      or die ("Brak połączenia z bazą danych");

      if (isset($_POST['submit'])) {
        $title = $_POST['title'];
        $type = $_POST['type'];
        $year = $_POST['year'];
        $rate = $_POST['rate'];

        $zapytanie= "INSERT INTO filmy (gatunki_id, tytul, rok, ocena) VALUES ($type,'".$title."', $year, $rate)";
        $wynik = mysqli_query($conn, $zapytanie) or die ("Nie udało sie dodać do bazy danych.");
        echo "Film: ".$title." został dodany do bazy.";
      }

      mysqli_close($conn);
    ?>
