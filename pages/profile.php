<?php session_start(); ?>

<?php
if (!isset($_SESSION["user"])) {
    header('Location: login.php');
    exit();
}
?>

<?php include('../includes/header.php') ?>
<section class="container mx-auto">
    <h2>Profile</h2>
    <p>Hello, <?php echo $_SESSION["user"]["username"] ?></p>
</section>
<?php include('../includes/footer.php') ?>