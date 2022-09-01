<?php

namespace App\Http\Controllers;

use DOMDocument;
use App\Models\Need;
use App\Models\User;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
	public function home()
	{
		return view('home', [
			'route' => 'Home'
		]);
	}

	public function artikel()
	{
		$feed_url = "https://www.voaindonesia.com/api/ztgq_ei_ov";
		$object = new DOMDocument();
		$object->load($feed_url);
		$content = $object->getElementsByTagName("item");
		return view('artikel', [
			'route' => 'Artikel',
			'content' => $content
		]);
	}

	public function faq()
	{
		return view('faq', [
			'route' => 'FAQ'
		]);
	}

	public function tentang(User $user)
	{
		return view('tentang', [
			'route' => 'Tentang'
		]);
	}

	public function login()
	{
		return view('login', [
			'route' => 'Login'
		]);
	}

	public function signup()
	{
		return view('signup', [
			'route' => 'Sign Up'
		]);
	}

	public function events(Event $events)
	{
		return view('events', [
			'route' => 'Acara',
			'events' => $events->orderByDesc('date')->paginate(9)
		]);
	}

	public function event(Event $events)
	{
		return view('event', [
			'route' => 'Acara',
			'event' => $events
		]);
	}

	public function needs(Need $needs)
	{
		return view('needs', [
			'route' => 'Permohonan',
			'needs' => $needs->orderByDesc('date')->filter()->paginate(10)->withQueryString()
		]);
	}

	public function need(Need $needs)
	{
		return view('need', [
			'route' => 'Permohonan',
			'need' => $needs
		]);
	}

	public function permohonan()
	{
		return view('permohonan', [
			'route' => 'Permohonan'
		]);
	}

	public function report(User $user)
	{
		return view('report', [
			'report' => $user->find(Auth::user()->id),
			'route' => 'Hasil Tes Darah'
		]);
	}
}
