var sleepES5 = function(ms){
    var esperarHasta = new Date().getTime() + ms;
    while(new Date().getTime() < esperarHasta) continue;
};



window.addEventListener('DOMContentLoaded', event => {

    // Toggle the side navigation
    const sidebarToggle = document.body.querySelector('#sidebarToggle');
    if (sidebarToggle) {
        // Uncomment Below to persist sidebar toggle between refreshes
        // if (localStorage.getItem('sb|sidebar-toggle') === 'true') {
        //     document.body.classList.toggle('sb-sidenav-toggled');
        // }
        sidebarToggle.addEventListener('click', event => {
            event.preventDefault();
            document.body.classList.toggle('sb-sidenav-toggled');
            localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains('sb-sidenav-toggled'));
        });
    }

});

if (typeof cat !== 'undefined') {
    cat.forEach(element => {
        document.getElementById("nombre").innerHTML = element["username"]
        document.getElementById("emailuser").innerHTML = element["email"];
        document.getElementById("reg_date").innerHTML = element["reg_date"];
        document.getElementById("imga").setAttribute("src","../files/images/pp-placeholder.png");
    });
    document.getElementById("miContenedor1").style.display = "block";
    document.getElementById("salir").addEventListener("click", () => {
        document.getElementById("miContenedor1").style.display = "none";
    });
}


if (typeof postinfo !== 'undefined') {
    postinfo.forEach(element => {
        document.getElementById("nombre").innerHTML = element["titulo"]
        document.getElementById("emailuser").innerHTML = element["texto"];
        document.getElementById("reg_date").innerHTML = element["rating"];
        document.getElementById("imga").setAttribute("src","../files/images/"+element["img_name"]);
        document.getElementById("imga").style.width=250+"px";
        document.getElementById("imga").style.height=200+"px";
    });
    document.getElementById("miContenedor1").style.display = "block";
    document.getElementById("salir").addEventListener("click", () => {
        document.getElementById("miContenedor1").style.display = "none";
    });
}


if (very == true) {
    
    const alertPlaceholder = document.getElementById('liveAlertPlaceholder')
    const appendAlert = (message, type) => {
        const wrapper = document.createElement('div')
        wrapper.innerHTML = [
            `<div class="alert alert-${type} alert-dismissible" role="alert">`,
            `   <div>${message}</div>`,
            '   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
            '</div>'
        ].join('')

        alertPlaceholder.append(wrapper)
    }

    const alertTrigger = document.getElementById('liveAlertBtn')
    if (alertTrigger) {
        alertTrigger.addEventListener('click', () => {
            appendAlert('Se ha realizado el registro correctamente', 'success');
            
        })
        
    }
    
} 



