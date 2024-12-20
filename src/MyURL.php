<?php

namespace Rupijohn\Slugify;

use Cocur\Slugify\Slugify;

class MyURL
{
    function slugify($url, $link)
    {
        $slugify = new slugify();
        return $url . "/" . $slugify->slugify($link);
    }
}