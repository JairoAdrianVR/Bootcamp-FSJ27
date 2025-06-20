<?php 

/*
    Envio de notificaciones o codigos a traves de diferentes medios
    por SMS y Email

*/

    class NotificationService{
        function sendNotification($type,$message){
            if( $type === "email"){
                print("Enviando mail con este mensaje: {$message}");
            } elseif( $type === "sms"){
                print("Enviando sms con este mensaje: {$message}");
            } else{
                print("No soportamos ese tipo de medio de notificacion");
            }
        }
    }


?>