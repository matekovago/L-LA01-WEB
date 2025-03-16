<?php

//print_r($_POST);



if(isset($_POST['nev']) && isset($_POST['email']) && isset($_POST['message'])) {

    try {
        $dbh = new PDO('mysql:host=localhost;dbname=gyakorlat7', 'root', '', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        $dbh->query('SELECT * FROM `uzenetek`');

        $sqlInsert = "insert into uzenetek( nev, bejelentkezes, email, message, date)
                          values( :nev, :bejelentkezes, :email, :message, :date)";
        $stmt = $dbh->prepare($sqlInsert);

        $stmt->execute(array(':nev' => $_POST['nev'], ':bejelentkezes' => $_POST['nev'],
                                 ':email' => $_POST['email'],':message' => $_POST['message'], ':date' => date("Y-m-d H:i:s") ));

         if($count = $stmt->rowCount()) {
            $newid = $dbh->lastInsertId();
            $uzenet = "Az üzenet küldés sikeres<br>Azonosítója: {$newid}";                     
            $ujra = false;
                                }
                                else {
                                    $uzenet = "Az üzenet küldés nem sikerült";
                                    $ujra = true;
                                }

        


}

    catch (PDOException $e) {
            $uzenet = "Hiba: ".$e->getMessage();
            $ujra = true;
} 

}
?>