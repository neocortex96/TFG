// HEADER ADMIN
function createAdminNavbar() {
    // Create the Navbar <nav> element
    var nav = document.createElement("nav");
    nav.classList.add("sb-topnav", "navbar", "navbar-expand", "navbar-dark", "bg-dark");
    nav.id = "navadmin";
  
    // Create the Navbar Brand <a> element
    var navbarBrand = document.createElement("a");
    navbarBrand.classList.add("navbar-brand", "ps-3");
    navbarBrand.href = "admin-dash.php";
    navbarBrand.textContent = "Zona admin";
  
    // Create the Sidebar Toggle button
    var sidebarToggle = document.createElement("button");
    sidebarToggle.classList.add("btn", "btn-link", "btn-sm", "order-1", "order-lg-0", "me-4", "me-lg-0");
    sidebarToggle.id = "sidebarToggle";
    sidebarToggle.href = "#";
    sidebarToggle.innerHTML = '<i class="fas fa-bars"></i>';
  
    // Create the Navbar <ul> element
    var navbarUl = document.createElement("ul");
    navbarUl.classList.add("navbar-nav", "ms-auto", "me-3", "me-lg-4");
  
    // Create the Dropdown Menu <li> element
    var dropdownLi = document.createElement("li");
    dropdownLi.classList.add("nav-item", "dropdown");
  
    // Create the Dropdown Toggle <a> element
    var dropdownToggle = document.createElement("a");
    dropdownToggle.classList.add("nav-link", "dropdown-toggle");
    dropdownToggle.id = "navbarDropdown";
    dropdownToggle.href = "#";
    dropdownToggle.role = "button";
    dropdownToggle.setAttribute("data-bs-toggle", "dropdown");
    dropdownToggle.setAttribute("aria-expanded", "false");
    dropdownToggle.innerHTML = '<i class="fas fa-user fa-fw"></i>';
  
    // Create the Dropdown Menu <ul> element
    var dropdownMenu = document.createElement("ul");
    dropdownMenu.classList.add("dropdown-menu", "dropdown-menu-end");
    dropdownMenu.setAttribute("aria-labelledby", "navbarDropdown");
  
    // Create the Settings <li> element
    var settingsLi = document.createElement("li");
    var settingsLink = document.createElement("a");
    settingsLink.classList.add("dropdown-item");
    settingsLink.href = "#!";
    settingsLink.textContent = "Settings";
    settingsLi.appendChild(settingsLink);
  
    // Create the Activity Log <li> element
    var activityLogLi = document.createElement("li");
    var activityLogLink = document.createElement("a");
    activityLogLink.classList.add("dropdown-item");
    activityLogLink.href = "#!";
    activityLogLink.textContent = "Activity Log";
    activityLogLi.appendChild(activityLogLink);
  
    // Create the Dropdown Divider <li> element
    var dividerLi = document.createElement("li");
    var dividerHr = document.createElement("hr");
    dividerHr.classList.add("dropdown-divider");
    dividerLi.appendChild(dividerHr);
  
    // Create the Logout <li> element
    var logoutLi = document.createElement("li");
    var logoutLink = document.createElement("a");
    logoutLink.classList.add("dropdown-item");
    logoutLink.href = "#!";
    logoutLink.textContent = "Logout";
    logoutLi.appendChild(logoutLink);
  
    // Append the elements to their respective parents
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
  
    // Return the created navbar element
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
    navbarBrand.href = "#";
    // navbarBrand.textContent = "LOGO";

    var img = document.createElement("img")
    img.src = "../files/images/MS-logo.png"
    img.alt = "Moon Star"
    img.style.width = 75+"px"
    img.style.height = 70+"px"
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
    brandLink.href = "#";
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
    chatButton.type = "button";
    chatButton.classList.add("btn", "btn-primary", "mx-3");
    chatButton.textContent = "Chat";
    iconsContainer.appendChild(chatButton);
  
    const profileLink = document.createElement("a");
    profileLink.href = "#";
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
    headerLoggedIn();
}

  



