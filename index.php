
<?php
$message = "";
$messageType = "";

if (isset($_GET["registered"]) && $_GET["registered"] === "success") {
    $message = "Registration saved successfully!";
    $messageType = "success";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campus Events Portal - Lab 2B</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <link rel="stylesheet" href="css/custom.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href=" ">Campus Events Portal</a >

        <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarMenu"
                aria-controls="navbarMenu"
                aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarMenu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="#home">Home</a >
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#featured-events">Events</a >
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#event-schedule">Schedule</a >
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#event-registration">Sign Up</a >
                </li>
            </ul>
        </div>
    </div>
</nav>

<main class="container my-4" id="home">

    <h1>Campus Events Portal</h1>
    <p>Welcome to our campus events portal!</p >

    <?php if ($message !== ""): ?>
        <div class="alert alert-success">
            <?php echo htmlspecialchars($message, ENT_QUOTES, "UTF-8"); ?>
        </div>
    <?php endif; ?>

    <p>This is my Campus Events Portal for SSW3308 Lab 2B.</p >

    <p><a href="#featured-events">Jump to Featured Events</a ></p >

    <p>
        Visit our
        <a href="https://upm.edu.my/?LANG=en">university website</a >
        to learn more.
    </p >

    <section id="featured-events" class="my-5">
        <h2 class="mb-4">Featured Events</h2>

        <div class="row g-4">

            <div class="col-12 col-md-6 col-lg-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h3 class="card-title">Campus Music Festival</h3>
                        <p class="card-text">
                            Enjoy live music performances with your friends
                            and experience the campus music festival.
                        </p >
                        <span class="badge text-bg-primary">Music</span>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h3 class="card-title">Sports Day</h3>
                        <p class="card-text">
                            Join exciting sports competitions with other
                            students and enjoy an active day.
                        </p >
                        <span class="badge text-bg-success">Sports</span>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h3 class="card-title">Student Technology Workshop</h3>
                        <p class="card-text">
                            Learn about new technologies and practise
                            coding with other students.
                        </p >
                        <span class="badge text-bg-warning">Technology</span>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section id="event-image" class="my-5">
    <h2>UPM Campus Notice</h2>
    <img src="images/upm-notice.jpg" alt="UPM notice" class="img-fluid">
</section>

    <section id="event-schedule" class="my-5">
        <h2 class="mb-3">Event Schedule</h2>

        <div class="table-responsive">
            <table class="table table-striped table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">Event</th>
                        <th scope="col">Date</th>
                        <th scope="col">Time</th>
                        <th scope="col">Location</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Campus Music Festival</td>
                        <td>20 November 2026</td>
                        <td>10:00 AM</td>
                        <td>Main Hall</td>
                    </tr>
                    <tr>
                        <td>Sports Day</td>
                        <td>25 November 2026</td>
                        <td>9:00 AM</td>
                        <td>Sports Field</td>
                    </tr>
                    <tr>
                        <td>Student Technology Workshop</td>
                        <td>30 November 2026</td>
                        <td>2:00 PM</td>
                        <td>Computer Lab</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <section id="event-registration" class="my-5">
        <h2 class="mb-3">Event Registration</h2>

        <form action="register.php" method="POST">
            <div class="mb-3">
                <label for="student-name" class="form-label">Full Name</label>
                <input type="text"
                       class="form-control"
                       id="student-name"
                       name="name"
                       placeholder="Enter your full name"
                       maxlength="100"
                       required>
            </div>

            <div class="mb-3">
                <label for="student-email" class="form-label">Email Address</label>
                <input type="email"
                       class="form-control"
                       id="student-email"
                       name="email"
                       placeholder="name@example.com"
                       maxlength="150"
                       required>
            </div>

            <div class="mb-3">
                <label for="event-choice" class="form-label">Select an Event</label>
                <select class="form-select"
                        id="event-choice"
                        name="event"
                        required>
                    <option value="" selected disabled>Choose an event</option>
                    <option value="Campus Music Festival">Campus Music Festival</option>
                    <option value="Sports Day">Sports Day</option>
                    <option value="Student Technology Workshop">
                        Student Technology Workshop
                    </option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </section>

    <div class="d-flex justify-content-end my-4">
        <a href="registrations.php" class="btn btn-primary">
            View All Registrations
        </a >
    </div>

</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
