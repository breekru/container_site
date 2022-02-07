CREATE DATABASE `wps`;
CREATE TABLE `intake` (
  `id` int(25) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `phone_num` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `dev_type` varchar(25) NOT NULL,
  `sn` varchar(25) NOT NULL,
  `issue` longtext NOT NULL,
  `acc_power` varchar(25) NOT NULL,
  `acc_mouse` varchar(25) NOT NULL,
  `acc_keyboard` varchar(25) NOT NULL,
  `acc_hdd` varchar(25) NOT NULL,
  `perm1` varchar(25) NOT NULL,
  `perm2` varchar(25) NOT NULL
);




ALTER TABLE `intake`
CHANGE `acc_power` `acc_power` varchar(25) COLLATE 'utf8mb4_0900_ai_ci' NULL AFTER `issue`,
CHANGE `acc_mouse` `acc_mouse` varchar(25) COLLATE 'utf8mb4_0900_ai_ci' NULL AFTER `acc_power`,
CHANGE `acc_keyboard` `acc_keyboard` varchar(25) COLLATE 'utf8mb4_0900_ai_ci' NULL AFTER `acc_mouse`,
CHANGE `acc_hdd` `acc_hdd` varchar(25) COLLATE 'utf8mb4_0900_ai_ci' NULL AFTER `acc_keyboard`;