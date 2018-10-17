<template>
    <div class="cover" :style="`
        background: ${this.img ? `url(/static/${this.img})` : 'transparent'}; 
        background-size: ${(this.bgSize || 'cover')};
        height: ${(this.height || '300px')};
        `"></div>
</template>
<script>
export default {
    props: {
        img: { 
            type: String, 
            required: true 
        },
        bgSize: { 
            type: String, 
            required: false 
        },
        height: { 
            type: String, 
            required: false 
        },
    }
}
</script>

