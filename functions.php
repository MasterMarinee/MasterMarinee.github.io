<? 
/************************
 * 
 ************************/
function get_domain($with_protocol=true){
    if(!$with_protocol){
        return $_SERVER['HTTP_HOST'];
    }
    if(isset($_SERVER['HTTPS'])){
        $protocol = ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] != "off") ? "https" : "http";
    }
    else{
        $protocol = 'http';
    }
    return $protocol . "://" . $_SERVER['HTTP_HOST'];
}
/************************
 * 
 ************************/
function get_setting($key=""){
    global $Setting;
    if(!empty($key) && is_string($key)){
        $key=trim($key);
        if(strlen($key) < 1) return "";
        ///////////////////////////////
        if(array_key_exists($key,$Setting)){
            return $Setting[$key];
        }
    }
    return "";
}
/************************
 * 
 ************************/
function get_keywords(){
    $keyWords=get_setting("meta-keywords");
    $keyWords=(is_array($keyWords)&&count($keyWords)>0)?$keyWords:array();
    return (count($keyWords)>0)?implode(",",$keyWords):"";
}
/************************
 * 
 ************************/
function getSliderImages(){
    global $SliderImages,$Setting;
    $dir_path = "./assets/slider/";
    if( is_dir($dir_path)){
        $images = glob($dir_path."*.{jpg,jpeg,png,gif,JPG,JPEG,PNG,GIF}", GLOB_BRACE);
        $groupKey=0;
        if(is_array($images)){
            foreach($images as $co => $image) {
                if($co > 0 && $co %3 == 0 ) 
                    $groupKey++;

                $SliderImages[$groupKey][]=$Setting["home-url"].trim($image,"./");          
            }
        }
        /***
        if ($handle = opendir($dir_path)) {
            //echo "Directory handle: $handle\n";
            //echo "Entries:\n";
        
            
            while (false !== ($entry = readdir($handle))) {
                //echo "$entry\n";
                $SliderImages[]=$entry;
            }
        
            closedir($handle);
        }
        /*** */
    }    
}