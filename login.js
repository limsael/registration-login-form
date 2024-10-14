const form = document.querySelector("form");
const email = document.getElementById("email");
const psd = document.getElementById("password");
const statusText = document.getElementById("status-text");

form.addEventListener("submit", (e) => {
  e.preventDefault();

  const xhr = new XMLHttpRequest();

  xhr.open("POST", "./includes/login.inc.php", true);

  xhr.onload = () => {
    if (xhr.readyState === 4 && xhr.status === 200) {
      let data = xhr.response;
      console.log(data);
      // Display the server response in the status text field.
      statusText.textContent = data;
      form.reset();
    }
  };

  let formData = new FormData(form);
  xhr.send(formData);
});
