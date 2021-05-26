function createBubble()
{
  let bubbles = $('.bubble');
  const busywords = ['responsive','animiert','individuell','adaptives Design','CSS','kreativ','genau das was du willst','wir übernehmen das Hosting für dich', 'Full-stack', 'HTML','JavaScript','PHP','Mobile-first','<span style="font-size:100px;">&#129327;</span>','<span style="font-size:100px;">&#129488;</span>', '<span style="font-size:100px;">&#128525;</span>','Fairness']

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
