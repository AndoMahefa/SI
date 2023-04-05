drop database compta;
create database compta;
use compta;

create table devise(
    id_devise int primary key auto_increment,
    nom_devise varchar(30),
    valeur float,
    date_devise date
);
create table user(
    id_user int primary key auto_increment,
    pseudo varchar(30),
    email varchar(30),
    password varchar(30),
    photo_de_profil varchar(30)
);
create table societe(
    id_societe int primary key auto_increment,
    nom_societe varchar(30),
    nom_dirigeant varchar(30),
    adresse_societe varchar(30),
    siege varchar(30),
    date_de_creation date,
    nif int,
    photo_nif varchar(30),
    stat int,
    nrcs varchar(30),
    logo varchar(30),
    email varchar(30),
    telephone int,
    devise int references devise(id_devise),
    devise_equivalence int references devise(id_devise)
);
create table racine_compte(
    id int primary key auto_increment,
    numerocompte int,
    intitule varchar(50)
);
create table plan_comptable(
    numero_compte int(5) primary key,
    nom_compte varchar(30)
);
create table plan_comptable_society(
    id_plan_comptable_society int primary key auto_increment ,
    id_societe int references societe(id_societe) ,
    numero_compte int(5) references plan_comptable (numero_compte)
) ;
create table code_journal(
    code_journal varchar(2) primary key,
    nom_journal varchar(30)
);
create table code_journal_society(
  idcode_journal_society int primary key auto_increment ,
  id_societe int references societe(id_societe) ,
  code_journal varchar(2) references code_journal(code_journal)
) ;
create table plan_tiers(
    id_societe int references societe(id_societe) ,
    id_plan_tiers int primary key auto_increment,
    numero_compte_society int references plan_comptable_society (id_plan_comptable_society),
    numero_tiers varchar(13),
    nom_tiers varchar(35)
);
create table exercice(
    id_exercice int primary key auto_increment,
    date_debut datetime,
    date_fin datetime
);
create table journal(
  idjournal int primary key auto_increment ,
  id_societe int references societe(id_societe),
  code_journal_society int references code_journal_society(idcode_journal_society) ,
  numero_compte_society int references plan_comptable_society (id_plan_comptable_society),
  plan_tiers int references plan_tiers (id_plan_tiers) ,
  reference_piece varchar(30),
  libelle_ecriture varchar(30) ,
  date_journal date ,
  Montant float ,
  devise int references devise(id_devise) ,
  debit float ,
  credit float ,
  typeval int
);
-- achat
insert into journal values(null,1 ,1,4,1,'bni/001','vente ps5',current_date,1250000,null,12500000,0,0);
-- tva TvaDeductible
insert into journal values(null,1 ,1,4,1,'bni/002','vente ps5',current_date,1250000,null,12500000,0,0);
-- fournisseur

-- banque
-- create table Grand_livre(
--     id_mouvement int,
--     id_societe int references societe(id_societe)  ,
--     id_exercice int references exercice(id_exercice),
--     numero_compte_society int references plan_comptable_society (id_plan_comptable_society),
--     id_plan_tiers int references plan_tiers(id_plan_tiers),
--     code_journal_society int references code_journal_society(idcode_journal_society),
--     debit float,
--     credit float,
--     date_mvt date,
--     n_piece varchar(30) ,
--     motif varchar(30)
-- );
-- insetion
insert into user values (null,'ketaka','ketaka@gmail.com','145214','default.jpg');
insert into societe values(null,'ains','ainasoa','marovoay','antananarivo','2009-01-01',14522145,'default.jpg',145214,'4542F565','logo.jpg','ains@gmail.com',0327860252,4,5) ;
insert into code_journal values('AC','achat') ;
insert into code_journal values('AN','ANouveau') ;
insert into code_journal values('BN','BANQUE_BNI') ;
insert into code_journal values('BO','BANQUE_BOA') ;
insert into code_journal values('CA','CAISSE') ;
insert into code_journal values('OD','OPERATION_DIVERSE') ;
insert into code_journal values('VE','VENTE_EXPORT') ;
insert into code_journal values('VL','VENTE_LOCALE') ;

