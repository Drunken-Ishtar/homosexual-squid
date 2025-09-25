DROP DATABASE IF EXISTS 3d_wiki;
CREATE DATABASE 3d_wiki;


CREATE TABLE `users` (
  `id_user` int PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `username_steam` varchar(40),
  `username_minecraft` varchar(40),
  `user_avatar` varchar(20),
  `user_type ` smallint not null,
);

CREATE TABLE `as_tournament` (
  `id_astournament` int PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `astournament_map` int NOT NULL,
  `astournament_desc` varchar(60) NOT NULL,
  `astournament_patch` int NOT NULL,
  `astournament_start` datetime NOT NULL,
  `astournament_end` datetime NOT NULL
);

CREATE TABLE `as_map` (
  `id_map` int PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `map_name` varchar(30) NOT NULL,
  `map_desc` varchar(60) NOT NULL,
  `map_image` varchar(30) NOT NULL
);

CREATE TABLE `as_teamtournament` (
  `id_asteam` int,
  `id_astournament` int
);

CREATE TABLE `as_teams` (
  `id_asteam` int PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `team_name` varchar(30) NOT NULL,
  `team_player` int NOT NULL,
  `team_image` varchar(30) NOT NULL
);

CREATE TABLE `as_patchnotes` (
  `id_asnote` int PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `asnote_name` varchar(30) NOT NULL,
  `asnote_note` varchar(65365) NOT NULL
);

CREATE TABLE `as_character` (
  `id_chara` int PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `chara_name` varchar(20) NOT NULL,
  `chara_hp` char(4) NOT NULL,
  `chara_ws` char(4) NOT NULL,
  `chara_rs` char(4) NOT NULL,
  `chara_primary` varchar(30) NOT NULL,
  `chara_secondary` varchar(30) NOT NULL,
  `chara_desc` varchar(60) NOT NULL,
  `chara_lore` varchar(65365)
);

CREATE TABLE `as_chara_images` (
  `id_chara` int,
  `chara_image` varchar(160) NOT NULL
);

CREATE TABLE `as_weapon` (
  `id_weapon` int PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `id_chara` int NOT NULL,
  `weapon_name` varchar(30) NOT NULL,
  `weapon_rpm` varchar(10) NOT NULL,
  `weapon_dps` varchar(10) NOT NULL,
  `weapon_maxammo` varchar(10) NOT NULL,
  `weapon_reserveammo` varchar(10) NOT NULL,
  `weapon_dmg` varchar(10) NOT NULL,
  `weapon_headshot` varchar(10) NOT NULL,
  `weapon_accuracy` varchar(10) NOT NULL,
  `weapon_desc` varchar(50) NOT NULL,
  `weapon_hp` varchar(30)
);

CREATE TABLE `as_weapon_images` (
  `id_weapon` int,
  `weapon_image` varchar(30) NOT NULL
);

CREATE TABLE `mc_events` (
  `id_mcevent` int PRIMARY KEY AUTO_INCREMENT,
  `mcevent_name` varchar(30) NOT NULL,
  `mcevent_desc` varchar(65365) NOT NULL,
  `mcevent_type` int NOT NULL,
  `mcevent_start` datetime NOT NULL,
  `mcevent_end` datetime NOT NULL
);

CREATE TABLE `mc_event_players` (
  `id_mcevent` int,
  `id_eventplayer` int
);

CREATE TABLE `mc_eventtype` (
  `id_mctype` int PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `mctype_name` varchar(30) NOT NULL
);

CREATE TABLE `mc_halloween` (
  `id_mchall` int PRIMARY KEY AUTO_INCREMENT,
  `mchall_daily` varchar(60) NOT NULL,
  `mchall_theme` varchar(60) NOT NULL,
  `mchall_activehouses` int
);

CREATE TABLE `mc_hallhouses` (
  `id_mchallhouse` int PRIMARY KEY AUTO_INCREMENT,
  `mchallhouse_name` varchar(30) NOT NULL,
  `mchallhouse_creator` int NOT NULL,
  `mchallhouse_minigame` varchar(120) NOT NULL
);

CREATE TABLE `mc_halloweendaily` (
  `id_mchalldaily` int PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `mchalldaily_date` date NOT NULL,
  `mchalldaily_desc` varchar(30) NOT NULL
);

