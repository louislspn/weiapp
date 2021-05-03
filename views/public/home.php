<div class="circle help" onclick="toggleHelp($(this))">
  <p>?</p>
</div>
<!-- container for all elements in the page  -->
<?php if($next_event != null) { ?>
<div class="notifcation">
  <h3>RAPPEL</h3>
  <?php echo htmlspecialchars($next_event['eventNotification']);?>
</div>
<div class="counterContainer">
  <!-- title -->
  <h2>Prochain évenement</h2>
  <!-- Counter until next event -->
  <div class="counter">
    <span id="countdown"></span>
  </div>
  <!-- name of the event -->
  <div class="counterLabel"><?php echo htmlspecialchars($next_event['eventName']);?></div>
  <span class="separation">&ctdot;</span>
  <!-- infos of the event -->
  <div class="eventInfos">
    <span class="location"><i class="far fa-map"></i><?php echo htmlspecialchars($next_event['eventLocation']);?></span>
    <br />
    <span class="length"><i class="far fa-clock"></i><?php echo date('H:i', $next_event['eventTime']);?></span>
    <br />
    <br />
    <span class="desc"><?php echo htmlspecialchars($next_event['eventDesc']);?></span>
  </div>
</div>
<div class="content">
  <h4>DOCUMENTS</h4>
  <p>Retrouvez ci-dessous les documents pour votre participation au WEI</p>
  <br />
  <a href="documents/Décharge-et-autorisation-pour-mineurs.pdf" target="_blank">Décharge et autorisation pour mineurs</a>
  <br />
  <a href="documents/Fiche-sanitaire-WEI-2019.pdf" target="_blank">Fiche sanitaire pour le WEI 2019</a>
  <br />
  <a href="documents/Fiche_Participation_WEI_2019.pdf" target="_blank">Fiche de participation au WEI 2019</a>
  <br /><br /><br />
  <h4>GROUPE FACEBOOK</h4>
  <p>Rejoignez le groupe Facebook de la promo <a href="https://www.facebook.com/groups/450777182423709/" target="_blank">ici</a></p>
  <br />
</div>
<div class="content">
</div>
<?php } ?>
<!-- pop up "help"  -->
<div class="helpWindow">
  <div class="circle close" onclick="toggleHelp($(this))">
    <i class="fa fa-times"></i>
  </div>
  <div class="scrollable">
    <h3>Qu'est-ce que le WEI ?</h3>
    <img src="_assets/<?php echo $result[0]['infoLogo']; ?>" class="logo" />
    <p><?php echo $result[0]['infoDesc'] ?>
    </p>
    <h3>A quoi sert WEI APP ?</h3>
    <p>WEI APP c'est l'app qui te permettera de tout savoir sur ta semaine d'intégration,
      tu pourras être tenu au courant des évenements à venir, tu pourras également consulter
      les défis qu'il te reste toi et ton équipe à faire mais surtout, où en sont les autres équipes grâce
      au classement général ! En bonus, tu peux admirer tes intégrants préférés dans le dernier onglet ...
    </p>
  </div>
</div>

<?php if($next_event != null) {?>
<script>
    // Set the date we're counting down to
    var countDownDate = <?php echo $next_event['eventTime'];?> * 1000;

    // Update the count down every 1 second
    var x = setInterval(function() {

        // Get todays date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the result in the element with id="demo"
		var target = document.getElementById("countdown");
		if(target !== null) {
			target.innerHTML = days + "j " + hours + "h "
            + minutes + "m " + seconds + "s ";

        if(distance < 0) {
            target.innerHTML = "EN COURS"
        }

		}
    }, 1000);
</script>
<?php } ?>
