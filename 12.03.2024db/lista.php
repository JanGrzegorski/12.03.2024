<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista</title>
    <style>
        body { 
            font-family: Arial, Helvetica, sans-serif;
            background-color: beige;  
        }
        form{
            display: flex;
            justify-content: center;
        }
        select{
            font-size: 50px;
        }

        </style>
</head>
<body>
    <?php $zapytanie = "SELECT IDW, Nazwa From  wydarzenia"; ?>
  <form action="efekt.php" method="post">  
    <select name="wydarzenie" onchange="this.form.submit();">
    <?php
    include_once("polaczenie.php");
        foreach ($polaczenie->query($zapytanie) as $wiersz) {
            echo "<option value=".$wiersz['IDW'].">".$wiersz['Nazwa']."</option>";
            
        }
        ?>  
    </select>
  </form>


    </nav>
</body>
</html>