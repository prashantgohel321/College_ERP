document.addEventListener("DOMContentLoaded", function () {
    const registerLink = document.querySelector(".register-link");
    const loginLink = document.querySelector(".login-link");
    const loginForm = document.querySelector(".form-box.login");
    const registerForm = document.querySelector(".form-box.register");
    const wrapper = document.querySelector(".wrapper");

    registerForm.style.display = "none";

    registerLink.addEventListener("click", function (event) {a
        event.preventDefault();
        wrapper.classList.add("active");
        loginForm.style.display = "none";
        registerForm.style.display = "block";
    });

    loginLink.addEventListener("click", function (event) {
        event.preventDefault();
        wrapper.classList.remove("active");
        registerForm.style.display = "none";
        loginForm.style.display = "block";
    });
});
