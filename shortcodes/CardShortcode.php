<?php

namespace Grav\Plugin\Shortcodes;

use Thunder\Shortcode\Shortcode\ShortcodeInterface;


class CardShortcode extends Shortcode
{
    public function init()
    {
        $this->shortcode->getHandlers()->add('cards', function(ShortcodeInterface $sc) {

            $hash = $this->shortcode->getId($sc);

            $output = $this->twig->processTemplate('partials/media-cards.html.twig', [
                'hash'  => $hash,
                'shortcode'     => $sc,
                'child_cards'    => $this->shortcode->getStates($hash),
            ]);

            return $output;
        });

        $this->shortcode->getHandlers()->add('card', function(ShortcodeInterface $sc) {
            $outputcard = $this->twig->processTemplate('partials/media-card.html.twig', [
                'image'         => $sc->getParameter('image'),
                'alt'           => $sc->getParameter('alt'),
                'content'           => $sc->getParameter('content'),
                'title'         => $sc->getParameter('title'),
                'headline'      => $sc->getParameter('headline'),
                'text'          => $sc->getParameter('text'),
                'linkname'      => $sc->getParameter('linkname'),
                'linktarget'    => $sc->getParameter('linktarget'),
                'shortcode'     => $sc,
            ]);

            return $outputcard;
        });
    }
}