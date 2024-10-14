const form = document.querySelector("form");
const fname = document.getElementById("fname");
const email = document.getElementById("email");
const password = document.getElementById("password");
const statusText = document.getElementById("status-text");

form.addEventListener("submit", (e) => {
  e.preventDefault();

  const xhr = new XMLHttpRequest();

  xhr.open("POST", "./includes/registration.inc.php", true);

  xhr.onload = () => {
    if (xhr.status === 200 && xhr.readyState === 4) {
      let data = xhr.response;

      statusText.textContent = data;

      form.reset();

      // fname.textContent = "";
      // email.textContent = "";
      // password.textContent = "";
    }
  };

  let formData = new FormData(form);
  xhr.send(formData);
});
