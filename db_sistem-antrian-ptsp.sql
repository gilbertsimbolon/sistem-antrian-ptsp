-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 15 Bulan Mei 2025 pada 01.24
-- Versi server: 8.0.30
-- Versi PHP: 8.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sistem-antrian-ptsp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `antrian_hukums`
--

CREATE TABLE `antrian_hukums` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telepon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keperluan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_antrian` int DEFAULT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `meja` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'HUKUM',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `antrian_hukums`
--

INSERT INTO `antrian_hukums` (`id`, `nama`, `no_telepon`, `keperluan`, `nomor_antrian`, `jenis_kelamin`, `meja`, `created_at`, `updated_at`) VALUES
(1, 'Dewi Persik', 's', 's', 1, 'Perempuan', 'HUKUM', '2025-05-05 17:32:56', '2025-05-05 17:32:56'),
(2, 'w', 'w', 'w', 2, 'Laki-laki', 'HUKUM', '2025-05-05 18:07:26', '2025-05-05 18:07:26'),
(3, 'w', 'w', 'w', 3, 'Laki-laki', 'HUKUM', '2025-05-05 18:09:05', '2025-05-05 18:09:05'),
(4, 'w', 'w', 'w', 4, 'Laki-laki', 'HUKUM', '2025-05-05 18:09:36', '2025-05-05 18:09:36'),
(5, 'ww', 'w', 'w', 5, 'Laki-laki', 'HUKUM', '2025-05-05 18:20:07', '2025-05-05 18:20:07'),
(6, 's', 'w', 's', 6, 'Laki-laki', 'HUKUM', '2025-05-05 23:40:07', '2025-05-05 23:40:07'),
(7, 'ww', 'w', 'ww', 7, 'Laki-laki', 'HUKUM', '2025-05-05 23:40:20', '2025-05-05 23:40:20'),
(8, 'Josep Gilbert Andriano Simbolon', '085399684844', 's', 1, 'Laki-laki', 'HUKUM', '2025-05-08 21:27:31', '2025-05-08 21:27:31'),
(9, 'Asep', 's', 's', 2, 'Laki-laki', 'HUKUM', '2025-05-09 02:09:32', '2025-05-09 02:09:32'),
(10, 'Saddad', 's', 's', 3, 'Laki-laki', 'HUKUM', '2025-05-09 02:10:40', '2025-05-09 02:10:40'),
(11, 'Rikky', '1', 's', 4, 'Laki-laki', 'HUKUM', '2025-05-09 02:16:11', '2025-05-09 02:16:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `antrian_inzages`
--

CREATE TABLE `antrian_inzages` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telepon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keperluan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_antrian` int DEFAULT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `meja` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'INZAGE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `antrian_inzages`
--

