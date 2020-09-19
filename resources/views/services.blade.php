@extends('app')

@section('title', 'Services')

@section('content')
<H1>This is a Header From Services!</H1>
<H2>This is a Medium Header</H2>
<P> This is a new paragraph!

<ul>

  @forelse($services as $service)
      <ul>
      <li>{{$service->name}}<br></li>
      </ul>
     

  @empty
   <p>Nema nis ode</p>
  @endforelse


</ul>



@endsection
