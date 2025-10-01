 <?php

 require_once "config.php";
 require_once "database.php";
 require_once "order.php";

    $db = new Database();
    $pdo = $db->getConnection();
    $orderModel = new Order($pdo);
    $success = false;
    $error ="";

    
    // Handle form submission
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $customerName = trim($_POST["customer-name"] ?? "");
        $customerEmail = trim($_POST["customer-email"] ?? "");
        $customerPhone = trim($_POST["customer-phone"] ?? "");
        $customerAddress = trim($_POST["customer-address"] ?? "");
        $pizzaSize = trim($_POST["size"] ?? "");
        $sauce     = trim($_POST["sauce"] ?? "");
        $crustType = trim($_POST["crust-type"] ?? "");
        $cheese    = trim($_POST["cheese"] ?? "");
        $beverages = trim($_POST["beverage"] ?? "");
        $specialInstructions = trim($_POST["instructions"] ?? "");
        $toppingsArray = $_POST["toppings"] ?? [];
        $toppings = implode(",", $toppingsArray);

        
       try{
            // try to save our order
            $orderModel->create($customerName, $customerEmail,$customerPhone,$customerAddress,$pizzaSize,$sauce,$crustType,$cheese,$beverages,$specialInstructions,$toppings);
            
            $success = true;
        }catch(Exception $e){
            $error = " Sorry, Could not save order. " . $e->getMessage();
        }
    }


    include "templates/header.php";
    include "form.php";
    include "templates/footer.php";
    ?>