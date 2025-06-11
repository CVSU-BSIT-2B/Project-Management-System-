<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Syncro Project</title>
  <link rel="stylesheet" href="input.css">
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
    <h2>Project 1</h2>
    <div class="task">
      <div class="task-header">
        <span>Task 1</span>
        <span>Due Date: 06-13-2025</span>
      </div>
      <div class="editable" id="description">DESCRIPTION</div>
      <button onclick="editDescription()">EDIT</button>
      <div class="editable" id="otherInfo">Other Info:</div>
    </div>

    <div class="updates">
      <h3>Updates:</h3>
      <div id="comments"></div>
      <button onclick="toggleCommentBox()">+ Add Comments</button>
      <div class="comment-box" id="commentBox">
        <textarea id="commentInput" placeholder="Chatbox..."></textarea>
        <button onclick="submitComment()">Submit</button>
      </div>
    </div>

    <div class="file-upload">
      <button onclick="toggleUploadOptions()">Upload Files</button>
      <div class="upload-options" id="uploadOptions">
        <div onclick="openGoogleDrive()">Google Drive</div>
        <div onclick="openFilePicker()">Upload File</div>
        <div onclick="addLink()">Add Link</div>
        <div onclick="window.open('https://docs.google.com/document/', '_blank')">Google Docs</div>
        <div onclick="window.open('https://docs.google.com/presentation/', '_blank')">Slides</div>
        <div onclick="window.open('https://docs.google.com/spreadsheets/', '_blank')">Sheets</div>
        <input type="file" id="fileInput" style="display: none;" onchange="handleFileUpload(event)">
      </div>
    </div>
  </div>

  <script>
    function editDescription() {
      const desc = document.getElementById("description");
      const currentText = desc.innerText;
      const input = document.createElement("textarea");
      input.value = currentText;
      desc.replaceWith(input);

      input.addEventListener("blur", () => {
        const newDiv = document.createElement("div");
        newDiv.className = "editable";
        newDiv.id = "description";
        newDiv.innerText = input.value;
        input.replaceWith(newDiv);
      });
    }

    function toggleCommentBox() {
      const box = document.getElementById("commentBox");
      box.style.display = box.style.display === "block" ? "none" : "block";
    }

    function submitComment() {
      const input = document.getElementById("commentInput");
      const comments = document.getElementById("comments");
      if (input.value.trim()) {
        const p = document.createElement("p");
        p.innerText = input.value;
        comments.appendChild(p);
        input.value = "";
      }
    }

    function toggleUploadOptions() {
      const options = document.getElementById("uploadOptions");
      options.classList.toggle("show");
    }

    function openGoogleDrive() {
      window.open("https://drive.google.com/drive/my-drive", "_blank");
    }

    function openFilePicker() {
      document.getElementById("fileInput").click();
    }

    function handleFileUpload(event) {
      const file = event.target.files[0];
      if (file) {
        alert(`Selected file: ${file.name}`);
        // Upload logic goes here
      }
    }

    function addLink() {
      const link = prompt("Enter the URL:");
      if (link) {
        const comments = document.getElementById("comments");
        const a = document.createElement("a");
        a.href = link;
        a.target = "_blank";
        a.innerText = link;
        comments.appendChild(a);
        comments.appendChild(document.createElement("br"));
      }
    }
  </script>
</body>
</html>
=======
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Syncro Project</title>
  <link rel="stylesheet" href="input.css">
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
    <h2>Project 1</h2>
    <div class="task">
      <div class="task-header">
        <span>Task 1</span>
        <span>Due Date: 06-13-2025</span>
      </div>
      <div class="editable" id="description">DESCRIPTION</div>
      <button onclick="editDescription()">EDIT</button>
      <div class="editable" id="otherInfo">Other Info:</div>
    </div>

    <div class="updates">
      <h3>Updates:</h3>
      <div id="comments"></div>
      <button onclick="toggleCommentBox()">+ Add Comments</button>
      <div class="comment-box" id="commentBox">
        <textarea id="commentInput" placeholder="Chatbox..."></textarea>
        <button onclick="submitComment()">Submit</button>
      </div>
    </div>

    <div class="file-upload">
      <button onclick="toggleUploadOptions()">Upload Files</button>
      <div class="upload-options" id="uploadOptions">
        <div onclick="openGoogleDrive()">Google Drive</div>
        <div onclick="openFilePicker()">Upload File</div>
        <div onclick="addLink()">Add Link</div>
        <div onclick="window.open('https://docs.google.com/document/', '_blank')">Google Docs</div>
        <div onclick="window.open('https://docs.google.com/presentation/', '_blank')">Slides</div>
        <div onclick="window.open('https://docs.google.com/spreadsheets/', '_blank')">Sheets</div>
        <input type="file" id="fileInput" style="display: none;" onchange="handleFileUpload(event)">
      </div>
    </div>
  </div>

  <script>
    function editDescription() {
      const desc = document.getElementById("description");
      const currentText = desc.innerText;
      const input = document.createElement("textarea");
      input.value = currentText;
      desc.replaceWith(input);

      input.addEventListener("blur", () => {
        const newDiv = document.createElement("div");
        newDiv.className = "editable";
        newDiv.id = "description";
        newDiv.innerText = input.value;
        input.replaceWith(newDiv);
      });
    }

    function toggleCommentBox() {
      const box = document.getElementById("commentBox");
      box.style.display = box.style.display === "block" ? "none" : "block";
    }

    function submitComment() {
      const input = document.getElementById("commentInput");
      const comments = document.getElementById("comments");
      if (input.value.trim()) {
        const p = document.createElement("p");
        p.innerText = input.value;
        comments.appendChild(p);
        input.value = "";
      }
    }

    function toggleUploadOptions() {
      const options = document.getElementById("uploadOptions");
      options.classList.toggle("show");
    }

    function openGoogleDrive() {
      window.open("https://drive.google.com/drive/my-drive", "_blank");
    }

    function openFilePicker() {
      document.getElementById("fileInput").click();
    }

    function handleFileUpload(event) {
      const file = event.target.files[0];
      if (file) {
        alert(`Selected file: ${file.name}`);
        // Upload logic goes here
      }
    }

    function addLink() {
      const link = prompt("Enter the URL:");
      if (link) {
        const comments = document.getElementById("comments");
        const a = document.createElement("a");
        a.href = link;
        a.target = "_blank";
        a.innerText = link;
        comments.appendChild(a);
        comments.appendChild(document.createElement("br"));
      }
    }
  </script>
</body>
</html>
>>>>>>> origin/main
