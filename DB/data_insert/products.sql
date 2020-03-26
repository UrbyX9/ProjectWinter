INSERT INTO products(
name, price, height, lenght, width, weight,
maxstock, currentstock, summary, description, brands_idbrands)
VALUES(
'Whiskas blazinice govedina', 24.99, NULL, NULL, NULL, 14, 
350, 450, 
'Whiskas blazinice z okusom govedine za mačke',
'Blazinice za mačke vsebujejo številne koristne sestavine: naravna olja za lepo, mehko in sijočo dlako, vitamina A in tavrin in uravnoteženo razmerje mineralov, ki prispevajo k zdravju sečil vaše mačke.',
(SELECT idbrands FROM brands WHERE lower(brand_name) LIKE lower('whiskas'))
);

INSERT INTO products(
name, price, height, lenght, width, weight,
maxstock, currentstock, summary, description, brands_idbrands)
VALUES(
'Whiskas blazinice tuna', 24.99, NULL, NULL, NULL, 14, 
350, 450, 
'Whiskas blazinice z okusom tune.',
'Blazinice za mačke vsebuje številne koristne sestavine: naravna olja za lepo, mehko in sijočo dlako, vitamina A in tavrin in uravnoteženo razmerje mineralov, ki prispevajo k zdravju sečil vaše mačke.
 Pestrost in privlačnost te hrane omogoča kombinacija petih različnih vrst zrnc.',
(SELECT idbrands FROM brands WHERE lower(brand_name) LIKE lower('whiskas'))
);

INSERT INTO products(
name, price, height, lenght, width, weight,
maxstock, currentstock, summary, description, brands_idbrands)
VALUES(
'Whiskas blazinice z govejim mesom', 11.90, NULL, NULL, NULL, 3.8, 
350, 450, 
'Blazinice so napolnjene z govejim mesom in so odlična poslastica za vašo mačko.',
'Blazinice vsebujejo naravna olja za lepo in sijočo dlako, vitamin A in tavrin. Imajo pravilno ravnotežje mineralov.
Privlačnost hrane omogoča kombinacijo z drugimi vrstami hrane.',
(SELECT idbrands FROM brands WHERE lower(brand_name) LIKE lower('whiskas'))
);

INSERT INTO products(
name, price, height, lenght, width, weight,
maxstock, currentstock, summary, description, brands_idbrands)
VALUES(
'Whiskas mokra hrana z okusom lososa Adult 1+, 24pack', 11.99, NULL, NULL, NULL, 2.4, 
168, 390, 
'Pakiranje vsebuje 24 vrečk. Vsaka vsebuje 100 g hrane z okusom lososa.',
'Whiskas z lososom v omaki je mokra hrana, ki bo vaši mački zagotovila vse potrebne hranilne 
snovi in jo navdušila z bogatim okusom. Izdelek je primeren za mačke od 1. 
leta starosti dalje. Poleg vitaminov in mineralov vsebuje tudi veliko vlage, ki podpira 
izločanje odpadnih snovi iz telesa in skrbi za zdravje sečil.',
(SELECT idbrands FROM brands WHERE lower(brand_name) LIKE lower('whiskas'))
);





