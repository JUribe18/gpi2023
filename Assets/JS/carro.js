window.onload = function(){
    mostrarprods();
    total();
}

function mostrarprods(){
    var carrito = document.getElementById("carro");
    var cartprods = JSON.parse(localStorage.getItem('cartprods1')) || [];

    cartprods.forEach(function(producto){
        var newprod = document.createElement("div");
        newprod.classList.add("producto");
        newprod.innerHTML = `
            <h4>${producto.nombre}</h3>
            <p>Precio: $${producto.precio}</p>
        `;
        carrito.appendChild(newprod);
    });
}
function total(){
    var ttl = 0;
    var carrito = JSON.parse(localStorage.getItem("cartprods1")) || [];

    carrito.forEach(function(producto){
        ttl += producto.precio;
    });

    var ttl1 = document.getElementById("ttl");
    ttl1.innerHTML = `
        Total a pagar = $${ttl.toLocaleString()}
    `;
}
function addtocart(nombre,precio){
    var carrito = document.getElementById("carro");
    var prod = {nombre: nombre, precio: precio};
    var cartprods = JSON.parse(localStorage.getItem('cartprods1')) || [];

    cartprods.push(prod);

    localStorage.setItem('cartprods1', JSON.stringify(cartprods));

    var newprod = document.createElement("div"); 
    newprod.classList.add("prod");
    newprod.innerHTML = `
        <h3>${nombre}</h3>
        <p>Precio: $${precio}</p>
    `;
    carrito.appendChild(newprod);

    total();
}
function dropcart(){
    var carrito = document.getElementById("carro");
    carrito.innerHTML = ``;

    localStorage.removeItem('cartprods1');

    total();
}


function mostrarOcultarDiv() {
    var div = document.getElementById("carro");
    if (div.style.display === "none") {
      div.style.display = "block"; // Cambia a "block" para mostrar
    } else {
      div.style.display = "none"; // Cambia a "none" para ocultar
    }
}

function sendmail(){
    var cartprods = JSON.parse(localStorage.getItem('cartprods1')) || [];

    if(Array.isArray(cartprods) && cartprods.lenght != 0){
        var mailcont = 'Lista de juegos en carrito: \n\n';

        cartprods.forEach(function(producto){
            mailcont += `- ${producto.nombre} - Precio: $${producto.precio}\n`;
        });
        window.location.href = `mailto:mdeadmanxd@gmail.com?subject=Solicitud de Reserva - NubeKids&body=${encodeURIComponent(mailcont)}`;
    }else{
        alert('Agrega alguna wea po pajaron qlo');
    }
}