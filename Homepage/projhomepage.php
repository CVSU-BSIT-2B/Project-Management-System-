<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>SYNCRO Dashboard</title>
    <link rel="stylesheet" href="projhomepage.css"/>
</head>
<body>
    <div class="navbar">
        <div class="logo">
            <img src="logo.png" alt="SYNCRO Logo">
            <span>SYNCRO</span>
        </div>
        <div class="user-controls">
            <div class="icon">➕</div>
            <div class="icon">🖥️</div>
            <div class="icon avatar">👤</div>
        </div>
    </div>

    <div class="sidebar">
        <a href="homepage.php" class="sidebar-link">Home</a>
        <a href="projhomepage.php" class="sidebar-link">Project</a>
        <a href="calendar.php" class="sidebar-link">Calendar</a>
        <a href="announcement.php" class="sidebar-link">Announcement</a>
    </div>

    <div class="main">
        <div class="main-box">
            <h2>Welcome!</h2>
            <p>You have no current projects</p>

            <div class="dropdown-container">
                <button id="toggleDropdown" class="dropdown-toggle">⬆️</button>
                <div id="dropdownMenu" class="dropdown-menu">
                    <a href="join.php" class="dropdown-item">Join</a>
                    <a href="create.php" class="dropdown-item">Create</a>
                </div>
            </div>
        </div>
    </div>

    <div class="bottom-bar"></div>

    <script>
        const toggleBtn = document.getElementById("toggleDropdown");
        const menu = document.getElementById("dropdownMenu");

        toggleBtn.addEventListener("click", () => {
            menu.classList.toggle("show");
            toggleBtn.textContent = menu.classList.contains("show") ? "⬇️" : "⬆️";
        });
    </script>
</body>
</html>
