<?php require './components/htmlStart.php' ?>

<main class="add-product-page">
    <div class="container mx-auto mt-20 flex items-center justify-center">

        <form method="POST" action="models/add_product.php" class="bg-warning w-1/3 p-5">
            <div class="mb-2">
                <label for="productName" class="label font-bold">
                    Enter product name
                </label>
                <input
                    type="text"
                    name="productName"
                    id="productName"
                    placeholder="Product name"
                    class="input input-bordered w-full"
                    required />
            </div>

            <div class="mb-2">
                <label for="productDesc" class="label font-bold">
                    Enter product description
                </label>
                <input
                    type="text"
                    name="productDesc"
                    id="productDesc"
                    placeholder="Product description"
                    class="input input-bordered w-full"
                    required />
            </div>

            <div class="mb-2">
                <label for="productPrice" class="label font-bold">
                    Enter product price
                </label>
                <input
                    type="number"
                    name="productPrice"
                    id="productPrice"
                    placeholder="Product price"
                    class="input input-bordered w-full"
                    required />
            </div>

            <div class="mb-2">
                <label for="productDeliveryDate" class="label font-bold">
                    Enter delivery date
                </label>
                <input
                    type="text"
                    name="productDeliveryDate"
                    id="productDeliveryDate"
                    placeholder="Delivery date"
                    class="input input-bordered w-full"
                    required />
            </div>

            <div class="mb-2">
                <label for="productQuantity" class="label font-bold">
                    Enter quantity
                </label>
                <input
                    type="number"
                    name="productQuantity"
                    id="productQuantity"
                    placeholder="Quantity"
                    class="input input-bordered w-full"
                    required />
            </div>

            <button type="submit" class="btn btn-success mt-5">
                ADD PRODUCT
            </button>
        </form>

    </div>
</main>

<?php require './components/htmlEnd.php' ?>