<script type="text/javascript">
  var url = window.location.href;
  var locale = url.split("/")[5];
  var onlineGreeting, offlineGreeting;

  onlineGreeting = "";
  offlineGreeting = "";
  var dep = "";
  var dept_tag = "";

  // Setea los departamentos disponibles, esto también lo puede hacer el admin desde la plataforma
  $zopim.livechat.departments.filter('espanol', 'portugues', 'frances','hindi','italiano','ingles','polaco');
 
  //Un switch para setear los mensajes de online y offline por localidad
  //También setea el departamento para poder identificar si hay agentes activos
  //al momsnto de la conexión
 
 switch (locale) {
    case "es":
      onlineGreeting = "Habla con nosotras";
      offlineGreeting = "Nuestros asesores no están disponibles en este momento, deje un mensaje y nos pondremos en contacto con usted pronto";
      dep = $zopim.livechat.departments.getDepartment('espanol');
      dept_tag = 'espanol';
      break;
    case "pt-pt":
      onlineGreeting = "Fale com a gente";
      offlineGreeting = "Nossos consultores não estão disponíveis no momento. Deixe uma mensagem e entraremos em contato em breve";
      dep = $zopim.livechat.departments.getDepartment('portuges');
      dept_tag = 'portuges';
      break;
    case "fr":
      onlineGreeting = "Parlez-nous";
      offlineGreeting = "Nos consultants ne sont pas disponibles pour le moment, laissez un message et nous vous contacterons bientôt";
      dep = $zopim.livechat.departments.getDepartment('frances');
      dept_tag = 'frances';
      break;
    case "hi":
      onlineGreeting = "हमारे साथ चैट करें";
      offlineGreeting = "हमारे सलाहकार इस समय उपलब्ध नहीं हैं, एक संदेश छोड़ दें और हम जल्द ही आपके पास वापस आ जाएंगे";
      dep = $zopim.livechat.departments.getDepartment('hindi');
      dept_tag = 'hindi';
      break;
    case "it":
      onlineGreeting = "Parla con noi";
      offlineGreeting = "I nostri consulenti non sono disponibili in questo momento, lascia un messaggio e ti risponderemo al più presto";
      dep = $zopim.livechat.departments.getDepartment('italiano');
      dept_tag = 'italiano';
      break;
    case "pl_PL":
      onlineGreeting = "Porozmawiaj z nami";
      offlineGreeting = "Nasi konsultanci nie są obecnie dostępni, zostaw wiadomość, a my skontaktujemy się z Tobą wkrótce";
      dep = $zopim.livechat.departments.getDepartment('polaco');
      dept_tag = 'polaco';
      break;
    default:
      onlineGreeting = "Chat with us";
      offlineGreeting = "Our consultants are not available at this time, leave a message and we will get back to you soon";
      dep = $zopim.livechat.departments.getDepartment('ingles')
      dept_tag = 'ingles';
  }
  
  window.$zopim||(function(d,s){var z=$zopim=function(c){
    z._.push(c)},$=z.s=
    d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
    _.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
    $.src='//v2.zopim.com/?';z.t=+new Date;$.
    type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');

    // Setea los saludos de las variables que ya tenemos según el idioma
    $zopim(function() {
      $zopim.livechat.setGreetings({
      'online': onlineGreeting,
      'offline': offlineGreeting
      });
    });

    // Revisamos el estatus de conexión deacuerdo al departamento seteado
    $zopim(function() {
    $zopim.livechat.setOnConnected(function() {
    $zopim.livechat.setOnStatus(function () {

    if (dep.status == 'offline') {

    // Configurar el estado de la cuenta como "desconectado"
    $zopim.livechat.setStatus('offline');

    // Ocultar el widget o similares
    $zopim.livechat.hideAll();

    } else {

    // El departamento está conectado (al menos un agente de ese departamento está conectado)

    // Agregar automáticamente una etiqueta
    $zopim.livechat.addTags(dept_tag+"_chat");

    // Ocultar la opción de la lista desplegable en el formulario previo al chat para seleccionar el departamento
    $zopim.livechat.departments.filter('');

    // Configurar el departamento automáticamente
    $zopim.livechat.departments.setVisitorDepartment(dept_tag);

    }
    });
  });
</script>