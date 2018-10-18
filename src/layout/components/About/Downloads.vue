<template>
    <div class="grix-container">
        <div class="grid-x grid-padding-xx">
            <div class="large-6 cell">
                <div class="grid-x grid-padding-x">
                    <div class="large-6 cell">
                        <h3> Material didatico </h3>
                    </div>
                    <div class="large-6 cell">
                        <button class="btn primary"> Baixe aqui </button>
                    </div>
                </div>
            </div>
            <div class="large-6 cell">
                <div class="grid-x grid-padding-x">
                    <div class="large-6 cell">
                        <h3> Material didatico </h3>
                    </div>
                    <div class="large-6 cell">
                        <button class="btn primary"> Baixe aqui </button>
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
