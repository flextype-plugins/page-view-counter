<?php

namespace Flextype;

use Flextype\Component\Filesystem\Filesystem;

class PageViewCounterController extends Controller
{
    public function counter()
    {
        $page = \Slim\Http\Uri::createFromEnvironment(new \Slim\Http\Environment($_SERVER))->getPath();

        if ($page == '') {
            $page = 'home';
        } else {
            $page = str_replace("/", "-", ltrim(rtrim($page, '/'), '/'));
        }

        $dir = PATH['site'] . '/data/page-view-counter/';

        // Create directory for /data/page-view-counter/
        !Filesystem::has($dir) and Filesystem::createDir($dir);

        if (!Filesystem::has($dir . $page . '.txt')) {
            Filesystem::write($dir . $page . '.txt', '1');

            return '1';

        } else {
            $count = Filesystem::read($dir . $page . '.txt');
            $count++;
            Filesystem::write($dir . $page . '.txt', $count);

            return $count;
        }

    }
}
