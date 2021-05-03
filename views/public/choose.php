<div class="teamContainer">
<?php
  for($i = 0; $i < count($result); $i++){
    ?>
      <div class="teamSquare <?php if($i == 0){echo 'firstTeam';} ?>" style="background-image : url('_assets/<?php echo $result[$i]['teamLogo'] ?>')" onclick="toggleChallenge($(this))"></div>
      <h3><?php echo $result[$i]['teamName']; ?></h3>
    <?php
  }
?>
</div>
<div class="teamPanel">
  <div class="scrollable">
  <div class="circle return" onclick="$('.teamPanel').toggleClass('showHelp')"><p><i class="fa fa-angle-left"></i></p></div>
  <h3 class="infos-teamName"></h3>
  <!-- teamPoint -->
  <div class="teamPoint infos-teamPoints"></div>
  <p class="explanation"><i>Chaque défi doit être validé par un de vos chef d'équipe à l'aide d'une photo ou vidéo.</i></p>
  <!-- teamchallenge -->
  <h4 style="padding:5px 20px">DEFI UNIQUE A L'EQUIPE</h4>
  <p style="padding:10px 20px">Le défi doit être réalisé avec au moins 10 personnes de l'équipe, en déguisement !</p>
  <div class="uniqueChallenge">
  </div>
  <!-- common challenge -->
  <br />
  <br />
</div>
