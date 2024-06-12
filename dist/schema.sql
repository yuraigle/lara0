CREATE DATABASE IF NOT EXISTS `lara0`
    DEFAULT CHARSET = utf8mb4
    COLLATE = utf8mb4_unicode_ci;

USE lara0;

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users`
(
    `id`                bigint(20) unsigned NOT NULL AUTO_INCREMENT,
    `name`              varchar(255)        NOT NULL,
    `email`             varchar(255)        NOT NULL,
    `password`          varchar(255)        NOT NULL,
    `email_verified_at` timestamp           NULL     DEFAULT NULL,
    `remember_token`    varchar(100)        NULL     DEFAULT NULL,
    `created_at`        timestamp           NOT NULL DEFAULT current_timestamp(),
    `updated_at`        timestamp           NULL     DEFAULT NULL,

    PRIMARY KEY (`id`),
    UNIQUE KEY `users_email_unique` (`email`)
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4
  COLLATE = utf8mb4_unicode_ci;
