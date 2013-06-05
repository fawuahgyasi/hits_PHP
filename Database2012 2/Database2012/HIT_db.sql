 #   DATABASE DESIGN For the HITS PROJECT:
 #   CREATED BY :Frederick Awuah-Gyasi
 #   COURSE: DATABASE SYSTEMS
 #   PROFESSOR: Dr William Turkett
 
 
 
 
 CREATE DATABASE HITS;
 USE HITS;
 
 CREATE TABLE PurchaseOrder(pOrderNum VARCHAR(10) PRIMARY KEY ,
                            dateOfPurchase DATE NOT NULL ,
							typeOfPurchase enum('P','L') NOT NULL,
							totalCost DECIMAL(10,2) NOT NULL) ENGINE=INNODB;
							
CREATE TABLE Vendor(vendorId VARCHAR(50) PRIMARY KEY, 
                    companyName VARCHAR(50) NOT NULL,
                    supportNum INT(10) NOT NULL ) ENGINE=INNODB;					
					
					
CREATE TABLE VendorSalePerson(fname VARCHAR(25) NOT NULL,
                                lname VARCHAR(25) NOT NULL,
                                tel   INT(10) NOT NULL,
                                email VARCHAR(30) PRIMARY KEY,
                              	vendorId VARCHAR(25) NOT NULL,
                                FOREIGN KEY (vendorId) REFERENCES Vendor(vendorId) ON UPDATE CASCADE ON DELETE RESTRICT) ENGINE=INNODB;
								
CREATE TABLE Product(productId VARCHAR(50) PRIMARY KEY ,
                     vendorPartNum VARCHAR(30) NOT NULL ,
                     vendorPartDescription VARCHAR(50) NOT NULL ,
                     vendorId VARCHAR(25) NOT NULL,
                     price DECIMAL(10,2) NOT NULL,
                     pOrderNum INT NOT NULL,
                     FOREIGN KEY (vendorId) REFERENCES VendorSalePerson(vendorId) ON UPDATE CASCADE ON DELETE RESTRICT,
                     FOREIGN KEY (pOrderNum) REFERENCES	PurchaseOrder(pOrderNum) ON UPDATE CASCADE) ENGINE=INNODB;
					 
CREATE TABLE Installation(productId VARCHAR(50) NOT NULL,
                          locOfInstall VARCHAR(50) NOT NULL,
						  dateOfInstall DATE NOT NULL,
						  PRIMARY KEY (productId,dateOfInstall),
						  FOREIGN KEY (productId) REFERENCES Product(productId) ON DELETE RESTRICT ON UPDATE CASCADE) ENGINE=INNODB;
						  
CREATE TABLE Disposal(productId VARCHAR(50) NOT NULL,
                      dateOfTrans DATE NOT NULL,
					  PRIMARY KEY (productId,dateOfTrans),
					  FOREIGN KEY (productId) REFERENCES Product(productId) ON UPDATE CASCADE) ENGINE=INNODB;
					  
CREATE TABLE Removal(productId VARCHAR(50) NOT NULL,
                     dateOfRemoval DATE NOT NULL,
					 locOfRemoval VARCHAR(50) NOT NULL,
					 PRIMARY KEY (productId,dateOfRemoval),
					 FOREIGN KEY (productId) REFERENCES Product(productId))ENGINE=INNODB;
					 
CREATE TABLE Supplies(productId VARCHAR(50) NOT NULL,
                     vendorId VARCHAR(50) NOT NULL,
					 dateReceived DATE NOT NULL,
					 PRIMARY KEY(productId,vendorId,dateReceived),
					 FOREIGN KEY(productId) REFERENCES Product(productId) ON UPDATE CASCADE,
					 FOREIGN KEY(vendorId) REFERENCES VendorSalePerson(vendorId)) ENGINE=INNODB;
					 
CREATE TABLE Lease (productId VARCHAR(50) NOT NULL,
                   vendorId VARCHAR(50) NOT NULL,
				   termOfSupport VARCHAR(50) NOT NULL,
				   startDate DATE NOT NULL,
				   stopDate DATE NOT NULL,
				   supportReference VARCHAR(50),
				   PRIMARY KEY (productId,vendorId,startDate),
				   FOREIGN KEY (vendorId) REFERENCES VendorSalePerson(vendorId)) ENGINE=INNODB;
				   
				   
CREATE TABLE Returned (productId VARCHAR(50) NOT NULL,
                       vendorId VARCHAR(50) NOT NULL,
					   dateOfReturn DATE NOT NULL,
					   PRIMARY KEY (productId,dateOfReturn),
					   FOREIGN KEY(productId) REFERENCES Product(productId) ON UPDATE CASCADE,
					   FOREIGN KEY(vendorId) REFERENCES VendorSalePerson(vendorId)) ENGINE=INNODB;
					   
