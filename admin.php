<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="index.css">
    <title>Admin</title>
</head>

<body>
        <!-- header -->
        <?php 
            require ('header.php'); 
            require ('connect.php'); 
        ?>
        <?php $request = $db->query("SELECT * from `utilisateurs`;");?> <!-- requête pour récupérer les données de la table utilisateurs -->

    <main>

        <h3>Voici les utilisateurs</h3>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>LOGIN</th>
                        <th>NOM</th>
                        <th>PRENOM</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                        while(($resultat = $request->fetch_assoc()) != null){
                            echo "<tr>";
                            echo "<td>".$resultat['id']."</td>";
                            echo "<td>".$resultat["login"]."</td>";
                            echo "<td>".$resultat["nom"]."</td>";
                            echo "<td>".$resultat["prenom"]."</td>";
                            echo "</tr>";
                        }
                    ?>
                </tbody>
            </table>

    </main> 

    <!-- footer -->
    <?php
        include 'footer.php';
    ?>
</body>
</html>