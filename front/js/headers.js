// HEADER ADMIN
function createAdminNavbar() {

  var nav = document.createElement("nav");
  nav.classList.add("sb-topnav", "navbar", "navbar-expand", "navbar-dark", "bg-dark");
  nav.id = "navadmin";

  var navbarBrand = document.createElement("a");
  navbarBrand.classList.add("navbar-brand", "ps-3");
  navbarBrand.href = "admin-dash.php";
  navbarBrand.textContent = "Zona admin";

  var sidebarToggle = document.createElement("button");
  sidebarToggle.classList.add("btn", "btn-link", "btn-sm", "order-1", "order-lg-0", "me-4", "me-lg-0");
  sidebarToggle.id = "sidebarToggle";
  sidebarToggle.href = "#";
  sidebarToggle.innerHTML = '<i class="fas fa-bars"></i>';


  var navbarUl = document.createElement("ul");
  navbarUl.classList.add("navbar-nav", "ms-auto", "me-3", "me-lg-4");


  var dropdownLi = document.createElement("li");
  dropdownLi.classList.add("nav-item", "dropdown");


  var dropdownToggle = document.createElement("a");
  dropdownToggle.classList.add("nav-link", "dropdown-toggle");
  dropdownToggle.id = "navbarDropdown";
  dropdownToggle.href = "#";
  dropdownToggle.role = "button";
  dropdownToggle.setAttribute("data-bs-toggle", "dropdown");
  dropdownToggle.setAttribute("aria-expanded", "false");
  dropdownToggle.innerHTML = '<i class="fas fa-user fa-fw"></i>';


  var dropdownMenu = document.createElement("ul");
  dropdownMenu.classList.add("dropdown-menu", "dropdown-menu-end");
  dropdownMenu.setAttribute("aria-labelledby", "navbarDropdown");


  var settingsLi = document.createElement("li");
  var settingsLink = document.createElement("a");
  settingsLink.classList.add("dropdown-item");
  settingsLink.href = "#!";
  settingsLink.textContent = "Settings";
  settingsLi.appendChild(settingsLink);


  var activityLogLi = document.createElement("li");
  var activityLogLink = document.createElement("a");
  activityLogLink.classList.add("dropdown-item");
  activityLogLink.href = "#!";
  activityLogLink.textContent = "Activity Log";
  activityLogLi.appendChild(activityLogLink);


  var dividerLi = document.createElement("li");
  var dividerHr = document.createElement("hr");
  dividerHr.classList.add("dropdown-divider");
  dividerLi.appendChild(dividerHr);


  var logoutLi = document.createElement("li");
  var logoutLink = document.createElement("a");
  logoutLink.classList.add("dropdown-item");
  logoutLink.href = "#";
  logoutLink.id = "cerrar";
  logoutLink.textContent = "Logout";
  logoutLi.appendChild(logoutLink);


  dropdownMenu.appendChild(settingsLi);
  dropdownMenu.appendChild(activityLogLi);
  dropdownMenu.appendChild(dividerLi);
  dropdownMenu.appendChild(logoutLi);
  dropdownLi.appendChild(dropdownToggle);
  dropdownLi.appendChild(dropdownMenu);
  navbarUl.appendChild(dropdownLi);
  nav.appendChild(navbarBrand);
  nav.appendChild(sidebarToggle);
  nav.appendChild(navbarUl);


  document.body.appendChild(nav)
}
// Usar función para crear (Funcionando)
// createAdminNavbar();


// HEADER NOT LOGGED

