(function (){
    var token = $.cookie("test-chat");
    //------------------------------------Вывод сообщений------------------------------------------
    var Message, messageArea = $('.chat-messages');
    Message = function(arg) {
        this.text = arg.text, this.message_side = arg.message_side;
        this.draw = (function(_this) {
            return function() {
                var $message;
                $message = $($('.message_template').clone().html());
                $message.addClass(_this.message_side).find('.text').html(_this.text);
                $('.chat-messages').append($message);
                return setTimeout(function() {
                    return $message.addClass('appeared');
                }, 0);
            };
        })(this);
        return this;
    };

    $(function() {
        //---------------------Проверяем есть ли куки------------------------------
        if($.cookie("test-chat") == null)
            $(location).attr("href", "/chat/ui/login");
        else
            token = $.cookie("test-chat");
// ----------------------------------_SOCKETS--------------------------------------------------
        let ws = new WebSocket('ws://192.168.1.222:2346?token='+token);

        ws.onopen = function () {
            ws.addEventListener('message', (event) => {
                var data = JSON.parse(event.data);
                switch (data["datatype"]){
                    case "listmessages": // Список всех имеющихся сообщений от пользователся
                        viewMessages(data["data"]);
                        break;
                    case "newmessageadd": // Новое сообщение от пользователя
                        viewNewMessage(data["data"], false);
                        break;
                    case "adminmessageadd": // Новое сообщение от админа
                        console.log(data["data"]);
                        viewNewMessage(data["data"], true);
                        break
                }
            });
            ws.send('getmessages,.!'+token); // Запрос списка сообщений
        };
        ws.onerror = function () {

        };
        ws.onclose = function () {

        };

        var $message_input;

        var message_side;
        message_side = 'left';
        $message_input = $('.message_input');
// ---------------------------формируем сообщение --------------------------------
        function getMessageText() {
            return $message_input.val();
        }
//----------------------------------Список сообщений-------------------------------
        function viewMessages(message){
            $.each(message, function (key, value) {
                $.each(value, function (key2, value2) {
                    switch(key2){
                        case "message_to":
                            if(value2 === "admin")
                                message_side = "left";
                            else
                                message_side = "right";
                            break;
                        case "message":
                            message = value2;
                            break;
                        case "time_message":
                            break;
                    }
                });
                sendMessage(message);
            });
        }
//-----------------------------------Одно сообщение ---------------------------------
        function viewNewMessage(message, admin){
            if(admin)
                message_side = "left";
            else
                message_side = "right";
            sendMessage(message);
        }
// -------------------------------Показать сообщения --------------------------------
        sendMessage = function(text) {
            var message;
            message = new Message({
                text: text,
                message_side: message_side
            });
            message.draw();
            return messageArea.animate({
                scrollTop: messageArea.prop('scrollHeight')
            }, 300);
        };
        // ----------------------------------Клики по кнопке отправить или enter --------------
        $('.input-group-append').click(function(e) {
            sendNewMessageToServer(getMessageText());
        });
        $('.message_input').keyup(function(e) {
            if (e.which === 13) {
                sendNewMessageToServer(getMessageText());
            }
        });
        //----------------------------------Отправить сообщение админу---------------------------
        function sendNewMessageToServer(text) {
            ws.send("newmessage,.!"+text+",.!"+token);
            $message_input.val("");
        }
    });
}).call(this);