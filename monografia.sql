-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09-Dez-2024 às 12:08
-- Versão do servidor: 10.4.32-MariaDB
-- versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `monografia`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `advisors`
--

CREATE TABLE `advisors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `access_level` varchar(50) NOT NULL DEFAULT 'normal',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `advisors`
--

INSERT INTO `advisors` (`id`, `name`, `contact`, `email`, `password`, `access_level`, `created_at`, `updated_at`) VALUES
(1, 'Cláudio Nhancale', 846578980, 'nhancale@gmail.com', '1111115', 'normal', NULL, '2024-09-13 07:13:55'),
(3, 'Narcisio Jose Mula', 856454378, 'narciomula@gmail.com', '123444', 'normal', '2023-07-10 22:57:57', '2023-07-10 22:57:57');

-- --------------------------------------------------------

--
-- Estrutura da tabela `curses`
--

CREATE TABLE `curses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `curses`
--

INSERT INTO `curses` (`id`, `name`, `created_at`, `updated_at`) VALUES
(4, 'Informática', '2023-06-11 20:32:49', '2023-06-11 20:32:49'),
(5, 'Informática', '2023-06-11 20:36:12', '2023-06-11 20:36:12'),
(6, 'Biologia', '2023-06-12 12:00:15', '2023-06-12 12:00:15'),
(7, 'Matemática', '2023-06-14 07:48:02', '2023-06-27 09:36:17'),
(8, 'Portugues', '2023-06-27 09:35:05', '2023-06-27 09:35:05'),
(9, 'Robótica', '2023-07-13 08:10:13', '2023-07-13 08:10:13');

-- --------------------------------------------------------

--
-- Estrutura da tabela `examiners`
--

CREATE TABLE `examiners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` int(11) NOT NULL,
  `role` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `access_level` varchar(50) NOT NULL DEFAULT 'normal',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `examiners`
--

INSERT INTO `examiners` (`id`, `name`, `contact`, `role`, `email`, `password`, `access_level`, `created_at`, `updated_at`) VALUES
(1, 'Narciso Mula', 84384944, 'Júri ', 'mula@gmail.com ', '444444', 'normal', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_06_11_183411_create_curses_table', 1),
(9, '2023_06_11_184610_create_examiners_table', 2),
(10, '2023_06_11_185513_create_advisors_table', 2),
(11, '2023_06_11_191412_create_students_table', 3),
(12, '2023_06_11_193100_create_monographs_table', 4),
(13, '2023_06_11_194404_create_reviews_table', 5),
(14, '2023_06_11_195051_create_defenses_table', 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `monographs`
--

CREATE TABLE `monographs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `advisors_id` bigint(20) UNSIGNED NOT NULL,
  `students_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `submission_date` date NOT NULL,
  `file` blob NOT NULL,
  `note` int(11) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Pendente',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `monographs`
--

INSERT INTO `monographs` (`id`, `advisors_id`, `students_id`, `title`, `submission_date`, `file`, `note`, `status`, `created_at`, `updated_at`) VALUES
(6, 1, 11, 'Sistema de gestão de monografias', '2023-07-06', 0x4672616e636973636f5f57656c6c696e67746f6e5f426172626f73615f64655f4f6c6976656972612053494745452e706466, 13, 'Pendente', '2023-07-06 07:02:01', '2023-07-06 07:02:01'),
(9, 3, 12, 'sistema de vendas', '2023-07-11', 0x4573747564616e74655f52656c61746f72696f20283137292e706466, 14, 'Pendente', '2023-07-11 04:04:28', '2023-07-11 04:04:28'),
(10, 1, 11, 'Estruturas de repetição', '2023-07-13', 0x41746d6f7366657261206461207465727231313131312e646f6378, 12, 'Pendente', '2023-07-13 07:36:52', '2023-07-13 07:36:52'),
(11, 1, 11, 'Sistema de gestão de monografias', '2023-07-13', 0x41434d202d2045766f6c7563696f6e69736d6f2065204469667573696f6e69736d6f2e646f6378, 14, 'Pendente', '2023-07-13 08:36:57', '2023-07-13 08:36:57');

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `curses_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `conclusion_date` date NOT NULL,
  `contact` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `access_level` varchar(50) NOT NULL DEFAULT 'normal',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `students`
--

INSERT INTO `students` (`id`, `curses_id`, `name`, `conclusion_date`, `contact`, `email`, `password`, `access_level`, `created_at`, `updated_at`) VALUES
(7, 7, 'Irfan Baptista', '2023-06-11', 87533366, 'bbba@gmail.com', 'dfdfdf', 'normal', '2023-06-15 17:13:14', '2023-06-15 17:27:07'),
(11, 5, 'Gerson Simão  Tembe', '2023-06-27', 84523776, 'gersontembe775a@gmail.com', 'gerson', 'normal', '2023-06-27 09:40:18', '2023-06-27 09:40:18'),
(12, 6, 'Eunice Americo', '2023-07-21', 8637336, 'eunice@gmail.com', '123', 'normal', '2023-07-11 04:01:01', '2023-07-11 04:01:01');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `advisors`
--
ALTER TABLE `advisors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `advisors_contact_unique` (`contact`),
  ADD UNIQUE KEY `advisors_email_unique` (`email`);

--
-- Índices para tabela `curses`
--
ALTER TABLE `curses`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `examiners`
--
ALTER TABLE `examiners`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `examiners_contact_unique` (`contact`),
  ADD UNIQUE KEY `examiners_email_unique` (`email`);

--
-- Índices para tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Índices para tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `monographs`
--
ALTER TABLE `monographs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `monographs_advisors_id_foreign` (`advisors_id`),
  ADD KEY `monographs_students_id_foreign` (`students_id`);

--
-- Índices para tabela `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Índices para tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Índices para tabela `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `students_contact_unique` (`contact`),
  ADD UNIQUE KEY `students_email_unique` (`email`),
  ADD KEY `students_curses_id_foreign` (`curses_id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `advisors`
--
ALTER TABLE `advisors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `curses`
--
ALTER TABLE `curses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `examiners`
--
ALTER TABLE `examiners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `monographs`
--
ALTER TABLE `monographs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `monographs`
--
ALTER TABLE `monographs`
  ADD CONSTRAINT `monographs_advisors_id_foreign` FOREIGN KEY (`advisors_id`) REFERENCES `advisors` (`id`),
  ADD CONSTRAINT `monographs_students_id_foreign` FOREIGN KEY (`students_id`) REFERENCES `students` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_curses_id_foreign` FOREIGN KEY (`curses_id`) REFERENCES `curses` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
