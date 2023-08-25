<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <title>Toko Buku</title>
</head>

<body>

    <div class="container my-4">
        <h2>Invoice</h2>
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('assets/img/Insecurity_book.jpg') }}" class="card-img-top"
                alt="Insecurity Self Improvement Book">
            <div class="card-body">
                <h5 class="card-title">Insecurity</h5>
                <p class="card-text">Ini dia buku self-healing terpopuler yang wajib kamu miliki, Insecurity is My Middle Name yang ditulis oleh Alvi Syahrin.</p>
                <div class="mb-3">
                    <label for="qty" class="form-label">Quantity : {{ $order->qty }}</label>                    
                </div>
                <div class="mb-3">
                    <label for="qty" class="form-label">Customer Name : {{ $order->name }}</label>                    
                </div>
                <div class="mb-3">
                    <label for="qty" class="form-label">No. Telp : {{ $order->phone }}</label>                    
                </div>
                <div class="mb-3">
                    <label for="qty" class="form-label">Address : {{ $order->address }}</label>                    
                </div>
                <div class="mb-3">
                    <label for="qty" class="form-label">Status Pay : {{ $order->status }}</label>                    
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>
