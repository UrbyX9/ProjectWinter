<?php 
    //get the most recent 4 products
    $stmt = $pdo->prepare('SELECT * FROM products p INNER JOIN products_image pim ON p.idproducts = pim.products_idproducts ORDER BY idproducts DESC LIMIT 5');
    $stmt->execute();
    $recent_products = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<?=template_header('Home')?>
<div class="container">
    <div class="row">
        <h1>New products</h1>
        <div class="card-deck">
        
            <?php foreach($recent_products as $product): ?>
            <div class="card hvrbox col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                <a href="./index.php?page=product&id=<?=$product['idproducts']?>">
                    <img src="./<?=$product['image']?>" alt="<?=$product['name']?>" class="card-img-top img-thumbnail rounded mx-auto d-block"> 
                    <div class="card-body hvrbox-layer_top hvrbox-layer_slideup">
                        <p class="card-text hvrbox-text"><?=$product['summary']?></p>
                    </div>
                    <h5 class="title"><?=$product['name']?></h5>
                </a>
                
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?=template_footer()?>