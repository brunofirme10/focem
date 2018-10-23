<template>
<div>
    <cover img="auto/focem/cover-header.jpg"/>
    <section id="focem" class="interna focem-auto" >
        <div class="grid-container full">
            <div class="grid-x">
                <div class="cell small-2">  
                    <div class="link">
                        <a href=""> Saiba como funciona o programa >></a>
                    </div>
                </div>    
            </div>  
        </div>    
            <div class="grid-container">
                <div class="grid-x grid-padding-x grid-padding-y align-center text-center">
                    <div class="cell">
                        <h1>FOCEM AUTOMOTIVO </h1>
                        <h3>Fundo para Convergência Estrutural do Mercosul</h3>
                    </div>
                </div>  
                <div class="grid-x grid-padding-x grid-padding-y align-center">
                    <div class="cell medium-4">
                        <div class="content__scrollable">
                        <p> O projeto de Adensamento e Complementação Automotiva no âmbito do Mercosul (FOCEM Automotivo) é uma iniciativa executada pela ABDI, com recursos majoritatiamente provenientes do FOCEM, que foi aprovada em 2010.</p>
                        </div>  
                    </div>
                    <div class="cell medium-4">
                            <img src="@/assets/img/carro.png" alt="">
                    </div>
                </div>
            </div>
            <!-- <div class="grid-container full">
                <div class="grid-x">
                    <div class="cell text-center">
                            <div class="choose-section">
                              <object data="/static/map.svg" type="image/svg+xml" id="map"></object>
                            </div>
                    </div>
                </div>
            </div> -->
            <div class="maps">
            <div class="choose-section space" id="about-details">
              <div class="grid-container">
                <div class="grid-x grid-padding-x">
                  <div class="medium-6 cell">
                    <div class="grid-y grid-padding-y">
                      <div class="medium-6 cell">
                        <div class="infographic">
                          <div class="infographic__data">
                            <h1 class="dot">Público-alvo</h1>
                            <div class="grid-x grid-padding-x">
                              <div class="small-9 cell">
                                <h2>99 empresas  que participam  deste projeto. </h2>
                              </div>
                              <div class="small-3 cell">
                                <img src="@/assets/img/pg/icon-empresa.png">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="medium-6 cell">
                        <div class="grid-x grid-padding-x">
                            <div class="large-6 cell">
                              <div class="infographic">
                                <div class="infographic__score">
                                  <h1>34<span @click=" classCoutrySelected = 'BR' ">BRASIL</span></h1>
                                </div>
                                <div class="infographic__text dot">
                                  <p>
                                    As empresas beneficiadas
                                    pelo projeto foram escolhidas
                                    a partir da identificação
                                    de sua capacidade potencial
                                    de atender às demandas
                                    das empresas-âncoras
                                    do setor no Mercosul
                                    por itens estratégicos
                                    e de baixa competitividade,
                                    com dificuldade de suprimento ou que
                                    precisam ser importados
                                    de fora da zona do bloco.
                                  </p>
                                </div>
                              </div>
                            </div>
                            <div class="large-6 cell">
                              <div class="grid-x grid-padding-x">
                                <div class="medium-3 cell" @click=" classCoutrySelected = 'UY' ">
                                  <div class="infographic">
                                      <div class="infographic__score">
                                        <h1><span>Uruguai</span></h1>
                                      </div>
                                  </div>
                              </div>
                              <div class="medium-3 cell" @click=" classCoutrySelected = 'ARG' ">
                                  <div class="infographic">
                                      <div class="infographic__score">
                                        <h1><span>Argentina</span></h1>
                                      </div>
                                  </div>
                              </div>
                              <div class="medium-3 cell" @click=" classCoutrySelected = 'PAR' ">
                                  <div class="infographic">
                                      <div class="infographic__score">
                                        <h1><span>Paraguai</span></h1>
                                      </div>
                                  </div>
                              </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class="medium-6 cell" id="container-map">
                      <object data="/static/map.svg" type="image/svg+xml" id="map"></object>
                    <!-- <img src="@/assets/img/focem-auto/auto-map--dinamico.png" alt=""> -->
                  </div>
                </div>
              </div>
            </div>
        </div>
        <div class="grid-container">
            <div class="grid-x grid-padding-x">
                <div class="cell">
                    <div class="tabs-section">
                        <div class="tab">
                            <input class="tab-radio" type="radio" id="tab-1" name="tab-group-1" checked>
                            <label class="tab-label" for="tab-1">TIMELINE</label>
                            <div class="tab-panel">
                                <div class="tab-content">
                                    <div class="timeline__slideshow">
                                        <!-- <div class="pagination__slide">
                                                <div class="item is-active">
                                                <span class="icon">2015</span>
                                            </div>
                                                <div class="item">
                                                <span class="icon">2014</span>
                                            </div>
                                                <div class="item">
                                                <span class="icon">2013</span>
                                            </div>
                                        </div> -->
                                        <div class="timeline__slides">
                                            <div class="timeline__slide is-active">
                                                <div class="timeline__slide_img">
                                                    <img src="@/assets/img/pg/timeline/ilustracao.png" alt="">
                                                </div>
                                            <div class="timeline__slide_content">
                                                <div class="timeline__slide_content__title"></div>
                                                    <div class="timeline__slide_content__text">
                                                    <p> 1 Seleção com base em critérios de inserção na cadeia, faturamento bruto anual e presença na região de abrangência do projeto.</p>
                                                    <p>Executores: Dinamus Consultoria </p>
                                                    </div>
                                            </div>
                                            </div>
                                            <div class="timeline__slide">
                                            <div class="timeline__slide_img">
                                                <img src="@/assets/img/pg/timeline/ilustracao.png" alt="">
                                            </div>
                                            <div class="timeline__slide_content">
                                                <div class="timeline__slide_content__title"></div>
                                                <div class="timeline__slide_content__text">
                                                <p>2 Seleção com base em critérios de inserção na cadeia, faturamento bruto anual e presença na região de abrangência do projeto.</p>
                                                <p>Executores: Dinamus Consultoria </p>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="pagination__slide">
                                            <div class="item is-active">
                                                <h1>2015</h1>
                                                <h3>Estudo de mercado </h3>
                                                <p>(maio a outubro/2014)</p>
                                            </div>
                                            <div class="item">
                                                <h1>2014</h1>
                                                <h3>Estudo de mercado </h3>
                                                <p>(maio a outubro/2014)</p>
                                            </div>
                                        </div>
                                        <div class="arrows">
                                            <div class="arrow prev">
                                                <span class="svg svg-arrow-left">
                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="25px" height="36px" viewBox="0 0 14 26" enable-background="new 0 0 25 36" xml:space="preserve"> <path d="M13,26c-0.256,0-0.512-0.098-0.707-0.293l-12-12c-0.391-0.391-0.391-1.023,0-1.414l12-12c0.391-0.391,1.023-0.391,1.414,0s0.391,1.023,0,1.414L2.414,13l11.293,11.293c0.391,0.391,0.391,1.023,0,1.414C13.512,25.902,13.256,26,13,26z"/> </svg>
                                                    <span class="alt sr-only"></span>
                                                </span>
                                            </div>
                                            <div class="arrow next">
                                                <span class="svg svg-arrow-right">
                                                    <svg version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="25px" height="36px" viewBox="0 0 14 26" enable-background="new 0 0 25 36" xml:space="preserve"> <path d="M1,0c0.256,0,0.512,0.098,0.707,0.293l12,12c0.391,0.391,0.391,1.023,0,1.414l-12,12c-0.391,0.391-1.023,0.391-1.414,0s-0.391-1.023,0-1.414L11.586,13L0.293,1.707c-0.391-0.391-0.391-1.023,0-1.414C0.488,0.098,0.744,0,1,0z"/> </svg>
                                                    <span class="alt sr-only"></span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab">
                            <input class="tab-radio" type="radio" id="tab-2" name="tab-group-1">
                            <label class="tab-label" for="tab-2">PARCEIROS</label>
                            <div class="tab-panel">
                                <div class="tab-content">
                                    <partners :list="partners"/>
                                </div>
                            </div>
                        </div>
                        <div class="tab">
                            <input class="tab-radio" type="radio" id="tab-3" name="tab-group-1">
                            <label class="tab-label" for="tab-3">RESULTADOS</label>
                            <div class="tab-panel">
                                <results-auto/>
                            </div>
                        </div>
                        <div class="tab" @click=" tabSelected = 'gallery' ">
                            <input class="tab-radio" type="radio" id="tab-4" name="tab-group-1">
                            <label class="tab-label" for="tab-4" >GALERIA</label>
                                <div class="tab-panel">
                                    <div class="tab-content">
                                        <gallery :images="gallery" v-if="tabSelected.includes('gallery')"/>
                                    </div>
                                </div>
                        </div>
                        <div class="tab">
                            <input class="tab-radio" type="radio" id="tab-5" name="tab-group-1">
                            <label class="tab-label" for="tab-5">DOWNLOADS</label>
                            <div class="tab-panel">
                                <div class="tab-content">
                                    <h2> Central de Downloads </h2>
                                    <hr/>
                                    <downloads :list="downloads"/>
                                </div>
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
import AboutComponents from '@/layout/components/About'
import components from '@/layout/components'
import api from '@/api/pt_br'

