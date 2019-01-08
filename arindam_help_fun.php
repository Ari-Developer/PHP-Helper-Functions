<?php

function TokenString($length)
{
	$token = "";
	$codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
	$codeAlphabet.= "abcdefghijklmnopqrstuvwxyz";
	$codeAlphabet.= "0123456789";
	$max = strlen($codeAlphabet); 

    for ($i=0; $i < $length; $i++)
    {
        $token .= $codeAlphabet[random_int(0, $max-1)];
    }

    return md5($token);
}

function RandString($length) 
{
   $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz@#$&*";  
   $size = strlen( $chars );
   $str = "";
   for( $i = 0; $i < $length; $i++ ) 
   {
      $str .= $chars[rand( 0, $size - 1 )];
   }

   return trim($str);

}

function RandAlphaString($length) 
{
    $chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    return substr(str_shuffle($chars), 0, $length);
}

function RandMD5String($length) 
{
    return substr(md5(time()), 0, $length);
}

function RandSHA1String($length) 
{
    return substr(sha1(mt_rand()), 0, $length);
}

function RandomPassword1($length) 
{
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
    $password = substr( str_shuffle( $chars ), 0, $length );
    return $password;
}

function RandomCode($length)
{
   return substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, $length);
}

function RandomPassword2($length) 
{
	$alphabets = range('A','Z');
	$numbers = range('0','9');
	$additional_characters = array('_','#','@','%','&');

	$final_array = array_merge($alphabets, $numbers, $additional_characters);
	     
	$password = '';

	while($length--) 
	{
	  $key = array_rand($final_array);
	  $password .= $final_array[$key];
	}

	return $password;
}

function SixDigNum()
{
	return mt_rand(100000,999999);
}

function UniqueID()
{
	return uniqid();
}

function HexaUniqueID()
{
	return hexdec(uniqid());
}

function UniqueToken() 
{
    return strrev(base_convert(bin2hex(hash('sha512', uniqid(mt_rand() . microtime(true) * 10000, true), true)), 16, 36));
}

function uniqueString()
{
	return md5(time() . mt_rand(1,1000000));
}

function OpenSSLToken($length)
{
	return bin2hex(openssl_random_pseudo_bytes($length));
}

function ByteToken($length)
{
	return bin2hex(random_bytes($length));
}

function MD5ID()
{
	return md5(uniqid(rand(),1)); 
}

function SHA1ID()
{
	return sha1(uniqid(rand(),1)); 
}

function UniqueNumID()
{
	return str_replace(".", "", microtime(true));
}


function addDays2Date($date, $days)
{
	return date('Y-m-d', strtotime('+'.$days.' day', strtotime($date)));
}

function subDays2Date($date, $days)
{
	return date('Y-m-d', strtotime('-'.$days.' day', strtotime($date)));	
}

function NextDay()
{
	$today = date('Y-m-d H:i:s');
	return date('Y-m-d', strtotime('+1 day', strtotime($today)));
}

function PreviousDay()
{
	$today = date('Y-m-d H:i:s');
	return date('Y-m-d', strtotime('-1 day', strtotime($today)));
}

function addMinutes2Date($date, $minutes)
{
	return date('Y-m-d H:i:s', strtotime('+'.$minutes.' minutes', strtotime($date)));	
}

function subMinutes2Date($date, $minutes)
{
	return date('Y-m-d H:i:s', strtotime('-'.$minutes.' minutes', strtotime($date)));	
}

function addHours2Date($date, $hours)
{
	return date('Y-m-d H:i:s', strtotime('+'.$hours.' hour', strtotime($date)));
}

function subHours2Date($date, $hours)
{
	return date('Y-m-d H:i:s', strtotime('-'.$hours.' hour', strtotime($date)));
}

function addAll2Date($date, $days, $hours, $minutes, $seconds)
{
	return date('Y-m-d H:i:s', strtotime('+'.$days.' day +'.$hours.' hour +'.$minutes.' minutes +'.$seconds.' seconds', strtotime($date)));
}

function subAll2Date($date, $days, $hours, $minutes, $seconds)
{
	return date('Y-m-d H:i:s', strtotime('-'.$days.' day -'.$hours.' hour -'.$minutes.' minutes -'.$seconds.' seconds', strtotime($date)));
}

function addMonths2date($date, $months)
{
	return date('Y-m-d H:i:s', strtotime('+'.$months.' month', strtotime($date)));	
}

function subMonths2date($date, $months)
{
	return date('Y-m-d H:i:s', strtotime('-'.$months.' month', strtotime($date)));	
}

function addWeeks2Date($date, $weeks)
{
	return date('Y-m-d H:i:s', strtotime('+'.$weeks.' week', strtotime($date)));	
}

function subWeeks2Date($date, $weeks)
{
	return date('Y-m-d H:i:s', strtotime('-'.$weeks.' week', strtotime($date)));	
}

function addYear2Date($date, $years)
{
	return date('Y-m-d H:i:s', strtotime('+'.$years.' year', strtotime($date)));	
}

function subYear2Date($date, $years)
{
	return date('Y-m-d H:i:s', strtotime('-'.$years.' year', strtotime($date)));	
}

function diff2Date_returnDays($date1, $date2)
{
	$strtotime_date1 = strtotime($date1);
	$strtotime_date2 = strtotime($date2);
	$diff = abs($strtotime_date1 - $strtotime_date2);
	$inDays = round($diff / (60 * 60 * 24));

	return $inDays;
}