INSERT INTO `antrian_inzages` (`id`, `nama`, `no_telepon`, `keperluan`, `nomor_antrian`, `jenis_kelamin`, `meja`, `created_at`, `updated_at`) VALUES
(1, 'Gilbert Simbolon', '085399684844', 'Mengurus tinggi badan yakkk', 1, 'Laki-laki', 'INZAGE', '2025-05-05 17:31:28', '2025-05-05 17:35:36'),
(2, 'Asulamasukadia', 's', 's', 2, 'Laki-laki', 'INZAGE', '2025-05-05 17:43:00', '2025-05-05 17:43:00'),
(3, 's', 's', 's', 3, 'Laki-laki', 'INZAGE', '2025-05-05 18:01:29', '2025-05-05 18:01:29'),
(4, 'w', 'ww', 'w', 4, 'Laki-laki', 'INZAGE', '2025-05-05 18:03:42', '2025-05-05 18:03:42'),
(5, 'asd', 'asd', 'dasd', 1, 'Laki-laki', 'INZAGE', '2025-05-07 16:32:45', '2025-05-07 16:32:45'),
(6, 'wahyu', 'test', 'test', 2, 'Laki-laki', 'INZAGE', '2025-05-07 16:34:16', '2025-05-07 16:34:16'),
(7, 'Gilbert Simbolon', '2', 'w', 3, 'Laki-laki', 'INZAGE', '2025-05-07 23:18:03', '2025-05-07 23:18:03'),
(8, 'Wahyu', 's', 's', 4, 'Laki-laki', 'INZAGE', '2025-05-07 23:21:01', '2025-05-07 23:21:01'),
(9, 'Josep Gilbert Andriano Simbolon', '085399684844', 'Mengurus sim', 1, 'Laki-laki', 'INZAGE', '2025-05-08 21:26:41', '2025-05-08 21:26:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `antrian_perdatas`
--

CREATE TABLE `antrian_perdatas` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telepon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keperluan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_antrian` int DEFAULT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `meja` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'PERDATA',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `antrian_perdatas`
--

INSERT INTO `antrian_perdatas` (`id`, `nama`, `no_telepon`, `keperluan`, `nomor_antrian`, `jenis_kelamin`, `meja`, `created_at`, `updated_at`) VALUES
(1, 'Maria', 'w', 'w', 1, 'Laki-laki', 'PERDATA', '2025-05-05 17:32:24', '2025-05-05 17:32:24'),
(2, 'w', 'w', 'w', 2, 'Laki-laki', 'PERDATA', '2025-05-05 18:14:31', '2025-05-05 18:14:31'),
(3, 'w', 'w', 'w', 3, 'Laki-laki', 'PERDATA', '2025-05-05 18:18:47', '2025-05-05 18:18:47'),
(4, 'w', 'w', 'w', 4, 'Laki-laki', 'PERDATA', '2025-05-05 18:19:31', '2025-05-05 18:19:31'),
(5, 'ayayayay', 'asyasyas', 'sasysa', 5, 'Laki-laki', 'PERDATA', '2025-05-05 23:40:44', '2025-05-05 23:40:44'),
(6, 'perdata', 'perdata', 'perdata', 6, 'Laki-laki', 'PERDATA', '2025-05-05 23:43:30', '2025-05-05 23:43:30'),
(7, 'Josep Gilbert Andriano Simbolon', '085399684844', 's', 1, 'Laki-laki', 'PERDATA', '2025-05-08 21:27:16', '2025-05-08 21:27:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `antrian_pidanas`
--

CREATE TABLE `antrian_pidanas` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telepon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keperluan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_antrian` int DEFAULT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `meja` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'PIDANA',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `antrian_pidanas`
--

INSERT INTO `antrian_pidanas` (`id`, `nama`, `no_telepon`, `keperluan`, `nomor_antrian`, `jenis_kelamin`, `meja`, `created_at`, `updated_at`) VALUES
(1, 'Wahyu', '2', 'w', 1, 'Laki-laki', 'PIDANA', '2025-05-05 17:32:02', '2025-05-05 17:32:02'),
(2, 'Dewi Persik', 's', 's', 2, 'Perempuan', 'PIDANA', '2025-05-05 17:51:22', '2025-05-05 17:51:22'),
(3, 'Dewi persik', 'w', 'w', 3, 'Perempuan', 'PIDANA', '2025-05-05 18:12:47', '2025-05-05 18:12:47'),
(4, 'w', 'w', 'w', 4, 'Laki-laki', 'PIDANA', '2025-05-05 18:13:41', '2025-05-05 18:13:41'),
(5, 'Dewi Persik', 'w', 'w', 5, 'Perempuan', 'PIDANA', '2025-05-05 18:13:58', '2025-05-05 18:13:58'),
(6, 'sdasd', 'sdasd', 'dsad', 6, 'Laki-laki', 'PIDANA', '2025-05-05 23:42:13', '2025-05-05 23:42:13'),
(7, 'Josep Gilbert Andriano Simbolon', '085399684844', 'Mengurus sim', 1, 'Laki-laki', 'PIDANA', '2025-05-08 21:27:02', '2025-05-08 21:27:02'),
(8, 'Maria Marcelona Simbolon', '123', 'asd', 2, 'Perempuan', 'PIDANA', '2025-05-08 21:32:14', '2025-05-08 21:32:14'),
(9, 'Helen Desi Maria Pasaribu', '2', '2', 3, 'Perempuan', 'PIDANA', '2025-05-08 21:34:23', '2025-05-08 21:34:23'),
(10, 'Wahyu', 's', 's', 4, 'Laki-laki', 'PIDANA', '2025-05-09 02:08:18', '2025-05-09 02:08:18'),
(11, 'Asep', 'w', 'w', 5, 'Laki-laki', 'PIDANA', '2025-05-09 02:09:07', '2025-05-09 02:09:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `antrian_pojok_e_courts`
--

CREATE TABLE `antrian_pojok_e_courts` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telepon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keperluan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_antrian` int DEFAULT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `meja` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'POJOK E-COURT',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `antrian_pojok_e_courts`
--

INSERT INTO `antrian_pojok_e_courts` (`id`, `nama`, `no_telepon`, `keperluan`, `nomor_antrian`, `jenis_kelamin`, `meja`, `created_at`, `updated_at`) VALUES
(1, 'Erick Tohir Simorangkir', '2', '2', 1, 'Laki-laki', 'POJOK E-COURT', '2025-05-05 17:34:49', '2025-05-05 17:34:49'),
(2, 'Asulamasukadia', '2', '2', 2, 'Laki-laki', 'POJOK E-COURT', '2025-05-05 17:54:16', '2025-05-05 17:54:16'),
(3, 'ec', 'ec', 'ec', 3, 'Laki-laki', 'POJOK E-COURT', '2025-05-05 23:56:50', '2025-05-05 23:56:50'),
(4, 's', 's', 's', 4, 'Laki-laki', 'POJOK E-COURT', '2025-05-05 23:58:13', '2025-05-05 23:58:13'),
(5, 'ec', 'ec', 'ec', 5, 'Laki-laki', 'POJOK E-COURT', '2025-05-05 23:58:25', '2025-05-05 23:58:25'),
(6, 'wahyu', 'wahyu', 'wahyu', 6, 'Perempuan', 'POJOK E-COURT', '2025-05-05 23:58:53', '2025-05-05 23:58:53'),
(7, 'wahyu', 'wahyu', 'wahyu', 7, 'Perempuan', 'POJOK E-COURT', '2025-05-05 23:58:54', '2025-05-05 23:58:54'),
(8, 'wahyu', 'wahyu', 'wahyu', 8, 'Perempuan', 'POJOK E-COURT', '2025-05-05 23:58:54', '2025-05-05 23:58:54'),
(9, 'Josep Gilbert Andriano Simbolon', '085399684844', 's', 1, 'Laki-laki', 'POJOK E-COURT', '2025-05-08 21:27:58', '2025-05-08 21:27:58'),
(10, 'Wahyu', 's', 's', 2, 'Laki-laki', 'POJOK E-COURT', '2025-05-09 02:16:32', '2025-05-09 02:16:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `antrian_umums`
--

CREATE TABLE `antrian_umums` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telepon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keperluan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_antrian` int DEFAULT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `meja` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'UMUM',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `antrian_umums`
--

INSERT INTO `antrian_umums` (`id`, `nama`, `no_telepon`, `keperluan`, `nomor_antrian`, `jenis_kelamin`, `meja`, `created_at`, `updated_at`) VALUES
(1, 'Gibran Rakabuming Raka', '2', 'W', 1, 'Laki-laki', 'UMUM', '2025-05-05 17:34:10', '2025-05-05 17:34:10'),
(2, 'Dewi Persik Hutagaol', '123', '21', 2, 'Perempuan', 'UMUM', '2025-05-05 17:37:17', '2025-05-05 17:37:17'),
(3, 'umum', 'umum', 'umum', 3, 'Laki-laki', 'UMUM', '2025-05-05 23:45:03', '2025-05-05 23:45:03'),
(4, 'umum', 'umum', 'umum', 4, 'Laki-laki', 'UMUM', '2025-05-05 23:46:36', '2025-05-05 23:46:36'),
(5, 'umum', 'umum', 'umum', 5, 'Laki-laki', 'UMUM', '2025-05-05 23:48:43', '2025-05-05 23:48:43'),
(6, 'asdsa', 'dsad', 'dasd', 6, 'Laki-laki', 'UMUM', '2025-05-05 23:49:05', '2025-05-05 23:49:05'),
(7, 'umum', 'umum', 'umum', 7, 'Laki-laki', 'UMUM', '2025-05-05 23:49:44', '2025-05-05 23:49:44'),
(8, 'Josep Gilbert Andriano Simbolon', '085399684844', 's', 1, 'Laki-laki', 'UMUM', '2025-05-08 21:27:45', '2025-05-08 21:27:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('sistem_antrian_ptsp_cache_adminptsp@pntondano.go.id|127.0.0.1', 'i:1;', 1746495010),
('sistem_antrian_ptsp_cache_adminptsp@pntondano.go.id|127.0.0.1:timer', 'i:1746495010;', 1746495010);

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_04_18_110820_create_antrian_inzages_table', 1),
(5, '2025_05_02_090413_create_antrian_pidanas_table', 1),
(6, '2025_05_02_141415_create_antrian_perdatas_table', 1),
(7, '2025_05_02_145131_create_antrian_hukums_table', 1),
(8, '2025_05_05_083303_create_antrian_umums_table', 1),
(9, '2025_05_05_124445_create_antrian_pojok_e_courts_table', 1),
(10, '2025_05_05_144407_create_permission_tables', 1),
(11, '2025_05_05_145253_add_role_to_users_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('L15KcfHepN6ir6YAdhTvQH2gjxfNQ8k6FBdYNjQ7', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiTm84U2pOdHR3dlZuMmFmbW96TU5mUDVGNnlQczQ0SDI2Y1JzUmNhQSI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI5OiJodHRwOi8vbG9jYWxob3N0OjgwMDAvcHJvZmlsZSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1746786016);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','staff','operator') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'operator',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin 1 PN Tondano', 'admin1@pntondano.go.id', NULL, '$2y$12$HKvdd9UDws1omyYNo.mt/.mAVeFVNOwmPmi5M.Gw2/hAivwCHxEry', 'admin', NULL, '2025-05-05 07:31:13', '2025-05-05 07:31:13'),
(2, 'Admin 2 PN Tondano', 'admin2@pntondano.go.id', NULL, '$2y$12$4Gbjg7SvEu7s78Bp2XtRf.fOZp9WAa/bxRueViJCOkHEmiypaepqK', 'admin', NULL, '2025-05-05 07:31:14', '2025-05-05 07:31:14'),
(3, 'Umum', 'umum@pntondano.go.id', NULL, '$2y$12$GIN9BDaY9QDTySw.PQqeNOkNee51mgOXrjuzprhPwxBrk4jaWfyBq', 'staff', NULL, '2025-05-05 07:32:36', '2025-05-05 07:32:36'),
(4, 'Inzage', 'inzage@pntondano.go.id', NULL, '$2y$12$7GYfl7z.rcY9S1bcVZbvhuJX0ku2t7vEjuD1vupuW24VXtP8Pmhd.', 'staff', NULL, '2025-05-05 07:32:37', '2025-05-05 07:32:37'),
(5, 'Pidana', 'pidana@pntondano.go.id', NULL, '$2y$12$M3Ip27Hb/0CHiFpQOUy/Luf4XrhrMa0WVCDvxcqR81qMdCRM4/7ae', 'staff', NULL, '2025-05-05 07:32:37', '2025-05-05 07:32:37'),
(6, 'Perdata', 'perdata@pntondano.go.id', NULL, '$2y$12$/T1KjgA7GsXrFgx51DB4AO2Wm1BBhvC1xqw.dGZiM8miPaVioJX9m', 'staff', NULL, '2025-05-05 07:32:38', '2025-05-05 07:32:38'),
(7, 'Hukum', 'hukum@pntondano.go.id', NULL, '$2y$12$ti6VqPwKUCEecQF/23uIb.Ml0xvlveah6uJqdqyiWPlkjR5BqY.uu', 'staff', NULL, '2025-05-05 07:32:38', '2025-05-05 07:32:38'),
(8, 'e-Court', 'e-court@pntondano.go.id', NULL, '$2y$12$nZiSapXoeTSFTYRr/6tO0.4O0BW4ZswIT6CN1iIlnuXUJQ642cjL.', 'staff', NULL, '2025-05-05 07:32:38', '2025-05-05 07:32:38'),
(9, 'Operator 1', 'operator1@pntondano.go.id', NULL, '$2y$12$oFhUeo1oHwMZ5pHeNdqMGuKisR.kapz60BbdAOPJVnajj4HzRmXie', 'operator', NULL, '2025-05-05 07:32:39', '2025-05-05 07:32:39'),
(10, 'Operator 2', 'operator2@pntondano.go.id', NULL, '$2y$12$RInK8uDntZJt/XkG.zlKM.lzWGK9Yi4BbbsdpJ6zL5bvVR8ejMEzC', 'operator', NULL, '2025-05-05 07:32:39', '2025-05-05 07:32:39');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `antrian_hukums`
--
ALTER TABLE `antrian_hukums`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `antrian_inzages`
--
ALTER TABLE `antrian_inzages`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `antrian_perdatas`
--
ALTER TABLE `antrian_perdatas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `antrian_pidanas`
--
ALTER TABLE `antrian_pidanas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `antrian_pojok_e_courts`
--
ALTER TABLE `antrian_pojok_e_courts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `antrian_umums`
--
ALTER TABLE `antrian_umums`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indeks untuk tabel `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indeks untuk tabel `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indeks untuk tabel `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `antrian_hukums`
--
ALTER TABLE `antrian_hukums`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `antrian_inzages`
--
ALTER TABLE `antrian_inzages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `antrian_perdatas`
--
ALTER TABLE `antrian_perdatas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `antrian_pidanas`
--
ALTER TABLE `antrian_pidanas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `antrian_pojok_e_courts`
--
ALTER TABLE `antrian_pojok_e_courts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `antrian_umums`
--
ALTER TABLE `antrian_umums`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
