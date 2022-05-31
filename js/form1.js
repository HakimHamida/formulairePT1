$(document).ready(function () {
  $(".errMail").hide();
  $(".alert").on({
    mouseenter: function () {
      $(this).css("background-color", "lightgray");
    },
    mouseleave: function () {
      $(this).css("background-color", "lightblue");
    },
    click: function (e) {
      $(this).css("background-color", "yellow");
      e.preventDefault();
      $("#e").filter(function () {
        var email = $("#e").val();
        var emailReg = /^([\w-.]+@([\w-]+.)+[\w-]{2,4})?$/;
        if (!emailReg.test(email)) {
          $(".errMail").show();
          return false;
        }
      });
    },
  });
});
