<?php  
    //array menyimpan nama kota  
    $a = array('MEDAN','PEKANBARU','BATAM','PADANG','PALEMBANG','LAMPUNG','BENGKULU','BANDUNG','SERANG','CIREBON',  
       'SEMARANG','YOGYAKARTA','SURABAYA','MALANG','BALIKPAPAN','BANJARMASIN','MAKASSAR','MANADO','PALU','JAYAPURA',  
       'SORONG','DENPASAR','KUPANG','MATARAM','JAKARTA','PONTIANAK','AMBON','TERNATE','BANDA ACEH','LHOKSEUMAWE');  

    //get parameter q dari URL  
    $q=$_REQUEST["q"]; $hint="";  
      
    //cek kata apakah sama atau beda  
    if ($q !== "")  
      { $q=strtolower($q); $len=strlen($q);  
        foreach($a as $name){   
      if (stristr($q, substr($name,0,$len))){   
       if ($hint===""){   
        $hint=$name;   
       }else{   
        $hint .= ", $name";   
       }  
          }  
        }  
      }  
      
    //out put no suggestion jika data tidak ada yang sama  
    echo $hint==="" ? "no suggestion" : $hint;  
?>   