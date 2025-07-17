<?php

$db = new PDO("mysql:host=localhost;dbname=medic_care", "root", "");

$query= "insert into 'mail' (isim, email.)" 

//hataları incelemek için.. iş bitende silinir
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if(isset($_GET)){
?>

<?php
if(isset($_GET['success'])){
echo '<p>Mesajınız başarı ile gönderildi!</p>';
}
?>

<?php
}

if(isset($_POST['send'])){


  require './mailing/phpmailer.php';
  require './mailing/smtp.php';
  //mail modülleri kullanıyoruz

  $isim = isset($_POST['name']) ? $_POST['name'] : '';
  $email = isset($_POST['email']) ? $_POST['email'] : '';
  $telefon = isset($_POST['telephone']) ? $_POST['telephone'] : '';
  $tarih = isset($_POST['date']) ? $_POST['date'] : '';
  $mesaj = isset($_POST['message']) ? $_POST['message'] : '';
  //post ile gönderilen bilgileri topluyoruz

  $konu = 'Medic Care İletişim Formu';


  $mail = new PHPMailer();
      $mail->IsSMTP();
      $mail->SMTPDebug = 0;
      $mail->SMTPAuth = true;
      $mail->Encoding="base64";
      $mail->Host = "...";
      $mail->Port = 587;
      $mail->IsHTML(true);
      $mail->SetLanguage("en", "phpmailer/language");
      $mail->CharSet  ="utf-8";
      $mail->Username = "...";
      $mail->Password = "...";
      $mail->From = "...;
      $mail->FromName = $isim;
      $mail->addAddress("...");
      $mail->CharSet  ="utf-8";
      $mail->Encoding="base64";
      $mail->isHTML(true);
      $mail->Subject = $konu;
      $mail->Body = "Telefon : $telefon<br/>Tarih : $tarih<br/>Mesaj : $mesaj";
      //$mail->MsgHTML($mesaj);
      $mail->SMTPOptions = array(
          'ssl' => array(
              'verify_peer' => false,
              'verify_peer_name' => false,
              'allow_self_signed' => true
          )
      );

      if($mail->send()){
          echo "Mesajınız başarıyla gönderildi." ;
      }
      else{
          echo "Mesaj gönderirken bir hata oluştu ve girdiğiniz bilgiler alınamadı.".$mail->ErrorInfo;
      }


      //başarı mesaj ile, anasayfaya yönlendirme
      header('Location: /MedicCare/index.html?success=1');
}

?>