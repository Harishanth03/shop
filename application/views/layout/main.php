<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <title>Shop</title>
</head>

<body class="min-h-screen flex flex-col">
  <?php $this->load->view('component/Navbar') ?>
  <?php $this->load->view('component/Header') ?>
  <?php $this->load->view('page/product/Product') ?>
  <?php $this->load->view('component/Footer') ?>
</body>

</html>