<h2 class="targetTitle">Individus remarqués</h2>
<div class="whytarget">
  <li>Une remarque déplacée ?</li>
  <li>Un ego surdimensionné ?</li>
  <li>La blague de trop ?</li>
</div>
<p class="targetDesc" style="padding-right:10px">
  Voici la liste des individus tant attendue<br />
</p>
<div style="padding-bottom:100px;">
  <?php
    for($i = 0; $i < count($starget); $i++){
      echo '<div class="targetTable">';
      $rank = $i +1;
      echo '<p class="targetRow"><b>'.$rank.'. </b>'.$starget[$i]['nom'].' '.$starget[$i]['prenom'].' | <i>'.$starget[$i]['team'].'</i><span class="targetInfos"><b>'.$starget[$i]['scale'].' / 5</b><i class="fa fa-angle-right"></i></span></p>';
      echo '</div>';
      echo '<div class="tReason"><h6>JUSTIFICATION(S)</h6><div style="padding:0px 20px">'.$starget[$i]['reason'].'</div>';
      echo '<br /><div style="text-align:center;"><img src="'.$starget[$i]['path'].'" style="max-width:90%" /></div>';
      echo '</div>';
    }
  ?>
</div>
