const password = document.getElementById("pass");
const passwordControl = document.querySelector(".password_control");

passwordControl.addEventListener("click", () => {
  if (passwordControl.classList.contains("view")) {
    passwordControl.classList.remove("view");
    password.setAttribute("type", "password");
  } else {
    passwordControl.classList.add("view");
    password.setAttribute("type", "text");
  }
});
