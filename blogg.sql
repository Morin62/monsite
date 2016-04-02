-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 01 Avril 2016 à 21:23
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `blogg`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id_article` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(150) NOT NULL,
  `texte` text NOT NULL,
  `date` date NOT NULL,
  `pseudo` varchar(50) NOT NULL,
  `publie` tinyint(4) NOT NULL,
  `votes` int(11) NOT NULL,
  `dernier_votant` varchar(50) NOT NULL,
  PRIMARY KEY (`id_article`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=66 ;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`id_article`, `titre`, `texte`, `date`, `pseudo`, `publie`, `votes`, `dernier_votant`) VALUES
(2, 'Cras finibus quis eros eu tristique', '  Quisque varius nulla sit amet diam semper, non auctor orci porttitor. Etiam est libero, fringilla sed justo non, malesuada vestibulum mi. Integer sed urna ac nisl egestas efficitur. Pellentesque vulputate massa ac dui suscipit, non tempus tellus dictum. Proin vehicula pharetra justo, ac fringilla purus maximus quis. Proin in urna nec ligula blandit bibendum sit amet ut mauris. Cras finibus quis eros eu tristique. Vestibulum vel dui ut magna maximus molestie.', '2015-09-15', 'Soho', 1, 1, 'Soho'),
(39, 'Maecenas vestibulum tortor,id justo scelerisque', 'Maecenas vestibulum tortor ,id justo scelerisque ac placerat enim bibendum. Proin mollis ex ac faucibus molestie. Vestibulum efficitur tristique nibh, et gravida risus lobortis vehicula. In hac habitasse platea dictumst. Duis dapibus, metus vitae iaculis sagittis, massa elit rutrum ligula, sit amet posuere ex urna id odio. Pellentesque commodo facilisis elit, et fringilla orci placerat id. Donec lectus massa, fermentum ac dignissim non, suscipit et ligula. Etiam hendrerit nulla risus. Donec vulputate maximus ex, in bibendum mi varius at. Praesent vel finibus felis. ', '2015-09-29', 'Lux', 1, 0, ''),
(46, 'Eius populus ab incunabulis primis ', 'Eius populus ab incunabulis primis ad usque pueritiae tempus extremum, quod annis circumcluditur fere trecentis, circummurana pertulit bella, deinde aetatem ingressus adultam post multiplices bellorum aerumnas Alpes transcendit et fretum, in iuvenem erectus et virum ex omni plaga quam orbis ambit inmensus, reportavit laureas et triumphos, iamque vergens in senium et nomine solo aliquotiens vincens ad tranquilliora vitae discessit.', '2015-10-14', 'Had', 1, 0, ''),
(47, 'Excogitatum est super his, ut homines quidam ignoti', 'Excogitatum est super his, ut homines quidam ignoti, vilitate ipsa parum cavendi ad colligendos rumores per Antiochiae latera cuncta destinarentur relaturi quae audirent. hi peragranter et dissimulanter honoratorum circulis adsistendo pervadendoque divites domus egentium habitu quicquid noscere poterant vel audire latenter intromissi per posticas in regiam nuntiabant, id observantes conspiratione concordi, ut fingerent quaedam et cognita duplicarent in peius, laudes vero supprimerent Caesaris, quas invitis conpluribus formido malorum inpendentium exprimebat.', '2015-10-14', 'Had', 1, 0, ''),
(48, 'Omano est, qui Ennii Medeam aut Antiopam Pacuvii spernat aut reiciat, quod se isdem Euripidis ', 'Lis igitur est difficilius satis facere, qui se Latina scripta dicunt contemnere. in quibus hoc primum est in quo admirer, cur in gravissimis rebus non delectet eos sermo patrius, cum idem fabellas Latinas ad verbum e Graecis expressas non inviti legant. quis enim tam inimicus paene nomini Romano est, qui Ennii Medeam aut Antiopam Pacuvii spernat aut reiciat, quod se isdem Euripidis fabulis delectari dicat, Latinas litteras oderit?', '2015-10-14', 'Timy', 1, 0, ''),
(49, ' Hac ex causa conlaticia stipe ', ' Hac ex causa conlaticia stipe Valerius humatur ille Publicola et subsidiis amicorum mariti inops cum liberis uxor alitur Reguli et dotatur ex aerario filia Scipionis, cum nobilitas florem adultae virginis diuturnum absentia pauperis erubesceret patris.', '2015-10-14', 'Soho', 1, 0, ''),
(50, 'Sed maximum est in amicitia parem', 'Sed maximum est in amicitia parem esse inferiori. Saepe enim excellentiae quaedam sunt, qualis erat Scipionis in nostro, ut ita dicam, grege. Numquam se ille Philo, numquam Rupilio, numquam Mummio anteposuit, numquam inferioris ordinis amicis, Q. vero Maximum fratrem, egregium virum omnino, sibi nequaquam parem, quod is anteibat aetate, tamquam superiorem colebat suosque omnes per se posse esse ampliores volebat.', '2015-10-14', 'Batna', 1, 0, ''),
(51, 'Tractibus navigerum nusquam visitur flumen', 'In his tractibus navigerum nusquam visitur flumen sed in locis plurimis aquae suapte natura calentes emergunt ad usus aptae multiplicium medelarum. verum has quoque regiones pari sorte Pompeius Iudaeis domitis et Hierosolymis captis in provinciae speciem delata iuris dictione formavit.', '2015-10-14', 'Paulo', 1, 0, ''),
(52, 'Intellectum est enim mihi quidem in multis', 'Intellectum est enim mihi quidem in multis, et maxime in me ipso, sed paulo ante in omnibus, cum M. Marcellum senatui reique publicae concessisti, commemoratis praesertim offensionibus, te auctoritatem huius ordinis dignitatemque rei publicae tuis vel doloribus vel suspicionibus anteferre. Ille quidem fructum omnis ante actae vitae hodierno die maximum cepit, cum summo consensu senatus, tum iudicio tuo gravissimo et maximo. Ex quo profecto intellegis quanta in dato beneficio sit laus, cum in accepto sit tanta gloria.', '2015-10-14', 'Archimède', 1, 0, ''),
(53, 'Cyprum itidem insulam procul a continenti discretam', 'Cyprum itidem insulam procul a continenti discretam et portuosam inter municipia crebra urbes duae faciunt claram Salamis et Paphus, altera Iovis delubris altera Veneris templo insignis. tanta autem tamque multiplici fertilitate abundat rerum omnium eadem Cyprus ut nullius externi indigens adminiculi indigenis viribus a fundamento ipso carinae ad supremos usque carbasos aedificet onerariam navem omnibusque armamentis instructam mari committat.', '2015-10-14', 'Had', 1, 0, ''),
(54, 'Un soir de cendre et d''ombre', 'Je n’ai pas faim, je n’ai pas sommeil, je n’ai pas envie. Je suis un désert de soif ; je crains le cœur d’amertume qui apparaitra, lorsque toute la gangue des petits espoirs se sera brisée. Malgré tout, quelque graisse grise logeant toujours en mon crâne et me faisant penser, je me saisis de moi-même, et d’un récit de peau, je fais un récit de possible : je métaphorise, et mon esprit respire… Il danse, sur la corde aux mille comparaisons, cette pavane de plainte pour le cœur inquiet, suspendu au croc de quelque joie fugace.', '2015-10-15', 'WinnyCat', 1, 1, 'Winnycat'),
(55, 'Orientis vero limes in longum protentus et rectum ', 'Orientis vero limes in longum protentus et rectum ab Euphratis fluminis ripis ad usque supercilia porrigitur Nili, laeva Saracenis conterminans gentibus, dextra pelagi fragoribus patens, quam plagam Nicator Seleucus occupatam auxit magnum in modum, cum post Alexandri Macedonis obitum successorio iure teneret regna Persidis, efficaciae inpetrabilis rex, ut indicat cognomentum.', '2015-10-17', 'Ork', 1, 0, ''),
(56, 'Rufinus ea tempestate', ' Unde Rufinus ea tempestate praefectus praetorio ad discrimen trusus est ultimum. ire enim ipse compellebatur ad militem, quem exagitabat inopia simul et feritas, et alioqui coalito more in ordinarias dignitates asperum semper et saevum, ut satisfaceret atque monstraret, quam ob causam annonae convectio sit impedita.', '2015-10-17', 'WinnyCat', 1, 1, 'Winnycat'),
(57, 'Le fini ne saisira jamais l''infini...', '  Chaque fait psychologique est un phénomène vivant pris indissolublement dans la continuité du processus vital, de sorte qu''il est toujours un devenu et un devenir, un devenir qui va être lui-même créateur. Tel Janus aux deux visages, le moment psychologique regarde en arrière et en avant en se réalisant, il prépare ce qui sera...\r\nL''âme renferme autant d''énigmes que le monde avec ses systèmes galactiques, devant le sublime spectacle desquels seul un esprit sans imagination peut ne pas s''avouer son insuffisance. Devant cette extrême incertitude de la pensée humaine, les prétentions au savoir sont non seulement ridicules, mais aussi tristement dépourvues d''esprit...\r\nL''âme, reflet du monde et de l''homme, est d''une telle diversité, d''une telle complexité qu''on peut la considérer et la juger sous des angles infiniment variés. Il en est de la psyché exactement comme du monde : une systémati­que du monde reste en dehors du pouvoir humain [...] Le fini ne saisira jamais l''infini...\r\n\r\nC.G. JUNG - L''âme et la vie', '2015-11-07', 'myosotis', 1, 0, ''),
(58, 'Maecenas vestibulum tortor id justo scelerisque', 'Maecenas vestibulum tortor id justo scelerisque, ac placerat enim bibendum. Proin mollis ex ac faucibus molestie. Vestibulum efficitur tristique nibh, et gravida risus lobortis vehicula. In hac habitasse platea dictumst. Duis dapibus, metus vitae iaculis sagittis, massa elit rutrum ligula, sit amet posuere ex urna id odio. Pellentesque commodo facilisis elit, et fringilla orci placerat id. Donec lectus massa, fermentum ac dignissim non, suscipit et ligula. Etiam hendrerit nulla risus. Donec vulputate maximus ex, in bibendum mi varius at. Praesent vel finibus felis.', '2015-11-08', 'Lux', 1, 0, ''),
(59, 'Siquis enim militarium vel honoratorum aut nobilis', 'Siquis enim militarium vel honoratorum aut nobilis inter suos rumore tenus esset insimulatus fovisse partes hostiles, iniecto onere catenarum in modum beluae trahebatur et inimico urgente vel nullo, quasi sufficiente hoc solo, quod nominatus esset aut delatus aut postulatus, capite vel multatione bonorum aut insulari solitudine damnabatur.', '2015-11-08', 'Lux', 1, 0, ''),
(60, 'Le pont', '         Il a posé le livre, il est sorti à son tour, le froid l''accueille, et le familier silence, il se tait infiniment, retenant les mots de l''amour pour aimer, son pas, son souffle, s''unissent à Son pas, à Son souffle, il s''en nourrit. Quelquefois, il est seul dans la nuit alors il marche, il caresse du bout du coeur les pierres et les arbres, il y touche l''empreinte de Sa vie, il confie les aimés, tous, les plus petits, les plus misérables de tous les règnes, de toutes les espèces, jusqu''aux plus grands en taille et en puissance, jusqu''aux hommes enfin, chacun d''entre eux, avec beaucoup de tendresse, jusqu''à toi, précisément, et il t''offre avec eux à Son amour. Ce soir, il marche avec Lui et il se tait. Il est arrivé près de l''arbre, il s''est arrêté un instant pour le saluer comme chaque soir, il te parlera certainement de cet arbre-là parce qu''il lui est un ami très cher, et tout à coup il dit : je ne comprends pas, et les images, le sang, le feu mauvais, la souffrance que tu as épanchés vers lui, il les Lui présente, il dit que tu as raison peut-être, que cette vie qu''il ose, qu''il expérimente chaque jour, est improbable, irrecevable ici, par toi ou par d''autres. Comment prétendre à l''espérance, comment rappeler le jardin, l''amour premier, quand le monde est à feu et à sang et qu''à cet instant le feu et le sang le ravagent, il s''en est laissé saisir, il a mal, il reprend sa marche, il descend vers la vigne sous le ciel immobile, il dit : que fais-Tu ! ', '2015-11-13', 'Jimmy', 1, 0, ''),
(61, 'Fims initiatiques', '  Films souvent fantastiques dans lesquels le héros fait un parcours initiatique, une lutte entre le bien et le mal, la découverte des vraies valeur de la vie:\r\n* Matrix, film américain de Larry et Andy Wachowski (1999 à 2003): voyage initiatique, quête philosophique, remise en question, lutte entre le bien et le mal.\r\n* Star Wars, film américain George Lucas (1977 à 2005): voyage initiatique, évolution personnelle, lutte entre le bien et le mal, destinée, enseignements des anciens, énergie intérieure.\r\n* Le Seigneur des Anneaux, film américano-néo-zélandais de Peter Jackson (2001 à 2003): voyage initiatique, destinée, quête philosophique, lutte entre le bien et le mal.\r\n* Le Monde de Narnia, film américain de Andrew Adamson (2005 à ...): voyage initiatique, quête personnelle, lutte entre le bien et le mal.\r\n* Le Château Ambulant, film japonais de Hayao Miyazaki (2006): voyage initiatique, amour de la nature, pacifisme.\r\n* Le 5ème élément, film franco-américain de Luc Besson (1997): voyage initiatique, amour sauveur, lutte entre le bien et le mal.\r\n* Jonathan Livingston, le goéland, film américain de Hall Bartlett (1973): voyage initiatique, quête de soi, remise en question.\r\n\r\n4. Films qui traitent de paranormal (avec parfois trop d''imagination):\r\n* La Cité des Anges, film américain de Brad Silberling (1998): au-delà, anges, amour.\r\n* Sixième Sens, film américain de M. Night Shyamalan (2000): médiumnité, vie après la mort, esprits, immortalité de l''âme.\r\n* Les autres, film espagnol de Alejandro Amenábar (2001): vie après la mort, esprits, la désincarnation.\r\n* Always - Pour Toujours, film américain de Steven Spielberg (1990): au-delà, vie après la mort, anges, immortalité de l''âme.\r\n* Ghost, film américain de Jerry Zucker (1990): médiumnité, l''immortalité de l''âme, l''au-delà.\r\n* Au-delà de nos rêves, film américain de Vincent Ward (1998): destinée, au-delà, vie après la mort, immortalité de l''âme. ', '2015-11-28', 'Archimède', 1, 0, ''),
(62, 'Célébrer', '   Chacun de nous est finitude.\r\nL''infini est ce qui naît d''entre nous\r\nfait d''inattendus et d''inespérés.\r\nCélébrer l''au-delà du désir, l''au-delà de soi.\r\nSeule voie en vérité où nous pourrions encore\r\ntenir l''initiale promesse.\r\nCélébrer le fruit, plus que le fruit même\r\nmais la saveur infinie.\r\nCélébrer le mot, plus que le mot même\r\nmais l''infinie résonance.\r\nCélébrer l''aube des noms réinventés ;\r\nCélébrer le soir des regards croisés ;\r\nCélébrer la nuit au visage émacié ;\r\nDes mourants qui n''espèrent plus rien\r\nmais qui attendent tout de nous ;\r\nEn nous l''à-jamais-perdu\r\nQue nous tentons de retourner en offrande,\r\nSeule voie où la vie s''offrira sans fin,\r\npaumes ouvertes.  \r\n  \r\nFrançois Cheng                ', '2015-11-28', 'Archimède', 1, 0, ''),
(63, 'Europe centrale', 'L''Europe centrale est la région s''étendant au cœur du continent européen. C’est un espace dont les contours flous et variables ne coïncident pas toujours avec les frontières des pays concernés. D''après les définitions, variant tant selon les auteurs que les époques, cinq à vingt-et-un États actuels peuvent être considérés comme centreuropéens. Au-delà de considérations strictement géographiques, l''Europe centrale est un ensemble partageant une trajectoire historique commune, laquelle a façonné un héritage culturel et politique singulier. ', '2015-12-06', 'Elia', 1, 2, 'Elia'),
(64, 'Film Le prophète', 'Sur une île imaginaire, Almitra, petite fille muette depuis la mort de son père, espiègle et chapardeuse, vit seule avec sa mère qui fait des ménages pour vivre. Accompagnant sa mère un matin, elle fait la rencontre de Mustafa, prisonnier politique assigné à résidence (on notera l’écho particulier du thème en cette période de révolutions populaires arabes). \r\nMustapha est un poète, amoureux de la sagesse, un philosophe au sens plein…ses mots sont créateurs d’images fabuleuses qui vont fasciner la petite fille et combler sa parole perdue. Une belle histoire d’âme-itié démarre.', '2015-12-17', 'Had', 1, 2, 'Elia'),
(65, 'Les animaux nocturnes', 'La vie nocturne nécessite que les yeux de ces animaux soient suffisamment adaptés à l’obscurité. En fait, certains animaux ont une pupille ronde et large qui a le pouvoir de se dilater beaucoup. Cette adaptation physique permet à l''animal de capter le plus de lumière possible pendant la nuit.\r\n\r\nL’œil d’autres animaux auront des cônes leur permettant de bien distinguer les détails des objets autour d’eux, alors que des bâtonnets leur permettront de distinguer les nuances de noir et de gris. Plus la vision nocturne est développée, plus les bâtonnets auront une prédominance sur les cônes. C’est le cas des oiseaux de proie nocturnes.\r\n\r\nIl existe également des animaux qui ont développé l’écholocation pour « voir » dans la nuit. Il s’agit d’une technique utilisée par les chauves-souris qui consiste à pousser de petits cris aigus dont l''écho revient à l’animal quelques centièmes de seconde suite à sa rencontre avec un obstacle.', '2015-12-17', 'Soho', 1, 1, 'Elia');

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE IF NOT EXISTS `commentaires` (
  `idCom` int(11) NOT NULL AUTO_INCREMENT,
  `titreCom` varchar(255) NOT NULL,
  `texteCom` text NOT NULL,
  `dateCom` date NOT NULL,
  `pseudoCom` varchar(50) NOT NULL,
  `id_article` int(11) NOT NULL,
  PRIMARY KEY (`idCom`),
  KEY `id_article` (`id_article`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Contenu de la table `commentaires`
--

INSERT INTO `commentaires` (`idCom`, `titreCom`, `texteCom`, `dateCom`, `pseudoCom`, `id_article`) VALUES
(1, 'Populus', 'Incunabilis !\r\nJe dirai même plus : incunabilis', '2015-11-27', 'Soho', 46),
(2, 'Candide', 'Voltaire nous conseillait de cultiver notre jardin.', '2015-11-27', 'Archimède', 60),
(3, 'du bout du coeur', 'Caresser du bout du coeur les pierres et les arbres, une belle façon de se promener.', '2015-11-27', 'Lux', 60),
(4, 'planète', 'Une planète est un objet céleste orbitant autour du Soleil ou d''une autre étoile de l''Univers et possédant une masse suffisante pour que sa gravité la maintienne en équilibre hydrostatique, c''est-à-dire sous une forme presque sphérique. Certaines définitions étendent celle-ci aux objets libres de masse planétaire.', '2015-11-27', 'Paulo', 60),
(5, 'nobilis', ' Iniecto onere catenarum in modum beluae trahebatur', '2015-11-27', 'Had', 59),
(6, 'Gravida risus lobortis vehicula', ' Incontournable...', '2015-11-28', 'Soho', 58),
(7, 'verum', ' Ave verum', '2015-11-28', 'Soho', 51),
(9, 'Reflet du monde', ' Et pourtant en devenir.', '2015-11-28', 'Soho', 57),
(10, 'Ut sit amet', ' Cras blandit, arcu non rhoncus pulvinar, ipsum erat tempor tortor, sit amet vehicula ipsum mi eget tortor. Sed interdum at magna vitae pellentesque. Quisque sed finibus turpis. Nullam vel elit magna. Sed dictum id ante non eleifend. Nulla facilisi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin blandit urna sed libero accumsan egestas. Nullam lobortis massa id suscipit mattis. Sed ante libero, ornare non nibh quis, cursus aliquet neque. Nunc facilisis pharetra massa sed consequat. Phasellus eleifend tortor arcu, nec varius quam dictum et. Suspendisse non molestie nisl. Nam consequat risus eget ante blandit gravida. Donec sodales dolor iaculis elit pharetra sagittis. Ut sit amet quam nunc. ', '2015-11-28', 'Archimède', 51),
(11, 'un titre paradoxal', 'Nous rechignons à célébrer la finitude...', '2015-12-04', 'WinnyCat', 62),
(12, 'Amusant !', 'Quicquid noscere poterant vel audire latenter intromissi per posticas in regiam nuntiabant, id observantes conspiratione concordi, ut fingerent quaedam', '2015-12-04', 'Elia', 47),
(13, 'nota bene', ' La connaissance du latin est fortement recommandée pour la compréhension de cet article', '2015-12-04', 'Elia', 53),
(20, 'Bon appétit', 'Ac fringilla purus maximus quis', '2015-12-04', 'Elia', 2),
(35, '17', 'Etoile', '2015-12-06', 'Winnycat', 62),
(38, 'encore', 'Lis-tu, Annie ?', '2015-12-06', 'Elia', 63),
(40, 'Croatie', 'adhésion de la Croatie en 2013', '2015-12-06', 'Batna', 63),
(41, 'précédents', 'Bulgarie et Roumanie', '2015-12-06', 'Mony', 63),
(42, 'Lac et montagne', 'C''est une jolie photo, Paulo', '2015-12-06', 'Mony', 51),
(43, 'Une belle adaptation', 'Ce film évoque avec délicatesse le recueil de Khalil GIBRAN, avec de beaux graphisme et une musique envoûtante', '2015-12-17', 'Winnycat', 64);

-- --------------------------------------------------------

--
-- Structure de la table `newsletter`
--

CREATE TABLE IF NOT EXISTS `newsletter` (
  `id_news` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id_news`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `newsletter`
