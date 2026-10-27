
<?php
$registrations = [];
$error = "";

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

    $sql = "SELECT id, name, email, event_name, registered_at
            FROM registrations
            ORDER BY registered_at DESC";

    $stmt = $pdo->query($sql);
    $registrations = $stmt->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    $error = "Unable to load registration records.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registrations</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-dark bg-danger">
        <div class="container">
            <a class="navbar-brand" href=" ">
                Campus Events Portal
            </a >
        </div>
    </nav>

    <main class="container py-4">
        <h1>Student Registrations</h1>
        <p>View all submitted event registrations.</p >

        <?php if ($error !== ""): ?>
            <div class="alert alert-danger">
                <?php echo htmlspecialchars($error, ENT_QUOTES, "UTF-8"); ?>
            </div>
        <?php else: ?>
            <p>
                Total registrations:
                <strong><?php echo count($registrations); ?></strong>
            </p >

            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead class="table-danger">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Event</th>
                            <th>Registered At</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (count($registrations) > 0): ?>
                            <?php foreach ($registrations as $row): ?>
                                <tr>
                                    <td><?php echo (int) $row["id"]; ?></td>
                                    <td><?php echo htmlspecialchars($row["name"], ENT_QUOTES, "UTF-8"); ?></td>
                                    <td><?php echo htmlspecialchars($row["email"], ENT_QUOTES, "UTF-8"); ?></td>
                                    <td><?php echo htmlspecialchars($row["event_name"], ENT_QUOTES, "UTF-8"); ?></td>
                                    <td><?php echo htmlspecialchars($row["registered_at"], ENT_QUOTES, "UTF-8"); ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="5" class="text-center">
                                    No registrations found.
                                </td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        <?php endif; ?>

        <a href="index.php" class="btn btn-primary">Back to Home</a >
    </main>
</body>
</html>
