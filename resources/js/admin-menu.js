const adminSlideoutButton = document.getElementById('admin-slideout-button');
const menuMobile = document.getElementById('menu-slideout-button');
const toggleMenu = document.getElementsByClassName('has-submenu');

//Memunculkan Admin Menu
adminSlideoutButton.onclick = function() {
    this.classList.toggle('is-active');
    document.getElementById('admin-side-menu').classList.toggle('is-active');
}

//Munculkan menu di mobile
menuMobile.onclick = function() {
    this.classList.toggle('is-active');
    document.getElementById('navMenu').classList.toggle('is-active');
}

//Toggle menu link di admin menu
for (var i = 0; i < toggleMenu.length; i++) {
    toggleMenu[i].onclick = function(){
        this.classList.toggle('is-active');

        const submenu = this.nextElementSibling;
        if (submenu.style.maxHeight) {
            //klik toggle tutup menu
            submenu.style.maxHeight = null
            submenu.style.margin = null
        } else{
            //klik toggle buka menu
            submenu.style.maxHeight = submenu.scrollHeight + "px"
            submenu.style.margin = "0.75em"
        }
    }
}




