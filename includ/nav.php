   <!-- Header -->
<header class="bg-white shadow">
  <div class="container mx-auto px-4 py-4 flex items-center justify-between">
    
    <!-- Logo -->
    <a href="/" class="text-2xl font-bold text-indigo-600">NAJMI Shop</a>

    <!-- Menu desktop -->
    <nav class="hidden md:flex gap-6">
      <a href="#" class="text-gray-700 hover:text-indigo-600">Women</a>
      <a href="#" class="text-gray-700 hover:text-indigo-600">Men</a>
      <a href="#" class="text-gray-700 hover:text-indigo-600">Company</a>
      <a href="#" class="text-gray-700 hover:text-indigo-600">Stores</a>
    </nav>

    <!-- Actions -->
    <div class="flex items-center gap-4">
      <!-- Cart -->
      <a href="/cart.php" class="relative">
        <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path d="M3 3h2l.4 2M7 13h10l4-8H5.4"></path>
        </svg>
        <span class="absolute -top-2 -right-2 bg-red-500 text-white text-xs rounded-full px-1">3</span>
      </a>

      <!-- Bouton mobile menu -->
      <button onclick="openMenu()" class="md:hidden p-2 text-gray-700 hover:text-indigo-600">
        ☰
      </button>
    </div>
  </div>
</header>


<!-- Menu mobile (overlay) -->
<div id="mobile-menu" class="fixed inset-0 z-50 hidden bg-black/50">
  <div class="absolute top-0 left-0 w-64 h-full bg-white shadow-lg p-6">
    <!-- Bouton fermer -->
    <button onclick="closeMenu()" class="mb-6 text-gray-500 hover:text-black">✖</button>

    <!-- Liens -->
    <nav class="space-y-4">
      <a href="#" class="block text-gray-700 hover:text-indigo-600">Women</a>
      <a href="#" class="block text-gray-700 hover:text-indigo-600">Men</a>
      <a href="#" class="block text-gray-700 hover:text-indigo-600">Company</a>
      <a href="#" class="block text-gray-700 hover:text-indigo-600">Stores</a>
    </nav>
  </div>
</div>

<!-- JS -->
<script>
  function openMenu() {
    document.getElementById('mobile-menu').classList.remove('hidden');
  }
  function closeMenu() {
    document.getElementById('mobile-menu').classList.add('hidden');
  }
</script>