export default {
    template: `
        <transition
            name="height-transition"
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
            let heightEl = $(el).height()
            TweenMax.set($(el), { height: 0, overflow: 'hidden' })
            TweenMax.to($(el), 1.5, { height: heightEl,  ease: Power4.easeInOut })
            TweenMax.to($(el).siblings('section#home'), 1.5, { 
                height: '65vh', 
                'pointer-events': 'none', 
                ease: Power4.easeOut,
                delay: 1,
                onComplete: function() {
                    TweenMax.set($(this.target), { clearProps: 'pointer-events' })
                }
            })
            done()
        },
        leave: function (el, done) {
            TweenLite.to(window, 1.5, { scrollTo: 0 ,ease: Power4.easeOut })
            TweenMax.to($(el).siblings('section'), 1.5, { height : '100vh',ease: Power4.easeOut })
            TweenMax.to($(el), 1.5, { 
                height: 0, 
                ease: Power4.easeOut,
                onComplete: function() {
                    done()
                }
            });
        },
      }
  }
  