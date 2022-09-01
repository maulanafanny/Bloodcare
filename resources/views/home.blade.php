@extends('master')

@section('konten')
{{-- Search --}}
<div class="pb-3 pt-3 bg-danger" style="margin-top: -9px; text-align: center; float: left; width: 100%">
	<div class="container">
		<form method="GET" action="/needs" class="row justify-content-center mx-0">
			<div class="col-md-auto pr-0">
				<select name="search-blood" class="form-control form-control-md pl-3 search-blood">
					<option value="">Semua Golongan</option>
					<option>A</option>
					<option>B</option>
					<option>O</option>
					<option>AB</option>
				</select>
			</div>
			<div class="col-md-auto">
				<i class="bi bi-geo-alt-fill inpt-icon mt-2 ml-3"></i>
				<input class="inpt pt-3 pb-3" name="search-location" type="search" placeholder="Masukkan lokasi yang ingin dicari">
				<input type="submit" class="btn btn-dark sbmt pt-3 pb-3" value="Cari">
			</div>
		</form>
	</div>
</div>
<div style="clear: both;"></div>

{{-- Carousel --}}
<div id="carouselControl" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img class="d-block w-100" src="img/tes1.jpg" alt="First slide">
			<div class="carousel-caption d-none d-md-block" style="text-shadow: 2px 2px 4px #000000;">
				<h5>Cari pendonor darah dari Bloodcare</h5>
				<p>Kami siap membantu jika stok darah yang dibutuhkan pada PMI atau rumah sakit kurang atau kosong</p>
			</div>
		</div>

		<div class="carousel-item">
			<img class="d-block w-100" src="img/tes2.jpg" alt="Second slide">
			<div class="carousel-caption d-none d-md-block" style="text-shadow: 2px 2px 4px #000000;">
				<h5>Kolaborasi Bloodcare dengan komunitasmu</h5>
				<p>Kami siap untuk berkolaborasi dengan berbagai komunitas</p>
			</div>
		</div>

		<div class="carousel-item">
			<img class="d-block w-100" src="img/tes3.jpg" alt="Third slide">
			<div class="carousel-caption d-none d-md-block" style="text-shadow: 2px 2px 4px #000000;">
				<h5>Ingin melakukan donor darah?</h5>
				<p>Anda bisa melihat jadwal donor darah atau mencari permintaan donor pada website ini</p>
			</div>
		</div>
	</div>

	<a class="carousel-control-prev" href="#carouselControl" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselControl" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>

<br>
<br>
<br>

{{-- Greetings --}}
<div class="container text-center" style="width: 50%">
	<h3 class="pb-1" style="font-size: 36px">Apa itu Bloodcare?</h3>
	<p style="font-size: 17px">
		Bloodcare membantu untuk menjadi penghubung antara orang yang membutuhkan 
		transfusi darah, dengan para pendonor darah sukarela. Kami tidak memungut 
		biaya untuk itu, dan para pendonor darah sukarela juga ikhlas membantu.
	</p>
</div>

<br>
<br>

<!-- Cards -->
<div class="container-fluid">
	<div class="card-deck justify-content-center">
		<a class="card shadow mb-5 big" style="min-width: 253px; max-width: 253px" href="/events">
			<img src="img/why-event.png" style="background-color: #f1f3f298;" class="card-img-top pt-5 pb-5">
			<div class="card-body">
				<p class="text-center">Temukan jadwal donor darah terdekat di Unit Transfusi Darah atau mobil unit PMI</p>
			</div>
		</a>
		<a class="card shadow mb-5 big" style="min-width: 253px; max-width: 253px" href="/artikel">
			<img src="img/why-info.png" style="background-color: #f1f3f298;" class="card-img-top pt-5 pb-5">
			<div class="card-body">
				<p class="text-center">Ketahui data donor darah beserta informasi seputar donor darah dan kesehatan terkini</p>
			</div>
		</a>
		<a class="card shadow mb-5 big" style="min-width: 253px; max-width: 253px" href="/report">
			<img src="img/why-blood.png" style="background-color: #f1f3f298;" class="card-img-top pt-5 pb-5">
			<div class="card-body">
				<p class="text-center">Pantau hasil tes darah* seperti tensi, hemoglobin dan sebagainya, agar pendonor lebih sehat</p>
			</div>
		</a>
		<a class="card shadow mb-5 big" style="min-width: 253px; max-width: 253px" href="/needs">
			<img src="img/why-donate.png" style="background-color: #f1f3f298;" class="card-img-top pt-5 pb-5">
			<div class="card-body">
				<p class="text-center">Kita juga bisa bantu program kemanusiaan lainnya dari PMI dengan donasi dana secara online</p>
			</div>
		</a>
	</div>
