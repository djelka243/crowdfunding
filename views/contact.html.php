<!DOCTYPE html>
<html lang="en">

<head>
     <title>Contact</title>
     <?php include(DOSSIER.'/composants/dependances.html.php'); ?> 
</head>

<body class="bg-gray-800 text-gray-100">
  
    <div
        class="max-w-screen-xl mt-24 px-8 grid gap-8 grid-cols-1 md:grid-cols-2 md:px-12 lg:px-16 xl:px-32 py-16 mx-auto bg-gray-100 text-gray-900 rounded-lg shadow-lg">
        <div class="flex flex-col justify-between">
            <div>
                <h2 class="text-4xl lg:text-5xl font-bold leading-tight">Ecrivez ! Nous vous écoutons</h2>
                <div class="text-gray-700 mt-8">
                    Vous détestez les formulaires ? Envoyez-nous un <span class="underline cursor-pointer">e-mail</span>
                    à la place.
                </div>
            </div>
            <div class="mt-8 text-center">
                <img src="assets/images/Cope.png" width="100%" style="margin-bottom: -1%; margin-top: -10%;" alt="logo du site" class="mr-5">
            </div>
        </div>
        <div class="">
            <div>
                <span class="uppercase text-sm text-gray-600 font-bold">Nom Complet</span>
                <input
                    class="w-full bg-gray-300 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                    type="text" placeholder="">
            </div>
            <div class="mt-8">
                <span class="uppercase text-sm text-gray-600 font-bold">Email</span>
                <input
                    class="w-full bg-gray-300 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                    type="text">
            </div>
            <div class="mt-8">
                <span class="uppercase text-sm text-gray-600 font-bold">Message</span>
                <textarea
                    class="w-full h-32 bg-gray-300 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"></textarea>
            </div>
            <div class="mt-8">
                <button
                    class="uppercase text-sm font-bold tracking-wide bg-[#c28607] text-gray-100 p-3 rounded-lg w-full focus:outline-none focus:shadow-outline">
                    Envoyer
                </button>
            </div>
            <div class="mt-8 justify-between flex text-4xl">
                <i class="fa-brands fa-facebook hover:text-[#c28607] cursor-pointer"></i>
                <i class="fa-brands fa-whatsapp hover:text-[#c28607] cursor-pointer"></i>
                <i class="fa-brands fa-instagram hover:text-[#c28607] cursor-pointer"></i>
                <i class="fa-brands fa-linkedin hover:text-[#c28607] cursor-pointer"></i>
                <i class="fa-solid fa-phone hover:text-[#c28607] cursor-pointer"></i>
                <i class="fa-brands fa-twitter hover:text-[#c28607] cursor-pointer"></i>
             </div>
        </div>
    </div>
</body>

</html>