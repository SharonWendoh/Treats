<section class="pt-2 mt-2 container">
    <div class="container text-center mt-5 py-5">
        <h3> Ckeckout</h3>
        <hr class="mx-auto">
    </div>
</section>

<section class="container">
    <h4 class="mb-3">Billing address</h4>
    <form action="">
        <div class="row g-3">
            <div class="col-sm-6">
                <label for="firstname" class=form-label>First Name</label>
                <input type="text" id="firstname" class="form-control" placeholder="John">
            </div>
            <div class="col-sm-6">
                <label for="lastname" class=form-label>Last Name</label>
                <input type="text" id="lastname" class="form-control" placeholder="Doe">
            </div>
            
        
            <div class="col-12">
                <label for="username" class=form-label>Username</label>
                <div class="input-group">
                    <span class="input-group-text">
                    <i class="fa fa-user-o" aria-hidden="true"></i>
                    </span>
                    <input type="text" id="username" class="form-control" placeholder="Doe">
                </div>
            </div>
            <div class="col-md-5">
                <label for="country" class=form-label>Country</label>
                <select name="" id="country" class="form-control">
                    <option value="Kenya">Kenya</option>
                    <option value="Uganda">Uganda</option>
                    <option value="Tanzania">Tanzania</option>
                    <option value="Ethopia">Ethopia</option>
                </select>
            </div>
            <div class="col-md-4">
                <label for="city" class=form-label>Country</label>
                <select name="" id="city" class="form-control">
                    <option value="Nairobi">Nairobi</option>
                    <option value="Kampala">Kampala</option>
                    <option value="dar es salaam">dar es salaam</option>
                    <option value="Addis Ababa">Addis Ababa</option>
                </select>
            </div>
            <div class="col-md-3">
            <label for="postcode" class=form-label>P.O.Box</label>
                <input type="number" id="postcode" class="form-control" placeholder="3333-00100">
            </div>

            <hr class="my-4">

            <div class="col-12">
                <div class="form-check">
                    <input type="checkbox" id="sameAddress" class="form-check-input">
                    <label class="form-check-label" for="sameAddress">Shipping address same as billing address</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" id="saveInfo" class="form-check-input">
                    <label class="form-check-label" for="saveInfo">Save this info</label>
                </div>
            </div>

            <hr class="my-4">

            <h4 class="mb-3">Payments</h4>

            <div class="from-check">
                <input type="radio" name="paymentMethod" class="form-check-input" checked reqired>
                <label for="creditCard">Credit card</label>
            </div>
            <div class="from-check">
                <input type="radio"  name="paymentMethod" class="form-check-input" checked reqired>
                <label for="visa">Visa</label>
            </div>
            <div class="from-check">
                <input type="radio"  name="paymentMethod" class="form-check-input" checked reqired>
                <label for="mpesa">Mpesa</label>
            </div>

            <div class="row my-3 gy-3">
                <div class="col-md-6">
                    <label for="fullname" class="form-label">Name on card</label>
                    <input type="text" id="fullname" class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="c-number" class="form-label">Card number</label>
                    <input type="number" id="c-number" class="form-control">
                </div>
            </div>
            <div class="col-md-3">
                <label for="c-expire" class="form-label">Expiration date</label>
                <input type="text" id="c-expire" class="form-control">
            </div>
            <div class="col-md-3">
                <label for="c-cvv" class="form-label">CVV</label>
                <input type="number" id="c-cvv" class="form-control">
            </div>

            <hr class="my-4">

            <button class="btn btn-primary btn-lg btn-block mb-5">Continue to checkout</button>
        </div>
    </form>
</section>