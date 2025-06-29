let button1 = document.getElementById('button1')
let button2 = document.getElementById('button2')
let text = document.getElementById('text')

button1.addEventListener('click', () => {
    button2.addEventListener('click', ClickHandler)
})

function ClickHandler() {
    text.hasAttribute('hidden') ?
        text.removeAttribute('hidden') :
        text.setAttribute('hidden', '')
    button2.removeEventListener('click', ClickHandler)
}
