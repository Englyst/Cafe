CREATE TABLE Guest
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

CREATE TABLE CafeTable
(
  TableID INT NOT NULL,
  Seats INT NOT NULL,
  PRIMARY KEY (TableID)
);

CREATE TABLE Reservation
(
	ReservationID INT(5) NOT NULL AUTO_INCREMENT,
	Fname VARCHAR(30) NOT NULL,
	Lname	VARCHAR(30) NOT NULL,
  PhoneNumber INT NOT NULL,
  GuestAmount INT NOT NULL,
  GuestArrivalTime INT NOT NULL,
  GuestArrivalDate DATE NOT NULL,
  PRIMARY KEY (ReservationID)
);

CREATE TABLE WorksAt
(
  StaffSSN INT NOT NULL,
  TableID INT NOT NULL,
  FOREIGN KEY (StaffSSN) REFERENCES Staff(StaffSSN),
  FOREIGN KEY (TableID) REFERENCES CafeTable(TableID)
 );
