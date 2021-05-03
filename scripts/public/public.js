var phpFiles = ['home', 'events', 'choose', 'starget', 'leaderboard', 'managers'];
var links = $('.bottomMenu ul li');
var opened = false;
let URL = 'API/';

ajaxLoader("public_"+phpFiles[0], showContent);
$(links[0]).css('color', 'var(--contrast)');
console.info('public.js loaded');

$(links).click(function(){
  $('.publicContent').html('');
  $('.loader').css('display', 'block');
  linkIndex = links.index($(this));
  ajaxLoader("public_"+phpFiles[linkIndex], showContent);
  $(links).css('color', 'var(--light)');
  $(this).css('color', 'var(--contrast)');
});

function toggleChallenge(elmt){
  var teams = $('.teamSquare');
  teamID = teams.index(elmt);
  $('.scrollable').animate( { scrollTop:0 }, 300 );
  $.ajax({
    type: "POST",
    url: URL+'public/infos.php',
    data: {'teamID' : teamID},
    success: function (data){
      console.info(data);
      var infos = JSON.parse(data);
      $('.teamPanel').toggleClass('showHelp');
      $('.teamPanel .infos-teamName').html(infos.teamName);
      $('.teamPanel .infos-teamPoints').html(infos.teamPoint + '<i class="fa fa-coins"></i>');

    }
  });
  $.ajax({
    type: "POST",
    url: URL+'public/challenges.php',
    data: {'teamID' : teamID},
    success: function (data){
      console.info(data);
      var challenges = JSON.parse(data);
      var className;
      var title;
      var flag = false;
      $('.uniqueChallenge').html('');
      for(var i = 0; i < challenges.length; i++){
        if(challenges[i].challengeDone == 1){
          className = 'challengeDone';
        } else {
          className = '';
        }
        if(flag == false && challenges[i].uniqueChallenge == 0){
          title = '<p class="headerTitle">Défis communs aux équipes</p>';
          flag = true;
        } else{
          title = '';
        }
        $('.uniqueChallenge').html($('.uniqueChallenge').html() + title + '<div class="challengeBox '+ className +'"><h4>'+challenges[i].challengeTitle+'</h4><p>'+challenges[i].challengeDesc+'</p><div class="challengePoint">'+challenges[i].challengePoint+'</div></div>')
      }
    }
  });
}
//callback function for AJAX
function showContent(xhttp) {
  $('.publicContent').html(xhttp.responseText);
  $('html, body').animate( { scrollTop:0 }, 300 );
  $('.loader').css('display', 'none');
}

function toggleHelp(elmt){
  $('.helpWindow').toggleClass('showHelp');
};

$('body').on('click', '.targetRow', function(){
  var rows = $('.targetRow');
  var reasons = $('.tReason');
  var angles =  $('.targetRow i.fa');
  console.info(angles);
  var index = rows.index($(this));
  if($(reasons[index]).is(':visible')){
    $(reasons[index]).hide();
    $(angles).removeClass('fa-angle-down');
    $(angles).addClass('fa-angle-right');
  } else {
    $(reasons).hide();
    $(angles).removeClass('fa-angle-down');
    $(angles).addClass('fa-angle-right');
    $(reasons[index]).show();
    $(angles[index]).toggleClass('fa-angle-right fa-angle-down');
  }

});
