
  var url = window.location.href;
  var locale = url.split("/")[5];
  var onlineGreeting, offlineGreeting;
  if(locale === "es") {
    window.$zopim||(function(d,s){var z=$zopim=function(c){
    z._.push(c)},$=z.s=
    d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
    _.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
    $.src='//v2.zopim.com/?';z.t=+new Date;$.
    type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');
    onlineGreeting = "Habla con nosotras";
    offlineGreeting = 'Deja un mensaje';
    $zopim(function() {
      $zopim.livechat.setGreetings({
      'online': onlineGreeting,
      'offline': offlineGreeting
      });
    });
  } 
  else if(locale === "pt-pt") {
    window.$zopim||(function(d,s){var z=$zopim=function(c){
    z._.push(c)},$=z.s=
    d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
    _.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
    $.src='//v2.zopim.com/?';z.t=+new Date;$.
    type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');
    onlineGreeting = "Fale com a gente";
    offlineGreeting = 'Deixe uma mensagem';
    $zopim(function() {
      $zopim.livechat.setGreetings({
      'online': onlineGreeting,
      'offline': offlineGreeting
      });
    });
  } 
  else if(locale === "fr") {
    window.$zopim||(function(d,s){var z=$zopim=function(c){
    z._.push(c)},$=z.s=
    d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
    _.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
    $.src='//v2.zopim.com/?';z.t=+new Date;$.
    type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');
    onlineGreeting = "Parlez-nous";
    offlineGreeting = 'Laissez un message';
    $zopim(function() {
      $zopim.livechat.setGreetings({
      'online': onlineGreeting,
      'offline': offlineGreeting
      });
    });
  } 
  else if(locale === "hi") {
    window.$zopim||(function(d,s){var z=$zopim=function(c){
    z._.push(c)},$=z.s=
    d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
    _.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
    $.src='//v2.zopim.com/?';z.t=+new Date;$.
    type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');
    onlineGreeting = "हमारे साथ चैट करें";
    offlineGreeting = "हमें एक संदेश छोड़ दो";
    $zopim(function() {
      $zopim.livechat.setGreetings({
      'online': onlineGreeting,
      'offline': offlineGreeting
      });
    });
  }
  else if(locale === "pl") {
    window.$zopim||(function(d,s){var z=$zopim=function(c){
    z._.push(c)},$=z.s=
    d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
    _.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
    $.src='//v2.zopim.com/?';z.t=+new Date;$.
    type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');
    onlineGreeting = "Rozmawiaj z nami";
    offlineGreeting = "Zostaw nam wiadomość";
    $zopim(function() {
      $zopim.livechat.setGreetings({
      'online': onlineGreeting,
      'offline': offlineGreeting
      });
    });
  }
  else {
    window.$zopim||(function(d,s){var z=$zopim=function(c){
    z._.push(c)},$=z.s=
    d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
    _.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
    $.src='//v2.zopim.com/?';z.t=+new Date;$.
    type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');
    onlineGreeting = "Chat with us";
    offlineGreeting = "Leave us a message";
    $zopim(function() {
      $zopim.livechat.setGreetings({
      'online': onlineGreeting,
      'offline': offlineGreeting
      });
    });
  }

// Setting a department per language

$zopim(function() {
  $zopim.livechat.setOnConnected(function() {
  $zopim.livechat.departments.filter('English', 'Spanish', 'French', 'Portuguese', 'Hindi', 'Polish' );
  var department_status = $zopim.livechat.departments.getDepartment('English');
  if (department_status.status == 'offline') {
  $zopim.livechat.setStatus('Our counselors are not available at the moment, please leave a message and we will contact you soon.');
  $zopim.livechat.hideAll();
  } else {
  $zopim.livechat.departments.filter(' ');
  $zopim.livechat.departments.setVisitorDepartment('English');
  }
  });
  });

$zopim(function() {
  $zopim.livechat.setOnConnected(function() {
  $zopim.livechat.departments.filter('English', 'Spanish', 'French', 'Portuguese', 'Hindi', 'Polish' );
  var department_status = $zopim.livechat.departments.getDepartment('Spanish');
  if (department_status.status == 'offline') {
  $zopim.livechat.setStatus('Nuestros asesores no están disponibles en este momento, deje un mensaje y nos pondremos en contacto con usted pronto.');
  $zopim.livechat.hideAll();
  } else {
  $zopim.livechat.departments.filter(' ');
  $zopim.livechat.departments.setVisitorDepartment('Spanish');
  }
  });
  });

$zopim(function() {
  $zopim.livechat.setOnConnected(function() {
  $zopim.livechat.departments.filter('English', 'Spanish', 'French', 'Portuguese', 'Hindi', 'Polish' );
  var department_status = $zopim.livechat.departments.getDepartment('French');
  if (department_status.status == 'offline') {
  $zopim.livechat.setStatus('Nos conseillers ne sont pas disponibles pour le moment, veuillez laisser un message et nous vous contacterons bientôt.');
  $zopim.livechat.hideAll();
  } else {
  $zopim.livechat.departments.filter(' ');
  $zopim.livechat.departments.setVisitorDepartment('French');
  }
  });
  });

$zopim(function() {
  $zopim.livechat.setOnConnected(function() {
  $zopim.livechat.departments.filter('English', 'Spanish', 'French', 'Portuguese', 'Hindi', 'Polish' );
  var department_status = $zopim.livechat.departments.getDepartment('Portuguese');
  if (department_status.status == 'offline') {
  $zopim.livechat.setStatus('Nossos conselheiros não estão disponíveis no momento, por favor deixe uma mensagem e entraremos em contato em breve.');
  $zopim.livechat.hideAll();
  } else {
  $zopim.livechat.departments.filter(' ');
  $zopim.livechat.departments.setVisitorDepartment('Portuguese');
  }
  });
  });

$zopim(function() {
  $zopim.livechat.setOnConnected(function() {
  $zopim.livechat.departments.filter('English', 'Spanish', 'French', 'Portuguese', 'Hindi', 'Polish' );
  var department_status = $zopim.livechat.departments.getDepartment('Hindi');
  if (department_status.status == 'offline') {
  $zopim.livechat.setStatus('हमारे काउंसलर फिलहाल उपलब्ध नहीं हैं, कृपया एक संदेश छोड़ें और हम आपसे जल्द ही संपर्क करेंगे।');
  $zopim.livechat.hideAll();
  } else {
  $zopim.livechat.departments.filter(' ');
  $zopim.livechat.departments.setVisitorDepartment('Hindi');
  }
  });
  });

$zopim(function() {
  $zopim.livechat.setOnConnected(function() {
  $zopim.livechat.departments.filter('English', 'Spanish', 'French', 'Portuguese', 'Hindi', 'Polish' );
  var department_status = $zopim.livechat.departments.getDepartment('Polish');
  if (department_status.status == 'offline') {
  $zopim.livechat.setStatus('Nasi doradcy nie są obecnie dostępni, proszę zostawić wiadomość, a skontaktujemy się z Tobą wkrótce.');
  $zopim.livechat.hideAll();
  } else {
  $zopim.livechat.departments.filter(' ');
  $zopim.livechat.departments.setVisitorDepartment('Polish');
  }
  });
  });