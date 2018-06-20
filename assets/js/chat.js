$(document).ready(function(){
    $('#chat-form').keypress(function(){
        if(e.keyCode == 13){
            var send_message = $("#send_message").val();
            if(send_message.length != ""){
                $.ajax({
                    type: 'POST',
                    url: '',
                    data: {send_message:send_message},
				    dataType: 'JSON',
				    success: function(feedback){
				        
				    }
                });
            }
        }    
    });
});