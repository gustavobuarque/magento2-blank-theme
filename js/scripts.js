$(document).ready(function () {

  $("#menu").menu({
    position: {
      my: "left top",
      at: "left top+45"
    }
  });

  /* Minicart */

  $(".ui-dialog > .block-minicart").hide();

  $("#btn-minicart-close").click(function () {
    $(".ui-dialog > .block-minicart").hide();
  });

  $(".minicart-wrapper > a.showcart").click(function () {
    $(".ui-dialog > .block-minicart").show();
  });

  $(".product > span.toggle").click(function () {
    $(".product > .content").toggle();
  });

  $("input.cart-item-qty").change(function () {
    $(".update-cart-item").show();
  });


});