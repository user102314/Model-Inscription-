<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "inscription";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("La connexion a échoué : " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $age = htmlspecialchars($_POST['age']);
    $classe = htmlspecialchars($_POST['classe']);
    $email = htmlspecialchars($_POST['email']);
    $numero = htmlspecialchars($_POST['numero']);
    $skills = htmlspecialchars($_POST['skills']);

    $sql = "INSERT INTO personnes (nom, prenom, age, classe, email, numero, skills)
            VALUES ('$nom', '$prenom', '$age', '$classe', '$email', '$numero', '$skills')";

    if ($conn->query($sql) === TRUE) {
        echo "Les informations ont été enregistrées avec succès.";
    } else {
        echo "Erreur : " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
