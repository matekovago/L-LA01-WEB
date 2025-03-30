<?php




<div class="container py-4">
  <div class="row g-4">

    <div class="col-12 col-md-6">
      <div class="h-100 p-3 bg-body-tertiary border rounded-3">
        <form action="?uzenetk" method="post">
          <fieldset>
            <legend>Üzenet küldés</legend>
                <label for="nev">Név:</label><br>
                <input type="text" name="nev"  placeholder="Név" > <br><br>
                
                <label for="e-mail">E-mail cím:</label><br>
                <input name="email"  placeholder="e-mail" > <br><br>
                <label for="message">Üzenet:</label><br>
                <textarea name="message" rows="4" cols="80" placeholder="Írd ide az üzeneted..." style="max-width:100%;" ></textarea> <br><br>
            <button type="submit" class="btn btn-primary" name="uzenetk">Üzenet küldés</button> <br><br>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
</div>