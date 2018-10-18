<template>
    <div id="layout-default">
        <header-default/>
        <fade-transition>  
            <router-view/>
        </fade-transition>  
    </div>
</template>
<script>
import Components from './components'
import HeaderDefault from '@/layout/components/Header/Default'
export default {
    name: 'Default',
    components: {
        ...Components,
        HeaderDefault
    }
}
</script>