function diff2Date_returnArray($date1, $date2)
{
	$d1 = date_create($date1);
	$d2 = date_create($date2);
	$diff = date_diff($d1,$d2);
	$str = $diff->format("%R%a days");
	
	$returnArr = array();

	if(strpos( $str, '+' ) !== false)
	{
		$returnArr['plusORminus'] = '+';
		$returnArr['diffDays'] = $diff->days;
		$returnArr['diffStr'] = $str;
	}

	if(strpos( $str, '-' ) !== false)
	{
		$returnArr['plusORminus'] = '-';
		$returnArr['diffDays'] = $diff->days;
		$returnArr['diffStr'] = $str;
	}
	

	return $returnArr;
}

function diff2Date_Allformat($date1, $date2)
{
	$d1 = date_create($date1);
	$d2 = date_create($date2);
	$diff = date_diff($d1,$d2);
	$str = $diff->y.' Years, '.$diff->m.' Months, '.$diff->d.' Days';
	return $str;
}

function daysConvert2Format($days)
{
	$years = ($days / 365) ; 
	$years = floor($years); 

	$month = ($days % 365) / 30.5; 
	$month = floor($month); 

	$day = ($days % 365) % 30.5; 

	$str = $years.' Years, '.$month.' Months, '.$day.' Days';

	return $str;

}

function FullagoFormat($date)
{
	$str = "";
	$today = date_create(date('Y-m-d H:i:s'));
	$arg_date = date_create($date);
	$diff = date_diff($today, $arg_date);
	if(!empty($diff) && is_object($diff))
	{
		$y = $diff->y;
		$m = $diff->m;
		$d = $diff->d;
		$h = $diff->h;
		$i = $diff->i;
		$s = $diff->s;
		$days = $diff->days;

		if($y > 0)
		{
			$str .= $y." Years, ";
		}
		if($m > 0)
		{
			$str .= $m." Months, ";
		}
		if($d > 0)
		{
			$str .= $d." Days, ";
		}
		if($h > 0)
		{
			$str .= $h." Hours, ";
		}
		if($i > 0)
		{
			$str .= $i." Minutes, ";
		}
		if($s > 0)
		{
			$str .= $s." Seconds ";
		}
	}

	return trim($str);

}

function FullagoArray($date)
{
	$output = array();
	$today = date_create(date('Y-m-d H:i:s'));
	$arg_date = date_create($date);
	$diff = date_diff($today, $arg_date);
	if(!empty($diff) && is_object($diff))
	{
		$y = $diff->y;
		$m = $diff->m;
		$d = $diff->d;
		$h = $diff->h;
		$i = $diff->i;
		$s = $diff->s;
		$days = $diff->days;

		$output['year'] = $y;
		$output['month'] = $m;
		$output['day'] = $d;
		$output['hour'] = $h;
		$output['minute'] = $i;
		$output['second'] = $s;
		$output['total_days'] = $days;
		$output['total_hours'] = ($days * 24) + $h;
		$output['total_minutes'] = ($output['total_hours'] * 60) + $i; 
	}

	return $output;

}

function isDateTimeExpire($datetime)
{
	$today = strtotime(date('Y-m-d H:i:s'));
	$ckDateTime = strtotime($datetime);

	if($today > $ckDateTime)
	{
		return "expire";
	}
	else
	{
		return "not_expire";
	}
}

function create_slug($string)
{
	$slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $string);
	return $slug;
}

function force_download($file_path)  
{  
    if ( (isset($file_path)) && ( file_exists($file_path) ) ) 
    {  
       header("Content-length: ".filesize($file));  
       header('Content-Type: application/octet-stream');  
       header('Content-Disposition: attachment; filename="' . date('d-m-Y').'_'.rand(11,99) . '"');  
       readfile("$file");  
    } 
    else 
    {  
       return "NO_FILE";  
    }  
}  

function isNumaric($string) 
{
	$regex = "/^\s*[+\-]?(?:\d+(?:\.\d*)?|\.\d+)\s*$/";

  	return preg_match($regex, $string); 
}


function hilightText($string, $find_word)
{
	$final_string = "";
    $split_words = explode( " " , $find_word );
    
    foreach($split_words as $word)
    {
        $color = "#4285F4";
        $final_string = preg_replace("|($word)|Ui" ,
            "<span style=\"color:".$color.";\"><b>$1</b></span>" , $string );
    }

    return $final_string;
}


?>


<?php
$file_path = "https://www.thecodedeveloper.com/demo/Code-Developer-Logo.png";
$fileinfo = pathinfo($file_path);
print_r($fileinfo);
 
/*
Output
Array
(
    [dirname] => https://www.thecodedeveloper.com/demo
    [basename] => Code-Developer-Logo.png
    [extension] => png
    [filename] => Code-Developer-Logo
)
*/
 
echo $fileinfo['extension']; //get image extension
 
?>

<br/>
<?php
$birthDayDate = "14/01/1987"; //here date in mm/dd/yyyy format
//explode the date to get month, day and year
$birthDayDate = explode("/", $birthDayDate);
//get age from date or birthdate
$age       = (date("md", date("U", mktime(0, 0, 0, $birthDayDate[0], $birthDayDate[1], $birthDayDate[2]))) > date("md") ? ((date("Y") - $birthDayDate[2]) - 1) : (date("Y") - $birthDayDate[2]));
echo "Age is:" . $age;
?>