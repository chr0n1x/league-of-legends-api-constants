<?php

namespace Riot;

class Constants {

  public function getMessageForApiResponse( $code ) {

    $codeMap = array(
        401 => 'Unauthorized',
        500 => 'Internal server error',
        503 => 'Service unavailable',
        400 => 'Bad request',
    );

    return ( isset( $codeMap[ $code ] ) ) ? $codeMap[ $code ] : '';

  } // getMessageForApiResponse

  public function getSubGameTypes() {

    return array(
        'NONE'             => "Custom games",
        'NORMAL'           => "Summoner's Rift unranked games",
        'NORMAL_3x3'       => "Twisted Treeline unranked games",
        'ODIN_UNRANKED'    => "Dominion/Crystal Scar games",
        'ARAM_UNRANKED_5x5'=> "ARAM / Howling Abyss games",
        'BOT'              => "Summoner's Rift and Crystal Scar games played against AI",
        'BOT_3x3 Twisted'  => "Treeline games played against AI",
        'RANKED_SOLO_5x5'  => "Summoner's Rift ranked solo queue games",
        'RANKED_TEAM_3x3'  => "Twisted Treeline ranked team games",
        'RANKED_TEAM_5x5'  => "Summoner's Rift ranked team games",
        'ONEFORALL_5x5'    => "One for All games",
        'FIRSTBLOOD_1x1'   => "Snowdown Showdown 1x1 games",
        'FIRSTBLOOD_2x2'   => "Snowdown Showdown 2x2 games",
    );

  } // getSubGameTypes

  public function getGameTypes() {

    return array(
        'CUSTOM_GAME'   => 'Custom games',
        'TUTORIAL_GAME' => 'Tutorial games',
        'MATCHED_GAME'  => 'All other games',
    );

  } // getGameTypes

  public function getGameModes() {

    return array(
        'CLASSIC'    => "Classic Summoner's Rift and Twisted Treeline games",
        'ODIN'       => "Dominion/Crystal Scar games",
        'ARAM'       => "ARAM games",
        'TUTORIAL'   => "Tutorial games",
        'ONEFORALL'  => "One for All games",
        'FIRSTBLOOD' => "Snowdown Showdown games",
    );

  } // getGameModes

  public function getMaps() {

    return array(
        "1"  => "Summoner's Rift Summer Variant",
        "2"  => "Summoner's Rift Autumn Variant",
        "3"  => "The Proving Grounds Tutorial Map",
        "4"  => "Twisted Treeline  Original Version",
        "8"  => "The Crystal Scar  Dominion Map",
        "10" => "Twisted Treeline  Current Version",
        "12" => "Howling Abyss",
    );

  } // getMaps

  public function getRegions() {

    return array(
        'Brazil' => 'br',
        'EU Nordic & East' => 'eune',
        'EU West' => 'euw',
        'Korea' => 'kr',
        'Latin America North' => 'lan',
        'Latin American South' => 'las',
        'North America' => 'na',
        'Oceanic' => 'oce',
        'Russia' => 'ru',
        'Turkey' => 'tr'
    );

  } // getRegions

} // Constants
