function htmlEncode(value) {
  return $('.test').text(value).html();
}

  function printMainMsg(msg_id, nickname, time, content) {
    const edit = `<div class='btn edit__msg'>編輯</div>
                  <div class='btn del__msg'>刪除</div>
                    <form class='edit__msg__form'>
                      <input class='edit__text' value='${htmlEncode(content)}'/>
                      <div class='btn submit__edited__msg'>Submit</div>
                    <form>`;
    const msg = `<div class='message' msg-id='${msg_id}'>
                  <div class='info'>
                    <span class='nickname'>${htmlEncode(nickname)}</span></br>
                    <span class='time__stamp'>${time}</span>
                  </div>
                  <div class='content'>
                    <div class='msg__text'>${htmlEncode(content)}</div>
                    <div class='edit__block'>${edit}</div>
                  </div>
                  <div class='show__submsg'>-></div>
                  <div class='submsg__block'>
                    <input class='input__submsg'/>
                    <div class='btn submit__submsg'>Submit</div>
                    <div class='submsg'></div>
                  </div>
                </div>`;
    return msg;
  }

  function printSubMsg(origin, del_permissioin, msg_id, nickname, content) {
    let del_opt = (del_permissioin == 'get'? "<span class='del__submsg' submsg-id='msg_id'> x </span>":"");
    const sub_msg =`<div class='current__submsg ${origin}'>
                      ${del_opt}
                     <span class='sub__user'>${htmlEncode(nickname)}: </span>
                     <span class='sub__content'>${htmlEncode(content)}</span>
                   </div>`;
     return sub_msg;
   }

  $(document).ready(function() {
  // message and sub-message edit-block toggled 
    $(".edit__msg__form").hide();
    $(".message__section").on("click", ".edit__msg", function() {
    $(this).next().next().toggle();
    });
    $(".submsg__block").hide();
    $(".message__section").on("click", ".show__submsg", function() {
    $(this).next().toggle();
    });
    //common variables set up
    let reply_content = $(".reply__input").val();
    const login_name = $(".logined__username").html();
    const login_user_id = $("input[name=user_id]").val();
    // delete fe message & submsg
    $(".message__section").on("click", ".del__msg", function() {
      const main_msg = $(this).parents(".message");
      const main_msg_id = $(this).parents(".message").attr('msg-id');
      if(!confirm('等等...確定要刪除這筆留言？')) return;
      $.ajax({
        method: "POST",
        url: "./service.php",
        data: {
          action: 'del_msg',
          id: main_msg_id
        }
      }).done(()=> {
          alert("Change finished.");
          main_msg.remove();
      }).fail(()=> {
          alert('failed');
        });
      });

    $(".message__section").on("click", ".del__submsg", function() {
      const sub_msg_id = $(this).attr('submsg-id');
      const sub_msg = $(this).parent();
      $.ajax({
        method: "POST",
        url: "./service.php",
        data: {
          action: 'del_msg',
          id: sub_msg_id
        }
      }).done(()=> {
          sub_msg.remove();
      }).fail(()=> {
          alert('failed');
        });
      });

    // add main-message
    $(".reply__section").on("click", ".submit__msg", function() {
      let reply_content = $(".reply__input").val();
      $.ajax({
        method: "POST",
        url: "./service.php",
        data: {
          action: "add_msg",
          user_id: login_user_id,
          parent_msg_id: '0',
          content: reply_content,
        }
      }).done(function(resp) {
        const consq = JSON.parse(resp);
        // ES6 way
        const [id, time, content] = [consq.id, consq.time, consq.content];
        const neo_message = printMainMsg(id, login_name, time, content);
        $(".reply__input").val('');
        $(".message__section").prepend(neo_message);
        $(".edit__msg__form").hide();
        $(".submsg__block").hide();
      }).fail(function(resp) {
        alert("Please try again.");
      });
    });

    // add sub-message
    $(".message__section").on("click", ".submit__submsg", function() {
      const main_msg_id = $(this).parents(".message").attr('msg-id');
      const main_msg_owner = $(this).parents(".message").find(".nickname").html();
      const sub_msg = $(this).next();
      let sub_msg_content = $(this).prev();
      let msg_origin = (login_name === main_msg_owner)? "same" : "other";
      let del_permissioin = "get";
      $.ajax({
        method: "POST",
        url: "./service.php",
        data: {
          action: "add_msg",
          user_id: login_user_id,
          parent_msg_id: main_msg_id,
          content: sub_msg_content.val(),
        }
      }).done(function(resp) {
        const consq = JSON.parse(resp);
        const [msg_id, subcontent] = [consq.msg_id, consq.content];
        const neo_submessage = printSubMsg(msg_origin, del_permissioin, msg_id, login_name , subcontent);
        sub_msg.prepend(neo_submessage);
        sub_msg_content.val('');
      }).fail(function(resp) {
        alert("Please try again.");
      });
    });

    // edit message
    $(".message__section").on("click", ".submit__edited__msg", function() {
      const main_msg_id = $(this).parents(".message").attr('msg-id');
      const main_msg_content = $(this).prev().val();
      let original_text  = $(this).parents(".edit__block").prev();
      $.ajax({
        method: "POST",
        url: "./service.php",
        data: {
          action: 'edit_msg',
          content: main_msg_content, 
          id: main_msg_id
        }
      }).done(() => {
        alert("Changed saved.");
        original_text.text(main_msg_content);
        $(this).parent().hide();
      }).fail(() => {
        alert("Please try again.");
      });
    });
  });
