@extends("layouts.master")

@section ('content')

  
  <div class="ads"></div>
  
  <div class="search-parent">
  
    <div class="search-div">
  
      <input type="text" autocomplete="off" name="search" id="search" placeholder="<%search%>" onkeyup="showResult(this.value)" />
  
      <div id="livesearch"></div>
  
    </div>
  
  </div>
  
  <div class="ads"></div>




@endsection

