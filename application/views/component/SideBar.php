<aside class="w-64 shrink-0 border-r border-emerald-200 bg-emerald-50">
  <div class="flex h-screen flex-col px-4 py-5">
    <div class="mb-8 px-2">
      <h2 class="text-2xl font-bold tracking-tight text-emerald-900">Shop</h2>
    </div>

    <nav class="flex-1">
      <ul class="space-y-2">
        <li>
          <a href="<?php echo site_url('/'); ?>"
            class="block rounded-lg bg-emerald-600 px-4 py-2.5 text-sm font-semibold text-white transition hover:bg-emerald-700">
            Home
          </a>
        </li>
        <li>
          <a href="<?php echo site_url('dashboard'); ?>"
            class="block rounded-lg px-4 py-2.5 text-sm font-semibold text-emerald-900 transition hover:bg-emerald-200">
            Product
          </a>
        </li>
      </ul>
    </nav>

    <div class="pt-4">
      <a href="<?php echo site_url('login'); ?>"
        class="block rounded-lg border border-emerald-300 px-4 py-2.5 text-center text-sm font-semibold text-emerald-900 transition hover:bg-emerald-100">
        Logout
      </a>
    </div>
  </div>
</aside>