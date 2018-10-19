import Vue from 'vue'

import AutoEvents from './auto/events'
import PGEvents from './pg/events'

import AutoDownloads from './auto/downloads'
import PGDownloads from './pg/downloads'

import AutoPartners from './auto/partners'
import PGPartners from './pg/partners'

// import AutoPartners from './auto/partners'
import PGGallery from './pg/gallery'


let auto = {
    downloads: AutoDownloads,
    events: AutoEvents,
    partners: AutoPartners
}

// Vue.prototype.$auto = auto

let pg = {
    downloads: PGDownloads,
    events: PGEvents,
    partners: PGPartners,
    gallery: PGGallery
}

// Vue.prototype.$pg = pg

const events = [
    ...AutoEvents,
    ...PGEvents
]

const downloads = [
    ...AutoDownloads,
    ...PGDownloads
]

export default {
    events,
    downloads,
    pg: pg,
    auto: auto
}