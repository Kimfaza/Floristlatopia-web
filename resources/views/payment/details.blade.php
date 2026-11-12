<!DOCTYPE html>
<html>
<head>
    <title>Payment Details</title>
</head>
<body>
    <h1>Payment Details</h1>
    <p>Order ID: {{ $order_id }}</p>
    <p>Amount: {{ $gross_amount }}</p>
    <p>Customer Name: {{ $customer_name }}</p>
    <p>Customer Email: {{ $customer_email }}</p>
    <p>Customer Phone: {{ $customer_phone }}</p>
    <form action="/payment" method="POST">
        @csrf
        <input type="hidden" name="order_id" value="{{ $order_id }}">
        <input type="hidden" name="gross_amount" value="{{ $gross_amount }}">
        <input type="hidden" name="customer_name" value="{{ $customer_name }}">
        <input type="hidden" name="customer_email" value="{{ $customer_email }}">
        <input type="hidden" name="customer_phone" value="{{ $customer_phone }}">
        <button type="submit">Proceed to Payment</button>
    </form>
</body>
</html>
