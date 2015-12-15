//Scroll Bar color adjust

$(document).ready(function() {
  var scroll_start = 0;
  var startchange = $('.container');
  var offset = startchange.offset();
  if ($(window).width() > 768) {
    if (startchange.length) {
      $(document).scroll(function() {
        scroll_start = $(this).scrollTop();
        if (scroll_start > offset.top) {
          $(".navbar-default").css('background-color', 'gray');
        } else {
          $('.navbar-default').css('background-color', 'transparent');
        }
      });
    }
  } else {
    $('.navbar-default').css('background-color', 'gray');
  }

});

/*
$(document).scroll(function() {
  var dHeight = $(this).height()-$(window).height();
  if (dHeight >= $(this).scrollTop()) {
    $('.navbar-default').css('background', 'rgba(96,96,96,' + $(this).scrollTop() / dHeight + ')');
  }
});
*/
//Newsfeed Buttons Show/Hide

$(document).ready(function() {

    $('.containero').hide();
    $('#btn-showinfo').click(function(){
        var target = "#" + $(this).data("target");
        $(".containero").not(target).hide();
        $(target).show();
    });

});

$(document).ready(function() {
  $('#btn-hideinfo').click(function(){
    $('.containero').hide();
  });
});

$(document).ready(function(){

// Add slideDown animation to dropdown
$('.dropdown').on('show.bs.dropdown', function(e){
  $(this).find('.dropdown-menu').first().stop(true, true).slideDown(200);
});

// Add slideUp animation to dropdown
$('.dropdown').on('hide.bs.dropdown', function(e){
  $(this).find('.dropdown-menu').first().stop(true, true).slideUp(200);
});

});

//---------Carousel--------//

$(document).ready(function(){

$('.carousel').carousel({                                    
  interval: 3000 //changes the speed
  })

});

 //------data table for Baseline chart------ 

$(document).ready(function() {
    $('#example').DataTable( {
        initComplete: function () {
            this.api().columns().every( function () {
                var column = this;
                var select = $('<select><option value=""></option></select>')
                    .appendTo( $(column.footer()).empty() )
                    .on( 'change', function () {
                        var val = $.fn.dataTable.util.escapeRegex(
                            $(this).val()
                        );
 
                        column
                            .search( val ? '^'+val+'$' : '', true, false )
                            .draw();
                    } );
 
                column.data().unique().sort().each( function ( d, j ) {
                    select.append( '<option value="'+d+'">'+d+'</option>' )
                } );
            } );
        }
    } );
} );




