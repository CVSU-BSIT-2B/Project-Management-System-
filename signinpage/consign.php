<<<<<<< HEAD
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $conn = new mysqli('localhost', 'root', '', 'db_pms');

    if ($conn->connect_error) {
        die('Connection Failed: ' . $conn->connect_error);
    }

    $stmt = $conn->prepare("INSERT INTO pms_table (name, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $password);

    if ($stmt->execute()) {
        // ✅ Show alert and redirect to login
        echo "<script>
                alert('Registration Successful');
                window.location.href = 'login.php';
              </script>";
    } else {
        // ❌ Show error alert
        echo "<script>
                alert('Registration Failed: " . addslashes($stmt->error) . "');
                window.location.href = 'signin.php';
              </script>";
    }

    $stmt->close();
    $conn->close();
}
?>
=======
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $conn = new mysqli('localhost', 'root', '', 'db_pms');

    if ($conn->connect_error) {
        die('Connection Failed: ' . $conn->connect_error);
    }

    $stmt = $conn->prepare("INSERT INTO pms_table (name, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $password);

    if ($stmt->execute()) {
        // ✅ Show alert and redirect to login
        echo "<script>
                alert('Registration Successful');
                window.location.href = 'login.php';
              </script>";
    } else {
        // ❌ Show error alert
        echo "<script>
                alert('Registration Failed: " . addslashes($stmt->error) . "');
                window.location.href = 'signin.php';
              </script>";
    }

    $stmt->close();
    $conn->close();
}
?>
>>>>>>> origin/main
