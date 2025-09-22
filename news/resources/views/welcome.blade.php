<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	@vite('resources/css/app.css')
	<title>Document</title>
</head>
<body>

<header class="bg-white">
	<nav aria-label="Global" class="flex items-center justify-between p-6 mx-auto max-w-7xl lg:px-8 place-self-center">
	  <div class="flex lg:flex-1">

	  </div>
	  <div class="flex lg:hidden">
		<button type="button" command="show-modal" commandfor="mobile-menu" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
		  <span class="sr-only">Open main menu</span>
		  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6">
			<path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round" />
		  </svg>
		</button>
	  </div>
	  <el-popover-group class="hidden lg:flex lg:gap-x-12">
		<a href="#" class="font-semibold text-gray-900 text-sm/6">Product</a>
		<a href="#" class="font-semibold text-gray-900 text-sm/6">Features</a>
		<a href="#" class="font-semibold text-gray-900 text-sm/6">Marketplace</a>
		<a href="#" class="font-semibold text-gray-900 text-sm/6">Company</a>
	  </el-popover-group>

	</nav>
	<el-dialog>
	  <dialog id="mobile-menu" class="backdrop:bg-transparent lg:hidden">
		<div tabindex="0" class="fixed inset-0 focus:outline-none">
		  <el-dialog-panel class="fixed inset-y-0 right-0 z-50 w-full p-6 overflow-y-auto bg-white sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
			<div class="flex items-center justify-between">

			  <button type="button" command="close" commandfor="mobile-menu" class="-m-2.5 rounded-md p-2.5 text-gray-700">
				<span class="sr-only">Close menu</span>
				<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6">
				  <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
				</svg>
			  </button>
			</div>
			<div class="flow-root mt-6">
			  <div class="-my-6 divide-y divide-gray-500/10">
				<div class="py-6 space-y-2">
				  <a href="#" class="block px-3 py-2 -mx-3 font-semibold text-gray-900 rounded-lg text-base/7 hover:bg-gray-50">Product</a>
				  <a href="#" class="block px-3 py-2 -mx-3 font-semibold text-gray-900 rounded-lg text-base/7 hover:bg-gray-50">Features</a>
				  <a href="#" class="block px-3 py-2 -mx-3 font-semibold text-gray-900 rounded-lg text-base/7 hover:bg-gray-50">Marketplace</a>
				  <a href="#" class="block px-3 py-2 -mx-3 font-semibold text-gray-900 rounded-lg text-base/7 hover:bg-gray-50">Company</a>
				</div>

			  </div>
			</div>
		  </el-dialog-panel>
		</div>
	  </dialog>
	</el-dialog>
</header>


</body>
</html>