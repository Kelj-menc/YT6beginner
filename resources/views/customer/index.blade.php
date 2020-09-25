<h1>Customers</h1>

<a href="/customer/create">Add New Customer</a>

@forelse($customers as $customer)
    <p><strong>name: {{$customer->name}} </strong> email: {{$customer->email}}</p>
@empty
    <p>No ustomers to show for now</p>
@endforelse