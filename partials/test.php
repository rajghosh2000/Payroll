<?php
                    $jsondata = file_get_contents("json/pay.json");
                    $json = json_decode($jsondata,true);
                    $i=0;
                    while($i<5)
                    {
                        if(strcmp(($json['basicPay'][$i]['title']),'Clerk')==0)
                        {
                            echo $json['basicPay'][$i]['bp']);
                            break;
                        }
                        $i++;
                    }
?>
