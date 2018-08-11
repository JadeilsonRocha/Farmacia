create schema `farmacia`;
USE `farmacia`;

create table `endereco`(
	`codEndereco` integer auto_increment not null,
    `rua` varchar(45) not null,
    `numero` integer default null,
    `complemento` varchar(45) default null,
    `bairro` varchar(45) not null,
    `cidade` varchar(45) not null,
    `estado` varchar(45) not null,
    `cep` varchar(10) default null,
    `fone` varchar(12) default null,
    primary key (codEndereco)
    );

CREATE TABLE `receita` (
  `codReceita` INTEGER auto_increment NOT NULL,
  `nomePaciente` varchar(45) DEFAULT NULL,
  `cpfPaciente` varchar(15) NOT NULL,
  `crm` varchar(15) NOT NULL,
  `estadoCRM` varchar(45) NOT NULL,
  `dataReceita` DATE NOT NULL,
  PRIMARY KEY (codReceita)
);

CREATE TABLE `cliente` (
  `cpf` varchar(15) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `codEndereco` integer default null,
  `receita` INTEGER default null,
  primary Key(cpf),
  foreign key (receita) references receita(codReceita) on update cascade on delete set null,
  foreign key (codEndereco) references endereco(codEndereco) on update cascade on delete set null
);

CREATE TABLE `faixa` (
  `codFaixa` integer NOT NULL,
  `nomeFaixa` varchar(45) NOT NULL,
  PRIMARY KEY (codFaixa)
);

CREATE TABLE `filial` (
  `codFilial` integer NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `codEndereco` integer default null,
  foreign key (codEndereco) references endereco(codEndereco) on update cascade on delete set null,
  PRIMARY KEY (codFilial)
);

CREATE TABLE `laboratorio` (
  `cnpj` varchar(45) NOT NULL,
  `razaoSocial` varchar(45) NOT NULL,
  `email` varchar(45) not null,
  `codEndereco` integer default null,
  foreign key (codEndereco) references endereco(codEndereco) on update cascade on delete set null,
  PRIMARY KEY (cnpj)
);

CREATE TABLE `produto` (
  `codProduto` varchar(15) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `valor` float NOT NULL,
  PRIMARY KEY (codProduto)
);

