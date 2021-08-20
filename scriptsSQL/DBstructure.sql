/*
 Cria o  Banco de dados: `tp_bd`
*/

CREATE DATABASE tp_bd CHARACTER SET utf8 COLLATE utf8_general_ci;
-- --------------------------------------------------------
--
-- Cria  tabela de Usuários
--
CREATE TABLE `tb_user` (
  `id` INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL,
  `first_name` VARCHAR(40) NOT NULL,
  `last_name` VARCHAR(40) NOT NULL,
  `email` VARCHAR(60) NOT NULL,
  `username` VARCHAR(30) NOT NULL,
  `pass` VARCHAR(255) NOT NULL
);

--
-- Cria  tabela de Posts
--
CREATE TABLE `tb_post` (
  `id` INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL,
  `id_user` INTEGER NOT NULL,
  `date` DATETIME DEFAULT CURRENT_TIMESTAMP,
  `title` VARCHAR(255) NOT NULL,
  `text` TEXT NOT NULL,
  `category` TEXT NOT NULL,

  FOREIGN KEY  (`id_user`) REFERENCES tb_user(`id`)
    ON DELETE CASCADE ON UPDATE NO ACTION
);

--
-- Cria  tabela de Comentários
--
CREATE TABLE `tb_comment` (
  `id` INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL,
  `id_user` INTEGER NOT NULL,
  `id_post` INTEGER NOT NULL,
  `date` DATETIME DEFAULT CURRENT_TIMESTAMP,
  `text` VARCHAR(255) NOT NULL,

  FOREIGN KEY  (`id_user`) REFERENCES tb_user(`id`)
    ON DELETE CASCADE ON UPDATE NO ACTION,
  FOREIGN KEY  (`id_post`) REFERENCES tb_post(`id`)
    ON DELETE CASCADE ON UPDATE NO ACTION
);

