<?php

declare(strict_types=1);

/*
 * This file is part of the Sonata Project package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\NewsBundle\Serializer;

use Sonata\Form\Serializer\BaseSerializerHandler;

/**
 * NEXT_MAJOR: Remove this file and the serializer configuration for Gallery.
 *
 * @author Sylvain Deloux <sylvain.deloux@ekino.com>
 *
 * @deprecated since sonata-project/news-bundle 3.x, to be removed in 4.0.
 */
class PostSerializerHandler extends BaseSerializerHandler
{
    public static function getType()
    {
        return 'sonata_news_post_id';
    }
}