export default {
  components: {
    ...AboutComponents,
    components
  },
  data: (app) => ({
    downloads: _.cloneDeep(api.auto.downloads),
    partners: _.cloneDeep(api.auto.partners),
    gallery: _.cloneDeep(api.auto.gallery),
    tabSelected: 'timeline',
    classCoutrySelected: ''
  }),
  mounted() {
    this.renderMap();
    
    this.scrollDetect();
  },
  watch: {
    classCoutrySelected(val) {
      if(val) this.mapIlluminate(val, this.svgElements)
    }
  },
  methods: {
    mapIlluminate(elClass, elements) {

      // let elClass = this.classCoutrySelected

      if(!elClass) return;

      var addColor = function(el, color, time) {
        setTimeout(() => {
            $(el).css({
            fill: color
          })
        }, time)
      }

      // _.debounce(function() {
        $(`:not(path.${elClass})`, elements).each(function (i) {
          addColor(this, '#0078b1', i/20)
        })
        $(`path.${elClass}`, elements).each(function (i) {
          addColor(this, 'white', i/20)
        })
      // }, 20);

      // $(`path.${elClass}`, elements).each(function (i) {
      //   addColor(this, 'white', i/20)
      //   // setTimeout(() => {
      //     //   $(this).css({
      //     //   fill: 'white'
      //     // })
      //   // }, i)
      // })

      
    },
    shuffleElements($elements) {
      // let $elements = $(this.svgElements)
      var i, index1, index2, temp_val;

      var count = $elements.length;
      var $parent = $elements.parent();
      var shuffled_array = [];


      // populate array of indexes
      for (i = 0; i < count; i++) {
        shuffled_array.push(i);
      }

      // shuffle indexes
      for (i = 0; i < count; i++) {
        index1 = (Math.random() * count) | 0;
        index2 = (Math.random() * count) | 0;

        temp_val = shuffled_array[index1];
        shuffled_array[index1] = shuffled_array[index2];
        shuffled_array[index2] = temp_val;
      }

      // apply random order to elements
      $elements.detach();
      for (i = 0; i < count; i++) {
        $parent.append( $elements.eq(shuffled_array[i]) );
      }
    },
    renderMap() {
      let self = this
      let map = document.querySelector('#map')
        map.addEventListener('load', function() {

        var svgDoc = map.contentDocument;
        self.svgElements = svgDoc.getElementsByTagName('g')

        self.shuffleElements($(svgDoc.querySelectorAll('g[role="menuitem"]')))
        let svgWidth = svgDoc.getElementsByTagName('svg')[0].getBBox().width;

        $('svg', svgDoc).attr('width',  $('#container-map').width());
        $('svg', svgDoc).attr('height', $('#container-map').height());
        
        let proportionContainerSvg = svgWidth/$('#container-map').width()

        $('svg', svgDoc).children('g').attr('transform', `translate(0, -80) scale(${proportionContainerSvg})`)
        
        var paths = svgDoc.getElementsByTagName('path');
          $(paths).each(function () {
            $(this).hover( function() {
                self.mapIlluminate($(this).attr('class'), svgDoc)
              })
          }, false);

      })
    },

    scrollDetect() {
        $.fn.isOnScreen = function(){
            
            var win = $(window);
            
            var viewport = {
                top : win.scrollTop() - 400,
                left : win.scrollLeft()
            };
            viewport.right = viewport.left + win.width();
            viewport.bottom = viewport.top + win.height();
            
            var bounds = this.offset();
            bounds.right = bounds.left + this.outerWidth();
            bounds.bottom = bounds.top + this.outerHeight();
            
            return (!(viewport.right < bounds.left || viewport.left > bounds.right || viewport.bottom < bounds.top || viewport.top > bounds.bottom));
            
        };
        
        $(window).on('scroll', function(){
          if($('.maps').isOnScreen()){
            $('#menu').addClass('menu-blue');
          };
        });
    }
  }
}




</script>
<style lang="scss">
  #map {
    path {
      fill: red
    }
  }
</style>

