<?php

/**
 * @return array
 */
function getDishes()
{
    return [
        [
            "id" => 1,
            "name" => "acid splash",
            "school" => "conjuration",
        ],
        [
            "id" => 2,
            "name" => "chill touch",
            "school" => "necromancy",
        ],
        [
            "id" => 3,
            "name" => "dancing lights",
            "school" => "evocation",
        ],
        [
            "id" => 4,
            "name" => "druidraft",
            "school" => "transmutation",
        ],
        [
            "id" => 5,
            "name" => "eldritch blast",
            "school" => "evocation",
        ]
    ];
}

/**
 * @param $id
 * @return mixed
 */
function getDishDetails($id)
{
    $tags = [
        1 => [
            "description" => "You hurl a bubble of acid. Choose one creature within range, or choose two creatures within range that are within 5 feet of each other. A target must succeed on a Dexterity saving throw or take 1d6 acid damage",
            "tags" => ['wizard', 'sorcerer']
        ],
        2 => [
            "description" => "You create a ghostly, skeletal hand in the space of a creature within range. Make a ranged spell attack against the creature to assail it with the chill of the grave. On a hit, the target takes 1d8 necrotic damage, and it can’t regain hit points until the start of your next turn. Until then, the hand clings to the target. If you hit an undead target, it also has disadvantage on attack rolls against you until the end of your next turn. This spell’s damage increases by 1d8 when you reach 5th level (2d8), 11th level (3d8), and 17th level (4d8)",
            "tags" => ['wizard', 'sorcerer', 'warlock']
        ],
        3 => [
            "description" => "You create up to four torch-sized lights within range, making them appear as torches, lanterns, or glowing orbs that hover in the air for the duration. You can also combine the four lights into one glowing vaguely humanoid form of Medium size. Whichever form you choose, each light sheds dim light in a 10-foot radius.
As a bonus action on your turn, you can move the lights up to 60 feet to a new spot within range. A light must be within 20 feet of another light created by this spell, and a light winks out if it exceeds the spell’s range.",
            "tags" => ['bard','sorcerer','wizard']
        ],
        4 => [
            "description" => "Whispering to the spirits of nature, you create one of the following effects within range:
You create a tiny, harmless sensory effect that predicts what the weather will be at your location for the next 24 hours. The effect might manifest as a golden orb for clear skies, a cloud for rain, falling snowflakes for snow, and so on. This effect persists for 1 round.
You instantly make a flower blossom, a seed pod open, or a leaf bud bloom.
You create an instantaneous, harmless sensory effect, such as falling leaves, a puff of wind, the sound of a small animal, or the faint odor of skunk. The effect must fit in a 5-foot cube.
You instantly light or snuff out a candle, a torch, or a small campfire.",
            "tags" => ['druid']
        ],
        5 => [
            "description" => "A beam of crackling energy streaks toward a creature within range. Make a ranged spell attack against the target. On a hit, the target takes 1d10 force damage.
The spell creates more than one beam when you reach higher levels: two beams at 5th level, three beams at 11th level, and four beams at 17th level. You can direct the beams at the same target or at different ones. Make a separate attack roll for each beam.",
            "tags" => ['warlock']
        ],
    ];

    return $tags[$id];
}