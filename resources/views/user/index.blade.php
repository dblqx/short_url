@extends('user.master')
@section('title', 'short_url')
@section('content')

  <div class="container">
      <div class="row">
        <div class="col-md-12">
          
        
  
  <div align="right"><a href="{{route('user.new)}}" class="btn btn-succer"></a></div>
         
         <table class="table table-bordered table-striped">
        <tr>
          <th>LONG URL</th>
          <th>SHORT URL</th>
          <th>DATETIME</th>

        </tr>
        @foreach($short_db as $row)
        <tr><td>
          {{$row['url']}}
        </td>
        <td>
          {{$row['shorturl']}}
        </td>
        <td>
          {{$row['current_timestamp']}}
        </td>

    	</tr>

        @endforeach
      </table>
</div>
</div>

</div>

@endsection