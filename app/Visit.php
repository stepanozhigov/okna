<? 
namespace App;

class Visit {
	public function __construct () {
		$visits = [];
		$visits = session('visits');

		$referer = $_SERVER['HTTP_REFERER'] ?? '';
		if (strpos($referer, 'okna-ts.ru') !== false)
		{
			$referer = "";
		} 

		$visits[] = [
				'referer'	=>	$referer,
				'page'	=>	url(request()->url()),
				'utm_source'	=>		request()->get('utm_source'),
				'utm_medium'	=>		request()->get('utm_medium'),
				'utm_campaign'	=>		request()->get('utm_campaign'),
				'utm_term'	=>	request()->get('utm_term'),
				'time'	=>	date('Y-m-d H:i:s')
		];
		session(['visits' => $visits]);
		
		//$data = json_encode(session()->all());
		$data = json_encode(session('visits'));
		echo "<script>console.log({$data})</script>";
		//var_dump(session()->all());
	}
}