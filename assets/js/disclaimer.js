if (localStorage.getItem('tii-disclaimer-accepted') !== 'true') {
    document.getElementById('tii-disclaimer').classList.remove('hidden');
}

function closeDisclaimer(remember) {
    document.getElementById('tii-disclaimer').classList.add('hidden');

    if (remember === 1) {
        localStorage.setItem('tii-disclaimer-accepted', "true");
    }
}