<?php 
    // number of displayed products per page
    $num_of_product_per_page = 25;
    // URL this will appear as index.php?page=products&p=1, index.php?page=products&p=2 ...
    $current_page = isset($_GET['p']) && is_numeric($_GET['p']) ? (int)$_GET['p'] : 1;
    // select products by latest
    $stmt = $pdo->prepare('SELECT * FROM products p INNER JOIN products_image pim 
        ON p.idproducts = pim.products_idproducts ORDER BY idproducts DESC LIMIT ?,?');
    // bindValue allows us to use integer in SQL, need it for LIMIT
    $stmt->bindValue(1, ($current_page - 1) * $num_of_product_per_page, PDO::PARAM_INT);
    $stmt->bindValue(2, $num_of_product_per_page, PDO::PARAM_INT);
    $stmt->execute();
    // fetch and return products as ARRAY
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // total amount of products
    $total_products = $pdo->query('SELECT * FROM products')->rowCount();

?>

<?=template_header('Home')?>
<div class="container">
    <div class="row">
        <h1>Products</h1>
        <div class="card-deck">
            <?php foreach($products as $product): ?>
            <div class="card">
                <a href="./index.php?page=product&id=<?=$product['idproducts']?>" >
                    <img src="./<?=$product['image']?>" alt="<?=$product['name']?>" class="card-img-top">
                    <div class="card-body">
                        <span class="name"><?=$product['name']?></span>
                        <span class="price">
                            <?=$product['price']?>&euro;
                        </span>
                    </div>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<!-- Buttons for navigation previous and next -->
<div class="buttons">
    <?php if ($current_page > 1): ?>
    <a href="./index.php?page=products&p=<?=$current_page-1?>">Prev</a>
    <?php endif; ?>
    <?php if ($total_products > ($current_page * $num_of_product_per_page) - $num_of_product_per_page + count($products)): ?>
    <a href="./index.php?page=products&p=<?=$current_page+1?>">Next</a>
    <?php endif; ?>
</div>

<?=template_footer()?>