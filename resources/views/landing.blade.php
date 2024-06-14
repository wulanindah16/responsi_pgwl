@extends('layouts.template')

@section('styles')
    <style>
        h1 {
            font-family: 'Kdam Thmor Pro', sans-serif;
            font-size: 36px;
            padding-bottom: 15px;
        }

        h2 {
            font-family: 'Kdam Thmor Pro', sans-serif;
            font-size: 35px;
            padding-bottom: 15px;
        }

        h3 {
            font-family: 'Lobster', cursive;
            font-size: 27px;
            padding-bottom: 30px;
        }

        hr {
            color: rgb(236, 230, 230);
        }

        body {
    background-color: #cddcec; /* Warna latar belakang halaman */
}
    </style>
@endsection

@section('content')
    <div class="tampilan-awal">
        <header id="home">
            <video autoplay muted loop style="width: 100%; height: 450px; object-fit: cover;">
                <source src="{{ url('frontend/video/mamba.mp4') }}" type="video/mp4">
            </video>
            <div
                style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center; color: white;">
                <h1>Explore Manggarai Barat Destination</h1>
                <h3>Map your journey, Find your story</h3>
            </div>
        </header>
    </div>

    <div class="container mt-1 text-center">
        <hr class="mt-2 mb-2">
        <div class="card-deck">
            <div class="col-md-12">
                <div class="shadow rounded bg-white">
                    <div class="card-body p-2 mb-4">
                        <div class="row justify-content-center">
                            <div>
                                <p class="fw-bold fs-5 mt-3">
                                    Kabupaten Manggarai Barat
                                </p>
                            </div>
                            <div class="container px-4 px-lg-5">
                                <div class="row gx-4 gx-lg-5 justify-content-center">
                                    <div class="col-md-10 col-lg-8 col-xl-7 text-sm-start">
                                        <p align="justify"> Manggarai Barat merupakan salah satu kabupaten di
                                            Provinsi
                                            Nusa Tenggara Timur, Indonesia. Kabupaten Manggarai Barat merupakan
                                            hasil
                                            pemekaran dari Kabupaten Manggarai berdasarkan Undang Undang No. 8 Tahun
                                            2003. Luas wilayah Kabupaten Manggarai Barat
                                            adalah 9.450 km² yang terdiri dari wilayah daratan seluas 2.947,50 km²
                                            dan
                                            wilayah lautan 7.052,97 km², dengan jumlah penduduk tahun 2022 sebanyak
                                            210.555 jiwa. Secara administratif, wilayah Kabupaten Manggarai Barat
                                            pada sebelah utara berbatasan dengan Laut Flores, sebelah selatan
                                            berbatasan dengan Selat Sumba dan Laut Sawu, sebelah timur berbatasan
                                            dengan Kabupaten Manggarai, dan sebelah barat berbatasan dengan Selat
                                            Sape</p>
                                        <p align="justify"> Kabupaten Manggarai Barat terletak pada bagian paling
                                            barat pulau Flores
                                            di Provinsi Nusa Tenggara Timur. Ibu Kota Kabupaten Manggarai Barat
                                            adalah Labuan Bajo. Kabupaten Manggarai
                                            Barat terletak di antara 8°14'–9°00' Lintang Selatan (LS) dan
                                            119°21'–120°20' Bujur Timur (BT). Kabupaten Manggarai Barat memiliki
                                            luas daratan mencapai 2.947,50 km², yang terdiri dari daratan Flores dan
                                            pulau-pulau besar seperti pulau Komodo, Rinca, Longos, serta beberapa
                                            pulau kecil lainnya. Wilayah administrasi kabupaten Manggarai Barat
                                            terdiri dari 10 Kecamatan yakni kecamatan Komodo, Boleng, Sano Nggoang,
                                            Mbeliling, Lembor, Welak, Lembor Selatan, Kuwus, Ndoso, dan Macang
                                            Pacar.</p>

                                        <p align="justify"> Kabupaten Manggarai Barat menyimpan menyimpan keindahan
                                            alam yang
                                            menakjubkan dan hewan purba yang mendunia. Mulai dari hewan endemik
                                            komodo di Pulau Rinca dan Pulau Komodo, deretan pulau eksotis, keragaman
                                            hayati bawah laut, hingga pantai. Wisata Kabupaten Manggarai Barat dapat
                                            diakses melalui
                                            jalur darat, laut, dan juga udara. Keindahan Pulau Komodo dengan
                                            kekayaan budaya lokal dan pulau-pulau eksotis di sekitarnya membuat
                                            Kabupaten Manggarai Barat menjadi tempat wisata yang potensial dan ramai
                                            dikunjungi.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>

        <div class="carousel-caption d-none d-md-block text-center">
            <h2>Destinasi Wisata Manggarai Barat</h2>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="frontend/data/gambar1.jpeg" class="d-block w-100" height="400">
            </div>
            <div class="carousel-item">
                <img src="frontend/data/gambar2.jpeg" class="d-block w-100" height="400">
            </div>
            <div class="carousel-item">
                <img src="frontend/data/gambar3.jpeg" class="d-block w-100" height="400">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <hr>

    <!-- List Wisata -->
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-lg-4 mb-1 d-flex">
                <div class="shadow p-2 mb-2 mt-2 rounded bg-white">
                    <img class="card-img mb-1 lazyload rounded lazyload" src="frontend/img/wisata/kanawa.jpeg"
                        width="200" height="185">
                    <div class="card-body p-2">
                        <h5 class="card-title h5 text-center">Pulau Kanawa</h5>
                        <p class="ql-align-justify"></p>

                        <p align="justify"><strong>Pulau Kanawa</strong> merupakan sebuah pulau kecil yang terletak
                            di perairan
                            Flores. Pulau ini dikenal dengan keindahan alam bawah lautnya. Berbagai macam terumbu
                            karang mengelilingi pulau ini, ditambah pasir putih dengan air laut yang bening menjadi
                            daya tarik bagi wisatawan.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-lg-4 mb-1 d-flex">
                <div class="shadow p-2 mb-2 mt-2 rounded bg-white">
                    <img class="card-img mb-1 lazyload rounded lazyload" src="frontend/img/wisata/gililawa.jpeg"
                        width="200" height="185">
                    <div class="card-body p-2">
                        <h5 class="card-title h5 text-center">Gili Lawa Darat</h5>
                        <p class="ql-align-justify"></p>

                        <p align="justify"><strong>Gili Lawa Darat</strong> adalah salah satu pulau di Kepulauan Komodo yang
                            memiliki view luar biasa jika dilihat dari atas bukitnya. Pulau Gili Lawa Darat terletak di
                            dekat kawasan Taman Nasional Komodo. Pulau Gili Lawa Darat menampilkan hamparan padang savana
                            yang luas.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-lg-4 mb-1 d-flex">
                <div class="shadow p-2 mb-2 mt-2 rounded bg-white">
                    <img class="card-img mb-1 lazyload rounded lazyload" src="frontend/img/wisata/padar.jpeg" width="200"
                        height="185">
                    <div class="card-body p-2">
                        <h5 class="card-title h5 text-center">Pulau Padar</h5>
                        <p class="ql-align-justify"></p>

                        <p align="justify"><strong>Pulau Padar</strong> merupakan pulau ketiga terbesar di kawasan
                            Taman
                            Nasional Komodo. Pulau Padar menawarkan panorama
                            alam dengan gugusan bukit yang artistik mengelilingi Pulau Padar, hamparan pasir putih
                            dan birunya laut. Wisatawan harus melewati sebanyak 817 tangga untuk sampai ke puncak.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-lg-4 mb-1 d-flex">
                <div class="shadow p-2 mb-2 mt-2 rounded bg-white">
                    <img class="card-img mb-1 lazyload rounded lazyload" src="frontend/img/wisata/komodo.jpeg"
                        width="200" height="185">
                    <div class="card-body p-2">
                        <h5 class="card-title h5 text-center">Taman Nasional Komodo Loh Buaya</h5>
                        <p class="ql-align-justify"></p>

                        <p align="justify"><strong>Taman Nasional Komodo Loh Buaya</strong> merupakan kawasan
                            konservasi dengan luas 173.300 hektar yang ditetapkan sebagai Cagar Biosfer Komodo
                            dan Situs Warisan Dunia di Pulau Rinca. Di kawasan Taman Nasional Komodo, terdapat juga
                            kuda, banteng liar, rusa, babi hutan jantan, ular, kera, dan berbagai jenis burung.
                            Selain itu Taman Nasional Komodo memiliki biota bawah laut yang menakjubkan.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-lg-4 mb-1 d-flex">
                <div class="shadow p-2 mb-2 mt-2 rounded bg-white">
                    <img class="card-img mb-1 lazyload rounded lazyload" src="frontend/img/wisata/papagarang.jpg"
                        width="200" height="185">
                    <div class="card-body p-2">
                        <h5 class="card-title h5 text-center">Pulau Papagarang</h5>
                        <p class="ql-align-justify"></p>

                        <p align="justify"><strong>Pulau Papagarang</strong> merupakan daerah lintasan kapal-kapal
                            wisata
                            ketika
                            hendak berkunjung ke Pulau Komodo. Nuansa kampung nelayan yang kental menjadi
                            daya tarik utama Pulau Papagarang mulai dari arsitektur bangunan hingga
                            aktivitas kehidupan sosial masyarakat. Pulau ini juga didukung dengan panorama
                            yang indah serta pesona laut yang menawan.</p>
                    </div>
                </div>
            </div>



            <div class="col-md-4 col-lg-4 mb-1 d-flex">
                <div class="shadow p-2 mb-2 mt-2 rounded bg-white">
                    <img class="card-img mb-1 lazyload rounded lazyload" src="frontend/img/wisata/sanonggoang.jpeg"
                        width="200" height="185">
                    <div class="card-body p-2">
                        <h5 class="card-title h5 text-center">Danau Sano Nggoang</h5>
                        <p class="ql-align-justify"></p>

                        <p align="justify"><strong>Danau Sano Nggoang</strong> adalah danau vulkanik yang terletak
                            di sebelah
                            tenggara kawasan Hutan Mbeliling. Danau yang berada pada ketinggian 750 mdpl dengan
                            kedalaman sekitar 600 meter ini menjadi daya tarik karena memiliki kadar belerang yang
                            cukup tinggi. Bau belerang yang menyengat akan tercium saat berada di kawasan danau ini.
                            Oleh karena itu, aktivitas mandi untuk kesehatan kulit menjadi tujuan utama datang ke
                            danau ini.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-lg-4 mb-1 d-flex">
                <div class="shadow p-2 mb-2 mt-2 rounded bg-white">
                    <img class="card-img mb-1 lazyload rounded lazyload" src="frontend/img/wisata/komodo2.jpeg"
                        width="200" height="185">
                    <div class="card-body p-2">
                        <h5 class="card-title h5 text-center">Taman Nasional Komodo Loh Liang</h5>
                        <p class="ql-align-justify"></p>

                        <p align="justify"><strong>Taman Nasional Komodo Loh Liang</strong> merupakan daerah wisata
                            di Pulau Komodo
                            Flores. Loh Liang atau Pulau Komodo adalah pulau terbesar
                            di kawasan Taman Nasional Komodo yang menjadi habitat sekitar 4.000 komodo. Disini,
                            wisatawan bisa melakukan pengamatan satwa komodo, rusa, babi hutan, dan burung.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-lg-4 mb-1 d-flex">
                <div class="shadow p-2 mb-2 mt-2 rounded bg-white">
                    <img class="card-img mb-1 lazyload rounded lazyload" src="frontend/img/wisata/pkambing.jpg"
                        width="200" height="185">
                    <div class="card-body p-2">
                        <h5 class="card-title h5 text-center">Pulau Kambing</h5>
                        <p class="ql-align-justify"></p>
                        <p align="justify"><strong>Pulau Kambing</strong> merupakan empat wisata Manggarai Barat
                            yang unik dengan
                            panorama bawah lautnya. Pulau ini memang kecil, namun keindahan alamnya yang sangat
                            memukau. Pulau Kambing cocok untuk melakukan kegiatan diving.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-lg-4 mb-1 d-flex">
                <div class="shadow p-2 mb-2 mt-2 rounded bg-white">
                    <img class="card-img mb-1 lazyload rounded lazyload" src="frontend/img/wisata/pulaubidadari.jpeg"
                        width="200" height="185">
                    <div class="card-body p-2">
                        <h5 class="card-title h5 text-center">Pulau Bidadari</h5>
                        <p class="ql-align-justify"></p>

                        <p align="justify"><strong>Pulau Bidadari</strong> adalah sebuah pulau yang terletak di
                            Labuan Bajo,
                            Kabupaten Manggarai Barat, NTT. Pulau ini cukup besar dengan perbukitan dan
                            pemandangan
                            alam yang indah. Bawah laut pulau ini juga sangat indah, cocok untuk diving atau
                            snorkeling.</p>
                    </div>
                </div>
            </div>




            <div class="col-md-4 col-lg-4 mb-1 d-flex">
                <div class="shadow p-2 mb-2 mt-2 rounded bg-white">
                    <img class="card-img mb-1 lazyload rounded lazyload" src="frontend/img/wisata/pinkbeach.jpeg"
                        width="200" height="185">
                    <div class="card-body p-2">
                        <h5 class="card-title h5 text-center">Pink Beach</h5>
                        <p class="ql-align-justify"></p>

                        <p align="justify"><strong>Pink Beach</strong> meupakan pantai yang memiliki keunikan
                            tersendiri. Salah satu
                            daya tarik dari pantai ini adalah warna pasirnya
                            yang merah muda dan airnya yang sangat jernih. Pantai Pink ini sangat ramai pengunjung.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-lg-4 mb-1 d-flex">
                <div class="shadow p-2 mb-2 mt-2 rounded bg-white">
                    <img class="card-img mb-1 lazyload rounded lazyload" src="frontend/img/wisata/waecicu.jpg"
                        width="200" height="185">
                    <div class="card-body p-2">
                        <h5 class="card-title h5 text-center">Pantai Waecicu</h5>
                        <p class="ql-align-justify"></p>

                        <p align="justify"><strong>Pantai Waecicu</strong> berada di ujung utara sekitaran Labuan
                            Bajo. Pantai
                            Waecicu memiliki pasir putih dengan air yang tenang dan pemandangan yang luar biasa.
                            Pantai Waecicu
                            cocok untuk berlibur dengan keluarga, khususnya bersama anak-anak.</p>
                    </div>
                </div>
            </div>



            <div class="col-md-4 col-lg-4 mb-1 d-flex">
                <div class="shadow p-2 mb-2 mt-2 rounded bg-white">
                    <img class="card-img mb-1 lazyload rounded lazyload" src="frontend/img/wisata/watuweri.jpeg"
                        width="200" height="185">
                    <div class="card-body p-2">
                        <h5 class="card-title h5 text-center">Pantai Watu Weri</h5>
                        <p class="ql-align-justify"></p>

                        <p align="justify"><strong>Pantai Watu Weri</strong> adalah salah satu tempat wisata
                            Manggarai Barat yang
                            indah dan
                            masih sepi. Pantai ini mempunyai air yang jernih dan batu karang
                            yang berderet di pinggirnya. Pantai ini cocok untuk menikmati senja sambil bersantai.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-lg-4 mb-1 d-flex">
                <div class="shadow p-2 mb-2 mt-2 rounded bg-white">
                    <img class="card-img mb-1 lazyload rounded lazyload" src="frontend/img/wisata/waerana.jpg"
                        width="200" height="185">
                    <div class="card-body p-2">
                        <h5 class="card-title h5 text-center">Pantai Wae Rana</h5>
                        <p class="ql-align-justify"></p>

                        <p align="justify"><strong>Pantai Wae Rana</strong> merupakan salah satu pantai di Pulau
                            Kanawa yang
                            memiliki pemandangan yang menakjubkan. Pantai Wae Rana menyajikan keindahan panorama
                            alam gugusan pulau yang memukau. Dengan pasir putih yang lembut dan air laut yang
                            jernih, pantai ini sangat cocok menjadi tempat liburan yang nyaman dan menyegarkan.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-lg-4 mb-1 d-flex">
                <div class="shadow p-2 mb-2 mt-2 rounded bg-white">
                    <img class="card-img mb-1 lazyload rounded lazyload" src="frontend/img/wisata/manjarite.jpg"
                        width="200" height="185">
                    <div class="card-body p-2">
                        <h5 class="card-title h5 text-center">Pantai Manjarite</h5>
                        <p class="ql-align-justify"></p>

                        <p align="justify"><strong>Pantai Manjarite</strong> merupakan pulau kecil yang berjarak
                            sekitar satu jam
                            dari Labuan Bajo dan posisinya dekat dengan Pulau Rinca. Pantai Manjarite cocok untuk
                            melakukan snorkeling karena memiliki perairan yang dangkal dengan ombak yang tenang.
                            Pantai Manjarite memiliki karang yang lebih beragam dan lebih berwarna.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-lg-4 mb-1 d-flex">
                <div class="shadow p-2 mb-2 mt-2 rounded bg-white">
                    <img class="card-img mb-1 lazyload rounded lazyload" src="frontend/img/wisata/pantaipede.jpg"
                        width="200" height="185">
                    <div class="card-body p-2">
                        <h5 class="card-title h5 text-center">Pantai Pede</h5>
                        <p class="ql-align-justify"></p>

                        <p align="justify"><strong>Pantai Pede</strong> memiliki pasir putih, air yang tenang dan
                            taman
                            dihiasi pepohonan yang cukup luas. Lokasi pantai ini berada di Jalan Raya Pantai Pede
                            dan sangat mudah diakses ketika berada di Labuan Bajo. Selain itu, Pantai Pede termasuk
                            spot terbaik untuk melihat sunset.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-lg-4 mb-1 d-flex">
                <div class="shadow p-2 mb-2 mt-2 rounded bg-white">
                    <img class="card-img mb-1 lazyload rounded lazyload" src="frontend/img/wisata/manta.jpeg"
                        width="200" height="185">
                    <div class="card-body p-2">
                        <h5 class="card-title h5 text-center">Manta Point</h5>
                        <p class="ql-align-justify"></p>

                        <p align="justify"><strong>Manta Point</strong> merupakan sebuah tempat untuk
                            menyaksikan ikan pari manta yang sudah langka. Tempat wisata ini sangat terkenal dengan
                            wisata diving yang menyuguhkan keindahan bawah laut. Selain itu,
                            terdapat berbagai ikan terumbu karang dengan berbagai warna eksotis.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-lg-4 mb-1 d-flex">
                <div class="shadow p-2 mb-2 mt-2 rounded bg-white">
                    <img class="card-img mb-1 lazyload rounded lazyload" src="frontend/img/wisata/turtle.jpg"
                        width="200" height="185">
                    <div class="card-body p-2">
                        <h5 class="card-title h5 text-center">Turtle Point</h5>
                        <p class="ql-align-justify"></p>

                        <p align="justify"><strong>Turtle Point</strong> merupakan suatu tempat di bawah laut yang
                            memiliki populasi
                            penyu yang beragam. Turtle Point terletak di Pulau Siaba dengan julukan "City of
                            Turtle". Selain itu, Turtle Point menjadi tempat petualangan drift drive yang seru.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-lg-4 mb-1 d-flex">
                <div class="shadow p-2 mb-2 mt-2 rounded bg-white">
                    <img class="card-img mb-1 lazyload rounded lazyload" src="frontend/img/wisata/cuncaplias.jpg"
                        width="200" height="185">
                    <div class="card-body p-2">
                        <h5 class="card-title h5 text-center">Air Terjun Cunca Plias</h5>
                        <p class="ql-align-justify"></p>

                        <p align="justify"><strong>Air Terjun Cunca Plias</strong> merupakan air terjun yang
                            terletak di Desa
                            1001 Air Terjun Desa Wae Lolos, Kecamatan Sano Nggoang. Air terjun ini mengalir dari
                            celah-celah batu alam. Dahulu air terjun ini digunakan untuk menyembuhkan orang yang
                            sedang sakit.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-lg-4 mb-1 d-flex">
                <div class="shadow p-2 mb-2 mt-2 rounded bg-white">
                    <img class="card-img mb-1 lazyload rounded lazyload" src="frontend/img/wisata/cuncarami.jpg"
                        width="200" height="185">
                    <div class="card-body p-2">
                        <h5 class="card-title h5 text-center">Air Terjun Cunca Rami</h5>
                        <p class="ql-align-justify"></p>

                        <p align="justify"><strong>Air Terjun Cunca Rami</strong> merupakan air terjun dengan pesona
                            yang indah dan
                            tampak asri di tengah hutan Labuan Bajo. Air terjun ini memiliki ketinggian kurang lebih
                            100 m dengan kolam yang cukup besar untuk menampung air yang jatuh. Daya tarik wisata
                            air terjun Cunca Rami adalah keindahan pelangi yang nampak di bawah
                            air terjun. Namun sayangnya pemandangan ini hanya terjadi pada saat-saat tertentu
                            saja.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-lg-4 mb-1 d-flex">
                <div class="shadow p-2 mb-2 mt-2 rounded bg-white">
                    <img class="card-img mb-1 lazyload rounded lazyload" src="frontend/img/wisata/cuncaperlamping.jpg"
                        width="200" height="185">
                    <div class="card-body p-2">
                        <h5 class="card-title h5 text-center">Air Terjun Cunca Perlamping</h5>
                        <p class="ql-align-justify"></p>

                        <p align="justify"><strong>Air Terjun Cunca Perlamping</strong> merupakan hasil pencampuran
                            dua jenis air,
                            yaitu air belerang dan air bersih. Air terjun Cunca Perlamping masih alami dan belum
                            tersentuh pengelolaan tangan manusia. Air Terjun Cunca Perlamping terletak di Kampung
                            Nobo,
                            Desa Tondong Belang, Kecamatan Mbeliling.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-lg-4 mb-1 d-flex">
                <div class="shadow p-2 mb-2 mt-2 rounded bg-white">
                    <img class="card-img mb-1 lazyload rounded lazyload" src="frontend/img/wisata/cuncawulang.jpg"
                        width="200" height="185">
                    <div class="card-body p-2">
                        <h5 class="card-title h5 text-center">Air Terjun Cunca Wulang</h5>
                        <p class="ql-align-justify"></p>

                        <p align="justify"><strong>Air Terjun Cunca Wulang</strong> terletak di dalam kawasan
                            Hutan Mbeliling, tepatnya di ketinggian 2.000 meter dari permukaan laut. Air terjun yang
                            terletak di antara tebing ini, menciptakan pemandangan seperti di Green Canyon. Kegiatan
                            berenang atau bahkan meloncat dari ketinggian sering dilakukan wisatawan untuk menikmati
                            segarnya air terjun yang menerpa kulit.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-lg-4 mb-1 d-flex">
                <div class="shadow p-2 mb-2 mt-2 rounded bg-white">
                    <img class="card-img mb-1 lazyload rounded lazyload" src="frontend/img/wisata/batucermin.jpg"
                        width="200" height="185">
                    <div class="card-body p-2">
                        <h5 class="card-title h5 text-center">Gua Batu Cermin</h5>
                        <p class="ql-align-justify"></p>

                        <p align="justify"><strong>Gua Batu Cermin</strong> merupakan sebuah terowongan yang
                            terbentuk dari 2
                            batu yang sangat tinggi. Di siang hari sinar matahari akan masuk ke celahnya dan
                            memantul sehingga
                            membentuk refleksi yang sangat indah. Gua Batu Cermin dapat ditelusuri dengan bantuan
                            tour
                            guide
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-lg-4 mb-1 d-flex">
                <div class="shadow p-2 mb-2 mt-2 rounded bg-white">
                    <img class="card-img mb-1 lazyload rounded lazyload" src="frontend/img/wisata/guarangko.jpg"
                        width="200" height="185">
                    <div class="card-body p-2">
                        <h5 class="card-title h5 text-center">Gua Rangko</h5>
                        <p class="ql-align-justify"></p>

                        <p align="justify"><strong>Gua Rangko</strong> adalah salah satu tempat wisata tersembunyi
                            yang indah dengan
                            kolam biru alami di dekat kota Labuan Bajo. Hal paling unik dari gua Rangko adalah
                            keberadaan sebuah kolam air asin sedalam 7 meter dengan air yang jernih dan segar.
                            Pengunjung bisa
                            memanfaatkan kolam itu untuk berenang atau berendam sambil menikmati udara dalam gua
                            yang segar dan sejuk.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr class="card">

    <!-- Footer -->
    <div class="text-center">
        <img src="frontend/img/logo/mabadest.png" class="rounded" width="65" height="65">
        <h5>WebGIS Wisata</h5>
        <p>Kabupaten Manggarai Barat</p>
    </div>

    <div class="d-flex justify-content-center">
        <a href="https://www.instagram.com/wulanindahs_/" class="text-dark me-3"><i
                class="fab fa-instagram fa-2x"></i></a>
        <a href="https://twitter.com/escontonglw" class="text-dark me-3"><i class="fab fa-twitter fa-2x"></i></a>
        <a href="https://www.tiktok.com/@gasukajamu" class="text-dark me-3"><i class="fab fa-tiktok fa-2x"></i></a>
    </div>

    <div class="text-center mt-2">
        <small class="text-secondary">Copyright &copy; 2024 WebGIS Kabupaten Manggarai Barat | All Rights
            Reverse</small>
    </div>
@endsection
