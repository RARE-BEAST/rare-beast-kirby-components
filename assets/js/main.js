gsap.registerPlugin(ScrollSmoother, ScrollTrigger, MorphSVGPlugin, GSDevTools);

import { initSkipLink } from "./modules/skip-link";
import { initScrollSmoother } from "./modules/scroll-smoother";
import { initHeader } from "./modules/header";
import { initAccordions } from "./modules/accordions";
import { initImageSlider } from "./modules/image-slider";

initSkipLink();
initScrollSmoother();
initHeader();
initAccordions();
initImageSlider();

document.addEventListener("DOMContentLoaded", (event) => {
  console.log("DOM fully loaded and parsed");
  ScrollTrigger.refresh();
});