<!doctype html>
<html lang="en">

<head>
    <title>Welcome Page</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <h1>Welcome Page</h1>
    <form method="post" action="/upload" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="profile">File</label>
            <input type="file" name="profile" id="profile" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary" name="submit" value="submit">Submit</button>
    </form>
    <div>
        {{-- <img src="storage/app/public/uploads/1676527417-ravi.png"> --}}
        {{-- {{URL::asset('storage/uploads/1676527417-ravi.png')}} --}}
        @if (@isset($filename))
            <img src="{{ URL::asset('storage/uploads/'.$filename)}}" alt="Profile Pic" height="500" width="1200" >
            <a href="/delete/{{ $filename }}" class="btn btn-danger">Delete</a>
            {{-- <h1>{{ $filename }}</h1> --}}
        @endif
    </div>
    <table>
        <tr>
            <th>Images</th>
        </tr>
        @if (@isset($files))
            @foreach ($files as $file)
                {{-- {{ $flag = basename($file)}} --}}
                @php $temp = basename($file) @endphp
                {{-- <tr><td><h6>{{basename($file) }}</h6></td></tr> --}}
                <tr>
                    <td><img src="{{ URL::asset('storage/uploads/'.$temp) }}" alt="Profile Pic" height="500" width="1200"></td>
                    <td><a href="/delete/{{ $temp }}" class="btn btn-danger">Delete</a></td>
                </tr>
            @endforeach
        @endif
    </table>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
