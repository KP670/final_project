<!DOCTYPE html>
<?php require '../db_config/database.php'?>

<?php  
 ;
function process_sql() {
    $query = "SELECT * FROM dishes";

    if(isset($_POST['submit'])) {
        $category = $_POST['category'];
        $where_clause = 'WHERE category = ' . $category; 
        return $query = 'SELECT * FROM dishes' . $where_clause;
    } else {return $query;}
}

    $sql = process_sql();
   
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
        <div class="grid-container">

            <?php foreach($menu_set as $menu_item): ?>
                <?php $dish_img_path = "../menu_images/menu/". $menu_item['menu_item_img'] ?>
                <div class="inner-card">
                <img src=<?php echo $dish_img_path ?> alt="<?php echo $menu_item['menu_item_name'] ?>">              
                    <div class="menu-information">

                        <span class="menu-item-name">
                            <?php echo $menu_item['menu_item_name'] ?>
                        </span>
                        <br>
                        <span class="menu-item-price">
                            <?php echo "$" . $menu_item['menu_item_price'] ?>
                        </span>

                    </div>
                </div>
            <?php endforeach; ?>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
