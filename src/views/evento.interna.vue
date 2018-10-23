<template>
    <div class="interna">
        <cover img="auto/evento/cover-header.jpg"/>
        <section class="interna">
            <div class="grid-container">
                <div class="grid-x grid-margin-x align-center">
                    <div class="large-8 cell" v-show="!_.isEmpty(event)">
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
                                <form action="" @submit.prevent="submit">
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
                                    <div class="grid-x grid-margin-x">
                                        <div class="cell text-right">
                                            <button class="button button-primary button-inline" type="submit"> INSCREVER </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div v-show="_.isEmpty(event)">
                        <h1> Evento não encontrado </h1>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
import api from '@/api/pt_br'
export default {
    data: (self) => ({
        category: self.$route.matched[0].path.replace('/', ''),
    }),
    computed: {
        event() {
            return api.events.find(e =>
                        (e.id == this.$route.params.id || e.slug == this.$route.params.id)
                        && e.category == this.category) || {}
        },
        _() {
            return _
        }
    },
    methods: {
        submit() {
            console.error('Método ainda não funcional');
        }
    },
}
</script>