function headerNotLogged() {
  // Create the Navbar <nav> element
  var nav = document.createElement("nav");
  nav.classList.add("barra-navegacion", "navbar", "navbar-expand-lg", "p-3", "bg-dark");

  // Create the Container <div> element
  var containerDiv = document.createElement("div");
  containerDiv.classList.add("container-fluid");

  // Create the Navbar Brand <a> element
  var navbarBrand = document.createElement("a");
  navbarBrand.classList.add("navbar-brand", "text-light");
  navbarBrand.href = "./index.php";
  // navbarBrand.textContent = "LOGO";

  var img = document.createElement("img")
  img.src = "../files/images/MS-logo.png"
  img.alt = "Moon Star"
  img.style.width = 75 + "px"
  img.style.height = 70 + "px"
  navbarBrand.appendChild(img)

  // Create the Search Form <form> element
  var searchForm = document.createElement("form");
  searchForm.classList.add("d-flex");
  searchForm.role = "search";

  // Create the Search Input <input> element
  var searchInput = document.createElement("input");
  searchInput.classList.add("form-control", "me-2");
  searchInput.type = "search";
  searchInput.placeholder = "Buscar topics";
  searchInput.setAttribute("aria-label", "Search");

  // Create the Search Button <button> element
  var searchButton = document.createElement("button");
  searchButton.classList.add("btn", "btn-outline-light");
  searchButton.type = "submit";
  searchButton.textContent = "Buscar";

  // Append the search input and button to the search form
  searchForm.appendChild(searchInput);
  searchForm.appendChild(searchButton);

  // Create the Button Container <div> element
  var buttonContainerDiv = document.createElement("div");

  // Create the Login Button <button> element
  var loginButton = document.createElement("button");
  loginButton.title = "modal";
  loginButton.type = "button";
  loginButton.classList.add("btn", "btn-primary-outline");
  loginButton.setAttribute("data-bs-toggle", "modal");
  loginButton.setAttribute("name", "iniciar");
  loginButton.setAttribute("data-bs-target", "#exampleModal2");

  // Create the Login Input <input> element
  var loginInput = document.createElement("input");
  loginInput.type = "button";
  loginInput.classList.add("btn", "btn-primary");
  loginInput.value = "Iniciar sesión";

  // Append the login input to the login button
  loginButton.appendChild(loginInput);

  // Append the elements to their respective parents
  containerDiv.appendChild(navbarBrand);
  containerDiv.appendChild(searchForm);
  buttonContainerDiv.appendChild(loginButton);
  containerDiv.appendChild(buttonContainerDiv);
  nav.appendChild(containerDiv);

  document.body.appendChild(nav)
}

// Usar función para crear (Funcionando)
// headerNotLogged();

// HEADER LOGGED IN


function headerLoggedIn() {
  const nav = document.createElement("nav");
  nav.classList.add("barra-navegacion", "navbar", "navbar-expand-lg", "bg-dark", "p-3");

  const container = document.createElement("div");
  container.classList.add("container-fluid");
  nav.appendChild(container);

  const brandLink = document.createElement("a");
  brandLink.classList.add("navbar-brand", "text-light");
  brandLink.href = "./index.php";
  container.appendChild(brandLink);

  const brandImg = document.createElement("img");
  brandImg.src = "../files/images/MS-logo.png";
  brandImg.alt = "Moon Star";
  brandImg.style.height = "70px";
  brandImg.style.width = "75px";
  brandLink.appendChild(brandImg);



  const searchForm = document.createElement("form");
  searchForm.classList.add("d-flex");
  searchForm.role = "search";
  searchForm.id = "buscador-navbar";
  searchForm.method = "post";
  container.appendChild(searchForm);

  const searchInput = document.createElement("input");
  searchInput.classList.add("form-control", "me-2");
  searchInput.type = "search";
  searchInput.placeholder = "Buscar topics";
  searchInput.setAttribute("aria-label", "Search");
  searchForm.appendChild(searchInput);

  const searchButton = document.createElement("button");
  searchButton.classList.add("btn", "btn-outline-light");
  searchButton.type = "submit";
  searchButton.textContent = "Buscar";
  searchForm.appendChild(searchButton);

  const iconsContainer = document.createElement("div");
  iconsContainer.classList.add("d-flex", "align-items-center");
  iconsContainer.id = "navbar-iconos-derecha";
  container.appendChild(iconsContainer);

  const uploadButton = document.createElement("button");
  uploadButton.title = "modal";
  uploadButton.type = "button";
  uploadButton.classList.add("btn", "btn-primary-outline");
  uploadButton.setAttribute("data-bs-toggle", "modal");
  uploadButton.setAttribute("data-bs-target", "#exampleModal");
  iconsContainer.appendChild(uploadButton);

  const uploadIcon = document.createElement("i");
  uploadIcon.type = "button";
  uploadIcon.classList.add("bi", "bi-cloud-upload", "fs-1", "text-primary");
  uploadButton.appendChild(uploadIcon);

  const chatButton = document.createElement("button");
  chatButton.type = "submit";
  chatButton.id = "cerrar"
  chatButton.value = "null";
  chatButton.classList.add("btn", "btn-primary", "mx-3");
  chatButton.textContent = "Cerrar Sesion";
  iconsContainer.appendChild(chatButton);

  const profileLink = document.createElement("a");
  profileLink.href = "./profile.php";
  iconsContainer.appendChild(profileLink);

  const profileIcon = document.createElement("i");
  profileIcon.classList.add("bi", "bi-person-circle", "fs-1", "text-primary", "mx-3");
  profileLink.appendChild(profileIcon);

  const navbarToggler = document.createElement("button");
  navbarToggler.classList.add("navbar-toggler", "bg-primary");
  navbarToggler.type = "button";
  navbarToggler.setAttribute("data-bs-toggle", "collapse");
  navbarToggler.setAttribute("data-bs-target", "#navbarToggleExternalContent");
  navbarToggler.setAttribute("aria-controls", "navbarToggleExternalContent");
  navbarToggler.setAttribute("aria-expanded", "false");
  navbarToggler.setAttribute("aria-label", "Toggle navigation");
  container.appendChild(navbarToggler);

  const togglerIcon = document.createElement("span");
  togglerIcon.classList.add("navbar-toggler-icon");
  navbarToggler.appendChild(togglerIcon);

  document.body.appendChild(nav)
}

