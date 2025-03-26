-- Step: 01
-- ***************************************************************
-- Doel : Maak een nieuwe database aan met de naam Mvc_smartphone_2408A
-- ***************************************************************
-- Versie       Datum           Auteur              Omschrijving
-- ******       *****           ******              ************
-- 01           12-02-2025      Arjan de Ruijter    Smartphones
-- ***************************************************************

-- Verwijder database Mvc_smartphone_2408A
DROP DATABASE IF EXISTS `Mvc_smartphone_2408A`;

-- Maak een nieuwe database aan Mvc_smartphone_2408A
CREATE DATABASE `Mvc_smartphone_2408A`;

-- Gebruik database Mvc_smartphone_2408A
USE `Mvc_smartphone_2408A`;

-- Step: 02
-- ***************************************************************
-- Doel : Maak een nieuwe tabel aan met de naam Smartphones
-- ***************************************************************
-- Versie       Datum           Auteur              Omschrijving
-- ******       *****           ******              ************
-- 01           12-02-2025      Arjan de Ruijter    Tabel Smartphones
-- ***************************************************************
-- Onderstaande velden toevoegen aan de tabel Smartphones
-- Merk, Model, Prijs, Geheugen, Besturingssysteem, Schermgrootte
-- ***************************************************************

CREATE TABLE Smartphones
(
     Id                 SMALLINT        UNSIGNED    NOT NULL        AUTO_INCREMENT
    ,Merk               VARCHAR(50)                 NOT NULL
    ,Model              VARCHAR(50)                 NOT NULL
    ,Prijs              DECIMAL(6,2)                NOT NULL    
    ,Geheugen           DECIMAL(4,0)                NOT NULL  
    ,Besturingssysteem  VARCHAR(10)                 NOT NULL
    ,Schermgrootte      SMALLINT                    NOT NULL 
    ,ReleaseDate        DATE                        NOT NULL
    ,MegaPixel          DECIMAL(6,2)                Not NULL
    ,IsActief           BIT                         NOT NULL        DEFAULT 1
    ,Opmerking          VARCHAR(255)                NULL            DEFAULT NULL
    ,DatumAangemaakt    DATETIME(6)                 NOT NULL
    ,DatumGewijzigd     DATETIME(6)                 NOT NULL
    ,CONSTRAINT         PK_Smartphones_Id    PRIMARY KEY     CLUSTERED(Id)
) ENGINE=InnoDB;

-- Step: 03
-- ***************************************************************
-- Doel : Vul de tabel Smartphones met gegevens
-- ***************************************************************
-- Versie       Datum           Auteur              Omschrijving
-- ******       *****           ******              ************
-- 01           12-02-2025      Arjan de Ruijter    Vulling Smartphones
-- ***************************************************************

INSERT INTO Smartphones
(
      Merk
     ,Model
     ,Prijs
     ,Geheugen
     ,Besturingssysteem
     ,Schermgrootte
     ,ReleaseDate
     ,MegaPixel
     ,IsActief
     ,Opmerking
     ,DatumAangemaakt
     ,DatumGewijzigd
)
VALUES
 ('Apple', 'iPhone 16 Pro', 1358.99, 64, 'IOS', 60, '2022-02-24', 90.5, 1, NULL, SYSDATE(6), SYSDATE(6)),
 ('Samsung', 'Galaxy S25 Ultra', 1639, 512, 'Android', 80, '2024-09-03', 140.10, 1, NULL, SYSDATE(6), SYSDATE(6)),
 ('Google', 'Pixel 9 Pro', 856, 1024, 'Android', 92, '2023-11-22', 120.7,1, NULL, SYSDATE(6), SYSDATE(6));



 -- Step: 04
-- *****************************************************************************************************
-- Doel : Maak een nieuwe tabel aan met de naam Sneakers
-- *****************************************************************************************************
-- Versie       Datum           Auteur              Omschrijving
-- ******       *****           ******              ************
-- 01           18-02-2025      Arjan de Ruijter    Tabel Sneakers
-- *****************************************************************************************************
-- Onderstaande velden toevoegen aan de tabel Sneakers
-- Type (Hardloop, Basketbal, Casual), Prijs, Materiaal (Leer, Mesh, Synthetisch), Gewicht, Releasedatum
-- *****************************************************************************************************

