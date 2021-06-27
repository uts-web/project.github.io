@extends('layouts.master')
@section('content')
<!-- Main -->
<div id="main">

<!-- One -->
	<section class="wrapper style1">
		<div class="inner">
			<header class="align-center">
			<h2>{{ $kategoris->title }}</h2>
			<p>{{ $kategoris->genre }}</p>
			</header>
			<div class="video">
				<div class="video-wrapper">
					<iframe width="560" height="315" src="{{ $kategoris -> featured_trailer }}" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
			<p>Top up {{ $kategoris->title }} Points hanya dalam hitungan detik! Cukup masukan ID Anda, pilih jumlah Points yang Anda inginkan,</p> 
		<p>selesaikan pembayaran, dan Poin akan secara langsung ditambahkan ke akun Anda.</p>
		<p>Bayarlah menggunakan OVO, LinkAja, Bank Transfer, Indomaret, Alfamart dan Kartu Kredit.</p> 
		<p>Tanpa perlu kartu kredit, registrasi ataupun log-in.Unduh dan mainkan {{ $kategoris->title }} sekarang!</p>
		</div>
	</section>
	

<!-- Three -->
	<section class="wrapper style2">
	 	<div class="inner align-middle">
			<header class="align-center">
				<h2>Transaksi Top Up</h2>
			</header>
			<!-- 3 Column Video Section -->
			<form method="post" action="/updateid/">
				<div class="row uniform">
					<div class="flex-container">
					@csrf
					<div class="box" style="width:800px">
						<div class="box">
						<div class="12u$">
							<h3>Jumlah Diamond</h3>
							<div class="select-wrapper">
								<select required='required' name="diamond" >
									<option value="">- Category Diamond -</option>
									@foreach($topups as $top)	
									<div class="4u 12u$(small)" style="text-align:middle">
										<option for="{{$top->id}}" style="color: #000000" value="{{$top->id}}" @if(!empty($users['diamond']) && $users['diamond'] == $top->id) selected @endif>{{$top->jumlah_diamond}}</option>
									</div>		
									@endforeach									
								</select>
							</div><br>							
						</div>
						</div>
						</br>
						<div class="box">
						<div class="12u$">
						<h3>Metode Pembayaran</h3>
							<div class="select-wrapper ">					
								<select required='required' name="payment" >
									<option value="">- Category Pembayaran-</option>
									@foreach($payments as $pay)	
									<div class="4u 12u$(small)" style="text-align:middle">
										<option for="{{$pay->id}}"  style="color: #000000" value="{{$pay->id}}" @if(!empty($users['payment']) && $users['payment'] == $pay->id) selected @endif >{{$pay->metode_pembayaran}}</option>
									</div>	
									@endforeach
								</select>
							</div><br>
							<h6><i>Belum ada metode pembayaran favoritmu disini? Berikan kami saran!</i></h6>
						</div>
						</div>
						</br>
						<div class="box">
						<div class="12u$">
							<h2>Masukkan ID Game</h2>
							<div class="select ">
								<div class="12u$">
									<input type="text" required='required' name="id_game"  value="{{Auth::user()->id_game}}">
								</div>
							</div>
							<br>
							<h6><i>Untuk menemukan ID Anda, ketuk pada ikon karakter. User ID tercantum di bawah nama karakter Anda. Contoh: "5363266446"</i></h6>
						</div>
						</div>
						<br>
						<div class="12u$" >
							<ul class="actions">
								<li><input type="submit" value="Send Message" /></li>
							</ul>
						</div>	
					</div>								
						
						
						<button type="button" class="btn btn-info btn-lg align-center" data-toggle="modal" data-target="#myModal">Konfirmasi Transaksi</button>
					</div>
				</div>
			</form>		
	 	</div>
	</section>

<!-- Footer -->
<footer id="footer" style="background: #343a40; color: #ffffff">
	 <!-- Comments Form -->
 <div class="card my-4" style="background: #343a40; color: #ffffff">
          <h5 class="card-header">Leave a Comment:</h5>
          <div class="card-body">
            <form>
              <div class="form-group">
                <textarea class="form-control" rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
	<!-- Single Comment -->
	<div class="box">
		@foreach($komentars as $kom)
		<div class="media mb-4">
		<blockquote>
				<img class="d-flex mr-3 rounded-circle" src="{{$kom->featured_image}}" style="max-width: 40px; ">
				<div class="media-body">
					<h5 class="mt-0">{{$kom->name}}</h5>
					{{$kom->content}}
				</div>
				</div>
				</blockquote>	
		@endforeach
		</div>
		</div>
				<div class="copyright align-center" style="background: #343a40; color: #ffffff">
				
					<ul class="icons">
						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon fa-snapchat"><span class="label">Snapchat</span></a></li>
					</ul>
					Copyright &copy; 2021, All rights reserved.<a href="http://re-creators.herokuapp.com/">re - Creators</a>
				</div>
			
</footer>

			<!-- Modal -->
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title" id="exampleModalLongTitle">Konfirmasi Transaksi</h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
<div class="table-wrapper">
	<table>
		<tbody>
			<tr>
				<td>Nama</td>
				<td>{{Auth::user()->name}}</td>
			</tr>
			<tr>
				<td>Email</td>
				<td>{{Auth::user()->email}}</td>
			</tr>
			<tr>
				<td>ID Game</td>
				<td>{{Auth::user()->id_game}}</td>
			</tr>
			<tr>
				<td>Pilihan Game</td>
				<td>{{ $kategoris->title }}</td>
			</tr>
			<tr id="{{$top->id}}" name="id">
				<td>Jumlah Topup</td>
				<td>{{ Auth::user()->diamond}}</td>
			</tr>
			<tr>
				<td>Metode Pembyaran</td>
				<td >{{ Auth::user()->payment }}</td>
			</tr>
			<tr>
				<td>Total Harga</td>
				
			</tr>
		</tbody>
	</table>
</div>

					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary">Save changes</button>
					</div>
					</div>
				</div>
			</div>
@endsection