//headerLoggedIn()
//headerNotLogged();

if (us_value == 1) {
  headerNotLogged();
} else if (us_value == 0) {
  createAdminNavbar();

  document.getElementById("cerrar").addEventListener("click", function cerrarsesion() {
    fetch('./logout.php')
      .then(response => {
        // Verificar si la petición fue exitosa
        if (response.ok) {
          // Redirigir a la página de inicio de sesión u otra página deseada
          window.location.href = 'index.php';
        } else {
          // Manejar el error en caso de que la petición no sea exitosa
          console.error('Error al cerrar sesión');
        }
      })
      .catch(error => {
        // Manejar el error en caso de que ocurra un error en la petición
        console.error('Error en la petición al cerrar sesión:', error);
      });

  });
} else if (us_value == 3) {
  headerLoggedIn();

  document.getElementById("cerrar").addEventListener("click", function cerrarsesion() {
    fetch('./logout.php')
      .then(response => {
        // Verificar si la petición fue exitosa
        if (response.ok) {
          // Redirigir a la página de inicio de sesión u otra página deseada
          window.location.href = 'index.php';
        } else {
          // Manejar el error en caso de que la petición no sea exitosa
          console.error('Error al cerrar sesión');
        }
      })
      .catch(error => {
        // Manejar el error en caso de que ocurra un error en la petición
        console.error('Error en la petición al cerrar sesión:', error);
      });

  });
}

// function crearModal() {
//   // Crear el elemento <div> con clase "modal fade" y atributos "id", "aria-hidden", "aria-labelledby" y "tabindex"
//   const modalElement = document.createElement('div');
//   modalElement.classList.add('modal', 'fade');
//   modalElement.id = 'exampleModal2';
//   modalElement.setAttribute('aria-hidden', 'true');
//   modalElement.setAttribute('aria-labelledby', 'exampleModalToggleLabel');
//   modalElement.setAttribute('tabindex', '-1');

//   // Crear el elemento <div> con clase "modal-dialog modal-dialog-centered"
//   const modalDialogElement = document.createElement('div');
//   modalDialogElement.classList.add('modal-dialog', 'modal-dialog-centered');

//   // Crear el elemento <div> con clase "modal-content p-5 bg-dark text-light"
//   const modalContentElement = document.createElement('div');
//   modalContentElement.classList.add('modal-content', 'p-5', 'bg-dark', 'text-light');

//   // Crear el formulario con clase "d-flex flex-column"
//   const formElement = document.createElement('form');
//   formElement.classList.add('d-flex', 'flex-column');

//   // Crear el enlace de cierre con clase "text-end fs-3 text-white" y atributo "data-bs-dismiss"
//   const closeButton = document.createElement('a');
//   closeButton.classList.add('text-end', 'fs-3', 'text-white');
//   closeButton.href = '#';
//   closeButton.setAttribute('data-bs-dismiss', 'modal');

//   // Crear el icono de cierre con clase "bi bi-x-lg"
//   const closeIcon = document.createElement('i');
//   closeIcon.classList.add('bi', 'bi-x-lg');

