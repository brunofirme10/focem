<template>
<div>
    <cover img="auto/focem/cover-header.jpg"/>
    <section id="focem" class="interna">
      <div class="grid-container">
        <div class="grid-x grid-padding-x grid-padding-y align-center text-center">
            <div class="cell medium-10">
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
            <div class="choose-section">
              <div class="grid-container">
                <div class="grid-x grid-padding-x">
                    <div class="medium-6 cell">
                      <div class="infographic">
                        <div class="infographic__data">
                          <h1>Público-alvo</h1>
                          <h2>99 empresas  que participam  deste projeto. </h2>
                        </div>
                        <div class="infographic__score">
                          <h1>34<span>BRASIL</span></h1>
                        </div>
                        <div class="infographic__text">
                          <p></p>
                        </div>
                      </div>
                    </div>
                    <div class="medium-6 cell">
                      <img src="@/assets/img/refinaria.png" alt="">
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
    })
}
</script>
