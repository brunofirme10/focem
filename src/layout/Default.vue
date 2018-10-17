<template>
    <div>
        <header-bar/>
        <router-view/>
    </div>
</template>
<script>
import Components from './components'
export default {
    name: 'Default',
    components: {
        ...Components
    }
}
</script>
