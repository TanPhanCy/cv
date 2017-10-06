<div class="content" id="contact">
  <h2 class="content-title"><span class="icon contact-icon"></span> Contact</h2>
  <div class="content-inner">
    <form class="form" id="newMessage" method="post">
      <div class="form-content">
        <small><i>Tous les champs sont requis</i></small>
        <div class="form-block form-error"></div>
        <div class="form-block">
          <label for="senderName" class="block-title">Nom</label>
          <input type="text" name="name" id="senderName" class="inputData" placeholder="Votre nom"/>
        </div>
        <div class="form-block">
          <label for="senderEmail" class="block-title">Adresse mail</label>
          <input type="text" name="senderEmail" id="senderEmail" class="inputData" placeholder="Votre adresse email"/>
        </div>
        <div class="form-block">
          <label for="senderMessage" class="block-title">Message</label>
          <textarea name="senderMessage" id="senderMessage" class="textData" placeholder="Votre message"></textarea>
        </div>
        <div class="form-block align-right">
          <label for="getCopy" class="block-title"><input type="checkbox" name="getCopy" id="getCopy">Recevoir une copie de mon message</label>
          <input		type="submit" class="form-submit" value="Envoyer"/>
        </div>
        <div class="form_loader align-center">
          <span class="of-logo-animate"></span>
        </div>
      </div>
    </form>
  </div>
</div>
