INSERT INTO categories (category, idparentcategories)
VALUES ('Cat',NULL);

INSERT INTO categories (category, idparentcategories)
VALUES ('Dog',NULL);

INSERT INTO categories (category, idparentcategories)
VALUES ('Cat food', (SELECT idcategories FROM categories AS parent WHERE lower(category) = 'cat'));

INSERT INTO categories (category, idparentcategories)
VALUES ('Cat wet food', (SELECT idcategories FROM categories AS parent WHERE lower(category) = "cat"));

INSERT INTO categories (category, idparentcategories)
VALUES ('Cat wet food', (SELECT idcategories FROM categories AS parent WHERE lower(category) = "cat food"));

INSERT INTO categories (category, idparentcategories)
VALUES ('Toys',NULL);

INSERT INTO categories (category, idparentcategories)
VALUES ('dog wet food', (SELECT idcategories FROM categories AS parent WHERE lower(category) LIKE "dog"));

INSERT INTO categories (category, idparentcategories)
VALUES ('Other',NULL);