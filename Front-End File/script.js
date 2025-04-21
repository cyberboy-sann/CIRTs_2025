function popup(popupId) {
     document.querySelectorAll(".popup-container").forEach(popup => {
        popup.style.display = "none";
    });

    const popupElement = document.getElementById(popupId);
    if (popupElement) {
        popupElement.style.display = "flex";

        const form = popupElement.querySelector("form");
        if (form) form.reset();
    } else {
        console.error("Popup element not found:", popupId);
    }
}

document.addEventListener("DOMContentLoaded", function () {
    document.body.addEventListener("click", function (e) {
        const target = e.target;

        if (target.tagName === "A") {
            const href = target.getAttribute("href");

            if (href === "#signup") {
                e.preventDefault();
                popup("signup-popup");
            } else if (href === "#login") {
                e.preventDefault();
                popup("login-popup");
            } else if (href === "#reset") {
                e.preventDefault();
                popup("reset-popup");
            } else if (href === "#feedback") {
                e.preventDefault();
                popup("feedback-popup");
            } else if (href === "#contact") {
                e.preventDefault();
                popup("contact-popup");
            }
        }
    });

    document.querySelectorAll(".popup-container button[type='reset'], .popup-container .close-btn").forEach(button => {
    
        button.addEventListener("click", function (e) {
            e.preventDefault();

            const popupContainer = this.closest(".popup-container");
            if (popupContainer) {
                popupContainer.style.display = "none";

                const form = popupContainer.querySelector("form");
                if (form) form.reset(),feedback();
            }
        });
    });
});

function togglePassword(inputId, icon) {
    const passwordField = document.getElementById(inputId);

    if (passwordField.type === "password") {
        passwordField.type = "text";
        icon.classList.remove("fa-eye");
        icon.classList.add("fa-eye-slash");
    } else {
        passwordField.type = "password";
        icon.classList.remove("fa-eye-slash");
        icon.classList.add("fa-eye");
    }
}

const toggleBtn = document.getElementById("theme-toggle");

if (toggleBtn) {
    if (localStorage.getItem("theme") === "dark") {
        document.body.classList.add("dark-mode");
    }

    toggleBtn.addEventListener("click", () => {
        document.body.classList.toggle("dark-mode");

        if (document.body.classList.contains("dark-mode")) {
            localStorage.setItem("theme", "dark");
        } else {
            localStorage.setItem("theme", "light");
        }

    });
}

setTimeout(() => {
    const msg = document.querySelector('.logout-msg');
    if (msg) {
        msg.classList.add('fade-out');
    }
}, 3000);

setTimeout(() => {
    const msg = document.querySelector('.feedback-msg');
    if (msg) {
        msg.classList.add('fade-out');
    }
}, 3000);

setTimeout(() => {
    const msg = document.querySelector('.contact-msg');
    if (msg) {
        msg.classList.add('fade-out');
    }
}, 3000);
