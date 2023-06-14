function cargarPostCMSjs(titulo, imagen) {
var h2 = document.createElement('h2');
h2.innerHTML = titulo;
document.getElementById("div1").appendChild(h2);

var img = document.createElement('img')
img.setAttribute('src',"../files/images/"+imagen);
document.getElementById("div1").appendChild(img);
}


res.forEach(element => {
    // console.log(element["titulo"]);
    cargarPostCMSjs(element["titulo"], element["img_name"])

});

