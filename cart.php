<?php
    include'./includes/cart.inc.php'; 
?>

<?=template_header('Cart')?>

<div class="cart content-wrapper">
    <h1>Shopping Cart</h1>
    <form action="./index.php?page=cart" method="post">
        <table>
            <thead>
                <tr>
                    <td colspan="2">Product</td>
                    <td>Price</td>
                    <td>Quantity</td>
                    <td>Total</td>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($products)): ?>
                <tr>
                    <td colspan="5" style="text-align: center;">You have no products in cart</td>
                </tr>
                <?php else: ?>
                <?php foreach ($products as $product): ?>
                <tr>
                    <td class="img">
                        <a href="./index.php?page=product&id=<?=$product['idproducts']?>">
                            <img src="<?=$product['image']?>" width="50" height="50" alt="<?=$product['name']?>">
                        </a>
                    </td>
                    <td>
                        <a href="./index.php?page=product&id=<?=$product['idproducts']?>"><?=$product['name']?></a>
                        <br>
                        <a href="./index.php?page=cart&remove=<?=$product['idproducts']?>" class="remove">Remove</a>
                    </td>
                    <td class="price"><?=$product['price']?> &euro;</td>
                    <td class="quantity">
                        <input type="number" name="quantity-<?=$product['idproducts']?>" value="<?=$products_in_cart[$product['idproducts']]?>" min="1" max="<?=$product['quantity']?>" placeholder="Quantity" required>
                    </td>
                    <td class="price"><?=$product['price'] * $products_in_cart[$product['idproducts']]?> &euro;</td>
                </tr>
                <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
        <div class="subtotal">
            <span class="text">Subtotal</span>
            <span class="price"><?=$subtotal?> &euro;</span>
        </div>
        <div class="buttons">
            <input type="submit" value="Update" name="update">
            <input type="submit" value="Place Order" name="placeorder">
        </div>
    </form>
</div>



<?=template_footer()?>