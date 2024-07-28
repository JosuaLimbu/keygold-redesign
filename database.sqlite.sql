CREATE TABLE "buybackemas" ("id" integer primary key autoincrement not null, "karat" varchar not null, "price" integer not null, "created_at" datetime, "updated_at" datetime);

CREATE TABLE "buybacks" ("id" integer primary key autoincrement not null, "product_name" varchar not null, "price" integer not null, "created_at" datetime, "updated_at" datetime);

CREATE TABLE "cache" ("key" varchar not null, "value" text not null, "expiration" integer not null, primary key ("key"));

CREATE TABLE "cache_locks" ("key" varchar not null, "owner" varchar not null, "expiration" integer not null, primary key ("key"));

CREATE TABLE "failed_jobs" ("id" integer primary key autoincrement not null, "uuid" varchar not null, "connection" text not null, "queue" text not null, "payload" text not null, "exception" text not null, "failed_at" datetime not null default CURRENT_TIMESTAMP);

CREATE TABLE "hargaemas" ("id" integer primary key autoincrement not null, "gramasi" varchar not null, "redmark_price" integer not null, "created_at" datetime, "updated_at" datetime);

CREATE TABLE "job_batches" ("id" varchar not null, "name" varchar not null, "total_jobs" integer not null, "pending_jobs" integer not null, "failed_jobs" integer not null, "failed_job_ids" text not null, "options" text, "cancelled_at" integer, "created_at" integer not null, "finished_at" integer, primary key ("id"));

CREATE TABLE "jobs" ("id" integer primary key autoincrement not null, "queue" varchar not null, "payload" text not null, "attempts" integer not null, "reserved_at" integer, "available_at" integer not null, "created_at" integer not null);

CREATE TABLE "migrations" ("id" integer primary key autoincrement not null, "migration" varchar not null, "batch" integer not null);

CREATE TABLE "password_reset_tokens" ("email" varchar not null, "token" varchar not null, "created_at" datetime, primary key ("email"));

CREATE TABLE "sessions" ("id" varchar not null, "user_id" integer, "ip_address" varchar, "user_agent" text, "payload" text not null, "last_activity" integer not null, primary key ("id"));

CREATE TABLE sqlite_sequence(name,seq);

CREATE TABLE "users" ("id" integer primary key autoincrement not null, "name" varchar not null, "email" varchar not null, "email_verified_at" datetime, "password" varchar not null, "remember_token" varchar, "created_at" datetime, "updated_at" datetime);

INSERT INTO "buybackemas" ("id", "karat", "price", "created_at", "updated_at") VALUES
(1, 'K24 (99,9%)', 1185000, '2024-07-28 23:09:07', '2024-07-28 23:09:07'),
(2, 'K24 (99%)', 1175000, '2024-07-28 23:09:07', '2024-07-28 23:09:07'),
(3, 'K23', 1025000, '2024-07-28 23:09:07', '2024-07-28 23:09:07'),
(4, 'K22', 985000, '2024-07-28 23:09:07', '2024-07-28 23:09:07'),
(5, 'K21', 940000, '2024-07-28 23:09:07', '2024-07-28 23:09:07'),
(6, 'K20', 895000, '2024-07-28 23:09:07', '2024-07-28 23:09:07'),
(7, 'K19', 855000, '2024-07-28 23:09:07', '2024-07-28 23:09:07'),
(8, 'K18', 815000, '2024-07-28 23:09:07', '2024-07-28 23:09:07'),
(9, 'K17', 770000, '2024-07-28 23:09:07', '2024-07-28 23:09:07'),
(10, 'K16', 720000, '2024-07-28 23:09:07', '2024-07-28 23:09:07'),
(11, 'K15', 680000, '2024-07-28 23:09:07', '2024-07-28 23:09:07'),
(12, 'K8', 365000, '2024-07-28 23:09:07', '2024-07-28 23:09:07'),
(13, 'K6', 277000, '2024-07-28 23:09:07', '2024-07-28 23:09:07'),
(14, 'K24 (99,9%)', 1185000, '2024-07-28 23:11:50', '2024-07-28 23:11:50'),
(15, 'K24 (99%)', 1175000, '2024-07-28 23:11:50', '2024-07-28 23:11:50'),
(16, 'K23', 1025000, '2024-07-28 23:11:51', '2024-07-28 23:11:51'),
(17, 'K22', 985000, '2024-07-28 23:11:51', '2024-07-28 23:11:51'),
(18, 'K21', 940000, '2024-07-28 23:11:51', '2024-07-28 23:11:51'),
(19, 'K20', 895000, '2024-07-28 23:11:51', '2024-07-28 23:11:51'),
(20, 'K19', 855000, '2024-07-28 23:11:51', '2024-07-28 23:11:51'),
(21, 'K18', 815000, '2024-07-28 23:11:51', '2024-07-28 23:11:51'),
(22, 'K17', 770000, '2024-07-28 23:11:51', '2024-07-28 23:11:51'),
(23, 'K16', 720000, '2024-07-28 23:11:51', '2024-07-28 23:11:51'),
(24, 'K15', 680000, '2024-07-28 23:11:51', '2024-07-28 23:11:51'),
(25, 'K8', 365000, '2024-07-28 23:11:51', '2024-07-28 23:11:51'),
(26, 'K6', 277000, '2024-07-28 23:11:51', '2024-07-28 23:11:51');

