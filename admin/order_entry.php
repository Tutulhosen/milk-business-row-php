<?php require_once('include/header.php'); ?>

<div class="container-fluid mt-4">
    <div class="row">
        <div class="col-md-3 col-lg-3">
            <?php require_once('include/sidebar.php'); ?>
        </div>

        <div class="col-md-9 col-lg-9">
            <div class="container mt-5">
                <h3 class="mb-4 font-weight-bold">Order Entry</h3>

                <!-- Customer Search -->
                <div class="col-md-3 mb-3">
                    <label for="searchName" class="form-label">Search Customer</label>
                    <input class="form-control" name="searchName" type="text" id="searchName" placeholder="Search by Name" />
                    <div id="results" class="results mt-1"></div>
                </div>

                <!-- Order Form -->
                <form id="orderForm" method="POST">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="customerName" class="form-label">Customer Name *</label>
                            <input type="text" id="customerName" name="customer_name" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label for="customerAddress" class="form-label">Address</label>
                            <input type="text" id="customerAddress" name="address" class="form-control">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="mobileNumber" class="form-label">Mobile Number</label>
                            <input type="text" id="mobileNumber" name="mobile_number" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="note" class="form-label">Note</label>
                            <input type="text" id="note" name="note" class="form-control">
                        </div>
                    </div>
                    <!-- Item Search -->
                    <div class="row mb-3 position-relative">
                        <div class="col-md-12">
                            <label for="itemSearch" class="form-label">Item</label>
                            <input type="text" id="itemSearch" class="form-control" placeholder="Search item...">
                            <div id="autocomplete-results" class="autocomplete-results d-flex flex-wrap mt-3"></div>
                        </div>
                    </div>

                    <!-- Order Summary -->
                    <div id="orderSummary" class="mt-3">
                        <h6>Total Items:</h6>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Item</th>
                                    <th>Qty</th>
                                    <th>Price</th>
                                    <th>Total</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="orderItems"></tbody>
                        </table>
                        <div class="text-end">
                            <strong>Total: <span id="totalAmount">0</span> BDT</strong>
                        </div>
                    </div>

                    <!-- Delivery Charge & Discount -->
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <label for="deliveryCharge" class="form-label">Delivery Charge</label>
                            <input type="number" id="deliveryCharge" class="form-control" value="0">
                        </div>
                        <div class="col-md-6">
                            <label for="discount" class="form-label">Discount</label>
                            <input type="number" id="discount" class="form-control" value="0">
                        </div>
                    </div>

                    <button type="submit" name="submit_order" class="btn btn-success mt-3">Submit Order</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php require_once('include/footer.php'); ?>

<script>
    // Customer Search
    document.getElementById("searchName").addEventListener("input", function () {
        let searchQuery = this.value.trim();

        if (searchQuery !== "") {
            fetch(`search_customer.php?query=${encodeURIComponent(searchQuery)}`)
                .then(response => response.json())
                .then(data => {
                    let resultsDiv = document.getElementById("results");
                    resultsDiv.innerHTML = "";

                    if (data.length > 0) {
                        data.forEach(customer => {
                            let suggestion = document.createElement("div");
                            suggestion.className = "suggestion-item p-2 border";
                            suggestion.style.cursor = "pointer";
                            suggestion.innerHTML = `<strong>${customer.cust_name}</strong> <br>${customer.cust_number} `;
                            suggestion.onclick = () => {
                                document.getElementById("customerName").value = customer.cust_name;
                                document.getElementById("customerAddress").value = customer.cust_add;
                                document.getElementById("mobileNumber").value = customer.cust_number;
                                resultsDiv.innerHTML = "";
                            };
                            resultsDiv.appendChild(suggestion);
                        });
                    } else {
                        resultsDiv.innerHTML = "<div>No results found</div>";
                    }
                });
        }
    });

    // Item Search
    document.getElementById("itemSearch").addEventListener("input", function () {
        let query = this.value.trim();

        if (query !== "") {
            fetch(`search_item.php?query=${query}`)
                .then(response => response.json())
                .then(items => {
                    let autocompleteResults = document.getElementById("autocomplete-results");

                    autocompleteResults.innerHTML = "";
                    if (items.length > 0) {
                        items.forEach(item => {
                            let card = document.createElement("div");
                            card.className = "suggestion-card";
                            card.innerHTML = `
                                <img src="img/${item.image}" alt="${item.title}">
                                <h5>${item.title}</h5>
                                <p>${item.price} BDT</p>
                            `;
                            card.onclick = () => addItemToOrder(item);
                            autocompleteResults.appendChild(card);
                        });
                    }
                });
        }
    });

    // Add Item to Order
    function addItemToOrder(item) {
        let orderItems = document.getElementById("orderItems");
        let row = document.createElement("tr");
        row.innerHTML = `
            <td>${item.title}</td>
           
            <td>
                <input type="number" value="1" min="1" class="form-control qty qty-input" 
                    style="width: 70px;" data-price="${item.price}">
            </td>
            <td>${item.price}</td>
            <td class="item-total">${item.price}</td>
            <td><button onclick="removeItem(this)" class="btn btn-danger">Remove</button></td>
        `;
        orderItems.appendChild(row);
        updateTotal();
        row.querySelector(".qty").addEventListener("input", updateRowTotal);
    }

    // Update Row Total
    function updateRowTotal() {
        let qty = parseInt(this.value);
        let price = parseFloat(this.dataset.price);
        let totalCell = this.closest("tr").querySelector(".item-total");
        totalCell.textContent = (qty * price).toFixed(2);
        updateTotal();
    }

    // Remove Item
    function removeItem(button) {
        button.parentElement.parentElement.remove();
        updateTotal();
    }

    // Update Total
    function updateTotal() {
        let total = 0;
        document.querySelectorAll("#orderItems .item-total").forEach(cell => {
            total += parseFloat(cell.textContent);
        });
        document.getElementById("totalAmount").textContent = total.toFixed(2);
    }
</script>
