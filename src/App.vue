<template>
  <div id="app">
    <component is="default-layout">
        <router-view/>
    </component>
    <navbar/>
  </div>
</template>

<script>
import CleanLayout from '@/layout/Clean'
import DefaultLayout from '@/layout/Default'
import Navbar from '@/layout/components/Navbar'
export default {
  components: {
    DefaultLayout,
    CleanLayout,
    Navbar
  },
  name: 'App'
}
</script>

<style lang="scss">
@import '@/assets/css/app.scss';
</style>