INSERT INTO "buybacks" ("id", "product_name", "price", "created_at", "updated_at") VALUES
(1, 'Antam Certieye RM ( 23-24)', 1310000, '2024-07-28 23:09:06', '2024-07-28 23:09:06'),
(2, 'Antam Certieye RM (20-22)', 1310000, '2024-07-28 23:09:07', '2024-07-28 23:09:07'),
(3, 'Antam Certieye Abu', 1290000, '2024-07-28 23:09:07', '2024-07-28 23:09:07'),
(4, 'Antam Albino / Certibol', 1280000, '2024-07-28 23:09:07', '2024-07-28 23:09:07'),
(5, 'Antam Press Hijau', 1270000, '2024-07-28 23:09:07', '2024-07-28 23:09:07'),
(6, 'Antam Retro Berdiri', 1245000, '2024-07-28 23:09:07', '2024-07-28 23:09:07'),
(7, 'Antam Retro Tidur', 1240000, '2024-07-28 23:09:07', '2024-07-28 23:09:07'),
(8, 'UBS/ Lotus Archi/ King Halim', 1230000, '2024-07-28 23:09:07', '2024-07-28 23:09:07'),
(9, 'Emas Kita/ Hartadinata', 1230000, '2024-07-28 23:09:07', '2024-07-28 23:09:07'),
(10, 'EOA/ Mini Gold/ Big Gold', 1230000, '2024-07-28 23:09:07', '2024-07-28 23:09:07'),
(11, 'Merek Lainya', 1225000, '2024-07-28 23:09:07', '2024-07-28 23:09:07'),
(12, 'Sertifikat Rusak/ Hilang', 1220000, '2024-07-28 23:09:07', '2024-07-28 23:09:07'),
(13, 'Dinar 22K', 1010000, '2024-07-28 23:09:07', '2024-07-28 23:09:07'),
(14, 'Antam Certieye RM ( 23-24)', 1310000, '2024-07-28 23:11:50', '2024-07-28 23:11:50'),
(15, 'Antam Certieye RM (20-22)', 1310000, '2024-07-28 23:11:50', '2024-07-28 23:11:50'),
(16, 'Antam Certieye Abu', 1290000, '2024-07-28 23:11:50', '2024-07-28 23:11:50'),
(17, 'Antam Albino / Certibol', 1280000, '2024-07-28 23:11:50', '2024-07-28 23:11:50'),
(18, 'Antam Press Hijau', 1270000, '2024-07-28 23:11:50', '2024-07-28 23:11:50'),
(19, 'Antam Retro Berdiri', 1245000, '2024-07-28 23:11:50', '2024-07-28 23:11:50'),
(20, 'Antam Retro Tidur', 1240000, '2024-07-28 23:11:50', '2024-07-28 23:11:50'),
(21, 'UBS/ Lotus Archi/ King Halim', 1230000, '2024-07-28 23:11:50', '2024-07-28 23:11:50'),
(22, 'Emas Kita/ Hartadinata', 1230000, '2024-07-28 23:11:50', '2024-07-28 23:11:50'),
(23, 'EOA/ Mini Gold/ Big Gold', 1230000, '2024-07-28 23:11:50', '2024-07-28 23:11:50'),
(24, 'Merek Lainya', 1225000, '2024-07-28 23:11:50', '2024-07-28 23:11:50'),
(25, 'Sertifikat Rusak/ Hilang', 1220000, '2024-07-28 23:11:50', '2024-07-28 23:11:50'),
(26, 'Dinar 22K', 1010000, '2024-07-28 23:11:50', '2024-07-28 23:11:50');




INSERT INTO "hargaemas" ("id", "gramasi", "redmark_price", "created_at", "updated_at") VALUES
(1, 'Antam CertiEye 0,5 gr', 749500, '2024-07-28 23:11:51', '2024-07-28 23:11:51'),
(2, 'Antam CertiEye 1 gr', 1399000, '2024-07-28 23:11:51', '2024-07-28 23:11:51'),
(3, 'Antam CertiEye 2 gr', 2748000, '2024-07-28 23:11:51', '2024-07-28 23:11:51'),
(4, 'Antam CertiEye 3 gr', 4104000, '2024-07-28 23:11:51', '2024-07-28 23:11:51'),
(5, 'Antam CertiEye 5 gr', 6811000, '2024-07-28 23:11:51', '2024-07-28 23:11:51'),
(6, 'Antam CertiEye 10 gr', 13532000, '2024-07-28 23:11:51', '2024-07-28 23:11:51'),
(7, 'Antam CertiEye 25 gr', 33680000, '2024-07-28 23:11:51', '2024-07-28 23:11:51'),
(8, 'Antam CertiEye 50 gr', 67209000, '2024-07-28 23:11:51', '2024-07-28 23:11:51'),
(9, 'Antam CertiEye 100 gr', 134239000, '2024-07-28 23:11:51', '2024-07-28 23:11:51');



INSERT INTO "migrations" ("id", "migration", "batch") VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_07_28_220850_create_buybacks_table', 1),
(5, '2024_07_28_221928_create_hargaemas_table', 1),
(6, '2024_07_28_225743_create_buybackemas_table', 1);


INSERT INTO "sessions" ("id", "user_id", "ip_address", "user_agent", "payload", "last_activity") VALUES
('1j5V3EyTSHTZwKu8UKQIftxpQgcNrm4FWdhtNzV3', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUnhER0lYZ3RyZmJnUmd1UGFyeXEwd3dwakYxSWtXWDFCUXEyekNaWCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly90ZW1wbGF0ZS1zZXR1cC1sYXJhdmVsLnRlc3QiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1722210265);

INSERT INTO "sqlite_sequence" ("name", "seq") VALUES
('migrations', '6'),
('buybacks', '26'),
('buybackemas', '26'),
('hargaemas', '9');

