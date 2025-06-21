<?php 

    interface ICoffee{
        public function cost();
        public function getDescription();
    }

    class SimpleCoffee implements ICoffee {
        public function cost() {
            return 2;
        }

        public function getDescription() {
            return "Cafe simple";
        }
    }

    abstract class CoffeeDecorator implements ICoffee{
        protected ICoffee $coffee;

        public function __construct(ICoffee $coffee) {
            $this->coffee = $coffee;
        }

        public function cost(){
            return $this->coffee->cost();
        }

        public function getDescription()
        {
            return $this->coffee->getDescription();
        }
    }


    class MilkDecorator extends CoffeeDecorator {
        

        // Sobrescribir los metodos de la clase base
        public function cost() {
            return $this->coffee->cost() + 0.5;
        }

        public function getDescription() {
            return $this->coffee->getDescription() . ", con leche";
        }
    }

    class CaramelDecorator extends CoffeeDecorator {
        
        // Sobrescribir los metodos de la clase base
        public function cost() {
            return $this->coffee->cost() + 1;
        }

        public function getDescription() {
            return $this->coffee->getDescription() . ", con caramelo";
        }
    }


    // Uso del patron decorator
    $coffee = new SimpleCoffee();

    echo $coffee->getDescription() . " cuesta: $" . $coffee->cost() . "\n";

    $coffeeWithMilk = new MilkDecorator($coffee);

    echo $coffeeWithMilk->getDescription() . " cuesta: $" . $coffeeWithMilk->cost() . "\n";

    $coffeeWithCaramel = new CaramelDecorator($coffee);
    echo $coffeeWithCaramel->getDescription() . " cuesta: $" . $coffeeWithCaramel->cost() . "\n";
?>