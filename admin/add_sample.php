<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Requisition Form with Multiple Items, Sizes, and Colors</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            background-color: #f4f4f4;
        }

        .container {
            background-color: white;
            padding: 20px;
            max-width: 800px;
            margin: auto;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input, select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        .add-button, .remove-button {
            padding: 10px 15px;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            display: inline-block;
        }

        .add-button {
            background-color: #007bff;
        }

        .remove-button {
            background-color: #dc3545;
            margin-top: 10px;
        }

        .color-size-group {
            margin-bottom: 10px;
        }

        .color-size-group div {
            display: inline-block;
            width: 48%;
        }

        .color-size-group div input {
            width: 100%;
        }

        .item-block {
            padding: 15px;
            border: 1px solid #ccc;
            margin-bottom: 20px;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Item Requisition Form</h2>

    <form id="requisitionForm" action="process.php" method="POST">

        <!-- Container for multiple items -->
        <div id="itemsContainer">
            <!-- First item block -->
            <div class="item-block">
                <h3>Item 1</h3>

                <!-- General Item Information -->
                <div class="form-group">
                    <label for="item">Item</label>
                    <input type="text" name="item[]" placeholder="Enter item name (e.g., Golden Brass #5)" required>
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" name="description[]" placeholder="Enter item description (e.g., Closed end, A/L with ring PULLAR)" required>
                </div>

                <!-- Color and Size Fields (dynamically added) -->
                <div class="color-size-container">
                    <div class="form-group color-size-group">
                        <div>
                            <label for="color[]">Color</label>
                            <input type="text" name="color[0][]" placeholder="Enter color (e.g., Black)">
                        </div>
                        <div>
                            <label for="size[]">Size</label>
                            <input type="text" name="size[0][]" placeholder="Enter size (e.g., 19 cm)">
                        </div>
                    </div>
                </div>

                <!-- Button to add more Color and Size fields for the current item -->
                <button type="button" class="add-color-size add-button">Add Another Color & Size</button>

                <!-- Button to remove the current item block -->
                <button type="button" class="remove-item remove-button">Remove Item</button>
            </div>
        </div>

        <!-- Button to add another item -->
        <button type="button" id="addItem" class="add-button" style="background-color: #28a745; display: block; margin: 20px auto;">Add Another Item</button>

        <!-- Submit Button -->
        <div style="text-align: center; margin-top: 20px;">
            <button type="submit" class="add-button" style="background-color: #28a745;">Submit</button>
        </div>

    </form>
</div>

<!-- jQuery for Dynamic Fields -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        let itemIndex = 1; // Start from the first item block

        // Add a new item block
        $('#addItem').click(function () {
            itemIndex++;
            const newItemBlock = `
                <div class="item-block">
                    <h3>Item ${itemIndex}</h3>
                    <div class="form-group">
                        <label for="item">Item</label>
                        <input type="text" name="item[]" placeholder="Enter item name (e.g., Golden Brass #5)" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" name="description[]" placeholder="Enter item description (e.g., Closed end, A/L with ring PULLAR)" required>
                    </div>
                    <div class="color-size-container">
                        <div class="form-group color-size-group">
                            <div>
                                <label for="color[]">Color</label>
                                <input type="text" name="color[${itemIndex - 1}][]" placeholder="Enter color (e.g., Black)">
                            </div>
                            <div>
                                <label for="size[]">Size</label>
                                <input type="text" name="size[${itemIndex - 1}][]" placeholder="Enter size (e.g., 19 cm)">
                            </div>
                        </div>
                    </div>
                    <button type="button" class="add-color-size add-button">Add Another Color & Size</button>
                    <button type="button" class="remove-item remove-button">Remove Item</button>
                </div>
            `;
            $('#itemsContainer').append(newItemBlock);
        });

        // Add color and size fields within an item block
        $(document).on('click', '.add-color-size', function () {
            const colorSizeContainer = $(this).siblings('.color-size-container');
            const itemIndex = $(this).closest('.item-block').index(); // Get item block index to group colors and sizes by item
            const colorSizeFields = `
                <div class="form-group color-size-group">
                    <div>
                        <label for="color[]">Color</label>
                        <input type="text" name="color[${itemIndex}][]" placeholder="Enter color (e.g., Black)">
                    </div>
                    <div>
                        <label for="size[]">Size</label>
                        <input type="text" name="size[${itemIndex}][]" placeholder="Enter size (e.g., 19 cm)">
                    </div>
                    <button type="button" class="remove-color-size remove-button">Remove</button>
                </div>
            `;
            colorSizeContainer.append(colorSizeFields);
        });

        // Remove a color and size group
        $(document).on('click', '.remove-color-size', function () {
            $(this).closest('.color-size-group').remove();
        });

        // Remove an entire item block
        $(document).on('click', '.remove-item', function () {
            $(this).closest('.item-block').remove();
        });
    });
</script>

</body>
</html>
