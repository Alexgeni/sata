@extends("layouts.master")

@section ('content')

  
 
  <div class="search-parent">
    <div class="search-div">
      <input type="text" autocomplete="off" name="search" id="search" placeholder="<%search%>" onkeyup="showResult(this.value)" />
      <div id="livesearch"></div>
    </div>
  </div>
  <h3 class="ttitle">Frequency of {{$items->name}} Channel <br><small>Last update in {{$items->updated_at}}</small>
  </h3>
  

  <div class="table">
    <table>
      <tr>
        <th>Channel name </th>
        <td>{{$items->name}}</td>
      </tr>
      <tr>
        <th>Satallite</th>
        <td>{{$items->sata}}</td>
      </tr>
      <tr>
        <th>Frequency</th>
        <td>{{$items->freq}}</td>
      </tr>
      <tr>
        <th>Polarization</th>
        <td>{{$items->polar}}</td>
      </tr>
      <tr>
        <th>Sample rate</th>
        <td>{{$items->srate}}</td>
      </tr>
      <tr>
        <th>FEC</th>
        <td>{{$items->fec}}</td>
      </tr>
    </table>
    <!-- table -->
  </div>
  <div class="ads"></div>

@endsection

