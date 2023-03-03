<?php include("template_base/header.php"); ?>

<link rel="stylesheet" href="./glide/css/glide.core.min.css">

<style>
  .slider_container_size{
    width: 100%;
    height: calc(100vw * 0.5625);
  }
  .grid-item-image{
    display: none;
  }
  .clickable_element_slider{
    position: absolute;
    width: 75%;
    top: 0;
    bottom: 0;
    z-index: 2;
    margin: auto;
    left: 0;
    right: 0;
    cursor: pointer;
  }
  @media only screen and (max-width: 700px) {
    .slider_container_size{
      height: 100vh;
    }
    .video_slider{
      display: none;
    }
    .grid-item-image{
      display: block;
    }
  }
</style>

  <main>
    <div class="grid-root">
      <div class="grid-container">
        <div class="grid-slider playing">
          <div class="glide">
            
            <div class="glide__arrows" data-glide-el="controls">
              <button class="grid-slider-prev glide__arrow glide__arrow--left" data-glide-dir="<">
                <svg
                  stroke="currentColor"
                  fill="currentColor"
                  stroke-width="0"
                  viewBox="0 0 16 16"
                  height="1em"
                  width="1em"
                  xmlns="http://www.w3.org/2000/svg"
                  style="color: white"
                >
                  <path
                    fill-rule="evenodd"
                    d="M9.224 1.553a.5.5 0 0 1 .223.67L6.56 8l2.888 5.776a.5.5 0 1 1-.894.448l-3-6a.5.5 0 0 1 0-.448l3-6a.5.5 0 0 1 .67-.223z"
                  ></path>
                </svg>
              </button>
              <button class="grid-slider-next glide__arrow glide__arrow--right" data-glide-dir=">">
                <svg
                  stroke="currentColor"
                  fill="currentColor"
                  stroke-width="0"
                  viewBox="0 0 16 16"
                  height="1em"
                  width="1em"
                  xmlns="http://www.w3.org/2000/svg"
                  style="color: white"
                >
                  <path
                    fill-rule="evenodd"
                    d="M6.776 1.553a.5.5 0 0 1 .671.223l3 6a.5.5 0 0 1 0 .448l-3 6a.5.5 0 1 1-.894-.448L9.44 8 6.553 2.224a.5.5 0 0 1 .223-.671z"
                  ></path>
                </svg>
              </button>
            </div>

            <div class="glide__track grid-slides" data-glide-el="track">
              <ul class="glide__slides">
                <li class="glide__slide">
                  <div class="grid-item">
                    <div class="clickable_element_slider toggleModal" data-target="slider_modal_1"></div>
                    <div class="grid-item-info">
                      <p class="grid-item-info--name">SAP - Hilo Azul</p>
                      <p class="grid-item-info--author">Miguel Vila</p>
                    </div>
                    <div class="slider_container_size">
                      <div class="grid-item-image">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg" style="color: white;">
                          <path d="M96 52v408l320-204L96 52z"></path>
                        </svg>
                        <img src="https://d3e0ws1qnk7y4e.cloudfront.net/SAP%20Hilo%20Azul.jpg" alt="slide">
                      </div>

                      <div class="video_slider" data-vimeo-initialized="true" style="width: 100%; height: 100%; overflow: hidden">
                        <iframe
                          src="https://player.vimeo.com/video/737718438?h=4027836ac9&amp;title=0&amp;byline=0&amp;portrait=0&amp;muted=1&amp;autoplay=1&amp;autopause=0&amp;controls=0&amp;loop=1&amp;app_id=122963"
                          width="426"
                          height="240"
                          frameborder="0"
                          allow="autoplay; fullscreen; picture-in-picture"
                          allowfullscreen=""
                          title="Miguel Vila / Hilo Azul / SAP"
                          data-ready="true"
                          style="width: 100%; height: 100%"
                        ></iframe>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="glide__slide">                    
                  <div class="grid-item">
                    <div class="clickable_element_slider toggleModal" data-target="slider_modal_2"></div>
                    <div class="grid-item-info">
                      <p class="grid-item-info--name">
                        BCP - Cuenta Millonaria - Tatuaje
                      </p>
                      <p class="grid-item-info--author">Daniel + Rafo</p>
                    </div>
                    <div class="slider_container_size">
                      <div class="grid-item-image">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg" style="color: white;">
                          <path d="M96 52v408l320-204L96 52z"></path>
                        </svg>
                        <img src="https://d3e0ws1qnk7y4e.cloudfront.net/BCP%20Tatuaje.jpg" alt="slide">
                      </div>
                      <div class="video_slider" data-vimeo-initialized="true" style="width: 100%; height: 100%; overflow: hidden">
                        <iframe
                          src="https://player.vimeo.com/video/734047632?h=a0e7898f10&amp;title=0&amp;byline=0&amp;portrait=0&amp;muted=1&amp;autoplay=1&amp;autopause=0&amp;controls=0&amp;loop=1&amp;app_id=122963"
                          width="426"
                          height="240"
                          frameborder="0"
                          allow="autoplay; fullscreen; picture-in-picture"
                          allowfullscreen=""
                          title="Daniel + Rafo / Cuenta Millonaria - Tatuaje / BCP"
                          data-ready="true"
                          style="width: 100%; height: 100%"
                        ></iframe>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="glide__slide">                    
                  <div class="grid-item">
                    <div class="clickable_element_slider toggleModal" data-target="slider_modal_3"></div>
                    <div class="grid-item-info">
                      <p class="grid-item-info--name">UTEC - Metaverso UTEC</p>
                      <p class="grid-item-info--author">Juan Diego Servat</p>
                    </div>
                    <div class="slider_container_size">
                      <div class="grid-item-image">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg" style="color: white;">
                          <path d="M96 52v408l320-204L96 52z"></path>
                        </svg>
                        <img src="https://d3e0ws1qnk7y4e.cloudfront.net/UTEC.jpg" alt="slide">
                      </div>
                      <div class="video_slider" data-vimeo-initialized="true" style="width: 100%; height: 100%; overflow: hidden">
                        <iframe
                          src="https://player.vimeo.com/video/731528173?h=96af9a8b39&amp;title=0&amp;byline=0&amp;portrait=0&amp;muted=1&amp;autoplay=1&amp;autopause=0&amp;controls=0&amp;loop=1&amp;app_id=122963"
                          width="426"
                          height="240"
                          frameborder="0"
                          allow="autoplay; fullscreen; picture-in-picture"
                          allowfullscreen=""
                          title="Juan Diego Servat / Metaverso UTEC / UTEC"
                          data-ready="true"
                          style="width: 100%; height: 100%"
                        ></iframe>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="glide__slide">
                  <div class="grid-item">
                    <div class="clickable_element_slider toggleModal" data-target="slider_modal_4"></div>
                    <div class="grid-item-info">
                      <p class="grid-item-info--name">Changan Uni-T 2022</p>
                      <p class="grid-item-info--author">Josefina Pieres</p>
                    </div>
                    <div class="slider_container_size">
                      <div class="grid-item-image">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg" style="color: white;">
                          <path d="M96 52v408l320-204L96 52z"></path>
                        </svg>
                        <img src="https://d3e0ws1qnk7y4e.cloudfront.net/Changan.jpg" alt="slide">
                      </div>
                      <div class="video_slider" data-vimeo-initialized="true" style="width: 100%; height: 100%; overflow: hidden">
                        <iframe
                          src="https://player.vimeo.com/video/719687641?h=e791cf577f&amp;title=0&amp;byline=0&amp;portrait=0&amp;muted=1&amp;autoplay=1&amp;autopause=0&amp;controls=0&amp;loop=1&amp;app_id=122963"
                          width="426"
                          height="240"
                          frameborder="0"
                          allow="autoplay; fullscreen; picture-in-picture"
                          allowfullscreen=""
                          title="Josefina Pieres / Lanzamiento UNI-T 2022 / Changan"
                          data-ready="true"
                          style="width: 100%; height: 100%"
                        ></iframe>
                      </div>
                    </div>
                  </div>                    
                </li>
              </ul>
            </div>

            <div class="grid-slider-dots glide__bullets" data-glide-el="controls[nav]">
              <div class="grid-slider-dot glide__bullet" data-glide-dir="=0"></div>
              <div class="grid-slider-dot glide__bullet" data-glide-dir="=1"></div>
              <div class="grid-slider-dot glide__bullet" data-glide-dir="=2"></div>
              <div class="grid-slider-dot glide__bullet" data-glide-dir="=3"></div>
            </div>

            <a href="#grid-videos" class="grid-slider-down">
              <img src="./assets/icon-scroll-down.bbf41f5a.svg" alt="scroll" />
            </a>
            </div>

        </div>
      </div>


      <div class="grid-container gap" id="grid-videos">
        <div class="grid-item toggleModal" data-target="modal_1">
          <div class="grid-item-hover">
            <p class="grid-item-hover--name">
              BCP - Cuenta Millonaria - Rapada
            </p>
            <p class="grid-item-hover--author">Daniel + Rafo</p>
          </div>
          <img
            src="https://d3e0ws1qnk7y4e.cloudfront.net/BCP Rapada.jpg"
            alt="imagen"
          />
        </div>
        <div class="grid-item toggleModal" data-target="modal_2">
          <div class="grid-item-hover">
            <p class="grid-item-hover--name">
              Interbank - Vas a Retirar tu AFP
            </p>
            <p class="grid-item-hover--author">Daniel Martin Rodriguez</p>
          </div>
          <img
            src="https://d3e0ws1qnk7y4e.cloudfront.net/Interbank - vas a retirar tu AFP.jpg"
            alt="imagen"
          />
        </div>
        <div class="grid-item toggleModal" data-target="modal_3">
          <div class="grid-item-hover">
            <p class="grid-item-hover--name">Geely - Tu Geely Sabe</p>
            <p class="grid-item-hover--author">Daniel + Rafo</p>
          </div>
          <img
            src="https://d3e0ws1qnk7y4e.cloudfront.net/daniel%20%2B%20rafo%20-%20geely.jpg"
            alt="imagen"
          />
        </div>
        <div class="grid-item toggleModal" data-target="modal_4">
          <div class="grid-item-hover">
            <p class="grid-item-hover--name">Caja Piura - 40 Aniversario</p>
            <p class="grid-item-hover--author">Jeff Carrera</p>
          </div>
          <img
            src="https://d3e0ws1qnk7y4e.cloudfront.net/Caja Piura.JPG"
            alt="imagen"
          />
        </div>
        <div class="grid-item toggleModal" data-target="modal_5">
          <div class="grid-item-hover">
            <p class="grid-item-hover--name">Ford - Ford Escape 2020</p>
            <p class="grid-item-hover--author">Rafa Carvalho</p>
          </div>
          <img
            src="https://d3e0ws1qnk7y4e.cloudfront.net/Ford Escape 2020.jpg"
            alt="imagen"
          />
        </div>
        <div class="grid-item toggleModal" data-target="modal_6">
          <div class="grid-item-hover">
            <p class="grid-item-hover--name">Pepsi - #ModoFutbol</p>
            <p class="grid-item-hover--author">Diego Fried</p>
          </div>
          <img
            src="https://d3e0ws1qnk7y4e.cloudfront.net/PEPSI+Modo+Futbol.JPG"
            alt="imagen"
          />
        </div>
      </div>

      <div class="modalContainer" id="modal_1">
        <div class="grid-popup">
          <div class="grid-popup-container modalContent">
            <div style="width: 100%; height: 100%;">
              <div data-vimeo-initialized="true" style="width: 100%; height: 100%; overflow: hidden;">
                <iframe src="https://player.vimeo.com/video/734045851?h=bfd3f0ee8f&amp;title=0&amp;byline=0&amp;portrait=0&amp;playsinline=0&amp;autoplay=0&amp;autopause=0&amp;app_id=122963" width="426" height="240" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen="" title="Daniel + Rafo / Cuenta Millonaria - Rapada / BCP" data-ready="true" style="width: 100%; height: 100%;">
                </iframe>
              </div>
            </div>
          </div>
          <button class="closeItemModal">
            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg" style="color: white;">
              <path fill="none" d="M0 0h24v24H0z"></path><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path>
            </svg>
          </button>
        </div>
      </div>
      
      <div class="modalContainer" id="modal_2">
        <div class="grid-popup">
          <div class="grid-popup-container modalContent">
            <div style="width: 100%; height: 100%;">
              <div data-vimeo-initialized="true" style="width: 100%; height: 100%; overflow: hidden;">
                <iframe src="https://player.vimeo.com/video/723595182?h=8f2f8a1c43&title=0&byline=0&portrait=0&playsinline=0&autoplay=0&autopause=0&app_id=122963" width="426" height="240" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen="" title="Interbank - Vas a Retirar tu AFP" data-ready="true" style="width: 100%; height: 100%;">
                </iframe>
              </div>
            </div>
          </div>
          <button class="closeItemModal">
            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg" style="color: white;">
              <path fill="none" d="M0 0h24v24H0z"></path><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path>
            </svg>
          </button>
        </div>
      </div>
      
      <div class="modalContainer" id="modal_3">
        <div class="grid-popup">
          <div class="grid-popup-container modalContent">
            <div style="width: 100%; height: 100%;">
              <div data-vimeo-initialized="true" style="width: 100%; height: 100%; overflow: hidden;">
                <iframe src="https://player.vimeo.com/video/734043283?h=006aeaa151&title=0&byline=0&portrait=0&playsinline=0&autoplay=1&autopause=0&app_id=122963" width="426" height="240" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen="" title="Geely - Tu Geely Sabe" data-ready="true" style="width: 100%; height: 100%;">
                </iframe>
              </div>
            </div>
          </div>
          <button class="closeItemModal">
            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg" style="color: white;">
              <path fill="none" d="M0 0h24v24H0z"></path><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path>
            </svg>
          </button>
        </div>
      </div>
      
      <div class="modalContainer" id="modal_4">
        <div class="grid-popup">
          <div class="grid-popup-container modalContent">
            <div style="width: 100%; height: 100%;">
              <div data-vimeo-initialized="true" style="width: 100%; height: 100%; overflow: hidden;">
                <iframe src="https://player.vimeo.com/video/677905026?h=6b9cc3bb8c&title=0&byline=0&portrait=0&playsinline=0&autoplay=1&autopause=0&app_id=122963" width="426" height="240" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen="" title="Caja Piura - 40 Aniversario" data-ready="true" style="width: 100%; height: 100%;">
                </iframe>
              </div>
            </div>
          </div>
          <button class="closeItemModal">
            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg" style="color: white;">
              <path fill="none" d="M0 0h24v24H0z"></path><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path>
            </svg>
          </button>
        </div>
      </div>
      
      <div class="modalContainer" id="modal_5">
        <div class="grid-popup">
          <div class="grid-popup-container modalContent">
            <div style="width: 100%; height: 100%;">
              <div data-vimeo-initialized="true" style="width: 100%; height: 100%; overflow: hidden;">
                <iframe src="https://player.vimeo.com/video/390092712?h=a434fd59a8&title=0&byline=0&portrait=0&playsinline=0&autoplay=1&autopause=0&app_id=122963" width="426" height="240" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen="" title="Ford - Ford Escape 2020" data-ready="true" style="width: 100%; height: 100%;">
                </iframe>
              </div>
            </div>
          </div>
          <button class="closeItemModal">
            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg" style="color: white;">
              <path fill="none" d="M0 0h24v24H0z"></path><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path>
            </svg>
          </button>
        </div>
      </div>
      
      <div class="modalContainer" id="modal_6">
        <div class="grid-popup">
          <div class="grid-popup-container modalContent">
            <div style="width: 100%; height: 100%;">
              <div data-vimeo-initialized="true" style="width: 100%; height: 100%; overflow: hidden;">
                <iframe src="https://player.vimeo.com/video/274180054?h=4e5f86251c&title=0&byline=0&portrait=0&playsinline=0&autoplay=1&autopause=0&app_id=122963" width="426" height="240" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen="" title="Pepsi - #ModoFutbol" data-ready="true" style="width: 100%; height: 100%;">
                </iframe>
              </div>
            </div>
          </div>
          <button class="closeItemModal">
            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg" style="color: white;">
              <path fill="none" d="M0 0h24v24H0z"></path><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path>
            </svg>
          </button>
        </div>
      </div>

      
      <div class="modalContainer" id="slider_modal_1">
        <div class="grid-popup">
          <div class="grid-popup-container modalContent">
            <div style="width: 100%; height: 100%;">
              <div data-vimeo-initialized="true" style="width: 100%; height: 100%; overflow: hidden;">
                <iframe src="https://player.vimeo.com/video/737718438?h=4e5f86251c&title=0&byline=0&portrait=0&playsinline=0&autoplay=1&autopause=0&app_id=122963" width="426" height="240" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen="" title="Pepsi - #ModoFutbol" data-ready="true" style="width: 100%; height: 100%;">
                </iframe>
              </div>
            </div>
          </div>
          <button class="closeItemModal">
            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg" style="color: white;">
              <path fill="none" d="M0 0h24v24H0z"></path><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path>
            </svg>
          </button>
        </div>
      </div>
      
      <div class="modalContainer" id="slider_modal_2">
        <div class="grid-popup">
          <div class="grid-popup-container modalContent">
            <div style="width: 100%; height: 100%;">
              <div data-vimeo-initialized="true" style="width: 100%; height: 100%; overflow: hidden;">
                <iframe src="https://player.vimeo.com/video/734047632?h=4e5f86251c&title=0&byline=0&portrait=0&playsinline=0&autoplay=1&autopause=0&app_id=122963" width="426" height="240" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen="" title="Pepsi - #ModoFutbol" data-ready="true" style="width: 100%; height: 100%;">
                </iframe>
              </div>
            </div>
          </div>
          <button class="closeItemModal">
            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg" style="color: white;">
              <path fill="none" d="M0 0h24v24H0z"></path><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path>
            </svg>
          </button>
        </div>
      </div>
      
      <div class="modalContainer" id="slider_modal_3">
        <div class="grid-popup">
          <div class="grid-popup-container modalContent">
            <div style="width: 100%; height: 100%;">
              <div data-vimeo-initialized="true" style="width: 100%; height: 100%; overflow: hidden;">
                <iframe src="https://player.vimeo.com/video/731528173?h=4e5f86251c&title=0&byline=0&portrait=0&playsinline=0&autoplay=1&autopause=0&app_id=122963" width="426" height="240" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen="" title="Pepsi - #ModoFutbol" data-ready="true" style="width: 100%; height: 100%;">
                </iframe>
              </div>
            </div>
          </div>
          <button class="closeItemModal">
            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg" style="color: white;">
              <path fill="none" d="M0 0h24v24H0z"></path><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path>
            </svg>
          </button>
        </div>
      </div>
      
      <div class="modalContainer" id="slider_modal_4">
        <div class="grid-popup">
          <div class="grid-popup-container modalContent">
            <div style="width: 100%; height: 100%;">
              <div data-vimeo-initialized="true" style="width: 100%; height: 100%; overflow: hidden;">
                <iframe src="https://player.vimeo.com/video/719687641?h=4e5f86251c&title=0&byline=0&portrait=0&playsinline=0&autoplay=1&autopause=0&app_id=122963" width="426" height="240" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen="" title="Pepsi - #ModoFutbol" data-ready="true" style="width: 100%; height: 100%;">
                </iframe>
              </div>
            </div>
          </div>
          <button class="closeItemModal">
            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg" style="color: white;">
              <path fill="none" d="M0 0h24v24H0z"></path><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path>
            </svg>
          </button>
        </div>
      </div>

    </div>
  </main>

  <script src="https://player.vimeo.com/api/player.js"></script>
  <script src="./glide/glide.min.js"></script>

  <script>    
    const glide = new Glide('.glide', {
      type: 'carousel',
    });

    const sliderInfos = document.querySelectorAll('.grid-item-info');
    
    glide.on('move', function(e) {
      const currentInfo = sliderInfos[glide.index];

      if(currentInfo){
        currentInfo.classList.remove('hide');

        setTimeout(() => {
          currentInfo.classList.add('hide');          
        }, 2000);
      }
    });

    
    glide.mount();

    if(window.innerWidth < 680){
      document.querySelectorAll('.video_slider').forEach(e=>e.remove());
    }
  </script>

<?php include("template_base/footer.php"); ?>