@extends('master')

@section('konten')

@php
	$feed_url = "https://www.voaindonesia.com/api/ztgq_ei_ov";
	$object = new DOMDocument();
	$object->load($feed_url);
	$content = $object->getElementsByTagName("item");
@endphp

<br>

<div class="container">
	<br />
	<h2 style="font-family: helvetica; font-weight: bold; text-align: center">Artikel Kesehatan Terkini</h2>
	<br>
	<br>

	@foreach ($content as $row)
	<div class="card shadow">
		<div class="card-body p-4">
			<h3 class="text-body"><a class="text-body" href="{{ $row->getElementsByTagName("link")->item(0)->nodeValue }}">{{ $row->getElementsByTagName("title")->item(0)->nodeValue }}</a></h3>
			<hr>
			<div class="row">
				<div class="col-md-3">
					<p>{{ date('l, d F Y', strtotime($row->getElementsByTagName("pubDate")->item(0)->nodeValue)) }}</p>
					<br>
					<img src="{{ $row->getElementsByTagName("enclosure")->item(0)->attributes["url"]->nodeValue }}" class="img-responsive img-thumbnail mb-5">
				</div>
				<div class="col-md-9">
					<p>{{ $row->getElementsByTagName("description")->item(0)->nodeValue }}</p>
				</div>
			</div>
	
			@php $i = 0 @endphp
			@while (!empty($row->getElementsByTagName("category")->item($i)->nodeValue))
				<span class="badge badge-danger" style="margin-right: 8px">{{ $row->getElementsByTagName("category")->item($i)->nodeValue }}</span>
				@php $i++; @endphp
			@endwhile
	
			<br>
		</div>
	</div>
		<br>
		<br>
	@endforeach

</div>

@endsection