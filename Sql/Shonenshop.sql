CREATE DATABASE Shonenshop;

USE Shonenshop;
CREATE TABLE Categorie(
	nom varchar(20) 
    );
	
CREATE TABLE Produit(
	nomCategorie varchar(20),
	reference varchar(20),
	designation varchar(50),
	prix varchar(20),
	stock varchar(20),
	photo varchar(50)
	);

	