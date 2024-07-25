<form action="/payment" method="POST">
    @csrf
    <input type="text" name="order_id" placeholder="Order ID" required>
    <input type="number" name="gross_amount" placeholder="Amount" required>
    <input type="text" name="customer_name" placeholder="Customer Name" required>
    <input type="email" name="customer_email" placeholder="Customer Email" required>
    <input type="text" name="customer_phone" placeholder="Customer Phone" required>
    <button type="submit">Pay Now</button>
</form>
