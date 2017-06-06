DROP FUNCTION IF EXISTS addSpecialty;

DELIMITER |
CREATE FUNCTION addSpecialty (user INT, specialty INT)
RETURNS INT
BEGIN
  IF (SELECT COUNT(*) FROM user_specialty WHERE user_specialty.user_id=user) < 3 THEN
    INSERT INTO user_specialty(user_id, specialty_id) VALUES(user, specialty);
    RETURN 1;
  ELSE
    RETURN 0;
  END IF;
END |
DELIMITER ;

''' Formations pas plus de trois possibilités '''

DROP FUNCTION IF EXISTS pasPlusDeTroisFormations;

DELIMITER |
CREATE FUNCTION pasPlusDeTroisFormations (formation INT, specialite INT)
RETURNS INT
BEGIN
  IF (SELECT COUNT(*) FROM convenir c WHERE c.formation_id=formation) < 3 THEN
    INSERT INTO convenir(formation_id, specialty_id) VALUES(formation, specialite);
    RETURN 1;
  ELSE
    RETURN 0;
  END IF;
END |
DELIMITER ;
