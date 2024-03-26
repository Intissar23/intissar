<?php 
function comparerPilotes($a, $b) {
    // Compare les noms en premier, si égaux, compare les prénoms
    $resultatNom = strcmp($a['nom'], $b['nom']);
    if ($resultatNom === 0) {
        return strcmp($a['prenom'], $b['prenom']);
    }
    return $resultatNom;
}

// Trier le tableau $lesPilotes en utilisant la fonction comparerPilotes
usort($lesPilotes, 'comparerPilotes');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des Pilotes</title>
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

        /* Styles pour les pilotes internes */
        .pilote-interne {
            background-color: lightgreen;
        }

        /* Styles pour les pilotes externes */
        .pilote-externe {
            background-color: yellow;
        }
    </style>
</head>
<body>
    <h3>Liste des Pilotes</h3>
    <form method="post">
        Filtrer par: <input type="text" name="mot">
        <input type="submit" name="Filtrer" value="Filtrer">
    </form>
    <br/>
    <table border="1">
        <tr>
            <td> Id Pilote </td> 
            <td>Nom</td>
            <td> Prenom</td>
            <td>Email</td>
            <td>Adresse</td>
            <td>NB Heures Vol</td>
            <td>statut</td>
        
            <?php
            if(isset($_SESSION['role']) && $_SESSION['role'] == "admin"){
                echo"<td> Opérations </td>";
            }
            ?>
        </tr>

        <?php
        if (isset($lesPilotes)){
            foreach ($lesPilotes as $unPilote) {
                $statutClass = ($unPilote['statut'] === 'PiloteInterne') ? 'pilote-interne' : 'pilote-externe';

                echo "<tr class='$statutClass'>";
                echo "<td>".$unPilote['idpilote']."</td>";
                echo "<td>".$unPilote['nom']."</td>";
                echo "<td>".$unPilote['prenom']."</td>";
                echo "<td>".$unPilote['email']."</td>";
                echo "<td>".$unPilote['adresse']."</td>";
                echo "<td>";
    if ($unPilote['nbheuresvol'] >= 1000) {
        echo $unPilote['nbheuresvol']  ,  " Certifié ! ";
    } else {
        echo $unPilote['nbheuresvol'] ,   " PAS Certifié ! "; ; 
    }
    echo "</td>";
                echo "<td>".$unPilote['statut']."</td>";
                
                if(isset($_SESSION['role']) && $_SESSION['role'] == "admin"){
                    echo "<td> <a href='index.php?page=2&action=sup&idPilote=".$unPilote['idpilote']."'><img src='images/supprimer.jpeg' height='40' width='40'></a>";
                    echo "<a href='index.php?page=2&action=edit&idPilote=".$unPilote['idpilote']."'><img src='images/editer.jpeg' height='40' width='40'></a>";
                }
                echo "</tr>";
            }
        }
        ?>
        
    </table>
</body>
</html>
