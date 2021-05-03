SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `adminPseudo` varchar(255) NOT NULL,
  `adminPwd` varchar(255) NOT NULL,
  `adminTk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `admin` (`id`, `adminPseudo`, `adminPwd`, `adminTk`) VALUES
(1, 'llespinasse', '$2y$10$ilAXmosp9McEOKjNwICsuuxwuuI9d9zE0SoJvgF4wG7wGP/Yy5Koy', 'UaZ0iZoRdfra25zYP9Nl rWuCFkFg1nxdM4v73DLc Vlhm9HmaPoYc6nNZmI73 yFg338OB3m53gV9RMo1p 9Kr5jAOxsv30Ah8tgBs4 lKQDwuU1cQkjVbQytE8k UXgABPqbFvfq3PS3FZPR yOyRK08wFWuU3455Rexe 9RnvkdD3q5O2yw0p5nIt BzsaowqnmS8ivmlSVIwd');

CREATE TABLE `challenges` (
  `id` int(11) NOT NULL,
  `challengeTeam` int(11) NOT NULL,
  `uniqueChallenge` tinyint(1) NOT NULL DEFAULT '0',
  `challengeDone` tinyint(1) NOT NULL DEFAULT '0',
  `challengePoint` int(11) NOT NULL DEFAULT '300',
  `challengeTitle` varchar(255) NOT NULL,
  `challengeDesc` text NOT NULL,
  `challengeID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `challenges` (`id`, `challengeTeam`, `uniqueChallenge`, `challengeDone`, `challengePoint`, `challengeTitle`, `challengeDesc`, `challengeID`) VALUES
(1, 1, 0, 1, 300, 'Mon super défi', 'Description du défi', 1);

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `eventNotification` text NOT NULL,
  `eventTime` int(11) NOT NULL,
  `eventName` varchar(255) NOT NULL,
  `eventLocation` varchar(255) NOT NULL,
  `eventDesc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `events` (`id`, `eventNotification`, `eventTime`, `eventName`, `eventLocation`, `eventDesc`) VALUES
(1, 'notification', 1592848385, 'test', 'Lille', 'description');

CREATE TABLE `infos` (
  `id` int(11) NOT NULL,
  `infoLogo` varchar(255) NOT NULL,
  `infoDesc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `infos` (`id`, `infoLogo`, `infoDesc`) VALUES
(1, 'logo.png', 'test');

CREATE TABLE `managers` (
  `id` int(11) NOT NULL,
  `managerName` varchar(255) NOT NULL,
  `managerDesc` text NOT NULL,
  `managerImg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `managers` (`id`, `managerName`, `managerDesc`, `managerImg`) VALUES
(1, 'Louis L.', 'test description intégrant', 'louis.gif');

CREATE TABLE `sponsors` (
  `id` int(11) NOT NULL,
  `sponsorName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `sponsors` (`id`, `sponsorName`) VALUES
(1, 'sponsor 1'),
(2, 'sponsor 2');

CREATE TABLE `starget` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `team` varchar(255) NOT NULL,
  `reason` text NOT NULL,
  `path` varchar(255) NOT NULL,
  `scale` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `starget` (`id`, `nom`, `prenom`, `team`, `reason`, `path`, `scale`) VALUES
(1, 'Louis', 'Lespinasse', 'Antiquité', 'Insolant envers les intégrants de son équipe', '/_assets/proof/thomas.png', 4);

CREATE TABLE `teams` (
  `id` int(11) NOT NULL,
  `teamName` varchar(255) NOT NULL,
  `teamLogo` varchar(255) NOT NULL,
  `teamPoint` int(11) NOT NULL,
  `teamID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `teams` (`id`, `teamName`, `teamLogo`, `teamPoint`, `teamID`) VALUES
(1, 'Antiquité', 'team_Pokemon.jpg', 300, 1);


ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `challenges`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `infos`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `managers`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `sponsors`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `starget`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `challenges`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `infos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `managers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `sponsors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

ALTER TABLE `starget`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `teams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
