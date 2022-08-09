document.addEventListener('DOMContentLoaded', function() {

    $(".page-header__user-name").click(function() {
        $(".page-header__login-submenu").toggleClass("page-header__login-submenu_active");
    });

    let dropdown = document.querySelector('.page-header__login-menu-item'),
        submenu = document.querySelector('.page-header__login-submenu');


    document.addEventListener('click', function(event) {
        if (event.target !== dropdown && !dropdown.contains(event.target)) {
            submenu.classList.remove('page-header__login-submenu_active');
        }
    });
    
});
