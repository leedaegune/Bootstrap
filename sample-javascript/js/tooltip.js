$(document).ready(function() {
  $('a').tooltip('show');

  var i = 0;
 setTimeout(function() {
   $('a').tooltip('hide');
  //  console.log("setTimeout : ", i);
   setInterval(function() {
     if (i < 6) {
       $('a').tooltip('toggle');
     }
    //  console.log("setInterval : ", i);
     i++;
   }, 500);
 }, 3000);



});

 // setTimeout(function() {
 //   $('a').tooltip('show');
 // }, 3500);
 //
 //
 //  setTimeout(function() {
 //    $('a').tooltip('hide');
 //  }, 4000);
 //
 //
 // setTimeout(function() {
 //   $('a').tooltip('show');
 // }, 4500);
 //
 //
 //  setTimeout(function() {
 //    $('a').tooltip('hide');
 //  }, 5000);
 //  });
