<style>
.articleSearchContainer .btn.btn-primary {
  background-color: #5c4084;
  border-color: #5c4084;
  outline: none;
}

.articleSearchContainer .btn.btn-primary:hover {
    background-color: darken(#5c4084, 10%);
    border-color: darken(#5c4084, 10%);
  }
.articleearchContainer .btn.btn-primary:active {
    /* background-color: lighten(#5c4084, 5%);
    border-color: lighten(#5c4084, 5%); */
}

.articleSearchContainer .jobSearchInput{
    border-top-right-radius: 0px;
    border-bottom-right-radius: 0px;
}
.articleSearchContainer .jobSearchButton{
    border-top-left-radius: 0px;
    border-bottom-left-radius: 0px; 
    border-top-right-radius: 5px;
    border-bottom-right-radius: 5px; 
}
</style>
<div class="articleSearchContainer">
    <div class="input-group shadow">
      <input type="text" class="form-control form-control-lg articleSearchInput" placeholder="Search Articles">
      <button class="browse btn btn-primary articleSearchButton px-4" type="button"><i class="fas fa-search"></i></button>
    </div>
</div>
