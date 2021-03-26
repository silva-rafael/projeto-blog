-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           8.0.22 - MySQL Community Server - GPL
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Copiando dados para a tabela blog.posts: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` (`id_post`, `titulo`, `post`) VALUES
	(2, 'Porque nós o usamos?', 'É um fato conhecido de todos que um leitor se distrairá com o conteúdo de texto legível de uma página quando estiver examinando sua diagramação. A vantagem de usar Lorem Ipsum é que ele tem uma distribuição normal de letras, ao contrário de "Conteúdo aqui, conteúdo aqui", fazendo com que ele tenha uma aparência similar a de um texto legível. Muitos softwares de publicação e editores de páginas na internet agora usam Lorem Ipsum como texto-modelo padrão, e uma rápida busca por \'lorem ipsum\' mostra vários websites ainda em sua fase de construção. Várias versões novas surgiram ao longo dos anos, eventualmente por acidente, e às vezes de propósito (injetando humor, e coisas do gênero).'),
	(3, 'De onde ele vem?', 'Ao contrário do que se acredita, Lorem Ipsum não é simplesmente um texto randômico. Com mais de 2000 anos, suas raízes podem ser encontradas em uma obra de literatura latina clássica datada de 45 AC. Richard McClintock, um professor de latim do Hampden-Sydney College na Virginia, pesquisou uma das mais obscuras palavras em latim, consectetur, oriunda de uma passagem de Lorem Ipsum, e, procurando por entre citações da palavra na literatura clássica, descobriu a sua indubitável origem. Lorem Ipsum vem das seções 1.10.32 e 1.10.33 do "de Finibus Bonorum et Malorum" (Os Extremos do Bem e do Mal), de Cícero, escrito em 45 AC. Este livro é um tratado de teoria da ética muito popular na época da Renascença. A primeira linha de Lorem Ipsum, "Lorem Ipsum dolor sit amet..." vem de uma linha na seção 1.10.32.'),
	(5, '', ''),
	(7, 'meu primeiro post', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
	(8, 'Post Lorem', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Pharetra vel turpis nunc eget. Sem fringilla ut morbi tincidunt. Egestas dui id ornare arcu odio ut sem nulla. Quam pellentesque nec nam aliquam sem et tortor. Et tortor at risus viverra adipiscing at in tellus integer. Erat pellentesque adipiscing commodo elit at. Nec feugiat in fermentum posuere urna. Facilisi etiam dignissim diam quis enim lobortis scelerisque. Urna cursus eget nunc scelerisque viverra. Sollicitudin nibh sit amet commodo nulla facilisi nullam vehicula. Amet consectetur adipiscing elit ut aliquam purus sit. Nulla pellentesque dignissim enim sit. Porttitor leo a diam sollicitudin tempor id eu nisl. Lectus magna fringilla urna porttitor. Nulla malesuada pellentesque elit eget gravida cum sociis. Sagittis nisl rhoncus mattis rhoncus urna neque viverra justo nec.  Nunc lobortis mattis aliquam faucibus. Id porta nibh venenatis cras sed felis eget. Nulla facilisi cras fermentum odio eu feugiat pretium. Dolor purus non enim praesent elementum facilisis. Volutpat odio facilisis mauris sit amet massa. Sagittis id consectetur purus ut faucibus pulvinar elementum integer enim. Commodo elit at imperdiet dui accumsan sit. Sit amet cursus sit amet dictum sit amet justo donec. Etiam dignissim diam quis enim lobortis scelerisque fermentum dui. Dolor sit amet consectetur adipiscing. Risus ultricies tristique nulla aliquet enim tortor at auctor urna. Varius duis at consectetur lorem donec massa. Id donec ultrices tincidunt arcu non sodales neque. Eget felis eget nunc lobortis mattis aliquam faucibus purus in. Cursus eget nunc scelerisque viverra. Sodales neque sodales ut etiam sit amet nisl purus. Mi tempus imperdiet nulla malesuada pellentesque elit eget.  In hac habitasse platea dictumst vestibulum rhoncus est. Duis convallis convallis tellus id interdum velit laoreet id donec. Eget aliquet nibh praesent tristique magna sit amet purus gravida. Aliquam id diam maecenas ultricies mi eget mauris pharetra. ');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;

-- Copiando dados para a tabela blog.usuarios: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id_usuario`, `nome`, `email`, `senha`) VALUES
	(1, 'user', 'user@teste.com', '1a1dc91c907325c69271ddf0c944bc72');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