CREATE TABLE `medicamento` (
  `codMedicamento` integer auto_increment NOT NULL,
  `classificacao` integer default NULL,
  `codProduto` varchar(15) NOT NULL,
  `fabricacao` VARCHAR(45) NOT NULL,
  PRIMARY KEY (codMedicamento),
  FOREIGN KEY (classificacao) references faixa(codFaixa) on update cascade on delete set null,
  FOREIGN KEY (fabricacao) references laboratorio(cnpj) on update cascade on DELETE cascade,
  FOREIGN KEY (codProduto) REFERENCES produto(codProduto) ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE `perfume` (
  `codPerfume` integer auto_increment not NULL,
  `classificacao` VARCHAR(45) NOT NULL,
  `codProduto` varchar(15) NOT NULL,
  PRIMARY KEY (codPerfume),
  FOREIGN KEY (codProduto) REFERENCES produto(codProduto) ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE `comercializacao` (
  `codComer` integer auto_increment NOT NULL,
  `idFilial` integer NOT NULL,
  `idProduto` varchar(15) NOT NULL,
  PRIMARY KEY (codComer),
  FOREIGN KEY (idFilial) REFERENCES filial(codFilial) ON UPDATE CASCADE ON DELETE CASCADE,
  FOREIGN KEY (idProduto) REFERENCES produto(codProduto) ON UPDATE CASCADE ON DELETE CASCADE
);

create table `venda` (
`codVenda` integer auto_increment not null,
`dataVenda` date not null,
`valorVenda` float not null,
`cpfCliente` varchar(15) default null,
`idReceita` integer default null,
`idProduto` varchar(15) default null,
`formaPag` varchar(12) not null,
primary key (codVenda, cpfCliente),
foreign Key (cpfCliente) references cliente(cpf) on delete cascade on update cascade,
foreign Key (idProduto) references produto(codProduto) on delete set null on update cascade
);

insert into `endereco`(`rua`, `numero`, `complemento`, `bairro`, `cidade`, `estado`, `cep`, `fone`)
values ('Praça Vereador Francisco Alfredo de Souza', 77, null, 'Jd. Anchieta', 'Mauá','SP','09360695', '12987765425'),
('Rua Santa Maria', 123, null, 'Jd. Felicidade', 'Macapá', 'AP', '68909048', '9643248773'),
('Rua Antióquia', 908, null, 'Sucupira', 'Jaboatão dos Guararapes', 'PE', '54170750','813454846'),
('Rua José Luís Barata', 12, null, 'Jd. Marco zero', 'Macapá', 'AP', '68903364', '9634567878'),
('Rua Passagem Modelo', 34, null, 'Guamá', 'Belém', 'PA', '66073400', '9129319400'),
('Rua Maurício de Nassau', 4321, null, 'Rosário', 'Sabará', 'MG', '34555290', '3235888490'),
('Rua Açucenas', 90, null, 'Capão do Angico', 'Alegrete', 'RS', '97547010', '53999787273'),
('Rua Fernando Guilhermme', 324, null, 'Rosado', 'Natal', 'RN', '59054060', '8494598983'),
('Rua 229', 229, null, 'Cidade Nova', 'Manaus', 'AM', '69097544', '97976734456'),
('Rua Sebastião Amaral', 400, null, 'Fragozo', 'Olinda', 'PE', '53400385', '8133634451'),
('Rua Pontilhão', 93, null, 'Pontezinha', 'Petrolina', 'PE', '58097510', '87986732549'),
('Rua Faixa azul', 2659, null, 'Pompéia', 'Barueri', 'SP', '12097544', '13973097756');

INSERT INTO receita VALUES 
(1, 'Amin Amou Amado', '16172825453', 'PE0001', 'PE', '2018-01-01'),
(2, 'Agrícola Beterraba Areia Leão', '20591583895', 'PE0001', 'PE', '2018-01-01'),
(3, 'Ácido Acético Etílico Da Silva', '76522224275', 'PE0001', 'PE', '2018-02-05'),
(4, 'Pedro Álvares Cabral', '35896017526', 'BA0001', 'BA', '2018-03-04'),
(5, 'Napoleão Bonaparte', '32590167534', 'BA0001', 'BA', '2018-02-08'),
(6, 'Michael Jackson', '11430562208', 'BA0001', 'BA', '2018-02-11');

INSERT INTO cliente VALUES 
('16172825453','Amin Amou Amado',1,1),
('20591583895','Agrícola Beterraba Areia Leão',2,2),
('76522224275','Ácido Acético Etílico Da Silva',3,3),
('35896017526','Pedro Álvares Cabral',10,4),
('32590167534','Napoleão Bonaparte',11,5),
('11430562208','Michael Jackson',12,6);

INSERT INTO laboratorio VALUES
('60659463000191', 'Aché',' cac@ache.com.br', 4),
('58430828000160', 'BLAU FARMACÊUTICA S/A', 'icarlos@blau.com.br', 5),
('33078528000132', 'Torrent', 'torrent@torrent.com.br', 6);

insert into filial values
('00989', 'Filial Capão do Angico', 7),
('00988', 'Filial Rosado', 8),
('00987', 'Filial Cidade Nova', 9);

insert into produto values
('7896658025150','ColiKids', 89.90),
('8902220108417','EPÉZ', 77.50),
('7896547882517', 'Diclofenaco de Potássio', 9.90),
('7896374778299', 'Lavanda Johnson & Johnson Baby', 19.00),
('7897283999937', 'Carolina Herrera', 94.90),
('7892137877367', 'Colonia Dove Baby', 15.87),
('7897488388728', 'Cialis', 69.55),
('7896374778300', 'Colonia Black', 49.00),
('7897283999301', 'Chanell Nº8', 294.90),
('7896422506823', 'Cetoconazol', 16.99);

insert into faixa values
(1, 'S/F'),
(2, 'Amarela'),
(3, 'Vermelha'),
(4, 'Preta');

insert into medicamento values
(null, 1, '7896658025150', '60659463000191'),
(null, 4, '8902220108417', '33078528000132'),
(null, 2, '7896422506823', '58430828000160'),
(null, 3, '7896547882517', '58430828000160');

insert into perfume values
(null, 'EAU DE COLOGNE', '7896374778299'),
(null, 'EAU DE TOILETTE', '7897283999937'),
(null, 'EAU DE PARFUM', '7896374778300'),
(null, 'PARFUM', '7897283999301'),
(null, 'EAU DE COLOGNE', '7892137877367');

insert into comercializacao values
(null, '00989', '7896658025150'),
(null, '00988', '8902220108417'),
(null, '00987', '7896547882517'),
(null, '00989', '7896374778299'),
(null, '00988', '7897283999937'),
(null, '00987', '7892137877367'),
(null, '00989', '7897488388728'),
(null, '00988', '7896374778300'),
(null, '00988', '7896422506823'),
(null, '00987', '7897283999301');

insert into venda values
(1, '2010-12-31', 77.5, '11430562208', 6, '8902220108417', 'À Vista'),
(2, '2017-10-10', 16.99, '16172825453', 1, '7896422506823', 'Débito'),
(3, '2017-11-10', 9.9, '35896017526', 4, '7896547882517', 'Crédito 1x'),
(4, '2017-12-12', 19, '32590167534', 0, '7896374778299', 'Crédito 2x');
