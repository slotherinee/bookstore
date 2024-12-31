<?php session_start(); ?>

<?php

if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit();
} ?>

<?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION = [];

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

    session_destroy();

    header("Location: login.php");
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
