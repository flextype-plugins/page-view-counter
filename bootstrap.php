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

//use Flextype\Component\{Event\Event, Http\Http, Filesystem\Filesystem};

include_once 'app/Controllers/PageViewCounterController.php';
include_once 'twig/PageViewCounterTwigExtension.php';

$flextype['PageViewCounterController'] = function ($container) {
     return new PageViewCounterController($container);
};

// Add Twig Extension
$flextype->view->addExtension(new PageViewCounterTwigExtension($flextype));
