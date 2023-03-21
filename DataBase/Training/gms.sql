CREATE TABLE students (
	stu_no INT(10) 
	,birth_date DATE NOT NULL
	,stu_name VARCHAR(30) NOT NULL
	,stu_addr VARCHAR(100) NOT NULL
	,stu_tel CHAR(11) NOT NULL
	,stu_gender ENUM('M','F') NOT NULL
	,adm_date DATE NOT NULL
	,gra_date DATE
	,stu_status ENUM('0','1','2','3') NOT NULL
	,PRIMARY KEY(stu_no)
);

CREATE TABLE professors (
	pro_no INT(10)
	,pro_name VARCHAR(30) NOT NULL
	,birth_date DATE NOT NULL
	,degree_no INT(10) NOT NULL
	,e_mail VARCHAR(30) NOT NULL
	,fac_rank VARCHAR(10) NOT NULL
	,lab_loca VARCHAR(30)
	,pro_gender ENUM('M','F') NOT NULL
	,hire_date DATE NOT NULL
	,PRIMARY KEY(pro_no)
);

CREATE TABLE books (
	book_no INT(10)
	,book_name VARCHAR(30) NOT NULL
	,PRIMARY KEY(book_no)
);

CREATE TABLE lectures (
	lec_no INT(10)
	,lec_name VARCHAR(30) NOT NULL
	,pro_no INT(10) NOT NULL
	,lec_limit INT(3) NOT NULL
	,lec_sem VARCHAR(10) NOT NULL
	,lec_loca VARCHAR(30) NOT NULL
	,start_time TIME NOT NULL
	,end_time TIME NOT NULL
	,book_no INT(10) NOT NULL
	,prerequisite ENUM('Y','N') NOT NULL
	,PRIMARY KEY(lec_no)
);

CREATE TABLE grades (
	lec_no INT(10)
	,stu_no INT(10)
	,lec_grade VARCHAR(3) NOT NULL
	,mas_degree VARCHAR(8) NOT NULL
	,comp_date DATE NOT NULL
	,PRIMARY KEY(lec_no, stu_no)
);