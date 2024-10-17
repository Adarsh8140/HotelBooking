<?php
// Database connection settings
$host = 'localhost';  // Change this to your MySQL server hostname
$dbname = 'submissions';  // Your database name
$username = 'root';  // MySQL username (default: root)
$password = '';  // MySQL password (default: empty)

// Establishing connection to MySQL database
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  // Enable exceptions for error handling
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// Processing form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate input data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $rating = intval($_POST['rating']);  // Convert rating to integer
    $feedback = htmlspecialchars($_POST['feedback']);

    // Prepare SQL statement to insert data
    $stmt = $pdo->prepare("INSERT INTO submissions (name, email, phone, rating, feedback) VALUES (?, ?, ?, ?, ?)");

    try {
        // Execute the SQL statement
        $stmt->execute([$name, $email, $phone, $rating, $feedback]);
        // Optionally, you can return a success message
        echo "Form submitted successfully!";
    } catch (PDOException $e) {
        // Handle database errors
        die("Error: " . $e->getMessage());
    }
}
?>
