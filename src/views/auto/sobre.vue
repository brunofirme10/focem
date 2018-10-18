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
