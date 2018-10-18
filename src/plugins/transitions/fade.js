export default {
    template: `
        <transition
            name="fade-transition"
            mode="out-in"
            :css="false"
            v-on:leave="leave"
            v-on:enter="enter"
            appear
        >
            <slot></slot>
         </transition>
    `,
    methods: {
        enter: function (el, done) {
            TweenMax.set($(el), { opacity:0 })
            TweenMax.staggerTo($(el), 1, { opacity:1 } , 0.1);
            done()
        },
        leave: function (el, done) {
            TweenMax.staggerTo($(el), .5, { opacity: 0 },0.1);
            setTimeout(function() {
                done()
            }, 500)
        },
      }
  }
  