import Vue from 'vue'

import AutoEvents from './auto/events'
import PGEvents from './pg/events'

import AutoDownloads from './auto/downloads'
import PGDownloads from './pg/downloads'

import AutoPartners from './auto/partners'
import PGPartners from './pg/partners'

import AutoGallery from './auto/gallery'
import PGGallery from './pg/gallery'


let auto = {
    downloads: AutoDownloads,
    events: AutoEvents,
    partners: AutoPartners,
    gallery: AutoGallery
}

let pg = {
    downloads: PGDownloads,
    events: PGEvents,
    partners: PGPartners,
    gallery: PGGallery
}

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