@extends('master')

@section('konten')
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
<br>
<br>
<div class="container">
	<h2 style="font-family: helvetica; font-weight: bold; text-align: center">Pelajari informasi umum mengenai donor darah</h2>
	<p style="text-align: center; margin-bottom: 30px">Informasi ini mencakup pertanyaan yang sering diajukan, serta jawaban ringkas dari pertanyaan tersebut</p>
	<div class="accordion" style="width: 75%; margin: auto; margin-top: 20px">
		<h3 class="shadow mb-2 accord">Apa itu Bloodcare?</h3>
		<p class="panel">Bloodcare adalah startup yang bergerak berdasarkan misi sosial dan kemanusiaan, 
			salah satunya dengan membangun sebuah aplikasi digital yang membantu masyarakat untuk membangun 
			gaya hidup sehat dengan donor darah sukarela secara rutin.</p>
		<br>
		<h3 class="shadow mb-2 accord">Apakah Bloodcare bagian dari Palang Merah Indonesia (PMI)?</h3>
		<p class="panel">Bukan. Bloodcare bergerak secara independen dengan berkolaborasi dan mendukung program 
			Palang Merah Indonesia (PMI) untuk menyelesaikan permasalahan kekurangan darah di Indonesia. Pelajari 
			selengkapnya pada halaman Tentang Bloodcare.</p>
		<br>
		<h3 class="shadow mb-2 accord">Apakah Bloodcare dapat membantu mencarikan pendonor darah bagi keluarga pasien yang membutuhkan?</h3>
		<p class="panel">Bloodcare dapat membantu dengan membagikan informasi kebutuhan darah kepada para 
			pendonor sukarela yang terdaftar di Bloodcare serta rekan-rekan di komunitas donor darah, namun 
			Bloodcare tidak dapat membagikan kontak pendonor kepada pasien karena termasuk dalam data yang 
			terlindungi sesuai yang tertera pada halaman kebijakan layanan Bloodcare. Bloodcare tidak dapat 
			menjamin 100% pasti bahwa selalu ada pendonor sukarela yang bersedia, terutama di saat kenaikan 
			kebutuhan darah namun pendonor yang tidak banyak, seperti saat pandemi COVID-19, bulan puasa, 
			akhir tahun hingga awal tahun dan kondisi lainnya.</p>
		<br>
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
</div>
@endsection