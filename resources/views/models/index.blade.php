<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>models crud</title>
    <link rel="stylesheet" href="{{asset('/css/models.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="navbar">
		<div></div>
		<ul>
        <li><a href="{{ route('manufacturer.index') }}">Manufacturer</a></li>
			<li><a href="{{ route('models.index') }}">Models</a></li>
			<li><a href="{{ route('parts.index') }}">Parts</a></li>
            @if (Route::has('login'))
      @auth
      <li >
      <a href="{{ route('login') }}">{{ Auth::user()->name }}</a>
      </li>
      @else
      <li >
      <a  href="{{ route('login') }}">Log in</a>
      </li>
      <li >
      <a  href="{{ route('register') }}">Register</a>
      </li>
    @endauth
    @auth
    <li><form action="{{ route('logout') }}" method="POST" class="d-flex" role="search">
                @csrf
                
                <button class="m-0 p-1 btn btn-danger"  type="submit">Log out</button>
            </form>
    
    

            @if ($message = Session::get('success'))


    @endauth


@endif
@endif
        
        
        
        </ul>
	</div>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>models CRUD</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('models.create') }}"> Add models</a>
                    <a class="btn btn-success" href="{{ url('/models.orderbyBirthDate') }}"> Sort by date</a>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <div classs="form-group" >
            </div>


        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>id</th>
                    <th>manufacturer name</th>
                    <th>models name</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($models as $models)
                    <tr>
                        <td>{{ $models->id }}</td>
                        <td>{{ $models->manufacturer->name }}</td>
                        <td>{{ $models->name }}</td>
                        
                        <td>
                            <form action="{{ route('models.destroy',$models->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('models.edit',$models->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')  
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
</body>

   
</html>