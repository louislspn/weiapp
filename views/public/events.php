<div class="verticalLine"></div>
<div class="eventContainer">
<?php
  for ($j=0 ; $j<10 ; $j++) {
  ?>
  <div class="dayLine" style="margin-top:<?php echo 25*24*$j ?>px"><p><?php echo strftime('%a %e %b',$events[0]['eventTime']+$j*86400)?></p></div>

  <?php
  }
  for($i = 0; $i < count($events); $i++){
    if($i == 0){
      $ref = 1592784000;
    } else{
      $ref = $events[$i - 1]['eventTime'];
    }
  ?>
  <div style="margin-top : <?php echo 25*(($events[$i]['eventTime'] - $ref) / 3600) - 50 ?>px" class="event">
  <?php
  $color = ($events[$i]['eventTime'] > time()) ? '#F8DAAF' : 'var(--contrast)';
  echo '<div class="eventTime">'.date('H:i', $events[$i]['eventTime']).'</div>';
  echo '<div class="eventDot" style="border:10px solid '.$color.'"></div>';
  echo '<div class="eventName">'.$events[$i]['eventName'].'</div>';
?>
</div>
<?php
 echo '<div class="eventInfos2">    <span class="location"><i class="far fa-map"></i>'.$events[$i]['eventLocation'].'</span>
     <br />
     <span class="length"><i class="far fa-clock"></i>'.date('H:i', $events[$i]['eventTime']).'</span>
     <br />
     <br />
     <p class="desc" style="text-align:justify;">'.$events[$i]['eventDesc'].'</p></div>';
}
?>
</div>
