<div class="w-full min-h-screen flex flex-col gap-10 px-20 py-20">
  <div class="w-full flex flex-row justify-start items-center">
    <h2 class="text-[32px] font-semibold text-[#253D4E]">Explore Categories</h2>
  </div>

  <div class="flex flex-row gap-5 justify-start items-center">
    <div
      class=" hover: cursor-pointer w-[46px] h-[46px] flex flex-row justify-center items-center rounded-full bg-[#F2F3F4]">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
        class="lucide lucide-arrow-left-icon lucide-arrow-left">
        <path d="m12 19-7-7 7-7" />
        <path d="M19 12H5" />
      </svg>
    </div>
    <div
      class="px-[48px] hover: cursor-pointer flex flex-col justify-center items-center py-[19px] border border-[#ADADAD] rounded-lg gap-3">
      <img src="<?php echo base_url('assets/images/Product Dummy.svg') ?>" alt="Category 1">
      <div class="flex flex-col items-center gap-2 justify-center">
        <p class="text-[#253D4E] text-[18px] font-semibold">Peach</p>
        <p class="text-[14px] font-medium text-[#ADADAD]">20 Items</p>
      </div>
      <div class="w-full flex flex-col justify-between items-center gap-1">
        <p class="text-[20px] font-bold text-[#3BB77E]">$12.99</p>
        <button type="button"
          class="px-4 py-2 rounded-md bg-[#3BB77E] text-white text-[14px] font-semibold hover:bg-[#2fa56d] transition-colors">
          Add to Cart
        </button>
      </div>
    </div>
  </div>
</div>