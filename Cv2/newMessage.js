$(function(){
  newMessage();
});

var form = '#newMessage';

var form_submit = '#newMessage .form-submit',
    form_error = '#newMessage .form-error';

var name = '#newMessage #senderName',
    email = '#newMessage #senderEmail',
    message = '#newMessage #senderMessage';

// Errors
var all_required_err = '<p>Veuillez complèter tous les champs</p>',
    name_error = '<p>Le nom ne peut contenir que des caratères a-zA-Z et des espaces</p>',
    email_error = '<p>Adresse mail incorrect</p>',
    message_error = '<p>Le message contient des caratères spéciaux</p>',
    message_error2 = '<p>Votre message est trop court</p>',
    send_error = '<p>Une erreur c\'est produite lors de l\'envoi du message, rechargez la page et réessayez.</p>';
function validateEmail(email) {
  var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(email);
}

function newMessage(){
  $(form).on('submit',function(e){
    e.preventDefault();

    $(form_error).empty();
    $(form_submit).hide();

    $(name).css('border','none'),
    $(email).css('border','none'),
    $(message).css('border','none');

    var err = false;
    // Required fields
    $.each([name,email,message],function(i,e){
      if($(e).val() == ''){
        err = true;
        $(e).css('border','1px solid red');
      }
    });

    if(err){
      $(form_error).append(all_required_err);
    }else{
      if(!/^[a-zA-Z' ']+$/.test($(name).val())){
        err = true;
        $(form_error).append(name_error);
        $(name).css('border','1px solid red');
      }
      if(!validateEmail($(email).val())){
        err = true;
        $(form_error).append(email_error);
        $(email).css('border','1px solid red');
      }
      if(typeof $(message).val() != 'string'){
        err = true;
        $(form_error).append(message_error);
        $(message).css('border','1px solid red');
      }else if($(message).val().length < 10){
        err = true;
        $(form_error).append(message_error2);
        $(message).css('border','1px solid red');
      }

      if(!err){
        var data = {
          name: $(name).val(),
          email: $(email).val(),
          message: $(message).val(),
          getCopy: $(form+' #getCopy').is(':checked')
        }

        $(form+' .form-loader').show();

        $.post("../../sendMessage.php",data,function(response){
          if(response == "false"){
            err = true;
            $(form_error).append(send_error);
            $(form+' .form-loader').hide();
          }else{
            $(form).empty().append('<p style="display:block;text-align:center;color:cornflowerblue;">Votre message a bien été envoyé, merci!</p>');
            $(form+' .form-loader').hide();
          }
        });
      }
    }

    $(form_submit).show();

  });
}
