<div class="card">
    <?php if($success): ?>
        <div class="alert success-alert">
            <p>Your Order Has Been Placed!</p>
        </div>
    <?php endif; ?>
    
<?php if(!empty($error)): ?>
    <div class="alert error-alert">
      <?php echo htmlspecialchars($error); ?>
    </div>
<?php endif; ?>

 <form method="post" id="pizza-form" class="form-container">

            <!--Customer Details-->
            <div class="form-section">
                <h2>Your Details</h2>
                <div class="input-group">
                    <label for="customer-name" class="input-label">Name</label>
                    <input type="text" id="customer-name" name="customer-name" class="input-field" required>
                </div>
                <div class="input-group">
                    <label for="customer-email" class="input-label">Email</label>
                    <input type="email" id="customer-email" name="customer-email" class="input-field" required>
                </div>
                <div class="input-group">
                    <label for="customer-phone" class="input-label">Phone</label>
                    <input type="tel" id="customer-phone" name="customer-phone" class="input-field" required>
                </div>
                <div class="input-group">
                    <label for="customer-address" class="input-label">Address</label>
                    <input type="address" id="customer-address" name="customer-address" class="input-field" required>
                </div>
            </div>
            
            <hr class="divider">

            <!-- Pizza Size -->
            <div class="form-section size">
                <h2 class="section-title">Size</h2>
                <div class="radio-group">
                    <label>
                        <input type="radio" name="size" value="Small" required>
                        <span>Small (10")</span>
                    </label>
                    <br>
                    <label>
                        <input type="radio" name="size" value="Medium" required>
                        <span>Medium (12")</span>
                    </label>
                    <br>
                    <label>
                        <input type="radio" name="size" value="Large" required>
                        <span>Large (14")</span>
                    </label>
                    <br>
                </div>
            </div>

            <hr class="divider">

            <!-- Sauce -->
            <div class="form-section sauce">
                <h2 class="section-title">Sauce</h2>
                <div class="radio-group">
                    <label>
                        <input type="radio" name="sauce" value="Tomato Sauce" required>
                        <span>Tomato Sauce</span>
                    </label> 
                    <br>
                    <label>
                        <input type="radio" name="sauce" value="Alfredo Sauce" required>
                        <span>Alfredo Sauce</span>
                    </label> 
                    <br>
                    <label>
                        <input type="radio" name="sauce" value="BBQ Sauce" required>
                        <span>BBQ Sauce</span>
                    </label>
                    <br>
                </div>
            </div>

            <hr class="divider">

            <!-- Crust Type -->
            <div class="form-section">
                <h2 class="section-title">Crust</h2>
                <select id="crust-type" name="crust-type" class="input-field">
                    <option value="Classic">Classic</option>
                    <option value="Thin">Thin</option>
                    <option value="Thick">Thick</option>
                    <option value="Gluten-Free">Gluten-Free</option>
                </select>
            </div>

            <hr class="divider">

             <!-- Cheese -->
            <div class="form-section cheese">
                <h2 class="section-title">Cheese</h2>
                <div class="radio-group">
                    <label>
                        <input type="radio" name="cheese" value="Regular Cheese" required>
                        <span>Regular Cheese</span>
                    </label> 
                    <br>
                    <label>
                        <input type="radio" name="cheese" value="Extra Cheese" required>
                        <span>Extra Cheese</span>
                    </label> 
                    <br>
                    <label>
                        <input type="radio" name="cheese" value="Light On Cheese" required>
                        <span>Light On Cheese</span>
                    </label>
                    <br>
                </div>
            </div>

            <hr class="divider">


            <!-- Toppings -->
            <div class="form-section toppings">
                <h2 class="section-title">Toppings</h2>
                <div class="checkbox-group">
                    <label>
                        <input type="checkbox" name="toppings[]" value="Pepperoni">
                        <span>Pepperoni</span>
                    </label>
                    <br>
                    <label>
                        <input type="checkbox" name="toppings[]" value="Mushrooms">
                        <span>Mushrooms</span>
                    </label>
                    <br>
                    <label>
                        <input type="checkbox" name="toppings[]" value="Onions">
                        <span>Onions</span>
                    </label>
                    <br>
                    <label>
                        <input type="checkbox" name="toppings[]" value="Bell Peppers">
                        <span>Bell Peppers</span>
                    </label>
                    <br>
                    <label>
                        <input type="checkbox" name="toppings[]" value="Sausage">
                        <span>Sausage</span>
                    </label>
                    <br>
                    <label>
                        <input type="checkbox" name="toppings[]" value="Black Olives">
                        <span>Black Olives</span>
                    </label>
                    <br>
                </div>
            </div>

            <hr class="divider">

             <!-- Beverages -->
            <div class="form-section beverages">
                <h2 class="section-title">Beverges</h2>
                <div class="radio-group">
                    <label>
                        <input type="radio" name="Beverage" value="Diet Pepsi" required>
                        <span>Diet Pepsi</span>
                    </label> 
                    <br>
                    <label>
                        <input type="radio" name="Beverage" value="Coke" required>
                        <span>Coke</span>
                    </label> 
                    <br>
                    <label>
                        <input type="radio" name="Beverage" value="Coke Zero" required>
                        <span>Coke Zero</span>
                    </label>
                    <br>
                    <label>
                        <input type="radio" name="Beverage" value="Water" required>
                        <span>Water</span>
                    </label> 
                    <br>
                    <label>
                        <input type="radio" name="Beverage" value="7Up" required>
                        <span>7Up</span>
                    </label>
                </div>
            </div>

            <hr class="divider">
            
            <!-- Special Instructions -->
            <div class="form-section">
                <h2 class="section-title">Special Instructions</h2>
                <textarea id="instructions" name="instructions" rows="4" class="input-field"></textarea>
            </div>

            <!-- Submit Button -->
            <div class="submit-section">
                <button type="submit" id="submit-btn" class="btn">
                    Place Order
                </button>
            </div>
        </form>