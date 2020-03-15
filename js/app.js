$(function() {
  // この中に書く
  $("#match").hide();
  $("#select").hide();
  $("#opponent").hide();
  $("#restart").hide();
  $("#start").on("click", function() {
    $("#startimg").hide();
    $("#match").show();
    $("#select").show();
    $("#start").hide();
  });

  $(".gu").on("click", function() {
    $(".guide").hide();
    $(".tyo").hide();
    $(".pa").hide();
    $("#opponent").show();
    $("#restart").show();
  });
  $(".tyo").on("click", function() {
    $(".guide").hide();
    $(".gu").hide();
    $(".pa").hide();
    $("#opponent").show();
    $("#restart").show();
  });
  $(".pa").on("click", function() {
    $(".guide").hide();
    $(".gu").hide();
    $(".tyo").hide();
    $("#opponent").show();
    $("#restart").show();
  });

  $("#restart").on("click", function() {
    location.reload();
  });
  // この下は消さない
});
