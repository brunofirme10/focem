import AutoEvents from './auto/events'
import PGEvents from './pg/events'

import AutoDownloads from './auto/downloads'
import PGDownloads from './pg/downloads'

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
    downloads
}