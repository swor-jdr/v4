<?php

/**
 *
 * This file is part of the phpBB Forum Software package.
 *
 * @copyright (c) phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 * For full copyright and license information, please see
 * the docs/CREDITS.txt file.
 *
 */

namespace EuphoriaRaspberry\sworplus\event;

/**
 * @ignore
 */
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Event listener
 */
class main_listener implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return array(
            'core.submit_post_end' => 'track_rp',
        );
    }

    /* @var \phpbb\controller\helper */
    protected $helper;

    /* @var \phpbb\template\template */
    protected $template;

    /**
     * Constructor
     *
     * @param \phpbb\controller\helper    $helper        Controller helper object
     * @param \phpbb\template\template    $template    Template object
     */
    public function __construct(\phpbb\controller\helper $helper, \phpbb\template\template $template)
    {
        $this->helper = $helper;
        $this->template = $template;
    }

    /**
     * A sample PHP event
     * Modifies the names of the forums on index
     *
     * @param \phpbb\event\data    $event    Event object
     */
    public function track_rp($event)
    {
        $forum_parents = unserialize($event['data']['forum_parents']);
        $category = $forum_parents[1][0];
        $mode = $event['mode'];

        if ($mode === 'edit' || $category !== 'Le jeu') {
            return true;
        }

        $swor_url = "http://www.swor-jdr.com";
        $forum_id = $event['data']['forum_id'];
        $forum_name = $event['data']['forum_name'];
        $topic_title = $event['data']['topic_title'];
        $post_id = $event['data']['post_id'];
        $post_url = "$swor_url/viewtopic.php?f=$forum_id&p=$post_id#p$post_id";
        $player_name = $event['username'];

        $content = "**$player_name** a écrit un nouveau message dans **$topic_title** ($forum_name)\nLien du RP : $post_url";

        $discord_url = "https://discordapp.com/api/webhooks";
        $discord_id = "665866655435325462";
        $discord_token = "AhBPYccgEytuxoE0WiFqEBIYZN-pfqjcCJTZxSgz7TU5exP4P2OvJ9n2uaBo4zI9W1Nk";

        $post = [
            'content' => $content,
        ];

        try {
            $ch = curl_init();

            // Check if initialization had gone wrong
            if ($ch === false) {
                throw new Exception('failed to initialize');
            }

            curl_setopt($ch, CURLOPT_URL, "$discord_url/$discord_id/$discord_token");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

            $response = curl_exec($ch);

            // Check the return value of curl_exec(), too
            if ($response === false) {
                throw new Exception(curl_error($ch), curl_errno($ch));
            }

            // Close curl handle
            curl_close($ch);
        } catch (Exception $e) {
            trigger_error(sprintf(
                'Curl failed with error #%d: %s',
                $e->getCode(), $e->getMessage()),
                E_USER_ERROR);

        }
    }
}
