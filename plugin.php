<?php

declare(strict_types=1);

namespace Flextype\Plugin\PageViewCounter {

    use Twig\TwigFunction;

    /**
     * Get page view counter
     *
     * @return int
     */
    function pageViewCounter(): int
    {
        $page = \Slim\Http\Uri::createFromEnvironment(new \Slim\Http\Environment($_SERVER))->getPath();

        $saveDir = PATH['project'] . '/data/page-view-counter/';

        if ($page === '') {
            $page = flextype('registry')->get('plugins.site.settings.entries.main');
        } else {
            $page = str_replace("/", "-", ltrim(rtrim($page, '/'), '/'));
        }

        ! filesystem()->directory($saveDir)->exists() and filesystem()->directory($saveDir)->create(0755, true);

        if (! filesystem()->directory($saveDir . $page . '.txt')->exists()) {
            filesystem()->file($saveDir . $page . '.txt')->put('1');
            return 1;
        } else {
            $count = filesystem()->file($saveDir . $page . '.txt')->get();
            $count++;
            filesystem()->file($saveDir . $page . '.txt')->put((string) $count);

            return $count;
        }
    }

    // Shortcode: [pageViewCounter]
    flextype('parsers')->shortcode()->addHandler('pageViewCounter', fn () => pageViewCounter());

    // Twig: {{ pageViewCounter() }}
    flextype('twig')->addFunction(new TwigFunction('pageViewCounter', fn () => pageViewCounter()));
}
