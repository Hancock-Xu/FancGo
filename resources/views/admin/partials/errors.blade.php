@if(count($errors)>0)
	<div class="alert-danger">

			<strong>
				Whoops!
			</strong>
			There are some problem with you input.<br><br>


			<ul>
				@foreach($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
			</ul>

	</div>
@endif