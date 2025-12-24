<?php require_once 'header.php'; ?>

<section id="home" class="min-h-screen flex items-center justify-center relative overflow-hidden">

    <div
        class="absolute top-1/4 left-1/4 w-96 h-96 bg-neon-purple rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob">
    </div>
    <div
        class="absolute top-1/3 right-1/4 w-96 h-96 bg-neon-cyan rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob animation-delay-2000">
    </div>
    <div
        class="absolute -bottom-8 left-1/3 w-96 h-96 bg-neon-blue rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob animation-delay-4000">
    </div>

    <div class="relative z-10 text-center px-4 max-w-4xl mx-auto">
        <h2 class="text-xl md:text-2xl text-neon-cyan mb-4 font-semibold tracking-wider uppercase">
            <?php echo $hero['name']; ?></h2>
        <h1 class="text-5xl md:text-7xl font-bold mb-6 text-white tracking-tight">
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-neon-blue via-neon-purple to-neon-cyan">
                <?php echo $hero['title']; ?>
            </span>
        </h1>
        <p class="text-lg md:text-xl text-gray-400 mb-10 max-w-2xl mx-auto leading-relaxed">
            <?php echo $hero['subtitle']; ?>
        </p>
        <a href="<?php echo $hero['cta_link']; ?>"
            class="group relative inline-flex items-center justify-center px-8 py-4 text-base font-bold text-white transition-all duration-200 bg-indigo-600 rounded-full hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600 neon-border hover:shadow-lg hover:shadow-indigo-500/50">
            <?php echo $hero['cta_text']; ?>
            <svg class="w-5 h-5 ml-2 -mr-1 transition-transform group-hover:translate-x-1" fill="currentColor"
                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                    clip-rule="evenodd"></path>
            </svg>
        </a>
    </div>

    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
        <a href="#about" class="text-gray-500 hover:text-white transition-colors">
            <i class="fa-solid fa-arrow-down text-2xl"></i>
        </a>
    </div>
</section>

