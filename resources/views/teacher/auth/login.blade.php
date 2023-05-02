<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="../assets/css/tailwind.output.css" />
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
  <script src="../assets/js/init-alpine.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

  <section class="min-h-screen flex items-stretch text-white ">
    <div class="lg:flex w-1/2 hidden bg-gray-500 bg-no-repeat bg-cover relative items-center"
      style="background-image: url(dom-fou-YRMWVcdyhmI-unsplash.jpg);">
      <div class="absolute bg-black opacity-50 inset-0 z-0"></div>
      <div class="w-full px-24 z-10">
        <h1 class="text-5xl font-bold text-left tracking-wide">College is fun!</h1>
        <p class="text-3xl my-4">Probably the best time of our life.</p>
      </div>
    </div>
    <div class="lg:w-1/2 w-full flex items-center justify-center text-center md:px-16 px-0 z-0"
      style="background-color: #161616;">
      <div class="absolute z-10 inset-0 bg-gray-500 bg-no-repeat bg-cover items-center"
        style="background-image: url(dom-fou-YRMWVcdyhmI-unsplash.jpg);">
        <div class="absolute bg-black opacity-50 inset-0 z-0"></div>
      </div>
      <div class="w-full mx-6 py-6 z-20 bg-white rounded-md shadow-md dark:bg-gray-800">
        <h1 class="my-3 font-bold font-serif text-2xl md:text-3xl">Login to our website!</h1>
        <form method="POST" action="{{ route('teacherlogin') }}" class="sm:w-2/3 w-full px-4 lg:px-0 mx-auto">
            @csrf
          <div class="pb-2 pt-4 text-gray-700 dark:text-gray-200">
            <input type="email" name="email" id="email" placeholder="Email"
              class="block w-full p-4 text-lg text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:outline-none focus:ring">
          </div>
          <div class="pb-2 pt-4 text-gray-700 dark:text-gray-200">
            <input class="block w-full p-4 text-lg text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:outline-none focus:ring" type="password" name="password" id="password"
              placeholder="Password">
          </div>
              <div class="text-right pr-2 text-gray-400 hover:underline hover:text-gray-100">
               </div>
      
          <div class="px-4 pb-2 pt-4">
            <button
              class="uppercase block w-full p-4 leading-5 text-white transition-colors duration-300 transform bg-blue-600 rounded-md hover:bg-blue-500 focus:outline-none focus:bg-blue-500">sign
              in</button>
          </div>
        </form>
      </div>
    </div>
  </section>
</body>

</html>