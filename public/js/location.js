$(document).ready(function(){
        $('#city').keyup(function(e){
            var user_input = $(this).val();
            if(user_input.length > 2){
            var token  = $('meta[name=_token]').attr('content');
            var mydata = {};
            e.preventDefault();
            $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': token }}); 
            mydata['_token'] = token;           
            mydata['user_input'] = user_input;
            		
		$.ajax({
			method: "POST",
			url: "getFullAddress",
			cache: false,
			data: mydata,
			dataType: 'json', 
			success: function (response) {
                                $('#result').show();
				$('#result').html(response['msg']);                               
			},
			error: function (data) {
                            console.log('Error:', data);
                        }
		});
            }
        });    
        
        $('#addPhone').click(function (){
            $('div#phone').clone(true).prependTo("div#phones");    
            //$(".phone").mask("+************");
        });
        
        window.onload = function() {
        
            $.urlParam = function(name){
                var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
                if (results == null){
                    return null;
                }else{
                return results[1] || 0;
                }
            }
            tab = $.urlParam('tab');
            
            switch (tab){
                case "1":
                    $('[href="#tab-1-1"]').tab('show')
                    $('#tab-1-1').attr('class', 'tab-pane fade in active');
                    $('#tab-1-2').attr('class', 'tab-pane fade');
                    $('#tab-1-3').attr('class', 'tab-pane fade');
                    $('#tab-1-4').attr('class', 'tab-pane fade');
                    break;
                case "2":
                    $('[href="#tab-1-2"]').tab('show')
                    $('#tab-1-1').attr('class', 'tab-pane fade');
                    $('#tab-1-2').attr('class', 'tab-pane fade in active');
                    $('#tab-1-3').attr('class', 'tab-pane fade');
                    $('#tab-1-4').attr('class', 'tab-pane fade');
                    break;
                case "3":
                    $('[href="#tab-1-3"]').tab('show')
                    $('#tab-1-1').attr('class', 'tab-pane fade');
                    $('#tab-1-2').attr('class', 'tab-pane fade');
                    $('#tab-1-3').attr('class', 'tab-pane fade in active');
                    $('#tab-1-4').attr('class', 'tab-pane fade');
                    break;
                case "4":
                    $('[href="#tab-1-4"]').tab('show')
                    $('#tab-1-1').attr('class', 'tab-pane fade');
                    $('#tab-1-2').attr('class', 'tab-pane fade');
                    $('#tab-1-3').attr('class', 'tab-pane fade');
                    $('#tab-1-4').attr('class', 'tab-pane fade in active');
                    break;
            }
          
            
        };


});

function setAddress(city_id){
    var address  = $('#'+city_id).html();
    $('#city').val(address);
    $('#city_id').val(city_id);
    $('#result').hide();   
}

jQuery(function($){    
   //$(".phone").mask("+************");
});


 