CREATE DATABASE cuisinie;
USE cuisinie;


CREATE TABLE Role (
    role_id INT PRIMARY KEY AUTO_INCREMENT,
    titre VARCHAR(150) NOT NULL
);


CREATE TABLE Clients (
    client_id INT PRIMARY KEY AUTO_INCREMENT,
    role_id INT NOT NULL,
    nom VARCHAR(50),
    prenom VARCHAR(50),
    email VARCHAR(100) UNIQUE,
    mot_de_passe VARCHAR(255),
    FOREIGN KEY (role_id) REFERENCES Role(role_id) ON DELETE CASCADE
);

CREATE TABLE plats(
    
);

CREATE TABLE Menus (
    menu_id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    description TEXT,
    menu_image_url VARCHAR(255),
    date_added TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


CREATE TABLE reservation (
    reservation_id INT PRIMARY KEY AUTO_INCREMENT,
    client_id INT NOT NULL,
    menu_id INT NOT NULL,
    date_reservation TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    status ENUM('en_attente', 'acceptee', 'refusee') DEFAULT 'en_attente',
    FOREIGN KEY (client_id) REFERENCES Clients(client_id) ON DELETE CASCADE,
    FOREIGN KEY (menu_id) REFERENCES Menus(menu_id) ON DELETE CASCADE
);

