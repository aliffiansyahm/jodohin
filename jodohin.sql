-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2019 at 04:09 PM
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
-- Database: `jodohin`
--

-- --------------------------------------------------------

--
-- Table structure for table `follow`
--

CREATE TABLE `follow` (
  `IDFOLLOW` int(11) NOT NULL,
  `IDPENGGUNA` int(11) DEFAULT NULL,
  `IDPENGIKUT` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hobi`
--

CREATE TABLE `hobi` (
  `IDHOBI` int(11) NOT NULL,
  `NAMAHOBI` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hobi`
--

INSERT INTO `hobi` (`IDHOBI`, `NAMAHOBI`) VALUES
(1, 'Blogging'),
(2, 'Memasak'),
(3, 'Menulis');

-- --------------------------------------------------------

--
-- Table structure for table `hobikepengguna`
--

CREATE TABLE `hobikepengguna` (
  `IDHOBIKEPENGGUNA` int(11) NOT NULL,
  `IDPENGGUNA` int(11) DEFAULT NULL,
  `IDHOBI` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hubungan`
--

CREATE TABLE `hubungan` (
  `IDHUBUNGAN` int(11) NOT NULL,
  `IDSTATUS` int(11) DEFAULT NULL,
  `IDPENGGUNA1` int(11) DEFAULT NULL,
  `IDPENGGUNA2` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kepribadian`
--

CREATE TABLE `kepribadian` (
  `IDKEPRIBADIAN` int(11) NOT NULL,
  `NAMAKEPRIBADIAN` varchar(100) DEFAULT NULL,
  `DESKRIPSIKEPRIBADIAN` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kepribadian`
--

INSERT INTO `kepribadian` (`IDKEPRIBADIAN`, `NAMAKEPRIBADIAN`, `DESKRIPSIKEPRIBADIAN`) VALUES
(1, 'Koleris', 'Kepribadian pertama yang disebutkan dalam teori Hippocrate-Galenus adalah Koleris. Koleris dikenal sebagai tipe kepribadian yang memiliki semangat dan selalu optimis. Selain itu sifat tersebut juga disertai dengan keras kepala hingga mudah marah.\r\n\r\nSisi negatif dari sifat koleris ini adalah sifatnya yang tidak sabaran dan menyukai keributan hingga pertengkaran yang berujung perkelahian. Intinya karakter koleris adalah tipe yang memiliki semangat tinggi serta emosi yang meledak-ledak.'),
(2, 'Melankolis', 'Orang yang termasuk golongan Melankolis adalah mereka yang sering merasa khawatir dan orang-orang yang mudah menyerah. Namun kelebihan Melankolis adalah seseorang yang analitis dan sangat kreatif. Walaupun begitu Melankolis kadang sering meremehkan diri mereka sendiri yang pada kenyataannya diri mereka tidak seburuk itu.'),
(3, 'Plegmatis', 'Tidak suka kekerasan dan selalu cinta damai adalah karakter khas dari seorang Plegmatis. Plegmatis juga seorang yang sering menyebarkan kebahagiaan lewat humor-humornya yang jenaka.\r\n\r\nPlegmatis juga orang yang tidak mudah terpengaruh dan tipe yang tidak mau terlihat populer. Plegmatis lebih suka ketenangan dan tidak mau ambil pusing terhadap hal-hal yang menurutnya tidak terlalu penting. Hayo, siapa nih yang Plegmatis?'),
(4, 'Sanguinis', 'Selalu mendahulukan perasaan daripada pemikiran adalah karakter khas tipe Sanguinis. Selalu bersemangat dan hangat kepada setiap orang yang ia temui membuat dirinya dicintai banyak orang akibat keramahannya tersebut.\r\n\r\nSangat tidak suka dengan kesedihan membuat Sanguinis selalu mencari cara untuk terus bahagia. Dan sisi negatif dari Sanguinis adala mereka orang yang takut untuk tidak populer. Mereka menyukai kepopuleran dan akan stress jika mereka tidak populer dalam hidup.');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `IDKOMENTAR` int(11) NOT NULL,
  `IDPENGGUNA` int(11) DEFAULT NULL,
  `IDPOST` int(11) DEFAULT NULL,
  `WAKTUKOMENTAR` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1557727383),
('m130524_201442_init', 1557727386),
('m190124_110200_add_verification_token_column_to_user_table', 1557727387);

-- --------------------------------------------------------

--
-- Table structure for table `notifikasi`
--

CREATE TABLE `notifikasi` (
  `IDNOTIFIKASI` int(11) NOT NULL,
  `IDPENGIRIMNOTIF` int(11) DEFAULT NULL,
  `IDTYPENOTIFIKASI` int(11) DEFAULT NULL,
  `IDPENERIMANOTIF` int(11) DEFAULT NULL,
  `ISI` varchar(200) DEFAULT NULL,
  `WAKTUNOTIFIKASI` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `STATUSNOTIFIKASI` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notifikasi`
--

INSERT INTO `notifikasi` (`IDNOTIFIKASI`, `IDPENGIRIMNOTIF`, `IDTYPENOTIFIKASI`, `IDPENERIMANOTIF`, `ISI`, `WAKTUNOTIFIKASI`, `STATUSNOTIFIKASI`) VALUES
(1, 3, 2, 4, '2 suka foto 1', '2019-05-27 07:03:49', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `IDPENGGUNA` int(11) NOT NULL,
  `IDKEPRIBADIAN` int(11) DEFAULT NULL,
  `EMAIL` varchar(100) DEFAULT NULL,
  `PASSWORD` varchar(32) DEFAULT NULL,
  `NAMA` varchar(100) DEFAULT NULL,
  `TANGGALLAHIR` date DEFAULT NULL,
  `ALAMAT` varchar(200) DEFAULT NULL,
  `BIO` varchar(200) DEFAULT NULL,
  `FOTO` varchar(300) DEFAULT NULL,
  `JENISKELAMIN` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`IDPENGGUNA`, `IDKEPRIBADIAN`, `EMAIL`, `PASSWORD`, `NAMA`, `TANGGALLAHIR`, `ALAMAT`, `BIO`, `FOTO`, `JENISKELAMIN`) VALUES
(3, NULL, 'lulu@gmail.com', 'lulululu', 'lulu', NULL, '', '', '', 'Perempuan'),
(4, NULL, 'fian@gmail.com', 'fianfian', 'fian', '1999-02-08', '', 'hai semmuanya', '', 'Laki Laki');

-- --------------------------------------------------------

--
-- Table structure for table `pertanyaan`
--

CREATE TABLE `pertanyaan` (
  `IDPERTANYAAN` int(11) NOT NULL,
  `PERTANYAAN` varchar(500) DEFAULT NULL,
  `PILIHAN1` varchar(200) DEFAULT NULL,
  `PILIHAN2` varchar(200) DEFAULT NULL,
  `PILIHAN3` varchar(200) DEFAULT NULL,
  `PILIHAN4` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pertanyaan`
--

INSERT INTO `pertanyaan` (`IDPERTANYAAN`, `PERTANYAAN`, `PILIHAN1`, `PILIHAN2`, `PILIHAN3`, `PILIHAN4`) VALUES
(1, 'Pilihlah salah satu dari pilihan di bawah ini yang merupakan KELEMAHAN anda ! (Jawablah dengan sejujur-jujurnya)', 'Suka pamer, memperlihatkan apa yang gemerlap dan kuat, terlalu bersuara.', 'Suka memerintah, mendominasi, kadang-kadang mengesalkan antar hubungan orang dewasa.', 'Menghindari perhatian akibat rasa malu.', 'Memperlihatkan sedikit emosi/mimik.'),
(2, 'Pilihlah salah satu dari pilihan di bawah ini yang merupakan KELEMAHAN anda ! (Jawablah dengan sejujur-jujurnya)', 'Kurang teraturannya mempengaruhi hampir semua bidang kehidupannya.', 'Merasa sulit mengenali masalah dan perasaan orang lain.', 'Sulit memaafkan dan melupakan sakit hati yang pernah dilakukan, biasa mendendam.', 'Cenderung tidak bergairah, sering merasa bahwa bagaimanapun sesuatu tidak akan berhasil.'),
(3, 'Pilihlah salah satu dari pilihan di bawah ini yang merupakan KELEMAHAN anda ! (Jawablah dengan sejujur-jujurnya)', 'Suka menceritakan kembali suatu kisah tanpa menyadari bahwa cerita tersebut pernah diceritakan sebelumnya, selalu perlu sesuatu untuk dikatakan.', 'Berjuang, melawan untuk menerima cara lain yang tidak sesuai dengan cara yang diinginkan.', 'Sering memendam rasa tidak senang akibat merasa tersinggung oleh sesuatu.', 'Tidak bersedia ikut terlibat terutama bila rumit.'),
(4, 'Pilihlah salah satu dari pilihan di bawah ini yang merupakan KELEMAHAN anda ! (Jawablah dengan sejujur-jujurnya)', 'Punya ingatan kurang kuat, biasanya berkaitan dengan kurang disiplin dan tidak mau repot-repot mencatat hal-hal yang tidak menyenangkan.', 'Langsung, blak-blakan, tidak sungkan mengatakan apa yang dipikirkan.', 'Bersikeras tentang persoalan sepele, minta perhatian besar pada persoalan yang tidak penting.', 'Sering merasa sangat khawatir, sedih, dan gelisah.'),
(5, 'Pilihlah salah satu dari pilihan di bawah ini yang merupakan KELEMAHAN anda ! (Jawablah dengan sejujur-jujurnya)', 'Lebih banyak bicara daripada mendengarkan, bila sudah bicara sulit berhenti.', 'Sulit bertahan untuk menghadapi kekesalan.', 'Kurang percaya diri.', 'Sulit dalam membuat keputusan.'),
(6, 'Pilihlah salah satu dari pilihan di bawah ini yang merupakan KEKUATAN anda ! (Jawablah dengan sejujur-jujurnya)', 'Penuh kehidupan, sering menggunakan isyarat tangan, lengan, dan wajah secara hidup.', 'Orang yang mau melakukan sesuatu hal yang baru dan berani bertekad untuk menguasainya.', 'Suka menyelidiki bagian-bagian yang logis.', 'Mudah menyesuaikan diri dan senang dalam setiap situasi.'),
(7, 'Pilihlah salah satu dari pilihan di bawah ini yang merupakan KEKUATAN anda ! (Jawablah dengan sejujur-jujurnya)', 'Penuh kesenangan dan selera humor yang baik.', 'Meyakinkan seseorang dengan logika dan fakta, bukan dengan pesona atau kekuasaan.', 'Melakukan sesuatu sampai selesai sebelum memulai yang lain.', 'Tampak tidak terganggu dan tenang serta menghindari setiap bentuk kekacauan.'),
(8, 'Pilihlah salah satu dari pilihan di bawah ini yang merupakan KEKUATAN anda ! (Jawablah dengan sejujur-jujurnya)', 'Orang yang memandang bersama orang lain sebagai kesempatan untuk bersikap manis dan menghibur, bukannya sebagai tantangan atau kesempatan bisnis.', 'Orang yang yakin dengan caranya sendiri.', 'Bersedia mengorbankan dirinya untuk memenuhi kebutuhan orang lain.', 'Dengan mudah menerima pandangan atau keinginan orang lain tanpa perlu banyak mengungkapkan pendapat sendiri.'),
(9, 'Pilihlah salah satu dari pilihan di bawah ini yang merupakan KEKUATAN anda ! (Jawablah dengan sejujur-jujurnya)', 'Bisa merebut hati orang lain melalui pesona kepribadian.', 'Mengubah setiap situasi, kejadian atau permainan sebagai sebuah kontes dan selalu bermain untuk menang.', 'Menghargai keperluan dan perasaan orang lain.', 'Mempunyai perasaan emosional tapi jarang memperlihatkannya.'),
(10, 'Pilihlah salah satu dari pilihan di bawah ini yang merupakan KEKUATAN anda ! (Jawablah dengan sejujur-jujurnya)', 'Memperbaharui dan membantu membuat orang lain merasa senang.', 'Bisa bertindak cepat dan efektif dalam semua situasi.', 'Memperlakukan orang lain dengan segan sebagai penghormatan dan penghargaan.', 'Menahan diri dalam menunjukkan emosi atau antusiasme.'),
(11, 'Pilihlah salah satu dari pilihan di bawah ini yang merupakan KELEMAHAN anda ! (Jawablah dengan sejujur-jujurnya)', 'Bisa bergairah sesaat dan sedih pada saat berikutnya. Bersedia membantu kemudian menghilang. Berjanji akan datang tapi kemudian lupa untuk muncul.', 'Merasa sulit memperlihatkan kasih sayang dengan terbuka.', 'Tuntutannya akan kesempurnaan terlalu tinggi dan dapat membuat orang lain menjauhinya.', 'Tidak tertarik pada perkumpulan atau kelompok.'),
(12, 'Pilihlah salah satu dari pilihan di bawah ini yang merupakan KELEMAHAN anda ! (Jawablah dengan sejujur-jujurnya)', 'Tidak punya cara yang konsisten untuk melakukan banyak hal.', 'Bersikeras memaksakan caranya sendiri.', 'Standar yang ditetapkan begitu tinggi sehingga orang lain sulit memuaskannya.', 'Lambat dalam bergerak dan sulit untuk ikut terlibat.'),
(13, 'Pilihlah salah satu dari pilihan di bawah ini yang merupakan KELEMAHAN anda ! (Jawablah dengan sejujur-jujurnya)', 'Memperbolehkan orang lain, termasuk anak-anak untuk melakukan apa saja sesukanya untuk menghindari diri kita tidak disukai.', 'Punya harga diri tinggi dan menganggap diri selalu benar dan yang terbaik dalam pekerjaan.', 'Dalam mengharapkan yang terbaik, biasanya melihat sisi buruk sesuatu terlebih dahulu.', 'Memiliki kepribadian yang biasa saja dan tidak suka memperlihatkan banyak emosi.'),
(14, 'Pilihlah salah satu dari pilihan di bawah ini yang merupakan KELEMAHAN anda ! (Jawablah dengan sejujur-jujurnya)', 'Memiliki perangai seperti anak-anak yang mengutarakan diri dengan ngambek dan berbuat berlebihan tetapi kemudian melupakannya seketika.', 'Mengobarkan perdebatan karena biasanya selalu benar dan terkadang tidak peduli bagaimana situasi saat itu.', 'Mudah merasa terasing dari orang lain dikarenakan rasa tidak aman atau takut jangan-jangan orang lain tidak merasa senang bersamanya.', 'Bukan orang yang suka menetapkan tujuan dan tidak berharap menjadi orang yang seperti itu.'),
(15, 'Pilihlah salah satu dari pilihan di bawah ini yang merupakan KELEMAHAN anda ! (Jawablah dengan sejujur-jujurnya)', 'Memiliki perspektif yang sederhana dan kekanak-kanakan, kurang pengertian terhadap tingkat kehidupan yang lebih mendalam.', 'Penuh keyakinan, semangat, dan keberanian (sering dalam pengertian negatif).', 'Sikapnya jarang positif dan sering hanya melihat sisi buruk dari setiap situasi.', 'Mudah bergaul, tidak peduli, dan masa bodoh.'),
(16, 'Pilihlah salah satu dari pilihan di bawah ini yang merupakan KEKUATAN anda ! (Jawablah dengan sejujur-jujurnya)', 'Penuh gairah dalam kehidupan.', 'Orang mandiri yang bisa sepenuhnya mengandalkan kemampuan dan sumber dayanya sendiri.', 'Secara intensif memperhatikan orang lain maupun hal apapun yang terjadi di sekitar.', 'Orang yang mudah menerima keadaan atau situasi apa saja.'),
(17, 'Pilihlah salah satu dari pilihan di bawah ini yang merupakan KEKUATAN anda ! (Jawablah dengan sejujur-jujurnya)', 'Dapat mendorong atau memaksa orang lain mengikuti dan bergabung melalui pesona kepribadiannya.', 'Mengetahui segalanya akan beres bila kita yang memimpin.', 'Memilih mempersiapkan aturan yang terinci sebelumnya dalam menyelesaikan suatu proyek dan lebih menyukai keterlibatan dalam tahap-tahap perencanaan dan produk jadi, bukan dalam melaksanakan tugas.', 'Tidak terpengaruh oleh penundaan. Tetap tenang dan toleran.'),
(18, 'Pilihlah salah satu dari pilihan di bawah ini yang merupakan KEKUATAN anda ! (Jawablah dengan sejujur-jujurnya)', 'Memilih agar semua kehidupan adalah kegiatan yang impulsif, tidak dipikirkan terlebih dahulu dan tidak terhambat oleh rencana.', 'Yakin, tidak ragu-ragu.', 'Membuat dan menghayati hidup menurut rencana sehari-hari. Tidak menyukai bila rencananya terganggu.', 'Pendiam, tidak mudah terseret dalam percakapan.'),
(19, 'Pilihlah salah satu dari pilihan di bawah ini yang merupakan KEKUATAN anda ! (Jawablah dengan sejujur-jujurnya)', 'Orang yang periang dan dapat meyakinkan diri sendiri dan orang lain bahwa semuanya akan beres.', 'Bicara terang-terangan dan terkadang tidak menahan diri.', 'Orang yang mengatur segala-galanya secara sistematis dan metodis.', 'Bisa menerima apa saja, cepat melakukan sesuatu bahkan dengan cara orang lain.'),
(20, 'Pilihlah salah satu dari pilihan di bawah ini yang merupakan KEKUATAN anda ! (Jawablah dengan sejujur-jujurnya)', 'Punya rasa humor yang cemerlang dan bisa membuat cerita apa saja menjadi peristiwa yang menyenangkan.', 'Pribadi yang mendominasi dan mampu menyebabkan orang lain ragu-ragu untuk melawannya.', 'Secara konsisten dapat diandalkan, teguh, setia, dan mengabdi, bahkan terkadang tanpa alasan.', 'Orang yang menanggapi. Bukan orang yang punya inisiatif untuk memulai percakapan.');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `IDPESAN` int(11) NOT NULL,
  `IDPENGIRIMPESAN` int(11) DEFAULT NULL,
  `IDTIPEPESAN` int(11) DEFAULT NULL,
  `IDPENERIMAPESAN` int(11) DEFAULT NULL,
  `ISIPESAN` varchar(200) DEFAULT NULL,
  `WAKTUPESAN` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `IDPOST` int(11) NOT NULL,
  `IDPENGGUNA` int(11) DEFAULT NULL,
  `GAMBARPOST` varchar(200) DEFAULT NULL,
  `CAPTION` varchar(200) DEFAULT NULL,
  `WAKTUPOST` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`IDPOST`, `IDPENGGUNA`, `GAMBARPOST`, `CAPTION`, `WAKTUPOST`) VALUES
(1, 4, '', 'post fian pertama', NULL),
(2, 4, '', 'post fian ke 2\r\n', NULL),
(3, 4, '', '33 fian\r\n', '0000-00-00'),
(4, 3, '', 'lulu post 1\r\n', '2019-05-26'),
(5, 4, '', 'post 4 fian\r\n', '2019-05-26'),
(6, 4, '', 'gambar 1', '2019-05-26'),
(7, 4, '', 'gambar 1', '2019-05-26'),
(8, 4, 'Capture5.png', 'gambar 1', '2019-05-26'),
(9, 4, 'Capture7.png', 'network', '2019-05-26');

-- --------------------------------------------------------

--
-- Table structure for table `suka`
--

CREATE TABLE `suka` (
  `IDSUKA` int(11) NOT NULL,
  `IDPENGGUNA` int(11) DEFAULT NULL,
  `IDPOST` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tipenotifiikasi`
--

CREATE TABLE `tipenotifiikasi` (
  `IDTYPENOTIFIKASI` int(11) NOT NULL,
  `TIPENOTIFIKASI` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tipenotifiikasi`
--

INSERT INTO `tipenotifiikasi` (`IDTYPENOTIFIKASI`, `TIPENOTIFIKASI`) VALUES
(1, 'Pesan Pribadi'),
(2, 'Suka');

-- --------------------------------------------------------

--
-- Table structure for table `tipepesan`
--

CREATE TABLE `tipepesan` (
  `IDTIPEPESAN` int(11) NOT NULL,
  `NAMATIPEPESAN` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tipestatus`
--

CREATE TABLE `tipestatus` (
  `IDSTATUS` int(11) NOT NULL,
  `NAMASTATUS` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `verification_token`) VALUES
(2, 'fian', '76qopdwJ9TM6b9ctBfN1wL7jR7RTgSDx', '$2y$13$xsvXUUsHw2tD5O4RbQGgZO6rp.ynEJwWHHTRFfg8zf9j8m8T12yhC', NULL, 'fian@gmail.com', 10, 1557733206, 1557733206, 'qhgcj3GAqYfktsUxS5AEAlOe8zIq4foW_1557733206');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `follow`
--
ALTER TABLE `follow`
  ADD PRIMARY KEY (`IDFOLLOW`),
  ADD UNIQUE KEY `FOLLOW_PK` (`IDFOLLOW`),
  ADD KEY `PENGGUNANYA_FK` (`IDPENGIKUT`),
  ADD KEY `PENGIKUTNYA_FK` (`IDPENGGUNA`);

--
-- Indexes for table `hobi`
--
ALTER TABLE `hobi`
  ADD PRIMARY KEY (`IDHOBI`),
  ADD UNIQUE KEY `HOBI_PK` (`IDHOBI`);

--
-- Indexes for table `hobikepengguna`
--
ALTER TABLE `hobikepengguna`
  ADD PRIMARY KEY (`IDHOBIKEPENGGUNA`),
  ADD UNIQUE KEY `HOBIKEPENGGUNA_PK` (`IDHOBIKEPENGGUNA`),
  ADD KEY `JENIS_HOBINNYA_APA_FK` (`IDHOBI`),
  ADD KEY `HOBI_PENGGUNA_APA_FK` (`IDPENGGUNA`);

--
-- Indexes for table `hubungan`
--
ALTER TABLE `hubungan`
  ADD PRIMARY KEY (`IDHUBUNGAN`),
  ADD UNIQUE KEY `HUBUNGAN_PK` (`IDHUBUNGAN`),
  ADD KEY `TIPE_HUBUNGANNYA_APA_FK` (`IDSTATUS`),
  ADD KEY `PENGGUNAPERTAMA_FK` (`IDPENGGUNA1`),
  ADD KEY `PENGGUNAKEDUA_FK` (`IDPENGGUNA2`);

--
-- Indexes for table `kepribadian`
--
ALTER TABLE `kepribadian`
  ADD PRIMARY KEY (`IDKEPRIBADIAN`),
  ADD UNIQUE KEY `KEPRIBADIAN_PK` (`IDKEPRIBADIAN`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`IDKOMENTAR`),
  ADD UNIQUE KEY `KOMENTAR_PK` (`IDKOMENTAR`),
  ADD KEY `SIAPA_YANG_BERKOMETAR_DI_POST_FK` (`IDPENGGUNA`),
  ADD KEY `KOMENTAR_PADA_POST_FK` (`IDPOST`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `notifikasi`
--
ALTER TABLE `notifikasi`
  ADD PRIMARY KEY (`IDNOTIFIKASI`),
  ADD UNIQUE KEY `NOTIFIKASI_PK` (`IDNOTIFIKASI`),
  ADD KEY `RELATIONSHIP_3_FK` (`IDTYPENOTIFIKASI`),
  ADD KEY `PENGIRIMNOTIFIKASI_FK` (`IDPENGIRIMNOTIF`),
  ADD KEY `PENERIMANOTIFIKASI_FK` (`IDPENERIMANOTIF`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`IDPENGGUNA`),
  ADD UNIQUE KEY `PENGGUNA_PK` (`IDPENGGUNA`),
  ADD KEY `KEPRIBADIAN_PENGGUNA_APA_FK` (`IDKEPRIBADIAN`);

--
-- Indexes for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD PRIMARY KEY (`IDPERTANYAAN`),
  ADD UNIQUE KEY `PERTANYAAN_PK` (`IDPERTANYAAN`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`IDPESAN`),
  ADD UNIQUE KEY `PESAN_PK` (`IDPESAN`),
  ADD KEY `PENGIRIMPESAN_FK` (`IDPENERIMAPESAN`),
  ADD KEY `PENERIMAPESAN_FK` (`IDPENGIRIMPESAN`),
  ADD KEY `TIPE_PESANNYA_APA_FK` (`IDTIPEPESAN`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`IDPOST`),
  ADD UNIQUE KEY `POST_PK` (`IDPOST`),
  ADD KEY `PENGGUNA_BUAT_POST_FK` (`IDPENGGUNA`);

--
-- Indexes for table `suka`
--
ALTER TABLE `suka`
  ADD PRIMARY KEY (`IDSUKA`),
  ADD UNIQUE KEY `LIKE_PK` (`IDSUKA`),
  ADD KEY `LIKE_PADA_POST_FK` (`IDPOST`),
  ADD KEY `SIAPA_YANG_LIKE_SUATU_POST_FK` (`IDPENGGUNA`);

--
-- Indexes for table `tipenotifiikasi`
--
ALTER TABLE `tipenotifiikasi`
  ADD PRIMARY KEY (`IDTYPENOTIFIKASI`),
  ADD UNIQUE KEY `TIPENOTIFIIKASI_PK` (`IDTYPENOTIFIKASI`);

--
-- Indexes for table `tipepesan`
--
ALTER TABLE `tipepesan`
  ADD PRIMARY KEY (`IDTIPEPESAN`),
  ADD UNIQUE KEY `TIPEPESAN_PK` (`IDTIPEPESAN`);

--
-- Indexes for table `tipestatus`
--
ALTER TABLE `tipestatus`
  ADD PRIMARY KEY (`IDSTATUS`),
  ADD UNIQUE KEY `TIPESTATUS_PK` (`IDSTATUS`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `follow`
--
ALTER TABLE `follow`
  MODIFY `IDFOLLOW` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hobi`
--
ALTER TABLE `hobi`
  MODIFY `IDHOBI` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hobikepengguna`
--
ALTER TABLE `hobikepengguna`
  MODIFY `IDHOBIKEPENGGUNA` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hubungan`
--
ALTER TABLE `hubungan`
  MODIFY `IDHUBUNGAN` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kepribadian`
--
ALTER TABLE `kepribadian`
  MODIFY `IDKEPRIBADIAN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `IDKOMENTAR` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notifikasi`
--
ALTER TABLE `notifikasi`
  MODIFY `IDNOTIFIKASI` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `IDPENGGUNA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  MODIFY `IDPERTANYAAN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `IDPESAN` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `IDPOST` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `suka`
--
ALTER TABLE `suka`
  MODIFY `IDSUKA` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tipenotifiikasi`
--
ALTER TABLE `tipenotifiikasi`
  MODIFY `IDTYPENOTIFIKASI` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tipepesan`
--
ALTER TABLE `tipepesan`
  MODIFY `IDTIPEPESAN` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tipestatus`
--
ALTER TABLE `tipestatus`
  MODIFY `IDSTATUS` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `follow`
--
ALTER TABLE `follow`
  ADD CONSTRAINT `FK_FOLLOW_PENGGUNAN_PENGGUNA` FOREIGN KEY (`IDPENGIKUT`) REFERENCES `pengguna` (`IDPENGGUNA`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_FOLLOW_PENGIKUTN_PENGGUNA` FOREIGN KEY (`IDPENGGUNA`) REFERENCES `pengguna` (`IDPENGGUNA`) ON DELETE CASCADE;

--
-- Constraints for table `hobikepengguna`
--
ALTER TABLE `hobikepengguna`
  ADD CONSTRAINT `FK_HOBIKEPE_HOBI_PENG_PENGGUNA` FOREIGN KEY (`IDPENGGUNA`) REFERENCES `pengguna` (`IDPENGGUNA`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_HOBIKEPE_JENIS_HOB_HOBI` FOREIGN KEY (`IDHOBI`) REFERENCES `hobi` (`IDHOBI`);

--
-- Constraints for table `hubungan`
--
ALTER TABLE `hubungan`
  ADD CONSTRAINT `FK_HUBUNGAN_PENGGUNAK_PENGGUNA` FOREIGN KEY (`IDPENGGUNA2`) REFERENCES `pengguna` (`IDPENGGUNA`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_HUBUNGAN_PENGGUNAP_PENGGUNA` FOREIGN KEY (`IDPENGGUNA1`) REFERENCES `pengguna` (`IDPENGGUNA`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_HUBUNGAN_TIPE_HUBU_TIPESTAT` FOREIGN KEY (`IDSTATUS`) REFERENCES `tipestatus` (`IDSTATUS`);

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `FK_KOMENTAR_KOMENTAR__POST` FOREIGN KEY (`IDPOST`) REFERENCES `post` (`IDPOST`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_KOMENTAR_SIAPA_YAN_PENGGUNA` FOREIGN KEY (`IDPENGGUNA`) REFERENCES `pengguna` (`IDPENGGUNA`) ON DELETE CASCADE;

--
-- Constraints for table `notifikasi`
--
ALTER TABLE `notifikasi`
  ADD CONSTRAINT `FK_NOTIFIKA_PENERIMAN_PENGGUNA` FOREIGN KEY (`IDPENERIMANOTIF`) REFERENCES `pengguna` (`IDPENGGUNA`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_NOTIFIKA_PENGIRIMN_PENGGUNA` FOREIGN KEY (`IDPENGIRIMNOTIF`) REFERENCES `pengguna` (`IDPENGGUNA`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_NOTIFIKA_RELATIONS_TIPENOTI` FOREIGN KEY (`IDTYPENOTIFIKASI`) REFERENCES `tipenotifiikasi` (`IDTYPENOTIFIKASI`);

--
-- Constraints for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD CONSTRAINT `FK_PENGGUNA_KEPRIBADI_KEPRIBAD` FOREIGN KEY (`IDKEPRIBADIAN`) REFERENCES `kepribadian` (`IDKEPRIBADIAN`);

--
-- Constraints for table `pesan`
--
ALTER TABLE `pesan`
  ADD CONSTRAINT `FK_PESAN_PENERIMAP_PENGGUNA` FOREIGN KEY (`IDPENGIRIMPESAN`) REFERENCES `pengguna` (`IDPENGGUNA`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_PESAN_PENGIRIMP_PENGGUNA` FOREIGN KEY (`IDPENERIMAPESAN`) REFERENCES `pengguna` (`IDPENGGUNA`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_PESAN_TIPE_PESA_TIPEPESA` FOREIGN KEY (`IDTIPEPESAN`) REFERENCES `tipepesan` (`IDTIPEPESAN`);

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `FK_POST_PENGGUNA__PENGGUNA` FOREIGN KEY (`IDPENGGUNA`) REFERENCES `pengguna` (`IDPENGGUNA`) ON DELETE CASCADE;

--
-- Constraints for table `suka`
--
ALTER TABLE `suka`
  ADD CONSTRAINT `FK_SUKA_LIKE_PADA_POST` FOREIGN KEY (`IDPOST`) REFERENCES `post` (`IDPOST`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_SUKA_SIAPA_YAN_PENGGUNA` FOREIGN KEY (`IDPENGGUNA`) REFERENCES `pengguna` (`IDPENGGUNA`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
