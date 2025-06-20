<?php 

    interface ITypeNotification{
        public function send($message);
    }

    // clases concretas o tipos de notificacion implementando la interface

    class EmailNotification implements ITypeNotification{
        public function send($message){
            echo "Enviando mail con este mensaje: {$message}";
        }
    }

    class SMSNotification implements ITypeNotification{
         public function send($message){
            echo "Enviando sms con este mensaje: {$message}";
        }
    }

    class NotificationFactory{

        //function createNotification($type){
        public static function createNotification($type){
            //crear instancias
            return match ($type) {
               "email"  => new EmailNotification() ,
                "sms" => new SMSNotification(),
                default => throw new Exception("No existe ese tipo de medio de notificacion")
            };
        }

    }
    
    //Creacion tradicional a traves de instancia
    //$factory = new NotificationFactory();
    $typeSMS = NotificationFactory::createNotification('sms');
    //$typeSMS = new SMSNotification();
    $typeSMS->send("Holiwis me quede sin saldo.");
?>