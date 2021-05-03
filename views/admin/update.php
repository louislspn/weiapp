<h2 class="lineAfter">Défis par équipes</h2>
<?php for ($i=0; $i < count($resultTeam); $i++) { ?>
  <div>
    <div class="teamLabel" onclick="displayChallenge($(this), <?php echo $i; ?>)">
      <?php echo $resultTeam[$i]['teamName'].' &middot; '; ?>
      <?php echo '<span>'.$resultTeam[$i]['done'].'</span> / '.$resultTeam[$i]['number']; ?>
      <i class="fa fa-angle-right"></i>
    </div>
    <?php for($j=0; $j < count($resultTeam[$i]['challenges']); $j++){ ?>
      <div data-id="<?php echo $i; ?>" style="display:none;"class="challengeBox <?php if($resultTeam[$i]['challenges'][$j]['challengeDone'] == 1){ echo 'challengeDone';} ?>" onClick="changeChallengeState($(this), <?php echo $resultTeam[$i]['challenges'][$j]['challengeID']; ?>, '<?php echo $_SESSION['adminTk']; ?>')">
        <h4> <?php echo $resultTeam[$i]['challenges'][$j]['challengeTitle']; ?> </h4>
        <p> <?php echo $resultTeam[$i]['challenges'][$j]['challengeDesc']; ?> </p>
        <div class="challengePoint">
          <?php echo $resultTeam[$i]['challenges'][$j]['challengePoint']; ?>
        </div>
      </div>
  <?php } ?>
  </div>
<?php } ?>
<h2 class="lineAfter">Autres</h2>
