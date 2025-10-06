<?php 
class Order{

    public function __construct(PDO $pdo){
        $this->pdo = $pdo;
    }

    
    public function create($customerName, $customerEmail, $customerPhone, $customerAddress, $pizzaSize, $sauce, $crustType, $cheese, $toppings, $beverages, $instructions){
        
        
        $sql = "INSERT INTO orders (customer_name, customer_email, customer_phone, customer_address, pizza_size, sauce, crust_type, cheese, toppings, beverages, special_instructions) VALUES (:customer_name, :customer_email, :customer_phone, :customer_address, :pizza_size, :sauce, :crust_type, :cheese, :toppings, :beverages, :special_instructions)";

        $stmt = $this->pdo->prepare($sql);

        $stmt->execute([
            ":customer_name" => $customerName,
            ":customer_email" => $customerEmail,
            ":customer_phone" => $customerPhone,
            ":customer_address" => $customerAddress,
            ":pizza_size" => $pizzaSize,
            ":sauce"      => $sauce,
            ":crust_type" => $crustType,
            ":cheese"     => $cheese,
            ":toppings"   => $toppings,
            ":beverages"  => $beverages,
            ":special_instructions" => $instructions
        ]);
    }
}
?>

