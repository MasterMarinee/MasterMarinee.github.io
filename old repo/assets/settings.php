<?
global $Setting;


$domain=get_domain(true);
$domain_url=get_domain();
$root_dir=str_replace("index.php","",$_SERVER["SCRIPT_NAME"]);
$root_url=$domain_url.$root_dir;



$Setting=array(
    "domain"=>$domain,
    "home-url"=>$root_url,
    "home-dir"=>$root_dir,
    "site-name"=>"Master Marine Services",
    "site-title"=>"Master Marine Services",
    "company-name"=>"Master Marine Services",
    "meta-des"=>"We are always working hard to satisfy and provide marine consultations to our customers, while making sure all of their needs are provided in order to contribute to the advancement of the maritime field as we have.",
    "meta-keywords"=>array("Master Marine Services","marine consultations","maritime field"),
    "favicon"=>"favicon.ico",

);

