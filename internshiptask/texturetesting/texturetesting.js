/*var valuediv = parseInt($("notificationpop").text());

$("notificationpop").click(function () {
  $("notificationpop").text(++valuediv);
  console.log(valuediv);
  $("notificationpop").addClass("animatepop");
  $("notificationpop")[0].addEventListener(
    "animationend",
    function () {
      $("notificationpop").removeClass("animatepop");
    },
    false
  );
});

$("buttonpop").click(function () {
  valuediv = 1;
  $("notificationpop").text(valuediv);
});*/

var valuediv = parseInt($("notificationpop").text());


    function continuedoing() {
  $("notificationpop").text(++valuediv);
  console.log(valuediv);
  $("notificationpop").addClass("animatepop");
  $("notificationpop")[0].addEventListener(
    "animationend",
    function () {
      $("notificationpop").removeClass("animatepop");
    },
    false
  );
};

$("buttonpop").click(function () {
  valuediv = 1;
  $("notificationpop").text(valuediv);
});
