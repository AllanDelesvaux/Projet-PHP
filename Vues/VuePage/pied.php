<footer aria-label="footer" class="bg-white">
        <div class="pt-8 mt-16 border-t border-gray-100 sm:flex sm:items-center sm:justify-between lg:mt-24">
            <nav aria-label="Footer">
                <ul class="flex flex-wrap justify-center gap-4 text-xs lg:justify-end">
                    <li>
                        <?php Vue::montrer('Composant/termsConditions') ?>
                    </li>

                    <li>
                        <?php Vue::montrer('Composant/privacyPolicy') ?>
                    </li>

                    <li>
                        <?php Vue::montrer('Composant/cookies') ?>
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