CREATE TABLE `mc_halloweenpowers` (
  `id_mchallpower` int PRIMARY KEY AUTO_INCREMENT,
  `mchallpower_name` varchar(30) NOT NULL,
  `mchallpower_desc` varchar(60) NOT NULL,
  `mchallpower_owner` int
);

CREATE TABLE `mc_xmas` (
  `id_xmas` int PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `xmas_daily` int NOT NULL,
  `xmas_plots` int
);

CREATE TABLE `mc_xmasdaily` (
  `id_xmasdaily` int PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `xmasdaily_day` date NOT NULL,
  `xmasdaily_desc` varchar(60) NOT NULL
);

CREATE TABLE `mc_xmasplots` (
  `id_xmasplot` int PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `xmasplot_cost` int NOT NULL,
  `xmasplot_owner` int
);

CREATE TABLE `as_mappool` (
  `id_mappool` int PRIMARY KEY AUTO_INCREMENT,
  `id_map` int
);

CREATE TABLE `eventplayer` (
  `id_eventplayer` int,
  `halloween_candy` int,
  `halloween_coins` int,
  `xmas_bulbs` int
);

CREATE TABLE `user_comments` (
  `id_comment` int PRIMARY KEY AUTO_INCREMENT,
  `id_user` int NOT NULL,
  `comment_text` varchar(5000),
  `comment_location` varchar(500) NOT NULL
);

CREATE TABLE `backlog_patchnotes` (
  `bk_id_note` int PRIMARY KEY NOT NULL,
  `bknote_name` varchar(30) NOT NULL,
  `bknote_note` varchar(65365) NOT NULL
);

CREATE TABLE `backlog_tournament` (
  `bk_id_tournament` int PRIMARY KEY,
  `bktournament_map` int NOT NULL,
  `bktournament_desc` varchar(60) NOT NULL,
  `bktournament_patch` int NOT NULL,
  `bktournament_start` datetime NOT NULL,
  `bktournament_end` datetime NOT NULL
);

CREATE TABLE `backlog_eventplayer` (
  `bk_id_eventplayer` int,
  `bkhalloween_candy` int,
  `bkhalloween_coins` int,
  `bkxmas_bulbs` int
);

CREATE TABLE `backlog_character` (
  `id_chara` int PRIMARY KEY,
  `chara_name` varchar(20) NOT NULL,
  `chara_hp` char(4) NOT NULL,
  `chara_ws` char(4) NOT NULL,
  `chara_rs` char(4) NOT NULL,
  `chara_primary` varchar(30) NOT NULL,
  `chara_secondary` varchar(30) NOT NULL,
  `chara_desc` varchar(60) NOT NULL,
  `chara_lore` varchar(65365)
);

CREATE TABLE `backlog_xmasdaily` (
  `id_xmasdaily` int PRIMARY KEY,
  `xmasdaily_day` date NOT NULL,
  `xmasdaily_desc` varchar(60) NOT NULL
);

CREATE TABLE `backlog_weapon` (
  `id_weapon` int PRIMARY KEY NOT NULL,
  `id_chara` int NOT NULL,
  `weapon_name` varchar(30) NOT NULL,
  `weapon_rpm` varchar(10) NOT NULL,
  `weapon_dps` varchar(10) NOT NULL,
  `weapon_maxammo` varchar(10) NOT NULL,
  `weapon_reserveammo` varchar(10) NOT NULL,
  `weapon_dmg` varchar(10) NOT NULL,
  `weapon_headshot` varchar(10) NOT NULL,
  `weapon_accuracy` varchar(10) NOT NULL,
  `weapon_desc` varchar(50) NOT NULL,
  `weapon_hp` varchar(30)
);

CREATE TABLE `backlog_map` (
  `id_map` int PRIMARY KEY NOT NULL,
  `map_name` varchar(30) NOT NULL,
  `map_desc` varchar(60) NOT NULL,
  `map_image` varchar(30) NOT NULL
);

CREATE TABLE `backlog_teams` (
  `id_asteam` int PRIMARY KEY NOT NULL,
  `team_name` varchar(30) NOT NULL,
  `team_player` int NOT NULL,
  `team_image` varchar(30) NOT NULL
);

