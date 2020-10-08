(function() {
    $(function() {
        if($.cookie("test-chat") != null){
            $(location).attr("href", "/chat/ui/guess");
        }
// ----------------------------------_SOCKETS--------------------------------------------------
        let ws = new WebSocket('ws://192.168.1.222:2346');

        ws.onopen = function () {
            ws.addEventListener('message', (event) => {
                var data = JSON.parse(event.data);
                if (data["datatype"] === "createuser"){
                    $.cookie("test-chat", data["data"], {expires : 30, path: '/'});
                    $(location).attr("href", "/chat/ui/guess");
                }
            });
        };
        ws.onerror = function () {

        };
        ws.onclose = function () {

        }
//-----------------------------------------------------------------------------------
        var getMessageText;
        getMessageText = function() {
            var $message_input;
            $message_input = $('.input100');
            return $message_input.val();
        };

        $('.login100-form-btn').click(function() {
            status = false;
            sendMessageToServer(getMessageText());
        });
        $('.input100').keyup(function(e) {
            if (e.which === 13) {
                return sendMessageToServer(getMessageText());
            }
        })
        function sendMessageToServer(text){
            ws.send("createnewuser,.!"+text);
        }
    });
}).call(this);