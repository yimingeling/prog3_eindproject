<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script defer src="javascript.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="./css/style.css">
    <title>Tetris Games</title>
</head>

<body class="bg-gray-100 min-h-screen font-sans text-gray-800">

<header class="bg-white shadow-md p-6 mb-8">
    <h1 class="text-4xl font-bold text-center text-indigo-600">Tetris Games</h1>
</header>

<main class="mx-auto px-4 flex flex-col md:flex-row gap-8">
    <section id="games"
             class="">
    </section>

    <section id="detailsContainer"
             class="hidden flex-col bg-white p-6 rounded-2xl shadow-xl
                  w-full md:w-1/2 lg:w-1/3 max-w-3xl
                  mx-auto mt-8 md:mt-0 space-y-4 ">
        <button id="close"
                class="self-end px-4 py-2 bg-red-500 text-white rounded-md
                   hover:bg-red-600 transition">
            Close
        </button>

        <h2 class="text-2xl font-bold text-gray-800">Name</h2>

        <h3 class="text-lg font-semibold text-gray-600">Description:</h3>
        <p class="text-gray-700">description</p>

        <h3 class="text-lg font-semibold text-gray-600">Tags</h3>
        <p class="text-gray-700">tags</p>
    </section>
</main>


</body>

</html>

