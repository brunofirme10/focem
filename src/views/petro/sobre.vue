<template>
<div>
    <cover img="pg/cover-header.jpg"/>
    <section id="petro" class="interna">
      <div class="grid-container">
        <div class="grid-x grid-padding-x grid-padding-y align-center text-center">
            <div class="cell medium-9">
              <h1>FOCEM PETRÓLEO & GÁS</h1>
              <div class="grid-container">
                <div class="grid-x grid-padding-x align-center">
                  <div class="cell medium-6">
                    <h3>Fundo para Convergência Estrutural do Mercosul</h3>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <div class="grid-x grid-padding-x grid-padding-y align-center">
            <div class="cell medium-1">&nbsp;</div>
          <div class="cell medium-4">
              <div class="content__scrollable">
                  <p>O Projeto de Adensamento e Complementação Automotiva no âmbito do Mercosul (FOCEM Automotivo) é uma iniciativa executada pela ABDI, com recursos majoritariamente provenientes do FOCEM, que foi aprovada em 2010.</p>
                  <p>Finalidade: fortalecer a competitividade de PMEs - pequenas e médias empresas fornecedoras (ou potenciais fornecedoras) de bens e serviços para a cadeia produtiva, em especial a indústria de autopeças.</p>
                  <p>Como: por meio da extensão produtiva e tecnológica (melhoria de processos técnicos e gerenciais, produtos e infraestrutura) e abertura de mercado (realização de encontros comerciais/rodadas de negócio) e estímulo à inovação e desenvolvimento tecnológico.</p>
              </div>
          </div>
          <div class="cell medium-4">
            <img src="@/assets/img/refinaria.png" alt="">
          </div>
        </div>
      </div>
      <div class="grid-container full">
        <div class="grid-x">
          <div class="cell text-center">
            <a class="action" @click.prevent="goWithScroll('#about-details')">
                <svg class="arrow-down">
                    <text x="-26" y="-10" class="text">EXPLORAR</text>
                    <path class="a1" d="M0 0 L15 16 L30 0"></path>
                    <path class="a2" d="M0 10 L15 26 L30 10"></path>
                    <path class="a3" d="M0 20 L15 36 L30 20"></path>
                </svg>
            </a>
            <div class="choose-section space" id="about-details">
              <div class="grid-container">
                <div class="grid-x grid-padding-x">
                  <div class="medium-7 cell">
                    <div class="grid-y grid-padding-y">
                      <div class="medium-6 cell">
                        <div class="infographic">
                          <div class="infographic__data">
                            <h1 class="dot active">Público-alvo</h1>
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
                            <div class="cell large-5 infographic">
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
                            <div class="cell large-7">
                                <div class="grid-x grid-margin-x">
                                    <div class="cell">
                                        <div class="grid-x">
                                            <div class="large-5 cell">
                                                <div class="infographic country-select" data-location="BR">
                                                    <div class="infographic__score">
                                                        <h1>
                                                            <span class="score">34</span>
                                                            <span class="country">BRASIL</span>
                                                        </h1>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="large-5 cell">
                                                <div class="infographic country-select" data-location="UY">
                                                    <div class="infographic__score">
                                                        <h1>
                                                            <span class="score">23</span>
                                                            <span class="country">Uruguai</span>
                                                        </h1>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cell m-t-1">
                                        <div class="grid-x align-right">
                                            <div class="large-5 cell">
                                                <div class="infographic country-select" data-location="ARG">
                                                    <div class="infographic__score">
                                                        <h1>
                                                            <span class="score">34</span>
                                                            <span class="country">Argentina</span>
                                                        </h1>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="large-5 cell">
                                                <div class="infographic country-select" data-location="PAR">
                                                    <div class="infographic__score">
                                                        <h1>
                                                            <span class="score">8</span>
                                                            <span class="country">Paraguai</span>
                                                        </h1>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class="medium-5 cell" id="container-map">
                      <object data="/static/map.svg" type="image/svg+xml" id="map" @load="mapLoaded"></object>
                  </div>
                </div>
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
                      <div class="timeline__slides">
                        <div class="timeline__slide is-active">
                          	<div class="timeline__slide_img">
                            	<img src="@/assets/img/pg/timeline/ilustracao.png" alt="">
                          	</div>
                          	<div class="timeline__slide_content m-t-6">
                           	 	<div class="timeline__slide_content__title"></div>
                            		<div class="timeline__slide_content__text">
                             		 	<p>Elaboração de estudo de mercado internacional que contém: mapeamento da cadeia produtiva de petróleo e gás dos estados parte do Mercosul, ambiente e oportunidades de negócios, demandas e políticas de compras das empresas-âncoras, famílias de itens com baixa e/ou média competitividade e outros adquiridos fora da zona do Mercosul e identificação de empresas fornecedoras e potenciais fornecedoras em cada estado parte, bem como análise da concorrência.</p>
                              			<p>Executores: Dinamus Consultoria </p>
                            		</div>
                          		</div>
							</div>
                        	<div class="timeline__slide">
                          	<div class="timeline__slide_img">
                            	<img src="@/assets/img/pg/timeline/ilustracao.png" alt="">
                          	</div>
                          	<div class="timeline__slide_content m-t-5">
                            	<div class="timeline__slide_content__title"></div>
                           	 		<div class="timeline__slide_content__text">
										<div class="grix-x small-up-12 medium-up-12 large-up-12 timeline__content__scroll">
											<div class="cell">
												<p class="dot"><strong>Seminário de sensibilização e difusão</strong> (fevereiro/2016)</p>
												<p>Captação do interesse e adesão de empresas fornecedoras dos quatro estados parte para participarem do projeto.</p>
												<p><strong>Executor</strong>: Dinamus Consultoria</p>
											</div>
											<div class="cell">
												<p class="dot"><strong>Seleção e lista final de empresas fornecedoras </strong> (março/2016)</p>
												<p>Seleção com base em critérios de inserção na cadeia, faturamento bruto anual e presença na região de abrangência do projeto.</p>
												<p><strong>Executores:</strong> ABDI/Comitês Consultivos Locais</p>
											</div>
											<div class="cell">
												<p class="dot"><strong>Diagnóstico das empresas fornecedoras </strong> (abril/2016)</p>
												<p>O diagnóstico abordou questões relacionadas às diferentes práticas de uma empresa, embasando uma análise de diferentes áreas da gestão. Além do resultado individual, foi realizado cruzamento entre os resultados obtidos pela empresa e a média das que participam do projeto, oferecendo não só uma visão interna, mas também um comparativo com empresas de tamanho similar. </p>
												<p><strong>Executor:</strong> Dinamus Consultoria </p>
											</div>
											<div class="cell">
												<p class="dot"><strong>Seminário de boas práticas</strong>(novembro/dezembro/2016)</p>
												<p>Capacitação em temas inerentes à gestão empresarial e negociações internacionais.</p>
												<p><strong>Executor:</strong> Dinamus Consultoria  </p>
											</div>
											<div class="cell">
												<p class="dot"><strong>Sessão de negócios</strong> (novembro/dezembro/2016) </p>
												<p>Promoção da integração entre as empresas e criação de um ambiente propício ao networking e à formação de parcerias e negócios.</p>
												<p><strong>Executor:</strong>  Dinamus Consultoria </p>
											</div>
											<div class="cell">
												<p class="dot"><strong>Planos de qualificação</strong> (novembro/dezembro/2016) </p>
												<p>Com base nos diagnósticos aplicados, as empresas foram avaliadas com nota de 1 a 5 em cada um dos itens examinados. As notas foram utilizadas para definir um conjunto de recomendações que compôs um plano de qualificação individual para cada companhia.</p>
												<p><strong>Executor:</strong>  Dinamus Consultoria </p>
											</div>
										</div>
                            		</div>
                          		</div>
                        	</div>
                        	<div class="timeline__slide">
                          	<div class="timeline__slide_img">
                            	<img src="@/assets/img/pg/timeline/ilustracao.png" alt="">
                          	</div>
                          	<div class="timeline__slide_content m-t-2">
                            	<div class="timeline__slide_content__title"></div>
                           	 		<div class="timeline__slide_content__text">
										<div class="grix-x small-up-12 medium-up-12 large-up-12 timeline__content__scroll">
											<div class="cell">
												<p class="dot"><strong>Visita à feira de relevância internacional do setor de P&G + trilha comercial</strong> </p>
												<p>Apoiar as atividades comerciais das empresas beneficiárias do projeto, por meio da otimização de sua participação em feiras do Setor de Petróleo e Gás.</p>
											</div>
											<div class="cell">
												<p class="dot"><strong>Rodada de negócios </strong></p>
												<p>Criar um ambiente favorável à promoção de negócios e parcerias entre as empresas-âncoras do Setor de Petróleo e Gás e as empresas fornecedoras participantes do projeto.</p>
											</div>
											<div class="cell">
												<p class="dot"><strong>Imersão tecnológica + rodada tecnológica - Local: Brasil</strong> </p>
												<p>Estimular a colaboração entre empresas e centros de PD&I que atuam na fronteira do conhecimento.</p>
											</div>
											<div class="cell">
												<p class="dot"><strong>Extensionismo industrial e tecnológico</strong> </p>
												<p>70h por empresa - Intervenção rápida na empresa, com ferramentas consolidadas nos conceitos do Lean (lean manufacturing e lean office) e customizadas para as companhias atendidas, com foco no aumento da produtividade e no aperfeiçoamento de processos de negócio da PMEs da cadeia produtiva de petróleo e gás do Mercosul.</p>
											</div>
											<div class="cell">
												<p class="dot"><strong>Imersão tecnológica + rodada tecnológica - Local: Argentina</strong></p>
												<p>Estimular a colaboração entre empresas e centros de PD&I que atuam na fronteira do conhecimento.</p>
											</div>
											<div class="cell">
												<p class="dot"><strong>Seminário de encerramento </strong></p>
												<p>Celebrar os resultados alcançados no projeto, dar visibilidade para as empresas atendidas e parceiros envolvidos, bem como abrir espaço para discussões futuras sobre a integração produtiva regional e a cadeia de petróleo e gás no Mercosul.</p>
											</div>
										</div>
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
							</div>
							<div class="item">
								<h1 class="sm">Próximas atividades</h1>
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
                      <results-petro/>
                  </div>
              </div>
              <div class="tab" @click=" tabSelected = 'gallery' ">
                <input class="tab-radio" type="radio" id="tab-4" name="tab-group-1">
                <label class="tab-label" for="tab-4" >GALERIA</label>
                <div class="tab-panel">
                  <div class="tab-content gallery-slider">
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
    goWithScroll(el) {
      TweenMax.to(window, 1, {
        ease: Power4.easeOut,
        scrollTo:{ y: el }
      });
    },
    mapLoaded() {
        let self = this

        const map = document.querySelector('#map')
        var svgDoc = map.contentDocument;
        const mapElements = $('g.main-country', svgDoc)
        this.ajustSizeMap(svgDoc)

        $('.country-select').each(function () {
            $(this).hover( function() {
                self.scoreEffectIn(this)
                self.mapIlluminate($(this).data('location'), mapElements)
            },
            function() {
                self.scoreEffectOut(this)
            })
        });

        $(mapElements).each(function () {
            
            $(this).hover(_.debounce(function(e) {
                if(self.classCoutrySelected == $(this).attr('id')) return;

                self.scoreEffectOut($(`[data-location='${self.classCoutrySelected}']`))
                self.scoreEffectIn($(`[data-location='${$(this).attr('id')}']`))
                self.mapIlluminate($(this).attr('id'), mapElements)
                self.classCoutrySelected = $(this).attr('id')
            }, 200))
        });
    },
    scoreEffectIn(el) {
		let self = this
		$('.infographic__score h1.active').each(function() {
			self.scoreEffectOut($(this).parents('.infographic__score'))
		});

        $(el).find('h1').addClass('active').css({
            cursor: 'pointer'
		});
		
        TweenMax.fromTo($(el).find('h1 span.score'), .5, { x: 30, opacity: 0, display: 'block' }, { x: 0, opacity: 1 });
    },
    scoreEffectOut(el) {
        // let el = this
        TweenMax.to($(el).find('h1 span.score'), .2, { x: 30, opacity: 0 , 
            onComplete: function() {
                $(el).find('h1').removeClass('active')
                TweenMax.set($(el).find('h1 span.score'), { clearProps: 'all' });
            }
        })
    },
    ajustSizeMap(svgDoc) {
        
        let svgWidth = svgDoc.getElementsByTagName('svg')[0].getBBox().width;

        $('svg', svgDoc).attr('width',  $('#container-map').width());
        $('svg', svgDoc).attr('height', $('#container-map').height() + 100);
        
        let proportionContainerSvg = svgWidth/$('#container-map').width()

        $('svg', svgDoc).children('g').attr('transform', `translate(0, -80) scale(${proportionContainerSvg})`)
    },
    mapIlluminate(id, elements) {
        if(!id) return;

        $(elements).find(`:not('#${id}') path`).each(function (i) {
            TweenMax.to(this, .5, { fill: '#0078b1' });
        })

        $(elements).find(`#${id} path`).each(function (i) {
            // TweenMax.to(this, .5, { fill: 'white', delay: i/1000 }); // WITH EFFECT
            TweenMax.to(this, .5, { fill: 'white' });
        })
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
                 setHeightActive();
              }});

              var newSlide = slides.eq(index);
              TweenMax.set(newSlide, { alpha: 0,  display:'block'});


              newSlide.addClass('is-active');
              TweenMax.to(newSlide, .4, {alpha: 1 });

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
                TweenMax.set(paginationItem.prevPagination, { scale: 1, opacity: 1 });
              }
          }
          function calcPosition(){
            $('.pagination__slide .item:not(.is-off)').each(function(index, item) {
                var distance = ((200) * index);
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
          function setHeightActive() {
              var contentTextHeight = $('.timeline__slide.is-active .timeline__slide_content__text').outerHeight();
              $('.timeline__slideshow').height(contentTextHeight +  150);
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
          setHeightActive();
      })(window.jQuery);
    },
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
