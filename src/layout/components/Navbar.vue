<template>

    <div>
      <nav id="menu">
          <ul>
              <li><router-link to="/focem/sobre"><span>FOCEM</span></router-link></li>
              <li><router-link to="/automotivo/sobre"><span>AUTOMOTIVO</span></router-link></li>
              <li><router-link to="/petroleo-gas/sobre"><span>PETRÓLEO & GÁS</span></router-link></li>
              <li><router-link to="/eventos"><span>EVENTOS</span></router-link></li>
          </ul>
      </nav>
      <div id="mobile-menu">
        <a href="#" class="toggler">
            <svg viewBox="0 0 800 600">
                <path id="top" d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200"></path>
                <path id="middle" d="M300,320 L540,320"></path>
                <path id="bottom" d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
            </svg>
        </a>
         <!-- <nav>
          <ul>
              <li><router-link to="/focem/sobre"><span>FOCEM</span></router-link></li>
              <li><router-link to="/automotivo/sobre"><span>AUTOMOTIVO</span></router-link></li>
              <li><router-link to="/petroleo-gas/sobre"><span>PETRÓLEO & GÁS</span></router-link></li>
              <li><router-link to="/eventos"><span>EVENTOS</span></router-link></li>
          </ul>
        </nav> -->
      </div>
    </div>
</template>

<script>
import OnScreen from 'onscreen';
const os = new OnScreen();
export default {
  watch:{
    $route (to, from){
      $('#menu').removeClass('menu-white');
    }
  },
  mounted (){
    this.toogleMobile();
    this.scrollDetect();
  },
  methods: {
    toogleMobile (){
      let closeMenu = function ( el) {
        el.removeClass('active');
        $('#menu').removeClass('active');
        $('header').removeClass('menu-active');
      }
      $('a.toggler').click(function(e) {
          if ($(this).hasClass('toggler')) {
              e.preventDefault();
              if ($(this).hasClass('active')) {
                closeMenu( $(this) );
              } else {
                  $(this).addClass('active');
                  $('header').addClass('menu-active');
                  $('#menu').addClass('active');
              }
          }
      });
      $('a', '#menu').on('click', function ( e )  {
        e.preventDefault();
          if ($('a.toggler').hasClass('active')) {
            closeMenu($('a.toggler'));
          }
      })
    },
    scrollDetect() {
       if( this.detectMobile()) {
         window.onscroll = function(ev) {
            var B= document.body; //IE 'quirks'
            var D= document.documentElement; //IE with doctype
                D= (D.clientHeight)? D: B;

            D.scrollTop > 200 ? $('#mobile-menu').addClass('blue-bar') : $('#mobile-menu').removeClass('blue-bar');
          };
       }
        var osScreen =  new OnScreen({
          tolerance: $(document).height()/2,
          debounce: 10,
          container: window
        });
        $('#home').length ? $('#menu').addClass('menu-home') : $('#menu').removeClass('menu-home menu-white');

        osScreen.on('enter', '.blue-stage',  (element, event) => {
            $('#menu').addClass('menu-white');
        });
        osScreen.on('leave', '.blue-stage',  (element, event) => {
            $('#menu').removeClass('menu-white');
        });
    }
  }
}
</script>
