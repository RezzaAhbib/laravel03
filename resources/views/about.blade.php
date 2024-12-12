<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CatDelivery</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="m-0 p-0">

    <!-- Header -->
    <div class="bg-red-600 flex justify-between items-center p-5">
        <h1 class="text-white text-3xl font-bold">CatDelivery</h1>
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Login
        </button>
    </div>

    <!-- Main Section -->
    <div class="bg-cover bg-center min-h-screen" style="background-image: url('background-image.jpg');">
        <div class="container mx-auto py-10">

            <!-- Menu Items -->
            <div class="space-y-4">
                <!-- Item 1 -->
                <div class="bg-white flex justify-between items-center p-4 rounded-lg shadow-lg">
                    <div class="flex items-center">
                        <img src="assests\images\nasi goreng original.jpg" alt="Nasi Goreng Original" class="w-20 h-20 object-cover rounded-lg">
                        <div class="ml-4">
                            <h2 class="text-lg font-bold">Nasi Goreng Original</h2>
                            <p>Rp 20.000</p>
                        </div>
                    </div>
                    <button class="bg-red-600 hover:bg-red-800 text-white py-2 px-4 rounded-lg">
                        Order Now
                    </button>
                </div>

                <!-- Item 2 -->
                <div class="bg-white flex justify-between items-center p-4 rounded-lg shadow-lg">
                    <div class="flex items-center">
                        <img src="assests\images\nasi goreng. cumi.png" alt="Nasi Goreng Cumi" class="w-20 h-20 object-cover rounded-lg">
                        <div class="ml-4">
                            <h2 class="text-lg font-bold">Nasi Goreng Cumi</h2>
                            <p>Rp 25.000</p>
                        </div>
                    </div>
                    <button class="bg-red-600 hover:bg-red-800 text-white py-2 px-4 rounded-lg">
                        Order Now
                    </button>
                </div>

                <!-- Item 3 -->
                <div class="bg-white flex justify-between items-center p-4 rounded-lg shadow-lg">
                    <div class="flex items-center">
                        <img src="assests\images\nasi goreng. udang.jpeg" alt="Nasi Goreng Udang" class="w-20 h-20 object-cover rounded-lg">
                        <div class="ml-4">
                            <h2 class="text-lg font-bold">Nasi Goreng Udang</h2>
                            <p>Rp 28.000</p>
                        </div>
                    </div>
                    <button class="bg-red-600 hover:bg-red-800 text-white py-2 px-4 rounded-lg">
                        Order Now
                    </button>
                </div>

                <!-- Item 4 -->
                <div class="bg-white flex justify-between items-center p-4 rounded-lg shadow-lg">
                    <div class="flex items-center">
                        <img src="nasi-goreng-ati-ampela.jpg" alt="Nasi Goreng Ati Ampela" class="w-20 h-20 object-cover rounded-lg">
                        <div class="ml-4">
                            <h2 class="text-lg font-bold">Nasi Goreng Ati Ampela</h2>
                            <p>Rp 22.000</p>
                        </div>
                    </div>
                    <button class="bg-red-600 hover:bg-red-800 text-white py-2 px-4 rounded-lg">
                        Order Now
                    </button>
                </div>
            </div>

            <!-- Cart Section -->
            <div class="fixed bottom-4 right-4 bg-white p-4 rounded-lg shadow-lg">
                <div class="flex items-center">
                    <img src="cart-icon.png" alt="Cart Icon" class="w-10 h-10">
                    <h3 class="text-lg font-bold ml-2">Keranjang</h3>
                </div>
                <p>Total: Rp 0</p>
                <button class="bg-red-600 hover:bg-red-800 text-white py-2 px-4 rounded-lg mt-2">
                    Checkout
                </button>
            </div>

        </div>
    </div>

</body>
</html>
