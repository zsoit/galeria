const hamburger = document.querySelector('.hamburger');
const nav = document.querySelector('.navigation');

const handleClick = () => {
    hamburger.classList.toggle('hamburger--active');
    nav.classList.toggle('navigation--active');

    const x = document.querySelector('main');
    const y = document.querySelector('footer');
    const blur = "blur(6px)"
    if (x.style.filter == blur) {
        x.style.filter = "none";
        y.style.filter = "none";
        x.style.pointerEvents = "auto"
        y.style.pointerEvents = "auto"
        document.body.style.overflow = "auto";
    } else {
        x.style.filter = blur;
        y.style.filter = blur;
        x.style.pointerEvents = "none"
        y.style.pointerEvents = "none"
        document.body.style.overflow = "hidden";
    }

}

hamburger.addEventListener('click', handleClick);