-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2018 at 09:48 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `limlim_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

CREATE TABLE `admin_tbl` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(300) NOT NULL,
  `alamat` varchar(300) NOT NULL,
  `user_lavel` varchar(30) NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_tbl`
--

INSERT INTO `admin_tbl` (`username`, `password`, `nama`, `alamat`, `user_lavel`, `datetime`) VALUES
('Ade Putra', 'shuade', 'ade putra', 'jl.antara', 'super admin', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `blog_tbl`
--

CREATE TABLE `blog_tbl` (
  `blog_id` int(30) NOT NULL,
  `blog_name` varchar(200) NOT NULL,
  `blog_dsc` text NOT NULL,
  `blog_foto` varchar(400) NOT NULL,
  `title_seo` varchar(500) NOT NULL,
  `keyword_seo` varchar(500) NOT NULL,
  `description_seo` varchar(500) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_tbl`
--

INSERT INTO `blog_tbl` (`blog_id`, `blog_name`, `blog_dsc`, `blog_foto`, `title_seo`, `keyword_seo`, `description_seo`, `date`) VALUES
(13, '5 Fakta Mengejutkan Thai Tea yang Sedang Digandrungi', 'Teh Thailand yang kini sedang naik daun memang berbeda dari teh lainnya. Thai tea sudah dikenal masyarakat asli Thailand sejak tahun 1980an.\r\nOleh masyarakat lokal, Thai tea dikenal dengan sebutan cha yen, yaitu campuran teh hitam, susu kental manis dan es. Kini Thai tea menjadi bagian utama dari beberapa kuliner Thailand dengan membawa fakta menariknya.\r\n\r\n<br><br>Fakta Thai Tea\r\nThai tea terbuat dari teh, susu, dan gula. Teh Thailand dibuat dari teh Ceylon yang banyak tumbuh di Bai Miang. Ada fakta lain tentang thai tea yang pasti baru kamu tahu, seperti berikut:\r\n\r\n<br><br>Kaya Rempah\r\nYang membedakan Thailand tea dari teh lainnya adalah rempah-rempah. Tahukah kamu, dalam teh Thailand dimasak bersama orange blossom water, star anise, asam jawa, dan rempah lain sehingga kesegaran sangat terasa dalam Thai tea.\r\n\r\n<br><br>Susu Kental Manis\r\nCondensed milk dipilih bukan tanpa alasan. Susu kental manis dinilai lebih kaya rasa dalam minuman ketimbang susu bubuk. Selain itu, gula juga ditambahkan sebagai pemanisnya. Beberapa gerai Thai tea juga menambahkan creamer agar semakin kaya rasa.\r\n\r\n<br><br><br>sumber : http://lifestyle.liputan6.com/read/3025333/5-fakta-mengejutkan-thai-tea-yang-sedang-digandrungi', 'thai_tea_lim-lim.jpg', '', '', '', '2017-12-14 07:12:04'),
(14, 'Fakta di Balik Thai Tea, Minuman yang sedang Tren', 'pasti tahu minuman segar dan nikmat yang sedang tren sekarang ini. Ya, minuman itu adalah thai tea. Dimanapun Anda bisa menemukan gerai teh ini, seperti di Mall, atau di pinggiran jalan. Bahkan di restoran ternama pun menyediakan thai tea sebagai menu minuman mereka.\r\nBerbicara mengenai minuman populer thai tea mungkin selama ini Anda hanya menikmatinya saja. Padahal, ada beberapa fakta menarik yang perlu Anda ketahui. Sudah dikenal masyarakat Thailand sejak 1980 an, simak fakta mengenai thai tea berikut.\r\n<br><br>1. Susu kental manis\r\nAnda yang hobi minum thai tea pasti pernah melihat cara membuatnya. Thai tea selalu menggunakan susu kental manis daripada susu bubuk. Hal ini bukan tanpa alasan, susu kental memiliki rasa yang lebih kaya. Itulah yang membuat thai tea selalu enak dinikmati. Selain itu, gula dan creamer juga suka ditambahkan sebagai penambah rasa.\r\n<br><br>2. Kaya rempah\r\nTahukah Anda bahwa thai tea kaya akan rempah? Inilah yang membedakan thai tea dari teh lainnya. Meski berasal dari Thailand, ada rempah Indonesia pada minuman ini. Thai tea dimasak bersama star anise, asam jawa, blossom water dan beberapa rempah lainya. Sekarang terjawab sudah kesegaran dibalik thai tea.\r\n<br><br>3. Durasi pembuatan\r\nTidak bisa sembarangan dalam membuat thai tea. Jika Anda sering mampir ke gerai thai tea, Anda pasti pernah melihat proses pembuatannya. Memasak thai tea bersama rempahnya membutuhkan waktu 5 menit. Agar lebih maksimal, dibutuhan waktu sekitar 7-8 menit untuk mengentalkan rasanya.\r\n<br><br>4. Antioksidan tinggi\r\nMengonsumsi thai tea juga bermanfaat untuk tubuh Anda. Kaya akan rempah membuat thai tea mengandung banyak zat yang menyehatkan tubuh. Terdapat antioksidan padathai tea sehingga dapat menangkal radikal bebas dan mencegah kanker.\r\n\r\n<br><br><br> sumber : https://merahputih.com/post/read/fakta-dibaik-thai-tea-minuman-yang-sedang-tren', 'thia_tea_limlim_terenak.png', '', '', '', '2017-12-14 07:15:34'),
(15, 'Segarnya Thai Green Tea Racikan Gerai Thai Tea Populer', 'Thailand juga punya racikan teh susu yang enak. Bernama Thai tea, minuman tersedia dalam pilihan original maupun teh hijau. Slurrpp!\r\n\r\n<br><br>Thai tea atau Thai iced tea umumnya dibuat dengan teh hitam atau disebut Bai Miang dalam bahasa setempat. Teh lalu ditambahkan pewarna merah dan oranye sehingga menghasilkan warna khas pada racikan teh ini.\r\n\r\n<br><br>Teh lalu dipadukan dengan gula pasir, krimer, hingga susu kental manis untuk menciptakan paduan rasa lezat. Minuman bisa dinikmati panas maupun dingin.\r\n<br><br>Kami sempat mengintip proses pembuatan Thai green tea di gerai berlogo gajah ini. Dalam gelas, krimer bubuk, gula pasir dan teh hijau diaduk jadi satu.\r\n\r\n<br><br>Sebelumnya teh diseduh dalam teko berpenyaring. Kemudian teh dituang kembali ke teko kosong lainnya. Proses ini dilakukan hingga 4 kali agar warna dan rasa teh hijau semakin kuat.\r\n<br><br>\"Kalau sudah 15 menit, bubuk teh dalam penyaring harus dibuang. Supaya rasanya ngga pahit,\" tutur salah satu pegawai Dum Dum. Selanjutnya, racikan teh hijau ditambahkan susu kental manis dan diaduk rata kembali.\r\n\r\n<br><br>Thai green tea pun siap dimasukkan dalam cup plastik tinggi berisi es batu. \"Langkah terakhir, minuman diberi krimer cair sehingga memberi tekstur creamy,\" ujar pegawai.\r\n<br><br>sumber : https://food.detik.com/info-kuliner/d-3463594/segarnya-thai-green-tea-racikan-gerai-thai-tea-populer\r\n', 'thai_tea_enak_limlim.jpg', '', '', '', '2017-12-14 07:18:46'),
(16, 'Ternyata Inilah Asal-usul Thai Tea yang Belum Banyak Diketahui!', 'Kerajaan Thailand didirikan pada pertengahan abad ke 14. Dikenal dengan nama Siam sampai dengan 1939, Thailand adalah satu-satunya Negara di Asia tenggara yang tidak pernah dikuasai oleh bangsa Eropa. Revolusi damai pada tahun 1932 berujung pada monarki konstitusional. Bekerja sama dengan Jepang pada perang dunia ke-dua, Thailand menjadi ally Amerika setelah konflik yang terjadi.\r\n\r\n<br><br>Walaupun Thailand dari sudut pandang sejarah tidak pernah menjadi negara peminum teh, Thai tea merupakan hal umum di sepanjang sejarah Thailand. Kebanyakan mengenal minuman manis kental yang disebut Thai tea. Biasanya terdiri dari the hitam dengan bunga lawang (star anise), pewarna makanan, kadang dicampur dengan rempah-rempah dan susu kental manis. Disuguhkan secara panas atau dengan es.\r\n\r\n<br><br>Pohon teh adalah tanaman asli dari Thailand Utara, namun penduduk Thailand dan tetangga dekatnya Burma tidak memiliki tradisi meminum teh. Didalam sebuah resep kuno tertulis teh hijau yang direndam dengan air asin dimakan sebagai sayuran. Acar yang asin, dan agak pahit yang dihasilkandisebut “miang” dalam dialek local, adalah teh aneh bagi kebudayaan barat.\r\n\r\n<br><br>Cerita yang lebih baru mengenai bagaimana kultivasi tanaman teh lebih menarik, termasuk didalamnya sedikit sejarah yang berhubungan dengan revolusi China tahun 1949 dan periode perang dingin.\r\n\r\n<br><br>Pada tahun 1949 akhir, sebagian kecil dari pasukan nasionalis Chiang-kei Shek di Yunnan (dikenal dengan nama Guo-min-dang, atau KMT) terpisah dengan pasukan utamanya. Bersamaan dengan itu, pasukan nasionalis yang kalah perang mundur ke Taiwan, meninggalkan pasukan kecil yang terpisah dari KMT Yunnan. Terisolasi, namun tidak gentar, pasukan ini memimpin serangan gerilya terhadap pasukan pembebasan China (PLA). Namun, mereka dipukul mundur ke selatan hingga ke Burma, dimana mereka melanjutkan serangan terhadap para komunis. Pada tahun 1960-1961, mereka dipaksa keluar dari Burma menuju Thailand utara, dimana asimilasi mereka baru selesai sebagian.\r\n\r\n<br><br>sumber : http://peacockbistro.blogspot.co.id/2012/11/sejarah-thai-tea.html', 'teh_limlim_thai_tea5.png', '', '', '', '2017-12-14 07:29:35'),
(17, '10 Manfaat Menakjubkan Thai Tea Bila Diminum Secara Teratur', 'Tengah digandrungi anak muda. Cha-yen, begitulah orang Thailand menyebut jenis teh ini. Bahan thai tea terbilang cukup unik karena tidak memiliki bahan yang serupa layaknya jenis teh lain.\r\n<br><br>Komposisi khusus thai tea kaya dengan rempah-rempah khas Asia, seperti kapulaga dan adas bintang. Thai tea merupakan campuran teh hitam, gula, bunga jeruk, rempah-rempah, dan gula susu yang diuapkan.\r\n<br><br>1. Mengurangi alergi\r\nCukup minum dua atau tiga cangkir thai tea dengan susu lebih banyak dan tanpa tambahan gula. Senyawa flavonoid yang terkandung pada thai tea dapat melindungi tubuh Anda dari peradangan dan keracunan.\r\n<br><br>2. Cegah asma\r\nMinum dua cangkir thai tea dapat mencegah asma. Hal ini dikarenakan adanya senyawa anise bintang (star anise) yang melindungi tubuh agar penderitanya tak mengalami asma.\r\nKandungan anti oksida juga dapat menghambat zat peradangan di dalam tubuh. Kekebalan tubuh menjadi lebih baik, ditulis dari DrHealthBenefits, Kamis (20/7/2017).\r\n<br><br>3. Mencegah dan memerangi kanker\r\nSebuah penelitian yang dilakukan oleh Stanford University, Amerika Serikat menemukan, penyebaran sel kanker payudara stadium awal dapat dihentikan dengan mengonsumsi thai tea.\r\nMinum secangkir thai tea akan menghalangi penyebaran sel kanker. Hal ini karena adanya polifenol dan anti oksida untuk menghentikan penyebaran sel kanker lebih luas.\r\n<br><br>4. Usir stres\r\nDi Jepang, peneliti membuktikan thai tea untuk menyembuhkan dan mengatasi stres. Adanya kafein pada thai tea dapat mengurangi rasa kelelahan dan stres.\r\n<br><br>5. Melawan radikal bebas\r\nRadikal bebas sangat berbahaya karena dapat menyebabkan timbulnya kanker. Penelitian dari Tufts University membuktikan, thai tea dapat membunuh radikal bebas yang diserap ke dalam tubuh.\r\nRadikal bebas timbul melalui pembuluh darah lantas menyebar ke seluruh organ tubuh. Zat anti oksida pada thai tea juga mengurangi tingkat radikal bebas. Minum 3-5 cangkir thai tea dalam seminggu sangat dianjurkan.\r\n\r\n<br><br> sumber:http://www.klikdokter.com/info-sehat/read/2911921/manfaat-tersembunyi-di-balik-thai-tea', 'thia_tea_enak_limlim.jpg', '', '', '', '2017-12-14 07:33:49'),
(18, 'Segarnya Thai Tea dalam Berbagai Pilihan Rasa', 'Menikmati rasa otentik Thai Tea kini dapat langsung dengan mudah didapatkan di berbagai tempat di Indonesia. Namun, menikmati rasa sesungguhnya dari minuman segar asal Thailand ini tentunya tidak semua mampu menyajikan dengan rasa seperti aslinya.\r\n\r\n<br><br> Thai tea ini sejuta manfaat.. Nah secara teh nya aja banyak manfaat ditambah lagi rempah bunga lawang dan kapulaga, membuat lengkap manfaatnya.. Saya jelaskan yaa .. manfaat luar biasa teh thailand, teh Thailand itu kaya akan Antioksidan. Antiksidan yang terkandung lebih tinggi daripada antioksidan vitamin C dan vitamin E. Maka dari itu daun teh Thailand dimanfaatkan untuk minuman kesehatan.\r\n\r\n<br><br>Manfaat lainnya adalah, mencegah penyakit stroke dan mengurangi resiko terkena penyakit stroke bagi mereka yang masih sehat dan tidak mengalami gangguan kesehatan. Melancarkan peredaran darah,membuang kolesterol jahat dalam darah, melancarkan pencernaan, dan banak manfaat lainnya.\r\n\r\n<br><br> sumber : https://thaiteabotol.wordpress.com/2015/03/05/thai-tea-dan-manfaatnya-untuk-kesehatan/', 'segarnya_thai_tea_limlim.jpg', '', '', '', '2017-12-14 08:07:52'),
(19, 'THAI TEA DAN MANFAATNYA UNTUK KESEHATAN', 'Kadang saya kebingungan menjelaskannya kepada orang yang baru. Tapi ketika saya memberi tahu bahwa thai tea itu mirip dengan teh tarik. Barulah mereka mengerti apa itu thai tea. Tetapi ada perbedaanya, thai tea itu memakai teh khas Thailand bukan teh biasa. Nah oleh sebab itu dinamakan thai tea karena bahan dasarnya berasal dari Thailand. Kalo di negara asalnya thai tea sering disebut ‘cha-yen’\r\n<br><br>Tahukah anda bahwa komposisi teh thailand itu unik??  kenapa dikatakan demikian karena teh Thailand ada tambahan kandungan rempah rempah seperti bunga lawang dan kapulaga. Taste nya Asia banget pokoknya.\r\n<br><br>Thai tea ini sejuta manfaat.. Nah secara teh nya aja banyak manfaat ditambah lagi rempah bunga lawang dan kapulaga, membuat lengkap manfaatnya.. Saya jelaskan yaa .. manfaat luar biasa teh thailand, teh Thailand itu kaya akan Antioksidan. Antiksidan yang terkandung lebih tinggi daripada antioksidan vitamin C dan vitamin E. Maka dari itu daun teh Thailand dimanfaatkan untuk minuman kesehatan.\r\n<br><br>Manfaat lainnya adalah, mencegah penyakit stroke dan mengurangi resiko terkena penyakit stroke bagi mereka yang masih sehat dan tidak mengalami gangguan kesehatan. Melancarkan peredaran darah,membuang kolesterol jahat dalam darah, melancarkan pencernaan, dan banak manfaat lainnya,\r\n<br><br>Bayangkan itu hanya manfaat teh nya saja, bagaimana dengan manfaat rempah rempah yang terkandung dalam teh thailand.  Seperti manfaat bunga lawang untuk melancarkan air seni, menyembuhkan sakit sendi dan gigi, melancarkan sistem pernafasan, mengobati batuk dan sakit tenggorokan, dll . Dan terakhir manfaat kapulaga baik untuk darah, perut, ginjal dan meningkatkan kekebalan tubuh.\r\n<br><br>Dengan berbagai manfaat thai tea untuk kesehatan tak heran, banyak orang yang menyukai teh ini, disamping rasanya yang enak dan menyegarkan.\r\n<br><br> sumber: https://thaiteabotol.wordpress.com/2015/03/05/thai-tea-dan-manfaatnya-untuk-kesehatan/', 'susu_thai_tea_limlim.jpg', '', '', '', '2017-12-14 08:07:01'),
(20, 'Ini Bedanya Teh Tarik, Teh Susu dan Thai Tea', 'Hayooo, ngaku deh, siapa yang sedang kecanduan minum Thai Tea? Olahan teh khas Thailand dengan cita rasa yang khas ini, sedang menjamur di Indonesia. Di sudut mal, makin mudah menemukan kios penjualnya dengan berbagai merek jual. Olahan teh lain yang enggak kalah populer adalah Teh Tarik. Ada juga Teh Susu. Banyak kan ragamnya? Tampilannya pun mirip. Nah, gimana cara bedainnya?\r\n<br><br>1.Teh Tarik\r\nRasanya khas, yaitu manis tapi ada sedikit rasa pahit. Warna teh coklat muda, dengan busa  diatasnya. Teh tarik berbahan dasar teh dan susu.  Varian teh ini mudah ditemukan di Malaysia, India dan Indonesia. Yang unik, adalah cara membuatnya.\r\n<br><br>Teh dihitam dicampur susu dengan mengopernya dari satu cangkir ke cangkir lain secara berulang. Sekilas terlihat seperti tehnya ditarik-tarik. Aksi ini biasanya  juga jadi tontonan pembeli, loh, karena enggak sembarang orang bisa melakukan proses ini.\r\n<br><br>2. Thai Tea\r\nBerbeda dengan teh tarik dan teh susu, teh khas Thailand ini memiliki warna oranye dengan rasa manis dan milky.  Daun tehnya berbeda, yang biasanya digunakan adalah teh yang hanya tumbuh di dataran Thailand. Teh juga dicampur rempah-rempah seperti kapulaga dan daun lawang. Susu evaporasi dan susu kental manis, krimer dan gula,\r\n<br><br>Nah, sekarang kamu udah tahu kan bedanya antara ketiga varian rasa teh tersebut? Mana yang paling kamu suka?\r\n\r\n<br><br> sumber: https://netz.id/news/2017/06/10/00716-01816/1002070617/ini-bedanya-teh-tarik-teh-susu-dan-thai-tea', 'perbedaan_teh_tarik_dengan_thai_tea_limlim.jpg', '', '', '', '2017-12-14 08:12:19');

-- --------------------------------------------------------

--
-- Table structure for table `contact_form_tbl`
--

CREATE TABLE `contact_form_tbl` (
  `contact_id` int(200) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `massage` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_form_tbl`
--

INSERT INTO `contact_form_tbl` (`contact_id`, `nama`, `email`, `massage`, `date`) VALUES
(1, 'Ade', 'Shuadeputra@gmail.com', 'Saya adalah manusia yang baik hati', '2017-12-01 00:00:00'),
(2, 'Putra', 'putra@gmail.com', 'Minumannya mungkin bisa diperdingin', '2017-12-01 00:00:00'),
(4, 'Put', 'put@gmail.com', 'Minumannya segar dan maknyus, saya mau pesan 100 y', '2017-12-01 00:00:00'),
(5, 'ade putraaa', 'saya_fansen@gmail.com', 'saya pesan tahi tea 10pcs, di antar ke sini aja', '2017-12-04 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `product_tbl`
--

CREATE TABLE `product_tbl` (
  `product_id` int(20) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `product_dsc` text NOT NULL,
  `product_gambar` varchar(300) NOT NULL,
  `product_price` int(30) NOT NULL,
  `product_kategori` varchar(200) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_tbl`
--

INSERT INTO `product_tbl` (`product_id`, `product_name`, `product_dsc`, `product_gambar`, `product_price`, `product_kategori`, `date`) VALUES
(1, 'Original Thai', 'Thai tea yang terbuat dari daun asli dan berwarna orange sesuai kenikmatan aslinya.', 'OriginalTaiTea.png', 15000, 'Dingin', '0000-00-00'),
(2, 'Thia Green Tea', 'Thai green tea yang terbuat dari daun asli dan berwarna hijau sesuai kenikmatan aslinya.', 'Greenteathaitea.png', 15000, 'Dingin', '0000-00-00'),
(3, 'Thia Millo Tea', 'Thai tea yang terbuat dari daun asli dan milo yang berwarna coklat sehingga sangat enak untuk diminum.', 'MiloTaiTea.png', 15000, 'Dingin', '0000-00-00'),
(4, 'Thia Cofe Tea', 'Thai tea yang terbuat dari daun dan kopi asli dari thailang yang berwarna hitam sehingga sangat enak.', 'cofetea.png', 15000, 'Dingin', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `seo_tbl`
--

CREATE TABLE `seo_tbl` (
  `seo_id` int(255) NOT NULL,
  `title` varchar(600) NOT NULL,
  `description` varchar(600) NOT NULL,
  `keywords` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seo_tbl`
--

INSERT INTO `seo_tbl` (`seo_id`, `title`, `description`, `keywords`) VALUES
(1, 'Limlim | Tea Mix, Buy Thai, Powder Thai, Tea Leaves, Riau Pekan Baru, Bengkalis, Jakarta', 'thai tea online , thai tea mix where to buy, supplier thai tea, thai tea packege thai tea mix, distributor thai tea, where can i buy thai tea leaves, best thai tea powder, thai green tea number one, thai iced tea powder mix, number one brand thai tea, thai milk tea packet, powder thai tea, thai tea no 1 brand, thai tea number one, teh thai tea, thai tea mix chatramue brand, tea for thai tea, thai tea in thaim thai tea leaves, buy thai team thai tea powder, thai iced tea powder, thai green tea powderm thai tea thailand chatramue thai tea,thai tea pudding m thai tea iceream, thai coffie, minuman', 'Tea Mix, Buy Thai, Powder Thai, Tea Leaves, Brand Thai, Lim-Lim, Thai Green, Buy Thai, Thai Black, Thai Milk, Thai Tea, Instant Thai, Thai Bubble, Ice Milk, Thai Iced Tea, Thai Chai, Tea Bangkok, Yen Thai, Resep Thai, Tea Ingredients, Tea Calories, Thai Lim, Tea Recipe, Thai Milik Tea Recipe, Make Thai, Make Thai, Healthy Thai, Tea Made, Get Thai, Thao tea powder, thai tea bags, where to buy thai tea, thai green tea, thai iced tea leaves, distributor thai tea, thai milk tea packet, tea for thai tea, buy thai tea, thai tea thailand, beli thai tea');

-- --------------------------------------------------------

--
-- Table structure for table `subscribe_tbl`
--

CREATE TABLE `subscribe_tbl` (
  `subscribe_id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribe_tbl`
--

INSERT INTO `subscribe_tbl` (`subscribe_id`, `nama`, `email`) VALUES
(1, 'Ade', 'Shuadeputra@gmail.com'),
(3, 'Samsul', 'Sambul@gmail.com'),
(4, 'Ahmad', 'Ahmad@gmail.com'),
(5, 'Hale', 'Hale@gmail.com'),
(6, 'ade putraaa', 'shuadeputra@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `blog_tbl`
--
ALTER TABLE `blog_tbl`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `contact_form_tbl`
--
ALTER TABLE `contact_form_tbl`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `product_tbl`
--
ALTER TABLE `product_tbl`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `seo_tbl`
--
ALTER TABLE `seo_tbl`
  ADD PRIMARY KEY (`seo_id`);

--
-- Indexes for table `subscribe_tbl`
--
ALTER TABLE `subscribe_tbl`
  ADD PRIMARY KEY (`subscribe_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_tbl`
--
ALTER TABLE `blog_tbl`
  MODIFY `blog_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `contact_form_tbl`
--
ALTER TABLE `contact_form_tbl`
  MODIFY `contact_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `product_tbl`
--
ALTER TABLE `product_tbl`
  MODIFY `product_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `seo_tbl`
--
ALTER TABLE `seo_tbl`
  MODIFY `seo_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `subscribe_tbl`
--
ALTER TABLE `subscribe_tbl`
  MODIFY `subscribe_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
