<div class="container py-4">
  <div class="row g-4">

    <div class="col-12 col-md-6">
      <div class="h-100 p-3 bg-body-tertiary border rounded-3">
          <h2>Üzenet küldés vissza jelzés</h2>
          <?php include('./logicals/uzenetk.php');?>
          <?php echo($uzenet); ?>
      </div>
    </div>
    <div class="col-12 col-md-6">
      <div class="h-100 p-3 bg-body-tertiary border rounded-3">
        <?php
        if(!$ujra){
          echo("<strong>Név: </strong>" . $_POST['nev'] . "<br>");
          echo("<strong>E-mail: </strong>" . $_POST['email'] . "<br>");
          echo("<strong>Üzenet: </strong>" . $_POST['message'] . "<br>");


        } else{
          echo("Az adatok nem elérhetők! <br> ");
          echo($uzenet."<br>");
        }
        
        ?>
      </div>
    </div>

  </div>
</div>


