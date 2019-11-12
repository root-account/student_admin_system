<?php


//registrations
$num_student = mysqli_num_rows($con->query("SELECT * FROM student_info"));
$num_student_com = mysqli_num_rows($con->query("SELECT * FROM student_info WHERE status >= 3"));
$num_student_incom = mysqli_num_rows($con->query("SELECT * FROM student_info WHERE status < 3"));



//registrations per programe
$num_upgrading = mysqli_num_rows($con->query("SELECT * FROM student_info WHERE programme = 1"));
$num_ammended = mysqli_num_rows($con->query("SELECT * FROM student_info WHERE programme = 2"));
$num_enrich = mysqli_num_rows($con->query("SELECT * FROM student_info WHERE programme = 3"));

//registrations per campus
$num_mahwelereng = mysqli_num_rows($con->query("SELECT * FROM student_info WHERE campus = 1"));
$num_mapela = mysqli_num_rows($con->query("SELECT * FROM student_info WHERE campus = 2"));

//registrations per grade
$num_8 = mysqli_num_rows($con->query("SELECT * FROM student_info WHERE grade = 8"));
$num_9 = mysqli_num_rows($con->query("SELECT * FROM student_info WHERE grade = 9"));
$num_10 = mysqli_num_rows($con->query("SELECT * FROM student_info WHERE grade = 10"));
$num_11 = mysqli_num_rows($con->query("SELECT * FROM student_info WHERE grade = 11"));
$num_12 = mysqli_num_rows($con->query("SELECT * FROM student_info WHERE grade = 12"));

//registrations per subject
$num_math = mysqli_num_rows($con->query("SELECT * FROM registered_subj WHERE subj_name = 'Mathematics'"));
$num_pysc = mysqli_num_rows($con->query("SELECT * FROM registered_subj WHERE subj_name = 'Physical Science'"));
$num_geo = mysqli_num_rows($con->query("SELECT * FROM registered_subj WHERE subj_name = 'Geography'"));
$num_mathlit = mysqli_num_rows($con->query("SELECT * FROM registered_subj WHERE subj_name = 'Maths Literacy'"));
$num_lfsc = mysqli_num_rows($con->query("SELECT * FROM registered_subj WHERE subj_name = 'Life Science'"));
$num_acc = mysqli_num_rows($con->query("SELECT * FROM registered_subj WHERE subj_name = 'Accounting'"));
$num_busst = mysqli_num_rows($con->query("SELECT * FROM registered_subj WHERE subj_name = 'Business Studies'"));
$num_econ = mysqli_num_rows($con->query("SELECT * FROM registered_subj WHERE subj_name = 'Economics'"));
$num_eng = mysqli_num_rows($con->query("SELECT * FROM registered_subj WHERE subj_name = 'English'"));
$num_tour = mysqli_num_rows($con->query("SELECT * FROM registered_subj WHERE subj_name = 'Tourism'"));
$num_agsc = mysqli_num_rows($con->query("SELECT * FROM registered_subj WHERE subj_name = 'Agricultural Science'"));


?>