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
         <nav>
          <ul>
              <li><router-link to="/focem/sobre"><span>FOCEM</span></router-link></li>
              <li><router-link to="/automotivo/sobre"><span>AUTOMOTIVO</span></router-link></li>
              <li><router-link to="/petroleo-gas/sobre"><span>PETRÓLEO & GÁS</span></router-link></li>
              <li><router-link to="/eventos"><span>EVENTOS</span></router-link></li>
          </ul>
        </nav>
      </div>
    </div>
</template>

<script>
export default {
  mounted (){
    this.toogleMobile();
  },
  methods: {
    toogleMobile (){
      $('a.toggler').click(function(e) {
          if ($(this).hasClass('toggler')) {
              e.preventDefault();
              if ($(this).hasClass('active')) {
                  $(this).removeClass('active');
                  $('#mobile-menu nav').removeClass('active');
              } else {
                  $(this).addClass('active');
                  $('#mobile-menu nav').addClass('active');
              }
          }
      });
    }
  }
}
</script>
