export function initScrollSmoother() {

  const smoother = ScrollSmoother.create({
    wrapper: document.querySelector('#smooth-wrapper'),
    content: document.querySelector('#smooth-content'),
    smooth: 0.7,
    effects: true
  });


ScrollTrigger.refresh();

}