CREATE TABLE Replacement (productId VARCHAR(50) NOT NULL,
                          newProductId VARCHAR(50) NOT NULL,
						  rMAreferenceNum VARCHAR(50) NOT NULL,
						  dateOfRMA DATE NOT NULL,
						  vendorId VARCHAR(50) NOT NULL,
						  PRIMARY KEY(rMAreferenceNum),
						  FOREIGN KEY(productId) REFERENCES Product(productId) ON UPDATE CASCADE,
					      FOREIGN KEY(vendorId) REFERENCES VendorSalePerson(vendorId)) ENGINE=INNODB;
						  
CREATE TABLE Rack (productId VARCHAR(50) NOT NULL,
                   width INT(3) NOT NULL,
				   dethp INT(3) NOT NULL,
				   height INT(3) NOT NULL,
				   rackUnit INT(3) NOT NULL,
				   sideBay INT(3) NOT NULL,
				   PRIMARY KEY (productId),
				   FOREIGN KEY (productId) REFERENCES Product(productId) ON UPDATE CASCADE) ENGINE=INNODB;
				   
				   
CREATE TABLE Chassis(productId VARCHAR(50) NOT NULL,
                     numOfMB INT(3) NOT NULL,
					 numOfPB INT(3) NOT NULL,
					 numOfFB INT(3) NOT NULL,
					 numOfSwB INT(3) NOT NULL,
					 numOfSvB INT(3) NOT NULL,
					 sizeInRackUnit INT (3) NOT NULL,
					 dethp INT(3) NOT NULL,
					 PRIMARY KEY (productId),
					 FOREIGN KEY (productId) REFERENCES Product(productId) ON UPDATE CASCADE) ENGINE=INNODB;
					 
					 
CREATE TABLE Server(productId VARCHAR(50) NOT NULL,
                     numCPU INT(3) NOT NULL,
					 numHDBay INT(3) NOT NULL,
					 numMem INT(3) NOT NULL,
					 numOptBay INT(3) NOT NULL,
					 numPCI INT(3) NOT NULL,
					 numPSU INT(3) NOT NULL,
					 numLOMA INT(3) NOT NULL,
					 numMgmAdt INT(3) NOT NULL,
					 serverSize INT(3) NOT NULL,
					 PRIMARY KEY (productId),
					 FOREIGN KEY (productId) REFERENCES Product(productId) ON UPDATE CASCADE) ENGINE=INNODB;
					 
CREATE TABLE Cpu (productId VARCHAR(50) NOT NULL,
                  modelNum VARCHAR(10) NOT NULL,
				  numOfCores INT(3) NOT NULL,
				  clockSpeed INT(5) NOT NULL,
				  memBusSpeed INT(5) NOT NULL,
				  PRIMARY KEY (productId),
				  FOREIGN KEY (productId) REFERENCES Product(productId) ON UPDATE CASCADE) ENGINE=INNODB;
				  
				  
				  
CREATE TABLE HDD (productId VARCHAR(50) NOT NULL,
                  interfaceType VARCHAR(5) NOT NULL,
				  rotationSpeed INT(6) NOT NULL,
				  capacity  INT(6) NOT NULL,
				  PRIMARY KEY (productId),
				  FOREIGN KEY (productId) REFERENCES Product(productId) ON UPDATE CASCADE) ENGINE=INNODB;
				  
CREATE TABLE Memory (productId VARCHAR(50) NOT NULL,
                     memType VARCHAR(5),
                     busSpeed INT(5),
                     capacity INT(6),
                     PRIMARY KEY (productId),
					 FOREIGN KEY (productId) REFERENCES Product(productId) ON UPDATE CASCADE) ENGINE=INNODB;


CREATE TABLE PowerSupplyUnit(productId VARCHAR(50) NOT NULL,
                             powerRate  INT(6) NOT NULL,
                             sockType   VARCHAR(50) NOT NULL,
                             numOfSock  INT(2),
                             PRIMARY KEY (productId),
					         FOREIGN KEY (productId) REFERENCES Product(productId) ON UPDATE CASCADE) ENGINE=INNODB;

CREATE TABLE InterfaceCard (productId VARCHAR(50) NOT NULL,
                             connectorType VARCHAR(50) NOT NULL,
                             busSpeed   VARCHAR(50) NOT NULL,
                             numOfport   INT(2),
                             PRIMARY KEY (productId),
					         FOREIGN KEY (productId) REFERENCES Product(productId) ON UPDATE CASCADE) ENGINE=INNODB;							 
				  
						  
						  
				   
	
					 
                         					 
						  