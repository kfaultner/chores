CREATE TABLE chore (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    family_id INT NOT NULL,
    chore_type_id INT,
    name VARCHAR(30),
    day_due CHAR(3),
    monetary_value DECIMAL(5,2),
    point_value INT(10),
    bonus TINYINT
);

CREATE TABLE user (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    family_id INT NOT NULL,
    username VARCHAR(30),
    first_name VARCHAR(30),
    password VARCHAR(30),
    email VARCHAR(255),
    parent TINYINT,
    point_goal INT
);

CREATE TABLE chore_user (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    chore_id INT,
    user_id INT,
    date_completed DATE,
    interval_start_date DATE
);

CREATE TABLE family (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    last_name VARCHAR(30)
);

CREATE TABLE chore_type (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    type VARCHAR(40)
);

INSERT INTO chore_type (type) VALUE ('Monetary');
INSERT INTO chore_type (type) VALUE ('Points');

INSERT INTO family (last_name) VALUE ('Faultner');
INSERT INTO family (last_name) VALUE ('Gibbons');
INSERT INTO family (last_name) VALUE ('Cromie');

INSERT INTO user (family_id, username, first_name, password, email, parent) VALUE('1', 'kfaultner', 'Kris', 'F@ultn3r', 'kris@faultner.com', '1');
INSERT INTO user (family_id, username, first_name, password, email, parent) VALUE('1', 'dfaultner', 'Dustin', 'F@ultn3r', 'dustin@faultner.com', '1');
INSERT INTO user (family_id, username, first_name, password, parent) VALUE('1', 'emily', 'Emily', 'emily', '0');
INSERT INTO user (family_id, username, first_name, password, parent) VALUE('1', 'abby', 'Abby', 'abby', '0');
INSERT INTO user (family_id, username, first_name, password, email, parent) VALUE('2', 'sgibbons', 'Steve', 'G1bb0ns', 'sgibbons@cox.net', '1');
INSERT INTO user (family_id, username, first_name, password, email, parent) VALUE('2', 'jgibbons', 'JoLyn', 'G1bb0ns', 'sgibbons@cox.net', '1');
INSERT INTO user (family_id, username, first_name, password, parent) VALUE('2', 'jeremy', 'Jeremy', 'jeremy', '0');
INSERT INTO user (family_id, username, first_name, password, parent) VALUE('2', 'nathan', 'Nathan', 'nathan', '0');
INSERT INTO user (family_id, username, first_name, password, email, parent) VALUE('3', 'scromie', 'Sami', 'Cr0m1e', 'sami@cromie.com', '1');
INSERT INTO user (family_id, username, first_name, password, email, parent) VALUE('3', 'mcromie', 'Mike', 'Cr0m1e', 'mike@cromie.com', '1');
INSERT INTO user (family_id, username, first_name, password, parent) VALUE('3', 'lily', 'Lily', 'lily', '0');

INSERT INTO user (family_id, username, first_name, password, parent) 
VALUE('3', 'liam', 'Liam', 'liam', '0');

-- family 1-Faultner, 2-Gibbons, 3-Cromie; chore type 1-Monetary, 2-Points
INSERT INTO chore (family_id, chore_type_id, name, day_due, point_value, bonus) 
VALUE('2', '2', 'Make bed', 'All', '5', '0');
INSERT INTO chore (family_id, chore_type_id, name, day_due, point_value, bonus) 
VALUE('2', '2', 'Clean room', 'All', '10', '0');
INSERT INTO chore (family_id, chore_type_id, name, day_due, point_value, bonus) 
VALUE('2', '2', 'Pick up/ put away toys/books', 'All', '10', '0');
INSERT INTO chore (family_id, chore_type_id, name, day_due, point_value, bonus) 
VALUE('2', '2', 'Take out trash', 'All', '10', '0');
INSERT INTO chore (family_id, chore_type_id, name, day_due, point_value, bonus) 
VALUE('1', '2', 'Take out recycle', 'All', '10', '0');
INSERT INTO chore (family_id, chore_type_id, name, day_due, monetary_value, bonus) 
VALUE('1', '1', 'Clean up dog poop', 'Sat', '3.00', '1');
INSERT INTO chore (family_id, chore_type_id, name, day_due, monetary_value, bonus) 
VALUE('1', '1', 'Mow lawn', 'Sat', '3.00', '1');
INSERT INTO chore (family_id, chore_type_id, name, day_due, monetary_value, bonus) 
VALUE('1', '1', 'Dishes', 'All', '4.00', '1');
INSERT INTO chore (family_id, chore_type_id, name, day_due, monetary_value, bonus) 
VALUE('1', '1', 'Feed dog', 'All', '2.00', '1');
INSERT INTO chore (family_id, chore_type_id, name, day_due, monetary_value, bonus) 
VALUE('1', '1', 'Help with laundry', 'Tue', '1.00', '1');
INSERT INTO chore (family_id, chore_type_id, name, day_due, monetary_value, bonus) 
VALUE('1', '1', 'Help with laundry', 'Thu', '1.00', '1');
INSERT INTO chore (family_id, chore_type_id, name, day_due, monetary_value, bonus) 
VALUE('1', '1', 'Help with laundry', 'Sat', '1.00', '1');
INSERT INTO chore (family_id, chore_type_id, name, day_due, monetary_value, bonus) 
VALUE('1', '1', 'Clean bathroom', 'Fri', '4.00', '1');
INSERT INTO chore (family_id, chore_type_id, name, day_due, monetary_value, bonus) 
VALUE('1', '2', 'Set table', 'All', '15', '1');
INSERT INTO chore (family_id, chore_type_id, name, day_due, monetary_value, bonus) 
VALUE('1', '1', 'Sweep floors', 'Tue', '1.00', '1');
INSERT INTO chore (family_id, chore_type_id, name, day_due, monetary_value, bonus) 
VALUE('1', '1', 'Mop floors', 'Tue', '1.00', '1');
INSERT INTO chore (family_id, chore_type_id, name, day_due, monetary_value, bonus) 
VALUE('1', '1', 'Dust', 'Thu', '2.00', '1');
INSERT INTO chore (family_id, chore_type_id, name, day_due, monetary_value, bonus) 
VALUE('1', '2', 'Help with dinner', 'Mon', '1.00', '1');
INSERT INTO chore (family_id, chore_type_id, name, day_due, monetary_value, bonus) 
VALUE('1', '2', 'Help with dinner', 'Wed', '1.00', '1');
INSERT INTO chore (family_id, chore_type_id, name, day_due, monetary_value, bonus) 
VALUE('1', '2', 'Help with dinner', 'Fri', '1.00', '1');
INSERT INTO chore (family_id, chore_type_id, name, day_due, monetary_value, bonus) 
VALUE('1', '2', 'Vacuum', 'Wed', '1.00', '1');


INSERT INTO chore (family_id, chore_type_id, name, day_due, monetary_value, point_value, bonus) VALUE()




