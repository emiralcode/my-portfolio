<?php require_once 'config.php'; ?>
<!DOCTYPE html>
<html lang="<?php echo $meta['lang']; ?>" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $meta['title']; ?></title>
    <meta name="description" content="<?php echo $meta['description']; ?>">
    <meta name="keywords" content="<?php echo $meta['keywords']; ?>">
    <meta name="theme-color" content="<?php echo $meta['theme_color']; ?>">

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Outfit', 'sans-serif'],
                    },
                    colors: {
                        dark: {
                            900: '#0f172a',
                            800: '#1e293b',
                            700: '#334155',
                        },
                        neon: {
                            blue: '#4ade80',
                            purple: '#a855f7',
                            cyan: '#06b6d4'
                        }
                    }
                }
            }
        }
    </script>
</head>

<body
    class="bg-dark-900 text-white font-sans antialiased overflow-x-hidden selection:bg-indigo-500 selection:text-white">

    <nav class="fixed w-full z-50 top-0 start-0 border-b border-gray-800 glass">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                <span class="self-center text-2xl font-bold whitespace-nowrap text-gradient">Enes.</span>
            </a>
            <button data-collapse-toggle="navbar-sticky" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-400 rounded-lg md:hidden hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-600"
                aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Menüyü Aç</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul
                    class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-700 rounded-lg bg-dark-800 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-transparent">
                    <li>
                        <a href="#home"
                            class="block py-2 px-3 text-white rounded hover:bg-gray-700 md:hover:bg-transparent md:hover:text-indigo-400 md:p-0 transition-colors">Ana
                            Sayfa</a>
                    </li>
                    <li>
                        <a href="#about"
                            class="block py-2 px-3 text-white rounded hover:bg-gray-700 md:hover:bg-transparent md:hover:text-indigo-400 md:p-0 transition-colors">Hakkımda</a>
                    </li>
                    <li>
                        <a href="#projects"
                            class="block py-2 px-3 text-white rounded hover:bg-gray-700 md:hover:bg-transparent md:hover:text-indigo-400 md:p-0 transition-colors">Projeler</a>
                    </li>
                    <li>
                        <a href="#contact"
                            class="block py-2 px-3 text-white rounded hover:bg-gray-700 md:hover:bg-transparent md:hover:text-indigo-400 md:p-0 transition-colors">İletişim</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="pt-20">