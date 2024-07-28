<x-layout>
    <section id="home" class="section">
        <div class="bg-gray-800">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col-reverse lg:flex-row items-center">
                    <div class="lg:w-1/2 lg:mt-8 text-center lg:text-left lg:pr-8">
                        <h1 class="text-3xl font-extrabold text-white sm:text-4xl">Terima Jual Beli Emas Logam
                            Mulia
                        </h1>
                        <p class="mt-4 text-lg text-white">Terima Jual Emas Tanpa Surat, Sertifikat Rusak dari
                            Merek
                            EOA, Emas Kita, Hartadinata, Micro Gold, Mini Gold, UBS, Big Gold, Antam dan Emas
                            Lainya
                            dengan Harga Tinggi.</p>
                        <p class="mt-4 text-lg text-white"><b>Key Gold</b> - Cimahi Mall Lt.GF D9, Kota Cimahi.
                        </p>
                        <br>
                        <a href="#harga"
                            class="btn-gold px-6 py-3 rounded-md font-medium shadow-md transition duration-300 hover:shadow-lg">Lihat
                            Harga</a><br><br><br>
                    </div>
                    <div class="lg:w-1/2 mt-8 lg:mt-20 flex justify-center">
                        <img src="img/pegangemas.png" alt="gambar" class="max-w-[450px] h-auto rounded-lg">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="buyback" class="section">
        <div class="bg-white py-12">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 mt-12">
                <div class="flex justify-center">
                    <div class="text-center">
                        <h1 class="text-3xl font-extrabold text-gray-900 sm:text-4xl mb-4">Harga Buyback Emas Hari Ini
                        </h1>
                        <h2 class="text-xl font-semibold text-gray-900 sm:text-xl mb-4">
                            {{ \Carbon\Carbon::now()->format('d F Y') }}</h2>
                        <p class="mb-2">Tambahan BuyBack Rp. 5000/gr Bagi Member Kami</p>
                        <p class="mb-6">Daftar Sekarang <a
                                href="https://docs.google.com/forms/d/e/1FAIpQLSfCdZKEpu8J_FOb9xaGhlv4-Kxd2KBDoCly-RP6Ueaxa1Ml_g/viewform"
                                class="text-blue-500 hover:underline">Form Registrasi Member</a></p>

                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                            <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                                    <tr>
                                        <th scope="col" class="px-1 py-3">No.</th>
                                        <th scope="col" class="px-12 py-3">Product Name</th>
                                        <th scope="col" class="px-12 py-3">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($buyback as $index => $item)
                                        <tr class="odd:bg-white even:bg-gray-50 border-b">
                                            <th scope="row"
                                                class="px-1 py-4 font-medium text-gray-900 whitespace-nowrap">
                                                {{ $index + 1 }}.</th>
                                            <td class="px-12 py-4">{{ $item->product_name }}</td>
                                            <td class="px-12 py-4">Rp. {{ number_format($item->price, 2, ',', '.') }}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>

        <div class="py-12">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 mt-12">
                <div class="flex justify-center">
                    <div class="text-center">
                        <h1 class="text-3xl font-extrabold text-gray-900 sm:text-4xl mb-4">Harga Buyback Emas Perhiasan
                        </h1>
                        <h2 class="text-xl font-semibold text-gray-900 sm:text-xl mb-4">
                            {{ \Carbon\Carbon::now()->format('d F Y') }}</h2>
                        <p class="mb-6">Harga berlaku mulai dari jam 10:00 WIB</p>

                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                            <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                                    <tr>
                                        <th scope="col" class="px-1 py-3">No.</th>
                                        <th scope="col" class="px-12 py-3">Karat</th>
                                        <th scope="col" class="px-12 py-3">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($buybackemas as $index => $item)
                                        <tr class="odd:bg-white even:bg-gray-50 border-b">
                                            <th scope="row"
                                                class="px-1 py-4 font-medium text-gray-900 whitespace-nowrap">
                                                {{ $index + 1 }}.</th>
                                            <td class="px-12 py-4">{{ $item->karat }}</td>
                                            <td class="px-12 py-4">Rp. {{ number_format($item->price, 2, ',', '.') }}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
    </section>

    <section id="harga" class="section">
        <div class="bg-white py-12">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 mt-12">
                <div class="flex justify-center">
                    <div class="text-center">
                        <h1 class="text-3xl font-extrabold text-gray-900 sm:text-4xl mb-4">Harga Emas Antam Hari Ini
                        </h1>
                        <h2 class="text-xl font-semibold text-gray-900 sm:text-xl mb-4">
                            {{ \Carbon\Carbon::now()->format('d F Y') }}</h2>
                        <p class="mb-6">Harga berlaku mulai dari jam 10:00 WIB</p>

                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                            <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                                    <tr>
                                        <th scope="col" class="px-1 py-3">No.</th>
                                        <th scope="col" class="px-12 py-3">Gramasi</th>
                                        <th scope="col" class="px-12 py-3">Harga Redmark</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($hargaemas as $index => $item)
                                        <tr class="odd:bg-white even:bg-gray-50 border-b">
                                            <th scope="row"
                                                class="px-1 py-4 font-medium text-gray-900 whitespace-nowrap">
                                                {{ $index + 1 }}.</th>
                                            <td class="px-12 py-4">{{ $item->gramasi }}</td>
                                            <td class="px-12 py-4">Rp.
                                                {{ number_format($item->redmark_price, 2, ',', '.') }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class=" py-12">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex justify-center">
                    <div class="text-center">
                        <h1 class="text-xl font-bold text-gray-900 sm:text-4xl mb-4">Mau harga yang lebih
                            murah ??</h1>
                        <h2 class="text-xl font-semibold text-gray-900 sm:text-xl mb-4">Hubungi admin sekarang
                        </h2>
                        <a href="https://api.whatsapp.com/send/?phone=6282240004730&text=Bismillah+Kaka+mau+join+group+store+dong...&type=phone_number&app_absent=0"
                            class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 shadow-lg shadow-green-500/50 dark:shadow-lg dark:shadow-green-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Klik
                            untuk hubungi</a>


                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-between mx-auto max-w-5xl px-4 sm:px-6 lg:px-8 py-50 ">
            <div class="w-1/2 p-2">
                <div class="border border-black w-full bg-white font-arial">
                    <div class="text-center p-1 text-lg font-bold bg-black text-white">
                        <a href="http://goldprice.org" target="_blank" class="text-white no-underline">Gold
                            Price</a>
                    </div>
                    <div id="gold-price" data-gold_price="USD-o-1d">
                        <div class="text-center">
                            <img width="90%" height="200" id="GPO_GW_Chart" alt="GoldPrice.Org"
                                src="http://goldprice.org/NewCharts/gold/images/gold_1d_o_USD.png?0.9127775601849233">
                        </div>
                        <div class="text-center">
                            <select name="GPO_GW_Currency" id="GPO_GW_Currency" onchange="GPO_GW_Changed();"
                                class="inline-block">
                                <option value="USD" selected="selected">USD</option>
                                <option value="AED">AED</option>
                                <option value="ARS">ARS</option>

                            </select>
                            <select name="GPO_GW_Weight" id="GPO_GW_Weight" onchange="GPO_GW_Changed();"
                                class="inline-block">
                                <option value="o" selected="selected">oz</option>
                                <option value="g">g</option>
                                <option value="k">kg</option>
                            </select>
                            <select name="GPO_GW_Time" id="GPO_GW_Time" onchange="GPO_GW_Changed();"
                                class="inline-block">
                                <option value="1d" selected="selected">24 Hours</option>
                                <option value="30_day">30 Days</option>

                            </select>
                        </div>
                        <div class="text-right text-xs mt-1">
                            <a href="http://goldprice.org/gold-price-charts.html" target="_blank"
                                class="no-underline">Add to site</a>
                        </div>
                    </div>
                    <script type="text/javascript" src="/assets/js/gold-price.js"></script>
                </div>
            </div>
            <div class="w-1/2 p-2">
                <div class="border border-black w-full bg-white font-arial">
                    <div class="text-center p-1 text-lg font-bold bg-black text-white">
                        <a href="http://silverprice.org" target="_blank" class="text-white no-underline">Silver
                            Price</a>
                    </div>
                    <div id="silver-price" data-silver_price="USD-o-1d">
                        <div class="text-center">
                            <img width="90%" height="200" id="GPO_SW_Chart" alt="SilverPrice.Org"
                                src="http://silverprice.org/charts/silver_1d_o_USD.png?0.6412624320762974">
                        </div>
                        <div class="text-center">
                            <select name="GPO_SW_Currency" id="GPO_SW_Currency" onchange="GPO_SW_Changed();"
                                class="inline-block">
                                <option value="USD" selected="selected">USD</option>
                                <option value="AED">AED</option>
                                <option value="ARS">ARS</option>
                            </select>
                            <select name="GPO_SW_Weight" id="GPO_SW_Weight" onchange="GPO_SW_Changed();"
                                class="inline-block">
                                <option value="o" selected="selected">oz</option>
                                <option value="k">kg</option>
                            </select>
                            <select name="GPO_SW_Time" id="GPO_SW_Time" onchange="GPO_SW_Changed();"
                                class="inline-block">
                                <option value="1d" selected="selected">24 Hours</option>
                                <option value="30_day">30 Days</option>
                            </select>
                        </div>
                        <div class="text-right text-xs mt-1">
                            <a href="http://silverprice.org/silver-price-charts.html" target="_blank"
                                class="no-underline">Add to site</a>
                        </div>
                    </div>
                    <script type="text/javascript" src="/assets/js/silver-price.js"></script>
                </div>
            </div>
        </div><br>
        <hr>
    </section>


    <section id="lokasi" class="section">
        <div class="fixed-bottom-right">
            <a class="flex rounded-5 pulse text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 shadow-lg shadow-green-500/50 dark:shadow-lg dark:shadow-green-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
                href="https://wa.me/6282240004730?text=Bismillah, Kaka mau pesan emas dong..." target="_blank">

                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                    class="bi bi-whatsapp" viewBox="0 0 16 16">
                    <path
                        d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232">
                    </path>
                </svg>
                <span class="px-1 fw-semibold mt-1.5">WA Admin</span>
            </a>
        </div>

        <div class="bg-white py-20">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="justify-center">
                    <div class="text-center">
                        <h1 class="text-3xl font-extrabold text-gray-900 sm:text-4xl mb-4">Lokasi Store Kami
                        </h1>
                    </div>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.1030159034913!2d107.5370305749109!3d-6.878260193120603!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e5a6ac82c36b%3A0xf631120663ba47e4!2skey%20gold!5e0!3m2!1sid!2sid!4v1710580488906!5m2!1sid!2sid"
                        width="100%" height="450" style="border: 0" ,="" loading="lazy"
                        referrer-policy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
        <div class="bg-gray-800 py-4">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="justify-center">
                    <div class="text-center">
                        <p class="text-lg  text-white mb-4">© 2024 <b>PT. Key Gold
                                Investama</b> All Rights Reserve</p>

                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>
