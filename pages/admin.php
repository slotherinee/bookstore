<?php session_start(); ?>

<?php if (!isset($_SESSION["user"]) || $_SESSION["user"]["role"] !== "admin") {
    header("Location: login.php");
    exit();
} ?>

<?php $userId = $_SESSION["user"]["id"]; ?>
<?php $username = $_SESSION["user"]["username"]; ?>
<?php $userRole = $_SESSION["user"]["role"]; ?>

<?php include "../includes/header.php"; ?>

    <main class="container mx-auto flex justify-center">
        <h1 class="text-3xl">Hello admin, <?php echo $username; ?></h1>
        <h2>Your role is <?php echo $userRole; ?></h2>
    </main>

<?php include "../includes/footer.php"; ?>
