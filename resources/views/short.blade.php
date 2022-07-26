<h1>ggg</h1>
<!DOCTYPE html>
<html>
<head>
    <title>How to create url sortener in Laravel? - </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" />
</head>
<body>
   
<div class="container">
    <h1>How to create url sortener in Laravel? -</h1>
   
    <div class="card">
      <div class="card-header">
        <form method="POST" action=" {{ url ('/short') }}">
            @csrf
            <div class="input-group mb-3">
              <input type="text" name="link" class="form-control" placeholder="Enter URL" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-success" type="submit">Generate Sorten Link</button>
              </div>
            </div>
        </form>
      </div>
      <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Sort Link</th>
                        <th>Url</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($datas as $row)
                        <tr>
                            <td>{{ $row->Id }}</td>
                            <td><a href="{{ url('/short', $row->Codes) }}" target="_blank">"{{ url('/short', $row->Codes) }}"</a></td>
                            <td>{{ $row->Url }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
      </div>
    </div>
   
</div>
    
</body>
</html>