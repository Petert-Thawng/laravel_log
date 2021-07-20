<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Laravel Log!</title>
</head>
<body>
<div class="container">
    <form action="{{ route('logs') }}">
        <div class="form-group">
            <label for="exampleInputEmail1">For Date</label>
            <input type="date" name="date" class="form-control" value="{{ $date ? $date->format('Y-m-d') : today()->format('Y-m-d') }}">
        </div>
        <button type="submit" class="btn btn-primary">Get Logs</button>
    </form>
    @if(empty($data['file']))

        <div>
            <h3>No Logs Found</h3>
        </div>
    @else
        <div>
            <h5>File Size : <b>{{ round($data['size'] / 1024) }} KB</b></h5>
            <pre>{{ $data['file'] }}</pre>
        </div>
    @endif
</div>
{{-- View Log file info and contents --}}

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>