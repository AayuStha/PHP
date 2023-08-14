<!DOCTYPE html>
<html>
<head>
    <title>Display Information</title>
</head>
<body>
    <h2>Entered Information:</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST["id"];
        $name = $_POST["name"];
        $email = $_POST["email"];
        $hobbies = $_POST["hobbies"];
        $gender = $_POST["gender"];
        $country = $_POST["country"];

        // $id = $_GET["id"];
        // $name = $_GET["name"];
        // $email = $_GET["email"];
        // $hobbies = $_GET["hobbies"];
        // $gender = $_GET["gender"];
        // $country = $_GET["country"];

        echo "<p><strong>ID:</strong> $id</p>";
        echo "<p><strong>Name:</strong> $name</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Hobbies:</strong> $hobbies</p>";
        echo "<p><strong>Gender:</strong> $gender</p>";
        echo "<p><strong>Country:</strong> $country</p>";
    }
    ?>
</body>
</html>
