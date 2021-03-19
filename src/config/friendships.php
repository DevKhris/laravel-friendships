<?php
const FR_PIVOT = 'friendships';
const FR_GROUP_PIVOT = 'user_friendship_groups';

return [

    'tables' => [
        'fr_pivot' => FR_PIVOT,
        'fr_groups_pivot' => FR_GROUP_PIVOT
    ],

    'groups' => [
        'acquaintances' => 0,
        'close_friends' => 1,
        'family' => 2
    ]

];