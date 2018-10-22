<template>
  <div id="app">
    <component :is="layout">
      <transition name="fade">  
        <router-view/>
      </transition>  
    </component>
    <navbar/>
  </div>
</template>

<script>
import Layouts from '@/layout'
import Navbar from '@/layout/components/Navbar'

export default {
  name: 'App',
  components: {
    ...Layouts,
    Navbar,
  },
  computed: {
    layout() {
      let foundLayout
      this.$route.matched.find(e => e.meta.layout ? foundLayout = e.meta.layout : '')
      return (foundLayout || 'default') + '-layout';
    }
  }
}
</script>

<style lang="scss">
@import '@/assets/css/app.scss';
</style>
