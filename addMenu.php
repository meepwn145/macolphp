<?php
// Database connection details
$host = "your_database_host";
$username = "your_username";
$password = "your_password";
$database = "your_database_name";

// Create a database connection
$mysqli = new mysqli($host, $username, $password, $database);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Process form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $menuName = $_POST["menuName"];
    $menuDescription = $_POST["menuDescription"];

    // Validate input (you can add more validation as needed)
    if (empty($menuName) || empty($menuDescription)) {
        echo "Both menu name and description are required.";
    } else {
        // Insert data into the database
        $query = "INSERT INTO menu_table (menu_name, menu_description) VALUES (?, ?)";
        $stmt = $mysqli->prepare($query);
        $stmt->bind_param("ss", $menuName, $menuDescription);

        if ($stmt->execute()) {
            echo "Menu has been added successfully!";
        } else {
            echo "Error: " . $mysqli->error;
        }

        // Close the statement and connection
        $stmt->close();
        $mysqli->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Your HTML header content here -->
</head>
<body>
  <div class="container">
    <h1 class="text-center mt-5">Add Menu</h1>

    <a href="/" class="btn btn-primary mb-3">Home</a>
    <a href="/manage.php" class="btn btn-primary mb-3">Manage</a>

    <form action="addMenu.php" method="post" class="mt-3">
      <div class="mb-3">
        <label for="menuName" class="form-label">Menu Name</label>
        <input type="text" class="form-control" id="menuName" name="menuName" maxlength="100" required>
      </div>
      <div class="mb-3">
        <label for="menuDescription" class="form-label">Menu Description</label>
        <textarea class="form-control" id="menuDescription" name="menuDescription" maxlength="1000" required></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</body>
</html>
