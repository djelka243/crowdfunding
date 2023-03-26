



#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: MEMBRES
#------------------------------------------------------------

CREATE TABLE MEMBRES(
        id_membre Int  Auto_increment  NOT NULL ,
        nom       Varchar (10) NOT NULL ,
        postnom   Varchar (10) NOT NULL ,
        prenom    Varchar (10) NOT NULL ,
        email     Varchar (10) NOT NULL ,
        password  Varchar (10) NOT NULL ,
        date      TimeStamp NOT NULL
	,CONSTRAINT MEMBRES_PK PRIMARY KEY (id_membre)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: PROJETS
#------------------------------------------------------------

CREATE TABLE PROJETS(
        id_projet    Int  Auto_increment  NOT NULL ,
        localisation Varchar (10) NOT NULL ,
        nom_projet   Varchar (10) NOT NULL ,
        description  Varchar (30) NOT NULL ,
        risque       Varchar (10) NOT NULL ,
        rendement    Varchar (10) NOT NULL ,
        date         TimeStamp NOT NULL ,
        id_membre    Int NOT NULL
	,CONSTRAINT PROJETS_PK PRIMARY KEY (id_projet)

	,CONSTRAINT PROJETS_MEMBRES_FK FOREIGN KEY (id_membre) REFERENCES MEMBRES(id_membre)
)ENGINE=InnoDB;

