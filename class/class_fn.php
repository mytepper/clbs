<?php 
//class อื่นๆ
class fn{
 	
	//public function ReportName();
	// method ที่ถูกบังคับให้สร้างขึ้นจาก abstract class โดยเราจะเขียนอะไรในนี้หรือไม่ก็ได้ แต่ต้องสร้างไว้
 	//เช็ค moblie os 
 	   public static function is_mobile(){
	        $user_agent = $_SERVER['HTTP_USER_AGENT']; 
	        $accept     = $_SERVER['HTTP_ACCEPT']; 
	        return false
	            || (preg_match('/ipad/i',$user_agent))
	            || (preg_match('/ipod/i',$user_agent)||preg_match('/iphone/i',$user_agent))
	            || (preg_match('/android/i',$user_agent))
	            || (preg_match('/opera mini/i',$user_agent))
	            || (preg_match('/blackberry/i',$user_agent))
	            || (preg_match('/(pre\/|palm os|palm|hiptop|avantgo|plucker|xiino|blazer|elaine)/i',$user_agent))
	            || (preg_match('/(iris|3g_t|windows ce|opera mobi|windows ce; smartphone;|windows ce; iemobile)/i',$user_agent))
	            || (preg_match('/(mini 9.5|vx1000|lge |m800|e860|u940|ux840|compal|wireless| mobi|ahong|lg380|lgku|lgu900|lg210|lg47|lg920|lg840|lg370|sam-r|mg50|s55|g83|t66|vx400|mk99|d615|d763|el370|sl900|mp500|samu3|samu4|vx10|xda_|samu5|samu6|samu7|samu9|a615|b832|m881|s920|n210|s700|c-810|_h797|mob-x|sk16d|848b|mowser|s580|r800|471x|v120|rim8|c500foma:|160x|x160|480x|x640|t503|w839|i250|sprint|w398samr810|m5252|c7100|mt126|x225|s5330|s820|htil-g1|fly v71|s302|-x113|novarra|k610i|-three|8325rc|8352rc|sanyo|vx54|c888|nx250|n120|mtk |c5588|s710|t880|c5005|i;458x|p404i|s210|c5100|teleca|s940|c500|s590|foma|samsu|vx8|vx9|a1000|_mms|myx|a700|gu1100|bc831|e300|ems100|me701|me702m-three|sd588|s800|8325rc|ac831|mw200|brew |d88|htc\/|htc_touch|355x|m50|km100|d736|p-9521|telco|sl74|ktouch|m4u\/|me702|8325rc|kddi|phone|lg |sonyericsson|samsung|240x|x320|vx10|nokia|sony cmd|motorola|up.browser|up.link|mmp|symbian|smartphone|midp|wap|vodafone|o2|pocket|kindle|mobile|psp|treo)/i',$user_agent))
	            || ((strpos($accept,'text/vnd.wap.wml')>0)||(strpos($accept,'application/vnd.wap.xhtml+xml')>0))
	            || (isset($_SERVER['HTTP_X_WAP_PROFILE'])||isset($_SERVER['HTTP_PROFILE']))
	            || (in_array(strtolower(substr($user_agent,0,4)),array('1207'=>'1207','3gso'=>'3gso','4thp'=>'4thp','501i'=>'501i','502i'=>'502i','503i'=>'503i','504i'=>'504i','505i'=>'505i','506i'=>'506i','6310'=>'6310','6590'=>'6590','770s'=>'770s','802s'=>'802s','a wa'=>'a wa','acer'=>'acer','acs-'=>'acs-','airn'=>'airn','alav'=>'alav','asus'=>'asus','attw'=>'attw','au-m'=>'au-m','aur '=>'aur ','aus '=>'aus ','abac'=>'abac','acoo'=>'acoo','aiko'=>'aiko','alco'=>'alco','alca'=>'alca','amoi'=>'amoi','anex'=>'anex','anny'=>'anny','anyw'=>'anyw','aptu'=>'aptu','arch'=>'arch','argo'=>'argo','bell'=>'bell','bird'=>'bird','bw-n'=>'bw-n','bw-u'=>'bw-u','beck'=>'beck','benq'=>'benq','bilb'=>'bilb','blac'=>'blac','c55/'=>'c55/','cdm-'=>'cdm-','chtm'=>'chtm','capi'=>'capi','cond'=>'cond','craw'=>'craw','dall'=>'dall','dbte'=>'dbte','dc-s'=>'dc-s','dica'=>'dica','ds-d'=>'ds-d','ds12'=>'ds12','dait'=>'dait','devi'=>'devi','dmob'=>'dmob','doco'=>'doco','dopo'=>'dopo','el49'=>'el49','erk0'=>'erk0','esl8'=>'esl8','ez40'=>'ez40','ez60'=>'ez60','ez70'=>'ez70','ezos'=>'ezos','ezze'=>'ezze','elai'=>'elai','emul'=>'emul','eric'=>'eric','ezwa'=>'ezwa','fake'=>'fake','fly-'=>'fly-','fly_'=>'fly_','g-mo'=>'g-mo','g1 u'=>'g1 u','g560'=>'g560','gf-5'=>'gf-5','grun'=>'grun','gene'=>'gene','go.w'=>'go.w','good'=>'good','grad'=>'grad','hcit'=>'hcit','hd-m'=>'hd-m','hd-p'=>'hd-p','hd-t'=>'hd-t','hei-'=>'hei-','hp i'=>'hp i','hpip'=>'hpip','hs-c'=>'hs-c','htc '=>'htc ','htc-'=>'htc-','htca'=>'htca','htcg'=>'htcg','htcp'=>'htcp','htcs'=>'htcs','htct'=>'htct','htc_'=>'htc_','haie'=>'haie','hita'=>'hita','huaw'=>'huaw','hutc'=>'hutc','i-20'=>'i-20','i-go'=>'i-go','i-ma'=>'i-ma','i230'=>'i230','iac'=>'iac','iac-'=>'iac-','iac/'=>'iac/','ig01'=>'ig01','im1k'=>'im1k','inno'=>'inno','iris'=>'iris','jata'=>'jata','java'=>'java','kddi'=>'kddi','kgt'=>'kgt','kgt/'=>'kgt/','kpt '=>'kpt ','kwc-'=>'kwc-','klon'=>'klon','lexi'=>'lexi','lg g'=>'lg g','lg-a'=>'lg-a','lg-b'=>'lg-b','lg-c'=>'lg-c','lg-d'=>'lg-d','lg-f'=>'lg-f','lg-g'=>'lg-g','lg-k'=>'lg-k','lg-l'=>'lg-l','lg-m'=>'lg-m','lg-o'=>'lg-o','lg-p'=>'lg-p','lg-s'=>'lg-s','lg-t'=>'lg-t','lg-u'=>'lg-u','lg-w'=>'lg-w','lg/k'=>'lg/k','lg/l'=>'lg/l','lg/u'=>'lg/u','lg50'=>'lg50','lg54'=>'lg54','lge-'=>'lge-','lge/'=>'lge/','lynx'=>'lynx','leno'=>'leno','m1-w'=>'m1-w','m3ga'=>'m3ga','m50/'=>'m50/','maui'=>'maui','mc01'=>'mc01','mc21'=>'mc21','mcca'=>'mcca','medi'=>'medi','meri'=>'meri','mio8'=>'mio8','mioa'=>'mioa','mo01'=>'mo01','mo02'=>'mo02','mode'=>'mode','modo'=>'modo','mot '=>'mot ','mot-'=>'mot-','mt50'=>'mt50','mtp1'=>'mtp1','mtv '=>'mtv ','mate'=>'mate','maxo'=>'maxo','merc'=>'merc','mits'=>'mits','mobi'=>'mobi','motv'=>'motv','mozz'=>'mozz','n100'=>'n100','n101'=>'n101','n102'=>'n102','n202'=>'n202','n203'=>'n203','n300'=>'n300','n302'=>'n302','n500'=>'n500','n502'=>'n502','n505'=>'n505','n700'=>'n700','n701'=>'n701','n710'=>'n710','nec-'=>'nec-','nem-'=>'nem-','newg'=>'newg','neon'=>'neon','netf'=>'netf','noki'=>'noki','nzph'=>'nzph','o2 x'=>'o2 x','o2-x'=>'o2-x','opwv'=>'opwv','owg1'=>'owg1','opti'=>'opti','oran'=>'oran','p800'=>'p800','pand'=>'pand','pg-1'=>'pg-1','pg-2'=>'pg-2','pg-3'=>'pg-3','pg-6'=>'pg-6','pg-8'=>'pg-8','pg-c'=>'pg-c','pg13'=>'pg13','phil'=>'phil','pn-2'=>'pn-2','pt-g'=>'pt-g','palm'=>'palm','pana'=>'pana','pire'=>'pire','pock'=>'pock','pose'=>'pose','psio'=>'psio','qa-a'=>'qa-a','qc-2'=>'qc-2','qc-3'=>'qc-3','qc-5'=>'qc-5','qc-7'=>'qc-7','qc07'=>'qc07','qc12'=>'qc12','qc21'=>'qc21','qc32'=>'qc32','qc60'=>'qc60','qci-'=>'qci-','qwap'=>'qwap','qtek'=>'qtek','r380'=>'r380','r600'=>'r600','raks'=>'raks','rim9'=>'rim9','rove'=>'rove','s55/'=>'s55/','sage'=>'sage','sams'=>'sams','sc01'=>'sc01','sch-'=>'sch-','scp-'=>'scp-','sdk/'=>'sdk/','se47'=>'se47','sec-'=>'sec-','sec0'=>'sec0','sec1'=>'sec1','semc'=>'semc','sgh-'=>'sgh-','shar'=>'shar','sie-'=>'sie-','sk-0'=>'sk-0','sl45'=>'sl45','slid'=>'slid','smb3'=>'smb3','smt5'=>'smt5','sp01'=>'sp01','sph-'=>'sph-','spv '=>'spv ','spv-'=>'spv-','sy01'=>'sy01','samm'=>'samm','sany'=>'sany','sava'=>'sava','scoo'=>'scoo','send'=>'send','siem'=>'siem','smar'=>'smar','smit'=>'smit','soft'=>'soft','sony'=>'sony','t-mo'=>'t-mo','t218'=>'t218','t250'=>'t250','t600'=>'t600','t610'=>'t610','t618'=>'t618','tcl-'=>'tcl-','tdg-'=>'tdg-','telm'=>'telm','tim-'=>'tim-','ts70'=>'ts70','tsm-'=>'tsm-','tsm3'=>'tsm3','tsm5'=>'tsm5','tx-9'=>'tx-9','tagt'=>'tagt','talk'=>'talk','teli'=>'teli','topl'=>'topl','hiba'=>'hiba','up.b'=>'up.b','upg1'=>'upg1','utst'=>'utst','v400'=>'v400','v750'=>'v750','veri'=>'veri','vk-v'=>'vk-v','vk40'=>'vk40','vk50'=>'vk50','vk52'=>'vk52','vk53'=>'vk53','vm40'=>'vm40','vx98'=>'vx98','virg'=>'virg','vite'=>'vite','voda'=>'voda','vulc'=>'vulc','w3c '=>'w3c ','w3c-'=>'w3c-','wapj'=>'wapj','wapp'=>'wapp','wapu'=>'wapu','wapm'=>'wapm','wig '=>'wig ','wapi'=>'wapi','wapr'=>'wapr','wapv'=>'wapv','wapy'=>'wapy','wapa'=>'wapa','waps'=>'waps','wapt'=>'wapt','winc'=>'winc','winw'=>'winw','wonu'=>'wonu','x700'=>'x700','xda2'=>'xda2','xdag'=>'xdag','yas-'=>'yas-','your'=>'your','zte-'=>'zte-','zeto'=>'zeto','acs-'=>'acs-','alav'=>'alav','alca'=>'alca','amoi'=>'amoi','aste'=>'aste','audi'=>'audi','avan'=>'avan','benq'=>'benq','bird'=>'bird','blac'=>'blac','blaz'=>'blaz','brew'=>'brew','brvw'=>'brvw','bumb'=>'bumb','ccwa'=>'ccwa','cell'=>'cell','cldc'=>'cldc','cmd-'=>'cmd-','dang'=>'dang','doco'=>'doco','eml2'=>'eml2','eric'=>'eric','fetc'=>'fetc','hipt'=>'hipt','http'=>'http','ibro'=>'ibro','idea'=>'idea','ikom'=>'ikom','inno'=>'inno','ipaq'=>'ipaq','jbro'=>'jbro','jemu'=>'jemu','java'=>'java','jigs'=>'jigs','kddi'=>'kddi','keji'=>'keji','kyoc'=>'kyoc','kyok'=>'kyok','leno'=>'leno','lg-c'=>'lg-c','lg-d'=>'lg-d','lg-g'=>'lg-g','lge-'=>'lge-','libw'=>'libw','m-cr'=>'m-cr','maui'=>'maui','maxo'=>'maxo','midp'=>'midp','mits'=>'mits','mmef'=>'mmef','mobi'=>'mobi','mot-'=>'mot-','moto'=>'moto','mwbp'=>'mwbp','mywa'=>'mywa','nec-'=>'nec-','newt'=>'newt','nok6'=>'nok6','noki'=>'noki','o2im'=>'o2im','opwv'=>'opwv','palm'=>'palm','pana'=>'pana','pant'=>'pant','pdxg'=>'pdxg','phil'=>'phil','play'=>'play','pluc'=>'pluc','port'=>'port','prox'=>'prox','qtek'=>'qtek','qwap'=>'qwap','rozo'=>'rozo','sage'=>'sage','sama'=>'sama','sams'=>'sams','sany'=>'sany','sch-'=>'sch-','sec-'=>'sec-','send'=>'send','seri'=>'seri','sgh-'=>'sgh-','shar'=>'shar','sie-'=>'sie-','siem'=>'siem','smal'=>'smal','smar'=>'smar','sony'=>'sony','sph-'=>'sph-','symb'=>'symb','t-mo'=>'t-mo','teli'=>'teli','tim-'=>'tim-','tosh'=>'tosh','treo'=>'treo','tsm-'=>'tsm-','upg1'=>'upg1','upsi'=>'upsi','vk-v'=>'vk-v','voda'=>'voda','vx52'=>'vx52','vx53'=>'vx53','vx60'=>'vx60','vx61'=>'vx61','vx70'=>'vx70','vx80'=>'vx80','vx81'=>'vx81','vx83'=>'vx83','vx85'=>'vx85','wap-'=>'wap-','wapa'=>'wapa','wapi'=>'wapi','wapp'=>'wapp','wapr'=>'wapr','webc'=>'webc','whit'=>'whit','winw'=>'winw','wmlb'=>'wmlb','xda-'=>'xda-',)))
	        ;
	    }

