let formEl = document.querySelector('#form');
let inputEl = document.querySelector('#username');

formEl.addEventListener('click', evt => {
    if (evt.target.className === 'btn') {
        console.log(inputEl.value)
        if (!inputEl.value) {
            inputEl.classList.add('form_input_invalid');
        } else {
            inputEl.classList.remove('form_input_invalid');
        }
    }
});

let galleryEl = document.querySelector('#gallery');
galleryEl.addEventListener('click', evt => {
    if (evt.target.className === 'gallery_img') {
        renderWrapper(evt.target.id, evt.target.dataset.name)
    }
})

function removeEl(id) {
    document.querySelector(`#${id}`).remove();
}

function renderWrapper(id, name) {
    const wrapElement = document.createElement('div');
    wrapElement.classList.add('wrapper_photo_block');
    wrapElement.id = 'wrap';

    const wrapBlock = document.createElement('div');
    wrapBlock.classList.add('wrapper_block');
    wrapElement.appendChild(wrapBlock);

    const wrapTop = document.createElement('div');
    wrapTop.classList.add('wrapper_top');
    wrapBlock.appendChild(wrapTop);

    const closeElem = document.createElement('img');
    closeElem.classList.add('wrapper_close');
    closeElem.src = '/img/close.svg';
    closeElem.addEventListener('click', () => removeEl('wrap'))
    wrapTop.appendChild(closeElem)

    const imgElem = document.createElement('img');
    imgElem.classList.add('wrapper_img');
    imgElem.src = `/img/icons/${name}.svg`;
    wrapBlock.appendChild(imgElem)

    const linkToPhoto = document.createElement('a');
    linkToPhoto.href = `gallery/?id=${id}`;
    linkToPhoto.classList.add('wrapper_link', 'btn');
    linkToPhoto.innerHTML = 'Перейти'
    wrapBlock.appendChild(linkToPhoto);

    galleryEl.appendChild(wrapElement);
}