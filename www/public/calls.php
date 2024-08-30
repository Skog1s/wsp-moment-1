<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <title>Form</title>
</head>
<body>
<h1>Namn och ålder</h1>
<?php
    $name = $_POST["name"];
    $age = $_POST["age"];

    echo "Du heter ". "$name". " och din ålder är ". "$age";
?>

</body>
</html>
