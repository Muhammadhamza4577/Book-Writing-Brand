<?php
if(isset($_POST) && count($_POST) > 0){
    $data='';
    $data='<table style="width:100%;" border="1">';
    
    foreach($_POST as $key=>$value){
        if($value != "" ){
            $_key=ucwords(str_replace('_',' ',$key));
            $data.="<tr><td>$_key</td><td>$value</td></tr>";
        }
    }
    $data.='</table>';
      $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From:info@bestbookpublisher.com \r\n";
    $subject='Best Book Publisher LP Book Publishing new Inquiry';
    $mailSent=mail("sraziua2@gmail.com,info@bestbookpublisher.com",$subject,$data,$headers);
    
    if($mailSent){
     header("Location: https://bestbookwriters.com/lp-book-publishing/thankyou.php");
    } 
}else{
    header("Location:https://bestbookwriters.com/lp-book-publishing/thankyou.php");
    
}

?>