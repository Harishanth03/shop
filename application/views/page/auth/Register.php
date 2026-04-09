<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Register</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#F4F6F6] flex items-center justify-center min-h-screen">

  <div class="bg-white w-[400px] p-8 rounded-[4px] border border-[#E6E6E6]">
    <div class="flex justify-center mb-6">
      <img class="w-[120px]" src="<?php echo base_url('assets/images/Logo.svg'); ?>" alt="Logo">
    </div>
    <h2 class="text-[22px] font-semibold text-[#253D4E] text-center mb-6">
      Create an account
    </h2>
    <form action="<?php echo site_url('register/save'); ?>" method="post">
      <div class="mb-4">
        <label class="text-[14px] text-[#253D4E] font-medium">User Name</label>
        <input type="text" name="userName" placeholder="Enter your user name"
          class="w-full mt-1 p-3 bg-[#F2F2F2] rounded-[2px] outline-none focus:ring-2 focus:ring-[#3BB77E]">
      </div>

      <div class="mb-4">
        <label class="text-[14px] text-[#253D4E] font-medium">Password</label>
        <input type="password" name="passWord" placeholder="Enter your password"
          class="w-full mt-1 p-3 bg-[#F2F2F2] rounded-[2px] outline-none focus:ring-2 focus:ring-[#3BB77E]">
      </div>

      <button type="submit"
        class="w-full py-3 bg-[#3BB77E] text-white font-semibold rounded-[2px] hover:bg-[#2fa96d] transition duration-200 shadow-sm hover:shadow-md">
        Register
      </button>

    </form>

    <div class="flex items-center my-6">
      <div class="flex-1 h-[1px] bg-[#E0E0E0]"></div>
      <span class="px-3 text-[13px] text-[#ADADAD]">OR</span>
      <div class="flex-1 h-[1px] bg-[#E0E0E0]"></div>
    </div>

    <p class="text-center text-[14px] text-[#253D4E]">
      Already have an account?
      <a href="<?php echo site_url('login'); ?>" class="text-[#3BB77E] font-semibold hover:underline">
        Login
      </a>
    </p>
  </div>

</body>

</html>