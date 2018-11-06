CREATE TABLE event (
	id SERIAL PRIMARY KEY NOT NULL
	, day DATE NOT NULL
	, city VARCHAR(100) NOT NULL
	, state VARCHAR(100) NOT NULL
	, country VARCHAR(100) NOT NULL
	, venue VARCHAR(100) NOT NULL
	, performer VARCHAR(100) NOT NULL 
);

CREATE TABLE ticket (
	id SERIAL PRIMARY KEY NOT NULL
	, section VARCHAR(100) NOT NULL
	, seat VARCHAR(100) NOT NULL 
	, price DECIMAL NOT NULL
	, event INT NOT NULL REFERENCES event(id) 	
);

INSERT INTO event (day,city,state,country,venue,performer) VALUES ('2019-01-08','Portland','OR','USA','Moda Center','Twenty One Pilots');
INSERT INTO event (day,city,state,country,venue,performer) VALUES ('2019-02-22','New York','NY','USA','Madison Square Garden','Post Malone');
INSERT INTO event (day,city,state,country,venue,performer) VALUES ('2018-12-19','Denver','CO','USA','Pepsi Center','Muse');
INSERT INTO event (day,city,state,country,venue,performer) VALUES ('2019-03-17','Salt Lake City','UT','USA','Vivint Smart Home Arena','Justin Timberlake');
INSERT INTO event (day,city,state,country,venue,performer) VALUES ('2019-01-26','Los Angeles','CA','USA','STAPLES Center','Migos');
INSERT INTO event (day,city,state,country,venue,performer) VALUES ('2019-01-15','Columbus','OH','USA','Nationwide Arena','Cardi B');
INSERT INTO event (day,city,state,country,venue,performer) VALUES ('2019-05-02','Miami','FL','USA','American Airlines Arena','Fall Out Boy');
INSERT INTO event (day,city,state,country,venue,performer) VALUES ('2019-05-13','New York','NY','USA','MetLife Stadium','Drake');
INSERT INTO event (day,city,state,country,venue,performer) VALUES ('2018-12-20','San Francisco','CA','USA','Oracle Arena','Twenty One Pilots');
INSERT INTO event (day,city,state,country,venue,performer) VALUES ('2019-01-15','Boise','ID','USA','Taco Bell Arena','Taylor Swift');
INSERT INTO event (day,city,state,country,venue,performer) VALUES ('2019-07-25','Seattle','WA','USA','KeyArena','Jon Bellion');

