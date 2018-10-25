<template>
  <div>
    <height-transition>
      <component :is="sectionComponent" v-if="sectionComponent"></component>
    </height-transition>
   <section id="home">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="slide">
                <div class="slide__title">
                    <h1>FOCEM</h1>
                </div>
                <div class="slide__images">
                  <div class="slide__image slide__image--car">
                    <router-link to="/automotivo/sobre"><img class="" src="@/assets/img/carro.png" alt="">
                      <h2>Automotivo</h2>
                    </router-link>
                  </div>
                  <div class="slide__image slide__image--refinery" >
                    <router-link to="/petroleo-gas/sobre"><img src="@/assets/img/refinaria.png" alt="">
                      <h2>Petróleo & gás</h2>
                    </router-link>
                  </div>
                </div>
            </div>
            <div class="language">
              <fade-transition>
                <div class="grid-container m-b-4" v-show="!section">
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
              </fade-transition>
              <div class="grid-container">
                <div class="grid-x grid-padding-x">
                  <div class="cell">
                    <a class="action" @click.prevent="section = 'focem'" v-show="!section">
                      <a class="text">SOBRE O FOCEM</a>
                      <svg class="arrow-down">
                          <path class="a1" d="M0 0 L15 16 L30 0"></path>
                          <path class="a2" d="M0 10 L15 26 L30 10"></path>
                          <path class="a3" d="M0 20 L15 36 L30 20"></path>
                      </svg>
                    </a>
                    <a class="action" @click.prevent="section = ''" v-show="section">
                      <a class="text">VOLTAR AO INÍCIO</a>
                      <svg class="arrow-down" style="transform: rotate(180deg)">
                          <path class="a1" d="M0 0 L15 16 L30 0"></path>
                          <path class="a2" d="M0 10 L15 26 L30 10"></path>
                          <path class="a3" d="M0 20 L15 36 L30 20"></path>
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
    </section>
  </div>
</template>
<script>
import PetroSobre from '@/views/petro/sobre'
import FocemSobre from '@/views/focem/sobre'
export default {
  components: {
    PetroSobre,
    FocemSobre
  },
  data: () => ({
    section: ''
  }),
  mounted() {
    this.animHome();
    this.addClassHome();
  },
  computed: {
    sectionComponent() {
      return this.section ? this.section + '-sobre' : ''
    }
  },
  methods: {
    animHome() {
      if( !this.detectMobile() ) {
        let titleHome = document.querySelector('.slide .slide__title h1');
        titleHome.textContent = "FOCEM";
        let contentCar = document.querySelector('.slide .slide__images .slide__image--car');
        let imageCar = contentCar.querySelector('img');

        let contentRefinery = document.querySelector('.slide .slide__images .slide__image--refinery');
        let imageRefinery = contentRefinery.querySelector('img');

        contentCar.addEventListener('mouseenter', e => {
          TweenMax.fromTo(imageRefinery, .3, { opacity: 1 }, { opacity: 0 });
          TweenMax.fromTo(imageCar, .6, { x: 0 }, {x: 200, ease: Power3.easeOut});
          titleHome.textContent = "Automotivo";
          TweenMax.fromTo(titleHome, .4, { y: 100 }, { y: 0, scale: .5, ease: Power3.easeOut});
        })
        contentCar.addEventListener('mouseleave', e => {
          TweenMax.fromTo(imageRefinery, .3, { opacity: 0 }, { opacity: 1 });
          TweenMax.fromTo(imageCar, .4, {x: 200}, {x: 0});
          titleHome.textContent = "FOCEM";
          TweenMax.to(titleHome, .2, {scale: 1});
        })

        contentRefinery.addEventListener('mouseenter', e => {
          TweenMax.fromTo(imageCar, .3, { opacity: 1 }, { opacity: 0 });
          TweenMax.fromTo(imageRefinery, .6, {x: 0 }, {x: -200, ease: Power3.easeOut });
          titleHome.textContent = "Petroleo & Gás";
          TweenMax.fromTo(titleHome, .4, { y: 300 }, {scale: .4, y: 200, ease: Power3.easeOut });
        })
        contentRefinery.addEventListener('mouseleave', e => {
          TweenMax.fromTo(imageCar, .3, { opacity: 0 }, { opacity: 1 });
          TweenMax.fromTo(imageRefinery, .4, {x: -200}, {x: 0});
          titleHome.textContent = "FOCEM";
          TweenMax.to(titleHome, .2, {scale: 1, y: 0});
        })
      }
    },
    addClassHome() {
      $('#menu').addClass('menu-home');
    }
  },
}
</script>
