$('#testimony-submit').click(function(){
  console.log('Hello');
  $('#testimony_submit_form').toggleClass('submit-testimony-visible');
})

$('#close_submit_form').click(function(e){
  e.preventDefault()
  $('#testimony_submit_form').toggleClass('submit-testimony-visible');
})
