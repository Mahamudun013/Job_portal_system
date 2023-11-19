-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2019 at 09:33 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job_site`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `id` int(11) NOT NULL,
  `adminName` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`id`, `adminName`, `password`) VALUES
(2, 'jobsite_mukut_013', 'jobsitemukut013');

-- --------------------------------------------------------

--
-- Table structure for table `all_jobs`
--

CREATE TABLE `all_jobs` (
  `all_jobs_id` int(11) NOT NULL,
  `position_name` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `job_category` varchar(255) DEFAULT NULL,
  `vacancy` int(11) NOT NULL,
  `job_responsibility` text NOT NULL,
  `job_nature` varchar(255) NOT NULL,
  `job_requirments` text NOT NULL,
  `educational_requirements` varchar(255) DEFAULT NULL,
  `experience_requirement` varchar(255) DEFAULT NULL,
  `last_date_of_apply` date NOT NULL,
  `job_location` varchar(255) NOT NULL,
  `salary_rang` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `all_jobs`
--

INSERT INTO `all_jobs` (`all_jobs_id`, `position_name`, `company_name`, `job_category`, `vacancy`, `job_responsibility`, `job_nature`, `job_requirments`, `educational_requirements`, `experience_requirement`, `last_date_of_apply`, `job_location`, `salary_rang`) VALUES
(21, 'Software Engineer', 'SoftIT', 'IT', 1, '&lt;ul style=&quot;box-sizing: border-box; margin: 0px 0px 0px 40px; padding: 0px; color: #333333; font-family: Arial, Helvetica, sans-serif, solaimanlipi;&quot;&gt;\r\n&lt;li style=&quot;box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;&quot;&gt;Excellent Analytical, Algorithm and problem solving skills.&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;&quot;&gt;Must have experience on Mobile Application.&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;&quot;&gt;Must be a very good team player and ability to work multiple projects at a time.&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;&quot;&gt;Must be able to handle serious projects and work under tight deadline.&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;&quot;&gt;Clear understanding of well structure and optimized coding standards.&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;&quot;&gt;Must have fair knowledge, understanding and experience in OOP, MVC, Object Oriented PHP, MySQL, SQL.&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;&quot;&gt;Strong knowledge in BRD, SRS, ER Diagram, Use Case Diagram&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;&quot;&gt;Must have experience on css2 &amp;amp; css3 (grid system, media queries and animations etc.)&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;&quot;&gt;Must have experience on JAVASCRIPT.&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;&quot;&gt;Must have experience on jQuery.&lt;/li&gt;\r\n&lt;/ul&gt;', 'Full time', '&lt;ul style=&quot;box-sizing: border-box; margin: 0px 0px 0px 40px; padding: 0px; color: #333333; font-family: Arial, Helvetica, sans-serif, solaimanlipi;&quot;&gt;\r\n&lt;li class=&quot;age&quot; style=&quot;box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;&quot;&gt;Age 28 to 45 year(s)&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;&quot;&gt;Must have a minimum of 03 years of working experience.&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;&quot;&gt;Create website layout/user interface by using standard HTML/ CSS practices and or appropriate framework.&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;&quot;&gt;Gather and refine specifications and requirements based on technical needs.&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;&quot;&gt;Create and maintain software documentation.&lt;/li&gt;\r\n&lt;/ul&gt;', 'B.Sc/M.Sc from Computer Science &amp; Engineering (or equivalent) from any reputed university.', '3 to 5 year(s)', '2017-12-30', 'Dhaka', '30k-35k'),
(23, 'Manager', 'Brac Bank', 'Bank', 1, '&lt;ul style=&quot;box-sizing: border-box; margin: 0px 0px 0px 40px; padding: 0px; color: #333333; font-family: Arial, Helvetica, sans-serif, solaimanlipi;&quot;&gt;Selected candidates will be placed in various departments (e.g. Portfolio Management, Business Development, Sales, Investment, Operation, Research) of the Company, which suit them. Candidates will be responsible to accomplish the assigned jobs of their respective departments.&lt;/ul&gt;', '', '&lt;ul style=&quot;box-sizing: border-box; margin: 0px 0px 0px 40px; padding: 0px; color: #333333; font-family: Arial, Helvetica, sans-serif, solaimanlipi;&quot;&gt;\r\n&lt;li style=&quot;box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;&quot;&gt;Minimum 5 (five) years in relevant field&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;&quot;&gt;Capable of working independently and leading an unit/department&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;&quot;&gt;Excellent skill in Microsoft Office&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;&quot;&gt;Excellent analytical ability and problem solving capability&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;&quot;&gt;Excellent communication and presentation skills&lt;/li&gt;\r\n&lt;/ul&gt;', 'BBA/MBA (with major in Finance, Banking, Accounting, Marketing) from public or private university', 'At least 5 year(s)', '2017-12-16', 'Dhaka', '40k-50k'),
(27, 'Software Engineer', 'BanglaIT', 'IT', 3, '&lt;ul style=&quot;box-sizing: border-box; margin: 0px 0px 0px 40px; padding: 0px; color: #333333; font-family: Arial, Helvetica, sans-serif, solaimanlipi;&quot;&gt;\r\n&lt;li style=&quot;box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;&quot;&gt;Web application or eCommerce solution or website development using PHP, Magento, OpenCart, WP or Laravel.&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;&quot;&gt;Coding, Analysis, Designing, Bug fixing, and Testing.&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;&quot;&gt;Dealing customers queries, problem &amp;amp; issues.&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;&quot;&gt;Developing and design eCommerce, Web applications &amp;amp; Mobile apps.&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;&quot;&gt;Designing website, application UI, Graphics etc&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;&quot;&gt;Performing SEO optimization, SEO audit &amp;amp; Performance audit.&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;&quot;&gt;Writing Spec, WBS and different Diagrams.&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;&quot;&gt;Studying manuals, SRS and technical reports to develop Apps &amp;amp; Sites.&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;&quot;&gt;Manage code using CVS, SVN or Git.&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;&quot;&gt;Interviews clients to help them clarify goals.&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;&quot;&gt;Meet deadline.&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;&quot;&gt;Adapt new technology quickly.&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;&quot;&gt;Working in shifting duty in Day or Night if assigned.&lt;/li&gt;\r\n&lt;/ul&gt;', 'Full time', '&lt;ul style=&quot;box-sizing: border-box; margin: 0px 0px 0px 40px; padding: 0px; color: #333333; font-family: Arial, Helvetica, sans-serif, solaimanlipi;&quot;&gt;\r\n&lt;li style=&quot;box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;&quot;&gt;Development with either Magento 2, WordPress, OpenCart, AngularJS , SQL, JSON, XML, PHP, ASP, JS, jQuery. AJAX, CSS, or Bootstrap.&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;&quot;&gt;Good team player, quality work in deadline, Unit testing, UAT&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;&quot;&gt;Mobile Application Developer with Ionic Framework and Cordova experience can apply.&lt;/li&gt;\r\n&lt;/ul&gt;', 'Graduation in CSE is preferred.', '3 to 5 year(s)', '2018-01-04', 'Anywhere in Bangladesh', 'Negotiable'),
(28, 'Civil Engneering', 'Basic Builders', 'Engineering', 3, '&lt;ul style=&quot;box-sizing: border-box; margin: 0px 0px 0px 40px; padding: 0px; color: #333333; font-family: Arial, Helvetica, sans-serif, solaimanlipi;&quot;&gt;\r\n&lt;li style=&quot;box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;&quot;&gt;Managing budgets and project resources.&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;&quot;&gt;Scheduling material and equipment purchases and deliveries.&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;&quot;&gt;Making sure the project complies with legal requirements, especially health and safety.&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;&quot;&gt;Assessing the sustainability and environmental impact of projects.&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;&quot;&gt;Ensuring projects run smoothly and structures are completed within budget and on time.&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;&quot;&gt;Acting as the technical adviser on a construction site for subcontractors, crafts people and operatives.&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;&quot;&gt;Setting out, leveling and surveying the site.&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;&quot;&gt;Checking plans, drawings and quantities for accuracy of calculations.&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;&quot;&gt;Ensuring that all materials used and work performed are as per specifications.&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;&quot;&gt;Overseeing the selection and requisition of materials and plant.&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;&quot;&gt;Managing, monitoring and interpreting the contract design documents supplied by the client or architect.&lt;/li&gt;\r\n&lt;/ul&gt;', 'Full time', '&lt;ul style=&quot;box-sizing: border-box; margin: 0px 0px 0px 40px; padding: 0px; color: #333333; font-family: Arial, Helvetica, sans-serif, solaimanlipi;&quot;&gt;\r\n&lt;li class=&quot;age&quot; style=&quot;box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;&quot;&gt;Age 25 to 35 year(s)&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;&quot;&gt;Proficient in MS Office&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;&quot;&gt;Good communication in English - written and oral&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;&quot;&gt;An analytical mind with problem-solving skills&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;&quot;&gt;Team working and communication&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;&quot;&gt;Technical skills&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;&quot;&gt;An eye for detail&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;&quot;&gt;Problem solving&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;&quot;&gt;Management skills&lt;/li&gt;\r\n&lt;/ul&gt;', 'The candidate should B. Sc. in Civil Engineering from any reputed University.', '2 to 5 year(s)', '2017-12-30', 'Barisal, Barisal Division', 'Negotiable'),
(32, 'Teacher', 'WFSC', 'Education', 30, '&lt;ul style=&quot;box-sizing: border-box; margin: 0px 0px 0px 40px; padding: 0px; color: #333333; font-family: Arial, Helvetica, sans-serif, solaimanlipi;&quot;&gt;\r\n&lt;li style=&quot;box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;&quot;&gt;Teach the subject efficiently with application of good teaching methodology and following a student -centred approach.&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;&quot;&gt;Ensuring that students are actually engaged in meaningful learning experiences.&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;&quot;&gt;Giving feedback about the performance of the students and their activities to the authority.&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;&quot;&gt;Observing, recording and reporting on the behavior of individual children as assigned.&lt;/li&gt;\r\n&lt;/ul&gt;', 'Full-time', '&lt;ul style=&quot;box-sizing: border-box; margin: 0px 0px 0px 40px; padding: 0px; color: #333333; font-family: Arial, Helvetica, sans-serif, solaimanlipi;&quot;&gt;\r\n&lt;li class=&quot;age&quot; style=&quot;box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;&quot;&gt;Age 22 to 40 year(s)&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;&quot;&gt;The applicants should have experience in the following area(s): Education Counseling, Education Marketing, Curriculum/ Program Development, Teaching.&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;&quot;&gt;High level of proficiency in English (both verbal &amp;amp; written) is essential.&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;&quot;&gt;Good knowledge of class controlling and students dealing is essentially required.&lt;/li&gt;\r\n&lt;/ul&gt;', 'Minimum Graduation from any university. (O-Level and A-Level background Preferable)', 'At least 2 year(s)', '2018-04-18', 'Anywhere in Bangladesh', 'Negotiable'),
(36, 'Officer (Internal Audit)', 'BITM', 'Accounting', 3, '&lt;ul style=&quot;box-sizing: border-box; margin: 0px 0px 0px 40px; padding: 0px; color: #333333; font-family: Arial, Helvetica, sans-serif, solaimanlipi;&quot;&gt;\r\n&lt;li style=&quot;box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;&quot;&gt;Prepare reports on Audit findings.&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;&quot;&gt;Checking &amp;amp; Verification of bill, vouchers and others supporting documents.&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;&quot;&gt;Checking of books of records such as cashbook, Party/ subsidiary ledgers, store register etc.&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;&quot;&gt;Have capacity to conduct risk based audit as per internal Audit plan at Head office and all Depot/ Zone office anywhere in Bangladesh.&lt;/li&gt;\r\n&lt;/ul&gt;', 'Full-time', '&lt;ul style=&quot;box-sizing: border-box; margin: 0px 0px 0px 40px; padding: 0px; color: #333333; font-family: Arial, Helvetica, sans-serif, solaimanlipi;&quot;&gt;\r\n&lt;li class=&quot;age&quot; style=&quot;box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;&quot;&gt;Age 25 to 30 year(s)&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;&quot;&gt;2 to 3 year(s) in Audit / Internal Audit&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;&quot;&gt;Problem solving ability and Sound knowledge in Auditing.&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;&quot;&gt;Should have competency on software based accounting system.&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;&quot;&gt;Proactive, honest, sincere, hardworking &amp;amp; Self Motivated.&lt;/li&gt;\r\n&lt;/ul&gt;', 'M Com/ MBA preferably in Accounting from a reputed University with CA (CC completion).', '2 to 3 year(s)', '2018-05-05', 'Dhaka Division', 'Negotiable'),
(37, 'Management Trainee', 'PRAN Group', 'Accounting', 8, '&lt;ul style=&quot;box-sizing: border-box; margin: 0px 0px 0px 40px; padding: 0px; color: #333333; font-family: Arial, Helvetica, sans-serif, solaimanlipi;&quot;&gt;\r\n&lt;li style=&quot;box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;&quot;&gt;The Incumbents will be responsible for Accounts &amp;amp; Tax related activities.&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;&quot;&gt;Calculating, preparing and submitting accounts and tax returns.&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;&quot;&gt;Undertaking accounts administration, including auditing financial information.&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;&quot;&gt;Calculating and legally minimizing tax liabilities.&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;&quot;&gt;Advising about business plans, investment opportunities.&lt;/li&gt;\r\n&lt;/ul&gt;', 'Full-time', '&lt;ul style=&quot;box-sizing: border-box; margin: 0px 0px 0px 40px; padding: 0px; color: #333333; font-family: Arial, Helvetica, sans-serif, solaimanlipi;&quot;&gt;\r\n&lt;li class=&quot;age&quot; style=&quot;box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;&quot;&gt;Age 23 to 30 year(s)&lt;/li&gt;\r\n&lt;li class=&quot;gender&quot; style=&quot;box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;&quot;&gt;Only males are allowed to apply.&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;&quot;&gt;Good Interpersonal Skills.&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;&quot;&gt;Good computer knowledge in MS Office Applications (Excel, Word).&lt;/li&gt;\r\n&lt;/ul&gt;', 'MBA/ MBS in Accounting Information System/ Accounting/ Finance with good academic records.', 'Na', '2018-05-17', 'Anywhere in Bangladesh', 'Negotiable'),
(40, 'Quality Manager', 'Banglatex Ltd', 'Garments', 4, '&lt;ul style=&quot;box-sizing: border-box; margin: 0px 0px 0px 40px; padding: 0px; color: #333333; font-family: Arial, Helvetica, sans-serif, solaimanlipi;&quot;&gt;\r\n&lt;li style=&quot;box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;&quot;&gt;5-7 Years experience in Woven Bottoms manufacturing and working 3-5 Years in the capacity of &quot;Quality Manager&quot;&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;&quot;&gt;Capacity to Lead, Guide, Train the Production Teams, from fabric Inspection, Cutting, Sewing, Washing &amp;amp; Finishing.&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;&quot;&gt;Responsible for Manufacturing Quality Manual/ SOP Through out all processes/ Department and Quality Delivery first time pass rate.&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;&quot;&gt;Knowledge of Quality Management System such as SPC, Traffic light is a must.&lt;/li&gt;\r\n&lt;/ul&gt;', 'Full-time', '&lt;ul style=&quot;box-sizing: border-box; margin: 0px 0px 0px 40px; padding: 0px; color: #333333; font-family: Arial, Helvetica, sans-serif, solaimanlipi;&quot;&gt;\r\n&lt;li class=&quot;age&quot; style=&quot;box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;&quot;&gt;Age 30 to 35 year(s)&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;&quot;&gt;5-7 Years experience in Woven Bottoms manufacturing and working 3-5 Years in the capacity of &quot;Quality Manager&quot;&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;&quot;&gt;Capacity to Lead, Guide, Train the Production Teams, from fabric Inspection, Cutting, Sewing, Washing &amp;amp; Finishing.&lt;/li&gt;\r\n&lt;li style=&quot;box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;&quot;&gt;Responsible for Manufacturing Quality Manual/ SOP Through out all processes/ Department and Quality Delivery first time pass rate.&lt;/li&gt;\r\n&lt;/ul&gt;', 'Graduate from any recognized College/university.', '5 to 7 year(s)', '2018-05-23', 'Dhaka Division', 'Negotiable'),
(43, 'Centre Manager, Social Enterprise, Health Nutrition', 'BRAC', 'NGO', 2, '<ul style=\"box-sizing: border-box; margin: 0px 0px 0px 40px; padding: 0px; color: #333333; font-family: Arial, Helvetica, sans-serif, solaimanlipi;\">\r\n<li style=\"box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;\">Ensure day to day functional activities of assigned center</li>\r\n<li style=\"box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;\">Provide necessary help and assistance to the patients and other clients</li>\r\n<li style=\"box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;\">Support in the sales of medicines, health commodities and surgical items as per customers\' requirements with proper verification.</li>\r\n<li style=\"box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;\">Maintain financial integrity through ensuring accountability, transparency and consistency in financial proceedings at regional level</li>\r\n<li style=\"box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;\">Maintain proper documentation of the patient service record</li>\r\n<li style=\"box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;\">Maintain referral register for client and patient referred to relevant health facilities</li>\r\n<li style=\"box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;\">Oversee inventory management and restocking for medicines, health commodities and surgical items</li>\r\n<li style=\"box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;\">Supervise other service delivery staff and keep hygienic environment in the center</li>\r\n<li style=\"box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;\">Take regular update from Community Health Advisor (CHA) and provide them necessary guidelines</li>\r\n<li style=\"box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;\">Provide update of activities to the management on a regular basis</li>\r\n<li style=\"box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;\">Ensure achievement of monthly and yearly revenue targets</li>\r\n<li style=\"box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;\">Establish and maintain a good relationship within the business community</li>\r\n</ul>', 'Contractual', '<ul style=\"box-sizing: border-box; margin: 0px 0px 0px 40px; padding: 0px; color: #333333; font-family: Arial, Helvetica, sans-serif, solaimanlipi;\">\r\n<li class=\"age\" style=\"box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;\">Age At most 35 year(s)</li>\r\n<li style=\"box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;\">1 year of work experience in Pharmacy management is preferable</li>\r\n<li style=\"box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;\">Proven knowledge in medicine selling and store management</li>\r\n<li style=\"box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;\">Good communication in Bangla and English</li>\r\n<li style=\"box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;\">Adequate skills in computer applications to keep records</li>\r\n<li style=\"box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;\">Data entry capabilities and staff management</li>\r\n</ul>', 'Diploma in Pharmacy/ Certificate Course in Pharmacy', 'At least 1 year(s)', '2018-06-29', 'Anywhere in Bangladesh', 'Negotiable'),
(44, 'Manager (Hydrogen Peroxide Plant)', 'Bashundhara Group', 'Industry', 3, '<ul style=\"box-sizing: border-box; margin: 0px 0px 0px 40px; padding: 0px; color: #333333; font-family: Arial, Helvetica, sans-serif, solaimanlipi;\">\r\n<li style=\"box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;\">Responsible for project planning, structural design, erection, commissioning and project implementation of Hydrogen Peroxide Plant.</li>\r\n<li style=\"box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;\">Assist in importing Plant machineries in collaboration with Supply Chain Department.</li>\r\n<li style=\"box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;\">To lead and co-ordinate Hydrogen Peroxide Plant setup &amp; operation.</li>\r\n<li style=\"box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;\">Coordinate with all the stakeholders for successful implementation of the Project.</li>\r\n<li style=\"box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;\">Any other jobs related to Project.</li>\r\n</ul>', 'Full-time', '<ul style=\"box-sizing: border-box; margin: 0px 0px 0px 40px; padding: 0px; color: #333333; font-family: Arial, Helvetica, sans-serif, solaimanlipi;\">\r\n<li class=\"gender\" style=\"box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;\">Only males are allowed to apply.</li>\r\n<li style=\"box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;\">The Candidate must have minimum 8-10 years hands on experience in Hydrogen peroxide plant.</li>\r\n<li style=\"box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;\">Retired personnel having work experience in setup of Hydrogen Peroxide Plant are encouraged to apply.</li>\r\n<li style=\"box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;\">Must be a team player &amp; Self driven.</li>\r\n<li style=\"box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;\">Able to multi-task and take pressure.</li>\r\n<li style=\"box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;\">The Candidate must have Computer literacy.</li>\r\n</ul>', 'B.Sc. in Chemical Engineering / M.Sc. in Chemistry', 'At least 8 year(s)', '2018-06-30', 'Anywhere in Bangladesh', 'Negotiable'),
(45, 'Customer Care Executive (Evening Shift 4pm- 12 am)', 'Ajkerdeal', 'Support', 5, '<ul style=\"box-sizing: border-box; margin: 0px 0px 0px 40px; padding: 0px; color: #333333; font-family: Arial, Helvetica, sans-serif, solaimanlipi;\">\r\n<li style=\"box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;\">Receive &amp; make call to the customers.</li>\r\n<li style=\"box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;\">Capable to handle customer queries/complains instantly.</li>\r\n<li style=\"box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;\">Capable to handle Inbound/outbound calls.</li>\r\n<li style=\"box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;\">Collect customer\'s feedback.</li>\r\n<li style=\"box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;\">Must able to work by shifting &amp; willingly work in Govt holidays.</li>\r\n<li style=\"box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;\">Strong interpersonal and communication skills.</li>\r\n<li style=\"box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;\">Ensure customer satisfaction.</li>\r\n<li style=\"box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;\">Positive attitude and self motivated.</li>\r\n<li style=\"box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;\">Make Report to Supervisor.</li>\r\n</ul>', 'Full-time, Contractual', '<ul style=\"box-sizing: border-box; margin: 0px 0px 0px 40px; padding: 0px; color: #333333; font-family: Arial, Helvetica, sans-serif, solaimanlipi;\">\r\n<li class=\"age\" style=\"box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;\">Age 21 to 26 year(s)</li>\r\n<li class=\"gender\" style=\"box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;\">Only males are allowed to apply.</li>\r\n<li style=\"box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;\">Strong interpersonal &amp; communication skill.</li>\r\n<li style=\"box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;\">Computer Literacy is must.</li>\r\n<li style=\"box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;\">Fresher\'s are encouraged to apply.</li>\r\n<li style=\"box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;\">Experienced candidates will get preference.</li>\r\n<li style=\"box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;\">Ability to navigate through software applications.</li>\r\n<li style=\"box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;\">Responsible, reliable, highly energetic, polite and hardworking, Punctual.</li>\r\n<li style=\"box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;\">Co-operative and challenging mentality to work with team member.</li>\r\n<li style=\"box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;\">Communicate clearly over the phone and demonstrate good listening skills.</li>\r\n<li style=\"box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;\">Must be have excellent communication skill in English.</li>\r\n</ul>', 'Graduated from any reputed University in any Discipline.', 'At least 1 year(s)', '2018-07-28', 'Dhaka', '8,000 -10,000 (Full time), 300 Bdt per day (Contractual)'),
(46, 'Driver', 'Basic Builders', 'Others', 1, '<ul style=\"box-sizing: border-box; margin: 0px 0px 0px 40px; padding: 0px; color: #333333; font-family: Arial, Helvetica, sans-serif, solaimanlipi;\">\r\n<li style=\"box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;\">Drives different types of light ICRC vehicles by strictly following internal security and national traffic rules</li>\r\n<li style=\"box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;\">Transports people and/or material</li>\r\n<li style=\"box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;\">Checks equipment on attributed cars, ensures proper fuelling and cleaning</li>\r\n<li style=\"box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;\">Moves independently in difficult security environments</li>\r\n</ul>', 'Full-time', '<ul style=\"box-sizing: border-box; margin: 0px 0px 0px 40px; padding: 0px; color: #333333; font-family: Arial, Helvetica, sans-serif, solaimanlipi;\">\r\n<li style=\"box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;\">Professional requirements:</li>\r\n<li style=\"box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;\">Driving license held for at least five years and experience in international organisation</li>\r\n<li style=\"box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;\">Basic knowledge of mechanics and Automobile maintenance experience (oil checks, changing tyres, etc.)</li>\r\n<li style=\"box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;\">Good knowledge of the area of assignment Cox\'s Bazar region</li>\r\n<li style=\"box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;\">Master\'s 4/4 and VHF use</li>\r\n<li style=\"box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;\">Knowledge (spoken and written) of English</li>\r\n<li style=\"box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;\">Knowledge of the local language requested (Chittagonian)</li>\r\n<li style=\"box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;\">Personal qualities:</li>\r\n<li style=\"box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;\">Good oral communication skills, sense of responsibility, good organizational skills, perseverance, rigor and ability to keep a good spirit in stressful situations.</li>\r\n</ul>', 'Secondary school diploma', 'At least 5 year(s)', '2018-07-28', 'Dhaka Division', 'Negotiable'),
(47, 'rtr', 'rryr', 'Hospital', 7, '<p>etrtgrgtd</p>', 'rrytrdy', '<p>rytrdytryr</p>', 'rytry', 'eyeyet', '2018-03-03', 'trgtg', '2000'),
(48, 'wrer', 'ees', 'Engineering', 7, '<p>efsefse</p>', 'egse', '<p>segsefe</p>', 'egse', 'egse', '2017-02-02', 'rgdr', '2000');

-- --------------------------------------------------------

--
-- Table structure for table `apply_table`
--

CREATE TABLE `apply_table` (
  `id` int(11) NOT NULL,
  `applicant_name` varchar(150) NOT NULL,
  `company_name` varchar(250) NOT NULL,
  `position_name` varchar(250) NOT NULL,
  `expected_salary` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apply_table`
