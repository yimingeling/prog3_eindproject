<?php
/**
 * @return array
 */
function getGames(): array
{
    return [
        [
            "id" => 1,
            "name" => "Classic Tetris",
            "developer" => "Nintendo",
            "image" => "classic_tetris.jpg",
        ],
        [
            "id" => 2,
            "name" => "Tetris 99",
            "developer" => "Nintendo",
            "image" => "tetris_99.jpg",
        ],
        [
            "id" => 3,
            "name" => "Tetris Effect",
            "developer" => "Monstars Inc. & Resonair",
            "image" => "tetris_effect.jpg",
        ],
        [
            "id" => 4,
            "name" => "Tetris DS",
            "developer" => "Nintendo SPD",
            "image" => "tetris_ds.jpg",
        ],
        [
            "id" => 5,
            "name" => "Puyo Puyo Tetris",
            "developer" => "Sega",
            "image" => "puyo_puyo_tetris.jpg",
        ],
        [
            "id" => 6,
            "name" => "Tetris Party",
            "developer" => "Hudson Soft",
            "image" => "tetris_party.jpg",
        ],
        [
            "id" => 7,
            "name" => "Tetris Blitz",
            "developer" => "EA Mobile",
            "image" => "tetris_blitz.jpg",
        ],
        [
            "id" => 8,
            "name" => "Tetrisphere",
            "developer" => "H2O Entertainment",
            "image" => "tetrisphere.jpg",
        ],
        [
            "id" => 9,
            "name" => "tetrio",
            "developer" => "OSK",
            "image" => "tetrio.jpg",
        ],
        [
            "id" => 10,
            "name" => "Tetris Party Deluxe",
            "developer" => "Hudson Soft",
            "image" => "tetris_party_deluxe.jpg",
        ],
    ];
}

/**
 * @param $id
 * @return array|false
 */
function getGameDetails($id): array|false
{
    $details = [
        1 => [
            "description" => "The original Game Boy classic where you stack falling blocks to clear lines.",
            "tags" => ["retro", "Game Boy", "single-player"]
        ],
        2 => [
            "description" => "A 99-player battle royale twist on Tetris—last one standing wins.",
            "tags" => ["multiplayer", "battle-royale", "online"]
        ],
        3 => [
            "description" => "A visually stunning reimagining with music, particles, and zone mechanics.",
            "tags" => ["immersive", "VR", "music-driven"]
        ],
        4 => [
            "description" => "Nintendo DS version with dual-screen action and several new modes.",
            "tags" => ["dual-screen", "local multiplayer", "puzzle"]
        ],
        5 => [
            "description" => "A mash-up of Puyo Puyo and Tetris gameplay—play solo or head-to-head.",
            "tags" => ["crossover", "versus", "party-mode"]
        ],
        6 => [
            "description" => "Features Wii-Remote and tilt controls, plus dozens of new challenges.",
            "tags" => ["motion-controls", "party", "Wii"]
        ],
        7 => [
            "description" => "Fast-paced mobile edition with power-ups and 2-minute blitz rounds.",
            "tags" => ["mobile", "arcade", "power-ups"]
        ],
        8 => [
            "description" => "A 3D twist on Tetris—rotate spheres to match and clear colored blocks.",
            "tags" => ["3D", "innovative", "single-player"]
        ],
        9 => [
            "description" => "The best tetris game",
            "tags" => ["browser", "battle-royale", "free-to-play"]
        ],
        10 => [
            "description" => "An expanded WiiWare edition with extra modes, online leaderboards, and puzzles.",
            "tags" => ["deluxe", "online", "puzzles"]
        ],
    ];

    return $details[$id] ?? false;
}
