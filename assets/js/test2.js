/*function hide_this_shit() {
    var next_button = document.getElementById('OP');
    if ($("#userName").val() == '' || $("#password").val() == '' || $("#confirm").val() == '')
    {
      
    next_button.style.pointerEvents = 'none';
     next_button.style.cursor = 'default';
     //document.querySelector('#OP').innerHTML = 'show comments';
    }
  };
  */
  function togglecommentws(x, y) {
    // get the clock


    var mybutton = document.getElementById(y);
    

   //mybutton.style.display = 'none';
    var displaySetting = mybutton.style.display;
  

    var clockButton = document.getElementById(x);
    //mybutton.style.display = 'none';
    
    if (displaySetting == 'block') {
        // clock is visible. hide it
        mybutton.style.display = 'none';
        // change button text
        clockButton.innerHTML = 'show comments';

    } else {
        // clock is hidden. show it
        mybutton.style.display = 'block';
        // change button text
        clockButton.innerHTML = 'Hide comments';

    }
}


