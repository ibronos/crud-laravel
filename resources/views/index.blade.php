@extends('layout.mainlayout')
@section('content')


<div class="container">
	<a class="" href="/crud/create">Add</a>
	<table class="table table-bordered table-striped">
	 <tr>
	  <th width="10%">Image</th>
	  <th width="35%">First Name</th>
	  <th width="35%">Last Name</th>
	  <th width="30%">Action</th>
	 </tr>
	 @foreach($data as $row)
	  <tr>
	   <td><img src="{{ URL::to('/') }}/images/{{ $row->image }}" class="img-thumbnail" width="75" /></td>
	   <td>{{ $row->first_name }}</td>
	   <td>{{ $row->last_name }}</td>
	   <td>
	    	<a href="{{ route('crud.show', $row->id) }}">show </a> |
	    	<a href="{{ route('crud.edit', $row->id) }}">edit </a> |
	    	<form method="post" action="{{ route('crud.destroy', $row->id) }}">
	    		@csrf
	    		@method('delete')
	    		<button type="submit">delete</button>
	    	</form>
	   </td>
	  </tr>
	 @endforeach
	</table>
{!! $data->links() !!}

</div>


@endsection