<script type="text/javascript">
  var url = window.location.href;
  var locale = url.split("/")[5];
  var onlineGreeting, offlineGreeting;
  window.$zopim||(function(d,s){var z=$zopim=function(c){
  z._.push(c)},$=z.s=
  d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
  _.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
  $.src='//v2.zopim.com/?';z.t=+new Date;$.
  type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');

  $zopim(function (){
    //Register a callback to be fired when the widget successfully connects to the server.
    $zopim.livechat.setOnConnected(function() {
      //Register a callback to be fired when the account status changes.
      $zopim.livechat.setOnStatus(function() {
        if (department_status.status == 'offline') {
          // Set the account status to 'offline'
          $zopim.livechat.setStatus('offline');
          $zopim.livechat.setGreetings({
            'offline': offlineGreetingLanguaje(locale)
          });
        }else{
          // The department is Online

          // Automatically set the Department
          $zopim.livechat.departments.setVisitorDepartment(locale);
          $zopim.livechat.setGreetings({
            'online': greetingLanguaje(locale)
          });
        }
      });
    });
  });

  var greetingLanguaje = function (locale){
    switch (locale) {
      case 'es':
          onlineGreeting = "Chat with us";
          break;
      case 'pt-pt':
          onlineGreeting = "Fale com a gente";
          break;
      case 'fr':
          onlineGreeting = "Parlez-nous";
          break;
      case 'hi':
          onlineGreeting = "हमारे साथ चैट करें";
          break;
      case 'pl':
          onlineGreeting = "Rozmawiaj z nami";
          break;

      default:
          onlineGreeting = "Chat with us"
    }
  };
  var offlineGreetingLanguaje = function (locale){

    switch (locale) {
      case 'es':
          offlineGreeting = "Leave us a message";
          break;
      case 'pt-pt':
          offlineGreeting = 'Deixe uma mensagem';
            break;
      case 'fr':
          offlineGreeting = 'Laissez un message';
          break;
      case 'hi':
          offlineGreeting = "हमें एक संदेश छोड़ दो";
          break;
      case 'pl':
          offlineGreeting = "Zostaw nam wiadomość";
          break;

      default:
          offlineGreeting = "Leave us a message";
    }
  }

</script>
