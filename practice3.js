document.addEventListener('DOMContentLoaded', () => {
  const password1 = document.getElementById('password1');
  const password2 = document.getElementById('password2');
  const message = document.getElementById('message');
  const form = document.getElementById('passwordForm');

  function checkPasswords() {
    if (password1.value === "" || password2.value === "") {
      message.textContent = "";
      message.className = "";
      return;
    }

    if (password1.value === password2.value) {
      message.textContent = "Passwords match!";
      message.className = "match";
    } else {
      message.textContent = "Passwords do not match.";
      message.className = "no-match";
    }
  }

  password1.addEventListener('input', checkPasswords);
  password2.addEventListener('input', checkPasswords);

  form.addEventListener('submit', (e) => {
    e.preventDefault(); // prevent form submission

    if (password1.value !== password2.value) {
      alert("Passwords do not match. Please try again.");
    } else {
      alert("Passwords matched. Form submitted!");
      form.reset();
      message.textContent = "";
      message.className = "";
    }
  });
});
