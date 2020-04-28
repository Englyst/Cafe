CREATE TABLE Guests
(
  GuestID INT NOT NULL,
  NickName VARCHAR(30) NOT NULL,
  GuestAmount INT NOT NULL,
  PRIMARY KEY (GuestID)
);

CREATE TABLE Staff
(
  StaffSSN INT NOT NULL,
  Fname VARCHAR(30) NOT NULL,
  Lname VARCHAR(30) NOT NULL,
  PhoneNumber INT NOT NULL,
  Salary INT NOT NULL,
  PRIMARY KEY (StaffSSN)
);

CREATE TABLE Bill
(
  BillID INT NOT NULL,
  Date DATE NOT NULL,
  Timeofday INT NOT NULL,
  StaffSSN INT NOT NULL,
  FOREIGN KEY (StaffSSN) REFERENCES Staff(StaffSSN)
);

CREATE TABLE CafeTable
(
  TableID INT NOT NULL,
  Seats INT NOT NULL,
  PRIMARY KEY (TableID)
);

CREATE TABLE Reservation
(
  GuestID INT NOT NULL,
  NickName VARCHAR(30) NOT NULL,
  PhoneNumber INT NOT NULL,
  GuestArrivalTime INT NOT NULL,
  GuestArrivalDate INT NOT NULL,
  TableID INT NOT NULL,
  FOREIGN KEY (GuestID) REFERENCES Guests(GuestID),
  FOREIGN KEY (TableID) REFERENCES CafeTable(TableID)
);

CREATE TABLE MustPay
(
  BillID INT NOT NULL,
  GuestID INT NOT NULL,
  FOREIGN KEY (BillID),
  FOREIGN KEY (GuestID)
);

CREATE TABLE WorksAt
(
  StaffSSN INT NOT NULL,
  TableID INT NOT NULL,
  FOREIGN KEY (StaffSSN),
  FOREIGN KEY (TableID)
 );

insert into Guest values (001,"Smith", 3);
insert into Guest values (002,"Jenkins", 2);

insert into Staff values (111111,"Leonardo", "Dicaprio", 60144060, 5000);
insert into Staff values (222222,"Matt", "Damon", 50486232, 4500);

insert into CafeTable values (1, 4);
insert into CafeTable values (2, 4);
insert into CafeTable values (3, 6);
insert into CafeTable values (4, 6);
