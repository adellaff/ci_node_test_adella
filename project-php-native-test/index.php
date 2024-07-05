<?php
// Include your database configuration file
require_once 'config/db.php';

// Check session or login status
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

// CRUD operations

// Read employees
function getEmployees($conn) {
    $sql = "SELECT * FROM employees";
    $result = $conn->query($sql);
    return $result->fetch_all(MYSQLI_ASSOC);
}

// Create employee
function addEmployee($conn, $name, $position, $email) {
    $sql = "INSERT INTO employees (name, email, position) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssd", $name, $position, $email);
    $stmt->execute();
    $stmt->close();
}

// Update employee
function updateEmployee($conn, $id, $name, $position, $email) {
    $sql = "UPDATE employees SET name=?, position=?, email=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssdi", $name, $position, $email, $id);
    $stmt->execute();
    $stmt->close();
}

// Delete employee
function deleteEmployee($conn, $id) {
    $sql = "DELETE FROM employees WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
}

// Handle CRUD actions
if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $name = $_POST['email'];
    $position = $_POST['position'];
    addEmployee($conn, $id, $name, $email, $position,);
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $name = $_POST['email'];
    $position = $_POST['position'];
    updateEmployee($conn, $id, $name, $email, $position,);
}

if (isset($_POST['delete'])) {
    $id = $_POST['id'];
    deleteEmployee($conn, $id);
}

// Fetch employees
$employees = getEmployees($conn);

// Close database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Employees</title>
    <link rel="stylesheet" href="public/css/styles.css">
</head>
<body>
    <div class="container">
        <h2>Employee List</h2>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Position</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($employees as $employee): ?>
                    <tr>
                        <td><?php echo $employee['name']; ?></td>
                        <td><?php echo $employee['email']; ?></td>
                        <td><?php echo $employee['position']; ?></td>
                        <td>
                            <form action="employee_edit.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo $employee['id']; ?>">
                                <button type="submit" name="edit">Edit</button>
                            </form>
                            <form action="" method="POST">
                                <input type="hidden" name="id" value="<?php echo $employee['id']; ?>">
                                <button type="submit" name="delete">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <h2>Add Employee</h2>
        <form action="" method="POST">
            <input type="text" name="name" placeholder="Name" required>
            <input type="number" name="email" placeholder="email" step="0.01" required>
            <input type="text" name="position" placeholder="Position" required>
            <button type="submit" name="add">Add Employee</button>
        </form>
    </div>
</body>
</html>
