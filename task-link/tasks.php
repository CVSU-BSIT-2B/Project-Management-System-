<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Syncro Project Board</title>
  <link rel="stylesheet" href="tasks.css" />
</head>
<body>
  <div class="navbar">
    <div class="logo">
      <img src="logo.png" alt="Logo" /> SYNCRO
    </div>
    <div class="user-controls">
      <div class="icon avatar">A</div>
    </div>
  </div>

  <div class="sidebar">
    <a href="home.php" class="sidebar-link">Home</a>
    <a href="project.php" class="sidebar-link">Project</a>
    <a href="calendar.php" class="sidebar-link">Calendar</a>
    <a href="announcement.php" class="sidebar-link">Announcement</a>
  </div>

  <div class="main">
    <div class="dropdown-container">
      <div class="dropdown-btn" onclick="toggleDropdown()">✔</div>
      <div class="dropdown" id="dropdownMenu">
        <a href="invite.php">Invite</a>  
        <a href="members.php">Members</a>
        <a href="memberprocess.php">Progress</a>
        <a href="createtask.php">Add Task</a>
      </div>
    </div>

    <h2>PROJECT 1</h2>
    <div class="project-board">
      <div class="column">
        <h3 class="todo">To do</h3>
        <div class="task">Task 3</div>
      </div>
      <div class="column">
        <h3 class="inprogress">In Progress</h3>
        <div class="task">Task 2</div>
      </div>
      <div class="column">
        <h3 class="done">Done</h3>
        <div class="task" onclick="location.href='task1.php'">Task 1</div>
      </div>
    </div>
  </div>

  <script>
    function toggleDropdown() {
      const menu = document.getElementById("dropdownMenu");
      menu.style.display = menu.style.display === "block" ? "none" : "block";
    }

    window.onclick = function (event) {
      if (!event.target.matches('.dropdown-btn')) {
        const dropdowns = document.getElementsByClassName("dropdown");
        for (let i = 0; i < dropdowns.length; i++) {
          const openDropdown = dropdowns[i];
          if (openDropdown.style.display === "block") {
            openDropdown.style.display = "none";
          }
        }
      }
    };
  </script>
</body>
</html>
