* Diana, Garret, Kevin, and Jake(TEAM80) */

/* CREATE TABLES  */

CREATE TABLE User (
id INT auto_increment,
fname VARCHAR(50) NOT NULL,
lname VARCHAR(100) NOT NULL,
dob Date,
email VARCHAR(50),
street VARCHAR(50) NOT NULL,
city VARCHAR(50) NOT NULL,
states VARCHAR(2) NOT NULL,
zip INT(6) NOT NULL,
PRIMARY KEY (id)
) ENGINE = innodb;

CREATE TABLE UserPhone (
user_id INT NOT NULL,
phoneType VARCHAR(50),
phoneNum VARCHAR(16) NOT NULL,
FOREIGN KEY (user_id) REFERENCES User(id)
) ENGINE = innodb;




