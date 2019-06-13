<?php

namespace App;


class Solution
{
    public static function question1($N){
      $binaryArray = str_split((string) decbin($N));

      $count = 0;
      $countArray = [];
      foreach($binaryArray as $key => $binary){
        if($binaryArray[$key] == 1){
          if($count != 0){
            array_push($countArray, $count);
            $count = 0;
          }
        } else {
          $count++;
        }
      }
      $answer_q1 = max($countArray);
      return $answer_q1;
    }

    public static function question2($A){
      $answer_q2 = 0;
      $n = count($A) + 1;

      for($i=1; $i<=$n; $i++){
        if(!in_array($i, $A)){
          $answer_q2 = $i;
        }
      }
      return $answer_q2;
    }

    public static function question3($A){
      $answer_q3 = 0;
      $A = collect($A);
      $A_unique = $A->unique();
      foreach($A_unique as $A_value){
        $filtered = $A->filter(function($value, $key) use ($A_value){
          return $value = $A_value;
        });
        if(count($filtered->all()) % 2 != 0){
          $answer_q3 = $A_value;
        }
      }
      return $answer_q3;
    }
    public static function question4($s){
      $answer_q4 = [];
      $allAlpha = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
      $s_array = str_split($s);
      $s_collection = collect(str_split($s));
      $result_collection = collect([]);
      $count = 0;
      $min = 1;
      $max = "";
      foreach($allAlpha as $s_value){
        foreach($s_collection as $value){
          if($value == $s_value){
            $count++;
          }
        }

        if($count != 0){
          $result_collection->push(['count' => $count, 'alpha' => $s_value]);

          $count = 0;  
        }
      }
      $answer_q4['max'] = $result_collection->where('count',$result_collection->max('count'))->first()['alpha'];
      $answer_q4['min'] = $result_collection->where('count',$result_collection->min('count'))->last()['alpha'];

      return $answer_q4;
    }

    public static function question5($A){
      $length = count($A);
      $before = $A[0];
      $direction = [];
      $beforeDirection = "";
      $answer_q5 = "";
      for($i=0; $i<$length; $i++){
        if($A[$i] - $before > 0){
          array_push($direction,"up");
        }elseif($A[$i] - $before < 0){
          array_push($direction,"down");
        }else{
          array_push($direction,"start");
        }
        if($beforeDirection == "down" && $direction[$i] == "up"){
          $answer_q5 .= "buy at $".$A[$i-1]. " (day " . ($i) .")<br/>";
        } elseif($beforeDirection == "up" && $direction[$i] == "down"){
          $answer_q5 .= "sell at $".$A[$i-1]." (day " . ($i) .")<br/>";
        } elseif($beforeDirection == "up" && $direction[$i] == "up" && $i == $length-1){
          $answer_q5 .= "sell at $".$A[$i]." (day " . ($i+1) .")<br/>";
        }

        $before = $A[$i];
        $beforeDirection = $direction[$i];
      }
      return $answer_q5;
    }

}