--

INSERT INTO `apply_table` (`id`, `applicant_name`, `company_name`, `position_name`, `expected_salary`) VALUES
(7, 'mahamudun013', 'Binary Case', 'Web Developer', '55k'),
(14, 'mahamudun013', 'SoftIT', 'Software Engineer', '60k'),
(22, 'mahamudun013', 'WFSC', 'Teacher', '35k'),
(34, 'faruk123', 'PRAN Group', 'Management Trainee', '50k'),
(35, 'faruk123', 'SoftIT', 'Software Engineer', '30k'),
(36, 'faruk123', 'Brac Bank', 'Manager', '50k'),
(38, 'mahamudun013', 'SoftIT', 'Software Engineer', '50k'),
(39, 'mahamudun013', 'Brac Bank', 'Manager', '50k'),
(45, 'zim123', 'BanglaIT', 'Software Engineer', '30k'),
(46, 'zim123', 'SoftIT', 'Software Engineer', '30k'),
(47, 'zim123', 'BanglaIT', 'Software Engineer', '30k'),
(48, 'b123', 'SoftIT', 'Software Engineer', '50k'),
(49, 'mahamudun013', 'Ajkerdeal', 'Customer Care Executive (Evening Shift 4pm- 12 am)', '50k'),
(50, 'mahamudun013', 'SoftIT', 'Software Engineer', '30k'),
(51, 'mahamudun013', 'Brac Bank', 'Manager', '40k');

