import { Selector } from 'testcafe';

fixture('Prueba de Extremo a Extremo')
    .page('https://practica-laravel-deploy1.azurewebsites.net/'); 

test('Prueba de Inicio de Sesión', async t => {
    // Interactuar con elementos en la página
    await t
        .typeText('input[name="email"]', 'osbasantos@gmail.com')
        .typeText('input[name="password"]', 'yair1828')
        .click('button[type="submit"]');

    // Realizar aserciones sobre el estado de la aplicación
    const mensajeBienvenida = Selector('.bienvenida').innerText;
    await t.expect(mensajeBienvenida).eql('¡Bienvenido!');
});