--

INSERT INTO `newsletter` (`id_news`, `email`) VALUES
(2, 'alise@free.fr'),
(3, 'bob@free.fr'),
(5, 'gtrouvet@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `mpasse` text NOT NULL,
  `pseudo` varchar(50) NOT NULL,
  `sid` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Contenu de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `nom`, `prenom`, `email`, `mpasse`, `pseudo`, `sid`) VALUES
(1, 'Dupont', 'Jean', 'j.dupont@free.fr', 'passe', 'Jimmy', 'db8324830bf8fb56c2336c1c9da8af55'),
(2, 'Hochon', 'Paul', 'paulhochon@yahoo.fr', 'passeph', 'Paulo', 'c9851e1d7e94a87d245ee62402297892'),
(3, 'Aurel', 'Lise', 'alise@orange.fr', 'passeal', 'Winnycat', 'b3a6c78e287cf6fd1225cf211572918f'),
(4, 'Roche', 'Jacques', 'jroche@hotmail.fr', '123456', 'Soho', '5303b41d834cab7aad6b9671e29e8189'),
(5, 'Hamel', 'Oscar', 'oscarhamel@yahoo.fr', 'Lutti', 'Batna', '717b3bbe6c2e6ec39e6eddd2c0636969'),
(6, 'Trouvet', 'Gerard', 'gtrouvet@free.fr', 'eureka', 'Archimède', '486e4d0683bd589b9dc11a1779e88c91'),
(7, 'Seramon', 'Daniel', 'dseramon@wanadoo.fr', 'serpollet', 'Timy', '051502d7d816c4225af37e0ce5740f4c'),
(8, 'Matheo', 'Pascal', 'pmatheo@sncf.fr', 'loco', 'Ork', '6f21461f37c7b7377bc5cdc253e9d76f'),
(11, 'Sebastien', 'Luc', 'lucs@yahoo.fr', 'biscuit', 'Lux', '71c57a33d6a59e9855638f691aade68a'),
(12, 'Einstein', 'Franck', 'Frankeinstein@netc.eu', 'bouh', 'myosotis', '0d64829d51278386d6676e02c95c56f9'),
(13, 'Tourel', 'Hadrien', 'htourel@orange.fr', 'silex', 'Had', '03b73878d20cc07f6ffd6331c89067ef'),
(14, 'Monin', 'Yves', 'ymonin@free.fr', 'toto', 'Mony', 'f6777bbbdb78f8df9783c31611ca9b74'),
(16, 'Sire', 'Constance', 'SireC@orange.fr', 'Mozart', 'Elia', '19322cd2757fc5754f1ac1c9fba4da35'),
(17, 'Blondel', 'Leo', 'kiss@gmail.com', 'paon1234', 'leoleba', 'ddc91693e919837f74184b411fc8d6f4');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
