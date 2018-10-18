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
            <a class="action">
                <svg class="arrow-down">
                    <text x="-26" y="-10" class="text">EXPLORAR</text>
                    <path class="a1" d="M0 0 L15 16 L30 0"></path>
                    <path class="a2" d="M0 10 L15 26 L30 10"></path>
                    <path class="a3" d="M0 20 L15 36 L30 20"></path>
                </svg>
            </a>
            <div class="choose-section space">
              <div class="grid-container">
                <div class="grid-x grid-padding-x">
                    <div class="medium-5 cell">
                      <div class="infographic">
                        <div class="infographic__data">
                          <h1 class="dot">Público-alvo</h1>
                          <div class="grid-x">
                            <div class="small-9 cell">
                              <h2>99 empresas  que participam  deste projeto. </h2>
                            </div>
                            <div class="small-3 cell">
                              <img src="@/assets/img/pg/icon-empresa.png" alt="">
                            </div>
                          </div>
                           </div>
                        <div class="infographic__score">
                          <h1>34<span>BRASIL</span></h1>
                        </div>
                        <div class="infographic__text dot">
                          <p>As empresas beneficiadas
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
                    <div class="medium-1 cell">&nbsp;</div>
                    <div class="medium-6 cell">
                      <img src="@/assets/img/focem-auto/auto-map--dinamico.png" alt="">
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
                    conteudo do elemento 2
                    conteudo do elemento 2
                    conteudo do elemento 2
                    conteudo do elemento 2
                    conteudo do elemento 2
                    conteudo do elemento 2
                    conteudo do elemento 2
                    conteudo do elemento 2
                    conteudo do elemento 2
                    conteudo do elemento 2
                  </div>
                </div>
              </div>
              <div class="tab">
                <input class="tab-radio" type="radio" id="tab-3" name="tab-group-1">
                <label class="tab-label" for="tab-3">RESULTADOS</label>
                <div class="tab-panel">
                  <div class="tab-content">
                    conteudo do elemento 3
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
                    conteudo do elemento 5
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
import api from '@/api/auto'
export default {
    data: () => ({
        events: api.list
    }),
    mounted() {
      console.log('element is mounted');
        (function($) {
          $('.tabs input[type="radio"]:checked').closest('.tab').addClass('checked');

          $('section').on('click', '.tabs input', function() {
            console.log('clique', this.name);

            $('input[name="' + this.name + '"]')
            .closest('.tab')
            .removeClass('checked');
            $(this)
            .closest('.tab')
            .addClass('checked');
          });
        })(window.jQuery);
    }
}
</script>
