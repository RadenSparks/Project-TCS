<?php
function addUser($country, $email, $password, $firstname, $lastname, $displayname)
{
    $conn = connectDb();
    $sql = "INSERT INTO accounts (email, password, firstname, lastname, displayname)
         VALUES ('$email', '$password', '$firstname', '$lastname', '$displayname')";
    $stmt = $conn->prepare($sql);
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->execute();
}
