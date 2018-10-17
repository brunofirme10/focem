<template>
    <section id="eventos">
        <div class="grid-container">
            <div class="grid-x grid-margin-x">
                <div class="cell text-center">
                    <h1> Eventos </h1>
                </div>
                <div class="cell text-center">
                    <h2> Fundo para Convergência Estrutural do Mercosul </h2>
                </div>
            </div>
        </div>
        <div class="grid-container p-t-2">
            <div class="grid-x grid-margin-x align-center">
                <div class="box large-7 medium-7 cell p-b-4" v-for="(event, key) in events" :key="key">
                    <div class="grid-x grid-margin-x">
                        <div class="large-7 medium-7 cell">
                            <h1> Imagem </h1>
                        </div>
                        <div class="large-5 medium-5 cell" style="backgroud: red">
                            <div class="grid-x grid-margin-x">
                                <div class="cell">
                                    <h3> Nome do evento 1</h3>
                                </div>
                            </div>
                            <div class="grid-x grid-margin-x">
                                <div class="large-5 medium-5 cell">
                                    Ulisses guimaraes
                                </div>
                                <div class="large-4 medium-4 cell">
                                    21 de Outubro
                                </div>
                                <div class="large-3 medium-3 cell">
                                    15h
                                </div>
                            </div>
                            <div class="grid-x grid-margin-x p-t-2 p-b-2">
                                <div class="cell">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu lacinia urna. Sed imperdiet lorem nec lacus sagittis, at elementum tellus aliquam. Vivamus varius.
                                    </p>
                                </div>
                            </div>
                            <div class="grid-x grid-margin-x">
                                <div class="cell">
                                    <button class="subscribe"> Fazer inscrição </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
import api from '@/api/auto'
export default {
    data: () => ({
        events: api.list
    })
}
</script>