</div>

<br>
<br>
<br>

<!-- Chart library -->
<script src="https://unpkg.com/chart.js@2.9.3/dist/Chart.min.js"></script>
<script src="https://unpkg.com/@chartisan/chartjs@^2.1.0/dist/chartisan_chartjs.umd.js"></script>

<!-- Chart's container -->
<div class="container" id="chart" style="height: 300px;"></div>
<script>
	const chart = new Chartisan({
		el: '#chart',
		url: "@chart('blood_supply')",
		hooks: new ChartisanHooks()
			.title('Jumlah Stok Darah')
			.responsive(true)
			.colors(['#dc3545'])
			.legend({ position: 'bottom' }),
	})
</script>

<br>
<br>
<br>

<!-- Accordion FAQ -->
<script type="text/javascript">
	$(document).ready(function () {
		$(".accordion p").hide();
		$(".accordion h3").click(function () {
			$(this)
			.next("p")
			.slideToggle("400")
			.siblings("p:visible")
			.slideUp("400");
			$(this).toggleClass("act");
			$(this).siblings("h3").removeClass("act");
		});
	});
</script>

<div class="container">
	<div class="col-lg-8 mx-auto">
		<div class="row-lg-8">
			<h2 style="font-weight: bold; margin-bottom: 30px">FAQ's</h2>
			<div class="accordion" style="margin: auto; margin-top: 20px">
				<h3 class="shadow mb-2 accord">Apakah saya memenuhi kriteria untuk donor darah?</h3>
				<p class="panel">Lorem ipsum dolor sit amet.</p>
				<br>
				<h3 class="shadow mb-1 accord">Mengapa kita perlu donor darah?</h3>
				<p class="panel">
					<b>Kebutuhan yang besar</b> : Setiap delapan detik, ada satu orang yang membutuhkan transfusi darah di Indonesia.<br>
					<b>Pemeriksaan kesehatan gratis</b> : Sebelum mendonorkan darah, petugas akan memeriksa suhu tubuh, denyut nadi, 
					tekanan darah dan kadar hemoglobin Anda.<br>
					<b>Tidak menyakitkan</b> : Ya Anda memang akan merasa sakit. Namun, rasa sakit itu tidak seberapa dan akan hilang dengan cepat.
				</p>
				<br>
				<h3 class="shadow mb-2 accord">Apa yang harus kita persiapkan sebelum donor darah?</h3>
				<p class="panel">
					Kita memerlukan tidur yang nyenyak di malam sebelum mendonor, sarapan pagi atau makan siang sebelum mendonor. 
					Banyak minum seperti jus, susu sebelum mendonor. Rileks saat mendonor, dan banyak minum setelah mendonor. 
					Kita bisa melanjutkan kegiatan setelah mendonor, asal hindari aktivitas fisik yang berat.
				</p>
				<br>
				<h3 class="shadow mb-2 accord">Kenapa ketika membutuhkan darah prosesnya lama?</h3>
				<p class="panel">
					Proses permintaan darah transfusi memerlukan proses "Crossmatch" 
					yaitu uji serasi silang antara darah pasien dengan darah donor yang 
					diberikan. Crossmatch ini bertujuan untuk melihat apakah darah pasien 
					sesuai dengan darah donor sehingga tidak ada efek yang merugikan pasien 
					transfusi darah tersebut. Secara keseluruhan darah pendonor baru siap 
					diberikan kepada seseorang itu butuh waktu paling lama sekitar 3 jam
				</p>
			</div>
			<div class="mx-auto pt-4" style="text-align: center;">
				<a class="shadow mb-2 button btn" href="{{ url('/faq') }}">Lihat Selengkapnya</a>
			</div>
		</div>
	</div>
</div>

@endsection