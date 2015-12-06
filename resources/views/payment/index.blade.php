
<!DOCTYPE html>
<html>
<head>
	<title>Payment method</title>
</head>
<body>
<div class="container">
	<form action="" method="POST">
	<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
  <script
    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    data-key="pk_test_h1hGJe9MzguAPtRuj1u9p593"
    data-amount="1000"
    data-name="Demo Site"
    data-description="2 widgets ($20.00)"
    data-image="/128x128.png"
    data-locale="auto">
  </script>
</form>
</div>

</body>
</html>