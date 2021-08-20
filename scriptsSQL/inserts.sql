
/*
* Inserts na tabela tb_user
*/

INSERT INTO `tb_user` (`first_name`, `last_name`, `email`, `username`, `pass`) VALUES
('Maria', 'teste', 'teste@teste.com', 'username_teste', '12356'),
('João', 'teste2', 'teste2@teste.com', 'username_teste2', '123456'),
('Luiz', 'teste3', 'teste3@teste.com', 'username_teste3', '123456'),
('Joana', 'teste4', 'teste4@teste.com', 'username_teste4', '123456'),
('Mario', 'teste5', 'teste5@teste.com', 'username_teste5', '123456');




/*
* Inserts na tabela tb_post
*/

INSERT INTO `tb_post` (`id_user`, `title`, `text`, `category`) VALUES
(1, 'Playlist pra viagens', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas interdum eget urna eu vehicula. Vestibulum.', 'Playlists'),
(2, 'Show raro Pink Floyd 1975', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas interdum eget urna eu vehicula. Vestibulum.', 'Shows'),
(3, 'A simbologia por traz de All Along the Watch Tower de Bob Dylan', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas interdum eget urna eu vehicula. Vestibulum.', 'Resenhas'),
(4, 'Roy Buchanan, o guitarrista que rejeitou os Stones', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas interdum eget urna eu vehicula. Vestibulum.', 'Curiosidades'),
(5, 'Hoje fazem 5 anos que o chorão arrebentou a cara do Marcelo Camelo', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas interdum eget urna eu vehicula. Vestibulum.', 'Curiosidades');



/*
* Inserts na tabela tb_comment
*/

INSERT INTO `tb_comment` (`id_user`, `id_post`, `text`) VALUES
(1,1,'Muito bom.'),
(2,1,'Legal.'),
(3,1,'Que doidera.'),
(4,1,'Isso é mentira!.'),
(5,1,'Não é mentira, eu averiguei.'),


(1,2,'Maecenas interdum eget urna eu vehicula. Vestibulum.'),
(2,2,'Maecenas interdum eget urna eu vehicula. Vestibulum.'),
(4,2,'Maecenas interdum eget urna eu vehicula. Vestibulum.'),

(1,4,'Maecenas interdum eget urna eu vehicula. Vestibulum.'),
(4,4,'Maecenas interdum eget urna eu vehicula. Vestibulum.'),
(5,4,'Maecenas interdum eget urna eu vehicula. Vestibulum.');


