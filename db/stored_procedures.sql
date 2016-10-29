DELIMITER //

CREATE PROCEDURE user_videos(IN user VARCHAR(255))
BEGIN
	SELECT * 
	FROM Videos 
	WHERE email = user;
END //

CREATE PROCEDURE get_top_tags()
BEGIN
	SELECT Tags(name)
	FROM Tags, (
		SELECT DISTINCT tag_id, COUNT(tag_id) AS frequency
		FROM Video_Tag_Detail
		GROUP BY tag_id
		ORDER BY frequency DESC
		LIMIT 5;
		)
	WHERE Tags(tag_id) = Video_Tag_Detail(tag_id);
END //

DELIMITER ;


