<template>
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="large-6 cell" v-for="(item, key) in list" :key="key">
              <div class="grid-x">
                  <div class="large-6 cell">
                      <h3> {{ item.title }} </h3>
                  </div>
                  <div class="large-6 cell">
                    <a :href="item.path" target="_blank" class="button button-primary button-download  dark-blue"> Baixe aqui <v-icon name="download"/></a>
                  </div>
              </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    props: {
        list: {
            type: Array,
            required: true
        }
    }
}
</script>
