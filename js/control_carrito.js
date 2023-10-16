function registrar(id, nombre, precio, codigo, p){
    var cantidad = Number(prompt("Ingrese la cantidad de productos que desea comprar"));

    switch(p){
        case 0: 
            window.location.href = `index.php?id=${id}&nombre=${nombre}&precio=${precio}&codigo=${codigo}&cantidad=${cantidad}`;
        break;
        
        case 1: 
            window.location.href = `categorias.php?id=${id}&nombre=${nombre}&precio=${precio}&codigo=${codigo}&cantidad=${cantidad}`;
        break;

        case 2: 
            window.location.href = `productos.php?id=${id}&nombre=${nombre}&precio=${precio}&codigo=${codigo}&cantidad=${cantidad}`;
        break;
    }

}

function eliminar(i){
    window.location.href= `index.php?i=${i}&eliminar=1`;
}


function finalizar_compra() {
    window.location.href= `index.php?finalizar=1`;
}