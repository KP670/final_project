<!DOCTYPE html>
<?php require '../db_config/database.php'?>
<?php
    $sql = "SELECT * FROM dishes";
    if (empty($sql)) {
       $sql = "SELECT * FROM dishes";
    }

    $result = mysqli_query($conn, $sql);
    $menu_set = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

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

            <?php foreach($menu_set as $menu_item): ?>
                <?php $dish_img_path = "../menu_images/dishes/". $menu_item['dish_img'] ?>
                <div class="menu-card">
                <img src=<?php echo $dish_img_path ?> alt=<?php echo $menu_item['dish_name'] ?>>              
                    <div class="menu-information">

                        <span class="menu-item-name">
                            <?php echo $menu_item['dish_name'] ?>
                        </span>
                        
                        <div class="menu-item-price">
                            <?php echo "$" . $menu_item['dish_price'] ?>
                        </div>

                    </div>
                </div>
            <?php endforeach; ?>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
