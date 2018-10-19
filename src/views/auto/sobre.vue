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
            <div class="grid-container full">
                <div class="grid-x">
                    <div class="cell text-center">
                            <div class="choose-section">
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
                                    conteudo do elemento
                                    conteudo do elemento
                                    conteudo do elemento
                                    conteudo do elemento
                                    conteudo do elemento
                                    conteudo do elemento
                                    conteudo do elemento
                                    conteudo do elemento
                                    conteudo do elemento
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
                                        <div class="results">
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
                        <div class="tab">
                            <input class="tab-radio" type="radio" id="tab-4" name="tab-group-1">
                            <label class="tab-label" for="tab-4">GALERIA</label>
                            <div class="tab-panel">
                                <div class="tab-content">
                                    conteudo do elemento 4
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
import api from '@/api/pt_br'
export default {
  components: {
    ...AboutComponents
  },
  data: (app) => ({
    downloads: _.cloneDeep(api.pg.downloads),
    partners: _.cloneDeep(api.pg.partners),
    gallery: _.cloneDeep(api.pg.gallery),
    tabSelected: 'timeline'
  }),
  mounted() {
      this.renderTabs()
  },
  methods: {
    renderTabs() {
      (function($) {
        $('.tabs input[type="radio"]:checked').closest('.tab').addClass('checked');

        $('section').on('click', '.tabs input', function() {
            $('input[name="' + this.name + '"]')
            .closest('.tab')
            .removeClass('checked');
            $(this)
            .closest('.tab')
            .addClass('checked');
          });
          //SLIDESHOW
        function slideshowSwitch(slideshow,index,auto, paginationItem){
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

            TweenMax.set(paginationItem, { scale: .7 });
             TweenMax.to(paginationItem, .4, {scale: 1, x: 0 , onComplete: function(){
              paginationItem.removeClass('is-active');
              // TweenMax.set(paginationItem, { alpha: 0,  display:'hide'});
            }});
            // if(newSlide.is(activeSlide))return;

        }

          function slideshowNext(slideshow,previous,auto){
            var slides= slideshow.find('.timeline__slide');
            var activeSlide=slides.filter('.is-active');
            var newSlide=null;

            var paginationItem = null;
            var paginations = slideshow.find('.pagination__slide .item');
            var activePaginationItem = paginations.filter('.is-active');

            if(previous){
              newSlide = activeSlide.prev('.timeline__slide');
              if(newSlide.length === 0) {
                newSlide=slides.last();
              }
            } else {
              newSlide=activeSlide.next('.timeline__slide');
              if(newSlide.length==0)
                newSlide=slides.filter('.timeline__slide').first();

              paginationItem = activePaginationItem.next('.item');
              if(paginationItem.length==0)
                paginationItem=paginations.filter('.paginations').first();
            }
            slideshowSwitch(slideshow, newSlide.index(), auto, paginationItem );
          }
          $('.timeline__slideshow .arrows .arrow').on('click',function(){
            slideshowNext($(this).closest('.timeline__slideshow'), $(this).hasClass('prev'));
          });

        })(window.jQuery);
    }
  }
}
</script>

