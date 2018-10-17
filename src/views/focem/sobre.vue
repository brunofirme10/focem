<template>
<div>
    <div class="cover">
      <img src="@/assets/img/focem/cover-header.jpg" alt="">
    </div>
    <section id="focem" class="interna">
      <div class="grid-container">
        <div class="grid-x grid-padding-x align-center text-center">
            <div class="cell">
              <h1>FOCEM</h1>
              <h3>Já ouviu falar sobre o projeto?</h3>
            </div>
        </div>
        <div class="grid-x grid-padding-x">
          <div class="cell">
            <p> O FOCEM entrou em operação em janeiro de 2007, com a aprovação dos primeiros projetos financiados  com recursos comunitários.  Ao longo de seu funcionamento, <span class="destaque">o Fundo teve mais de 40 projetos aprovados.</span></p>
            <p>O Fundo para a Convergência Estrutural do MERCOSUL (FOCEM) destina-se a “financiar programas para promover a convergência estrutural, desenvolver a competitividade e promover a coesão social, em particular das economias menores  e regiões menos desenvolvidas; apoiar o funcionamento da estrutura institucional e o fortalecimento do processo de integração”.</p>
          </div>
        </div>
        <div class="grid-x grid-padding-x">
          <div class="cell medium-6">
            <img src="@/assets/img/focem/infografico.png" alt="">
          </div>
          <div class="cell medium-6">
            <p><span class="destaque">O Brasil é o maior contribuinte</span>, aportando 70%  dos recursos do Fundo. A Argentina é responsável  pela integralização de 27% do montante; o Uruguai, pela contribuição de 2%; e o Paraguai, de 1%.</p>
             <p>Os recursos são entregues em caráter de doação não reembolsável para financiar até 85% do valor elegível dos projetos apresentados. </p>
              <p>A ABDI executa dois projetos, ainda em andamento, aprovados pelo FOCEM dentro do segundo de seus quatro grandes eixos, o Programa de Desenvolvimento da Competitividade.</p>
               <p>Os projetos financiados pelo FOCEM devem  se enquadrar nas seguintes áreas de ações,  indicadas pelos seus programas respectivos:</p>
          </div>
        </div>
        <div class="grid-x grid-padding-x">
          <div class="cell medium-6">
            <h6>Programa I - Convergência Estrutural
              Programa II -  Desenvolvimento da Competitividade</h6>
          </div>
          <div class="cell medium-6"></div>

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
