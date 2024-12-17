CREATE TABLE `products` (
    `product_id` INT AUTO_INCREMENT PRIMARY KEY,
    `product_name` VARCHAR(255) NOT NULL
);

INSERT INTO `products` (product_id, product_name)
VALUES 
    (1, 'Final Fantasy XVI'),
    (2, 'Marvels Spider-Man 2'),
    (3, 'God of War: Ragnarok'),
    (4, 'Horizon Forbidden West'),
    (5, 'Persona 5 Royal'),
    (6, 'Ghost of Tsushima'),
    (7, 'Like a Dragon Gaiden'),
    (8, 'Elden Ring'),
    (9, 'Star Wars Jedi: Survivor'),
    (10, 'The Last of Us: Part II');
