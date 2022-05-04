<?php

namespace nthmedia\configurableheadings\twigextensions;

use nthmedia\configurableheadings\models\ConfigurableHeadingModel;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;

class ConfigurableHeadingTwigExtension extends AbstractExtension
{
    // Public Methods
    // =========================================================================

    public function getName(): string
    {
        return 'Configurable Heading';
    }

    public function getFilters(): array
    {
        return [
            new TwigFilter('heading', [$this, 'heading']),
            new TwigFilter('element', [$this, 'element']),
            new TwigFilter('enableId', [$this, 'enableId']),
            new TwigFilter('overwriteId', [$this, 'overwriteId']),
        ];
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('heading', [$this, 'heading']),
            new TwigFunction('element', [$this, 'element']),
            new TwigFunction('overwriteId', [$this, 'overwriteId']),
        ];
    }

    public function heading(?ConfigurableHeadingModel $value = null)
    {
        return $value->heading;
    }

    public function element(?ConfigurableHeadingModel $value = null)
    {
        return $value->element;
    }

    public function enableId(?ConfigurableHeadingModel $value = null): bool
    {
        return $value->enableId;
    }

    public function overwriteId(?ConfigurableHeadingModel $value = null)
    {
        return $value->overwriteId;
    }
}
