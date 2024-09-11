<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap');
  @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap');

  .inter {
    font-family: "Inter", sans-serif;
    font-optical-sizing: auto;
    font-style: normal;
  }

  .font-poppins {
    font-family: "Poppins", sans-serif;
    font-optical-sizing: auto;
    font-style: normal;
  }
</style>

<body>
  <div class="md:fixed md:top-1/2 md:left-1/2  md:transform md:-translate-x-1/2 md:-translate-y-1/2">
    <div class="card md:card-side bg-base-100 md:shadow-2xl">
      <div class=" md:hidden block p-4">
        <img class=" bg-center bg-cover rounded-lg" src="img/bunga.png" alt="Movie" />
      </div>
      <div class="md:p-8 md:w-96 px-4">
        <h1 class="text-xl font-bold inter ">Create New Account 👋</h1>
        <p class="text-gray-400 text-sm font-poppins pt-4">Today is a new day. It's your day. You shape it.
          Sign in to start managing your projects.</p>
        <div class="py-4">
          <form action="">
            <div class="space-y-2">
              <div class="join">
                <div class="w-full">
                  <input type="text" class="input input-bordered join-item w-full text-sm text-gray-500" placeholder="First name" />
                </div>
                <div class="join-item w-full">
                  <input type="text" class="input input-bordered join-item w-full text-gray-500" placeholder="Last name" />
                </div>
              </div>
              <div class="grid grid-cols-3 gap-1">
                <div class="flex items-center gap-1">
                  <input type="radio" name="radio-1" class="radio radio-sm" />
                  <p class="text-sm">Male</p>
                </div>
                <div class="flex items-center gap-1 ">
                  <input type="radio" name="radio-1" class="radio radio-sm" />
                  <p class="text-sm">Female</p>
                </div>
                <div class="flex items-center gap-1">
                  <input type="radio" name="radio-1" class="radio radio-sm" />
                  <p class="text-sm">Other</p>
                </div>
              </div>

              <label class="form-control w-full">
                <div class="label">
                  <span class="text-sm text-gray-500">Email</span>
                </div>
                <input type="text" placeholder="Masukkan Email Anda" class="input input-bordered w-full text-sm font-poppins" />
              </label>
              <label class="form-control w-full">
                <div class="label">
                  <span class="text-sm text-gray-500">Username</span>
                </div>
                <input type="text" placeholder="Masukkan Username Anda" class="input input-bordered w-full text-sm font-poppins" />
              </label>
              <label class="form-control w-full pb-8">
                <div class="label">
                  <span class="text-sm text-gray-500">Password</span>
                </div>
                <input type="password" placeholder="Masukkan Username Anda" class="input input-bordered w-full text-sm font-poppins" />
              </label>
              <button class="btn w-full bg-slate-800 text-white font-poppins hover:bg-slate-600">
                Sign
              </button>
              <p class="text-xs md:pt-8 pt-4 text-center font-poppins">Already have an account? <a class="text-blue-400 font-bold" href="login.php"> Login</a></p>
            </div>
          </form>
        </div>
      </div>
      <div class="p-4 md:block hidden">
        <img class=" bg-center bg-cover  w-96 rounded-lg" src="img/bunga.png" alt="Movie" />
      </div>
    </div>
  </div>
</body>

</html>