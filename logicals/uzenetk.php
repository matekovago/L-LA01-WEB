<?php
$ellenorzes = true;
if(isset($_POST['nev']) && isset($_POST['email']) && isset($_POST['message'])){
    $re = '/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/';
    if(strlen($_POST['nev']) < 5 || strlen($_POST['nev']) >30 )
    {
        $ellenorzes = false;
        $uzenet =" Hibás név!";
        $ujra = true;
    } 
    
    if(!preg_match($re,$_POST['email'])){
        $ellenorzes = false;
        $uzenet =" Hibás email!";
        $ujra = true;
    }
    if(strlen($_POST['message']) == 0){
        $ellenorzes = false;
        $uzenet =" Hibás üzenet!";
        $ujra = true;
    }

} else{
    $ellenorzes = false;
    $uzenet =" Nincsenek adatok!";
    $ujra = true;

}


if($ellenorzes) {

    try {
        $dbh = new PDO($servername.$dbname, $username, $password, array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        $dbh->query('SELECT * FROM `uzenetek`');

        $sqlInsert = "insert into uzenetek( nev, bejelentkezes, email, message, date)
                          values( :nev, :bejelentkezes, :email, :message, :date)";
        $stmt = $dbh->prepare($sqlInsert);

        $stmt->execute(array(':nev' => $_POST['nev'], ':bejelentkezes' =>(isset($_SESSION['login'])?$_SESSION['login']:'Vendég'),
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