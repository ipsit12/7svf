-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 18, 2024 at 06:16 AM
-- Server version: 10.11.8-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u632290519_7spokes`
--

-- --------------------------------------------------------

--
-- Table structure for table `achievement`
--

CREATE TABLE `achievement` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `category` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL,
  `venue` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `achievement`
--

INSERT INTO `achievement` (`id`, `name`, `image`, `category`, `description`, `date`, `venue`) VALUES
(24, 'Celebration of National Human Rights Day 2022', '2.jfif,4.jfif,5.jfif,7.jfif,10.jfif,11.jfif,12.jfif,13.jfif,15.jfif', '2022-2023', '<p style=\"text-align: justify; \">National Human Rights Day was celebrated with the theme \"Dignity, Freedom & Justice\" with a sand art at sea beach at Puri. Mr Debasis Das, Secretary, DLSA, Puri inaugurated the sand art in the presence of Mrs Aparna Mohanty, Clinical Psychologist, and Dr Sidharth Sekhar Patra, senior Physiotherapist of DHH, Puri. Mr Chittaranjan Mohnty, then Sand Artist was Felicitated by the Secretary, DLSA, Puri. more than 20 volunteers were present and awareness was created among the visitors present at the sea beach, Puri.<br></p>', '2022-12-10', 'Sea beach, Puri'),
(26, 'JOY OF GIVING', 'IMG20230223130258.jpg,IMG20230223130355.jpg,IMG20230223130421.jpg,IMG20230223130433.jpg,IMG20230223131132.jpg', '2022-2023', '<p class=\"MsoNormal\" style=\"text-align: justify; margin: 6pt 0cm;\"><span lang=\"EN-GB\" style=\"font-size:12.0pt;line-height:115%;\r\nfont-family:\" book=\"\" antiqua\",serif;mso-ansi-language:en-gb\"=\"\">Distribution of used\r\nclothes to the inmates of the Niladri\r\nNilaya (beggars and mentally retarded persons)<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-top:6.0pt;margin-right:0cm;margin-bottom:6.0pt;\r\nmargin-left:0cm\"><span lang=\"EN-GB\" style=\"font-size:12.0pt;line-height:115%;\r\nfont-family:\" book=\"\" antiqua\",serif;mso-ansi-language:en-gb\"=\"\">Distribution of the\r\nfoods, fruits and medication to the inmates.<o:p></o:p></span></p><p>\r\n\r\n\r\n\r\n<span lang=\"EN-GB\" style=\"font-size:12.0pt;line-height:115%;font-family:\" book=\"\" antiqua\",serif;=\"\" mso-fareast-font-family:\"times=\"\" new=\"\" roman\";mso-fareast-theme-font:minor-fareast;=\"\" mso-bidi-font-family:\"times=\"\" roman\";mso-bidi-theme-font:minor-bidi;=\"\" mso-ansi-language:en-gb;mso-fareast-language:en-us;mso-bidi-language:ar-sa\"=\"\">Counselling\r\nand psychological support to the inmates by Mrs Aparna Mohanty (Clinical\r\nPsychologist)</span><br></p>', '2023-02-23', 'Niladri Nilaya, Kundura, Gop, Puri'),
(27, 'SAISHREE PHYSIOTHERAPY AND WELLNESS INAUGUARATION', 'IMG-20221231-WA0022.jpg,saishree-rehabilitation-unit-puri-station-road-puri-physiotherapists-ngllequchq.webp,1.jpg,saishree-rehabilitation-unit-puri-station-road-puri-physiotherapists-7y23v9sqoh.webp', '2022-2023', '<p style=\"text-align: justify; \">the new clinic Saishree Physiotherapy &amp; Wellness was inaugurated by&nbsp;<span style=\"font-family: \" book=\"\" antiqua\",=\"\" serif;=\"\" font-size:=\"\" 12pt;\"=\"\">Dr. Sangram Keshari Pradhan, BAMS, MD(AY),&nbsp;</span><span style=\"font-family: \" book=\"\" antiqua\",=\"\" serif;=\"\" font-size:=\"\" 12pt;=\"\" color:=\"\" rgb(33,=\"\" 37,=\"\" 41);\"=\"\">PHD(UU), GAMC Puri. D</span><span style=\"font-family: \" book=\"\" antiqua\",=\"\" serif;=\"\" font-size:=\"\" 12pt;\"=\"\">r Sidharth Sekhar Patra, Sr Physiotherapist,&nbsp;</span><span style=\"font-family: \" book=\"\" antiqua\",=\"\" serif;=\"\" font-size:=\"\" 12pt;\"=\"\">Mrs Aparna Mohanty, Clinical Psychologist and&nbsp;</span><span style=\"font-family: \" book=\"\" antiqua\",=\"\" serif;=\"\" font-size:=\"\" 12pt;\"=\"\">Mrs Anuradha Swain, Community Nurse conducted the free health Check up Camp.&nbsp;</span></p>', '2023-02-01', 'Cinema hall Square ,Brahmagiri, Puri'),
(28, 'Free Health Check Up Camp', 'IMG20230305101750.jpg,IMG20230305102555.jpg,IMG20230305103203.jpg,IMG20230305110342.jpg,IMG20230305110622.jpg,IMG20230305114554.jpg,IMG20230305123324.jpg,IMG20230305125135.jpg', '2022-2023', '<p class=\"MsoNormal\" style=\"margin-top:6.0pt;margin-right:0cm;margin-bottom:6.0pt;\r\nmargin-left:0cm\"><span lang=\"EN-GB\" style=\"font-size:12.0pt;mso-bidi-font-size:\r\n11.0pt;line-height:115%;font-family:&quot;Book Antiqua&quot;,serif;mso-ansi-language:\r\nEN-GB\">Free check up for <o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-top:6.0pt;margin-right:0cm;margin-bottom:6.0pt;\r\nmargin-left:0cm\"><span lang=\"EN-GB\" style=\"font-size:12.0pt;mso-bidi-font-size:\r\n11.0pt;line-height:115%;font-family:&quot;Book Antiqua&quot;,serif;mso-ansi-language:\r\nEN-GB\">â€“ BMD(Bone Mineral Density), Blood Pressure (BP), Random Blood Sugar\r\n(RBS), Body Mass Index (BMI)<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-top:6.0pt;margin-right:0cm;margin-bottom:6.0pt;\r\nmargin-left:0cm\"><span lang=\"EN-GB\" style=\"font-size:12.0pt;mso-bidi-font-size:\r\n11.0pt;line-height:115%;font-family:&quot;Book Antiqua&quot;,serif;mso-ansi-language:\r\nEN-GB\">- Free consultation by honorable doctors<o:p></o:p></span></p><p>\r\n\r\n\r\n\r\n\r\n\r\n<span lang=\"EN-GB\" style=\"font-size:12.0pt;mso-bidi-font-size:11.0pt;line-height:\r\n115%;font-family:&quot;Book Antiqua&quot;,serif;mso-fareast-font-family:&quot;Times New Roman&quot;;\r\nmso-fareast-theme-font:minor-fareast;mso-bidi-font-family:&quot;Times New Roman&quot;;\r\nmso-bidi-theme-font:minor-bidi;mso-ansi-language:EN-GB;mso-fareast-language:\r\nEN-US;mso-bidi-language:AR-SA\">- Free medicine distribution</span></p><p><span lang=\"EN-GB\" style=\"font-size:12.0pt;mso-bidi-font-size:11.0pt;line-height:\r\n115%;font-family:&quot;Book Antiqua&quot;,serif;mso-fareast-font-family:&quot;Times New Roman&quot;;\r\nmso-fareast-theme-font:minor-fareast;mso-bidi-font-family:&quot;Times New Roman&quot;;\r\nmso-bidi-theme-font:minor-bidi;mso-ansi-language:EN-GB;mso-fareast-language:\r\nEN-US;mso-bidi-language:AR-SA\">- Free Consultation by Physiotherapist</span></p><p><span lang=\"EN-GB\" style=\"font-size:12.0pt;mso-bidi-font-size:11.0pt;line-height:\r\n115%;font-family:&quot;Book Antiqua&quot;,serif;mso-fareast-font-family:&quot;Times New Roman&quot;;\r\nmso-fareast-theme-font:minor-fareast;mso-bidi-font-family:&quot;Times New Roman&quot;;\r\nmso-bidi-theme-font:minor-bidi;mso-ansi-language:EN-GB;mso-fareast-language:\r\nEN-US;mso-bidi-language:AR-SA\"><br></span></p><p class=\"MsoNormal\" style=\"margin-top:6.0pt;margin-right:0cm;margin-bottom:6.0pt;\r\nmargin-left:0cm\"><span lang=\"EN-GB\" style=\"font-size:12.0pt;mso-bidi-font-size:\r\n11.0pt;line-height:115%;font-family:&quot;Book Antiqua&quot;,serif;mso-ansi-language:\r\nEN-GB\">Dr. Sangram Keshari Pradhan, BAMS, MD(Ay), PhD(UU), GAMC Puri<o:p></o:p></span></p><p><span lang=\"EN-GB\" style=\"font-size:12.0pt;mso-bidi-font-size:11.0pt;line-height:\r\n115%;font-family:&quot;Book Antiqua&quot;,serif;mso-fareast-font-family:&quot;Times New Roman&quot;;\r\nmso-fareast-theme-font:minor-fareast;mso-bidi-font-family:&quot;Times New Roman&quot;;\r\nmso-bidi-theme-font:minor-bidi;mso-ansi-language:EN-GB;mso-fareast-language:\r\nEN-US;mso-bidi-language:AR-SA\">\r\n\r\n<span lang=\"EN-GB\" style=\"font-size: 12pt; line-height: 115%;\">Dr. Sidharth Sekhar Patra (PT), BPT, MPT\r\n(Neurology), CMT, MIAP, Sr Physiotherapist, DHH Puri</span><br></span></p><p><br></p>', '2023-03-05', 'Saishree Physiotherapy & Wellness, Puri'),
(29, 'World Mental Health Day 2023', 'IMG_20231009_171455.jpg,IMG_20231009_172720.jpg,IMG_20231010_080909.jpg', '2023-2024', '<h6 style=\"text-align: justify; \"><span style=\"background-color: rgb(255, 255, 0);\">Celebration of&nbsp;World Mental Health Day 2023 in association with DMHP, DHH, Puri on 9th Oct 2023. Sand art done by Mr Chittaranjan Mohanty was inaugurated by Dr Sujata Mishra, CDMPHO, Puri. Mental Health Is a Universal Human Right.</span></h6>', '2023-10-09', 'Sea beach, Puri'),
(30, 'Plantation at School', '123.jpeg,124.jpeg,125.jpeg', '2023-2024', '<p style=\"text-align: justify; \"><span style=\"background-color: rgb(148, 189, 123);\">plantation of more than 150 plants inside the campus of Chilika High School, Alupatana, Satapada. The Headmaster planted the 1st plant and said about theÂ  importance of plantation to the students.</span></p>', '2023-08-10', 'Satapada, Brahamgiri, Puri'),
(31, 'Celebration of World Physiotherapy Day 2023', 'Screenshot_2023-09-08-09-34-23-039_com.whatsapp.w4b-edit.jpg,WhatsApp Image 2023-10-12 at 3.31.20 PM.jpeg,WhatsApp Image 2023-10-12 at 3.31.37 PM.jpeg,WhatsApp Image 2023-10-12 at 3.32.04 PM.jpeg', '2023-2024', '<p style=\"text-align: justify; \"><font color=\"#0000ff\">A rally for the awareness about Physiotherapy in daily life was organized in front of Gundicha Temple, Grand road, Puri. Mr Sarat Mohapatra, ADM (Protocol), Puri initiated prog with green flag. Dr Sidharth Sekhar Patra, Mrs Aparna Mohanty, Dr Akash Behera, Dr Deepika Pradhan were present.&nbsp;</font></p>', '2023-09-08', 'Grand Road, Puri'),
(32, 'Free', 'WhatsApp Image 2023-10-12 at 3.28.27 PM.jpeg,WhatsApp Image 2023-10-12 at 3.28.54 PM.jpeg,WhatsApp Image 2023-10-12 at 3.29.14 PM.jpeg,WhatsApp Image 2023-10-12 at 3.29.36 PM.jpeg,WhatsApp Image 2023-', '2023-2024', '<p>Free health check up camp was organized at club house of baliguali village of Puri.</p>', '2023-09-09', 'Club House, Baliguali Village, Puri'),
(33, 'Free Health Check Up Camp', 'WhatsApp Image 2023-10-12 at 2.39.31 PM.jpeg,WhatsApp Image 2023-10-12 at 2.39.40 PM.jpeg,WhatsApp Image 2023-10-12 at 2.39.41 PM.jpeg,WhatsApp Image 2023-10-12 at 2.39.43 PM (1).jpeg,WhatsApp Image 2', '2023-2024', '<p>Free Health check up camp was organized at the khadipada village of puri sadar.&nbsp;</p>', '2023-09-10', 'Khadipada, Puri'),
(34, 'Rathayatra 2023', 'Food-distribution-Ratha-Yatra-by-Banamali-Foundation-03.jpg,Food-distribution-Ratha-Yatra-by-Banamali-Foundation-08.jpg,IMG_20230620_021832.jpg,IMG_20230620_040530.jpg,IMG_20230620_132844.jpg', '2023-2024', '<p>Free Food distribution&nbsp;</p>', '2023-06-19', 'Badasankha, Puri'),
(35, 'International Nursing Day 2023', 'IMG_20230511_180057.jpg,IMG_20230511_180100.jpg', '2023-2024', '<p>Celebration of international nursing day 2023</p>', '2023-05-11', 'Sea beach, Puri'),
(36, 'JOY OF GIVING', 'IMG_20230629_131408.jpg,IMG_20230629_131545.jpg,IMG_20230629_131549.jpg', '2022-23', '<p>Distribution of Food and clothes to the inmates of oldage home<br></p>', '2022-06-27', 'Oldage Home, Madhuban, Puri'),
(38, 'Food Distribution', 'IMG-20180714-WA0028.jpg,IMG-20180714-WA0043.jpg,IMG-20180714-WA0062.jpg,IMG-20180714-WA0098.jpg,IMG-20180716-WA0010.jpg,IMG-20180716-WA0012.jpg,IMG-20180716-WA0013.jpg', '2022-2023', '<p>Distribution of cooked food at talabania, puri on the occasion of rathaytra 2022</p>', '2022-07-16', 'Talabania, Puri'),
(39, 'Field Service', '2.jpg,3.jpg,5.jpg,6.jpg,7.jpg', '2022-2023', '<p>Psychological services provided at home in different villages of Gop block of puri district</p>', '0000-00-00', 'villages of Puri');

-- --------------------------------------------------------

--
-- Table structure for table `achievement_category`
--

CREATE TABLE `achievement_category` (
  `id` int(11) NOT NULL,
  `category` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `achievement_category`
--

INSERT INTO `achievement_category` (`id`, `category`) VALUES
(1, '2022-2023'),
(2, '2023-2024'),
(3, '2024-25');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `heading` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `category` varchar(200) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `campaign`
--

CREATE TABLE `campaign` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `email_id` varchar(200) NOT NULL,
  `category` varchar(200) NOT NULL,
  `fund_required` varchar(200) NOT NULL,
  `spokes` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `city` varchar(200) NOT NULL,
  `dist` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `pin` varchar(200) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT 'grant=1 deny=0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `campaign`
--

INSERT INTO `campaign` (`id`, `name`, `mobile`, `email_id`, `category`, `fund_required`, `spokes`, `description`, `city`, `dist`, `state`, `pin`, `status`) VALUES
(5, 'Ipsita Biswal', '9078448083', 'ipsitabiswal884@gmail.com', 'individual', '30000', 'Society', 'JKKKKKKKL', 'Bhubaneswar', 'cuttack', 'odisha', '753110', 0);

-- --------------------------------------------------------

--
-- Table structure for table `campaign_category`
--

CREATE TABLE `campaign_category` (
  `id` int(11) NOT NULL,
  `category` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `campaign_category`
--

INSERT INTO `campaign_category` (`id`, `category`) VALUES
(2, 'Health'),
(3, 'Society'),
(4, 'Education'),
(5, 'Employment'),
(6, 'Environment'),
(7, 'Art & Culture'),
(8, 'Research');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`) VALUES
(1, 'Health'),
(2, 'Society'),
(3, 'Education'),
(4, 'Employment'),
(5, 'Environment'),
(6, 'Art & Culture'),
(7, 'Research');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` date DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `username`, `email`, `phone`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'ipsitabiswal', 'ashutoshpradhan822@gmail.com', '09078448083', 'login message', 'fefe', NULL, NULL),
(2, 'ipsitabiswal', 'ashutoshpradhan822@gmail.com', '09078448083', 'login message', 'fefe', NULL, NULL),
(3, 'asas', 'sa@gmail.com', '45564121', 'asdsd', 'sdsd', '2024-08-02', NULL),
(4, 'sidh', 'sidharthphysio15@gmail.com', '9776742661', 'puri', 'hdshckvgfbi', '2024-08-02', NULL),
(5, 'admin@gmail.com', 'ipsitabiswal884@gmail.com', '09078448083', 'vnbh', 'kjn', '2024-08-04', NULL),
(6, 'ghgjh', 'df@gmail.com', '54541', 'hjkbjbjk', 'hjkkj', '2024-08-05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `exploercampaign`
--

CREATE TABLE `exploercampaign` (
  `id` int(11) NOT NULL,
  `campaign_id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `category` varchar(200) NOT NULL,
  `fund_required` varchar(200) NOT NULL,
  `spokes` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `dist` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `pin` varchar(200) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exploercampaign`
--

INSERT INTO `exploercampaign` (`id`, `campaign_id`, `image`, `name`, `phone`, `category`, `fund_required`, `spokes`, `description`, `city`, `dist`, `state`, `pin`, `date`) VALUES
(15, 5, '13.webp,i3.webp,i4.jpg', 'Ipsita Biswal', '9078448083', '2', '30', 'Society', 'JKKKKKKKL', 'Bhubaneswar', 'cuttack', 'odisha', '753110', '2024-08-10');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_07_30_094822_create_contacts', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `queryid`
--

CREATE TABLE `queryid` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `queryid`
--

INSERT INTO `queryid` (`id`, `name`, `email`, `message`) VALUES
(1, 'Ipsita Biswal', 'ipsitabiswal884@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `signin`
--

CREATE TABLE `signin` (
  `id` int(10) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `pass_word` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signin`
