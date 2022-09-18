<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Edit Book</title>
  <!-- CSS only -->
  <link rel="stylesheet" href="/css/style.css">
</head>
<body>
  <!-- Header -->
  <section class="header">
      <a href="{{  url('home') }}">
        <h1 class="logo"> LIBRARY SYSTEM </h1>
      </a>
      <nav>
        <ul class ='nav-links'>
          <li><a href="{{ url('home')}}">Home</a></li>
          <li><a href="{{ url('maintenance') }}">Maintenance</a></li>
        </ul>
      </nav>
      <a href="#" class="user">username</a>
  </section>

  {{-- Edit Book Form  --}}
  <div class="hero">
    <div class="wrapper">
      <div class="form signup">
        <header>Edit Book</header>
        @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
          {{ Session::get('success') }}
        </div>
        @endif
        <form action="{{ url('update-book') }}" method="post">
          @csrf
          <div class="error-txt">Please fill all the required fields!</div>
          <input type="hidden" name="id" value=" {{ $data->id }}">
          <div class="field input">
            <label class="form-label">BookTitle</label>
            <input type="text" class='form-control' name='booktitle' placeholder="{{ "Enter Book Title" }}" value="{{ $data->BookTitle}}">
            @error('booktitle')
            <div class="alert alert-danger" role="alert">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="field input">
            <label class="form-label">Publisher</label>
            <input type="text" class='form-control' name='publisher' placeholder="Enter Publisher" value="{{ $data->Publisher }}">
            @error('publisher')
            <div class="alert alert-danger" role="alert">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="field input">
            <label class="form-label">Author</label>
            <input type="text" class='form-control' name='author' placeholder="Enter Author" value="{{ $data->Author }}">
            @error('author')
            <div class="alert alert-danger" role="alert">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="field input">
            <label class="form-label">Year Published</label>
            <input type="text" class='form-control' name='yearpublished' placeholder="Enter Year Published" value="{{ $data->YearPublished }}">
            @error('yearpublished')
            <div class="alert alert-danger" role="alert">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="field input">
            <label class="form-label">Volume</label>
            <input type="text" class='form-control' name='volume' placeholder="Enter Volume" value="{{ $data->Volume }}">
            @error('volume')
            <div class="alert alert-danger" role="alert">
              {{ $message }}
            </div>
            @enderror
          </div>
          <br>
          <div class="actions">
            <button type="submit" class="btn btn-primary submit">Submit</button>
            <a href="{{ url('maintenance') }}" class="btn btn-secondary">Back</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>