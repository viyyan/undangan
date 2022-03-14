
@extends('frontend.pages.product.main')
@section('content.product')

<div class="product--section_wave">
    <div class="product--section_wave-content second-product"></div>
</div>
<div class="product--section_content">
        <div class="container">
            <!--===============================================-->
            <!--============ product detail title =============-->
            <!--===============================================-->
            <div class="product--section_content-title">
                <div class="product--section_content-title-images nipe-drop">
                    <div class="product--section_content-title-images-main">
                        <img src="{{ frontImages('products-fever-drop/product-sirup_main.svg') }}" />
                    </div>
                </div>
                <div class="product--section_content-title-text">
                    <img src="{{ frontImages('products-fever-drop/product-sirup_title.svg') }}" />
                </div>
            </div>
            <!--================================================-->
            <!--============ product detail manfaat ============-->
            <!--================================================-->
            <div class="product--section_content-benefit">
                <div class="product--section_content-benefit-title gaegu">
                    Manfaat
                </div>
                <div class="product--section_content-benefit_box">
                    <div class="product--section_content-benefit-images">
                        <div class="single-benefit">
                            <img src="{{ frontImages('products-fever-drop/product-ilustration_1.svg') }}" />
                        </div>
                        <div class="single-benefit">
                            <img src="{{ frontImages('products-fever-drop/product-ilustration_2.svg') }}" />
                        </div>
                        <div class="single-benefit">
                            <img src="{{ frontImages('products-fever-drop/product-ilustration_3.svg') }}" />
                        </div>
                    </div>
                    <div class="product--section_content-benefit-text">
                        <p>
                            Menurunkan demam yang menyertai flu serta meredakan sakit kepala dan sakit gigi.
                        </p>
                    </div>
                </div>
            </div>
            <!--===================================================================-->
            <!--============ product detail aturan pakai dan indikasi =============-->
            <!--===================================================================-->
            <div class="product--section_content-howto">
                <div class="product--section_content-howto_box">
                    <div class="product--section_content-howto_title">
                        <h2 class="gaegu">ATURAN<br>PEMAKAIAN</h2>
                    </div>
                    <div class="product--section_content-howto_content">
                        <p>
                            3-4 kali sehari dengan minimum interval 4 jam dan tidak melebihi 4x dalam 24 jam.
                        </p>
                    </div>
                </div>
                <div class="product--section_content-howto_box">
                    <div class="product--section_content-howto_title">
                        <h2 class="gaegu">INDIKASI</h2>
                    </div>
                    <div class="product--section_content-howto_content">
                        <p>
                            Nipe<sup>&reg;</sup> Fever Drop berguna untuk menurunkan demam yang menyertai flu serta meredakan rasa sakit seperti sakit kepala dan sakit gigi.
                        </p>
                    </div>
                </div>
            </div>
            <!--===================================================-->
            <!--============ product detail penggunaan ============-->
            <!--===================================================-->
            <div class="product--section_content-howtouse">
                <div class="product--section_content-howtouse_box">
                    <div class="product--section_content-howtouse_content">
                        <div class="product--section_content-howtouse_title">
                            <h2>DOSIS PEMAKAIAN</h2>
                        </div>
                        <div class="product--section_content-howtouse_desc">
                            <ul>
                                <li>
                                    <p> Dibawah 3 Bulan: Sesuai anjuran dokter</p>
                                </li>
                                <li>
                                    <p>3-9 Bulan: 0,8 ml</p>
                                </li>
                                <li>
                                    <p>10-24 Bulan: 1,2 ml</p>
                                </li>
                                <li>
                                    <p>2-3 tahun : 1,6 ml</p>
                                </li>
                                <li>
                                    <p>3 tahun ke atas : gunakan Nipe<sup>&reg;</sup> Fever Sirup</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product--section_content-howtouse_content">
                        <div class="product--section_content-howtouse_title">
                            <h2>KONTRA INDIKASI</h2>
                        </div>
                        <div class="product--section_content-howtouse_desc">
                            <p>
                                Penderita yang hipersensitif terhadap paracetamol dan bahan yang ada dalam obat ini.
                            </p>
                        </div>
                    </div>
                    <div class="product--section_content-howtouse_content">
                        <div class="product--section_content-howtouse_title">
                            <h2>PENYIMPANAN</h2>
                        </div>
                        <div class="product--section_content-howtouse_desc">
                            <p>
                                Simpan di tempat kering dan sejuk, di bawah suhu 30°C
                            </p>
                        </div>
                    </div>
                </div>
                <div class="product--section_content-howtouse_box right">
                    <div class="product--section_content-howtouse_content">
                        <div class="product--section_content-howtouse_title">
                            <h2>PERINGATAN & PERHATIAN</h2>
                        </div>
                        <div class="product--section_content-howtouse_desc right">
                            <ul>
                                <li>
                                    <p>Berikan Si Kecil dosis sesuai ketentuan.</p>
                                </li>
                                <li>
                                    <p>Tidak dianjurkan untuk Si Kecil di bawah usia 2 bulan.</p>
                                </li>
                                <li>
                                    <p>Bila rasa nyeri bertahan lebih dari 3 hari, dan demam tidak menurun selama 2 hari, atau bila ada kemerahan pada kulit, segera hubungi dokter.</p>
                                </li>
                                <li>
                                    <p>Tidak dianjurkan untuk memberikan obat lain yang mengandung paracetamol secara bersamaan.</p>
                                </li>
                                <li>
                                    <p>Hati-hati penggunaan pada Si Kecil dengan gangguan hati dan yang menggunakan warfarin.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--===================================================-->
            <!--============ product detail infografis ============-->
            <!--===================================================-->
            <div class="product--section_content-infografis">
                <div class="product--section_content-infografis_box">
                    <div class="product--section_content-infografis_box-normal">
                        <div class="product--section_content-infografis_box-title">
                            <h2>Tahukah Ibu apa yang menyebabkan Si Kecil demam?</h2>
                        </div>
                        <div class="product--section_content-infografis_box-desc">
                            <ul>
                                <li>
                                    <h3 class="gaegu">INFEKSI</h3>
                                    <p>Seperti terserang bakteri, virus atau<br>parasit</p>
                                </li>
                                <li>
                                    <h3 class="gaegu">NON-INFEKSI</h3>
                                    <p>Seperti tumbuh gigi,<br>pasca imunisasi, atau<br>dehidrasi*</p>
                                </li>
                            </ul>
                            <div class="product--section_content-infografis_box-desc_ornament">
                                <img src="{{ frontImages('products-fever-drop/product-ornament-info01.svg') }}" />
                            </div>
                        </div>
                    </div>
                    <div class="product--section_content-infografis_box-normal">
                        <div class="product--section_content-infografis_box-title">
                            <h2>Nipe<sup>&reg;</sup> Fever dapat ditemukan di:</h2>
                        </div>
                        <div class="product--section_content-infografis_box-desc no-padding">
                            <div class="product--section_content-infografis_box-desc_images">
                                <img src="{{ frontImages('products-fever-sirup/product-apotek-ilustration.svg') }}" />
                            </div>
                            <div class="product--section_content-infografis_box-desc_text">
                                <p>Nipe<sup>&reg;</sup> Fever Sirup tersedia di berbagai jaringan apotek dan toko obat terdekat</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product--section_content-infografis_box">
                    <div class="product--section_content-infografis_box_symptom">
                        <div class="product--section_content-infografis_box_symptom-title">
                            <h2 class="gaegu">GEJALA<br>DEMAM PADA<br>ANAK</h2>
                        </div>
                        <div class="product--section_content-infografis_box_symptom-decs">
                            <h3>
                                Beberapa gejala yang menyertai demam, antara lain:
                            </h3>
                            <ul>
                                <li>
                                    <div class="product--section_content-infografis_box_symptom-decs-images">
                                        <img src="{{ frontImages('products-fever-sirup/info01.svg') }}" />
                                    </div>
                                    <div class="product--section_content-infografis_box_symptom-decs-text">
                                        <p>Mudah marah, rewel, dan lesu</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="product--section_content-infografis_box_symptom-decs-images">
                                        <img src="{{ frontImages('products-fever-sirup/info02.svg') }}" />
                                    </div>
                                    <div class="product--section_content-infografis_box_symptom-decs-text">
                                        <p>Suhu tubuh mencapai >37˚C</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="product--section_content-infografis_box_symptom-decs-images">
                                        <img src="{{ frontImages('products-fever-sirup/info03.svg') }}" />
                                    </div>
                                    <div class="product--section_content-infografis_box_symptom-decs-text">
                                        <p>Nafsu makan menurun</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="product--section_content-infografis_box_symptom-decs-images">
                                        <img src="{{ frontImages('products-fever-sirup/info04.svg') }}" />
                                    </div>
                                    <div class="product--section_content-infografis_box_symptom-decs-text">
                                        <p>Lebih sering menangis</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="product--section_content-infografis_box_symptom-decs-images">
                                        <img src="{{ frontImages('products-fever-sirup/info05.svg') }}" />
                                    </div>
                                    <div class="product--section_content-infografis_box_symptom-decs-text">
                                        <p>Kebiasaan tidur atau makan mengalami perubahan</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="product--section_content-infografis_box_symptom-decs-images">
                                        <img src="{{ frontImages('products-fever-sirup/info06.svg') }}" />
                                    </div>
                                    <div class="product--section_content-infografis_box_symptom-decs-text">
                                        <p>Mengalami kejang</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="product--section_content-infografis_box_symptom-decs-images">
                                        <img src="{{ frontImages('products-fever-sirup/info07.svg') }}" />
                                    </div>
                                    <div class="product--section_content-infografis_box_symptom-decs-text">
                                        <p>Merasa lebih panas/ dingin daripada orang lain di ruangan yang terasa nyaman</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="product--section_content-infografis_box_symptom-decs-images">
                                        <img src="{{ frontImages('products-fever-sirup/info08.svg') }}" />
                                    </div>
                                    <div class="product--section_content-infografis_box_symptom-decs-text">
                                        <p>Mengalami nyeri tubuh dan sakit kepala</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="product--section_content-infografis_box_symptom-decs-images">
                                        <img src="{{ frontImages('products-fever-sirup/info09.svg') }}" />
                                    </div>
                                    <div class="product--section_content-infografis_box_symptom-decs-text">
                                        <p>Tidur lebih lama atau mengalami kesulitan tidur</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--================================================-->
            <!--============ product detail referensi ============-->
            <!--================================================-->
            <div class="product--section_content-reference">
                <ul>
                    <li>Nipe<sup>&reg;</sup> Fever Sirup Product Information, BPOM Approved 2020</li>
                    <li>Barbi, Egidio et,al. 2017, ‘Fever in Children: Pearls and Pitfalls’, <a href="www.mdpi.com/journal/children" target="_blank">www.mdpi.com/journal/children</a></li>
                    <li>Becker, H, John, et,al. 2010, ‘Fever an Update’, Journal of the American Podiatric Medical Association _ Vol 100 _ No 4 _ July/August 2010</li>
                    <li>Kanabar, J Dipak. 2017, A clinical and safety review of paracetamol and ibuprofen in children, Inflammopharmacol (2017) 25:1–9 DOI 10.1007/s10787-016-0302-3</li>
                    <li>Editor dr Erina Nindya Lestari - <a href="https://www.rspermata.co.id/articles/read/serba-serbi-seputar-demam" target="_blank">https://www.rspermata.co.id/articles/read/serba-serbi-seputar-demam</a></li>
                    <li><a href="https://medlineplus.gov/fever.html" target="_blank">https://medlineplus.gov/fever.html</a></li>
                    <li><a href="https://www.webmd.com/first-aid/fevers-causes-symptoms-treatments#1" target="_blank">https://www.webmd.com/first-aid/fevers-causes-symptoms-treatments#1</a></li>
                    <li><a href="https://www.nhs.uk/conditions/fever-in-children/" target="_blank">https://www.nhs.uk/conditions/fever-in-children/</a></li>
                </ul>
            </div>
            <div class="product--section_content-button">
                <a href="">Download infografis (JPG)</a>
            </div>
        </div>
        <!--  -->
    <div class="product--section_ornament">
        <img src="{{ frontImages('product-ornament.svg') }}" />
    </div>
</div>
@endsection