CREATE TABLE `backlog_events` (
  `id_mcevent` int PRIMARY KEY,
  `mcevent_name` varchar(30) NOT NULL,
  `mcevent_desc` varchar(65365) NOT NULL,
  `mcevent_type` int NOT NULL,
  `mcevent_start` datetime NOT NULL,
  `mcevent_end` datetime NOT NULL
);

CREATE TABLE `backlog_comments` (
  `id_comment` int PRIMARY KEY,
  `id_user` int NOT NULL,
  `comment_text` varchar(5000),
  `comment_location` varchar(500) NOT NULL
);

CREATE TABLE `backlog_halloweenpowers` (
  `id_mchallpower` int PRIMARY KEY,
  `mchallpower_name` varchar(30) NOT NULL,
  `mchallpower_desc` varchar(60) NOT NULL,
  `mchallpower_owner` int
);

ALTER TABLE `as_character` COMMENT = 'undertale D D D A G#';

ALTER TABLE `backlog_character` COMMENT = 'undertale D D D A G#';

ALTER TABLE `as_teamtournament` ADD FOREIGN KEY (`id_astournament`) REFERENCES `as_tournament` (`id_astournament`);

ALTER TABLE `as_tournament` ADD FOREIGN KEY (`astournament_map`) REFERENCES `as_mappool` (`id_mappool`);

ALTER TABLE `as_tournament` ADD FOREIGN KEY (`astournament_patch`) REFERENCES `as_patchnotes` (`id_asnote`);

ALTER TABLE `as_mappool` ADD FOREIGN KEY (`id_map`) REFERENCES `as_map` (`id_map`);

ALTER TABLE `as_teamtournament` ADD FOREIGN KEY (`id_asteam`) REFERENCES `as_teams` (`id_asteam`);

ALTER TABLE `as_teams` ADD FOREIGN KEY (`team_player`) REFERENCES `users` (`id_user`);

ALTER TABLE `as_character` ADD FOREIGN KEY (`chara_primary`) REFERENCES `as_weapon` (`id_weapon`);

ALTER TABLE `as_character` ADD FOREIGN KEY (`chara_secondary`) REFERENCES `as_weapon` (`id_weapon`);

ALTER TABLE `as_chara_images` ADD FOREIGN KEY (`id_chara`) REFERENCES `as_character` (`id_chara`);

ALTER TABLE `as_weapon` ADD FOREIGN KEY (`id_chara`) REFERENCES `as_character` (`id_chara`);

ALTER TABLE `as_weapon_images` ADD FOREIGN KEY (`id_weapon`) REFERENCES `as_weapon` (`id_weapon`);

ALTER TABLE `mc_events` ADD FOREIGN KEY (`mcevent_type`) REFERENCES `mc_eventtype` (`id_mctype`);

ALTER TABLE `mc_event_players` ADD FOREIGN KEY (`id_mcevent`) REFERENCES `mc_events` (`id_mcevent`);

ALTER TABLE `mc_event_players` ADD FOREIGN KEY (`id_eventplayer`) REFERENCES `eventplayer` (`id_eventplayer`);

ALTER TABLE `mc_hallhouses` ADD FOREIGN KEY (`id_mchallhouse`) REFERENCES `mc_halloween` (`mchall_activehouses`);

ALTER TABLE `mc_hallhouses` ADD FOREIGN KEY (`mchallhouse_creator`) REFERENCES `eventplayer` (`id_eventplayer`);

ALTER TABLE `mc_halloween` ADD FOREIGN KEY (`mchall_daily`) REFERENCES `mc_halloweendaily` (`id_mchalldaily`);

ALTER TABLE `mc_halloweenpowers` ADD FOREIGN KEY (`mchallpower_owner`) REFERENCES `eventplayer` (`id_eventplayer`);

ALTER TABLE `mc_xmas` ADD FOREIGN KEY (`xmas_plots`) REFERENCES `mc_xmasplots` (`id_xmasplot`);

ALTER TABLE `mc_xmas` ADD FOREIGN KEY (`xmas_daily`) REFERENCES `mc_xmasdaily` (`id_xmasdaily`);

ALTER TABLE `mc_xmasplots` ADD FOREIGN KEY (`xmasplot_owner`) REFERENCES `eventplayer` (`id_eventplayer`);

ALTER TABLE `eventplayer` ADD FOREIGN KEY (`id_eventplayer`) REFERENCES `users` (`id_user`);

ALTER TABLE `user_comments` ADD FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);
