$(document).ready(function () {
  $(".alert").on({
    mouseenter: function () {
      $(this).css("background-color", "lightgray");
    },
    mouseleave: function () {
      $(this).css("background-color", "lightblue");
    },
    click: function () {
      $(this).css("background-color", "yellow");
      $("#e").filter(function () {
        var email = $("#e").val();
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        if (!emailReg.test(email)) {
          $(".errmail").show();
        }
      });
      $("#mdp").filter(function () {
        var mdp = $("#mdp").val();
        var mdpReg =
          /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[-+!*$@%_])([-+!*$@%_\w]{0,8})$/;
        if (!mdpReg.test(mdp)) {
          alert("Veuillez entrer un mdp valide");
        }
      });
    },
  });
});
