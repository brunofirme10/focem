<template>
<div>
    <cover img="auto/focem/cover-header.jpg"/>
    <section id="focem" class="interna focem-auto" >
        <div class="grid-container full">
            <div class="grid-x">
                <div class="cell small-2">
                    <div class="link">
                        <p href=""> Saiba como funciona o programa >></p>
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
                        <a class="action" @click.prevent="goWithScroll('#about-details')">
                            <svg class="arrow-down">
                                <text x="-26" y="-10" class="text">EXPLORAR</text>
                                <path class="a1" d="M0 0 L15 16 L30 0"></path>
                                <path class="a2" d="M0 10 L15 26 L30 10"></path>
                                <path class="a3" d="M0 20 L15 36 L30 20"></path>
                            </svg>
                        </a>
                </div>
            </div>
        </div>
        <div class="choose-section space blue-stage" id="about-details">
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
                                        <div class="grid-x">
                                            <div class="cell">
                                                <div class="grid-x">
                                                    <div class="large-5 cell">
                                                        <div class="infographic country-select" data-location="BR">
                                                            <div class="infographic__score">
                                                                <h1>
                                                                    <span class="score">44</span>
                                                                    <span class="country">BRASIL</span>
                                                                </h1>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="large-5 cell">
                                                        <div class="infographic country-select" data-location="UY">
                                                            <div class="infographic__score">
                                                                <h1>
                                                                    <span class="score">10</span>
                                                                    <span class="country">Uruguai</span>
                                                                </h1>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cell">
                                                <div class="grid-x align-right">
                                                    <div class="large-5 cell">
                                                        <div class="infographic country-select" data-location="ARG">
                                                            <div class="infographic__score">
                                                                <h1>
                                                                    <span class="score">24</span>
                                                                    <span class="country">Argentina</span>
                                                                </h1>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="large-5 cell">
                                                        <div class="infographic country-select" data-location="PAR">
                                                            <div class="infographic__score">
                                                                <h1>
                                                                    <span class="score">10</span>
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
        <div class="grid-container">
            <div class="grid-x grid-padding-x">
                <div class="cell">
                    <div class="tabs-section">
                        <div class="tab">
                          <input class="tab-radio" type="radio" id="tab-1" name="tab-group-1" checked>
                          <label class="tab-label" for="tab-1">TIMELINE</label>
                            <div class="tab-panel">
                                <div class="tab-content">
                                    <div class="timeline__slideshow timeline_two">
                                        <div class="timeline__slides">
                                            <div class="timeline__slide is-active">
                                                <div class="timeline__slide_img">
                                                    <img src="@/assets/img/pg/timeline/ilustracao.png" alt="">
                                                </div>
                                                <div class="timeline__slide_content">
                                                    <div class="timeline__slide_content__title"></div>
                                                        <div class="timeline__slide_content__text">
                                                            <div class="grid-container">
                                                                <div class="grid-x grid-padding-x small-up-2 medium-up-5 large-up-5">
                                                                    <div class="cell">
                                                                        <figure><img src="@/assets/img/focem-auto/timeline/icon-selecao-empresas-beneficiarias.png"></figure>
                                                                        <h5>Seleção das empresas beneficiárias</h5>
                                                                        <p>Seleção com base em critérios de inserção na cadeia, faturamento bruto anual e presença na região de abrangência do projeto.</p>
                                                                        <p> <strong>Executores:</strong> ABDI Comitês Consultivos Locais </p>
                                                                    </div>
                                                                    <div class="cell">
                                                                        <figure><img src="@/assets/img/focem-auto/timeline/icon-manual-fornecimento.png"></figure>
                                                                        <h5>Manual de fornecimento (setembro/13)</h5>
                                                                        <p>Levantamento das exigências básicas para o fornecimento de partes e peças exigidas por sistemistas e montadoras.</p>
                                                                        <p><strong>Executores:</strong> Produttare </p>
                                                                    </div>
                                                                    <div class="cell">
                                                                        <figure><img src="@/assets/img/focem-auto/timeline/icon-capacitacao-quadro.png"></figure>
                                                                        <h5>Capacitações do quadro técnico  (setembro/2013)</h5>
                                                                        <p>Levantamento das exigências básicas para o fornecimento de partes e peças exigidas por sistemistas e montadoras. Executores: Produttare</p>
                                                                        <p><strong>Executores:</strong> Produttare Local: Porto Alegre - RS</p>
                                                                    </div>
                                                                    <div class="cell">
                                                                        <figure><img src="@/assets/img/focem-auto/timeline/icon-estudo-setorial.png"></figure>
                                                                        <h5>Estudo setorial (novembro/13)</h5>
                                                                        <p>Levantamento do cenário e das tendências da indústria automobilística e dos fatores que influenciam a competitividade das empresas atendidas pelo projeto. Realizado por: Produttare</p>
                                                                    </div>
                                                                    <div class="cell">
                                                                        <figure><img src="@/assets/img/focem-auto/timeline/icon-extensionismo.png"></figure>
                                                                        <h5>Extensionismo gerencial e tecnológico - 80h por empresa (início: julho de 2013 fim: setembro de 2014)</h5>
                                                                        <p>Serviço de consultoria individualizada às empresas com o objetivo de aportar as mais modernas tecnologias de produção e gestão às empresas beneficiárias.</p>
                                                                        <p><strong>Executor Brasil (Rio Grande do Sul e São Paulo):</strong> Instituto de Competências Gerenciais (ICE)<br> <strong>Executor</strong> Argentina, Paraguai e Uruguai Consórcio Engenho/ABECEB Brasil e Argentina</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="timeline__slide">
                                                <div class="timeline__slide_img">
                                                    <img src="@/assets/img/pg/timeline/ilustracao.png" alt="">
                                                </div>
                                                <div class="timeline__slide_content">
                                                    <div class="timeline__slide_content__title"></div>
                                                        <div class="timeline__slide_content__text p-sm">
                                                            <div class="grid-container">
                                                                <div class="grid-x grid-padding-x">
                                                                    <div class="large-4 cell align-center text-center">
                                                                        <figure class="text-center">
                                                                            <img src="@/assets/img/focem-auto/timeline/icon-manual-fornecimento.png">
                                                                        </figure>
                                                                        <h5>Seminário de boas práticas (maio/2014)</h5>
                                                                        <p>Difusão de conhecimento aos representantes das empresas participantes nos temas de Gestão Empresarial, Qualidade, Formação Profissional e Metrologia e Normatização.</p>
                                                                        <div class="grid-x grid-padding-x small-up-2 medium-up-2 large-up-2">
                                                                            <div class="cell">
                                                                                <p class="title"><strong>Gestão Empresarial</strong></p>
                                                                                <p><strong>Executor: </strong>Instituto de Competências Empresariais (ICE)</p>
                                                                                <p><strong>Local: </strong>Montevidéu - UY</p>
                                                                                <p><strong>Participantes: </strong>88 empresários</p>

                                                                                <p class="title"><strong>Qualidade</strong></p>
                                                                                <p><strong>Executor: </strong> Instituto de Competências Empresariais (ICE)</p>
                                                                                <p><strong>Local: </strong>Montevidéu - UY</p>
                                                                                <p><strong>Participantes: </strong>88 empresários</p>
                                                                            </div>
                                                                            <div class="cell">
                                                                                <p class="title"><strong>Gestão Empresarial</strong></p>
                                                                                <p><strong>Executor: </strong>Instituto de Competências Empresariais (ICE)</p>
                                                                                <p><strong>Local: </strong>Montevidéu - UY</p>
                                                                                <p><strong>Participantes: </strong>88 empresários</p>

                                                                                <p class="title"><strong>Gestão Empresarial</strong></p>
                                                                                <p><strong>Executor: </strong>Instituto de Competências Empresariais (ICE)</p>
                                                                                <p><strong>Local: </strong>Montevidéu - UY</p>
                                                                                <p><strong>Participantes: </strong>88 empresários</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="large-3 cell">
                                                                        <figure><img src="@/assets/img/focem-auto/timeline/icon-capacitacao-quadro.png"></figure>
                                                                        <h5>Rodadas de negócios (agosto/2014)</h5>
                                                                        <p>Estímulo ao contato entre pequenas empresas fornecedoras e médios e grandes compradores de autopeças, componentes e sistemas da cadeia automotiva</p>
                                                                        <p class="m-t-1"><strong>Empresas compradoras:</strong> GM, Marcopolo, Agrale, Foton, Brunning, Nexteer, Magna Cosma, Cherry (Uruguai)</p>
                                                                        <p><strong>Local:</strong> Porto Alegre - RS</p>
                                                                        <p><strong>Executor/apoio:</strong> Sebrae/RS</p>
                                                                    </div>
                                                                    <div class="large-3 cell">
                                                                        <figure><img src="@/assets/img/focem-auto/timeline/icon-estudo-setorial.png"></figure>
                                                                        <h5>Seminário de inovação (agosto/2014)</h5>
                                                                        <p>O seminário abordou o tema de inovação e o encadeamento do desenvolvimento de novos produtos partindo das montadoras e sistemistas para o fabricante de autopeças.</p>
                                                                        <p></p>
                                                                        <p class="title"><strong>Palestrantes</strong></p>
                                                                        <p><strong>Montadora: </strong>Fiat Chrysler - Sr. José Francisco Romero</p>
                                                                        <p><strong>Sistemista/empresa inovadora: </strong> Aethra Sistemas Automotivos S.A. - Sr. Marley de Souza Lemos</p>
                                                                        <p><strong>Universidades/centro de pesquisa e inovação: </strong>UFSC - Universidade Federal de Santa Catarina - Sr. Neri dos Santos</p>
                                                                        <p><strong>Local: </strong>Porto Alegre - RSs</p>
                                                                    </div>
                                                                    <div class="large-2 cell">
                                                                        <figure><img src="@/assets/img/focem-auto/timeline/icon-extensionismo.png"></figure>
                                                                        <h5>Gestão da inovação (outubro/2014)</h5>
                                                                        <p>Capacitação de proprietários e/ou diretores das empresas beneficiárias na gestão de projetos de inovação nas indústrias do setor de autopeças.</p>
                                                                        <p><strong>Executor:</strong> Instituto Nacional de Empreendedorismo e Inovação (INEI)</p>
                                                                        <p><strong>Local:</strong> Santo André - SP</p>
                                                                    </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <div class="timeline__slide">
                                            <div class="timeline__slide_img">
                                                <!-- <img src="@/assets/img/pg/timeline/ilustracao.png" alt=""> -->
                                            </div>
                                            <div class="timeline__slide_content">
                                                <div class="timeline__slide_content__title"></div>
                                                    <div class="timeline__slide_content__text m-t-2">
                                                        <div class="grid-x grid-padding-x small-up-1 medium-up-4 large-up-4">
                                                            <div class="cell">
                                                                <h5>Especialização Tecnológica - Workshop de indústria de 4.0</h5>
                                                                <p>Sensibilizar e capacitar, difundindo os conceitos fundamentais e o uso da tecnologia da indústria 4.0.</p>
                                                            </div>
                                                            <div class="cell">
                                                                <h5>Rodada de negócios II</h5>
                                                                <p>Criar ambiente favorável à promoção de negócios e parcerias entre compradores e fornecedores.</p>
                                                            </div>
                                                            <div class="cell">
                                                                <h5>Rodada Tecnológica - Conexão com startups</h5>
                                                                <p>Desenvolver startups e indústrias por meio do codesenvolvimento das soluções tecnológicas</p>
                                                            </div>
                                                            <div class="cell">
                                                                <h5>Seminário de encerramento</h5>
                                                                <p>Celebrar os resultados, melhorar a visibilidade para as empresas atendidas e parceiros envolvidos e abrir espaço para discussões futuras.</p>
                                                            </div>
                                                        </div>
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
                                            <h1>2013</h1>
                                        </div>
                                        <div class="item">
                                            <h1>2014</h1>
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
                        <results-auto/>
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
import components from '@/layout/components'
import api from '@/api/pt_br'
import OnScreen from 'onscreen';
const os = new OnScreen();

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
    // this.renderMap();
    this.scrollDetect();
    this.renderTimeline();
  },
  watch: {
    classCoutrySelected(val) {
      if(val) this.mapIlluminate(val, this.svgElements)
    }
  },
  methods: {
    goWithScroll(el) {
      TweenMax.to(window, 1, {
        ease: Power4.easeOut,
        scrollTo: { y: el }
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
        
        $(el).find('h1 ').addClass('active').css({
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
    scrollDetect() {
        var osScreen =  new OnScreen({
          tolerance: 200,
          debounce: 100,
          container: window
        });
        osScreen.on('enter', '.blue-stage',  (element, event) => {
            $('#menu').addClass('menu-white');
        });
        osScreen.on('leave', '.blue-stage',  (element, event) => {
            $('#menu').removeClass('menu-white');
        });
    }
  }
}




</script>
<style lang="scss" scoped>
</style>

