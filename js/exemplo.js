// Selecionando os elementos e armazenando em uma variavél.
var btn = document.querySelector('#show-or-hidden');
var container = document.querySelector('.container');

btn.addEventListener('click', function() {
    // Verificar se a propriedade Display é block.
    if(container.style.display === 'block') {
        container.style.display = 'none';
    } else {
        container.style.display = 'block'
    }
});
