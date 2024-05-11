const submenu = document.querySelector('.submenu');
const hasSubmenu = document.querySelectorAll('.has-submenu');
hasSubmenu.forEach((elem) => {
    elem.addEventListener('click' , (event) =>{
        event.target.parentElement.querySelector('ul').classList.toggle('active');
    });
})