@extends('app')

@section('title', 'Services')

@section('content')
<H1>This is a Header From Services!</H1>
<H2>This is a Medium Header</H2>
<P> This is a new paragraph!

    <form action="/service" method="post">
      <input type="text" name="name" autocomplete="off">
      <button>Add Service</button>
      @csrf
    </form>
    <p style="color:red">@error("name") {{$message}} @enderror</p>

  <ul>
    <!-- ovo je neki loop "FORELSE" php koji nije "FOREACH" i ja ne znam bas ali izgleda ok -->
    <!-- u stvari to je loop sa opcijom ako je empty tell user there is nothing here so far -->
    @forelse($services as $service)
      <ul>
        <li>{{$service->name}}<br></li>
      </ul>
     
    @empty
     <p>Nema nis ode jbsh ga</p>
    @endforelse

  </ul>
@endsection
