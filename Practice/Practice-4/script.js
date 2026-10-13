/* =========================================
   NAVBAR SCROLL EFFECT
========================================= */

const navbar = document.getElementById("mainNavbar");

window.addEventListener("scroll", () => {

    if (window.scrollY > 40) {
        navbar.classList.add("scrolled");
    } else {
        navbar.classList.remove("scrolled");
    }

});


/* =========================================
   SMOOTH NAVIGATION
========================================= */

document.querySelectorAll('a[href^="#"]').forEach(link => {

    link.addEventListener("click", function (event) {

        const targetId = this.getAttribute("href");

        if (targetId === "#") {
            return;
        }

        const target = document.querySelector(targetId);

        if (target) {

            event.preventDefault();

            target.scrollIntoView({
                behavior: "smooth"
            });

        }

    });

});


/* =========================================
   ANIMATED COUNTERS
========================================= */

const counters = document.querySelectorAll("[data-target]");

let counterStarted = false;

function animateCounters() {

    if (counterStarted) {
        return;
    }

    const statsSection = document.querySelector(".stats-section");

    if (!statsSection) {
        return;
    }

    const position = statsSection.getBoundingClientRect().top;

    const screenHeight = window.innerHeight;

    if (position < screenHeight * 0.85) {

        counterStarted = true;

        counters.forEach(counter => {

            const target = Number(counter.dataset.target);

            let current = 0;

            const duration = 1600;

            const increment = target / (duration / 16);

            const timer = setInterval(() => {

                current += increment;

                if (current >= target) {

                    current = target;

                    clearInterval(timer);

                }

                counter.textContent = Math.floor(current).toLocaleString();

            }, 16);

        });

    }

}

window.addEventListener("scroll", animateCounters);

animateCounters();


/* =========================================
   SCROLL REVEAL
========================================= */

const revealElements = document.querySelectorAll(
    ".feature-card, .step-card, .pricing-card, .about-main-card, .testimonial-box"
);

const revealObserver = new IntersectionObserver(
    entries => {

        entries.forEach(entry => {

            if (entry.isIntersecting) {

                entry.target.style.opacity = "1";
                entry.target.style.transform = "translateY(0)";

                revealObserver.unobserve(entry.target);

            }

        });

    },
    {
        threshold: 0.1
    }
);


revealElements.forEach(element => {

    element.style.opacity = "0";
    element.style.transform = "translateY(25px)";
    element.style.transition = "opacity 0.7s ease, transform 0.7s ease";

    revealObserver.observe(element);

});


/* =========================================
   MOBILE NAVBAR CLOSE
========================================= */

const navLinks = document.querySelectorAll(".navbar-nav .nav-link");
const navbarMenu = document.getElementById("navbarMenu");

navLinks.forEach(link => {

    link.addEventListener("click", () => {

        if (navbarMenu.classList.contains("show")) {

            const bsCollapse = bootstrap.Collapse.getInstance(navbarMenu);

            if (bsCollapse) {
                bsCollapse.hide();
            }

        }

    });

});