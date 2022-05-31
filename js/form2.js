$(document).ready(function () {
  $(".send_form").on("click", function (e) {
    var mdp = $(".mdp").val();
    var mdp2 = $(".mdp2").val();

    if (mdp !== mdp2) {
      alert(mdp + "ne pas ==" + mdp2);
      e.preventDefault();
      return false;
    }
  });
  $(".alert").on({
    mouseenter: function () {
      $(this).css("background-color", "lightgray");
    },
    mouseleave: function () {
      $(this).css("background-color", "lightblue");
    },
    click: function () {
      $(this).css("background-color", "yellow");

      $("#mdp").filter(function () {
        var mdp = $("#mdp").val();
        var mdpReg =
          /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[-+!*$@%_])([-+!*$@%_\w]{0,8})$/;
        if (!mdpReg.test(mdp)) {
          alert("Veuillez entrer un mdp valide");
        }
      });
      $("#mdp2").filter(function () {
        var mdp2 = $("#mdp2").val();
        var mdp2Reg =
          /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[-+!*$@%_])([-+!*$@%_\w]{0,8})$/;
        if (!mdp2Reg.test(mdp2)) {
          alert("Veuillez entrer un mdp2 valide");
        }
      });
    },
  });
});
