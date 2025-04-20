<style>
.jobSearchContainer .btn.btn-primary {
  background-color: #5c4084;
  border-color: #5c4084;
  outline: none;
}

.jobSearchContainer .btn.btn-primary:hover {
    background-color: darken(#5c4084, 10%);
    border-color: darken(#5c4084, 10%);
  }
.jobSearchContainer .btn.btn-primary:active {
    /* background-color: lighten(#5c4084, 5%);
    border-color: lighten(#5c4084, 5%); */
}

.jobSearchContainer .jobSearchInput{
    border-top-right-radius: 0px;
    border-bottom-right-radius: 0px;
}
.jobSearchContainer .jobSearchButton{
    border-top-left-radius: 0px;
    border-bottom-left-radius: 0px; 
    border-top-right-radius: 5px;
    border-bottom-right-radius: 5px; 
}
</style>
<div class="jobSearchContainer">
    <div class="input-group shadow">
      <input type="text" class="form-control form-control-lg jobSearchInput" placeholder="Search Jobs">
      <button class="browse btn btn-primary jobSearchButton px-4" type="button"><i class="fas fa-search"></i></button>
    </div>
</div>


<script>
  // document.getElementByClassName('card').addEventListener('keyup',filter)
  // function filter(){
  //   var term = document.getElementByClassName('card').value;
  //   var tag = document.getElementByClassName('card li');
  //   for (i=0;i<tag.length;i++){
  //     if (tag[i].innerHTML.indexOf(term) !== -1){
  //       tag[i].style.display = 'block'
  //     } else {
  //       tag[i].style.display = 'none'
  //     }
  //   }
  // }
</script>