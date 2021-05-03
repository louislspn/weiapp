<div class="leaderboardContainer">
  <div class="bestThreeContainer">
    <div class="firstPlace" style="background-image:url('_assets/<?php echo $result[0]['teamLogo'] ?>');"><p><?php echo $result[0]['teamPoint'] ?></p></div>
    <div class="secondPlace" style="background-image:url('_assets/<?php echo $result[1]['teamLogo'] ?>');"><p><?php echo $result[1]['teamPoint'] ?></p></div>
    <div class="thirdPlace" style="background-image:url('_assets/<?php echo $result[2]['teamLogo'] ?>');"><p><?php echo $result[2]['teamPoint'] ?></p></div>
  </div>
  <div class="flex numberContainer">
    <div class="flex-1">2<br /><?php echo $result[1]['teamName'] ?></div>
    <div class="flex-1 firstNumber">1<br /><?php echo $result[0]['teamName'] ?></div>
    <div class="flex-1">3<br /><?php echo $result[2]['teamName'] ?></div>
  </div>
  <div style="padding-bottom:100px;">
    <div class="leaderboard">
      <?php
        for($i = 3; $i < count($result); $i++){
          $j = $i + 1;
          if($j == count($result)){
            $className = 'last';
          } else{
            $className = '';
          }
          echo '<div class="place '.$className.'"><div class="placeNumber">'.$j.'</div><div>'.$result[$i]['teamName'].'</div><div class="leaderPoint">'.$result[$i]['teamPoint'].'</div></div>';
        }
      ?>
    </div>
</div>
</div>
