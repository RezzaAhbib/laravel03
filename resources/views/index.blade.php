<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAT DELIVERY</title>
    <link rel="shortcut icon" href="images/—Pngtree—muslim boy pray befor he_6196599.png" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-black font-sans">
    <header class="bg-red-800 text-white py-5 text-center">
        <div class="container mx-auto">
            <h1 class="text-2xl font-bold">Cat Delivery</h1>
            <button id="login-btn" class="absolute top-5 right-5 px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-700">Login</button>
        </div>
    </header>

    <main class="py-10">
        <div class="container mx-auto">
            <section id="menu" class="mb-10">
                <h2 class="text-xl font-semibold mb-5 border-b-2 border-white pb-2">Menu</h2>

                <!-- Menu items -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
                    <div class="flex items-center border border-gray-300 bg-white p-4 rounded-lg shadow-md hover:scale-105 transition-transform">
                        <img src="\images\nasi goreng original.jpg" alt="Nasi Goreng Original" class="w-24 h-24 object-cover mr-5 rounded-lg">
                        <div>
                            <h3 class="text-lg font-semibold">Nasi Goreng Original</h3>
                            <p class="text-red-500">-Rp 20.000</p>
                            <button class="mt-2 px-4 py-2 bg-red-800 text-white rounded-lg">Order Now</button>
                        </div>
                    </div>
                    <div class="flex items-center border border-gray-300 bg-white p-4 rounded-lg shadow-md hover:scale-105 transition-transform">
                        <img src="/images/nasi goreng. cumi.png" alt="Nasi Goreng Cumi" class="w-24 h-24 object-cover mr-5 rounded-lg">
                        <div>
                            <h3 class="text-lg font-semibold">Nasi Goreng Cumi</h3>
                            <p class="text-red-500">-Rp 25.000</p>
                            <button class="mt-2 px-4 py-2 bg-red-800 text-white rounded-lg">Order Now</button>
                        </div>
                    </div>
                    <div class="flex items-center border border-gray-300 bg-white p-4 rounded-lg shadow-md hover:scale-105 transition-transform">
                        <img src="/images/nasi goreng. udang.jpeg" alt="Nasi Goreng Udang" class="w-24 h-24 object-cover mr-5 rounded-lg">
                        <div>
                            <h3 class="text-lg font-semibold">Nasi Goreng Udang</h3>
                            <p class="text-red-500">-Rp 28.000</p>
                            <button class="mt-2 px-4 py-2 bg-red-800 text-white rounded-lg">Order Now</button>
                        </div>
                    </div>
                    <div class="flex items-center border border-gray-300 bg-white p-4 rounded-lg shadow-md hover:scale-105 transition-transform">
                        <img src="/images/nasi-goreng-sambel-ati-ampela-foto-resep-utama.jpg" alt="Nasi Goreng Ati Ampela" class="w-24 h-24 object-cover mr-5 rounded-lg">
                        <div>
                            <h3 class="text-lg font-semibold">Nasi Goreng Ati Ampela</h3>
                            <p class="text-red-500">-Rp 22.000</p>
                            <button class="mt-2 px-4 py-2 bg-red-800 text-white rounded-lg">Order Now</button>
                        </div>
                    </div>
                </div>
            </section>

            <section id="cart" class="float-right w-full lg:w-1/3 bg-white p-5 rounded-lg shadow-md">
                <div class="flex items-center mb-4">
                    <img src="/pngegg.png" alt="Cart Icon" class="w-6 h-6 mr-2">
                    <h1 class="text-lg font-semibold">Keranjang</h1>
                </div>
                <ul id="cart-items" class="list-none mb-4">
                    <!-- Cart items will go here -->
                </ul>
                <p>Total: <span id="total" class="text-red-500">Rp 0</span></p>
                <button id="checkout-btn" class="mt-5 w-full px-4 py-2 bg-red-800 text-white rounded-lg hover:bg-green-600">Checkout</button>
            </section>
        </div>
    </main>

    <div class="modal hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center">
        <div class="bg-white rounded-lg w-11/12 max-w-md p-6">
            <span class="close text-gray-400 text-2xl font-bold float-right cursor-pointer">&times;</span>
            <h2 class="text-xl font-semibold mb-4">Checkout</h2>
            <form id="checkout-form" class="space-y-4">
                <div>
                    <label for="address" class="block text-sm font-medium">Alamat Pengiriman:</label>
                    <input type="text" id="address" name="address" required class="w-full px-3 py-2 border border-gray-300 rounded-lg">
                </div>
                <div>
                    <label for="phone" class="block text-sm font-medium">Nomor Anda:</label>
                    <input type="tel" id="phone" name="phone" required pattern="[0-9]{10,12}" class="w-full px-3 py-2 border border-gray-300 rounded-lg">
                </div>
                <div>
                    <label class="block text-sm font-medium">Metode Pembayaran:</label>
                    <div class="flex items-center space-x-4">
                        <label class="flex items-center">
                            <input type="radio" id="cod" name="payment" value="cod" checked class="mr-2">
                            COD
                        </label>
                        <label class="flex items-center">
                            <input type="radio" id="bank-transfer" name="payment" value="bank-transfer" class="mr-2">
                            Bank Transfer
                        </label>
                    </div>
                </div>
                <button type="submit" class="w-full px-4 py-2 bg-red-800 text-white rounded-lg hover:bg-green-600">Pesan Sekarang</button>
            </form>
        </div>
    </div>
    <div id="notification" class="hidden fixed bottom-5 left-1/2 transform -translate-x-1/2 bg-green-500 text-white px-4 py-2 rounded-lg z-50 text-center">Pesanan berhasil ditambahkan!</div>

    <script src="script.js"></script>
</body>
</html>