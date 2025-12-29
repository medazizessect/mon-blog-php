<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>My Cloud Blog</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            background-color: #f4f6f8;
        }
        .profile {
            display: flex;
            align-items: center;
            margin-bottom: 30px;
        }
        .profile img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin-right: 20px;
        }
        .status {
            background-color: #e0ffe0;
            padding: 10px;
            border: 1px solid #00aa00;
            width: fit-content;
        }
    </style>
</head>

<body>

<h1>Welcome to my Cloud Blog</h1>

<div class="profile">
    <img src="https://lh3.googleusercontent.com/a/ACg8ocJmjm7Gc4ND6ODciYDsfFQLlDn-mhbFLtYpoJALnMGEpG4VkKNCQg=s360-c-no" alt="My photo">
    <p>
        Étudiant en informatique, ce blog a été réalisé dans le cadre d’un TP Cloud Computing
        intégrant Docker, Docker Hub et Docker Compose.
    </p>
</div>

<?php
$dbserver = getenv('DB_HOST');
$dbname = getenv('DB_NAME');
$dbuser = getenv('DB_USER');
$dbpassword = getenv('DB_PASSWORD');

try {
    $conn = new PDO(
        "mysql:host=$dbserver;dbname=$dbname;charset=utf8mb4",
        $dbuser,
        $dbpassword
    );
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "<p class='status'>Database connection successful</p>";

} catch (PDOException $e) {
    echo "<p style='color:red;'>Database connection failed</p>";
}
?>

</body>
</html>

