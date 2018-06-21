$(document).ready(function(){
    $('#chat-form').keypress(function(){
        if(e.keyCode == 13){
            var send_message = $("#send_message").val();
            if(send_message.length != ""){
                $.ajax({
                    type: 'POST',
                    url: 'ajax/send_message.php',
                    data: {send_message:send_message},
				    dataType: 'JSON',
				    success: function(feedback){
				        if(feedback.status == "success"){
				            $('.chat_form').trigger("reset");
				            show_messages();
				            $(".messages").animate({
				                scrollTop: $(".messages")[0].scrollHeight
				            }, 2000);
				        }
				    }
                });
            }
        }    
    });
    
    // Show messages from the database
    function show_messages(){
        var msg = true;
        $.ajax({
            type : 'GET',
   	        url : 'ajax/show_messages.php',
   	        data : {'message': msg},
   	        success: function(feedback){
   	            $(".messages").html(feedback);
   	        }
        });
    }
    
    show_messages();
    $(".messages").animate({
        scrollTop: $(".messages")[0].scrollHeight
    }, 2000);
});