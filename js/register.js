const form = document.getElementById("form");
const login = document.getElementById("login");
const password = document.getElementById("pass");
const lastName = document.getElementById("lastName");
const name = document.getElementById("name");
const surname = document.getElementById("surname");
const tel = document.getElementById("tel");
const email = document.getElementById("email");

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

const phoneMask = new IMask(tel, {
  mask: "+{7}(000)-000-00-00",
});

tel.addEventListener("input", () => {
  const telError = document.getElementById("telError");

  if (tel.value.length >= 1) {
    telError.textContent = "";
  }
});

email.addEventListener("input", () => {
  const emailError = document.getElementById("emailError");

  if (email.value.length >= 1) {
    emailError.textContent = "";
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
  if (!phoneMask.masked.isComplete) {
    telError.textContent = "Это поле обязательно для заполнения!";
    e.preventDefault();
  }
  if (email.value.length < 1) {
    emailError.textContent = "Это поле обязательно для заполнения!";
    e.preventDefault();
  }

  const emailReg = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i;
  if (!emailReg.test(email.value)) {
    emailError.textContent = "Введите корректный адрес!";
    e.preventDefault();
  }
});
