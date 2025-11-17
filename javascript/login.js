document.addEventListener("DOMContentLoaded", function () {
    const registerLink = document.querySelector(".register-link");
    const loginLink = document.querySelector(".login-link");
    const wrapper = document.querySelector(".wrapper");

    // Check if all elements were found
    if (registerLink && loginLink && wrapper) {
        
        // When register link is clicked, just add the 'active' class
        registerLink.addEventListener("click", function (event) {
            event.preventDefault();
            wrapper.classList.add("active");
        });

        // When login link is clicked, just remove the 'active' class
        loginLink.addEventListener("click", function (event) {
            event.preventDefault();
            wrapper.classList.remove("active");
        });

    } else {
        // Log an error to the console if elements are missing
        if (!registerLink) console.error("Login script could not find '.register-link'");
        if (!loginLink) console.error("Login script could not find '.login-link'");
        if (!wrapper) console.error("Login script could not find '.wrapper'");
    }
});