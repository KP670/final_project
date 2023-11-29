<?php include 'database.php'?>

<?php 
    $menu_set = [
        [
            'id' => '0',
            'name' => 'Item 1',
            'price' => '1000',
        ],
        [
            'id' => '1',
            'name' => 'Item 2',
            'price' => '1000'
        ],
        [
            'id' => '2',
            'name' => 'Item 3',
            'price' => '1000'
        ],
    ]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Menu</title>
    <link rel="stylesheet" href="../css/master_layout.css">
        
    <link rel="stylesheet" href="css/menu_card_layout.css">
    <link rel="stylesheet" href="css/menu_card_style.css">
</head>
<body>
    <main>
        <div class="flex-container">
            <div class="menu-card">
                <img src="../menu_images/dishes/_c84512b3-e99e-4ea2-b1cf-366a926cb6d0.jpg" class="menu-" alt="">
                <div class="menu-item-name">
                    <span>Menu Item Name</span>
                </div>
                <div class="menu-item-price">
                    $10.00
                </div>
            </div>

            <div class="menu-card">
                <img src="../menu_images/dishes/_c84512b3-e99e-4ea2-b1cf-366a926cb6d0.jpg" class="menu-" alt="">
                <div class="menu-item-name">
                    Menu Item Name
                </div>

                <div class="menu-item-price">
                    $10.00
                </div>
            </div>
        </div>
    </main>
</body>
</html>
