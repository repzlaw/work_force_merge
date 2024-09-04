$(document).ready(function() {
    var $input = $('.talent-box-button');
    $input.on('change', function () {
        $input.closest('.talent-box-clickable').removeClass('selected');
        $(this).closest('.talent-box-clickable').addClass('selected');
    });
  });