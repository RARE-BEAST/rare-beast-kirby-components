gsap.registerPlugin(ScrollTrigger, MorphSVGPlugin, GSDevTools);

import { initAccordions } from "./modules/accordions";
import { initLenis } from "./modules/lenis-smooth-scroll";
import { initImageSlider } from "./modules/image-slider";
import { initContact } from "./modules/contact";
import { initHeader } from "./modules/header";

initAccordions();
initLenis();
initImageSlider();
initContact();
initHeader();

document.addEventListener("DOMContentLoaded", (event) => {
  console.log("DOM fully loaded and parsed");
  ScrollTrigger.refresh();
});