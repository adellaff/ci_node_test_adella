<?php
// Include your database configuration file
require_once 'config/db.php';

// Handle edit action
if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $sql = "SELECT * FROM employees WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $employee = $result->fetch_assoc();
    $stmt->close();
}

// Update employee
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $position = $_POST['position'];
    $email = $_POST['email'];
    $sql = "UPDATE employees SET name=?, position=?, email=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssdi", $name, $position, $email, $id);
    $stmt->execute();
    $stmt->close();
    header("Location: employees.php");
    exit();
}

// Close database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Employee</title>
    <link rel="stylesheet" href="public/css/styles.css">
</head>
<body>
    <div class="container">
        <h2>Edit Employee</h2>
        <form action="" method="POST">
            <input type="hidden" name="id" value="<?php echo $employee['id']; ?>">
            <input type="text" name="name" value="<?php echo $employee['name']; ?>" required>
            <input type="text" name="position" value="<?php echo $employee['position']; ?>" required>
            <input type="number" name="email" value="<?php echo $employee['email']; ?>" step="0.01" required>
            <button type="submit" name="update">Update Employee</button>
        </form>
    </div>
</body>
</html>
