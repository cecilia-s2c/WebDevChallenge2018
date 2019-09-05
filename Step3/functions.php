<?php
add_filter('gform_register_init_scripts', 'gform_display_weeks', 10, 2);
//Pregnancy calculator 
function gform_display_weeks($form) {
//Taking last menstrual period information and establishing information of pregnancy in different languages
$script = <<<EOT
  (function($){
var vals = {
  en: {
    fields: {
      insertTenWeekReminderAfter: "#gform_page_4_6 .gform_page_fields",
      lmpWeeksLabel: "#field_4_59 > .gfield_label",
      dateSelect: "#input_4_19",
      weeksRadio: "#field_4_59",
      tenWeekWarning: "#field_4_60",
      weeksRadio5: "#choice_4_59_0",
      weeksRadio6: "#choice_4_59_1",
      weeksRadio7: "#choice_4_59_2",
      weeksRadio8: "#choice_4_59_3",
      weeksRadio9: "#choice_4_59_4",
      weeksRadio10: "#choice_4_59_5",
      nextButton: "#gform_next_button_4_21",
      nineWeekWarning: "#field_4_55",
      nineWeekAccept: "#input_4_55",
      nineWeekAcceptYes: "#choice_4_55_1"
    },
    text: {
      weeks: "weeks(s)",
      days: "day(s)",
      and: "and",
      estimation1: "Based on your response, we understand you are ",
      estimation2: " pregnant. Please confirm below.",
      tenWeekReminder: "Remember! Using abortion pills at home is safer within the first 10 weeks of pregnancy."
    }
  },
  es: {
    fields: {
      insertTenWeekReminderAfter: "#gform_page_10_6 .gform_page_fields",
      lmpWeeksLabel: "#field_10_59 > .gfield_label",
      dateSelect: "#input_10_19",
      weeksRadio: "#field_10_59",
      tenWeekWarning: "#field_10_60",
      weeksRadio5: "#choice_10_59_0",
      weeksRadio6: "#choice_10_59_1",
      weeksRadio7: "#choice_10_59_2",
      weeksRadio8: "#choice_10_59_3",
      weeksRadio9: "#choice_10_59_4",
      weeksRadio10: "#choice_10_59_5",
      nextButton: "#gform_next_button_10_21",
      nineWeekWarning: "#field_10_55",
      nineWeekAccept: "#input_10_55",
      nineWeekAcceptYes: "#choice_10_55_1"
    },
    text: {
      weeks: "semana(s)",
      days: "día(s)",
      and: "y",
      estimation1: "Con base en tu respuesta, entendemos que tu embarazo es de ",
      estimation2: ". Por favor, confirma abajo.",
      tenWeekReminder: "¡Recuerda! Usar pastillas abortivas en casa es más seguro durante las 10 primeras semanas de embarazo."
    }
  },
  pl: {
    fields: {
      insertTenWeekReminderAfter: "#gform_page_13_6 .gform_page_fields",
      lmpWeeksLabel: "#field_13_60 > .gfield_label",
      dateSelect: "#input_13_19",
      weeksRadio: "#field_13_60",
      tenWeekWarning: "#field_13_61",
      weeksRadio5: "#choice_13_60_0",
      weeksRadio6: "#choice_13_60_1",
      weeksRadio7: "#choice_13_60_2",
      weeksRadio8: "#choice_13_60_3",
      weeksRadio9: "#choice_13_60_4",
      weeksRadio10: "#choice_13_60_5",
      nextButton: "#gform_next_button_13_21",
      nineWeekWarning: "#field_13_55",
      nineWeekAccept: "#input_13_55",
      nineWeekAcceptYes: "#choice_13_55_1"
    },
    text: {
      weeks: "tygodniu",
      days: "dniu",
      and: "i",
      estimation1: "Według Twojej odpowiedzi rozumiemy, że jesteś ",
      estimation2: ". Proszę potwierdzić, poniżej.",
      tenWeekReminder: "Pamiętaj! Używanie pigułki aborcyjnej w domu jest bezpieczniejsze w ciągu pierwszych 10 tygodniach ciąży."
    }
  },
  fr: {
    fields: {
      insertTenWeekReminderAfter: "#gform_page_22_6 .gform_page_fields",
      lmpWeeksLabel: "#field_22_59 > .gfield_label",
      dateSelect: "#input_22_19",
      weeksRadio: "#field_22_59",
      tenWeekWarning: "#field_22_60",
      weeksRadio5: "#choice_22_59_0",
      weeksRadio6: "#choice_22_59_1",
      weeksRadio7: "#choice_22_59_2",
      weeksRadio8: "#choice_22_59_3",
      weeksRadio9: "#choice_22_59_4",
      weeksRadio10: "#choice_22_59_5",
      nextButton: "#gform_next_button_22_21",
      nineWeekWarning: "#field_22_55",
      nineWeekAccept: "#input_22_55",
      nineWeekAcceptYes: "#choice_22_55_1"
    },
    text: {
      weeks: "semaine(s)",
      days: "jour(s)",
      and: "et",
      estimation1: "D'après votre réponse, nous comprenons que vous êtes enceinte de ",
      estimation2: " . Merci de confirmer ci-dessous.",
      tenWeekReminder: "N'oubliez pas ! L’avortement à domicile à l’aide de la pilule abortive est sans risque pendant les 10 premières semaines de grossesse."
    }
  },
  pt: {
    fields: {
      insertTenWeekReminderAfter: "#gform_page_23_6 .gform_page_fields",
      lmpWeeksLabel: "#field_23_59 > .gfield_label",
      dateSelect: "#input_23_19",
      weeksRadio: "#field_23_59",
      tenWeekWarning: "#field_23_60",
      weeksRadio5: "#choice_23_59_0",
      weeksRadio6: "#choice_23_59_1",
      weeksRadio7: "#choice_23_59_2",
      weeksRadio8: "#choice_23_59_3",
      weeksRadio9: "#choice_23_59_4",
      weeksRadio10: "#choice_23_59_5",
      nextButton: "#gform_next_button_23_21",
      nineWeekWarning: "#field_23_55",
      nineWeekAccept: "#input_23_55",
      nineWeekAcceptYes: "#choice_23_55_1"
    },
    text: {
      weeks: "semana (s)",
      days: "dia (s)",
      and: "e",
      estimation1: "Com base na sua resposta, entendemos que você está grávida de ",
      estimation2: " . Por favor, confirme abaixo.",
      tenWeekReminder: "Aviso! O uso das pílulas abortivas em casa é um procedimento seguro dentro das primeiras 10 semanas de gravidez."
    }
  },
  hi: {
    fields: {
      insertTenWeekReminderAfter: "#gform_page_24_6 .gform_page_fields",
      lmpWeeksLabel: "#field_24_59 > .gfield_label",
      dateSelect: "#input_24_19",
      weeksRadio: "#field_24_59",
      tenWeekWarning: "#field_24_60",
      weeksRadio5: "#choice_24_59_0",
      weeksRadio6: "#choice_24_59_1",
      weeksRadio7: "#choice_24_59_2",
      weeksRadio8: "#choice_24_59_3",
      weeksRadio9: "#choice_24_59_4",
      weeksRadio10: "#choice_24_59_5",
      nextButton: "#gform_next_button_24_21",
      nineWeekWarning: "#field_24_55",
      nineWeekAccept: "#input_24_55",
      nineWeekAcceptYes: "#choice_24_55_1"
    },
    text: {
      weeks: "सप्ताह",
      days: "दिन",
      and: "और",
      estimation1: "आपकी प्रतिक्रिया के आधार पर हम समझते है आपको ",
      estimation2: " का गर्भ है। कृपया नीचे पुष्टि करें।",
      tenWeekReminder: "ध्यान रहे! घर पर गर्भपात गोलियों का उपयोग गर्भावस्था के पहले 10 सप्ताह के भीतर सुरक्षित है।"
    }
  }
};
var getTotalDaysFrom = function(then) {
  var now = new Date();
  var diff = Math.floor(now.getTime() - then.getTime());
  var aDay = 1000 * 60 * 60 * 24;
  return Math.floor(diff/aDay);
}
var getSelectedDate = function(context) {
  var thenArray = $(context).val().split("/");
  return new Date(thenArray[2], thenArray[1]-1, thenArray[0]);
}
var getWeeks = function(totalDays) {
  return Math.floor(totalDays/7);
}
var getDays = function(totalDays) {
  return Math.floor(totalDays - getWeeks(totalDays) * 7);
}
var getWeekText = function(weeks, translatedWeek) {
  return (weeks > 0) ? (weeks + " " + translatedWeek) : "";
}
var getDayText = function(days, translatedDay) {
  return (days > 0) ? (days + " " + translatedDay) : "";
}
var getAndText = function(days, weeks, translatedAnd) {
  return (weeks > 0 && days > 0) ? (" " + translatedAnd + " ") : "";
}
var getEstimatedLMPText = function(totalDays, translatedWeek, translatedDay, translatedAnd) {
    var weeks = getWeeks(totalDays);
    var days = getDays(totalDays);
    var weekText = getWeekText(weeks, translatedWeek);
    var dayText = getDayText(days, translatedDay);
    var andText = getAndText(days, weeks, translatedAnd);
    return weekText + andText + dayText;
}
var setTenWeekReminder = function(reminderText, insertAfterSelector) {
  var divId = "tenWeekReminder";
  var replaceWithText = "<div id=\"" + divId + "\"><h5>" + reminderText + "</h5></div>";
  if($('#' + divId).length) {
    $('#' + divId).replaceWith(replaceWithText);
  } else {
    $( replaceWithText ).insertAfter(insertAfterSelector);
  }
};
var hideTenWeekReminder = function() {
  $("#tenWeekReminder").hide();
}
var updateWeeksLabel = function(newText, labelSelector) {
  $(labelSelector).text(newText);
};
var handleDateChange = function(language, totalDays) {
  var v = vals[language];
  var vt = v["text"];
  var vf = v["fields"];
  if(totalDays > 0) {
    var estimatedLMPText = getEstimatedLMPText(totalDays, vt["weeks"], vt["days"], vt["and"]);
    estimatedLMPText = vt["estimation1"] + estimatedLMPText + vt["estimation2"];
    updateWeeksLabel(estimatedLMPText, vf["lmpWeeksLabel"]);
    $(vf['weeksRadio']).show();
    if(getWeeks(totalDays) <= 8) {
      setTenWeekReminder(vt["tenWeekReminder"], vf["insertTenWeekReminderAfter"]);
      $(vf['nextButton']).show();
    } else {
      hideTenWeekReminder();
      $(vf['nextButton']).hide();
    }
    if(getWeeks(totalDays) <= 9) {
      $(vf['tenWeekWarning']).hide();
    }
    $(vf["nineWeekWarning"]).hide();
    if(getWeeks(totalDays) <= 5) {
      $(vf["weeksRadio5"]).prop("checked", true);
    } else if(getWeeks(totalDays) <= 6) {
      $(vf["weeksRadio6"]).prop("checked", true);
    } else if(getWeeks(totalDays) <= 7) {
      $(vf["weeksRadio7"]).prop("checked", true);
    } else if(getWeeks(totalDays) <= 8) {
      $(vf["weeksRadio8"]).prop("checked", true);
    } else if(getWeeks(totalDays) <= 9) {
      $(vf["weeksRadio9"]).prop("checked", true);
      $(vf["nineWeekWarning"]).show();
    } else {
      $(vf["weeksRadio10"]).prop("checked", true);
      $(vf["tenWeekWarning"]).show();
    }
  }
}
$.each(vals, function(language, v) {
  var vf = v['fields'];
  $(vf['dateSelect']).change(function () {
    var then = getSelectedDate(this);
    var totalDays = getTotalDaysFrom(then);
    handleDateChange(language, totalDays);
  });
  $(vf['weeksRadio']).hide();
  $(vf['nineWeekAccept']).change(function() {
    var nineWeekConfirm = $(vf['nineWeekAcceptYes']).prop("checked");
    if (nineWeekConfirm) {
      $(vf['nextButton']).show();
    } else {
      $(vf['nextButton']).hide();
    }
  });
  $(vf['weeksRadio']).change(function () {
    var fiveClicked =  $(vf['weeksRadio5']).prop('checked');
    var sixClicked = $(vf['weeksRadio6']).prop('checked');
    var sevenClicked = $(vf['weeksRadio7']).prop('checked');
    var eightClicked = $(vf['weeksRadio8']).prop('checked');
    var nineClicked = $(vf['weeksRadio9']).prop('checked');
    var tenClicked = $(vf['weeksRadio10']).prop('checked');
    var totalDays = 7;
    if(fiveClicked) totalDays = totalDays * 5;
    else if (sixClicked) totalDays = totalDays * 6;
    else if (sevenClicked) totalDays = totalDays * 7;
    else if (eightClicked) totalDays = totalDays * 8;
    else if (nineClicked) totalDays = totalDays * 9;
    else totalDays = totalDays * 10;
    handleDateChange(language, totalDays);
  });
});
  })(jQuery);
EOT;
  GFFormDisplay::add_init_script($form['id'], 'gform_display_weeks', GFFormDisplay::ON_PAGE_RENDER, $script);
}
/************* ACTIVE SIDEBARS ********************/
// Sidebars & Widgetizes Areas
function bones_register_sidebars() {
  register_sidebar(array(
    'id' => 'sidebar1',
    'name' => __( 'Sidebar 1', 'bonestheme' ),
    'description' => __( 'The first (primary) sidebar.', 'bonestheme' ),
    'before_widget' => '<div id="%1$s" class="module module--primary cf %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="h3 module__title">',
    'after_title' => '</h2>',
  ));
  register_sidebar(array(
    'id' => 'sidebar2',
    'name' => __( 'Sidebar 2', 'bonestheme' ),
    'description' => __( 'The second (secondary) sidebar.', 'bonestheme' ),
    'before_widget' => '<div id="%1$s" class="module module--primary cf %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="h3 module__title">',
    'after_title' => '</h2>',
  ));
  register_sidebar(array(
    'id' => 'sidebar3',
    'name' => __( 'Sidebar 3', 'bonestheme' ),
    'description' => __( 'The third sidebar.', 'bonestheme' ),
    'before_widget' => '<div id="%1$s" class="module module--primary cf %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="h3 module__title">',
    'after_title' => '</h2>',
  ));
  register_sidebar(array(
    'id' => 'sidebar4',
    'name' => __( 'Sidebar 4', 'bonestheme' ),
    'description' => __( 'The fourth sidebar.', 'bonestheme' ),
    'before_widget' => '<div id="%1$s" class="module module--primary cf %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="h3 module__title">',
    'after_title' => '</h2>',
  ));
  register_sidebar(array(
    'id' => 'sidebar-social',
    'name' => __( 'Social Sidebar', 'bonestheme' ),
    'description' => __( 'The social sidebar.', 'bonestheme' ),
    'before_widget' => '<div id="%1$s" class="module module--primary cf %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="h3 module__title">',
    'after_title' => '</h2>',
  ));
  register_sidebar(array(
    'id' => 'sidebar-advertising',
    'name' => __( 'Advertising Sidebar', 'safe2choose-test' ),
    'description' => __( 'The advertising sidebar.', 'safe2choose-test' ),
    'before_widget' => '<div class="module--primary>',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="module__title">',
    'after_title' => '</h3>',
  ));
  
} // don't remove this bracket!
/* DON'T DELETE THIS CLOSING TAG */ 
?>