-- --------------------------------------------------------

--
-- Table structure for table `employer_table`
--

CREATE TABLE `employer_table` (
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirm_password` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `company_category` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `emp_pic` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employer_table`
--

INSERT INTO `employer_table` (`name`, `username`, `password`, `confirm_password`, `company_name`, `company_category`, `address`, `city`, `zip`, `phone_number`, `email`, `website`, `emp_pic`) VALUES
('Adnan', 'adnan123', 'adnan123', 'adnan123', 'PRAN Group', 'Industry', 'Middle badda, Dhaka', 'Dhaka', '1213', '01989898989', 'adnan123@gmail.com', 'www.prangroup.com', ''),
('fack hasan', 'fack', '1122', '1122', 'retrt', 'IT', 'rgthth', 'rhth', '1207', '3545456', 'rgthgh@gmail.com', 'efdg.com', 'empImage/fack.jpg'),
('Abu Hasib', 'hasib123', 'hasib123', 'hasib123', 'Basic Builders', 'Industry', '&lt;p&gt;Badda. Dhaka-1212&lt;/p&gt;', 'Dhaka', '1212', '01737777777', 'hasib123@gmail.com', 'www.basicbuilders.com', ''),
('Hassan Mahamudun', 'hassan123', 'hassan123', 'hassan123', 'Softit', 'IT', 'Gulshan-1,Dhaka', 'Dhaka', '1212', '01850969739', 'hassan123@gmail.com', 'www.softit.com', ''),
('Md. Mahamudun Hassan', 'mahamudun013', 'mahamudun013', 'mahamudun013', 'Brac Bank', 'Bank', '&lt;p&gt;Badda,Dhaka-1212&lt;/p&gt;', 'Dhaka', '5500', '01850969739', 'mahamudun013@gmail.com', 'www.brackbank.com', ''),
('Mahafuzer Rahaman', 'murad123', 'murad123', 'murad123', 'WFSC', 'College', '&lt;p&gt;&lt;span style=&quot;color: #5c5c5c; font-family: Arial, Helvetica, sans-serif, solaimanlipi; text-align: justify;&quot;&gt;Block-L, South Banasree, Dhaka&lt;/span&gt;&lt;/p&gt;', 'Dhaka', '1213', '01714551398', 'mahafuzer2002@gmail.com', 'www.wfsc.com', ''),
('Ameena Khatun', 'nishi123', 'nishi123', 'nishi123', 'Banglatex Ltd', 'Garments', 'Savar,Dhaka-1270', 'Dhaka', '1270', '017576666666', 'nishi123@gmail.com', 'www.banglatex.com', ''),
('suhel rana', 'Prince', '12345', '12345', 'xxx subel', 'Bank', 'frgrg', 'rtrt', '1207', '3444343535', 'Nahyan0155@gmail.com', 'efdg.com', 'empImage/Prince.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `interview_table`
--

CREATE TABLE `interview_table` (
  `id` int(11) NOT NULL,
  `company_name` varchar(200) NOT NULL,
  `position_name` varchar(200) NOT NULL,
  `applicant_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `interview_table`
--

INSERT INTO `interview_table` (`id`, `company_name`, `position_name`, `applicant_name`) VALUES
(1, 'Brac Bank', 'Manager', 'faruk123'),
(2, 'Brac Bank', 'Manager', 'mahamudun013'),
(3, 'Brac Bank', 'Manager', 'mahamudun013');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirm_password` varchar(255) NOT NULL,
  `job_category` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_pic` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`name`, `username`, `password`, `confirm_password`, `job_category`, `gender`, `phone_number`, `email`, `user_pic`) VALUES
('Asif Hasan', 'asif123', 'asif123', 'asif123', 'Garments', 'male', '01899999999', 'asif123@gmail.com', ''),
('babyboo', 'b123', 'b123', 'b123', 'IT', 'female', '98939128', 'surovi.mukti@gmail.com', 'userImage/b123.jpg'),
('Al Faruk', 'faruk123', 'faruk123', 'faruk123', 'IT', 'male', '1742128474', 'faruk123@yahoo.com', 'userImage/faruk123.jpg'),
('Mukut Hassan', 'hasan1234', 'hasan1234', 'hasan1234', 'Engineering', 'male', '1742128474', 'mahamudun013@gmail.com', 'userImage/hasan1234.jpg'),
('Md. Mahamudun Hassan', 'mahamud123', 'mahamud123', 'mahamud123', 'Commercial', 'male', '1742128474', 'mahamudun013@gmail.com', ''),
('Md. Mahamudun Hassan', 'mahamudun013', 'mahamudun013', 'mahamudun013', 'IT', 'male', '01850969739', 'mahamudun013@gmail.com', ''),
('Md. Mahamudun Hassan', 'mahamudunewu013', 'mahamudunewu013', 'mahamudunewu013', 'IT', 'male', '01850969739', 'mahamudunewu013@gmail.com', ''),
('Md. Mahamudun Mukut', 'mukut123', 'mukut123', 'mukut123', 'Bank', 'male', '01742128474', 'mahamudun013@gmail.com', ''),
('Md. Munim Hosen', 'munim123', 'munim123', 'munim123', 'Garments', 'male', '01676767676', 'munim123@gmail.com', ''),
('Pranto', 'pranto123', 'pranto123', 'pranto123', 'Education', 'male', '1742128474', 'mahamudun013@gmail.com', ''),
('saymum sany', 'sany123', 'sany123', 'sany123', 'IT', 'male', '01866666666', 'sayny12@gmail.com', 'userImage/sany123.jpg'),
('suhel rana', 'suhel', '1122', '1122', 'Engineering', 'male', '3434', 'sdfsf@gmail.com', 'userImage/suhel.jpg'),
('Zim', 'zim123', 'zim123', 'zim123', 'Garments', 'male', '1742128474', 'zim12@gmail.com', 'userImage/zim123.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `all_jobs`
--
ALTER TABLE `all_jobs`
  ADD PRIMARY KEY (`all_jobs_id`);

--
-- Indexes for table `apply_table`
--
ALTER TABLE `apply_table`
  ADD PRIMARY KEY (`id`),
  ADD KEY `applicant_name` (`applicant_name`);

--
-- Indexes for table `employer_table`
--
ALTER TABLE `employer_table`
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `interview_table`
--
ALTER TABLE `interview_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_table`
--
ALTER TABLE `admin_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `all_jobs`
--
ALTER TABLE `all_jobs`
  MODIFY `all_jobs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `apply_table`
--
ALTER TABLE `apply_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `interview_table`
--
ALTER TABLE `interview_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `apply_table`
--
ALTER TABLE `apply_table`
  ADD CONSTRAINT `apply_table_ibfk_1` FOREIGN KEY (`applicant_name`) REFERENCES `user_table` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
