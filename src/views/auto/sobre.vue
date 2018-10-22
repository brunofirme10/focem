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
                                  <h1>34<span data-location="BR" class="country-select">BRASIL</span></h1>
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
                                <div class="grid-x grid-padding-x" style="height: 100%">
                                    <div class="medium-3 cell">
                                        <div class="infographic">
                                            <div class="infographic__score ">
                                            <h1><span data-location="UY" class="country-select">Uruguai</span></h1>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="medium-3 cell">
                                        <div class="grid-y grid-padding-y">
                                            <div class="cell medium-3">
                                                <div class="infographic" >
                                                    <div class="infographic__score">
                                                        <h1><span data-location="ARG" class="country-select">Argentina</span></h1>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <div class="medium-3 cell">
                                    <div class="infographic" >
                                        <div class="infographic__score">
                                            <h1><span data-location="PAR" class="country-select">Paraguai</span></h1>
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
                      <object data="/static/map.svg" type="image/svg+xml" id="map" @load="mapLoaded"></object>
                    <!-- <img src="@/assets/img/focem-auto/auto-map--dinamico.png" alt=""> -->
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
                                  <div class="timeline__slide">
                                    <div class="timeline__slide_img">
                                      <img src="@/assets/img/pg/timeline/ilustracao.png" alt="">
                                    </div>
                                    <div class="timeline__slide_content">
                                      <div class="timeline__slide_content__title"></div>
                                      <div class="timeline__slide_content__text">
                                        <p>3 Seleção com base em critérios de inserção na cadeia, faturamento bruto anual e presença na região de abrangência do projeto.</p>
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
                                        <p>4 Seleção com base em critérios de inserção na cadeia, faturamento bruto anual e presença na região de abrangência do projeto.</p>
                                        <p>Executores: Dinamus Consultoria </p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="pagination__slide">
                                  <div class="item is-active">
                                      <h1>2015</h1>
                                      <h3>Estudo de mercado </h3>
                                      <p>(maio a outubro/2015)</p>
                                  </div>
                                  <div class="item">
                                      <h1>2016</h1>
                                      <h3>Estudo de mercado </h3>
                                      <p>(maio a outubro/20201614)</p>
                                  </div>
                                  <div class="item">
                                      <h1>2017</h1>
                                      <h3>Estudo de mercado </h3>
                                      <p>(maio a outubro/2017)</p>
                                  </div>
                                  <div class="item">
                                      <h1>2018</h1>
                                      <h3>Estudo de mercado </h3>
                                      <p>(maio a outubro/2018)</p>
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
                                <div class="tab-content">
                                    <div class="grid-container full">
                                        <div class="results-auto">
                                            <h6>IMPORTANTES RESULTADOS FORAM CONQUISTADOS:</h6>
                                            <div class="grid-x grid-padding-x grid-padding-y align-center text-center">
                                                <div class="cell small-6">
                                                    <div class="grid-x grid-padding-x grid-padding-y align-center text-center">
                                                        <div class="cell small-6">
                                                            <h1>46,14%</h1>
                                                            <p>DE AUMENTO DE PRODUTIVIDADE</p>
                                                        </div>
                                                        <div class="cell small-4">
                                                            <img src="@/assets/img/focem-auto/icon/resultados-seta.png" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                               <div class="cell small-6">
                                                    <div class="grid-x grid-padding-x grid-padding-y align-center text-center">
                                                        <div class="cell small-6">
                                                            <h1>51%</h1>
                                                            <p>DE PREPARAÇÃO DA MÁQUINA PARA CORRETA PRODUÇÃO</p>
                                                        </div>
                                                        <div class="cell small-4">
                                                            <img src="@/assets/img/focem-auto/icon/resultados-seta.png" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grid-x grid-padding-x grid-padding-y align-center text-center">
                                                <div class="cell small-6">
                                                    <div class="grid-x grid-padding-x grid-padding-y align-center text-center">
                                                        <div class="cell small-6">
                                                            <h1>87%</h1>
                                                            <p>DE REDUÇÃO NAS ENTREGAS</p>
                                                        </div>
                                                        <div class="cell small-4">
                                                            <img src="@/assets/img/focem-auto/icon/resultados-entrega.png" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="cell small-6">
                                                    <div class="grid-x grid-padding-x grid-padding-y align-center text-center">
                                                        <div class="cell small-6">
                                                            <h1>30,13%</h1>
                                                            <p>DE AUMENTO NA EFICIÊNCIA DE EQUIPAMENTOS</p>
                                                        </div>
                                                        <div class="cell small-4">
                                                            <img src="@/assets/img/focem-auto/icon/resultados-eng.png" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grid-x grid-padding-x grid-padding-y align-center text-center">
                                                <div class="cell small-2">
                                                    <img src="@/assets/img/focem-auto/icon/resultados-prod.png" alt="">
                                                </div >
                                                <div class="cell small-2">
                                                    <h1>76%</h1>
                                                </div>
                                                <div class="cell small-2">
                                                    <p>DE REDUÇÃO NO TEMPO DE INÍCIO E CONCLUSÃO DAS ATIVIDADES</p>
                                                </div>
                                                <div class="cell small-2">
                                                    <img src="@/assets/img/focem-auto/icon/resultados-entrega-rapida.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
    this.renderTimeline()
  },
  methods: {
    mapLoaded() {
        let self = this
        const map = document.querySelector('#map')
        var svgDoc = map.contentDocument;
        const mapElements = $(svgDoc.getElementsByTagName('g'))

        this.adjustSizeMap(svgDoc)

        // this.shuffleElements($(svgDoc.querySelectorAll('g[role="menuitem"]')))

        $('.country-select').each(function () {
            $(this).hover( function() {
                self.mapIlluminate($(this).data('location'), svgDoc)
            })
        });

        var paths = svgDoc.getElementsByTagName('path');
          $(paths).each(function () {
            $(this).hover( function() {
                self.mapIlluminate($(this).attr('class'), svgDoc)
              })
            });
    },
    adjustSizeMap(svgDoc) {

        let svgWidth = svgDoc.getElementsByTagName('svg')[0].getBBox().width;

        $('svg', svgDoc).attr('width',  $('#container-map').width());
        $('svg', svgDoc).attr('height', $('#container-map').height());

        let proportionContainerSvg = svgWidth/$('#container-map').width()

        $('svg', svgDoc).children('g').attr('transform', `translate(0, -80) scale(${proportionContainerSvg})`)
    },
    mapIlluminate(elClass, elements) {
        if(!elClass) return;

        $(`:not(path.${elClass})`, elements).each(function (i) {
            TweenMax.to(this, .5, { fill: '#0078b1' });
        })

        $(`path.${elClass}`, elements).each(function (i) {
            TweenMax.to(this, .5, { fill: 'white' });
        })
    },
    shuffleElements($elements) {
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
    renderTimeline() {
        (function($) {
          //SLIDESHOW
          function slideshowSwitch(slideshow,index,auto, paginationItem){
              var scaleDefault = .5;
              var slides = slideshow.find('.timeline__slide');
              var activeSlide = slides.filter('.is-active');

              TweenMax.to(activeSlide, .4, {alpha: 0, onComplete: function(){
                activeSlide.removeClass('is-active');
                TweenMax.set(activeSlide, { alpha: 0,  display:'hide'});
              }});

              var newSlide = slides.eq(index);
              TweenMax.set(newSlide, { alpha: 0,  display:'block'});

              TweenMax.to(newSlide, .4, {alpha: 1});
              newSlide.addClass('is-active');

              /* PAGINATION */
              if( paginationItem.nextPagination ){
                TweenMax.set(paginationItem.nextPagination, { scale: scaleDefault });
                TweenMax.set(paginationItem.activePaginationItem, { opacity: 1, x:0  });
                TweenMax.to( paginationItem.activePaginationItem, .3, { opacity: 0, scale: scaleDefault } );

                // Item ativo de paginacao
                paginationItem.activePaginationItem.removeClass('is-active is-disable').addClass('is-off');

                TweenMax.to(paginationItem.nextPagination, .4, {scale: 1, left: 0 , onComplete: function(){
                  paginationItem.nextPagination.removeClass('is-disable').addClass('is-active');
                  calcPosition();
                }});
              }
              if(paginationItem.prevPagination){
                paginationItem.prevPagination.removeClass('is-off is-disable-text is-disable-first').addClass('is-active');
                paginationItem.activePaginationItem.removeClass('is-active');
                calcPosition();
                TweenMax.to( paginationItem.activePaginationItem, .3, { scale: scaleDefault } );
                TweenMax.set(paginationItem.prevPagination, { scale: 1, opacity:1 });
              }
          }
          function calcPosition(){
            $('.pagination__slide .item:not(.is-off)').each(function(index, item) {
                var distance = ((220) * index);
                TweenMax.to( item, .3, { css: {'left' : distance } } );
              });
              disablePositionItem();
          }
          function disablePositionItem(){
            $('.pagination__slide .item:not(.is-active, .is-off)').each(function(index, item){
              $(item).removeClass('is-disable-text is-disable-first').addClass('is-disable');
              if(index == 0){ $(item).addClass('is-disable-first'); }
              if(index == 1){ $(item).addClass('is-disable-text'); }
            })
          }
          function disableNextPrevButton(pagination){
              if(!pagination.prev('.item').length ){ $('.arrow.prev').addClass('disable'); }else {$('.arrow.prev').removeClass('disable'); }
              if( !pagination.next('.item').length ){ $('.arrow.next').addClass('disable'); }else { $('.arrow.next').removeClass('disable'); }
          }
            function slideshowNext(slideshow,previous,auto){

              var slides = slideshow.find('.timeline__slide');
              var activeSlide =slides.filter('.is-active');
              var newSlide = null;

              var paginationItem = null;
              var paginations = slideshow.find('.pagination__slide .item');

              var activePaginationItem = paginations.filter('.is-active');
              const pagination  = {
                  nextPagination: null,
                  prevPagination: null,
                  activePaginationItem: paginations.filter('.is-active'),
              };

              if(previous){
                newSlide = activeSlide.prev('.timeline__slide');
                if(newSlide.length === 0) return;

                  // newSlide=slides.last();
                // }
                pagination.prevPagination = pagination.activePaginationItem.prev('.item');
                if(pagination.prevPagination.length==0)
                  return;

                disableNextPrevButton(pagination.prevPagination);

              } else {
                newSlide=activeSlide.next('.timeline__slide');
                if(newSlide.length==0)
                  return;
                  // newSlide=slides.filter('.timeline__slide').first();

                pagination.nextPagination = pagination.activePaginationItem.next('.item');
                if(pagination.nextPagination.length==0)
                  return;
                  // pagination.nextPagination=paginations.filter('.paginations').first();
                disableNextPrevButton(pagination.nextPagination);
              }
              slideshowSwitch(slideshow, newSlide.index(), auto, pagination );
            }
            $('.timeline__slideshow .arrows .arrow').on('click',function(){
              slideshowNext($(this).closest('.timeline__slideshow'), $(this).hasClass('prev'));
            });
            calcPosition();

          })(window.jQuery);
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

