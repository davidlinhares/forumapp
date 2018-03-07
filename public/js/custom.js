function updateWelcomeScreen(){
  console.log($("#welcome").height($(window).height()));
  console.log($("#welcome").width($(window).width()));
  console.log($("#welcome-left").css("height", $(window).height()));
  console.log($("#welcome-right").css("height", $(window).height()));
}

$(document).ready(function(){
    $('.collapsible').collapsible();
    $('.dropdown-button').dropdown({
        inDuration: 300,
        outDuration: 225,
        constrainWidth: true, // Does not change width of dropdown to that of the activator
        hover: false, // Activate on hover
        gutter: 0, // Spacing from edge
        belowOrigin: true, // Displays dropdown below the button
        alignment: 'left', // Displays dropdown with edge aligned to the left of button
        stopPropagation: false // Stops event propagation
    });
    $('select').material_select();
    $('.modal').modal({
      dismissible: true, // Modal can be dismissed by clicking outside of the modal
      opacity: .5, // Opacity of modal background
      inDuration: 300, // Transition in duration
      outDuration: 200, // Transition out duration
      startingTop: '4%', // Starting top style attribute
      endingTop: '10%' // Callback for Modal close
    });
    $(".button-collapse").sideNav();
    if($("#welcome").length){
      setInterval(function(){ updateWelcomeScreen(); }, 100);
    }
});
