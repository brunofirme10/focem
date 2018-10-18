<template>
    <div class="gallery">
        <div v-for="(image, key) in images" :key="key" class="gallery-item">
            <img :src="image" alt="">
        </div>
    </div>
</template>
<script>
export default {
    data: () => ({
        images: [
            '/static/pg/partners/mc.jpg',
            '/static/pg/partners/mc.jpg',
            '/static/pg/partners/mc.jpg',
            '/static/pg/partners/mc.jpg',
            '/static/pg/partners/mc.jpg',
            '/static/pg/partners/mc.jpg',
            '/static/pg/partners/mc.jpg',
            '/static/pg/partners/mc.jpg',
            '/static/pg/partners/mc.jpg',
            '/static/pg/partners/mc.jpg',
            '/static/pg/partners/mc.jpg',
            '/static/pg/partners/mc.jpg',
        ]
    })
}
</script>
<style lang="scss">
.gallery {
    width: 50%;
    background: blue;
    margin: auto;
    display: flex;
    justify-content: center;
    align-items: center;
    overflow-x: auto;
    .gallery-item {
        min-width: 100px; 
        max-width: 100px; 
        margin: auto;
    }
}
</style>