INSERT INTO ticket (section,seat,price,event) VALUES ('K','38',65.99,1);
INSERT INTO ticket (section,seat,price,event) VALUES ('H','14',49.99,1);
INSERT INTO ticket (section,seat,price,event) VALUES ('B','11',45.99,1);
INSERT INTO ticket (section,seat,price,event) VALUES ('GA','GA', 109.99,1);
INSERT INTO ticket (section,seat,price,event) VALUES ('GA','GA', 109.99,1);
INSERT INTO ticket (section,seat,price,event) VALUES ('GA','GA', 109.99,1);
INSERT INTO ticket (section,seat,price,event) VALUES ('GA','GA', 109.99,1);
INSERT INTO ticket (section,seat,price,event) VALUES ('8','15',25.99,2);
INSERT INTO ticket (section,seat,price,event) VALUES ('3','26',25.99,2);
INSERT INTO ticket (section,seat,price,event) VALUES ('3','14',25.99,2);
INSERT INTO ticket (section,seat,price,event) VALUES ('5','11',25.99,2);
INSERT INTO ticket (section,seat,price,event) VALUES ('12','25',15.99,2);
INSERT INTO ticket (section,seat,price,event) VALUES ('13','19',15.99,2);
INSERT INTO ticket (section,seat,price,event) VALUES ('GA','GA',99.99,2);
INSERT INTO ticket (section,seat,price,event) VALUES ('GA','GA',99.99,2);
INSERT INTO ticket (section,seat,price,event) VALUES ('GA','GA',99.99,2);
INSERT INTO ticket (section,seat,price,event) VALUES ('GA','GA',99.99,2);
INSERT INTO ticket (section,seat,price,event) VALUES ('Lower Bowl','243',85.99,3);
INSERT INTO ticket (section,seat,price,event) VALUES ('Lower Bowl','118',95.99,3);
INSERT INTO ticket (section,seat,price,event) VALUES ('Lower Bowl','119',95.99,3);
INSERT INTO ticket (section,seat,price,event) VALUES ('Lower Bowl','208',85.99,3);
INSERT INTO ticket (section,seat,price,event) VALUES ('Lower Bowl','306',75.99,3);
INSERT INTO ticket (section,seat,price,event) VALUES ('Lower Bowl','311',75.99,3);
INSERT INTO ticket (section,seat,price,event) VALUES ('Lower Bowl','335',75.99,3);
INSERT INTO ticket (section,seat,price,event) VALUES ('Upper Bowl','201',45.99,3);
INSERT INTO ticket (section,seat,price,event) VALUES ('Upper Bowl','222',45.99,3);
INSERT INTO ticket (section,seat,price,event) VALUES ('Upper Bowl','229',45.99,3);
INSERT INTO ticket (section,seat,price,event) VALUES ('GA','GA',129.99,3);
INSERT INTO ticket (section,seat,price,event) VALUES ('GA','GA',129.99,3);
INSERT INTO ticket (section,seat,price,event) VALUES ('GA','GA',129.99,3);
INSERT INTO ticket (section,seat,price,event) VALUES ('A','24',105.99,4);
INSERT INTO ticket (section,seat,price,event) VALUES ('A','14',109.99,4);
INSERT INTO ticket (section,seat,price,event) VALUES ('B','08',99.99,4);
INSERT INTO ticket (section,seat,price,event) VALUES ('D','15',95.99,4);
INSERT INTO ticket (section,seat,price,event) VALUES ('H','24',125.99,4);
INSERT INTO ticket (section,seat,price,event) VALUES ('J','33',105.99,4);
INSERT INTO ticket (section,seat,price,event) VALUES ('J','11',109.99,4);
INSERT INTO ticket (section,seat,price,event) VALUES ('M','3',145.99,4);
INSERT INTO ticket (section,seat,price,event) VALUES ('A','2',99.99,4);
INSERT INTO ticket (section,seat,price,event) VALUES ('GA','GA',185.99,4);
INSERT INTO ticket (section,seat,price,event) VALUES ('GA','GA',185.99,4);
INSERT INTO ticket (section,seat,price,event) VALUES ('GA','GA',185.99,4);
INSERT INTO ticket (section,seat,price,event) VALUES ('GA','GA',185.99,4);
INSERT INTO ticket (section,seat,price,event) VALUES ('GA','GA',185.99,4);
INSERT INTO ticket (section,seat,price,event) VALUES ('GA','GA',185.99,4);
INSERT INTO ticket (section,seat,price,event) VALUES ('Suite 108','4',259.99,5);
INSERT INTO ticket (section,seat,price,event) VALUES ('Suite 108','5',259.99,5);
INSERT INTO ticket (section,seat,price,event) VALUES ('Suite 108','6',259.99,5);
INSERT INTO ticket (section,seat,price,event) VALUES ('Suite 110','2',259.99,5);
INSERT INTO ticket (section,seat,price,event) VALUES ('Suite 110','5',259.99,5);
INSERT INTO ticket (section,seat,price,event) VALUES ('Suite 110','8',259.99,5);
INSERT INTO ticket (section,seat,price,event) VALUES ('L3','19',105.99,5);
INSERT INTO ticket (section,seat,price,event) VALUES ('L4','12',105.99,5);
INSERT INTO ticket (section,seat,price,event) VALUES ('L4','5',105.99,5);
INSERT INTO ticket (section,seat,price,event) VALUES ('L13','20',105.99,5);
INSERT INTO ticket (section,seat,price,event) VALUES ('L13','21',105.99,5);
INSERT INTO ticket (section,seat,price,event) VALUES ('H2','34',75.99,5);
INSERT INTO ticket (section,seat,price,event) VALUES ('H2','35',75.99,5);
INSERT INTO ticket (section,seat,price,event) VALUES ('H8','34',65.99,5);
INSERT INTO ticket (section,seat,price,event) VALUES ('H12','34',65.99,5);
INSERT INTO ticket (section,seat,price,event) VALUES ('H12','11',65.99,5);
INSERT INTO ticket (section,seat,price,event) VALUES ('H7','23',55.99,5);
INSERT INTO ticket (section,seat,price,event) VALUES ('4','12',79.99,6);
INSERT INTO ticket (section,seat,price,event) VALUES ('5','3',79.99,6);
INSERT INTO ticket (section,seat,price,event) VALUES ('5','18',79.99,6);
INSERT INTO ticket (section,seat,price,event) VALUES ('8','5',79.99,6);
INSERT INTO ticket (section,seat,price,event) VALUES ('GA','GA',105.99,6);
INSERT INTO ticket (section,seat,price,event) VALUES ('GA1','GA',79.99,7);
INSERT INTO ticket (section,seat,price,event) VALUES ('GA1','GA',79.99,7);
INSERT INTO ticket (section,seat,price,event) VALUES ('GA2','GA',89.99,7);
INSERT INTO ticket (section,seat,price,event) VALUES ('GA2','GA',89.99,7);
INSERT INTO ticket (section,seat,price,event) VALUES ('C','12',59.99,7);
INSERT INTO ticket (section,seat,price,event) VALUES ('E','8',59.99,7);
INSERT INTO ticket (section,seat,price,event) VALUES ('F','19',59.99,7);
INSERT INTO ticket (section,seat,price,event) VALUES ('C','20',59.99,7);
INSERT INTO ticket (section,seat,price,event) VALUES ('Box 24','Box',499.99,8);
INSERT INTO ticket (section,seat,price,event) VALUES ('6','54',145.99,8);
INSERT INTO ticket (section,seat,price,event) VALUES ('8','34',135.99,8);
INSERT INTO ticket (section,seat,price,event) VALUES ('3','12',129.99,8);
INSERT INTO ticket (section,seat,price,event) VALUES ('4','33',149.99,8);
INSERT INTO ticket (section,seat,price,event) VALUES ('7','8',159.99,8);
INSERT INTO ticket (section,seat,price,event) VALUES ('7','33',159.99,8);
INSERT INTO ticket (section,seat,price,event) VALUES ('Upper','452',119.99,10);
INSERT INTO ticket (section,seat,price,event) VALUES ('Upper','312',119.99,10);
INSERT INTO ticket (section,seat,price,event) VALUES ('Upper','322',119.99,10);
INSERT INTO ticket (section,seat,price,event) VALUES ('Upper','335',119.99,10);
INSERT INTO ticket (section,seat,price,event) VALUES ('Upper','402',119.99,10);
INSERT INTO ticket (section,seat,price,event) VALUES ('Upper','506',119.99,10);
INSERT INTO ticket (section,seat,price,event) VALUES ('Upper','534',119.99,10);
INSERT INTO ticket (section,seat,price,event) VALUES ('Upper','804',119.99,10);
INSERT INTO ticket (section,seat,price,event) VALUES ('Upper','834',119.99,10);
INSERT INTO ticket (section,seat,price,event) VALUES ('Upper','835',119.99,10);
INSERT INTO ticket (section,seat,price,event) VALUES ('Lower','434',189.99,10);
INSERT INTO ticket (section,seat,price,event) VALUES ('Upper','402',199.99,10);
INSERT INTO ticket (section,seat,price,event) VALUES ('Upper','228',209.99,10);
INSERT INTO ticket (section,seat,price,event) VALUES ('Upper','234',209.99,10);
INSERT INTO ticket (section,seat,price,event) VALUES ('Upper','604',189.99,10);
INSERT INTO ticket (section,seat,price,event) VALUES ('Upper','556',189.99,10);
INSERT INTO ticket (section,seat,price,event) VALUES ('Upper','409',179.99,10);
INSERT INTO ticket (section,seat,price,event) VALUES ('GA','GA',299.99,10);
INSERT INTO ticket (section,seat,price,event) VALUES ('GA','GA',299.99,10);
INSERT INTO ticket (section,seat,price,event) VALUES ('GA','GA',299.99,10);
INSERT INTO ticket (section,seat,price,event) VALUES ('GA','GA',299.99,10);
INSERT INTO ticket (section,seat,price,event) VALUES ('GA','GA',299.99,10);
INSERT INTO ticket (section,seat,price,event) VALUES ('GA','GA',299.99,10);
INSERT INTO ticket (section,seat,price,event) VALUES ('GA','GA',299.99,10);
INSERT INTO ticket (section,seat,price,event) VALUES ('GA','GA',59.99,12);
INSERT INTO ticket (section,seat,price,event) VALUES ('GA','GA',59.99,12);
INSERT INTO ticket (section,seat,price,event) VALUES ('GA','GA',59.99,12);
INSERT INTO ticket (section,seat,price,event) VALUES ('GA','GA',59.99,12);
INSERT INTO ticket (section,seat,price,event) VALUES ('GA','GA',59.99,12);
INSERT INTO ticket (section,seat,price,event) VALUES ('GA','GA',59.99,12);
INSERT INTO ticket (section,seat,price,event) VALUES ('GA','GA',59.99,12);
INSERT INTO ticket (section,seat,price,event) VALUES ('GA','GA',59.99,12);
INSERT INTO ticket (section,seat,price,event) VALUES ('H','23',89.99,9);
INSERT INTO ticket (section,seat,price,event) VALUES ('F','15',79.99,9);
INSERT INTO ticket (section,seat,price,event) VALUES ('B','35',79.99,9);
INSERT INTO ticket (section,seat,price,event) VALUES ('A','21',59.99,9);
INSERT INTO ticket (section,seat,price,event) VALUES ('A','29',59.99,9);
INSERT INTO ticket (section,seat,price,event) VALUES ('A','32',59.99,9);
INSERT INTO ticket (section,seat,price,event) VALUES ('GA','GA',144.99,9);
INSERT INTO ticket (section,seat,price,event) VALUES ('GA','GA',144.99,9);
INSERT INTO ticket (section,seat,price,event) VALUES ('GA','GA',144.99,9);
INSERT INTO ticket (section,seat,price,event) VALUES ('GA','GA',144.99,9);
INSERT INTO ticket (section,seat,price,event) VALUES ('GA','GA',144.99,9);
INSERT INTO ticket (section,seat,price,event) VALUES ('GA','GA',144.99,9);



