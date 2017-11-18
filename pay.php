<?php require_once('config.php'); ?>

<form action="charge.php" method="post">
  <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
          data-key="<?php echo $stripe['publishable_key']; ?>"
          data-description="Access for a 3 months"
          data-amount="999"
          data-locale="auto"></script>
</form>
