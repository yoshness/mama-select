export default function search() {
    let $trigger = $('.js-header-search-trigger'),
        $input = $('.js-header-search-input');

    $trigger.on('click', (e) => {
        e.preventDefault();
        $input.addClass('is-active');
        $input.focus();
    });
}