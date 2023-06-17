function generarTarjetaSuscripcion(imagenSrc, titulo, texto) {
    // Crear el elemento de la tarjeta
    const tarjeta = document.createElement("div");
    tarjeta.classList.add("card", "col-12", "col-md-5", "col-xl-2", "px-0", "mx-3");
  
    // Crear la imagen de la tarjeta
    const imagen = document.createElement("img");
    imagen.setAttribute('src',"../files/images/"+imagenSrc);
    imagen.classList.add("card-img-top");
    imagen.alt = "...";
    tarjeta.appendChild(imagen);
  
    // Crear el cuerpo de la tarjeta
    const cuerpo = document.createElement("div");
    cuerpo.classList.add("card-body");
    tarjeta.appendChild(cuerpo);
  
    // Crear el título de la tarjeta
    const tituloTarjeta = document.createElement("h5");
    tituloTarjeta.classList.add("card-title");
    tituloTarjeta.innerHTML = titulo;
    cuerpo.appendChild(tituloTarjeta);
  
    // Crear el texto de la tarjeta
    const textoTarjeta = document.createElement("p");
    textoTarjeta.classList.add("card-text");
    textoTarjeta.innerHTML = texto;
    cuerpo.appendChild(textoTarjeta);
  
    // Crear el enlace de eliminar suscripción
    const enlaceSuscripcion = document.createElement("a");
    enlaceSuscripcion.href = "#";
    enlaceSuscripcion.classList.add("btn", "btn-danger");
    enlaceSuscripcion.innerHTML = "Eliminar suscripción";
    cuerpo.appendChild(enlaceSuscripcion);
    
    document.getElementById("row").appendChild(tarjeta);
  }
  res.forEach(element => {
    generarTarjetaSuscripcion(element["img_name"], element["titulo"], element["texto"]);
  });
  