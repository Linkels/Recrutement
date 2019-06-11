#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: etudiant
#------------------------------------------------------------

CREATE TABLE etudiant(
        idhor         Int  Auto_increment  NOT NULL ,
        nom           Varchar (30) NOT NULL ,
        prenom        Varchar (50) NOT NULL ,
        datenai       Date NOT NULL ,
        adresse_perso Varchar (100) NOT NULL ,
        codep         Varchar (10) NOT NULL ,
        nationalite   Varchar (30) NOT NULL ,
        email         Varchar (60) NOT NULL ,
        numetelp      Varchar (15) NOT NULL ,
        numtels       Varchar (15) NOT NULL ,
        superheros    Longtext NOT NULL ,
        hacks         Longtext NOT NULL ,
        intformat     Longtext NOT NULL ,
        motivation    Mediumtext NOT NULL ,
        dansunan      Mediumtext NOT NULL ,
        prerequis1    Longtext NOT NULL ,
        prerequis2    Longtext NOT NULL ,
        profilsuppl   Longtext NOT NULL ,
        langlais      Varchar (50) NOT NULL ,
        lastdipl      Varchar (50) NOT NULL ,
        disponib      Varchar (30) NOT NULL ,
        situactu      Varchar (30) NOT NULL
	,CONSTRAINT etudiant_PK PRIMARY KEY (idhor)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: nationalite
#------------------------------------------------------------

CREATE TABLE nationalite(
        idnat       Int  Auto_increment  NOT NULL ,
        designation Varchar (30) NOT NULL ,
        idhor       Int NOT NULL
	,CONSTRAINT nationalite_PK PRIMARY KEY (idnat)

	,CONSTRAINT nationalite_etudiant_FK FOREIGN KEY (idhor) REFERENCES etudiant(idhor)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: nivangl
#------------------------------------------------------------

CREATE TABLE nivangl(
        idnivangl   Int  Auto_increment  NOT NULL ,
        designation Varchar (30) NOT NULL ,
        idhor       Int
	,CONSTRAINT nivangl_PK PRIMARY KEY (idnivangl)

	,CONSTRAINT nivangl_etudiant_FK FOREIGN KEY (idhor) REFERENCES etudiant(idhor)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: situactu
#------------------------------------------------------------

CREATE TABLE situactu(
        idsituactu  Int  Auto_increment  NOT NULL ,
        designation Varchar (60) NOT NULL ,
        idhor       Int
	,CONSTRAINT situactu_PK PRIMARY KEY (idsituactu)

	,CONSTRAINT situactu_etudiant_FK FOREIGN KEY (idhor) REFERENCES etudiant(idhor)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: codep
#------------------------------------------------------------

CREATE TABLE codep(
        idcodep     Varchar (10) NOT NULL ,
        designation Varchar (10) NOT NULL ,
        idhor       Int NOT NULL
	,CONSTRAINT codep_PK PRIMARY KEY (idcodep)

	,CONSTRAINT codep_etudiant_FK FOREIGN KEY (idhor) REFERENCES etudiant(idhor)
)ENGINE=InnoDB;

