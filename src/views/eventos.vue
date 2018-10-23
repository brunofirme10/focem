<template>
<div>
    <cover img="auto/evento/cover-header.jpg"/>
    <section id="eventos" class="interna m-b-5">
        <div class="grid-container">
            <div class="grid-x grid-margin-x">
                <div class="cell text-center">
                    <h1> Eventos </h1>
                </div>
                <div class="cell text-center">
                    <h3> Fundo para Convergência Estrutural do Mercosul </h3>
                </div>
            </div>
        </div>
        <div class="grid-container p-t-2 eventos__lista">
            <div class="grid-x grid-margin-x align-center">
                <div class="box medium-9 cell p-b-3 eventos__lista__item" v-for="(event, key) in events" :key="key">
                    <router-link :to="`/${event.category}/${(event.slug || event.id)}/evento`">
                    <div class="grid-x grid-margin-x">
                        <div class="medium-7 cell">
                            <img :src="event.photo" alt="">
                        </div>
                        <div class="medium-5 cell">
                            <div class="grid-x grid-margin-x">
                                <div class="cell">
                                    <h3> {{ event.title }}</h3>
                                </div>
                            </div>
                            <div class="grid-x grid-margin-x">
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
                            <div class="grid-x grid-margin-x p-t-1 p-b-1">
                                <div class="cell">
                                    <p>
                                        {{ event.description}}
                                    </p>
                                </div>
                            </div>
                            <div class="grid-x grid-margin-x">
                                <div class="cell" style="position: relative">
                                    <router-link class="subscribe text-center" :to="`/${event.category}/${(event.slug || event.id)}/evento`"> Mais informações </router-link>
                                </div>
                            </div>
                        </div>
                    </div>
                    </router-link>
                </div>
            </div>
        </div>
    </section>
</div>

</template>

<script>
import api from '@/api/pt_br'
export default {
    computed: {
        events() {
            api.events.map(e => e.photo = e.photo.includes('static') ? e.photo : `/static/${e.photo}`);
            return api.events
        }
    }
}
</script>
