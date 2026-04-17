DROP TABLE IF EXISTS Product;
CREATE TABLE Product(id INTEGER PRIMARY KEY AUTOINCREMENT,
        libelle varchar,
        prix INTEGER,
        stock INTEGER,
        descriptions varchar
);

