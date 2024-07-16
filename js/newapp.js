const description = document.getElementById("description");

const changeHeight = () => {
  description.style.height = "auto";
  description.style.height = `${description.scrollHeight}px`;
};

description.addEventListener("input", changeHeight);

changeHeight();
