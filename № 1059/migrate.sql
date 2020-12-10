CREATE TABLE store
(
	ID int not null auto_increment,
	CITY varchar(500) not null,
	PRIMARY KEY (ID)
);

INSERT INTO store (ID, CITY)
VALUES (1, 'Калининград'),
       (2, 'Черняховск'),
       (3, 'Советск');

CREATE TABLE book_store
(
	BOOK_ID int not null,
	STORE_ID int default 1,
	PRICE DECIMAL(10, 2),
	QUANTITY int unsigned default 0,
	PRIMARY KEY (BOOK_ID, STORE_ID),
	FOREIGN KEY FK_STORE_BOOK_STORE (STORE_ID) references store(ID)
		ON UPDATE RESTRICT
		ON DELETE RESTRICT,
	FOREIGN KEY FK_STORE_BOOK_STORE (BOOK_ID) references book(ID)
		ON UPDATE RESTRICT
		ON DELETE RESTRICT
);

INSERT INTO book_store (STORE_ID, BOOK_ID, PRICE, QUANTITY)
SELECT 1, ID, PRICE, QUANTITY FROM book;

ALTER TABLE book DROP PRICE;
ALTER TABLE book DROP QUANTITY;