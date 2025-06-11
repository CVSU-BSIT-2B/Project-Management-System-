<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>SYNCRO | Announcement</title>
  <link rel="stylesheet" href="announcement.css" />
</head>
<body>
  <!-- Navbar -->
  <div class="navbar">
    <div class="logo">
      <img src="logo.png" alt="SYNCRO Logo">
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
    <a href="announcement.php" class="sidebar-link active">Announcement</a>
  </div>

  <!-- Main Content -->
  <div class="main-content">
    <h2 class="section-title">📢 Create Announcement</h2>
    <textarea class="announcement-box" placeholder="Write your announcement here..."></textarea>
    <div class="send-group">
      <button class="send-btn">Send to</button>
      <select class="dropdown-select">
        <option>All Projects</option>
        <option>Project 1</option>
        <option>Project 2</option>
      </select>
    </div>
  </div>

  <!-- Footer -->
  <div class="footer"></div>
</body>
</html>
