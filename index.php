<?php session_start(); ?>
<?php include "includes/header.php"; ?>

    <main class="container mx-auto flex justify-center">
        <h1 class="text-3xl">MAIN</h1>
    </main>

<?php include "db/database.php"; ?>
<?php try {
    // Create users table
    $pdo->exec("
        CREATE TABLE IF NOT EXISTS users (
            id INT AUTO_INCREMENT PRIMARY KEY,
            username VARCHAR(255) NOT NULL UNIQUE,
            password VARCHAR(255) NOT NULL,
            role ENUM('user', 'admin') NOT NULL
        )
    ");
    echo "Users table created successfully.<br>";
    // Create books table
    $pdo->exec("
        CREATE TABLE IF NOT EXISTS books (
            id INT AUTO_INCREMENT PRIMARY KEY,
            title VARCHAR(255) NOT NULL,
            author VARCHAR(255) NOT NULL,
            description TEXT,
            price DECIMAL(10, 2) NOT NULL,
            cover_image VARCHAR(255)
        )
    ");
    echo "Books table created successfully.<br>";
} catch (PDOException $e) {
    echo "Error creating tables: " . $e->getMessage();
} ?>

<?php include "includes/footer.php"; ?>
