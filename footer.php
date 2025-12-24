</main>

<footer class="bg-dark-900 border-t border-gray-800 mt-20">
    <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
        <div class="sm:flex sm:items-center sm:justify-between">
            <a href="#" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                <span class="self-center text-2xl font-semibold whitespace-nowrap text-gradient">Enes.</span>
            </a>
            <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-400 sm:mb-0">
                <?php foreach ($socials as $key => $link): ?>
                    <li>
                        <a href="<?php echo $link; ?>" target="_blank"
                            class="hover:text-white me-4 md:me-6 capitalize transition-colors">
                            <i class="fa-brands fa-<?php echo ($key == 'email') ? 'google' : $key; ?>"></i>
                            <?php echo ucfirst($key); ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <hr class="my-6 border-gray-800 sm:mx-auto lg:my-8" />
        <span class="block text-sm text-gray-500 sm:text-center">© <?php echo date('Y'); ?> <a href="#"
                class="hover:underline">Enes™</a>. Tüm Hakları Saklıdır.</span>
    </div>
</footer>

<script>
    document.querySelector('[data-collapse-toggle]').addEventListener('click', function () {
        const target = document.getElementById(this.getAttribute('aria-controls'));
        target.classList.toggle('hidden');
    });
</script>
</body>

</html>