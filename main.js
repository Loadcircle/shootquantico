const changeCopyByLang = ()=>{
    //default to es
    const lang = localStorage.getItem('lang') || 'es';

    const esContent = document.querySelectorAll('.esContent');
    const enContent = document.querySelectorAll('.enContent');

    //default to es
    if(lang == 'en'){
        esContent.forEach(e=>e.style.display = 'none');
        enContent.forEach(e=>e.style.display = 'block');
    }else{
        enContent.forEach(e=>e.style.display = 'none');
        esContent.forEach(e=>e.style.display = 'block');
    }
};

const changeDirectorsByLang = ()=>{
    console.log('Country :', localStorage.getItem('country'));
}

class MenuController{
    constructor(){
        this.menu = document.querySelector('#menuLayout');
        this.openMenuBtn = document.querySelector('.openMenuBtn');
        this.closeMenuBtn = this.menu.querySelector('.closeMenuBtn');
        this.displayDirectorsBtn = this.menu.querySelector('.displayDirectorsBtn');
        this.langBtns = this.menu.querySelectorAll('.langBtn');
        this.countryBtns = this.menu.querySelectorAll('.countryBtn');
        this.init();
    }
    init(){
        this.openMenuBtn.onclick = ()=>this.openMenu();
        this.closeMenuBtn.onclick = ()=>this.closeMenu();
        this.displayDirectorsBtn.onclick = ()=>this.displayDirectors();

        this.langBtns.forEach(btn=>{
            btn.onclick = ()=>this.languageController(btn);
        });

        this.countryBtns.forEach(btn=>{
            btn.onclick = ()=>this.countryController(btn);
        });
    }
    openMenu(){
        this.menu.style.display = 'block';
        document.body.style.overflow = 'hidden';
    }
    closeMenu(){
        this.menu.style.display = 'none';  
        document.body.style.overflow = 'auto';      
    }
    displayDirectors(){
        const submenu = this.menu.querySelector('.submenu-directores');
        submenu.classList.toggle('active');
    }
    languageController(btn){
        this.langBtns.forEach(e=>e.classList.remove('active'));
        btn.classList.add('active');

        //validate if not the same lang so we dont retrigger any function
        if(localStorage.getItem('lang') != btn.dataset.lang){

            localStorage.setItem('lang', btn.dataset.lang);

            changeCopyByLang();
        }
    }
    countryController(btn){
        this.countryBtns.forEach(e=>e.classList.remove('active'));
        btn.classList.add('active');
        
        //validate if not the same lang so we dont retrigger any function
        if(localStorage.getItem('country') != btn.dataset.country){
            localStorage.setItem('country', btn.dataset.country);

            changeDirectorsByLang();
        }

    }
}

const menuController = new MenuController();
