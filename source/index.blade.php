@extends('_layouts.main')
@section('body')
    <div class="max-w-screen-2xl mx-auto">
        <div class="max-w-screen-2xl bg-nav fixed top-0 z-50 w-full px-5 lg:px-20 py-2 justify-between flex flex-row">
            <img class="my-auto mb-2" src="assets/logo.png">
            <img class="my-auto flex lg:hidden" src="assets/burger.png">
            <div class="hidden lg:flex flex-row lg:space-x-16">
                <div class="underline font-bold my-auto" style="color: #18276F">
                    BERANDA
                </div>
                <div class="font-bold my-auto" style="color: #18276F">
                    ARTIKEL/BLOG
                </div>
                <div class="font-bold my-auto" style="color: #18276F">
                    PROMOTOR
                </div>
            </div>
        </div>
        <div class="flex flex-col">
            <div class="pb-16 body-bg space-y-10 px-5">
                <div class="pt-32 space-y-8">
                    <p class="text-white text-md lg:text-xl font-semibold text-center">
                        Branch Tes STIFIn <span class="goldtext">No. 1 di Indonesia</span>
                    </p>
                    <div class="mx-auto text-4xl text-white font-semibold text-center w-11/12 block lg:flex lg:flex-col">
                        <p>Melayani Tes STIFIn untuk</p>
                        <p class="goldtext"> Mengetahui Personaliti Genetik Anda</p>
                    </div>
                </div>
                <div class="w-full flex flex-col lg:flex-row space-x-0 lg:space-x-10 px-0 lg:px-12 space-y-8 lg:space-y-0">
                    <div class="w-full lg:w-9/12">
                        <img class="mx-auto w-full rounded-2xl" src="assets/image%201.png">
                    </div>
                    <div class="w-full lg:w-6/12 box-1 text-white px-7 py-4 space-y-3">
                        <p class="text-white font-semibold text-lg">Kami Siap Membantu Anda
                            untuk Mengetahui :</p>

                        <ul class="space-y-3">
                            <li class="flex flex-row space-x-3">
                                <img class="my-auto" src="assets/icon/UserList.png">
                                <p>Karakter Kepribadian</p>
                            </li>
                            <li class="flex flex-row space-x-3">
                                <img class="my-auto" src="assets/icon/Trophy.png">
                                <p>Potensi Bakat Genetik</p>
                            </li>
                            <li class="flex flex-row space-x-3">
                                <img class="my-auto" src="assets/icon/ChatsCircle.png">
                                <p>Pola Komunikasi Terbaik</p>
                            </li>
                            <li class="flex flex-row space-x-3">
                                <img class="my-auto" src="assets/icon/Books.png">
                                <p>Cara Belajar & Motivasi</p>
                            </li>
                            <li class="flex flex-row space-x-3">
                                <img class="my-auto" src="assets/icon/Student.png">
                                <p>Menentukan Jurusan Sekolah</p>
                            </li>
                            <li class="flex flex-row space-x-3">
                                <img class="my-auto" src="assets/icon/BagSimple.png">
                                <p>Menentukan Karir / Profesi</p>
                            </li>
                            <li class="flex flex-row space-x-3">
                                <img class="my-auto" src="assets/icon/Heart.png">
                                <p>Sirkulasi Pasangan / Keluarga</p>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
            <div class="px-5 lg:px-20">
                <img class="absolute relative -top-1 mx-auto" src="assets/icon/Polygon%201.png">
                <div class="flex flex-col lg:py-16 py-0 lg:flex-row space-y-16 lg:space-y-0 space-x-0 lg:space-x-20">
                    <div class="flex flex-col w-full lg:w-1/2">
                        <img class="my-5 mx-auto w-auto lg:w-80" src="assets/image%202.png">
                        <p class="text-center">
                            STIFIn adalah konsep mengenali potensi dan kepribadian secara genetik yang berdasarkan belahan dan lapisan otak dominan. Sehingga diketahui Potensi Minat Bakat, Kepribadian, Penjurusan Sekolah, Profesi/Karir, Cara Belajar, Cara Berkomunikasi, Pasangan Ideal dan informasi lainnya.
                        </p>
                    </div>
                    <div class="flex flex-col w-full lg:w-1/2 space-y-5">
                        <div class="flex flex-col">
                            <p class="text-1 text-md">UNTUK SIAPA</p>
                            <p class="text-2 text-xl">Tes STIFIn? Cocok Untuk...</p>
                        </div>
                        <div class="flex flex-col space-y-5">
                            <div class="box-cocok">
                                <div class="flex flex-row space-x-3 px-5 py-2">
                                    <img class="my-auto" src="assets/icon/UsersThree.png">
                                    <p class="text-lg text-white">Orangtua dan Anak</p>
                                </div>
                            </div>
                            <div class="box-cocok">
                                <div class="flex flex-row space-x-3 px-5 py-2">
                                    <img class="my-auto" src="assets/icon/ChalkboardTeacher.png">
                                    <p class="text-lg text-white">Guru, Dosen, dan Pendidik</p>
                                </div>
                            </div>
                            <div class="box-cocok">
                                <div class="flex flex-row space-x-3 px-5 py-2">
                                    <img class="my-auto" src="assets/icon/Student.png">
                                    <p class="text-lg text-white">Pelajar dan Mahasiswa</p>
                                </div>
                            </div>
                            <div class="box-cocok">
                                <div class="flex flex-row space-x-3 px-5 py-2">
                                    <img class="my-auto" src="assets/icon/Heart.png">
                                    <p class="text-lg text-white">Pasutri atau Akan Menikah</p>
                                </div>
                            </div>
                            <div class="box-cocok">
                                <div class="flex flex-row space-x-3 px-5 py-2">
                                    <img class="my-auto" src="assets/icon/BagSimple.png">
                                    <p class="text-lg text-white">Karyawan dan Pengusaha</p>
                                </div>
                            </div>
                            <div class="box-cocok">
                                <div class="flex flex-row space-x-3 px-5 py-2">
                                    <img class="my-auto" src="assets/icon/MegaphoneSimple.png">
                                    <p class="text-lg text-white">Trainer, Public Figure, UKM</p>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>

            </div>
            <div class="py-8 box-big my-10 flex flex-col space-y-4">
                <p class="text-center text-3xl text-white font-bold">Mau Tes STIFIn?</p>

                <button class="button-big text-xl mx-auto px-6 py-5 rounded-full font-bold">Yuk Tes Sekarang!</button>
            </div>
            <div class="px-5 pb-16">
                <div class="flex flex-col space-y-10 lg:space-y-20">
                    <div class="flex flex-col">
                        <p class=" text-center text-4xl font-semibold text-center w-full lg:w-7/12 mx-auto">
                            Tahukah Anda bahwa Tes STIFIn itu <span style="color: #18276F">sangat memiliki manfaat yang luar biasa?</span>
                        </p>
                    </div>
                    <div class="mx-auto w-full lg:w-10/12 grid grid-cols-3 lg:grid-cols-2 lg:gap-10 gap-4">
                        <div class="space-y-2 space-x-0 w-auto lg:w-7/12 mx-0 lg:mx-auto lg:space-x-10 lg:space-y-0 flex flex-col lg:flex-row">
                            <img class="mx-auto w-auto lg:w-24 lg:h-24 h-auto" src="assets/manfaat/image%2031.png">
                            <p class="text-center lg:text-left w-auto lg:w-64 pt-3 lg:pt-0 text-xs lg:text-lg font-mediuml lg:font-bold">Memilih Jurusan Sekolah/Kuliah</p>
                        </div>
                        <div class="space-y-2 space-x-0 w-auto lg:w-7/12 mx-0 lg:mx-auto lg:space-x-10 lg:space-y-0 flex flex-col lg:flex-row">
                            <img class="mx-auto w-auto lg:w-24 lg:h-24 h-auto" src="assets/manfaat/image%2041.png">
                            <p class="text-center lg:text-left w-auto lg:w-64 pt-3 lg:pt-0 text-xs lg:text-lg font-mediuml lg:font-bold">Memilih Pasangan Ideal</p>
                        </div>
                        <div class="space-y-2 space-x-0 w-auto lg:w-7/12 mx-0 lg:mx-auto lg:space-x-10 lg:space-y-0 flex flex-col lg:flex-row">
                            <img class="mx-auto w-auto lg:w-24 lg:h-24 h-auto" src="assets/manfaat/image%2051.png">
                            <p class="text-center lg:text-left w-auto lg:w-64 pt-3 lg:pt-0 text-xs lg:text-lg font-mediuml lg:font-bold">Memilih Profesi & Karir yang Tepat</p>
                        </div>
                        <div class="space-y-2 space-x-0 w-auto lg:w-7/12 mx-0 lg:mx-auto lg:space-x-10 lg:space-y-0 flex flex-col lg:flex-row">
                            <img class="mx-auto w-auto lg:w-24 lg:h-24 h-auto" src="assets/manfaat/image%2061.png">
                            <p class="text-center lg:text-left w-auto lg:w-64 pt-3 lg:pt-0 text-xs lg:text-lg font-mediuml lg:font-bold">Pola Komunikasi Anak & Pasangan</p>
                        </div>
                        <div class="space-y-2 space-x-0 w-auto lg:w-7/12 mx-0 lg:mx-auto lg:space-x-10 lg:space-y-0 flex flex-col lg:flex-row">
                            <img class="mx-auto w-auto lg:w-24 lg:h-24 h-auto" src="assets/manfaat/image%2071.png">
                            <p class="text-center lg:text-left w-auto lg:w-64 pt-3 lg:pt-0 text-xs lg:text-lg font-mediuml lg:font-bold">Mengenal Kepribadian Diri</p>
                        </div>
                        <div class="space-y-2 space-x-0 w-auto lg:w-7/12 mx-0 lg:mx-auto lg:space-x-10 lg:space-y-0 flex flex-col lg:flex-row">
                            <img class="mx-auto w-auto lg:w-24 lg:h-24 h-auto" src="assets/manfaat/image%2081.png">
                            <p class="text-center lg:text-left w-auto lg:w-64 pt-3 lg:pt-0 text-xs lg:text-lg font-mediuml lg:font-bold">Cara Belajar dan Mengajar Efektif</p>
                        </div>
                        <div class="space-y-2 space-x-0 w-auto lg:w-7/12 mx-0 lg:mx-auto lg:space-x-10 lg:space-y-0 flex flex-col lg:flex-row">
                            <img class="mx-auto w-auto lg:w-24 lg:h-24 h-auto" src="assets/manfaat/image%2091.png">
                            <p class="text-center lg:text-left w-auto lg:w-64 pt-3 lg:pt-0 text-xs lg:text-lg font-mediuml lg:font-bold">Mengetahui Kelebihan dan Kekurangan Diri</p>
                        </div>
                        <div class="space-y-2 space-x-0 w-auto lg:w-7/12 mx-0 lg:mx-auto lg:space-x-10 lg:space-y-0 flex flex-col lg:flex-row">
                            <img class="mx-auto w-auto lg:w-24 lg:h-24 h-auto" src="assets/manfaat/image%20101.png">
                            <p class="text-center lg:text-left w-auto lg:w-64 pt-3 lg:pt-0 text-xs lg:text-lg font-medium lg:font-bold">Mengetahui Motivasi dan Semangat Belajar</p>
                        </div>
                        <div class="space-y-2 space-x-0 w-auto lg:w-7/12 mx-0 lg:mx-auto lg:space-x-10 lg:space-y-0 flex flex-col lg:flex-row">
                            <img class="mx-auto w-auto lg:w-24 lg:h-24 h-auto" src="assets/manfaat/image%20111.png">
                            <p class="text-center lg:text-left w-auto lg:w-64 pt-3 lg:pt-0 text-xs lg:text-lg font-medium lg:font-bold">Mengetahui Pola Asuh Anak yang Tepat</p>
                        </div>
                        <div class="space-y-2 space-x-0 w-auto lg:w-7/12 mx-0 lg:mx-auto lg:space-x-10 lg:space-y-0 flex flex-col lg:flex-row">
                            <img class="mx-auto w-auto lg:w-24 lg:h-24 h-auto" src="assets/manfaat/image%20121.png">
                            <p class="text-center lg:text-left w-auto lg:w-64 pt-3 lg:pt-0 text-xs lg:text-lg font-medium lg:font-bold">Pola Sirkulasi Hubungan Keluarga/Organisasi</p>
                        </div>
                        <div class="space-y-2 space-x-0 w-auto lg:w-7/12 mx-0 lg:mx-auto lg:space-x-10 lg:space-y-0 flex flex-col lg:flex-row">
                            <img class="mx-auto w-auto lg:w-24 lg:h-24 h-auto" src="assets/manfaat/image%20131.png">
                            <p class="text-center lg:text-left w-auto lg:w-64 pt-3 lg:pt-0 text-xs lg:text-lg font-medium lg:font-bold">Menemukan Bisnis yang Tepat sesuai Genetik</p>
                        </div>
                        <div class="space-y-2 space-x-0 w-auto lg:w-7/12 mx-0 lg:mx-auto lg:space-x-10 lg:space-y-0 flex flex-col lg:flex-row">
                            <img class="mx-auto w-auto lg:w-24 lg:h-24 h-auto" src="assets/manfaat/image%20141.png">
                            <p class="text-center lg:text-left w-auto lg:w-64 pt-3 lg:pt-0 text-xs lg:text-lg font-medium lg:font-bold">Mengetahui Kekuatan Jasmani & Organ Tubuh</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="pb-16 body-bg space-y-10 px-5">
                <img class="absolute relative -top-1 mx-auto" src="assets/icon/Polygon%202.png">

                <div class="space-y-1">
                    <p class="mx-auto text-4xl font-semibold text-center w-11/12 goldtext">
                        Keunggulan
                    </p>
                    <p class="mx-auto text-4xl text-white font-semibold text-center w-11/12">
                        Tes STIFIn
                    </p>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-2 space-y-5 lg:space-y-0 gap-5 w-full lg:w-9/12 mx-auto">
                    <div class="box-2 px-7 py-4 space-y-3 relative mx-auto w-full lg:w-10/12">
                        <p class="font-bold text-2xl">SIMPEL</p>
                        <p class="text-xs pr-12">
                            Dari miliaran manusia, STIFIn dikelompokkan hanya dalam 5 Mesin Kecerdasan dan 9 Personaliti Genetik. Kita hanya perlu mengingat satu di antaranya dan menjadikannya kekuatan utama fokus satu hebat.
                        </p>
                        <img class="absolute right-3 top-0 z-30 w-16" src="assets/box/1.png">
                    </div>
                    <div class="box-2 px-7 py-4 space-y-3 relative mx-auto w-full lg:w-10/12">
                        <p class="font-bold text-2xl">AKURAT</p>
                        <p class="text-xs pr-12">
                            Memiliki akurasi dengan tingkat Validitas (Paper & Pencil) dan Reliabilitas (Fingerprint) tinggi yaitu 95% saat dilakukan uji coba tes. STIFIn menguraikan cara kerja otak berdasarkan sistem operasi, bukan kapasitas hardwarenya.
                        </p>
                        <img class="absolute right-3 top-0 z-30 w-16" src="assets/box/2.png">
                    </div>
                    <div class="box-2 px-7 py-4 space-y-3 relative mx-auto w-full lg:w-10/12">
                        <p class="font-bold text-2xl">APLIKATIF</p>
                        <p class="text-xs pr-12">
                            STIFIn memiliki keunggulan yang sifatnya Multi Angle Field dimana hasilnya ini dapat di terapkan dalam segala bidang seperti Learning, Teaching, Parenting, Bisnis, Profesi, Suri Rumah, Couple, Health, ...
                        </p>
                        <img class="absolute right-3 top-0 z-30 w-16" src="assets/box/3.png">
                    </div>
                    <div class="box-2 px-7 py-4 space-y-3 relative mx-auto w-full lg:w-10/12">
                        <p class="font-bold text-2xl">1x SEUMUR HIDUP</p>
                        <p class="text-xs pr-12">
                            Minimal usia 2,5 tahun dan cukup 1x seumur hidup, karena hasil tidak akan berubah (genetik). Analoginya seperti genetika Jenis Kelamin yang tidak mungkin berubah. Proses hanya butuh waktu sekitar 5-10 menit sampai hasil keluar.
                        </p>
                        <img class="absolute right-3 top-0 z-30 w-16" src="assets/box/4.png">
                    </div>
                    <div class="box-2 px-7 py-4 space-y-3 relative mx-auto w-full lg:w-10/12">
                        <p class="font-bold text-2xl">DERIVASI AL QUR’AN</p>
                        <p class="text-xs pr-12">
                            Minimal usia 2,5 tahun dan cukup 1x seumur hidup, karena hasil tidak akan berubah (genetik). Analoginya seperti genetika Jenis Kelamin yang tidak mungkin berubah. Proses hanya butuh waktu sekitar 5-10 menit sampai hasil keluar.
                        </p>
                        <img class="absolute right-3 top-0 z-30 w-16" src="assets/box/5.png">
                    </div>
                    <div class="box-2 px-7 py-4 space-y-3 relative mx-auto w-full lg:w-10/12">
                        <p class="font-bold text-2xl">METODE TES STIFIn</p>
                        <p class="text-xs pr-12">
                            Menggunakan Tes Sidik Jari sehingga hasil tes tidak di pengaruhi oleh faktor kondisi fisik dan psikis seseorang. Sehingga hanya perlu dilakukan 1x seumur hidup, karena hasilnya tetap sama tidak akan berubah.
                        </p>
                        <img class="absolute right-3 top-0 z-30 w-16" src="assets/box/6.png">
                    </div>


                </div>
            </div>
            <div class="px-5 pb-16">
                <img class="absolute relative -top-1 mx-auto" src="assets/icon/Polygon%201.png">

                <div class="pt-16 flex flex-col space-y-10">
                    <div class="flex flex-col">
                        <p class="text-main text-center text-4xl font-bold text-center">
                            9 Personaliti Genetik STIFIn
                        </p>
                    </div>

                    <div class="flex flex-col lg:flex-row space-y-5 lg:space-y-0 space-x-0 lg:space-x-10">
                        <div class="flex flex-col space-y-5">
                            <div class="h-32 box-big-2 px-5 py-4 space-x-8 relative flex flex-row">
                                <img class="my-auto z-30 w-52" src="assets/9persona/Business/growth%20graph.png">

                                <div class="space-y-2">
                                    <p class="font-bold text-xl">Thinking introvert</p>
                                    <p class="text-xs italic">
                                        Expert, on time, scheduled, independent, focus, thorough, mechanistic, prudent, responsible, scheme
                                    </p>
                                </div>
                            </div>
                            <div class="h-32 box-big-2 px-5 py-4 space-x-8 relative flex flex-row">
                                <img class="my-auto z-30 w-52" src="assets/9persona/Business/bar%20graph.png">

                                <div class="space-y-2">
                                    <p class="font-bold text-xl">Thinking ekstrovert</p>
                                    <p class="text-xs italic">
                                        Thoughtful, analytical, competitive, reserved, planner, positive, argumentative, forceful, formal, justice
                                    </p>
                                </div>
                            </div>
                            <div class="h-32 box-big-2 px-5 py-4 space-x-8 relative flex flex-row">
                                <img class="my-auto z-30 w-52" src="assets/9persona/Business/dollar%20coin.png">

                                <div class="space-y-2">
                                    <p class="font-bold text-xl">Sensing introvert</p>
                                    <p class="text-xs italic">
                                        Persistent, detailed, recorder, discipline, careful, spirited, encyclopedic, workaholic, timeful, indifferent
                                    </p>
                                </div>
                            </div>
                            <div class="h-32 box-big-2 px-5 py-4 space-x-8 relative flex flex-row">
                                <img class="my-auto z-30 w-52" src="assets/9persona/Business/credit%20card.png">

                                <div class="space-y-2">
                                    <p class="font-bold text-xl">Sensing extrovert</p>
                                    <p class="text-xs italic">
                                        Adventurous, playful, demonstrative, generous, repetitious, show offs, tune in order, inoffensive, endurance, experience
                                    </p>
                                </div>
                            </div>

                        </div>

                        <div class="flex flex-col space-y-5 justify-between">
                            <img class="hidden lg:flex w-11/12" src="assets/otak stifin-01 1.png">

                            <div class="h-32 box-big-2 px-5 py-4 space-x-8 relative flex flex-row">
                                <img class="my-auto z-30 w-52" src="assets/9persona/Emoji/happy,smile,happy%20face,smiley,emoji,smile%20beam,.png">

                                <div class="space-y-2">
                                    <p class="font-bold text-xl">Insting</p>
                                    <p class="text-xs italic">
                                        Balanced, compromizing, peaceful, resourceful, simple, forgiving, occupied, flowing, smooth, intermediary
                                    </p>
                                </div>
                            </div>

                        </div>

                        <div class="flex flex-col space-y-5">
                            <div class="h-32 box-big-2 px-5 py-4 space-x-8 relative flex flex-row">
                                <img class="my-auto z-30 w-52" src="assets/9persona/Education/book.png">

                                <div class="space-y-2">
                                    <p class="font-bold text-xl">Intuiting introvert</p>
                                    <p class="text-xs italic">
                                        Learner, assertive, perfectionist, scholar, hard to please, proud, optimistic, deep, insistent, capable selling
                                    </p>
                                </div>
                            </div>

                            <div class="h-32 box-big-2 px-5 py-4 space-x-8 relative flex flex-row">
                                <img class="my-auto z-30 w-52" src="assets/9persona/Business/puzzle.png">

                                <div class="space-y-2">
                                    <p class="font-bold text-xl">Intuiting extrovert</p>
                                    <p class="text-xs italic">
                                        Inspiring, solver, benchmarker, expressive, respectful, assemblies, detective, seletive, diesel, romantic
                                    </p>
                                </div>
                            </div>
                            <div class="h-32 box-big-2 px-5 py-4 space-x-8 relative flex flex-row">
                                <img class="my-auto z-30 w-52" src="assets/9persona/Sports/card.png">

                                <div class="space-y-2">
                                    <p class="font-bold text-xl">Feeling introvert</p>
                                    <p class="text-xs italic">
                                        Influencing, idealistic, leader, kindful, reflective, popular, convincing, promoter, diplomatic, friendship-appeal
                                    </p>
                                </div>
                            </div>
                            <div class="h-32 box-big-2 px-5 py-4 space-x-8 relative flex flex-row">
                                <img class="my-auto z-30 w-52" src="assets/9persona/Users/users.png">

                                <div class="space-y-2">
                                    <p class="font-bold text-xl">Feeling extrovert</p>
                                    <p class="text-xs italic">
                                        Emphaty, tolerant, communicative, listener, sympathy, affectionate, persuasive, enable, considerate, guiding
                                    </p>
                                </div>
                            </div>


                        </div>

                    </div>


                </div>

            </div>
            <div class="pb-16 body-bg space-y-10 px-5">
                <img class="absolute relative -top-1 mx-auto" src="assets/icon/Polygon%202.png">

                <div class="space-y-8">
                    <p class="mx-auto text-4xl text-white font-semibold text-center w-11/12 lg:w-1/2">
                        Banyak Public Figure yang sudah <span class="goldtext">Merasakan Manfaat dari Tes STIFIn</span>
                    </p>
                </div>
                <div>
                    <img class="mx-auto w-full rounded-2xl lg:w-6/12" src="assets/image%2015.png">
                </div>
            </div>
            <div class="px-5">
                <img class="absolute relative -top-1 mx-auto" src="assets/icon/Polygon%201.png">
                <div class="pt-16 flex flex-col space-y-10">
                    <div class="flex flex-col">
                        <p class="text-main text-center text-4xl font-bold text-center">
                            Kata Mereka Tentang STIFIn
                        </p>
                    </div>



                    <div class="flex flex-row space-x-0 lg:space-x-10 relative">
                        <div class="flex flex-row space-x-0 lg:space-x-10 mx-auto w-full px-5 lg:px-10 pb-20">
                            <img class="left cursor-pointer absolute left-0 top-1/2 hidden lg:flex w-16" src="assets/arrow/Group%2041.svg">

                            <!--        carousel-->
                            <div class="center w-full lg:w-11/12">
                                <div class="px-0 lg:px-5 flex flex-col space-y-5 w-full lg:w-3/12">
                                    <div class="box-big-2 px-3 py-4 space-y-5 relative flex flex-col">
                                        <img class="mx-auto z-30 w-auto lg:w-32" src="assets/image%2018.png">
                                        <img class="absolute right-5 top-5 mx-auto z-30" src="assets/ThumbsUp.png">

                                        <div class="space-y-2">
                                            <p class="font-bold text-sm  text-center">Prof. Dr. Kuswandi, S.U., M.Phill., Apt</p>
                                            <p class="text-xs italic text-center w-9/12 mx-auto">
                                                Guru Besar UGM, Pakar Genetika, Pemerhati Pendidikan
                                            </p>
                                            <div class="flex flex-row w-24 mx-auto">
                                                <img class="mx-auto z-30" src="assets/Star%201.png">
                                                <img class="mx-auto z-30" src="assets/Star%201.png">
                                                <img class="mx-auto z-30" src="assets/Star%201.png">
                                                <img class="mx-auto z-30" src="assets/Star%201.png">
                                                <img class="mx-auto z-30" src="assets/Star%201.png">
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            Hasil tes STIFIn ini sangat cocok dengan saya. Penjelasannya sangat ilmiah, detail, dan praktis untuk saya pahami.
                                            <br><br>
                                            Jadi menurut saya, tes ini sangat penting di lakukan sedini mungkin agar kita sebagai orang tua tidak salah dalam mengarahkan anak untuk memilih jalur pendidikan dan profesi yang sesuai dengan bakan dan potensinya.
                                            <br><br>
                                            Sehingga anak-anak menemukan cara belajar yang menyenangkan.
                                        </div>
                                    </div>

                                </div>
                                <div class="px-0 lg:px-5 lg:flex hidden flex-col space-y-5 w-full lg:w-3/12">
                                    <div class="box-big-2 px-3 py-4 space-y-5 relative flex flex-col">
                                        <img class="mx-auto z-30 w-auto lg:w-32" src="assets/image%2017.png">
                                        <img class="absolute right-5 top-5 mx-auto z-30" src="assets/ThumbsUp.png">

                                        <div class="space-y-2">
                                            <p class="font-bold text-sm  text-center">Melly Goeslaw</p>
                                            <p class="text-xs italic text-center w-9/12 mx-auto">
                                                Penyanyi dan Penulis Lagu Indonesia
                                            </p>
                                            <div class="flex flex-row w-24 mx-auto">
                                                <img class="mx-auto z-30" src="assets/Star%201.png">
                                                <img class="mx-auto z-30" src="assets/Star%201.png">
                                                <img class="mx-auto z-30" src="assets/Star%201.png">
                                                <img class="mx-auto z-30" src="assets/Star%201.png">
                                                <img class="mx-auto z-30" src="assets/Star%201.png">
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            I recommended banget untuk semuanya, khususnya untuk anak-anak kita. Tes, deh melalui STIFIn! Thank you STIFIn,
                                            <br><br>
                                            Aku jadi tau karakter anak-anak aku, terus bagaimana cara menanggulangi dan berkomunikasi dengan mereka dengan baik. Cocok dan pas banget buat anak-anak kita.
                                        </div>
                                    </div>

                                </div>
                                <div class="px-0 lg:px-5 lg:flex hidden flex-col space-y-5 w-full lg:w-3/12">
                                    <div class="box-big-2 px-3 py-4 space-y-5 relative flex flex-col">
                                        <img class="mx-auto z-30 w-auto lg:w-32" src="assets/image%2016.png">
                                        <img class="absolute right-5 top-5 mx-auto z-30" src="assets/ThumbsUp.png">

                                        <div class="space-y-2">
                                            <p class="font-bold text-sm  text-center">Prof. Dr. Kuswandi, S.U., M.Phill., Apt</p>
                                            <p class="text-xs italic text-center w-9/12 mx-auto">
                                                Guru Besar UGM, Pakar Genetika, Pemerhati Pendidikan
                                            </p>
                                            <div class="flex flex-row w-24 mx-auto">
                                                <img class="mx-auto z-30" src="assets/Star%201.png">
                                                <img class="mx-auto z-30" src="assets/Star%201.png">
                                                <img class="mx-auto z-30" src="assets/Star%201.png">
                                                <img class="mx-auto z-30" src="assets/Star%201.png">
                                                <img class="mx-auto z-30" src="assets/Star%201.png">
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            Hasil tes STIFIn ini sangat cocok dengan saya. Penjelasannya sangat ilmiah, detail, dan praktis untuk saya pahami.
                                            <br><br>
                                            Jadi menurut saya, tes ini sangat penting di lakukan sedini mungkin agar kita sebagai orang tua tidak salah dalam mengarahkan anak untuk memilih jalur pendidikan dan profesi yang sesuai dengan bakan dan potensinya.
                                            <br><br>
                                            Sehingga anak-anak menemukan cara belajar yang menyenangkan.
                                        </div>
                                    </div>

                                </div>
                                <div class="px-0 lg:px-5 lg:flex hidden flex-col space-y-5 w-full lg:w-3/12">
                                    <div class="box-big-2 px-3 py-4 space-y-5 relative flex flex-col">
                                        <img class="mx-auto z-30 w-auto lg:w-32" src="assets/image%2016.png">
                                        <img class="absolute right-5 top-5 mx-auto z-30" src="assets/ThumbsUp.png">

                                        <div class="space-y-2">
                                            <p class="font-bold text-sm  text-center">Prof. Dr. Kuswandi, S.U., M.Phill., Apt</p>
                                            <p class="text-xs italic text-center w-9/12 mx-auto">
                                                Guru Besar UGM, Pakar Genetika, Pemerhati Pendidikan
                                            </p>
                                            <div class="flex flex-row w-24 mx-auto">
                                                <img class="mx-auto z-30" src="assets/Star%201.png">
                                                <img class="mx-auto z-30" src="assets/Star%201.png">
                                                <img class="mx-auto z-30" src="assets/Star%201.png">
                                                <img class="mx-auto z-30" src="assets/Star%201.png">
                                                <img class="mx-auto z-30" src="assets/Star%201.png">
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            Hasil tes STIFIn ini sangat cocok dengan saya. Penjelasannya sangat ilmiah, detail, dan praktis untuk saya pahami.
                                            <br><br>
                                            Jadi menurut saya, tes ini sangat penting di lakukan sedini mungkin agar kita sebagai orang tua tidak salah dalam mengarahkan anak untuk memilih jalur pendidikan dan profesi yang sesuai dengan bakan dan potensinya.
                                            <br><br>
                                            Sehingga anak-anak menemukan cara belajar yang menyenangkan.
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <img class="right cursor-pointer absolute right-0 top-1/2 hidden lg:flex w-16" src="assets/arrow/Group%2042.svg">
                        </div>


                </div>

            </div>
            </div>
            <div class="pb-16 body-bg space-y-10 px-5 lg:px-0">
                <img class="absolute relative -top-1 mx-auto" src="assets/icon/Polygon%202.png">

                <div class="space-y-8">
                    <p class="mx-auto text-4xl text-white font-semibold text-center w-11/12">
                        Dokumentasi
                    </p>
                </div>
                <div class="relative flex flex-row space-x-0 w-full">
                    <img class="flex lg:hidden mx-auto w-full lg:w-64" src="assets/20220312_112431.png">
                    <img class="hidden lg:flex mx-auto w-full" src="assets/Frame%2040.png">
                </div>
            </div>
            <div class="px-5 pb-16">
                <img class="absolute relative -top-1 mx-auto" src="assets/icon/Polygon%201.png">

                <div class="pt-16 flex flex-col space-y-10">
                    <div class="flex flex-col">
                        <p class="w-11/12 mx-auto text-main text-center text-4xl font-bold text-center">
                            Profil Promotor Tes STIFIn
                        </p>
                    </div>
                    <div class="flex flex-col lg:flex-row space-y-5 lg:space-y-0 space-x-0 lg:space-x-10 mx-auto">
                        <div class="box-big-3 px-3 py-4 space-y-5 relative flex flex-col">
                            <img class="mx-auto w-auto lg:w-9/12 z-30" src="assets/Mask%20group.png">

                            <div class="space-y-1">
                                <p class="font-bold text-lg text-center">Marsha Listiyani</p>
                                <p class="text-xs text-main text-center w-9/12 mx-auto">
                                    Licensed Promotor STIFIn
                                </p>

                            </div>
                            <div class="flex flex-row space-x-5 mx-auto">
                                <div class="box-small-3 px-3 py-4 flex flex-row space-x-2">
                                    <img class="my-auto" src="assets/profile/BagSimple.png">
                                    <p class="text-xs">1 tahun</p>
                                </div>
                                <div class="box-small-3 px-3 py-4 flex flex-row space-x-2">
                                    <img class="my-auto" src="assets/profile/ThumbsUp.png">
                                    <p class="text-xs">94%</p>
                                </div>
                                <div class="box-small-3 px-3 py-4 flex flex-row space-x-2">
                                    <img class="my-auto" src="assets/profile/MapPinLine.png">
                                    <p class="text-xs">Jakarta</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <div class="box-big-3 px-3 py-4 space-y-5 relative flex flex-col">
                                <p class="font-bold text-lg text-center text-main">Riwayat dan Pendidikan STIFIn</p>
                                <div class="flex flex-col space-y-3">
                                    <div class="px-5 flex flex-row space-x-2">
                                        <img class="my-auto" src="assets/CheckSquare.png">
                                        <p class="text-sm">Workshop STIFIn Level 1</p>
                                    </div>
                                    <div class="px-5 flex flex-row space-x-2">
                                        <img class="my-auto" src="assets/CheckSquare.png">
                                        <p class="text-sm">Workshop STIFIn Level 2</p>
                                    </div>
                                    <div class="px-5 flex flex-row space-x-2">
                                        <img class="my-auto" src="assets/CheckSquare.png">
                                        <p class="text-sm">Workshop STIFIn Tematik Health</p>
                                    </div>
                                    <div class="px-5 flex flex-row space-x-2">
                                        <img class="my-auto" src="assets/CheckSquare.png">
                                        <p class="text-sm">Workshop STIFIn Tematik Parenting</p>
                                    </div>
                                    <div class="px-5 flex flex-row space-x-2">
                                        <img class="my-auto" src="assets/CheckSquare.png">
                                        <p class="text-sm">Workshop STIFIn Tematik Learning</p>
                                    </div>
                                    <div class="px-5 flex flex-row space-x-2">
                                        <img class="my-auto" src="assets/CheckSquare.png">
                                        <p class="text-sm">Speak to Change for Professional Trainer STIFIn</p>
                                    </div>

                                </div>
                            </div>
                            <div class="box-big-3 px-3 py-4 space-y-5 relative flex flex-col">
                                <p class="font-bold text-lg text-center text-main">Kontak & Sosial Media</p>
                                <div class="flex flex-row space-x-3 mx-auto">
                                    <img class="w-12" src="assets/profile/Group%2018.png">
                                    <img class="w-12" src="assets/profile/Group%2021.png">
                                    <img class="w-12" src="assets/profile/Group%2020.png">
                                    <img class="w-12" src="assets/profile/Group%2019.png">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
            <div class="pb-16 body-bg space-y-10 px-8">
                <div class="space-y-8 pt-16">
                    <p class="mx-auto text-4xl text-white font-semibold text-center w-11/12">
                        Pilihan <span class="goldtext"> Paket </span> untuk Anda
                    </p>
                </div>

                <div class="flex flex-col space-y-10 lg:space-y-0 lg:flex-row lg:space-x-10 space-x-0">
                    <div class="flex flex-col w-full rounded-2xl" style="background: linear-gradient(274.42deg, #FFFFFF 0%, #FFFFFF 124.45%);box-shadow: 0px 10px 22px rgba(197, 139, 242, 0.3);">
                        <div class="rounded-t-2xl w-full space-y-2 py-5" style="background-color: #FF8200;">
                            <p class="font-bold text-2xl text-center text-white">PRIBADI/PASANGAN</p>
                            <p class="text-xs text-center text-white">
                                1-2 orang
                            </p>
                        </div>
                        <div class="py-5 space-y-3">
                            <p class="text-red-500 font-bold line-through text-xl text-center">Rp 850.000</p>
                            <p class="font-bold text-3xl text-center">Rp 650.000</p>
                            <p class="text-xs text-center">
                                Per Orang
                            </p>
                        </div>
                        <a class="mx-auto" href="/paket_1">
                            <button class="button-paket-1 text-xl mx-auto px-6 py-5 rounded-full font-bold" style="color: #FF8200">Daftar via WhatsApp</button>
                        </a>

                        <div class="flex flex-col space-y-3 py-10 px-5">
                            <div class="px-5 flex flex-row space-x-2">
                                <img class="my-auto" src="assets/Vector.png">
                                <p class="text-sm">Tes STIFIn</p>
                            </div>
                            <div class="px-5 flex flex-row space-x-2">
                                <img class="my-auto" src="assets/Vector.png">
                                <p class="text-sm">
                                    Sertifikat
                                </p>
                            </div>
                            <div class="px-5 flex flex-row space-x-2">
                                <img class="my-auto" src="assets/Vector.png">
                                <p class="text-sm">
                                    Penjelasan/Konsultasi
                                </p>
                            </div>
                            <div class="px-5 flex flex-row space-x-2">
                                <img class="my-auto" src="assets/Vector.png">
                                <p class="text-sm">
                                    Tanya Jawab
                                </p>
                            </div>
                            <div class="px-5 flex flex-row space-x-2">
                                <img class="my-auto" src="assets/Vector.png">
                                <p class="text-sm">
                                    Ebook 9 Personaliti Genetik
                                </p>
                            </div>
                            <div class="px-5 flex flex-row space-x-2">
                                <img class="my-auto" src="assets/Vector.png">
                                <p class="text-sm">
                                    Grup Telegram
                                </p>
                            </div>
                            <div class="px-5 flex flex-row space-x-2">
                                <img class="my-auto" src="assets/Vector.png">
                                <p class="text-sm">
                                    Tempat Sesuai Permintaan
                                </p>
                            </div>

                        </div>

                    </div>
                    <div class="flex flex-col w-full rounded-2xl" style="background: linear-gradient(274.42deg, #FFFFFF 0%, #FFFFFF 124.45%);box-shadow: 0px 10px 22px rgba(197, 139, 242, 0.3);">
                        <div class="rounded-t-2xl w-full flex flex-col space-y-2 py-5" style="background-color: #23A455;">
                            <p class="font-bold text-2xl text-center text-white">KELUARGA/KELOMPOK</p>
                            <div class="flex flex-row w-fit mx-auto space-x-3">
                                <p class="text-xs text-center text-white">
                                    3-9 orang
                                </p>
                                <div class="flex flex-row w-8 mx-auto">
                                    <img class="mx-auto z-30" src="assets/Star%201.png">
                                    <img class="mx-auto z-30" src="assets/Star%201.png">
                                </div>
                            </div>
                        </div>
                        <div class="py-5 space-y-3">
                            <p class="text-red-500 font-bold line-through text-xl text-center">Rp 750.000</p>
                            <p class="font-bold text-3xl text-center">Rp 600.000</p>
                            <p class="text-xs text-center">
                                Per Orang
                            </p>
                        </div>
                        <button class="button-paket-1 text-xl mx-auto px-6 py-5 rounded-full font-bold" style="color: #23A455">Daftar via WhatsApp</button>

                        <div class="flex flex-col space-y-3 py-10 px-5">
                            <div class="px-5 flex flex-row space-x-2">
                                <img class="my-auto" src="assets/Vector.png">
                                <p class="text-sm">Tes STIFIn</p>
                            </div>
                            <div class="px-5 flex flex-row space-x-2">
                                <img class="my-auto" src="assets/Vector.png">
                                <p class="text-sm">
                                    Sertifikat
                                </p>
                            </div>
                            <div class="px-5 flex flex-row space-x-2">
                                <img class="my-auto" src="assets/Vector.png">
                                <p class="text-sm">
                                    Penjelasan/Konsultasi
                                </p>
                            </div>
                            <div class="px-5 flex flex-row space-x-2">
                                <img class="my-auto" src="assets/Vector.png">
                                <p class="text-sm">
                                    Tanya Jawab
                                </p>
                            </div>
                            <div class="px-5 flex flex-row space-x-2">
                                <img class="my-auto" src="assets/Vector.png">
                                <p class="text-sm">
                                    Ebook 9 Personaliti Genetik
                                </p>
                            </div>
                            <div class="px-5 flex flex-row space-x-2">
                                <img class="my-auto" src="assets/Vector.png">
                                <p class="text-sm">
                                    Grup Telegram
                                </p>
                            </div>
                            <div class="px-5 flex flex-row space-x-2">
                                <img class="my-auto" src="assets/Vector.png">
                                <p class="text-sm">
                                    Tempat Sesuai Permintaan
                                </p>
                            </div>

                        </div>

                    </div>
                    <div class="flex flex-col w-full rounded-2xl" style="background: linear-gradient(274.42deg, #FFFFFF 0%, #FFFFFF 124.45%);box-shadow: 0px 10px 22px rgba(197, 139, 242, 0.3);">
                        <div class="rounded-t-2xl w-full space-y-2 py-5" style="background-color: #4FB4F8;">
                            <p class="font-bold text-2xl text-center text-white">SEKOLAH/INSTANSI</p>
                            <p class="text-xs text-center text-white">
                                Lebih dari 10 orang
                            </p>
                        </div>
                        <div class="py-5 space-y-3">
                            <p class="text-red-500 font-bold text-xl text-center">-----</p>
                            <p class="font-bold text-3xl text-center">-Hubungi-</p>
                            <p class="text-xs text-center">
                                Per Orang
                            </p>
                        </div>
                        <button class="button-paket-1 text-xl mx-auto px-6 py-5 rounded-full font-bold" style="color: #4FB4F8">Daftar via WhatsApp</button>

                        <div class="flex flex-col space-y-3 py-10 px-5">
                            <div class="px-5 flex flex-row space-x-2">
                                <img class="my-auto" src="assets/Vector.png">
                                <p class="text-sm">Tes STIFIn</p>
                            </div>
                            <div class="px-5 flex flex-row space-x-2">
                                <img class="my-auto" src="assets/Vector.png">
                                <p class="text-sm">
                                    Sertifikat
                                </p>
                            </div>
                            <div class="px-5 flex flex-row space-x-2">
                                <img class="my-auto" src="assets/Vector.png">
                                <p class="text-sm">
                                    Penjelasan/Konsultasi
                                </p>
                            </div>
                            <div class="px-5 flex flex-row space-x-2">
                                <img class="my-auto" src="assets/Vector.png">
                                <p class="text-sm">
                                    Tanya Jawab
                                </p>
                            </div>
                            <div class="px-5 flex flex-row space-x-2">
                                <img class="my-auto" src="assets/Vector.png">
                                <p class="text-sm">
                                    Ebook 9 Personaliti Genetik
                                </p>
                            </div>
                            <div class="px-5 flex flex-row space-x-2">
                                <img class="my-auto" src="assets/Vector.png">
                                <p class="text-sm">
                                    Grup Telegram
                                </p>
                            </div>
                            <div class="px-5 flex flex-row space-x-2">
                                <img class="my-auto" src="assets/Vector.png">
                                <p class="text-sm">
                                    Tempat Sesuai Permintaan
                                </p>
                            </div>

                        </div>

                    </div>
                </div>


            </div>
            <div class="pb-16 px-8" style="background-color: #FCDADA">
                <div class="w-full lg:w-6/12 mx-auto space-y-10">
                    <div class="space-y-8 pt-16">
                        <p class="mx-auto text-4xl font-semibold text-center w-11/12">
                            <span class="text-red-500"> Kerugian</span> jika tidak Tes STIFIn sekarang!
                        </p>
                        <p class=" text-center text-sm">
                            Ketika Anda menunda yang nanti akan Anda lakukan juga, Anda akan banyak kehilanggan waktu yang tidak akan bisa di ulang kembali. Segera dan rasakan banyak manfaat yg Akan ada dapatkan.
                        </p>
                    </div>
                    <div class="rounded-2xl bg-white flex flex-col lg:flex-row lg:space-x-10 lg:space-y-0 space-x-0 space-y-5 py-8 justify-between">
                        <div class="flex flex-col space-y-5">
                            <div class="px-5 flex flex-row space-x-2">
                                <img class="my-auto" src="assets/SmileySad.png">
                                <p class="text-sm">Mengalami Trial Error</p>
                            </div>
                            <div class="px-5 flex flex-row space-x-2">
                                <img class="my-auto" src="assets/SmileySad.png">
                                <p class="text-sm">
                                    Tidak Saling Memahami
                                </p>
                            </div>
                            <div class="px-5 flex flex-row space-x-2">
                                <img class="my-auto" src="assets/SmileySad.png">
                                <p class="text-sm">
                                    Salah Jurusan Sekolah
                                </p>
                            </div>
                            <div class="px-5 flex flex-row space-x-2">
                                <img class="my-auto" src="assets/SmileySad.png">
                                <p class="text-sm">
                                    Pola Asuh Anak Tepat

                                </p>
                            </div>
                            <div class="px-5 flex flex-row space-x-2">
                                <img class="my-auto" src="assets/SmileySad.png">
                                <p class="text-sm">
                                    Pola Komunikasi Tidak Sesuai

                                </p>
                            </div>
                            <div class="px-5 flex flex-row space-x-2">
                                <img class="my-auto" src="assets/SmileySad.png">
                                <p class="text-sm">
                                    Tidak Mendapatkan Karir yang Tepat

                                </p>
                            </div>
                        </div>

                        <div class="flex flex-col space-y-5">
                            <div class="px-5 flex flex-row space-x-2">
                                <img class="my-auto" src="assets/SmileySad.png">
                                <p class="text-sm">
                                    Tidak Mengenal Jati Diri

                                </p>
                            </div>
                            <div class="px-5 flex flex-row space-x-2">
                                <img class="my-auto" src="assets/SmileySad.png">
                                <p class="text-sm">
                                    Tidak Punya Motivasi

                                </p>
                            </div>
                            <div class="px-5 flex flex-row space-x-2">
                                <img class="my-auto" src="assets/SmileySad.png">
                                <p class="text-sm">
                                    Cara Belajar Tidak Sesuai
                                </p>
                            </div>
                            <div class="px-5 flex flex-row space-x-2">
                                <img class="my-auto" src="assets/SmileySad.png">
                                <p class="text-sm">
                                    Tidak Punya Semangat Belajar

                                </p>
                            </div>
                            <div class="px-5 flex flex-row space-x-2">
                                <img class="my-auto" src="assets/SmileySad.png">
                                <p class="text-sm">
                                    Tidak Baik dalam Bersosial

                                </p>
                            </div>
                            <div class="px-5 flex flex-row space-x-2">
                                <img class="my-auto" src="assets/SmileySad.png">
                                <p class="text-sm">
                                    Organisasi Bermasalah

                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="pb-16 space-y-10 px-8">
                <div class="space-y-8 pt-16">
                    <p class="mx-auto text-4xl text-blue-900 font-semibold text-center w-11/12">
                        <span class="goldtext">FAQ</span><br>
                        Hal yang Sering Ditanyakan
                    </p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 lg:gap-8">
                    <div class="rounded-2xl bg-white flex flex-col space-y-5 px-5 py-6 body-bg">
                        <p class="goldtext font-semibold">Apakah tes STIFIn bisa di lakukan secara online?</p>
                        <div class="flex flex-row space-x-2">
                            <img class="mb-auto" src="assets/TagChevron.png">
                            <p class="text-sm text-white">
                                Tidak bisa, karena diperlukan untuk melakukan scan pada kesepuluh sidik jari Anda (genetik).
                            </p>
                        </div>
                    </div>
                    <div class="rounded-2xl bg-white flex flex-col space-y-5 px-5 py-6 body-bg">
                        <p class="goldtext font-semibold">Kenapa harga tes STIFIn murah banget?</p>
                        <div class="flex flex-row space-x-2">
                            <img class="mb-auto" src="assets/TagChevron.png">
                            <p class="text-sm text-white">
                                Memang murah, karena di luar sana banyak tes yang biaya investasinya hingga 2 juta-an rupiah. Saat ini biaya tes STIFIn kurang dari 1 juta, dengan hasil dan penjelasan yang sangat lengkap dan akurat.
                            </p>
                        </div>
                    </div>
                    <div class="hidden rounded-2xl bg-white lg:flex flex-col space-y-5 px-5 py-6 body-bg">
                        <p class="goldtext font-semibold">Berapa lama tes STIFIn dilakukan?</p>
                        <div class="flex flex-row space-x-2">
                            <img class="mb-auto" src="assets/TagChevron.png">
                            <p class="text-sm text-white">
                                Dibutuhkan waktu sekitar 5 – 10 menit sampai hasil keluar, setelah itu masuk ke sesi penjelasan dan konsultasi.
                            </p>
                        </div>
                    </div>
                    <div class="hidden rounded-2xl bg-white lg:flex flex-col space-y-5 px-5 py-6 body-bg">
                        <p class="goldtext font-semibold">
                            Kenapa harga tes STIFIn murah banget?
                        </p>
                        <div class="flex flex-row space-x-2">
                            <img class="mb-auto" src="assets/TagChevron.png">
                            <p class="text-sm text-white">
                                Memang murah, karena di luar sana banyak tes yang biaya investasinya hingga 2 juta-an rupiah. Saat ini biaya tes STIFIn kurang dari 1 juta, dengan hasil dan penjelasan yang sangat lengkap dan akurat.
                            </p>
                        </div>
                    </div>
                    <div class="hidden rounded-2xl bg-white lg:flex flex-col space-y-5 px-5 py-6 body-bg">
                        <p class="goldtext font-semibold">
                            Berapa tingkat akurasi STIFIn?
                        </p>
                        <div class="flex flex-row space-x-2">
                            <img class="mb-auto" src="assets/TagChevron.png">
                            <p class="text-sm text-white">
                                Akurasi yang di miliki STIFIn memiliki tingkat Validitas (Paper & Pencil) dan Reliabilitas (Finggerprint) yang sangat tinggi yaitu 95% saat dilakukan uji coba tesnya.
                            </p>
                        </div>
                    </div>
                    <div class="hidden rounded-2xl bg-white lg:flex flex-col space-y-5 px-5 py-6 body-bg">
                        <p class="goldtext font-semibold">
                            Apa yang perlu disiapkan saat mau tes STIFIn?
                        </p>
                        <div class="flex flex-row space-x-2">
                            <img class="mb-auto" src="assets/TagChevron.png">
                            <p class="text-sm text-white">
                                Tidak perlu banyak persiapan yang di butuhkan seperti pada tes lainnya. Melainkan hanya membutuhkan scan kesepuluh sidik jari untuk di ambil datanya.
                            </p>
                        </div>
                    </div>

                </div>


                <div class="flex lg:hidden flex-row mx-auto w-12 space-x-5">
                    <img class="mx-auto" src="assets/Arrow%202.png">
                    <img class="mx-auto" src="assets/Arrow%201.png">
                </div>

            </div>
            <div class="block lg:hidden pb-16 space-y-10 px-8">
                <div class="space-y-8">
                    <p class="mx-auto text-4xl text-blue-900 font-semibold text-center w-11/12">
                        Lokasi Kami
                    </p>
                </div>
                <div>
                    <img class="mx-auto w-full" src="assets/image%2020.png">
                </div>

                <p class="text-center">
                    Jl. Guru Kojar, Jurang Mangu Barat, Kec. Pd. Aren, Kota Tangerang Selatan, Banten 15220
                </p>
                <p class="text-center"> 085880101910
                    marsha.listiyani@gmail.com</p>
            </div>
            <div class="pb-16 space-x-10 lg:space-x-20 px-8 lg:px-20 lg:pt-12 pt-10 body-bg flex flex-row">
                <div class="flex flex-col space-y-5 w-11/12 lg:w-2/12">
                    <img class="lg:w-48" src="assets/logo%20SF_white%201.png">
                    <p class="text-white text-xs">Kami dari komunitas yang di dirikan dengan tujuan untuk mengenali kperibadian dan meningkatkan kualitas diri menuju Sukses Mulia.</p>
                </div>
                <img src="assets/Line%201.png">
                <div class="flex flex-col space-y-5 w-8/12 lg:w-1/12">
                    <p class="text-white font-semibold text-center">
                        Social Media
                    </p>
                    <div class="flex flex-col space-y-3 mx-auto">
                        <div class="flex flex-row space-x-3">
                            <img class="w-12" src="assets/profile/Group%2024.png">
                            <img class="w-12" src="assets/profile/Group%2025.png">
                        </div>
                        <div class="flex flex-row space-x-3">
                            <img class="w-12" src="assets/profile/Group%2027.png">
                            <img class="w-12" src="assets/profile/Group%2023.png">
                        </div>
                        <div class="flex flex-row space-x-3">
                            <img class="w-12" src="assets/profile/Group%2028.png">
                            <img class="w-12" src="assets/profile/Group%2026.png">
                        </div>
                    </div>

                </div>
                <img class="hidden lg:flex" src="assets/Line%201.png">
                <div class="hidden lg:flex flex-row space-x-10 w-8/12 lg:flex-1">
                    <img class="w-64 rounded-2xl" src="assets/image%2022.png">

                 <div class="flex flex-col space-y-5 text-white">
                     <p class="font-bold">
                         Lokasi Kami
                     </p>
                     <div class="flex flex-col space-y-3 mx-auto text-sm">
                         <p>
                             Jl. Guru Kojar, Jurang Mangu Barat, Kec. Pd. Aren, Kota Tangerang Selatan, Banten 15220
                             <br>
                             <br>
                             085880101910
                             marsha.listiyani@gmail.com
                         </p>
                     </div>
                 </div>

                </div>
            </div>
        </div>

    </div>


@endsection
