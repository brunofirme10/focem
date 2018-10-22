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
                        <img class="" src="@/assets/img/carro.png" alt="">
                      </div>
                      <div class="slide__image slide__image--refinery" >
                        <img src="@/assets/img/refinaria.png" alt="">
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<style scoped>
section#home .slide{
  width: 100vw;
  background: blue;
  text-align: center;
}
.slide__images  {
  text-align: center;
}
.slide__image {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  max-height: 60vh;
  cursor: pointer;
}
.slide__image.slide__image--car {
 transform: translate(-90%,-50%);
 max-height: 50vh;
}
.slide__image.slide__image--refinery {
 transform: translate(-10%,-70%);
}
#home .slide .slide__title {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -80%);
}
#home .slide .slide__title h1 {
  font-size: 20rem;

}
</style>
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
        TweenMax.to(titleHome, .2, {scale: .5, y: 200 });
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
