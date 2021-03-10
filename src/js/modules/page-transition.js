export default function pageTransition() {
    const $htmlBody = $('html, body');

    $(document).ready(() => {
        let tl = anime.timeline({
            targets: document.querySelector('#js-loader-overlay'),
            easing: 'easeInOutExpo',
            duration: 1000
        });
        tl
        .add({
            width: '0',
        })
        .add({
            opacity: 0,
            easing: 'easeOutSine'
        });
    });
    $(window).on('beforeunload', () => {
        anime({
            targets: document.querySelector('body'),
            opacity: 0,
            translateX: '-50px',
            easing: 'easeOutQuad',
            duration: 200
        });
    });
}