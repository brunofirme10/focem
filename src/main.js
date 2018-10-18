// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import App from './App'
import router from './router'

window.$ = window.jQuery = require('jquery')
window.TweenMax = require('gsap').TweenMax
window._ = require('lodash')

import 'foundation-sites/dist/css/foundation.min.css';
import 'foundation-sites/dist/js/foundation.min.js';

require('./assets/css/lightslider.min.css');
require('./assets/js/lightslider.min.js');

import 'vue-awesome/icons'
import Icon from 'vue-awesome/components/Icon'
Vue.component('v-icon', Icon)

import Cover from './layout/components/Cover.vue'
Vue.component('cover', Cover)

require('./plugins/transitions')
require('./api/pt_br')

Vue.config.productionTip = false

/* eslint-disable no-new */
new Vue({
  el: '#app',
  router,
  components: { App },
  template: '<App/>'
})
