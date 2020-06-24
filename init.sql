CREATE DATABASE library;
USE library;
-- 书籍信息
CREATE TABLE book
(
    bookNo varchar(10) primary key,
    bookName varchar(20)not null ,
    importDate date not null ,
    inLibStatus enum('available','unavailable','locked') default 'available', 
    bookPrice float(2) not null ,
    frequency int not null ,
    category varchar(20) not null
);

-- 管理员信息
CREATE TABLE admin
(
    adminname varchar(10) primary key,
    password varchar(10) not null,
    level enum('normal', 'super')
);

-- 读者信息
CREATE TABLE reader
(
    readerNo varchar(10) primary key,
    readerName varchar(20) not null
);

-- 借阅信息
CREATE TABLE borrowBook
(
    serialNumber int primary key AUTO_INCREMENT,
    readerNo varchar(10) not null,
    bookNo varchar(10) not null,
    borrowDate date not null,
    foreign key (readerNo) references reader(readerNo),
    foreign key (bookNo) references book(bookNo)
);

-- 归还信息
CREATE TABLE returnBook
(
    serialNumber int primary key,
    readerNo varchar(10) not null,
    bookNo varchar(10) not null,
    returnDate date not null,
    foreign key (readerNo) references reader(readerNo),
    foreign key (bookNo) references book(bookNo),
    foreign key (serialNumber) references borrowBook(serialNumber)
);

-- 罚款信息
CREATE TABLE fine
(
    serialNumber int primary key,
    readerNo varchar(10) not null,
    bookNo varchar(10) not null,
    fine float(2) check (fine>=0),
    lossResult varchar(20) not null,
    foreign key (readerNo) references reader(readerNo),
    foreign key (bookNo) references book(bookNo)
);

-- 遗失信息
CREATE TABLE loss
(
    bookNo varchar(10) primary key,
    lossResult enum('normal','outdated','broken','others','lost'),
    recordDate date not null,
    foreign key (bookNo) references book(bookNo)
);

CREATE INDEX book_IND on book (bookNo);
CREATE INDEX reader_IND on reader (readerNo);
 
INSERT INTO `admin` (`adminname`, `password`, `level`) VALUES ('normal', 'normal', 'normal'), ('super', 'super', 'super');