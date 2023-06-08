<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>sample</title>
  </head>
  <body class="bg-green-300">
  <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
    <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">マイページ</h1>

  </div>
  <form action="create.php" method="post" class="w-full">
    <div class="p-2 w-full">
      <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">記事詳細</button>
    </div>
  </form>
    <div class="flex justify-center items-center h-screen">
      <form action="detail.php" method="post" class="w-full">
        <section class="text-gray-600 body-font">
          <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap -m-4">
              <div class="p-4 md:w-1/5">
                <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                  <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="https://dummyimage.com/720x400" alt="blog">
                  <div class="p-6 bg-white">
                    <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">CATEGORY</h2>
                    <h1 class="title-font text-lg font-medium text-gray-900 mb-3">The Catalyzer</h1>
                    <div class="flex items-center flex-wrap ">
                      <div class="p-2 w-full">
                        <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">記事詳細</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="p-4 md:w-1/5">
                <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                  <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="https://dummyimage.com/721x401" alt="blog">
                  <div class="p-6 bg-white">
                    <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">CATEGORY</h2>
                    <h1 class="title-font text-lg font-medium text-gray-900 mb-3">The 400 Blows</h1>
                    <div class="flex items-center flex-wrap">
                      <div class="p-2 w-full">
                        <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">記事詳細</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="p-4 md:w-1/5">
                <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                  <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="https://dummyimage.com/721x401" alt="blog">
                  <div class="p-6 bg-white">
                    <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">CATEGORY</h2>
                    <h1 class="title-font text-lg font-medium text-gray-900 mb-3">The 400 Blows</h1>
                    <div class="flex items-center flex-wrap">
                      <div class="p-2 w-full">
                        <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">記事詳細</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </form>
    </div>