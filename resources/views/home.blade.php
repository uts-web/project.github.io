@extends('layout.master')
@section('content')
  <section id="banner" data-video="images/home1">
					<div class="inner">
						<header>
							<h1>This is ASPSHOP</h1>
							<p>Cara tercepat dan termudah untuk pembelian kredit permainan</p>
						</header>
						<a href="#main" class="button big alt scrolly">Click Untuk Mengetahui Lebih</a>
					</div>

				</section>
  <!-- Main -->
  <div id="main">

<!-- One -->

  <section class="wrapper style1">
    <div class="inner">
      <header class="align-center">
        <h2>FAVOURITE GAMES</h2>
        <p>Silahkan Pilih Untuk Melanjutkan Top-Up</p>
      </header>

      <!-- 2 Column Video Section -->
      
      <div class="flex-container">
        <div class="flex flex-2 flex-item-left">
        @foreach($kategori as $kat)
          <div class="video col">
            <div class="image fit">
              <img src="{{ $kat->featured_image }}" alt="" />
              <div class="arrow">
              </div>
            </div>
            <p class="caption">
            {{ $kat->title }}
            </p>
            <a href="{{ '/kategori/'.$kat->id }}" class="link"><span>Click Me</span></a>
          </div>
        @endforeach
        </div>
      </div>
      
    </div>
  </section>
       
 

<!-- Two -->
  <section class="wrapper style2">
    <div class="inner">
      <header>
        <h2>Kategori</h2>
        <p>Game Mobile And PC</p>
      </header>
      <!-- Tabbed Video Section -->
        <div class="flex flex-tabs">
          <ul class="tab-list">
            <li><a href="#" data-tab="tab-1" class="active">PC Games</a></li>
            <li><a href="#" data-tab="tab-2">Mobile Games</a></li>
          </ul>
          <div class="tabs">

            <!-- Tab 1 -->
            <div class="tab tab-1 flex right flex-3 active">
            @foreach($kategoritab1 as $kat)
                <!-- Video Thumbnail -->
                  <div class="video col">
                    <div class="image fit">
                      <img src="{{ $kat->featured_image }}" alt="" />
                      <div class="arrow">
                      </div>
                    </div>
                    <a href="{{ '/kategori/'.$kat->id }}" class="link"><span>Click Me</span></a>
                  </div>
              @endforeach
            </div>
            

            <!-- Tab 2 -->
              <div class="tab tab-2 flex flex-3">
              @foreach($kategoritab2 as $kat)
                <!-- Video Thumbnail -->
                  <div class="video col">
                    <div class="image fit">
                      <img src="{{ $kat->featured_image }}" alt="" />
                      <div class="arrow">
                      </div>
                    </div>
                    <a href="{{ '/kategori/'.$kat->id }}" class="link"><span>Click Me</span></a>
                  </div>
                  @endforeach
              </div>
          </div>
        </div>
    </div>
  </section>

<!-- Three -->
  <section class="wrapper ">
    <div class="inner">
      <header class="align-center">
        <h2>Mobile Games</h2>
        <p>Silahkan Pilih Untuk Melanjutkan Top-Up</p>
      </header>

      <!-- 3 Column Video Section -->
      <div class="flex-container">
        <div class="flex flex-3 flex-item-left">
        @foreach($kategoripc as $kat)
          <div class="video col">
            <div class="image fit">
              <img src="{{ $kat->featured_image }}" alt="" />
              <div class="arrow">
                <div class="icon fa-play"></div>
              </div>
            </div>
            <p class="caption">
            {{ $kat->title }}
            </p>
            <a href="{{ '/kategori/'.$kat->id }}" class="link"><span>Click Me</span></a>
          </div>
        @endforeach
        </div>
      </div>
    </div>
  </section>
  @endsection