insert into code_journal_society values(null,1,'AC') ;
insert into code_journal_society values(null,1,'AN') ;
insert into code_journal_society values(null,1,'BN') ;
insert into code_journal_society values(null,1,'BO') ;
insert into code_journal_society values(null,1,'CA') ;
insert into code_journal_society values(null,1,'OD') ;
insert into code_journal_society values(null,1,'VE') ;
insert into code_journal_society values(null,1,'VL') ;

insert into devise values (null,'ariary',null,current_date) ;
insert into devise values (null,'euro',4500.0,current_date) ;
insert into devise values (null,'dollars',4000,current_date) ;

insert into racine_compte values
(null,10,'Capital'),
(null,11,'Report à nouveaux'),
(null,12,'Résultat'),
(null,12,'Emprunts'),
(null,20,'Immo incorporel'),
(null,21,'Immo corporel'),
(null,3,'Stock'),
(null,445,'TVA'),
(null,512,'Banque'),
(null,53,'Caisse'),
(null,6,'Charge'),
(null,7,'Produit'),
(null,766,'Gain de change'),
(null,666,'Perte de change'),
(null,77,'Produits extra'),
(null,67,'Charge extra');

insert into racine_compte values
(null , 40 , 'fournisseur')  ;  insert into racine_compte values (null , 41 , 'client') ;


insert into plan_comptable values(10000 , 'capital') ;
insert into plan_comptable values(40000 , 'fournisseur') ;
insert into plan_comptable values(41000 , 'client') ;
insert into plan_comptable values(51200 , 'Banque') ;
insert into plan_comptable values(51201 , 'BANQUE_BNI') ;
insert into plan_comptable values(4456 , 'TvaDeductible') ;
insert into plan_comptable values(4457 , 'TvaCollecte') ;
insert into plan_comptable values(6 , 'achat') ;
insert into plan_comptable values(7 , 'vente') ;


insert into plan_comptable_society values (null , 1 , 10000) ;
insert into plan_comptable_society values (null , 1 , 40000) ;
insert into plan_comptable_society values (null , 1 , 41000) ;
insert into plan_comptable_society values(null  ,1 , 51201) ;
insert into plan_comptable_society values(null  ,1 , 4456) ;insert into plan_comptable_society values(null  ,1 , 4457) ;
insert into plan_comptable_society values(null  ,1 , 6) ;insert into plan_comptable_society values(null  ,1 , 7) ;
insert into plan_tiers values (1,null,2,'ando','fournisseur_andy') ;
insert into plan_tiers values (1,null,3,'andy','client_andy') ;




-- create database postgres_view ;
-- \c postgres_view ;

