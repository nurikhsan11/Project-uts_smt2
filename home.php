<section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase puas">Pelayanan</h2>
                    <h3 class="section-subheading text-muted">Dengan pelayanan yang baik kepuasan pelanggan toko olahraga adalah visi misi kami.</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Kenyamanan jual beli</h4>
                        <p class="text-muted">kenyamanan dalam jual beli adalah hal yang selalu kami terapkan agar terbentuk silaturahmi yang baik.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Seller Respons</h4>
                        <p class="text-muted">respon penjual/seller yang cepat akan membuat pembeli/customer senang .</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Goods Security</h4>
                        <p class="text-muted">menjamin keamanan barang dan kualitas barang.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Barang</h2>
                    <h3 class="section-subheading puas">Semoga anda puas.</h3>
                </div>
                <div class="row">
                    <?php
            //panggil data produk
            $new = new Produk();
            $data = $new->dataProduk();
            //jadikan data produk menjadi array

            foreach ($data as $produk) {
                echo "<div class='col-lg-4 col-sm-6 mb-4'>";
                echo "<div class='portfolio-item'>";
                echo "<a class='portfolio-link'>";
                echo "<div class='portfolio-hover'>";
                echo "<div class='portfolio-hover-content'><i class='fas fa-plus fa-3x'></i></div>";
                echo "</div>";
                echo "<img class='img-fluid' src='assets/img/portfolio/$produk[foto]' alt='...' />";
                echo "</a>";
                echo "<div class='portfolio-caption'>";
                echo "<div class='portfolio-caption-heading'>$produk[nama]</div>";
                echo "<div class='portfolio-caption-heading'> RP " . number_format($produk['harga_jual'], 0, ',', '.') . "</div>";
                echo "<div class='portfolio-caption-subheading text-muted'>$produk[deskripsi]</div>";
                echo "</div>";
                echo "</div>";
                echo "</div>";

            }?>
                 <!-- <div class='col-lg-4 col-sm-6 mb-4'>
                        <div class='portfolio-item'>
                            <a class='portfolio-link' data-bs-toggle='modal' href='#portfolioModal1'>
                                <div class='portfolio-hover'>
                                    <div class='portfolio-hover-content'><i class='fas fa-plus fa-3x'></i></div>
                                </div>
                                <img class='img-fluid' src='assets/img/portfolio/Baju olahraga.jfif' alt='...' />
                            </a>
                            <div class='portfolio-caption'>
                                <div class='portfolio-caption-heading'>JERSEY</div>
                                <div class='portfolio-caption-subheading text-muted'>LENGKAP</div>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/Sepatu.jfif" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">ASICS</div>
                                <div class="portfolio-caption-subheading text-muted">SHOES</div>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/Bola basket dan teman teman.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">BOLA BASKET</div>
                                <div class="portfolio-caption-subheading text-muted">BARANG READY</div>
                            </div>
                        </div>
                    </div> -->
                    <!--<div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/Bola voli.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">BOLA VOLI</div>
                                <div class="portfolio-caption-subheading text-muted">MIKASA</div>
                            </div>
                        </div>
                    </div>-->
                    <!--<div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/alat-tenis-meja.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Peralatan tenis meja</div>
                                <div class="portfolio-caption-subheading text-muted">tidak mengecewakan</div>
                            </div>
                        </div>
                    </div>-->
                    <!--<div class="col-lg-4 col-sm-6">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/_171010170254_Raket-Badminton_ori.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">PERALATAN BLUTANGKIS</div>
                                <div class="portfolio-caption-subheading text-muted">DIJAMIN AMAN</div>
                            </div>
                        </div>
                    </div>-->
                </div>
            </div>
        </section>
        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase puas">About</h2>
                    <h3 class="section-subheading text-muted">Berikut beberapa barang terbaik kami.</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/portfolio/Sepatu.jfif" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>ASICS</h4>
                                <h4 class="subheading">Best Shoes</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Sepatu asics adalah salah satu sepatu olahraga terbaik di indonesia banyak atlit yang menggunakan sepatu ini seperti atlit Voli,Bulutangkis dan lain lain.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/portfolio/Baju olahraga.jfif" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Jersey</h4>
                                <h4 class="subheading">Quality Clothing</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">selain itu terdapat jersey clothing bahan yang digunakan berkualitas dan cocok jika berkegiatan aktif dan berkeringat</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/portfolio/alat-tenis-meja.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Peralatan tenis meja</h4>
                                <h4 class="subheading">Best Quality</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Di toko kami juga terdapat peralatan tenis meja seperti Bet dan bola pimpong dengan kualitas terbaik yang siap digunakan kapan saja.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/portfolio/Bulutangkis.jfif" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Peralatan Bulu Tangkis</h4>
                                <h4 class="subheading">Best Quality</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Di toko kami juga menyediakan peralatan bulutangkis seperti raket dan kok, dengan kualitas terbaik dapat membantu anda yang gemar bermain badminton</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/portfolio/Bola voli.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Bola voli</h4>
                                <h4 class="subheading">Best Quality</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Bola voli yang tersedia di toko kami adalah merk mikasa,merk bola voli yang menjadi unggulan dan sering digunakan atlit voli </p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/portfolio/Bola basket dan teman teman.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Bola selain Bola voli</h4>
                                <h4 class="subheading">Best Quality</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Selain bola voli terdapat juga bola basket, bola sepak,bola baseball dan lain lain dengan kualitas barang yang menjadi incaran peminat olahraga.</p></div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- Clients-->
        <div class="py-5">
            <div class="container">
                <div class="row align-items-center">
                        <iframe width="500px" height="300px" src="assets/JAGOAN Sepatu Lari Paling Stabil Dan Nyaman - Asics Gel Kayano 27.mp4" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contact Us</h2>
                    <h3 class="section-subheading text-muted">jika anda minat dengan barang kami silahkan isi form dibawah dan cek barang terbaru kami di akun sosmed dibawah.</h3>
                </div>
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <form id="contactForm"action="checkout.php" method="post">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                           <div class="form-group">
                                <!-- Name input-->
                                <input class="form-control" name="tanggal" id="tanggal" type="date" placeholder="tanggal-pesan *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <div class="form-group">
                                <!-- Name input-->
                                <input class="form-control"name="nama_pemesan" id="nama_pemesan" type="text" placeholder="Your Name *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <div class="form-group">
                                <!-- Name input-->
                                <input class="form-control"name="alamat_pemesan" id="alamat_pemesan" type="text" placeholder="alamat anda *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">A alamat is required.</div>
                            </div>
                            <div class="form-group">
                                <!-- Phone number input-->
                                <input class="form-control"name="no_hp" id="phone" type="tel" placeholder="no_hp anda *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control"name="email" id="email" type="email" placeholder="email anda *" data-sb-validations="required,email" />
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <div class="form-group">
                                <!-- Phone number input-->
                                <input class="form-control" name="jumlah_pesanan" id="jumlaj_pesanan" type="number" placeholder="jumlah pesanan anda *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A jumlah pesanan is required.</div>
                            </div>
                            <div class="form-group">
                                <select class="form-control" name="produk_id" id="produk_id" data-rule="required" data-msg="Please select a product">
                                <option value="" hidden>Pilih Barang</option>
                            <?php
                            $sql = "SELECT id, nama FROM produk";
                            $stmt = $dbh->prepare($sql);
                            $stmt->execute();
                            while ($row = $stmt->fetch()) {
                                echo "<option value='" . $row['id'] . "'>" . $row['nama'] . "</option>";
                            }
                            ?>
                            </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <!-- Message input-->
                                <textarea class="form-control" name="deskripsi" id="deskripsi" placeholder="deskripsi anda *" data-sb-validations="required"></textarea>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                        </div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center text-white mb-3">
                            <div class="fw-bolder">Form submission successful!</div>
                            To activate this form, sign up at
                            <br />
                            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    
                    <!-- Submit Button-->
                    <div class="text-center"><input class="btn btn-primary btn-xl text-uppercase" id="submitButton" type="submit" value="kirim pesanan" name="proses"></div>
                </form>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; Nur Ikhsan 2023</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="instagram"><i class="fab fa-instagram"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3 footer" href="#!">Privacy Policy</a>
                        <a class="link-dark text-decoration-none footer" href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>