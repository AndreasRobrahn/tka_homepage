function createBubble()
{
  let bubbles = $('.bubble');
  const busywords = ['responsive','animiert','individuell','adaptiv','CSS','kreativ','was du willst','leichtes Hosting', 'Full-stack', 'HTML','JavaScript','PHP','Mobile-first','<span style="font-size:100px;">&#129327;</span>','<span style="font-size:100px;">&#129488;</span>', '<span style="font-size:100px;">&#128525;</span>','Fairness']

  var bubble = $("<div class='bubble'></div>");

  bubble.css('bottom', Math.floor(Math.random() * 20)+'%')
  bubble.css('left', Math.floor(Math.random() * 80)+'%')

  bubble.html('<p>'+busywords[Math.floor(Math.random() * busywords.length)]+'</p>')

  $('#bgimage').append(bubble)
  bubble.addClass('bubble-up')

  setTimeout(function(){
  bubble.remove()  }, 10000);
}
function showContactModal()
{
  // console.log('')
  $('#exampleModalCenter').modal('show')
}
function toggleContactModal() {
  $('#exampleModalCenter').modal('toggle')
}
function showErrorsModal() {
  $('#errormodal').modal('toggle')
}
function showSidebar(){
  $('.popupmenu').toggle()
  // $('#sidemenuwrapper').hide()
}
function hideSidebar(){
  $('.popupmenu').toggle()
  // $('#sidemenuwrapper').hide()
}
function toTheId(id) {
  document.getElementById(id).scrollIntoView();
}
function openSidemenu(){


  $('#sidemenu').toggle()
  $('#openbutton').toggle()
  $('#closebutton').toggle()

}
function openSidemenu1(){

  $('#sidemenu1').toggle()

}

  $('#dropdownactivate').click(function(){

    $(".hoverdropdown").toggle();
  });

  $('.dropdownrightactivate').click(function(){

    $(".dropdownright").toggle();
  }

  )
function setCookieSession()
{
  axios
  .get("/cookiesAccept")
  .then(response => {
    return true
  })
  .catch(function(error) {
    console.log(error.response);
  });

  $('#cookiedisclaimer').toggle()
  $('#cookiedisclaimer').toggle()
  // set the session
}
