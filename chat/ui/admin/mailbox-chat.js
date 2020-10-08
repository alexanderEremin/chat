(function() {
  var Message, token, messageArea = $('.chat-messages');
  // ----------------------------------_SOCKETS--------------------------------------------------
  let ws = new WebSocket('ws://192.168.1.222:2346?token=admin');

  ws.onopen = function () {
    ws.addEventListener('message', (event) => {
    var data = JSON.parse(event.data);
    switch (data["datatype"]){
        // Список всех текущих пользователей
      case "listusers":
        console.log("Список всех текущих пользователей"+event.data);
        viewListUsers(data["data"]);
        break;
        // данные по новому пользователю
      case "userdata":
        console.log("данные по новому пользователю"+event.data);
        viewListUsers(data["data"]);
        break;
        // Появился новый пользователь запрос информации по нему
      case "newuseradd":
        console.log("Появился новый пользователь"+event.data);
        ws.send('userdata,.!'+data["data"]); // Запрос списка пользователей
        break;
        // Список всех имеющихся сообщений от пользователся
      case "listmessages":
        viewMessage(data["data"]);
        break;
        // Админ написал пользователю
      case "messageadd":
          if (data["data"] === "ok")
            viewNewMessage(data["message"], true);
          else
            return; // если вернулось сообщение об ошибке нужно сообщить админу
        break;
        // Пользователь добавил новое сообщение
      case "newmessageadd":
        if(token === data['token']){
          viewNewMessage(data["data"], false);
        }else{
          addMarkerNewMessage(data['token']);
        }
        break;
    }
    });
    ws.send('getlistusers,.!'); // Запрос списка пользователей
  };
  ws.onerror = function () {

  };
  ws.onclose = function () {

  };
//------------------------------------Вывод сообщений------------------------------------------
  // ---------------------------------Показать сообщения -------------------------------------
  var message_side = 'left';
  //----------------------------------Список сообщений-------------------------------
  function viewMessage(message){
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
      message_side = "right";
    else
      message_side = "left";
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
  //-----------------------------Вставляем сообщение ------------------------
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
    var $message_input;
    $message_input = $('.message_input');
// ---------------------------формируем сообщение --------------------------------
    function getMessageText() {
      return $message_input.val();
    }
//-------------------------- Клик по "ОТПРАВИТЬ СООБЩЕНИЕ"--------------------
    $('.input-group-append').click(function(e) {
      sendMessageToServer(getMessageText());
    });
    $message_input.keyup(function(e) {
      if (e.which === 13) {
        sendMessageToServer(getMessageText());
      }
    });
    function sendMessageToServer(text){
      ws.send("newmessageadmin,.!"+text+",.!"+token);
      $message_input.val("");
    }
//----------Обработка кликов по списку с пользователсями----------------------
    $(".list-unstyled").on("click", ".chat-messages-template", function () {
      $('.chat-messages').empty();
      token = this.id;
      ws.send("getmessages,.!"+token);
      removeMarker(token);
    });
  });
//----------Боковая панель----------------------------------------------------
  // Показать список пользователей
  var User, username, usertoken, userstatus;
  User = function(arg) {
    this.draw = (function(_this) {
      return function() {
        var $userdata;
        $userdata = $($('.template-list-users').clone().html());
        $userdata.attr("id", arg.usertoken);
        $userdata.find('.name-user').html(arg.username);
        $userdata.find('.usr-status').html(arg.userstatus ? "Онлайн" : "Оффлайн");
        $('.list-unstyled').append($userdata);
      };
    })(this);
    return this;
  };

  function viewListUsers(data){
    $.each(data, function (key, value) {
      $.each(value, function (key2, value2) {
        switch(key2){
          case "name":
            username = value2;
            break;
          case "token":
            usertoken = value2;
            break;
          case "status":
            userstatus = value2;
            break;
        }
      });
      sendUser(username, usertoken, userstatus);
    });
  }

  sendUser = function(name, token, status) {
    var user;
    $('.message_input').val('');
    user = new User({
      username: name,
      usertoken: token,
      userstatus: status
    });
    user.draw();
  };
  // ---------------Добавить к пользоватулю новое непрочитанное сообщение ------
  function addMarkerNewMessage(tokenuser) {
    marker = $("#"+tokenuser).find($(".message-badge"));
    countmarker = marker.text();
    if(countmarker.length > 0) {
      countmarker++;
      marker.empty().text(countmarker);
    }else
      marker.removeClass("d-none").text(1);
  }
  //--------------Удалить паркер непрочитанных сообщений --------------------
  function removeMarker(tokenuser){
    marker = $("#"+tokenuser).find($(".message-badge")).empty().addClass("d-none");
  }
}).call(this);