USE HITS;


#Testing PurchaseOrder

INSERT INTO  PurchaseOrder VALUES (20212102,"20120331","P",23444.99),(20212106,"20120331","L",234404.99);


#Testing Vendor

INSERT INTO  Vendor VALUES ("DELL2323","Dell Inc","3363458767"),("AMAX2012","AMAX Information Technologies","2346759876");





#Testing Vendor Sales' Person 

INSERT INTO  VendorSalePerson values ("Francis","Wilson","4329870099","francis.wilson@dell.org","DELL2323"),("Nana","Owusu-Ansah","0439878976","nanajoe@amaxinfotech.gh","AMAX2012");

#Testing Products

INSERT INTO  Product VALUES ("serv2112","WS-SUP720-3B","IBB Blade Center H","AMAX2012","1000.55",20212102),
("serv2114","WS-SUP720-3B","IBB Blade Center H","AMAX2012","1000.55",20212102),
("serv2116","WS-SUP720-3B","IBB Blade Center H","AMAX2012","1000.55",20212102),
("HDD2112","HD-UP720-3B","WSE HArd driv H","DELL2323","99.55",20212102),
("HDD2119","HD-UP720-3B","WSE HArd driv H","DELL2323","99.55",20212102),
("HDD2117","HD-UP720-3B","WSE HArd driv H","DELL2323","99.55",20212102),
("HDD211","HD-UP720-3B","WSE HArd driv H","DELL2323","99.55",20212102),
("CPU2112","CPU-UP720-3B","WSE CPU H","DELL2323","97.55",20212102),
("MMM2112","HD-UP720-3B","WSE Memory drivH","DELL2323","99.55",20212102),
("RACK3434","RAc-UP720-3B","WSE RACk TEST","DELL2323","999.55",20212102),
("HDD212","HD-UP720-3B","WSE HArd driv H","DELL2323","99.55",20212102),
("IC2112","Ic-UP720-3B","WSE IC TEsT driv H","DELL2323","99.55",20212102),
("CHASSI212","CHASSIUP720-3B","CHASSI test driv H","DELL2323","4599.55",20212106),
("POWsu1212","POW-UP720-3B","WSE POWTESt driv H","DELL2323","99.55",20212102);


#Testing Leases

INSERT INTO  lease VALUES ("CHASSI212","DELL2323","Free Testing","20120325","20120925","Test");


#Testing Supplies 

INSERT INTO  Supplies VALUES ("serv2114","AMAX2012","20120331"),
("serv2116","AMAX2012","20120331"),
("HDD2112","DELL2323","20120331"),
("CPU2112","DELL2323","20120331"),
("MMM2112","DELL2323","20120331"),
("RACK3434","DELL2323","20120331"),
("IC2112","DELL2323","20120331"),
("CHASSI212","DELL2323","20120331"),
("POWsu1212","DELL2323","20120331");


#Testing Return

INSERT INTO  Returned VALUES ("CHASSI212","DELL2323","20120925");

#Testing Replacement

INSERT INTO  Replacement VALUES ("HDD2119","HDD2110","TestingNum339","20120331","DELL2323");

#Testing Installation

INSERT INTO  Installation VALUES ("HDD2112","serv2114","20120401"),("serv2116","CHASSI2112","20120401");

#Testing Disposal

INSERT INTO  Disposal VALUES ("HDD2112","20120331");


#Testing removal

INSERT INTO  removal VALUES ("HDD2112","20120401","serv2114");

#Testing Server

INSERT INTO  server VALUES ("serv2114",4,4,4,4,4,4,4,4,4);

#Testing Chasssis

INSERT INTO  chassis VALUES ("CHASSI212",4,4,4,4,4,4,4);

#Testing PowersupplyUnit

INSERT INTO  powersupplyunit VALUES("POWsu1212",10000,"test",3);


#Testing HDD

INSERT INTO  hdd VALUES("HDD2112","test",4545,3454);

#Testing CPU

INSERT INTO  cpu VALUES ("CPU2112","testModelNumber",4,453,3344);

#Testing Memory

INSERT INTO  memory VALUES ("MMM2112","test",3434,34345);

# Testing Interface Card

INSERT INTO  InterfaceCard VALUES ("IC2112","testconnectortype","testbussspeed",4);

INSERT INTO  Rack VALUES("RACK3434",4,4,4,4,4);




