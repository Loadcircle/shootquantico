<?php include("template_base/header.php"); ?>

<style>
  @media only screen and (min-width: 1250px) {
    .ps-info-right{
      margin-left: 20px;
    }
  }
</style>
    <main>
      <div class="ps-root">
        <div class="ps-container">
          <div class="grid-item" id="ps-banner">
            <div class="grid-item-controls"></div>
            
            <div class="serviceVideo" style="width: 100%; height: 100vh; display: none;">
              <div
                style="width: 100%; height: 100%; overflow: hidden"
                data-vimeo-initialized="true"
              >
                <iframe
                  src="https://player.vimeo.com/video/256965529?h=e8d8f29e49&title=0&byline=0&portrait=0&autoplay=1&autopause=0&controls=0&app_id=122963"
                  width="640"
                  height="360"
                  frameborder="0"
                  allow="autoplay; fullscreen; picture-in-picture"
                  allowfullscreen=""
                  title="Production Service // Film in Peru"
                  data-ready="true"
                  style="width: 100%; height: 100%"
                ></iframe>
              </div>
            </div>

            <div style="width: 100%; height: 100vh" class="playerPreview">
              <div
                class="react-player__preview"
                tabindex="0"
                style="
                  width: 100%;
                  height: 100%;
                  background-size: cover;
                  background-position: center center;
                  cursor: pointer;
                  display: flex;
                  align-items: center;
                  justify-content: center;
                  background-image: url('https://d3e0ws1qnk7y4e.cloudfront.net/ps-banner.png');
                "
              >
                <div
                  class="react-player__shadow"
                  style="
                    background: radial-gradient(
                      rgba(0, 0, 0, 0.3),
                      rgba(0, 0, 0, 0) 60%
                    );
                    border-radius: 64px;
                    width: 64px;
                    height: 64px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                  "
                >
                  <div
                    class="react-player__play-icon"
                    style="
                      border-style: solid;
                      border-width: 16px 0px 16px 26px;
                      border-color: transparent transparent transparent white;
                      margin-left: 7px;
                    "
                  ></div>
                </div>
              </div>
            </div>
            <a href="#ps-info" class="grid-item-down">
              <img src="./assets/icon-scroll-down.bbf41f5a.svg" alt="scroll" />
            </a>
          </div>
          <div class="ps-info" id="ps-info">
            <h1 class="ps-info--title esContent">¿QUÉ OFRECEMOS?</h1>
            <h1 class="ps-info--title enContent">WHAT WE OFFER?</h1>
            <div class="ps-info-right">
              <div class="enContent">                
                <p class="ps-info--text">
                  Our bespoke production services have engendered a diverse stream
                  of loyal partners from all over the world. Vested in the
                  creation of your project, we are here to guide you as to the
                  benefits of shooting with union or non union talent and/or crew.
                  Additionally, we make sure that casting, location scouting,
                  insurance requirements, payroll, celebrity sourcing, and client
                  services are customized to the specific needs of your project.
                </p>
                <p class="ps-info--text">
                  With offices in CDMX, Bogota, Lima and Miami , we are able to
                  execute shoots in diverse formats- from DSLR to virtual reality,
                  digital, film, etc.- all across South America including Mexico,
                  Miami, LA and the Caribbean. No job is too large or too small as
                  vetted and professional solutions can be tailored to fit
                  virtually any budget. Some commercial, web and music video cost
                  estimates as well as library location proposals can be turned
                  around in 24 hours or less.
                </p>
              </div>
              <div class="esContent">                
                <p class="ps-info--text">
                  Nuestros servicios de producción a medida han generado un flujo diverso 
                  de socios leales de todo el mundo. Comprometidos con la creación de su 
                  proyecto, estamos aquí para guiarle en cuanto a las ventajas de rodar con 
                  talento y/o equipo sindicalizado o no sindicalizado. Además, nos aseguramos 
                  de que el casting, la búsqueda de localizaciones, los requisitos de seguro, 
                  la nómina, la búsqueda de celebridades y los servicios al cliente se adapten 
                  a las necesidades específicas de su proyecto.
                </p>
                <p class="ps-info--text">
                  Con oficinas en CDMX, Bogotá, Lima y Miami, somos capaces de realizar rodajes 
                  en diversos formatos -desde DSLR hasta realidad virtual, digital, cine, etc.- en 
                  toda Sudamérica incluyendo México, Miami, LA y el Caribe. Ningún trabajo es demasiado 
                  grande o demasiado pequeño, ya que se pueden adaptar soluciones profesionales a                   
                  prácticamente cualquier presupuesto. Algunas estimaciones de costes de vídeos comerciales, 
                  web y musicales, así como propuestas de localización de bibliotecas, se pueden entregar en 
                  24 horas o menos.
                </p>
              </div>
              <div class="ps-info--logos">
                <img src="./assets/logo1.4c0ae86c.png" alt="logo1" /><img
                  src="./assets/logo2.89473661.png"
                  alt="logo2"
                /><img src="./assets/logo3.b0075f02.png" alt="logo3" /><img
                  src="./assets/logo4.2bbfc856.png"
                  alt="logo4"
                /><img src="./assets/logo5.7392ea34.png" alt="logo5" /><img
                  src="./assets/logo6.f021d360.png"
                  alt="logo6"
                /><img src="./assets/logo7.42e1d54e.png" alt="logo7" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <script src="https://player.vimeo.com/api/player.js"></script>

    <script>
      const serviceVideo = document.querySelector('.serviceVideo');
      const videoIframe = serviceVideo.querySelector('iframe');
      const playerPreview = document.querySelector('.playerPreview');
      const player = new Vimeo.Player(videoIframe);

      playerPreview.onclick = ()=>{
        playerPreview.style.display = 'none';
        serviceVideo.style.display = 'block';

        player.play();
      }
    </script>

    
<?php include("template_base/footer.php"); ?>
