window.onscroll = () => {
    scrollFunction();
}

$(document).ready(function () {
    $('#btn-back-to-top').on('click', function () {
        window.scrollTo({top: 0, behavior: 'smooth'});
    });
});

function scrollFunction() {
    const btnScroll = document.querySelector('#btn-back-to-top');

    if (document.documentElement.scrollTop > 200) {
        btnScroll.style.visibility = 'visible';
        btnScroll.style.opacity = '1'
    } else {
        btnScroll.style.visibility = 'hidden';
        btnScroll.style.opacity = '0'
    }
}