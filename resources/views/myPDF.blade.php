<head>
    <title>Eazy Grocery Shop</title>
</head>
<style>
    table,th,td {
    border:1px solid black;
    border-collapse:collapse;
    }
</style>
<body>
    <h3>My Order Report</h3>
    <div>
    <table>
                <thead>
                    <tr>
                        <td>Order ID</td>
                        <td>Payment Status</td>
                        <td>Amount</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->paymentStatus }}</td>
                        <td>{{ $order->amount }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
</body>

