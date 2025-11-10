<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="icon" href="/favicon.jpg.jpg" type="image/jpg"sizeof="48x48">
    <!-- TailwindCSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />

    <!-- Your custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- <--- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="..." crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>
<body>
    <div id="preloader">
      <div class="loader"></div>
    </div>
    <div>
        @include('layouts.header')

        <main>
            @yield('content')
        </main>

        @include('layouts.footer')
    </div>
    <div id="custom-cursor" aria-hidden="true"></div>
    <button id="backToTop" class="fixed bottom-6 right-6 w-12 h-12 rounded-full border-2 border-gray-400 flex items-center justify-center bg-white shadow-lg cursor-pointer z-50">
        <!-- Progress ring (SVG circle) -->
        <svg class="absolute top-0 left-0 w-full h-full transform -rotate-90">
            <circle cx="24" cy="24" r="20" stroke="black" stroke-width="3" fill="none" opacity="0.2"></circle>
            <circle id="progress-ring" cx="24" cy="24" r="20" stroke="#2E0077" stroke-width="3" fill="none" stroke-linecap="round" stroke-dasharray="126" stroke-dashoffset="126"></circle>
        </svg>

        <!-- Up arrow -->
        <i class="fa-solid fa-arrow-up text-gray-600"></i>
    </button>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
    <script src="{{asset('assets/js/preloader.js')}}"></script>

    <style>
        /* Cursor circle styles */
        #custom-cursor::after {
            content: "";
            position: absolute;
            top: 50%;
            left: 50%;
            width: 4px;
            height: 4px;
            background-color: black;
            border-radius: 50%;
            transform: translate(-50%, -50%)
        }
        #custom-cursor {
            position: fixed;
            top: 0;
            left: 0;
            width: 40px;
            height: 40px;
            margin-left: -14px; /* center on pointer */
            margin-top: -14px;
            border-radius: 50%;
            pointer-events: none; /* don't block clicks */
            z-index: 99999;
            border: 2px solid #2E0077;
            mix-blend-mode: normal;
            transform: translate3d(0,0,0) scale(1);
            transition: width 120ms ease, height 120ms ease, background 50ms ease, transform 50ms ease, opacity 100ms ease;
            will-change: transform, width, height, opacity;
            opacity: 0.95;
            display: none; /* shown only when pointer is available */
        }

        /* Smaller ring variant when hovering interactive elements */
        /* #custom-cursor.cursor--small {
            width: 14px;
            height: 14px;
            margin-left: -7px;
            margin-top: -7px;
            background: rgba(0,0,0,0.9);
        } */

        /* Larger, subtle ring for emphasis * */
        /* #custom-cursor.cursor--large {
            width: 44px;
            height: 44px;
            margin-left: -22px;
            margin-top: -22px;
            background: rgba(0,0,0,0.25);
        } */

        /* Hide on small touch devices  */
        @media (hover: none) and (pointer: coarse) {
            #custom-cursor { display: none !important; }
        }
        #backToTop {
            transition: opacity 0.3s ease;
        }
        #backToTop.opacity-0 {
            opacity: 0;
        }
        #backToTop.pointer-events-none {
            pointer-events: none;
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


        const btn = document.getElementById('backToTop');
        const ring = document.getElementById('progress-ring');
        const circumference = 2 * Math.PI * 20; // 2πr
        ring.style.strokeDasharray = circumference;

        // Show/hide button + update ring as user scrolls
        window.addEventListener('scroll', () => {
            const scrollTop = window.scrollY;
            const docHeight = document.documentElement.scrollHeight - window.innerHeight;
            const scrollPercent = scrollTop / docHeight;

            const offset = circumference - scrollPercent * circumference;
            ring.style.strokeDashoffset = offset;

            // Show button after a bit of scroll
            if (scrollTop > 200) {
            btn.classList.remove('opacity-0', 'pointer-events-none');
            } else {
            btn.classList.add('opacity-0', 'pointer-events-none');
            }
        });

        // Smooth scroll to top on click
        btn.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    </script>
    @stack('scripts')
</body>
</html>
