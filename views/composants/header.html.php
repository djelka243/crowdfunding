<nav class="sm:px-4 w-full z-20 left-0  dark:border-gray-600 items-center">
  <div class="container flex flex-wrap items-center justify-between mx-auto">
    <a href="<?= LIEN ?>/accueil" class="">
      <img src="assets/images/Cope.png" width="50%" class="mr-3 sm:h-25 w-40" alt="Cope logo">
    </a>
    <div class="flex md:order-2">
      <?php

      if (isset($_SESSION['nom']) && $_SESSION['compte'] !== null) {


      ?>
        <button id="dropdownHoverButton2" data-dropdown-toggle="dropdownHover2" data-dropdown-trigger="hover" type="button" class=" hover:text-[#c28607] hover:text-white focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-4 py-3 text-center mr-3 md:mr-0">
          <!-- Dropdown menu -->
          <div id="dropdownHover2" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownHoverButton">
              <li>
                <a href="<?= LIEN ?>/mon-compte" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-[#c28607] hover:text-[#c28607]">Mon compte</a>
              </li>
              <li>
                <a href="<?= LIEN ?>/logout" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-[#c28607] hover:text-[#c28607]">Se deconnecter</a>
              </li>
            </ul>
          </div>
          <div class="flex justify-center md:hover:text-[#c28607]">
            <p class="mr-1 text-xl font-semibold leading-normal mb-2 text-gray-800 mb-2">
              <?php echo $_SESSION['prenom'];  ?>
            </p>
            <p class="text-xl font-semibold leading-normal mb-2 text-gray-800 mb-2">
              <?php echo "";
              echo $_SESSION['nom']  ?>
            </p>
          </div>
        </button>
      <?php
      } else {
      ?>
        <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" type="button" class="text-black hover:bg-[#c28607] hover:text-white focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-4 py-3 text-center mr-3 md:mr-0">
          Se connecter
        </button>
      <?php
      }
      ?>


      <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 aria-controls=" navbar-sticky aria-expanded="false">
        <span class="sr-only">Menu</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
        </svg>
      </button>
    </div>
    <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
      <ul class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white">
        <li>
          <a href="<?= LIEN ?>/accueil" class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-black md:hover:text-[#c28607] md:p-0" aria-current="page">Accueil</a>
        </li>
        <li>


          <button id="dropdownHoverButton" data-dropdown-toggle="dropdownHover" data-dropdown-trigger="hover" class="text-black hover:text-[#c28607] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center" type="button">Apropos <i class="fa-solid fa-chevron-down ml-2"></i></button>
          <!-- Dropdown menu -->
          <div id="dropdownHover" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownHoverButton">
              <li>
                <a href="<?= LIEN ?>/apropo-du-crowdfunding" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-[#c28607] hover:text-[#c28607]">Que
                  c’est le crowdfunding ?</a>
              </li>
              <li>
                <a href="<?= LIEN ?>/qui-sommes-nous" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-[#c28607] hover:text-[#c28607]">Qui
                  sommes-nous</a>
              </li>
            </ul>
          </div>

        </li>
        <li>
          <a href="<?= LIEN ?>/contact" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-[#c28607] md:hover:bg-transparent md:text-black md:hover:text-[#c28607] md:p-0 md:dark:hover:text-[#c28607] dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>