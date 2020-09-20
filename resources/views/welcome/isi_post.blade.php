@include('layouts.home.navbar')

@foreach ($data as $post)
<section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset($post->gambar)}}');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
                <h1 class="mb-3 bread">{{$post->judul}}</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="{{route('home')}}">Beranda <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="blog.html">Berita <i class="ion-ios-arrow-forward"></i></a></span> <span>{{$post->judul}} <i class="ion-ios-arrow-forward"></i></span></p>
            </div>
        </div>
    </div>
</section>


<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 ftco-animate">
                <img src="{{asset($post->gambar)}}" style="width:750px;height:450px" alt="">
                <h2 class="mb-3">{{$post->judul}}</h2>
                <hr>
                <p><?= $post->konten ?></p>
                <div class="tag-widget post-tag-container mb-5 mt-5">
                    <div class="tagcloud">
                        @foreach ($data as $m => $hasil)
                        @foreach ($hasil->tags as $tag)
                        <li><a href="#">{{$tag->nama}}</a></li>
                        @endforeach
                        @endforeach
                    </div>
                </div>
                @endforeach

                <div class="about-author d-flex p-4 bg-light">
                    <div class="bio mr-5">
                        <img src="{{asset('public/assets/welcome/images/person_1.jpg')}}" alt="Image placeholder" class="img-fluid mb-4">
                    </div>
                    <div class="desc">
                        <h3>George Washington</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
                    </div>
                </div>

                <div class="pt-5 mt-5">
                    <h3 class="mb-5">6 Comments</h3>
                    <ul class="comment-list">
                        <li class="comment">
                            <div class="vcard bio">
                                <img src="images/person_1.jpg" alt="Image placeholder">
                            </div>
                            <div class="comment-body">
                                <h3>John Doe</h3>
                                <div class="meta">March 08, 2019 at 2:21pm</div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                                <p><a href="#" class="reply">Reply</a></p>
                            </div>
                        </li>

                        <li class="comment">
                            <div class="vcard bio">
                                <img src="images/person_1.jpg" alt="Image placeholder">
                            </div>
                            <div class="comment-body">
                                <h3>John Doe</h3>
                                <div class="meta">March 08, 2019 at 2:21pm</div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                                <p><a href="#" class="reply">Reply</a></p>
                            </div>

                            <ul class="children">
                                <li class="comment">
                                    <div class="vcard bio">
                                        <img src="images/person_1.jpg" alt="Image placeholder">
                                    </div>
                                    <div class="comment-body">
                                        <h3>John Doe</h3>
                                        <div class="meta">March 08, 2019 at 2:21pm</div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                                        <p><a href="#" class="reply">Reply</a></p>
                                    </div>


                                    <ul class="children">
                                        <li class="comment">
                                            <div class="vcard bio">
                                                <img src="images/person_1.jpg" alt="Image placeholder">
                                            </div>
                                            <div class="comment-body">
                                                <h3>John Doe</h3>
                                                <div class="meta">March 08, 2019 at 2:21pm</div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                                                <p><a href="#" class="reply">Reply</a></p>
                                            </div>

                                            <ul class="children">
                                                <li class="comment">
                                                    <div class="vcard bio">
                                                        <img src="images/person_1.jpg" alt="Image placeholder">
                                                    </div>
                                                    <div class="comment-body">
                                                        <h3>John Doe</h3>
                                                        <div class="meta">March 08, 2019 at 2:21pm</div>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                                                        <p><a href="#" class="reply">Reply</a></p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="comment">
                            <div class="vcard bio">
                                <img src="images/person_1.jpg" alt="Image placeholder">
                            </div>
                            <div class="comment-body">
                                <h3>John Doe</h3>
                                <div class="meta">March 08, 2019 at 2:21pm</div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                                <p><a href="#" class="reply">Reply</a></p>
                            </div>
                        </li>
                    </ul>
                    <!-- END comment-list -->

                    <div class="comment-form-wrap pt-5">
                        <h3 class="mb-5">Komentar</h3>
                        <form action="#" class="p-5 bg-light">
                            <div class="form-group">
                                <label for="name">Nama *</label>
                                <input type="text" class="form-control" id="name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email *</label>
                                <input type="email" class="form-control" id="email">
                            </div>
                            <div class="form-group">
                                <label for="website">Website</label>
                                <input type="url" class="form-control" id="website">
                            </div>

                            <div class="form-group">
                                <label for="message">Pesan</label>
                                <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Kirim Komentar" class="btn py-3 px-4 btn-primary">
                            </div>

                        </form>
                    </div>
                </div>

            </div> <!-- .col-md-8 -->
            <div class="col-lg-4 sidebar ftco-animate">
                <div class="sidebar-box">
                    <form action="{{route('post.cari')}}" method="get" class="search-form">
                        <div class="form-group">
                            <span class="icon icon-search"></span>
                            <input type="input" class="form-control" name="cari" placeholder="Ketik disini">
                        </div>
                    </form>
                </div>
                <!-- KATEGORI -->
                <div class="sidebar-box ftco-animate">
                    <div class="categories">
                        <h3 class="heading-name">Kategori</h3>
                        @foreach ($kategori_widget as $kat)
                        <li><a href="{{route('post.kategori',$kat->slug)}}">{{$kat->nama}} <span>{{$kat->posts->count()}}</span></a></li>
                        @endforeach
                    </div>
                </div>

                <div class="sidebar-box ftco-animate">
                    <h3 class="heading-name">Berita Terbaru</h3>
                    @foreach ($postsemua as $postall)
                    <div class="block-21 mb-4 d-flex">
                        <a class="blog-img mr-4" style="background-image: url('{{asset($postall->gambar)}}');"></a>
                        <div class="text">
                            <h3 class="heading"><a href="{{ route ('post.isi', $postall->slug) }}">{{$postall->judul}}</a></h3>
                            <div class="meta">
                                <div><span class="icon-calendar"></span> {{$postall->created_at->diffForHumans()}}</div>
                                <div><span class="icon-person"></span> {{$postall->users->name}}</div>
                                <div><span class="icon-chat"></span> 19</div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="sidebar-box ftco-animate">
                        <h3 class="heading-name">Tag Cloud</h3>
                        <div class="tagcloud">
                            @foreach ($data as $t =>$hasil)
                            @foreach($hasil->tags as $tag)
                            <a href="#" class="tag-cloud-link">{{$tag->nama}}</a>
                            @endforeach
                            @endforeach
                        </div>
                    </div>

                    <div class="sidebar-box ftco-animate">
                        <h3 class="heading-name">Iklan</h3>
                        <p>Silahkan Hubungi Pengembang untuk memasang Iklan disini</p>
                    </div>
                </div>

            </div>
        </div>
</section> <!-- .section -->

@include('layouts.home.footer')