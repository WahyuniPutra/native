<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wahyuni Putra</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }

        header {
            background: #333;
            color: #fff;
            padding-top: 30px;
            min-height: 70px;
            border-bottom: #77aaff 3px solid;
        }

        header a {
            color: #fff;
            text-decoration: none;
            text-transform: uppercase;
            font-size: 16px;
        }

        header ul {
            padding: 0;
            list-style: none;
        }

        header li {
            float: left;
            display: inline;
            padding: 0 20px 0 20px;
        }

        header #branding {
            float: left;
        }

        header #branding h1 {
            margin: 0;
        }

        header nav {
            float: right;
            margin-top: 10px;
        }

        .content {
            display: none;
            padding: 20px;
            background: #fff;
        }

        .content.active {
            display: block;
        }

        .center-image {
            display: block;
            margin-left: auto;
            margin-right: auto;
            border: 2px solid #333;
        }

        .info-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin-top: 20px;
        }

        .personal-info,
        .education-info,
        .tools-info,
        .languages-info,
        .frameworks-info {
            width: 48%;
            margin-bottom: 20px;
        }

        .personal-info p,
        .education-info p,
        .tools-info p,
        .languages-info p,
        .frameworks-info p {
            margin: 10px 0;
        }

        .personal-info p strong,
        .education-info p strong,
        .tools-info p strong,
        .languages-info p strong,
        .frameworks-info p strong {
            color: #333;
        }

        .personal-info table td.description {
            text-align: justify;
            /* Justify text */
            vertical-align: top;
            /* Align text to the top */
        }

        .center-text {
            text-align: center;
        }

        .text-align {
            text-align: justify;
        }

        footer {
            padding: 20px;
            margin-top: 20px;
            color: #fff;
            background-color: #333;
            text-align: center;
        }

        .image-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 1px;
            /* Adjust the gap between images as needed */
        }

        .image-row img {
            flex: 1 1 calc(18% - 1px);
            /* Adjust the size of the images */
            max-width: calc(18% - 1px);
            /* Adjust the size of the images */
            height: auto;
        }

        .project {
            margin-bottom: 20px;
        }

        .project-image {
            width: 100%;
            max-width: 300px;
            height: auto;
            display: block;
            margin-bottom: 10px;
        }

        .project h2 {
            margin-top: 0;
        }

        .project p {
            margin: 0;
        }

        .contact-info {
            margin-bottom: 20px;
        }

        .contact-info p {
            margin: 5px 0;
        }

        .contact-info ul {
            list-style: none;
            padding: 0;
        }

        .contact-info ul li {
            margin: 5px 0;
        }

        .contact-info ul li a {
            text-decoration: none;
            color: #333;
        }

        .contact-form {
            display: flex;
            flex-direction: column;
        }

        .contact-form label {
            margin-top: 10px;
        }

        .contact-form input,
        .contact-form textarea {
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .contact-form button {
            margin-top: 10px;
            padding: 10px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .contact-form button:hover {
            background-color: #555;
        }

        .btn-primary {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            text-align: center;
            cursor: pointer;
            margin: 5px 0;
            /* Add margin for spacing between buttons */
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <header>
        <div class="container">
            <div id="branding">
                <h1>Wahyuni Putra</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="#" onclick="showContent('about')">Tentang</a></li>
                    <li><a href="#" onclick="showContent('projects')">Projects</a></li>
                    <li><a href="#" onclick="showContent('contact')">Kontak</a></li>
                </ul>
            </nav>
        </div>
    </header>

    </section>
    <section id="main">
        <div class="container">
            <div id="about" class="content">
                <h1 class="center-text">Tentang Saya</h1>
                <img src="assets/images/root/wahyu.jpg" alt="Wahyuni Putra" class="center-image"
                    style="width: 150px; height: auto;">
                <div class="info-container">
                    <div class="personal-info">
                        <h2>Informasi Pribadi</h2>
                        <table>
                            <tr>
                                <td><strong>Nama :</strong></td>
                                <td>Wahyuni Putra</td>
                            </tr>
                            <tr>
                                <td><strong>TTL :</strong></td>
                                <td>Buntok, 04 Oktober 2003</td>
                            </tr>
                            <tr>
                                <td><strong>Alamat :</strong></td>
                                <td>Jl. Pasir Panjang, Gg. Pasir Perak, No. 12B</td>
                            </tr>
                            <tr>
                                <td><strong>Telepon :</strong></td>
                                <td>0813-4784-4591</td>
                            </tr>
                            <tr>
                                <td><strong>Email :</strong></td>
                                <td>wahyuniputra@gmail.com</td>
                            </tr>
                            <tr>
                                <td colspan="2" class="description">Mahasiswa Universitas Palangka Raya Program Studi
                                    Teknik Informatika. Memiliki keahlian dalam hal kepemimpinan, manajemen waktu,
                                    desain grafis, pemrograman dan Kerja Sama Tim. Mempunyai antusiasme yang tinggi
                                    terhadap kegiatan organisasi dan sosial yang berdampak positif pada masyarakat luas.
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="education-info">
                        <h2>Pendidikan</h2>
                        <p><strong>Universitas Palangka Raya (2022 - Sekarang)</strong></p>
                        <p>Program Studi Teknik Informatika</p>
                        <p><strong>SMAN 1 Buntok (2019 - 2022)</strong></p>
                        <p>Jurusan MIPA</p>
                    </div>
                    <div class="tools-info">
                        <h2>Tools</h2>
                        <div class="image-row">
                            <img src="assets/images/root/vscode.png" alt="Vs Code">
                            <img src="assets/images/root/xampp.png" alt="XAMPP">
                            <img src="assets/images/root/postman.png" alt="Postman">
                            <img src="assets/images/root/laragon.png" alt="Laragon">
                            <img src="assets/images/root/colabs.png" alt="GColabs">
                            <img src="assets/images/root/github.png" alt="Github">
                            <img src="assets/images/root/git.png" alt="Git">
                            <img src="assets/images/root/wbc.png" alt="wbc">
                            <img src="assets/images/root/win.png" alt="figma">
                            <img src="assets/images/root/canva.png" alt="canva">
                            <!-- Add more images as needed -->
                        </div>
                    </div>
                    <div class="languages-info">
                        <h2>Bahasa Pemrograman</h2>
                        <div class="image-row">
                            <img src="assets/images/root/html.png" alt="Vs Code">
                            <img src="assets/images/root/js.png" alt="XAMPP">
                            <img src="assets/images/root/php.png" alt="Postman">
                            <img src="assets/images/root/cpp.png" alt="Laragon">
                            <img src="assets/images/root/py.png" alt="GColabs">
                            <img src="assets/images/root/java.png" alt="Github">
                            <!-- Add more images as needed -->
                        </div>
                    </div>
                    <div class="frameworks-info">
                        <h2>Framework</h2>
                        <div class="image-row">
                            <img src="assets/images/root/react.png" alt="Vs Code">
                            <img src="assets/images/root/node.png" alt="XAMPP">
                            <img src="assets/images/root/ci.png" alt="XAMPP">
                            <img src="assets/images/root/boostrap.png" alt="Postman">
                        </div>
                    </div>
                </div>
            </div>


            <div id="projects" class="content">
                <h1 class="center-text">Projects dan Publikasi</h1>
                <div class="project">
                    <h2>Website E-Commerce KambingFresh</h2>
                    <img src="assets/images/projects/kambing.png" alt="Project 1" class="project-image">
                    <p class="text-align"> KambingFresh adalah sebuah platform marketplace digital yang
                        berfokus pada produk-produk peternakan kambing. Marketplace ini
                        menyediakan fitur-fitur yang memungkinkan peternak menjual ternak
                        kambing, susu, serta daging kambing secara langsung kepada
                        konsumen, mempersingkat rantai distribusi dan meningkatkan
                        pendapatan peternak. Platform ini juga menawarkan sistem verifikasi
                        kualitas produk serta modul edukasi bagi peternak untuk meningkatkan
                        pemahaman terkait pemasaran digital dan penggunaan platform kepada
                        pengguna. Solusi ini diintegrasikan dengan sistem pembayaran yang
                        aman dan pelacakan pesanan, yang didesain untuk memudahkan baik
                        peternak maupun konsumen dalam bertransaksi. platform ini bertujuan
                        untuk menciptakan ekosistem jual-beli yang transparan, efisien, dan
                        terjangkau bagi peternak kecil hingga menengah serta pembeli di
                        seluruh wilayah Indonesia.
                    <p>Teknologi : Figma, React, Express, dan Tailwind CSS</p>
                    <a href="https://hijaumandalayyy-bjz1.vercel.app/" class="btn btn-primary" target="_blank">Front
                        End</a>
                    <a href="https://exhibition-infinite-learning.super.site/1634fb0d7d0a804ca134daa85566b0b9"
                        class="btn btn-primary" target="_blank">Exhibition</a>
                    <a href="https://github.com/WahyuniPutra/fullmassive" class="btn btn-primary"
                        target="_blank">GitHub</a>
                </div>
                <div class="project">
                    <h2>Website Text Recognizer</h2>
                    <img src="assets/images/projects/text.png" alt="Text" class="project-image">
                    <p class="text-align">Website text
                        recognition atau bisa juga disebut dengan Optical Character Recognition (OCR).
                        Optical Character Recognition (OCR) adalah sebuah aplikasi komputer yang
                        digunakan untuk mengidentifikasi citra huruf maupun angka untuk dikonversi ke
                        dalam bentuk file tulisan (Sonita, 2018). Algoritma Hebb dalam program ini
                        diimplementasikan pada fungsi updateHebbWeights() dalam skrip JavaScript,
                        yang digunakan untuk menghitung frekuensi kemunculan kata. Pada program ini proses algoritma
                        Hebb akan dimulai dengan pemisahan
                        teks menjadi kata-kata individual menggunakan metode split dengan regular
                        expression /\s+/ yang akan memecah teks berdasarkan satu atau lebih karakter
                        whitespace (spasi, tab, atau line break).
                    </p>
                    <p>Teknologi : HTML, PHP dan JavaScript</p>
                    <a href="https://github.com/WahyuniPutra/web-textrecognize" class="btn btn-primary"
                        target="_blank">GitHub</a>
                </div>
                <div class="project">
                    <h2>Website Technopreneurship Flavour Bites!</h2>
                    <img src="assets/images/projects/tekno.png" alt="Project 3" class="project-image">
                    <p class="text-align">
                        Website ini dirancang untuk memberikan kemudahan kepada pembeli dalam melakukan transaksi secara
                        online. Dengan fitur yang lengkap, platform ini mendukung pengalaman pengguna yang intuitif,
                        mulai dari pencarian produk, keranjang belanja, hingga proses pembayaran. Website ini tidak
                        hanya praktis, tetapi juga dioptimalkan untuk memberikan solusi terbaik bagi para pelaku bisnis
                        di era digital.</p>

                    <p>Teknologi : HTML, CSS, JavaScript, dan Bootstrap</p>
                    <a href="https://github.com/WahyuniPutra/web-flavourbites" class="btn btn-primary"
                        target="_blank">GitHub</a>
                </div>
                <div class="project">
                    <h2>Website E-Commerce Ki-Store</h2>
                    <img src="assets/images/projects/kiweb.png" alt="Project 3" class="project-image">
                    <p class="text-align">
                        Website ini bertujuan untuk mempermudah penjual dalam membuat deskripsi produk secara otomatis
                        menggunakan teknologi API Gemini AI. Dengan integrasi ini, penjual dapat menghasilkan deskripsi
                        produk yang menarik dan informatif tanpa harus menghabiskan banyak waktu. Platform ini juga
                        mendukung kemudahan manajemen produk, sehingga penjual dapat fokus pada pengembangan bisnis.
                        Teknologi modern yang digunakan memastikan pengalaman pengguna yang cepat, efisien, dan
                        responsif.</p>
                    <p>Teknologi : HTML, CSS, API,JavaScript, dan Bootstrap</p>
                    <a href="https://github.com/WahyuniPutra/Kistore-Web" class="btn btn-primary"
                        target="_blank">GitHub</a>
                </div>
                <div class="project">
                    <h2>Mobile E-Commerce Ki-Store</h2>
                    <img src="assets/images/projects/kimob.png" alt="Project 3" class="project-image">
                    <p class="text-align">
                        Aplikasi mobile ini dirancang untuk mempermudah penjual dalam mengelola produk dan membuat
                        deskripsi produk secara otomatis menggunakan API Gemini AI. Dengan dukungan teknologi ini,
                        penjual dapat menghasilkan deskripsi produk yang menarik dan informatif langsung dari perangkat
                        mobile mereka. Aplikasi ini juga menyediakan fitur-fitur e-commerce yang lengkap, seperti
                        manajemen inventaris, notifikasi real-time, dan integrasi pembayaran, sehingga memungkinkan
                        pengalaman pengguna yang praktis, cepat, dan fleksibel di mana saja.</p>
                    <p>Teknologi : Dart dan API</p>
                    <a href="https://e-jurnal.lppmunsera.org/index.php/ProTekInfo/issue/view/434"
                        class="btn btn-primary" target="_blank">Publikasi</a>
                    <a href="https://github.com/WahyuniPutra/Kistore-Mobile" class="btn btn-primary"
                        target="_blank">GitHub</a>
                </div>
                <div class="project">
                    <h2>Chatbot Berbasis Whatsapp Teknik Informatika Universitas Palangkaraya: Rules Based System</h2>
                    <img src="assets/images/projects/bot.png" alt="Project" class="project-image">
                    <p class="text-align">Chatbot ini dikembangkan untuk mempermudah komunikasi dan memberikan informasi
                        secara otomatis
                        kepada mahasiswa dan pengguna lainnya melalui platform WhatsApp. Bot ini menggunakan integrasi
                        API GPT untuk menghasilkan jawaban berbasis pemrosesan bahasa alami (NLP), teknik web scraping
                        untuk mengambil data terkini dari website tertentu, dan teknologi OCR (Optical Character
                        Recognition) untuk membaca dan mengekstrak informasi dari dokumen atau gambar. Dengan kombinasi
                        teknologi ini, chatbot dapat memberikan respons yang akurat, relevan, dan cepat. Hasilnya adalah
                        sistem yang efisien untuk mendukung kebutuhan informasi di lingkungan akademik.</p>
                    <p>

                    </p>Teknologi : Node JS, GPT-3, Web Scraping, dan OCR</p>
                    <a href="https://journal.thamrin.ac.id/index.php/jtik/article/view/2111" class="btn btn-primary"
                        target="_blank">Publikasi</a>
                    <a href="https://github.com/WahyuniPutra/chatbot-rulesBasedSystem" class="btn btn-primary"
                        target="_blank">GitHub</a>
                </div>
            </div>
        </div>

        <div id="contact" class="content">
            <h1>Contact</h1>
            <p>Feel free to reach out to me through the following contact information or by filling out the contact
                form below:</p>
            <div class="contact-info">
                <p><strong>Email:</strong> wahyuniputra@gmail.com</p>
                <p><strong>Phone:</strong> 0813-4784-4591</p>
            </div>
            <form action="contact_form_handler.php" method="post" class="contact-form">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="5" required></textarea>

                <button type="submit">Send</button>
            </form>
        </div>
    </section>

    <script>
        function showContent(section) {
            var contents = document.getElementsByClassName('content');
            for (var i = 0; i < contents.length; i++) {
                contents[i].style.display = 'none';
            }
            document.getElementById(section).style.display = 'block';
        }

        // Show the "About" section by default
        showContent('about');
    </script>>

    <footer>
        <p>Wahyuni Putra &copy; 2024</p>
    </footer>
</body>

</html>