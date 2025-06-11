<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Syncro Project Panel</title>
  <link rel="stylesheet" href="memberprocess.css">
</head>
<body>
  <div class="navbar">
    <div class="logo">
      <img src="logo.png" alt="Logo">
      SYNCRO
    </div>
    <div class="user-controls">
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
    <div class="project-panel">
      <h3>PROJECT 1</h3>
      <div class="members-title">MEMBERS</div>
      <div class="member-list">
        <div class="member-row">
          <div class="member-info">
            <div class="member-name">Beltran, Dezza</div>
            <div class="status done">PROGRESS: Done</div>
          </div>
          <a class="sidebar-link" href="#">Dezza.pdf</a>
        </div>

        <div class="member-row">
          <div class="member-info">
            <div class="member-name">Boncocan, Judie Nicole</div>
            <div class="status done">PROGRESS: Done</div>
          </div>
          <a class="sidebar-link" href="#">Judie.png</a>
        </div>

        <div class="member-row">
          <div class="member-info">
            <div class="member-name">Derod, Andrelou</div>
            <div class="status failed">PROGRESS: Failed to Comply</div>
          </div>
        </div>

        <div class="member-row">
          <div class="member-info">
            <div class="member-name">Dulay, Allen</div>
            <div class="status progress">PROGRESS: In Progress</div>
          </div>
        </div>

        <div class="member-row">
          <div class="member-info">
            <div class="member-name">Flores, Curl Luis</div>
            <div class="status progress">PROGRESS: In Progress</div>
          </div>
        </div>

        <div class="member-row">
          <div class="member-info">
            <div class="member-name">Santos, Jessie Chris</div>
            <div class="status progress">PROGRESS: In Progress</div>
          </div>
        </div>

        <div class="member-row">
          <div class="member-info">
            <div class="member-name">Santos, John Michael</div>
            <div class="status progress">PROGRESS: In Progress</div>
          </div>
        </div>
      </div>

      <div class="action-buttons">
        <button class="save-btn">Save</button>
        <button class="cancel-btn">Cancel</button>
      </div>
    </div>
  </div>
</body>
</html>