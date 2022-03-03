let btnSaveDetails = document.querySelector("rememberForget");

function changeBtnText(e) {
  e.preventDefault();
  btn.innerText = "Forget Me";
}
btnSaveDetails.onclick = changeBtnText;

const sections = document.querySelectorAll("section");
const navLi = document.querySelectorAll("nav .navbar ul li");

window.addEventListener("scroll", () => {
  let current = "";
  sections.forEach((section) => {
    const sectionTop = section.offsetTop;
    const sectionHeight = section.clientHeight;
    if (pageYOffset >= sectionTop - sectionHeight / 3) {
      current = section.getAttribute("id");
    }
  });

  navLi.forEach((li) => {
    li.classList.remove("active");
    if (li.classList.contains(current)) {
      li.classList.add("active");
    }
  });
});

const form = document.getElementById("form");
const username = document.getElementById("username");
const phone = document.getElementById("phone");
const email = document.getElementById("email");

form.addEventListener("click", (e) => {
  e.preventDefault();

  checkInputs();

  function checkInputs() {
    //get values from inputs
    const usernameValue = username.value.trim();
    const phoneValue = phone.value.trim();
    const emailValue = email.value.trim();

    if (usernameValue === " ") {
      setErrorFor(username, "Username cannot be blank");
    } else {
      setSuccessFor(username);
    }

    if (phoneValue === " ") {
      setErrorFor(phone, "Phone cannot be blank");
    } else if (!isPhone(phoneValue)) {
      setErrorFor(phone, "Not a valid phone number");
    } else {
      setSuccessFor(phone);
    }

    if (emailValue === " ") {
      setErrorFor(email, "Email cannot be blank");
    } else if (!isEmail(emailValue)) {
      setErrorFor(email, "Not a valid email");
    } else {
      setSuccessFor(email);
    }
  }

  function setErrorFor(input, message) {
    const personalInfo = input.parentElement;
    const small = personalInfo.querySelector("small");

    //add error message inside small
    small.innerText = message;

    // add error class
    personalInfo.className = "personalInfo error";
  }

  function setSuccessFor(input) {
    const personalInfo = input.parentElement;
    personalInfo.className = "personalInfo success";
  }

  function isEmail(email) {
    return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(
      email
    );
  }

  function isPhone(phone) {
    return /^\d{7,}$/.test(value.replace(/[\s()+\-\.]|ext/gi, "")).test(phone);
  }
});
