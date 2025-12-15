<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Question 24: Username Form</title>
</head>
<body>

    <form method="post" action="">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username">
        <button type="submit">Submit</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];

        if (empty($username)) {
            echo "<p style='color: red;'>Error: Username cannot be empty.</p>";
        } else {
            echo "<p style='color: green;'>Welcome, " . htmlspecialchars($username) . "!</p>";
        }
    }
    ?>

</body>
</html>
