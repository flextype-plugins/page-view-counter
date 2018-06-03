<?php

/**
 *
 * Flextype Page View Counter Plugin
 *
 * @author Romanenko Sergey / Awilum <awilum@yandex.ru>
 * @link http://flextype.org
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Flextype;

use Flextype\Component\{Event\Event, Http\Http, Filesystem\Filesystem};

function getPageViewCounter()
{
    $page = Http::getUriString();

    if ($page == '') {
        $page = 'home';
    } else {
        $page = str_replace("/", "-", $page);
    }

    $dir  = PATH['site'] . '/data/page-view-counter/';

    // Create directory for /data/page-view-counter/
    !Filesystem::dirExists($dir) and Filesystem::createDir($dir);

    if (!Filesystem::fileExists($dir . $page . '.txt')) {
        Filesystem::setFileContent($dir . $page . '.txt', '1');

        return '1';

    } else {
        $count = Filesystem::getFileContent($dir . $page . '.txt');
        $count++;
        Filesystem::setFileContent($dir . $page . '.txt', $count);

        return $count;
    }
}
