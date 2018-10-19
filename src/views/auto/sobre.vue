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
                                                <div class="cell small-3">
                                                    <h1>46,14%</h1>
                                                    <p>DE AUMENTO DE PRODUTIVIDADE</p>
                                                </div> 
                                                <div class="cell small-3">   
                                                    <img src="@/assets/img/focem-auto/icon/resultados-seta.png" alt="">
                                                </div>
                                                <div class="cell small-3">
                                                    <h1>51%</h1>
                                                    <p>DE PREPARAÇÃO DA MÁQUINA PARA CORRETA PRODUÇÃO</p>
                                                </div>
                                                <div class="cell small-3">    
                                                    <img src="@/assets/img/focem-auto/icon/resultados-seta.png" alt="">
                                                </div>
                                            </div>
                                            <div class="grid-x grid-padding-x grid-padding-y align-center text-center">    
                                                <div class="cell small-3">
                                                    <h1>87%</h1>
                                                    <p>DE REDUÇÃO NAS ENTREGAS</p>
                                                </div>
                                                <div class="cell small-3">        
                                                    <img src="@/assets/img/focem-auto/icon/resultados-entrega.png" alt="">
                                                </div>
                                                <div class="cell small-3">
                                                    <h1>30,13%</h1>
                                                    <p>DE AUMENTO NA EFICIÊNCIA DE EQUIPAMENTOS</p>
                                                </div>
                                                <div class="cell small-3">        
                                                    <img src="@/assets/img/focem-auto/icon/resultados-eng.png" alt="">
                                                </div>
                                            </div>
                                            <div class="grid-x grid-padding-x grid-padding-y align-center text-center">
                                                <div class="cell small-3">
                                                    <h1>76%</h1>
                                                    <img src="@/assets/img/focem-auto/icon/resultados-prod.png" alt="">                                            
                                                    <p>DE REDUÇÃO NO TEMPO DE INÍCIO E CONCLUSÃO DAS ATIVIDADES</p>
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
// import api from '@/api/auto'
// export default {
//     data: () => ({
//         events: api.list
//     })
// }
</script>
