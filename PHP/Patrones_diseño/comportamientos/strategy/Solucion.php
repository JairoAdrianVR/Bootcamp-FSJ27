<?php 
 
 interface MetodoPago {
        public function procesarPago($monto);
 }


 class PayPal implements MetodoPago {
        public function procesarPago($monto) {
            print("Procesando pago de $monto usando PayPal.\n");
        }
 }

class TarjetaCredito implements MetodoPago {
        public function procesarPago($monto) {
            print("Procesando pago de $monto usando Tarjeta de Crédito.\n");
        }
 }

class TransferenciaBancaria implements MetodoPago {
        public function procesarPago($monto) {
            print("Procesando pago de $monto usando Transferencia Bancaria.\n");
        }
 }


 class ProcesarPago{
    private $metodoPago;


    public function setMetodoPago(MetodoPago $metodoPago) {
        $this->metodoPago = $metodoPago;
    }

    public function procesar($monto){
        if ($this->metodoPago) {
            $this->metodoPago->procesarPago($monto);
        } else {
            print("Método de pago no establecido.\n");
        }
    }
 }

// Ejemplo de uso
$procesador = new ProcesarPago();
$metodoPago1 = new PayPal();
$metodoPago2 = new TarjetaCredito();
$procesador->setMetodoPago($metodoPago2);
$procesador->procesar(100);

?>