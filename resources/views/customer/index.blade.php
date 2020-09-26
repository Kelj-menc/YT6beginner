<h1>Customers</h1>

<a href="/customers/create">Add New Customer</a>
<a href="/customers?active=1">Active customers</a>
<a href="/customers?active=0">Inactive Customers</a>



@forelse($customers as $customer)
    <p>
    <strong><a href="/customers/{{$customer->id}}">{{$customer->name}}</a></strong> 
    email: {{$customer->email}}
    </p>
@empty
    <p>No ustomers to show for now</p>
@endforelse