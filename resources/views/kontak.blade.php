@include('layouts.home.navbar')

<section class="hero-wrap hero-wrap-2" style="background-image: url('public/assets/welcome/images/bg_3.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
                <h1 class="mb-3 bread">Hubungi Kami?</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Beranda <i class="ion-ios-arrow-forward"></i></a></span> <span>Hubungi Kami? <i class="ion-ios-arrow-forward"></i></span></p>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pb contact-section">
    <div class="container">
        <div class="row d-flex contact-info">
            <div class="col-md-3 d-flex">
                <div class="align-self-stretch box p-4 text-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="icon-map-signs"></span>
                    </div>
                    <h3 class="mb-3">Alamat</h3>
                    <p>Jalan Daeng Mangatta Desa Tolada Kec. Malangke</p>
                </div>
            </div>
            <div class="col-md-3 d-flex">
                <div class="align-self-stretch box p-4 text-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="icon-phone2"></span>
                    </div>
                    <h3 class="mb-3">No. Handphone</h3>
                    <p><a href="">+ 6285242880901</a></p>
                </div>
            </div>
            <div class="col-md-3 d-flex">
                <div class="align-self-stretch box p-4 text-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="icon-paper-plane"></span>
                    </div>
                    <h3 class="mb-3">Email</h3>
                    <p><a href="mailto:info@sman11lutra.web.id">info@sman11lutra.web.id</a></p>
                </div>
            </div>
            <div class="col-md-3 d-flex">
                <div class="align-self-stretch box p-4 text-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="icon-globe"></span>
                    </div>
                    <h3 class="mb-3">Website</h3>
                    <p><a href="#">sman11lutra.web.id</a></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section contact-section">
    <div class="container">
        <div class="row block-9">
            <div class="col-md-6 order-md-last d-flex">
                <form action="#" class="bg-light p-5 contact-form">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Nama Lengkap">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Subjek">
                    </div>
                    <div class="form-group">
                        <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Pesan"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Kirim Pesan" class="btn btn-primary py-3 px-5">
                    </div>
                </form>

            </div>

            <div class="col-md-6 d-flex">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3985.3364933586067!2d120.41904171410927!3d-2.715996939621086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d917691cb63672d%3A0x18a4c755e644e537!2sSMA%20Negeri%201%20Malangke!5e0!3m2!1sen!2sus!4v1600152663547!5m2!1sen!2sus" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </div>
</section>

@include('layouts.home.footer')