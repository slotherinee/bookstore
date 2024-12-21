   <?php function shouldShowLink($title)
   {
       $isLoggedIn = isset($_SESSION["user"]);

       if (
           $title === "Admin" &&
           (!$isLoggedIn || $_SESSION["user"]["role"] !== "admin")
       ) {
           return false;
       }
       if ($title === "Logout" && !$isLoggedIn) {
           return false;
       }
       if ($title === "Register" && $isLoggedIn) {
           return false;
       }
       if ($title === "Login" && $isLoggedIn) {
           return false;
       }
       return true;
   } ?>
   <?php $headerLinks = [
       "Home" => "/",
       "Catalog" => "/pages/catalog.php",
       "About" => "/pages/about.php",
       "Contacts" => "/pages/contacts.php",
       "Admin" => "/pages/admin.php",
       "Login" => "/pages/login.php",
       "Logout" => "/pages/logout.php",
       "Register" => "/pages/registration.php",
   ]; ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Bookstore</title>
    <style>
        #mobile-menu.active {
            display: block;
        }
    </style>
</head>
<body class="min-h-screen flex flex-col justify-between">
<header id="header" class="bg-white dark:bg-gray-800 h-16 sm:h-20 transition-all duration-300 ease-in-out z-50">
    <div class="container mx-auto px-4 h-full flex items-center justify-between">
        <a href="/" class="text-xl sm:text-2xl font-bold text-gray-800 dark:text-white">
            <svg width="40" height="40" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                 viewBox="0 0 512 512" xml:space="preserve">
<path style="fill:#B9785F;" d="M414.897,512h-70.621c-9.751,0-17.655-7.904-17.655-17.655V70.621
	c0-9.751,7.904-17.655,17.655-17.655h70.621c9.751,0,17.655,7.904,17.655,17.655v423.724C432.552,504.096,424.648,512,414.897,512z"
/>
                <path style="fill:#AA6955;" d="M344.276,52.966c-9.75,0-17.655,7.904-17.655,17.655v423.724c0,9.75,7.905,17.655,17.655,17.655
	V52.966z"/>
                <path style="fill:#FFD782;" d="M383.774,349.369l21.365-64.095c0.604-1.812,0.604-3.77,0-5.583l-21.365-64.095
	c-1.342-4.024-7.033-4.024-8.374,0l-21.365,64.095c-0.604,1.812-0.604,3.772,0,5.583l21.365,64.095
	C376.74,353.394,382.432,353.394,383.774,349.369z"/>
                <path style="fill:#9B8273;" d="M185.379,512H97.103c-9.751,0-17.655-7.904-17.655-17.655V105.931
	c0-9.751,7.904-17.655,17.655-17.655h88.276c9.751,0,17.655,7.904,17.655,17.655v388.414C203.034,504.096,195.13,512,185.379,512z"
                />
                <path style="fill:#876E64;" d="M79.448,105.931v388.414c0,9.75,7.905,17.655,17.655,17.655V88.276
	C87.353,88.276,79.448,96.18,79.448,105.931z"/>
                <path style="fill:#FFD782;" d="M145.429,367.025l21.365-64.095c0.604-1.812,0.604-3.772,0-5.583l-21.365-64.095
	c-1.342-4.024-7.033-4.024-8.374,0l-21.365,64.095c-0.604,1.812-0.604,3.772,0,5.583l21.365,64.095
	C138.396,371.049,144.087,371.049,145.429,367.025z"/>
                <path style="fill:#707487;" d="M308.966,512H220.69c-9.751,0-17.655-7.904-17.655-17.655V17.655C203.034,7.904,210.938,0,220.69,0
	h88.276c9.751,0,17.655,7.904,17.655,17.655v476.69C326.621,504.096,318.717,512,308.966,512z"/>
                <path style="fill:#5B5D6E;" d="M220.69,512L220.69,512V0l0,0c-9.751,0-17.655,7.904-17.655,17.655v476.69
	C203.034,504.096,210.938,512,220.69,512z"/>
                <g>
                    <path style="fill:#FFD782;" d="M269.015,322.887l21.365-64.095c0.604-1.812,0.604-3.77,0-5.583l-21.365-64.095
		c-1.342-4.024-7.033-4.024-8.374,0l-21.365,64.095c-0.604,1.812-0.604,3.77,0,5.583l21.365,64.095
		C261.982,326.911,267.673,326.911,269.015,322.887z"/>
                    <rect x="203.034" y="35.31" style="fill:#FFD782;" width="123.586" height="17.655"/>
                    <rect x="203.034" y="70.621" style="fill:#FFD782;" width="123.586" height="17.655"/>
                    <rect x="203.034" y="423.724" style="fill:#FFD782;" width="123.586" height="17.655"/>
                    <rect x="203.034" y="459.034" style="fill:#FFD782;" width="123.586" height="17.655"/>
                    <rect x="79.448" y="441.379" style="fill:#FFD782;" width="123.586" height="17.655"/>
                    <rect x="326.621" y="441.379" style="fill:#FFD782;" width="105.931" height="17.655"/>
                    <rect x="326.621" y="105.931" style="fill:#FFD782;" width="105.931" height="17.655"/>
                    <rect x="79.448" y="141.241" style="fill:#FFD782;" width="123.586" height="17.655"/>
                </g>
                <g>
                    <rect x="203.034" y="35.31" style="fill:#FFC36E;" width="17.655" height="17.655"/>
                    <rect x="203.034" y="70.621" style="fill:#FFC36E;" width="17.655" height="17.655"/>
                    <rect x="79.448" y="141.241" style="fill:#FFC36E;" width="17.655" height="17.655"/>
                    <rect x="79.448" y="441.379" style="fill:#FFC36E;" width="17.655" height="17.655"/>
                    <rect x="326.621" y="105.931" style="fill:#FFC36E;" width="17.655" height="17.655"/>
                    <rect x="326.621" y="441.379" style="fill:#FFC36E;" width="17.655" height="17.655"/>
                    <rect x="203.034" y="423.724" style="fill:#FFC36E;" width="17.655" height="17.655"/>
                    <rect x="203.034" y="459.034" style="fill:#FFC36E;" width="17.655" height="17.655"/>
                </g>
</svg>
        </a>
        <nav class="hidden sm:block">
            <ul class="flex space-x-4">
                <?php foreach ($headerLinks as $title => $link): ?>
                    <?php if (shouldShowLink($title)): ?>
                        <li>
                            <a
                                href="<?= $link ?>"
                                class="text-gray-600 hover:text-blue-600 dark:text-gray-300 dark:hover:text-blue-400 <?= $_SERVER[
                                    "REQUEST_URI"
                                ] === $link
                                    ? "underline underline-offset-4"
                                    : "" ?>"><?= $title ?></a>
                        </li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        </nav>
        <button id="mobile-menu-button" class="sm:hidden text-gray-600 dark:text-gray-300">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>
    </div>
</header>
<div id="mobile-menu" class="fixed inset-0 bg-gray-800 bg-opacity-85 z-40 hidden">
    <div class="flex items-center justify-center h-full">
        <nav class="text-center">
            <ul class="space-y-4">
                <?php foreach ($headerLinks as $title => $link) {
                    if (shouldShowLink($title)) {
                        echo "<li><a href=\"$link\" class=\"text-white text-2xl\">$title</a></li>";
                    }
                } ?>
            </ul>
        </nav>
    </div>
</div>
</body>
</html>
