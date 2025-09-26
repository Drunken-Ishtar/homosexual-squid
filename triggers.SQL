DROP TRIGGER IF EXISTS trg_bklg_weapon;
DELIMITER //
CREATE TRIGGER trg_bklg_weapon
BEFORE UPDATE ON as_weapon 
FOR EACH ROW
BEGIN
    INSERT INTO backlog_weapon(id_weapon,id_chara,weapon_name,weapon_rpm,weapon_dps,weapon_maxammo,weapon_reserveammo,weapon_dmg,weapon_headshot,weapon_accuracy,weapon_desc,weapon_hp)
    VALUES (OLD.id_weapon,OLD.id_chara,OLD.weapon_name,OLD.weapon_rpm,OLD.weapon_dps,OLD.weapon_maxammo,OLD.weapon_reserveammo,OLD.weapon_dmg,OLD.weapon_headshot,OLD.weapon_accuracy,OLD.weapon_desc,OLD.weapon_hp);
END//
DELIMITER ;
;



DROP TRIGGER IF EXISTS trg_bklg_chara;
DELIMITER //
CREATE TRIGGER trg_bklg_chara
BEFORE UPDATE ON as_chara 
FOR EACH ROW
BEGIN
    INSERT INTO backlog_chara(id_chara,chara_name,chara_hp,chara_ws,chara_rs,chara_primary,chara_secondary,chara_desc,chara_lore)
    VALUES (OLD.id_chara,OLD.chara_name,OLD.chara_hp,OLD.chara_ws,OLD.chara_rs,OLD.chara_primary,OLD.chara_secondary,OLD.chara_desc,OLD.chara_lore);
END//
DELIMITER ;
;



DROP TRIGGER IF EXISTS trg_bklg_map;
DELIMITER //
CREATE TRIGGER trg_bklg_map
BEFORE UPDATE ON as_map
FOR EACH ROW
BEGIN 
    INSERT INTO backlog_map(id_map, map_name, map_desc, map_image)
    VALUES (OLD.id_map, OLD.map_name, OLD.map_desc, OLD.map_image);
END//
DELIMITER ;
;



DROP TRIGGER IF EXISTS trg_bklg_teams;
DELIMITER //
CREATE TRIGGER trg_bklg_teams
BEFORE UPDATE ON as_teams
FOR EACH ROW 
BEGIN 
    INSERT INTO backlog_teams(id_asteam, team_name, team_player, team_image)
    VALUES (OLD.id_asteam, OLD.team_name, OLD.team_player, OLD.team_image);
END//
DELIMITER ;
;



DROP TRIGGER IF EXISTS trg_bklg_eventplayer;
DELIMITER //
CREATE TRIGGER trg_bklg_eventplayer
BEFORE DELETE ON eventplayer
FOR EACH ROW
BEGIN  
    INSERT INTO backlog_eventplayer (id_eventplayer, halloween_candy, halloween_coins, xmas_bulbs)
    VALUES (OLD.id_eventplayer, OLD.halloween_candy, OLD.halloween_candy, OLD.xmas_bulbs);
END//
DELIMITER ;
;

DROP TRIGGER IF EXISTS trg_bklg_halloweenpowers ;
DELIMITER //
CREATE TRIGGER trg_bklg_halloweenpowers
BEFORE UPDATE ON mc_halloweenpowers
FOR EACH ROW 
BEGIN
    INSERT INTO backlog_halloweenpowers (id_mchallpower, mchallpower_name, mchallpower_desc,mchallpower_owner)
    VALUES (OLD.id_mchallpower, OLD.mchallpower_name, OLD.mchallpower_desc, OLD.mchallpower_owner);
END//
DELIMITER ;
;

DROP TRIGGER IF EXISTS trg_bklg_comments;
DELIMITER //
CREATE TRIGGER trg_bklg_comments
BEFORE UPDATE ON user_comments
FOR EACH ROW
BEGIN 
    INSERT INTO backlog_comments(id_comment, id_user, comment_text, comment_location)
    VALUES (OLD.id_comment, OLD.id_user, OLD.comment_text, OLD.comment_location);
END//
DELIMITER ;
;

DROP TRIGGER IF EXISTS trg_bklg_tournament ;
DELIMITER //
CREATE TRIGGER trg_bklg_tournament
BEFORE UPDATE ON as_tournament
FOR EACH ROW
BEGIN 
    INSERT INTO backlog_tournament(bk_id_tournament, bktournament_map, bktournament_desc, bktournament_patch, bktournament_start, bktournament_end)
    VALUES (OLD.id_astournament, OLD.astournament_map, OLD.astournament_desc, OLD.astournament_patch, OLD.astournament_start, OLD.astournament_end);
END//
DELIMITER ;
;

DROP TRIGGER IF EXISTS trg_bklg_events ;
DELIMITER //
CREATE TRIGGER trg_bklg_events
BEFORE UPDATE ON mc_events
FOR EACH ROW
BEGIN 
    INSERT INTO backlog_events(id_mcevent, mcevent_name, mcevent_desc, mcevent_type, mcevent_start, mcevent_end)
    VALUES (OLD.id_mcevent, OLD.mcevent_name, OLD.mcevent_desc, OLD.mcevent_type, OLD.mcevent_start, OLD.mcevent_end);
END//
DELIMITER ;
;