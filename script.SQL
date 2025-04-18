CREATE DATABASE IF NOT EXISTS cuisinie;
USE cuisinie;


CREATE TABLE IF NOT EXISTS Role (
    role_id INT PRIMARY KEY AUTO_INCREMENT,
    titre VARCHAR(150) NOT NULL
);


CREATE TABLE IF NOT EXISTS plats (
    plate_id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(50),
    description TEXT,
    plats_image VARCHAR(255),
    price FLOAT
);


CREATE TABLE IF NOT EXISTS Menus (
    menu_id INT PRIMARY KEY AUTO_INCREMENT,
    plate_id INT NOT NULL, 
    name VARCHAR(100) NOT NULL,
    description TEXT,
    menu_image_url VARCHAR(255),
    price FLOAT,
    plats INT,
    date_added TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (plate_id) REFERENCES plats(plate_id) ON DELETE CASCADE
);


CREATE TABLE IF NOT EXISTS Clients (
    client_id INT PRIMARY KEY AUTO_INCREMENT,
    role_id INT NOT NULL,
    nom VARCHAR(50),
    prenom VARCHAR(50),
    email VARCHAR(100) UNIQUE,
    mot_de_passe VARCHAR(255),
    FOREIGN KEY (role_id) REFERENCES Role(role_id) ON DELETE CASCADE
);

CREATE TABLE IF NOT EXISTS reservation (
    reservation_id INT PRIMARY KEY AUTO_INCREMENT,
    client_id INT NOT NULL,
    menu_id INT NOT NULL,
    date_reservation TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    status ENUM('en_attente', 'acceptee', 'refusee') DEFAULT 'en_attente',
    FOREIGN KEY (client_id) REFERENCES Clients(client_id) ON DELETE CASCADE,
    FOREIGN KEY (menu_id) REFERENCES Menus(menu_id) ON DELETE CASCADE
);


CREATE TABLE IF NOT EXISTS menu_plats (
    menu_id INT NOT NULL,
    plate_id INT NOT NULL,
    PRIMARY KEY (menu_id, plate_id),
    FOREIGN KEY (menu_id) REFERENCES Menus(menu_id) ON DELETE CASCADE,
    FOREIGN KEY (plate_id) REFERENCES plats(plate_id) ON DELETE CASCADE
);
