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
changeCopyByLang();

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
        //set selected country
        this.setSelectedCountry();
        this.setSelectedLang();

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

            window.location.reload();
        }
    }
    countryController(btn){
        this.countryBtns.forEach(e=>e.classList.remove('active'));
        btn.classList.add('active');
        
        //validate if not the same lang so we dont retrigger any function
        if(localStorage.getItem('country') != btn.dataset.country){
            localStorage.setItem('country', btn.dataset.country);
            dispatchEvents('country_changed', document);
            window.location.reload();
        }
    }
    setSelectedCountry(){
        const country = localStorage.getItem('country') ? localStorage.getItem('country') : 'peru';
        const countryBtn = this.menu.querySelector(`.countryBtn[data-country="${country}"]`);
        if(countryBtn){
            countryBtn.classList.add('active'); 
        } 
        else{
            this.menu.querySelector(`.countryBtn[data-country=peru]`).classList.add('active');
        }
    }
    setSelectedLang(){
        const lang = localStorage.getItem('lang') ? localStorage.getItem('lang') : 'es';
        const langBtn = this.menu.querySelector(`.langBtn[data-lang="${lang}"]`);
        if(langBtn){
            langBtn.classList.add('active'); 
        } 
        else{
            this.menu.querySelector(`.langBtn[data-lang=peru]`).classList.add('active');
        }
    }
}

const menuController = new MenuController();

//Handle modals ----------------------------------------------------------------------------------
//Triger events
function dispatchEvents(event, element){
    let newEvent = new Event(event);
    element.dispatchEvent(newEvent);
}
function openModal(modal){
    document.body.style.overflow = 'hidden';
    modal.classList.add('active');
    dispatchEvents('open_modal', modal);
    
    const iframe = modal.querySelector('iframe');
    if(iframe){
        const player = new Vimeo.Player(iframe);
        player.setCurrentTime(0);
        player.play();
    }

    modal.scrollTo(0, 0);
    setTimeout(function(){
        modal.classList.add('visible_modal');
    },50);
}
function closeModal(modal){
    modal.classList.remove('visible_modal');
    document.body.style.overflow = '';
    setTimeout(function(){
        modal.classList.remove('active');
        dispatchEvents('close_modal', modal);

        const iframe = modal.querySelector('iframe');
        if(iframe){
            const player = new Vimeo.Player(iframe);
            player.setCurrentTime(0);
            player.pause();
        }
    },450);
}
//close modals on Escape key
window.addEventListener('keyup', (e)=>{
    if(e.key === "Escape"){
        const activeModal = document.querySelector('.modalContainer.active:not(.disableEscKey):not(.disableClose)');
        if(activeModal) closeModal(activeModal);
    }
});
const startModals = (function startModals(){
    const toggleModal = document.querySelectorAll('.toggleModal');
    const modalContainer = document.querySelectorAll('.modalContainer:not(.disableClose)');
    toggleModal.forEach(function(e){
        e.addEventListener('click', function(){
            if(!e.classList.contains('disabled')){
                openModal(document.getElementById(e.dataset.target));
            }
        });
    });
    modalContainer.forEach(function(e){
        e.addEventListener('click', function(l){
            if(!l.target.matches(".modalContent *:not(.closeItemModal)")
            && !l.target.matches('.modalContent')
            && !l.target.matches('.disableClose')
            && !l.target.matches('.disableClose *')){
                closeModal(e);
            };
        });
    });
    return startModals;
})();
//Handle modals ----------------------------------------------------------------------------------

