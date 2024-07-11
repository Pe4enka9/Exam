const form = document.getElementById("form");
const login = document.getElementById("login");
const password = document.getElementById("pass");
const lastName = document.getElementById("lastName");
const name = document.getElementById("name");
const surname = document.getElementById("surname");

login.addEventListener("input", () => {
  const loginError = document.getElementById("loginError");

  if (login.value.length < 6 || login.value.length > 18) {
    loginError.textContent =
      "Длина должна быть не менее 6 и не более 18 символов";
  } else {
    loginError.textContent = "";
  }
});

password.addEventListener("input", () => {
  const passwordError = document.getElementById("passwordError");

  if (password.value.length < 6) {
    passwordError.textContent = "Длина пароля должна быть не менее 6 символов";
  } else {
    passwordError.textContent = "";
  }
});

lastName.addEventListener("input", () => {
  const lastNameError = document.getElementById("lastNameError");

  if (lastName.value.length >= 1) {
    lastNameError.textContent = "";
  }
});

name.addEventListener("input", () => {
  const nameError = document.getElementById("nameError");

  if (name.value.length >= 1) {
    nameError.textContent = "";
  }
});

surname.addEventListener("input", () => {
  const surnameError = document.getElementById("surnameError");

  if (surname.value.length >= 1) {
    surnameError.textContent = "";
  }
});

form.addEventListener("submit", (e) => {
  if (login.value.length < 6 || login.value.length > 18) {
    loginError.textContent = "Это поле обязательно для заполнения!";
    e.preventDefault();
  }
  if (password.value.length < 6) {
    passwordError.textContent = "Это поле обязательно для заполнения!";
    e.preventDefault();
  }
  if (lastName.value.length < 1) {
    lastNameError.textContent = "Это поле обязательно для заполнения!";
    e.preventDefault();
  }
  if (name.value.length < 1) {
    nameError.textContent = "Это поле обязательно для заполнения!";
    e.preventDefault();
  }
  if (surname.value.length < 1) {
    surnameError.textContent = "Это поле обязательно для заполнения!";
    e.preventDefault();
  }
});
