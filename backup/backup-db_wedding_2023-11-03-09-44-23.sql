SET foreign_key_checks = 0;
#
# TABLE STRUCTURE FOR: tbl_amplop
#

DROP TABLE IF EXISTS `tbl_amplop`;

CREATE TABLE `tbl_amplop` (
  `id_amplop` int(11) NOT NULL AUTO_INCREMENT,
  `no_hp_rek` varchar(30) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `foto` text NOT NULL,
  PRIMARY KEY (`id_amplop`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

INSERT INTO `tbl_amplop` (`id_amplop`, `no_hp_rek`, `nama`, `foto`) VALUES (1, '0895336769180', 'Vieri Satria Ardiansyah', 'dana.png');
INSERT INTO `tbl_amplop` (`id_amplop`, `no_hp_rek`, `nama`, `foto`) VALUES (3, '085711067008', 'Renita Dwika Sari', 'dana1.png');


#
# TABLE STRUCTURE FOR: tbl_cerita
#

DROP TABLE IF EXISTS `tbl_cerita`;

CREATE TABLE `tbl_cerita` (
  `id_cerita` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` text NOT NULL,
  `foto` text NOT NULL,
  PRIMARY KEY (`id_cerita`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

#
# TABLE STRUCTURE FOR: tbl_galeri
#

DROP TABLE IF EXISTS `tbl_galeri`;

CREATE TABLE `tbl_galeri` (
  `id_galeri` int(11) NOT NULL AUTO_INCREMENT,
  `foto` text NOT NULL,
  `created_update` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id_galeri`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

INSERT INTO `tbl_galeri` (`id_galeri`, `foto`, `created_update`) VALUES (1, 'foto1.jpg', '2023-10-26 14:00:40');
INSERT INTO `tbl_galeri` (`id_galeri`, `foto`, `created_update`) VALUES (2, 'foto11.jpg', '2023-10-26 14:00:40');
INSERT INTO `tbl_galeri` (`id_galeri`, `foto`, `created_update`) VALUES (3, 'foto12.jpg', '2023-10-26 14:00:40');
INSERT INTO `tbl_galeri` (`id_galeri`, `foto`, `created_update`) VALUES (4, 'foto13.jpg', '2023-10-26 14:00:40');
INSERT INTO `tbl_galeri` (`id_galeri`, `foto`, `created_update`) VALUES (5, 'foto14.jpg', '2023-10-26 14:00:40');
INSERT INTO `tbl_galeri` (`id_galeri`, `foto`, `created_update`) VALUES (6, 'foto15.jpg', '2023-10-26 14:00:40');
INSERT INTO `tbl_galeri` (`id_galeri`, `foto`, `created_update`) VALUES (7, 'foto16.jpg', '2023-10-26 14:00:40');
INSERT INTO `tbl_galeri` (`id_galeri`, `foto`, `created_update`) VALUES (8, 'foto17.jpg', '2023-10-26 14:00:40');


#
# TABLE STRUCTURE FOR: tbl_jadwal
#

DROP TABLE IF EXISTS `tbl_jadwal`;

CREATE TABLE `tbl_jadwal` (
  `id_jadwal` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `hari` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `link_maps` text NOT NULL,
  PRIMARY KEY (`id_jadwal`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

INSERT INTO `tbl_jadwal` (`id_jadwal`, `judul`, `alamat`, `hari`, `tanggal`, `jam`, `link_maps`) VALUES (1, 'Akad', 'Gedung Olahraga - Pasar Kemis Tangerang', 'Sabtu', '2024-04-28', '11:09:00', '');
INSERT INTO `tbl_jadwal` (`id_jadwal`, `judul`, `alamat`, `hari`, `tanggal`, `jam`, `link_maps`) VALUES (2, 'Resepsi', 'Ps. Kemis, Kec. Ps. Kemis, Kabupaten Tangerang, Banten 15560', 'Sabtu', '2024-04-28', '13:00:00', 'https://maps.app.goo.gl/uAgLYemb4YfQVKyo9');


#
# TABLE STRUCTURE FOR: tbl_mempelai
#

DROP TABLE IF EXISTS `tbl_mempelai`;

CREATE TABLE `tbl_mempelai` (
  `id_mempelai` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `image` text NOT NULL,
  `ket` text NOT NULL,
  `ayah` varchar(30) NOT NULL,
  `ibu` varchar(30) NOT NULL,
  PRIMARY KEY (`id_mempelai`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

INSERT INTO `tbl_mempelai` (`id_mempelai`, `nama`, `image`, `ket`, `ayah`, `ibu`) VALUES (1, 'Vieri Satria Ardiansyah S.Kom', 'logo_support_21.jpg', 'Putra Pertama dari ', 'Bpk. Hardi Suhardiman', 'Ibu Sunarti');
INSERT INTO `tbl_mempelai` (`id_mempelai`, `nama`, `image`, `ket`, `ayah`, `ibu`) VALUES (2, 'Renita Dwika Sari S.E', 'Logo_IT1.png', 'Putri Pertama dari', 'Bpk. Udin S', 'Ibu ErlindaWati');


#
# TABLE STRUCTURE FOR: tbl_ucapan
#

DROP TABLE IF EXISTS `tbl_ucapan`;

CREATE TABLE `tbl_ucapan` (
  `id_ucapan` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `status` enum('Hadir','Belum Pasti','Tidak Hadir') NOT NULL,
  `ucapan_doa` text NOT NULL,
  PRIMARY KEY (`id_ucapan`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

INSERT INTO `tbl_ucapan` (`id_ucapan`, `nama`, `status`, `ucapan_doa`) VALUES (1, 'Gahry Rafi', 'Hadir', 'elamat menempuh kehidupan yang baru. Semoga kakak dan pasanganmu selalu menjadi pasangan yang saling mengasihi satu sama lain dalam ikatan utuh hingga ke surga-Nya. Doaku senantiasa menyertai kalian.');
INSERT INTO `tbl_ucapan` (`id_ucapan`, `nama`, `status`, `ucapan_doa`) VALUES (3, 'Maya Asriyanti', 'Belum Pasti', 'Selamat yaa rere dan vieri semoga sakinah mawaddah dan warahmah');


#
# TABLE STRUCTURE FOR: tbl_user
#

DROP TABLE IF EXISTS `tbl_user`;

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(50) NOT NULL,
  `foto` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

INSERT INTO `tbl_user` (`id`, `nama`, `email`, `username`, `password`, `level`, `foto`) VALUES (1, 'Administrator', 'admin@gmail.com', 'admin', '0b7f047be4b6d88e65a1c8081ccd2428', '1', 'default.jpg');


SET foreign_key_checks = 1;
