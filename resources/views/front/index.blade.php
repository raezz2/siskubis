@extends('layouts.front')
@section('content')
<section class="home">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-12 col-xs-12">
                <div class="headline">
                    <div class="nav" id="headline-nav">
                        <a class="left carousel-control" role="button" data-slide="prev">
                            <span class="ion-ios-arrow-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" role="button" data-slide="next">
                            <span class="ion-ios-arrow-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <div class="owl-carousel owl-theme" id="headline">
                        <div class="item">
                            <a href="#">
                                <div class="badge">Tip!</div> Vestibulum ante ipsum primis in faucibus orci
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">Ut rutrum sodales mauris ut suscipit</a>
                        </div>
                    </div>
                </div>
                <div class="owl-carousel owl-theme slide" id="featured">
                    @foreach($mainNews as $row)
                    <div class="item">
                        <article class="featured">
                            <div class="overlay"></div>
                            <figure>
                                <img src="{{ asset('storage/berita/' . $row->foto) }}" alt="{{ $row->tittle }}">
                            </figure>
                            <div class="details">
                                <div class="category"><a href="#">{{ $row->beritaCategory->category }}</a></div>
                                <h1><a href="{{ route('single', $row->slug) }}">{{ $row->tittle }}</a></h1>
                                <div class="time">{{ $row->created_at->format('M d, Y') }}</div>
                            </div>
                        </article>
                    </div>
                    @endforeach
                </div>
                <div class="line">
                    <div>Latest News</div>
                </div>
                <div class="row">
                    @forelse($lastNews as $row)
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="row">
                            <article class="article col-md-12">
                                <div class="inner">
                                    <figure>
                                        <a href="{{ route('single', $row->slug) }}">
                                            <img src="{{ asset('storage/berita/' . $row->foto) }}"
                                                alt="{{ $row->tittle }}">
                                        </a>
                                    </figure>
                                    <div class="padding">
                                        <div class="detail">
                                            <div class="time">{{ $row->created_at->format('M d, Y') }}</div>
                                            <div class="category"><a href="#">{{ $row->beritaCategory->category }}</a>
                                            </div>
                                        </div>
                                        <h5><a
                                                href="{{ route('single', $row->slug) }}">{{ Str::Limit($row->tittle, 30) }}</a>
                                        </h5>
                                        <p>{!! Str::Limit($row->berita, 120) !!}</p>
                                        <footer>
                                            <a href="#" class="love"><i class="ion-android-favorite-outline"></i>
                                                @php
                                                $berita_like =
                                                DB::table('berita_like')->where('berita_id',$row->id)->count();
                                                @endphp
                                                <div>{{ $berita_like }}</div>
                                            </a>
                                            <a class="btn btn-primary more" href="{{ route('single', $row->slug) }}">
                                                <div>More</div>
                                                <div><i class="ion-ios-arrow-thin-right"></i></div>
                                            </a>
                                        </footer>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    @empty
                    <h5>Belum ada berita</h5>
                    @endforelse
                </div>
                <div class="banner">
                    <a href="#">
                        <img src="{{asset('assets/images/ads.png')}}" alt="Sample Article">
                    </a>
                </div>
                <div class="line transparent little"></div>
                <div class="row">
                    <div class="col-md-5 col-sm-7 trending-tags">
                        <h1 class="title-col">Trending Tags</h1>
                        <div class="body-col">
                            @php
                            use App\kategori;
                            $tagsNews = kategori::orderBy('category')->paginate(8);
                            @endphp
                            @forelse($tagsNews as $row)
                            <article class="article-mini">
                                <div class="inner">
                                    <div class="padding-left">
                                        <h1><a href="{{ route('front.tag') }}">{{ $row->category }}</a></h1>
                                    </div>
                                </div>
                            </article>
                            @empty
                            <h5>Belum ada berita</h5>
                            @endforelse
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <h1 class="title-col">
                            Hot News
                            <div class="carousel-nav" id="hot-news-nav">
                                <div class="prev">
                                    <i class="ion-ios-arrow-left"></i>
                                </div>
                                <div class="next">
                                    <i class="ion-ios-arrow-right"></i>
                                </div>
                            </div>
                        </h1>
                        <div class="body-col vertical-slider" data-max="4" data-nav="#hot-news-nav" data-item="article">
                            @forelse($lastNews as $row)
                            <article class="article-mini">
                                <div class="inner">
                                    <figure>
                                        <a href="{{ route('single', $row->slug) }}">
                                            <img src="{{ asset('storage/berita/' . $row->foto) }}" alt="Sample Article">
                                        </a>
                                    </figure>
                                    <div class="padding">
                                        <h1><a
                                                href="{{ route('single', $row->slug) }}">{{ Str::Limit($row->tittle,40) }}</a>
                                        </h1>
                                        <div class="detail">
                                            <div class="time mr-3 ml-3">{{ $row->created_at->format('F d, Y') }}</div>
                                            <div class="category"><a href="#">{{ $row->beritaCategory->category }}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            @empty
                            <h5>Belum ada berita</h5>
                            @endforelse
                        </div>
                    </div>
                </div>
                <div class="line top">
                    <div>Just Another News</div>
                </div>
                <div class="row">
                    @forelse($justNews as $row)
                    <article class="col-md-12 article-list">
                        <div class="inner">
                            <figure>
                                <a href="{{ route('single', $row->slug) }}">
                                    <img src="{{ asset('storage/berita/' . $row->foto) }}" alt="Sample Article">
                                </a>
                            </figure>
                            <div class="details">
                                <div class="detail">
                                    <div class="time">{{ $row->created_at->format('M d, Y') }}</div>
                                    <div class="category"><a href="#">{{ $row->beritaCategory->category }}</a></div>
                                </div>
                                <h6><a href="{{ route('single', $row->slug) }}">{{ Str::Limit($row->tittle, 40) }}</a>
                                </h6>
                                <p>{!! Str::Limit($row->berita, 120) !!}</p>
                                <footer>
                                    <a href="#" class="love"><i class="ion-android-favorite-outline"></i>
                                        @php
                                        $berita_like = DB::table('berita_like')->where('berita_id',$row->id)->count();
                                        @endphp
                                        <div>{{ $berita_like }}</div>
                                    </a>
                                    <a class="btn btn-primary more" href="{{ route('single', $row->slug) }}">
                                        <div>More</div>
                                        <div><i class="ion-ios-arrow-thin-right"></i></div>
                                    </a>
                                </footer>
                            </div>
                        </div>
                    </article>
                    @empty
                    <h5>Belum ada berita</h5>
                    @endforelse
                </div>
            </div>
            <div class="col-xs-6 col-md-4 sidebar" id="sidebar">
                <div class="sidebar-title for-tablet">Sidebar</div>
                <aside>
                    <div class="aside-body">
                        <div class="featured-author">
                            <div class="featured-author-inner">
                                <div class="featured-author-cover"
                                    style="background-image: url('{{asset('assets/images/news/img15.jpg')}}');">
                                    <div class="badges">
                                        <div class="badge-item"><i class="ion-star"></i> Featured</div>
                                    </div>
                                    <div class="featured-author-center">
                                        <figure class="featured-author-picture">
                                            <img src="{{asset('assets/images/img01.jpg')}}" alt="Sample Article">
                                        </figure>
                                        <div class="featured-author-info">
                                            <h2 class="name">John Doe</h2>
                                            <div class="desc">@JohnDoe</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="featured-author-body">
                                    <div class="featured-author-count">
                                        <div class="item">
                                            <a href="#">
                                                <div class="name">Posts</div>
                                                <div class="value">208</div>
                                            </a>
                                        </div>
                                        <div class="item">
                                            <a href="#">
                                                <div class="name">Stars</div>
                                                <div class="value">3,729</div>
                                            </a>
                                        </div>
                                        <div class="item">
                                            <a href="#">
                                                <div class="icon">
                                                    <div>More</div>
                                                    <i class="ion-chevron-right"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="featured-author-quote">
                                        "Eur costrict mobsa undivani krusvuw blos andugus pu aklosah"
                                    </div>
                                    <div class="block">
                                        <h2 class="block-title">Photos</h2>
                                        <div class="block-body">
                                            <ul class="item-list-round" data-magnific="gallery">
                                                @foreach($popular as $row)
                                                <li><a href="{{ asset('storage/berita/' . $row->foto) }}"
                                                        style="background-image: url('{{ asset('storage/berita/' . $row->foto) }}');"></a>
                                                </li>
                                                @endforeach
                                            </ul>

                                        </div>
                                    </div>
                                    <div class="featured-author-footer">
                                        <a href="#">See All Authors</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
                <aside>
                    <h1 class="aside-title">Popular <a href="/all" class="all">See All <i
                                class="ion-ios-arrow-right"></i></a></h1>
                    <div class="aside-body">
                        @forelse($popular as $row)
                        <article class="article-mini">
                            <div class="inner">
                                <figure>
                                    <a href="{{ route('single', $row->slug) }}">
                                        <img src="{{ asset('storage/berita/' . $row->foto) }}" alt="{{ $row->tittle }}">
                                    </a>
                                </figure>
                                <div class="padding">
                                    <h1><a href="{{ route('single', $row->slug) }}">{{ $row->tittle }}</a></h1>
                                    <div class="detail">
                                        <div class="time">{{ $row->created_at->format('M d, Y') }}</div>
                                        <div class="category"><a href="#">{{ $row->beritaCategory->category }}</a></div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        @empty
                        <h5>Belum ada berita</h5>
                        @endforelse
                    </div>
                </aside>
                <aside>
                    <div class="aside-body">
                        <form class="newsletter">
                            <div class="icon">
                                <i class="ion-ios-email-outline"></i>
                                <h1>Newsletter</h1>
                            </div>
                            <div class="input-group">
                                <input type="email" class="form-control email" placeholder="Your mail">
                                <div class="input-group-btn">
                                    <button class="btn btn-primary"><i class="ion-paper-airplane"></i></button>
                                </div>
                            </div>
                            <p>By subscribing you will receive new articles in your email.</p>
                        </form>
                    </div>
                </aside>
                <aside>
                    <ul class="nav nav-tabs nav-justified" role="tablist">
                        <li class="active">
                            <a href="#recomended" aria-controls="recomended" role="tab" data-toggle="tab">
                                <i class="ion-android-star-outline"></i> Recomended
                            </a>
                        </li>
                        <li>
                            <a href="#comments" aria-controls="comments" role="tab" data-toggle="tab">
                                <i class="ion-ios-chatboxes-outline"></i> Comments
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="recomended">
                            <article class="article-fw">
                                <div class="inner">
                                    <figure>
                                        <a href="#">
                                            <img src="{{asset('assets/images/news/img16.jpg')}}" alt="Sample Article">
                                        </a>
                                    </figure>
                                    <div class="details">
                                        <div class="detail">
                                            <div class="time">December 31, 2016</div>
                                            <div class="category"><a href="category.html">Sport</a></div>
                                        </div>
                                        <h1><a href="#">Donec congue turpis vitae mauris</a></h1>
                                        <p>
                                            Donec congue turpis vitae mauris condimentum luctus. Ut dictum neque at
                                            egestas convallis.
                                        </p>
                                    </div>
                                </div>
                            </article>
                            <div class="line"></div>
                            <article class="article-mini">
                                <div class="inner">
                                    <figure>
                                        <a href="#">
                                            <img src="{{asset('assets/images/news/img05.jpg')}}" alt="Sample Article">
                                        </a>
                                    </figure>
                                    <div class="padding">
                                        <h1><a href="#">Duis aute irure dolor in reprehenderit in voluptate velit</a>
                                        </h1>
                                        <div class="detail">
                                            <div class="category"><a href="category.html">Lifestyle</a></div>
                                            <div class="time">December 22, 2016</div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="article-mini">
                                <div class="inner">
                                    <figure>
                                        <a href="#">
                                            <img src="{{asset('assets/images/news/img02.jpg')}}" alt="Sample Article">
                                        </a>
                                    </figure>
                                    <div class="padding">
                                        <h1><a href="#">Fusce ullamcorper elit at felis cursus suscipit</a></h1>
                                        <div class="detail">
                                            <div class="category"><a href="category.html">Travel</a></div>
                                            <div class="time">December 21, 2016</div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="article-mini">
                                <div class="inner">
                                    <figure>
                                        <a href="#">
                                            <img src="{{asset('assets/images/news/img10.jpg')}}" alt="Sample Article">
                                        </a>
                                    </figure>
                                    <div class="padding">
                                        <h1><a href="#">Duis aute irure dolor in reprehenderit in voluptate velit</a>
                                        </h1>
                                        <div class="detail">
                                            <div class="category"><a href="category.html">Healthy</a></div>
                                            <div class="time">December 20, 2016</div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <!-- komentar -->
                        <div class="tab-pane comments" id="comments">
                            <div class="comment-list sm">
                                {{-- komentar --}}
                                <div class="item">
                                    @foreach ($hasil as $li)
                                    <div class="user">
                                        <figure>
                                            <img src="{{asset('assets/images/images2.jpg')}}">
                                        </figure>
                                        <div class="details">
                                            <h4 class="name">{{ $li->name}}</h4>
                                            <span class="time">{{ $li->created_at->diffForHumans() }}</span>
                                            <div class="description">
                                                <p>{{ $li->komentar}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            </ul>
                        </div>
                </aside>
                <aside id="sponsored">
                    <h1 class="aside-title">Sponsored</h1>
                    <div class="aside-body">
                        <ul class="sponsored">
                            <li>
                                <a href="#">
                                    <img src="{{asset('assets/images/sponsored.png')}}" alt="Sponsored">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="{{asset('assets/images/sponsored.png')}}" alt="Sponsored">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="{{asset('assets/images/sponsored.png')}}" alt="Sponsored">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="{{asset('assets/images/sponsored.png')}}" alt="Sponsored">
                                </a>
                            </li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>

<section class="best-of-the-week">
    <div class="container">
        <h1>
            <div class="text">Best Of The Week</div>
            <div class="carousel-nav" id="best-of-the-week-nav">
                <div class="prev">
                    <i class="ion-ios-arrow-left"></i>
                </div>
                <div class="next">
                    <i class="ion-ios-arrow-right"></i>
                </div>
            </div>
        </h1>
        <div class="owl-carousel owl-theme carousel-1">
            @foreach($popular as $row)
            <article class="article">
                <div class="inner">
                    <figure>
                        <a href="{{ route('single', $row->slug) }}">
                            <img src="{{asset('storage/berita/' . $row->foto)}}" alt="Sample Article">
                        </a>
                    </figure>
                    <div class="padding">
                        <div class="detail">
                            <div class="time">{{ $row->created_at->format('F d, Y') }}</div>
                            <div class="category"><a href="category.html">{{ $row->beritaCategory->category }}</a></div>
                        </div>
                        <h2><a href="#">{{ Str::Limit($row->tittle,45) }}</a></h2>
                    </div>
                </div>
            </article>
            @endforeach
        </div>
    </div>
</section>
@endsection
