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