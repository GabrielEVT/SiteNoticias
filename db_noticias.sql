CREATE DATABASE `db_noticias`;
CREATE TABLE `tbl_categoria` (
  `idcategoria` int(11) NOT NULL,
  `nomecategoria` varchar(35) NOT NULL
);

INSERT INTO `tbl_categoria` (`idcategoria`, `nomecategoria`) VALUES
(2, 'Entretenimento'),
(1, 'Esporte'),
(17, 'Futebol'),
(19, 'Lutas'),
(7, 'MÃºsica'),
(10, 'Teatro'),
(21, 'Tecnologias'),
(14, 'Telefone'),
(20, 'TelevisÃ£o'),
(8, 'TI'),
(16, 'TIS');

CREATE TABLE `tbl_noticia` (
  `idnoticia` int(11) NOT NULL,
  `titulonoticia` varchar(50) NOT NULL,
  `conteudonoticia` varchar(200) NOT NULL,
  `fk_categoria` int(11) NOT NULL,
  `imgnoticias` varchar(40) NOT NULL
);

INSERT INTO `tbl_noticia` (`idnoticia`, `titulonoticia`, `conteudonoticia`, `fk_categoria`, `imgnoticias`) VALUES
(1, 'Lorem Ipsum1', 'Proin quis venenatis ex. Phasellus justo quam, efficitur ultrices tincidunt et, bibendum sit amet dui. Morbi molestie neque laoreet luctus suscipit. Vivamus a risus interdum, consectetur est sit amet,', 1, 'img1.png'),
(2, 'TÃ­tulo demonstrando', 'Corpo demonstrando para o meu queridÃ­ssimo amigo Gabriel Moura.', 7, '246b87a5e890a7de8f2b6f273a370a7e.png'),
(3, 'TÃ­tulo pelo form', 'xorpo', 8, 'f75b01a37bb08ad4c4075cf1f8bac49c.png'),
(6304, 'Mais uma notÃ­cia', 'Esse Ã© o corpo da notÃ­cia, e Ã© aqui que deve ser redigido o texto dela.', 8, '6dbe730cdc33f55504d4dba5fdda56b7.png'),
(6305, 'TÃ­tulo pelo formulÃ¡rio', 'Corpo', 16, '48f40196aae810b38708beec5d2c9f9f.png'),
(6306, 'Corinthians x Palmeiras', '1 a 1', 1, '8283db157f9090841ec01f8c9e5b6bf5.png'),
(6307, '3816971', 'Luta', 19, '10a01367e3da4413898f3e2a62f32297.png'),
(6308, 'TÃ­tulo pelo form', 'Corpo', 19, 'db604358d4fd0fb865828ebb8291afdf.png'),
(6309, 'Teatro', 'Corpo da noticia, hahahahahaha.', 10, '8283db157f9090841ec01f8c9e5b6bf5.png');

ALTER TABLE `tbl_categoria`
  ADD PRIMARY KEY (`idcategoria`),
  ADD UNIQUE KEY `nomecategoria` (`nomecategoria`);

--
-- Indexes for table `tbl_noticia`
--
ALTER TABLE `tbl_noticia`
  ADD PRIMARY KEY (`idnoticia`),
  ADD KEY `fk_categoria` (`fk_categoria`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_categoria`
--
ALTER TABLE `tbl_categoria`
  MODIFY `idcategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `tbl_noticia`
--
ALTER TABLE `tbl_noticia`
  MODIFY `idnoticia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_noticia`
--
ALTER TABLE `tbl_noticia`
  ADD CONSTRAINT `tbl_noticia_ibfk_1` FOREIGN KEY (`fk_categoria`) REFERENCES `tbl_categoria` (`idcategoria`);

