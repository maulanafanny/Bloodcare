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

	<div class="card-columns">
		@foreach ($content as $col)

			<div class="card shadow mb-4">
				<img src="{{ $col->getElementsByTagName("enclosure")->item(0)->attributes["url"]->nodeValue }}" class="card-img-top" alt="...">
				<div class="card-body">
					<p class="mb-2"><small class="text-danger">{{ date('l, d F Y', strtotime($col->getElementsByTagName("pubDate")->item(0)->nodeValue)) }}</small></p>
					<h6 class="card-title font-weight-bold"><a class="article-link" href="{{ $col->getElementsByTagName("link")->item(0)->nodeValue }}">{{ $col->getElementsByTagName("title")->item(0)->nodeValue }}</a></h6>
					<div class="card-text mb-2">
						<p class="article-desc mb-2"><small class="text-muted">{{ $col->getElementsByTagName("description")->item(0)->nodeValue }}</small></p>
						<a class="article-link" href="{{ $col->getElementsByTagName("link")->item(0)->nodeValue }}"><small class="font-weight-bold">Read More »</small></a>
					</div>
			
					@php $i = 0 @endphp
					@while (!empty($col->getElementsByTagName("category")->item($i)->nodeValue))
						<span class="badge badge-danger" style="margin-right: 8px">{{ $col->getElementsByTagName("category")->item($i)->nodeValue }}</span>
						@php $i++; @endphp
					@endwhile
			
					<br>
				</div>
			</div>

		@endforeach
	</div>

</div>

@endsection