<template>
    <div class="grid-container">
        <div class="grid-x grid-padding-x align-middle align-center">
            <div :class="[ 'text-center', `large-${item.grid_size}`]" v-for="(item, key) in list" :key="key">
                <img :src="`/static/${item.img_path}`" alt="">
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
