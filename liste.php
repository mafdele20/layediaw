<?php
// Create database connection using config file
include_once("database.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM user ORDER BY id DESC");
?>

<html>
<head>
    <title>Homepage</title>
    <link rel="stylesheet" type="text/css" href="user.css"/>  
</head>

<body>
<div class="compte">
        <nav class="navbar">
             <h4>GESTION CLIENT</h4>
            <ul>
                <li><a href="liste.php"> liste des personne</a></li>
                <li><a href="add.php"> Ajouter personne</a></li>
                <li><a onclick="deconnexion()" id="deconect">Déconnexion</a></li>  
                <li><img src="./avatar.png" alt="Avatar" class="user"><a> Diaw</a></li>  
            </ul>
</nav>
</div>

    <table width='80%' border=1>

    <tr>
        <th>Nom</th> <th>Prenom</th> <th>age</th><th>Email</th> 
    </tr>
    <?php
    while($user_data = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>".$user_data['nom']."</td>";
        echo "<td>".$user_data['prenom']."</td>";
        echo "<td>".$user_data['age']."</td>";
        echo "<td>".$user_data['email']."</td>";
       // echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";
    }
    ?>
    </table>
    <script type="text/javascript" src="scrip.js"></script>

</body>
</html>
