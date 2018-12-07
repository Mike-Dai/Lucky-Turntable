<?php

get_gift();

function get_gift(){

    $prize_arr = array(
        '0' => array('id'=>1,'prize'=>'´÷Ù¥','v'=>5),
        '1' => array('id'=>2,'prize'=>'ÀîÖ¾ÐÛ','v'=>5),
        '2' => array('id'=>3,'prize'=>'ÍõÎ°ÐÛ','v'=>5),
        '3' => array('id'=>4,'prize'=>'ÖìÎÂ³É','v'=>5),
        '4' => array('id'=>5,'prize'=>'Îâå«','v'=>5),
        '5' => array('id'=>6,'prize'=>'Íõ×Ï÷ë','v'=>5),
        '6' => array('id'=>7,'prize'=>'Éò¼Î³É','v'=>5),
        '7' => array('id'=>8,'prize'=>'Ë¾ºÆÌï','v'=>5),
            
    );
    foreach ($prize_arr as $key => $val) {
        $arr[$val['id']] = $val['v'];
    }
    $rid = get_rand($arr);
    $res['yes'] = $prize_arr[$rid-1]['prize'];
    unset($prize_arr[$rid-1]);
    shuffle($prize_arr);
    for($i=0; $i<count($prize_arr); $i++)
    {
        $pr[] = $prize_arr[$i]['prize'];
    }
    $res['no'] = $pr;

    if ( $res['yes']!='¿Õ½±')
    {
        $result['status']=1;
        $result['name']=$res['yes'];
        echo $result['name'];
        #echo '<h1 align="center" >¹§Ï²£º <i>Îâå«</i>   ÖÐ½±À²</h1>';
    }else{
        $result['status']=-1;
        $result['msg']=$res['yes'];
        echo $result['msg'];
    }
    

}
function get_rand($proArr) {
    $result = '';
    $proSum = array_sum($proArr);
    foreach($proArr as $key => $proCur) {
        $randNum = mt_rand(1, $proSum);
    
    if ( $randNum <= $proCur ) {
        $result = $key;
        break;
    }else {
        $proSum -= $proCur;
    }
}
unset($proArr);
return $result;
}


?>