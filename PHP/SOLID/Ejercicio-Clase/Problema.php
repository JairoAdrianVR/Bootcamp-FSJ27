<?php 

    class ProcesadorPedidos{
            function procesar($tipoOrden,$total){
                if($tipoOrden === "digital"){
                    //Aplicar descuento asociado al tipo de pago 
                    print("Procesando orden digital de {$total}");
                } else if($tipoOrden === "local"){
                    //Aplicar descuento asociado al tipo de pago 
                    print("Procesando orden del local de {$total}");
                } else if ($tipoOrden === "membresia"){
                    //Aplicar descuento asociado al tipo de pago 
                    print("Procesando orden por membresia de {$total}");
                } else{
                    throw new Exception("Tipo de orden desconocida.");
                }
            }
        }

?>