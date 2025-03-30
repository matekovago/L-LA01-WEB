<h2> Üzenetek </h2>
<div>
<?php
try {
    $dbh = new PDO($servername.$dbname, $username, $password, array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
    $sql = $dbh->prepare("SELECT * FROM uzenetek ORDER BY uzid DESC");
    $sql->execute();?>
    <div class="container">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Üzenet ID</th>
                    <th scope="col">Név</th>
                    <th scope="col">e-mail</th>
                    <th scope="col">Üzenet</th>
                    <th scope="col">Üzenet</th>
                    <th scope="col">Dátum</th>
                </tr>
            </thead>
            <tbody>
            <?php while ($result = $sql->fetch(PDO::FETCH_ASSOC)){?>
                <tr>
                    <th scope="row"><?= $result['uzid']?></th>
                    <td><?= $result['nev']?></td>
                    <td><?= $result['email']?></td>
                    <td><?= $result['message']?></td>
                    <td><?= $result['bejelentkezes']?></td>
                    <td><?= $result['date']?></td>
                </tr>
            </tbody>
    </div>            
    <?php

}

}

catch (PDOException $e) {
    $uzenet = "Hiba: ".$e->getMessage();
    $ujra = true;
} 

?>
</div>

