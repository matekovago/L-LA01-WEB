<!--

<h2>Belepes</h2>
<form action = "?belep" method = "post">
<fieldset>
<legend>Bejlentkezés</legend>
<br>
<input type="text" name="felhasznalo" placeholder="felhasználó" required><br><br>
<input type="password" name="jelszo" placeholder="jelszó" required><br><br>
<input type="submit" name="belepes" value="Belépés">
<br>&nbsp;
</fieldset>
</form>

<h2>Regisztráció</h2>
<form action = "?regisztracio" method = "post">
<fieldset>
<legend>Regisztráció</legend>
<br>
<input type="text" name="felhasznalo" placeholder="felhasználó" required><br><br>
<input type="text" name="vezeteknev" placeholder="vezetéknév" required><br><br>
<input type="text" name="utonev" placeholder="utónév" required><br><br>
<input type="password" name="jelszo" placeholder="jelszó" required><br><br>
<input type="submit" name="regisztral" value="Regisztráció">
<br>&nbsp;
</fieldset>
</form>
-->

<div class="container py-4">
  <div class="row g-4">

    <div class="col-12 col-md-6">
      <div class="h-100 p-3 bg-body-tertiary border rounded-3">
        
      <form action = "?belep" method = "post">
      <fieldset>
      <legend>Bejlentkezés</legend><br>
      <label for="felhasznalo">Felhasználó Név:</label><br>
      <input type="text" name="felhasznalo" placeholder="Felhasználó Név" required><br><br>
      <label for="jelszo">Jelszó:</label><br>
      <input type="password" name="jelszo" placeholder="Jelszó" required><br><br>
      <input type="submit" class="btn btn-primary" name="belepes" value="Belépés">
      <br>&nbsp;
      </fieldset>
      </form>
      </div>
    </div>

    <div class="col-12 col-md-6">
      <div class="h-100 p-3 bg-body-tertiary border rounded-3">

      <form action = "?regisztracio" method = "post">
      <fieldset>
      <legend>Regisztráció</legend>
      <br>
      <label for="felhasznalo">Felhasználó Név:</label><br>
      <input type="text" name="felhasznalo" placeholder="felhasználó" required><br><br>
      <label for="vezeteknev">Vezetéknév:</label><br>
      <input type="text" name="vezeteknev" placeholder="Vezetéknév" required><br><br>
      <label for="utonev">Utónév:</label><br>
      <input type="text" name="utonev" placeholder="utónév" required><br><br>
      <label for="jelszo">Jelszó:</label><br>
      <input type="password" name="jelszo" placeholder="jelszó" required><br><br>
      <input type="submit" class="btn btn-primary" name="regisztral" value="Regisztráció">
      <br>&nbsp;
      </fieldset>
      </form>
      </div>
    </div>
  </div>
</div>