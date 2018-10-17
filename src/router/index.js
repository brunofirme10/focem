import Vue from 'vue'
import Router from 'vue-router'
function load(component) {
  return () => import(`@/views/${component}.vue`);
}

Vue.use(Router)

export default new Router({
  mode: 'history',
  routes: [
    {
      path: '/',
      component: load('home'),
      meta: {
        layout: 'Clean'
      }
    },
    {
      path: '/auto',
      component: {
        render: c => c('router-view')
      },
      children: [
        {
          path: 'sobre',
          component: load('auto/sobre')
        },
        {
          path: 'eventos',
          component: load('auto/eventos')
        },
        {
          path: 'evento/:id',
          component: load('auto/evento_interna')
        },
      ]
    },
    {
      path: '/petro',
      component: {
        render: c => c('router-view')
      },
      children: [
        {
          path: 'sobre',
          component: load('petro/sobre')
        },
        {
          path: 'eventos',
          component: load('petro/eventos')
        },
        {
          path: 'evento/:id',
          component: load('petro/evento_interna')
        },
      ]
    },
  ]
})
