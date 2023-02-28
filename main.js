class MenuController{
    constructor(){
        this.menu = document.querySelector('#menuLayout');
        this.openMenuBtn = document.querySelector('.openMenuBtn');
        this.closeMenuBtn = this.menu.querySelector('.closeMenuBtn');
        this.displayDirectorsBtn = this.menu.querySelector('.displayDirectorsBtn');
        this.init();
    }
    init(){
        this.openMenuBtn.onclick = ()=>this.openMenu();
        this.closeMenuBtn.onclick = ()=>this.closeMenu();
    }
    openMenu(){
        this.menu.style.display = 'block';
    }
    closeMenu(){
        this.menu.style.display = 'none';        
    }
}

const menuController = new MenuController();