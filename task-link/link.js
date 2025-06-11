// Cache DOM elements
const emailInput = document.getElementById('email-input');
const emailList = document.getElementById('email-list');
const inviteLinkContainer = document.getElementById('invitation-link-container');
const inviteLinkSpan = document.getElementById('invite-link');
const addBtn = document.getElementById('add-btn');
const copyBtn = document.getElementById('copy-btn');
const shareBtn = document.getElementById('share-btn');
const doneBtn = document.getElementById('done-btn');

let emails = [];
let invitationCode = generateInvitationCode();  // generate immediately

// Set the link on page load
inviteLinkSpan.textContent = `https://syncro.app/invite/${invitationCode}`;

// Validate email with regex
function validateEmail(email) {
  const re = /^[a-zA-Z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/i;
  return re.test(email.toLowerCase());
}

// Render email tags
function renderEmails() {
  emailList.innerHTML = '';

  emails.forEach((email, idx) => {
    const tag = document.createElement('div');
    tag.className = 'email-tag';
    tag.textContent = email;

    const removeBtn = document.createElement('button');
    removeBtn.textContent = '×';
    removeBtn.title = "Remove";
    removeBtn.onclick = () => {
      emails.splice(idx, 1);
      renderEmails();
    };

    tag.appendChild(removeBtn);
    emailList.appendChild(tag);
  });
}

// Generate stable invitation code
function generateInvitationCode() {
  const randomNum = Math.floor(100000 + Math.random() * 900000); // 6 digit
  return 'ABC' + randomNum;
}

// Add email from input
function addEmail() {
  const email = emailInput.value.trim();
  if (!email) {
    alert("Please enter an email.");
    return;
  }
  if (!validateEmail(email)) {
    alert("Invalid email address.");
    return;
  }
  if (emails.includes(email.toLowerCase())) {
    alert("Email already added.");
    return;
  }

  emails.push(email.toLowerCase());
  renderEmails();
  emailInput.value = '';
}

// Copy invitation link
function copyLink() {
  const link = inviteLinkSpan.textContent;
  navigator.clipboard.writeText(link)
    .then(() => alert('Link copied to clipboard!'))
    .catch(() => alert('Failed to copy the link.'));
}

// Share invitation link
function shareLink() {
  const link = inviteLinkSpan.textContent;
  if (navigator.share) {
    navigator.share({
      title: 'SYNCRO Class Invitation',
      text: 'Join my SYNCRO class with this invitation link:',
      url: link,
    })
      .then(() => console.log('Shared successfully'))
      .catch(error => alert('Sharing failed: ' + error));
  } else {
    alert('Sharing is not supported on your browser. You can copy the link instead:\n' + link);
  }
}

// Finalize invitations
function doneInviting() {
  if (emails.length === 0) {
    alert('No emails added. Invitation link can be shared directly.');
    return;
  }
  alert('Invitations sent to: ' + emails.join(', '));
  emails = [];
  renderEmails();
}

// Event listeners
addBtn.addEventListener('click', addEmail);
copyBtn.addEventListener('click', copyLink);
shareBtn.addEventListener('click', shareLink);
doneBtn.addEventListener('click', doneInviting);

// Optional: add on Enter key press in input
emailInput.addEventListener('keypress', (e) => {
  if (e.key === 'Enter') {
    addEmail();
  }
});
