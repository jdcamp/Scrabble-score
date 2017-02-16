<?php

    class Score {

      function calcScore($myWord) {
        $wordScore =0;
        $wordScore += preg_match_all('/[a,e,i,o,u,l,n,r,s,t]/i', $myWord);
        $wordScore += (preg_match_all('/[d,g]/i', $myWord)*2);
        $wordScore += (preg_match_all('/[B, C, M, P]/i', $myWord)*3);
        $wordScore += (preg_match_all('/[F, H, V, W, Y]/i', $myWord)*4);
        $wordScore += (preg_match_all('/[k]/i', $myWord)*5);
        $wordScore += (preg_match_all('/[j, x]/i', $myWord)*8);
        $wordScore += (preg_match_all('/[q, z]/i', $myWord)*10);
        return $wordScore;
      }
    }

 ?>
