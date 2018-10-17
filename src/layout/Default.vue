<template>
    <div>
        <header-bar/>
        <router-view/>
    </div>
</template>
<script>
import { Navbar, HeaderBar, FooterBar } from './components'
export default {
    components: require('./components')
}
</script>
