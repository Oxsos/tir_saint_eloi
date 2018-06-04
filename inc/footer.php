<//-----------------------------------PARTENAIRES----------------------------------------->

    <div class="partenaire">
      <img src="img/part1.jpg" alt="">
      <img src="img/part2.jpg" alt="">
      <img src="img/part3.png" alt="">
    </div>

<//----------------------------------------------------footer------------------------------------------------------->
    <footer>
      <p class="mention">Developpé par Champaloux Benjamin - Tous droit réservés: "Club de tir Saint Eloi - Exideuil Sur Vienne"</p>
    </footer>

  </div>

    <script type="text/javascript">

      (function() {
      // old browser or not ?
      if ( !('querySelector' in document && 'addEventListener' in window) ) {
      return;
      }
      window.document.documentElement.className += ' js-enabled';
      function toggleNav() {
      // Define targets
      var target = document.querySelector('.navigation');
      var button = document.querySelector('.nav-button');
      // click-touch event
      if ( button ) {
        button.addEventListener('click',
        function (e) {
          target.classList.toggle('is-opened');
          e.preventDefault();
        }, false );
      }
      } // end toggleNav()
      toggleNav();
      }());

    </script>

  </body>
</html>
