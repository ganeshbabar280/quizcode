
<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Homepage</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>

  <body class="bg-cover" style="background-image: url(https://unsplash.com/photos/COWf-5ZtZ6w);">
    <header class="text-gray-700 body-font">
      <div
        class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center"
      >
        <a
          class="flex title-font font-medium text-black items-center text-gray-900 mb-4 md:mb-0"
          href="##########">
          <span class="ml-3 text-2xl">Byteplexure</span>
        </a>
        <nav
          class="md:ml-auto flex flex-wrap items-center text-base justify-center text-xl text-black font-medium"
        >
          <a class="mr-5 hover:text-gray-900" href="##########">Home</a>
          <a class="mr-5 hover:text-gray-900" href="##########">About</a>
          <a class="mr-5 hover:text-gray-900" href="##########">Contact</a>
        </nav>
        <a class="inline-flex items-center text-white border-0 py-1 mx-2 px-2 transition-colors duration-300 transform bg-blue-600 rounded-md hover:bg-blue-500 focus:outline-none focus:bg-blue-500 text-lg" href="{{ route('admin.login')}}">
          Admin Login
        </a>
      </div>
    </header>
    <section class="text-black body-font">
      <div
        class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center"
      >
        <div
          class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center"
        >
          <h1
            class="title-font font-bold sm:text-4xl text-3xl mb-4 font-medium text-gray-900"
          >
            The one stop destination <br class="hidden lg:inline-block" />to all your college related queries!
          </h1>
          <p class="mb-8 leading-relaxed">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatum explicabo soluta asperiores minima animi modi, aliquam quaerat beatae saepe atque aliquid eaque, porro exercitationem nostrum adipisci! Ea eligendi quis deserunt?
          </p>
          <div class="flex justify-center">
            <a class="inline-flex p-4 leading-5 text-white transition-colors duration-300 transform bg-blue-600 rounded-md hover:bg-blue-500 focus:outline-none focus:bg-blue-500 ml-4"  href="{{ route('studentlogin') }}">
              Student Login
          </a>

            <a class="inline-flex p-4 leading-5 text-white transition-colors duration-300 transform bg-blue-600 rounded-md hover:bg-blue-500 focus:outline-none focus:bg-blue-500 ml-4"  href="{{ route('teacherlogin') }}">
                Teacher Login
            </a>

          </div>
        </div>
      </div>
    </section>
  </body>
</html>
