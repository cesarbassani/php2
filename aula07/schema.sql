create database sistema;

USE sistema;

create table users(
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    login VARCHAR(32) NOT NULL,
    password VARCHAR(64) NOT NULL,
    email VARCHAR(64),
    PRIMARY KEY(id)
);

INSERT INTO users VALUES (1,  'rodrigo1',  MD5('milenium1'),  'rodrigo1@milenium.com');
INSERT INTO users VALUES (2,  'rodrigo2',  MD5('milenium2'),  'rodrigo2@milenium.com');
INSERT INTO users VALUES (3,  'rodrigo3',  MD5('milenium3'),  'rodrigo3@milenium.com');
INSERT INTO users VALUES (4,  'rodrigo4',  MD5('milenium4'),  'rodrigo4@milenium.com');
INSERT INTO users VALUES (5,  'rodrigo5',  MD5('milenium5'),  'rodrigo5@milenium.com');
INSERT INTO users VALUES (6,  'rodrigo6',  MD5('milenium6'),  'rodrigo6@milenium.com');
INSERT INTO users VALUES (7,  'rodrigo7',  MD5('milenium7'),  'rodrigo7@milenium.com');
INSERT INTO users VALUES (8,  'rodrigo8',  MD5('milenium8'),  'rodrigo8@milenium.com');
INSERT INTO users VALUES (9,  'rodrigo9',  MD5('milenium9'),  'rodrigo9@milenium.com');
INSERT INTO users VALUES (10, 'rodrigo10', MD5('milenium10'), 'rodrigo10@milenium.com');

# no terminal
# cd php2/aula07
# mysql -uroot -pmilenium < schema.sql
