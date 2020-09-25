<h1> Customer details</h1>
<a href="/customers">Back</a><br>
<strong>Name:</strong><p>{{$customer->name}}</p>
<strong>Email:</strong><p>{{$customer->email}}</p>
<div>
<div>
<a href="/customers/{{$customer->id}}/edit">Edit Customer</a>           

<form action="/customers/{{$customer->id}}" method="post">
    @method('DELETE')
    @csrf
    <button>Delete</button>
</div>
