-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2019 at 07:16 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aquinas`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_programs`
--

CREATE TABLE `all_programs` (
  `program_id` int(11) NOT NULL,
  `program_code` varchar(10) NOT NULL,
  `program_name` varchar(100) NOT NULL,
  `program_objective` varchar(1000) NOT NULL,
  `program_requirements` varchar(500) NOT NULL,
  `program_qualifications` varchar(500) DEFAULT NULL,
  `program_duration` varchar(500) NOT NULL,
  `program_schedule` varchar(500) NOT NULL,
  `program_fees` varchar(500) DEFAULT NULL,
  `program_registration` varchar(500) DEFAULT NULL,
  `program_intake` varchar(500) DEFAULT NULL,
  `program_lecturer` varchar(500) DEFAULT NULL,
  `program_contact` varchar(1000) DEFAULT NULL,
  `program_category` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `all_programs`
--

INSERT INTO `all_programs` (`program_id`, `program_code`, `program_name`, `program_objective`, `program_requirements`, `program_qualifications`, `program_duration`, `program_schedule`, `program_fees`, `program_registration`, `program_intake`, `program_lecturer`, `program_contact`, `program_category`) VALUES
(1, 'D01', 'Bachelor of Science in Agro Industry Management B.Sc. (Hons.)', 'To provide the students with high quality industrial knowledge\r\n\r\nTo expose the students to Local as well as Global Technology', 'Age : Above 18 years', 'A Minimum of three passes at the Advanced Level Examination in the Biology Stream, Bio-System Technology, or else a full time Diploma in Agriculture from an institution registered under the Ministry of Agriculture.\r\n', 'Four years  (Full Time)', 'Tuesday to Saturday 8.30 a.m. to 4.30 p.m.\r\n\r\n(Lectures, Lab practicals and Farm practicals)', 'LKR. 650,000/=\r\n\r\n(A non refundable fee of LKR.80,000/- to be paid at the commencement of the Course and LKR.71,250/-  for each semester, thereafter)', 'From 1st October, every year.', 'End of January, every year (after A/L results)', 'Rev. Fr. Thusitha Solangaarachchi', NULL, 'DEGREE PROGRAMS'),
(2, 'D02', 'Bachelor of Science in Psychology & Counselling (B.Sc.)', 'To equip participants with more in-depth understanding of Psychology & Counselling Principles.\r\n\r\nTo enhance the effectiveness of participants’ practical skills and techniques through practical counselling sessions.\r\n\r\nCreating the opportunity to enter into the Government and Private sector that focus on promotion of personal and communal balanced living and in related fields.', 'G.C.E. (A/L) OR suitable Qualifications acceptable to the Faculty Board of Psychology & Counselling\r\n\r\nNeed to be successful at the selection interview\r\n\r\nGood command of English', 'Successful completion of the 1st year with a total of 60% for each  Subject', 'Three and a half years – (Six Semesters)\r\n\r\n(Applications are accepted from August up to November)\r\n\r\nCourse commences in January each year.', 'Weekend Programme\r\n\r\nSaturdays – 12.30 p.m. – 6.30 p.m. & Sundays – 9.00 a.m. – 4.30 p.m.', 'Rs. 375,000/= +Registration Fee', NULL, NULL, 'Rev. Fr. Prageeth Chamara', NULL, 'DEGREE PROGRAMS'),
(3, 'D03', 'Bachelor of Arts in Religious Studies (BA)', 'To safeguard and deepen one’s God gifted deposit of Faith\r\n\r\nTo study Sacred Theology in depth\r\n\r\nTo prepare zealous men & women in spreading the Gospel to all nations', 'Three Passes at the G.C.E. (A/L) examination in one sitting (local or London)\r\n\r\nand fair knowledge of the English language', NULL, 'Approximate Duration – Three years', 'Monday   & Friday   – 5.30 p.m. – 7.30 p.m.\r\n\r\nHoly Eucharist          – Saturday       8.00a.m.\r\n\r\nSaturday                    – 8.30 a.m. – 12.30 p.m. / 1.30 p.m. –  5.00 p.m.', 'Total Cost of B.A Degree  : –    Rs.  125,000/=   (Payable in Installments)\r\n\r\nCost of B.A Degree for Foreign students  : – 1200 USD', NULL, NULL, 'Rev. Fr. Prageeth Chamara Perera', NULL, 'DEGREE PROGRAMS'),
(4, 'D04', 'Bachelor of Arts in Humanities (B.A in General Arts)', 'To provide opportunities to a large number of Students who have excelled at the G.C.E. (A/L) examination but being deprived of pursuing their higher studies in state Universities.\r\n\r\nTo provide quality education at a reasonable cost in a nurturing environment, where both young and adult working students are given the opportunity of upgrading their careers in their selected fields of profession or in new areas with recognized, academic certification. Approved by the University Grants Commission, at Aquinas College of Higher Studies,\r\n\r\nwe are totally committed to offer courses which address the needs of the industries/employment market, and to prepare our students for a challenging employment and career development within the framework of a truly holistic education process.', 'Three passes at the A/L ( Local or London ) in one sitting in any stream', '– A special selection exam will be held for the applicants who wish to follow the Degree Program.\r\n\r\n– Applicants who wish to follow the Degree in English Medium are required to successfully pass the General English Test.\r\n\r\n– An English test (1  hour and 30 minutes duration) will be held for the applicants who wish to follow English literature as a Subject.', 'Minimum Three years (6 semesters)\r\n\r\n( Weekdays and Weekends )', '( Weekends )  Saturdays 8.00 a.m. – 6.00 p.m. / Sundays  8.00 a.m. – 6.00 p.m.\r\n\r\n( Weekdays )  Tuesday to Saturday 8.00 a.m. – 4.30 p.m.', 'Application Fee : LKR 1,000/-\r\n\r\nCourse Fee          : LKR 400,000/-  + Registration fee LKR 5,000/-\r\n\r\nPayable in semester based installment schemes\r\nStudent loan facility with Banks', NULL, NULL, 'Rev. Fr. Prageeth Chamara', NULL, 'DEGREE PROGRAMS'),
(5, 'D05', 'Bachelor of Education in English(Honours Degree)', 'To empower selected advanced level qualified youth and English teachers with a methodology in practice and theory of modern English language, teaching and English Literature.', '3 A/L passes in one sitting and English as a subject or\r\n3 A/L passes in one sitting and other qualifications relevant to the programme such as one year diploma in English (those who have completed Diploma in English or Diploma in Catholic Education and Teacher Training or Diploma in English Teacher Education which was conducted by the Aquinas College of Higher Studies or any other institution)\r\nSelection test and interview to test the suitability of the applicants for admission', NULL, 'Four year Honours degree (8 semesters)', 'Saturday 9.00 a.m. to 4.00 p.m.\r\n\r\nSunday 9.00 a.m. to 4.00 p.m.', NULL, 'From 6th July to 31st July, 2019\r\n\r\nApplication can be obtainable from the Aquinas College office, room No.18 on payment of LKR.500/=', '27th September 2019', 'Ms. Nelum Weerasuriya\r\n\r\nMs. Sharnelle Fernando', NULL, 'DEGREE PROGRAMS'),
(6, 'DIP01', 'Diploma in Animal Husbandry', 'Especially designed for senior and middle level executives in the Plantation and Agricultural sectors who desire towards corporate level development.', 'At least 2 passes for the G.C.E. (A/L) examination and experience in the fields of Agriculture/ Animal Husbandry', NULL, 'Two years (Course commences in May/June)', 'Sundays 10.00 a.m. – 3.00 p.m.', 'LKR.118,000 /- (inclusive of Registration fee)\r\n\r\n(Fees will not be refunded under any circumstances)', NULL, NULL, NULL, '0763598410, 2694014/15, 4616311, 4618689, 389115/22', 'DIPLOMA PROGRAMS'),
(7, 'DIP02', 'Diploma in Floriculture & Landscaping', 'To impart necessary technical knowledge for environmentalists and professionals and to those who have a liking for Gardening', 'Those who have faced the G.C.E. (A/L) examination and experience in this field (Course commences in June each year)', NULL, 'Two years', 'Sundays 9.00 a.m. – 3.00 p.m.', 'LKR.118,000/- (inclusive of Registration fee)\r\n\r\n(Fees will not be refunded under any circumstances)', NULL, NULL, NULL, '0763598410, 2694014/15, 4616311, 4618689, 389115/22', 'DIPLOMA PROGRAMS'),
(8, 'DIP03', 'Diploma in Food Science & Technology', 'To impart necessary technical skills for those interested in Food Science, and for those already engaged in the same field.', 'Should have two (2) passes at the G.C.E. (A/L) examination and  experience in the Food Science & Technology field.', NULL, 'Two years (Course commences in May/June each  year)', 'Sundays 10.00 a.m. – 3.00 p.m.', 'LKR.118,000/- (inclusive of Registration fee)\r\n\r\n(Fees will not be refunded under any circumstances)', NULL, NULL, NULL, '0763598410, 2694014/15, 4616311, 4618689, 389115/22', 'DIPLOMA PROGRAMS'),
(9, 'DIP04', 'Diploma in Agriculture Engineering', 'To impart the basic and technical knowledge in Agriculture for those who are interested and engaged in the relevant fields.', 'At least two passes of the G.C.E. (A/L) examination an experience in this field.', NULL, 'Two years', 'Sundays 10.00 a.m. – 3.00 p.m.', 'LKR.118,000 /- (inclusive of Registration fee)\r\n\r\n(Fees will not be refunded under any circumstances)', NULL, NULL, NULL, '0763598410, 2694014/15, 4616311, 4618689, 389115/22', 'DIPLOMA PROGRAMS'),
(10, 'DIP05', 'Diploma in English Teacher Education', 'To equip the students with a comprehensive understanding of theories and practices of teaching enabling them to be integrally involved in their profession.\r\n\r\nTo cultivate positive social information in the future leaders to work in public and private sectors, nationally as well as internationally.\r\n\r\nTo develop professionalism students that would satisfy the organizations.', 'Three subjects at the G.C.E. (A/L) examination with at least a credit pass for general English and G.C.E. (O/L) examination with a very good pass (B) or preferably a Distinction / “A” pass for English or\r\n\r\nA simple pass in English Literature at the G.C.E. (O/L) examination or Aquinas Diploma in English or any other acceptable qualification in English.\r\n\r\nPersons without three subjects at the G.C.E. (A/L) examination but with other qualifications mentioned in item 02 above may also apply.', NULL, 'Two years', 'Sundays 8.00 a.m. – 5.00 p.m.', 'LKR.65,000 /- (inclusive of Registration fee)\r\n\r\n(Fees will not be refunded under any circumstances)', NULL, NULL, NULL, '0763598410, 2694014/15, 4616311, 4618689, 389115/22', 'DIPLOMA PROGRAMS'),
(11, 'CER01', 'French for Beginners', 'Enable the individuals to improve the Knowledge of French Language and Civilization.', 'Passed the G.C.E (O/L) Examination', NULL, 'Six months', 'Saturdays 9.00 a.m. – 11.00 a.m.', 'LKR.16,500/- (inclusive of Registration fee)', NULL, NULL, NULL, '0763598410, 2694014/15, 4616311, 4618689, 389115/22', 'CERTIFICATE PROGRAMS'),
(12, 'CER02', 'Italian for Beginners', 'Enable the individuals to improve the Knowledge of Italian Language and Civilization.', 'Should have passed the G.C.E (O/L) Examination', NULL, 'Three Months', 'Tuesdays and Thursdays 5.00 p.m. – 7.00 p.m.', 'LKR.16, 500/- (Registration Fee)', NULL, NULL, NULL, '0763598410, 2694014/15, 4616311, 4618689, 389115/22;', 'CERTIFICATE PROGRAMS'),
(13, 'CER03', 'Spanish for Beginners', 'Enable the individuals to improve the Knowledge of Spanish Language and Civilization.', 'Passed the G.C.E (O/L) Examination', NULL, 'Three Months', 'Wednesdays and Fridays 5.30 p.m. – 7.30 p.m', 'LKR.16,500/- (Registration Fee)', NULL, NULL, NULL, '0763598410, 2694014/15, 4616311, 4618689, 389115/22;', 'CERTIFICATE PROGRAMS'),
(14, 'CER04', 'Certificate in Radio Production & Presenting', 'Today, the Media plays an important role in the activities of human persons. The entire working of technology is guided by the media activities. Until recently Radio, Cinema, TV and the Print media were considered the main areas of communications. But today, we have surpassed that era and we have entered the Digital and Cyber stage. Our main task in this area is to harmonize the present trends with new technology and to create a generation of modern media practitioners.\r\n\r\nOur Media Education Faculty is therefore geared to empower students who wish to obtain globally recognized status in media education in order to excel in their career.', 'Should have passed the G.C.E. (O/L) examination', NULL, 'Six Months', 'Saturdays and  Sundays 9.00 a.m.- 4.00 p.m.', 'LKR.27,000/- + Registration fee : LKR.3,000/-', NULL, NULL, NULL, '071-8371698, 071-5320555, 077-0353773', 'CERTIFICATE PROGRAMS'),
(15, 'CER05', 'Certificate in Logistics Service, Freight Forwarding & Multimodal Transport', 'This programme is designed and moderated by the Director of Merchant Shipping – Sri Lanka and is approved by the Ministry of Ports & Shipping. This certificate aims at providing candidates the fundamentals of transport, logistics, and supply chain along with practical skills required by such industries. This qualification has been made compulsory when applying for the license to work in the sea ports, locally and Internationally.', 'Passed the G.C.E. (A/L) examination and one year work experience', NULL, 'Five months', 'Sundays 8.00 a.m. – 12.00 noon', 'LKR.40,000/-\r\n\r\nRegistration Fee  LKR.1000/-', NULL, NULL, NULL, '011-7313666/ 011-3071098', 'CERTIFICATE PROGRAMS');

-- --------------------------------------------------------

--
-- Table structure for table `certificates`
--

CREATE TABLE `certificates` (
  `certificate_id` int(11) NOT NULL,
  `certificate_code` varchar(10) NOT NULL,
  `certificate_name` varchar(100) NOT NULL,
  `certificate_objectives` varchar(1000) NOT NULL,
  `certificate_requirements` varchar(1000) DEFAULT NULL,
  `certificate_duration` varchar(1000) DEFAULT NULL,
  `certificate_schedule` varchar(1000) DEFAULT NULL,
  `certificate_fees` varchar(1000) DEFAULT NULL,
  `certificate_contact` varchar(1000) DEFAULT NULL,
  `certificate_section` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `certificates`
--

INSERT INTO `certificates` (`certificate_id`, `certificate_code`, `certificate_name`, `certificate_objectives`, `certificate_requirements`, `certificate_duration`, `certificate_schedule`, `certificate_fees`, `certificate_contact`, `certificate_section`) VALUES
(1, 'CER01', 'French for Beginners', 'Enable the individuals to improve the Knowledge of French Language and Civilization.', 'Passed the G.C.E (O/L) Examination', 'Six months', 'Saturdays 9.00 a.m. – 11.00 a.m.', 'LKR.16,500/- (inclusive of Registration fee)', '0763598410, 2694014/15, 4616311, 4618689, 389115/22', 'CERTIFICATE PROGRAMS'),
(2, 'CER02', 'Italian for Beginners', 'Enable the individuals to improve the Knowledge of Italian Language and Civilization.', 'Should have passed the G.C.E (O/L) Examination', 'Three Months', 'Tuesdays and Thursdays 5.00 p.m. – 7.00 p.m.', 'LKR.16, 500/- (Registration Fee)', '0763598410, 2694014/15, 4616311, 4618689, 389115/22;', 'CERTIFICATE PROGRAMS'),
(3, 'CER03', 'Spanish for Beginners', 'Enable the individuals to improve the Knowledge of Spanish Language and Civilization.', 'Passed the G.C.E (O/L) Examination', 'Three Months', 'Wednesdays and Fridays 5.30 p.m. – 7.30 p.m', 'LKR.16,500/- (Registration Fee)', '0763598410, 2694014/15, 4616311, 4618689, 389115/22;', 'CERTIFICATE PROGRAMS'),
(4, 'CER04', 'Certificate in Radio Production & Presenting', 'Today, the Media plays an important role in the activities of human persons. The entire working of technology is guided by the media activities. Until recently Radio, Cinema, TV and the Print media were considered the main areas of communications. But today, we have surpassed that era and we have entered the Digital and Cyber stage. Our main task in this area is to harmonize the present trends with new technology and to create a generation of modern media practitioners.\r\n\r\nOur Media Education Faculty is therefore geared to empower students who wish to obtain globally recognized status in media education in order to excel in their career.', 'Should have passed the G.C.E. (O/L) examination', 'Six Months', 'Saturdays and  Sundays 9.00 a.m.- 4.00 p.m.', 'LKR.27,000/- + Registration fee : LKR.3,000/-', '071-8371698, 071-5320555, 077-0353773', 'CERTIFICATE PROGRAMS'),
(5, 'CER05', 'Certificate in Logistics Service, Freight Forwarding & Multimodal Transport', 'This programme is designed and moderated by the Director of Merchant Shipping – Sri Lanka and is approved by the Ministry of Ports & Shipping. This certificate aims at providing candidates the fundamentals of transport, logistics, and supply chain along with practical skills required by such industries. This qualification has been made compulsory when applying for the license to work in the sea ports, locally and Internationally.', 'Passed the G.C.E. (A/L) examination and one year work experience', 'Five months', 'Sundays 8.00 a.m. – 12.00 noon', 'LKR.40,000/-\r\n\r\nRegistration Fee  LKR.1000/-', '011-7313666/ 011-3071098', 'CERTIFICATE PROGRAMS');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `comment_subject` varchar(250) NOT NULL,
  `comment_text` text NOT NULL,
  `comment_status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comment_subject`, `comment_text`, `comment_status`) VALUES
(1, 'hi', 'hi', 1),
(2, 'Welcome', 'Added a course', 1),
(8, 'Hello World', 'Good Morning!', 1),
(9, 'About New Course', 'What is the enrollment key?', 1),
(10, 'Khema', 'HI', 1),
(11, 'Good Morning', 'Good Morning', 1),
(12, 'A', 'SV', 1),
(13, 'YY', 'YY', 1),
(14, 'chamu', 'yuyuy', 1),
(15, 'Khema', 'HI', 1),
(16, 'OOP', 'To know about 2nd lecture', 1);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `c_code` varchar(10) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `c_incharge` varchar(255) NOT NULL,
  `c_credits` int(11) NOT NULL,
  `ad_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `c_code`, `c_name`, `c_incharge`, `c_credits`, `ad_date`) VALUES
(27, 'it7879', 'ITSD', 'dilshan', 2, '2019-03-17'),
(35, 'it3034', 'SD', 'Janandhi', 2, '2019-03-17'),
(37, 'IT8920', 'Cyber Security', 'Chamodi', 1, '2019-05-02'),
(38, 'IT2525', 'Information Tech', 'Khema', 3, '2019-05-02'),
(39, 'IT2415', 'ITDB', 'Janandhi', 3, '2019-03-18'),
(43, 'IT2628', 'EFG', 'Chamodi', 2, '2019-03-19'),
(45, 'IT1723', 'UYT', 'Khema', 1, '2019-05-02'),
(46, 'IT3020', 'PAF', 'Janandhi', 4, '2019-04-01'),
(47, 'IT1010', 'OOP', 'Khema', 4, '2019-05-02');

-- --------------------------------------------------------

--
-- Table structure for table `degrees`
--

CREATE TABLE `degrees` (
  `degree_id` int(11) NOT NULL,
  `degree_code` varchar(10) NOT NULL,
  `degree_name` varchar(100) NOT NULL,
  `degree_objectives` varchar(1000) NOT NULL,
  `degree_requirements` varchar(500) DEFAULT NULL,
  `degree_qualifications` varchar(500) DEFAULT NULL,
  `degree_duration` varchar(500) DEFAULT NULL,
  `degree_schedule` varchar(500) DEFAULT NULL,
  `degree_fees` varchar(500) DEFAULT NULL,
  `degree_registration` varchar(500) DEFAULT NULL,
  `degree_intake` varchar(500) DEFAULT NULL,
  `degree_lecturer` varchar(100) DEFAULT NULL,
  `degree_section` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `degrees`
--

INSERT INTO `degrees` (`degree_id`, `degree_code`, `degree_name`, `degree_objectives`, `degree_requirements`, `degree_qualifications`, `degree_duration`, `degree_schedule`, `degree_fees`, `degree_registration`, `degree_intake`, `degree_lecturer`, `degree_section`) VALUES
(1, 'D01', 'Bachelor of Science in Agro Industry Management B.Sc. (Hons.)', 'To provide the students with high quality industrial knowledge\r\n\r\nTo expose the students to Local as well as Global Technology', 'Age : Above 18 years', 'A Minimum of three passes at the Advanced Level Examination in the Biology Stream, Bio-System Technology, or else a full time Diploma in Agriculture from an institution registered under the Ministry of Agriculture.\r\n\r\n', 'Four years  (Full Time)', 'Tuesday to Saturday 8.30 a.m. to 4.30 p.m.\r\n\r\n(Lectures, Lab practicals and Farm practicals)', 'LKR. 650,000/=\r\n\r\n(A non refundable fee of LKR.80,000/- to be paid at the commencement of the Course and LKR.71,250/-  for each semester, thereafter)', 'From 1st October, every year.', 'End of January, every year (after A/L results)', 'Rev. Fr. Thusitha Solangaarachchi', 'DEGREE PROGRAMS'),
(2, 'D02', 'Bachelor of Science in Psychology & Counselling (B.Sc.)', 'To equip participants with more in-depth understanding of Psychology & Counselling Principles.\r\n\r\nTo enhance the effectiveness of participants’ practical skills and techniques through practical counselling sessions.\r\n\r\nCreating the opportunity to enter into the Government and Private sector that focus on promotion of personal and communal balanced living and in related fields.', 'G.C.E. (A/L) OR suitable Qualifications acceptable to the Faculty Board of Psychology & Counselling\r\n\r\nNeed to be successful at the selection interview\r\n\r\nGood command of English', 'Successful completion of the 1st year with a total of 60% for each  Subject', 'Three and a half years – (Six Semesters)\r\n\r\n(Applications are accepted from August up to November)\r\n\r\nCourse commences in January each year.', 'Weekend Programme\r\n\r\nSaturdays – 12.30 p.m. – 6.30 p.m. & Sundays – 9.00 a.m. – 4.30 p.m.', 'Rs. 375,000/= +Registration Fee', NULL, NULL, 'Rev. Fr. Prageeth Chamara', 'DEGREE PROGRAMS'),
(3, 'D03', 'Bachelor of Arts in Religious Studies (BA)', 'To safeguard and deepen one’s God gifted deposit of Faith\r\n\r\nTo study Sacred Theology in depth\r\n\r\nTo prepare zealous men & women in spreading the Gospel to all nations', 'Three Passes at the G.C.E. (A/L) examination in one sitting (local or London)\r\n\r\nand fair knowledge of the English language', NULL, 'Approximate Duration – Three years', 'Monday   & Friday   – 5.30 p.m. – 7.30 p.m.\r\n\r\nHoly Eucharist          – Saturday       8.00a.m.\r\n\r\nSaturday                    – 8.30 a.m. – 12.30 p.m. / 1.30 p.m. –  5.00 p.m.', 'Total Cost of B.A Degree  : –    Rs.  125,000/=   (Payable in Installments)\r\n\r\nCost of B.A Degree for Foreign students  : – 1200 USD', NULL, NULL, 'Rev. Fr. Prageeth Chamara Perera', 'DEGREE PROGRAMS'),
(4, 'D04', 'Bachelor of Arts in Humanities (B.A in General Arts)', 'To provide opportunities to a large number of Students who have excelled at the G.C.E. (A/L) examination but being deprived of pursuing their higher studies in state Universities.\r\n\r\nTo provide quality education at a reasonable cost in a nurturing environment, where both young and adult working students are given the opportunity of upgrading their careers in their selected fields of profession or in new areas with recognized, academic certification. Approved by the University Grants Commission, at Aquinas College of Higher Studies,\r\n\r\nwe are totally committed to offer courses which address the needs of the industries/employment market, and to prepare our students for a challenging employment and career development within the framework of a truly holistic education process.', 'Three passes at the A/L ( Local or London ) in one sitting in any stream', '– A special selection exam will be held for the applicants who wish to follow the Degree Program.\r\n\r\n– Applicants who wish to follow the Degree in English Medium are required to successfully pass the General English Test.\r\n\r\n– An English test (1  hour and 30 minutes duration) will be held for the applicants who wish to follow English literature as a Subject.', 'Minimum Three years (6 semesters)\r\n\r\n( Weekdays and Weekends )', '( Weekends )  Saturdays 8.00 a.m. – 6.00 p.m. / Sundays  8.00 a.m. – 6.00 p.m.\r\n\r\n( Weekdays )  Tuesday to Saturday 8.00 a.m. – 4.30 p.m.', 'Application Fee : LKR 1,000/-\r\n\r\nCourse Fee          : LKR 400,000/-  + Registration fee LKR 5,000/-\r\n\r\nPayable in semester based installment schemes\r\nStudent loan facility with Banks', NULL, NULL, 'Rev. Fr. Prageeth Chamara', 'DEGREE PROGRAMS'),
(5, 'D05', 'Bachelor of Information Technology (BIT)', 'Produce qualified ICT professionals to cater to the demands of the IT industry.\r\n\r\nSet professional standards and encourage students to obtain skills in ICT.\r\n\r\nEnabling those who could not enter a university, to read for a degree in ICT due to severe competition in working towards obtaining a degree.', 'G.C.E. (A/L) (minimum 3S passes in any stream)\r\n\r\nInterview and a Placement Test', NULL, 'Three years', 'Saturdays & Sundays 8.00 a.m. – 4.00 p.m.\r\n\r\nTuesday to Friday 8.00 a.m. – 4.00 p.m.', 'Application Fee : LKR 1,000/-\r\n\r\nCourse Fee          : LKR 450,000/-  + Registration fee LKR 5,000/-', NULL, NULL, 'Mr. Nirosh Wanigasekara', 'DEGREE PROGRAMS'),
(6, 'D06', 'Bachelor of Education in English(Honours Degree)', 'To empower selected advanced level qualified youth and English teachers with a methodology in practice and theory of modern English language, teaching and English Literature.', '3 A/L passes in one sitting and English as a subject or\r\n3 A/L passes in one sitting and other qualifications relevant to the programme such as one year diploma in English (those who have completed Diploma in English or Diploma in Catholic Education and Teacher Training or Diploma in English Teacher Education which was conducted by the Aquinas College of Higher Studies or any other institution)\r\nSelection test and interview to test the suitability of the applicants for admission', NULL, 'Four year Honours degree (8 semesters)', 'Saturday 9.00 a.m. to 4.00 p.m.\r\n\r\nSunday 9.00 a.m. to 4.00 p.m.', NULL, 'From 6th July to 31st July, 2019\r\n\r\nApplication can be obtainable from the Aquinas College office, room No.18 on payment of LKR.500/=', '27th September 2019', 'Ms. Nelum Weerasuriya\r\n\r\nMs. Sharnelle Fernando', 'DEGREE PROGRAMS');

-- --------------------------------------------------------

--
-- Table structure for table `diplomas`
--

CREATE TABLE `diplomas` (
  `diploma_id` int(11) NOT NULL,
  `diploma_code` varchar(10) NOT NULL,
  `diploma_name` varchar(100) NOT NULL,
  `diploma_objectives` varchar(1000) NOT NULL,
  `diploma_requirements` varchar(1000) DEFAULT NULL,
  `diploma_duration` varchar(1000) DEFAULT NULL,
  `diploma_schedule` varchar(1000) DEFAULT NULL,
  `diploma_fees` varchar(1000) DEFAULT NULL,
  `diploma_contact` varchar(1000) DEFAULT NULL,
  `diploma_section` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diplomas`
--

INSERT INTO `diplomas` (`diploma_id`, `diploma_code`, `diploma_name`, `diploma_objectives`, `diploma_requirements`, `diploma_duration`, `diploma_schedule`, `diploma_fees`, `diploma_contact`, `diploma_section`) VALUES
(1, 'DIP01', 'Diploma in Animal Husbandry', 'Especially designed for senior and middle level executives in the Plantation and Agricultural sectors who desire towards corporate level development.', 'At least 2 passes for the G.C.E. (A/L) examination and experience in the fields of Agriculture/ Animal Husbandry', 'Two years (Course commences in May/June)', 'Sundays 10.00 a.m. – 3.00 p.m.', 'LKR.118,000 /- (inclusive of Registration fee)\r\n\r\n(Fees will not be refunded under any circumstances)', '0763598410, 2694014/15, 4616311, 4618689, 389115/22', 'DIPLOMA PROGRAMS'),
(2, 'DIP02', 'Diploma in Floriculture & Landscaping', 'To impart necessary technical knowledge for environmentalists and professionals and to those who have a liking for Gardening', 'Those who have faced the G.C.E. (A/L) examination and experience in this field (Course commences in June each year)', 'Two years', 'Sundays 9.00 a.m. – 3.00 p.m.', 'LKR.118,000/- (inclusive of Registration fee)\r\n\r\n(Fees will not be refunded under any circumstances)', '0763598410, 2694014/15, 4616311, 4618689, 389115/22', 'DIPLOMA PROGRAMS'),
(3, 'DIP03', 'Diploma in Food Science & Technology', 'To impart necessary technical skills for those interested in Food Science, and for those already engaged in the same field.', 'Should have two (2) passes at the G.C.E. (A/L) examination and  experience in the Food Science & Technology field.', 'Two years (Course commences in May/June each  year)', 'Sundays 10.00 a.m. – 3.00 p.m.', 'LKR.118,000/- (inclusive of Registration fee)\r\n\r\n(Fees will not be refunded under any circumstances)', '0763598410, 2694014/15, 4616311, 4618689, 389115/22', 'DIPLOMA PROGRAMS'),
(4, 'DIP04', 'Diploma in Agriculture Engineering', 'To impart the basic and technical knowledge in Agriculture for those who are interested and engaged in the relevant fields.', 'At least two passes of the G.C.E. (A/L) examination an experience in this field.', 'Two years', 'Sundays 10.00 a.m. – 3.00 p.m.', 'LKR.118,000 /- (inclusive of Registration fee)\r\n\r\n(Fees will not be refunded under any circumstances)', '0763598410, 2694014/15, 4616311, 4618689, 389115/22', 'DIPLOMA PROGRAMS'),
(5, 'DIP05', 'Diploma in English Teacher Education', 'To equip the students with a comprehensive understanding of theories and practices of teaching enabling them to be integrally involved in their profession.\r\n\r\nTo cultivate positive social information in the future leaders to work in public and private sectors, nationally as well as internationally.\r\n\r\nTo develop professionalism students that would satisfy the organizations.', 'Three subjects at the G.C.E. (A/L) examination with at least a credit pass for general English and G.C.E. (O/L) examination with a very good pass (B) or preferably a Distinction / “A” pass for English or\r\n\r\nA simple pass in English Literature at the G.C.E. (O/L) examination or Aquinas Diploma in English or any other acceptable qualification in English.\r\n\r\nPersons without three subjects at the G.C.E. (A/L) examination but with other qualifications mentioned in item 02 above may also apply.\r\n\r\nCandidates are expected to pass the interview and the selection test prior to their admission', 'Two years', 'Sundays 8.00 a.m. – 5.00 p.m.', 'LKR.65,000 /- (inclusive of Registration fee)\r\n\r\n(Fees will not be refunded under any circumstances)', '0763598410, 2694014/15, 4616311, 4618689, 389115/22', 'DIPLOMA PROGRAMS');

-- --------------------------------------------------------

--
-- Table structure for table `enrolled_courses`
--

CREATE TABLE `enrolled_courses` (
  `en_id` int(11) NOT NULL,
  `st_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `c_code` varchar(10) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `user_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enrolled_courses`
--

INSERT INTO `enrolled_courses` (`en_id`, `st_id`, `c_id`, `c_code`, `c_name`, `user_name`) VALUES
(1, 2, 3, 'ds', 'ds', 'ds'),
(2, 3, 4, 'fd', 'fd', 'fd'),
(95, 18, 39, 'IT2415', 'ITDB', 'Chamu97'),
(99, 1, 27, 'it7879', 'ITSD', 'dinukakulatunga'),
(102, 18, 43, 'IT2628', 'EFG', 'Chamu97'),
(103, 18, 27, 'it7879', 'ITSD', 'Chamu97'),
(104, 1, 35, 'it3034', 'SD', 'dinukakulatunga'),
(105, 1, 39, 'IT2415', 'ITDB', 'dinukakulatunga');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `comment`, `name`, `course`) VALUES
(2, 'About OOP Lecture 2', 'Chamu97', 'ITSD'),
(3, 'About SD Assignment', 'Chamu97', 'SD'),
(6, 'Unable to download Lecture 1', 'Chamu97', 'SD'),
(7, 'Unable to download Assignment\r\n', 'Chamu97', 'SD'),
(18, 'To know About Lecture 2', 'Modi96', 'SD'),
(19, 'lol', 'dinukakulatunga', '<br />\r\n<b>Notice</b>:  Undefined variable: ecourse in <b>C:xampphtdocsITPMmaterials.php</b> on line <b>416</b><br />\r\n'),
(28, 'ddd', 'Chamu97', '<br />\r\n<b>Notice</b>:  Undefined variable: ecourse in <b>C:xampphtdocsITPMmaterials.php</b> on line <b>417</b><br />\r\n'),
(29, 'ss', 'Chamu97', 'Cyber Security'),
(30, 'kk', 'Chamu97', '<br />\r\n<b>Notice</b>:  Undefined variable: ecourse in <b>C:xampphtdocsITPMmaterials.php</b> on line <b>417</b><br />\r\n'),
(31, 'hi', 'Chamu97', 'ITDB'),
(32, 'HI', 'Chamu97', 'EFG'),
(33, 'hello', 'Chamu97', 'ITDB');

-- --------------------------------------------------------

--
-- Table structure for table `materials`
--

CREATE TABLE `materials` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `module` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `materials`
--

INSERT INTO `materials` (`id`, `name`, `module`) VALUES
(1, 'dinuka', 'kulathunga'),
(2, 'sad', 'das'),
(3, 'sad', 'das');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(11) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `messageNote` varchar(255) NOT NULL,
  `datet` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `subject`, `messageNote`, `datet`) VALUES
(6, 'notice', 'Participate for the lectures', '2019-03-18'),
(7, 'notice', 'Today is a holiday for all the students \r\n', '2019-03-18'),
(23, 'welcome', 'All the students are need to participated ', '2019-03-19'),
(24, 'About Examinations', 'All the Examinations are postponed due to the unstable status of the country.', '2019-05-02');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `subject`, `message`, `status`) VALUES
(1, 'ISM', 'IT2525', 1),
(2, 'ITDB', 'IT2415', 1),
(3, 'Probability and Staticstic', 'IT1997', 1),
(4, 'EFG', 'IT2628', 1),
(5, 'dfgfg', 'IT1536', 1),
(6, 'UYT', 'IT1723', 1),
(7, 'PAF', 'IT3020', 1),
(8, 'OOP', 'IT1010', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(10) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(25) NOT NULL,
  `phone` char(10) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `fname`, `lname`, `username`, `email`, `phone`, `password`) VALUES
(18, 'Janandhi', 'Chamudika', 'Chamu97', 'majchemachandra@gmail.com', '0776709727', 'b9d6c5bd784b3809d115ee2854113e51'),
(21, 'Khema', 'Jayasena', 'Modi96', 'upsalajayasena@gmail.com', '0771234569', '5dec5b41849c5f5858d81a2022781e45');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_asses`
--

CREATE TABLE `tbl_asses` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `file` varchar(250) DEFAULT NULL,
  `course` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_asses`
--

INSERT INTO `tbl_asses` (`id`, `name`, `file`, `course`) VALUES
(5, 'assignment5', 'KhemaJayasena.docx', 'ITSD'),
(7, 'lecture6', 'Point of Sales System .docx', 'PAF'),
(9, 'Journal', 'Doc1.docx', 'ITSD'),
(10, 'Lecture 1', 'Workload Allocation.docx', 'SD'),
(11, 'Assignment1', 'Product and Sprint Backlog.docx', 'Cyber Security'),
(12, 'erqaf', 'Parts of Speech.docx', 'ITDB'),
(13, 'Assignment', 'Open Book Note.docx', 'OOP');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_books`
--

CREATE TABLE `tbl_books` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(250) NOT NULL,
  `course` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_books`
--

INSERT INTO `tbl_books` (`id`, `name`, `image`, `course`) VALUES
(34, 'Lecture 8', 'IT17076326_Lab_2.pdf', 'Information Tech'),
(36, 'lecture11', 'IT3020-Database Systems.pdf', 'Information Tech'),
(37, 'Lecture5', 'Project Spec_Learning Management System.pdf', 'SD'),
(39, 'IT', 'lec 7 - Threads.pdf', 'Information Tech'),
(40, 'lol2', 'DB3_Prac07_n.pdf', 'SD'),
(42, 'qwe1', 'IT2020.pdf', 'ITDB');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_file`
--

CREATE TABLE `tbl_file` (
  `id` int(11) NOT NULL,
  `name` varchar(12) NOT NULL,
  `image` varchar(250) NOT NULL,
  `course` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_file`
--

INSERT INTO `tbl_file` (`id`, `name`, `image`, `course`) VALUES
(32, 'Lecture 2', 'cn labs answers.pdf', 'SD'),
(34, 'Lecture 8', 'IT17076326_Lab_2.pdf', 'Information Tech'),
(36, 'lecture11', 'IT3020-Database Systems.pdf', 'Information Tech'),
(37, 'Lecture5', 'Project Spec_Learning Management System.pdf', 'SD'),
(38, 'Lecture 1', 'lec 1 - Introduction to Java.pdf', 'OOP');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_papers`
--

CREATE TABLE `tbl_papers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `file` varchar(250) DEFAULT NULL,
  `course` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_papers`
--

INSERT INTO `tbl_papers` (`id`, `name`, `file`, `course`) VALUES
(15, 'lol22', 'github report.zip', 'SD'),
(17, 'qwe11', 'Dinuka Kulathunga CV.zip', 'ITDB'),
(19, 'qwe23', 'spring dependency.zip', 'ITDB'),
(20, 'uoip', 'squid steps.zip', 'ITDB');

-- --------------------------------------------------------

--
-- Table structure for table `timer`
--

CREATE TABLE `timer` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `h` int(50) NOT NULL,
  `m` int(50) NOT NULL,
  `s` int(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timer`
--

INSERT INTO `timer` (`id`, `date`, `h`, `m`, `s`, `name`, `course`) VALUES
(1, '2019-05-21', 1, 1, 2, '', ''),
(2, '2019-05-22', 2, 3, 4, '', ''),
(3, '2019-05-29', 5, 3, 4, '', ''),
(5, '2019-05-27', 5, 2, 2, 'assignment5', 'ITSD'),
(6, '2019-04-09', 8, 3, 4, 'Assignment1', 'Cyber Security'),
(7, '2019-04-09', 7, 3, 4, 'lecture6', 'PAF'),
(9, '2019-04-04', 2, 1, 2, 'Journal', 'ITSD'),
(10, '2019-04-18', 4, 3, 1, 'Lecture 1', 'SD'),
(11, '2019-04-18', 4, 5, 6, 'Assignment 1', 'Cyber Security');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `email`, `phone`, `password`, `role`) VALUES
(1, 'Administrator', 'admin', 'itpm765@gmail.com', '0112345678', '21232f297a57a5a743894a0e4a801fc3', 0),
(3, 'Chamodi', 'Rangani', 'chamodirangani@gmail.com', '0776589865', '12dbebb1b572aacc9a5bda1d05862c5a', 1),
(9, 'Janandhi', 'Chamudika', 'majchemachandra@gmail.com', '0776709726', 'b9d6c5bd784b3809d115ee2854113e51', 1),
(12, 'rangani', 'perera', 'rangani@gmail.com', '0711234567', '857287b4d29a082ef586b2026b051dda', 1),
(13, 'umindu', 'pasan', 'umindup@gmail.com', '0785130134', '01a9ed401074595caa616624ea4f4c39', 1),
(14, 'Khema', 'Upsala', 'upsalamodi@gmail.com', '0778962531', '5dec5b41849c5f5858d81a2022781e45', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_programs`
--
ALTER TABLE `all_programs`
  ADD PRIMARY KEY (`program_id`);

--
-- Indexes for table `certificates`
--
ALTER TABLE `certificates`
  ADD PRIMARY KEY (`certificate_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `degrees`
--
ALTER TABLE `degrees`
  ADD PRIMARY KEY (`degree_id`);

--
-- Indexes for table `diplomas`
--
ALTER TABLE `diplomas`
  ADD PRIMARY KEY (`diploma_id`);

--
-- Indexes for table `enrolled_courses`
--
ALTER TABLE `enrolled_courses`
  ADD PRIMARY KEY (`en_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `materials`
--
ALTER TABLE `materials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_asses`
--
ALTER TABLE `tbl_asses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_books`
--
ALTER TABLE `tbl_books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_file`
--
ALTER TABLE `tbl_file`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_papers`
--
ALTER TABLE `tbl_papers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timer`
--
ALTER TABLE `timer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `all_programs`
--
ALTER TABLE `all_programs`
  MODIFY `program_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `certificates`
--
ALTER TABLE `certificates`
  MODIFY `certificate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `degrees`
--
ALTER TABLE `degrees`
  MODIFY `degree_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `diplomas`
--
ALTER TABLE `diplomas`
  MODIFY `diploma_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `enrolled_courses`
--
ALTER TABLE `enrolled_courses`
  MODIFY `en_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `materials`
--
ALTER TABLE `materials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_asses`
--
ALTER TABLE `tbl_asses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_books`
--
ALTER TABLE `tbl_books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `tbl_file`
--
ALTER TABLE `tbl_file`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `tbl_papers`
--
ALTER TABLE `tbl_papers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `timer`
--
ALTER TABLE `timer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