<section id="about" class="py-20 bg-dark-900 border-t border-gray-800">
    <div class="max-w-screen-xl mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-start">

            <div class="slide-in-left">
                <h3 class="text-3xl font-bold text-white mb-6 flex items-center">
                    <span class="w-12 h-1 bg-indigo-500 mr-4 rounded-full"></span>
                    <?php echo $about['title']; ?>
                </h3>
                <p class="text-gray-400 text-lg leading-relaxed mb-8">
                    <?php echo $about['description']; ?>
                </p>

                <div class="grid grid-cols-2 gap-4">
                    <div class="glass p-6 rounded-xl hover:bg-gray-800/50 transition-colors">
                        <i class="fa-solid fa-code text-3xl text-neon-blue mb-3"></i>
                        <h4 class="text-white font-bold text-xl">50+</h4>
                        <span class="text-gray-500 text-sm">Tamamlanan Proje</span>
                    </div>
                    <div class="glass p-6 rounded-xl hover:bg-gray-800/50 transition-colors">
                        <i class="fa-solid fa-mug-hot text-3xl text-neon-purple mb-3"></i>
                        <h4 class="text-white font-bold text-xl">1000+</h4>
                        <span class="text-gray-500 text-sm">Kahve & Kod</span>
                    </div>
                </div>
            </div>

            <div>
                <h3 class="text-3xl font-bold text-white mb-8 flex items-center">
                    <i class="fa-solid fa-user-graduate text-indigo-500 mr-4"></i>
                    Eğitim & Sertifikalar
                </h3>
                <div class="relative border-l border-gray-700 ml-3">
                    <?php foreach ($education as $edu): ?>
                        <div class="mb-10 ml-6 group">
                            <span
                                class="absolute flex items-center justify-center w-8 h-8 bg-dark-800 rounded-full -left-4 ring-4 ring-dark-900 group-hover:ring-indigo-500/50 transition-all duration-300">
                                <i class="<?php echo $edu['icon']; ?> text-indigo-400"></i>
                            </span>
                            <div
                                class="glass p-6 rounded-xl hover:bg-gray-800/80 transition-all duration-300 hover:transform hover:translate-x-2 border border-gray-800 hover:border-indigo-500/30">
                                <time
                                    class="block mb-2 text-sm font-normal leading-none text-gray-500"><?php echo $edu['date']; ?></time>
                                <h3 class="flex items-center mb-1 text-lg font-bold text-white">
                                    <?php echo $edu['school']; ?>
                                    <span
                                        class="bg-indigo-900 text-indigo-300 text-xs font-medium mr-2 px-2.5 py-0.5 rounded ml-3 border border-indigo-800"><?php echo $edu['degree']; ?></span>
                                </h3>
                                <div class="text-base font-normal text-indigo-300 mb-2"><?php echo $edu['department']; ?>
                                </div>
                                <p class="mb-4 text-base font-normal text-gray-400"><?php echo $edu['description']; ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="projects" class="py-20 bg-dark-800 relative">
    <div class="max-w-screen-xl mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-5xl font-bold text-white mb-4">Projelerim</h2>
            <div class="w-24 h-1 bg-gradient-to-r from-neon-blue to-neon-purple mx-auto rounded-full"></div>
            <p class="mt-4 text-gray-400">Son zamanlarda üzerinde çalıştığım harika işler.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php foreach ($projects as $project): ?>
                <div
                    class="glass rounded-2xl overflow-hidden group hover:shadow-2xl hover:shadow-indigo-500/20 transition-all duration-300 flex flex-col h-full">
                    <div class="relative overflow-hidden h-48">
                        <div class="absolute inset-0 bg-indigo-900/20 group-hover:bg-transparent transition-colors z-10">
                        </div>
                        <img src="<?php echo $project['image']; ?>" alt="<?php echo $project['title']; ?>"
                            class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">

                        <a href="<?php echo $project['github']; ?>" target="_blank"
                            class="absolute top-4 right-4 z-20 bg-dark-900/90 text-white p-2 rounded-full opacity-0 group-hover:opacity-100 transform translate-y-4 group-hover:translate-y-0 transition-all duration-300 hover:text-indigo-400">
                            <i class="fa-brands fa-github text-xl"></i>
                        </a>
                    </div>

                    <div class="p-6 flex-1 flex flex-col">
                        <h3 class="text-xl font-bold text-white mb-3 group-hover:text-indigo-400 transition-colors">
                            <?php echo $project['title']; ?></h3>
                        <p class="text-gray-400 text-sm mb-4 line-clamp-3">
                            <?php echo $project['description']; ?>
                        </p>

                        <div class="flex flex-wrap gap-2 mb-6 mt-auto">
                            <?php foreach ($project['tags'] as $tag): ?>
                                <span
                                    class="px-3 py-1 text-xs font-semibold text-indigo-300 bg-indigo-900/50 rounded-full border border-indigo-500/20">
                                    #<?php echo $tag; ?>
                                </span>
                            <?php endforeach; ?>
                        </div>

                        <a href="<?php echo $project['demo']; ?>"
                            class="inline-flex items-center text-neon-cyan hover:text-white transition-colors font-medium text-sm group-card-hover">
                            Projeyi İncele <i
                                class="fa-solid fa-arrow-right ml-2 transition-transform duration-300 group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section id="skills" class="py-20 bg-dark-900 border-t border-gray-800">
    <div class="max-w-screen-xl mx-auto px-4">
        <h2 class="text-3xl md:text-5xl font-bold text-white mb-10 text-center">Yetenekler</h2>

        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-8 gap-6">
            <?php foreach ($skills as $skill): ?>
                <div
                    class="glass p-6 rounded-2xl flex flex-col items-center justify-center hover:bg-gray-800 transition-all duration-300 group cursor-default">
                    <i
                        class="<?php echo $skill['icon']; ?> text-4xl mb-3 <?php echo $skill['color']; ?> transform group-hover:scale-110 transition-transform duration-300"></i>
                    <span class="text-gray-300 font-medium text-sm"><?php echo $skill['name']; ?></span>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section id="contact" class="py-20 relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-b from-dark-800 to-dark-900 -z-10"></div>

    <div class="max-w-4xl mx-auto px-4">
        <div class="glass p-1 rounded-3xl">
            <div class="bg-dark-900/90 rounded-[22px] p-8 md:p-12 backdrop-blur-sm">
                <div class="text-center mb-10">
                    <h2 class="text-3xl font-bold text-white mb-4">İletişime Geç</h2>
                    <p class="text-gray-400">Projeleriniz veya sorularınız için bana ulaşmaktan çekinmeyin.</p>
                </div>

                <form action="#" class="space-y-6">
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="relative">
                            <input type="text" id="name"
                                class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-white bg-transparent rounded-lg border-1 border-gray-600 appearance-none focus:outline-none focus:ring-0 focus:border-indigo-500 peer"
                                placeholder=" " />
                            <label for="name"
                                class="absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-dark-900 px-2 peer-focus:px-2 peer-focus:text-indigo-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Adınız</label>
                        </div>
                        <div class="relative">
                            <input type="email" id="email"
                                class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-white bg-transparent rounded-lg border-1 border-gray-600 appearance-none focus:outline-none focus:ring-0 focus:border-indigo-500 peer"
                                placeholder=" " />
                            <label for="email"
                                class="absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-dark-900 px-2 peer-focus:px-2 peer-focus:text-indigo-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">E-posta
                                Adresiniz</label>
                        </div>
                    </div>

                    <div class="relative">
                        <textarea id="message" rows="4"
                            class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-white bg-transparent rounded-lg border-1 border-gray-600 appearance-none focus:outline-none focus:ring-0 focus:border-indigo-500 peer"
                            placeholder=" "></textarea>
                        <label for="message"
                            class="absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-dark-900 px-2 peer-focus:px-2 peer-focus:text-indigo-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Mesajınız</label>
                    </div>

                    <div class="text-center">
                        <button type="submit"
                            class="text-white bg-indigo-600 hover:bg-indigo-700 focus:ring-4 focus:ring-indigo-800 font-medium rounded-lg text-sm px-10 py-3.5 mr-2 mb-2 focus:outline-none transition-colors neon-border">
                            Gönder
                            <i class="fa-solid fa-paper-plane ml-2"></i>
                        </button>
                    </div>
                </form>

                <div class="mt-8 pt-8 border-t border-gray-700 flex justify-center space-x-6">
                    <?php foreach ($socials as $key => $link): ?>
                        <a href="<?php echo $link; ?>" class="text-gray-400 hover:text-white transition-colors text-2xl">
                            <i class="fa-brands fa-<?php echo ($key == 'email') ? 'google' : $key; ?>"></i>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once 'footer.php'; ?>