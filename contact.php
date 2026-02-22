<?php
if($_POST){
    $to = "electronalds-offspring@erosarl.com";
    $subject = "Nouveau message depuis ERO SARL";
    $message = "Nom: ".$_POST['name']."\n";
    $message .= "Email: ".$_POST['email']."\n\n";
    $message .= $_POST['message'];
    $headers = "From: ".$_POST['email'];

    mail($to,$subject,$message,$headers);
    echo "Message envoyé avec succès.";
}
?>