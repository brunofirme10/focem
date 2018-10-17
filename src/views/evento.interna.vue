<template>
    <div class="interna">
        <cover img="auto/evento/cover-header.jpg"/>
        <section class="interna">
            <div class="grid-container">
                <div class="grid-x grid-margin-x align-center">
                    <div class="large-8 cell">
                        <div class="grid-x grid-margin-x align-center p-b-1">
                            <div class="large-8 cell text-center">
                                <h2> {{ event.title }} </h2>
                            </div>
                        </div>
                        <div class="grid-x grid-margin-x align-center p-b-1">
                            <div class="cell event-info">
                                <span>
                                    <v-icon name="map-marker-alt"/>
                                    {{ event.local }}
                                </span>
                                <span>
                                    <v-icon name="calendar"/>
                                    {{ event.date }}
                                </span>
                                <span>
                                    <v-icon name="clock"/>
                                    {{ event.time }}
                                </span>
                            </div>
                        </div>
                        <div class="grid-x grid-margin-x align-center">
                            <div class="cell">
                                <p> {{ event.description }}</p>
                            </div>
                        </div>
                        <div class="grid-x grid-margin-x align-center">
                            <div class="cell" v-html="event.map"/>
                        </div>
                        <div class="grid-x grid-margin-x align-center">
                            <div class="cell text-center">
                                <h3>Agora é só garantir sua vaga, preenchendo o formuário abaixo:</h3>
                            </div>
                        </div>
                        <div class="grid-x grid-margin-x align-center">
                            <div class="cell">
                                <form action="" @submit.prevent="">
                                    <div class="grid-x grid-margin-x align-center">
                                        <div class="large-6 cell text-center">
                                            <input type="text" placeholder="Seu nome">
                                        </div>
                                        <div class="large-6 cell text-center">
                                            <input type="text" placeholder="Coloque seu melhor email">
                                        </div>
                                    </div>
                                    <div class="grid-x grid-margin-x align-center">
                                        <div class="cell">
                                            <textarea name="" cols="30" rows="6"></textarea>
                                        </div>
                                    </div>
                                    <div class="grid-x grid-margin-x align-center">
                                        <div class="cell text-right">
                                            <button class="btn btn-primary" type="submit"> Inscrever </button>
                                        </div>
                                    </div>
                                </form>
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
    data: (self) => ({
        event: api.list.find(e => e.id == self.$route.params.id)
    })
}
</script>

