<template>
<div>
    <cover img="auto/focem/cover-header.jpg"/>
    <section id="focem" class="interna">
      <div class="grid-container">
        <div class="grid-x grid-padding-x grid-padding-y align-center text-center">
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
        <div class="grid-x grid-padding-x grid-padding-y">
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
        <div class="grid-x grid-padding-x grid-padding-y">
          <div class="cell medium-6">
            <h6>Programa I - Convergência Estrutural
              Programa II -  Desenvolvimento da Competitividade</h6>
            <p> Para facilitar ainda mais a criação do comércio intraMercosul, projetos de reordenamentos foram criados. Esses projetos estimulam integrações, com a intenção de aumentar a qualidade de produtos e o número de pesquisas, a fim de gerar novos produtos  e processos produtivos.</p>
            <p>A ABDI teve seu início em 2005, vinculada ao Ministério da Indústria, Comércio Exterior e Serviços (MDIC),  e tem como objetivo promover a execução de ações para ampliar a competitividade da indústria. E isso  se aplica diretamente aos dois projetos de integração produtiva, voltados para cadeia automotiva e para cadeia de petróleo e gás, executados pela Agência  com recursos majoritariamente provenientes do Fundo.</p>
          </div>
          <div class="cell medium-6">
            <h6>Programa III - Coesão Social Programa IV - Fortalecimento da Estrutura Institucional e do Processo de Integração</h6>
            <p>Entre os dois projetos, um é voltado para o adensamento e a complementação produtiva no setor automobilístico-autopecista (contribuição FOCEM de US$ 3 milhões), e o outro para o desenvolvimento de fornecedores na cadeia produtiva de petróleo e gás (contribuição FOCEM de US$ 2,8 milhões). </p>
            <h6>Os dois projetos são plurinacionais, beneficiando quatro  países do bloco: Argentina, Brasil, Paraguai e Uruguai. </h6>
            <p>
              Objetivo: ambos os projetos estão comprometidos com  a superação das assimetrias entre países, mas, principalmente,  com o aprofundamento das complementaridades e dos entrelaçamentos produtivos no âmbito do Mercosul  e com o aumento das capacidades competitivas do bloco regional.
            </p>
           </div>
        </div>
        <div class="grid-x grid-padding-x grid-padding-y">
          <div class="cell text-center">
              <button class="button button-default">PLANO DE AQUISIÇÕES <v-icon name="download"/></button>
          </div>
        </div>
      </div>
      <div class="bg-blue">
      <div class="grid-container full">
        <div class="grid-x">
          <div class="cell text-center">
            <h5>Escolha um dos programas abaixo</h5>
            <div class="choose-section">
              <div class="slide">
                  <div class="slide__title">
                      <h1>FOCEM</h1>
                  </div>
                  <div class="slide__images">
                    <div class="slide__image slide__image--car">
                      <a href="/automotivo/sobre"><img class="" src="@/assets/img/carro.png" alt=""></a>
                    </div>
                    <div class="slide__image slide__image--refinery" >
                      <a href="/petroleo-gas/sobre"><img src="@/assets/img/refinaria.png" alt=""></a>
                    </div>
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
// import api from '@/api/auto'
export default {
    // data: () => ({
    //     events: api.list
    // })
    mounted() {
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
          TweenMax.to(titleHome, .2, {scale: .5, y: -50});
        })
        contentCar.addEventListener('mouseleave', e => {
          TweenMax.fromTo(imageRefinery, .3, { opacity: 0 }, { opacity: 1 });
          TweenMax.fromTo(imageCar, .4, {x: 100}, {x: 0, y: 0});
          titleHome.textContent = "FOCEM";
          TweenMax.to(titleHome, .2, { scale: 1, y:0});
        })

        contentRefinery.addEventListener('mouseenter', e => {
          TweenMax.fromTo(imageCar, .3, { opacity: 1 }, { opacity: 0 });
          TweenMax.fromTo(imageRefinery, .4, {x: 0}, {x: -100});
          titleHome.textContent = "Petroleo & Gás";
          TweenMax.to(titleHome, .2, {scale: .5, y: 100 });
        })
        contentRefinery.addEventListener('mouseleave', e => {
          TweenMax.fromTo(imageCar, .3, { opacity: 0 }, { opacity: 1 });
          TweenMax.fromTo(imageRefinery, .4, {x: -200 }, { x: 0,  y: 0 });
          titleHome.textContent = "FOCEM";
          TweenMax.to( titleHome, .2, {scale: 1, y: 0 });
        })
      }
    }
}
</script>
