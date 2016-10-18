$(document).ready(function(){

  var option = {
    offset: 80
  };

  $('[data-spy="scroll"]').scrollspy(option);

  $('#spybar').on('activate.bs.scrollspy', function () {
      console.log('watching scrollspy');
});

});
