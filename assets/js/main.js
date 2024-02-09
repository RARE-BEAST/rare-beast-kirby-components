gsap.registerPlugin(ScrollTrigger, MorphSVGPlugin, GSDevTools);

import { initLenis } from "./modules/lenis-smooth-scroll";
import { initSkipLink } from "./modules/skip-link";
import { initHeader } from "./modules/header";
import { initAccordions } from "./modules/accordions";
import { initImageSlider } from "./modules/image-slider";
import { initContact } from "./modules/contact";

initLenis();
initSkipLink();
initHeader();
initAccordions();
initImageSlider();
initContact();

document.addEventListener("DOMContentLoaded", (event) => {
  console.log("DOM fully loaded and parsed");
  ScrollTrigger.refresh();
});