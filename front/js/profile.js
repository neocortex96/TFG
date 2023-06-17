function generarHTML(name, regdate) {
    // Crear el contenedor global
    const datosContenedorGlobal = document.createElement('div');
    datosContenedorGlobal.classList.add('container-fluid', 'datos-contenedor-global', 'd-flex', 'flex-wrap', 'col-xs-10', 'col-md-10', 'col-xl-10', 'p-3');
    datosContenedorGlobal.id = 'datos-usuario';
  
    // Crear la columna de imagen
    const columnaImagen = document.createElement('div');
    columnaImagen.classList.add('container', 'columna-imagen', 'd-flex', 'flex-wrap', 'justify-content-center', 'col-xs-4', 'col-md-2', 'col-xl-2');
  
    // Crear la imagen
    const imagen = document.createElement('img');
    imagen.id = 'mi-imagen';
    imagen.src = '../files/images/pp-placeholder.png';
    imagen.alt = 'placeholder-pp';
  
    // Crear el enlace vacío
    const enlaceImagen = document.createElement('a');
    enlaceImagen.href = '#';
  
    // Agregar la imagen al enlace
    enlaceImagen.appendChild(imagen);
  
    // Agregar el enlace al contenedor de imagen
    columnaImagen.appendChild(enlaceImagen);
  
    // Crear el contenedor de nombre
    const contenedorNombre = document.createElement('div');
    contenedorNombre.classList.add('container', 'd-flex', 'flex-wrap', 'col-xs-8', 'col-md-10', 'col-xl-10');
    contenedorNombre.id = 'contenedor-nombre';
  
    // Crear el enlace para el nombre de usuario
    const enlaceNombreUsuario = document.createElement('a');
    enlaceNombreUsuario.href = '#';
  
    // Crear el encabezado h3 para el nombre de usuario
    const nombreUsuario = document.createElement('h3');
    nombreUsuario.classList.add('border-end');
    nombreUsuario.id = 'nombre-usuario';
    nombreUsuario.textContent = name;
  
    // Agregar el encabezado h3 al enlace del nombre de usuario
    enlaceNombreUsuario.appendChild(nombreUsuario);
  
    // Crear el enlace para "Miembro desde"
    const enlaceMiembroDesde = document.createElement('a');
    enlaceMiembroDesde.href = '#';
  
    // Crear el encabezado h3 para "Miembro desde"
    const miembroDesde = document.createElement('h3');
    miembroDesde.classList.add('mx-3');
    miembroDesde.id = 'miembro-desde';
    miembroDesde.textContent = regdate;
  
    // Agregar el encabezado h3 a enlace "Miembro desde"
    enlaceMiembroDesde.appendChild(miembroDesde);
  
    // Crear el párrafo
    const parrafo = document.createElement('p');
    parrafo.textContent = `¡Hola a todos! Mi nombre es ${name}, y estoy emocionado de compartir con ustedes mi pasión por los diferentes temas. Soy un apasionado con una gran curiosidad por aprender y explorar nuevas ideas.

    A lo largo de mi viaje, he descubierto que la mejor manera de crecer personal y profesionalmente es a través del intercambio de conocimientos y experiencias con personas como ustedes. En este blog, espero brindarles contenido interesante, inspirador y útil.
    
    Soy un firme creyente de que el aprendizaje continuo es la clave para el éxito. 
    ¡Nos vemos en el próximo artículo!`;
  
    // Agregar los elementos al contenedor de nombre
    contenedorNombre.appendChild(enlaceNombreUsuario);
    contenedorNombre.appendChild(enlaceMiembroDesde);
    contenedorNombre.appendChild(parrafo);
  
    // Agregar los elementos al contenedor global
    datosContenedorGlobal.appendChild(columnaImagen);
    datosContenedorGlobal.appendChild(contenedorNombre);
  
    // Agregar el contenedor global al documento
    document.body.appendChild(datosContenedorGlobal);
  }
  
generarHTML(sessionData["username"], sessionData["registro"])



  
