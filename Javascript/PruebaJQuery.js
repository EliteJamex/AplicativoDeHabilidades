$(document).ready(function (e) {
    var Hola = $('.acordeon').on('click',"h3", function(){
        alert($(this).attr('id'))
      });
    $(".acordeon").find($(this)).click(function (e) {
        $(".acordeon").find($(this)).next().css({
            'width': '100%',
            'max-height': '1000px',
            'padding': '10px',
            'transition':'all 0.1s ease-in'
        });
    });

  $('body').on('click', '#items_en_uso span', function(){
    alert($(this).attr('id'))
  })
});