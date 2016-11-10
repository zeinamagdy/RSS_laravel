@section('content')
  <div class="header">
    <?php echo "<pre>";var_dump($data["items"]["data"]);echo"</pre>"; die();?>
    
  </div>

  @foreach ($data["items"] as $item)
    <div class="item">
      <h2><a href="{{ $item->get_permalink() }}">{{ $item->get_title() }}</a></h2>
      <p>{{ $item->get_description() }}</p>
      <p><small>Posted on {{ $item->get_date('j F Y | g:i a') }}</small></p>
    </div>
  @endforeach
@endsection