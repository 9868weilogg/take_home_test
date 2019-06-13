<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Solution;
use DB;

class Section2PhpController extends Controller
{
    public function solution(){
      // question 1
      $answer_q1 = Solution::question1(1041);
      
      // question 2
      $answer_q2 = Solution::question2([2,3,1,5]);

      // question 3
      $answer_q3 = Solution::question3([9,3,9,3,9,7,9]);

      // question 4
      $answer_q4 = Solution::question4('embezzlement');

      // question 5
      $answer_q5 = Solution::question5([100, 80, 50, 145, 500, 400, 450, 300, 10, 55, 40, 15, 80, 90]);

      return view('section1_php',compact('answer_q1','answer_q2','answer_q3','answer_q4','answer_q5'));
    }
}