-- create table Employe(
--   NumEmployer int  constraint Employe_pk  primary key  ,
--   NomEmploye varchar(30) ,
--   DateNaissance Date ,
--   Sexe int ,
--   DateEmbauche Date
-- ) ;
-- insert into  Employe values(1,'andy','2005-05-27',1,'2018-01-01') ;
-- insert into  Employe values(2,'mirado','2002-04-04',1,'2019-01-01') ;
-- insert into  Employe values(3,'fitia','2005-04-12',0,'2020-01-01') ;
-- insert into  Employe values(4,'Kanto','2002-08-28',0,'2020-01-01') ;
-- insert into  Employe values(5,'zo','2005-01-26',0,'2020-01-01') ;
-- insert into  Employe values(6,'ainasoa','2005-04-12',1,'2020-01-01') ;
-- create table Salaire(
--   NumEmployer int references Employe (NumEmployer) ,
--   Montant float ,
--   DateDebut Timestamp ,
--   DateFin Timestamp
-- );
-- insert into Salaire values(1,20000000 , '2023-03-22 07:00:00' , '2023-03-22 18:00:00')  ;
-- insert into Salaire values(1,25000000 , '2023-03-22 06:00:00' , '2023-03-22 18:00:00')  ;
-- insert into Salaire values(2,60000000 , '2023-03-22 07:00:00' , '2023-03-22 18:00:00')  ;
-- insert into Salaire values(2,65000000 , '2023-03-22 06:00:00' , '2023-03-22 18:00:00')  ;
-- insert into Salaire values(3,20000000 , '2023-03-22 07:00:00' , '2023-03-22 18:00:00')  ;
-- insert into Salaire values(3,40000000 , '2023-03-22 06:00:00' , '2023-03-22 18:00:00')  ;
-- insert into Salaire values(4,20000000 , '2023-03-22 07:00:00' , '2023-03-22 18:00:00')  ;
-- insert into Salaire values(4,50000000 , '2023-03-22 06:00:00' , '2023-03-22 18:00:00')  ;
-- insert into Salaire values(5,20000000 , '2023-03-22 07:00:00' , '2023-03-22 18:00:00')  ;
-- insert into Salaire values(5,80000000 , '2023-03-22 05:00:00' , '2023-03-22 18:00:00')  ;
-- insert into Salaire values(6,20000000 , '2023-03-22 07:00:00' , '2023-03-22 18:00:00')  ;
-- insert into Salaire values(6,90000000 , '2023-03-22 04:00:00' , '2023-03-22 18:00:00')  ;

-- create table Departement(
--   Numdept int constraint Departement_pk primary key ,
--   NomDept varchar(30)
-- );
-- insert into Departement values(1,'ains') , (2,'ITU') , (3 , 'QG') ;
-- create table DepatementEmploye(
--   NumEmploye int references Employe(NumEmployer) ,
--   NumDepartement int references Departement(Numdept),
--   DateDebut Timestamp ,
--   DateFin Timestamp ,
--   isManager int
-- );
-- insert into DepatementEmploye values (1,1,current_date,null,0) ,      (1,2,current_date,'2026-05-05',0) ,
--                                     (1,3,current_date,null,0) ,       (2,1,current_date,null,0) ,
--                                     (3,1,current_date,'2030-05-05',0) ,       (4,1,current_date,null,0)  ,
--                                     (4,2,current_date,null,0) ,       (5,1,current_date,null,0)  ,
--                                     (6,1,current_date,null,0) ,       (6,2,current_date,null,0)  ;
-- -- mbola miasa
-- create or replace view  V_employer_work as  select distinct(numemploye)  from DepatementEmploye where datefin is  null  ;
-- create or replace view V_employer_About as  select * from V_employer_work join Employe on (V_employer_work.numemploye = Employe.numemployer) ;
-- --mbola miasa sy ny dept
-- create or replace view V_employer_dept as
--   select depatementemploye.numemploye , depatementemploye.numdepartement  from V_employer_about join depatementemploye on
--         (V_employer_about.numemploye = depatementemploye.numemploye) where depatementemploye.datefin is null;
-- --nb employe miasa
-- select count(numemploye) from V_employer_work ;
-- -- liste employer tsy miasa intsony
-- create or replace view V_employer_Notwork as
--     select numemploye from  depatementemploye where datefin is not null and numemploye not in (select numemploye from depatementemploye where datefin is null) ;
-- --nb masculin et femin miasa
-- -- masculin
-- create or replace view V_masculin_dept as
-- select count(numemploye) as maculin , V_employer_dept.numdepartement from V_employer_dept join employe on
--     (employe.numemployer = V_employer_dept.numemploye) where employe.sexe = 1  group by V_employer_dept.numdepartement ;

-- create or replace view V_feminin_dept as
-- select count(numemploye) as feminin  , V_employer_dept.numdepartement from V_employer_dept join employe on
--     (employe.numemployer = V_employer_dept.numemploye) where employe.sexe = 0  group by V_employer_dept.numdepartement ;
