<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Project Members</title>
  <link rel="stylesheet" href="membersedit.css" />
</head>
<body>
  <div class="navbar">
    <div class="logo">
      <img src="logo.png" alt="Logo" />
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
    <div class="invite-container">
      <h2>PROJECT 1</h2>
      <h3 style="color:#3e81c4;">MEMBERS</h3>
<div class="member-list">
  <div class="member-row">
    <div class="member-info">
      <span class="member-name">Beltran, Dezza</span>
      <button class="kick-btn">KICK</button>
    </div>
    <span class="status done">PROGRESS: Done</span>
  </div>

  <div class="member-row">
    <div class="member-info">
      <span class="member-name">Boncocan, Judie</span>
      <button class="kick-btn">KICK</button>
    </div>
    <span class="status done">PROGRESS: Done</span>
  </div>

  <div class="member-row">
    <div class="member-info">
      <span class="member-name">Derod, Andrelou</span>
      <button class="kick-btn">KICK</button>
    </div>
    <span class="status failed">PROGRESS: FAILED</span>
  </div>

  <div class="member-row">
    <div class="member-info">
      <span class="member-name">Dulay, Allen</span>
      <button class="kick-btn">KICK</button>
    </div>
    <span class="status progress">PROGRESS: In Progress</span>
  </div>
</div>



      <div class="action-buttons">
        <button class="save-btn">SAVE</button>
        <button class="cancel-btn">CANCEL</button>
      </div>
    </div>
  </div>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const memberList = document.querySelector('.member-list');
    const kickButtons = document.querySelectorAll('.kick-btn');
    const cancelBtn = document.querySelector('.cancel-btn');

    // Save the original member list HTML
    const originalMembersHTML = memberList.innerHTML;

    // Kick button functionality
    kickButtons.forEach(function (button) {
      button.addEventListener('click', function () {
        const memberRow = this.closest('.member-row');
        if (memberRow) {
          memberRow.remove();
        }
      });
    });

    // Cancel button resets the member list
    cancelBtn.addEventListener('click', function () {
      memberList.innerHTML = originalMembersHTML;

      // Reattach the kick event listeners after resetting
      const newKickButtons = memberList.querySelectorAll('.kick-btn');
      newKickButtons.forEach(function (button) {
        button.addEventListener('click', function () {
          const memberRow = this.closest('.member-row');
          if (memberRow) {
            memberRow.remove();
          }
        });
      });
    });
  });
</script>


</body>
</html>
