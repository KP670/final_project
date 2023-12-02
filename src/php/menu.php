<?php require '../db_config/database.php'?>

<?php
    $query = "SELECT id, dish_name, dish_price, dish_img FROM dishes";
    // $menu_set = $conn -> query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Menu</title>
    <link rel="stylesheet" href="../css/master_layout.css">
    <link rel="stylesheet" href="../css/master_style.css">
    <link rel="stylesheet" href="css/menu_card_layout.css">
    <link rel="stylesheet" href="css/menu_card_style.css">
</head>
<body>
    <main>
        <div class="flex-container">
            <div class="menu-card">
                <img src="../menu_images/dishes/chicken_adobo.jpg" class="menu-" alt="">
               
                <div class="menu-information">
                    <span class="menu-item-name">Menu Item Name</span>
                    
                    <div class="menu-item-price">
                        $10.00
                    </div>
                </div>
            </div>

            <div class="menu-card">
                <img src="../menu_images/dishes/chicken_adobo.jpg" alt="">
                
                <div class="menu-information">
                    <span class="menu-item-name">Menu Item Name</span>
                    
                    <div class="menu-item-price">
                        $10.00
                    </div>
                </div>
            </div>

            <div class="menu-card">
                <img src="../menu_images/dishes/chicken_adobo.jpg" class="menu-" alt="">
                
                <div class="menu-information">
                    <span class="menu-item-name">Menu Item Name</span>
                    
                    <div class="menu-item-price">
                        $10.00
                    </div>
                </div>
            </div>

            <div class="menu-card">
                <img src="../menu_images/dishes/chicken_adobo.jpg" class="menu-" alt="">
                
                <div class="menu-information">
                    <span class="menu-item-name">Menu Item Name</span>
                    
                    <div class="menu-item-price">
                        $10.00
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
