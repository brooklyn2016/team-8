DELIMITER //
CREATE PROCEDURE user_videos(IN user VARCHAR(255))
BEGIN
	SELECT * 
	FROM Videos 
	WHERE email = user;
END//

DELIMITER //
CREATE PROCEDURE user_profile(IN user VARCHAR(255))
BEGIN
	SELECT Users.name, Users.picture, Videos.file
	FROM Videos LEFT JOIN Users ON Users.email = Videos.email
	WHERE Users.email = user;
END//


CREATE PROCEDURE get_top_tags()
BEGIN
	SELECT Tags.name
	FROM Tags, (
		SELECT DISTINCT tag_id, COUNT(tag_id) AS frequency
		FROM Video_Tag_Detail
		GROUP BY tag_id
		ORDER BY frequency DESC
		LIMIT 5) AS Tops
	WHERE Tags.tag_id = Tops.tag_id;
END //