//   // Añadir el icono de cierre al enlace de cierre
//   closeButton.appendChild(closeIcon);

//   // Añadir el enlace de cierre al formulario
//   formElement.appendChild(closeButton);

//   // Crear el título con clase "text-center p-4"
//   const titleElement = document.createElement('h2');
//   titleElement.classList.add('text-center', 'p-4');
//   titleElement.textContent = 'INICIAR SESIÓN';

//   // Crear el campo de entrada para el correo electrónico
//   const emailInputElement = document.createElement('input');
//   emailInputElement.type = 'email';
//   emailInputElement.size = '35';
//   emailInputElement.classList.add('form-control');
//   emailInputElement.id = 'exampleInputEmail1';
//   emailInputElement.setAttribute('aria-describedby', 'emailHelp');
//   emailInputElement.placeholder = 'Correo electrónico';

//   // Crear el campo de entrada para la contraseña
//   const passwordInputElement = document.createElement('input');
//   passwordInputElement.type = 'password';
//   passwordInputElement.classList.add('form-control');
//   passwordInputElement.id = 'exampleInputPassword1';
//   passwordInputElement.placeholder = 'Contraseña';

//   // Crear el checkbox de recordar usuario
//   const rememberCheckboxElement = document.createElement('input');
//   rememberCheckboxElement.type = 'checkbox';
//   rememberCheckboxElement.classList.add('form-check-input');
//   rememberCheckboxElement.id = 'exampleCheck1';

//   // Crear la etiqueta del checkbox
//   const rememberLabelElement = document.createElement('label');
//   rememberLabelElement.classList.add('form-check-label');
//   rememberLabelElement.setAttribute('for', 'exampleCheck1');
//   rememberLabelElement.textContent = 'Recordar usuario';

//   // Crear el botón de enviar
//   const submitButtonElement = document.createElement('button');
//   submitButtonElement.type = 'submit';
//   submitButtonElement.classList.add('btn', 'btn-primary', 'mx-2');
//   submitButtonElement.name = 'iniciar';
//   submitButtonElement.textContent = 'Enviar';

//   // Crear el botón de cancelar con atributo "data-bs-dismiss"
//   const cancelButtonElement = document.createElement('button');
//   cancelButtonElement.type = 'button';
//   cancelButtonElement.classList.add('btn', 'btn-danger', 'mx-2');
//   cancelButtonElement.setAttribute('data-bs-dismiss', 'modal');
//   cancelButtonElement.textContent = 'Cancelar';

//   // Crear el pie de página del modal con estilo "border-top:0;"
//   const modalFooterElement = document.createElement('div');
//   modalFooterElement.classList.add('modal-footer');
//   modalFooterElement.style.borderTop = '0';

//   // Crear el enlace de registro con clase "link-opacity-75-hover" y atributos "data-bs-target" y "data-bs-toggle"
//   const registerLinkElement = document.createElement('a');
//   registerLinkElement.href = '#';
//   registerLinkElement.classList.add('link-opacity-75-hover');
//   registerLinkElement.setAttribute('data-bs-target', '#exampleModalToggle2');
//   registerLinkElement.setAttribute('data-bs-toggle', 'modal');
//   registerLinkElement.textContent = 'Registrarse';

//   // Añadir el contenido al pie de página del modal
//   modalFooterElement.appendChild(registerLinkElement);

//   // Añadir todos los elementos al formulario
//   formElement.appendChild(closeButton);
//   formElement.appendChild(titleElement);
//   formElement.appendChild(emailInputElement);
//   formElement.appendChild(passwordInputElement);
//   formElement.appendChild(rememberCheckboxElement);
//   formElement.appendChild(rememberLabelElement);
//   formElement.appendChild(submitButtonElement);
//   formElement.appendChild(cancelButtonElement);

//   // Añadir el formulario al contenido del modal
//   modalContentElement.appendChild(formElement);

//   // Añadir el contenido del modal al diálogo del modal
//   modalDialogElement.appendChild(modalContentElement);

//   // Añadir el diálogo del modal al modal
//   modalElement.appendChild(modalDialogElement);

//   // Añadir el pie de página del modal al contenido del modal
//   modalContentElement.appendChild(modalFooterElement);

//   // Devolver el elemento del modal completo
//   document.body.appendChild(modalElement)
// }



// crearModal();