	public static function clean($var=null){
 		if(!empty($var)){
 			 return stripslashes($var);
 		}
 		return false;
 	}


	public static function _Num($request){
		if(isset($request) and !empty($request) and is_numeric($request)){
				return;
		}
		exit();
	}

	public static function get_file($var){
		if(!empty($var)){
			$var_file = explode("_",$var);
			$get = $var_file[0]."/".$var_file[1].".php";
			return include($get);
		}return;
	}

 	//---
 	public static function restr($var){
 		$var = strip_tags($var);
	 	$array = array("'","");
		$data = str_replace($array,"&#39;",$var);
		return $data;
 	}

 	public static function print_($var){
 		echo "<pre>";
 		print_r($var);
 	}

           public static function restr_url($var){
	    $array = array("*","/","_","'",'"',":",";","=","&","+",".","?","–",",");
	    $array2 = array(" ");
	    $output = str_replace($array,"",$var);
	    $output = str_replace($array2,"-",$output);
	    return $output;
	}

	public static function action(){
		$protocol = $_SERVER['HTTPS'] == 'on' ? 'https' : 'http';
		$action1 = explode('?',$protocol.'://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
		$action = $action1[1];
		if(!empty($action)){
			return $action;	
		}
		return false;
		
	}

	public static function require_file_(){
		if(isset($_GET['url']) and !empty($_GET['url'])){
	                $url = explode('_',$_GET['url']);
	                $file_full = explode('-',$url[1]);
	                $path = $url[0];
	                $file = $file_full[0].".php";
	                //$id = $file_full[1];
	                //$per_page = $file_full[2];	                
	                if(file_exists("view/$path") and file_exists("view/$path/$file")){
	                   if(!file_exists("controllers/$path") or !file_exists("controllers/$path/$file")){
	                   		chmod("controllers", 0777);
	                   		if(mkdir("controllers/$path", 0777, true)){
	                   			fopen("controllers/$path/$file","w");
	                   		}else{
	                   			fopen("controllers/$path/$file","w");
	                   		}
	                   }
	                  return;
	                }else{
	                 		chmod("view", 0777);
	                   		if(mkdir("view/$path", 0777, true)){
	                   			fopen("view/$path/$file","w");
	                   		}else{
	                   			fopen("view/$path/$file","w");
	                   		}
	                }
	                }else if(isset($_GET["error"])){
	                	     $error = $_GET["error"];
		                if($error=="404"){
		                  	return "<h2>ไม่พบหน้าที่คุณเข้าถึง 404</h2>";
		                }
	                }else{
	                  return include("view/admin/admin.php");
               	 }
	

	}

 	public static function file_exists__($file,$file_return){  //เอาแพทเข้ามาด้วยเช่น uploads/file/xxx.file
 		$path = end(explode("/",$file));
 		if(empty($path)){
 			return $file_return;
 		}else{
	 		if(file_exists($file)){
	 			return $file;
	 		}else{
	 			return $file_return;
	 		}
	 	}
 	}

 	public static function new_img($file){

 		$validExtensions = array('.jpg','.JPG', '.jpeg','.JPEG', '.gif','.GIF', '.png','.PNG');
 		$fileExtension = strrchr($file['name'], ".");
 		if (in_array($fileExtension, $validExtensions)) {
 			$newNamePrefix = date("Y-m-d").time().microtime(). '_';
 			return $newNamePrefix.$fileExtension;
 		}else{
 			return 0;
 		}
 	}

 	public static function Check_img($file){

 		$validExtensions = array('.jpg','.JPG', '.jpeg','.JPEG', '.gif','.GIF', '.png','.PNG');
 		$fileExtension = strrchr($file['name'], ".");
 		if (in_array($fileExtension, $validExtensions)) {
 			$newNamePrefix = date("Y-m-d").time().microtime(). '_';
 			return $newNamePrefix.$fileExtension;
 		}else{
 			return 0;
 		}
 	}



 	//****---
	public static function reload(){
			echo "<script>window.location.reload();</script>";
	}

	public static function loadding(){//by boostrap 3.2.0
		echo "
		<script type='text/javascript'>$('#myModal').modal('show');</script>";
	}

	//****
	public static function go_url($url){
		echo "<script> window.location='$url'; </script>";
	}

	public static function unlink_img($path,$file){
		$paths = $path;
		$files	= $file;
		if(file_exists($paths.$files)){
		$remove = unlink($paths.$files);
			if($remove){
				return true;
			}else{
				return false;
			}
		}else{
		return true;
		}

	}

	public static function full_path()
	{
		$s = &$_SERVER;
		$ssl = (!empty($s['HTTPS']) && $s['HTTPS'] == 'on') ? true:false;
		$sp = strtolower($s['SERVER_PROTOCOL']);
		$protocol = substr($sp, 0, strpos($sp, '/')) . (($ssl) ? 's' : '');
		$port = $s['SERVER_PORT'];
		$port = ((!$ssl && $port=='80') || ($ssl && $port=='443')) ? '' : ':'.$port;
		$host = isset($s['HTTP_X_FORWARDED_HOST']) ? $s['HTTP_X_FORWARDED_HOST'] : (isset($s['HTTP_HOST']) ? $s['HTTP_HOST'] : null);
		$host = isset($host) ? $host : $s['SERVER_NAME'] . $port;
		$uri = $protocol . '://' . $host . $s['REQUEST_URI'];
		$segments = explode('?', $uri, 2);
		$url = $segments[0];
		return $url;
	}

	public static function alert($msg){
		echo"<script language=\"javascript\"> alert('$msg');</script> <meta http-equiv='refresh' content='0;url=".self::full_path()."'> ";	
	}

	public static function alert_true($msg,$url){
		echo"<meta http-equiv='refresh' content='0;url=".$url."&alert_true=".$msg."'> ";
	}

	public static function alert_false($msg,$url){
		echo"<meta http-equiv='refresh' content='0;url=".$url."&alert_false=".$msg."'> ";
	}
	
	public static function alertback($msg){
		echo"<script language=\"javascript\">alert('$msg'); window.history.back();</script>";	

	}
	public static function back(){
		header('Location: ' . $_SERVER['HTTP_REFERER']);
		//echo "<script language=\"javascript\">window.history.back();</script>";
	}
	public static function alertgo($msg,$url){
		echo"<script language=\"javascript\">alert('$msg'); window.location='$url';</script>";	
	}
	public static function Date_Format($date){
		$date1 = explode('-',$date);
		$day = $date1['2'];
		$mount = $date1['1'];
		$year = $date1['0'];

		return $day."/".$mount."/".$year;	
	}

	public static function replace_url($var){
		$array = array("'","!","@"," ","$","%","^","&","*","|","/",".","+","~","#");
		$data = str_replace($array,"-",$var);
		return $data;
	}

	public static function basename_(){
		$file = basename($_SERVER["SCRIPT_FILENAME"], '.php');
		return $file;
	}

}


class  numtobahteng{

