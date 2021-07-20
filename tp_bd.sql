
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


-- Banco de dados: `tp_bd`
--
CREATE DATABASE tp_bd CHARACTER SET utf8 COLLATE utf8_general_ci;
-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_user`
--

CREATE TABLE `tb_user` (
  `id` INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL,
  `first_name` VARCHAR(40) NOT NULL,
  `last_name` VARCHAR(40) NOT NULL,
  `email` VARCHAR(60) NOT NULL,
  `username` VARCHAR(30) NOT NULL,
  `pass` VARCHAR(255) NOT NULL
);

CREATE TABLE `tb_post` (
  `id` INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL,
  `id_user` INTEGER NOT NULL,
  FOREIGN KEY  (`id_user`) REFERENCES tb_user(`id`),
  `date` DATETIME DEFAULT CURRENT_TIMESTAMP,
  `title` VARCHAR(255) NOT NULL,
  `text` TEXT NOT NULL,
  `category` TEXT NOT NULL
);

CREATE TABLE `tb_comment` (
  `id` INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL,
  `id_user` INTEGER NOT NULL,
  FOREIGN KEY  (`id_user`) REFERENCES tb_user(`id`),
  `id_post` INTEGER NOT NULL,
  `date` DATETIME DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY  (`id_post`) REFERENCES tb_post(`id`),
  `text` VARCHAR(255) NOT NULL
);

--
-- Extraindo dados da tabela `tb_user`
--

INSERT INTO `tb_user` (`first_name`, `last_name`, `email`, `username`, `pass`) VALUES
('Maria', 'teste', 'teste@teste.com', 'username_teste', '12356'),
('João', 'teste2', 'teste2@teste.com', 'username_teste2', '123456'),
('Luiz', 'teste3', 'teste3@teste.com', 'username_teste3', '123456'),
('Joana', 'teste4', 'teste4@teste.com', 'username_teste4', '123456'),
('Mario', 'teste5', 'teste5@teste.com', 'username_teste5', '123456');

--
-- Extraindo dados da tabela `tb_post`
--

INSERT INTO `tb_post` (`id_user`, `title`, `text`, `category`) VALUES
(1, 'Playlist pra viagens', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas interdum eget urna eu vehicula. Vestibulum.', 'PlayLists'),
(2, 'Show raro Pink Floyd 1975', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas interdum eget urna eu vehicula. Vestibulum.', 'Shows'),
(3, 'A simbologia por traz de All Along the Watch Tower de Bob Dylan', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas interdum eget urna eu vehicula. Vestibulum.', 'Resenhas'),
(4, 'Roy Buchanan, o guitarrista que rejeitou os Stones', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas interdum eget urna eu vehicula. Vestibulum.', 'Curiosidades'),
(5, 'Hoje fazem 5 anos que o chorão arrebentou a cara do Marcelo Camelo', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas interdum eget urna eu vehicula. Vestibulum.', 'Curiosidades');


INSERT INTO `tb_comment` (`id_user`, `id_post`, `text`) VALUES
(1,1,'Maecenas interdum eget urna eu vehicula. Vestibulum.'),
(2,1,'Maecenas interdum eget urna eu vehicula. Vestibulum.'),
(3,1,'Maecenas interdum eget urna eu vehicula. Vestibulum.'),

(1,2,'Maecenas interdum eget urna eu vehicula. Vestibulum.'),
(2,2,'Maecenas interdum eget urna eu vehicula. Vestibulum.'),
(4,2,'Maecenas interdum eget urna eu vehicula. Vestibulum.'),

(1,4,'Maecenas interdum eget urna eu vehicula. Vestibulum.'),
(4,4,'Maecenas interdum eget urna eu vehicula. Vestibulum.'),
(5,4,'Maecenas interdum eget urna eu vehicula. Vestibulum.');




