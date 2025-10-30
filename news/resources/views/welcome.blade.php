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

	<div class="flex items-center h-24 place-content-center">


	LOGO

			</div>


<header class="bg-neutral-950">

	<nav aria-label="Global" class="flex items-center justify-between p-2 mx-auto max-w-7xl md:px-4 place-self-center">

	  <div class="flex sm:hidden">
		<button type="button" command="show-modal" commandfor="mobile-menu" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-neutral-100">
		  <span class="sr-only">Open main menu</span>
		  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6">
			<path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round" />
		  </svg>
		</button>
	</div>
	  <el-popover-group class=" md:flex lg:gap-x-12 md:gap-x-6">
		<a href="#" class="font-semibold text-neutral-200 hover:text-neutral-300 text-sm/6">Общество</a>
		<a href="#" class="font-semibold text-neutral-200 hover:text-neutral-300 text-sm/6">Экономика</a>
		<a href="#" class="font-semibold text-neutral-200 hover:text-neutral-300 text-sm/6">Культура</a>
		<a href="#" class="font-semibold text-neutral-200 hover:text-neutral-300 text-sm/6">Наши люди</a>
		<a href="#" class="font-semibold text-neutral-200 hover:text-neutral-300 text-sm/6">Происшествия</a>
		<a href="#" class="font-semibold text-neutral-200 hover:text-neutral-300 text-sm/6">ЖКХ</a>
		<a href="#" class="font-semibold text-neutral-200 hover:text-neutral-300 text-sm/6">Производство</a>
		<a href="#" class="font-semibold text-neutral-200 hover:text-neutral-300 text-sm/6">Спорт</a>
	  </el-popover-group>

	</nav>

	<el-dialog>
	  <dialog id="mobile-menu" class="backdrop:bg-transparent lg:hidden">

		<div tabindex="0" class="fixed inset-0 focus:outline-none">
		  <el-dialog-panel class="fixed inset-y-0 right-0 z-50 w-full p-6 overflow-y-auto bg-white sm:max-w-sm sm:ring-1 sm:ring-neutral-900/10">
			<div class="flex items-center justify-between">
			  <button type="button" command="close" commandfor="mobile-menu" class="-m-2.5 rounded-md p-2.5 text-neutral-700">
				<span class="sr-only">Close menu</span>
				<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6">
				  <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
				</svg>
			  </button>
			</div>
			<div class="flow-root mt-6">
			  <div class="-my-6 divide-y divide-neutral-500/10">
				<div class="py-6 space-y-2">
				  <a href="#" class="block px-5 py-2 -mx-6 font-semibold text-neutral-900 text-base/7 hover:bg-neutral-100">Общество</a>
				  <a href="#" class="block px-5 py-2 -mx-6 font-semibold text-neutral-900 text-base/7 hover:bg-neutral-100">Экономика</a>
				  <a href="#" class="block px-5 py-2 -mx-6 font-semibold text-neutral-900 text-base/7 hover:bg-neutral-100">Культура</a>
				  <a href="#" class="block px-5 py-2 -mx-6 font-semibold text-neutral-900 text-base/7 hover:bg-neutral-100">Наши люди</a>
				  <a href="#" class="block px-5 py-2 -mx-6 font-semibold text-neutral-900 text-base/7 hover:bg-neutral-100">Происшествия</a>
				  <a href="#" class="block px-5 py-2 -mx-6 font-semibold text-neutral-900 text-base/7 hover:bg-neutral-100">ЖКХ</a>
				  <a href="#" class="block px-5 py-2 -mx-6 font-semibold text-neutral-900 text-base/7 hover:bg-neutral-100">Производство</a>
				  <a href="#" class="block px-5 py-2 -mx-6 font-semibold text-neutral-900 text-base/7 hover:bg-neutral-100">Спорт</a>
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