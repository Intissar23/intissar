<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des Aéroports</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        form {
            width: 300px;
            margin: 20px 0;
            padding: 10px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        input[type="text"], input[type="submit"] {
            width: calc(100% - 16px);
            margin-bottom: 10px;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h3>Liste des Aéroports</h3>
    <form method="post">
        Filtrer par: <input type="text" name="mot">
        <input type="submit" name="Filtrer" value="Filtrer">
    </form>
    <table border="1">
        <tr>
            <th>Id Aeroport</th>
            <th>Nom</th>
            <th>Code</th>
            <th>Ville</th>
            <th>Pays</th>
            <th>Statut</th>
            <?php
            if(isset($_SESSION['role']) && $_SESSION['role'] == "admin") {
                echo "<th>Opérations</th>";
            }
            ?>
        </tr>
    <?php
if(isset($lesAeroports)) {
    foreach($lesAeroports as $unAeroport) {
        echo "<tr>";
        echo "<td>".$unAeroport['idaeroport']."</td>";
        echo "<td>".$unAeroport['nom']."</td>";
        echo "<td>".$unAeroport['code']."</td>";
        echo "<td>".$unAeroport['ville']."</td>";
        echo "<td>".$unAeroport['pays']."</td>";
        echo "<td>".$unAeroport['statut']."</td>";

        if (isset($_SESSION['role']) && $_SESSION['role'] == "admin") {
            echo "<td>";
            echo "<a href='index.php?page=1&action=sup&idAeroport=".$unAeroport['idaeroport']."'><img src='images/supprimer.jpeg' height='40' width='40'></a>";
            echo "<a href='index.php?page=1&action=edit&idAeroport=".$unAeroport['idaeroport']."'><img src='images/editer.jpeg' height='40' width='40'></a>";
            echo "<a href='index.php?page=1&action=view&idAeroport=".$unAeroport['idaeroport']."'><img src='images/voir.jpeg' height='40' width='40'></a>";
            
           
            if (isset($lesAvions[$unAeroport['idaeroport']])) {
                $nombreAvions = $unControleur->count();
                echo "Nombre d'Avions: ".$nombreAvions;
            } else {
                echo "Nombre d'Avions: 0";
            }

            echo "</td>";
        }
        echo "</tr>";
    }
}
?>

    </table>
</body>
</html>
