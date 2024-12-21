<?php session_start(); ?>
<?php include "includes/header.php"; ?>

    <main class="container mx-auto flex justify-center">
        <h1 class="text-3xl">MAIN</h1>
    </main>

<?php include "db/database.php"; ?>
<?php $env = parse_ini_file("db/.env"); ?>
<?php try {
    // Hash the password securely using password_hash
    $hashedPassword = password_hash($env["ADMIN_PASSWORD"], PASSWORD_DEFAULT); // Prepare and execute the query
    $query = $pdo->prepare(
        "INSERT INTO users (username, password, role) VALUES (?, ?, ?)"
    );
    $query->execute(["admin", $hashedPassword, "admin"]);
    echo "Admin user created successfully.";
} catch (PDOException $e) {
    echo "Error creating admin user: " . $e->getMessage();
} ?>

<?php include "includes/footer.php"; ?>
