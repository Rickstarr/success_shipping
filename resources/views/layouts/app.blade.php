<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success Shipping Ventures</title>
    <link rel="icon" href="/favicon.png.png" type="image/png"sizeof="48x48">
    <!-- TailwindCSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Your custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- <--- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="..." crossorigin="anonymous" referrerpolicy="no-referrer" />

    @stack('styles')
</head>
<body>
    <div>
        @include('layouts.header')

        <main>
            @yield('content')
        </main>

        @include('layouts.footer')
    </div>

    <!-- Custom animated cursor: a circle that follows the mouse -->
    <div id="custom-cursor" aria-hidden="true"></div>

    <!-- Scroll progress circle (fills as you scroll toward the footer) -->
    <div id="scroll-progress" aria-hidden="true" title="Scroll progress" role="presentation">
        <svg viewBox="0 0 100 100" width="56" height="56">
            <!-- background ring -->
            <circle cx="50" cy="50" r="45" stroke="rgba(0,0,0,0.08)" stroke-width="8" fill="none"></circle>
            <!-- progress ring (rotated -90deg so it starts at top) -->
            <circle id="scroll-progress-bar" cx="50" cy="50" r="45" stroke="#0f172a" stroke-width="8" fill="none" stroke-linecap="round" transform="rotate(-90 50 50)" stroke-dasharray="282.743" stroke-dashoffset="282.743"></circle>
        </svg>
    </div>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <style>
        /* Cursor circle styles */
        #custom-cursor {
            position: fixed;
            top: 0;
            left: 0;
            width: 35px;
            height: 35px;
            margin-left: -14px; /* center on pointer */
            margin-top: -14px;
            border-radius: 50%;
            pointer-events: none; /* don't block clicks */
            z-index: 99999;
            border: 1.5px solid gray;
            mix-blend-mode: normal;
            transform: translate3d(0,0,0) scale(1);
            transition: width 120ms ease, height 120ms ease, background 50ms ease, transform 50ms ease, opacity 100ms ease;
            will-change: transform, width, height, opacity;
            opacity: 0.95;
            display: none; /* shown only when pointer is available */
        }

        /* Smaller ring variant when hovering interactive elements
        #custom-cursor.cursor--small {
            width: 14px;
            height: 14px;
            margin-left: -7px;
            margin-top: -7px;
            background: rgba(0,0,0,0.9);
        }

        /* Larger, subtle ring for emphasis *
        #custom-cursor.cursor--large {
            width: 44px;
            height: 44px;
            margin-left: -22px;
            margin-top: -22px;
            background: rgba(0,0,0,0.25);
        } */

        /* Hide on small touch devices */
        @media (hover: none) and (pointer: coarse) {
            #custom-cursor { display: none !important; }
        }
    </style>

    <script>
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
    </script>

        <style>
            /* Scroll progress circle (fixed) */
            #scroll-progress {
                position: fixed;
                top: 18px;
                right: 18px;
                width: 56px;
                height: 56px;
                z-index: 99998;
                display: block;
                opacity: 0;
                transition: opacity 220ms ease, transform 220ms ease;
                pointer-events: none; /* don't intercept clicks */
            }

            /* show when user scrolls */
            #scroll-progress.visible {
                opacity: 1;
            }

            /* make it clickable on desktop if desired later */
            #scroll-progress svg { display: block; }

            /* hide on small/touch devices to avoid clutter */
            @media (hover: none) and (pointer: coarse), (max-width: 640px) {
                #scroll-progress { display: none !important; }
            }
        </style>

        <script>
            (function(){
                // Progress ring logic: fills as the page scrolls toward the footer
                const progressEl = document.getElementById('scroll-progress');
                const bar = document.getElementById('scroll-progress-bar');
                if (!progressEl || !bar) return;

                const r = 45; // matches r attribute in SVG
                const circumference = 2 * Math.PI * r;
                bar.style.strokeDasharray = circumference.toFixed(3);
                bar.style.strokeDashoffset = circumference.toFixed(3);

                let latestScrollY = window.scrollY || window.pageYOffset;
                let ticking = false;

                function setProgress(p) {
                    p = Math.max(0, Math.min(1, p));
                    const offset = circumference * (1 - p);
                    bar.style.strokeDashoffset = offset.toFixed(3);
                }

                function update() {
                    ticking = false;
                    const footer = document.querySelector('footer');
                    if (!footer) {
                        // fallback: use document height
                        const docHeight = Math.max(document.body.scrollHeight, document.documentElement.scrollHeight);
                        const maxScroll = Math.max(docHeight - window.innerHeight, 1);
                        const progress = (window.scrollY || window.pageYOffset) / maxScroll;
                        setProgress(progress);
                        progressEl.classList.toggle('visible', progress > 0.01);
                        return;
                    }

                    const footerTop = footer.getBoundingClientRect().top + (window.scrollY || window.pageYOffset);
                    const maxScroll = Math.max(footerTop - window.innerHeight, 0);
                    let progress = 0;
                    if (maxScroll <= 0) {
                        // footer already visible (short pages)
                        progress = 1;
                    } else {
                        progress = (window.scrollY || window.pageYOffset) / maxScroll;
                    }
                    progress = Math.max(0, Math.min(1, progress));

                    setProgress(progress);
                    // show when user has scrolled a little
                    progressEl.classList.toggle('visible', (window.scrollY || window.pageYOffset) > 8 || progress > 0);
                }

                function onScroll() {
                    latestScrollY = window.scrollY || window.pageYOffset;
                    if (!ticking) {
                        window.requestAnimationFrame(update);
                        ticking = true;
                    }
                }

                window.addEventListener('scroll', onScroll, {passive: true});
                window.addEventListener('resize', function(){ if (!ticking) { requestAnimationFrame(update); ticking = true; } }, {passive: true});

                // initialize
                update();
            })();
        </script>

    @stack('scripts')
</body>
</html>
