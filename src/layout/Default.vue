<template>
    <div id="layout-default">
        <header-default/>
        <router-view/>
    </div>
</template>
<script>
import Components from './components'
import HeaderDefault from '@/layout/components/Header/Default'
export default {
    name: 'Default',
    components: {
        ...Components,
        'header-default' : HeaderDefault
    }
}
</script>
