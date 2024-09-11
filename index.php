<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AnayaSnapp</title>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />
  <script src="https://cdn.tailwindcss.com"></script>
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

    /* Styling for the overlay to create the blur effect */
    .overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.5);
      backdrop-filter: blur(5px);
      /* Adjust the blur intensity */
      display: none;
      z-index: 40;
    }

    .blurred {
      filter: blur(5px);
      /* Adjust the blur intensity */
    }

    .indicator {
      position: relative;
      display: inline-flex;
      align-items: center;
    }

    .indicator-item {
      position: absolute;
      left: 0;
      background-color: red;
    }
  </style>
</head>

<body>

  <div class="flex flex-col h-screen">
    <div class="flex flex-1">
      <!-- Sidebar (as bottom navbar on mobile) -->
      <div class="hidden md:flex md:w-1/4 lg:w-1/6   bg-slate-900 rounded-r-lg">
        <div class="py-12 px-8">
          <h1 class="text-xl text-white font-bold mb-6">Anaya_snap</h1>

          <!-- Buttons -->
          <div class="flex flex-col space-y-8">
            <!-- Home Button -->
            <div class="flex items-center bg-slate-900 hover:bg-slate-400 gap-4 cursor-pointer py-2  rounded-md transition duration-300 ease-in-out">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="white">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
              </svg>
              <p class="text-white font-semibold">Home</p>
            </div>

            <!-- Search Button -->
            <div onclick="openModal()" class="flex items-center bg-slate-900 hover:bg-slate-400 gap-4 cursor-pointer py-2  rounded-md transition duration-300 ease-in-out">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.5 17a6.5 6.5 0 1 1 6.5-6.5 6.5 6.5 0 0 1-6.5 6.5zM21 21l-5.5-5.5" />
              </svg>
              <p class="text-white font-semibold">Search</p>
            </div>

            <!-- Notification Button -->
            <div class="flex items-center bg-slate-900 hover:bg-slate-400 gap-4 cursor-pointer py-2  rounded-md transition duration-300 ease-in-out">
              <div class="indicator">
                <span class="indicator-item badge w-4 h-4 rounded-full text-white bg-red-500">3</span>
                <div class="flex items-center gap-4">
                  <svg aria-label="Messenger" class="x1lliihq x1n2onr6 x5n08af" fill="white" height="24" role="img" viewBox="0 0 24 24" width="24">
                    <path d="M12.003 2.001a9.705 9.705 0 1 1 0 19.4 10.876 10.876 0 0 1-2.895-.384.798.798 0 0 0-.533.04l-1.984.876a.801.801 0 0 1-1.123-.708l-.054-1.78a.806.806 0 0 0-.27-.569 9.49 9.49 0 0 1-3.14-7.175 9.65 9.65 0 0 1 10-9.7Z" fill="none" stroke="white" stroke-miterlimit="10" stroke-width="1.739"></path>
                    <path d="M17.79 10.132a.659.659 0 0 0-.962-.873l-2.556 2.05a.63.63 0 0 1-.758.002L11.06 9.47a1.576 1.576 0 0 0-2.277.42l-2.567 3.98a.659.659 0 0 0 .961.875l2.556-2.049a.63.63 0 0 1 .759-.002l2.452 1.84a1.576 1.576 0 0 0 2.278-.42Z" fill-rule="evenodd"></path>
                  </svg>

                  <p class="text-white font-semibold">Message</p>
                </div>
              </div>
            </div>
            <div class="flex items-center bg-slate-900 hover:bg-slate-400 gap-4 cursor-pointer py-2  rounded-md transition duration-300 ease-in-out">
              <div class="indicator">
                <span class="indicator-item badge w-4 h-4 rounded-full text-white bg-red-500">3</span>
                <div class="flex items-center gap-4">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.5 2.5 0 0018 14.5V11a6.75 6.75 0 00-5-6.678A6.75 6.75 0 006 11v3.5a2.5 2.5 0 00-.595 1.095L3 17h5m5 0v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2m4 0h-4" />
                  </svg>
                  <p class="text-white font-semibold">Notification</p>
                </div>
              </div>
            </div>
            <div class="flex items-center bg-slate-900 hover:bg-slate-400 gap-4 cursor-pointer py-2  rounded-md transition duration-300 ease-in-out">
              <div onclick="openNewPost()" class=" new post flex items-center gap-4">
                <svg aria-label="New post" class="x1lliihq x1n2onr6 x5n08af" fill="currentColor" height="24" role="img" viewBox="0 0 24 24" width="24">
                  <title>New post</title>
                  <path d="M2 12v3.45c0 2.849.698 4.005 1.606 4.944.94.909 2.098 1.608 4.946 1.608h6.896c2.848 0 4.006-.7 4.946-1.608C21.302 19.455 22 18.3 22 15.45V8.552c0-2.849-.698-4.006-1.606-4.945C19.454 2.7 18.296 2 15.448 2H8.552c-2.848 0-4.006.699-4.946 1.607C2.698 4.547 2 5.703 2 8.552Z" fill="white" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                  <line fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" x1="6.545" x2="17.455" y1="12.001" y2="12.001"></line>
                  <line fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" x1="12.003" x2="12.003" y1="6.545" y2="17.455"></line>
                </svg>
                <p class="text-white font-semibold">Create</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Main Content Area with Right Sidebar Card -->
      <div id="content" class=" md:pb-0 pb-16 relative z-10 flex-1 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 md:px-4">
        <!-- Content Area -->
        <div class="md:col-span-2 lg:col-span-3 bg-slate-900 h-max rounded-lg">
          <!-- search hp -->
          <div class="md:hidden block">
            <div class="navbar px-4 bg-slate-100 flex items-center flex-wrap">
              <!-- Navbar Start -->
              <div class=" flex items-center">
                <p class="text-xl font-bold ">Anaya<br><span class="text-base">snap</span></p>
              </div>

              <!-- Navbar Center -->
              <div class=" flex items-center flex-grow px-4">
                <label class="input w-full flex items-center gap-2 border rounded-md bg-white px-2 py-1">
                  <input type="text" class="focus:border-none outline-none w-full text-sm" placeholder="Search" />
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="h-4 w-4 opacity-70">
                    <path fill-rule="evenodd" d="M9.965 11.026a5 5 0 1 1 1.06-1.06l2.755 2.754a.75.75 0 1 1-1.06 1.06l-2.755-2.754ZM10.5 7a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Z" clip-rule="evenodd" />
                  </svg>
                </label>
              </div>

              <!-- Navbar End -->
              <div class="  items-center">
                <div class="indicator">
                  <span class="indicator-item badge w-4 h-4 rounded-full text-white bg-red-500">3</span>
                  <svg aria-label="Notifications" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                    <title>Notifications</title>
                    <path d="M16.792 3.904A4.989 4.989 0 0 1 21.5 9.122c0 3.072-2.652 4.959-5.197 7.222-2.512 2.243-3.865 3.469-4.303 3.752-.477-.309-2.143-1.823-4.303-3.752C5.141 14.072 2.5 12.167 2.5 9.122a4.989 4.989 0 0 1 4.708-5.218 4.21 4.21 0 0 1 3.675 1.941c.84 1.175.98 1.763 1.12 1.763s.278-.588 1.11-1.766a4.17 4.17 0 0 1 3.679-1.938m0-2a6.04 6.04 0 0 0-4.797 2.127 6.052 6.052 0 0 0-4.787-2.127A6.985 6.985 0 0 0 .5 9.122c0 3.61 2.55 5.827 5.015 7.97.283.246.569.494.853.747l1.027.918a44.998 44.998 0 0 0 3.518 3.018 2 2 0 0 0 2.174 0 45.263 45.263 0 0 0 3.626-3.115l.922-.824c.293-.26.59-.519.885-.774 2.334-2.025 4.98-4.32 4.98-7.94a6.985 6.985 0 0 0-6.708-7.218Z"></path>
                  </svg>
                </div>
              </div>
            </div>
          </div>
          <!-- search hp -->
          <div class="flex justify-center items-center">
            <div class="flex flex-col ">
              <div class="space-y-4">

                <div class="flex items-center md:px-0 px-4 py-4 ">
                  <div class="avatar p-0 mr-3">
                    <div class="w-8 rounded-full">
                      <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
                    </div>
                  </div>
                  <h1 class="text-slate-300 inter text-xl">Anaya_snap</h1>
                </div>
                <figure class="p-0 m-0">
                  <img class="md:rounded md:w-[468px] md:h-[468px]" src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp" alt="Shoes" />
                </figure>
                <div class="flex gap-4 md:px-0 px-4">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="white" stroke width=" 24px" height="24px">
                    <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
                  </svg>
                  <div onclick="openKomen()" class="komen user cursor-pointer">
                    <svg aria-label="Comment" class="x1lliihq x1n2onr6 x5n08af" fill="currentColor" height="24" role="img" viewBox="0 0 24 24" width="24">
                      <title>Comment</title>
                      <path d="M20.656 17.008a9.993 9.993 0 1 0-3.59 3.615L22 22Z" fill="none" stroke="white" stroke-linejoin="round"></path>
                    </svg>
                  </div>
                </div>
                <div class=" md:px-0 px-4">
                  <div class="flex flex-col">
                    <h1 class="text-white inter text-sm pb-2">Liked By <span class="text-gray-400">Anaya_snap</span> _ and Other</h1>
                    <div class="flex items-center gap-2 pb-2">
                      <h1 class="text-white inter text-sm font-bold">Anaya_snap</h1>
                      <p class="text-white font-poppins text-sm">hiiiiii tessss</p>
                    </div>
                    <div onclick="openKomen()" class=" komen user inter text-slate-600 pb-2 text-sm">
                      <p>View All 9 Comment </p>
                    </div>
                    <div class="flex items-center gap-2 pb-4">
                      <h1 class="text-white inter text-sm font-bold">alvinn</h1>
                      <p class="text-white font-poppins text-sm">jelek banget apa apaan </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

        <!-- Right Sidebar Card (hidden on tablet) -->
        <div class="hidden lg:block lg:col-span-1 bg-slate-900 p-6 rounded-lg h-max">
          <div class="card card-side items-center ">
            <div class="card-title flex items-center justify-center w-16 h-16 rounded-full bg-center bg-cover" style="background-color: rgba(94, 59, 122, 1); background-image: url(data:image/webp;base64,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);">
            </div>
            <div class="pl-4 items-center">
              <h1 class=" inter text-white font-bold">FKA twigs</h1>
              <a href="profil.html">
                <div class="items-center flex justify-between pt-2">
                  <p class="inter text-xs" style="color: rgba(156, 156, 156, 1);">View Profile</p>
                  <div class="translate-x-8">
                    <p class="text-sm text-blue-500">Switch</p>
                  </div>

                </div>
              </a>
            </div>
          </div>
          <div class="pt-4">
            <div class="flex justify-between">
              <h1 class=" text-slate-500">Suggested for you</h1>
              <a href="#" class="text-white">See all</a>
            </div>
            <div class="space-y-4">
              <div class="card card-side items-center pt-4 ">
                <div class="card-title flex items-center justify-center w-16 h-16 rounded-full bg-center bg-cover" style="background-color: rgba(94, 59, 122, 1); background-image: url(data:image/webp;base64,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);">
                </div>
                <div class="pl-4 items-center">
                  <h1 class=" inter text-white font-bold">FKA twigs</h1>
                  <a href="profil.html">
                    <div class="items-center flex justify-between pt-2">
                      <p class="inter text-xs" style="color: rgba(156, 156, 156, 1);">View Profile</p>
                      <div class="translate-x-8">
                        <p class="text-sm text-blue-500">Follow</p>
                      </div>

                    </div>
                  </a>
                </div>
              </div>
              <div class="card card-side items-center  ">
                <div class="card-title flex items-center justify-center w-16 h-16 rounded-full bg-center bg-cover" style="background-color: rgba(94, 59, 122, 1); background-image: url(data:image/webp;base64,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);">
                </div>
                <div class="pl-4 items-center">
                  <h1 class=" inter text-white font-bold">FKA twigs</h1>
                  <a href="profil.html">
                    <div class="items-center flex justify-between pt-2">
                      <p class="inter text-xs" style="color: rgba(156, 156, 156, 1);">View Profile</p>
                      <div class="translate-x-8">
                        <p class="text-sm text-blue-500">Follow</p>
                      </div>

                    </div>
                  </a>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bottom Navbar (for mobile) -->
    <div class="md:hidden fixed bottom-0 left-0 right-0 bg-base-200 z-20">
      <div class="btm-nav">
        <a href="/">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
          </svg>
        </a>
        <a href="" class="active">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
        </a>
        <a onclick="openNewPost()" class="new post">
          <svg aria-label="New post" class="x1lliihq x1n2onr6 x5n08af" fill="currentColor" height="24" role="img" viewBox="0 0 24 24" width="24">
            <title>New post</title>
            <path d="M2 12v3.45c0 2.849.698 4.005 1.606 4.944.94.909 2.098 1.608 4.946 1.608h6.896c2.848 0 4.006-.7 4.946-1.608C21.302 19.455 22 18.3 22 15.45V8.552c0-2.849-.698-4.006-1.606-4.945C19.454 2.7 18.296 2 15.448 2H8.552c-2.848 0-4.006.699-4.946 1.607C2.698 4.547 2 5.703 2 8.552Z" fill="currentColor" stroke="cu" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
            <line fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" x1="6.545" x2="17.455" y1="12.001" y2="12.001"></line>
            <line fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" x1="12.003" x2="12.003" y1="6.545" y2="17.455"></line>
          </svg>
        </a>
        <a href="">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
          </svg>
        </a>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <dialog id="my_modal_1" class="modal">
    <div class="modal-box">
      <h3 class="text-lg font-bold py-4">Search! </h3>
      <form action="">
        <!-- HTML -->
        <label class="flex items-center gap-2 border-2 p-2 rounded-md focus-within:bg-white">
          <input type="text" class="grow border border-gray-300 rounded-md px-3 py-1.5 focus:outline-none focus:border-transparent focus:ring-0" placeholder="Search" />
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="h-4 w-4 opacity-70">
            <path fill-rule="evenodd" d="M9.965 11.026a5 5 0 1 1 1.06-1.06l2.755 2.754a.75.75 0 1 1-1.06 1.06l-2.755-2.754ZM10.5 7a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Z" clip-rule="evenodd" />
          </svg>
        </label>

      </form>
      <div class="modal-action">
        <form method="dialog">
          <!-- if there is a button in form, it will close the modal -->
          <button class="btn">Close</button>
        </form>
      </div>
    </div>
  </dialog>
  <div id="overlay" class="overlay"></div>

  <!-- new_post -->
  <dialog id="new_post" class="modal">
    <div class="modal-box">
      <h3 class="text-lg font-bold">Hello!</h3>
      <p class="py-4">Press ESC key or click the button below to close</p>
      <div class="modal-action">
        <form method="dialog">
          <!-- if there is a button in form, it will close the modal -->
          <button class="btn">Close</button>
        </form>
      </div>
    </div>
  </dialog>

  <dialog id="komenn_post" class="modal">
    <div class="modal-box">
      <h3 class="text-lg font-bold">Hello!</h3>
      <p class="py-4">Press ESC key or click the button below to close</p>
      <div class="modal-action">
        <form method="dialog">
          <!-- if there is a button in form, it will close the modal -->
          <button class="btn">Close</button>
        </form>
      </div>
    </div>
  </dialog>

  <!-- Overlay for blur effect -->
  <div id="overlay2" class="overlay2"></div>

  <!-- Script to handle modal and overlay -->
  <script>
    const openModalButton = document.querySelector('.flex.items-center');
    const modal = document.getElementById('my_modal_1');
    const overlay = document.getElementById('overlay');
    const content = document.getElementById('content');

    function openModal() {
      modal.showModal();
      overlay.style.display = 'block';
      content.classList.add('blurred');
    }

    function closeModal() {
      modal.close();
      overlay.style.display = 'none';
      content.classList.remove('blurred');
    }

    overlay.addEventListener('click', closeModal);
    modal.addEventListener('close', closeModal);

    const openNewPostButton = document.querySelector('.new.post');
    const modalNewPost = document.getElementById('new_post');
    const overlay2 = document.getElementById('overlay2');
    const content2 = document.getElementById('content2');

    function openNewPost() {
      modalNewPost.showModal();
      overlay.style.display = 'block';
      content.classList.add('blurred2');
    }

    function closeModal() {
      modalNewPost.close();
      overlay.style.display = 'none';
      content.classList.remove('blurred');
    }

    overlay.addEventListener('click', closeModal);
    modalNewPost.addEventListener('close', closeModal);

    const openKomenButton = document.querySelector('.komen.user');
    const modalkomen = document.getElementById('komenn_post');
    const overla3 = document.getElementById('overlay');
    const content3 = document.getElementById('content');

    function openKomen() {
      modalkomen.showModal();
      overlay.style.display = 'block';
      content.classList.add('blurred');
    }

    function closeModal() {
      modalkomen.close();
      overlay.style.display = 'none';
      content.classList.remove('blurred');
    }

    overlay.addEventListener('click', closeModal);
    modalkomen.addEventListener('close', closeModal);
  </script>
</body>

</html>