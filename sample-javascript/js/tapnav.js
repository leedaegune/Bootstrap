$(document).ready(function(){
//
// });

$(function(){
  $('#myTab a:last').tab('show');

  $('a[data-toggle="tab"]').on('shown.bs.tab', function (event) {
    $(event.relatedTarget).find('i').remove();
    $(event.target).prepend('<i class="fa fa-arrow-right"></i>');
    });
    // console.log(event.target); // newly activated tab
    // console.log(event.relatedTarget); // previous active tab
    //   var href = $(event.target).attr('href');
    //   console.log(href);
    //   console.log($(href).html());
    // });
    $('#myTab').on('shown.bs.tab', function(event){
      $(event.relatedTarget).find('i').css('display', 'none');
      $(event.target).find('i').css('display', 'inline');
    });
});
});
