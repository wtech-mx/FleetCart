    // Detectar cambios de conexión
    function isOnline() {

        if ( navigator.onLine ) {
            // tenemos conexión
             console.log('online');

            // mdtoast('Online', {
            //   type: 'info',
            //     interactionTimeout: 3000,
            //   interaction: true, actionText: '',
            //   action: function(){
            //     //TODO: Undo codes here...
            //     this.hide(); // this is the toast instance
            //   }
            // });

      const userAgent = window.navigator.userAgent.toLowerCase();
      const ios = (/iphone|ipad|ipod/.test(userAgent));

      if (ios) {
        console.log("ios");
        // Initializes a toast with action (this toast will not dismiss unless 'interactionTimeout' is specified)
        // mdtoast('Instalar Aplicacion en tu iphone:', {
        //   type: 'info',
        //   interaction: true, actionText: 'OK',
        //   action: function(){
            //TODO: Undo codes here...
            // this.hide(); // this is the toast instance
        //   }
        // });

      } else {
        console.log("web");
      }
        } else{
            // No tenemos conexión
             console.log('Offline');
            // mdtoast('Sin Concexion', {
            //   type: 'error',
            //   interaction: true, actionText: 'OK',
            //   action: function(){
            //     //TODO: Undo codes here...
            //     this.hide(); // this is the toast instance
            //   }
            // });
          $(document).ready(function() {
             $("#myModal").modal("show");
          });

            $('#myModal').fadeIn();
              setTimeout(function() {
                   $("#myModal").fadeOut();
              },100000);


        }
    }
    window.addEventListener('online', isOnline );
    window.addEventListener('offline', isOnline );
    isOnline();
