<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="/css/app.css" />
</head>

<body>
    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col">
        <div class="mb-4">
            <label class="block text-grey-darker text-sm font-bold mb-2" for="username">
                Username
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="username" type="text" placeholder="Username">
        </div>
        <div class="mb-6">
            <label class="block text-grey-darker text-sm font-bold mb-2" for="password">
                Password
            </label>
            <input class="shadow appearance-none border border-red rounded w-full py-2 px-3 text-grey-darker mb-3" id="password" type="password" placeholder="******************">
            <p class="text-red text-xs italic">Please choose a password.</p>
        </div>
        <div class="">
            <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded" type="button">
                Sign In
            </button>
            <a class="inline-block align-baseline font-bold text-sm text-blue hover:text-blue-darker" href="#">
                Forgot Password?
            </a>
        </div>
    </div>
</body>

</html>