class DirectorsController{
    constructor(directorsData){
        this.tabsContainer = document.querySelector('.gridTabs');
        this.directorsContainer = document.querySelector('.directorsContainer');
        this.modalsContainer = document.querySelector('.modalsContainer');
        this.directorsData = directorsData;
        this.country = localStorage.getItem('country') || 'peru';
        this.tabs = [];
        this.modals = [];
        this.data = null;
        this.init();
    }
    init(){
        this.data = this.directorsData[this.country] ? this.directorsData[this.country] : this.directorsData['peru'];
        this.setTitleCountry();
        this.printTabs();
        this.changeDirector(this.tabs[0]);

        //this tabs is created in print tabs method
        this.tabs.forEach(e=>{
            e.onclick = ()=>this.changeDirector(e);
        });
    }
    changeDirector(tab){
        this.tabs.forEach(e=>e.classList.remove('active'));
        tab.classList.add('active');
        const directorName = tab.dataset.director;
                
        const director = this.data.find(e=>e.director == directorName);

        if(!director) return null;

        let videoContent = '';
        let modalContent = '';
        director.videos.forEach((video, index)=>{
            videoContent += `
            <div class="grid-item itemDirector toggleModal" data-target="modalVideo_${index}">
                <div class="grid-item-hover">
                <p class="grid-item-hover--name">${video.title}</p>
                </div>
                <img src="${video.placeholder}" alt="${video.title}">
            </div>`;

            modalContent += `           
            <div class="modalContainer" id="modalVideo_${index}">
                <div class="grid-popup">
                    <div class="grid-popup-container modalContent">
                        <div style="width: 100%; height: 100%">
                        <div
                            data-vimeo-initialized="true"
                            style="width: 100%; height: 100%; overflow: hidden"
                        >
                            <iframe
                            src="${video.video}?title=0&amp;byline=0&amp;portrait=0&amp;playsinline=0&amp;autoplay=0&amp;autopause=0&amp;app_id=122963"
                            width="426"
                            height="240"
                            frameborder="0"
                            allow="autoplay; fullscreen; picture-in-picture"
                            allowfullscreen=""
                            title="${video.title}"
                            data-ready="true"
                            style="width: 100%; height: 100%"
                            ></iframe>
                        </div>
                        </div>
                    </div>
                    <button class="closeItemModal">
                        <svg
                        stroke="currentColor"
                        fill="currentColor"
                        stroke-width="0"
                        viewBox="0 0 24 24"
                        height="1em"
                        width="1em"
                        xmlns="http://www.w3.org/2000/svg"
                        style="color: white"
                        >
                        <path fill="none" d="M0 0h24v24H0z"></path>
                        <path
                            d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"
                        ></path>
                        </svg>
                    </button>
                </div>
            </div>`;
        });

        this.directorsContainer.innerHTML = videoContent;
        this.modalsContainer.innerHTML = modalContent;

        startModals();
    }
    printTabs(){        
        let content = '';
        this.data.forEach((data, index)=>{
            content+=`<div class="grid-tab gridTab ${index == 1 ? index : ''}" data-director="${data.director}"><p>${data.director}</p></div>`
        });
        
        this.tabsContainer.innerHTML = content;        
        this.tabs = this.tabsContainer.querySelectorAll('.gridTab');
    }
    setTitleCountry(){
        const countryTitle = document.querySelector('#countryTitle');
        countryTitle.innerText = this.country;
    }
}

const directorsData = {
    colombia: [
        {
            director: 'Diego Fried',
            videos: [
                {                    
                    title: 'BRAHMA - LA ENVIDIA SANA',
                    placeholder: 'https://d3e0ws1qnk7y4e.cloudfront.net/brahma envidia sana.jpg',
                    video: 'https://player.vimeo.com/video/739040598',
                },
                {                    
                    title: 'BRAHMA - LA ENVIDIA SANA',
                    placeholder: 'https://d3e0ws1qnk7y4e.cloudfront.net/brahma envidia sana.jpg',
                    video: 'https://player.vimeo.com/video/739040598',
                },
            ],
        },
        {
            director: 'Hector Orbegoso',
            videos: [
                
            ],
        },
        {
            director: 'Ivan Vaccaro',
            videos: [

            ],
        },
        {
            director: 'Jose Navarro',
            videos: [

            ],
        },
        {
            director: 'Juan Diego Servat',
            videos: [

            ],
        },
    ],
    peru: [
        {
            director: 'Alvaro Stocker',
            videos: [
                {                    
                    title: 'NESPRESSO - MASTICAR',
                    placeholder: 'https://d3e0ws1qnk7y4e.cloudfront.net/Nespresso - Masticar.jpg',
                    video: 'https://player.vimeo.com/video/474869636',
                },                
            ],
        },
        {
            director: 'Diego Fried',
            videos: [
                
            ],
        },
        {
            director: 'Ivan Vaccaro',
            videos: [
                
            ],
        },
        {
            director: 'Jose Navarro',
            videos: [
                
            ],
        },
        {
            director: 'Josefina Pieres',
            videos: [
                
            ],
        },
        {
            director: 'Juan Diego Servat',
            videos: [
                
            ],
        },
        {
            director: 'Rosa Maria Santisteban',
            videos: [
                
            ],
        },
    ],
    mexico: [],
    'u.s.': [],
}


// const directorController = new DirectorsController(directorsData);