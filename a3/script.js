function navBarHighlight() {
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
}

function bookingFormEventList() {
  const form = document.getElementById("form");
  const username = document.getElementById("username");
  const phone = document.getElementById("phone");
  const email = document.getElementById("email");

  form.addEventListener("bookbtn", (e) => {
    e.preventDefault();

    checkInputs();
  });

  function checkInputs() {
    //get values from inputs
    const usernameValue = username.value.trim();
    const phoneValue = phone.value.trim();
    const emailValue = email.value.trim();

    if (usernameValue === "") {
      setErrorFor(username, "Username cannot be blank");
    } else {
      setSuccessFor(username);
    }

    if (phoneValue === "") {
      setErrorFor(phone, "Phone cannot be blank");
    } else if (!isPhone(phoneValue)) {
      setErrorFor(phone, "Not a valid phone number");
    } else {
      setSuccessFor(phone);
    }

    if (emailValue === "") {
      setErrorFor(email, "Email cannot be blank");
    } else if (!isEmail(emailValue)) {
      setErrorFor(email, "Not a valid email");
    } else {
      setSuccessFor(email);
    }
  }

  function setErrorFor(input, message) {
    const formControl = input.parentElement;
    const small = formControl.querySelector("small");

    //add error message inside small
    small.inerText = message;

    // add error class
    formControl.className = "form-control error";
  }

  function setSuccessFor(input) {
    const formControl = input.parentElement;
    formControl.className = "form-control success";
  }

  function isEmail(email) {
    return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(
      email
    );
  }

  function isPhone(phone) {
    return /^\d{7,}$/.test(value.replace(/[\s()+\-\.]|ext/gi, "")).test(phone);
  }
}
