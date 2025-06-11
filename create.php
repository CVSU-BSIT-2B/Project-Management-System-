<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>SYNCRO | Create Project</title>
  <link rel="stylesheet" href="create.css" />
</head>
<body>

  <!-- Navbar -->
  <div class="navbar">
    <div class="menu-icon">☰</div>
    <div class="logo">
      <img src="logo.png" alt="SYNCRO Logo" />
      <span>SYNCRO</span>
    </div>
    <div class="avatar">👤</div>
  </div>

  <!-- Action Buttons -->
<div class="top-buttons">
  <a href="projhomepage.php" class="back-button">🔙 Back</a>
  <a href="create.php" class="create-project-btn">📅 Create Project</a>
</div>

  <!-- Form Container -->
  <div class="form-container">
    <form class="project-form">
      <label for="title">Project Title <span class="required">*</span></label>
      <input type="text" id="title" name="title" placeholder="Enter project title" required />
      <hr />

      <label for="description">Description</label>
      <textarea id="description" name="description" placeholder="Enter project description" rows="3"></textarea>
      <hr />

      <label for="attachment">Add Attachment</label>
      <input type="file" id="attachment" name="attachment" />
      <hr />

      <label for="due-date">Set Due Date</label>
      <input type="date" id="due-date" name="due-date" />
      <hr />

      <label for="members">Add Members</label>
      <input type="text" id="members" name="members" placeholder="Enter member emails or names" />
      <hr />

      <button type="submit" class="create-btn">Create</button>
    </form>
  </div>

</body>
</html>
