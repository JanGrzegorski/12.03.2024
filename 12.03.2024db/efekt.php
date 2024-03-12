<?php
if(isset($_POST['wydarzenie'])){
    include_once("polaczenie.php");
    $idw = $_POST['wydarzenie'];
    $zapytanie = "SELECT Nazwa From efekt WHERE IDW = $idw";
    foreach ($polaczenie->query($zapytanie) as $wiersz) {
        echo "<h4>".$wiersz['Nazwa']."</h4> ";
        
    }
}
else{
    echo "co kukosz chopie";
}

?>