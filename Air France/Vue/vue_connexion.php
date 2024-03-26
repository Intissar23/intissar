<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion au site d'Air France</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h3>Connexion au site d'Air France</h3>
        <form method="post">
            <table class="table">
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email" class="form-control"></td>
                </tr>
                <tr>
                    <td>Mot De Passe </td>
                    <td><input type="password" name="mdp" class="form-control"></td>
                </tr>
                <tr>
                    <td><input type="reset" value="Annuler" name="Annuler" class="btn btn-secondary"></td>
                    <td><input type="submit" value="seConnecter" name="seConnecter" class="btn btn-primary"></td>
                </tr>
            </table>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
