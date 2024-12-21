<?php session_start(); ?>

<?php // Check if the user is logged in

if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit();
} ?>

<?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Unset all of the session variables.
    $_SESSION = [];

    // If it's desired to kill the session, also delete the session cookie.
    // Note: This will destroy the session, and not just the session data!
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(
            session_name(),
            "",
            time() - 42000,
            $params["path"],
            $params["domain"],
            $params["secure"],
            $params["httponly"]
        );
    }

    session_destroy(); // Destroy the session

    header("Location: login.php"); // Redirect to the login page
    exit();
} ?>
<?php include "../includes/header.php"; ?>

<section class="container">
    <h2>Logout</h2>
    <p>Are you sure you want to log out?</p>
    <form method="POST">
        <button type="submit">Logout</button>
    </form>
</section>

<?php include "../includes/footer.php"; ?>
