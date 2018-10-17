<template>
    <div>
      <header-home></header-home>
      <slot/>
    </div>
</template>
<script>
import HeaderHome from '@/layout/components/Header/Home'
export default {
  components: { 
    HeaderHome 
  }
}
</script>
