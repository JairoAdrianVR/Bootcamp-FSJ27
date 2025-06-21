<?php 

class ProcesarPago {

    function procesar($metodoPago, $monto){
        if($metodoPago === "PayPal"){
            print("Procesando pago de $monto usando PayPal.\n");
        }else if ($metodoPago === "Tarjeta de Crédito"){
            print("Procesando pago de $monto usando Tarjeta de Crédito.\n");
    } else if ($metodoPago === "Transferencia Bancaria"){
            print("Procesando pago de $monto usando Transferencia Bancaria.\n");
        } else {
            print("Método de pago no reconocido.\n");
        }
    }
}

?>