var titles = ['Actualiser', 'Modifier', 'Récapitulatif'];
var phpFiles = ['update', 'modify', 'sumup'];
var arrows = $('.topMenu i');
let URL = 'API/';
var isEdited = false;

updateTitle(titles[0]);
ajaxLoader("admin_"+phpFiles[0], showContent);
console.info('admin.js loaded');


$(arrows).click(function(){
  var arrowIndex = arrows.index($(this));
  var titleIndex = titles.indexOf($('.topMenu h1').text());
  if(arrowIndex == 0){
  }
  switch(arrowIndex){
    case 0:
      if(titleIndex != 0){
        updateTitle(titles[titleIndex - 1]);
        ajaxLoader("admin_"+phpFiles[titleIndex - 1], showContent);
      }
      break;
    case 1:
      if(titleIndex != (titles.length - 1)){
        updateTitle(titles[titleIndex + 1]);
        ajaxLoader("admin_"+phpFiles[titleIndex + 1], showContent);
      }
      break;
  }
});

function updateTitle(title, index){
  $('.topMenu h1').text(title);
}

//callback function for AJAX
function showContent(xhttp) {
  $('.content').html(xhttp.responseText);
}

// AJAX request to change the challenge state
function changeChallengeState(elmt, id, token){
  $.ajax({
    type: "POST",
    url: URL+'admin/challenges.php',
    data: {'action' : 'challengeState', 'id' : id, 'token' : token},
    success: function (data){
      $(elmt).toggleClass('challengeDone');
    }
  });
  var stringOfDone = elmt.parent().children().eq(0).children().eq(0);
  var intOfDone = parseInt(stringOfDone.html());
  if(elmt.hasClass('challengeDone')){
    stringOfDone.html(intOfDone - 1);
  } else{
    stringOfDone.html(intOfDone + 1);
  }
}
// function to show or hide challenges when the team is clicked
function displayChallenge(elmt, parentId){
  elmt.children().eq(1).toggleClass('fa-angle-right').toggleClass('fa-angle-down');
  $('.challengeBox').each(function() {
    if($(this).attr('data-id') == parentId){
      $(this).toggle();
    }
  });
}

function touchInfo(event, elmt, token, action){
  var span = elmt.children('span');
  if(isEdited == true && $(event.target).is('.touchInfo')){
    value = span.children().eq(0).val();
    $.ajax({
      type: "POST",
      url: URL+'admin/infos.php',
      data: {'action' : action, 'value' : value, 'token' : token},
      success: function (data){
        span.html(data);
        popConfirm('.confirmBox');
      }
    })
    isEdited = false;
  } else if(isEdited == false){
    value = span.text();
    placeholder = elmt.attr('data-placeholder');
    if(elmt.attr('data-type') === 'textarea'){
      span.html('<textarea col="10" row="10" placeholder="'+ placeholder +'">'+ value +'</textarea>');
    } else {
      span.html('<input type="text" value="'+ value +'" placeholder="'+ placeholder +'" />');
    }
    span.children().eq(0).focus();
    isEdited = true;
  }
}

function instantUpdate(elmt, token, action, inOrOut){
  var value = elmt.val();
  $.ajax({
    type: "POST",
    url: URL+'admin/infos.php',
    data: {'action' : action, 'value' : value, 'token' : token, 'inOrOut' : inOrOut},
    success: function (data){
      elmt.val(data);
      popConfirm('.confirmBox');
    }
  })
}

function popConfirm(elmt){
  $(elmt).show();
  setTimeout(function(){
    $(elmt).css('transform', 'translateX(-50%) translateY(-50%) scale(1)');
    setTimeout(function(){
      $(elmt).css('transform', 'translateX(-50%) translateY(-50%) scale(0)');
      setTimeout(function(){
        $(elmt).hide();
      },300);
    },1000);
  });
}
