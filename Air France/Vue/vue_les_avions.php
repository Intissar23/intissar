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
<h3>Listes des Avions</h3>
</br>
<form method="post">
	Filtrer par: <input type="text" name="mot">
	<input type="submit" name="Filtrer" value="Filtrer">
	
</form>
<br/>
<table border="1"> 
	<tr>
		<td>Id Avion</td><td> Constructeur </td>
		<td> Modele</td><td>Capacite</td>
		<td>idaeroport</td> 
	 <td>photo</td> 





    <?php
    if(isset($_SESSION['role'])&&$_SESSION['role']=="admin"){



        echo"<td> Opérations </td>";

    }
    ?>
	</tr>
	<?php
	if(isset($lesAvions)){
		foreach ($lesAvions as $unAvion) {
			echo "<tr>";
			echo "<td>".$unAvion['idavion']."</td>";
			echo "<td>".$unAvion['constructeur']."</td>";
			echo "<td>".$unAvion['modele']."</td>";
			echo "<td>".$unAvion['capacite']."</td>";
			echo "<td>".$unAvion['idaeroport']."</td>";
			echo "<td>".$unAvion['photo']."</td>";
			  if(isset($_SESSION['role'])&&$_SESSION['role']=="admin"){
			echo "<td> <a href='index.php?page=3&action=sup&idAvion=".$unAvion['idavion']."'><img src='images/supprimer.jpeg' height='40' width='40'></a>";
			echo "<a href='index.php?page=3&action=edit&idAvion=".$unAvion['idavion']."'><img src='images/editer.jpeg' height='40' width='40'></a>";
			echo "<a href='index.php?page=3&action=view&idAvion=".$unAvion['idavion']."'><img src='images/voir.jpeg' height='40' width='40'></a></td>";
		}
			echo "</tr>";
		}
	}
	?>
</table>
