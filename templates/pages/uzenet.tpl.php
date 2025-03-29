<h2> Üzenetek </h2>
<div>
<?php
try {
    $dbh = new PDO($servername.$dbname, $username, $password, array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
    $sql = $dbh->prepare("SELECT * FROM uzenetek ORDER BY uzid DESC");
    $sql->execute();?>
    <table>
        <tr>
            <th>Üzenet ID</th>
            <th>Név</th>
            <th>e-mail</th>
            <th>Üzenet</th>
            <th>Üzenet</th>
            <th>Dátum</th>
        </tr>
        
        <?php while ($result = $sql->fetch(PDO::FETCH_ASSOC)){?>
            <tr>
                <td><?= $result['uzid']?></td>
                <td><?= $result['nev']?></td>
                <td><?= $result['email']?></td>
                <td><?= $result['message']?></td>
                <td><?= $result['bejelentkezes']?></td>
                <td><?= $result['date']?></td>
            </tr>
            
            <?php

}

}

catch (PDOException $e) {
    $uzenet = "Hiba: ".$e->getMessage();
    $ujra = true;
} 

?>
</div>

