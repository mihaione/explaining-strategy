// import '../../node_modules/glightbox/dist/css/glightbox.min.css';
// import '../css/animate.css';
// import '../css/style.css';
//
// Note: Alpine is initialized in resources/js/app.js. Do not import/initialize Alpine here.

// ==== darkToggler (supports multiple toggles on the page)
const html = document.querySelector('html');
const darkTogglers = Array.from(document.querySelectorAll('[name="darkToggler"]'));

const applyDarkMode = (enabled) => {
  if (enabled) html.classList.add('dark');
  else html.classList.remove('dark');
};

// Initialize: force dark and sync all togglers (mirrors inline script in Blade)
applyDarkMode(true);
darkTogglers.forEach(cb => cb.checked = true);

const onToggleChange = (e) => {
  const enabled = e.target.checked;
  darkTogglers.forEach(cb => { if (cb !== e.target) cb.checked = enabled; });
  applyDarkMode(enabled);
};

darkTogglers.forEach(cb => cb.addEventListener('change', onToggleChange));

// ==== for menu scroll
const pageLink = document.querySelectorAll(".menu-scroll");

pageLink.forEach((elem) => {
    elem.addEventListener("click", (e) => {
        e.preventDefault();
        document.querySelector(elem.getAttribute("href")).scrollIntoView({
            behavior: "smooth",
            offsetTop: 1 - 60,
        });
    });
});

// section menu active
function onScroll(event) {
    const sections = document.querySelectorAll(".scroll-menu");
    const scrollPos =
        window.pageYOffset ||
        document.documentElement.scrollTop ||
        document.body.scrollTop;

    for (let i = 0; i < sections.length; i++) {
        const currLink = sections[i];
        const val = currLink.getAttribute("href");
        const refElement = document.querySelector(val);
        const scrollTopMinus = scrollPos + 73;
        if (
            refElement.offsetTop <= scrollTopMinus &&
            refElement.offsetTop + refElement.offsetHeight > scrollTopMinus
        ) {
            document
                .querySelector(".scroll-menu")
                .classList.remove("text-primary");
            currLink.classList.add("text-primary");
        } else {
            currLink.classList.remove("text-primary");
        }
    }
}

window.document.addEventListener("scroll", onScroll);

// ====== scroll top js
function scrollTo(element, to = 0, duration = 500) {
  const start = element.scrollTop;
  const change = to - start;
  const increment = 20;
  let currentTime = 0;

  const animateScroll = () => {
    currentTime += increment;

    const val = Math.easeInOutQuad(currentTime, start, change, duration);

    element.scrollTop = val;

    if (currentTime < duration) {
      setTimeout(animateScroll, increment);
    }
  };

  animateScroll();
}

Math.easeInOutQuad = function (t, b, c, d) {
  t /= d / 2;
  if (t < 1) return (c / 2) * t * t + b;
  t--;
  return (-c / 2) * (t * (t - 2) - 1) + b;
};

document.querySelector('.back-to-top').onclick = () => {
  scrollTo(document.documentElement);
};
