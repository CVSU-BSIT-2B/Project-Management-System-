<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Connect to database
    $con = new mysqli("localhost", "root", "", "db_pms");

    // Check connection
    if ($con->connect_error) {
        die("Failed to connect: " . $con->connect_error);
    } else {
        $stmt = $con->prepare("SELECT * FROM pms_table WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt_result = $stmt->get_result();

        if ($stmt_result->num_rows > 0) {
            $data = $stmt_result->fetch_assoc();

            if ($data['password'] === $password) {
                header("Location: projhomepage.php");
                exit();
            } else {
                // Password is incorrect — show alert
                echo "<script>alert('Invalid Email or Password'); window.location.href='login.php';</script>";
            }
        } else {
            // Email not found — show alert
            echo "<script>alert('Invalid Email or Password'); window.location.href='login.php';</script>";
        }

        $stmt->close();
        $con->close();
    }
}
?>
