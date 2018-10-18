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
      path: '/automotivo',
      component: {
        render: c => c('router-view')
      },
      children: [
        {
          path: 'sobre',
          component: load('auto/sobre')
        },
        {
          path: ':id/evento',
          component: load('evento.interna')
        },
      ]
    },
    {
      path: '/petroleo-gas',
      component: {
        render: c => c('router-view')
      },
      children: [
        {
          path: 'sobre',
          component: load('petro/sobre')
        },
        {
          path: ':id/evento',
          component: load('evento.interna')
        },
      ]
    },
    {
      path: '/eventos',
      component: load('eventos')
    },
    {
      path: '/focem',
      component: {
        render: c => c('router-view')
      },
      children: [
        {
          path: 'sobre',
          component: load('focem/sobre')
        }
      ]
    },
    {
      path: '/downloads',
      component: require('@/layout/components/About/Downloads').default
    }
  ]
})
