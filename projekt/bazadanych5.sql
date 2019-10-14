SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

CREATE TABLE uzytkownicy (
`id` int(11) NOT NULL,
`uzytkownik` text COLLATE utf8_polish_ci NOT NULL,
`haslo` text COLLATE utf8_polish_ci NOT NULL,
`email` text NOT NULL,
`stan konta` int(30) NOT NULL);

INSERT INTO uzytkownicy (`id`, `uzytkownik`, `haslo`, `email`, `stan konta`) VALUES
(1, 'kacper', 'abcd', 'kacper.dluzen@interia.pl', 100),
(2, 'mati', 'abcd', 'mati@gmail.com', 420),
(3, 'papryk', 'abcd', 'papryk@gmail.com', 1);

ALTER TABLE uzytkownicy
ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`);


