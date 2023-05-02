<?php

namespace Sbyaute\StarRatingBundle\Extensions;

use Symfony\Component\DependencyInjection\ContainerInterface;
use Twig\Extension\AbstractExtension;

class StarRatingExtension extends AbstractExtension
{

    protected $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function getFilters()
    {
        return array(
            new \Twig\TwigFilter('rating', array($this, 'rating'), array('is_safe' => array('all'))),
        );
    }

    public function rating($number, $max = 5, $starSize = "", $inline = false)
    {
        $tag = 'div';
        if ($inline) {
            $tag = 'span';
        }
        return $this->container->get('twig')->render(
            '@SbyauteStarRatingBundle/Display/ratingDisplay.html.twig',
            array(
                'stars' => $number,
                'max' => $max,
                'starSize' => $starSize,
                'tag' => $tag,
            )
        );
    }

    public function getName()
    {
        return 'star_rating_extension';
    }
}
