<?php 
    require_once (__DIR__.'/../Interface/sale.php');
    class Wing implements sale{
        
        public function __construct(protected string $item,protected float $prices,protected int $quantity){}
        
        public function getSaleAmount(){
            $total = $this->quantity * $this->prices;
            return $total;
        }
        public function getType(){
            return 'Wing';
        }
        public function getItem(){
            return $this->item;
        }
        public function getPrice(){
            return $this->prices;
        }
        public function getQuantity(){
            return $this->quantity;
        }
    }
?>