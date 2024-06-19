<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to RestBoy Restaurant</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="h-full">
<div class="min-h-full">
    <x-navbar></x-navbar>
    <x-header>Kebijakan dan Privasi</x-header>

    <main>
        <div class="bg-gray-100">
            <div class="container mx-auto px-4 py-8">
                

                <p class="mb-4">
                    Kebijakan privasi ini menjelaskan bagaimana RestBoy Restaurant menggunakan dan melindungi informasi apa pun yang Anda berikan saat menggunakan situs web ini.
                </p>

                <h2 class="text-2xl font-bold mb-2">Informasi yang Kami Kumpulkan</h2>

                <p class="mb-4">
                    Kami mungkin mengumpulkan informasi berikut:
                </p>

                <ul class="list-disc list-inside mb-4">
                    <li>Nama dan informasi kontak Anda</li>
                    <li>Informasi demografis</li>
                    <li>Informasi lain yang relevan dengan survei pelanggan dan/atau penawaran</li>
                </ul>

                <h2 class="text-2xl font-bold mb-2">Bagaimana Kami Menggunakan Informasi</h2>

                <p class="mb-4">
                    Kami memerlukan informasi ini untuk memahami kebutuhan Anda dan memberikan layanan yang lebih baik, terutama untuk alasan berikut:
                </p>

                <ul class="list-disc list-inside mb-4">
                    <li>Pencatatan internal</li>
                    <li>Meningkatkan produk dan layanan kami</li>
                    <li>Mengirim email promosi tentang produk baru, penawaran khusus, atau informasi lain yang menurut kami mungkin Anda anggap menarik</li>
                    <li>Dari waktu ke waktu, kami juga dapat menggunakan informasi Anda untuk menghubungi Anda untuk tujuan riset pasar. Kami dapat menghubungi Anda melalui email, telepon, atau surat. Kami dapat menggunakan informasi tersebut untuk menyesuaikan situs web sesuai dengan minat Anda.</li>
                </ul>

                <h2 class="text-2xl font-bold mb-2">Keamanan</h2>

                <p class="mb-4">
                    Kami berkomitmen untuk memastikan bahwa informasi Anda aman. Untuk mencegah akses atau pengungkapan yang tidak sah, kami telah menempatkan prosedur fisik, elektronik, dan manajerial yang sesuai untuk melindungi dan mengamankan informasi yang kami kumpulkan secara online.
                </p>

                <h2 class="text-2xl font-bold mb-2">Cookies</h2>

                <p class="mb-4">
                    Cookie adalah file kecil yang meminta izin untuk ditempatkan di hard drive komputer Anda. Setelah Anda setuju, file tersebut ditambahkan dan cookie membantu menganalisis lalu lintas web atau memberi tahu Anda saat Anda mengunjungi situs tertentu. Cookie memungkinkan aplikasi web merespons Anda sebagai individu. Aplikasi web dapat menyesuaikan operasinya dengan kebutuhan, suka, dan tidak suka Anda dengan mengumpulkan dan mengingat informasi tentang preferensi Anda.
                </p>

                <p class="mb-4">
                    Secara keseluruhan, cookie membantu kami menyediakan situs web yang lebih baik dengan memungkinkan kami memantau halaman mana yang Anda anggap berguna dan mana yang tidak. Cookie tidak memberi kami akses ke komputer Anda atau informasi apa pun tentang Anda, selain data yang Anda pilih untuk dibagikan dengan kami.
                </p>

                <h2 class="text-2xl font-bold mb-2">Tautan ke Situs Web Lain</h2>

                <p class="mb-4">
                    Situs web kami mungkin berisi tautan ke situs web lain yang menarik. Namun, setelah Anda menggunakan tautan ini untuk meninggalkan situs kami, Anda harus mencatat bahwa kami tidak memiliki kendali atas situs web lain tersebut. Oleh karena itu, kami tidak dapat bertanggung jawab atas perlindungan dan privasi informasi apa pun yang Anda berikan saat mengunjungi situs tersebut dan situs tersebut tidak diatur oleh pernyataan privasi ini. Anda harus berhati-hati dan melihat pernyataan privasi yang berlaku untuk situs web yang dimaksud.
                </p>

                <h2 class="text-2xl font-bold mb-2">Mengontrol Informasi Pribadi Anda</h2>

                <p class="mb-4">
                    Anda dapat memilih untuk membatasi pengumpulan atau penggunaan informasi pribadi Anda dengan cara berikut:
                </p>

                <ul class="list-disc list-inside mb-4">
                    <li>Jika Anda sebelumnya telah menyetujui kami menggunakan informasi pribadi Anda untuk tujuan pemasaran langsung, Anda dapat berubah pikiran kapan saja dengan menulis kepada kami atau mengirim email ke [email protected]</li>
                    <li>Kami tidak akan menjual, mendistribusikan, atau menyewakan informasi pribadi Anda kepada pihak ketiga kecuali kami memiliki izin Anda atau diharuskan oleh hukum untuk melakukannya. Kami dapat menggunakan informasi pribadi Anda untuk mengirimkan informasi promosi tentang pihak ketiga yang menurut kami mungkin Anda anggap menarik jika Anda memberi tahu kami bahwa Anda ingin hal ini terjadi.</li>
                    <li>Anda dapat meminta rincian informasi pribadi yang kami pegang tentang Anda. Jika Anda menginginkan salinan informasi yang dipegang tentang Anda, silakan tulis ke [Nama Perusahaan Anda, Alamat, Kota, Negara Bagian, Kode Pos] atau email [email protected]</li>
                    <li>Jika Anda yakin bahwa informasi apa pun yang kami pegang tentang Anda tidak benar atau tidak lengkap, silakan tulis atau email kami sesegera mungkin di alamat di atas. Kami akan segera memperbaiki informasi apa pun yang ditemukan tidak benar.</li>
                </ul>

                <p class="mb-4">
                    Kebijakan privasi ini dapat berubah tanpa pemberitahuan.
                </p>
            </div>
        </div>
        <!-- footer -->
        <x-footer></x-footer>
    </main>
</div>
</body>
</html>
