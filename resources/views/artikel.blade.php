@extends('master')

@section('konten')

<div class="container-fluid mb-5 bg-danger" style="margin-top: -9px">
    <div class="container pl-1">
        <h3 class="mb-0 py-5 text-light"><strong>Artikel Kesehatan Terkini</strong></h3>
    </div>
</div>

<div class="container">

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