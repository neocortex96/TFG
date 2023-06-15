
function cargarPostCMSjs(username, titulo, textom, img_name, rating, topic_name) {

// Creación del HEADER (APPEND TO ARTICLE)
var header = document.createElement("header")
header.classList.add("mb-4")
document.getElementById("article").appendChild(header)

var h1 = document.createElement("h1")
h1.classList.add("fw-bolder", "mb-1")
h1.innerHTML = titulo
header.appendChild(h1)

var div = document.createElement("div")
div.classList.add("text-muted","fst-italic", "mb-2")
div.innerHTML = "Post creado por: "+username
header.appendChild(div)

var a1 = document.createElement("a")
a1.classList.add("badge", "bg-secondary","text-decoration-none", "link-light")
a1.setAttribute("href","#");
a1.innerHTML = topic_name
header.appendChild(a1)

// Creación del figure e img (APPEND TO ARTICLE)

var figure = document.createElement("figure")
figure.classList.add("mb-4")
document.getElementById("article").appendChild(figure)

var img = document.createElement("img");
img.classList.add("img-fluid", "rounded");
img.setAttribute('src',"../files/images/"+img_name);
img.setAttribute('alt',"_"+img_name);
img.style.width = 900+"px"
figure.appendChild(img)

// Rating (APPEND TO ARTICLE)

var div2 = document.createElement("div")
div2.classList.add("container", "text-end")
document.getElementById("article").appendChild(div2)

var a2 = document.createElement("a")
a2.classList.add("badge", "bg-primary", "text-decoration-none", "link-light", "mb-3")
a2.innerHTML = "Likes "+rating
div2.appendChild(a2)
// Post body text (APPEND TO ARTICLE)

var section = document.createElement("section")
section.classList.add("mb-5")
document.getElementById("article").appendChild(section)

var p = document.createElement("p")
p.classList.add("fs-5", "mb-4")
p.innerHTML = textom 
section.appendChild(p)

}


res.forEach(element => {
    // console.log(element["titulo"]);
    cargarPostCMSjs(element["username"], element["titulo"], element["texto"], element["img_name"], element["rating"],  element["name"])

});



