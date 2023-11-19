CREATE TABLE `tabla` (
  `Sor` int(150) NOT NULL,
  `Username` varchar(150) NOT NULL,
  `Titkos` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `tabla` (`Sor`, `Username`, `Titkos`) VALUES
(1, 'katika@gmail.com', 'piros'),
(2, 'arpi40@freemail.hu', 'zold'),
(3, 'zsanettka@hotmail.com', 'sarga'),
(4, 'hatizsak@protonmail.com', 'kek'),
(5, 'terpeszterez@citromail.hu', 'fekete'),
(6, 'nagysanyi@gmail.hu', 'feher');

ALTER TABLE `tabla`
  ADD PRIMARY KEY (`Sor`);
COMMIT;
