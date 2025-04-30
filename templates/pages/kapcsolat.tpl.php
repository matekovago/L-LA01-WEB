<div class="container py-4">
  <div class="row g-4">
    <div class="col-12 col-md-6">
      <div class="h-100 p-3 bg-body-tertiary border rounded-3">
        <form action="?uzenetk" onsubmit="return ellenoriz();" method="post">
          <fieldset>
            <legend>Üzenet küldés</legend>
                <label for="nev">Név:</label><br>
                <input type="text" name="nev" id="name" placeholder="Név" > <br><br>
                <label for="e-mail">E-mail cím:</label><br>
                <input type="text" name="email" id="email"  placeholder="e-mail" > <br><br>
                <label for="message">Üzenet:</label><br>
                <textarea name="message" id="message" rows="4" cols="80" placeholder="Írd ide az üzeneted..." style="max-width:100%;" ></textarea> <br><br>
            <button type="submit" class="btn btn-primary" name="uzenetk">Üzenet küldés</button> <br><br>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
</div>
<script>
  function ellenoriz(){
    var rendben = true;
    var fokusz = null;
    var message = document.getElementById("message");
    if(message){
      if(message.value.length == 0){
        rendben = false;
        message.style.background = '#f99'; 
        fokusz = message;
        message.placeholder = "Kérlek írj üzenetet!";
      } else
      message.style.background = '#9f9';
    }
    var email = document.getElementById("email")
    if(email){
      var checkPattern = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
      if (!checkPattern.test(email.value)) {
        rendben = false;
        email.style.background = '#f99';
        fokusz = email;
        email.placeholder = "E-mail megadása kötelező!";

    }
    else
      email.style.background = '#9f9';
  }
    var name = document.getElementById("name");
    if(name)
    {
      if(name.value.length<5 || name.value.length>30){
        rendben = false;
        name.style.background = '#f99';
        fokusz = name;
        name.placeholder = "Név megadása kötelező!";

      }
      else
      name.style.background = '#9f9';
    }
    if (fokusz){
      fokusz.focus();
    }
    return rendben;
  }
</script>