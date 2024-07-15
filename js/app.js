const num_app = document.querySelector(".num_app");
const title_num = document.getElementById("title_num");
title_num.style.width = getComputedStyle(num_app).getPropertyValue("width");

const gov_num = document.querySelector(".gov_num");
const title_govNumber = document.getElementById("title_govNumber");
title_govNumber.style.width =
  getComputedStyle(gov_num).getPropertyValue("width");

const description = document.querySelector(".description");
const title_description = document.getElementById("title_description");
title_description.style.width =
  getComputedStyle(description).getPropertyValue("width");

const status = document.querySelector(".status");
const title_status = document.getElementById("title_status");
title_status.style.width = getComputedStyle(status).getPropertyValue("width");
