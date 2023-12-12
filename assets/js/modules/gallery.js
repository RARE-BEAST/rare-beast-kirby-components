export function initGallery() {

    let Gallery = document.querySelectorAll('.js-gallery');

    Gallery.forEach(elem => {

        let imageBlock = elem.querySelectorAll('.image');
        let soFar = 0;

        imageBlock.forEach(img => {

            function dragStart(element) {
                gsap.set(element.srcElement, {zIndex: 10});
            }

            function dragEnd(element) {
                gsap.set(element.srcElement, {zIndex: 2});

                soFar = soFar += 1;

                const totalPhotos = imageBlock.length;

                if (soFar == totalPhotos) {
                    console.log('done');
                    gsap.set(imageBlock, {zIndex: 3});

                    soFar = 0;
                }
            }

            Draggable.create(img, {
                    type:"x,y",
                    bounds: {minY:-50, maxY:50, minX:-50, maxX:50},
                    edgeResistance:0.65,
                    inertia:true,
                    onDragStart: dragStart,
                    onDragEnd: dragEnd
                }
            );
    
        });
  

    })

}