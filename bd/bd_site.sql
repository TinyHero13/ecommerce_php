CREATE DATABASE IF NOT EXISTS banco_site;
USE banco_site;
#Drop database banco_site;
SET GLOBAL lc_time_names = pt_BR;

-- --------------------------------------------------------

CREATE TABLE IF NOT EXISTS usuarios(
  idusuario int(10) unsigned NOT NULL AUTO_INCREMENT, #nunca_é_igual
  nome varchar(100) NOT NULL, #pode_ser_igual
  email varchar(50) NOT NULL, UNIQUE KEY(email), #não_pode_ser_igual
  usuario varchar(50) NOT NULL, #pode_ser_igual
  senha varchar(50) NOT NULL, #pode_ser_igual
  cpf varchar(50) NOT NULL, UNIQUE KEY(senha),  #não_pode_ser_igual
  data_nasc date  NOT NULL, #pode_ser_igual
  sexo varchar(20) NOT NULL, #pode_ser_igual
  telefone varchar(50) NOT NULL,  #pode_ser_igual
  PRIMARY KEY (idusuario)/*,  unique key(email), unique key (cpf), unique key(telefone)*/)
  ENGINE = MyISAM DEFAULT CHARSET = utf8 AUTO_INCREMENT = 1;
  #DROP TABLE usuarios;
  select * from usuarios;
  
/*
insert into usuarios values(1,"Carlos","a@gmail.com","Carlos123","123","1234","1991-02-02","masculino","31681012");
insert into usuarios values(2,"Joana","joana@yahoo.com","XxxJoanaxxX","joaninha","315342","2001-14-10","feminino","152154");
insert into usuarios values(3,"Karina","karina@htmail.com","Karina","karina123","34235","2019-02-02","feminino","571385714");
*/

-- --------------------------------------------------------


CREATE TABLE IF NOT EXISTS ADM(
chave varchar(400) primary key,
adm varchar(80), 
senha_adm varchar(60));

insert into ADM values ("acesso", "Yasmim", "1234");
insert into ADM values ("entrada", "Guilherme", "4321");

-- --------------------------------------------------------

CREATE TABLE IF NOT EXISTS produtos(
  idproduto int NOT NULL AUTO_INCREMENT,
  nome varchar(100) NOT NULL,
  descricao varchar(1000) NOT NULL,
  preco decimal(10,2) NOT NULL,
  img varchar(500) NOT NULL,
  categoria varchar(30) NOT NULL,
  estoque int NOT NULL,  
  PRIMARY KEY (idproduto))
  ENGINE = MyISAM DEFAULT CHARSET = utf8 AUTO_INCREMENT = 1;
  #select * from produtos;
  DROP TABLE produtos;
  
insert into produtos values (1,"Computador Desktop Intel Core 2 Duo 1,8 GHz Mem 4GB HD 160GB","Computador feito sob medida para que voce extraia
 o máximo da sua produtividade no trabalho ou arrase nos estudos. Ele tambem proporciona conectividade sem igual para você navegar pela 
 internet, assistir filmes e se comunicar com seus amigos e familiares com velocidade e fluidez.","1500.00","1","computador","20");
insert into produtos values (2,"Torre branca rbg","nova torre","470.00","2","computador","10");
insert into produtos values (4,"GTX 1880 TI","a nova placa de video da nvidia","2000.00","4","placa_de_video","15");
insert into produtos values (5,"Tablet Samsung Galaxy Tab A T280 8GB Wi-Fi Tela 7 Android Quad-Core - Preto","O Samsung Galaxy Tab A T280 oferece 
uma experiência tecnológica incrível e altamente funcional. E excelente para realizar diversas atividades com navegação de qualidade e facil manuseio.
Com sistema operacional Android, possui tela de 7 polegadas para a exibição de diversos conteudos e tambem conta com processador Quad Core 1.3GHz 
para uma navegaçao mais rapida e fluida.","751.50","5","tablet","100");
insert into produtos values (6,"Notebook Essentials E30 Intel Core I3 4GB 1TB LED Full HD 15.6'' W10 Branco Onix - Samsung","Cada detalhe 
foi desenhado para oferecer toda a comodidade na hora de escrever seus textos, pagar suas contas ou se divertir na internet.","1583.99","6","notebook","20");



-- --------------------------------------------------------
create table pedidos(id_pedido int NOT NULL AUTO_INCREMENT, 
idproduto int not null,
nome_p varchar(70) not null,
idusuario int not null,
nome_c varchar(70),
preco_total decimal(10,2), 
qtde_total int, primary key(id_pedido),
FOREIGN KEY(idproduto) REFERENCES produtos(idproduto),
FOREIGN KEY(nome_p) REFERENCES produtos(nome), 
FOREIGN KEY(idusuario) REFERENCES usuarios(idusuario),
FOREIGN KEY(nome_c) REFERENCES usuarios(nome));






 
 