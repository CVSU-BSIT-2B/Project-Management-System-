<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>SYNCRO | Join Project</title>
    <link rel="stylesheet" href="join.css" />
</head>
<body>
    <!-- Navbar -->
    <div class="navbar">
        <div class="logo">
            <img src="logo.png" alt="SYNCRO Logo" />
            <span>SYNCRO</span>
        </div>
        <div class="user-controls">
            <div class="icon avatar">👤</div>
        </div>
    </div>

    <!-- Sidebar -->
    <div class="sidebar">
        <a href="homepage.php" class="sidebar-link">Home</a>
        <a href="projhomepage.php" class="sidebar-link">Project</a>
        <a href="calendar.php" class="sidebar-link">Calendar</a>
        <a href="announcement.php" class="sidebar-link">Announcement</a>
    </div>

    <!-- Main content -->
    <div class="main">
        <div class="main-box">
            <h3>JOIN TO:</h3>
            <div class="user-box">
                <p>You're currently signed in as</p>
                <div class="user-info">
                    <div class="avatar-img">👤</div>
                    <div>
                        <div id="user-name">User Name</div>
                        <div id="user-email">user@example.com</div>
                    </div>
                </div>
                <button class="switch-btn" onclick="switchAccount()">Switch account</button>
            </div>

            <div class="join-box">
                <label for="project-link">Project Link:</label>
                <input type="text" id="project-link" placeholder="Enter project link..." />
                <button class="join-btn" onclick="joinProject()">Join</button>
            </div>
        </div>
    </div>

    <div class="bottom-bar"></div>

    <script>
        // Example user data from login (replace this with actual login session data)
        const user = {
            name: localStorage.getItem("userName") || "Allen Dulay",
            email: localStorage.getItem("userEmail") || "allendulay09@gmail.com"
        };

        document.getElementById("user-name").textContent = user.name;
        document.getElementById("user-email").textContent = user.email;

        function switchAccount() {
            // Clear session and redirect to login
            localStorage.clear();
            window.location.href = "login.php";
        }

        function joinProject() {
            const link = document.getElementById("project-link").value;
            if (link.trim()) {
                // Implement join logic or redirect
                alert("Joining project with link: " + link);
            }
        }
    </script>
</body>
</html>
