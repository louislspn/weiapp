<div class="managersContainer">
<?php
  for($i = 0; $i < count($result); $i++){
  ?>
    <div class="managerBox">
      <div class="managerPicture" style="background-image:url('_assets/<?php echo $result[$i]['managerImg']; ?>')"></div>
      <h3><?php echo $result[$i]['managerName']; ?></h3>
      <div class="managerDesc"><?php echo $result[$i]['managerDesc'] ?></div>
    </div>
  <?php
  }
?>
<footer>
  WEI APP - conçue et réalisée par Louis Lespinasse.<br />
  Merci à <?php foreach($sponsors as $item) { echo ', <b>'.$item['sponsorName'].'</b>'; } ?></b> pour leur sponsoring.
  <br />
  IMT Lille Douai - Intégration 2019
</footer>
</div>