 public function toeng($number){
  $numberformat = number_format($number , 2);
  $explode = explode('.' , $numberformat);
  $baht = $explode[0];
  $stang = $explode[1];     if($stang == '00'){
    return $this->eng($baht).'';
   }else{
    return $this->eng($baht).' Baht and '.$this->eng($stang).'Stang';
   }
  }
   var $word = '';
   var $decimal;
   var $decimal_text = '';

 function numtobahteng(){                     
   $this->aa = array(' ' , 'Hundred' , 'Thousand' , 'Million' , 'Billion' , 'Trillion' , 'Quadrillion'); 
   $this->tens = array(' ' , ' ' , 'Twenty' , 'Thirty' , 'Forty' , 'Fifty' , 'Sixty' , 'Seventy' , 'Eighty' , 'Ninty');
   $this->on = array('Ten' , 'Eleven' , 'Twelve' , 'Thirteen' , 'Fourteen' , 'Fifteen' , 'Sixteen' , 'Seventeen' , 'Eighteen' , 'Ninteen');
   $this->ones = array(' ' , 'One' , 'Two' , 'Three' , 'Four' , 'Five' , 'Six' , 'Seven' , 'Eight' , 'Nine');
 }

 function eng($fig){
  $this->fig = ereg_replace(',' , '' , $fig);  #REMEOVE ANY , FROM THE NUMBER
     $this->spilt_decimals();                               #CHECK FOR THE DECIMAL PART
  
     $this->rr = explode(',' , number_format($this->fig));   #SEPARATE THE 3 DIGITS INTO ARRAY ELEMENTS  
     $this->mx = count($this->rr);
     $this->fig = strtolower($this->fig); 
     $this->compose();
     $this->handle_decimal();
     return $this->word.($this->decimal_text ? ' and ' . $this->decimal_text : '');
 }

