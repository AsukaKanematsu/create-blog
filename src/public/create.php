<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>sample</title>
  </head>
  <body class="bg-green-500">
    <div class="flex justify-center items-center h-screen">
      <form method="post" action="./post/store.php" class="w-full max-w-screen-lg">
        <section class="flex flex-col text-center">
          <div class="mx-auto lg:w-5/6 bg-white rounded-lg p-8 mt-10 md:mt-0 relative z-10 shadow-md space-y-4">
            <h2 class="text-gray-900 text-2xl mb-1 font-medium title-font text-left">新規記事</h2>
            <div class="relative mb-4">
            <label for="title" class="leading-7 text-sm text-gray-600 text-left">タイトル</label>
        <input type="title" id="title" name="title" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        </div>
        <div class="relative mb-4">
          <label for="contents" class="leading-7 text-sm text-gray-600">内容</label>
          <textarea id="contents" name="contents" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
        </div>
            <div class="p-2 w-full">
          <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">新規作成</button>
        </div></br>
            <a class="text-indigo-500 inline-flex items-center">アカウント作成
              <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path d="M5 12h14"></path>
                <path d="M12 5l7 7-7 7"></path>
              </svg>
            </a>
          </div>
        </section>
      </form>
    </div>