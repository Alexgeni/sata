@extends("layouts.master")

@section ('content')


    <h3 style="font-size: 18px;color: green;text-align: center;">{{$msg}}</h3>


  <div class="search-parent">


  <form method="post" action="/create">
  	
  	{{csrf_field()}}




  	<label style="font-size: 20px;">English</label>

  	<input name="name" placeholder="Name" type="text">
  	

  	<input name="sata" placeholder="Satalite"	type="text"> 

  	
  	<input type="text" name="polar" placeholder="Polarization">


	<label style="font-size: 20px;">عربى</label>
  	
  	<input name="name_ar" placeholder="الاسم" type="text">


  	<input name="sata_ar" placeholder="القمر الصناعى" type="text">

	<input type="text" name="polar_ar" placeholder="القطب">


  	<hr>

  	<input name="freq" placeholder="Frequency" type="text">




	<select name="srate">
		<option value="27500">27500</option>
		<option value="22500">22500</option>
	</select>


	<select name="fec">
		<option value="3/4">3/4</option>
		<option value="5/6">5/6</option>
	</select>


	<button type="submit">Submit</button>




  </form>


</div>



@endsection

