<?php

namespace App\Models;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Handler\CurlHandler;
use GuzzleHttp\Client as Client;
use Psr\Http\Message\RequestInterface;

class ForexFactory
{	
	private $endpointCalender 	= 'https://www.forexfactory.com/flex.php?do=ajax&contentType=Content&flex=calendar_mainCal';
 
	public function getCalender(){
		$client = new Client();
		$response = $client->request('GET', $this->endpointCalender);
		return $response->getBody()->getContents();
		// return $this->coba();
	}
	
	public function getCalenderDetail($id){
		$url = $this->endpointCalender.'&details='.$id;
		$client = new Client();
		$response = $client->request('GET', $url);
		return $response->getBody()->getContents();
		// return $this->coba();
	}
	
	
	public function getNews(){
		// $client = new Client();
		// $response = $client->request('POST', "https://www.forexfactory.com/flex.php?more=0&s=&s=&securitytoken=guest&do=saveoptions&setdefault=no&ignoreinput=no&flex%5BNews_newsLeft1%5D%5BidSuffix%5D=&flex%5BNews_newsLeft1%5D%5B_flexForm_%5D=flexForm&flex%5BNews_newsLeft1%5D%5BmodelData%5D=YTo0OntzOjExOiJwYV9jb250cm9scyI7czoxNjoibmV3c3xOZXdzTGVmdE9uZSI7czoxNjoicGFfaW5qZWN0cmV2ZXJzZSI7YjowO3M6MTY6InBhX2hhcmRpbmplY3Rpb24iO2I6MDtzOjExOiJwYV9pbmplY3RhdCI7YjowO30%3D&flex%5BNews_newsLeft1%5D%5Bnews%5D=all&flex%5BNews_newsLeft1%5D%5Bformat%5D=headline&flex%5BNews_newsLeft1%5D%5Bitems%5D=15&flex%5BNews_newsLeft1%5D%5Bsort%5D=latest&flex%5BNews_newsLeft1%5D%5Bmirs%5D=0");
		// return $response->getBody()->getContents();
		
		
			 $ch = curl_init(); 

		// set url 
		curl_setopt($ch, CURLOPT_URL, "https://www.forexfactory.com/flex.php?more=0&s=&s=&securitytoken=guest&do=saveoptions&setdefault=no&ignoreinput=no&flex[News_newsLeft1][idSuffix]=&flex[News_newsLeft1][_flexForm_]=flexForm&flex[News_newsLeft1][modelData]=YTo0OntzOjExOiJwYV9jb250cm9scyI7czoxNjoibmV3c3xOZXdzTGVmdE9uZSI7czoxNjoicGFfaW5qZWN0cmV2ZXJzZSI7YjowO3M6MTY6InBhX2hhcmRpbmplY3Rpb24iO2I6MDtzOjExOiJwYV9pbmplY3RhdCI7YjowO30%3D&flex[News_newsLeft1][news]=all&flex[News_newsLeft1][format]=headline&flex[News_newsLeft1][items]=15&flex[News_newsLeft1][sort]=latest&flex[News_newsLeft1][mirs]=0");

		// return the transfer as a string 
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

		// $output contains the output string 
		$output = curl_exec($ch); 

		// tutup curl 
		curl_close($ch);      
		return $output;
	}
	
	public function getDetailNews($id){
		// $client = new Client();
		$url = 'https://www.forexfactory.com/news/'.$id;
		// $response = $client->request('GET', $url);
		// return $response->getBody()->getContents();
		
				
			 $ch = curl_init(); 

		// set url 
		curl_setopt($ch, CURLOPT_URL, $url);

		// return the transfer as a string 
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

		// $output contains the output string 
		$output = curl_exec($ch); 

		// tutup curl 
		curl_close($ch);      
		return $output;
	}
	
}
