<?
/////dump() function
function dump($var,$return=false){
    if (is_array($var)){
      $out=print_r($var,true);
    }else if(is_object($var)){
      $out=var_export($var,true);
    }else{
      $out=$var;
  
    }
    if ($return){
      return "<pre>$out</pre>";
    }else{
       echo "<pre>$out</pre>";
    }
  
  }
  ///hr() function
  function hr($return=false){
    if($return){
      return "<hr>\n";
    }else{
    echo "<hr>\n";
    }
   }
   function br($return=false){
    if($return){
      return "<br>\n";
    }else{
    echo "<br>\n";
    }
   }
   function getCurentDateTime(){
   return date("y-m-d H:i:s");
   }
   function encodePassword($password){
    global $config;
    return md5($password.$config['salt']);
   }
    