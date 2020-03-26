INSERT INTO products_image
(image, products_idproducts)
VALUES('./DB/images/products/whiskas_beef.webp',
(SELECT idproducts FROM products WHERE lower(name) LIKE lower('Whiskas blazinice govedina')));

INSERT INTO products_image
(image, products_idproducts)
VALUES('./DB/images/products/whiskas_tuna.webp',
(SELECT idproducts FROM products WHERE lower(name) LIKE lower('Whiskas blazinice tuna')));

INSERT INTO products_image
(image, products_idproducts)
VALUES('./DB/images/products/whiskas_beef_3.8.webp',
(SELECT idproducts FROM products WHERE lower(name) LIKE lower('Whiskas blazinice z govejim mesom')));

INSERT INTO products_image
(image, products_idproducts)
VALUES('./DB/images/products/whiskas_100x24.webp',
(SELECT idproducts FROM products WHERE lower(name) LIKE lower('Whiskas mokra hrana z okusom lososa Adult 1+, 24pack')));