CREATE TABLE Sneakers
(
     Id                 SMALLINT        UNSIGNED    NOT NULL        AUTO_INCREMENT
    ,Merk               VARCHAR(50)                 NOT NULL
    ,Model              VARCHAR(50)                 NOT NULL
    ,Prijs              DECIMAL(6.2)                Not NUll	
    ,IsActief           BIT                         NOT NULL        DEFAULT 1
    ,Opmerking          VARCHAR(255)                    NULL        DEFAULT NULL
    ,DatumAangemaakt    DATETIME(6)                 NOT NULL
    ,DatumGewijzigd     DATETIME(6)                 NOT NULL
    ,CONSTRAINT         PK_Smartphones_Id    PRIMARY KEY     CLUSTERED(Id)
) ENGINE=InnoDB;

-- Step: 04
-- *****************************************************************
-- Doel : Vul de tabel Sneakers met gegevens
-- *****************************************************************
-- Versie       Datum           Auteur              Omschrijving
-- ******       *****           ******              ************
-- 01           18-02-2025      Arjan de Ruijter    Vulling Sneakers
-- *****************************************************************

INSERT INTO Sneakers
(
      Merk
     ,Model
     ,Prijs
     ,IsActief
     ,Opmerking
     ,DatumAangemaakt
     ,DatumGewijzigd
)
VALUES
 ('Nike', 'Air Jordan 1', 299.99, 1, NULL, SYSDATE(6), SYSDATE(6)),
 ('Adidas', 'Yeezy Boost 350', 249.99, 1, NULL, SYSDATE(6), SYSDATE(6)),
 ('New Balance', 'UniSex', 199.99, 1, NULL, SYSDATE(6), SYSDATE(6));



 -- Step: 05
-- ***************************************************************
-- Doel : Maak een nieuwe tabel aan met de naam Laptops
-- ***************************************************************
-- Versie       Datum           Auteur              Omschrijving
-- ******       *****           ******              ************
-- 01           12-02-2025      Arjan de Ruijter    Tabel Smartphones
-- ***************************************************************
-- Onderstaande velden toevoegen aan de tabel Smartphones
-- Merk, Model, Prijs, Geheugen, Besturingssysteem, Schermgrootte
-- ***************************************************************

CREATE TABLE Laptops
(
     Id                 SMALLINT        UNSIGNED    NOT NULL        AUTO_INCREMENT
    ,Merk               VARCHAR(50)                 NOT NULL
    ,Model              VARCHAR(50)                 NOT NULL
    ,Prijs              DECIMAL(6,2)                NOT NULL    
    ,Ram                DECIMAL(4,0)                NOT NULL  
    ,Besturingssysteem  VARCHAR(10)                 NOT NULL
    ,Opslag             SMALLINT        UNSIGNED    Not NULL
    ,Gewicht            DECIMAL(1,0)                Not Null
    ,IsActief           BIT                         NOT NULL        DEFAULT 1
    ,Opmerking          VARCHAR(255)                NULL            DEFAULT NULL
    ,DatumAangemaakt    DATETIME(6)                 NOT NULL
    ,DatumGewijzigd     DATETIME(6)                 NOT NULL
    ,CONSTRAINT         PK_Smartphones_Id    PRIMARY KEY     CLUSTERED(Id)
) ENGINE=InnoDB;

-- Step: 06
-- ***************************************************************
-- Doel : Vul de tabel Laptops met gegevens
-- ***************************************************************
-- Versie       Datum           Auteur              Omschrijving
-- ******       *****           ******              ************
-- 01           12-02-2025      Arjan de Ruijter    Vulling Smartphones
-- ***************************************************************

INSERT INTO Laptops 
(Merk, Model, Prijs, Ram, Besturingssysteem, Opslag, Gewicht, IsActief, Opmerking, DatumAangemaakt, DatumGewijzigd)
VALUES
('HP', 'Envy 13', 1299.99, 16, 'Linux', 512, 1.3, 1, 'High-end ultrabook', SYSDATE(6), SYSDATE(6)),
('Dell', 'XPS 15', 1799.99, 32, 'Windows 11', 1024, 2.0, 1, 'Powerful laptop for creatives', SYSDATE(6), SYSDATE(6)),
('Apple', 'MacBook Pro 13', 1599.99, 16, 'macOS', 512, 1.4, 1, 'Retina display, M1 chip', SYSDATE(6), SYSDATE(6)),
('Lenovo', 'ThinkPad X1 Carbon', 1499.99, 16, 'Windows 10', 512, 1.1, 1, 'Business laptop', SYSDATE(6), SYSDATE(6)),
('Asus', 'ZenBook 14', 1099.99, 8, 'Windows 10', 256, 1.2, 1, 'Thin and light laptop', SYSDATE(6), SYSDATE(6));