--

INSERT INTO `signin` (`id`, `user_name`, `pass_word`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` longtext NOT NULL,
  `category` varchar(200) NOT NULL,
  `qualification` varchar(200) NOT NULL,
  `role` varchar(200) NOT NULL,
  `officialcode` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `image`, `name`, `description`, `category`, `qualification`, `role`, `officialcode`) VALUES
(9, '1.jpg', 'DR SIDHARTH SEKHAR PATRA (PT)', '<p>He completed his Bachelor in Physiotherapy (BPT) from Rajiv Gandhi University Of Health Sciences (RGUHS), Karnataka in 2007 and continued his Master In Physiotherapy (MPT) in Neurology and Psycho-Somatic Disorders from the same institute and passed with distinction in 2010. After completion of his study from Bangalore he returned to odisha and started working as Assistant Prof in Hitech College of Physiotherapy, Bhubaneswar. Once in a visit to a patient at Puri on request of his student he felt to start his career as Clinical Physiotherapist in Puri. He started his own physiotherapy clinic at Puri in 2012. He is expert in manual therapy and spinal manipulation. He is working as In-charge Physiotherapist at District Headquarter Hospital (DHH), Puri since 2015. He was deputed as Physiotherapist in the Banajaga Yatra in Nabakelebara 2015 for the servitors of Lord Jagannath. He has donated blood voluntarily more than 56times since 2003.&nbsp;</p><p>As a senior physiotherapist he has experience in the following domain:</p><p>â¦<span style=\"white-space:pre\">	</span>Management of all kinds of patients for physiotherapy in OPD, IPD and ICU of DHH, Puri.</p><p>â¦<span style=\"white-space:pre\">	</span>Resource person in the awareness programs about the physiotherapy services available at government hospitals at different level among the health workers and ASHAs.</p><p>â¦<span style=\"white-space:pre\">	</span>Resource person in the workshop for on Workplace Stress Management for working persons of different sectors.</p><p>â¦<span style=\"white-space:pre\">	</span>Expert in pain management by spinal manipulation.</p><p>â¦<span style=\"white-space:pre\">	</span>Conducted many free health camps at different rural areas of puri district.</p><p>He has dedicated his time for the rehabilitation and pain management at Saishree Rehabilitation Unit (a unit of 7SVF) to serve the people promoting physiotherapy. He is very compassionate n has involved himself in many social activities as a volunteer.&nbsp;</p><p></p>', 'DIRECTORS', 'BPT, MPT (Neurology)', 'Senior Physiotherapist', 'DIN 09791797'),
(10, 'aprna mam.jpg', 'MRS APARNA MOHANTY', '<p>She completed her graduation (BA) from Samanta Chandra Sekhar College, Puri under Utkal University in 2001 and MA in Psychology from Utkal University, Bhubaneswar with Gold Medal. She started her career as an Assistant HR trainer at Manav Adhayan Kendra, BBSR from 2003 to 2005. Then she joined as Superintendent-Cum-Program Co-Ordinator at Gandhi Institute Of Technical Advancement, Kendrapada from 2005 to 2006. She is working as Clinical Psychologist at District Headquarter Hospital, Puri since 2006. As a Clinical Psychologist she has gathered experience in the following domain:</p><p>â¦<span style=\"white-space:pre\">	</span>Provide psychotherapy and counselling to individual, couple and parents.</p><p>â¦<span style=\"white-space:pre\">	</span> Implementation of rehabilitation plans/programs for mentally challenged and mentally ill persons.</p><p>â¦<span style=\"white-space:pre\">	</span>Work for orphan children as a member of district child protection unit.</p><p>â¦<span style=\"white-space:pre\">	</span>Work as a conciliator at district legal services authority at session court, puri.</p><p>â¦<span style=\"white-space:pre\">	</span>Guest psychologist at family court, puri and district juvenile justice board, Puri</p><p>â¦<span style=\"white-space:pre\">	</span>Trainer for school teachers, health workers, nurses, community health officers, Ayush doctors, pharmacist an ASHAS on mental health issue every calendar year.</p><p>â¦<span style=\"white-space:pre\">	</span>Resource person in the work shop on workplace stress management for working persons of different sectors.</p><p>She is working selflessly in the paediatric section of Saishree Rehabilitation Unit (a unit of 7SVF) for the cp child, developmental delay, sensory processing disorder and children with autism. She always boosts parents how to take proper care of these special children.&nbsp;</p><div><br></div>', 'DIRECTORS', 'MA in Psychology, PGDMH (IGNOU)', 'Clinical psychologist', 'DIN 09791798'),
(11, 'SUBHAJIT BEHERA.jpg', 'DR SUBHAJIT BEHERA (PT)', 'He completed his Bachelor in Physiotherapy (BPT) from Rajiv Gandhi University Of Health Sciences (RGUHS), Karnataka in 2005 and returned to Odisha. He joined IMS & SUM Hospital, BBSR in 2006. He has been working in all the departments of IMS & SUM Hospital for the physiotherapy management. He is expert in physiotherapy management of patients in ICU and IPD. Following his father and mentor late Dr Pitabas Behera he continued several health camps in different areas of his village Chheda, Cuttack. He is very compassionate and has involved himself in many social activities.', 'DIRECTORS', 'BPT, MPT (Orthopedic)', 'Senior Physiotherapist', 'DIN 09791799'),
(12, 'chitaranjan.jpg', 'MR CHITTARANJAN MOHANTY', '', 'ADMINISTRATIVE_TEAM', '', 'PROGRAME MANAGER', ''),
(13, 'SUBHRANSU MOHANTY.jpg', 'MR SUBHRANSU MOHANTY', '', 'ADMINISTRATIVE_TEAM', '', 'FINANCE MANAGER', ''),
(14, 'swagatika.jpg', 'MISS SWAGATIKA MOHANTY', '', 'ADMINISTRATIVE_TEAM', '', 'DATA MANAGER', ''),
(15, 'sudhansu.jpg', 'MR SUDHANSU MOHAPATRA', '', 'ADVISORY_TEAM', '', 'LEGAL ADVISOR', ''),
(16, 'santosh.jpg', 'CA SANTOSH MANIK', '', 'ADVISORY_TEAM', '', 'FINANCE ADVISOR', ''),
(18, 'dummyuser.jfif', 'DR HARAPRASAD MOHANTY', '', 'FINANCE_SUPPORTERS', '', 'Paediatrician', ''),
(19, 'financesupporter2.jpg', 'DR ABHIMANYU MODHUAL', '', 'FINANCE_SUPPORTERS', '', 'Orthopaedic Surgeon, SPARSH Hospital, BBSR', ''),
(20, 'anujna mohanty.jpg', 'MRS ANUJNA MOHANTY', '', 'FINANCE_SUPPORTERS', '', 'Superintendent Engineer, (OBCC)', ''),
(21, 'BISWARANJAN PANDA.jpg', 'MR BISWARANJAN PANDA', '', 'FINANCE_SUPPORTERS', '', 'Pharma Sales Manager', ''),
(23, 'dummyuser.jfif', 'ARUNA KUMAR SAHOO, ', '', 'VOLUNTEERS', '', 'Clinical Co-ordinator', ''),
(24, 'AKASH BEHERA.jpg', 'DR AKASH BEHERA', '', 'VOLUNTEERS', '', 'Jr Physiotherapist', ''),
(25, 'ABDUL RAHIM KHAN.jpg', 'ABDUL RAHIM KHAN', '', 'VOLUNTEERS', '', 'Tech Head, JC Enterprises', ''),
(26, 'dummyuser.jfif', 'SOUMYA BALIARSINGH', '', 'VOLUNTEERS', '', 'Special Educator', ''),
(27, 'GITANJALI.jpg', 'MRS GITANJALI NAYAK', '', 'VOLUNTEERS', '', 'CLERK, RBI', ''),
(28, 'dummyuser.jfif', 'MR SUJIT KUMAR SAHOO', '', 'VOLUNTEERS', '', 'CLERK, BOI, Puri', ''),
(29, 'dummyuser.jfif', 'SWAROOPA ROY', '', 'VOLUNTEERS', '', 'Social Worker', ''),
(30, 'dummyuser.jfif', 'JANGYADUTTA SAHOO', '', 'VOLUNTEERS', '', 'Physiotherapy Assistant', ''),
(31, 'dummyuser.jfif', 'PRITIPARNA SUBUDHI', '', 'VOLUNTEERS', '', 'Physiotherapy Assistant', ''),
(32, 'dummyuser.jfif', 'ANURADHA SWAIN', '', 'VOLUNTEERS', '', 'Community Supervisor, NHM', ''),
(33, 'dummyuser.jfif', 'LINGARAJ MOHANTY', '', 'VOLUNTEERS', '', 'Special Educator', ''),
(34, 'dummyuser.jfif', 'PRIYADARSAN PATRA', '', 'VOLUNTEERS', '', 'Cruise Supervisor', ''),
(35, 'dummyuser.jfif', 'JAGANATH BASTIA', ',,', 'VOLUNTEERS', '', 'Social Worker', ''),
(36, 'dummyuser.jfif', 'ASHOK SETHI', '', 'VOLUNTEERS', '', 'Private Teacher', ''),
(37, 'dummyuser.jfif', 'SHIVA SHAKTI PANDA', '', 'VOLUNTEERS', '', 'Medical Engineer', ''),
(38, 'dummyuser.jfif', 'SATYABRATA BISWAL', '', 'VOLUNTEERS', '', 'Research Assistant, RMRC', ''),
(39, 'dummyuser.jfif', 'DEEPSIKHA ROUT', '', 'VOLUNTEERS', '', 'Special Educator', ''),
(40, 'dummyuser.jfif', 'BARSHA BHOI', '', 'VOLUNTEERS', '', 'Physiotherapy Assistant', ''),
(41, 'chinmayee.jpg', 'Mrs Chinmayee Charulaxmi', '', 'FINANCE_SUPPORTERS', 'Msc Physics', 'Lecturer In Physics', '');

-- --------------------------------------------------------

--
-- Table structure for table `team_category`
--

CREATE TABLE `team_category` (
  `id` int(11) NOT NULL,
  `category` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `team_category`
--

INSERT INTO `team_category` (`id`, `category`) VALUES
(3, 'DIRECTORS'),
(4, 'ADMINISTRATIVE_TEAM'),
(5, 'ADVISORY_TEAM'),
(6, 'FINANCE_SUPPORTERS'),
(7, 'VOLUNTEERS');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE `volunteer` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `adhar` varchar(100) NOT NULL,
  `profession` varchar(100) NOT NULL,
  `blood` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`id`, `username`, `phone`, `email`, `adhar`, `profession`, `blood`, `photo`, `message`) VALUES
(1, '$name', '$phone', '$email', '$adhar', '$profession', '$blood', '$filenames', '$message'),
(2, 'admin@gmail.com', '09078448083', 'admin@gmail.com', 'm,mko000909', 'njnjnmmn', 'b+ve', '', ''),
(3, 'admin@gmail.com', '09078448083', 'ipsitabiswal884@gmail.com', 'm,mko000909', 'njnjnmmn', 'b+ve', '2NDPAGE.jpg', ''),
(4, 'fhg', '543212', 'ds@gmail.com', '564521', 'hghjgbhjb', '1212', '1.jpeg', 'jhkhk'),
(5, 'smruti Rekha', '87654512', 'smru@gmail.com', '541512', 'sadasd', 'sadd', '4.jpeg', 'sadsd'),
(6, 'admin', '09078448083', 'ipsitabiswal884@gmail.com', 'm,mko000909', 'njnjnmmn', 'b+ve', '1ee75379-523d-4499-9732-f122ee457a21.jpg', 'vnbh\r\nbbbsr'),
(7, '', '', '', '', '', '', '', ''),
(8, '', '', '', '', '', '', '', ''),
(9, '', '', '', '', '', '', '', ''),
(10, '', '', '', '', '', '', '', ''),
(11, '', '', '', '', '', '', '', ''),
(12, '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `achievement`
--
ALTER TABLE `achievement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `achievement_category`
--
ALTER TABLE `achievement_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `campaign`
--
ALTER TABLE `campaign`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `campaign_category`
--
ALTER TABLE `campaign_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exploercampaign`
--
ALTER TABLE `exploercampaign`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `queryid`
--
ALTER TABLE `queryid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signin`
--
ALTER TABLE `signin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_category`
--
ALTER TABLE `team_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `volunteer`
--
ALTER TABLE `volunteer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `achievement`
--
ALTER TABLE `achievement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `achievement_category`
--
ALTER TABLE `achievement_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `campaign`
--
ALTER TABLE `campaign`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `campaign_category`
--
ALTER TABLE `campaign_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `exploercampaign`
--
ALTER TABLE `exploercampaign`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `queryid`
--
ALTER TABLE `queryid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `signin`
--
ALTER TABLE `signin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `team_category`
--
ALTER TABLE `team_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `volunteer`
--
ALTER TABLE `volunteer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
