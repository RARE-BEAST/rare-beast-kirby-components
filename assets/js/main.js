import { initAccordions } from "./modules/accordions";
import { initLenis } from "./modules/lenis-smooth-scroll";
import { initImageSlider } from "./modules/image-slider";
// import { initScrollTrigger } from "./modules/scroll-trigger";
// import { initMenu } from "./modules/menu";
// import { initFadeIns } from "./modules/fade-in";
// import { initStickyContentGallery } from "./modules/sticky-content-gallery";

initAccordions();
initLenis();
initImageSlider();
// initScrollTrigger();
// initMenu();
// initFadeIns(); 
// initStickyContentGallery();

document.addEventListener("DOMContentLoaded", (event) => {
  console.log("DOM fully loaded and parsed");
  // ScrollTrigger.refresh();
}); 