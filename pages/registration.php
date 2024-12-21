<?php
include "../db/database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    try {
        $query = $pdo->prepare(
            "INSERT INTO users (username, password, role) VALUES (?, ?, ?)"
        );
        $query->execute([$username, $password, "user"]);
        $success = "Registration successful!";
        header("Location: ../index.php");
        exit();
    } catch (PDOException $e) {
        $error = "Registration failed: " . $e->getMessage();
    }
}
?>

<?php include "../includes/header.php"; ?>

<section class="container">
    <h2>Registration</h2>
    <?php if (isset($success)): ?>
        <p style="color: green;"><?= $success ?></p>
    <?php endif; ?>
    <?php if (isset($error)): ?>
        <p style="color: red;"><?= $error ?></p>
    <?php endif; ?>
    <form method="POST">
        <label>Username:</label>
        <input type="text" name="username" required>
        <label>Password:</label>
        <input type="password" name="password" required>
        <button type="submit">Register</button>
    </form>
</section>
<?php include "../includes/footer.php"; ?>
