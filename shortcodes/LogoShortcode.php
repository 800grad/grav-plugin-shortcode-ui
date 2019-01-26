<?php

namespace Grav\Plugin\Shortcodes;

use Thunder\Shortcode\Shortcode\ShortcodeInterface;


class LogoShortcode extends Shortcode
{
    public function init()
    {
        $this->shortcode->getHandlers()->add('logo', function(ShortcodeInterface $sc) {
            $output = $this->twig->processTemplate('partials/media-logo.html.twig', [
                'shortcode'     => $sc,
            ]);

            return $output;
        });

    }
}