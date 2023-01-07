
<!-- Configuration-->

<?php require_once("../resources/config.php"); ?>



<!-- Header-->
<?php include(TEMPLATE_FRONT .  "/header.php");?>


     <!--Navigation -->



         <!-- Contact Section -->

        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Pay Now</h2>
                    <h3 class="section-subheading text-muted">
                    <?php display_message(); ?></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">

 <form id="paymentForm">
  <div class="input-field">
    <label for="email">Email Address</label>
    <input type="email" id="email-address" required />
  </div>
  <div class="input-field">
    <label for="amount">Amount</label>
    <input type="tel" id="amount" required value="<?php
    echo isset($_SESSION['item_total']) ? $_SESSION['item_total'] : $_SESSION['item_total'] = "0"; 
    ?>" />
  </div>
  <div class="input-field">
    <label for="first-name">First Name</label>
    <input type="text" id="first-name" />
  </div>
  <div class="input-field">
    <label for="last-name">Last Name</label>
    <input type="text" id="last-name" />
  </div>
  <div class="form-submit">
    <button type="submit" onclick="payWithPaystack()" class="btn green"> Pay </button>
  </div>
</form>
</div>
            </div>
        </div>
<script src="https://js.paystack.co/v1/inline.js"></script> 
<script>
    
    const paymentForm = document.getElementById('paymentForm');
paymentForm.addEventListener("submit", payWithPaystack, false);
function payWithPaystack(e) {
  e.preventDefault();

  let handler = PaystackPop.setup({
    key: 'pk_test_6e3d92b2fe1c070e41793e335f79aebecb9fd586', // Replace with your public key
    email: document.getElementById("email-address").value,
    amount: document.getElementById("amount").value * 100,
    ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
    // label: "Optional string that replaces customer email"
    onClose: function(){
      alert('Window closed.');
    },
    callback: function(response){
      let message = 'Payment complete! Reference: ' + response.reference;
      alert(message);
    }
  });

  handler.openIframe();
}
    
    
</script>
  
    <!-- /.container -->
<?php include(TEMPLATE_FRONT .  "/footer.php");?>
