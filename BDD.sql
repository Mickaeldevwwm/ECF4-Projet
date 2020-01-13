CREATE DATABASE IF NOT EXISTS `automobile` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `automobile`;

-- --------------------------------------------------------

--
-- Structure de la table `Constructeur`
--

CREATE TABLE `Constructeur` (
  `Constructeur_ID` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `Constructeur_TITRE` varchar(100) NOT NULL,
  `Constructeur_CONTENU` longtext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `Constructeur`
--

INSERT INTO `Constructeur` (`Constructeur_TITRE`, `Constructeur_CONTENU`) VALUES
('Bugatti', 'Difficile d’écrire sur cette marque française la plus renommée et la plus connue dans l’histoire de l’automobile. Ettore Bugatti fabrique sa première voiture en 1898. Il travaille pour de grandes marques comme DE DIETRICH, MATHIS, DEUTZ et PEUGEOT. En 1910, il décide de fabriquer ses propres véhicules et s’installe en ALSACE (Allemagne à cette époque). Ses automobiles seront le fleuron de la technologie de l’époque et, ont remporté de nombreux trophées. L’apogée de sa gloire apparaît en 1926 avec un véhicule d’exception qui restera à jamais ce que l’on faisait de mieux dans la démesure : plus de 3 tonnes. La ROYALE TYPE 41.Avec ses voitures, Bugatti engrangera plus de 2000 victoires en courses automobiles. Puis suivront des modèles de tourisme, et, plus fiables. Après plusieurs propriétaires, la marque sera reprise par VAG.'),
('Chenard_&_Walker', 'Chenard et Walcker est une marque d\'automobiles française créée par Ernest Chenard et Henry Walcker en 1899. Quatrième constructeur français en volume vers 1922 sous la direction de l\'ingénieur Lucien Chenard, il est le premier vainqueur de la première édition des 24 Heures du Mans en 1923 et collectionne les victoires en compétition automobile. Son succès commercial est assuré par ses luxueuses automobiles de sport et de tourisme. Outre sa gamme automobile, des camions sont produits à partir de 1931. La société est filialisée par la Société des usines Chausson en 1936 et la production automobile cesse en 1940. Après la Seconde Guerre mondiale, la société produira des camions et utilitaires commercialisés par la marque Peugeot jusqu\'en 1965.'),
('Delage', 'Louis Delage fonde sa marque en 1903 et se lance dans la fabrication de voiture de sport de luxe. La marque est à son apogée à la fin d es années 20 et au début des années 30. De nombreux carrossiers réputés utiliseront la base de ses chassis (Chaperon, Devillers, Pourtaut) pour réaliser de magnifiques modèles qui se distingueront dans de nombreux concours d’élégance jusqu’à la fin des années 30 ; malheureusement la crise de 1929 met en péril l’entreprise qui est reprise par son concurrent DELAGE qui survivra en cohabitation avec la marque.'),
('Delahaye', 'La marque est fondée en 1894 par Emile DELAHAYE : production concentrée à Paris dans le 13ème. Il se spécialisera dans les catégories supérieures et la fabrication d’utilitaires, en particulier de camions de pompiers. Secteur qui deviendra une spécialité de DELAHAYE. Les véhicules de cette marque remporteront de nombreux trophées, notamment la 135 ; rallye de Monte Carlo, Vingt Quatre Heures du Mans Etc.'),
('Facel_Vega', 'La société Facel est fondée le 20 décembre 1939 (trois mois après la déclaration de guerre) comme filiale, située à Dreux (d\'où son nom), de la société de sous-traitance aéronautique Bronzavia, qui travaille pour l\'aéronautique militaire. Deux administrateurs de Bronzavia sont désignés pour diriger cette nouvelle filiale : le général d\'aviation René Keller et l\'ingénieur ECL Marcel Koehler, nommés respectivement président (non exécutif) et directeur général (administrateur délégué)1. Ce dernier sera à l\'origine des gazogènes Facel produits sous l\'occupation. Par ailleurs Jean Daninos, directeur technique de Bronzavia, part aux États-Unis en 1941 poursuivre l\'effort de guerre auprès des Alliés au sein de la General Aircraft Equipment, en mettant à sa disposition les brevets de l\'entreprise française. Il revient en 1945 pour prendre la direction de Facel, qu\'il fusionne avec la société Métallon. Dès son arrivée, il oriente Facel-Métallon vers la sous-traitance de carrosseries de série ou spéciales pour le compte de grandes marques comme Simca, Ford SAF, Panhard puis Delahaye.On doit également à son initiative la réalisation de douze Bentley Cresta en collaboration avec Pininfarina qui préfigurent le modèle Continental. En 1951, Jean Daninos dessina et construisit un unique coupé 2/3 places, tant pour son usage personnel que pour montrer le savoir-faire de Facel-Métallon, qu\'il baptisa Bentley Cresta II. Le concept de son originale face avant sera repris pour les Véga et Facel Véga.'),
('Renault', 'La marque est créée par Louis RENAULT avec ses deux frères Marcel et Fernand. L’entreprise RENAULT frères au 10 Avenue du Cours à BILLANCOURT. En 1900 Marcel et Louis utilisent leur passion commune : la course automobile. En 1901, Marcel trouve la mort dans la course Paris-Bordeaux.Pendant la guerre de 14- 18 les voitures Renault s’illustrent glorieusement avec les TAXIS de la MARNE en permettant l’arrivée des renforts sur le front (6000 hommes).En 1922 l’entreprise familiale devient Société Anonyme des Usines Renault. (RNUR) . C’est déjà à cette époque un vaste empire industriel produisant de la populaire 6cv à la luxueuse 40cv. La gamme est très diversifiée par contre la technique reste très conservatrice. Pendant la guerre de 39- 45 les usines Renault seront utilisées par les Allemands. La guerre terminée, Louis Renault est accusé de collaboration et emprisonné à Fresnes où il meurt le 24 octobre 1945. Le 16 janvier 1945 par ordre du Général de Gaulle la maison Renault devient la Régie Nationale. La direction est confiée à Pierre Lefaucheux.La première Renault d’après guerre est la 4cv. Le succès est tellement rapide que la maison de Billancourt n’est pas en mesure de faire face aux commandes. La petite bombe de Billancourt remporte également de nombreux succès sportifs : course de côtes du mont Ventoux 1948 ; Rallye de Monte Carlo 1949 ; vingt quatre heures du Mans 1951 Etc., puis suivent la Dauphine, la Floride , la R8 etc.'),
('Gregoire_Asniere', 'Histoire Chronologique de l\'ancienne marque automobile " Gregoire - Asniere ", France 1945 - 1962.J.A. Grégoire fut, avant 1939, un des associés de la firme Tracta qui construisit les tractions avant et du groupe Amilcar en 1945, il fit paraître une conduite intérieure traction avant, 600 cm3, extrêmement petite et simple.En 1947, Grégoire lança une voiture de conception ambitieuse équipée d’un moteur Fiat 4,21 litres, 64 CV, refroidi par eau et d’une boîte 4 vitesses surmultipliées. Dans les premières années 50, ce modèle fut fabriqué en petit nombre par Hotchkiss.Au Salon de Paris en 1952, fut exposée la S.O.C.E.M.A.- Grégoire à turbocompresseur ayant un moteur Cématurbo à turbine à gaz de 100 CV, monté à l’avant, avec des roues arrière motrices, une boîte Cotal et un frein à transmission électromagnétique.Ce prototype ne fut pas fabriqué et son inventeur, en 1956, revint à sa conception de 1947 en produisant une 2,2 litres à compresseur, 130 CV, dérivée de la Hotchkiss-Grégoire.'),
('Hispano_Suiza', 'Hispano-Suiza (littéralement Hispano-Suisse) était une marque espagnole d\'automobiles et d\'équipement aéronautique fondée à Barcelone en 1904 par l\'ingénieur suisse Marc Birkigt et les entrepreneurs espagnols Damià Mateu i Bisa et Francisco Seix Zaya. Elle est réputée pour avoir produit des voitures de luxe pendant la guerre civile espagnole, pour ses moteurs d\'avion qui ont équipé notamment les SPAD durant la Première Guerre mondiale, ainsi que la plupart des avions de chasse jusqu\'à la Seconde Guerre mondiale, et pour ses canons équipant la majorité des avions britanniques. La société mère espagnole intégra ENASA après la guerre d\'Espagne. La marque « La Hispano Suiza fábrica de automóviles, S.A. » est propriété du Grup Perelada1. Sa filiale française, constituée en 1923 avec le nom « Société Française Hispano Suiza, S.A. », puis renommée Safran Transmission Systems en 2016, est aujourd’hui un équipementier aéronautique intégré au groupe Safran.'),
('Hotchkiss', 'Hotchkiss commence son activité automobile en produisant des pièces pour PANHARD ET LEVASSEUR puis de DE DION BOUTON puis envisage sa propre fabrication orientée plus particulièrement vers la compétition. Les débuts s’avèrent décevants et, la compétition est abandonnée en 1906. Après la guerre de 1914, la production redémarre à l’usine de St DENIS. Afin de se diversifier Hotchkiss fournit des moteurs de camion pour LAFFY puis se lance dans la fabrication de ses propres camions. Un accord est passé avec DELAHAYE pour la fabrication d’utilitaires et plus particulièrement de construction des JEEPS pour l’armée jusqu’en 1953.'),
('Rochet_Schneider', 'Rochet-Schneider est un constructeur automobile lyonnais, qui officie dans la première moitié du xxe siècle, puis fusionne avec la firme Berliet. Les usines se situent à Lyon dans le 3e arrondissement, rues Paul-Bert et Feuillat 1. La firme est fondée par Édouard Rochet et Théodore Schneider2 en 1889 à Lyon. Elle se spécialise à partir de 1899, dans les voitures à moteur à pétrole. Elle construit également des véhicules utilitaires, ce qui lui vaut une commande de 1 500 camions durant la guerre de 14-18 pour l\'armée. La firme construira également des véhicules ferroviaires. En 1959, la production est arrêtée et la firme est rachetée par Berliet 1.'),
('Talbot', 'Talbot était un constructeur automobile français d\'origine anglaise. La branche française, devenue indépendante grâce à Anthony Lago, fut vendue à Simca en 1958. Rachetée par Peugeot à Chrysler Europe en 1978, la marque appartient depuis au Groupe PSA.'),
('Voisin', 'Avions Voisin est une marque française d\'automobiles dérivant directement de la société d\'aviation créée par Charles et Gabriel Voisin. En 1945, elle disparut à la suite de la nationalisation des entreprises liées au secteur aéronautique et fut absorbée au sein de la Snecma.');

-- --------------------------------------------------------

--
-- Structure de la table `Modele`
--

CREATE TABLE `Modele` (
  `Modele_ID` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `Modele_DATE` int(4) NOT NULL,
  `Modele_Titre` varchar(100) NOT NULL,
  `Modele_AUTEUR_ID` int(11) NOT NULL
  ) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `Modele`
--

INSERT INTO `Modele` (`Modele_AUTEUR_ID`, `Modele_Titre`, `Modele_DATE`) VALUES
('1', 'B73', '1947'),
('1', 'Type28', '1922'),
('1', 'B35A', '1928'),
('1', 'B41', '1929'),
('1', 'B41', '1930'),
('1', 'B41', '1936'),
('1', 'B43', '1929'),
('1', 'B50', '1936'),
('1', 'B57', '1936'),
('1', 'B57', '1937'),
('3', 'D6_60', '1936'),
('3', 'D8_100', '1936'),
('3', 'D8_120', '1936'),
('3', 'D8', '1937'),
('3', 'D660', '1934'),
('3', 'DI12', '1939'),
('3', 'DSD6', '1930'),
('3', 'DSD8', '1930'),
('3', 'HS', '1938'),
('4', '175', '1947'),
('4', '175S', '1954'),
('4', '235', '1951'),
('4', '135MS', '1938'),
('2', 'aigle22', '1939'),
('8', 'H6B','1932'),
('8', 'J12','1932'),
('8', 'K6','1937'),
('9', 'Anjou','1950'),
('9', 'Antheor','1951'),
('9', 'Gregoire','1953'),
('9', 'Monceau','1954'),
('6', 'Cabriolet','1957'),
('11', 'Baby','1951'),
('11', 'Lago','1951'),
('11', 'Saoutchic','1948'),
('11', 'Sport','1955'),
('11', 'Sport','1956'),
('12', 'C15','1930'),
('12', 'C22','1931'),
('12', 'C27','1934'),
('12', 'C28','1937');

ALTER TABLE `Modele`
ADD CONSTRAINT `fk_Modele_AUTEUR_ID`
FOREIGN KEY (`Modele_AUTEUR_ID`)
REFERENCES `Constructeur`(`Constructeur_ID`)
ON DELETE CASCADE ON UPDATE RESTRICT;
