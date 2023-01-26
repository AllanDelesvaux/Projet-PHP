<footer aria-label="footer" class="bg-[#C87B00]">
        <div class="pt-10 border-t border-gray-100 sm:flex sm:items-center sm:justify-between lg:mt-24">
            <nav aria-label="Footer">
                <ul class="flex flex-wrap justify-center gap-4 text-xs lg:justify-end">
                    <li>
                    <?php Vue::montrer('Composant/bouton', array('action' => '#', 'valeur' => 'Terms & Conditions')); ?>
                    </li>

                    <li>
                    <?php Vue::montrer('Composant/bouton', array('action' => '#', 'valeur' => 'Privacy Policy')); ?>
                    </li>

                    <li>
                    <?php Vue::montrer('Composant/bouton', array('action' => '#', 'valeur' => 'Cookies')); ?>
                    </li>
                </ul>
            </nav>
            <ul class="flex justify-center gap-6 mt-8 sm:mt-0 lg:justify-end">
                <li>
                     <?php Vue::montrer('Composant/github') ?>
                </li>
            </ul>
        </div>
</footer>
