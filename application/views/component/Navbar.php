<div class="w-full px-[120px] py-[17px] flex flex-col">
  <div class="flex flex-row items-center justify-between">
    <img class="w-[147px] h-[44px]" src="<?php echo base_url('assets/images/Logo.svg'); ?>" alt="Logo">
    <div class="flex flex-row">
      <div class="w-full bg-[#F2F2F2] p-3 flex flex-row rounded-[2px] items-start gap-2">
        <select class="text-[#253D4E] text-[14px] font-semibold border-0 outline-none focus:border-0 focus:outline-none focus:ring-0">
          <option value="all" selected>All Categories</option>
          <option value="FT">Food Items</option>
          <option value="OT">Other Items</option>
        </select>
        <div class="w-[1px] h-full bg-[#ADADAD]"></div>
        <div class="flex flex-row justify-center items-start">
          <input
            class="text-[14px] text-[#ADADAD] text-medium border-0 outline-none focus:border-0 focus:outline-none focus:ring-0 bg-transparent"
            type="text" placeholder="Search for items...">
        </div>
      </div>
      <div
        class="bg-[#3BB77E] flex-1 flex px-4 hover:cursor-pointer rounded-[2px] flex-row justify-center items-center">
        <button class="flex flex-row hover:cursor-pointer items-center justify-center ">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="#F3f3f3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="11.1566" cy="11.1566" r="9.1566" />
            <path d="M18.8387 18.8387L21.7887 21.7887" />
          </svg>
        </button>
      </div>
    </div>
    <a href="<?php echo site_url('login'); ?>"
      class="px-[24px] py-[12px] bg-[#3BB77E] text-white font-semibold rounded-[2px] flex items-center justify-center cursor-pointer hover:bg-[#2fa96d] transition duration-200 shadow-sm hover:shadow-md">
      Login
    </a>
  </div>
</div>