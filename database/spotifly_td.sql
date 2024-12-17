CREATE TABLE `user`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `username` VARCHAR(191) NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    `email` VARCHAR(191) NOT NULL
);
ALTER TABLE
    `user` ADD UNIQUE `user_username_unique`(`username`);
ALTER TABLE
    `user` ADD UNIQUE `user_email_unique`(`email`);
CREATE TABLE `music`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `music_path` VARCHAR(255) NOT NULL,
    `title` VARCHAR(255) NOT NULL,
    `duration` INT NOT NULL,
    `id_artiste` BIGINT NOT NULL,
    `id_album` BIGINT NOT NULL,
    `id_categorie` BIGINT NOT NULL
);
CREATE TABLE `album`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `title` VARCHAR(255) NOT NULL,
    `id_image` BIGINT NOT NULL,
    `release_date` DATE NOT NULL,
    `id_artiste` BIGINT NOT NULL
);
CREATE TABLE `artiste`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(255) NOT NULL,
    `id_image` BIGINT NOT NULL
);
CREATE TABLE `categorie`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(255) NOT NULL
);
CREATE TABLE `music_categorie`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `id_music` BIGINT NOT NULL,
    `id_categorie` BIGINT NOT NULL
);
CREATE TABLE `playlist`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(255) NOT NULL,
    `id_music` BIGINT NOT NULL,
    `id_user` BIGINT NOT NULL
);
CREATE TABLE `playlist_music`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `id_playlist` BIGINT NOT NULL,
    `id_music` BIGINT NOT NULL
);
CREATE TABLE `comment`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `content` VARCHAR(255) NOT NULL,
    `id_user` BIGINT NOT NULL,
    `id_album` BIGINT NOT NULL
);
CREATE TABLE `images`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `img_path` VARCHAR(255) NOT NULL,
    `img_alt` VARCHAR(255) NOT NULL
);
ALTER TABLE
    `music` ADD CONSTRAINT `music_id_album_foreign` FOREIGN KEY(`id_album`) REFERENCES `album`(`id`);
ALTER TABLE
    `comment` ADD CONSTRAINT `comment_id_album_foreign` FOREIGN KEY(`id_album`) REFERENCES `album`(`id`);
ALTER TABLE
    `album` ADD CONSTRAINT `album_id_image_foreign` FOREIGN KEY(`id_image`) REFERENCES `images`(`id`);
ALTER TABLE
    `music_categorie` ADD CONSTRAINT `music_categorie_id_categorie_foreign` FOREIGN KEY(`id_categorie`) REFERENCES `categorie`(`id`);
ALTER TABLE
    `playlist_music` ADD CONSTRAINT `playlist_music_id_playlist_foreign` FOREIGN KEY(`id_playlist`) REFERENCES `playlist`(`id`);
ALTER TABLE
    `playlist_music` ADD CONSTRAINT `playlist_music_id_music_foreign` FOREIGN KEY(`id_music`) REFERENCES `music`(`id`);
ALTER TABLE
    `playlist` ADD CONSTRAINT `playlist_id_user_foreign` FOREIGN KEY(`id_user`) REFERENCES `user`(`id`);
ALTER TABLE
    `album` ADD CONSTRAINT `album_id_artiste_foreign` FOREIGN KEY(`id_artiste`) REFERENCES `artiste`(`id`);
ALTER TABLE
    `comment` ADD CONSTRAINT `comment_id_user_foreign` FOREIGN KEY(`id_user`) REFERENCES `user`(`id`);
ALTER TABLE
    `artiste` ADD CONSTRAINT `artiste_id_image_foreign` FOREIGN KEY(`id_image`) REFERENCES `images`(`id`);
ALTER TABLE
    `music` ADD CONSTRAINT `music_id_artiste_foreign` FOREIGN KEY(`id_artiste`) REFERENCES `artiste`(`id`);
ALTER TABLE
    `music_categorie` ADD CONSTRAINT `music_categorie_id_music_foreign` FOREIGN KEY(`id_music`) REFERENCES `music`(`id_categorie`);