<?php

declare(strict_types=1);

namespace App\Charts;

use Chartisan\PHP\Chartisan;
use Illuminate\Http\Request;
use ConsoleTVs\Charts\BaseChart;

class BloodSupply extends BaseChart
{
	/**
	 * Handles the HTTP request for the given chart.
	 * It must always return an instance of Chartisan
	 * and never a string or an array.
	 */
	public function handler(Request $request): Chartisan
	{
		$json = json_decode(file_get_contents('http://localhost:3000/api/bloodstocks'), true);
		return Chartisan::build()
			->labels(['A', 'B', 'O', 'AB'])
			->dataset('Stok Darah', [
				$json['response'][0]['stocks'],
				$json['response'][1]['stocks'],
				$json['response'][2]['stocks'],
				$json['response'][3]['stocks']
			]);
	}
}
