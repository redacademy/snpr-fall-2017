(function($){
  $('.subscribe-button').on('click', function(event){
    event.preventDefault();
    // var url = ";

    $.ajax({
      url: "https://us17.api.mailchimp.com/3.0/lists/",
      method: 'GET',
      user: 'anystring:9fb90cee90e677f026434397fede5bbf-us17',
      header: 'content-type: application/json'
      // header: ['content-type: application/json' ,"Authorization: apikey 9fb90cee90e677f026434397fede5bbf-us17"]
    })

    //DATA PROCESSING IF RETRIVING DATA WAS SUCCESSFUL
    .done(function(result){
      console.log(result);
    })


  })
  


})(jQuery)
