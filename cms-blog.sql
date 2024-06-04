-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.25-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.7.0.6850
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table cms-blog.artikel
CREATE TABLE IF NOT EXISTS `artikel` (
  `id_artikel` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) NOT NULL DEFAULT '0',
  `slug` varchar(150) NOT NULL DEFAULT '0',
  `hari_tanggal` varchar(100) NOT NULL DEFAULT '0',
  `isi` text NOT NULL,
  `gambar` varchar(150) NOT NULL DEFAULT '0',
  `jumlah_dikunjungi` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_artikel`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table cms-blog.artikel: ~6 rows (approximately)
INSERT INTO `artikel` (`id_artikel`, `judul`, `slug`, `hari_tanggal`, `isi`, `gambar`, `jumlah_dikunjungi`) VALUES
	(1, 'Danau Ranu Grati', 'danau-ranu-grati', 'Rabu, 08 Mei 2024 | 22:52', '<p>Kabupaten Pasuruan memiliki danau yang indah dan penuh cerita.</p><p>Namanya adalah Danau Ranu yang terletak di Desa Ranuklindungan, Kecamatan Grati. Selain memiliki panorama yang mempesona, wajah Danau Ranu Grati, kini semakin cantik.</p><p>Ya, di sekitaran Danau Grati kini dibuat semacam dermaga yang dilengkapi dengan lampu-lampu hias yang cantik, plus ada “Love Spot” alias spot foto berupa tanda cinta yang dipasang tepat di ujung dermaga.</p><p>Pemandangan baru inilah yang menarik minat wisatawan yang penasaran dengan perubahan Danau Ranu. Camat Grati, Suhardi Irianto mengatakan, pembangunan dermaga tersebut berasal dari APBD Kabupaten Pasuruan tahun 2019 melalui Dinas Pariwisata dan Kebudayaan, dan mulai bisa dinikmati sejak bulan juli lalu.</p><p>“Di sekitar dermaga, ada fasilitas berupa lampu penerangan jalan dan lampu hias. Jadi indah sekali, apalagi datangnya pagi atau menjelang matahari terbenam, pas buat difoto,” kata Suhardi, di sela-sela kesibukannya, Rabu (11/12/2019).</p><p>Seperti diketahui, Danau Ranu merupakan obyek wisata alam dengan luas 107 hektar dengan latar belakang pegunungan Tengge. Tempat wisata ini memang cocok bagi siapa saja yang senang berpetualang. Baik secara individu, keluarga maupun rombongan. Selain bisa menikmati panorama alam juga bisa memancing, bersepeda air ataupun naik perahu wisata mengelilingi danau dilengkapi aneka permainan anak, juga bisa dilakukan.</p><p>Untuk menuju ke lokasi hanya butuh waktu sekitar 30 menit perjalanan atau sekitar 20 km dari pusat Kota Pasuruan. Pengunjung bisa menikmati eksotisme danau yang memikat yang penuh legenda dan misteri akan cerita rakyat yang hingga saat ini tak hilang akan cerita mistis.</p><p>Bahkan di tempat ini banyak terdapat keramba apung sebagai tempat budi daya ikan air tawar seperti Gurami, Nila Merah, Mujaer, Wader dan ikan Lempuk dapat dibeli dari nelayan. Warga sekitar khususnya nelayan yang punya usaha keramba memanfaatkan area danau untuk budi daya. Usaha ini justru mampu menopang perekonomian warga.</p><p>Selain itu, tiap tahunnya Ranau Grati menggelar acara ‘distrikan’ kegiatan adat masyarakat setempat berupa upacara larung sesaji kepada Tuhan yang Maha Esa. Kepala Dinas Pariwisata dan Kebudayaan Kabupaten Pasuruan, Agung Mariyono menjelaskan, untuk lebih meningkatkan jumlah pengunjung di Danau Ranu Grati, pihaknya membuka jam wisata hingga malam hari. Hal ini dilakukan agar pengunjung bisa menikmati suasana Danau Ranu Grati saat malam hari.</p><p>&nbsp;“Sudah kita lakukan mulai November kemaren. Kita lakukan karena ada potensi pengunjung hingga malam hari,” ucapnya.</p><p>Jika jam buka biasanya sejak pukul 7 pagi hingga 6 petang, maka saat ini dibuka sampai pukul 9 malam. Dan faktanya, jumlah penjunjung saat akhir pekan, lebih ramai dari biasanya. Diharapkan dengan dibuka lebih panjang, tahun depan retribusi dari Danau Ranu Grati terus meningkat.</p><p>Dari data Disparbud, untuk tiket masuk memang cukup terjangkau hanya Rp 2500 perorang. Sedangkan penerimaan retribusi sampai pertengahan November kemarin sudah mencapai Rp 33 juta dari target Rp 30 juta. (emil)</p>', 'danau-ranu-grati.png', 5),
	(2, 'Candi Belahan', 'candi-belahan', 'Kamis, 09 Mei 2024 | 15:46', '<p>Candi Belahan atau Candi sumber Tetek terletak di wilayah Dusun Belahan, Desa Wonosonyo, Kecamatan Gempol, Pasuruan, Jawa Timur, tepatnya sekitar 40 km dari kota Pasuruan. Candi ini sebenarnya kalau dilihat dari arsitektur bangunannya merupakan petirtaan yang sangat unik dan mempesona, karena terdapat dua patung wanita Dewi Sri serta Dewi Laksmi. Dari salah satu patung yang berdiri disitu, yaitu patung Dewi Laksmi mengalir air melalui tetek (kedua puting susu),&nbsp; yang ditampung pada sebuah kolam berukuran kurang lebih 6 x 4 meter di depan/bawah patung tersebut. Maka dari itu masyarakat setempat menyebut, candi Belahan ini dengan sebutan candi Sumber Tetek.<br>Kedua patung ini merupakan lambang kesuburan dan kemakmuran, posisi kedua patung tersebut berdiri berdampingan membelakangi dinding yang terbuat dari batu bata dihiasi dengan relief yang menggambarkan Wisnu menunggang Garuda setinggi sekitar tiga meter. Air yang keluar dari patung tersebut mengalir sepanjang tahun, bahkan di musim kemarau sekalipun. Candi ini merupakan salah satu dari sekitar 80 bangunan candi kecil yang ditemukan di seputaran Gunung Penanggungan. Terletak pada ketinggian sekitar 700 meter di atas permukaan air laut. Bahkan candi ini merupakan salah satu candi yang belum pernah dipugar.<br>Air yang bersumber dari tetek patung Dewi Laksmi ini sangat jernih, hingga sampai sekarang digunakan sebagai keperluan sehari-hari. Oleh masyarakat setempat. Kebutuhan air bersih ini tak hanya dinikmati penduduk Belahan Jawa, namun juga warga desa tetangga yang letaknya jauh di kaki gunung dan dikenal sebagai warga Belahan Nangka meliputi Dukuh Genengan, Jeruk Purut, Gedang, Pojok, Karang Nangka, Dieng, Kandangan serta penduduk Kunjoro yang berbatasan dengan Mojokerto<br>Konon menurut warga setempat, air tersebut dipercaya memiliki khasiat tertentu seperti bisa menjadikan awet muda dan kesembuhan terhadap segala penyakit-penyakit. Sosok penunggu kawasan ini dipercaya menjaga kelestarian situs petirtaan Sumber Tetek. Konon pada masa penjajahan Belanda (banyak koleksi patung yang berada di Belanda), ada upaya untuk mengangkut salah satu ornamen candi. Tetapi tidak ada satu orang pun yang mampu mengangkatnya sehingga upaya pengangkutan tersebut gagal dan keaslian situs Sumber Tetek tersebut tetap terjaga sampai sekarang.<br>Meski belum tersentuh pemugaran, Candi Belahan atau Petirtaan Sumber Tetek sangatlah pantas untuk ditawarkan sebagai Daerah Kunjungan Wisata. Karena ditunjang dengan eksotika candi yang sangat unik dan mempesona, dengan dua patung wanita Dewi Sri serta Dewi Laksmi yang mengalir air melalui kedua teteknya (puting susu). Kejernihan serta kesegaran air Sumber Tetek yang ditampung di kolam tersebut serta keindahan alamnya tetap memiliki daya pikat yang kuat. Selain itu semua, menuju lokasi wisata candi ini jalan perbukitan yang menanjak dan bekelok, disuguhi pemandangan berupa hutan pohon akasia dan areal ladang penduduk. Jika cuaca cerah, kepenatan kita selama perjalanan akan terobati dengan hadirnya pemandangan indah dari puncak gunung Penanggungan. Suasana yang sejuk, tenang dan asri khas pedesaan akan semakin sejuk ketika sapaan ramah penduduk setempat yang sudah tidak merasa asing dengan wisatawan karena desa mereka sering menjadi rute pendakian menuju puncak Gunung Penanggungan.</p>', 'candi-belahan.jpg', 1),
	(3, 'Hutan Mangrove Nguling', 'hutan-mangrove-nguling', 'Kamis, 09 Mei 2024 | 21:31', '<p>Kecamatan Nguling sebagai salah satu wilayah di ujung paling timur Kabupaten Pasuruan, tak hanya terkenal karena kuliner “<i>Rawon</i>” nya. Melainkan daya tarik Wisata Hutan Mangrove.</p><p>Ya, jutaan pohon mangrove bertengger kokoh di areal sabuk hijau (<i>green belt</i>) sepanjang 183 hektar, yang berada di Desa Penunggul.</p><p>Sejak 33 tahun silam, ratusan pohon mangrove berhasil ditanam oleh Mukarim, Sang Pahlawan Mangrove. Kini, total lebih dari 1.830.000 pohon mangrove menjadi kawasan wisata pesisir yang menjanjikan.</p><p>Saat ditemui di sekitar Wisata Mangrove, Senin (13/01/2020) siang, Mukarim menegaskan bahwa mangrove yang tumbuh berjajar menjadi benteng pencegah abrasi atau pengikisan pantai oleh gelombang air laut. Meskipun air laut pasang hingga gelombang laut utara sangat tinggi, jutaan pohon mangrove lah yang menahan dan menyelamatkan perkampungan dari abrasi.</p><p>“Sangat aman. Warga tak perlu takut dengan abrasi atau banjir rob. Karena hutan mangrove di sini sangat banyak dan fungsi hutan mangrove ini adalah untuk melindungi wilayah pesisir dengan akarnya yang sangat efisien. Hal ini akan menjadikan pelindung pengikisan tanah akibat air,” katanya.</p><p>Sebagai kawasan wisata Mangrove, Mukarim dan pihak pengelola tidak membebankan tiket masuk. Hanya saja, setiap wisatawan yang datang diwajibkan menjaga kebersihan. Yakni tidak membuang sampah sembarangan di sepanjang areal pantai.</p><p>“Tidak ada tiket masuk, hanya saja wisatawan yang berkunjung diharuskan jaga kebersihan. Agar tak sepi, dekat pintu masuk ada warung kopi milik warga sekitar,” terangnya.</p><p>Hingga kini, wisata mangrove dikunjungi setiap weekend alias sabtu dan minggu. Untuk hari-hari biasa, jumlah pengunjung yang datang tidak terlalu banyak. Kata Mukarim, para wisatawan yang datang ke Hutan Mangrove akan dimanjakan dengan ratusan jenis tanaman bakau yang ditanam. Seperti Rhyzapora Mucronata, Abisina Alba, Rhyzapora Apiculata, &nbsp;dan Alasina Marina. Selain itu,</p><p>ada juga 14 spesies hewan khas pantai yang bisa dilihat. Yakni bandeng, belanak, glodok, keong, tiram, kerang hijau, kadal, biawak, ular, burung kuntul putih, kepiting bakau, udang putih, rajungan, dan capung.</p><p>“Bahkan nelayan sekitar secara tidak langsung mendapat keuntungan dari Hutan Mangrove yang kian lestari ini. Karena mereka juga bisa menjual hasil tangkapan mereka kepada para pengunjung,” ucap peraih penghargaan Kalpataru dan penghargaan Satya Lencana pembangunan dari Presiden tersebut.</p><p>Sementara itu, Slamet Sunhaji selaku Kepala Desa Penunggul mengaku telah menyiapkan banyak program dan kegiatan dalam rangka pengembangan Desa Penunggul sebagai Ikon Wisata di wilayah timur Kabupaten Pasuruan. Mulai dari penanaman pohon gelodok di sepanjang jalan menuju Wisata Mangrove,&nbsp; pembersihan sampah sekitar pantai dan hutan mangrove, hingga pengembangan produk makanan dan&nbsp; minuman berbahan dasar buah mangrove.</p><p>“Insya Allah kita semangat untuk membangun Desa Penunggul sebagai ikon wisata di Kabupaten Pasuruan. Kita kerahkan semua pihak untuk sama-sama menggeliatkan pariwisata di sini,” ungkapnya kepada Suara Pasuruan.</p><p>Ditambahkan Slamet, saat ini pihaknya sudah membentuk Pokdarwis (kelompok sadar wisata) yang akan segera dilaunching dalam waktu dekat. Dengan adanya Pokdarwis tersebut, dirinya optimis bahwa aspirasi masyarakat akan tertampung. Sehingga visi dan misi dalam memajukan wisata mangrove akan tercapai.</p><p>“Mudah-mudahan semuanya sesuai rencana. Dari Pemkab Pasuruan juga punya banyak kegiatan yang mengarah ke Wisata Nguling. Termasuk Pemprov dan Pemerintah Pusat, kami siap menyambutnya,” tegasnya. (emil)</p>', 'hutan-mangrove-nguling.png', 2),
	(4, 'Candi Jawi', 'candi-jawi', 'Kamis, 09 Mei 2024 | 22.04', '<p>Candi Jawi terletak di desa Candi Wates Kecamatan Prigen, Candi ini dibuat pada tahun 1300 Masehi merupakan bangunan suci, yang diperkirakan sebagai tempat penderma Kertanegara raja terakhir Singasari (abad 13 M).<br>Arsitekturnya merupakan perpaduan Hindu dan Budha yang bagian puncak berbentuk stupa. Terletak di Desa Candiwates Jalan Tretes, Pandaan yang dapat ditempuh 40 menit dari Surabaya. Tinggi Bangunan Candi 24,50 meter, panjang 14,20 meter dan lebar 9,50 meter, terbuat dari batu andesit.</p><p>Candi Jawi merupakan candi yang dibangun sekitar abad ke-13 dan merupakan peninggalan bersejarah Hindu-Buddha Kerajaan Singhasari yang terletak di kaki Gunung Welirang, tepatnya di Desa Candi Wates, Kecamatan Prigen, Pasuruan, Jawa Timur.<br>Konon, Candi Jawi diduga sebagai tempat pemujaan atau tempat peribadatan , namun sebenarnya merupakan tempat pedharmaan atau penyimpanan abu dari raja terakhir Singasari, Kertanegara.<br>Candi Jawi berdiri di atas lahan seluas 40 x 60 meter persegi dan dikelilingi oleh pagar bata setinggi 2 meter. Bangunan candi dikelilingi oleh parit yang banyak dihiasi oleh bunga teratai. Bentuk candi berkaki Siwa dan berpundak Buddha dengan ketinggian sekitar 24,5 meter dengan panjang 14,2 m serta lebar 9,5 m.<br>Bentuknya yang tinggi ramping seperti Candi Prambanan di Jawa Tengah dengan atap yang merupakan perpaduan antara stupa dan kubus bersusun atau meruncing pada puncaknya.<br>Raja Kertanegara sengaja membangun candi Jawi jauh dari pusat kerajaan Singasari diduga lantaran di kawasan ini dahulu banyak pengikut ajaran Siwa-Buddha yang sangat kuat serta rakyat yang sangat setia.<br>Candi Jawi terbilang sangat unik dengan adanya relief di dindingnya. Sayangnya, relief ini hingga saat ini belum bisa dibaca. Pahatannya yang terlalu tipis serta kurangnya informasi pendukung membuatnya sulit untuk diterjemahkan.<br>Candi Jawi sendiri dipugar untuk kedua kali pada tahun 1938-1941&nbsp; pada masa pemerintahan Hindia Belanda karena runtuh. Perbaikannya dilakukan kembali tahun 1975-1980 dan diresmikan tahun 1982. Sayang, arca-arca peninggalan yang ada di Candi Jawi kini telah hilang lantaran telah dipindahkan ke Museum dan sebagian ke tempat-tempat komersial.<br>Untuk mencapai lokasi candi yang berlokasi di desa Candi Wates Kecamatan Prigen ini. Kita harus berkendara sekitar 40 menit dari Surabaya.<br>Bagi anda yang naik bus dari arah Surabaya maupun Malang dan ingin berkunjung ke candi ini, anda bisa&nbsp; turun di Terminal Pandaan lalu naik angkutan Jurusan Tretes atau Trawas kemudian turun di depan Komplek Candi Jawi.<br>Untuk melestarikannya, pada setiap malam bulan purnama, di komplek candi jawi diadakan Pentas Seni Bulan Purnama yang mempertunjukan seni tari tentang kisah Legenda asal muasal Candi Jawi.<br>Dalam tarian tersebut, diceritakan tentang seorang Puteri Bali yang sangat cantik. Namun karena kecantikannya ia terpaksa kabur dan tinggal menetap di jawa. Pasalnya, banyak raja-raja yang berkeinginan untuk mempersuntingnya sebagai permaisuri.</p>', 'candi-jawi.jpg', 5),
	(5, 'Air Terjun Kakek Bodo', 'air-terjun-kakek-bodo', 'Kamis, 09 Mei 2024 | 22.34', '<p>Air Terjun Kakek Bodo adalah sebuah air terjun yang berada di lereng utara Gunung Welirang, Tretes, Prigen, Kabupaten Pasuruan. Air terjun ini memiliki ketinggian 40 meter dan berada di ketinggian 850 mdpl. Air terjun ini berasal dari sungai Kaligetik yang terus mengalir sepanjang tahun. Kawasan air terjun Kakek Bodo dapat dimasuki dari tiga pintu masuk, yakni pintu masuk Candi Jawi, Taman Safari II Prigen dan belakang hotel Surya.</p><h4>Legenda<br>&nbsp;</h4><p>Air terjun Kakek Bodo berasal dari legenda Kakek Bodo. Tretes pada zaman kolonial Belanda terkenal memiliki penduduk Belanda yang cukup banyak. Salah seorang keluarga Belanda memiliki pesuruh seorang kakek-kakek yang bekerja dengan giat. Pada suatu hari, kakek ini pamit berhenti bekerja untuk bertapa di dekat air terjun yang saat ini dikenal sebagai air terjun Kakek Bodo. Keluarga Belanda ini awalnya merelakan si kakek, tetapi pada kemudian hari mereka mencari si kakek untuk membujuknya kembali bekerja. Setelah si kakek ditemukan dalam pertapaannya, si kakek menolak kembali bekerja pada keluarga Belanda. Kemudian orang Belanda ini menghina si kakek dengan ujaran, "Kakek bodoh!". Semenjak saat itu, air terjun dekat tempat si kakek bertapa dinamakan air terjun Kakek Bodo.</p>', 'air-terjun-kakek-bodo.jpeg', 0),
	(6, 'Pemandian Banyu Biru', 'pemandian-banyu-biru', 'Jumat, 10 Mei 2024 | 07:32', '<p>Selama ini, Kabupaten Pasuruan dikenal dengan ragam potensi wisata, baik wisata alam, budaya maupun wisata minat khusus yang terus dikembangkan, sehingga menjadikan kontributor Pendapatan Asli Daerah (PAD) dari sektor pariwisata. Industri pariwisata diharapkan jadi motor penggerak dalam mempromosikan dan menjual potensi daerah, karena dengan meningkatnya industri pariwisata maka sektor-sektor lain dapat menjadi obyek kunjungan. Terlebih dengan perkembangan tren wisata agro seperti halnya memetik Apel, bertanam padi dan membajak sawah dengan mengendarai kerbau menjadi hal yang menarik wisatawan.&nbsp;</p><p>Diantara obyek wisata alam yang saat ini intens dikembangkan yakni pemandian alam Banyu Biru. &nbsp;Bertempat di Desa Sumberejo, Kecamatan Winongan, obyek wisata ini memiliki keunikannya sendiri karena bukan pemandian atau kolam renang buatan, melainkan terdapat sumber mata air berwarna biru jernih. Janganlah heran itu sebabnya tempat wisata favorit para pengunjung ini dinamakan “<i>Banyu Biru</i>” atau yang artinya adalah air biru.</p><p>Sebelum disebut dengan nama <i>Banyu Biru</i>, awalnya objek wisata Pasuruan ini dinamakan Telaga Wilis. Pemandian alam ini bertempat di Desa Sumberejo, dan masuk ke dalam wilayah Pasuruan di Provinsi Jawa Timur. Objek wisata ini memiliki keunikannya sendiri karena bukan pemandian atau kolam renang buatan, melainkan terdapat sumber mata air berwarna biru jernih. Janganlah heran itu sebabnya tempat wisata favorit para pengunjung ini dinamakan “<i>Banyu Biru</i>” atau yang artinya adalah air biru.</p><p>Sebagai salah satu destinasi wisata andalan Kabupaten Pasuruan, Banyubiru&nbsp;yang berada di Desa Sumber Rejo Kecamatan Winongan sangat cocok untuk wisata keluarga. Dengan keindahan alam dan kesegaran sumber mata airnya, masyarakat dapat melepas kepenatan sekaligus sejenak mendinginkan suasana dari panasnya suhu udara di&nbsp;Pasuruan.</p><p>Di dalam kolam hidup ratusan ikan yang sering disebut Ikan Sengkaring berukuran besar sampai 1 meter yang konon ikan keramat. Sedangkan di sudut areal pemandian terdapat beberapa sisa arca&nbsp;yang saat ini dikumpulkan dan sudah diidentifikasi oleh arkeolog Belanda pada tahun 1929.</p><p>Peninggalan yang juga tidak kalah menarik dapat dijumpai yaitu keberadaan Kala yang dimungkinan merupakan bagian dari struktur candi. Bisa jadi, pemandian Banyubiru&nbsp;merupakan patirtaan (pemandian kuno) yang dulu dikunjungi oleh Hayam Wuruk saat dalam perjalanan ke Lumajang.</p><p>Lokasi dapat ditempuh 15 km dari arah kota Pasuruan. Pemandian Alam Banyu Biru ternyata sudah dikenal sejak jaman Kolonial Belanda, diketahui dari ditemukannya foto-foto kuno tahun 1900-an koleksi KILTV dan Tropen Museum Belanda.&nbsp;Sampai akhir tahun 2016, total jumlah wisatawan yang berkunjung ke pemandian alam Banyubiru di Kecamatan Winongan mencapai 96.898 orang. &nbsp;</p><p>Sebelum disebut dengan nama <i>Banyu Biru</i>, awalnya objek wisata Pasuruan ini dinamakan Telaga Wilis. Terdapat 4 kolam renang yang cukup besar di tempat ini. 2 kolam pertama adalah kolam dengan sumber mata air asli dari alam sedangkan 2 kolam terakhir merupakan kolam renang buatan. Debit mata air yang cukup besar sanggup untuk mengisi 2 kolam renang tersebut. Para pengunjung yang datang ke sini dapat menikmati segarnya sumber mata air, tidak jarang juga banyak atlet-atlet atau perenang profesional yang menggunakan kolam renang di sini sebagai tempat latihan.</p><p>Selain tempat pemandiannya yang menarik, di sini para pengunjung juga dapat menikmati pemandangan alam nan asri di sekitaran kawasan <i>Banyu Biru</i>. Selain itu, terdapat fasilitas-fasilitas lain yang disediakan untuk para wisatawan seperti wahana bermain air, kolam ikan, tempat pameran, taman bermain anak, dan lapangan olah raga tenis. Untuk masuk ke dalam kawasan wisata alam Banyu Biru ini, pengunjung dapat memperoleh tiket masuknya dengan harga bersahabat. Apakah Anda siap merasakan sensasi segarnya Banyu Biru...? (Eka Maria)</p><p>"</p>', 'pemandian-banyu-biru.jpeg', 6),
	(7, 'Air Terjun Putuk Truno', 'air-terjun-putuk-truno', 'Jumat, 10 Mei 2024 | 14:28', '<p>Keindahan air terjun Putuk Truno di Kecamatan Prigen, Kabupaten Pasuruan, yang kala pagi hari memunculkan pelangi jadi saksi bila kekuatan cinta sejati takkan bisa dibendung, meskipun dengan ajian matra sakti madraguna.</p><p>Spirit the power of love itu bersemayam dalam jiwa Pangeran Joko Taruno dan Putri Sri Gading Lestari, yang hidup pada era kejayaan Kerajaan Majapahit.</p><p>"Joko Taruno adalah Pangeran Majapahit, putra dari Raja Hayam Wuruk dengan seorang selir. Meskipun begitu, keteguhan hati dan kebulatan tekadnya menurun dari Bapaknya. Sang Raja Majapahit yang menguasai nusantara sampai semenanjung China," tutur Totok, penjaga wanawisata air terjun Putuk Truno, Selasa, 16 Oktober 2018.</p><p>Kisah cinta itu bermula saat Joko Taruno mulai menaruh hati kepada Putri Sri Gading Lestari, anak dari Raja Arya Wiraraja, penguasa Pulau Madura yang memiliki andil besar berdirinya kerajaan Majapahit.</p><p>Meskipun keduanya sudah saling menyayangi. Raja Arya Wiraraja mentah-mentah menolak pinangan Joko Taruno. Hal ini lantaran, ia hanyalah putra dari keturunan seorang selir raja.</p><p>"Mengetahui pertautan kasih keduanya tak bisa dipisahkan. Raja Arya Wiraraja mengasingkan putrinya untuk bertapa di kawasan air terjun. Benteng gaib pun dibangun oleh sang Raja, agar Sang Putri dan Pangeran tak bisa bertemu dan berhubungan telepati," kata Totok.</p><p>Sang Putri bersedih. Jika terdengar suara aungan seperti aungan serigala di sekitar air terjun, warga mempercayai itu aungan itu adalah tangisan kekecewaan Sang Putri.</p><p>"Masyarakat dulu sampai kini pun menjuluki air terjun itu bernama Coban Baung, serta Putri Sri Gading Lestari dijuluki Putri Baung (Serigala). Sekarang lokasinya tercatat di Kecamatan Purwodadi, Pasuruan," ucap Totok.</p><p>Komunikasi yang tiba-tiba terputus dengan sang belahan hati, membuat Joko Taruno tak patah semangat. Kekuatan cintanya tak bisa diadang oleh siapa pun. Segala kesaktian dan aji-aji mantra pun dikeluarkan. Hingga Pangeran Joko Taruno berhasil melakukan komunikasi batin dengan Sang Putri.</p><p>Pangeran Joko Taruno yang tak bisa membongkar kuatnya benteng gaib buatan Raja Arya Wiraraja, melalui komunikasi batin, mengajak Sang Putri untuk bertapa hingga keduanya moksa (bebas dari ikatan duniawi).</p><p>"Akhirnya, (jiwa) Joko Taruno berhasil menjebol benteng gaib yang menghalanginya dan memboyong sang putri ke tempat pertapaannya. Kini warga Pasuruan menjuluki tempat itu air terjun Putuk Truno, atau air terjun keabadian," ujar Totok.</p><p>Air terjun Putuk Truno jadi saksi cinta keduanya bersatu dan abadi.&nbsp;Hal ini juga&nbsp;dibuktikan adanya tenger (tanda) sebuah petilasan di atas air terjun.</p><p>Sampai sekarang ini, para pengunjung pun percaya, jika berkunjung ke air terjun Putuk Truno, akan diberkahi cinta yang kekal abadi. "Para pengunjung masih percaya akan mitos ini. Kala hari minggu pasti ramai. Rata-rata pengunjung dari luar kota," ucap Totok.</p>', 'air-terjun-putuk-truno.jpg', 18);

-- Dumping structure for table cms-blog.kategori
CREATE TABLE IF NOT EXISTS `kategori` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(50) NOT NULL DEFAULT '0',
  `slug_kategori` varchar(100) NOT NULL DEFAULT '0',
  `keterangan` text NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table cms-blog.kategori: ~0 rows (approximately)
INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `slug_kategori`, `keterangan`) VALUES
	(1, 'Wisata Alam', 'wisata-alam', 'Artikel ini menyajikan informasi mendalam tentang Wisata Alam, mengulas dengan detail dan menyeluruh berbagai aspek yang terkait dengan topik tersebut, termasuk sejarahnya, perkembangan terbaru, implikasi praktisnya, serta pandangan dari berbagai ahli dan praktisi di bidangnya.'),
	(2, 'Wisata Sejarah', 'wisata-sejarah', 'Artikel ini menyajikan informasi mendalam tentang Wisata Sejarah, mengulas dengan detail dan menyeluruh berbagai aspek yang terkait dengan topik tersebut, termasuk sejarahnya, perkembangan terbaru, implikasi praktisnya, serta pandangan dari berbagai ahli dan praktisi di bidangnya.');

-- Dumping structure for table cms-blog.kontributor
CREATE TABLE IF NOT EXISTS `kontributor` (
  `id_kontributor` int(11) NOT NULL AUTO_INCREMENT,
  `id_penulis` int(11) NOT NULL DEFAULT 0,
  `id_kategori` int(11) NOT NULL DEFAULT 0,
  `id_artikel` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_kontributor`),
  KEY `id_penulis` (`id_penulis`),
  KEY `id_kategori` (`id_kategori`),
  KEY `id_artikel` (`id_artikel`),
  CONSTRAINT `FK__kategori` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK__penulis` FOREIGN KEY (`id_penulis`) REFERENCES `penulis` (`id_penulis`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_kontributor_artikel` FOREIGN KEY (`id_artikel`) REFERENCES `artikel` (`id_artikel`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table cms-blog.kontributor: ~7 rows (approximately)
INSERT INTO `kontributor` (`id_kontributor`, `id_penulis`, `id_kategori`, `id_artikel`) VALUES
	(1, 1, 1, 1),
	(2, 2, 2, 2),
	(3, 2, 1, 3),
	(4, 2, 2, 4),
	(5, 1, 1, 5),
	(6, 1, 1, 6),
	(7, 1, 1, 7);

-- Dumping structure for table cms-blog.penulis
CREATE TABLE IF NOT EXISTS `penulis` (
  `id_penulis` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL DEFAULT '0',
  `email` varchar(50) NOT NULL DEFAULT '0',
  `password` varchar(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_penulis`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table cms-blog.penulis: ~2 rows (approximately)
INSERT INTO `penulis` (`id_penulis`, `nama`, `email`, `password`) VALUES
	(1, 'Noval Akbar', 'noval.akbar.906@gmail.com', '$2y$10$CtWF1rMDZGoEd8YHOt/gF.12UPUf3911aIh79gSxN8uJgX9aujPNi'),
	(2, 'Maulana Haekal', 'maulanahaekal@gmail.com', '$2y$10$GlcqHNEGdLHCOrL8y3uj0uxWP04sx5GT2tzO9FBVNSgNRxXW4meKa');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;