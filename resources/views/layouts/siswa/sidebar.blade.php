<div class="col-lg-4 sidebar-widgets">
    <div class="widget-wrap">
        <div class="single-sidebar-widget search-widget">
            <form class="search-form" action="#">
                <input placeholder="Cari Materi" name="search" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Cari materi'">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
        <div class="single-sidebar-widget user-info-widget">
            @foreach ($data as $profil)
            <img src="img/blog/user-info.png" alt="">
            <a href="#">
                <h4>{{$profil->guru->name}}</h4>
            </a>
            <p>
                Guru Mata Pelajaran <br>
                {{$profil->mapel->nama}}
            </p>
            <ul class="social-links">
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-line"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
            </ul>
            <p>
                Boot camps have its supporters andit sdetractors. Some people do not understand why you should have to spend money on boot camp when you can get. Boot camps have itssuppor ters andits detractors.
            </p>
            @endforeach
        </div>
        <div class="single-sidebar-widget popular-post-widget">
            <h4 class="popular-title">Materi Terbaru</h4>
            <div class="popular-post-list">
                @foreach($materisemua as $ms)
                <div class="single-post-list d-flex flex-row align-items-center">
                    <img class="img-fluid" src="{{asset($ms->gambar)}}" style="width:150px;height:100px;" alt="">
                    <div class="details">
                        <a href="blog-single.html">
                            <h6>{{$ms->judul}}</h6>
                        </a>
                        <p>{{$ms->created_at->diffForHumans()}}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="single-sidebar-widget ads-widget">
            <a href="#"><img class="img-fluid" src="img/blog/ads-banner.jpg" alt=""></a>
        </div>
        <div class="single-sidebar-widget post-category-widget">
            <h4 class="category-title">Mata Pelajaran</h4>
            <ul class="cat-list">
                @foreach($mapel as $mp)
                <li>
                    <a href="#" class="d-flex justify-content-between">
                        <p>{{$mp->nama}}</p>
                        <p>37</p>
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
        <div class="single-sidebar-widget tag-cloud-widget">
            <h4 class="tagcloud-title">Kelas</h4>
            <ul>
                @foreach ($data as $m => $hasil)
                @foreach ($hasil->kelas as $kls)
                <li><a href="#">{{$kls->nama}}</a></li>
                @endforeach
                @endforeach
            </ul>
        </div>
        <div class="single-sidebar-widget newsletter-widget">
            <h4 class="newsletter-title">Newsletter</h4>
            <p>
                Here, I focus on a range of items and features that we use in life without
                giving them a second thought.
            </p>
            <div class="form-group d-flex flex-row">
                <div class="col-autos">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                            </div>
                        </div>
                        <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Enter email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'">
                    </div>
                </div>
                <a href="#" class="bbtns">Subcribe</a>
            </div>
            <p class="text-bottom">
                You can unsubscribe at any time
            </p>
        </div>
    </div>
</div>