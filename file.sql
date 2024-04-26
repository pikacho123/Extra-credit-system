drop table report;
drop table teacher;
drop table course;
drop table student; 
create table student(
	stud_name varchar(100) NOT NULL,
	stud_roll_no int PRIMARY KEY ,
	stud_dob date NOT NULL,
	stud_gender varchar(20) NOT NULL,
	stud_mob_no bigint NOT NULL,
	stud_email varchar(100) NOT NULL,
	stud_acadyear int NOT NULL,
	stud_dept varchar(100) NOT NULL,
	stud_course_select varchar(100),
	stud_uid int UNIQUE,
	stud_pass varchar(100) NOT NULL,
	stud_doc_uploaded bytea,
	status VARCHAR(10) DEFAULT 'pending',
	stud_cred_earned_prev int
);

create table course(
	course_name varchar(100) NOT NULL,
	course_id int PRIMARY KEY,
	max_credits int NOT NULL,
	course_fees int 
);

create table teacher(
	teach_name varchar(100) NOT NULL,
	teach_empid int PRIMARY KEY ,
	teach_pass varchar(100),
	teach_mob_no bigint NOT NULL,
	teach_email varchar(100) NOT NULL,
	teach_dept varchar(100) NOT NULL
);
INSERT INTO teacher(teach_name, teach_empid, teach_pass, teach_mob_no, teach_email, teach_dept) 
VALUES

('teacher', 123, 'teacher', 1234567,'abc@gmail.com', 'CS');

create table report(
	stud_roll_no int, FOREIGN KEY(stud_roll_no) references student(stud_roll_no), 
	teach_empid int, FOREIGN KEY(teach_empid) references teacher(teach_empid),
	course_id int, FOREIGN KEY(course_id) references course(course_id),
	course_name varchar(100) NOT NULL,
	cred_earned int,
	status varchar(100) NOT NULL
	
);
SELECT r.stud_roll_no, r.teach_empid, r.course_id, c.course_name, r.cred_earned, r.status
FROM report r
JOIN course c ON r.course_id = c.course_id
JOIN student s ON r.stud_roll_no = s.stud_roll_no
JOIN teacher t ON r.teach_empid = t.teach_empid;



