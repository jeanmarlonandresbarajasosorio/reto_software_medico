-----------------------------------------------------------------------------
-- article
-----------------------------------------------------------------------------

DROP TABLE IF EXISTS article;

CREATE TABLE article
(
    id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    body MEDIUMTEXT,
    category_id INTEGER,
    created_at TIMESTAMP
) ENGINE=InnoDB;

-----------------------------------------------------------------------------
-- category
-----------------------------------------------------------------------------

DROP TABLE IF EXISTS category;

CREATE TABLE category
(
    id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL
) ENGINE=InnoDB;