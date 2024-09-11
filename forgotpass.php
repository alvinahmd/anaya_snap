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
  @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

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
  <div style="position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);">
    <div class="card bg-base-100 shadow-2xl">
      <div class="md:p-8 md:w-96 px-4 py-12">
        <h1 class="text-xl font-bold inter ">Forgot Password 👋</h1>
        <p class="text-gray-400 text-base font-poppins pt-2">Enter 6 Digit Code sended to You</p>
        <div class="py-4">
          <form action="">
            <div class="space-y-2">
              <label class="form-control w-full pb-4 pt-">
                <input type="text" placeholder="Masukkan Password" class="input input-bordered w-full text-sm font-poppins" />
              </label>
              <button class="btn w-full bg-slate-800 text-white font-poppins hover:bg-slate-600">
                Verify code
              </button>
              <p class="text-sm md:pt-8 pt-4 text-center font-poppins">Go back to<a class="text-blue-400 font-bold" href="login.php"> Login</a></p>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>