-- Step: 08
-- *****************************************************************************************************
-- Doel : Maak een nieuwe tabel aan met de naam Torens
-- *****************************************************************************************************
-- Versie       Datum           Auteur              Omschrijving
-- ******       *****           ******              ************
-- 01           11-03-2025      Arjan de Ruijter    Tabel Torens
-- *****************************************************************************************************
-- Onderstaande velden zelf toevoegen aan de tabel Torens
-- Kosten, liftsnelheid, Obeservatiedek hoogte
-- *****************************************************************************************************

CREATE TABLE Torens
(
     Id                 SMALLINT        UNSIGNED    NOT NULL        AUTO_INCREMENT
    ,Naam               VARCHAR(50)                 NOT NULL
    ,Locatie            VARCHAR(50)                 NOT NULL
    ,Hoogte             DECIMAL(6,0)                NOT NULL
    ,AantalVerdiepingen DECIMAL(4,0)                NOT NULL
    ,JaarVoltooid       YEAR                        NOT NULL	
    ,IsActief           BIT                         NOT NULL        DEFAULT 1
    ,Opmerking          VARCHAR(255)                    NULL        DEFAULT NULL
    ,DatumAangemaakt    DATETIME(6)                 NOT NULL
    ,DatumGewijzigd     DATETIME(6)                 NOT NULL
    ,CONSTRAINT         PK_Torens_Id    PRIMARY KEY     CLUSTERED(Id)
) ENGINE=InnoDB;

-- Step: 09
-- *****************************************************************
-- Doel : Vul de tabel Torens met gegevens
-- *****************************************************************
-- Versie       Datum           Auteur              Omschrijving
-- ******       *****           ******              ************
-- 01           11-3-2025      Arjan de Ruijter    Vulling Torens
-- *****************************************************************

INSERT INTO Torens
(
      Naam
     ,Locatie
     ,Hoogte
     ,AantalVerdiepingen
     ,JaarVoltooid
     ,IsActief
     ,Opmerking
     ,DatumAangemaakt
     ,DatumGewijzigd
)
VALUES
 ('Burj Khalifa', 'Dubai, VAE', 828, 163, 2010, 1, NULL, SYSDATE(6), SYSDATE(6)),
 ('Merdeka 118', 'Kuala Lumpur, Maleisië', 679, 118, 2023, 1, NULL, SYSDATE(6), SYSDATE(6)),
 ('Shanghai Tower', 'Shanghai, China', 632, 128, 2015, 1, NULL, SYSDATE(6), SYSDATE(6)),
 ('Abraj Al Bait Clock Tower', 'Mekka, Saoedi-Arabië', 601, 120, 2012, 1, NULL, SYSDATE(6), SYSDATE(6));

 -- Step: 10
-- *****************************************************************************************************
-- Doel : Maak een nieuwe tabel aan met de naam Speakers
-- *****************************************************************************************************
-- Versie       Datum           Auteur              Omschrijving
-- ******       *****           ******              ************
-- 01           11-03-2025      Arjan de Ruijter    Tabel Speakers
-- *****************************************************************************************************
-- Onderstaande velden zelf toevoegen aan de tabel Speakers
-- frequentiebereik, Powerbankfunctie, Snelladen
-- *****************************************************************************************************

CREATE TABLE Speakers
(
     Id                 SMALLINT        UNSIGNED    NOT NULL        AUTO_INCREMENT
    ,Naam               VARCHAR(50)                 NOT NULL
    ,Batterijduur       TINYINT         UNSIGNED    NOT NULL
    ,Waterbestendigheid VARCHAR(50 )                NOT NULL
    ,Connectiviteit     VARCHAR(30)                 NOT NULL
    ,IsActief           BIT                         NOT NULL        DEFAULT 1
    ,Opmerking          VARCHAR(255)                    NULL        DEFAULT NULL
    ,DatumAangemaakt    DATETIME(6)                 NOT NULL
    ,DatumGewijzigd     DATETIME(6)                 NOT NULL
    ,CONSTRAINT         PK_Speakers_Id              PRIMARY KEY     CLUSTERED(Id)
) ENGINE=InnoDB;

-- Step: 11
-- *****************************************************************
-- Doel : Vul de tabel Speakers met gegevens
-- *****************************************************************
-- Versie       Datum           Auteur              Omschrijving
-- ******       *****           ******              ************
-- 01           11-3-2025      Arjan de Ruijter     Vulling Speakers
-- *****************************************************************

