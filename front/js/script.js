
function cargarPostJs(titulo, texto, img_path) {

    const div = document.createElement('div');
    div.classList.add('card', 'bg-danger');
    div.id = 'prueba';
    div.style.width = "18rem";
    document.getElementById("contenedor-cards").appendChild(div);

    const img = document.createElement('img');
    img.setAttribute('src',"../files/images/"+img_path);
    img.classList.add('card-img-top');
    div.appendChild(img);

    const div1 = document.createElement('div');
    div1.classList.add('card-body');
    div.appendChild(div1);

    const h5 = document.createElement('h5');
    h5.classList.add('card-title');
    h5.innerHTML=titulo;
    div1.appendChild(h5);

    const p = document.createElement('p');
    p.classList.add('card-text');
    p.innerHTML=texto;
    div1.appendChild(p);

    const a = document.createElement('a');
    a.setAttribute("href","./cms.php?titulo="+titulo+"&texto="+texto+"&img="+img_path);
    // a.setAttribute("href","./cms.php?titulo=hola&img=imagen&texto=texto");
    a.classList.add('btn', 'btn-primary');
    a.innerHTML="Ver Post";
    div1.appendChild(a);

}

res.forEach(element => {
    // console.log(element["titulo"]);
    cargarPostJs(element["titulo"], element["texto"], element["img_name"])

});

function cargarCategorias(titulo) {
    const a = document.createElement('a');
    a.classList.add('list-group-item', 'list-group-item-action')
    a.innerHTML=titulo;
    a.setAttribute("href","#");
    document.getElementById("categ").appendChild(a);

    //const a1 = document.createElement('a');
    //a1.innerHTML=titulo;
    //a1.setAttribute("href","#")
    //document.getElementById("trentoday").appendChild(a1);
}

cat.forEach(element => {
    cargarCategorias(element["name"])
});
