// function cargarSugerencias(){

// }


// function cargarLogin(){

// }

function cargarPostJs() {

    const div = document.createElement('div');
    div.classList.add('card', 'bg-danger');
    div.id = 'prueba';
    div.style.width = "18rem";

    // const img = document.createElement('img');
    // img.setAttribute('src', img_path)
    // img.classList.add('card-img-top');
    // div.appendChild(img);

    // const div1 = document.createElement('div');
    // div1.classList.add('card-body');
    // div.appendChild(div1);

    // const h5 = document.createElement('h5');
    // h5.classList.add('card-title');
    // h5.textContent(titulo);
    // div1.appendChild(h5);
    
    // const p = document.createElement('p');
    // p.classList.add('card-text');
    // p.textContent(texto);
    // div1.appendChild(p);

    // const a = document.createElement('a');
    // a.href('#');
    // a.classList.add('btn', 'btn-primary');
    // a.textContent('Go somewhere')
    // div1.appendChild(a);


    // document.getElementById("contenedor-cards").appendChild(div);

}
resultados_js.forEach(element => {
    cargarPostJs(element[titulo], element[texto], element[img])
});
// cargarPost();

//  <div class="card" style="width: 18rem;">
// <img src="../files/images/sampleimg.jpg" class="card-img-top" alt="...">
// <div class="card-body">
//     <h5 class="card-title">Card title</h5>
//     <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
//     <a href="#" class="btn btn-primary">Go somewhere</a>
// </div>
// </div> 