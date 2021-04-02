<?php 
    require_once (__DIR__. '/Model/ABA.php');
    require_once (__DIR__. '/Model/Pipay.php');
    require_once (__DIR__. '/Model/Wing.php');

    echo "<h3>Task 2: Calculate Number Of Sale As Followings</h3>";

    
    echo "<h4>1. Number of sales by ABA method</h4>";
    $sales = [new ABA('item1',10,2),new Wing('item2',6,5),new ABA('item3',1,1),new ABA('item4',5,1),
              new Pipay('item5',6,21),new ABA('item6',1,11),new  Wing('item7',5,10),new Wing('item8',21,11)];
    $total = 0 ; 
    $total_for_pipay = 0;  
    $total_for_wing = 0;
    echo "<table border=\"1\"><tr><th>Item</th><th>Price</th><th>Quantity</th><th>Method</th><th>Total</th></tr>";
    foreach($sales as $sale){
        if($sale->getType()==='ABA'){
            echo "<tr>";
                echo "<td><strong>".$sale->getItem()."</strong></td>";
                echo "<td>".$sale->getPrice()."</td>";
                echo "<td>".$sale->getQuantity()."</td>";
                echo "<td>".$sale->getType()."</td>";
                echo "<td>".$sale->getSaleAmount()."</td>";
            echo "</tr>"; 
        }   
    }
    echo "</table>";        
    foreach($sales as $sale){
        if($sale->getType()==='ABA'){
            $total += $sale->getSaleAmount();
        }
    }          
    echo "<p>With ABA method, the total amount is <strong>$total $</strong></p>";


    echo "<h4>2. Number of sales by Pipay and Wing method</h4>";
    echo "<table border=\"1\"><tr><th>Item</th><th>Price</th><th>Quantity</th><th>Method</th><th>Total</th></tr>";
    foreach($sales as $sale){
        if($sale->getType()==='Pipay'||$sale->getType()==='Wing'){
            echo "<tr>";
                echo "<td><strong>".$sale->getItem()."</strong></td>";
                echo "<td>".$sale->getPrice()."</td>";
                echo "<td>".$sale->getQuantity()."</td>";
                echo "<td>".$sale->getType()."</td>";
                echo "<td>".$sale->getSaleAmount()."</td>";
            echo "</tr>"; 
        }   
    }
    echo "</table>"; 
    foreach($sales as $sale){
        if($sale->getType()==='Pipay'){
            $total_for_pipay += $sale->getSaleAmount();
        }
    } 
    foreach($sales as $sale){
        if($sale->getType()==='Wing'){
            $total_for_wing += $sale->getSaleAmount();
        }
    } 
    echo "<p>With PiPay method, the total amount is <strong>$total_for_pipay $</strong></p>";
    echo "<p>With Wing method, the total amount is <strong>$total_for_wing $</strong></p>";


    echo "<h4>3. Display all sales ordering by biggest total amount</h4>";
    usort($sales, function ($t1, $t2) {
        return $t2->getSaleAmount() <=> $t1->getSaleAmount();
    });
    echo "<table border=\"1\"><tr><th>Item</th><th>Price</th><th>Quantity</th><th>Method</th><th>Total</th></tr>";
    foreach($sales as $sale){
            echo "<tr>";
                echo "<td><strong>".$sale->getItem()."</strong></td>";
                echo "<td>".$sale->getPrice()."</td>";
                echo "<td>".$sale->getQuantity()."</td>";
                echo "<td>".$sale->getType()."</td>";
                echo "<td>".$sale->getSaleAmount()."</td>";
            echo "</tr>";   
    }
    echo "</table>"; 
?>