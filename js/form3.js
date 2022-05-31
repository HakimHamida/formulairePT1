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
          alert("Veuillez entrer un email valide");
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

$(document).ready(function () {
  $("#mdp").keyup(function () {
    //On vérifie si le nom et le prénom est ok ou n'a pas été déjà pris
    verifier_id();
  });
});
$(".alert").on("click", function () {
  $.ajax({
    type: "post",
    url: "../checkLogin.php",
    data: {
      mdp_check: $("#mdp").val(),
      email_check: $("#e").val(),
    },
    success: function (data) {
      if (data == "success") {
        $("#nomPrenom").removeClass("is-invalid");
        $("#nomPrenom").addClass("is-valid");
      } else {
        $("#nomPrenom").removeClass("is-valid");
        $("#nomPrenom").addClass("is-invalid");
      }
    },
  });
});
