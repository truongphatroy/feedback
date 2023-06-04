CREATE TABLE feedback(
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    body TEXT DEFAULT "",
    date DATETIME
);
INSERT INTO feedback(name, email, body, date) VALUES
('John', 'John@gmail.com', 'I like it', current_timestamp()),
('tony', 'tony@gmail.com', 'Please add more videos', current_timestamp()),
('hoang', 'hoang@gmail.com', 'Let do Lavarel project', current_timestamp());
