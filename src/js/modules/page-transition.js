export default function pageTransition() {
    const $htmlBody = $('html, body');
    
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