INSERT INTO Speakers
(
      Naam
     ,Batterijduur
     ,Waterbestendigheid
     ,Connectiviteit
     ,IsActief
     ,Opmerking
     ,DatumAangemaakt
     ,DatumGewijzigd
)
VALUES
 ('JBL Charge 5', 20,'IP67 (stof- en waterdicht)', 'Bluetooth 5.1', 1, NULL, SYSDATE(6), SYSDATE(6)),
 ('Bose SoundLink Flex', 12, 'IP67 (water- en stofdicht)', 'Bluetooth 4.2', 1, NULL, SYSDATE(6), SYSDATE(6)),
 ('Sony SRS-XB43', 24, 'IP67 (water-, stof- en roestbestendig)', 'Bluetooth 5.0, NFC', 1, NULL, SYSDATE(6), SYSDATE(6)),
 ('Ultimate Ears (UE) Boom 3', 15, 'IP67 (waterdicht en drijvend!)', 'Bluetooth 5.0', 1, NULL, SYSDATE(6), SYSDATE(6));

CREATE TABLE Zangeres
(
     Id                 SMALLINT        UNSIGNED    NOT NULL        AUTO_INCREMENT
    ,Naam               VARCHAR(50)                 NOT NULL
    ,Nettowaarde        SMALLINT        UNSIGNED    NOT NULL
    ,Land               VARCHAR(50 )                NOT NULL
    ,Mobiel             VARCHAR(30)                 NOT NULL
    ,Leeftijd           TINYINT         UNSIGNED    NOT NULL
    ,IsActief           BIT                         NOT NULL        DEFAULT 1
    ,Opmerking          VARCHAR(255)                    NULL        DEFAULT NULL
    ,DatumAangemaakt    DATETIME(6)                 NOT NULL
    ,DatumGewijzigd     DATETIME(6)                 NOT NULL
    ,CONSTRAINT         PK_Zangeres_Id              PRIMARY KEY     CLUSTERED(Id)
) ENGINE=InnoDB;

-- Step: 13
-- *****************************************************************
-- Doel : Vul de tabel Zangeres met gegevens
-- *****************************************************************
-- Versie       Datum           Auteur              Omschrijving
-- ******       *****           ******              ************
-- 01           18-3-2025      Arjan de Ruijter     Vulling Zangeres
-- *****************************************************************

INSERT INTO Zangeres
(
      Naam
     ,Nettowaarde
     ,Land
     ,Mobiel
     ,Leeftijd
     ,IsActief
     ,Opmerking
     ,DatumAangemaakt
     ,DatumGewijzigd
)
VALUES
  ('Rihanna', 1400,'Barbados', '+1246 2400 1862400', 36, 1, NULL, SYSDATE(6), SYSDATE(6))
 ,('Madonna', 575,'Verenigde Staten', '+13425 182345', 65, 1, NULL, SYSDATE(6), SYSDATE(6))
 ,('Taylor Swift', 570,'Verenigde Staten', '+13421 231356', 34, 1, NULL, SYSDATE(6), SYSDATE(6))
 ,('Beyoncé', 420,'Verenigde Staten', '+18723 213481', 41, 1, NULL, SYSDATE(6), SYSDATE(6))
 ,('Jennifer Lopez', 400,'Verenigde Staten', '+16254 751243', 54, 1, NULL, SYSDATE(6), SYSDATE(6));



CREATE TABLE Ufc (
    Id SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
    Naam VARCHAR(50) NOT NULL,
    Ranglijstnummer SMALLINT UNSIGNED NOT NULL,
    Lengte DECIMAL(3,2) UNSIGNED NOT NULL,
    Gewicht SMALLINT UNSIGNED NOT NULL,
    Leeftijd TINYINT UNSIGNED NOT NULL,
    Ko TINYINT UNSIGNED NOT NULL,
    CONSTRAINT PK_Ufc_Id PRIMARY KEY (Id)
) ENGINE=InnoDB;

INSERT INTO Ufc (
    Naam,
    Ranglijstnummer,
    Lengte,
    Gewicht,
    Leeftijd,
    Ko
)
VALUES
('Jon Jones', 1, 1.93, 112, 36, 11),
('Alexander Volkanovski', 2, 1.68, 66, 35, 13),
('Islam Makhachev', 3, 1.78, 70, 32, 5),
('Leon Edwards', 4, 1.83, 77, 32, 8),
('Israel Adesanya', 5, 1.93, 84, 34, 16);