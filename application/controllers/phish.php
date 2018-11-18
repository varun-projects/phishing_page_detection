<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Phish extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html




	 */


    public function __construct() {
        parent::__construct();
       //  $GLOBALS['urls'] =$this->input->post('url') ;
         $this->load->library('session');

}







	public function index()
	{
      $this->load->view('url_enter');
//		$this->url() ;
}


/*
public  function curl(){


//$url = $GLOBALS['urls'];
		//	$url=$this->input->post('url') ;

//$this->load->view('url_enter');


    // $url = $this->session->userdata('user_id');

 //  echo $url ;




$request_url='http://rdpschool.com';
 $ch = curl_init();
  $mh = curl_init();
  		curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:30.0) Gecko/20100101 Firefox/30.0');
        //curl_setopt($ch, CURLOPT_URL, $request_url);		// The url to which these parameters will be posted
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);		// We want to get the respone
  //curl_setopt($ch, CURLOPT_POST, true);				// The submission type is post
     //   curletopt($ch, CURLOPT_POSTFIELDS, $post_params);	// The post array, containing all the parameters
     //  curl_setopt($ch,CURLOPT_HEADER ,true);
       // curl_setopt($ch, CURLOPT_HEADER, true);	                      

   //     curl_setopt($ch, CURLOPT_CERTINFO, true);

           //     curl_setopt($ch, CURLINFO_HEADER_OUT, true);  919461219907 substr_count(haystack, needle)  ygn ethical hacker group

 //curl_setopt($ch, CURLOPT_COOKIE, true);
 $mh =0;
    //$my = curl_exec($mh) ;
        $result = curl_exec($ch);
		 curl_close($ch);  
 
  //curl_close($mh);
  $result =str_replace('<', '&lt;', $result);
    $result =str_replace('>', '&gt;', $result);



//echo $result ;








return $result ;


}

 */ ///   first   function






  public function url()

  {
  //set to post  field ;
			//$this->load->view('url_enter');
    $this->session->sess_destroy();
			$url1=$this->input->post('url') ;
      $substr=substr($url1, 0 ,4);

      if($substr =='http')
      {  
            $url =$url1 ;

      }else{
          $url='http://'.$url1;
      }

          //  $url=$this->input->post('url') ;

  //echo $url ;

  $this->session->set_userdata('user_id',$url);
  echo $url ;
 $a = $this->session->all_userdata();
//    echo "aaaaaaaa";
//    print_r($a);
//    echo "bbbb";
                            


$request_url='http://rdpschool.com';


$c = parse_url($url);

$C =$c['host'];

echo $C  ."host checking";
echo"<br>";

if ( $C == "www.facebook.com")
{

  $result =file_get_contents("http://facebook.com");


 $result =str_replace('<', '&lt;', $result);
    $result =str_replace('>', '&gt;', $result);
echo $result ;

echo "with love";

}






else{



  //echo $url ;
 $ch = curl_init();
  $mh = curl_init();
//      curl_setopt($ch, CURLOPT_URL, $request_url);
        //curl_setopt($ch, CURLOPT_URL, $request_url);    // The url to which these parameters will be posted
 curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:30.0) Gecko/20100101 Firefox/30.0');
 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            // We want to get the respone
  //curl_setopt($ch, CURLOPT_POST, true);       // The submission type is post
     //   curletopt($ch, CURLOPT_POSTFIELDS, $post_params); // The post array, containing all the parameters
     //  curl_setopt($ch,CURLOPT_HEADER ,true);
       // curl_setopt($ch, CURLOPT_HEADER, true);                       

   //     curl_setopt($ch, CURLOPT_CERTINFO, true);

           //     curl_setopt($ch, CURLINFO_HEADER_OUT, true);  919461219907 substr_count(haystack, needle)  ygn ethical hacker group

 //curl_setopt($ch, CURLOPT_COOKIE, true);
    //$my = curl_exec($mh) ;
        $result = curl_exec($ch);
     curl_close($ch);  
 
  //curl_close($mh);
  $result =str_replace('<', '&lt;', $result);
    $result =str_replace('>', '&gt;', $result);


}























//echo $result ;

///////////////////////////////////////////////////////////////////

$y ="whats is  so <title> grrat" ;
$v = ":: Rukmini Devi Public School, Pitam Pura ::";
$p = "title";
$c= "/title";
$a = strpos($result,  $p);
$b = strpos($result,  $c);

