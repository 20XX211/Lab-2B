
<?php
$message = "";
$messageType = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = trim($_POST["name"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $event = trim($_POST["event"] ?? "");

    if ($name === "" || $email === "" || $event === "") {
        $message = "Please complete all fields.";
        $messageType = "error";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = "Please enter a valid email address.";
        $messageType = "error";
    } else {
        try {
            $pdo = new PDO(
                "mysql:host=localhost;dbname=campus_events;charset=utf8mb4",
                "root",
                ""
            );

            $pdo->setAttribute(
                PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION
            );

            $sql = "INSERT INTO registrations (name, email, event_name)
                    VALUES (:name, :email, :event)";

            $stmt = $pdo->prepare($sql);

            $stmt->execute([
                ":name" => $name,
                ":email" => $email,
                ":event" => $event
            ]);

            $message = "Registration saved to database successfully!";
            $messageType = "success";

        } catch (PDOException $e) {
            $message = "Database error. Please check your database settings.";
            $messageType = "error";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Result</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>
<body class="container py-5">
    <h1>Registration Result</h1>

    <?php if ($message !== ""): ?>
        <div class="alert <?php echo $messageType === "success"
            ? "alert-success" : "alert-danger"; ?>">
            <?php echo htmlspecialchars($message, ENT_QUOTES, "UTF-8"); ?>
        </div>
    <?php else: ?>
        <p>Please submit the registration form first.</p >
    <?php endif; ?>

    <a href="index.php" class="btn btn-primary">Back to Home</a >
</body>
</html>

