CREATE DATABASE Beehive;

CREATE TABLE Videos (
	video_id INT NOT NULL AUTO_INCREMENT,
	name VARCHAR (255) NOT NULL,
	file VARCHAR (255) NOT NULL,
	email VARCHAR (255) NOT NULL,
	vid_length TIME,
	explicit BOOLEAN,
	upload_time TIME,
	description VARCHAR (255),
	PRIMARY KEY (video_id)
);

CREATE TABLE Users (
	email VARCHAR (255) NOT NULL,
	password VARCHAR (255) NOT NULL,
	name VARCHAR (255),
	PRIMARY KEY (email)
);

CREATE TABLE Tags (
	tag_id INT NOT NULL AUTO_INCREMENT,
	name VARCHAR (255) NOT NULL,
	subdivision VARCHAR (255),
	PRIMARY KEY (tag_id)
);

CREATE TABLE Video_Tag_Detail (
	tag_id INT NOT NULL,
	video_id INT NOT NULL,
	CONSTRAINT pk_Video_Tag_Detail PRIMARY KEY (tag_id, video_id)
);

ALTER TABLE Videos ADD CONSTRAINT fk_email FOREIGN KEY (email) REFERENCES Users(email);
ALTER TABLE Video_Tag_Detail ADD CONSTRAINT fk_video_id FOREIGN KEY (video_id) REFERENCES Videos(video_id);
ALTER TABLE Video_Tag_Detail ADD CONSTRAINT fk_tag_id FOREIGN KEY (tag_id) REFERENCES Tags(tag_id);
ALTER TABLE Users ADD picture VARCHAR(255) DEFAULT"http://placehold.it/140x140";
ALTER TABLE Users DROP COLUMN picture;

INSERT INTO Videos VALUES(1, "test_video", "https://media.tenor.co/images/8fbda6a13aee444e0397f07541d1f98e/raw", "test_user@example.com", 00, FALSE, 02, "Doge"); 