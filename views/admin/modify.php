<!-- Confirm popup when request was done succefuly -->
<div class="confirmBox">Modification enregistrée !</div>
<!-- Name of the integration -->
<h2 class="lineAfter" id="infos">Informations principales</h2>
<div class="touchInfo" data-placeholder="Nom de l'intération" onclick="touchInfo(event, $(this), '<?php echo $_SESSION['adminTk']; ?>', 'changeName')">
  <span><?php echo $result->infoName; ?></span>
  <div class="touchHelp">Nom de l'intégration</div>
</div>
<br />
<br />
<!-- logo -->
<div class="logoContainer">
  <div class="logo">
  </div>
  <div class="inputFile">
    <input type="file" class="inputTypeFile" onchange="alert($(this).val())" />
    <button onclick="$('.inputTypeFile').click()">Importer une image</button>
  </div>
  <div class="touchHelp">Logo de l'intégration</div>
</div>
<br />
<br />
<!-- Two dates : start and end of the integration  -->
<div class="inlineContainer">
  <div class="instantModify">
    <input type="date" placeholder="YYYY-MM-DD" value="<?php echo $result->infoDateStart ?>" onblur="instantUpdate($(this), '<?php echo $_SESSION['adminTk']; ?>', 'changeDate', 'start');" />
    <div class="touchHelp">Date de début</div>
  </div>
  <div class="instantModify">
    <input type="date" placeholder="YYYY-MM-DD" value="<?php echo $result->infoDateEnd ?>" onblur="instantUpdate($(this), '<?php echo $_SESSION['adminTk']; ?>', 'changeDate', 'end');" />
    <div class="touchHelp">Date de fin</div>
  </div>
</div>
<br />
<br />
<!-- Description of the integration -->
<div class="touchInfo desc" data-placeholder="Description de l'intération" data-type="textarea" onclick="touchInfo(event, $(this), '<?php echo $_SESSION['adminTk']; ?>', 'changeDesc')">
  <span><?php echo $result->infoDesc; ?></span>
  <div class="touchHelp">Description de l'intégration</div>
</div>
<h2 class="lineAfter" id="challenges">Défis</h2>
