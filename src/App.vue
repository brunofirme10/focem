<template>
  <div id="app">
    <navbar/>
    <component is="clean-layout">
        <router-view/>
    </component>
  </div>
</template>

<script>
import CleanLayout from '@/layout/Clean'
import Navbar from '@/layout/components/Navbar'
export default {
  components: {
    CleanLayout,
    Navbar
  },
  name: 'App'
}
</script>

<style lang="scss">
</style>
