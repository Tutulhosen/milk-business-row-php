
document.getElementById("searchName").addEventListener("input", function () {
    let searchQuery = this.value.trim();

    if (searchQuery !== "") {
        // Make an AJAX request to the backend
        fetch(`search_customer.php?query=${encodeURIComponent(searchQuery)}`)
            .then((response) => {
                if (!response.ok) throw new Error(`HTTP error! Status: ${response.status}`);
                return response.json();
            })
            .then((data) => {
                let resultsDiv = document.getElementById("results");
                resultsDiv.innerHTML = "";

                if (Array.isArray(data) && data.length > 0) {
                    data.forEach((customer) => {
                        // Create a styled div for each result
                        let suggestion = document.createElement("div");
                        suggestion.className = "suggestion-item p-2 mb-2 border rounded shadow-sm";
                        suggestion.style.cursor = "pointer";

                        // Add customer details inside the div
                        suggestion.innerHTML = `
                            <div><strong>${customer.cust_name}</strong></div>
                            <div>${customer.cust_number}</div>
                        `;

                        // Attach a click event to populate the form
                        suggestion.onclick = () => {
                            document.getElementById("searchName").value = customer.cust_name;
                            document.getElementById("customerName").value = customer.cust_name;
                            document.getElementById("customerAddress").value = customer.cust_add;
                            document.getElementById("mobileNumber").value = customer.cust_number;
                            document.getElementById("customerId").value = customer.cust_id;
                            document.getElementById("customerEmail").value = customer.cust_email;

                            // Clear the suggestions
                            resultsDiv.innerHTML = "";
                        };

                        // Append to the results container
                        resultsDiv.appendChild(suggestion);
                    });
                } else {
                    resultsDiv.innerHTML = "<div class='text-muted'>No results found</div>";
                }
            })
            .catch((error) => console.error("Error fetching search results:", error));
    } else {
        document.getElementById("results").innerHTML = ""; // Clear when input is empty
    }
});

