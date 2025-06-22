-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Računalo: localhost
-- Vrijeme generiranja: Lip 22, 2025 u 11:34 PM
-- Verzija poslužitelja: 5.1.41
-- PHP verzija: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza podataka: `projekt`
--

-- --------------------------------------------------------

--
-- Tablična struktura za tablicu `korisnik`
--

CREATE TABLE IF NOT EXISTS `korisnik` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ime` varchar(64) CHARACTER SET utf8 NOT NULL,
  `prezime` varchar(64) CHARACTER SET utf8 NOT NULL,
  `username` varchar(32) CHARACTER SET utf8 NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 NOT NULL,
  `razina` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Izbacivanje podataka za tablicu `korisnik`
--

INSERT INTO `korisnik` (`id`, `ime`, `prezime`, `username`, `password`, `razina`) VALUES
(1, 'admin', 'admin', 'admin', 'admin', 1),
(2, 'Petar', 'Šimunović', 'pero', 'budala', 1),
(3, 'Haan', 'Haan', 'haan', 'rooster', 0),
(5, 'registrirani', 'korisnik', 'registriran', '1234', 0);

-- --------------------------------------------------------

--
-- Tablična struktura za tablicu `vijesti`
--

CREATE TABLE IF NOT EXISTS `vijesti` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `datum` varchar(32) CHARACTER SET utf8 NOT NULL,
  `naslov` varchar(64) CHARACTER SET latin2 COLLATE latin2_croatian_ci NOT NULL,
  `sazetak` text CHARACTER SET latin2 COLLATE latin2_croatian_ci NOT NULL,
  `tekst` text CHARACTER SET latin2 COLLATE latin2_croatian_ci NOT NULL,
  `slika` varchar(64) CHARACTER SET latin2 COLLATE latin2_croatian_ci NOT NULL,
  `kategorija` varchar(64) CHARACTER SET latin2 COLLATE latin2_croatian_ci NOT NULL,
  `arhiva` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Izbacivanje podataka za tablicu `vijesti`
--

INSERT INTO `vijesti` (`id`, `datum`, `naslov`, `sazetak`, `tekst`, `slika`, `kategorija`, `arhiva`) VALUES
(1, '6.6.2025.', 'Norway crushes Italy and sends warning', 'Italy''s World Cup qualification campaign has barely begun and already the country is worried about the shocking possibility of failing to reach the final tournament for a third consecutive time after a humiliating defeat by Norway.', 'Norway roared into a 3-0 lead in the first half but this time there was no Italian fightback in a goalless second half.<br>\r\n<br>\r\n"Enough!" screamed the Gazzetta dello Sport front page on Saturday, after Italy suffered their third loss in a four-game winless run, with the newspaper adding that for Italy the "World Cup is already at risk".<br>\r\n<br>\r\nNext year''s World Cup takes place in the United States, Canada and Mexico but in the two decades since Italy won the tournament for the fourth time, they have struggled to perform or, more recently, to even get there.<br>\r\n<br>\r\nBerlin 2006 seems a lifetime ago now, with Zinedine Zidane sent off for his head butt to Marco Materazzi''s chest and Italy lifting the trophy after a penalty shootout win over France.<br>\r\nThe next two World Cups saw Italy exit at the group stage, and while they triumphed at Euro 2020, on either side of that success they missed out on the World Cup after playoff defeats to Sweden and North Macedonia.<br>\r\n<br>\r\nWith Italy now playing catch-up and only the group winners qualifying automatically, La Repubblica''s front-page headline "Azzurri humiliated in Oslo, the playoff nightmare returns" hints at the frightening possibilities ahead.<br>\r\n<br>\r\nItaly''s loss came less than a week after Inter Milan''s 5-0 mauling at the hands of Paris St Germain in the Champions League final and on both occasions the tired-looking losers were outclassed by a hungrier, more creative side.<br>\r\n<br>\r\nItaly manager Luciano Spalletti was spared following last year''s dismal Euros but is now under real pressure and nothing but a convincing win at home to Moldova on Monday will do, with media and fans increasingly calling for a change of leadership.<br>', '<img src="images/seniori1.JPG" alt="" >', 'Seniori', 0),
(2, '6.6.2025.', 'North Macedonia holds Belgium to draw', 'North Macedonia equalised four minutes from time to hold Belgium to a 1-1 draw in their World Cup qualifying tie on Friday and keep up their unbeaten start to their Group J campaign.', 'Ezgjan Alioski scored a superb goal as he latched onto a cross from Darko Churlinov that floated over his head before he met it with perfect precision to volley home. <br>\r\n<br>North Macedonia have five points, with one win and two draws from their opening three games, while Wales took over the lead in the standings after they beat Liechtenstein 3-0 at home on Friday to move to seven points.<br>\r\n<br>\r\nDe Cupyer bundled the ball into the net in the 28th minute after Romelu Lukaku''s initial effort had been blocked by the heels of a defender.<br>\r\n<br>\r\nNorth Macedonia had a chance one minute earlier to open the scoring as Eljif Elmas turned into space in the penalty area and struck the ball against the far post.\r\nThe rebound fell for Alioski with an open goal in front of him, but he hit the other post in a major missed opportunity.<br>\r\n<br>\r\nElmas had the ball in the Belgian net two minutes into the second half but his shot took a slight deflection off teammate Bojan Ilievski, who was in an offside position and VAR chalked off the potential.\r\nBut the home side finally got rewards for their efforts with Alioski''s goal keeping alive their hopes.', '<img src="images/seniori2.jpg" alt="" >', 'Seniori', 0),
(3, '5.6.2025.', 'Spain qualifies for UNL final in thriller', 'Spain''s teenage sensation Lamine Yamal inspired his country to a thrilling 5-4 win over France on Thursday to send the holders through to their third successive Nations League final where they will face Iberian neighbours Portugal.', 'The European champions dazzled in the first half of the semifinal at the MHP Arena in Stuttgart, Germany, and raced into a 2-0 lead with fine goals by Nico Williams and Mikel Merino inside 25 minutes.<br>\r\n<br>\r\nSpain''s 17-year-old starlet Yamal then got in on the act to coolly add a third from the penalty spot nine minutes into the second half before his Barcelona teammate Pedri clipped a sublime fourth into the net less than a minute later.<br>\r\n<br>\r\nThursday''s game had been billed as a contest between young stars -- and Ballon d''Or contenders -- but it was clear that Paris Saint-Germain''s Champions League win in Munich on Saturday had added more weight to French legs with PSG stars Desire Doue and Ousmane Dembele disappointing.<br>\r\n<br>\r\nThe goals continued to flow as France striker Kylian Mbappe also slotted home from the penalty spot near the hour mark before Yamal added Spain''s fifth after 67 minutes to cap an exhilarating individual performance.<br>\r\n<br>\r\nFrance then mounted an extraordinary comeback as a stunning strike from Rayan Cherki, Dani Vivian''s own goal and a Randal Kolo Muani finish caused Spain some late jitters but they held on to book a clash with their Portuguese rivals on Sunday.<br>\r\n<br>\r\n"I always say it to my mother, I try to give it all," Yamal told Teledeporte. "It is what motivates me to play football, why I wake up in the mornings.<br>\r\n<br>\r\n"France have world class players. The scoreline after 60 minutes was very big, but they have players who make you suffer.<br>\r\n<br>\r\n"We [Spain and Portugal] are two very good teams with world-class players. The best will win. I hope to bring the cup to Spain."', '<img src="images/seniori3.jpg" alt="" >', 'Seniori', 0),
(4, '19.11.2024.', 'Croatia penalised by Georgia', 'Croatia U21s were defeated by Georgia on penalties following a devastating miss by Juraj Badelj.', 'Croatia''s U-21 national team will not be going to next year''s European Championship. Ivica Olic''s team was eliminated on penalties by Georgia after drawing 3:3 on aggregate in two games. Croatia won 3:2 in regular time at Rujevica. Two goals were scored by Dion Drena Beljo, and one by Marin Soticek. Luka Gagnidze and Nodar Lominadze scored for Georgia.<br>\r\n<br>\r\nCroatia started the game better and took an early lead, with Dion Drena Beljo scoring for 1:0 in the 11th minute. Luka Gagnidze played in his own half and Ante Crnac stole the ball from him. He passed to Beljo in a clear situation and the Croatian striker scored for the home team''s early lead.<br>\r\n<br>\r\nThe Georgians then equalized from Luka Gagnidze in the 28th minute. He was setting up for a long time at a distance of about 20 meters. The Croatian players did not close his left foot well, so he tried and scored a great goal.<br>\r\n<br>\r\nCroatia played very well in the second half and the reward came in the 62nd minute, when Franjo Ivanovic''s shot was blocked by Otar Mamageishvili in the penalty area with his hand. Dion Drena Beljo was a sure-fire performer from the penalty spot.<br>\r\n<br>\r\nCroatia easily conceded a goal in the 78th minute. The scorer was Nodar Lominadze. Irakli Azarov passed him from a free kick when all the Croatian players were expecting a cross. Lominadze scored into the far corner of Kolic''s goal.<br>\r\n<br>\r\nHowever, Croatia scored again by the end and thus remained in the game for the European Championship. Marin Soticek scored in the 92nd minute, after coming off the bench. Beljo dropped a high ball in the midst of the general onslaught of Croatia. It reached Soticek, who received it, turned and scored to the delight of the Rijeka stands.<br>\r\n<br>\r\nThere were no goals in extra time, so it went to penalties. Franko Kolic saved the Georgians'' first penalty kick and it seemed that Croatia would win the fifth set. Veldin Hodza had a chance to score for the winner, but his shot was brilliantly saved by goalkeeper Luka Kharatishvili. In the subsequent shootout, the Georgian goalkeeper also saved a shot by Juraj Badelj, while the Georgian players were precise.', '<img src="images/juniori1.jpg" alt="" >', 'Juniori', 0),
(5, '15.11.2024.', 'Belgium U21 defeated by Czech Republic', 'The European Championship ticket is slipping away for the Red Devils U21. After a 0-2 loss in the first leg, the team faces a daunting challenge in Hradec Králové next Tuesday. It will be all or nothing for a chance to go to Slovakia next year.', 'Plenty of goodwill and dominance, but little threat on goal.<br>\r\n<br>\r\nThis sums up the first half for the young Devils well. Among others, Delorge, Keita, and Stroeykens formed the engine of the Belgian side in a dominant first half. Lucas Stassin had the first good chance through Romeo Vermant, but his shot went wide.\r\n<br>\r\n<br>\r\nCzech Republic had no chances, yet still took the lead. Lammens kicked the ball too low, and via Karabec''s raised foot, it ended up in the Belgian goal: 0-1. A cold shock that Belgium couldn''t recover from before halftime.<br>\r\n<br>\r\nAfter the break, we saw a slightly more balanced game with chances on both sides. Still, the young Czech Republic team was the first to test the waters with a shot that hit the post. Red Devils U21 responded again through Lucas Stassin around the hour mark. He slotted the ball in after a good through pass from Matteo Dams, but Stassin was flagged for a narrow offside.<br>\r\n<br>\r\nThen the temperature in the shower dropped even further.\r\nCzech Republic scored again out of nowhere after Belgium had piled on the pressure. From a corner, Fila, with his first touch, beat Senne Lammens: 0-2.<br>\r\n<br>\r\nThe return leg is scheduled for next Tuesday at 5:30 pm in Hradec Kralove. Belgium needs to score twice to at least force extra time, but it will be no walk in the park.', '<img src="images/juniori2.jpg" alt="" >', 'Juniori', 0),
(6, '15.10.2024.', 'England smashes Azerbaijan to confirm first place', 'England''s under-21s secured top spot in their 2025 UEFA European Under-21 Championship qualifying group with a comprehensive 7-0 victory over Azerbaijan at Ashton Gate.', 'The Young Lions were in dominant form in Bristol, with six different players getting on the scoresheet alongside an own goal to cap a fine night for Ben Futcher''s players.<br>\r\n<br>\r\nHeaders from defenders Charlie Cresswell and Callum Doyle put England in control at the break and they kicked on after half time, with James McAtee, Elliot Anderson, Dane Scarlett and Omari Hutchinson all getting on the scoresheet.<br>\r\n<br>\r\nIt took under three minutes for England to take the lead, as Creswell headed home Jamie Gittens'' cross from close range after a well-worked corner routine by the Young Lions.<br>\r\n<br>\r\nThe lead was almost doubled ten minutes later after some neat interplay saw Morgan Rogers release McAtee but he could only slide his effort the wrong side of the post.<br>\r\n<br>\r\nRogers had his own sight of goal soon after, latching onto a raking pass from Jarell Quansah but the forward could not quite keep his volleyed effort down.<br>\r\n<br>\r\nRogers then turned provider again as the Young Lions kept up their relentless pressure, this time finding Samuel Iling-Junior on the edge of the box but his shot was smartly saved by Khayal Farzullayev.<br><br>\r\n\r\nThat pressure finally delivered a second goal, as Doyle headed home former Bristol City midfielder Alex Scott?s free kick at the back post.<br><br>\r\n\r\nIling-Junior then forced a goal-saving block from Suleyman Damadayev after the ball fell kindly to the winger in the box after yet more England pressure.\r\n<br><br>\r\nAzerbaijan had their best chance of the first period on the stroke of half time but James Beadle produced a strong save to deny Nariman Akhundzade and ensure the Young Lions went into the break with a 2-0 advantage.<br><br>\r\n\r\nEngland started the second half brightly and almost added to their lead inside the opening two minutes as McAtee won the ball high up the pitch and fed Rogers but his shot was smothered by Farzullayev.\r\n<br><br>\r\nThe third came ten minutes after half time, as McAtee grabbed his fifth goal of the qualifying campaign and third of the international break by heading home Iling-Junior''s cross.\r\n<br><br>\r\nGittens came agonisingly close to adding a fourth five minutes later, as he displayed fabulous footwork to find space and curl a shot that crashed off the crossbar and down but crucially not over the line.', '<img src="images/juniori3.jpg" alt="" >', 'Juniori', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