  function spilt_decimals(){
   $n = explode('.' , $this->fig);
   $this->fig = $n[0];
   $this->decimal = $n[1];
  }

 function compose(){
  $this->word = ''; #TO RESET THE VALUE FOR MULTIPLE INSTANCES
   if($this->mx == 1 && $this->rr[0] == 0) $this->word = 'Zero';
   else if($this->mx > 6) $this->word = 'Figure NOT available in words'; #OUT OF THE quadrillion range JUST IGNORE
   else{
   for($i=0; $i<$this->mx; $i++){
    $k = $this->mx - $i;
    $this->word .= $this->handle_3($this->rr[$i]) . ' ' . ($k > 1 ? ($this->rr[$i] == '000' ? '' : $this->aa[$k]) . ' ' : '');  
   }
  }
   }

  function handle_3($num){     $num = $num[2].$num[1].$num[0];
 if($num[1] == '1') $text = ($num[2] ? $this->ones[$num[2]].' Hundred ': ''). ($num[1] ? $this->on[$num[0]].' ' : '');   else $text = ($num[2] ? $this->ones[$num[2]].' Hundred ': ''). ($num[1] ? $this->tens[$num[1]].' ' : '').$this->ones[$num[0]];    return $text;
  }

  function handle_decimal(){
 $this->decimal_text = '';
     for($i=0; $i< strlen($this->decimal); $i++){
   if($this->decimal[$i] == 0) $this->decimal_text .= ' Zero ';
   else $this->decimal_text .= ' '.$this->ones[$this->decimal[$i]];
     }
  }  


}


?>