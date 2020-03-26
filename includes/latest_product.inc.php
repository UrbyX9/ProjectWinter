<?php 
    //get the most recent 4 products
    $stmt = $pdo->prepare('SELECT * FROM products p INNER JOIN products_image pim ON p.idproducts = pim.products_idproducts ORDER BY idproducts DESC LIMIT 5');
    $stmt->execute();
    $recent_products = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<?=template_header('Home')?>

<div class="row">
    <h1>Latest products</h1>
    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
        <?php foreach($recent_products as $product): ?>
        <a href="./index.php?page=product&id=<?=$product['idproducts']?>" class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
            <img src="./<?=$product['image']?>" alt="<?=$product['name']?>" class="img-thumbnail rounded  mx-auto  d-block">
            <span class="name"><?=$product['name']?></span>
            <span class="price">
                <?=$product['price']?>&euro;
            </span>
        </a>
        <?php endforeach; ?>
    </div>
</div>


<div class="card">
    <h1>New products</h1>
    <?php foreach($recent_products as $product): ?>
    <img src="./<?=$product['image']?>" alt="<?=$product['name']?>" class="card-img-top img-fluid"> 
    <div class="card-body">
        <h5 class="title"><?=$product['name']?></h5>
        <p class="card-text"><?=$product['summary']?></p>
    </div>
    <?php endforeach; ?>
</div>

<?=template_footer()?>