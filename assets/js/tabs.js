function toggleTab(id, buttonsContainer, contentContainer) {
    for (let i = 0; i < document.getElementById(buttonsContainer).children.length; i++) {
        document.getElementById(buttonsContainer).children[i].classList.remove('btn-tab-active');
        document.getElementById(buttonsContainer).children[i].classList.add('btn-tab');
    }

    for (let i = 0; i < document.getElementById(contentContainer).children.length; i++) {
        document.getElementById(contentContainer).children[i].classList.add('hidden');
    }

    document.getElementById(id).classList.remove('hidden');
    document.getElementById(id+'-btn').classList.add('btn-tab-active');
}