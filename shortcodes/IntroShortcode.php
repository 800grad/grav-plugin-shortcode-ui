<?php

namespace Grav\Plugin\Shortcodes;

use Thunder\Shortcode\Shortcode\ShortcodeInterface;


class IntroShortcode extends Shortcode
{
    public function init()
    {
        $this->shortcode->getHandlers()->add('intro', function(ShortcodeInterface $sc) {
            $output = $this->twig->processTemplate('partials/media-intro.html.twig', [
                'image'         => $sc->getParameter('image'),
                'intro'         => $sc->getParameter('intro'),
                'headline'      => $sc->getParameter('headline'),
                'banner'      => $sc->getParameter('banner'),
                'shortcode'     => $sc,
            ]);

            return $output;
        });

    }
}