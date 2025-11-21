<div style="width:100%; display: grid;grid-template-columns:1fr 1fr 1fr 1fr; padding: 12px; gap: 10px;font-size: 10px;font-family:sans-serif; flex-wrap: wrap">
    @foreach ($allCustomers as $customer)
    <div style="padding:12px;border:1px solid black; border-radius: 8px; display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 4px;">
        <h1 style="font-size:40px;">👤</h1>
    <h1>Name : {{ $customer->name }}</h1>
    <h1>Last Name : {{ $customer->lastName }}</h1>
    </div>
    @endforeach
    <!-- I begin to speak only when I am certain what I will say is not better left unsaid. - Cato the Younger -->
</div>
