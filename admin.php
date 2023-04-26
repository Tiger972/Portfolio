<?php require "config/conf.php" ?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
  <meta charset="UTF-8">
  <title>Admin</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://rsms.me/">
  <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
</head>
<!-- component -->

<div class="antialiased bg-black w-full min-h-screen text-slate-300 relative py-4">
  <div class="grid grid-cols-12 mx-auto gap-2 sm:gap-4 md:gap-6 lg:gap-10 xl:gap-14 max-w-7xl my-10 px-2">
    <div id="menu" class="bg-white/10 col-span-3 rounded-lg p-4 ">
      <h1 class="font-bold text-lg lg:text-3xl bg-gradient-to-br from-white via-white/50 to-transparent bg-clip-text text-transparent">Dashboard<span class="text-indigo-400">.</span></h1>
      <p class="text-slate-400 text-sm mb-2">Welcome back</p>
      <a href="#" class="flex flex-col space-y-2 md:space-y-0 md:flex-row mb-5 items-center mgit d:space-x-2 hover:bg-white/10 group transition duration-150 ease-linear rounded-lg group w-full py-3 px-2">
        <div>
          <img class="rounded-full w-10 h-10 relative object-cover" src="img/facecv.jpeg" alt="">
        </div>
        <div>
          <p class="font-medium group-hover:text-indigo-400 leading-4"> Andy Piquionne</p>
        </div>
      </a>
      <hr class="my-2 border-slate-700">
      <div id="menu" class="flex flex-col space-y-2 my-5">
        <a href="#" class="hover:bg-white/10 transition duration-150 ease-linear rounded-lg py-3 px-2 group">
          <div class="flex flex-col space-y-2 md:flex-row md:space-y-0 space-x-2 items-center">
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 group-hover:text-indigo-400">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
              </svg>

            </div>
            <div>
              <p class="font-bold text-base lg:text-lg text-slate-200 leading-4 group-hover:text-indigo-400">Dashboard</p>
              <p class="text-slate-400 text-sm hidden md:block">Data overview</p>
            </div>

          </div>
        </a>
        <a href="#" class="hover:bg-white/10 transition duration-150 ease-linear rounded-lg py-3 px-2 group">
          <div class="flex flex-col space-y-2 md:flex-row md:space-y-0 space-x-2 items-center">
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 group-hover:text-indigo-400">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
              </svg>
            </div>
            <div>
              <p class="font-bold text-base lg:text-lg text-slate-200 leading-4 group-hover:text-indigo-400">Users</p>
              <p class="text-slate-400 text-sm hidden md:block">Manage users</p>
            </div>

          </div>
        </a>

        <a href="#" class="hover:bg-white/10 transition duration-150 ease-linear rounded-lg py-3 px-2 group">
          <div class="flex flex-col space-y-2 md:flex-row md:space-y-0 space-x-2 items-center">
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 group-hover:text-indigo-400">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
              </svg>
            </div>
            <div>
              <p class="font-bold text-base lg:text-lg text-slate-200 leading-4 group-hover:text-indigo-400">Contact</p>
              <p class="text-slate-400 text-sm hidden md:block">Manage Contact</p>
            </div>

          </div>
        </a>
      </div>
      <p class="text-sm text-center text-gray-600">Andy Piquionne</p>
    </div>


    <div id="content" class="bg-white/10 col-span-9 rounded-lg p-6">
      <div id="last-users">
        <h1 class="font-bold py-4 uppercase">Users Acces</h1>
        <div class="overflow-x-scroll">
          <table class="w-full whitespace-nowrap">
            <thead class="bg-black/60">
            <th class="text-left py-3 px-2 rounded-l-lg">Name</th>
            <th class="text-left py-3 px-2">Email</th>
            <th class="text-left py-3 px-2">Password</th>
            <th class="text-left py-3 px-2 rounded-r-lg">Admin</th>
            </thead>
            <?php
            $sql = "SELECT * FROM user";
            $pre = $pdo->prepare($sql);
            $pre->execute();
            $users = $pre->fetchAll(PDO::FETCH_ASSOC);
            foreach ($users as $user) {
              ?>
              <tr class="border-b border-gray-700">
                <td class="py-3 px-2 font-bold">
                  <div class="inline-flex space-x-3 items-center">
                    <span><img class="rounded-full w-8 h-8" src="img/facecv.jpeg" alt=""></span>
                    <span><?php echo $user['name']; ?></span>
                  </div>
                </td>
                <td><?php echo $user['email']; ?></td>
                <td><?php echo $user['password']; ?></td>
                <td><?php echo $user['admin']; ?></td>
                <td class="py-3 px-2">
                  <!-- Actions... -->
                </td>
              </tr>
            <?php } ?>
          </table>
        </div>
      </div>

      <div id="last-contacts">
        <h1 class="font-bold py-4 uppercase">Contacts</h1>
        <div class="overflow-x-scroll">
          <table class="w-full whitespace-nowrap">
            <thead class="bg-black/60">
            <th class="text-left py-3 px-2 rounded-l-lg">Name</th>
            <th class="text-left py-3 px-2">Email</th>
            <th class="text-left py-3 px-2">Message</th>

            </thead>
            <?php
            $sql = "SELECT * FROM contacts";
            $pre = $pdo->prepare($sql);
            $pre->execute();
            $contacts = $pre->fetchAll(PDO::FETCH_ASSOC);
            foreach ($contacts as $contact) {
              ?>
              <tr class="border-b border-gray-700">
                <td class="py-3 px-2 font-bold"><?php echo $contact['name']; ?></td>
                <td><?php echo $contact['email']; ?></td>
                <td><?php echo $contact['message']; ?></td>
                <td class="py-3 px-2">
                  <!-- Actions... -->
                </td>
              </tr>
            <?php } ?>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>