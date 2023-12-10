(function($){
    $(function(){
  
      $('.parallax').parallax()
      $('.sidenav').sidenav()
      $('.fixed-action-btn').floatingActionButton()
      $('.carousel').carousel()
      $('.collapsible').collapsible()
      $('select').formSelect()
      $('.datepicker').datepicker()
      $('.chips-placeholder').chips({
        placeholder: 'Enter key words',
        secondaryPlaceholder: '+Word',
      })

    }) // end of document ready
  })(jQuery) // end of jQuery name space
  