<?php 

    //Vamos a crear un cafe y sus diferentes componentes(complementos o variables)


    class Coffee{
        function cost(){
            return 2;
        }

        function description(){
            return "Cafe simple";
        }
    }

    class CoffeeWithMilk extends Coffee{
         function cost(){
            return parent::cost() + 1;
         }

         function description(){
            return parent::description()." con leche";
         }
    }

    class CoffeeWithMilkAndCaramel extends CoffeeWithMilk{
            function cost(){
                return parent::cost() + 0.5;
            }
    
            function description(){
                return parent::description()." y caramelo.";
            }

    }

    $cafecito = new CoffeeWithMilkAndCaramel();
    print($cafecito->cost());
    print($cafecito->description());

?>