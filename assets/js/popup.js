function clearPopupChoices() {
    localStorage.clear();
    window.location.reload();
}

function closePopup(id, remember) {
    document.getElementById(id).classList.add('hidden');

    if (remember === 1) {
        localStorage.setItem(id+'-remember-closed', "true");
    }
}

function openPopup(id) {
    if (localStorage.getItem(id+'-remember-closed') !== 'true') {
        document.getElementById(id).classList.remove('hidden');
    }
}