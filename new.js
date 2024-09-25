  $(document).ready(function() {

  $(".operator").on('click',function() {
      $("#product1_total_price").text($("#product1_base_price").val() * $("#number").val());
  });
});