echo $a."<br>";
echo $b."<br>";   
//echo strlen( "title>:: Rukmini Devi Public School, Pitam Pura ::</")."<br>";          substr_count(haystack, needle)

$r=$a +5;
$l=$b -4 ;
$len=$l-$r;

$o =substr($result,$r +4 , $len -4);
echo strlen($o);
echo "<br>";

echo $o ;
echo "<br><br><br><br><br><br><br><br><br>";

//return $o ;
$this->google($o);

  }
//for   getting  first  url of the  google request 

public function google($g){

  //$google_url=$this->url();
  $google_url =$g;
  echo $google_url ;
//http://ajax.googleapis.com/ajax/services/search/web?v=1.0&q=
//$google_url = ">:: Rukmini Devi Public School, Pitam Pura ::" ;
//$google_url = url();

$google_url = urlencode($google_url);

$e ="http://www.google.com/search?q=".$google_url."&start=0" ;
echo $e ;
echo "<br> " ;
$request_url='http://rdpschool.com';
$c = curl_init();
curl_setopt($c, CURLOPT_URL, "http://ajax.googleapis.com/ajax/services/search/web?v=1.0&q=$google_url");
 curl_setopt($c, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:30.0) Gecko/20100101 Firefox/30.0');
//curl_setopt($ch, CURLOPT_URL, $graph_url);
//        curl_setopt($c, CURLOPT_HEADER, 0);
  //      curl_setopt($c, CURLOPT_POST, 1);
 curl_setopt($c, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
$data = curl_exec($c);
curl_close($c);
  //curl_close($mh);
  //$data =str_replace('<', '&lt;', $data);
 // $data =str_replace('>', '&gt;', $data);

/////////////echos  source codes

//echo $data; 

//$bodyMessage = '{"responseData": {"results":[{"GsearchResultClass":"GwebSearch","unescapedUrl":"http://www.rdpschool.com/","url":"http://www.rdpschool.com/","visibleUrl":"www.rdpschool.com","cacheUrl":"http://www.google.com/search?q\u003dcache:QBOT4ao-yQsJ:www.rdpschool.com","title":"\u003cb\u003eRukmini Devi Public School\u003c/b\u003e","titleNoFormatting":"Rukmini Devi Public School","content":"\u003cb\u003eRukmini Devi Public School\u003c/b\u003e is a premier league institution situated in North-West \nDelhi, with state-of-the-art infrastructure and facilities of International standard ..."},{"GsearchResultClass":"GwebSearch","unescapedUrl":"http://www.youtube.com/watch?v\u003dynYS8nGshwQ","url":"http://www.youtube.com/watch%3Fv%3DynYS8nGshwQ","visibleUrl":"www.youtube.com","cacheUrl":"http://www.google.com/search?q\u003dcache:DcwDkgv2MmUJ:www.youtube.com","title":"Delhi Darpan tv \u003cb\u003eRukmani Devi public School Pitam Pura\u003c/b\u003e - YouTube","titleNoFormatting":"Delhi Darpan tv Rukmani Devi public School Pitam Pura - YouTube","content":"Feb 20, 2014 \u003cb\u003e...\u003c/b\u003e दिल्ली के नामी स्कूलों शुमार पीतम पूरा स्थित रुकमणि देवी \nपब्लिक स्कूल ने अपना वार्षिक उत्सव धूम धाम ..."},{"GsearchResultClass":"GwebSearch","unescapedUrl":"http://en.wikipedia.org/wiki/Rukmini_Devi_Public_School","url":"http://en.wikipedia.org/wiki/Rukmini_Devi_Public_School","visibleUrl":"en.wikipedia.org","cacheUrl":"http://www.google.com/search?q\u003dcache:m_HJOcX-weMJ:en.wikipedia.org","title":"\u003cb\u003eRukmini Devi Public School\u003c/b\u003e - Wikipedia, the free encyclopedia","titleNoFormatting":"Rukmini Devi Public School - Wikipedia, the free encyclopedia","content":"\u003cb\u003eRukmini Devi Public School\u003c/b\u003e (or RDPS) is a school located in north-west Delhi, \nIndia. The building was constructed over a plot area of 3.4 acres allotted by the ..."},{"GsearchResultClass":"GwebSearch","unescapedUrl":"http://www.rdpsrohini.com/","url":"http://www.rdpsrohini.com/","visibleUrl":"www.rdpsrohini.com","cacheUrl":"http://www.google.com/search?q\u003dcache:_bU1Mzjd9tsJ:www.rdpsrohini.com","title":"\u003cb\u003eRukmini Devi Public School\u003c/b\u003e, Rohini|Best Pre School|No. 1 Play \u003cb\u003e...\u003c/b\u003e","titleNoFormatting":"Rukmini Devi Public School, Rohini|Best Pre School|No. 1 Play ...","content":"RDPS, Rohini is a progressive institution situated in North-West Delhi and is \nrecognized up to class VIII by the Directorate of \u003cb\u003eEducation\u003c/b\u003e, Government of NCT, ..."}],"cursor":{"resultCount":"1,510","pages":[{"start":"0","label":1},{"start":"4","label":2},{"start":"8","label":3},{"start":"12","label":4},{"start":"16","label":5},{"start":"20","label":6},{"start":"24","label":7},{"start":"28","label":8}],"estimatedResultCount":"1510","currentPageIndex":0,"moreResultsUrl":"http://www.google.com/search?oe\u003dutf8\u0026ie\u003dutf8\u0026source\u003duds\u0026start\u003d0\u0026hl\u003den\u0026q\u003d%3E::+Rukmini+Devi+Public+School,+Pitam+Pura+:","searchResultTime":"0.24"}}, "responseDetails": null, "responseStatus": 200}' ;


preg_match_all('((https?|ftp|gopher|telnet|file|notes|ms-help):'.'((//)|(\\\\))+[\w\d:#@%/;$()~_?\+-=\\\.&]*)',$data, $matches, PREG_PATTERN_ORDER);


print_r($matches)  ;

$x = $matches[0][0];
  												echo $x ;

$di = array( 

			'x' => $matches[0][0]

	) ;

$this->load->view( 'url_enter' ,$di);
echo "<br><br><Br><Br>";
$X = parse_url($x);

$y= $this->session->userdata('user_id');
//echo $Y;

$Y =parse_url($y) ;
print_r($X);
print_r($Y);
echo "<br><br><br><br><br><br><br><br><br>";
echo "<br><br><br><br><br><br><br><br><br><br><br><br>";
echo $X['host'] ;
echo  $Y['host'] ;
echo "<br><br><br><br><br><br><br><br><br><br><br><br>";
//$Z=strcmp( $X['host'], $Y['host']);
$Z =strcasecmp( $X['host'], $Y['host']);
if($Z==0){
	  $compresult ='TRUE';


}

else{

	$compresult ='FALSE';
}
//print $parse['host']; 

echo "compresult".$compresult ;
echo "<br><br><br><br><br><br><br><br><br>";

$this->urlmatch($data,$compresult) ;




/*

$v = strpos($data, $request_url)  ;


if($v >> 0){
	echo "orignal and  given url matches "; 

}





http://ajax.googleapis.com/ajax/services/search/web?v=1.0&q=%3E::%20Rukmini%20Devi%20Public%20School,%20Pitam%20Pura%20:

*/

//if the url give is  present in the response of the  output  result  the  or  u can  filt


}



public function urlmatch($t,$comp){
   $url = $this->session->userdata('user_id');
  $u = parse_url($url);

  //echo 'this  the  puppy song' ;
  print_r($u);
  // echo $url ;
//$url =$GLOBALS['urls']; 

  //$varun=$this->curl();php
  echo "<br><br><br><br><br><br><br><br><br>";
$xt = $this->getPageRank($url); 
echo "page rank =".$xt ;

  $varun =$t;
  
echo "<br><br><br><br><br><br><br><br><br>";
 //print($t);

  $r=strpos($varun, $u['host']);
 // $t = strpos('string','a');
  //echo $t;
  echo $r;


  echo "<br><br><br><br><br><br><br><br><br>";
echo "<br><br><br><br><br><br><br><br><br>";
//////////////////// http://paypal.com.login.php.hodaocauvong.net/53d65b1383fb7d65b59287510beb4686/login?cmd=_login-submit&dispatch=c6ce629c3bc5dbb025fec14fdaa7c1e80fdfd483f5e785b161d58597163465bfa1d0e41e 
if($r && $comp='TRUE' && $xt != -1){ 
	$verify= "this  nay be  a real page due to source check true  " ;
  echo $verify;
}

elseif ($r || $comp='TRUE' && $xt != -1 ) {
  # code...
  $verify =" this  maybee be a  phishing page " ;
  echo $verify ;

}

else
{
  $verify = "this is  a phishing page ";
  echo $verify ;

}


echo $verify ;
$ver =array(  'my' => $verify );
//$this->load->view('verify',$ver);



}


public function getPageURL() {
  //$page_url = 'http://www.rdpschool.com';
  $page_url  = '';
  
  if($_SERVER['HTTPS'] == 'on')
    $page_url .= 's';
  
  $page_url .= '://';
  
  // Generate the URL
  if((($_SERVER['SERVER_PORT'] != '80') && ($_SERVER['HTTPS'] != 'on')) || (($_SERVER['SERVER_PORT'] != '443') && ($_SERVER['HTTPS'] == 'on')))
    $page_url .= $_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT'].$_SERVER['REQUEST_URI'];
  else
    $page_url .= $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
  
  return $page_url;
}

// Gets the PageRank for the page
public function getPageRank($url = '', $server = 'toolbarqueries.google.com') {
  /* From: http://code.seebz.net/p/google-pagerank/ */
  
  // Get current URL?
  if(!$url)
    $url = getPageURL();
  
  // Process the Google page hash
  $f_str_to_num = create_function('$str, $check, $magic', '
    $int_32_unit = 4294967296;
    $length = strlen($str);
    
    for($i = 0; $i < $length; $i++) {
      $check *= $magic;
      
      if($check >= $int_32_unit) {
        $check = ($check - $int_32_unit * (int) ($check / $int_32_unit));
        $check = ($check < -2147483648) ? ($check + $int_32_unit) : $check;
      }
      
      $check += ord($str{$i});
    }
    
    return $check;
  ');
  
  $f_hash_url = create_function('$str', '
    $f_str_to_num = "'.$f_str_to_num.'";
    $check1 = $f_str_to_num($str, 0x1505, 0x21);
    $check2 = $f_str_to_num($str, 0, 0x1003F);
    
    $check1 >>= 2;
    $check1 = (($check1 >> 4) & 0x3FFFFC0 ) | ($check1 & 0x3F);
    $check1 = (($check1 >> 4) & 0x3FFC00 ) | ($check1 & 0x3FF);
    $check1 = (($check1 >> 4) & 0x3C000 ) | ($check1 & 0x3FFF);
    $t1 = (((($check1 & 0x3C0) << 4) | ($check1 & 0x3C)) <<2 ) | ($check2 & 0xF0F );
    $t2 = (((($check1 & 0xFFFFC000) << 4) | ($check1 & 0x3C00)) << 0xA) | ($check2 & 0xF0F0000 );
    
    return ($t1 | $t2);
  ');
  
  $f_check_hash = create_function('$hashNum', '
    $check_byte = 0;
    $flag = 0;
    $hash_str = sprintf("%u", $hashNum);
    $length = strlen($hash_str);
    
    for($i = $length - 1; $i >= 0; $i--) {
      $re = $hash_str{$i};
      
      if(1 === ($flag % 2)) {
        $re += $re;
        $re = (int)($re / 10) + ($re % 10);
      }
      
      $check_byte += $re;
      $flag ++;
    }
    
    $check_byte %= 10;
    
    if(0 !== $check_byte) {
      $check_byte = 10 - $check_byte;
      
      if(1 === ($flag % 2) ) {
        if(1 === ($check_byte % 2))
          $check_byte += 9;
        
        $check_byte >>= 1;
      }
    }
    
    return "7".$check_byte.$hash_str;
  ');
  
  $checksum = $f_check_hash($f_hash_url($url));
  
  // Request the page PageRank
  $request_url = sprintf(
    'http://%s/tbr?client=navclient-auto&ch=%s&ie=UTF-8&oe=UTF-8&features=Rank&q=info:%s',
    $server,
    $checksum,
    urlencode($url)
  );
  
  if(($c = @file_get_contents($request_url)) === false)
    return false;
  else if(empty($c))
    return -1;
  else
    return intval(substr($c, strrpos($c, ':') + 1));
}



}