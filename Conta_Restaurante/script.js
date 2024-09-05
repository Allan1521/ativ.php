const form = document.querySelector('form');
const resultado = document.getElementById('resultado');

form.addEventListener('submit', (event) => {
    event.preventDefault();

    const valorPrato = document.getElementById('valorPrato').value;

    fetch('calcular.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: `valorPrato=${valorPrato}`
    })
    .then(response => response.json())
    .then(data => {
        resultado.textContent = `Valor total a pagar: R$ ${data.valorTotal.toFixed(2)}`;
    });
});