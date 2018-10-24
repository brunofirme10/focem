<template>
    <div class="grid-container ">
        <div class="grid-x align-center">
            <div class="cell gallery" v-if="images">
                <button id="goToPrevSlide" class="control">
                    <svg x="0px" y="0px" viewBox="0 0 477.175 477.175" style="enable-background:new 0 0 477.175 477.175;" xml:space="preserve">
                        <path d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225   c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z"/>
                    </svg>
                    </button>
                <button id="goToNextSlide" class="control">
                    <svg x="0px" y="0px" viewBox="0 0 477.175 477.175" style="enable-background:new 0 0 477.175 477.175;" xml:space="preserve">
	                    <path d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5   c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z"/>
                    </svg>
                </button>
                <ul id="image-gallery" class="list-unstyled cS-hidden">
                    <li :data-thumb="item" v-for="(item, key) in images" :key="key">
                        <img :src="item" />
                    </li>
                </ul>
            </div>
            <div v-else class="cell text-center">
                <h3>Não há imagens na galeria</h3>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    props: {
        images: {
            type: Array,
            required: true
        }
    },
    computed: {
        list() {
            this.renderSlider()
            return this.images
        }
    },
    mounted() {
        this.renderSlider()
    },
    methods: {
        renderSlider() {
            $("#content-slider").lightSlider({
                loop:true,
                keyPress:true
            });

            var slider = $('#image-gallery').lightSlider({
                gallery:true,
                item:1,
                thumbItem:9,
                slideMargin: 0,
                speed:500,
                controls: false,
                loop:true,
                onSliderLoad: function() {
                    $('#image-gallery').removeClass('cS-hidden');
                }
            });

            $('#goToPrevSlide').click(function(){
                slider.goToPrevSlide();
            });

            $('#goToNextSlide').click(function(){
                slider.goToNextSlide();
            });
        }
    }
}
</script>
<style lang="scss">
.gallery {
    position: relative;
    svg {
        fill: #00a2f7;
        width: 4rem;
    }
    .control {
        cursor: pointer;
        &:focus {
        outline: none !important;
        }
    }
    #goToPrevSlide {
        position: absolute;
        left: -70px;
        top: 50%;
        transform: translateY(-50%);
    }
    #goToNextSlide {
        position: absolute;
        right: -70px;
        top: 50%;
        transform: translateY(-50%);
    }
    .lslide {
        img {
            width: 100%;
            object-fit: cover;
        }
    }
    .lSNext {
        background: green

    }
}
@media screen and (max-width: 39.9375em) {
    .gallery #goToPrevSlide {
      left: -30px;
      z-index: 1;
    }
    .gallery #goToNextSlide {
      right: -30px;
     }
}



</style>
