-- Create table for "sliders" collection
CREATE TABLE slider (
    'id' INT AUTO_INCREMENT PRIMARY KEY,
    'banner' VARCHAR(255),
    'logo_img' VARCHAR(255),
    'game_img' VARCHAR(255),
    'game_name' VARCHAR(255),
    'link_game_name' VARCHAR(255),
    'off_percent' VARCHAR(10),
    'cut_price' DECIMAL(10, 2),
    'disccount_price' DECIMAL(10, 2),
    'after_price' DECIMAL(10, 2),
    'suggest_img' VARCHAR(255),
    'version' VARCHAR(50),
);

CREATE TABLE pre_img (
    id INT AUTO_INCREMENT PRIMARY KEY,
    slider_id INT,
    links VARCHAR(255),
    FOREIGN KEY (slider_id) REFERENCES slider(id)
);

-- Insert data into "sliders" table
INSERT INTO 'sliders' ('id', 'banner', 'logo_img', 'game_img', 'game_name', 'off_percent', 'cut_price', 'after_price', 'suggest_img', 'version', 'link_game_name')
VALUES
(1, '/images/banner/callisto-protocol.jpg', '/images/logo/callisto-protocol.png', '/images/main-img/callisto-protocol.jpg', 'The Callisto Protocol', '', '', '799', '', 'DLC', 'The-Callisto-Protocol'),
(2, '/images/banner/star_wars.jpg', '/images/logo/star_wars.png', '/images/main-img/star_wars.jpg', 'Star Wars', '-20%', '2,499', '3,499', '', 'BASE GAME', 'Star-Wars'),
(3, '/images/banner/last_of_us1.jpg', '/images/logo/last-of-us1.png', '/images/main-img/last-of-us1.jpg', 'The Last of Us™ Part I', '', '', '3,999', '', 'BASE GAME', 'The-Last-of-Us™-Part-I'),
(4, '/images/banner/shoulders-of-giants.jpg', '/images/logo/shoulders-of-giants.png', '/images/main-img/shoulders-of-giants.jpg', 'Shoulders of Giants', '', '', '3,999', '', 'BASE GAME', 'Shoulders-of-Giants'),
(5, '/images/banner/fortnite.jpg', '/images/logo/fortnite.png', '/images/main-img/fortnite.jpg', 'Fortnite', '', '', '3,999', '', 'BASE GAME', 'Fortnite'),
(6, '/images/banner/valorant.jpg', '/images/logo/valorant.png', '/images/main-img/valorant.jpg', 'Valorant', '-20%', '599', '479.20', '', 'BASE GAME', 'Valorant');

-- Create table for "carousels" collection
CREATE TABLE carousels (
    'banner' TEXT,
    'logo_img' TEXT,
    'game_img' TEXT,
    'game_name' TEXT,
    'off_percent' TEXT,
    'cut_price' TEXT,
    'after_price' TEXT,
    'suggest_img' TEXT,
    'version' TEXT,
    'link_game_name' TEXT,
    PRIMARY KEY (`id`),
);ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Insert data into "carousels" table
INSERT INTO 'carousels' ('id', 'banner', 'logo_img', 'game_img', 'game_name', 'off_percent', 'cut_price', 'after_price', 'suggest_img', 'version', 'link_game_name')
VALUES
(1, '/images/banner/callisto-protocol.jpg', '/images/logo/callisto-protocol.png', '/images/main-img/callisto-protocol.jpg', 'The Callisto Protocol', '', '', '799', '', 'DLC', 'The-Callisto-Protocol'),
(2, '/images/banner/star_wars.jpg', '/images/logo/star_wars.png', '/images/main-img/star_wars.jpg', 'Star Wars', '-20%', '2,499', '3,499', '', 'BASE GAME', 'Star-Wars'),
(3, '/images/banner/last_of_us1.jpg', '/images/logo/last-of-us1.png', '/images/main-img/last-of-us1.jpg', 'The Last of Us™ Part I', '', '', '3,999', '', 'BASE GAME', 'The-Last-of-Us™-Part-I'),
(4, '/images/banner/shoulders-of-giants.jpg', '/images/logo/shoulders-of-giants.png', '/images/main-img/shoulders-of-giants.jpg', 'Shoulders of Giants', '', '', '3,999', '', 'BASE GAME', 'Shoulders-of-Giants'),
(5, '/images/banner/fortnite.jpg', '/images/logo/fortnite.png', '/images/main-img/fortnite.jpg', 'Fortnite', '', '', '3,999', '', 'BASE GAME', 'Fortnite'),
(6, '/images/banner/valorant.jpg', '/images/logo/valorant.png', '/images/main-img/valorant.jpg', 'Valorant', '-20%', '599', '479.20', '', 'BASE GAME', 'Valorant');
