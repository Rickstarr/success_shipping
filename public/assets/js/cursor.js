(function(){
    // Only enable on devices that support a fine pointer
    if (window.matchMedia && window.matchMedia('(hover: none) and (pointer: coarse)').matches) return;

    const cursor = document.getElementById('custom-cursor');
    let mouseX = 0, mouseY = 0;
    let cursorX = 0, cursorY = 0;
    const speed = 0.18; // between 0 (no follow) and 1 (instant)

    // show cursor once we have pointer movement
    function showCursor(){
        if (cursor.style.display !== 'block') cursor.style.display = 'block';
    }

    document.addEventListener('mousemove', function(e){
        mouseX = e.clientX;
        mouseY = e.clientY;
        showCursor();
    }, {passive: true});

    // change cursor when over interactive elements
    const interactiveSelector = 'a, button, input, textarea, select, [role="button"], [data-cursor="small"], [data-cursor="large"]';
    document.addEventListener('mouseover', function(e){
        const target = e.target.closest ? e.target.closest(interactiveSelector) : null;
        if (target) {
            if (target.matches('[data-cursor="large"]')) {
                cursor.classList.add('cursor--large');
                cursor.classList.remove('cursor--small');
            } else if (target.matches('[data-cursor="small"]')) {
                cursor.classList.add('cursor--small');
                cursor.classList.remove('cursor--large');
            } else {
                cursor.classList.add('cursor--small');
                cursor.classList.remove('cursor--large');
            }
        } else {
            cursor.classList.remove('cursor--small', 'cursor--large');
        }
    }, true);

    // hide cursor when leaving window
    document.addEventListener('mouseleave', function(){ cursor.style.opacity = '0'; }, true);
    document.addEventListener('mouseenter', function(){ cursor.style.opacity = '0.95'; }, true);

    // animation loop
    function animate(){
        cursorX += (mouseX - cursorX) * speed;
        cursorY += (mouseY - cursorY) * speed;

        const translate = 'translate3d(' + cursorX + 'px, ' + cursorY + 'px, 0)';
        cursor.style.transform = translate;

        requestAnimationFrame(animate);
    }

    // kick off
    requestAnimationFrame(animate);
})();