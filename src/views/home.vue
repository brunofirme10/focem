<template>
   <section id="home">
        <div class="grid-container">
            <div class="grid-x grid-padding-x">
                <div class="slide">
                    <div class="slide__title">
                        <h1>FOCEM</h1>
                    </div>
                    <div class="slide__images">
                      <div class="slide__image slide__image--car">
                        <router-link to="/automotivo/sobre"><img class="" src="@/assets/img/carro.png" alt=""></router-link>
                      </div>
                      <div class="slide__image slide__image--refinery" >
                        <router-link to="/petroleo-gas/sobre"><img src="@/assets/img/refinaria.png" alt=""></router-link>
                      </div>
                    </div>
                </div>
                <div class="language">
                  <div class="grid-container">
                    <div class="grid-x grid-padding-x">
                      <div class="cell">
                        <h6><span>Escolha o IDIOMA</span></h6>
                        <div class="choose">
                          <a href="#">PORTUGUÊS</a>
                          <a href="#">ESPANHOL</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </section>
</template>
<script>
export default {
  mounted(){
    this.animHome();
  },
  methods: {
    animHome(){
      let titleHome = document.querySelector('.slide .slide__title h1');
      titleHome.textContent = "FOCEM";
      let contentCar = document.querySelector('.slide .slide__images .slide__image--car');
      let imageCar = contentCar.querySelector('img');

      let contentRefinery = document.querySelector('.slide .slide__images .slide__image--refinery');
      let imageRefinery = contentRefinery.querySelector('img');

      contentCar.addEventListener('mouseenter', e => {
        TweenMax.fromTo(imageRefinery, .3, { opacity: 1 }, { opacity: 0 });
        TweenMax.fromTo(imageCar, .4, {x: 0}, {x: 200});
        titleHome.textContent = "Automotivo";
        TweenMax.to(titleHome, .2, {scale: .5});
      })
      contentCar.addEventListener('mouseleave', e => {
        TweenMax.fromTo(imageRefinery, .3, { opacity: 0 }, { opacity: 1 });
        TweenMax.fromTo(imageCar, .4, {x: 200}, {x: 0});
        titleHome.textContent = "FOCEM";
        TweenMax.to(titleHome, .2, {scale: 1});
      })

      contentRefinery.addEventListener('mouseenter', e => {
        TweenMax.fromTo(imageCar, .3, { opacity: 1 }, { opacity: 0 });
        TweenMax.fromTo(imageRefinery, .4, {x: 0}, {x: -200});
        titleHome.textContent = "Petroleo & Gás";
        TweenMax.to(titleHome, .2, {scale: .4, y: 200 });
      })
      contentRefinery.addEventListener('mouseleave', e => {
        TweenMax.fromTo(imageCar, .3, { opacity: 0 }, { opacity: 1 });
        TweenMax.fromTo(imageRefinery, .4, {x: -200}, {x: 0});
        titleHome.textContent = "FOCEM";
         TweenMax.to(titleHome, .2, {scale: 1, y: 0});
      })

    }
  },
}
</script>
