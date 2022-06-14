<?php

namespace App\Twig;

use App\Repository\ConferenceRepository;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;

class AppExtension extends AbstractExtension
{
    public function __construct(
        private ConferenceRepository $conferences,
    ) {
    }

    public function getFilters(): array
    {
        return [
        ];
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('conferences', [$this, 'getConferences']),
        ];
    }

    public function getConferences()
    {
        return $this->conferences->findAll();
    }
}
