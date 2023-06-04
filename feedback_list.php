<?php
require "./components/header.php";
echo "<h1>list feedback here</h1>";
$sql = "SELECT name, email, body * FROM feedback";

if ($connection != null) {
    try {
        $statement = $connection->prepare($sql);
        $statement->execute();
        $result = $statement->setFetchMode(PDO::FETCH_ASSOC);
        $feedbacks = $statement->fetchAll();
        foreach ($feedbacks as $feedback) {
            $name = $feedback["name"] ?? "";
            $email = $feedback["email"] ?? "";
            $body = $feedback["body"] ?? "";
            echo "$name, $email, $body <br />";
        }
        // echo $statement;
        // echo "links";
    } catch (PDOException $e) {
    };
};
include "./components/footer.php";
