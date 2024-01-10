// import { initScrollTrigger } from "./modules/scroll-trigger";
import { initAccordions } from "./modules/accordions";
import { initLenis } from "./modules/lenis-smooth-scroll";
// import { initMenu } from "./modules/menu";
// import { initFadeIns } from "./modules/fade-in";
// import { initStickyContentGallery } from "./modules/sticky-content-gallery";
// import { initImageSlider } from "./modules/image-slider";

// initScrollTrigger();
initAccordions();
initLenis();
// initMenu();
// initFadeIns(); 
// initStickyContentGallery();
// initImageSlider();

document.addEventListener("DOMContentLoaded", (event) => {
  console.log("DOM fully loaded and parsed");
  // ScrollTrigger.refresh();
}); 