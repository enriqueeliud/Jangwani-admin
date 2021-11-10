
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


-- Database: `corephpadmin`

-- Table structure for table `admin_accounts`

CREATE TABLE `admin_accounts` (
  `id` int(25) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `series_id` varchar(60) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `expires` datetime DEFAULT NULL,
  `admin_type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- Dumping data for table `admin_accounts`

INSERT INTO `admin_accounts` (`id`, `user_name`, `password`, `series_id`, `remember_token`, `expires`, `admin_type`) VALUES
(4, 'superadmin', '$2y$10$eo7.w0Ttuy8mOBMvDlGqDeewQERkXu//7qO3jXp5NC76LwfAZpNrO', 'rvuWJHMd5LTxLC2J', '$2y$10$LDUi4w/UAM2PgfMoKkLo4.igJX39G5/WQOEDHRaDy3y2KZeIxXggm', '2019-02-16 22:39:57', 'super'),
(7, 'anand', '$2y$10$OrQFRZdSUP3X2kvGZrg.zeplQkxcJAq1s6atRehyCpbEvOVPu8KPe', NULL, NULL, NULL, 'admin'),
(8, 'admin', '$2y$10$RnDwpen5c8.gtZLaxHEHDOKWY77t/20A4RRkWBsjlPuu7Wmy0HyBu', 'MyG5Xw2I12EWdJeD', '$2y$10$XL/RhpCz.uQoWE1xV77Wje4I4ker.gtg7YV4yqNwLZfzIYnP7E8Na', '2019-08-22 01:12:33', 'admin');

-- Table structure for table `therapists`

CREATE TABLE `therapists` (
  `id` int(10) NOT NULL,
  `f_name` varchar(25) NOT NULL,
  `l_name` varchar(25) NOT NULL,
  `gender` varchar(6) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `city` varchar(15) DEFAULT NULL,
  `state` varchar(30) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `therapists`
--

INSERT INTO `therapists` (`id`, `f_name`, `l_name`, `gender`, `address`, `city`, `state`, `phone`, `email`, `date_of_birth`, `created_at`, `updated_at`) VALUES
(1, 'chetan', 'Shenai', 'female', 'waaw awf', NULL, 'Maharashtra', '99878', 'chetanshenai9@gmail.com', '2019-07-23', '2019-07-22 20:12:30', '2019-07-22 20:12:41'),
(2, 'Cfree', 'wawfaf', 'male', 'piohh', NULL, 'Madhya pradesh', '09975342821', 'cgtarta@ll.com', '2020-10-14', '2020-10-24 15:46:45', '2020-10-24 15:46:53');


-- Table structure for table `patients`

CREATE TABLE `patients` (
  `id` int(10) NOT NULL,
  `f_name` varchar(25) NOT NULL,
  `l_name` varchar(25) NOT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `city` varchar(15) DEFAULT NULL,
  `state` varchar(30) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table `patients`

INSERT INTO `patients` (`id`, `f_name`, `l_name`, `gender`, `address`, `city`, `state`, `phone`, `email`, `date_of_birth`, `created_at`, `updated_at`) VALUES
(1, 'chetan', 'Shenai', 'female', 'waaw awf', NULL, 'Maharashtra', '99878', 'chetanshenai9@gmail.com', '2019-07-23', '2019-07-22 20:12:30', '2019-07-22 20:12:41'),
(2, 'Cfree', 'wawfaf', 'male', 'piohh', NULL, 'Madhya pradesh', '09975342821', 'cgtarta@ll.com', '2020-10-14', '2020-10-24 15:46:45', '2020-10-24 15:46:53');

-- Table structure for table `appointments`

CREATE TABLE `appointments` (
  `id` int(10) NOT NULL,
  `appointment` varchar(55) NOT NULL,
  `therapist` varchar(25) NOT NULL,
  `patient` varchar(6) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `room` varchar(6) DEFAULT NULL,
  `city` varchar(15) DEFAULT NULL,
  `state` varchar(30) DEFAULT NULL,
  `patient_phone` varchar(15) DEFAULT NULL,
  `patient_email` varchar(50) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` varchar(30) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table `appointments`

INSERT INTO `appointments` (`id`, `appointment`, `therapist`,  `patient`,`gender`, `room`, `city`, `state`, `patient_phone`, `patient_email`, `date`, `status`,`created_at`, `updated_at`) VALUES
(1, 'stress management', 'Shenai', 'joan','female', '4C', NULL, 'Maharashtra', '99878', 'chetanshenai9@gmail.com', '2019-07-23','ongoing', '2019-07-22 20:12:30', '2019-07-22 20:12:41'),
(2, 'Family Planning', 'Miguel', 'Carlos', 'male', '1J', NULL, 'Madhya pradesh', '09975342821', 'cgtarta@ll.com', '2020-10-14', 'pending','2020-10-24 15:46:45', '2020-10-24 15:46:53');


CREATE TABLE `rooms` (
  `id` int(10) NOT NULL,
  `floor` varchar(55) NOT NULL,
  `session` varchar(25) NOT NULL,
  `room_number` varchar (20) NOT NULL,
  `city` varchar(15) DEFAULT NULL,
  `state` varchar(30) DEFAULT NULL,
  `status` varchar(30) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table `rooms`

INSERT INTO `rooms` (`id`, `floor`, `session`,  `room_number`,`city`, `state`, `status`, `created_at`, `updated_at`) VALUES
(1, 'first', 'stress management', '1B', NULL, 'Maharashtra', 'occupied', '2019-07-22 20:12:30', '2019-07-22 20:12:41'),
(2, 'second','Family Planning', '1J', NULL, 'Madhya pradesh', 'available','2020-10-24 15:46:45', '2020-10-24 15:46:53');

-- Indexes for dumped tables

ALTER TABLE `admin_accounts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_name` (`user_name`);

ALTER TABLE `therapists`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

  ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--
-- AUTO_INCREMENT for table `admin_accounts`
--
ALTER TABLE `admin_accounts`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `therapists`
--
ALTER TABLE `therapists`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

-- AUTO_INCREMENT for table `apppointments`
ALTER TABLE `appointments`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

-- AUTO_INCREMENT for table `rooms`
ALTER TABLE `rooms`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;