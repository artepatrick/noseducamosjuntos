<?php

if( !function_exists( 'bizberg_get_fontawesome_5' ) ){
    
    function bizberg_get_fontawesome_5(){

        $data = array();
        foreach ( bizberg_fontawesome_5_icons() as $key => $value ) {       
            $data[$value] = sprintf( 
                esc_attr__( '<i class="%1$s"></i> %2$s' , 'bizberg' ), 
                $value,
                ucwords( str_replace( '-', ' ', $key ) )
            );

        }
        return $data;

    }

}

if( !function_exists( 'bizberg_fontawesome_5_icons' ) ){

    function bizberg_fontawesome_5_icons(){

            $icons = array( 
            "Accessible Icon" => "fab fa-accessible-icon",
            "American Sign Language Interpreting 1" => "fas fa-american-sign-language-interpreting",
            "American Sign Language Interpreting 2" => "far fa-american-sign-language-interpreting",
            "American Sign Language Interpreting 3" => "fal fa-american-sign-language-interpreting",
            "Assistive Listening Systems 1" => "fas fa-assistive-listening-systems",
            "Assistive Listening Systems 2" => "far fa-assistive-listening-systems",
            "Assistive Listening Systems 3" => "fal fa-assistive-listening-systems",
            "Audio Description 1" => "fas fa-audio-description",
            "Audio Description 2" => "far fa-audio-description",
            "Audio Description 3" => "fal fa-audio-description",
            "Blind 1" => "fas fa-blind",
            "Blind 2" => "far fa-blind",
            "Blind 3" => "fal fa-blind",
            "Braille 1" => "fas fa-braille",
            "Braille 2" => "far fa-braille",
            "Braille 3" => "fal fa-braille",
            "Closed Captioning 1" => "fas fa-closed-captioning",
            "Closed Captioning 2" => "far fa-closed-captioning",
            "Closed Captioning 3" => "fal fa-closed-captioning",
            "Deaf 1" => "fas fa-deaf",
            "Deaf 2" => "far fa-deaf",
            "Deaf 3" => "fal fa-deaf",
            "Dog Leashed 1" => "fas fa-dog-leashed",
            "Dog Leashed 2" => "far fa-dog-leashed",
            "Dog Leashed 3" => "fal fa-dog-leashed",
            "Low Vision 1" => "fas fa-low-vision",
            "Low Vision 2" => "far fa-low-vision",
            "Low Vision 3" => "fal fa-low-vision",
            "Phone Volume 1" => "fas fa-phone-volume",
            "Phone Volume 2" => "far fa-phone-volume",
            "Phone Volume 3" => "fal fa-phone-volume",
            "Question Circle 1" => "fas fa-question-circle",
            "Question Circle 2" => "far fa-question-circle",
            "Question Circle 3" => "fal fa-question-circle",
            "Sign Language 1" => "fas fa-sign-language",
            "Sign Language 2" => "far fa-sign-language",
            "Sign Language 3" => "fal fa-sign-language",
            "Tty 1" => "fas fa-tty",
            "Tty 2" => "far fa-tty",
            "Tty 3" => "fal fa-tty",
            "Universal Access 1" => "fas fa-universal-access",
            "Universal Access 2" => "far fa-universal-access",
            "Universal Access 3" => "fal fa-universal-access",
            "Wheelchair 1" => "fas fa-wheelchair",
            "Wheelchair 2" => "far fa-wheelchair",
            "Wheelchair 3" => "fal fa-wheelchair",
            "Bell 1" => "fas fa-bell",
            "Bell 2" => "far fa-bell",
            "Bell 3" => "fal fa-bell",
            "Bell School Slash 1" => "fas fa-bell-school-slash",
            "Bell School Slash 2" => "far fa-bell-school-slash",
            "Bell School Slash 3" => "fal fa-bell-school-slash",
            "Bell Slash 1" => "fas fa-bell-slash",
            "Bell Slash 2" => "far fa-bell-slash",
            "Bell Slash 3" => "fal fa-bell-slash",
            "Bells 1" => "fas fa-bells",
            "Bells 2" => "far fa-bells",
            "Bells 3" => "fal fa-bells",
            "Calendar Exclamation 1" => "fas fa-calendar-exclamation",
            "Calendar Exclamation 2" => "far fa-calendar-exclamation",
            "Calendar Exclamation 3" => "fal fa-calendar-exclamation",
            "Comment Alt Exclamation 1" => "fas fa-comment-alt-exclamation",
            "Comment Alt Exclamation 2" => "far fa-comment-alt-exclamation",
            "Comment Alt Exclamation 3" => "fal fa-comment-alt-exclamation",
            "Comment Exclamation 1" => "fas fa-comment-exclamation",
            "Comment Exclamation 2" => "far fa-comment-exclamation",
            "Comment Exclamation 3" => "fal fa-comment-exclamation",
            "Engine Warning 1" => "fas fa-engine-warning",
            "Engine Warning 2" => "far fa-engine-warning",
            "Engine Warning 3" => "fal fa-engine-warning",
            "Exclamation 1" => "fas fa-exclamation",
            "Exclamation 2" => "far fa-exclamation",
            "Exclamation 3" => "fal fa-exclamation",
            "Exclamation Circle 1" => "fas fa-exclamation-circle",
            "Exclamation Circle 2" => "far fa-exclamation-circle",
            "Exclamation Circle 3" => "fal fa-exclamation-circle",
            "Exclamation Square 1" => "fas fa-exclamation-square",
            "Exclamation Square 2" => "far fa-exclamation-square",
            "Exclamation Square 3" => "fal fa-exclamation-square",
            "Exclamation Triangle 1" => "fas fa-exclamation-triangle",
            "Exclamation Triangle 2" => "far fa-exclamation-triangle",
            "Exclamation Triangle 3" => "fal fa-exclamation-triangle",
            "File Exclamation 1" => "fas fa-file-exclamation",
            "File Exclamation 2" => "far fa-file-exclamation",
            "File Exclamation 3" => "fal fa-file-exclamation",
            "Lightbulb Exclamation 1" => "fas fa-lightbulb-exclamation",
            "Lightbulb Exclamation 2" => "far fa-lightbulb-exclamation",
            "Lightbulb Exclamation 3" => "fal fa-lightbulb-exclamation",
            "Map Marker Exclamation 1" => "fas fa-map-marker-exclamation",
            "Map Marker Exclamation 2" => "far fa-map-marker-exclamation",
            "Map Marker Exclamation 3" => "fal fa-map-marker-exclamation",
            "Radiation 1" => "fas fa-radiation",
            "Radiation 2" => "far fa-radiation",
            "Radiation 3" => "fal fa-radiation",
            "Radiation Alt 1" => "fas fa-radiation-alt",
            "Radiation Alt 2" => "far fa-radiation-alt",
            "Radiation Alt 3" => "fal fa-radiation-alt",
            "Skull Crossbones 1" => "fas fa-skull-crossbones",
            "Skull Crossbones 2" => "far fa-skull-crossbones",
            "Skull Crossbones 3" => "fal fa-skull-crossbones",
            "Star Exclamation 1" => "fas fa-star-exclamation",
            "Star Exclamation 2" => "far fa-star-exclamation",
            "Star Exclamation 3" => "fal fa-star-exclamation",
            "Wind Warning 1" => "fas fa-wind-warning",
            "Wind Warning 2" => "far fa-wind-warning",
            "Wind Warning 3" => "fal fa-wind-warning",
            "Alicorn 1" => "fas fa-alicorn",
            "Alicorn 2" => "far fa-alicorn",
            "Alicorn 3" => "fal fa-alicorn",
            "Badger Honey 1" => "fas fa-badger-honey",
            "Badger Honey 2" => "far fa-badger-honey",
            "Badger Honey 3" => "fal fa-badger-honey",
            "Bat 1" => "fas fa-bat",
            "Bat 2" => "far fa-bat",
            "Bat 3" => "fal fa-bat",
            "Cat 1" => "fas fa-cat",
            "Cat 2" => "far fa-cat",
            "Cat 3" => "fal fa-cat",
            "Cow 1" => "fas fa-cow",
            "Cow 2" => "far fa-cow",
            "Cow 3" => "fal fa-cow",
            "Crow 1" => "fas fa-crow",
            "Crow 2" => "far fa-crow",
            "Crow 3" => "fal fa-crow",
            "Deer 1" => "fas fa-deer",
            "Deer 2" => "far fa-deer",
            "Deer 3" => "fal fa-deer",
            "Deer Rudolph 1" => "fas fa-deer-rudolph",
            "Deer Rudolph 2" => "far fa-deer-rudolph",
            "Deer Rudolph 3" => "fal fa-deer-rudolph",
            "Dog 1" => "fas fa-dog",
            "Dog 2" => "far fa-dog",
            "Dog 3" => "fal fa-dog",
            "Dove 1" => "fas fa-dove",
            "Dove 2" => "far fa-dove",
            "Dove 3" => "fal fa-dove",
            "Dragon 1" => "fas fa-dragon",
            "Dragon 2" => "far fa-dragon",
            "Dragon 3" => "fal fa-dragon",
            "Duck 1" => "fas fa-duck",
            "Duck 2" => "far fa-duck",
            "Duck 3" => "fal fa-duck",
            "Elephant 1" => "fas fa-elephant",
            "Elephant 2" => "far fa-elephant",
            "Elephant 3" => "fal fa-elephant",
            "Feather 1" => "fas fa-feather",
            "Feather 2" => "far fa-feather",
            "Feather 3" => "fal fa-feather",
            "Feather Alt 1" => "fas fa-feather-alt",
            "Feather Alt 2" => "far fa-feather-alt",
            "Feather Alt 3" => "fal fa-feather-alt",
            "Fish 1" => "fas fa-fish",
            "Fish 2" => "far fa-fish",
            "Fish 3" => "fal fa-fish",
            "Frog 1" => "fas fa-frog",
            "Frog 2" => "far fa-frog",
            "Frog 3" => "fal fa-frog",
            "Hippo 1" => "fas fa-hippo",
            "Hippo 2" => "far fa-hippo",
            "Hippo 3" => "fal fa-hippo",
            "Horse 1" => "fas fa-horse",
            "Horse 2" => "far fa-horse",
            "Horse 3" => "fal fa-horse",
            "Horse Head 1" => "fas fa-horse-head",
            "Horse Head 2" => "far fa-horse-head",
            "Horse Head 3" => "fal fa-horse-head",
            "Kiwi Bird 1" => "fas fa-kiwi-bird",
            "Kiwi Bird 2" => "far fa-kiwi-bird",
            "Kiwi Bird 3" => "fal fa-kiwi-bird",
            "Monkey 1" => "fas fa-monkey",
            "Monkey 2" => "far fa-monkey",
            "Monkey 3" => "fal fa-monkey",
            "Narwhal 1" => "fas fa-narwhal",
            "Narwhal 2" => "far fa-narwhal",
            "Narwhal 3" => "fal fa-narwhal",
            "Otter 1" => "fas fa-otter",
            "Otter 2" => "far fa-otter",
            "Otter 3" => "fal fa-otter",
            "Paw 1" => "fas fa-paw",
            "Paw 2" => "far fa-paw",
            "Paw 3" => "fal fa-paw",
            "Paw Alt 1" => "fas fa-paw-alt",
            "Paw Alt 2" => "far fa-paw-alt",
            "Paw Alt 3" => "fal fa-paw-alt",
            "Paw Claws 1" => "fas fa-paw-claws",
            "Paw Claws 2" => "far fa-paw-claws",
            "Paw Claws 3" => "fal fa-paw-claws",
            "Pegasus 1" => "fas fa-pegasus",
            "Pegasus 2" => "far fa-pegasus",
            "Pegasus 3" => "fal fa-pegasus",
            "Pig 1" => "fas fa-pig",
            "Pig 2" => "far fa-pig",
            "Pig 3" => "fal fa-pig",
            "Rabbit 1" => "fas fa-rabbit",
            "Rabbit 2" => "far fa-rabbit",
            "Rabbit 3" => "fal fa-rabbit",
            "Rabbit Fast 1" => "fas fa-rabbit-fast",
            "Rabbit Fast 2" => "far fa-rabbit-fast",
            "Rabbit Fast 3" => "fal fa-rabbit-fast",
            "Ram 1" => "fas fa-ram",
            "Ram 2" => "far fa-ram",
            "Ram 3" => "fal fa-ram",
            "Sheep 1" => "fas fa-sheep",
            "Sheep 2" => "far fa-sheep",
            "Sheep 3" => "fal fa-sheep",
            "Snake 1" => "fas fa-snake",
            "Snake 2" => "far fa-snake",
            "Snake 3" => "fal fa-snake",
            "Spider 1" => "fas fa-spider",
            "Spider 2" => "far fa-spider",
            "Spider 3" => "fal fa-spider",
            "Spider Black Widow 1" => "fas fa-spider-black-widow",
            "Spider Black Widow 2" => "far fa-spider-black-widow",
            "Spider Black Widow 3" => "fal fa-spider-black-widow",
            "Squirrel 1" => "fas fa-squirrel",
            "Squirrel 2" => "far fa-squirrel",
            "Squirrel 3" => "fal fa-squirrel",
            "Turtle 1" => "fas fa-turtle",
            "Turtle 2" => "far fa-turtle",
            "Turtle 3" => "fal fa-turtle",
            "Unicorn 1" => "fas fa-unicorn",
            "Unicorn 2" => "far fa-unicorn",
            "Unicorn 3" => "fal fa-unicorn",
            "Whale 1" => "fas fa-whale",
            "Whale 2" => "far fa-whale",
            "Whale 3" => "fal fa-whale",
            "Angle Double Down 1" => "fas fa-angle-double-down",
            "Angle Double Down 2" => "far fa-angle-double-down",
            "Angle Double Down 3" => "fal fa-angle-double-down",
            "Angle Double Left 1" => "fas fa-angle-double-left",
            "Angle Double Left 2" => "far fa-angle-double-left",
            "Angle Double Left 3" => "fal fa-angle-double-left",
            "Angle Double Right 1" => "fas fa-angle-double-right",
            "Angle Double Right 2" => "far fa-angle-double-right",
            "Angle Double Right 3" => "fal fa-angle-double-right",
            "Angle Double Up 1" => "fas fa-angle-double-up",
            "Angle Double Up 2" => "far fa-angle-double-up",
            "Angle Double Up 3" => "fal fa-angle-double-up",
            "Angle Down 1" => "fas fa-angle-down",
            "Angle Down 2" => "far fa-angle-down",
            "Angle Down 3" => "fal fa-angle-down",
            "Angle Left 1" => "fas fa-angle-left",
            "Angle Left 2" => "far fa-angle-left",
            "Angle Left 3" => "fal fa-angle-left",
            "Angle Right 1" => "fas fa-angle-right",
            "Angle Right 2" => "far fa-angle-right",
            "Angle Right 3" => "fal fa-angle-right",
            "Angle Up 1" => "fas fa-angle-up",
            "Angle Up 2" => "far fa-angle-up",
            "Angle Up 3" => "fal fa-angle-up",
            "Arrow Alt Circle Down 1" => "fas fa-arrow-alt-circle-down",
            "Arrow Alt Circle Down 2" => "far fa-arrow-alt-circle-down",
            "Arrow Alt Circle Down 3" => "fal fa-arrow-alt-circle-down",
            "Arrow Alt Circle Left 1" => "fas fa-arrow-alt-circle-left",
            "Arrow Alt Circle Left 2" => "far fa-arrow-alt-circle-left",
            "Arrow Alt Circle Left 3" => "fal fa-arrow-alt-circle-left",
            "Arrow Alt Circle Right 1" => "fas fa-arrow-alt-circle-right",
            "Arrow Alt Circle Right 2" => "far fa-arrow-alt-circle-right",
            "Arrow Alt Circle Right 3" => "fal fa-arrow-alt-circle-right",
            "Arrow Alt Circle Up 1" => "fas fa-arrow-alt-circle-up",
            "Arrow Alt Circle Up 2" => "far fa-arrow-alt-circle-up",
            "Arrow Alt Circle Up 3" => "fal fa-arrow-alt-circle-up",
            "Arrow Alt Down 1" => "fas fa-arrow-alt-down",
            "Arrow Alt Down 2" => "far fa-arrow-alt-down",
            "Arrow Alt Down 3" => "fal fa-arrow-alt-down",
            "Arrow Alt From Bottom 1" => "fas fa-arrow-alt-from-bottom",
            "Arrow Alt From Bottom 2" => "far fa-arrow-alt-from-bottom",
            "Arrow Alt From Bottom 3" => "fal fa-arrow-alt-from-bottom",
            "Arrow Alt From Left 1" => "fas fa-arrow-alt-from-left",
            "Arrow Alt From Left 2" => "far fa-arrow-alt-from-left",
            "Arrow Alt From Left 3" => "fal fa-arrow-alt-from-left",
            "Arrow Alt From Right 1" => "fas fa-arrow-alt-from-right",
            "Arrow Alt From Right 2" => "far fa-arrow-alt-from-right",
            "Arrow Alt From Right 3" => "fal fa-arrow-alt-from-right",
            "Arrow Alt From Top 1" => "fas fa-arrow-alt-from-top",
            "Arrow Alt From Top 2" => "far fa-arrow-alt-from-top",
            "Arrow Alt From Top 3" => "fal fa-arrow-alt-from-top",
            "Arrow Alt Left 1" => "fas fa-arrow-alt-left",
            "Arrow Alt Left 2" => "far fa-arrow-alt-left",
            "Arrow Alt Left 3" => "fal fa-arrow-alt-left",
            "Arrow Alt Right 1" => "fas fa-arrow-alt-right",
            "Arrow Alt Right 2" => "far fa-arrow-alt-right",
            "Arrow Alt Right 3" => "fal fa-arrow-alt-right",
            "Arrow Alt Square Down 1" => "fas fa-arrow-alt-square-down",
            "Arrow Alt Square Down 2" => "far fa-arrow-alt-square-down",
            "Arrow Alt Square Down 3" => "fal fa-arrow-alt-square-down",
            "Arrow Alt Square Left 1" => "fas fa-arrow-alt-square-left",
            "Arrow Alt Square Left 2" => "far fa-arrow-alt-square-left",
            "Arrow Alt Square Left 3" => "fal fa-arrow-alt-square-left",
            "Arrow Alt Square Right 1" => "fas fa-arrow-alt-square-right",
            "Arrow Alt Square Right 2" => "far fa-arrow-alt-square-right",
            "Arrow Alt Square Right 3" => "fal fa-arrow-alt-square-right",
            "Arrow Alt Square Up 1" => "fas fa-arrow-alt-square-up",
            "Arrow Alt Square Up 2" => "far fa-arrow-alt-square-up",
            "Arrow Alt Square Up 3" => "fal fa-arrow-alt-square-up",
            "Arrow Alt To Bottom 1" => "fas fa-arrow-alt-to-bottom",
            "Arrow Alt To Bottom 2" => "far fa-arrow-alt-to-bottom",
            "Arrow Alt To Bottom 3" => "fal fa-arrow-alt-to-bottom",
            "Arrow Alt To Left 1" => "fas fa-arrow-alt-to-left",
            "Arrow Alt To Left 2" => "far fa-arrow-alt-to-left",
            "Arrow Alt To Left 3" => "fal fa-arrow-alt-to-left",
            "Arrow Alt To Right 1" => "fas fa-arrow-alt-to-right",
            "Arrow Alt To Right 2" => "far fa-arrow-alt-to-right",
            "Arrow Alt To Right 3" => "fal fa-arrow-alt-to-right",
            "Arrow Alt To Top 1" => "fas fa-arrow-alt-to-top",
            "Arrow Alt To Top 2" => "far fa-arrow-alt-to-top",
            "Arrow Alt To Top 3" => "fal fa-arrow-alt-to-top",
            "Arrow Alt Up 1" => "fas fa-arrow-alt-up",
            "Arrow Alt Up 2" => "far fa-arrow-alt-up",
            "Arrow Alt Up 3" => "fal fa-arrow-alt-up",
            "Arrow Circle Down 1" => "fas fa-arrow-circle-down",
            "Arrow Circle Down 2" => "far fa-arrow-circle-down",
            "Arrow Circle Down 3" => "fal fa-arrow-circle-down",
            "Arrow Circle Left 1" => "fas fa-arrow-circle-left",
            "Arrow Circle Left 2" => "far fa-arrow-circle-left",
            "Arrow Circle Left 3" => "fal fa-arrow-circle-left",
            "Arrow Circle Right 1" => "fas fa-arrow-circle-right",
            "Arrow Circle Right 2" => "far fa-arrow-circle-right",
            "Arrow Circle Right 3" => "fal fa-arrow-circle-right",
            "Arrow Circle Up 1" => "fas fa-arrow-circle-up",
            "Arrow Circle Up 2" => "far fa-arrow-circle-up",
            "Arrow Circle Up 3" => "fal fa-arrow-circle-up",
            "Arrow Down 1" => "fas fa-arrow-down",
            "Arrow Down 2" => "far fa-arrow-down",
            "Arrow Down 3" => "fal fa-arrow-down",
            "Arrow From Bottom 1" => "fas fa-arrow-from-bottom",
            "Arrow From Bottom 2" => "far fa-arrow-from-bottom",
            "Arrow From Bottom 3" => "fal fa-arrow-from-bottom",
            "Arrow From Left 1" => "fas fa-arrow-from-left",
            "Arrow From Left 2" => "far fa-arrow-from-left",
            "Arrow From Left 3" => "fal fa-arrow-from-left",
            "Arrow From Right 1" => "fas fa-arrow-from-right",
            "Arrow From Right 2" => "far fa-arrow-from-right",
            "Arrow From Right 3" => "fal fa-arrow-from-right",
            "Arrow From Top 1" => "fas fa-arrow-from-top",
            "Arrow From Top 2" => "far fa-arrow-from-top",
            "Arrow From Top 3" => "fal fa-arrow-from-top",
            "Arrow Left 1" => "fas fa-arrow-left",
            "Arrow Left 2" => "far fa-arrow-left",
            "Arrow Left 3" => "fal fa-arrow-left",
            "Arrow Right 1" => "fas fa-arrow-right",
            "Arrow Right 2" => "far fa-arrow-right",
            "Arrow Right 3" => "fal fa-arrow-right",
            "Arrow Square Down 1" => "fas fa-arrow-square-down",
            "Arrow Square Down 2" => "far fa-arrow-square-down",
            "Arrow Square Down 3" => "fal fa-arrow-square-down",
            "Arrow Square Left 1" => "fas fa-arrow-square-left",
            "Arrow Square Left 2" => "far fa-arrow-square-left",
            "Arrow Square Left 3" => "fal fa-arrow-square-left",
            "Arrow Square Right 1" => "fas fa-arrow-square-right",
            "Arrow Square Right 2" => "far fa-arrow-square-right",
            "Arrow Square Right 3" => "fal fa-arrow-square-right",
            "Arrow Square Up 1" => "fas fa-arrow-square-up",
            "Arrow Square Up 2" => "far fa-arrow-square-up",
            "Arrow Square Up 3" => "fal fa-arrow-square-up",
            "Arrow To Bottom 1" => "fas fa-arrow-to-bottom",
            "Arrow To Bottom 2" => "far fa-arrow-to-bottom",
            "Arrow To Bottom 3" => "fal fa-arrow-to-bottom",
            "Arrow To Left 1" => "fas fa-arrow-to-left",
            "Arrow To Left 2" => "far fa-arrow-to-left",
            "Arrow To Left 3" => "fal fa-arrow-to-left",
            "Arrow To Right 1" => "fas fa-arrow-to-right",
            "Arrow To Right 2" => "far fa-arrow-to-right",
            "Arrow To Right 3" => "fal fa-arrow-to-right",
            "Arrow To Top 1" => "fas fa-arrow-to-top",
            "Arrow To Top 2" => "far fa-arrow-to-top",
            "Arrow To Top 3" => "fal fa-arrow-to-top",
            "Arrow Up 1" => "fas fa-arrow-up",
            "Arrow Up 2" => "far fa-arrow-up",
            "Arrow Up 3" => "fal fa-arrow-up",
            "Arrows 1" => "fas fa-arrows",
            "Arrows 2" => "far fa-arrows",
            "Arrows 3" => "fal fa-arrows",
            "Arrows Alt 1" => "fas fa-arrows-alt",
            "Arrows Alt 2" => "far fa-arrows-alt",
            "Arrows Alt 3" => "fal fa-arrows-alt",
            "Arrows Alt H 1" => "fas fa-arrows-alt-h",
            "Arrows Alt H 2" => "far fa-arrows-alt-h",
            "Arrows Alt H 3" => "fal fa-arrows-alt-h",
            "Arrows Alt V 1" => "fas fa-arrows-alt-v",
            "Arrows Alt V 2" => "far fa-arrows-alt-v",
            "Arrows Alt V 3" => "fal fa-arrows-alt-v",
            "Arrows H 1" => "fas fa-arrows-h",
            "Arrows H 2" => "far fa-arrows-h",
            "Arrows H 3" => "fal fa-arrows-h",
            "Arrows V 1" => "fas fa-arrows-v",
            "Arrows V 2" => "far fa-arrows-v",
            "Arrows V 3" => "fal fa-arrows-v",
            "Caret Circle Down 1" => "fas fa-caret-circle-down",
            "Caret Circle Down 2" => "far fa-caret-circle-down",
            "Caret Circle Down 3" => "fal fa-caret-circle-down",
            "Caret Circle Left 1" => "fas fa-caret-circle-left",
            "Caret Circle Left 2" => "far fa-caret-circle-left",
            "Caret Circle Left 3" => "fal fa-caret-circle-left",
            "Caret Circle Right 1" => "fas fa-caret-circle-right",
            "Caret Circle Right 2" => "far fa-caret-circle-right",
            "Caret Circle Right 3" => "fal fa-caret-circle-right",
            "Caret Circle Up 1" => "fas fa-caret-circle-up",
            "Caret Circle Up 2" => "far fa-caret-circle-up",
            "Caret Circle Up 3" => "fal fa-caret-circle-up",
            "Caret Down 1" => "fas fa-caret-down",
            "Caret Down 2" => "far fa-caret-down",
            "Caret Down 3" => "fal fa-caret-down",
            "Caret Left 1" => "fas fa-caret-left",
            "Caret Left 2" => "far fa-caret-left",
            "Caret Left 3" => "fal fa-caret-left",
            "Caret Right 1" => "fas fa-caret-right",
            "Caret Right 2" => "far fa-caret-right",
            "Caret Right 3" => "fal fa-caret-right",
            "Caret Square Down 1" => "fas fa-caret-square-down",
            "Caret Square Down 2" => "far fa-caret-square-down",
            "Caret Square Down 3" => "fal fa-caret-square-down",
            "Caret Square Left 1" => "fas fa-caret-square-left",
            "Caret Square Left 2" => "far fa-caret-square-left",
            "Caret Square Left 3" => "fal fa-caret-square-left",
            "Caret Square Right 1" => "fas fa-caret-square-right",
            "Caret Square Right 2" => "far fa-caret-square-right",
            "Caret Square Right 3" => "fal fa-caret-square-right",
            "Caret Square Up 1" => "fas fa-caret-square-up",
            "Caret Square Up 2" => "far fa-caret-square-up",
            "Caret Square Up 3" => "fal fa-caret-square-up",
            "Caret Up 1" => "fas fa-caret-up",
            "Caret Up 2" => "far fa-caret-up",
            "Caret Up 3" => "fal fa-caret-up",
            "Cart Arrow Down 1" => "fas fa-cart-arrow-down",
            "Cart Arrow Down 2" => "far fa-cart-arrow-down",
            "Cart Arrow Down 3" => "fal fa-cart-arrow-down",
            "Chart Line 1" => "fas fa-chart-line",
            "Chart Line 2" => "far fa-chart-line",
            "Chart Line 3" => "fal fa-chart-line",
            "Chevron Circle Down 1" => "fas fa-chevron-circle-down",
            "Chevron Circle Down 2" => "far fa-chevron-circle-down",
            "Chevron Circle Down 3" => "fal fa-chevron-circle-down",
            "Chevron Circle Left 1" => "fas fa-chevron-circle-left",
            "Chevron Circle Left 2" => "far fa-chevron-circle-left",
            "Chevron Circle Left 3" => "fal fa-chevron-circle-left",
            "Chevron Circle Right 1" => "fas fa-chevron-circle-right",
            "Chevron Circle Right 2" => "far fa-chevron-circle-right",
            "Chevron Circle Right 3" => "fal fa-chevron-circle-right",
            "Chevron Circle Up 1" => "fas fa-chevron-circle-up",
            "Chevron Circle Up 2" => "far fa-chevron-circle-up",
            "Chevron Circle Up 3" => "fal fa-chevron-circle-up",
            "Chevron Double Down 1" => "fas fa-chevron-double-down",
            "Chevron Double Down 2" => "far fa-chevron-double-down",
            "Chevron Double Down 3" => "fal fa-chevron-double-down",
            "Chevron Double Left 1" => "fas fa-chevron-double-left",
            "Chevron Double Left 2" => "far fa-chevron-double-left",
            "Chevron Double Left 3" => "fal fa-chevron-double-left",
            "Chevron Double Right 1" => "fas fa-chevron-double-right",
            "Chevron Double Right 2" => "far fa-chevron-double-right",
            "Chevron Double Right 3" => "fal fa-chevron-double-right",
            "Chevron Double Up 1" => "fas fa-chevron-double-up",
            "Chevron Double Up 2" => "far fa-chevron-double-up",
            "Chevron Double Up 3" => "fal fa-chevron-double-up",
            "Chevron Down 1" => "fas fa-chevron-down",
            "Chevron Down 2" => "far fa-chevron-down",
            "Chevron Down 3" => "fal fa-chevron-down",
            "Chevron Left 1" => "fas fa-chevron-left",
            "Chevron Left 2" => "far fa-chevron-left",
            "Chevron Left 3" => "fal fa-chevron-left",
            "Chevron Right 1" => "fas fa-chevron-right",
            "Chevron Right 2" => "far fa-chevron-right",
            "Chevron Right 3" => "fal fa-chevron-right",
            "Chevron Square Down 1" => "fas fa-chevron-square-down",
            "Chevron Square Down 2" => "far fa-chevron-square-down",
            "Chevron Square Down 3" => "fal fa-chevron-square-down",
            "Chevron Square Left 1" => "fas fa-chevron-square-left",
            "Chevron Square Left 2" => "far fa-chevron-square-left",
            "Chevron Square Left 3" => "fal fa-chevron-square-left",
            "Chevron Square Right 1" => "fas fa-chevron-square-right",
            "Chevron Square Right 2" => "far fa-chevron-square-right",
            "Chevron Square Right 3" => "fal fa-chevron-square-right",
            "Chevron Square Up 1" => "fas fa-chevron-square-up",
            "Chevron Square Up 2" => "far fa-chevron-square-up",
            "Chevron Square Up 3" => "fal fa-chevron-square-up",
            "Chevron Up 1" => "fas fa-chevron-up",
            "Chevron Up 2" => "far fa-chevron-up",
            "Chevron Up 3" => "fal fa-chevron-up",
            "Cloud Download 1" => "fas fa-cloud-download",
            "Cloud Download 2" => "far fa-cloud-download",
            "Cloud Download 3" => "fal fa-cloud-download",
            "Cloud Download Alt 1" => "fas fa-cloud-download-alt",
            "Cloud Download Alt 2" => "far fa-cloud-download-alt",
            "Cloud Download Alt 3" => "fal fa-cloud-download-alt",
            "Cloud Upload 1" => "fas fa-cloud-upload",
            "Cloud Upload 2" => "far fa-cloud-upload",
            "Cloud Upload 3" => "fal fa-cloud-upload",
            "Cloud Upload Alt 1" => "fas fa-cloud-upload-alt",
            "Cloud Upload Alt 2" => "far fa-cloud-upload-alt",
            "Cloud Upload Alt 3" => "fal fa-cloud-upload-alt",
            "Compress Alt 1" => "fas fa-compress-alt",
            "Compress Alt 2" => "far fa-compress-alt",
            "Compress Alt 3" => "fal fa-compress-alt",
            "Compress Arrows Alt 1" => "fas fa-compress-arrows-alt",
            "Compress Arrows Alt 2" => "far fa-compress-arrows-alt",
            "Compress Arrows Alt 3" => "fal fa-compress-arrows-alt",
            "Download 1" => "fas fa-download",
            "Download 2" => "far fa-download",
            "Download 3" => "fal fa-download",
            "Exchange 1" => "fas fa-exchange",
            "Exchange 2" => "far fa-exchange",
            "Exchange 3" => "fal fa-exchange",
            "Exchange Alt 1" => "fas fa-exchange-alt",
            "Exchange Alt 2" => "far fa-exchange-alt",
            "Exchange Alt 3" => "fal fa-exchange-alt",
            "Expand Alt 1" => "fas fa-expand-alt",
            "Expand Alt 2" => "far fa-expand-alt",
            "Expand Alt 3" => "fal fa-expand-alt",
            "Expand Arrows 1" => "fas fa-expand-arrows",
            "Expand Arrows 2" => "far fa-expand-arrows",
            "Expand Arrows 3" => "fal fa-expand-arrows",
            "Expand Arrows Alt 1" => "fas fa-expand-arrows-alt",
            "Expand Arrows Alt 2" => "far fa-expand-arrows-alt",
            "Expand Arrows Alt 3" => "fal fa-expand-arrows-alt",
            "External Link 1" => "fas fa-external-link",
            "External Link 2" => "far fa-external-link",
            "External Link 3" => "fal fa-external-link",
            "External Link Alt 1" => "fas fa-external-link-alt",
            "External Link Alt 2" => "far fa-external-link-alt",
            "External Link Alt 3" => "fal fa-external-link-alt",
            "External Link Square 1" => "fas fa-external-link-square",
            "External Link Square 2" => "far fa-external-link-square",
            "External Link Square 3" => "fal fa-external-link-square",
            "External Link Square Alt 1" => "fas fa-external-link-square-alt",
            "External Link Square Alt 2" => "far fa-external-link-square-alt",
            "External Link Square Alt 3" => "fal fa-external-link-square-alt",
            "Hand Point Down 1" => "fas fa-hand-point-down",
            "Hand Point Down 2" => "far fa-hand-point-down",
            "Hand Point Down 3" => "fal fa-hand-point-down",
            "Hand Point Left 1" => "fas fa-hand-point-left",
            "Hand Point Left 2" => "far fa-hand-point-left",
            "Hand Point Left 3" => "fal fa-hand-point-left",
            "Hand Point Right 1" => "fas fa-hand-point-right",
            "Hand Point Right 2" => "far fa-hand-point-right",
            "Hand Point Right 3" => "fal fa-hand-point-right",
            "Hand Point Up 1" => "fas fa-hand-point-up",
            "Hand Point Up 2" => "far fa-hand-point-up",
            "Hand Point Up 3" => "fal fa-hand-point-up",
            "Hand Pointer 1" => "fas fa-hand-pointer",
            "Hand Pointer 2" => "far fa-hand-pointer",
            "Hand Pointer 3" => "fal fa-hand-pointer",
            "History 1" => "fas fa-history",
            "History 2" => "far fa-history",
            "History 3" => "fal fa-history",
            "Inbox In 1" => "fas fa-inbox-in",
            "Inbox In 2" => "far fa-inbox-in",
            "Inbox In 3" => "fal fa-inbox-in",
            "Inbox Out 1" => "fas fa-inbox-out",
            "Inbox Out 2" => "far fa-inbox-out",
            "Inbox Out 3" => "fal fa-inbox-out",
            "Level Down 1" => "fas fa-level-down",
            "Level Down 2" => "far fa-level-down",
            "Level Down 3" => "fal fa-level-down",
            "Level Down Alt 1" => "fas fa-level-down-alt",
            "Level Down Alt 2" => "far fa-level-down-alt",
            "Level Down Alt 3" => "fal fa-level-down-alt",
            "Level Up 1" => "fas fa-level-up",
            "Level Up 2" => "far fa-level-up",
            "Level Up 3" => "fal fa-level-up",
            "Level Up Alt 1" => "fas fa-level-up-alt",
            "Level Up Alt 2" => "far fa-level-up-alt",
            "Level Up Alt 3" => "fal fa-level-up-alt",
            "Location Arrow 1" => "fas fa-location-arrow",
            "Location Arrow 2" => "far fa-location-arrow",
            "Location Arrow 3" => "fal fa-location-arrow",
            "Long Arrow Alt Down 1" => "fas fa-long-arrow-alt-down",
            "Long Arrow Alt Down 2" => "far fa-long-arrow-alt-down",
            "Long Arrow Alt Down 3" => "fal fa-long-arrow-alt-down",
            "Long Arrow Alt Left 1" => "fas fa-long-arrow-alt-left",
            "Long Arrow Alt Left 2" => "far fa-long-arrow-alt-left",
            "Long Arrow Alt Left 3" => "fal fa-long-arrow-alt-left",
            "Long Arrow Alt Right 1" => "fas fa-long-arrow-alt-right",
            "Long Arrow Alt Right 2" => "far fa-long-arrow-alt-right",
            "Long Arrow Alt Right 3" => "fal fa-long-arrow-alt-right",
            "Long Arrow Alt Up 1" => "fas fa-long-arrow-alt-up",
            "Long Arrow Alt Up 2" => "far fa-long-arrow-alt-up",
            "Long Arrow Alt Up 3" => "fal fa-long-arrow-alt-up",
            "Long Arrow Down 1" => "fas fa-long-arrow-down",
            "Long Arrow Down 2" => "far fa-long-arrow-down",
            "Long Arrow Down 3" => "fal fa-long-arrow-down",
            "Long Arrow Left 1" => "fas fa-long-arrow-left",
            "Long Arrow Left 2" => "far fa-long-arrow-left",
            "Long Arrow Left 3" => "fal fa-long-arrow-left",
            "Long Arrow Right 1" => "fas fa-long-arrow-right",
            "Long Arrow Right 2" => "far fa-long-arrow-right",
            "Long Arrow Right 3" => "fal fa-long-arrow-right",
            "Long Arrow Up 1" => "fas fa-long-arrow-up",
            "Long Arrow Up 2" => "far fa-long-arrow-up",
            "Long Arrow Up 3" => "fal fa-long-arrow-up",
            "Mouse Pointer 1" => "fas fa-mouse-pointer",
            "Mouse Pointer 2" => "far fa-mouse-pointer",
            "Mouse Pointer 3" => "fal fa-mouse-pointer",
            "Play 1" => "fas fa-play",
            "Play 2" => "far fa-play",
            "Play 3" => "fal fa-play",
            "Random 1" => "fas fa-random",
            "Random 2" => "far fa-random",
            "Random 3" => "fal fa-random",
            "Recycle 1" => "fas fa-recycle",
            "Recycle 2" => "far fa-recycle",
            "Recycle 3" => "fal fa-recycle",
            "Redo 1" => "fas fa-redo",
            "Redo 2" => "far fa-redo",
            "Redo 3" => "fal fa-redo",
            "Redo Alt 1" => "fas fa-redo-alt",
            "Redo Alt 2" => "far fa-redo-alt",
            "Redo Alt 3" => "fal fa-redo-alt",
            "Repeat 1" => "fas fa-repeat",
            "Repeat 2" => "far fa-repeat",
            "Repeat 3" => "fal fa-repeat",
            "Repeat 1 1" => "fas fa-repeat-1",
            "Repeat 1 2" => "far fa-repeat-1",
            "Repeat 1 3" => "fal fa-repeat-1",
            "Repeat 1 Alt 1" => "fas fa-repeat-1-alt",
            "Repeat 1 Alt 2" => "far fa-repeat-1-alt",
            "Repeat 1 Alt 3" => "fal fa-repeat-1-alt",
            "Repeat Alt 1" => "fas fa-repeat-alt",
            "Repeat Alt 2" => "far fa-repeat-alt",
            "Repeat Alt 3" => "fal fa-repeat-alt",
            "Reply 1" => "fas fa-reply",
            "Reply 2" => "far fa-reply",
            "Reply 3" => "fal fa-reply",
            "Reply All 1" => "fas fa-reply-all",
            "Reply All 2" => "far fa-reply-all",
            "Reply All 3" => "fal fa-reply-all",
            "Retweet 1" => "fas fa-retweet",
            "Retweet 2" => "far fa-retweet",
            "Retweet 3" => "fal fa-retweet",
            "Retweet Alt 1" => "fas fa-retweet-alt",
            "Retweet Alt 2" => "far fa-retweet-alt",
            "Retweet Alt 3" => "fal fa-retweet-alt",
            "Share 1" => "fas fa-share",
            "Share 2" => "far fa-share",
            "Share 3" => "fal fa-share",
            "Share All 1" => "fas fa-share-all",
            "Share All 2" => "far fa-share-all",
            "Share All 3" => "fal fa-share-all",
            "Share Square 1" => "fas fa-share-square",
            "Share Square 2" => "far fa-share-square",
            "Share Square 3" => "fal fa-share-square",
            "Sign In 1" => "fas fa-sign-in",
            "Sign In 2" => "far fa-sign-in",
            "Sign In 3" => "fal fa-sign-in",
            "Sign In Alt 1" => "fas fa-sign-in-alt",
            "Sign In Alt 2" => "far fa-sign-in-alt",
            "Sign In Alt 3" => "fal fa-sign-in-alt",
            "Sign Out 1" => "fas fa-sign-out",
            "Sign Out 2" => "far fa-sign-out",
            "Sign Out 3" => "fal fa-sign-out",
            "Sign Out Alt 1" => "fas fa-sign-out-alt",
            "Sign Out Alt 2" => "far fa-sign-out-alt",
            "Sign Out Alt 3" => "fal fa-sign-out-alt",
            "Sort 1" => "fas fa-sort",
            "Sort 2" => "far fa-sort",
            "Sort 3" => "fal fa-sort",
            "Sort Alpha Down 1" => "fas fa-sort-alpha-down",
            "Sort Alpha Down 2" => "far fa-sort-alpha-down",
            "Sort Alpha Down 3" => "fal fa-sort-alpha-down",
            "Sort Alpha Up 1" => "fas fa-sort-alpha-up",
            "Sort Alpha Up 2" => "far fa-sort-alpha-up",
            "Sort Alpha Up 3" => "fal fa-sort-alpha-up",
            "Sort Amount Down 1" => "fas fa-sort-amount-down",
            "Sort Amount Down 2" => "far fa-sort-amount-down",
            "Sort Amount Down 3" => "fal fa-sort-amount-down",
            "Sort Amount Up 1" => "fas fa-sort-amount-up",
            "Sort Amount Up 2" => "far fa-sort-amount-up",
            "Sort Amount Up 3" => "fal fa-sort-amount-up",
            "Sort Down 1" => "fas fa-sort-down",
            "Sort Down 2" => "far fa-sort-down",
            "Sort Down 3" => "fal fa-sort-down",
            "Sort Numeric Down 1" => "fas fa-sort-numeric-down",
            "Sort Numeric Down 2" => "far fa-sort-numeric-down",
            "Sort Numeric Down 3" => "fal fa-sort-numeric-down",
            "Sort Numeric Up 1" => "fas fa-sort-numeric-up",
            "Sort Numeric Up 2" => "far fa-sort-numeric-up",
            "Sort Numeric Up 3" => "fal fa-sort-numeric-up",
            "Sort Up 1" => "fas fa-sort-up",
            "Sort Up 2" => "far fa-sort-up",
            "Sort Up 3" => "fal fa-sort-up",
            "Sync 1" => "fas fa-sync",
            "Sync 2" => "far fa-sync",
            "Sync 3" => "fal fa-sync",
            "Sync Alt 1" => "fas fa-sync-alt",
            "Sync Alt 2" => "far fa-sync-alt",
            "Sync Alt 3" => "fal fa-sync-alt",
            "Text Height 1" => "fas fa-text-height",
            "Text Height 2" => "far fa-text-height",
            "Text Height 3" => "fal fa-text-height",
            "Text Width 1" => "fas fa-text-width",
            "Text Width 2" => "far fa-text-width",
            "Text Width 3" => "fal fa-text-width",
            "Triangle 1" => "fas fa-triangle",
            "Triangle 2" => "far fa-triangle",
            "Triangle 3" => "fal fa-triangle",
            "Undo 1" => "fas fa-undo",
            "Undo 2" => "far fa-undo",
            "Undo 3" => "fal fa-undo",
            "Undo Alt 1" => "fas fa-undo-alt",
            "Undo Alt 2" => "far fa-undo-alt",
            "Undo Alt 3" => "fal fa-undo-alt",
            "Upload 1" => "fas fa-upload",
            "Upload 2" => "far fa-upload",
            "Upload 3" => "fal fa-upload",
            "Backward 1" => "fas fa-backward",
            "Backward 2" => "far fa-backward",
            "Backward 3" => "fal fa-backward",
            "Broadcast Tower 1" => "fas fa-broadcast-tower",
            "Broadcast Tower 2" => "far fa-broadcast-tower",
            "Broadcast Tower 3" => "fal fa-broadcast-tower",
            "Circle 1" => "fas fa-circle",
            "Circle 2" => "far fa-circle",
            "Circle 3" => "fal fa-circle",
            "Compress 1" => "fas fa-compress",
            "Compress 2" => "far fa-compress",
            "Compress 3" => "fal fa-compress",
            "Compress Wide 1" => "fas fa-compress-wide",
            "Compress Wide 2" => "far fa-compress-wide",
            "Compress Wide 3" => "fal fa-compress-wide",
            "Eject 1" => "fas fa-eject",
            "Eject 2" => "far fa-eject",
            "Eject 3" => "fal fa-eject",
            "Expand 1" => "fas fa-expand",
            "Expand 2" => "far fa-expand",
            "Expand 3" => "fal fa-expand",
            "Expand Wide 1" => "fas fa-expand-wide",
            "Expand Wide 2" => "far fa-expand-wide",
            "Expand Wide 3" => "fal fa-expand-wide",
            "1 Fast Backward" => "fas fa-fast-backward",
            "2 Fast Backward" => "far fa-fast-backward",
            "3 Fast Backward" => "fal fa-fast-backward",
            "4 Fast Forward" => "fas fa-fast-forward",
            "5 Fast Forward" => "far fa-fast-forward",
            "6 Fast Forward" => "fal fa-fast-forward",
            "7 File Audio" => "fas fa-file-audio",
            "8 File Audio" => "far fa-file-audio",
            "9 File Audio" => "fal fa-file-audio",
            "10 File Video" => "fas fa-file-video",
            "1 File Video" => "far fa-file-video",
            "2 File Video" => "fal fa-file-video",
            "3 Film" => "fas fa-film",
            "4 Film" => "far fa-film",
            "5 Film" => "fal fa-film",
            "6 Film Alt" => "fas fa-film-alt",
            "7 Film Alt" => "far fa-film-alt",
            "8 Film Alt" => "fal fa-film-alt",
            "9 Forward" => "fas fa-forward",
            "10 Forward" => "far fa-forward",
            "1 Forward" => "fal fa-forward",
            "2 Headphones" => "fas fa-headphones",
            "3 Headphones" => "far fa-headphones",
            "4 Headphones" => "fal fa-headphones",
            "5 Microphone" => "fas fa-microphone",
            "6 Microphone" => "far fa-microphone",
            "7 Microphone" => "fal fa-microphone",
            "8 Microphone Alt" => "fas fa-microphone-alt",
            "9 Microphone Alt" => "far fa-microphone-alt",
            "1 Microphone Alt" => "fal fa-microphone-alt",
            "2 Microphone Alt Slash" => "fas fa-microphone-alt-slash",
            "3 Microphone Alt Slash" => "far fa-microphone-alt-slash",
            "4 Microphone Alt Slash" => "fal fa-microphone-alt-slash",
            "5 Microphone Slash" => "fas fa-microphone-slash",
            "6 Microphone Slash" => "far fa-microphone-slash",
            "7 Microphone Slash" => "fal fa-microphone-slash",
            "8 Music" => "fas fa-music",
            "9 Music" => "far fa-music",
            "1 Music" => "fal fa-music",
            "2 Pause" => "fas fa-pause",
            "3 Pause" => "far fa-pause",
            "4 Pause" => "fal fa-pause",
            "5 Pause Circle" => "fas fa-pause-circle",
            "6 Pause Circle" => "far fa-pause-circle",
            "7 Pause Circle" => "fal fa-pause-circle",
            "8 Play Circle" => "fas fa-play-circle",
            "9 Play Circle" => "far fa-play-circle",
            "1 Play Circle" => "fal fa-play-circle",
            "2 Podcast" => "fas fa-podcast",
            "3 Podcast" => "far fa-podcast",
            "4 Podcast" => "fal fa-podcast",
            "5 Rectangle Landscape" => "fas fa-rectangle-landscape",
            "6 Rectangle Landscape" => "far fa-rectangle-landscape",
            "7 Rectangle Landscape" => "fal fa-rectangle-landscape",
            "8 Rectangle Portrait" => "fas fa-rectangle-portrait",
            "9 Rectangle Portrait" => "far fa-rectangle-portrait",
            "1 Rectangle Portrait" => "fal fa-rectangle-portrait",
            "2 Rectangle Wide" => "fas fa-rectangle-wide",
            "3 Rectangle Wide" => "far fa-rectangle-wide",
            "4 Rectangle Wide" => "fal fa-rectangle-wide",
            "5 Rss" => "fas fa-rss",
            "6 Rss" => "far fa-rss",
            "7 Rss" => "fal fa-rss",
            "8 Rss Square" => "fas fa-rss-square",
            "9 Rss Square" => "far fa-rss-square",
            "1 Rss Square" => "fal fa-rss-square",
            "2 Scrubber" => "fas fa-scrubber",
            "3 Scrubber" => "far fa-scrubber",
            "4 Scrubber" => "fal fa-scrubber",
            "5 Step Backward" => "fas fa-step-backward",
            "6 Step Backward" => "far fa-step-backward",
            "7 Step Backward" => "fal fa-step-backward",
            "8 Step Forward" => "fas fa-step-forward",
            "9 Step Forward" => "far fa-step-forward",
            "1 Step Forward" => "fal fa-step-forward",
            "2 Stop" => "fas fa-stop",
            "3 Stop" => "far fa-stop",
            "4 Stop" => "fal fa-stop",
            "5 Stop Circle" => "fas fa-stop-circle",
            "6 Stop Circle" => "far fa-stop-circle",
            "7 Stop Circle" => "fal fa-stop-circle",
            "8 Video" => "fas fa-video",
            "9 Video" => "far fa-video",
            "1 Video" => "fal fa-video",
            "2 Volume" => "fas fa-volume",
            "3 Volume" => "far fa-volume",
            "4 Volume" => "fal fa-volume",
            "5 Volume Down" => "fas fa-volume-down",
            "6 Volume Down" => "far fa-volume-down",
            "7 Volume Down" => "fal fa-volume-down",
            "8 Volume Mute" => "fas fa-volume-mute",
            "9 Volume Mute" => "far fa-volume-mute",
            "1 Volume Mute" => "fal fa-volume-mute",
            "2 Volume Off" => "fas fa-volume-off",
            "3 Volume Off" => "far fa-volume-off",
            "4 Volume Off" => "fal fa-volume-off",
            "5 Volume Slash" => "fas fa-volume-slash",
            "6 Volume Slash" => "far fa-volume-slash",
            "7 Volume Slash" => "fal fa-volume-slash",
            "8 Volume Up" => "fas fa-volume-up",
            "9 Volume Up" => "far fa-volume-up",
            "1 Volume Up" => "fal fa-volume-up",
            "2 Webcam" => "fas fa-webcam",
            "3 Webcam" => "far fa-webcam",
            "4 Webcam" => "fal fa-webcam",
            "5 Webcam Slash" => "fas fa-webcam-slash",
            "6 Webcam Slash" => "far fa-webcam-slash",
            "7 Webcam Slash" => "fal fa-webcam-slash",
            "8 Youtube" => "fab fa-youtube",
            "9 Air Freshener" => "fas fa-air-freshener",
            "1 Air Freshener" => "far fa-air-freshener",
            "2 Air Freshener" => "fal fa-air-freshener",
            "3 Ambulance" => "fas fa-ambulance",
            "4 Ambulance" => "far fa-ambulance",
            "5 Ambulance" => "fal fa-ambulance",
            "6 Bus" => "fas fa-bus",
            "7 Bus" => "far fa-bus",
            "8 Bus" => "fal fa-bus",
            "9 Bus Alt" => "fas fa-bus-alt",
            "1 Bus Alt" => "far fa-bus-alt",
            "2 Bus Alt" => "fal fa-bus-alt",
            "3 Car" => "fas fa-car",
            "4 Car" => "far fa-car",
            "5 Car" => "fal fa-car",
            "6 Car Alt" => "fas fa-car-alt",
            "7 Car Alt" => "far fa-car-alt",
            "8 Car Alt" => "fal fa-car-alt",
            "9 Car Battery" => "fas fa-car-battery",
            "1 Car Battery" => "far fa-car-battery",
            "2 Car Battery" => "fal fa-car-battery",
            "3 Car Bump" => "fas fa-car-bump",
            "4 Car Bump" => "far fa-car-bump",
            "5 Car Bump" => "fal fa-car-bump",
            "6 Car Crash" => "fas fa-car-crash",
            "7 Car Crash" => "far fa-car-crash",
            "8 Car Crash" => "fal fa-car-crash",
            "9 Car Garage" => "fas fa-car-garage",
            "1 Car Garage" => "far fa-car-garage",
            "2 Car Garage" => "fal fa-car-garage",
            "3 Car Mechanic" => "fas fa-car-mechanic",
            "4 Car Mechanic" => "far fa-car-mechanic",
            "5 Car Mechanic" => "fal fa-car-mechanic",
            "6 Car Side" => "fas fa-car-side",
            "7 Car Side" => "far fa-car-side",
            "8 Car Side" => "fal fa-car-side",
            "9 Car Tilt" => "fas fa-car-tilt",
            "1 Car Tilt" => "far fa-car-tilt",
            "2 Car Tilt" => "fal fa-car-tilt",
            "3 Car Wash" => "fas fa-car-wash",
            "4 Car Wash" => "far fa-car-wash",
            "5 Car Wash" => "fal fa-car-wash",
            "6 Charging Station" => "fas fa-charging-station",
            "7 Charging Station" => "far fa-charging-station",
            "8 Charging Station" => "fal fa-charging-station",
            "9 Gas Pump" => "fas fa-gas-pump",
            "1 Gas Pump" => "far fa-gas-pump",
            "2 Gas Pump" => "fal fa-gas-pump",
            "3 Gas Pump Slash" => "fas fa-gas-pump-slash",
            "4 Gas Pump Slash" => "far fa-gas-pump-slash",
            "5 Gas Pump Slash" => "fal fa-gas-pump-slash",
            "6 Motorcycle" => "fas fa-motorcycle",
            "7 Motorcycle" => "far fa-motorcycle",
            "8 Motorcycle" => "fal fa-motorcycle",
            "9 Oil Can" => "fas fa-oil-can",
            "Oil Can" => "far fa-oil-can",
            "Oil Can" => "fal fa-oil-can",
            "1 Oil Temp" => "fas fa-oil-temp",
            "2 Oil Temp" => "far fa-oil-temp",
            "3 Oil Temp" => "fal fa-oil-temp",
            "4 Shuttle Van" => "fas fa-shuttle-van",
            "5 Shuttle Van" => "far fa-shuttle-van",
            "6 Shuttle Van" => "fal fa-shuttle-van",
            "7 Steering Wheel" => "fas fa-steering-wheel",
            "8 Steering Wheel" => "far fa-steering-wheel",
            "9 Steering Wheel" => "fal fa-steering-wheel",
            "1 Tachometer" => "fas fa-tachometer",
            "2 Tachometer" => "far fa-tachometer",
            "3 Tachometer" => "fal fa-tachometer",
            "4 Tachometer Alt" => "fas fa-tachometer-alt",
            "5 Tachometer Alt" => "far fa-tachometer-alt",
            "6 Tachometer Alt" => "fal fa-tachometer-alt",
            "7 Tachometer Alt Average" => "fas fa-tachometer-alt-average",
            "8 Tachometer Alt Average" => "far fa-tachometer-alt-average",
            "9 Tachometer Alt Average" => "fal fa-tachometer-alt-average",
            "1 Tachometer Alt Fast" => "fas fa-tachometer-alt-fast",
            "2 Tachometer Alt Fast" => "far fa-tachometer-alt-fast",
            "3 Tachometer Alt Fast" => "fal fa-tachometer-alt-fast",
            "4 Tachometer Alt Fastest" => "fas fa-tachometer-alt-fastest",
            "5 Tachometer Alt Fastest" => "far fa-tachometer-alt-fastest",
            "6 Tachometer Alt Fastest" => "fal fa-tachometer-alt-fastest",
            "7 Tachometer Alt Slow" => "fas fa-tachometer-alt-slow",
            "8 Tachometer Alt Slow" => "far fa-tachometer-alt-slow",
            "9 Tachometer Alt Slow" => "fal fa-tachometer-alt-slow",
            "1 Tachometer Alt Slowest" => "fas fa-tachometer-alt-slowest",
            "2 Tachometer Alt Slowest" => "far fa-tachometer-alt-slowest",
            "3 Tachometer Alt Slowest" => "fal fa-tachometer-alt-slowest",
            "4 Tachometer Average" => "fas fa-tachometer-average",
            "5 Tachometer Average" => "far fa-tachometer-average",
            "6 Tachometer Average" => "fal fa-tachometer-average",
            "7 Tachometer Fast" => "fas fa-tachometer-fast",
            "8 Tachometer Fast" => "far fa-tachometer-fast",
            "9 Tachometer Fast" => "fal fa-tachometer-fast",
            "1 Tachometer Fastest" => "fas fa-tachometer-fastest",
            "2 Tachometer Fastest" => "far fa-tachometer-fastest",
            "3 Tachometer Fastest" => "fal fa-tachometer-fastest",
            "4 Tachometer Slow" => "fas fa-tachometer-slow",
            "5 Tachometer Slow" => "far fa-tachometer-slow",
            "6 Tachometer Slow" => "fal fa-tachometer-slow",
            "7 Tachometer Slowest" => "fas fa-tachometer-slowest",
            "8 Tachometer Slowest" => "far fa-tachometer-slowest",
            "9 Tachometer Slowest" => "fal fa-tachometer-slowest",
            "1 Taxi" => "fas fa-taxi",
            "2 Taxi" => "far fa-taxi",
            "3 Taxi" => "fal fa-taxi",
            "4 Tire" => "fas fa-tire",
            "5 Tire" => "far fa-tire",
            "6 Tire" => "fal fa-tire",
            "7 Tire Flat" => "fas fa-tire-flat",
            "8 Tire Flat" => "far fa-tire-flat",
            "9 Tire Flat" => "fal fa-tire-flat",
            "1 Tire Pressure Warning" => "fas fa-tire-pressure-warning",
            "2 Tire Pressure Warning" => "far fa-tire-pressure-warning",
            "3 Tire Pressure Warning" => "fal fa-tire-pressure-warning",
            "4 Tire Rugged" => "fas fa-tire-rugged",
            "5 Tire Rugged" => "far fa-tire-rugged",
            "6 Tire Rugged" => "fal fa-tire-rugged",
            "7 Truck" => "fas fa-truck",
            "8 Truck" => "far fa-truck",
            "9 Truck" => "fal fa-truck",
            "1 Truck Monster" => "fas fa-truck-monster",
            "2 Truck Monster" => "far fa-truck-monster",
            "3 Truck Monster" => "fal fa-truck-monster",
            "4 Truck Pickup" => "fas fa-truck-pickup",
            "5 Truck Pickup" => "far fa-truck-pickup",
            "6 Truck Pickup" => "fal fa-truck-pickup",
            "7 Acorn" => "fas fa-acorn",
            "8 Acorn" => "far fa-acorn",
            "9 Acorn" => "fal fa-acorn",
            "1 Apple Alt" => "fas fa-apple-alt",
            "2 Apple Alt" => "far fa-apple-alt",
            "3 Apple Alt" => "fal fa-apple-alt",
            "4 Apple Crate" => "fas fa-apple-crate",
            "5 Apple Crate" => "far fa-apple-crate",
            "6 Apple Crate" => "fal fa-apple-crate",
            "7 Axe" => "fas fa-axe",
            "8 Axe" => "far fa-axe",
            "9 Axe" => "fal fa-axe",
            "1 Campfire" => "fas fa-campfire",
            "2 Campfire" => "far fa-campfire",
            "3 Campfire" => "fal fa-campfire",
            "4 Campground" => "fas fa-campground",
            "5 Campground" => "far fa-campground",
            "6 Campground" => "fal fa-campground",
            "7 Cloud Sun" => "fas fa-cloud-sun",
            "8 Cloud Sun" => "far fa-cloud-sun",
            "9 Cloud Sun" => "fal fa-cloud-sun",
            "1 Coffee Togo" => "fas fa-coffee-togo",
            "2 Coffee Togo" => "far fa-coffee-togo",
            "3 Coffee Togo" => "fal fa-coffee-togo",
            "4 Corn" => "fas fa-corn",
            "5 Corn" => "far fa-corn",
            "6 Corn" => "fal fa-corn",
            "7 Drumstick" => "fas fa-drumstick",
            "8 Drumstick" => "far fa-drumstick",
            "9 Drumstick" => "fal fa-drumstick",
            "1 Drumstick Bite" => "fas fa-drumstick-bite",
            "2 Drumstick Bite" => "far fa-drumstick-bite",
            "3 Drumstick Bite" => "fal fa-drumstick-bite",
            "4 Football Ball" => "fas fa-football-ball",
            "5 Football Ball" => "far fa-football-ball",
            "6 Football Ball" => "fal fa-football-ball",
            "7 Hiking" => "fas fa-hiking",
            "8 Hiking" => "far fa-hiking",
            "9 Hiking" => "fal fa-hiking",
            "1 Kite" => "fas fa-kite",
            "2 Kite" => "far fa-kite",
            "3 Kite" => "fal fa-kite",
            "4 Leaf Maple" => "fas fa-leaf-maple",
            "5 Leaf Maple" => "far fa-leaf-maple",
            "6 Leaf Maple" => "fal fa-leaf-maple",
            "7 Leaf Oak" => "fas fa-leaf-oak",
            "8 Leaf Oak" => "far fa-leaf-oak",
            "9 Leaf Oak" => "fal fa-leaf-oak",
            "1 Mountain" => "fas fa-mountain",
            "2 Mountain" => "far fa-mountain",
            "3 Mountain" => "fal fa-mountain",
            "4 Mountains" => "fas fa-mountains",
            "5 Mountains" => "far fa-mountains",
            "6 Mountains" => "fal fa-mountains",
            "7 Pie" => "fas fa-pie",
            "8 Pie" => "far fa-pie",
            "9 Pie" => "fal fa-pie",
            "1 Pumpkin" => "fas fa-pumpkin",
            "2 Pumpkin" => "far fa-pumpkin",
            "3 Pumpkin" => "fal fa-pumpkin",
            "4 Shovel" => "fas fa-shovel",
            "5 Shovel" => "far fa-shovel",
            "6 Shovel" => "fal fa-shovel",
            "7 Tractor" => "fas fa-tractor",
            "8 Tractor" => "far fa-tractor",
            "9 Tractor" => "fal fa-tractor",
            "1 Tree" => "fas fa-tree",
            "2 Tree" => "far fa-tree",
            "3 Tree" => "fal fa-tree",
            "4 Tree Alt" => "fas fa-tree-alt",
            "5 Tree Alt" => "far fa-tree-alt",
            "6 Tree Alt" => "fal fa-tree-alt",
            "7 Trees" => "fas fa-trees",
            "8 Trees" => "far fa-trees",
            "9 Trees" => "fal fa-trees",
            "1 Turkey" => "fas fa-turkey",
            "2 Turkey" => "far fa-turkey",
            "3 Turkey" => "fal fa-turkey",
            "4 Wheat" => "fas fa-wheat",
            "5 Wheat" => "far fa-wheat",
            "6 Wheat" => "fal fa-wheat",
            "7 Wind" => "fas fa-wind",
            "8 Wind" => "far fa-wind",
            "9 Wind" => "fal fa-wind",
            "1 Wine Bottle" => "fas fa-wine-bottle",
            "2 Wine Bottle" => "far fa-wine-bottle",
            "3 Wine Bottle" => "fal fa-wine-bottle",
            "4 Archway" => "fas fa-archway",
            "5 Archway" => "far fa-archway",
            "6 Archway" => "fal fa-archway",
            "7 Beer" => "fas fa-beer",
            "8 Beer" => "far fa-beer",
            "9 Beer" => "fal fa-beer",
            "1 Blender" => "fas fa-blender",
            "2 Blender" => "far fa-blender",
            "3 Blender" => "fal fa-blender",
            "4 Building" => "fas fa-building",
            "5 Building" => "far fa-building",
            "6 Building" => "fal fa-building",
            "7 Chimney" => "fas fa-chimney",
            "8 Chimney" => "far fa-chimney",
            "9 Chimney" => "fal fa-chimney",
            "1 Church" => "fas fa-church",
            "2 Church" => "far fa-church",
            "3 Church" => "fal fa-church",
            "4 City" => "fas fa-city",
            "5 City" => "far fa-city",
            "6 City" => "fal fa-city",
            "7 Clinic Medical" => "fas fa-clinic-medical",
            "8 Clinic Medical" => "far fa-clinic-medical",
            "9 Clinic Medical" => "fal fa-clinic-medical",
            "1 Cocktail" => "fas fa-cocktail",
            "2 Cocktail" => "far fa-cocktail",
            "3 Cocktail" => "fal fa-cocktail",
            "4 Coffee" => "fas fa-coffee",
            "5 Coffee" => "far fa-coffee",
            "6 Coffee" => "fal fa-coffee",
            "7 Container Storage" => "fas fa-container-storage",
            "8 Container Storage" => "far fa-container-storage",
            "9 Container Storage" => "fal fa-container-storage",
            "1 Dungeon" => "fas fa-dungeon",
            "2 Dungeon" => "far fa-dungeon",
            "3 Dungeon" => "fal fa-dungeon",
            "4 Flask" => "fas fa-flask",
            "5 Flask" => "far fa-flask",
            "6 Flask" => "fal fa-flask",
            "7 Flask Poison" => "fas fa-flask-poison",
            "8 Flask Poison" => "far fa-flask-poison",
            "9 Flask Poison" => "fal fa-flask-poison",
            "1 Flask Potion" => "fas fa-flask-potion",
            "2 Flask Potion" => "far fa-flask-potion",
            "3 Flask Potion" => "fal fa-flask-potion",
            "4 Glass" => "fas fa-glass",
            "5 Glass" => "far fa-glass",
            "6 Glass" => "fal fa-glass",
            "7 Glass Champagne" => "fas fa-glass-champagne",
            "8 Glass Champagne" => "far fa-glass-champagne",
            "9 Glass Champagne" => "fal fa-glass-champagne",
            "1 Glass Cheers" => "fas fa-glass-cheers",
            "2 Glass Cheers" => "far fa-glass-cheers",
            "3 Glass Cheers" => "fal fa-glass-cheers",
            "4 Glass Martini" => "fas fa-glass-martini",
            "5 Glass Martini" => "far fa-glass-martini",
            "6 Glass Martini" => "fal fa-glass-martini",
            "7 Glass Martini Alt" => "fas fa-glass-martini-alt",
            "8 Glass Martini Alt" => "far fa-glass-martini-alt",
            "9 Glass Martini Alt" => "fal fa-glass-martini-alt",
            "1 Glass Whiskey" => "fas fa-glass-whiskey",
            "2 Glass Whiskey" => "far fa-glass-whiskey",
            "3 Glass Whiskey" => "fal fa-glass-whiskey",
            "4 Glass Whiskey Rocks" => "fas fa-glass-whiskey-rocks",
            "5 Glass Whiskey Rocks" => "far fa-glass-whiskey-rocks",
            "6 Glass Whiskey Rocks" => "fal fa-glass-whiskey-rocks",
            "7 Gopuram" => "fas fa-gopuram",
            "8 Gopuram" => "far fa-gopuram",
            "9 Gopuram" => "fal fa-gopuram",
            "1 Home" => "fas fa-home",
            "2 Home" => "far fa-home",
            "3 Home" => "fal fa-home",
            "4 Home Alt" => "fas fa-home-alt",
            "5 Home Alt" => "far fa-home-alt",
            "6 Home Alt" => "fal fa-home-alt",
            "7 Home Lg" => "fas fa-home-lg",
            "8 Home Lg" => "far fa-home-lg",
            "9 Home Lg" => "fal fa-home-lg",
            "1 Home Lg Alt" => "fas fa-home-lg-alt",
            "2 Home Lg Alt" => "far fa-home-lg-alt",
            "3 Home Lg Alt" => "fal fa-home-lg-alt",
            "4 Hospital" => "fas fa-hospital",
            "5 Hospital" => "far fa-hospital",
            "6 Hospital" => "fal fa-hospital",
            "7 Hospital Alt" => "fas fa-hospital-alt",
            "8 Hospital Alt" => "far fa-hospital-alt",
            "9 Hospital Alt" => "fal fa-hospital-alt",
            "1 Hospital User" => "fas fa-hospital-user",
            "2 Hospital User" => "far fa-hospital-user",
            "3 Hospital User" => "fal fa-hospital-user",
            "4 Hospitals" => "fas fa-hospitals",
            "5 Hospitals" => "far fa-hospitals",
            "6 Hospitals" => "fal fa-hospitals",
            "7 Hotel" => "fas fa-hotel",
            "8 Hotel" => "far fa-hotel",
            "9 Hotel" => "fal fa-hotel",
            "1 House Damage" => "fas fa-house-damage",
            "2 House Damage" => "far fa-house-damage",
            "3 House Damage" => "fal fa-house-damage",
            "4 House Flood" => "fas fa-house-flood",
            "5 House Flood" => "far fa-house-flood",
            "6 House Flood" => "fal fa-house-flood",
            "7 Igloo" => "fas fa-igloo",
            "8 Igloo" => "far fa-igloo",
            "9 Igloo" => "fal fa-igloo",
            "1 Industry" => "fas fa-industry",
            "2 Industry" => "far fa-industry",
            "3 Industry" => "fal fa-industry",
            "4 Industry Alt" => "fas fa-industry-alt",
            "5 Industry Alt" => "far fa-industry-alt",
            "6 Industry Alt" => "fal fa-industry-alt",
            "7 Kaaba" => "fas fa-kaaba",
            "8 Kaaba" => "far fa-kaaba",
            "9 Kaaba" => "fal fa-kaaba",
            "1 Landmark" => "fas fa-landmark",
            "2 Landmark" => "far fa-landmark",
            "3 Landmark" => "fal fa-landmark",
            "4 Landmark Alt" => "fas fa-landmark-alt",
            "5 Landmark Alt" => "far fa-landmark-alt",
            "6 Landmark Alt" => "fal fa-landmark-alt",
            "7 Monument" => "fas fa-monument",
            "8 Monument" => "far fa-monument",
            "9 Monument" => "fal fa-monument",
            "1 Mosque" => "fas fa-mosque",
            "2 Mosque" => "far fa-mosque",
            "3 Mosque" => "fal fa-mosque",
            "4 Mug Hot" => "fas fa-mug-hot",
            "5 Mug Hot" => "far fa-mug-hot",
            "6 Mug Hot" => "fal fa-mug-hot",
            "7 Mug Marshmallows" => "fas fa-mug-marshmallows",
            "8 Mug Marshmallows" => "far fa-mug-marshmallows",
            "9 Mug Marshmallows" => "fal fa-mug-marshmallows",
            "1 Place Of Worship" => "fas fa-place-of-worship",
            "2 Place Of Worship" => "far fa-place-of-worship",
            "3 Place Of Worship" => "fal fa-place-of-worship",
            "4 School" => "fas fa-school",
            "5 School" => "far fa-school",
            "6 School" => "fal fa-school",
            "7 Store" => "fas fa-store",
            "8 Store" => "far fa-store",
            "9 Store" => "fal fa-store",
            "1 Store Alt" => "fas fa-store-alt",
            "2 Store Alt" => "far fa-store-alt",
            "3 Store Alt" => "fal fa-store-alt",
            "4 Synagogue" => "fas fa-synagogue",
            "5 Synagogue" => "far fa-synagogue",
            "6 Synagogue" => "fal fa-synagogue",
            "7 Torii Gate" => "fas fa-torii-gate",
            "8 Torii Gate" => "far fa-torii-gate",
            "9 Torii Gate" => "fal fa-torii-gate",
            "1 University" => "fas fa-university",
            "2 University" => "far fa-university",
            "3 University" => "fal fa-university",
            "4 Vihara" => "fas fa-vihara",
            "5 Vihara" => "far fa-vihara",
            "6 Vihara" => "fal fa-vihara",
            "7 Warehouse" => "fas fa-warehouse",
            "8 Warehouse" => "far fa-warehouse",
            "9 Warehouse" => "fal fa-warehouse",
            "1 Warehouse Alt" => "fas fa-warehouse-alt",
            "2 Warehouse Alt" => "far fa-warehouse-alt",
            "3 Warehouse Alt" => "fal fa-warehouse-alt",
            "4 Wine Glass" => "fas fa-wine-glass",
            "5 Wine Glass" => "far fa-wine-glass",
            "6 Wine Glass" => "fal fa-wine-glass",
            "7 Wine Glass Alt" => "fas fa-wine-glass-alt",
            "8 Wine Glass Alt" => "far fa-wine-glass-alt",
            "9 Wine Glass Alt" => "fal fa-wine-glass-alt",
            "1 Address Book" => "fas fa-address-book",
            "2 Address Book" => "far fa-address-book",
            "3 Address Book" => "fal fa-address-book",
            "4 Address Card" => "fas fa-address-card",
            "5 Address Card" => "far fa-address-card",
            "6 Address Card" => "fal fa-address-card",
            "7 Archive" => "fas fa-archive",
            "8 Archive" => "far fa-archive",
            "9 Archive" => "fal fa-archive",
            "1 Backpack" => "fas fa-backpack",
            "2 Backpack" => "far fa-backpack",
            "3 Backpack" => "fal fa-backpack",
            "4 Badge" => "fas fa-badge",
            "5 Badge" => "far fa-badge",
            "6 Badge" => "fal fa-badge",
            "7 Badge Check" => "fas fa-badge-check",
            "8 Badge Check" => "far fa-badge-check",
            "9 Badge Check" => "fal fa-badge-check",
            "1 Badge Dollar" => "fas fa-badge-dollar",
            "2 Badge Dollar" => "far fa-badge-dollar",
            "3 Badge Dollar" => "fal fa-badge-dollar",
            "4 Badge Percent" => "fas fa-badge-percent",
            "5 Badge Percent" => "far fa-badge-percent",
            "6 Badge Percent" => "fal fa-badge-percent",
            "7 Balance Scale" => "fas fa-balance-scale",
            "8 Balance Scale" => "far fa-balance-scale",
            "9 Balance Scale" => "fal fa-balance-scale",
            "1 Balance Scale Left" => "fas fa-balance-scale-left",
            "2 Balance Scale Left" => "far fa-balance-scale-left",
            "3 Balance Scale Left" => "fal fa-balance-scale-left",
            "4 Balance Scale Right" => "fas fa-balance-scale-right",
            "5 Balance Scale Right" => "far fa-balance-scale-right",
            "6 Balance Scale Right" => "fal fa-balance-scale-right",
            "7 Binoculars" => "fas fa-binoculars",
            "8 Binoculars" => "far fa-binoculars",
            "9 Binoculars" => "fal fa-binoculars",
            "1 Birthday Cake" => "fas fa-birthday-cake",
            "2 Birthday Cake" => "far fa-birthday-cake",
            "3 Birthday Cake" => "fal fa-birthday-cake",
            "4 Book" => "fas fa-book",
            "5 Book" => "far fa-book",
            "6 Book" => "fal fa-book",
            "7 Book Heart" => "fas fa-book-heart",
            "8 Book Heart" => "far fa-book-heart",
            "9 Book Heart" => "fal fa-book-heart",
            "1 Boot" => "fas fa-boot",
            "2 Boot" => "far fa-boot",
            "3 Boot" => "fal fa-boot",
            "4 Box Heart" => "fas fa-box-heart",
            "5 Box Heart" => "far fa-box-heart",
            "6 Box Heart" => "fal fa-box-heart",
            "7 Box Usd" => "fas fa-box-usd",
            "8 Box Usd" => "far fa-box-usd",
            "9 Box Usd" => "fal fa-box-usd",
            "1 Briefcase" => "fas fa-briefcase",
            "2 Briefcase" => "far fa-briefcase",
            "3 Briefcase" => "fal fa-briefcase",
            "4 Bullhorn" => "fas fa-bullhorn",
            "5 Bullhorn" => "far fa-bullhorn",
            "6 Bullhorn" => "fal fa-bullhorn",
            "7 Bullseye" => "fas fa-bullseye",
            "8 Bullseye" => "far fa-bullseye",
            "9 Bullseye" => "fal fa-bullseye",
            "1 Business Time" => "fas fa-business-time",
            "2 Business Time" => "far fa-business-time",
            "3 Business Time" => "fal fa-business-time",
            "4 Cabinet Filing" => "fas fa-cabinet-filing",
            "5 Cabinet Filing" => "far fa-cabinet-filing",
            "6 Cabinet Filing" => "fal fa-cabinet-filing",
            "7 Calculator" => "fas fa-calculator",
            "8 Calculator" => "far fa-calculator",
            "9 Calculator" => "fal fa-calculator",
            "1 Calendar" => "fas fa-calendar",
            "2 Calendar" => "far fa-calendar",
            "3 Calendar" => "fal fa-calendar",
            "4 Calendar Alt" => "fas fa-calendar-alt",
            "5 Calendar Alt" => "far fa-calendar-alt",
            "6 Calendar Alt" => "fal fa-calendar-alt",
            "7 Cauldron" => "fas fa-cauldron",
            "8 Cauldron" => "far fa-cauldron",
            "9 Cauldron" => "fal fa-cauldron",
            "1 Certificate" => "fas fa-certificate",
            "2 Certificate" => "far fa-certificate",
            "3 Certificate" => "fal fa-certificate",
            "4 Chart Area" => "fas fa-chart-area",
            "5 Chart Area" => "far fa-chart-area",
            "6 Chart Area" => "fal fa-chart-area",
            "7 Chart Bar" => "fas fa-chart-bar",
            "8 Chart Bar" => "far fa-chart-bar",
            "9 Chart Bar" => "fal fa-chart-bar",
            "1 Chart Line Down" => "fas fa-chart-line-down",
            "2 Chart Line Down" => "far fa-chart-line-down",
            "3 Chart Line Down" => "fal fa-chart-line-down",
            "4 Chart Network" => "fas fa-chart-network",
            "5 Chart Network" => "far fa-chart-network",
            "6 Chart Network" => "fal fa-chart-network",
            "7 Chart Pie" => "fas fa-chart-pie",
            "8 Chart Pie" => "far fa-chart-pie",
            "9 Chart Pie" => "fal fa-chart-pie",
            "1 Chart Pie Alt" => "fas fa-chart-pie-alt",
            "2 Chart Pie Alt" => "far fa-chart-pie-alt",
            "3 Chart Pie Alt" => "fal fa-chart-pie-alt",
            "4 Chart Scatter" => "fas fa-chart-scatter",
            "5 Chart Scatter" => "far fa-chart-scatter",
            "6 Chart Scatter" => "fal fa-chart-scatter",
            "7 Clipboard" => "fas fa-clipboard",
            "8 Clipboard" => "far fa-clipboard",
            "9 Clipboard" => "fal fa-clipboard",
            "1 Columns" => "fas fa-columns",
            "2 Columns" => "far fa-columns",
            "3 Columns" => "fal fa-columns",
            "4 Compass" => "fas fa-compass",
            "5 Compass" => "far fa-compass",
            "6 Compass" => "fal fa-compass",
            "7 Copy" => "fas fa-copy",
            "8 Copy" => "far fa-copy",
            "9 Copy" => "fal fa-copy",
            "1 Copyright" => "fas fa-copyright",
            "2 Copyright" => "far fa-copyright",
            "3 Copyright" => "fal fa-copyright",
            "4 Cut" => "fas fa-cut",
            "5 Cut" => "far fa-cut",
            "6 Cut" => "fal fa-cut",
            "7 Dollar Sign" => "fas fa-dollar-sign",
            "8 Dollar Sign" => "far fa-dollar-sign",
            "9 Dollar Sign" => "fal fa-dollar-sign",
            "1 Donate" => "fas fa-donate",
            "2 Donate" => "far fa-donate",
            "3 Donate" => "fal fa-donate",
            "4 Edit" => "fas fa-edit",
            "5 Edit" => "far fa-edit",
            "6 Edit" => "fal fa-edit",
            "7 Envelope" => "fas fa-envelope",
            "8 Envelope" => "far fa-envelope",
            "9 Envelope" => "fal fa-envelope",
            "1 Envelope Open" => "fas fa-envelope-open",
            "2 Envelope Open" => "far fa-envelope-open",
            "3 Envelope Open" => "fal fa-envelope-open",
            "4 Envelope Square" => "fas fa-envelope-square",
            "5 Envelope Square" => "far fa-envelope-square",
            "6 Envelope Square" => "fal fa-envelope-square",
            "7 Eraser" => "fas fa-eraser",
            "8 Eraser" => "far fa-eraser",
            "9 Eraser" => "fal fa-eraser",
            "1 Fax" => "fas fa-fax",
            "2 Fax" => "far fa-fax",
            "3 Fax" => "fal fa-fax",
            "4 File" => "fas fa-file",
            "5 File" => "far fa-file",
            "6 File" => "fal fa-file",
            "7 File Alt" => "fas fa-file-alt",
            "8 File Alt" => "far fa-file-alt",
            "9 File Alt" => "fal fa-file-alt",
            "1 File Chart Line" => "fas fa-file-chart-line",
            "2 File Chart Line" => "far fa-file-chart-line",
            "3 File Chart Line" => "fal fa-file-chart-line",
            "4 File Chart Pie" => "fas fa-file-chart-pie",
            "5 File Chart Pie" => "far fa-file-chart-pie",
            "6 File Chart Pie" => "fal fa-file-chart-pie",
            "7 File Spreadsheet" => "fas fa-file-spreadsheet",
            "8 File Spreadsheet" => "far fa-file-spreadsheet",
            "9 File Spreadsheet" => "fal fa-file-spreadsheet",
            "1 File User" => "fas fa-file-user",
            "2 File User" => "far fa-file-user",
            "3 File User" => "fal fa-file-user",
            "4 Fire" => "fas fa-fire",
            "5 Fire" => "far fa-fire",
            "6 Fire" => "fal fa-fire",
            "7 Fire Alt" => "fas fa-fire-alt",
            "8 Fire Alt" => "far fa-fire-alt",
            "9 Fire Alt" => "fal fa-fire-alt",
            "1 Fire Smoke" => "fas fa-fire-smoke",
            "2 Fire Smoke" => "far fa-fire-smoke",
            "3 Fire Smoke" => "fal fa-fire-smoke",
            "4 First Aid" => "fas fa-first-aid",
            "5 First Aid" => "far fa-first-aid",
            "6 First Aid" => "fal fa-first-aid",
            "7 Folder" => "fas fa-folder",
            "8 Folder" => "far fa-folder",
            "9 Folder" => "fal fa-folder",
            "1 Folder Minus" => "fas fa-folder-minus",
            "2 Folder Minus" => "far fa-folder-minus",
            "3 Folder Minus" => "fal fa-folder-minus",
            "4 Folder Open" => "fas fa-folder-open",
            "5 Folder Open" => "far fa-folder-open",
            "6 Folder Open" => "fal fa-folder-open",
            "7 Folder Plus" => "fas fa-folder-plus",
            "8 Folder Plus" => "far fa-folder-plus",
            "9 Folder Plus" => "fal fa-folder-plus",
            "1 Folder Times" => "fas fa-folder-times",
            "2 Folder Times" => "far fa-folder-times",
            "3 Folder Times" => "fal fa-folder-times",
            "4 Folder Tree" => "fas fa-folder-tree",
            "5 Folder Tree" => "far fa-folder-tree",
            "6 Folder Tree" => "fal fa-folder-tree",
            "7 Folders" => "fas fa-folders",
            "8 Folders" => "far fa-folders",
            "9 Folders" => "fal fa-folders",
            "1 Gift" => "fas fa-gift",
            "2 Gift" => "far fa-gift",
            "3 Gift" => "fal fa-gift",
            "4 Glasses" => "fas fa-glasses",
            "5 Glasses" => "far fa-glasses",
            "6 Glasses" => "fal fa-glasses",
            "7 Globe" => "fas fa-globe",
            "8 Globe" => "far fa-globe",
            "9 Globe" => "fal fa-globe",
            "1 Hand Heart" => "fas fa-hand-heart",
            "2 Hand Heart" => "far fa-hand-heart",
            "3 Hand Heart" => "fal fa-hand-heart",
            "4 Hand Holding Heart" => "fas fa-hand-holding-heart",
            "5 Hand Holding Heart" => "far fa-hand-holding-heart",
            "6 Hand Holding Heart" => "fal fa-hand-holding-heart",
            "7 Hand Holding Seedling" => "fas fa-hand-holding-seedling",
            "8 Hand Holding Seedling" => "far fa-hand-holding-seedling",
            "9 Hand Holding Seedling" => "fal fa-hand-holding-seedling",
            "1 Hand Holding Usd" => "fas fa-hand-holding-usd",
            "2 Hand Holding Usd" => "far fa-hand-holding-usd",
            "3 Hand Holding Usd" => "fal fa-hand-holding-usd",
            "4 Hand Holding Water" => "fas fa-hand-holding-water",
            "5 Hand Holding Water" => "far fa-hand-holding-water",
            "6 Hand Holding Water" => "fal fa-hand-holding-water",
            "7 Hands Heart" => "fas fa-hands-heart",
            "8 Hands Heart" => "far fa-hands-heart",
            "9 Hands Heart" => "fal fa-hands-heart",
            "1 Hands Helping" => "fas fa-hands-helping",
            "2 Hands Helping" => "far fa-hands-helping",
            "3 Hands Helping" => "fal fa-hands-helping",
            "4 Hands Usd" => "fas fa-hands-usd",
            "5 Hands Usd" => "far fa-hands-usd",
            "6 Hands Usd" => "fal fa-hands-usd",
            "7 Handshake" => "fas fa-handshake",
            "8 Handshake" => "far fa-handshake",
            "9 Handshake" => "fal fa-handshake",
            "1 Handshake Alt" => "fas fa-handshake-alt",
            "2 Handshake Alt" => "far fa-handshake-alt",
            "3 Handshake Alt" => "fal fa-handshake-alt",
            "4 Heart" => "fas fa-heart",
            "5 Heart" => "far fa-heart",
            "6 Heart" => "fal fa-heart",
            "7 Heart Circle" => "fas fa-heart-circle",
            "8 Heart Circle" => "far fa-heart-circle",
            "9 Heart Circle" => "fal fa-heart-circle",
            "1 Heart Square" => "fas fa-heart-square",
            "2 Heart Square" => "far fa-heart-square",
            "3 Heart Square" => "fal fa-heart-square",
            "4 Highlighter" => "fas fa-highlighter",
            "5 Highlighter" => "far fa-highlighter",
            "6 Highlighter" => "fal fa-highlighter",
            "7 Home Heart" => "fas fa-home-heart",
            "8 Home Heart" => "far fa-home-heart",
            "9 Home Heart" => "fal fa-home-heart",
            "1 Keynote" => "fas fa-keynote",
            "2 Keynote" => "far fa-keynote",
            "3 Keynote" => "fal fa-keynote",
            "4 Leaf" => "fas fa-leaf",
            "5 Leaf" => "far fa-leaf",
            "6 Leaf" => "fal fa-leaf",
            "7 Leaf Heart" => "fas fa-leaf-heart",
            "8 Leaf Heart" => "far fa-leaf-heart",
            "9 Leaf Heart" => "fal fa-leaf-heart",
            "1 Map" => "fas fa-map",
            "2 Map" => "far fa-map",
            "3 Map" => "fal fa-map",
            "4 Map Marked" => "fas fa-map-marked",
            "5 Map Marked" => "far fa-map-marked",
            "6 Map Marked" => "fal fa-map-marked",
            "7 Map Marked Alt" => "fas fa-map-marked-alt",
            "8 Map Marked Alt" => "far fa-map-marked-alt",
            "9 Map Marked Alt" => "fal fa-map-marked-alt",
            "1 Map Signs" => "fas fa-map-signs",
            "2 Map Signs" => "far fa-map-signs",
            "3 Map Signs" => "fal fa-map-signs",
            "4 Marker" => "fas fa-marker",
            "5 Marker" => "far fa-marker",
            "6 Marker" => "fal fa-marker",
            "7 Mind Share" => "fas fa-mind-share",
            "8 Mind Share" => "far fa-mind-share",
            "9 Mind Share" => "fal fa-mind-share",
            "1 Paperclip" => "fas fa-paperclip",
            "2 Paperclip" => "far fa-paperclip",
            "3 Paperclip" => "fal fa-paperclip",
            "4 Parachute Box" => "fas fa-parachute-box",
            "5 Parachute Box" => "far fa-parachute-box",
            "6 Parachute Box" => "fal fa-parachute-box",
            "7 Paste" => "fas fa-paste",
            "8 Paste" => "far fa-paste",
            "9 Paste" => "fal fa-paste",
            "1 Pen" => "fas fa-pen",
            "2 Pen" => "far fa-pen",
            "3 Pen" => "fal fa-pen",
            "4 Pen Alt" => "fas fa-pen-alt",
            "5 Pen Alt" => "far fa-pen-alt",
            "6 Pen Alt" => "fal fa-pen-alt",
            "7 Pen Fancy" => "fas fa-pen-fancy",
            "8 Pen Fancy" => "far fa-pen-fancy",
            "9 Pen Fancy" => "fal fa-pen-fancy",
            "1 Pen Nib" => "fas fa-pen-nib",
            "2 Pen Nib" => "far fa-pen-nib",
            "3 Pen Nib" => "fal fa-pen-nib",
            "4 Pen Square" => "fas fa-pen-square",
            "5 Pen Square" => "far fa-pen-square",
            "6 Pen Square" => "fal fa-pen-square",
            "7 Pencil" => "fas fa-pencil",
            "8 Pencil" => "far fa-pencil",
            "9 Pencil" => "fal fa-pencil",
            "1 Pencil Alt" => "fas fa-pencil-alt",
            "2 Pencil Alt" => "far fa-pencil-alt",
            "3 Pencil Alt" => "fal fa-pencil-alt",
            "4 Percent" => "fas fa-percent",
            "5 Percent" => "far fa-percent",
            "6 Percent" => "fal fa-percent",
            "7 Phone" => "fas fa-phone",
            "8 Phone" => "far fa-phone",
            "9 Phone" => "fal fa-phone",
            "1 Phone Office" => "fas fa-phone-office",
            "2 Phone Office" => "far fa-phone-office",
            "3 Phone Office" => "fal fa-phone-office",
            "4 Phone Slash" => "fas fa-phone-slash",
            "5 Phone Slash" => "far fa-phone-slash",
            "6 Phone Slash" => "fal fa-phone-slash",
            "7 Phone Square" => "fas fa-phone-square",
            "8 Phone Square" => "far fa-phone-square",
            "9 Phone Square" => "fal fa-phone-square",
            "1 Piggy Bank" => "fas fa-piggy-bank",
            "2 Piggy Bank" => "far fa-piggy-bank",
            "3 Piggy Bank" => "fal fa-piggy-bank",
            "4 Podium" => "fas fa-podium",
            "5 Podium" => "far fa-podium",
            "6 Podium" => "fal fa-podium",
            "7 Presentation" => "fas fa-presentation",
            "8 Presentation" => "far fa-presentation",
            "9 Presentation" => "fal fa-presentation",
            "1 Print" => "fas fa-print",
            "2 Print" => "far fa-print",
            "3 Print" => "fal fa-print",
            "4 Print Slash" => "fas fa-print-slash",
            "5 Print Slash" => "far fa-print-slash",
            "6 Print Slash" => "fal fa-print-slash",
            "7 Project Diagram" => "fas fa-project-diagram",
            "8 Project Diagram" => "far fa-project-diagram",
            "9 Project Diagram" => "fal fa-project-diagram",
            "1 Registered" => "fas fa-registered",
            "2 Registered" => "far fa-registered",
            "3 Registered" => "fal fa-registered",
            "4 Ribbon" => "fas fa-ribbon",
            "5 Ribbon" => "far fa-ribbon",
            "6 Ribbon" => "fal fa-ribbon",
            "7 Route" => "fas fa-route",
            "8 Route" => "far fa-route",
            "9 Route" => "fal fa-route",
            "1 Rv" => "fas fa-rv",
            "2 Rv" => "far fa-rv",
            "3 Rv" => "fal fa-rv",
            "4 Save" => "fas fa-save",
            "5 Save" => "far fa-save",
            "6 Save" => "fal fa-save",
            "7 Seedling" => "fas fa-seedling",
            "8 Seedling" => "far fa-seedling",
            "9 Seedling" => "fal fa-seedling",
            "1 Shish Kebab" => "fas fa-shish-kebab",
            "2 Shish Kebab" => "far fa-shish-kebab",
            "3 Shish Kebab" => "fal fa-shish-kebab",
            "4 Shredder" => "fas fa-shredder",
            "5 Shredder" => "far fa-shredder",
            "6 Shredder" => "fal fa-shredder",
            "7 Sitemap" => "fas fa-sitemap",
            "8 Sitemap" => "far fa-sitemap",
            "9 Sitemap" => "fal fa-sitemap",
            "1 Socks" => "fas fa-socks",
            "2 Socks" => "far fa-socks",
            "3 Socks" => "fal fa-socks",
            "4 Sticky Note" => "fas fa-sticky-note",
            "5 Sticky Note" => "far fa-sticky-note",
            "6 Sticky Note" => "fal fa-sticky-note",
            "7 Stream" => "fas fa-stream",
            "8 Stream" => "far fa-stream",
            "9 Stream" => "fal fa-stream",
            "1 Sunrise" => "fas fa-sunrise",
            "2 Sunrise" => "far fa-sunrise",
            "3 Sunrise" => "fal fa-sunrise",
            "4 Sunset" => "fas fa-sunset",
            "5 Sunset" => "far fa-sunset",
            "6 Sunset" => "fal fa-sunset",
            "7 Table" => "fas fa-table",
            "8 Table" => "far fa-table",
            "9 Table" => "fal fa-table",
            "1 Tag" => "fas fa-tag",
            "2 Tag" => "far fa-tag",
            "3 Tag" => "fal fa-tag",
            "4 Tags" => "fas fa-tags",
            "5 Tags" => "far fa-tags",
            "6 Tags" => "fal fa-tags",
            "7 Tasks" => "fas fa-tasks",
            "8 Tasks" => "far fa-tasks",
            "9 Tasks" => "fal fa-tasks",
            "1 Tasks Alt" => "fas fa-tasks-alt",
            "2 Tasks Alt" => "far fa-tasks-alt",
            "3 Tasks Alt" => "fal fa-tasks-alt",
            "4 Thumbtack" => "fas fa-thumbtack",
            "5 Thumbtack" => "far fa-thumbtack",
            "6 Thumbtack" => "fal fa-thumbtack",
            "7 Toilet Paper" => "fas fa-toilet-paper",
            "8 Toilet Paper" => "far fa-toilet-paper",
            "9 Toilet Paper" => "fal fa-toilet-paper",
            "1 Toilet Paper Alt" => "fas fa-toilet-paper-alt",
            "2 Toilet Paper Alt" => "far fa-toilet-paper-alt",
            "3 Toilet Paper Alt" => "fal fa-toilet-paper-alt",
            "4 Trademark" => "fas fa-trademark",
            "5 Trademark" => "far fa-trademark",
            "6 Trademark" => "fal fa-trademark",
            "7 Tree Large" => "fas fa-tree-large",
            "8 Tree Large" => "far fa-tree-large",
            "9 Tree Large" => "fal fa-tree-large",
            "1 Usd Circle" => "fas fa-usd-circle",
            "2 Usd Circle" => "far fa-usd-circle",
            "3 Usd Circle" => "fal fa-usd-circle",
            "4 Usd Square" => "fas fa-usd-square",
            "5 Usd Square" => "far fa-usd-square",
            "6 Usd Square" => "fal fa-usd-square",
            "7 User Chart" => "fas fa-user-chart",
            "8 User Chart" => "far fa-user-chart",
            "9 User Chart" => "fal fa-user-chart",
            "1 Wallet" => "fas fa-wallet",
            "2 Wallet" => "far fa-wallet",
            "3 Wallet" => "fal fa-wallet",
            "4 At" => "fas fa-at",
            "5 At" => "far fa-at",
            "6 At" => "fal fa-at",
            "7 Baby" => "fas fa-baby",
            "8 Baby" => "far fa-baby",
            "9 Baby" => "fal fa-baby",
            "1 Baby Carriage" => "fas fa-baby-carriage",
            "2 Baby Carriage" => "far fa-baby-carriage",
            "3 Baby Carriage" => "fal fa-baby-carriage",
            "4 Barcode" => "fas fa-barcode",
            "5 Barcode" => "far fa-barcode",
            "6 Barcode" => "fal fa-barcode",
            "7 Baseball" => "fas fa-baseball",
            "8 Baseball" => "far fa-baseball",
            "9 Baseball" => "fal fa-baseball",
            "1 Basketball Hoop" => "fas fa-basketball-hoop",
            "2 Basketball Hoop" => "far fa-basketball-hoop",
            "3 Basketball Hoop" => "fal fa-basketball-hoop",
            "4 Bath" => "fas fa-bath",
            "5 Bath" => "far fa-bath",
            "6 Bath" => "fal fa-bath",
            "7 Bell School" => "fas fa-bell-school",
            "8 Bell School" => "far fa-bell-school",
            "9 Bell School" => "fal fa-bell-school",
            "1 Bluetooth" => "fab fa-bluetooth",
            "2 Bluetooth B" => "fab fa-bluetooth-b",
            "3 Brackets" => "fas fa-brackets",
            "4 Brackets" => "far fa-brackets",
            "5 Brackets" => "fal fa-brackets",
            "6 Brackets Curly" => "fas fa-brackets-curly",
            "7 Brackets Curly" => "far fa-brackets-curly",
            "8 Brackets Curly" => "fal fa-brackets-curly",
            "9 Browser" => "fas fa-browser",
            "1 Browser" => "far fa-browser",
            "2 Browser" => "fal fa-browser",
            "3 Bug" => "fas fa-bug",
            "4 Bug" => "far fa-bug",
            "5 Bug" => "fal fa-bug",
            "6 Chalkboard" => "fas fa-chalkboard",
            "7 Chalkboard" => "far fa-chalkboard",
            "8 Chalkboard" => "fal fa-chalkboard",
            "9 Chess" => "fas fa-chess",
            "1 Chess" => "far fa-chess",
            "2 Chess" => "fal fa-chess",
            "3 Chess Bishop" => "fas fa-chess-bishop",
            "4 Chess Bishop" => "far fa-chess-bishop",
            "5 Chess Bishop" => "fal fa-chess-bishop",
            "6 Chess Bishop Alt" => "fas fa-chess-bishop-alt",
            "7 Chess Bishop Alt" => "far fa-chess-bishop-alt",
            "8 Chess Bishop Alt" => "fal fa-chess-bishop-alt",
            "9 Chess Board" => "fas fa-chess-board",
            "1 Chess Board" => "far fa-chess-board",
            "2 Chess Board" => "fal fa-chess-board",
            "3 Chess Clock" => "fas fa-chess-clock",
            "4 Chess Clock" => "far fa-chess-clock",
            "5 Chess Clock" => "fal fa-chess-clock",
            "6 Chess Clock Alt" => "fas fa-chess-clock-alt",
            "7 Chess Clock Alt" => "far fa-chess-clock-alt",
            "8 Chess Clock Alt" => "fal fa-chess-clock-alt",
            "9 Chess King" => "fas fa-chess-king",
            "1 Chess King" => "far fa-chess-king",
            "2 Chess King" => "fal fa-chess-king",
            "3 Chess King Alt" => "fas fa-chess-king-alt",
            "4 Chess King Alt" => "far fa-chess-king-alt",
            "5 Chess King Alt" => "fal fa-chess-king-alt",
            "6 Chess Knight" => "fas fa-chess-knight",
            "7 Chess Knight" => "far fa-chess-knight",
            "8 Chess Knight" => "fal fa-chess-knight",
            "9 Chess Knight Alt" => "fas fa-chess-knight-alt",
            "1 Chess Knight Alt" => "far fa-chess-knight-alt",
            "2 Chess Knight Alt" => "fal fa-chess-knight-alt",
            "3 Chess Pawn" => "fas fa-chess-pawn",
            "4 Chess Pawn" => "far fa-chess-pawn",
            "5 Chess Pawn" => "fal fa-chess-pawn",
            "6 Chess Pawn Alt" => "fas fa-chess-pawn-alt",
            "7 Chess Pawn Alt" => "far fa-chess-pawn-alt",
            "8 Chess Pawn Alt" => "fal fa-chess-pawn-alt",
            "9 Chess Queen" => "fas fa-chess-queen",
            "1 Chess Queen" => "far fa-chess-queen",
            "2 Chess Queen" => "fal fa-chess-queen",
            "3 Chess Queen Alt" => "fas fa-chess-queen-alt",
            "4 Chess Queen Alt" => "far fa-chess-queen-alt",
            "5 Chess Queen Alt" => "fal fa-chess-queen-alt",
            "6 Chess Rook" => "fas fa-chess-rook",
            "7 Chess Rook" => "far fa-chess-rook",
            "8 Chess Rook" => "fal fa-chess-rook",
            "9 Chess Rook Alt" => "fas fa-chess-rook-alt",
            "1 Chess Rook Alt" => "far fa-chess-rook-alt",
            "2 Chess Rook Alt" => "fal fa-chess-rook-alt",
            "3 Code" => "fas fa-code",
            "4 Code" => "far fa-code",
            "5 Code" => "fal fa-code",
            "6 Code Branch" => "fas fa-code-branch",
            "7 Code Branch" => "far fa-code-branch",
            "8 Code Branch" => "fal fa-code-branch",
            "9 Code Commit" => "fas fa-code-commit",
            "1 Code Commit" => "far fa-code-commit",
            "2 Code Commit" => "fal fa-code-commit",
            "3 Code Merge" => "fas fa-code-merge",
            "4 Code Merge" => "far fa-code-merge",
            "5 Code Merge" => "fal fa-code-merge",
            "6 Comment" => "fas fa-comment",
            "7 Comment" => "far fa-comment",
            "8 Comment" => "fal fa-comment",
            "9 Comment Alt" => "fas fa-comment-alt",
            "1 Comment Alt" => "far fa-comment-alt",
            "2 Comment Alt" => "fal fa-comment-alt",
            "3 Comment Alt Check" => "fas fa-comment-alt-check",
            "4 Comment Alt Check" => "far fa-comment-alt-check",
            "5 Comment Alt Check" => "fal fa-comment-alt-check",
            "6 Comment Alt Dots" => "fas fa-comment-alt-dots",
            "7 Comment Alt Dots" => "far fa-comment-alt-dots",
            "8 Comment Alt Dots" => "fal fa-comment-alt-dots",
            "9 Comment Alt Edit" => "fas fa-comment-alt-edit",
            "1 Comment Alt Edit" => "far fa-comment-alt-edit",
            "2 Comment Alt Edit" => "fal fa-comment-alt-edit",
            "3 Comment Alt Lines" => "fas fa-comment-alt-lines",
            "4 Comment Alt Lines" => "far fa-comment-alt-lines",
            "5 Comment Alt Lines" => "fal fa-comment-alt-lines",
            "6 Comment Alt Medical" => "fas fa-comment-alt-medical",
            "7 Comment Alt Medical" => "far fa-comment-alt-medical",
            "8 Comment Alt Medical" => "fal fa-comment-alt-medical",
            "9 Comment Alt Minus" => "fas fa-comment-alt-minus",
            "1 Comment Alt Minus" => "far fa-comment-alt-minus",
            "2 Comment Alt Minus" => "fal fa-comment-alt-minus",
            "3 Comment Alt Plus" => "fas fa-comment-alt-plus",
            "4 Comment Alt Plus" => "far fa-comment-alt-plus",
            "5 Comment Alt Plus" => "fal fa-comment-alt-plus",
            "6 Comment Alt Slash" => "fas fa-comment-alt-slash",
            "7 Comment Alt Slash" => "far fa-comment-alt-slash",
            "8 Comment Alt Slash" => "fal fa-comment-alt-slash",
            "9 Comment Alt Smile" => "fas fa-comment-alt-smile",
            "1 Comment Alt Smile" => "far fa-comment-alt-smile",
            "2 Comment Alt Smile" => "fal fa-comment-alt-smile",
            "3 Comment Alt Times" => "fas fa-comment-alt-times",
            "4 Comment Alt Times" => "far fa-comment-alt-times",
            "5 Comment Alt Times" => "fal fa-comment-alt-times",
            "6 Comment Check" => "fas fa-comment-check",
            "7 Comment Check" => "far fa-comment-check",
            "8 Comment Check" => "fal fa-comment-check",
            "9 Comment Dots" => "fas fa-comment-dots",
            "1 Comment Dots" => "far fa-comment-dots",
            "2 Comment Dots" => "fal fa-comment-dots",
            "3 Comment Edit" => "fas fa-comment-edit",
            "4 Comment Edit" => "far fa-comment-edit",
            "5 Comment Edit" => "fal fa-comment-edit",
            "6 Comment Lines" => "fas fa-comment-lines",
            "7 Comment Lines" => "far fa-comment-lines",
            "8 Comment Lines" => "fal fa-comment-lines",
            "9 Comment Medical" => "fas fa-comment-medical",
            "1 Comment Medical" => "far fa-comment-medical",
            "2 Comment Medical" => "fal fa-comment-medical",
            "3 Comment Minus" => "fas fa-comment-minus",
            "4 Comment Minus" => "far fa-comment-minus",
            "5 Comment Minus" => "fal fa-comment-minus",
            "6 Comment Plus" => "fas fa-comment-plus",
            "7 Comment Plus" => "far fa-comment-plus",
            "8 Comment Plus" => "fal fa-comment-plus",
            "9 Comment Slash" => "fas fa-comment-slash",
            "1 Comment Slash" => "far fa-comment-slash",
            "2 Comment Slash" => "fal fa-comment-slash",
            "3 Comment Smile" => "fas fa-comment-smile",
            "4 Comment Smile" => "far fa-comment-smile",
            "5 Comment Smile" => "fal fa-comment-smile",
            "6 Comment Times" => "fas fa-comment-times",
            "7 Comment Times" => "far fa-comment-times",
            "8 Comment Times" => "fal fa-comment-times",
            "9 Comments" => "fas fa-comments",
            "1 Comments" => "far fa-comments",
            "2 Comments" => "fal fa-comments",
            "3 Comments Alt" => "fas fa-comments-alt",
            "4 Comments Alt" => "far fa-comments-alt",
            "5 Comments Alt" => "fal fa-comments-alt",
            "6 Cookie" => "fas fa-cookie",
            "7 Cookie" => "far fa-cookie",
            "8 Cookie" => "fal fa-cookie",
            "9 Cookie Bite" => "fas fa-cookie-bite",
            "1 Cookie Bite" => "far fa-cookie-bite",
            "2 Cookie Bite" => "fal fa-cookie-bite",
            "3 Database" => "fas fa-database",
            "4 Database" => "far fa-database",
            "5 Database" => "fal fa-database",
            "6 Desktop" => "fas fa-desktop",
            "7 Desktop" => "far fa-desktop",
            "8 Desktop" => "fal fa-desktop",
            "9 Desktop Alt" => "fas fa-desktop-alt",
            "1 Desktop Alt" => "far fa-desktop-alt",
            "2 Desktop Alt" => "fal fa-desktop-alt",
            "3 Ethernet" => "fas fa-ethernet",
            "4 Ethernet" => "far fa-ethernet",
            "5 Ethernet" => "fal fa-ethernet",
            "6 File Code" => "fas fa-file-code",
            "7 File Code" => "far fa-file-code",
            "8 File Code" => "fal fa-file-code",
            "9 Filter" => "fas fa-filter",
            "1 Filter" => "far fa-filter",
            "2 Filter" => "fal fa-filter",
            "3 Fire Extinguisher" => "fas fa-fire-extinguisher",
            "4 Fire Extinguisher" => "far fa-fire-extinguisher",
            "5 Fire Extinguisher" => "fal fa-fire-extinguisher",
            "6 Frown" => "fas fa-frown",
            "7 Frown" => "far fa-frown",
            "8 Frown" => "fal fa-frown",
            "9 Globe Snow" => "fas fa-globe-snow",
            "1 Globe Snow" => "far fa-globe-snow",
            "2 Globe Snow" => "fal fa-globe-snow",
            "3 Graduation Cap" => "fas fa-graduation-cap",
            "4 Graduation Cap" => "far fa-graduation-cap",
            "5 Graduation Cap" => "fal fa-graduation-cap",
            "6 Hat Santa" => "fas fa-hat-santa",
            "7 Hat Santa" => "far fa-hat-santa",
            "8 Hat Santa" => "fal fa-hat-santa",
            "9 Hat Winter" => "fas fa-hat-winter",
            "1 Hat Winter" => "far fa-hat-winter",
            "2 Hat Winter" => "fal fa-hat-winter",
            "3 Hat Witch" => "fas fa-hat-witch",
            "4 Hat Witch" => "far fa-hat-witch",
            "5 Hat Witch" => "fal fa-hat-witch",
            "6 Hat Wizard" => "fas fa-hat-wizard",
            "7 Hat Wizard" => "far fa-hat-wizard",
            "8 Hat Wizard" => "fal fa-hat-wizard",
            "9 Hdd" => "fas fa-hdd",
            "1 Hdd" => "far fa-hdd",
            "2 Hdd" => "fal fa-hdd",
            "3 Hood Cloak" => "fas fa-hood-cloak",
            "4 Hood Cloak" => "far fa-hood-cloak",
            "5 Hood Cloak" => "fal fa-hood-cloak",
            "6 Ice Cream" => "fas fa-ice-cream",
            "7 Ice Cream" => "far fa-ice-cream",
            "8 Ice Cream" => "fal fa-ice-cream",
            "9 Ice Skate" => "fas fa-ice-skate",
            "1 Ice Skate" => "far fa-ice-skate",
            "2 Ice Skate" => "fal fa-ice-skate",
            "3 Inbox" => "fas fa-inbox",
            "4 Inbox" => "far fa-inbox",
            "5 Inbox" => "fal fa-inbox",
            "6 Keyboard" => "fas fa-keyboard",
            "7 Keyboard" => "far fa-keyboard",
            "8 Keyboard" => "fal fa-keyboard",
            "9 Language" => "fas fa-language",
            "1 Language" => "far fa-language",
            "2 Language" => "fal fa-language",
            "3 Laptop" => "fas fa-laptop",
            "4 Laptop" => "far fa-laptop",
            "5 Laptop" => "fal fa-laptop",
            "6 Laptop Code" => "fas fa-laptop-code",
            "7 Laptop Code" => "far fa-laptop-code",
            "8 Laptop Code" => "fal fa-laptop-code",
            "9 Meh" => "fas fa-meh",
            "1 Meh" => "far fa-meh",
            "2 Meh" => "fal fa-meh",
            "3 Memory" => "fas fa-memory",
            "4 Memory" => "far fa-memory",
            "5 Memory" => "fal fa-memory",
            "6 Microchip" => "fas fa-microchip",
            "7 Microchip" => "far fa-microchip",
            "8 Microchip" => "fal fa-microchip",
            "9 Mitten" => "fas fa-mitten",
            "1 Mitten" => "far fa-mitten",
            "2 Mitten" => "fal fa-mitten",
            "3 Mobile" => "fas fa-mobile",
            "4 Mobile" => "far fa-mobile",
            "5 Mobile" => "fal fa-mobile",
            "6 Mobile Alt" => "fas fa-mobile-alt",
            "7 Mobile Alt" => "far fa-mobile-alt",
            "8 Mobile Alt" => "fal fa-mobile-alt",
            "9 Mobile Android" => "fas fa-mobile-android",
            "1 Mobile Android" => "far fa-mobile-android",
            "2 Mobile Android" => "fal fa-mobile-android",
            "3 Mobile Android Alt" => "fas fa-mobile-android-alt",
            "4 Mobile Android Alt" => "far fa-mobile-android-alt",
            "5 Mobile Android Alt" => "fal fa-mobile-android-alt",
            "6 Paper Plane" => "fas fa-paper-plane",
            "7 Paper Plane" => "far fa-paper-plane",
            "8 Paper Plane" => "fal fa-paper-plane",
            "9 Phone Plus" => "fas fa-phone-plus",
            "1 Phone Plus" => "far fa-phone-plus",
            "2 Phone Plus" => "fal fa-phone-plus",
            "3 Plug" => "fas fa-plug",
            "4 Plug" => "far fa-plug",
            "5 Plug" => "fal fa-plug",
            "6 Poo" => "fas fa-poo",
            "7 Poo" => "far fa-poo",
            "8 Poo" => "fal fa-poo",
            "9 Power Off" => "fas fa-power-off",
            "1 Power Off" => "far fa-power-off",
            "2 Power Off" => "fal fa-power-off",
            "3 Qrcode" => "fas fa-qrcode",
            "4 Qrcode" => "far fa-qrcode",
            "5 Qrcode" => "fal fa-qrcode",
            "6 Quote Left" => "fas fa-quote-left",
            "7 Quote Left" => "far fa-quote-left",
            "8 Quote Left" => "fal fa-quote-left",
            "9 Quote Right" => "fas fa-quote-right",
            "1 Quote Right" => "far fa-quote-right",
            "2 Quote Right" => "fal fa-quote-right",
            "3 Robot" => "fas fa-robot",
            "4 Robot" => "far fa-robot",
            "5 Robot" => "fal fa-robot",
            "6 Satellite" => "fas fa-satellite",
            "7 Satellite" => "far fa-satellite",
            "8 Satellite" => "fal fa-satellite",
            "9 Satellite Dish" => "fas fa-satellite-dish",
            "1 Satellite Dish" => "far fa-satellite-dish",
            "2 Satellite Dish" => "fal fa-satellite-dish",
            "3 Scarf" => "fas fa-scarf",
            "4 Scarf" => "far fa-scarf",
            "5 Scarf" => "fal fa-scarf",
            "6 Sd Card" => "fas fa-sd-card",
            "7 Sd Card" => "far fa-sd-card",
            "8 Sd Card" => "fal fa-sd-card",
            "9 Server" => "fas fa-server",
            "1 Server" => "far fa-server",
            "2 Server" => "fal fa-server",
            "3 Shapes" => "fas fa-shapes",
            "4 Shapes" => "far fa-shapes",
            "5 Shapes" => "fal fa-shapes",
            "6 Shield" => "fas fa-shield",
            "7 Shield" => "far fa-shield",
            "8 Shield" => "fal fa-shield",
            "9 Shield Alt" => "fas fa-shield-alt",
            "1 Shield Alt" => "far fa-shield-alt",
            "2 Shield Alt" => "fal fa-shield-alt",
            "3 Shield Check" => "fas fa-shield-check",
            "4 Shield Check" => "far fa-shield-check",
            "5 Shield Check" => "fal fa-shield-check",
            "6 Shoe Prints" => "fas fa-shoe-prints",
            "7 Shoe Prints" => "far fa-shoe-prints",
            "8 Shoe Prints" => "fal fa-shoe-prints",
            "9 Sim Card" => "fas fa-sim-card",
            "1 Sim Card" => "far fa-sim-card",
            "2 Sim Card" => "fal fa-sim-card",
            "3 Smile" => "fas fa-smile",
            "4 Smile" => "far fa-smile",
            "5 Smile" => "fal fa-smile",
            "6 Smile Plus" => "fas fa-smile-plus",
            "7 Smile Plus" => "far fa-smile-plus",
            "8 Smile Plus" => "fal fa-smile-plus",
            "9 Sms" => "fas fa-sms",
            "1 Sms" => "far fa-sms",
            "2 Sms" => "fal fa-sms",
            "3 Snowman" => "fas fa-snowman",
            "4 Snowman" => "far fa-snowman",
            "5 Snowman" => "fal fa-snowman",
            "6 Square Full" => "fas fa-square-full",
            "7 Square Full" => "far fa-square-full",
            "8 Square Full" => "fal fa-square-full",
            "9 Stocking" => "fas fa-stocking",
            "1 Stocking" => "far fa-stocking",
            "2 Stocking" => "fal fa-stocking",
            "3 Tablet" => "fas fa-tablet",
            "4 Tablet" => "far fa-tablet",
            "5 Tablet" => "fal fa-tablet",
            "6 Tablet Alt" => "fas fa-tablet-alt",
            "7 Tablet Alt" => "far fa-tablet-alt",
            "8 Tablet Alt" => "fal fa-tablet-alt",
            "9 Tablet Android" => "fas fa-tablet-android",
            "1 Tablet Android" => "far fa-tablet-android",
            "2 Tablet Android" => "fal fa-tablet-android",
            "3 Tablet Android Alt" => "fas fa-tablet-android-alt",
            "4 Tablet Android Alt" => "far fa-tablet-android-alt",
            "5 Tablet Android Alt" => "fal fa-tablet-android-alt",
            "6 Terminal" => "fas fa-terminal",
            "7 Terminal" => "far fa-terminal",
            "8 Terminal" => "fal fa-terminal",
            "9 Tshirt" => "fas fa-tshirt",
            "1 Tshirt" => "far fa-tshirt",
            "2 Tshirt" => "fal fa-tshirt",
            "3 Tv" => "fas fa-tv",
            "4 Tv" => "far fa-tv",
            "5 Tv" => "fal fa-tv",
            "6 Tv Retro" => "fas fa-tv-retro",
            "7 Tv Retro" => "far fa-tv-retro",
            "8 Tv Retro" => "fal fa-tv-retro",
            "9 User Secret" => "fas fa-user-secret",
            "1 User Secret" => "far fa-user-secret",
            "2 User Secret" => "fal fa-user-secret",
            "3 User Tie" => "fas fa-user-tie",
            "4 User Tie" => "far fa-user-tie",
            "5 User Tie" => "fal fa-user-tie",
            "6 Video Plus" => "fas fa-video-plus",
            "7 Video Plus" => "far fa-video-plus",
            "8 Video Plus" => "fal fa-video-plus",
            "9 Video Slash" => "fas fa-video-slash",
            "1 Video Slash" => "far fa-video-slash",
            "2 Video Slash" => "fal fa-video-slash",
            "3 Wifi" => "fas fa-wifi",
            "4 Wifi" => "far fa-wifi",
            "5 Wifi" => "fal fa-wifi",
            "6 Window" => "fas fa-window",
            "7 Window" => "far fa-window",
            "8 Window" => "fal fa-window",
            "9 Window Alt" => "fas fa-window-alt",
            "1 Window Alt" => "far fa-window-alt",
            "2 Window Alt" => "fal fa-window-alt",
            "3 Window Close" => "fas fa-window-close",
            "4 Window Close" => "far fa-window-close",
            "5 Window Close" => "fal fa-window-close",
            "6 Window Maximize" => "fas fa-window-maximize",
            "7 Window Maximize" => "far fa-window-maximize",
            "8 Window Maximize" => "fal fa-window-maximize",
            "9 Window Minimize" => "fas fa-window-minimize",
            "1 Window Minimize" => "far fa-window-minimize",
            "2 Window Minimize" => "fal fa-window-minimize",
            "3 Window Restore" => "fas fa-window-restore",
            "4 Window Restore" => "far fa-window-restore",
            "5 Window Restore" => "fal fa-window-restore",
            "6 Adjust" => "fas fa-adjust",
            "7 Adjust" => "far fa-adjust",
            "8 Adjust" => "fal fa-adjust",
            "9 Alarm Clock" => "fas fa-alarm-clock",
            "1 Alarm Clock" => "far fa-alarm-clock",
            "2 Alarm Clock" => "fal fa-alarm-clock",
            "3 Align Center" => "fas fa-align-center",
            "4 Align Center" => "far fa-align-center",
            "5 Align Center" => "fal fa-align-center",
            "6 Align Justify" => "fas fa-align-justify",
            "7 Align Justify" => "far fa-align-justify",
            "8 Align Justify" => "fal fa-align-justify",
            "9 Align Left" => "fas fa-align-left",
            "1 Align Left" => "far fa-align-left",
            "2 Align Left" => "fal fa-align-left",
            "3 Align Right" => "fas fa-align-right",
            "4 Align Right" => "far fa-align-right",
            "5 Align Right" => "fal fa-align-right",
            "6 Atom" => "fas fa-atom",
            "7 Atom" => "far fa-atom",
            "8 Atom" => "fal fa-atom",
            "9 Atom Alt" => "fas fa-atom-alt",
            "1 Atom Alt" => "far fa-atom-alt",
            "2 Atom Alt" => "fal fa-atom-alt",
            "3 Award" => "fas fa-award",
            "4 Award" => "far fa-award",
            "5 Award" => "fal fa-award",
            "6 Bezier Curve" => "fas fa-bezier-curve",
            "7 Bezier Curve" => "far fa-bezier-curve",
            "8 Bezier Curve" => "fal fa-bezier-curve",
            "9 Bitcoin" => "fab fa-bitcoin",
            "1 Bold" => "fas fa-bold",
            "2 Bold" => "far fa-bold",
            "3 Bold" => "fal fa-bold",
            "4 Book Alt" => "fas fa-book-alt",
            "5 Book Alt" => "far fa-book-alt",
            "6 Book Alt" => "fal fa-book-alt",
            "7 Book Open" => "fas fa-book-open",
            "8 Book Open" => "far fa-book-open",
            "9 Book Open" => "fal fa-book-open",
            "1 Book Reader" => "fas fa-book-reader",
            "2 Book Reader" => "far fa-book-reader",
            "3 Book Reader" => "fal fa-book-reader",
            "4 Books" => "fas fa-books",
            "5 Books" => "far fa-books",
            "6 Books" => "fal fa-books",
            "7 Brush" => "fas fa-brush",
            "8 Brush" => "far fa-brush",
            "9 Brush" => "fal fa-brush",
            "1 Btc" => "fab fa-btc",
            "2 Bus School" => "fas fa-bus-school",
            "3 Bus School" => "far fa-bus-school",
            "4 Bus School" => "fal fa-bus-school",
            "5 Calendar Check" => "fas fa-calendar-check",
            "6 Calendar Check" => "far fa-calendar-check",
            "7 Calendar Check" => "fal fa-calendar-check",
            "8 Calendar Edit" => "fas fa-calendar-edit",
            "9 Calendar Edit" => "far fa-calendar-edit",
            "1 Calendar Edit" => "fal fa-calendar-edit",
            "2 Calendar Minus" => "fas fa-calendar-minus",
            "3 Calendar Minus" => "far fa-calendar-minus",
            "4 Calendar Minus" => "fal fa-calendar-minus",
            "5 Calendar Plus" => "fas fa-calendar-plus",
            "6 Calendar Plus" => "far fa-calendar-plus",
            "7 Calendar Plus" => "fal fa-calendar-plus",
            "8 Calendar Times" => "fas fa-calendar-times",
            "9 Calendar Times" => "far fa-calendar-times",
            "1 Calendar Times" => "fal fa-calendar-times",
            "2 Chalkboard Teacher" => "fas fa-chalkboard-teacher",
            "3 Chalkboard Teacher" => "far fa-chalkboard-teacher",
            "4 Chalkboard Teacher" => "fal fa-chalkboard-teacher",
            "5 Clock" => "fas fa-clock",
            "6 Clock" => "far fa-clock",
            "7 Clock" => "fal fa-clock",
            "8 Clone" => "fas fa-clone",
            "9 Clone" => "far fa-clone",
            "1 Clone" => "fal fa-clone",
            "2 Crop" => "fas fa-crop",
            "3 Crop" => "far fa-crop",
            "4 Crop" => "fal fa-crop",
            "5 Crop Alt" => "fas fa-crop-alt",
            "6 Crop Alt" => "far fa-crop-alt",
            "7 Crop Alt" => "fal fa-crop-alt",
            "8 Crosshairs" => "fas fa-crosshairs",
            "9 Crosshairs" => "far fa-crosshairs",
            "1 Crosshairs" => "fal fa-crosshairs",
            "2 Diploma" => "fas fa-diploma",
            "3 Diploma" => "far fa-diploma",
            "4 Diploma" => "fal fa-diploma",
            "5 Drafting Compass" => "fas fa-drafting-compass",
            "6 Drafting Compass" => "far fa-drafting-compass",
            "7 Drafting Compass" => "fal fa-drafting-compass",
            "8 Draw Circle" => "fas fa-draw-circle",
            "9 Draw Circle" => "far fa-draw-circle",
            "1 Draw Circle" => "fal fa-draw-circle",
            "2 Draw Polygon" => "fas fa-draw-polygon",
            "3 Draw Polygon" => "far fa-draw-polygon",
            "4 Draw Polygon" => "fal fa-draw-polygon",
            "5 Draw Square" => "fas fa-draw-square",
            "6 Draw Square" => "far fa-draw-square",
            "7 Draw Square" => "fal fa-draw-square",
            "8 Dumpster" => "fas fa-dumpster",
            "9 Dumpster" => "far fa-dumpster",
            "1 Dumpster" => "fal fa-dumpster",
            "2 Ethereum" => "fab fa-ethereum",
            "3 Euro Sign" => "fas fa-euro-sign",
            "4 Euro Sign" => "far fa-euro-sign",
            "5 Euro Sign" => "fal fa-euro-sign",
            "6 Eye" => "fas fa-eye",
            "7 Eye" => "far fa-eye",
            "8 Eye" => "fal fa-eye",
            "9 Eye Dropper" => "fas fa-eye-dropper",
            "1 Eye Dropper" => "far fa-eye-dropper",
            "2 Eye Dropper" => "fal fa-eye-dropper",
            "3 Eye Slash" => "fas fa-eye-slash",
            "4 Eye Slash" => "far fa-eye-slash",
            "5 Eye Slash" => "fal fa-eye-slash",
            "6 File Certificate" => "fas fa-file-certificate",
            "7 File Certificate" => "far fa-file-certificate",
            "8 File Certificate" => "fal fa-file-certificate",
            "9 Fill" => "fas fa-fill",
            "1 Fill" => "far fa-fill",
            "2 Fill" => "fal fa-fill",
            "3 Fill Drip" => "fas fa-fill-drip",
            "4 Fill Drip" => "far fa-fill-drip",
            "5 Fill Drip" => "fal fa-fill-drip",
            "6 Font" => "fas fa-font",
            "7 Font" => "far fa-font",
            "8 Font" => "fal fa-font",
            "9 Forklift" => "fas fa-forklift",
            "1 Forklift" => "far fa-forklift",
            "2 Forklift" => "fal fa-forklift",
            "3 Gg" => "fab fa-gg",
            "4 Gg Circle" => "fab fa-gg-circle",
            "5 Glasses Alt" => "fas fa-glasses-alt",
            "6 Glasses Alt" => "far fa-glasses-alt",
            "7 Glasses Alt" => "fal fa-glasses-alt",
            "8 Globe Stand" => "fas fa-globe-stand",
            "9 Globe Stand" => "far fa-globe-stand",
            "1 Globe Stand" => "fal fa-globe-stand",
            "2 H1" => "fas fa-h1",
            "3 H1" => "far fa-h1",
            "4 H1" => "fal fa-h1",
            "5 H2" => "fas fa-h2",
            "6 H2" => "far fa-h2",
            "7 H2" => "fal fa-h2",
            "8 H3" => "fas fa-h3",
            "9 H3" => "far fa-h3",
            "1 H3" => "fal fa-h3",
            "2 Hammer" => "fas fa-hammer",
            "3 Hammer" => "far fa-hammer",
            "4 Hammer" => "fal fa-hammer",
            "5 Hard Hat" => "fas fa-hard-hat",
            "6 Hard Hat" => "far fa-hard-hat",
            "7 Hard Hat" => "fal fa-hard-hat",
            "8 Heading" => "fas fa-heading",
            "9 Heading" => "far fa-heading",
            "1 Heading" => "fal fa-heading",
            "2 Hourglass" => "fas fa-hourglass",
            "3 Hourglass" => "far fa-hourglass",
            "4 Hourglass" => "fal fa-hourglass",
            "5 Hourglass End" => "fas fa-hourglass-end",
            "6 Hourglass End" => "far fa-hourglass-end",
            "7 Hourglass End" => "fal fa-hourglass-end",
            "8 Hourglass Half" => "fas fa-hourglass-half",
            "9 Hourglass Half" => "far fa-hourglass-half",
            "1 Hourglass Half" => "fal fa-hourglass-half",
            "2 Hourglass Start" => "fas fa-hourglass-start",
            "3 Hourglass Start" => "far fa-hourglass-start",
            "4 Hourglass Start" => "fal fa-hourglass-start",
            "5 Hryvnia" => "fas fa-hryvnia",
            "6 Hryvnia" => "far fa-hryvnia",
            "7 Hryvnia" => "fal fa-hryvnia",
            "8 I Cursor" => "fas fa-i-cursor",
            "9 I Cursor" => "far fa-i-cursor",
            "1 I Cursor" => "fal fa-i-cursor",
            "2 Indent" => "fas fa-indent",
            "3 Indent" => "far fa-indent",
            "4 Indent" => "fal fa-indent",
            "5 Italic" => "fas fa-italic",
            "6 Italic" => "far fa-italic",
            "7 Italic" => "fal fa-italic",
            "8 Layer Group" => "fas fa-layer-group",
            "9 Layer Group" => "far fa-layer-group",
            "1 Layer Group" => "fal fa-layer-group",
            "2 Layer Minus" => "fas fa-layer-minus",
            "3 Layer Minus" => "far fa-layer-minus",
            "4 Layer Minus" => "fal fa-layer-minus",
            "5 Layer Plus" => "fas fa-layer-plus",
            "6 Layer Plus" => "far fa-layer-plus",
            "7 Layer Plus" => "fal fa-layer-plus",
            "8 Link" => "fas fa-link",
            "9 Link" => "far fa-link",
            "1 Link" => "fal fa-link",
            "2 Lira Sign" => "fas fa-lira-sign",
            "3 Lira Sign" => "far fa-lira-sign",
            "4 Lira Sign" => "fal fa-lira-sign",
            "5 List" => "fas fa-list",
            "6 List" => "far fa-list",
            "7 List" => "fal fa-list",
            "8 List Alt" => "fas fa-list-alt",
            "9 List Alt" => "far fa-list-alt",
            "1 List Alt" => "fal fa-list-alt",
            "2 List Ol" => "fas fa-list-ol",
            "3 List Ol" => "far fa-list-ol",
            "4 List Ol" => "fal fa-list-ol",
            "5 List Ul" => "fas fa-list-ul",
            "6 List Ul" => "far fa-list-ul",
            "7 List Ul" => "fal fa-list-ul",
            "8 Magic" => "fas fa-magic",
            "9 Magic" => "far fa-magic",
            "1 Magic" => "fal fa-magic",
            "2 Microscope" => "fas fa-microscope",
            "3 Microscope" => "far fa-microscope",
            "4 Microscope" => "fal fa-microscope",
            "5 Money Bill" => "fas fa-money-bill",
            "6 Money Bill" => "far fa-money-bill",
            "7 Money Bill" => "fal fa-money-bill",
            "8 Money Bill Alt" => "fas fa-money-bill-alt",
            "9 Money Bill Alt" => "far fa-money-bill-alt",
            "1 Money Bill Alt" => "fal fa-money-bill-alt",
            "2 Money Bill Wave" => "fas fa-money-bill-wave",
            "3 Money Bill Wave" => "far fa-money-bill-wave",
            "4 Money Bill Wave" => "fal fa-money-bill-wave",
            "5 Money Bill Wave Alt" => "fas fa-money-bill-wave-alt",
            "6 Money Bill Wave Alt" => "far fa-money-bill-wave-alt",
            "7 Money Bill Wave Alt" => "fal fa-money-bill-wave-alt",
            "8 Money Check" => "fas fa-money-check",
            "9 Money Check" => "far fa-money-check",
            "1 Money Check" => "fal fa-money-check",
            "2 Money Check Alt" => "fas fa-money-check-alt",
            "3 Money Check Alt" => "far fa-money-check-alt",
            "4 Money Check Alt" => "fal fa-money-check-alt",
            "5 Object Group" => "fas fa-object-group",
            "6 Object Group" => "far fa-object-group",
            "7 Object Group" => "fal fa-object-group",
            "8 Object Ungroup" => "fas fa-object-ungroup",
            "9 Object Ungroup" => "far fa-object-ungroup",
            "1 Object Ungroup" => "fal fa-object-ungroup",
            "2 Outdent" => "fas fa-outdent",
            "3 Outdent" => "far fa-outdent",
            "4 Outdent" => "fal fa-outdent",
            "5 Paint Brush" => "fas fa-paint-brush",
            "6 Paint Brush" => "far fa-paint-brush",
            "7 Paint Brush" => "fal fa-paint-brush",
            "8 Paint Brush Alt" => "fas fa-paint-brush-alt",
            "9 Paint Brush Alt" => "far fa-paint-brush-alt",
            "1 Paint Brush Alt" => "fal fa-paint-brush-alt",
            "2 Paint Roller" => "fas fa-paint-roller",
            "3 Paint Roller" => "far fa-paint-roller",
            "4 Paint Roller" => "fal fa-paint-roller",
            "5 Palette" => "fas fa-palette",
            "6 Palette" => "far fa-palette",
            "7 Palette" => "fal fa-palette",
            "8 Paragraph" => "fas fa-paragraph",
            "9 Paragraph" => "far fa-paragraph",
            "1 Paragraph" => "fal fa-paragraph",
            "2 Pencil Paintbrush" => "fas fa-pencil-paintbrush",
            "3 Pencil Paintbrush" => "far fa-pencil-paintbrush",
            "4 Pencil Paintbrush" => "fal fa-pencil-paintbrush",
            "5 Pencil Ruler" => "fas fa-pencil-ruler",
            "6 Pencil Ruler" => "far fa-pencil-ruler",
            "7 Pencil Ruler" => "fal fa-pencil-ruler",
            "8 Pound Sign" => "fas fa-pound-sign",
            "9 Pound Sign" => "far fa-pound-sign",
            "1 Pound Sign" => "fal fa-pound-sign",
            "2 Ruble Sign" => "fas fa-ruble-sign",
            "3 Ruble Sign" => "far fa-ruble-sign",
            "4 Ruble Sign" => "fal fa-ruble-sign",
            "5 Ruler" => "fas fa-ruler",
            "6 Ruler" => "far fa-ruler",
            "7 Ruler" => "fal fa-ruler",
            "8 Ruler Combined" => "fas fa-ruler-combined",
            "9 Ruler Combined" => "far fa-ruler-combined",
            "1 Ruler Combined" => "fal fa-ruler-combined",
            "2 Ruler Horizontal" => "fas fa-ruler-horizontal",
            "3 Ruler Horizontal" => "far fa-ruler-horizontal",
            "4 Ruler Horizontal" => "fal fa-ruler-horizontal",
            "5 Ruler Triangle" => "fas fa-ruler-triangle",
            "6 Ruler Triangle" => "far fa-ruler-triangle",
            "7 Ruler Triangle" => "fal fa-ruler-triangle",
            "8 Ruler Vertical" => "fas fa-ruler-vertical",
            "9 Ruler Vertical" => "far fa-ruler-vertical",
            "1 Ruler Vertical" => "fal fa-ruler-vertical",
            "2 Rupee Sign" => "fas fa-rupee-sign",
            "3 Rupee Sign" => "far fa-rupee-sign",
            "4 Rupee Sign" => "fal fa-rupee-sign",
            "5 Sack" => "fas fa-sack",
            "6 Sack" => "far fa-sack",
            "7 Sack" => "fal fa-sack",
            "8 Sack Dollar" => "fas fa-sack-dollar",
            "9 Sack Dollar" => "far fa-sack-dollar",
            "1 Sack Dollar" => "fal fa-sack-dollar",
            "2 Screwdriver" => "fas fa-screwdriver",
            "3 Screwdriver" => "far fa-screwdriver",
            "4 Screwdriver" => "fal fa-screwdriver",
            "5 Shekel Sign" => "fas fa-shekel-sign",
            "6 Shekel Sign" => "far fa-shekel-sign",
            "7 Shekel Sign" => "fal fa-shekel-sign",
            "8 Splotch" => "fas fa-splotch",
            "9 Splotch" => "far fa-splotch",
            "1 Splotch" => "fal fa-splotch",
            "2 Spray Can" => "fas fa-spray-can",
            "3 Spray Can" => "far fa-spray-can",
            "4 Spray Can" => "fal fa-spray-can",
            "5 Stamp" => "fas fa-stamp",
            "6 Stamp" => "far fa-stamp",
            "7 Stamp" => "fal fa-stamp",
            "8 Stopwatch" => "fas fa-stopwatch",
            "9 Stopwatch" => "far fa-stopwatch",
            "1 Stopwatch" => "fal fa-stopwatch",
            "2 Strikethrough" => "fas fa-strikethrough",
            "3 Strikethrough" => "far fa-strikethrough",
            "4 Strikethrough" => "fal fa-strikethrough",
            "5 Subscript" => "fas fa-subscript",
            "6 Subscript" => "far fa-subscript",
            "7 Subscript" => "fal fa-subscript",
            "8 Superscript" => "fas fa-superscript",
            "9 Superscript" => "far fa-superscript",
            "1 Superscript" => "fal fa-superscript",
            "2 Swatchbook" => "fas fa-swatchbook",
            "3 Swatchbook" => "far fa-swatchbook",
            "4 Swatchbook" => "fal fa-swatchbook",
            "5 Tenge" => "fas fa-tenge",
            "6 Tenge" => "far fa-tenge",
            "7 Tenge" => "fal fa-tenge",
            "8 Th" => "fas fa-th",
            "9 Th" => "far fa-th",
            "1 Th" => "fal fa-th",
            "2 Th Large" => "fas fa-th-large",
            "3 Th Large" => "far fa-th-large",
            "4 Th Large" => "fal fa-th-large",
            "5 Th List" => "fas fa-th-list",
            "6 Th List" => "far fa-th-list",
            "7 Th List" => "fal fa-th-list",
            "8 Theater Masks" => "fas fa-theater-masks",
            "9 Theater Masks" => "far fa-theater-masks",
            "1 Theater Masks" => "fal fa-theater-masks",
            "2 Tint" => "fas fa-tint",
            "3 Tint" => "far fa-tint",
            "4 Tint" => "fal fa-tint",
            "5 Tint Slash" => "fas fa-tint-slash",
            "6 Tint Slash" => "far fa-tint-slash",
            "7 Tint Slash" => "fal fa-tint-slash",
            "8 Toolbox" => "fas fa-toolbox",
            "9 Toolbox" => "far fa-toolbox",
            "1 Toolbox" => "fal fa-toolbox",
            "2 Tools" => "fas fa-tools",
            "3 Tools" => "far fa-tools",
            "4 Tools" => "fal fa-tools",
            "5 Traffic Cone" => "fas fa-traffic-cone",
            "6 Traffic Cone" => "far fa-traffic-cone",
            "7 Traffic Cone" => "fal fa-traffic-cone",
            "8 Trash" => "fas fa-trash",
            "9 Trash" => "far fa-trash",
            "1 Trash" => "fal fa-trash",
            "2 Trash Alt" => "fas fa-trash-alt",
            "3 Trash Alt" => "far fa-trash-alt",
            "4 Trash Alt" => "fal fa-trash-alt",
            "5 Trash Restore" => "fas fa-trash-restore",
            "6 Trash Restore" => "far fa-trash-restore",
            "7 Trash Restore" => "fal fa-trash-restore",
            "8 Trash Restore Alt" => "fas fa-trash-restore-alt",
            "9 Trash Restore Alt" => "far fa-trash-restore-alt",
            "1 Trash Restore Alt" => "fal fa-trash-restore-alt",
            "2 Truck Container" => "fas fa-truck-container",
            "3 Truck Container" => "far fa-truck-container",
            "4 Truck Container" => "fal fa-truck-container",
            "5 Underline" => "fas fa-underline",
            "6 Underline" => "far fa-underline",
            "7 Underline" => "fal fa-underline",
            "8 Unlink" => "fas fa-unlink",
            "9 Unlink" => "far fa-unlink",
            "1 Unlink" => "fal fa-unlink",
            "2 User Graduate" => "fas fa-user-graduate",
            "3 User Graduate" => "far fa-user-graduate",
            "4 User Graduate" => "fal fa-user-graduate",
            "5 User Hard Hat" => "fas fa-user-hard-hat",
            "6 User Hard Hat" => "far fa-user-hard-hat",
            "7 User Hard Hat" => "fal fa-user-hard-hat",
            "8 Users Class" => "fas fa-users-class",
            "9 Users Class" => "far fa-users-class",
            "1 Users Class" => "fal fa-users-class",
            "2 Vector Square" => "fas fa-vector-square",
            "3 Vector Square" => "far fa-vector-square",
            "4 Vector Square" => "fal fa-vector-square",
            "5 Watch" => "fas fa-watch",
            "6 Watch" => "far fa-watch",
            "7 Watch" => "fal fa-watch",
            "8 Won Sign" => "fas fa-won-sign",
            "9 Won Sign" => "far fa-won-sign",
            "1 Won Sign" => "fal fa-won-sign",
            "2 Wrench" => "fas fa-wrench",
            "3 Wrench" => "far fa-wrench",
            "4 Wrench" => "fal fa-wrench",
            "5 Yen Sign" => "fas fa-yen-sign",
            "6 Yen Sign" => "far fa-yen-sign",
            "7 Yen Sign" => "fal fa-yen-sign",
            "8 Analytics" => "fas fa-analytics",
            "9 Analytics" => "far fa-analytics",
            "1 Analytics" => "fal fa-analytics",
            "2 Angry" => "fas fa-angry",
            "3 Angry" => "far fa-angry",
            "4 Angry" => "fal fa-angry",
            "5 Bacon" => "fas fa-bacon",
            "6 Bacon" => "far fa-bacon",
            "7 Bacon" => "fal fa-bacon",
            "8 Battery Bolt" => "fas fa-battery-bolt",
            "9 Battery Bolt" => "far fa-battery-bolt",
            "1 Battery Bolt" => "fal fa-battery-bolt",
            "2 Battery Empty" => "fas fa-battery-empty",
            "3 Battery Empty" => "far fa-battery-empty",
            "4 Battery Empty" => "fal fa-battery-empty",
            "5 Battery Full" => "fas fa-battery-full",
            "6 Battery Full" => "far fa-battery-full",
            "7 Battery Full" => "fal fa-battery-full",
            "8 Battery Half" => "fas fa-battery-half",
            "9 Battery Half" => "far fa-battery-half",
            "1 Battery Half" => "fal fa-battery-half",
            "2 Battery Quarter" => "fas fa-battery-quarter",
            "3 Battery Quarter" => "far fa-battery-quarter",
            "4 Battery Quarter" => "fal fa-battery-quarter",
            "5 Battery Slash" => "fas fa-battery-slash",
            "6 Battery Slash" => "far fa-battery-slash",
            "7 Battery Slash" => "fal fa-battery-slash",
            "8 Battery Three Quarters" => "fas fa-battery-three-quarters",
            "9 Battery Three Quarters" => "far fa-battery-three-quarters",
            "1 Battery Three Quarters" => "fal fa-battery-three-quarters",
            "2 Bicycle" => "fas fa-bicycle",
            "3 Bicycle" => "far fa-bicycle",
            "4 Bicycle" => "fal fa-bicycle",
            "5 Bone" => "fas fa-bone",
            "6 Bone" => "far fa-bone",
            "7 Bone" => "fal fa-bone",
            "8 Bread Loaf" => "fas fa-bread-loaf",
            "9 Bread Loaf" => "far fa-bread-loaf",
            "1 Bread Loaf" => "fal fa-bread-loaf",
            "2 Bread Slice" => "fas fa-bread-slice",
            "3 Bread Slice" => "far fa-bread-slice",
            "4 Bread Slice" => "fal fa-bread-slice",
            "5 Burn" => "fas fa-burn",
            "6 Burn" => "far fa-burn",
            "7 Burn" => "fal fa-burn",
            "8 Burrito" => "fas fa-burrito",
            "9 Burrito" => "far fa-burrito",
            "1 Burrito" => "fal fa-burrito",
            "2 Candy Cane" => "fas fa-candy-cane",
            "3 Candy Cane" => "far fa-candy-cane",
            "4 Candy Cane" => "fal fa-candy-cane",
            "5 Candy Corn" => "fas fa-candy-corn",
            "6 Candy Corn" => "far fa-candy-corn",
            "7 Candy Corn" => "fal fa-candy-corn",
            "8 Carrot" => "fas fa-carrot",
            "9 Carrot" => "far fa-carrot",
            "1 Carrot" => "fal fa-carrot",
            "2 Cash Register" => "fas fa-cash-register",
            "3 Cash Register" => "far fa-cash-register",
            "4 Cash Register" => "fal fa-cash-register",
            "5 Cheese" => "fas fa-cheese",
            "6 Cheese" => "far fa-cheese",
            "7 Cheese" => "fal fa-cheese",
            "8 Cheese Swiss" => "fas fa-cheese-swiss",
            "9 Cheese Swiss" => "far fa-cheese-swiss",
            "1 Cheese Swiss" => "fal fa-cheese-swiss",
            "2 Cheeseburger" => "fas fa-cheeseburger",
            "3 Cheeseburger" => "far fa-cheeseburger",
            "4 Cheeseburger" => "fal fa-cheeseburger",
            "5 Cloud Meatball" => "fas fa-cloud-meatball",
            "6 Cloud Meatball" => "far fa-cloud-meatball",
            "7 Cloud Meatball" => "fal fa-cloud-meatball",
            "8 Coins" => "fas fa-coins",
            "9 Coins" => "far fa-coins",
            "1 Coins" => "fal fa-coins",
            "2 Comment Alt Dollar" => "fas fa-comment-alt-dollar",
            "3 Comment Alt Dollar" => "far fa-comment-alt-dollar",
            "4 Comment Alt Dollar" => "fal fa-comment-alt-dollar",
            "5 Comment Dollar" => "fas fa-comment-dollar",
            "6 Comment Dollar" => "far fa-comment-dollar",
            "7 Comment Dollar" => "fal fa-comment-dollar",
            "8 Comments Alt Dollar" => "fas fa-comments-alt-dollar",
            "9 Comments Alt Dollar" => "far fa-comments-alt-dollar",
            "1 Comments Alt Dollar" => "fal fa-comments-alt-dollar",
            "2 Comments Dollar" => "fas fa-comments-dollar",
            "3 Comments Dollar" => "far fa-comments-dollar",
            "4 Comments Dollar" => "fal fa-comments-dollar",
            "5 Credit Card" => "fas fa-credit-card",
            "6 Credit Card" => "far fa-credit-card",
            "7 Credit Card" => "fal fa-credit-card",
            "8 Credit Card Blank" => "fas fa-credit-card-blank",
            "9 Credit Card Blank" => "far fa-credit-card-blank",
            "1 Credit Card Blank" => "fal fa-credit-card-blank",
            "2 Credit Card Front" => "fas fa-credit-card-front",
            "3 Credit Card Front" => "far fa-credit-card-front",
            "4 Credit Card Front" => "fal fa-credit-card-front",
            "5 Croissant" => "fas fa-croissant",
            "6 Croissant" => "far fa-croissant",
            "7 Croissant" => "fal fa-croissant",
            "8 Dizzy" => "fas fa-dizzy",
            "9 Dizzy" => "far fa-dizzy",
            "1 Dizzy" => "fal fa-dizzy",
            "2 Egg" => "fas fa-egg",
            "3 Egg" => "far fa-egg",
            "4 Egg" => "fal fa-egg",
            "5 Egg Fried" => "fas fa-egg-fried",
            "6 Egg Fried" => "far fa-egg-fried",
            "7 Egg Fried" => "fal fa-egg-fried",
            "8 File Archive" => "fas fa-file-archive",
            "9 File Archive" => "far fa-file-archive",
            "1 File Archive" => "fal fa-file-archive",
            "2 File Check" => "fas fa-file-check",
            "3 File Check" => "far fa-file-check",
            "4 File Check" => "fal fa-file-check",
            "5 File Edit" => "fas fa-file-edit",
            "6 File Edit" => "far fa-file-edit",
            "7 File Edit" => "fal fa-file-edit",
            "8 File Excel" => "fas fa-file-excel",
            "9 File Excel" => "far fa-file-excel",
            "1 File Excel" => "fal fa-file-excel",
            "2 File Image" => "fas fa-file-image",
            "3 File Image" => "far fa-file-image",
            "4 File Image" => "fal fa-file-image",
            "5 File Invoice" => "fas fa-file-invoice",
            "6 File Invoice" => "far fa-file-invoice",
            "7 File Invoice" => "fal fa-file-invoice",
            "8 File Invoice Dollar" => "fas fa-file-invoice-dollar",
            "9 File Invoice Dollar" => "far fa-file-invoice-dollar",
            "1 File Invoice Dollar" => "fal fa-file-invoice-dollar",
            "2 File Minus" => "fas fa-file-minus",
            "3 File Minus" => "far fa-file-minus",
            "4 File Minus" => "fal fa-file-minus",
            "5 File Pdf" => "fas fa-file-pdf",
            "6 File Pdf" => "far fa-file-pdf",
            "7 File Pdf" => "fal fa-file-pdf",
            "8 File Plus" => "fas fa-file-plus",
            "9 File Plus" => "far fa-file-plus",
            "1 File Plus" => "fal fa-file-plus",
            "2 File Powerpoint" => "fas fa-file-powerpoint",
            "3 File Powerpoint" => "far fa-file-powerpoint",
            "4 File Powerpoint" => "fal fa-file-powerpoint",
            "5 File Times" => "fas fa-file-times",
            "6 File Times" => "far fa-file-times",
            "7 File Times" => "fal fa-file-times",
            "8 File Word" => "fas fa-file-word",
            "9 File Word" => "far fa-file-word",
            "1 File Word" => "fal fa-file-word",
            "2 Fish Cooked" => "fas fa-fish-cooked",
            "3 Fish Cooked" => "far fa-fish-cooked",
            "4 Fish Cooked" => "fal fa-fish-cooked",
            "5 Flushed" => "fas fa-flushed",
            "6 Flushed" => "far fa-flushed",
            "7 Flushed" => "fal fa-flushed",
            "8 French Fries" => "fas fa-french-fries",
            "9 French Fries" => "far fa-french-fries",
            "1 French Fries" => "fal fa-french-fries",
            "2 Frown Open" => "fas fa-frown-open",
            "3 Frown Open" => "far fa-frown-open",
            "4 Frown Open" => "fal fa-frown-open",
            "5 Gingerbread Man" => "fas fa-gingerbread-man",
            "6 Gingerbread Man" => "far fa-gingerbread-man",
            "7 Gingerbread Man" => "fal fa-gingerbread-man",
            "8 Grimace" => "fas fa-grimace",
            "9 Grimace" => "far fa-grimace",
            "1 Grimace" => "fal fa-grimace",
            "2 Grin" => "fas fa-grin",
            "3 Grin" => "far fa-grin",
            "4 Grin" => "fal fa-grin",
            "5 Grin Alt" => "fas fa-grin-alt",
            "6 Grin Alt" => "far fa-grin-alt",
            "7 Grin Alt" => "fal fa-grin-alt",
            "8 Grin Beam" => "fas fa-grin-beam",
            "9 Grin Beam" => "far fa-grin-beam",
            "1 Grin Beam" => "fal fa-grin-beam",
            "2 Grin Beam Sweat" => "fas fa-grin-beam-sweat",
            "3 Grin Beam Sweat" => "far fa-grin-beam-sweat",
            "4 Grin Beam Sweat" => "fal fa-grin-beam-sweat",
            "5 Grin Hearts" => "fas fa-grin-hearts",
            "6 Grin Hearts" => "far fa-grin-hearts",
            "7 Grin Hearts" => "fal fa-grin-hearts",
            "8 Grin Squint" => "fas fa-grin-squint",
            "9 Grin Squint" => "far fa-grin-squint",
            "1 Grin Squint" => "fal fa-grin-squint",
            "2 Grin Squint Tears" => "fas fa-grin-squint-tears",
            "3 Grin Squint Tears" => "far fa-grin-squint-tears",
            "4 Grin Squint Tears" => "fal fa-grin-squint-tears",
            "5 Grin Stars" => "fas fa-grin-stars",
            "6 Grin Stars" => "far fa-grin-stars",
            "7 Grin Stars" => "fal fa-grin-stars",
            "8 Grin Tears" => "fas fa-grin-tears",
            "9 Grin Tears" => "far fa-grin-tears",
            "1 Grin Tears" => "fal fa-grin-tears",
            "2 Grin Tongue" => "fas fa-grin-tongue",
            "3 Grin Tongue" => "far fa-grin-tongue",
            "4 Grin Tongue" => "fal fa-grin-tongue",
            "5 Grin Tongue Squint" => "fas fa-grin-tongue-squint",
            "6 Grin Tongue Squint" => "far fa-grin-tongue-squint",
            "7 Grin Tongue Squint" => "fal fa-grin-tongue-squint",
            "8 Grin Tongue Wink" => "fas fa-grin-tongue-wink",
            "9 Grin Tongue Wink" => "far fa-grin-tongue-wink",
            "1 Grin Tongue Wink" => "fal fa-grin-tongue-wink",
            "2 Grin Wink" => "fas fa-grin-wink",
            "3 Grin Wink" => "far fa-grin-wink",
            "4 Grin Wink" => "fal fa-grin-wink",
            "5 Hamburger" => "fas fa-hamburger",
            "6 Hamburger" => "far fa-hamburger",
            "7 Hamburger" => "fal fa-hamburger",
            "8 Heart Rate" => "fas fa-heart-rate",
            "9 Heart Rate" => "far fa-heart-rate",
            "1 Heart Rate" => "fal fa-heart-rate",
            "2 Heartbeat" => "fas fa-heartbeat",
            "3 Heartbeat" => "far fa-heartbeat",
            "4 Heartbeat" => "fal fa-heartbeat",
            "5 Hotdog" => "fas fa-hotdog",
            "6 Hotdog" => "far fa-hotdog",
            "7 Hotdog" => "fal fa-hotdog",
            "8 Kiss" => "fas fa-kiss",
            "9 Kiss" => "far fa-kiss",
            "1 Kiss" => "fal fa-kiss",
            "2 Kiss Beam" => "fas fa-kiss-beam",
            "3 Kiss Beam" => "far fa-kiss-beam",
            "4 Kiss Beam" => "fal fa-kiss-beam",
            "5 Kiss Wink Heart" => "fas fa-kiss-wink-heart",
            "6 Kiss Wink Heart" => "far fa-kiss-wink-heart",
            "7 Kiss Wink Heart" => "fal fa-kiss-wink-heart",
            "8 Laugh" => "fas fa-laugh",
            "9 Laugh" => "far fa-laugh",
            "1 Laugh" => "fal fa-laugh",
            "2 Laugh Beam" => "fas fa-laugh-beam",
            "3 Laugh Beam" => "far fa-laugh-beam",
            "4 Laugh Beam" => "fal fa-laugh-beam",
            "5 Laugh Squint" => "fas fa-laugh-squint",
            "6 Laugh Squint" => "far fa-laugh-squint",
            "7 Laugh Squint" => "fal fa-laugh-squint",
            "8 Laugh Wink" => "fas fa-laugh-wink",
            "9 Laugh Wink" => "far fa-laugh-wink",
            "1 Laugh Wink" => "fal fa-laugh-wink",
            "2 Lemon" => "fas fa-lemon",
            "3 Lemon" => "far fa-lemon",
            "4 Lemon" => "fal fa-lemon",
            "5 Lightbulb" => "fas fa-lightbulb",
            "6 Lightbulb" => "far fa-lightbulb",
            "7 Lightbulb" => "fal fa-lightbulb",
            "8 Meat" => "fas fa-meat",
            "9 Meat" => "far fa-meat",
            "1 Meat" => "fal fa-meat",
            "2 Meh Blank" => "fas fa-meh-blank",
            "3 Meh Blank" => "far fa-meh-blank",
            "4 Meh Blank" => "fal fa-meh-blank",
            "5 Meh Rolling Eyes" => "fas fa-meh-rolling-eyes",
            "6 Meh Rolling Eyes" => "far fa-meh-rolling-eyes",
            "7 Meh Rolling Eyes" => "fal fa-meh-rolling-eyes",
            "8 Monitor Heart Rate" => "fas fa-monitor-heart-rate",
            "9 Monitor Heart Rate" => "far fa-monitor-heart-rate",
            "1 Monitor Heart Rate" => "fal fa-monitor-heart-rate",
            "2 Pepper Hot" => "fas fa-pepper-hot",
            "3 Pepper Hot" => "far fa-pepper-hot",
            "4 Pepper Hot" => "fal fa-pepper-hot",
            "5 Percentage" => "fas fa-percentage",
            "6 Percentage" => "far fa-percentage",
            "7 Percentage" => "fal fa-percentage",
            "8 Pizza" => "fas fa-pizza",
            "9 Pizza" => "far fa-pizza",
            "1 Pizza" => "fal fa-pizza",
            "2 Pizza Slice" => "fas fa-pizza-slice",
            "3 Pizza Slice" => "far fa-pizza-slice",
            "4 Pizza Slice" => "fal fa-pizza-slice",
            "5 Poop" => "fas fa-poop",
            "6 Poop" => "far fa-poop",
            "7 Poop" => "fal fa-poop",
            "8 Popcorn" => "fas fa-popcorn",
            "9 Popcorn" => "far fa-popcorn",
            "1 Popcorn" => "fal fa-popcorn",
            "2 Receipt" => "fas fa-receipt",
            "3 Receipt" => "far fa-receipt",
            "4 Receipt" => "fal fa-receipt",
            "5 Running" => "fas fa-running",
            "6 Running" => "far fa-running",
            "7 Running" => "fal fa-running",
            "8 Sad Cry" => "fas fa-sad-cry",
            "9 Sad Cry" => "far fa-sad-cry",
            "1 Sad Cry" => "fal fa-sad-cry",
            "2 Sad Tear" => "fas fa-sad-tear",
            "3 Sad Tear" => "far fa-sad-tear",
            "4 Sad Tear" => "fal fa-sad-tear",
            "5 Salad" => "fas fa-salad",
            "6 Salad" => "far fa-salad",
            "7 Salad" => "fal fa-salad",
            "8 Sandwich" => "fas fa-sandwich",
            "9 Sandwich" => "far fa-sandwich",
            "1 Sandwich" => "fal fa-sandwich",
            "2 Sausage" => "fas fa-sausage",
            "3 Sausage" => "far fa-sausage",
            "4 Sausage" => "fal fa-sausage",
            "5 Skating" => "fas fa-skating",
            "6 Skating" => "far fa-skating",
            "7 Skating" => "fal fa-skating",
            "8 Ski Jump" => "fas fa-ski-jump",
            "9 Ski Jump" => "far fa-ski-jump",
            "1 Ski Jump" => "fal fa-ski-jump",
            "2 Skiing" => "fas fa-skiing",
            "3 Skiing" => "far fa-skiing",
            "4 Skiing" => "fal fa-skiing",
            "5 Skiing Nordic" => "fas fa-skiing-nordic",
            "6 Skiing Nordic" => "far fa-skiing-nordic",
            "7 Skiing Nordic" => "fal fa-skiing-nordic",
            "8 Smile Beam" => "fas fa-smile-beam",
            "9 Smile Beam" => "far fa-smile-beam",
            "1 Smile Beam" => "fal fa-smile-beam",
            "2 Smile Wink" => "fas fa-smile-wink",
            "3 Smile Wink" => "far fa-smile-wink",
            "4 Smile Wink" => "fal fa-smile-wink",
            "5 Snowboarding" => "fas fa-snowboarding",
            "6 Snowboarding" => "far fa-snowboarding",
            "7 Snowboarding" => "fal fa-snowboarding",
            "8 Solar Panel" => "fas fa-solar-panel",
            "9 Solar Panel" => "far fa-solar-panel",
            "1 Solar Panel" => "fal fa-solar-panel",
            "2 Soup" => "fas fa-soup",
            "3 Soup" => "far fa-soup",
            "4 Soup" => "fal fa-soup",
            "5 Spa" => "fas fa-spa",
            "6 Spa" => "far fa-spa",
            "7 Spa" => "fal fa-spa",
            "8 Steak" => "fas fa-steak",
            "9 Steak" => "far fa-steak",
            "1 Steak" => "fal fa-steak",
            "2 Stroopwafel" => "fas fa-stroopwafel",
            "3 Stroopwafel" => "far fa-stroopwafel",
            "4 Stroopwafel" => "fal fa-stroopwafel",
            "5 Sun" => "fas fa-sun",
            "6 Sun" => "far fa-sun",
            "7 Sun" => "fal fa-sun",
            "8 Surprise" => "fas fa-surprise",
            "9 Surprise" => "far fa-surprise",
            "1 Surprise" => "fal fa-surprise",
            "2 Swimmer" => "fas fa-swimmer",
            "3 Swimmer" => "far fa-swimmer",
            "4 Swimmer" => "fal fa-swimmer",
            "5 Taco" => "fas fa-taco",
            "6 Taco" => "far fa-taco",
            "7 Taco" => "fal fa-taco",
            "8 Tally" => "fas fa-tally",
            "9 Tally" => "far fa-tally",
            "1 Tally" => "fal fa-tally",
            "2 Tired" => "fas fa-tired",
            "3 Tired" => "far fa-tired",
            "4 Tired" => "fal fa-tired",
            "5 Treasure Chest" => "fas fa-treasure-chest",
            "6 Treasure Chest" => "far fa-treasure-chest",
            "7 Treasure Chest" => "fal fa-treasure-chest",
            "8 Walking" => "fas fa-walking",
            "9 Walking" => "far fa-walking",
            "1 Walking" => "fal fa-walking",
            "2 Watch Fitness" => "fas fa-watch-fitness",
            "3 Watch Fitness" => "far fa-watch-fitness",
            "4 Watch Fitness" => "fal fa-watch-fitness",
            "5 Water" => "fas fa-water",
            "6 Water" => "far fa-water",
            "7 Water" => "fal fa-water",
            "8 Allergies" => "fas fa-allergies",
            "9 Allergies" => "far fa-allergies",
            "1 Allergies" => "fal fa-allergies",
            "2 Angel" => "fas fa-angel",
            "3 Angel" => "far fa-angel",
            "4 Angel" => "fal fa-angel",
            "5 Bed" => "fas fa-bed",
            "6 Bed" => "far fa-bed",
            "7 Bed" => "fal fa-bed",
            "8 Book Dead" => "fas fa-book-dead",
            "9 Book Dead" => "far fa-book-dead",
            "1 Book Dead" => "fal fa-book-dead",
            "2 Book Spells" => "fas fa-book-spells",
            "3 Book Spells" => "far fa-book-spells",
            "4 Book Spells" => "fal fa-book-spells",
            "5 Broom" => "fas fa-broom",
            "6 Broom" => "far fa-broom",
            "7 Broom" => "fal fa-broom",
            "8 Candle Holder" => "fas fa-candle-holder",
            "9 Candle Holder" => "far fa-candle-holder",
            "1 Candle Holder" => "fal fa-candle-holder",
            "2 Claw Marks" => "fas fa-claw-marks",
            "3 Claw Marks" => "far fa-claw-marks",
            "4 Claw Marks" => "fal fa-claw-marks",
            "5 Cloud Moon" => "fas fa-cloud-moon",
            "6 Cloud Moon" => "far fa-cloud-moon",
            "7 Cloud Moon" => "fal fa-cloud-moon",
            "8 Club" => "fas fa-club",
            "9 Club" => "far fa-club",
            "1 Club" => "fal fa-club",
            "2 Coffin" => "fas fa-coffin",
            "3 Coffin" => "far fa-coffin",
            "4 Coffin" => "fal fa-coffin",
            "5 Concierge Bell" => "fas fa-concierge-bell",
            "6 Concierge Bell" => "far fa-concierge-bell",
            "7 Concierge Bell" => "fal fa-concierge-bell",
            "8 Diamond" => "fas fa-diamond",
            "9 Diamond" => "far fa-diamond",
            "1 Diamond" => "fal fa-diamond",
            "2 Dice" => "fas fa-dice",
            "3 Dice" => "far fa-dice",
            "4 Dice" => "fal fa-dice",
            "5 Dice D10" => "fas fa-dice-d10",
            "6 Dice D10" => "far fa-dice-d10",
            "7 Dice D10" => "fal fa-dice-d10",
            "8 Dice D12" => "fas fa-dice-d12",
            "9 Dice D12" => "far fa-dice-d12",
            "1 Dice D12" => "fal fa-dice-d12",
            "2 Dice D20" => "fas fa-dice-d20",
            "3 Dice D20" => "far fa-dice-d20",
            "4 Dice D20" => "fal fa-dice-d20",
            "5 Dice D4" => "fas fa-dice-d4",
            "6 Dice D4" => "far fa-dice-d4",
            "7 Dice D4" => "fal fa-dice-d4",
            "8 Dice D6" => "fas fa-dice-d6",
            "9 Dice D6" => "far fa-dice-d6",
            "1 Dice D6" => "fal fa-dice-d6",
            "2 Dice D8" => "fas fa-dice-d8",
            "3 Dice D8" => "far fa-dice-d8",
            "4 Dice D8" => "fal fa-dice-d8",
            "5 Dice Five" => "fas fa-dice-five",
            "6 Dice Five" => "far fa-dice-five",
            "7 Dice Five" => "fal fa-dice-five",
            "8 Dice Four" => "fas fa-dice-four",
            "9 Dice Four" => "far fa-dice-four",
            "1 Dice Four" => "fal fa-dice-four",
            "2 Dice One" => "fas fa-dice-one",
            "3 Dice One" => "far fa-dice-one",
            "4 Dice One" => "fal fa-dice-one",
            "5 Dice Six" => "fas fa-dice-six",
            "6 Dice Six" => "far fa-dice-six",
            "7 Dice Six" => "fal fa-dice-six",
            "8 Dice Three" => "fas fa-dice-three",
            "9 Dice Three" => "far fa-dice-three",
            "1 Dice Three" => "fal fa-dice-three",
            "2 Dice Two" => "fas fa-dice-two",
            "3 Dice Two" => "far fa-dice-two",
            "4 Dice Two" => "fal fa-dice-two",
            "5 Door Closed" => "fas fa-door-closed",
            "6 Door Closed" => "far fa-door-closed",
            "7 Door Closed" => "fal fa-door-closed",
            "8 Door Open" => "fas fa-door-open",
            "9 Door Open" => "far fa-door-open",
            "1 Door Open" => "fal fa-door-open",
            "2 Dreidel" => "fas fa-dreidel",
            "3 Dreidel" => "far fa-dreidel",
            "4 Dreidel" => "fal fa-dreidel",
            "5 Dumbbell" => "fas fa-dumbbell",
            "6 Dumbbell" => "far fa-dumbbell",
            "7 Dumbbell" => "fal fa-dumbbell",
            "8 Fireplace" => "fas fa-fireplace",
            "9 Fireplace" => "far fa-fireplace",
            "1 Fireplace" => "fal fa-fireplace",
            "2 Fist Raised" => "fas fa-fist-raised",
            "3 Fist Raised" => "far fa-fist-raised",
            "4 Fist Raised" => "fal fa-fist-raised",
            "5 Gamepad" => "fas fa-gamepad",
            "6 Gamepad" => "far fa-gamepad",
            "7 Gamepad" => "fal fa-gamepad",
            "8 Genderless" => "fas fa-genderless",
            "9 Genderless" => "far fa-genderless",
            "1 Genderless" => "fal fa-genderless",
            "2 Ghost" => "fas fa-ghost",
            "3 Ghost" => "far fa-ghost",
            "4 Ghost" => "fal fa-ghost",
            "5 Gifts" => "fas fa-gifts",
            "6 Gifts" => "far fa-gifts",
            "7 Gifts" => "fal fa-gifts",
            "8 H Square" => "fas fa-h-square",
            "9 H Square" => "far fa-h-square",
            "1 H Square" => "fal fa-h-square",
            "2 Hand Holding" => "fas fa-hand-holding",
            "3 Hand Holding" => "far fa-hand-holding",
            "4 Hand Holding" => "fal fa-hand-holding",
            "5 Hand Holding Box" => "fas fa-hand-holding-box",
            "6 Hand Holding Box" => "far fa-hand-holding-box",
            "7 Hand Holding Box" => "fal fa-hand-holding-box",
            "8 Hand Holding Magic" => "fas fa-hand-holding-magic",
            "9 Hand Holding Magic" => "far fa-hand-holding-magic",
            "1 Hand Holding Magic" => "fal fa-hand-holding-magic",
            "2 Hand Lizard" => "fas fa-hand-lizard",
            "3 Hand Lizard" => "far fa-hand-lizard",
            "4 Hand Lizard" => "fal fa-hand-lizard",
            "5 Hand Middle Finger" => "fas fa-hand-middle-finger",
            "6 Hand Middle Finger" => "far fa-hand-middle-finger",
            "7 Hand Middle Finger" => "fal fa-hand-middle-finger",
            "8 Hand Paper" => "fas fa-hand-paper",
            "9 Hand Paper" => "far fa-hand-paper",
            "1 Hand Paper" => "fal fa-hand-paper",
            "2 Hand Peace" => "fas fa-hand-peace",
            "3 Hand Peace" => "far fa-hand-peace",
            "4 Hand Peace" => "fal fa-hand-peace",
            "5 Hand Receiving" => "fas fa-hand-receiving",
            "6 Hand Receiving" => "far fa-hand-receiving",
            "7 Hand Receiving" => "fal fa-hand-receiving",
            "8 Hand Rock" => "fas fa-hand-rock",
            "9 Hand Rock" => "far fa-hand-rock",
            "1 Hand Rock" => "fal fa-hand-rock",
            "2 Hand Scissors" => "fas fa-hand-scissors",
            "3 Hand Scissors" => "far fa-hand-scissors",
            "4 Hand Scissors" => "fal fa-hand-scissors",
            "5 Hand Spock" => "fas fa-hand-spock",
            "6 Hand Spock" => "far fa-hand-spock",
            "7 Hand Spock" => "fal fa-hand-spock",
            "8 Hands" => "fas fa-hands",
            "9 Hands" => "far fa-hands",
            "1 Hands" => "fal fa-hands",
            "2 Headset" => "fas fa-headset",
            "3 Headset" => "far fa-headset",
            "4 Headset" => "fal fa-headset",
            "5 Hockey Mask" => "fas fa-hockey-mask",
            "6 Hockey Mask" => "far fa-hockey-mask",
            "7 Hockey Mask" => "fal fa-hockey-mask",
            "8 Holly Berry" => "fas fa-holly-berry",
            "9 Holly Berry" => "far fa-holly-berry",
            "1 Holly Berry" => "fal fa-holly-berry",
            "2 Hot Tub" => "fas fa-hot-tub",
            "3 Hot Tub" => "far fa-hot-tub",
            "4 Hot Tub" => "fal fa-hot-tub",
            "5 Infinity" => "fas fa-infinity",
            "6 Infinity" => "far fa-infinity",
            "7 Infinity" => "fal fa-infinity",
            "8 Jack O Lantern" => "fas fa-jack-o-lantern",
            "9 Jack O Lantern" => "far fa-jack-o-lantern",
            "1 Jack O Lantern" => "fal fa-jack-o-lantern",
            "2 Key" => "fas fa-key",
            "3 Key" => "far fa-key",
            "4 Key" => "fal fa-key",
            "5 Key Skeleton" => "fas fa-key-skeleton",
            "6 Key Skeleton" => "far fa-key-skeleton",
            "7 Key Skeleton" => "fal fa-key-skeleton",
            "8 Knife Kitchen" => "fas fa-knife-kitchen",
            "9 Knife Kitchen" => "far fa-knife-kitchen",
            "1 Knife Kitchen" => "fal fa-knife-kitchen",
            "2 Lights Holiday" => "fas fa-lights-holiday",
            "3 Lights Holiday" => "far fa-lights-holiday",
            "4 Lights Holiday" => "fal fa-lights-holiday",
            "5 Luggage Cart" => "fas fa-luggage-cart",
            "6 Luggage Cart" => "far fa-luggage-cart",
            "7 Luggage Cart" => "fal fa-luggage-cart",
            "8 Mars" => "fas fa-mars",
            "9 Mars" => "far fa-mars",
            "1 Mars" => "fal fa-mars",
            "2 Mars Double" => "fas fa-mars-double",
            "3 Mars Double" => "far fa-mars-double",
            "4 Mars Double" => "fal fa-mars-double",
            "5 Mars Stroke" => "fas fa-mars-stroke",
            "6 Mars Stroke" => "far fa-mars-stroke",
            "7 Mars Stroke" => "fal fa-mars-stroke",
            "8 Mars Stroke H" => "fas fa-mars-stroke-h",
            "9 Mars Stroke H" => "far fa-mars-stroke-h",
            "1 Mars Stroke H" => "fal fa-mars-stroke-h",
            "2 Mars Stroke V" => "fas fa-mars-stroke-v",
            "3 Mars Stroke V" => "far fa-mars-stroke-v",
            "4 Mars Stroke V" => "fal fa-mars-stroke-v",
            "5 Mask" => "fas fa-mask",
            "6 Mask" => "far fa-mask",
            "7 Mask" => "fal fa-mask",
            "8 Medkit" => "fas fa-medkit",
            "9 Medkit" => "far fa-medkit",
            "1 Medkit" => "fal fa-medkit",
            "2 Mercury" => "fas fa-mercury",
            "3 Mercury" => "far fa-mercury",
            "4 Mercury" => "fal fa-mercury",
            "5 Mistletoe" => "fas fa-mistletoe",
            "6 Mistletoe" => "far fa-mistletoe",
            "7 Mistletoe" => "fal fa-mistletoe",
            "8 Neuter" => "fas fa-neuter",
            "9 Neuter" => "far fa-neuter",
            "1 Neuter" => "fal fa-neuter",
            "2 Nintendo Switch" => "fab fa-nintendo-switch",
            "3 Ornament" => "fas fa-ornament",
            "4 Ornament" => "far fa-ornament",
            "5 Ornament" => "fal fa-ornament",
            "6 Playstation" => "fab fa-playstation",
            "7 Plus Square" => "fas fa-plus-square",
            "8 Plus Square" => "far fa-plus-square",
            "9 Plus Square" => "fal fa-plus-square",
            "1 Praying Hands" => "fas fa-praying-hands",
            "2 Praying Hands" => "far fa-praying-hands",
            "3 Praying Hands" => "fal fa-praying-hands",
            "4 Prescription" => "fas fa-prescription",
            "5 Prescription" => "far fa-prescription",
            "6 Prescription" => "fal fa-prescription",
            "7 Puzzle Piece" => "fas fa-puzzle-piece",
            "8 Puzzle Piece" => "far fa-puzzle-piece",
            "9 Puzzle Piece" => "fal fa-puzzle-piece",
            "1 Scarecrow" => "fas fa-scarecrow",
            "2 Scarecrow" => "far fa-scarecrow",
            "3 Scarecrow" => "fal fa-scarecrow",
            "4 Scythe" => "fas fa-scythe",
            "5 Scythe" => "far fa-scythe",
            "6 Scythe" => "fal fa-scythe",
            "7 Shower" => "fas fa-shower",
            "8 Shower" => "far fa-shower",
            "9 Shower" => "fal fa-shower",
            "1 Sleigh" => "fas fa-sleigh",
            "2 Sleigh" => "far fa-sleigh",
            "3 Sleigh" => "fal fa-sleigh",
            "4 Smoking" => "fas fa-smoking",
            "5 Smoking" => "far fa-smoking",
            "6 Smoking" => "fal fa-smoking",
            "7 Smoking Ban" => "fas fa-smoking-ban",
            "8 Smoking Ban" => "far fa-smoking-ban",
            "9 Smoking Ban" => "fal fa-smoking-ban",
            "1 Snowflake" => "fas fa-snowflake",
            "2 Snowflake" => "far fa-snowflake",
            "3 Snowflake" => "fal fa-snowflake",
            "4 Spade" => "fas fa-spade",
            "5 Spade" => "far fa-spade",
            "6 Spade" => "fal fa-spade",
            "7 Spider Web" => "fas fa-spider-web",
            "8 Spider Web" => "far fa-spider-web",
            "9 Spider Web" => "fal fa-spider-web",
            "1 Star Christmas" => "fas fa-star-christmas",
            "2 Star Christmas" => "far fa-star-christmas",
            "3 Star Christmas" => "fal fa-star-christmas",
            "4 Steam" => "fab fa-steam",
            "5 Steam Square" => "fab fa-steam-square",
            "6 Steam Symbol" => "fab fa-steam-symbol",
            "7 Stethoscope" => "fas fa-stethoscope",
            "8 Stethoscope" => "far fa-stethoscope",
            "9 Stethoscope" => "fal fa-stethoscope",
            "1 Suitcase" => "fas fa-suitcase",
            "2 Suitcase" => "far fa-suitcase",
            "3 Suitcase" => "fal fa-suitcase",
            "4 Suitcase Rolling" => "fas fa-suitcase-rolling",
            "5 Suitcase Rolling" => "far fa-suitcase-rolling",
            "6 Suitcase Rolling" => "fal fa-suitcase-rolling",
            "7 Swimming Pool" => "fas fa-swimming-pool",
            "8 Swimming Pool" => "far fa-swimming-pool",
            "9 Swimming Pool" => "fal fa-swimming-pool",
            "1 Thumbs Down" => "fas fa-thumbs-down",
            "2 Thumbs Down" => "far fa-thumbs-down",
            "3 Thumbs Down" => "fal fa-thumbs-down",
            "4 Thumbs Up" => "fas fa-thumbs-up",
            "5 Thumbs Up" => "far fa-thumbs-up",
            "6 Thumbs Up" => "fal fa-thumbs-up",
            "7 Tombstone" => "fas fa-tombstone",
            "8 Tombstone" => "far fa-tombstone",
            "9 Tombstone" => "fal fa-tombstone",
            "1 Tombstone Alt" => "fas fa-tombstone-alt",
            "2 Tombstone Alt" => "far fa-tombstone-alt",
            "3 Tombstone Alt" => "fal fa-tombstone-alt",
            "4 Transgender" => "fas fa-transgender",
            "5 Transgender" => "far fa-transgender",
            "6 Transgender" => "fal fa-transgender",
            "7 Transgender Alt" => "fas fa-transgender-alt",
            "8 Transgender Alt" => "far fa-transgender-alt",
            "9 Transgender Alt" => "fal fa-transgender-alt",
            "1 Tree Christmas" => "fas fa-tree-christmas",
            "2 Tree Christmas" => "far fa-tree-christmas",
            "3 Tree Christmas" => "fal fa-tree-christmas",
            "4 Tree Decorated" => "fas fa-tree-decorated",
            "5 Tree Decorated" => "far fa-tree-decorated",
            "6 Tree Decorated" => "fal fa-tree-decorated",
            "7 Twitch" => "fab fa-twitch",
            "8 Umbrella Beach" => "fas fa-umbrella-beach",
            "9 Umbrella Beach" => "far fa-umbrella-beach",
            "1 Umbrella Beach" => "fal fa-umbrella-beach",
            "2 User Md" => "fas fa-user-md",
            "3 User Md" => "far fa-user-md",
            "4 User Md" => "fal fa-user-md",
            "5 Utensils" => "fas fa-utensils",
            "6 Utensils" => "far fa-utensils",
            "7 Utensils" => "fal fa-utensils",
            "8 Utensils Alt" => "fas fa-utensils-alt",
            "9 Utensils Alt" => "far fa-utensils-alt",
            "1 Utensils Alt" => "fal fa-utensils-alt",
            "2 Venus" => "fas fa-venus",
            "3 Venus" => "far fa-venus",
            "4 Venus" => "fal fa-venus",
            "5 Venus Double" => "fas fa-venus-double",
            "6 Venus Double" => "far fa-venus-double",
            "7 Venus Double" => "fal fa-venus-double",
            "8 Venus Mars" => "fas fa-venus-mars",
            "9 Venus Mars" => "far fa-venus-mars",
            "1 Venus Mars" => "fal fa-venus-mars",
            "2 Wand" => "fas fa-wand",
            "3 Wand" => "far fa-wand",
            "4 Wand" => "fal fa-wand",
            "5 Wand Magic" => "fas fa-wand-magic",
            "6 Wand Magic" => "far fa-wand-magic",
            "7 Wand Magic" => "fal fa-wand-magic",
            "8 Wifi Slash" => "fas fa-wifi-slash",
            "9 Wifi Slash" => "far fa-wifi-slash",
            "1 Wifi Slash" => "fal fa-wifi-slash",
            "2 Wreath" => "fas fa-wreath",
            "3 Wreath" => "far fa-wreath",
            "4 Wreath" => "fal fa-wreath",
            "5 Xbox" => "fab fa-xbox",
            "6 Ban" => "fas fa-ban",
            "7 Ban" => "far fa-ban",
            "8 Ban" => "fal fa-ban",
            "9 Barcode Alt" => "fas fa-barcode-alt",
            "1 Barcode Alt" => "far fa-barcode-alt",
            "2 Barcode Alt" => "fal fa-barcode-alt",
            "3 Barcode Read" => "fas fa-barcode-read",
            "4 Barcode Read" => "far fa-barcode-read",
            "5 Barcode Read" => "fal fa-barcode-read",
            "6 Barcode Scan" => "fas fa-barcode-scan",
            "7 Barcode Scan" => "far fa-barcode-scan",
            "8 Barcode Scan" => "fal fa-barcode-scan",
            "9 Bars" => "fas fa-bars",
            "1 Bars" => "far fa-bars",
            "2 Bars" => "fal fa-bars",
            "3 Blanket" => "fas fa-blanket",
            "4 Blanket" => "far fa-blanket",
            "5 Blanket" => "fal fa-blanket",
            "6 Blog" => "fas fa-blog",
            "7 Blog" => "far fa-blog",
            "8 Blog" => "fal fa-blog",
            "9 Bolt" => "fas fa-bolt",
            "1 Bolt" => "far fa-bolt",
            "2 Bolt" => "fal fa-bolt",
            "3 Box" => "fas fa-box",
            "4 Box" => "far fa-box",
            "5 Box" => "fal fa-box",
            "6 Box Check" => "fas fa-box-check",
            "7 Box Check" => "far fa-box-check",
            "8 Box Check" => "fal fa-box-check",
            "9 Boxes" => "fas fa-boxes",
            "1 Boxes" => "far fa-boxes",
            "2 Boxes" => "fal fa-boxes",
            "3 Camera" => "fas fa-camera",
            "4 Camera" => "far fa-camera",
            "5 Camera" => "fal fa-camera",
            "6 Camera Alt" => "fas fa-camera-alt",
            "7 Camera Alt" => "far fa-camera-alt",
            "8 Camera Alt" => "fal fa-camera-alt",
            "9 Camera Retro" => "fas fa-camera-retro",
            "1 Camera Retro" => "far fa-camera-retro",
            "2 Camera Retro" => "fal fa-camera-retro",
            "3 Chair" => "fas fa-chair",
            "4 Chair" => "far fa-chair",
            "5 Chair" => "fal fa-chair",
            "6 Chair Office" => "fas fa-chair-office",
            "7 Chair Office" => "far fa-chair-office",
            "8 Chair Office" => "fal fa-chair-office",
            "9 Check" => "fas fa-check",
            "1 Check" => "far fa-check",
            "2 Check" => "fal fa-check",
            "3 Check Circle" => "fas fa-check-circle",
            "4 Check Circle" => "far fa-check-circle",
            "5 Check Circle" => "fal fa-check-circle",
            "6 Check Double" => "fas fa-check-double",
            "7 Check Double" => "far fa-check-double",
            "8 Check Double" => "fal fa-check-double",
            "9 Check Square" => "fas fa-check-square",
            "1 Check Square" => "far fa-check-square",
            "2 Check Square" => "fal fa-check-square",
            "3 Clipboard Check" => "fas fa-clipboard-check",
            "4 Clipboard Check" => "far fa-clipboard-check",
            "5 Clipboard Check" => "fal fa-clipboard-check",
            "6 Clipboard List" => "fas fa-clipboard-list",
            "7 Clipboard List" => "far fa-clipboard-list",
            "8 Clipboard List" => "fal fa-clipboard-list",
            "9 Cloud" => "fas fa-cloud",
            "1 Cloud" => "far fa-cloud",
            "2 Cloud" => "fal fa-cloud",
            "3 Cog" => "fas fa-cog",
            "4 Cog" => "far fa-cog",
            "5 Cog" => "fal fa-cog",
            "6 Cogs" => "fas fa-cogs",
            "7 Cogs" => "far fa-cogs",
            "8 Cogs" => "fal fa-cogs",
            "9 Conveyor Belt" => "fas fa-conveyor-belt",
            "1 Conveyor Belt" => "far fa-conveyor-belt",
            "2 Conveyor Belt" => "fal fa-conveyor-belt",
            "3 Conveyor Belt Alt" => "fas fa-conveyor-belt-alt",
            "4 Conveyor Belt Alt" => "far fa-conveyor-belt-alt",
            "5 Conveyor Belt Alt" => "fal fa-conveyor-belt-alt",
            "6 Couch" => "fas fa-couch",
            "7 Couch" => "far fa-couch",
            "8 Couch" => "fal fa-couch",
            "9 Dolly" => "fas fa-dolly",
            "1 Dolly" => "far fa-dolly",
            "2 Dolly" => "fal fa-dolly",
            "3 Dolly Empty" => "fas fa-dolly-empty",
            "4 Dolly Empty" => "far fa-dolly-empty",
            "5 Dolly Empty" => "fal fa-dolly-empty",
            "6 Dolly Flatbed" => "fas fa-dolly-flatbed",
            "7 Dolly Flatbed" => "far fa-dolly-flatbed",
            "8 Dolly Flatbed" => "fal fa-dolly-flatbed",
            "9 Dolly Flatbed Alt" => "fas fa-dolly-flatbed-alt",
            "1 Dolly Flatbed Alt" => "far fa-dolly-flatbed-alt",
            "2 Dolly Flatbed Alt" => "fal fa-dolly-flatbed-alt",
            "3 Dolly Flatbed Empty" => "fas fa-dolly-flatbed-empty",
            "4 Dolly Flatbed Empty" => "far fa-dolly-flatbed-empty",
            "5 Dolly Flatbed Empty" => "fal fa-dolly-flatbed-empty",
            "6 Dot Circle" => "fas fa-dot-circle",
            "7 Dot Circle" => "far fa-dot-circle",
            "8 Dot Circle" => "fal fa-dot-circle",
            "9 Ellipsis H" => "fas fa-ellipsis-h",
            "1 Ellipsis H" => "far fa-ellipsis-h",
            "2 Ellipsis H" => "fal fa-ellipsis-h",
            "3 Ellipsis H Alt" => "fas fa-ellipsis-h-alt",
            "4 Ellipsis H Alt" => "far fa-ellipsis-h-alt",
            "5 Ellipsis H Alt" => "fal fa-ellipsis-h-alt",
            "6 Ellipsis V" => "fas fa-ellipsis-v",
            "7 Ellipsis V" => "far fa-ellipsis-v",
            "8 Ellipsis V" => "fal fa-ellipsis-v",
            "9 Ellipsis V Alt" => "fas fa-ellipsis-v-alt",
            "1 Ellipsis V Alt" => "far fa-ellipsis-v-alt",
            "2 Ellipsis V Alt" => "fal fa-ellipsis-v-alt",
            "3 File Download" => "fas fa-file-download",
            "4 File Download" => "far fa-file-download",
            "5 File Download" => "fal fa-file-download",
            "6 File Export" => "fas fa-file-export",
            "7 File Export" => "far fa-file-export",
            "8 File Export" => "fal fa-file-export",
            "9 File Import" => "fas fa-file-import",
            "1 File Import" => "far fa-file-import",
            "2 File Import" => "fal fa-file-import",
            "3 File Upload" => "fas fa-file-upload",
            "4 File Upload" => "far fa-file-upload",
            "5 File Upload" => "fal fa-file-upload",
            "6 Fingerprint" => "fas fa-fingerprint",
            "7 Fingerprint" => "far fa-fingerprint",
            "8 Fingerprint" => "fal fa-fingerprint",
            "9 Flag" => "fas fa-flag",
            "1 Flag" => "far fa-flag",
            "2 Flag" => "fal fa-flag",
            "3 Flag Checkered" => "fas fa-flag-checkered",
            "4 Flag Checkered" => "far fa-flag-checkered",
            "5 Flag Checkered" => "fal fa-flag-checkered",
            "6 Grip Horizontal" => "fas fa-grip-horizontal",
            "7 Grip Horizontal" => "far fa-grip-horizontal",
            "8 Grip Horizontal" => "fal fa-grip-horizontal",
            "9 Grip Lines" => "fas fa-grip-lines",
            "1 Grip Lines" => "far fa-grip-lines",
            "2 Grip Lines" => "fal fa-grip-lines",
            "3 Grip Lines Vertical" => "fas fa-grip-lines-vertical",
            "4 Grip Lines Vertical" => "far fa-grip-lines-vertical",
            "5 Grip Lines Vertical" => "fal fa-grip-lines-vertical",
            "6 Grip Vertical" => "fas fa-grip-vertical",
            "7 Grip Vertical" => "far fa-grip-vertical",
            "8 Grip Vertical" => "fal fa-grip-vertical",
            "9 Hashtag" => "fas fa-hashtag",
            "1 Hashtag" => "far fa-hashtag",
            "2 Hashtag" => "fal fa-hashtag",
            "3 Id Badge" => "fas fa-id-badge",
            "4 Id Badge" => "far fa-id-badge",
            "5 Id Badge" => "fal fa-id-badge",
            "6 Id Card" => "fas fa-id-card",
            "7 Id Card" => "far fa-id-card",
            "8 Id Card" => "fal fa-id-card",
            "9 Image" => "fas fa-image",
            "1 Image" => "far fa-image",
            "2 Image" => "fal fa-image",
            "3 Images" => "fas fa-images",
            "4 Images" => "far fa-images",
            "5 Images" => "fal fa-images",
            "6 Info" => "fas fa-info",
            "7 Info" => "far fa-info",
            "8 Info" => "fal fa-info",
            "9 Info Circle" => "fas fa-info-circle",
            "1 Info Circle" => "far fa-info-circle",
            "2 Info Circle" => "fal fa-info-circle",
            "3 Info Square" => "fas fa-info-square",
            "4 Info Square" => "far fa-info-square",
            "5 Info Square" => "fal fa-info-square",
            "6 Inventory" => "fas fa-inventory",
            "7 Inventory" => "far fa-inventory",
            "8 Inventory" => "fal fa-inventory",
            "9 Lamp" => "fas fa-lamp",
            "1 Lamp" => "far fa-lamp",
            "2 Lamp" => "fal fa-lamp",
            "3 Loveseat" => "fas fa-loveseat",
            "4 Loveseat" => "far fa-loveseat",
            "5 Loveseat" => "fal fa-loveseat",
            "6 Mailbox" => "fas fa-mailbox",
            "7 Mailbox" => "far fa-mailbox",
            "8 Mailbox" => "fal fa-mailbox",
            "9 Medal" => "fas fa-medal",
            "1 Medal" => "far fa-medal",
            "2 Medal" => "fal fa-medal",
            "3 Minus" => "fas fa-minus",
            "4 Minus" => "far fa-minus",
            "5 Minus" => "fal fa-minus",
            "6 Minus Circle" => "fas fa-minus-circle",
            "7 Minus Circle" => "far fa-minus-circle",
            "8 Minus Circle" => "fal fa-minus-circle",
            "9 Minus Hexagon" => "fas fa-minus-hexagon",
            "1 Minus Hexagon" => "far fa-minus-hexagon",
            "2 Minus Hexagon" => "fal fa-minus-hexagon",
            "3 Minus Octagon" => "fas fa-minus-octagon",
            "4 Minus Octagon" => "far fa-minus-octagon",
            "5 Minus Octagon" => "fal fa-minus-octagon",
            "6 Minus Square" => "fas fa-minus-square",
            "7 Minus Square" => "far fa-minus-square",
            "8 Minus Square" => "fal fa-minus-square",
            "9 Pallet" => "fas fa-pallet",
            "1 Pallet" => "far fa-pallet",
            "2 Pallet" => "fal fa-pallet",
            "3 Pallet Alt" => "fas fa-pallet-alt",
            "4 Pallet Alt" => "far fa-pallet-alt",
            "5 Pallet Alt" => "fal fa-pallet-alt",
            "6 Plus" => "fas fa-plus",
            "7 Plus" => "far fa-plus",
            "8 Plus" => "fal fa-plus",
            "9 Plus Circle" => "fas fa-plus-circle",
            "1 Plus Circle" => "far fa-plus-circle",
            "2 Plus Circle" => "fal fa-plus-circle",
            "3 Plus Hexagon" => "fas fa-plus-hexagon",
            "4 Plus Hexagon" => "far fa-plus-hexagon",
            "5 Plus Hexagon" => "fal fa-plus-hexagon",
            "6 Plus Octagon" => "fas fa-plus-octagon",
            "7 Plus Octagon" => "far fa-plus-octagon",
            "8 Plus Octagon" => "fal fa-plus-octagon",
            "9 Portrait" => "fas fa-portrait",
            "1 Portrait" => "far fa-portrait",
            "2 Portrait" => "fal fa-portrait",
            "3 Question" => "fas fa-question",
            "4 Question" => "far fa-question",
            "5 Question" => "fal fa-question",
            "6 Question Square" => "fas fa-question-square",
            "7 Question Square" => "far fa-question-square",
            "8 Question Square" => "fal fa-question-square",
            "9 Scanner" => "fas fa-scanner",
            "1 Scanner" => "far fa-scanner",
            "2 Scanner" => "fal fa-scanner",
            "3 Scanner Keyboard" => "fas fa-scanner-keyboard",
            "4 Scanner Keyboard" => "far fa-scanner-keyboard",
            "5 Scanner Keyboard" => "fal fa-scanner-keyboard",
            "6 Scanner Touchscreen" => "fas fa-scanner-touchscreen",
            "7 Scanner Touchscreen" => "far fa-scanner-touchscreen",
            "8 Scanner Touchscreen" => "fal fa-scanner-touchscreen",
            "9 Search" => "fas fa-search",
            "1 Search" => "far fa-search",
            "2 Search" => "fal fa-search",
            "3 Search Minus" => "fas fa-search-minus",
            "4 Search Minus" => "far fa-search-minus",
            "5 Search Minus" => "fal fa-search-minus",
            "6 Search Plus" => "fas fa-search-plus",
            "7 Search Plus" => "far fa-search-plus",
            "8 Search Plus" => "fal fa-search-plus",
            "9 Share Alt" => "fas fa-share-alt",
            "1 Share Alt" => "far fa-share-alt",
            "2 Share Alt" => "fal fa-share-alt",
            "3 Share Alt Square" => "fas fa-share-alt-square",
            "4 Share Alt Square" => "far fa-share-alt-square",
            "5 Share Alt Square" => "fal fa-share-alt-square",
            "6 Shipping Fast" => "fas fa-shipping-fast",
            "7 Shipping Fast" => "far fa-shipping-fast",
            "8 Shipping Fast" => "fal fa-shipping-fast",
            "9 Shipping Timed" => "fas fa-shipping-timed",
            "1 Shipping Timed" => "far fa-shipping-timed",
            "2 Shipping Timed" => "fal fa-shipping-timed",
            "3 Signal" => "fas fa-signal",
            "4 Signal" => "far fa-signal",
            "5 Signal" => "fal fa-signal",
            "6 Signal 1" => "fas fa-signal-1",
            "7 Signal 1" => "far fa-signal-1",
            "8 Signal 1" => "fal fa-signal-1",
            "9 Signal 2" => "fas fa-signal-2",
            "1 Signal 2" => "far fa-signal-2",
            "2 Signal 2" => "fal fa-signal-2",
            "3 Signal 3" => "fas fa-signal-3",
            "4 Signal 3" => "far fa-signal-3",
            "5 Signal 3" => "fal fa-signal-3",
            "6 Signal 4" => "fas fa-signal-4",
            "7 Signal 4" => "far fa-signal-4",
            "8 Signal 4" => "fal fa-signal-4",
            "9 Signal Alt" => "fas fa-signal-alt",
            "1 Signal Alt" => "far fa-signal-alt",
            "2 Signal Alt" => "fal fa-signal-alt",
            "3 Signal Alt 1" => "fas fa-signal-alt-1",
            "4 Signal Alt 1" => "far fa-signal-alt-1",
            "5 Signal Alt 1" => "fal fa-signal-alt-1",
            "6 Signal Alt 2" => "fas fa-signal-alt-2",
            "7 Signal Alt 2" => "far fa-signal-alt-2",
            "8 Signal Alt 2" => "fal fa-signal-alt-2",
            "9 Signal Alt 3" => "fas fa-signal-alt-3",
            "1 Signal Alt 3" => "far fa-signal-alt-3",
            "2 Signal Alt 3" => "fal fa-signal-alt-3",
            "3 Signal Alt Slash" => "fas fa-signal-alt-slash",
            "4 Signal Alt Slash" => "far fa-signal-alt-slash",
            "5 Signal Alt Slash" => "fal fa-signal-alt-slash",
            "6 Signal Slash" => "fas fa-signal-slash",
            "7 Signal Slash" => "far fa-signal-slash",
            "8 Signal Slash" => "fal fa-signal-slash",
            "9 Sliders H" => "fas fa-sliders-h",
            "1 Sliders H" => "far fa-sliders-h",
            "2 Sliders H" => "fal fa-sliders-h",
            "3 Sliders H Square" => "fas fa-sliders-h-square",
            "4 Sliders H Square" => "far fa-sliders-h-square",
            "5 Sliders H Square" => "fal fa-sliders-h-square",
            "6 Sliders V" => "fas fa-sliders-v",
            "7 Sliders V" => "far fa-sliders-v",
            "8 Sliders V" => "fal fa-sliders-v",
            "9 Sliders V Square" => "fas fa-sliders-v-square",
            "1 Sliders V Square" => "far fa-sliders-v-square",
            "2 Sliders V Square" => "fal fa-sliders-v-square",
            "3 Star" => "fas fa-star",
            "4 Star" => "far fa-star",
            "5 Star" => "fal fa-star",
            "6 Star Half" => "fas fa-star-half",
            "7 Star Half" => "far fa-star-half",
            "8 Star Half" => "fal fa-star-half",
            "9 Tablet Rugged" => "fas fa-tablet-rugged",
            "1 Tablet Rugged" => "far fa-tablet-rugged",
            "2 Tablet Rugged" => "fal fa-tablet-rugged",
            "3 Times" => "fas fa-times",
            "4 Times" => "far fa-times",
            "5 Times" => "fal fa-times",
            "6 Times Circle" => "fas fa-times-circle",
            "7 Times Circle" => "far fa-times-circle",
            "8 Times Circle" => "fal fa-times-circle",
            "9 Times Hexagon" => "fas fa-times-hexagon",
            "1 Times Hexagon" => "far fa-times-hexagon",
            "2 Times Hexagon" => "fal fa-times-hexagon",
            "3 Times Octagon" => "fas fa-times-octagon",
            "4 Times Octagon" => "far fa-times-octagon",
            "5 Times Octagon" => "fal fa-times-octagon",
            "6 Times Square" => "fas fa-times-square",
            "7 Times Square" => "far fa-times-square",
            "8 Times Square" => "fal fa-times-square",
            "9 Toggle Off" => "fas fa-toggle-off",
            "1 Toggle Off" => "far fa-toggle-off",
            "2 Toggle Off" => "fal fa-toggle-off",
            "3 Toggle On" => "fas fa-toggle-on",
            "4 Toggle On" => "far fa-toggle-on",
            "5 Toggle On" => "fal fa-toggle-on",
            "6 Trophy" => "fas fa-trophy",
            "7 Trophy" => "far fa-trophy",
            "8 Trophy" => "fal fa-trophy",
            "9 Trophy Alt" => "fas fa-trophy-alt",
            "1 Trophy Alt" => "far fa-trophy-alt",
            "2 Trophy Alt" => "fal fa-trophy-alt",
            "3 User" => "fas fa-user",
            "4 User" => "far fa-user",
            "5 User" => "fal fa-user",
            "6 User Alt" => "fas fa-user-alt",
            "7 User Alt" => "far fa-user-alt",
            "8 User Alt" => "fal fa-user-alt",
            "9 User Circle" => "fas fa-user-circle",
            "1 User Circle" => "far fa-user-circle",
            "2 User Circle" => "fal fa-user-circle",
            "3 Wifi 1" => "fas fa-wifi-1",
            "4 Wifi 1" => "far fa-wifi-1",
            "5 Wifi 1" => "fal fa-wifi-1",
            "6 Wifi 2" => "fas fa-wifi-2",
            "7 Wifi 2" => "far fa-wifi-2",
            "8 Wifi 2" => "fal fa-wifi-2",
            "9 Abacus" => "fas fa-abacus",
            "1 Abacus" => "far fa-abacus",
            "2 Abacus" => "fal fa-abacus",
            "3 Ad" => "fas fa-ad",
            "4 Ad" => "far fa-ad",
            "5 Ad" => "fal fa-ad",
            "6 Anchor" => "fas fa-anchor",
            "7 Anchor" => "far fa-anchor",
            "8 Anchor" => "fal fa-anchor",
            "9 Band Aid" => "fas fa-band-aid",
            "1 Band Aid" => "far fa-band-aid",
            "2 Band Aid" => "fal fa-band-aid",
            "3 Biohazard" => "fas fa-biohazard",
            "4 Biohazard" => "far fa-biohazard",
            "5 Biohazard" => "fal fa-biohazard",
            "6 Bomb" => "fas fa-bomb",
            "7 Bomb" => "far fa-bomb",
            "8 Bomb" => "fal fa-bomb",
            "9 Bone Break" => "fas fa-bone-break",
            "1 Bone Break" => "far fa-bone-break",
            "2 Bone Break" => "fal fa-bone-break",
            "3 Bong" => "fas fa-bong",
            "4 Bong" => "far fa-bong",
            "5 Bong" => "fal fa-bong",
            "6 Book Medical" => "fas fa-book-medical",
            "7 Book Medical" => "far fa-book-medical",
            "8 Book Medical" => "fal fa-book-medical",
            "9 Book User" => "fas fa-book-user",
            "1 Book User" => "far fa-book-user",
            "2 Book User" => "fal fa-book-user",
            "3 Bookmark" => "fas fa-bookmark",
            "4 Bookmark" => "far fa-bookmark",
            "5 Bookmark" => "fal fa-bookmark",
            "6 Books Medical" => "fas fa-books-medical",
            "7 Books Medical" => "far fa-books-medical",
            "8 Books Medical" => "fal fa-books-medical",
            "9 Brain" => "fas fa-brain",
            "1 Brain" => "far fa-brain",
            "2 Brain" => "fal fa-brain",
            "3 Briefcase Medical" => "fas fa-briefcase-medical",
            "4 Briefcase Medical" => "far fa-briefcase-medical",
            "5 Briefcase Medical" => "fal fa-briefcase-medical",
            "6 Bullseye Arrow" => "fas fa-bullseye-arrow",
            "7 Bullseye Arrow" => "far fa-bullseye-arrow",
            "8 Bullseye Arrow" => "fal fa-bullseye-arrow",
            "9 Bullseye Pointer" => "fas fa-bullseye-pointer",
            "1 Bullseye Pointer" => "far fa-bullseye-pointer",
            "2 Bullseye Pointer" => "fal fa-bullseye-pointer",
            "3 Calculator Alt" => "fas fa-calculator-alt",
            "4 Calculator Alt" => "far fa-calculator-alt",
            "5 Calculator Alt" => "fal fa-calculator-alt",
            "6 Cannabis" => "fas fa-cannabis",
            "7 Cannabis" => "far fa-cannabis",
            "8 Cannabis" => "fal fa-cannabis",
            "9 Capsules" => "fas fa-capsules",
            "1 Capsules" => "far fa-capsules",
            "2 Capsules" => "fal fa-capsules",
            "3 Clipboard Prescription" => "fas fa-clipboard-prescription",
            "4 Clipboard Prescription" => "far fa-clipboard-prescription",
            "5 Clipboard Prescription" => "fal fa-clipboard-prescription",
            "6 Clipboard User" => "fas fa-clipboard-user",
            "7 Clipboard User" => "far fa-clipboard-user",
            "8 Clipboard User" => "fal fa-clipboard-user",
            "9 Compass Slash" => "fas fa-compass-slash",
            "1 Compass Slash" => "far fa-compass-slash",
            "2 Compass Slash" => "fal fa-compass-slash",
            "3 Crutch" => "fas fa-crutch",
            "4 Crutch" => "far fa-crutch",
            "5 Crutch" => "fal fa-crutch",
            "6 Crutches" => "fas fa-crutches",
            "7 Crutches" => "far fa-crutches",
            "8 Crutches" => "fal fa-crutches",
            "9 Dharmachakra" => "fas fa-dharmachakra",
            "1 Dharmachakra" => "far fa-dharmachakra",
            "2 Dharmachakra" => "fal fa-dharmachakra",
            "3 Diagnoses" => "fas fa-diagnoses",
            "4 Diagnoses" => "far fa-diagnoses",
            "5 Diagnoses" => "fal fa-diagnoses",
            "6 Directions" => "fas fa-directions",
            "7 Directions" => "far fa-directions",
            "8 Directions" => "fal fa-directions",
            "9 Disease" => "fas fa-disease",
            "1 Disease" => "far fa-disease",
            "2 Disease" => "fal fa-disease",
            "3 Divide" => "fas fa-divide",
            "4 Divide" => "far fa-divide",
            "5 Divide" => "fal fa-divide",
            "6 Dna" => "fas fa-dna",
            "7 Dna" => "far fa-dna",
            "8 Dna" => "fal fa-dna",
            "9 Do Not Enter" => "fas fa-do-not-enter",
            "1 Do Not Enter" => "far fa-do-not-enter",
            "2 Do Not Enter" => "fal fa-do-not-enter",
            "3 Ear" => "fas fa-ear",
            "4 Ear" => "far fa-ear",
            "5 Ear" => "fal fa-ear",
            "6 Empty Set" => "fas fa-empty-set",
            "7 Empty Set" => "far fa-empty-set",
            "8 Empty Set" => "fal fa-empty-set",
            "9 Envelope Open Dollar" => "fas fa-envelope-open-dollar",
            "1 Envelope Open Dollar" => "far fa-envelope-open-dollar",
            "2 Envelope Open Dollar" => "fal fa-envelope-open-dollar",
            "3 Envelope Open Text" => "fas fa-envelope-open-text",
            "4 Envelope Open Text" => "far fa-envelope-open-text",
            "5 Envelope Open Text" => "fal fa-envelope-open-text",
            "6 Equals" => "fas fa-equals",
            "7 Equals" => "far fa-equals",
            "8 Equals" => "fal fa-equals",
            "9 Fighter Jet" => "fas fa-fighter-jet",
            "1 Fighter Jet" => "far fa-fighter-jet",
            "2 Fighter Jet" => "fal fa-fighter-jet",
            "3 File Medical" => "fas fa-file-medical",
            "4 File Medical" => "far fa-file-medical",
            "5 File Medical" => "fal fa-file-medical",
            "6 File Medical Alt" => "fas fa-file-medical-alt",
            "7 File Medical Alt" => "far fa-file-medical-alt",
            "8 File Medical Alt" => "fal fa-file-medical-alt",
            "9 File Prescription" => "fas fa-file-prescription",
            "1 File Prescription" => "far fa-file-prescription",
            "2 File Prescription" => "fal fa-file-prescription",
            "3 Files Medical" => "fas fa-files-medical",
            "4 Files Medical" => "far fa-files-medical",
            "5 Files Medical" => "fal fa-files-medical",
            "6 Function" => "fas fa-function",
            "7 Function" => "far fa-function",
            "8 Function" => "fal fa-function",
            "9 Funnel Dollar" => "fas fa-funnel-dollar",
            "1 Funnel Dollar" => "far fa-funnel-dollar",
            "2 Funnel Dollar" => "fal fa-funnel-dollar",
            "3 Gavel" => "fas fa-gavel",
            "4 Gavel" => "far fa-gavel",
            "5 Gavel" => "fal fa-gavel",
            "6 Gift Card" => "fas fa-gift-card",
            "7 Gift Card" => "far fa-gift-card",
            "8 Gift Card" => "fal fa-gift-card",
            "9 Greater Than" => "fas fa-greater-than",
            "1 Greater Than" => "far fa-greater-than",
            "2 Greater Than" => "fal fa-greater-than",
            "3 Greater Than Equal" => "fas fa-greater-than-equal",
            "4 Greater Than Equal" => "far fa-greater-than-equal",
            "5 Greater Than Equal" => "fal fa-greater-than-equal",
            "6 Head Side Brain" => "fas fa-head-side-brain",
            "7 Head Side Brain" => "far fa-head-side-brain",
            "8 Head Side Brain" => "fal fa-head-side-brain",
            "9 Head Side Medical" => "fas fa-head-side-medical",
            "1 Head Side Medical" => "far fa-head-side-medical",
            "2 Head Side Medical" => "fal fa-head-side-medical",
            "3 Helicopter" => "fas fa-helicopter",
            "4 Helicopter" => "far fa-helicopter",
            "5 Helicopter" => "fal fa-helicopter",
            "6 Hospital Symbol" => "fas fa-hospital-symbol",
            "7 Hospital Symbol" => "far fa-hospital-symbol",
            "8 Hospital Symbol" => "fal fa-hospital-symbol",
            "9 Id Card Alt" => "fas fa-id-card-alt",
            "1 Id Card Alt" => "far fa-id-card-alt",
            "2 Id Card Alt" => "fal fa-id-card-alt",
            "3 Inhaler" => "fas fa-inhaler",
            "4 Inhaler" => "far fa-inhaler",
            "5 Inhaler" => "fal fa-inhaler",
            "6 Integral" => "fas fa-integral",
            "7 Integral" => "far fa-integral",
            "8 Integral" => "fal fa-integral",
            "9 Intersection" => "fas fa-intersection",
            "1 Intersection" => "far fa-intersection",
            "2 Intersection" => "fal fa-intersection",
            "3 Island Tropical" => "fas fa-island-tropical",
            "4 Island Tropical" => "far fa-island-tropical",
            "5 Island Tropical" => "fal fa-island-tropical",
            "6 Joint" => "fas fa-joint",
            "7 Joint" => "far fa-joint",
            "8 Joint" => "fal fa-joint",
            "9 Kidneys" => "fas fa-kidneys",
            "1 Kidneys" => "far fa-kidneys",
            "2 Kidneys" => "fal fa-kidneys",
            "3 Lambda" => "fas fa-lambda",
            "4 Lambda" => "far fa-lambda",
            "5 Lambda" => "fal fa-lambda",
            "6 Laptop Medical" => "fas fa-laptop-medical",
            "7 Laptop Medical" => "far fa-laptop-medical",
            "8 Laptop Medical" => "fal fa-laptop-medical",
            "9 Less Than" => "fas fa-less-than",
            "1 Less Than" => "far fa-less-than",
            "2 Less Than" => "fal fa-less-than",
            "3 Less Than Equal" => "fas fa-less-than-equal",
            "4 Less Than Equal" => "far fa-less-than-equal",
            "5 Less Than Equal" => "fal fa-less-than-equal",
            "6 Life Ring" => "fas fa-life-ring",
            "7 Life Ring" => "far fa-life-ring",
            "8 Life Ring" => "fal fa-life-ring",
            "9 Lightbulb Dollar" => "fas fa-lightbulb-dollar",
            "1 Lightbulb Dollar" => "far fa-lightbulb-dollar",
            "2 Lightbulb Dollar" => "fal fa-lightbulb-dollar",
            "3 Lightbulb On" => "fas fa-lightbulb-on",
            "4 Lightbulb On" => "far fa-lightbulb-on",
            "5 Lightbulb On" => "fal fa-lightbulb-on",
            "6 Lightbulb Slash" => "fas fa-lightbulb-slash",
            "7 Lightbulb Slash" => "far fa-lightbulb-slash",
            "8 Lightbulb Slash" => "fal fa-lightbulb-slash",
            "9 Lips" => "fas fa-lips",
            "1 Lips" => "far fa-lips",
            "2 Lips" => "fal fa-lips",
            "3 Location" => "fas fa-location",
            "4 Location" => "far fa-location",
            "5 Location" => "fal fa-location",
            "6 Location Circle" => "fas fa-location-circle",
            "7 Location Circle" => "far fa-location-circle",
            "8 Location Circle" => "fal fa-location-circle",
            "9 Location Slash" => "fas fa-location-slash",
            "1 Location Slash" => "far fa-location-slash",
            "2 Location Slash" => "fal fa-location-slash",
            "3 Lungs" => "fas fa-lungs",
            "4 Lungs" => "far fa-lungs",
            "5 Lungs" => "fal fa-lungs",
            "6 Magnet" => "fas fa-magnet",
            "7 Magnet" => "far fa-magnet",
            "8 Magnet" => "fal fa-magnet",
            "9 Mail Bulk" => "fas fa-mail-bulk",
            "1 Mail Bulk" => "far fa-mail-bulk",
            "2 Mail Bulk" => "fal fa-mail-bulk",
            "3 Male" => "fas fa-male",
            "4 Male" => "far fa-male",
            "5 Male" => "fal fa-male",
            "6 Map Marker" => "fas fa-map-marker",
            "7 Map Marker" => "far fa-map-marker",
            "8 Map Marker" => "fal fa-map-marker",
            "9 Map Marker Alt" => "fas fa-map-marker-alt",
            "1 Map Marker Alt" => "far fa-map-marker-alt",
            "2 Map Marker Alt" => "fal fa-map-marker-alt",
            "3 Map Marker Alt Slash" => "fas fa-map-marker-alt-slash",
            "4 Map Marker Alt Slash" => "far fa-map-marker-alt-slash",
            "5 Map Marker Alt Slash" => "fal fa-map-marker-alt-slash",
            "6 Map Marker Check" => "fas fa-map-marker-check",
            "7 Map Marker Check" => "far fa-map-marker-check",
            "8 Map Marker Check" => "fal fa-map-marker-check",
            "9 Map Marker Edit" => "fas fa-map-marker-edit",
            "1 Map Marker Edit" => "far fa-map-marker-edit",
            "2 Map Marker Edit" => "fal fa-map-marker-edit",
            "3 Map Marker Minus" => "fas fa-map-marker-minus",
            "4 Map Marker Minus" => "far fa-map-marker-minus",
            "5 Map Marker Minus" => "fal fa-map-marker-minus",
            "6 Map Marker Plus" => "fas fa-map-marker-plus",
            "7 Map Marker Plus" => "far fa-map-marker-plus",
            "8 Map Marker Plus" => "fal fa-map-marker-plus",
            "9 Map Marker Question" => "fas fa-map-marker-question",
            "1 Map Marker Question" => "far fa-map-marker-question",
            "2 Map Marker Question" => "fal fa-map-marker-question",
            "3 Map Marker Slash" => "fas fa-map-marker-slash",
            "4 Map Marker Slash" => "far fa-map-marker-slash",
            "5 Map Marker Slash" => "fal fa-map-marker-slash",
            "6 Map Marker Smile" => "fas fa-map-marker-smile",
            "7 Map Marker Smile" => "far fa-map-marker-smile",
            "8 Map Marker Smile" => "fal fa-map-marker-smile",
            "9 Map Marker Times" => "fas fa-map-marker-times",
            "1 Map Marker Times" => "far fa-map-marker-times",
            "2 Map Marker Times" => "fal fa-map-marker-times",
            "3 Map Pin" => "fas fa-map-pin",
            "4 Map Pin" => "far fa-map-pin",
            "5 Map Pin" => "fal fa-map-pin",
            "6 Megaphone" => "fas fa-megaphone",
            "7 Megaphone" => "far fa-megaphone",
            "8 Megaphone" => "fal fa-megaphone",
            "9 Mortar Pestle" => "fas fa-mortar-pestle",
            "1 Mortar Pestle" => "far fa-mortar-pestle",
            "2 Mortar Pestle" => "fal fa-mortar-pestle",
            "3 Newspaper" => "fas fa-newspaper",
            "4 Newspaper" => "far fa-newspaper",
            "5 Newspaper" => "fal fa-newspaper",
            "6 Not Equal" => "fas fa-not-equal",
            "7 Not Equal" => "far fa-not-equal",
            "8 Not Equal" => "fal fa-not-equal",
            "9 Notes Medical" => "fas fa-notes-medical",
            "1 Notes Medical" => "far fa-notes-medical",
            "2 Notes Medical" => "fal fa-notes-medical",
            "3 Omega" => "fas fa-omega",
            "4 Omega" => "far fa-omega",
            "5 Omega" => "fal fa-omega",
            "6 Pager" => "fas fa-pager",
            "7 Pager" => "far fa-pager",
            "8 Pager" => "fal fa-pager",
            "9 Parking" => "fas fa-parking",
            "1 Parking" => "far fa-parking",
            "2 Parking" => "fal fa-parking",
            "3 Parking Circle" => "fas fa-parking-circle",
            "4 Parking Circle" => "far fa-parking-circle",
            "5 Parking Circle" => "fal fa-parking-circle",
            "6 Parking Circle Slash" => "fas fa-parking-circle-slash",
            "7 Parking Circle Slash" => "far fa-parking-circle-slash",
            "8 Parking Circle Slash" => "fal fa-parking-circle-slash",
            "9 Parking Slash" => "fas fa-parking-slash",
            "1 Parking Slash" => "far fa-parking-slash",
            "2 Parking Slash" => "fal fa-parking-slash",
            "3 Pi" => "fas fa-pi",
            "4 Pi" => "far fa-pi",
            "5 Pi" => "fal fa-pi",
            "6 Pills" => "fas fa-pills",
            "7 Pills" => "far fa-pills",
            "8 Pills" => "fal fa-pills",
            "9 Plane" => "fas fa-plane",
            "1 Plane" => "far fa-plane",
            "2 Plane" => "fal fa-plane",
            "3 Plane Alt" => "fas fa-plane-alt",
            "4 Plane Alt" => "far fa-plane-alt",
            "5 Plane Alt" => "fal fa-plane-alt",
            "6 Poll" => "fas fa-poll",
            "7 Poll" => "far fa-poll",
            "8 Poll" => "fal fa-poll",
            "9 Poll H" => "fas fa-poll-h",
            "1 Poll H" => "far fa-poll-h",
            "2 Poll H" => "fal fa-poll-h",
            "3 Prescription Bottle" => "fas fa-prescription-bottle",
            "4 Prescription Bottle" => "far fa-prescription-bottle",
            "5 Prescription Bottle" => "fal fa-prescription-bottle",
            "6 Prescription Bottle Alt" => "fas fa-prescription-bottle-alt",
            "7 Prescription Bottle Alt" => "far fa-prescription-bottle-alt",
            "8 Prescription Bottle Alt" => "fal fa-prescription-bottle-alt",
            "9 Procedures" => "fas fa-procedures",
            "1 Procedures" => "far fa-procedures",
            "2 Procedures" => "fal fa-procedures",
            "3 Raindrops" => "fas fa-raindrops",
            "4 Raindrops" => "far fa-raindrops",
            "5 Raindrops" => "fal fa-raindrops",
            "6 Restroom" => "fas fa-restroom",
            "7 Restroom" => "far fa-restroom",
            "8 Restroom" => "fal fa-restroom",
            "9 Road" => "fas fa-road",
            "1 Road" => "far fa-road",
            "2 Road" => "fal fa-road",
            "3 Rocket" => "fas fa-rocket",
            "4 Rocket" => "far fa-rocket",
            "5 Rocket" => "fal fa-rocket",
            "6 Route Highway" => "fas fa-route-highway",
            "7 Route Highway" => "far fa-route-highway",
            "8 Route Highway" => "fal fa-route-highway",
            "9 Route Interstate" => "fas fa-route-interstate",
            "1 Route Interstate" => "far fa-route-interstate",
            "2 Route Interstate" => "fal fa-route-interstate",
            "3 Scalpel" => "fas fa-scalpel",
            "4 Scalpel" => "far fa-scalpel",
            "5 Scalpel" => "fal fa-scalpel",
            "6 Scalpel Path" => "fas fa-scalpel-path",
            "7 Scalpel Path" => "far fa-scalpel-path",
            "8 Scalpel Path" => "fal fa-scalpel-path",
            "9 Search Dollar" => "fas fa-search-dollar",
            "1 Search Dollar" => "far fa-search-dollar",
            "2 Search Dollar" => "fal fa-search-dollar",
            "3 Search Location" => "fas fa-search-location",
            "4 Search Location" => "far fa-search-location",
            "5 Search Location" => "fal fa-search-location",
            "6 Ship" => "fas fa-ship",
            "7 Ship" => "far fa-ship",
            "8 Ship" => "fal fa-ship",
            "9 Shopping Bag" => "fas fa-shopping-bag",
            "1 Shopping Bag" => "far fa-shopping-bag",
            "2 Shopping Bag" => "fal fa-shopping-bag",
            "3 Shopping Basket" => "fas fa-shopping-basket",
            "4 Shopping Basket" => "far fa-shopping-basket",
            "5 Shopping Basket" => "fal fa-shopping-basket",
            "6 Shopping Cart" => "fas fa-shopping-cart",
            "7 Shopping Cart" => "far fa-shopping-cart",
            "8 Shopping Cart" => "fal fa-shopping-cart",
            "9 Sigma" => "fas fa-sigma",
            "1 Sigma" => "far fa-sigma",
            "2 Sigma" => "fal fa-sigma",
            "3 Skeleton" => "fas fa-skeleton",
            "4 Skeleton" => "far fa-skeleton",
            "5 Skeleton" => "fal fa-skeleton",
            "6 Snowplow" => "fas fa-snowplow",
            "7 Snowplow" => "far fa-snowplow",
            "8 Snowplow" => "fal fa-snowplow",
            "9 Square Root" => "fas fa-square-root",
            "1 Square Root" => "far fa-square-root",
            "2 Square Root" => "fal fa-square-root",
            "3 Square Root Alt" => "fas fa-square-root-alt",
            "4 Square Root Alt" => "far fa-square-root-alt",
            "5 Square Root Alt" => "fal fa-square-root-alt",
            "6 Star Of Life" => "fas fa-star-of-life",
            "7 Star Of Life" => "far fa-star-of-life",
            "8 Star Of Life" => "fal fa-star-of-life",
            "9 Stars" => "fas fa-stars",
            "1 Stars" => "far fa-stars",
            "2 Stars" => "fal fa-stars",
            "3 Stomach" => "fas fa-stomach",
            "4 Stomach" => "far fa-stomach",
            "5 Stomach" => "fal fa-stomach",
            "6 Street View" => "fas fa-street-view",
            "7 Street View" => "far fa-street-view",
            "8 Street View" => "fal fa-street-view",
            "9 Stretcher" => "fas fa-stretcher",
            "1 Stretcher" => "far fa-stretcher",
            "2 Stretcher" => "fal fa-stretcher",
            "3 Subway" => "fas fa-subway",
            "4 Subway" => "far fa-subway",
            "5 Subway" => "fal fa-subway",
            "6 Syringe" => "fas fa-syringe",
            "7 Syringe" => "far fa-syringe",
            "8 Syringe" => "fal fa-syringe",
            "9 Tablets" => "fas fa-tablets",
            "1 Tablets" => "far fa-tablets",
            "2 Tablets" => "fal fa-tablets",
            "3 Teeth" => "fas fa-teeth",
            "4 Teeth" => "far fa-teeth",
            "5 Teeth" => "fal fa-teeth",
            "6 Teeth Open" => "fas fa-teeth-open",
            "7 Teeth Open" => "far fa-teeth-open",
            "8 Teeth Open" => "fal fa-teeth-open",
            "9 Thermometer" => "fas fa-thermometer",
            "1 Thermometer" => "far fa-thermometer",
            "2 Thermometer" => "fal fa-thermometer",
            "3 Theta" => "fas fa-theta",
            "4 Theta" => "far fa-theta",
            "5 Theta" => "fal fa-theta",
            "6 Ticket" => "fas fa-ticket",
            "7 Ticket" => "far fa-ticket",
            "8 Ticket" => "fal fa-ticket",
            "9 Ticket Alt" => "fas fa-ticket-alt",
            "1 Ticket Alt" => "far fa-ticket-alt",
            "2 Ticket Alt" => "fal fa-ticket-alt",
            "3 Tilde" => "fas fa-tilde",
            "4 Tilde" => "far fa-tilde",
            "5 Tilde" => "fal fa-tilde",
            "6 Tooth" => "fas fa-tooth",
            "7 Tooth" => "far fa-tooth",
            "8 Tooth" => "fal fa-tooth",
            "9 Toothbrush" => "fas fa-toothbrush",
            "1 Toothbrush" => "far fa-toothbrush",
            "2 Toothbrush" => "fal fa-toothbrush",
            "3 Traffic Light" => "fas fa-traffic-light",
            "4 Traffic Light" => "far fa-traffic-light",
            "5 Traffic Light" => "fal fa-traffic-light",
            "6 Traffic Light Go" => "fas fa-traffic-light-go",
            "7 Traffic Light Go" => "far fa-traffic-light-go",
            "8 Traffic Light Go" => "fal fa-traffic-light-go",
            "9 Traffic Light Slow" => "fas fa-traffic-light-slow",
            "1 Traffic Light Slow" => "far fa-traffic-light-slow",
            "2 Traffic Light Slow" => "fal fa-traffic-light-slow",
            "3 Traffic Light Stop" => "fas fa-traffic-light-stop",
            "4 Traffic Light Stop" => "far fa-traffic-light-stop",
            "5 Traffic Light Stop" => "fal fa-traffic-light-stop",
            "6 Train" => "fas fa-train",
            "7 Train" => "far fa-train",
            "8 Train" => "fal fa-train",
            "9 Tram" => "fas fa-tram",
            "1 Tram" => "far fa-tram",
            "2 Tram" => "fal fa-tram",
            "3 Truck Plow" => "fas fa-truck-plow",
            "4 Truck Plow" => "far fa-truck-plow",
            "5 Truck Plow" => "fal fa-truck-plow",
            "6 Umbrella" => "fas fa-umbrella",
            "7 Umbrella" => "far fa-umbrella",
            "8 Umbrella" => "fal fa-umbrella",
            "9 Union" => "fas fa-union",
            "1 Union" => "far fa-union",
            "2 Union" => "fal fa-union",
            "3 User Crown" => "fas fa-user-crown",
            "4 User Crown" => "far fa-user-crown",
            "5 User Crown" => "fal fa-user-crown",
            "6 User Md Chat" => "fas fa-user-md-chat",
            "7 User Md Chat" => "far fa-user-md-chat",
            "8 User Md Chat" => "fal fa-user-md-chat",
            "9 User Nurse" => "fas fa-user-nurse",
            "1 User Nurse" => "far fa-user-nurse",
            "2 User Nurse" => "fal fa-user-nurse",
            "3 Users Crown" => "fas fa-users-crown",
            "4 Users Crown" => "far fa-users-crown",
            "5 Users Crown" => "fal fa-users-crown",
            "6 Users Medical" => "fas fa-users-medical",
            "7 Users Medical" => "far fa-users-medical",
            "8 Users Medical" => "fal fa-users-medical",
            "9 Utensil Fork" => "fas fa-utensil-fork",
            "1 Utensil Fork" => "far fa-utensil-fork",
            "2 Utensil Fork" => "fal fa-utensil-fork",
            "3 Utensil Knife" => "fas fa-utensil-knife",
            "4 Utensil Knife" => "far fa-utensil-knife",
            "5 Utensil Knife" => "fal fa-utensil-knife",
            "6 Utensil Spoon" => "fas fa-utensil-spoon",
            "7 Utensil Spoon" => "far fa-utensil-spoon",
            "8 Utensil Spoon" => "fal fa-utensil-spoon",
            "9 Value Absolute" => "fas fa-value-absolute",
            "1 Value Absolute" => "far fa-value-absolute",
            "2 Value Absolute" => "fal fa-value-absolute",
            "3 Vial" => "fas fa-vial",
            "4 Vial" => "far fa-vial",
            "5 Vial" => "fal fa-vial",
            "6 Vials" => "fas fa-vials",
            "7 Vials" => "far fa-vials",
            "8 Vials" => "fal fa-vials",
            "9 Walker" => "fas fa-walker",
            "1 Walker" => "far fa-walker",
            "2 Walker" => "fal fa-walker",
            "3 Water Lower" => "fas fa-water-lower",
            "4 Water Lower" => "far fa-water-lower",
            "5 Water Lower" => "fal fa-water-lower",
            "6 Water Rise" => "fas fa-water-rise",
            "7 Water Rise" => "far fa-water-rise",
            "8 Water Rise" => "fal fa-water-rise",
            "9 Weight" => "fas fa-weight",
            "1 Weight" => "far fa-weight",
            "2 Weight" => "fal fa-weight",
            "3 X Ray" => "fas fa-x-ray",
            "4 X Ray" => "far fa-x-ray",
            "5 X Ray" => "fal fa-x-ray",
            "6 Axe Battle" => "fas fa-axe-battle",
            "7 Axe Battle" => "far fa-axe-battle",
            "8 Axe Battle" => "fal fa-axe-battle",
            "9 Ball Pile" => "fas fa-ball-pile",
            "1 Ball Pile" => "far fa-ball-pile",
            "2 Ball Pile" => "fal fa-ball-pile",
            "3 Bow Arrow" => "fas fa-bow-arrow",
            "4 Bow Arrow" => "far fa-bow-arrow",
            "5 Bow Arrow" => "fal fa-bow-arrow",
            "6 Box Alt" => "fas fa-box-alt",
            "7 Box Alt" => "far fa-box-alt",
            "8 Box Alt" => "fal fa-box-alt",
            "9 Box Fragile" => "fas fa-box-fragile",
            "1 Box Fragile" => "far fa-box-fragile",
            "2 Box Fragile" => "fal fa-box-fragile",
            "3 Box Full" => "fas fa-box-full",
            "4 Box Full" => "far fa-box-full",
            "5 Box Full" => "fal fa-box-full",
            "6 Box Open" => "fas fa-box-open",
            "7 Box Open" => "far fa-box-open",
            "8 Box Open" => "fal fa-box-open",
            "9 Box Up" => "fas fa-box-up",
            "1 Box Up" => "far fa-box-up",
            "2 Box Up" => "fal fa-box-up",
            "3 Boxes Alt" => "fas fa-boxes-alt",
            "4 Boxes Alt" => "far fa-boxes-alt",
            "5 Boxes Alt" => "fal fa-boxes-alt",
            "6 Cube" => "fas fa-cube",
            "7 Cube" => "far fa-cube",
            "8 Cube" => "fal fa-cube",
            "9 Cubes" => "fas fa-cubes",
            "1 Cubes" => "far fa-cubes",
            "2 Cubes" => "fal fa-cubes",
            "3 Dagger" => "fas fa-dagger",
            "4 Dagger" => "far fa-dagger",
            "5 Dagger" => "fal fa-dagger",
            "6 Digital Tachograph" => "fas fa-digital-tachograph",
            "7 Digital Tachograph" => "far fa-digital-tachograph",
            "8 Digital Tachograph" => "fal fa-digital-tachograph",
            "9 Drum" => "fas fa-drum",
            "1 Drum" => "far fa-drum",
            "2 Drum" => "fal fa-drum",
            "3 Drum Steelpan" => "fas fa-drum-steelpan",
            "4 Drum Steelpan" => "far fa-drum-steelpan",
            "5 Drum Steelpan" => "fal fa-drum-steelpan",
            "6 Ear Muffs" => "fas fa-ear-muffs",
            "7 Ear Muffs" => "far fa-ear-muffs",
            "8 Ear Muffs" => "fal fa-ear-muffs",
            "9 Fragile" => "fas fa-fragile",
            "1 Fragile" => "far fa-fragile",
            "2 Fragile" => "fal fa-fragile",
            "3 Futbol" => "fas fa-futbol",
            "4 Futbol" => "far fa-futbol",
            "5 Futbol" => "fal fa-futbol",
            "6 Gem" => "fas fa-gem",
            "7 Gem" => "far fa-gem",
            "8 Gem" => "fal fa-gem",
            "9 Guitar" => "fas fa-guitar",
            "1 Guitar" => "far fa-guitar",
            "2 Guitar" => "fal fa-guitar",
            "3 Hammer War" => "fas fa-hammer-war",
            "4 Hammer War" => "far fa-hammer-war",
            "5 Hammer War" => "fal fa-hammer-war",
            "6 Headphones Alt" => "fas fa-headphones-alt",
            "7 Headphones Alt" => "far fa-headphones-alt",
            "8 Headphones Alt" => "fal fa-headphones-alt",
            "9 Heart Broken" => "fas fa-heart-broken",
            "1 Heart Broken" => "far fa-heart-broken",
            "2 Heart Broken" => "fal fa-heart-broken",
            "3 Helmet Battle" => "fas fa-helmet-battle",
            "4 Helmet Battle" => "far fa-helmet-battle",
            "5 Helmet Battle" => "fal fa-helmet-battle",
            "6 Lock" => "fas fa-lock",
            "7 Lock" => "far fa-lock",
            "8 Lock" => "fal fa-lock",
            "9 Lock Alt" => "fas fa-lock-alt",
            "1 Lock Alt" => "far fa-lock-alt",
            "2 Lock Alt" => "fal fa-lock-alt",
            "3 Lock Open" => "fas fa-lock-open",
            "4 Lock Open" => "far fa-lock-open",
            "5 Lock Open" => "fal fa-lock-open",
            "6 Lock Open Alt" => "fas fa-lock-open-alt",
            "7 Lock Open Alt" => "far fa-lock-open-alt",
            "8 Lock Open Alt" => "fal fa-lock-open-alt",
            "9 Mace" => "fas fa-mace",
            "1 Mace" => "far fa-mace",
            "2 Mace" => "fal fa-mace",
            "3 Mandolin" => "fas fa-mandolin",
            "4 Mandolin" => "far fa-mandolin",
            "5 Mandolin" => "fal fa-mandolin",
            "6 Moon" => "fas fa-moon",
            "7 Moon" => "far fa-moon",
            "8 Moon" => "fal fa-moon",
            "9 Napster" => "fab fa-napster",
            "1 People Carry" => "fas fa-people-carry",
            "2 People Carry" => "far fa-people-carry",
            "3 People Carry" => "fal fa-people-carry",
            "4 Person Carry" => "fas fa-person-carry",
            "5 Person Carry" => "far fa-person-carry",
            "6 Person Carry" => "fal fa-person-carry",
            "7 Person Dolly" => "fas fa-person-dolly",
            "8 Person Dolly" => "far fa-person-dolly",
            "9 Person Dolly" => "fal fa-person-dolly",
            "1 Person Dolly Empty" => "fas fa-person-dolly-empty",
            "2 Person Dolly Empty" => "far fa-person-dolly-empty",
            "3 Person Dolly Empty" => "fal fa-person-dolly-empty",
            "4 Ramp Loading" => "fas fa-ramp-loading",
            "5 Ramp Loading" => "far fa-ramp-loading",
            "6 Ramp Loading" => "fal fa-ramp-loading",
            "7 Ring" => "fas fa-ring",
            "8 Ring" => "far fa-ring",
            "9 Ring" => "fal fa-ring",
            "1 Scroll" => "fas fa-scroll",
            "2 Scroll" => "far fa-scroll",
            "3 Scroll" => "fal fa-scroll",
            "4 Scroll Old" => "fas fa-scroll-old",
            "5 Scroll Old" => "far fa-scroll-old",
            "6 Scroll Old" => "fal fa-scroll-old",
            "7 Shield Cross" => "fas fa-shield-cross",
            "8 Shield Cross" => "far fa-shield-cross",
            "9 Shield Cross" => "fal fa-shield-cross",
            "1 Shovel Snow" => "fas fa-shovel-snow",
            "2 Shovel Snow" => "far fa-shovel-snow",
            "3 Shovel Snow" => "fal fa-shovel-snow",
            "4 Sign" => "fas fa-sign",
            "5 Sign" => "far fa-sign",
            "6 Sign" => "fal fa-sign",
            "7 Snowmobile" => "fas fa-snowmobile",
            "8 Snowmobile" => "far fa-snowmobile",
            "9 Snowmobile" => "fal fa-snowmobile",
            "1 Soundcloud" => "fab fa-soundcloud",
            "2 Space Shuttle" => "fas fa-space-shuttle",
            "3 Space Shuttle" => "far fa-space-shuttle",
            "4 Space Shuttle" => "fal fa-space-shuttle",
            "5 Spotify" => "fab fa-spotify",
            "6 Staff" => "fas fa-staff",
            "7 Staff" => "far fa-staff",
            "8 Staff" => "fal fa-staff",
            "9 Sword" => "fas fa-sword",
            "1 Sword" => "far fa-sword",
            "2 Sword" => "fal fa-sword",
            "3 Swords" => "fas fa-swords",
            "4 Swords" => "far fa-swords",
            "5 Swords" => "fal fa-swords",
            "6 Tape" => "fas fa-tape",
            "7 Tape" => "far fa-tape",
            "8 Tape" => "fal fa-tape",
            "9 Toilet" => "fas fa-toilet",
            "1 Toilet" => "far fa-toilet",
            "2 Toilet" => "fal fa-toilet",
            "3 Truck Couch" => "fas fa-truck-couch",
            "4 Truck Couch" => "far fa-truck-couch",
            "5 Truck Couch" => "fal fa-truck-couch",
            "6 Truck Loading" => "fas fa-truck-loading",
            "7 Truck Loading" => "far fa-truck-loading",
            "8 Truck Loading" => "fal fa-truck-loading",
            "9 Truck Moving" => "fas fa-truck-moving",
            "1 Truck Moving" => "far fa-truck-moving",
            "2 Truck Moving" => "fal fa-truck-moving",
            "3 Truck Ramp" => "fas fa-truck-ramp",
            "4 Truck Ramp" => "far fa-truck-ramp",
            "5 Truck Ramp" => "fal fa-truck-ramp",
            "6 Unlock" => "fas fa-unlock",
            "7 Unlock" => "far fa-unlock",
            "8 Unlock" => "fal fa-unlock",
            "9 Unlock Alt" => "fas fa-unlock-alt",
            "1 Unlock Alt" => "far fa-unlock-alt",
            "2 Unlock Alt" => "fal fa-unlock-alt",
            "3 Whistle" => "fas fa-whistle",
            "4 Whistle" => "far fa-whistle",
            "5 Whistle" => "fal fa-whistle",
            "6 Alipay" => "fab fa-alipay",
            "7 Amazon Pay" => "fab fa-amazon-pay",
            "8 Ankh" => "fas fa-ankh",
            "9 Ankh" => "far fa-ankh",
            "1 Ankh" => "fal fa-ankh",
            "2 Apple Pay" => "fab fa-apple-pay",
            "3 Asterisk" => "fas fa-asterisk",
            "4 Asterisk" => "far fa-asterisk",
            "5 Asterisk" => "fal fa-asterisk",
            "6 Ballot" => "fas fa-ballot",
            "7 Ballot" => "far fa-ballot",
            "8 Ballot" => "fal fa-ballot",
            "9 Ballot Check" => "fas fa-ballot-check",
            "1 Ballot Check" => "far fa-ballot-check",
            "2 Ballot Check" => "fal fa-ballot-check",
            "3 Baseball Ball" => "fas fa-baseball-ball",
            "4 Baseball Ball" => "far fa-baseball-ball",
            "5 Baseball Ball" => "fal fa-baseball-ball",
            "6 Basketball Ball" => "fas fa-basketball-ball",
            "7 Basketball Ball" => "far fa-basketball-ball",
            "8 Basketball Ball" => "fal fa-basketball-ball",
            "9 Bible" => "fas fa-bible",
            "1 Bible" => "far fa-bible",
            "2 Bible" => "fal fa-bible",
            "3 Booth Curtain" => "fas fa-booth-curtain",
            "4 Booth Curtain" => "far fa-booth-curtain",
            "5 Booth Curtain" => "fal fa-booth-curtain",
            "6 Bowling Ball" => "fas fa-bowling-ball",
            "7 Bowling Ball" => "far fa-bowling-ball",
            "8 Bowling Ball" => "fal fa-bowling-ball",
            "9 Bowling Pins" => "fas fa-bowling-pins",
            "1 Bowling Pins" => "far fa-bowling-pins",
            "2 Bowling Pins" => "fal fa-bowling-pins",
            "3 Box Ballot" => "fas fa-box-ballot",
            "4 Box Ballot" => "far fa-box-ballot",
            "5 Box Ballot" => "fal fa-box-ballot",
            "6 Boxing Glove" => "fas fa-boxing-glove",
            "7 Boxing Glove" => "far fa-boxing-glove",
            "8 Boxing Glove" => "fal fa-boxing-glove",
            "9 Calendar Star" => "fas fa-calendar-star",
            "1 Calendar Star" => "far fa-calendar-star",
            "2 Calendar Star" => "fal fa-calendar-star",
            "3 Cart Plus" => "fas fa-cart-plus",
            "4 Cart Plus" => "far fa-cart-plus",
            "5 Cart Plus" => "fal fa-cart-plus",
            "6 Cc Amazon Pay" => "fab fa-cc-amazon-pay",
            "7 Cc Amex" => "fab fa-cc-amex",
            "8 Cc Apple Pay" => "fab fa-cc-apple-pay",
            "9 Cc Diners Club" => "fab fa-cc-diners-club",
            "1 Cc Discover" => "fab fa-cc-discover",
            "2 Cc Jcb" => "fab fa-cc-jcb",
            "3 Cc Mastercard" => "fab fa-cc-mastercard",
            "4 Cc Paypal" => "fab fa-cc-paypal",
            "5 Cc Stripe" => "fab fa-cc-stripe",
            "6 Cc Visa" => "fab fa-cc-visa",
            "7 Circle Notch" => "fas fa-circle-notch",
            "8 Circle Notch" => "far fa-circle-notch",
            "9 Circle Notch" => "fal fa-circle-notch",
            "1 Clipboard List Check" => "fas fa-clipboard-list-check",
            "2 Clipboard List Check" => "far fa-clipboard-list-check",
            "3 Clipboard List Check" => "fal fa-clipboard-list-check",
            "4 Compact Disc" => "fas fa-compact-disc",
            "5 Compact Disc" => "far fa-compact-disc",
            "6 Compact Disc" => "fal fa-compact-disc",
            "7 Cricket" => "fas fa-cricket",
            "8 Cricket" => "far fa-cricket",
            "9 Cricket" => "fal fa-cricket",
            "1 Cross" => "fas fa-cross",
            "2 Cross" => "far fa-cross",
            "3 Cross" => "fal fa-cross",
            "4 Curling" => "fas fa-curling",
            "5 Curling" => "far fa-curling",
            "6 Curling" => "fal fa-curling",
            "7 Debug" => "fas fa-debug",
            "8 Debug" => "far fa-debug",
            "9 Debug" => "fal fa-debug",
            "1 Democrat" => "fas fa-democrat",
            "2 Democrat" => "far fa-democrat",
            "3 Democrat" => "fal fa-democrat",
            "4 Eclipse" => "fas fa-eclipse",
            "5 Eclipse" => "far fa-eclipse",
            "6 Eclipse" => "fal fa-eclipse",
            "7 Eclipse Alt" => "fas fa-eclipse-alt",
            "8 Eclipse Alt" => "far fa-eclipse-alt",
            "9 Eclipse Alt" => "fal fa-eclipse-alt",
            "1 Field Hockey" => "fas fa-field-hockey",
            "2 Field Hockey" => "far fa-field-hockey",
            "3 Field Hockey" => "fal fa-field-hockey",
            "4 File Contract" => "fas fa-file-contract",
            "5 File Contract" => "far fa-file-contract",
            "6 File Contract" => "fal fa-file-contract",
            "7 File Signature" => "fas fa-file-signature",
            "8 File Signature" => "far fa-file-signature",
            "9 File Signature" => "fal fa-file-signature",
            "1 Flag Alt" => "fas fa-flag-alt",
            "2 Flag Alt" => "far fa-flag-alt",
            "3 Flag Alt" => "fal fa-flag-alt",
            "4 Flag Usa" => "fas fa-flag-usa",
            "5 Flag Usa" => "far fa-flag-usa",
            "6 Flag Usa" => "fal fa-flag-usa",
            "7 Football Helmet" => "fas fa-football-helmet",
            "8 Football Helmet" => "far fa-football-helmet",
            "9 Football Helmet" => "fal fa-football-helmet",
            "1 Galactic Republic" => "fab fa-galactic-republic",
            "2 Galactic Senate" => "fab fa-galactic-senate",
            "3 Golf Ball" => "fas fa-golf-ball",
            "4 Golf Ball" => "far fa-golf-ball",
            "5 Golf Ball" => "fal fa-golf-ball",
            "6 Golf Club" => "fas fa-golf-club",
            "7 Golf Club" => "far fa-golf-club",
            "8 Golf Club" => "fal fa-golf-club",
            "9 Google Wallet" => "fab fa-google-wallet",
            "1 Hamsa" => "fas fa-hamsa",
            "2 Hamsa" => "far fa-hamsa",
            "3 Hamsa" => "fal fa-hamsa",
            "4 Hanukiah" => "fas fa-hanukiah",
            "5 Hanukiah" => "far fa-hanukiah",
            "6 Hanukiah" => "fal fa-hanukiah",
            "7 Haykal" => "fas fa-haykal",
            "8 Haykal" => "far fa-haykal",
            "9 Haykal" => "fal fa-haykal",
            "1 Hexagon" => "fas fa-hexagon",
            "2 Hexagon" => "far fa-hexagon",
            "3 Hexagon" => "fal fa-hexagon",
            "4 Hockey Puck" => "fas fa-hockey-puck",
            "5 Hockey Puck" => "far fa-hockey-puck",
            "6 Hockey Puck" => "fal fa-hockey-puck",
            "7 Hockey Sticks" => "fas fa-hockey-sticks",
            "8 Hockey Sticks" => "far fa-hockey-sticks",
            "9 Hockey Sticks" => "fal fa-hockey-sticks",
            "1 Hurricane" => "fas fa-hurricane",
            "2 Hurricane" => "far fa-hurricane",
            "3 Hurricane" => "fal fa-hurricane",
            "4 Jedi" => "fas fa-jedi",
            "5 Jedi" => "far fa-jedi",
            "6 Jedi" => "fal fa-jedi",
            "7 Jedi Order" => "fab fa-jedi-order",
            "8 Journal Whills" => "fas fa-journal-whills",
            "9 Journal Whills" => "far fa-journal-whills",
            "1 Journal Whills" => "fal fa-journal-whills",
            "2 Khanda" => "fas fa-khanda",
            "3 Khanda" => "far fa-khanda",
            "4 Khanda" => "fal fa-khanda",
            "5 Luchador" => "fas fa-luchador",
            "6 Luchador" => "far fa-luchador",
            "7 Luchador" => "fal fa-luchador",
            "8 Menorah" => "fas fa-menorah",
            "9 Menorah" => "far fa-menorah",
            "1 Menorah" => "fal fa-menorah",
            "2 Meteor" => "fas fa-meteor",
            "3 Meteor" => "far fa-meteor",
            "4 Meteor" => "fal fa-meteor",
            "5 Moon Stars" => "fas fa-moon-stars",
            "6 Moon Stars" => "far fa-moon-stars",
            "7 Moon Stars" => "fal fa-moon-stars",
            "8 Octagon" => "fas fa-octagon",
            "9 Octagon" => "far fa-octagon",
            "1 Octagon" => "fal fa-octagon",
            "2 Old Republic" => "fab fa-old-republic",
            "3 Om" => "fas fa-om",
            "4 Om" => "far fa-om",
            "5 Om" => "fal fa-om",
            "6 Passport" => "fas fa-passport",
            "7 Passport" => "far fa-passport",
            "8 Passport" => "fal fa-passport",
            "9 Pastafarianism" => "fas fa-pastafarianism",
            "1 Pastafarianism" => "far fa-pastafarianism",
            "2 Pastafarianism" => "fal fa-pastafarianism",
            "3 Paypal" => "fab fa-paypal",
            "4 Peace" => "fas fa-peace",
            "5 Peace" => "far fa-peace",
            "6 Peace" => "fal fa-peace",
            "7 Pennant" => "fas fa-pennant",
            "8 Pennant" => "far fa-pennant",
            "9 Pennant" => "fal fa-pennant",
            "1 Person Booth" => "fas fa-person-booth",
            "2 Person Booth" => "far fa-person-booth",
            "3 Person Booth" => "fal fa-person-booth",
            "4 Person Sign" => "fas fa-person-sign",
            "5 Person Sign" => "far fa-person-sign",
            "6 Person Sign" => "fal fa-person-sign",
            "7 Podium Star" => "fas fa-podium-star",
            "8 Podium Star" => "far fa-podium-star",
            "9 Podium Star" => "fal fa-podium-star",
            "1 Poll People" => "fas fa-poll-people",
            "2 Poll People" => "far fa-poll-people",
            "3 Poll People" => "fal fa-poll-people",
            "4 Pray" => "fas fa-pray",
            "5 Pray" => "far fa-pray",
            "6 Pray" => "fal fa-pray",
            "7 Quidditch" => "fas fa-quidditch",
            "8 Quidditch" => "far fa-quidditch",
            "9 Quidditch" => "fal fa-quidditch",
            "1 Quran" => "fas fa-quran",
            "2 Quran" => "far fa-quran",
            "3 Quran" => "fal fa-quran",
            "4 Racquet" => "fas fa-racquet",
            "5 Racquet" => "far fa-racquet",
            "6 Racquet" => "fal fa-racquet",
            "7 Republican" => "fas fa-republican",
            "8 Republican" => "far fa-republican",
            "9 Republican" => "fal fa-republican",
            "1 Shuttlecock" => "fas fa-shuttlecock",
            "2 Shuttlecock" => "far fa-shuttlecock",
            "3 Shuttlecock" => "fal fa-shuttlecock",
            "4 Slash" => "fas fa-slash",
            "5 Slash" => "far fa-slash",
            "6 Slash" => "fal fa-slash",
            "7 Sledding" => "fas fa-sledding",
            "8 Sledding" => "far fa-sledding",
            "9 Sledding" => "fal fa-sledding",
            "1 Spinner" => "fas fa-spinner",
            "2 Spinner" => "far fa-spinner",
            "3 Spinner" => "fal fa-spinner",
            "4 Spinner Third" => "fas fa-spinner-third",
            "5 Spinner Third" => "far fa-spinner-third",
            "6 Spinner Third" => "fal fa-spinner-third",
            "7 Square" => "fas fa-square",
            "8 Square" => "far fa-square",
            "9 Square" => "fal fa-square",
            "1 Star And Crescent" => "fas fa-star-and-crescent",
            "2 Star And Crescent" => "far fa-star-and-crescent",
            "3 Star And Crescent" => "fal fa-star-and-crescent",
            "4 Star Of David" => "fas fa-star-of-david",
            "5 Star Of David" => "far fa-star-of-david",
            "6 Star Of David" => "fal fa-star-of-david",
            "7 Stripe" => "fab fa-stripe",
            "8 Stripe S" => "fab fa-stripe-s",
            "9 Table Tennis" => "fas fa-table-tennis",
            "1 Table Tennis" => "far fa-table-tennis",
            "2 Table Tennis" => "fal fa-table-tennis",
            "3 Tanakh" => "fas fa-tanakh",
            "4 Tanakh" => "far fa-tanakh",
            "5 Tanakh" => "fal fa-tanakh",
            "6 Temperature High" => "fas fa-temperature-high",
            "7 Temperature High" => "far fa-temperature-high",
            "8 Temperature High" => "fal fa-temperature-high",
            "9 Temperature Low" => "fas fa-temperature-low",
            "1 Temperature Low" => "far fa-temperature-low",
            "2 Temperature Low" => "fal fa-temperature-low",
            "3 Tennis Ball" => "fas fa-tennis-ball",
            "4 Tennis Ball" => "far fa-tennis-ball",
            "5 Tennis Ball" => "fal fa-tennis-ball",
            "6 Torah" => "fas fa-torah",
            "7 Torah" => "far fa-torah",
            "8 Torah" => "fal fa-torah",
            "9 User Astronaut" => "fas fa-user-astronaut",
            "1 User Astronaut" => "far fa-user-astronaut",
            "2 User Astronaut" => "fal fa-user-astronaut",
            "3 User Friends" => "fas fa-user-friends",
            "4 User Friends" => "far fa-user-friends",
            "5 User Friends" => "fal fa-user-friends",
            "6 User Lock" => "fas fa-user-lock",
            "7 User Lock" => "far fa-user-lock",
            "8 User Lock" => "fal fa-user-lock",
            "9 User Plus" => "fas fa-user-plus",
            "1 User Plus" => "far fa-user-plus",
            "2 User Plus" => "fal fa-user-plus",
            "3 User Shield" => "fas fa-user-shield",
            "4 User Shield" => "far fa-user-shield",
            "5 User Shield" => "fal fa-user-shield",
            "6 Users" => "fas fa-users",
            "7 Users" => "far fa-users",
            "8 Users" => "fal fa-users",
            "9 Volleyball Ball" => "fas fa-volleyball-ball",
            "1 Volleyball Ball" => "far fa-volleyball-ball",
            "2 Volleyball Ball" => "fal fa-volleyball-ball",
            "3 Vote Nay" => "fas fa-vote-nay",
            "4 Vote Nay" => "far fa-vote-nay",
            "5 Vote Nay" => "fal fa-vote-nay",
            "6 Vote Yea" => "fas fa-vote-yea",
            "7 Vote Yea" => "far fa-vote-yea",
            "8 Vote Yea" => "fal fa-vote-yea",
            "9 Yin Yang" => "fas fa-yin-yang",
            "1 Yin Yang" => "far fa-yin-yang",
            "2 Yin Yang" => "fal fa-yin-yang",
            "3 Acquisitions Incorporated" => "fab fa-acquisitions-incorporated",
            "4 Atlas" => "fas fa-atlas",
            "5 Atlas" => "far fa-atlas",
            "6 Atlas" => "fal fa-atlas",
            "7 Calendar Day" => "fas fa-calendar-day",
            "8 Calendar Day" => "far fa-calendar-day",
            "9 Calendar Day" => "fal fa-calendar-day",
            "1 Calendar Week" => "fas fa-calendar-week",
            "2 Calendar Week" => "far fa-calendar-week",
            "3 Calendar Week" => "fal fa-calendar-week",
            "4 Child" => "fas fa-child",
            "5 Child" => "far fa-child",
            "6 Child" => "fal fa-child",
            "7 Cloud Rainbow" => "fas fa-cloud-rainbow",
            "8 Cloud Rainbow" => "far fa-cloud-rainbow",
            "9 Cloud Rainbow" => "fal fa-cloud-rainbow",
            "1 Cloud Sun Rain" => "fas fa-cloud-sun-rain",
            "2 Cloud Sun Rain" => "far fa-cloud-sun-rain",
            "3 Cloud Sun Rain" => "fal fa-cloud-sun-rain",
            "4 Critical Role" => "fab fa-critical-role",
            "5 D And D" => "fab fa-d-and-d",
            "6 D And D Beyond" => "fab fa-d-and-d-beyond",
            "7 Eye Evil" => "fas fa-eye-evil",
            "8 Eye Evil" => "far fa-eye-evil",
            "9 Eye Evil" => "fal fa-eye-evil",
            "1 Fantasy Flight Games" => "fab fa-fantasy-flight-games",
            "2 Female" => "fas fa-female",
            "3 Female" => "far fa-female",
            "4 Female" => "fal fa-female",
            "5 Flame" => "fas fa-flame",
            "6 Flame" => "far fa-flame",
            "7 Flame" => "fal fa-flame",
            "8 Flower" => "fas fa-flower",
            "9 Flower" => "far fa-flower",
            "1 Flower" => "fal fa-flower",
            "2 Flower Daffodil" => "fas fa-flower-daffodil",
            "3 Flower Daffodil" => "far fa-flower-daffodil",
            "4 Flower Daffodil" => "fal fa-flower-daffodil",
            "5 Flower Tulip" => "fas fa-flower-tulip",
            "6 Flower Tulip" => "far fa-flower-tulip",
            "7 Flower Tulip" => "fal fa-flower-tulip",
            "8 Globe Africa" => "fas fa-globe-africa",
            "9 Globe Africa" => "far fa-globe-africa",
            "1 Globe Africa" => "fal fa-globe-africa",
            "2 Globe Americas" => "fas fa-globe-americas",
            "3 Globe Americas" => "far fa-globe-americas",
            "4 Globe Americas" => "fal fa-globe-americas",
            "5 Globe Asia" => "fas fa-globe-asia",
            "6 Globe Asia" => "far fa-globe-asia",
            "7 Globe Asia" => "fal fa-globe-asia",
            "8 Globe Europe" => "fas fa-globe-europe",
            "9 Globe Europe" => "far fa-globe-europe",
            "1 Globe Europe" => "fal fa-globe-europe",
            "2 Head Side" => "fas fa-head-side",
            "3 Head Side" => "far fa-head-side",
            "4 Head Side" => "fal fa-head-side",
            "5 Head Vr" => "fas fa-head-vr",
            "6 Head Vr" => "far fa-head-vr",
            "7 Head Vr" => "fal fa-head-vr",
            "8 Penny Arcade" => "fab fa-penny-arcade",
            "9 Plane Arrival" => "fas fa-plane-arrival",
            "1 Plane Arrival" => "far fa-plane-arrival",
            "2 Plane Arrival" => "fal fa-plane-arrival",
            "3 Plane Departure" => "fas fa-plane-departure",
            "4 Plane Departure" => "far fa-plane-departure",
            "5 Plane Departure" => "fal fa-plane-departure",
            "6 Rainbow" => "fas fa-rainbow",
            "7 Rainbow" => "far fa-rainbow",
            "8 Rainbow" => "fal fa-rainbow",
            "9 Rings Wedding" => "fas fa-rings-wedding",
            "1 Rings Wedding" => "far fa-rings-wedding",
            "2 Rings Wedding" => "fal fa-rings-wedding",
            "3 Sickle" => "fas fa-sickle",
            "4 Sickle" => "far fa-sickle",
            "5 Sickle" => "fal fa-sickle",
            "6 Ski Lift" => "fas fa-ski-lift",
            "7 Ski Lift" => "far fa-ski-lift",
            "8 Ski Lift" => "fal fa-ski-lift",
            "9 Star Half Alt" => "fas fa-star-half-alt",
            "1 Star Half Alt" => "far fa-star-half-alt",
            "2 Star Half Alt" => "fal fa-star-half-alt",
            "3 Temperature Hot" => "fas fa-temperature-hot",
            "4 Temperature Hot" => "far fa-temperature-hot",
            "5 Temperature Hot" => "fal fa-temperature-hot",
            "6 Thermometer Empty" => "fas fa-thermometer-empty",
            "7 Thermometer Empty" => "far fa-thermometer-empty",
            "8 Thermometer Empty" => "fal fa-thermometer-empty",
            "9 Thermometer Full" => "fas fa-thermometer-full",
            "1 Thermometer Full" => "far fa-thermometer-full",
            "2 Thermometer Full" => "fal fa-thermometer-full",
            "3 Thermometer Half" => "fas fa-thermometer-half",
            "4 Thermometer Half" => "far fa-thermometer-half",
            "5 Thermometer Half" => "fal fa-thermometer-half",
            "6 Thermometer Quarter" => "fas fa-thermometer-quarter",
            "7 Thermometer Quarter" => "far fa-thermometer-quarter",
            "8 Thermometer Quarter" => "fal fa-thermometer-quarter",
            "9 Thermometer Three Quarters" => "fas fa-thermometer-three-quarters",
            "1 Thermometer Three Quarters" => "far fa-thermometer-three-quarters",
            "2 Thermometer Three Quarters" => "fal fa-thermometer-three-quarters",
            "3 Thunderstorm" => "fas fa-thunderstorm",
            "4 Thunderstorm" => "far fa-thunderstorm",
            "5 Thunderstorm" => "fal fa-thunderstorm",
            "6 Tree Palm" => "fas fa-tree-palm",
            "7 Tree Palm" => "far fa-tree-palm",
            "8 Tree Palm" => "fal fa-tree-palm",
            "9 User Alt Slash" => "fas fa-user-alt-slash",
            "1 User Alt Slash" => "far fa-user-alt-slash",
            "2 User Alt Slash" => "fal fa-user-alt-slash",
            "3 User Check" => "fas fa-user-check",
            "4 User Check" => "far fa-user-check",
            "5 User Check" => "fal fa-user-check",
            "6 User Clock" => "fas fa-user-clock",
            "7 User Clock" => "far fa-user-clock",
            "8 User Clock" => "fal fa-user-clock",
            "9 User Cog" => "fas fa-user-cog",
            "1 User Cog" => "far fa-user-cog",
            "2 User Cog" => "fal fa-user-cog",
            "3 User Edit" => "fas fa-user-edit",
            "4 User Edit" => "far fa-user-edit",
            "5 User Edit" => "fal fa-user-edit",
            "6 User Headset" => "fas fa-user-headset",
            "7 User Headset" => "far fa-user-headset",
            "8 User Headset" => "fal fa-user-headset",
            "9 User Injured" => "fas fa-user-injured",
            "1 User Injured" => "far fa-user-injured",
            "2 User Injured" => "fal fa-user-injured",
            "3 User Minus" => "fas fa-user-minus",
            "4 User Minus" => "far fa-user-minus",
            "5 User Minus" => "fal fa-user-minus",
            "6 User Ninja" => "fas fa-user-ninja",
            "7 User Ninja" => "far fa-user-ninja",
            "8 User Ninja" => "fal fa-user-ninja",
            "9 User Slash" => "fas fa-user-slash",
            "1 User Slash" => "far fa-user-slash",
            "2 User Slash" => "fal fa-user-slash",
            "3 User Tag" => "fas fa-user-tag",
            "4 User Tag" => "far fa-user-tag",
            "5 User Tag" => "fal fa-user-tag",
            "6 User Times" => "fas fa-user-times",
            "7 User Times" => "far fa-user-times",
            "8 User Times" => "fal fa-user-times",
            "9 Users Cog" => "fas fa-users-cog",
            "1 Users Cog" => "far fa-users-cog",
            "2 Users Cog" => "fal fa-users-cog",
            "3 Wizards Of The Coast" => "fab fa-wizards-of-the-coast",
            "4 Cloud Drizzle" => "fas fa-cloud-drizzle",
            "5 Cloud Drizzle" => "far fa-cloud-drizzle",
            "6 Cloud Drizzle" => "fal fa-cloud-drizzle",
            "7 Cloud Hail" => "fas fa-cloud-hail",
            "8 Cloud Hail" => "far fa-cloud-hail",
            "9 Cloud Hail" => "fal fa-cloud-hail",
            "1 Cloud Hail Mixed" => "fas fa-cloud-hail-mixed",
            "2 Cloud Hail Mixed" => "far fa-cloud-hail-mixed",
            "3 Cloud Hail Mixed" => "fal fa-cloud-hail-mixed",
            "4 Cloud Moon Rain" => "fas fa-cloud-moon-rain",
            "5 Cloud Moon Rain" => "far fa-cloud-moon-rain",
            "6 Cloud Moon Rain" => "fal fa-cloud-moon-rain",
            "7 Cloud Rain" => "fas fa-cloud-rain",
            "8 Cloud Rain" => "far fa-cloud-rain",
            "9 Cloud Rain" => "fal fa-cloud-rain",
            "1 Cloud Showers" => "fas fa-cloud-showers",
            "2 Cloud Showers" => "far fa-cloud-showers",
            "3 Cloud Showers" => "fal fa-cloud-showers",
            "4 Cloud Showers Heavy" => "fas fa-cloud-showers-heavy",
            "5 Cloud Showers Heavy" => "far fa-cloud-showers-heavy",
            "6 Cloud Showers Heavy" => "fal fa-cloud-showers-heavy",
            "7 Cloud Sleet" => "fas fa-cloud-sleet",
            "8 Cloud Sleet" => "far fa-cloud-sleet",
            "9 Cloud Sleet" => "fal fa-cloud-sleet",
            "1 Cloud Snow" => "fas fa-cloud-snow",
            "2 Cloud Snow" => "far fa-cloud-snow",
            "3 Cloud Snow" => "fal fa-cloud-snow",
            "4 Clouds" => "fas fa-clouds",
            "5 Clouds" => "far fa-clouds",
            "6 Clouds" => "fal fa-clouds",
            "7 Clouds Moon" => "fas fa-clouds-moon",
            "8 Clouds Moon" => "far fa-clouds-moon",
            "9 Clouds Moon" => "fal fa-clouds-moon",
            "1 Clouds Sun" => "fas fa-clouds-sun",
            "2 Clouds Sun" => "far fa-clouds-sun",
            "3 Clouds Sun" => "fal fa-clouds-sun",
            "4 Dewpoint" => "fas fa-dewpoint",
            "5 Dewpoint" => "far fa-dewpoint",
            "6 Dewpoint" => "fal fa-dewpoint",
            "7 Fog" => "fas fa-fog",
            "8 Fog" => "far fa-fog",
            "9 Fog" => "fal fa-fog",
            "1 Frosty Head" => "fas fa-frosty-head",
            "2 Frosty Head" => "far fa-frosty-head",
            "3 Frosty Head" => "fal fa-frosty-head",
            "4 Humidity" => "fas fa-humidity",
            "5 Humidity" => "far fa-humidity",
            "6 Humidity" => "fal fa-humidity",
            "7 Icicles" => "fas fa-icicles",
            "8 Icicles" => "far fa-icicles",
            "9 Icicles" => "fal fa-icicles",
            "1 Moon Cloud" => "fas fa-moon-cloud",
            "2 Moon Cloud" => "far fa-moon-cloud",
            "3 Moon Cloud" => "fal fa-moon-cloud",
            "4 Poo Storm" => "fas fa-poo-storm",
            "5 Poo Storm" => "far fa-poo-storm",
            "6 Poo Storm" => "fal fa-poo-storm",
            "7 Smog" => "fas fa-smog",
            "8 Smog" => "far fa-smog",
            "9 Smog" => "fal fa-smog",
            "1 Smoke" => "fas fa-smoke",
            "2 Smoke" => "far fa-smoke",
            "3 Smoke" => "fal fa-smoke",
            "4 Snow Blowing" => "fas fa-snow-blowing",
            "5 Snow Blowing" => "far fa-snow-blowing",
            "6 Snow Blowing" => "fal fa-snow-blowing",
            "7 Snowflakes" => "fas fa-snowflakes",
            "8 Snowflakes" => "far fa-snowflakes",
            "9 Snowflakes" => "fal fa-snowflakes",
            "1 Sun Cloud" => "fas fa-sun-cloud",
            "2 Sun Cloud" => "far fa-sun-cloud",
            "3 Sun Cloud" => "fal fa-sun-cloud",
            "4 Sun Dust" => "fas fa-sun-dust",
            "5 Sun Dust" => "far fa-sun-dust",
            "6 Sun Dust" => "fal fa-sun-dust",
            "7 Sun Haze" => "fas fa-sun-haze",
            "8 Sun Haze" => "far fa-sun-haze",
            "9 Sun Haze" => "fal fa-sun-haze",
            "1 Temperature Frigid" => "fas fa-temperature-frigid",
            "2 Temperature Frigid" => "far fa-temperature-frigid",
            "3 Temperature Frigid" => "fal fa-temperature-frigid",
            "4 Thunderstorm Moon" => "fas fa-thunderstorm-moon",
            "5 Thunderstorm Moon" => "far fa-thunderstorm-moon",
            "6 Thunderstorm Moon" => "fal fa-thunderstorm-moon",
            "7 Thunderstorm Sun" => "fas fa-thunderstorm-sun",
            "8 Thunderstorm Sun" => "far fa-thunderstorm-sun",
            "9 Thunderstorm Sun" => "fal fa-thunderstorm-sun",
            "1 Tornado" => "fas fa-tornado",
            "2 Tornado" => "far fa-tornado",
            "3 Tornado" => "fal fa-tornado",
            "4 Volcano" => "fas fa-volcano",
            "5 Volcano" => "far fa-volcano",
            "6 Volcano" => "fal fa-volcano",
            "7 Windsock" => "fas fa-windsock",
            "8 Windsock" => "far fa-windsock",
            "9 Windsock" => "fal fa-windsock",
            "1 500px" => "fab fa-500px",
            "2 Accusoft" => "fab fa-accusoft",
            "3 Adn" => "fab fa-adn",
            "4 Adobe" => "fab fa-adobe",
            "5 Adversal" => "fab fa-adversal",
            "6 Affiliatetheme" => "fab fa-affiliatetheme",
            "7 Airbnb" => "fab fa-airbnb",
            "8 Algolia" => "fab fa-algolia",
            "9 Amazon" => "fab fa-amazon",
            "1 Amilia" => "fab fa-amilia",
            "2 Android" => "fab fa-android",
            "3 Angellist" => "fab fa-angellist",
            "4 Angrycreative" => "fab fa-angrycreative",
            "5 Angular" => "fab fa-angular",
            "6 App Store" => "fab fa-app-store",
            "7 App Store Ios" => "fab fa-app-store-ios",
            "8 Apper" => "fab fa-apper",
            "9 Apple" => "fab fa-apple",
            "1 Artstation" => "fab fa-artstation",
            "2 Asymmetrik" => "fab fa-asymmetrik",
            "3 Atlassian" => "fab fa-atlassian",
            "4 Audible" => "fab fa-audible",
            "5 Autoprefixer" => "fab fa-autoprefixer",
            "6 Avianex" => "fab fa-avianex",
            "7 Aviato" => "fab fa-aviato",
            "8 Aws" => "fab fa-aws",
            "9 Bandcamp" => "fab fa-bandcamp",
            "1 Battle Net" => "fab fa-battle-net",
            "2 Behance" => "fab fa-behance",
            "3 Behance Square" => "fab fa-behance-square",
            "4 Bimobject" => "fab fa-bimobject",
            "5 Bitbucket" => "fab fa-bitbucket",
            "6 Bity" => "fab fa-bity",
            "7 Black Tie" => "fab fa-black-tie",
            "8 Blackberry" => "fab fa-blackberry",
            "9 Blogger" => "fab fa-blogger",
            "1 Blogger B" => "fab fa-blogger-b",
            "2 Bootstrap" => "fab fa-bootstrap",
            "3 Buffer" => "fab fa-buffer",
            "4 Buromobelexperte" => "fab fa-buromobelexperte",
            "5 Buysellads" => "fab fa-buysellads",
            "6 Canadian Maple Leaf" => "fab fa-canadian-maple-leaf",
            "7 Centercode" => "fab fa-centercode",
            "8 Centos" => "fab fa-centos",
            "9 Chrome" => "fab fa-chrome",
            "1 Chromecast" => "fab fa-chromecast",
            "2 Cloudscale" => "fab fa-cloudscale",
            "3 Cloudsmith" => "fab fa-cloudsmith",
            "4 Cloudversify" => "fab fa-cloudversify",
            "5 Codepen" => "fab fa-codepen",
            "6 Codiepie" => "fab fa-codiepie",
            "7 Confluence" => "fab fa-confluence",
            "8 Connectdevelop" => "fab fa-connectdevelop",
            "9 Contao" => "fab fa-contao",
            "1 Cpanel" => "fab fa-cpanel",
            "2 Creative Commons" => "fab fa-creative-commons",
            "3 Creative Commons By" => "fab fa-creative-commons-by",
            "4 Creative Commons Nc" => "fab fa-creative-commons-nc",
            "5 Creative Commons Nc Eu" => "fab fa-creative-commons-nc-eu",
            "6 Creative Commons Nc Jp" => "fab fa-creative-commons-nc-jp",
            "7 Creative Commons Nd" => "fab fa-creative-commons-nd",
            "8 Creative Commons Pd" => "fab fa-creative-commons-pd",
            "9 Creative Commons Pd Alt" => "fab fa-creative-commons-pd-alt",
            "1 Creative Commons Remix" => "fab fa-creative-commons-remix",
            "2 Creative Commons Sa" => "fab fa-creative-commons-sa",
            "3 Creative Commons Sampling" => "fab fa-creative-commons-sampling",
            "4 Creative Commons Sampling Plus" => "fab fa-creative-commons-sampling-plus",
            "5 Creative Commons Share" => "fab fa-creative-commons-share",
            "6 Creative Commons Zero" => "fab fa-creative-commons-zero",
            "7 Css3" => "fab fa-css3",
            "8 Css3 Alt" => "fab fa-css3-alt",
            "9 Cuttlefish" => "fab fa-cuttlefish",
            "1 Dashcube" => "fab fa-dashcube",
            "2 Delicious" => "fab fa-delicious",
            "3 Deploydog" => "fab fa-deploydog",
            "4 Deskpro" => "fab fa-deskpro",
            "5 Dev" => "fab fa-dev",
            "6 Deviantart" => "fab fa-deviantart",
            "7 Dhl" => "fab fa-dhl",
            "8 Diaspora" => "fab fa-diaspora",
            "9 Digg" => "fab fa-digg",
            "1 Digital Ocean" => "fab fa-digital-ocean",
            "2 Discord" => "fab fa-discord",
            "3 Discourse" => "fab fa-discourse",
            "4 Dochub" => "fab fa-dochub",
            "5 Docker" => "fab fa-docker",
            "6 Draft2digital" => "fab fa-draft2digital",
            "7 Dribbble" => "fab fa-dribbble",
            "8 Dribbble Square" => "fab fa-dribbble-square",
            "9 Dropbox" => "fab fa-dropbox",
            "1 Drupal" => "fab fa-drupal",
            "2 Dyalog" => "fab fa-dyalog",
            "3 Earlybirds" => "fab fa-earlybirds",
            "4 Ebay" => "fab fa-ebay",
            "5 Edge" => "fab fa-edge",
            "6 Elementor" => "fab fa-elementor",
            "7 Ello" => "fab fa-ello",
            "8 Ember" => "fab fa-ember",
            "9 Empire" => "fab fa-empire",
            "1 Envira" => "fab fa-envira",
            "2 Erlang" => "fab fa-erlang",
            "3 Etsy" => "fab fa-etsy",
            "4 Evernote" => "fab fa-evernote",
            "5 Expeditedssl" => "fab fa-expeditedssl",
            "6 Facebook" => "fab fa-facebook",
            "7 Facebook F" => "fab fa-facebook-f",
            "8 Facebook Messenger" => "fab fa-facebook-messenger",
            "9 Facebook Square" => "fab fa-facebook-square",
            "1 Fedex" => "fab fa-fedex",
            "2 Fedora" => "fab fa-fedora",
            "3 Figma" => "fab fa-figma",
            "4 Firefox" => "fab fa-firefox",
            "5 First Order" => "fab fa-first-order",
            "6 First Order Alt" => "fab fa-first-order-alt",
            "7 Firstdraft" => "fab fa-firstdraft",
            "8 Flickr" => "fab fa-flickr",
            "9 Flipboard" => "fab fa-flipboard",
            "1 Fly" => "fab fa-fly",
            "2 Font Awesome" => "fab fa-font-awesome",
            "3 Font Awesome Alt" => "fab fa-font-awesome-alt",
            "4 Font Awesome Flag" => "fab fa-font-awesome-flag",
            "5 Fonticons" => "fab fa-fonticons",
            "6 Fonticons Fi" => "fab fa-fonticons-fi",
            "7 Fort Awesome" => "fab fa-fort-awesome",
            "8 Fort Awesome Alt" => "fab fa-fort-awesome-alt",
            "9 Forumbee" => "fab fa-forumbee",
            "1 Foursquare" => "fab fa-foursquare",
            "2 Free Code Camp" => "fab fa-free-code-camp",
            "3 Freebsd" => "fab fa-freebsd",
            "4 Fulcrum" => "fab fa-fulcrum",
            "5 Get Pocket" => "fab fa-get-pocket",
            "6 Git" => "fab fa-git",
            "7 Git Square" => "fab fa-git-square",
            "8 Github" => "fab fa-github",
            "9 Github Alt" => "fab fa-github-alt",
            "1 Github Square" => "fab fa-github-square",
            "2 Gitkraken" => "fab fa-gitkraken",
            "3 Gitlab" => "fab fa-gitlab",
            "4 Gitter" => "fab fa-gitter",
            "5 Glide" => "fab fa-glide",
            "6 Glide G" => "fab fa-glide-g",
            "7 Gofore" => "fab fa-gofore",
            "8 Goodreads" => "fab fa-goodreads",
            "9 Goodreads G" => "fab fa-goodreads-g",
            "1 Google" => "fab fa-google",
            "2 Google Drive" => "fab fa-google-drive",
            "3 Google Play" => "fab fa-google-play",
            "4 Google Plus" => "fab fa-google-plus",
            "5 Google Plus G" => "fab fa-google-plus-g",
            "6 Google Plus Square" => "fab fa-google-plus-square",
            "7 Gratipay" => "fab fa-gratipay",
            "8 Grav" => "fab fa-grav",
            "9 Gripfire" => "fab fa-gripfire",
            "1 Grunt" => "fab fa-grunt",
            "2 Gulp" => "fab fa-gulp",
            "3 Hacker News" => "fab fa-hacker-news",
            "4 Hacker News Square" => "fab fa-hacker-news-square",
            "5 Hackerrank" => "fab fa-hackerrank",
            "6 Hips" => "fab fa-hips",
            "7 Hire A Helper" => "fab fa-hire-a-helper",
            "8 Hooli" => "fab fa-hooli",
            "9 Hornbill" => "fab fa-hornbill",
            "1 Hotjar" => "fab fa-hotjar",
            "2 Houzz" => "fab fa-houzz",
            "3 Html5" => "fab fa-html5",
            "4 Hubspot" => "fab fa-hubspot",
            "5 Imdb" => "fab fa-imdb",
            "6 Instagram" => "fab fa-instagram",
            "7 Intercom" => "fab fa-intercom",
            "8 Internet Explorer" => "fab fa-internet-explorer",
            "9 Invision" => "fab fa-invision",
            "1 Ioxhost" => "fab fa-ioxhost",
            "2 Itch Io" => "fab fa-itch-io",
            "3 Itunes" => "fab fa-itunes",
            "4 Itunes Note" => "fab fa-itunes-note",
            "5 Java" => "fab fa-java",
            "6 Jenkins" => "fab fa-jenkins",
            "7 Jira" => "fab fa-jira",
            "8 Joget" => "fab fa-joget",
            "9 Joomla" => "fab fa-joomla",
            "1 Js" => "fab fa-js",
            "2 Js Square" => "fab fa-js-square",
            "3 Jsfiddle" => "fab fa-jsfiddle",
            "4 Kaggle" => "fab fa-kaggle",
            "5 Keybase" => "fab fa-keybase",
            "6 Keycdn" => "fab fa-keycdn",
            "7 Kickstarter" => "fab fa-kickstarter",
            "8 Kickstarter K" => "fab fa-kickstarter-k",
            "9 Korvue" => "fab fa-korvue",
            "1 Laravel" => "fab fa-laravel",
            "2 Lastfm" => "fab fa-lastfm",
            "3 Lastfm Square" => "fab fa-lastfm-square",
            "4 Leanpub" => "fab fa-leanpub",
            "5 Less" => "fab fa-less",
            "6 Line" => "fab fa-line",
            "7 Linkedin" => "fab fa-linkedin",
            "8 Linkedin In" => "fab fa-linkedin-in",
            "9 Linode" => "fab fa-linode",
            "1 Linux" => "fab fa-linux",
            "2 Lyft" => "fab fa-lyft",
            "3 Magento" => "fab fa-magento",
            "4 Mailchimp" => "fab fa-mailchimp",
            "5 Mandalorian" => "fab fa-mandalorian",
            "6 Markdown" => "fab fa-markdown",
            "7 Mastodon" => "fab fa-mastodon",
            "8 Maxcdn" => "fab fa-maxcdn",
            "9 Medapps" => "fab fa-medapps",
            "1 Medium" => "fab fa-medium",
            "2 Medium M" => "fab fa-medium-m",
            "3 Medrt" => "fab fa-medrt",
            "4 Meetup" => "fab fa-meetup",
            "5 Megaport" => "fab fa-megaport",
            "6 Mendeley" => "fab fa-mendeley",
            "7 Microsoft" => "fab fa-microsoft",
            "8 Mix" => "fab fa-mix",
            "9 Mixcloud" => "fab fa-mixcloud",
            "1 Mizuni" => "fab fa-mizuni",
            "2 Modx" => "fab fa-modx",
            "3 Monero" => "fab fa-monero",
            "4 Neos" => "fab fa-neos",
            "5 Nimblr" => "fab fa-nimblr",
            "6 Node" => "fab fa-node",
            "7 Node Js" => "fab fa-node-js",
            "8 Npm" => "fab fa-npm",
            "9 Ns8" => "fab fa-ns8",
            "1 Nutritionix" => "fab fa-nutritionix",
            "2 Odnoklassniki" => "fab fa-odnoklassniki",
            "3 Odnoklassniki Square" => "fab fa-odnoklassniki-square",
            "4 Opencart" => "fab fa-opencart",
            "5 Openid" => "fab fa-openid",
            "6 Opera" => "fab fa-opera",
            "7 Optin Monster" => "fab fa-optin-monster",
            "8 Osi" => "fab fa-osi",
            "9 Page4" => "fab fa-page4",
            "1 Pagelines" => "fab fa-pagelines",
            "2 Palfed" => "fab fa-palfed",
            "3 Patreon" => "fab fa-patreon",
            "4 Periscope" => "fab fa-periscope",
            "5 Phabricator" => "fab fa-phabricator",
            "6 Phoenix Framework" => "fab fa-phoenix-framework",
            "7 Phoenix Squadron" => "fab fa-phoenix-squadron",
            "8 Php" => "fab fa-php",
            "9 Pied Piper" => "fab fa-pied-piper",
            "1 Pied Piper Alt" => "fab fa-pied-piper-alt",
            "2 Pied Piper Hat" => "fab fa-pied-piper-hat",
            "3 Pied Piper Pp" => "fab fa-pied-piper-pp",
            "4 Pinterest" => "fab fa-pinterest",
            "5 Pinterest P" => "fab fa-pinterest-p",
            "6 Pinterest Square" => "fab fa-pinterest-square",
            "7 Product Hunt" => "fab fa-product-hunt",
            "8 Pushed" => "fab fa-pushed",
            "9 Python" => "fab fa-python",
            "1 Qq" => "fab fa-qq",
            "2 Quinscape" => "fab fa-quinscape",
            "3 Quora" => "fab fa-quora",
            "4 R Project" => "fab fa-r-project",
            "5 Raspberry Pi" => "fab fa-raspberry-pi",
            "6 Ravelry" => "fab fa-ravelry",
            "7 React" => "fab fa-react",
            "8 Reacteurope" => "fab fa-reacteurope",
            "9 Readme" => "fab fa-readme",
            "1 Rebel" => "fab fa-rebel",
            "2 Red River" => "fab fa-red-river",
            "3 Reddit" => "fab fa-reddit",
            "4 Reddit Alien" => "fab fa-reddit-alien",
            "5 Reddit Square" => "fab fa-reddit-square",
            "6 Redhat" => "fab fa-redhat",
            "7 Renren" => "fab fa-renren",
            "8 Replyd" => "fab fa-replyd",
            "9 Researchgate" => "fab fa-researchgate",
            "1 Resolving" => "fab fa-resolving",
            "2 Rev" => "fab fa-rev",
            "3 Rocketchat" => "fab fa-rocketchat",
            "4 Rockrms" => "fab fa-rockrms",
            "5 Safari" => "fab fa-safari",
            "6 Salesforce" => "fab fa-salesforce",
            "7 Sass" => "fab fa-sass",
            "8 Schlix" => "fab fa-schlix",
            "9 Scribd" => "fab fa-scribd",
            "1 Searchengin" => "fab fa-searchengin",
            "2 Sellcast" => "fab fa-sellcast",
            "3 Sellsy" => "fab fa-sellsy",
            "4 Servicestack" => "fab fa-servicestack",
            "5 Shirtsinbulk" => "fab fa-shirtsinbulk",
            "6 Shopware" => "fab fa-shopware",
            "7 Simplybuilt" => "fab fa-simplybuilt",
            "8 Sistrix" => "fab fa-sistrix",
            "9 Sith" => "fab fa-sith",
            "1 Sketch" => "fab fa-sketch",
            "2 Skyatlas" => "fab fa-skyatlas",
            "3 Skype" => "fab fa-skype",
            "4 Slack" => "fab fa-slack",
            "5 Slack Hash" => "fab fa-slack-hash",
            "6 Slideshare" => "fab fa-slideshare",
            "7 Snapchat" => "fab fa-snapchat",
            "8 Snapchat Ghost" => "fab fa-snapchat-ghost",
            "9 Snapchat Square" => "fab fa-snapchat-square",
            "1 Sourcetree" => "fab fa-sourcetree",
            "2 Speakap" => "fab fa-speakap",
            "3 Speaker Deck" => "fab fa-speaker-deck",
            "4 Squarespace" => "fab fa-squarespace",
            "5 Stack Exchange" => "fab fa-stack-exchange",
            "6 Stack Overflow" => "fab fa-stack-overflow",
            "7 Staylinked" => "fab fa-staylinked",
            "8 Sticker Mule" => "fab fa-sticker-mule",
            "9 Strava" => "fab fa-strava",
            "1 Studiovinari" => "fab fa-studiovinari",
            "2 Stumbleupon" => "fab fa-stumbleupon",
            "3 Stumbleupon Circle" => "fab fa-stumbleupon-circle",
            "4 Superpowers" => "fab fa-superpowers",
            "5 Supple" => "fab fa-supple",
            "6 Suse" => "fab fa-suse",
            "7 Symfony" => "fab fa-symfony",
            "8 Teamspeak" => "fab fa-teamspeak",
            "9 Telegram" => "fab fa-telegram",
            "1 Telegram Plane" => "fab fa-telegram-plane",
            "2 Tencent Weibo" => "fab fa-tencent-weibo",
            "3 The Red Yeti" => "fab fa-the-red-yeti",
            "4 Themeco" => "fab fa-themeco",
            "5 Themeisle" => "fab fa-themeisle",
            "6 Think Peaks" => "fab fa-think-peaks",
            "7 Trade Federation" => "fab fa-trade-federation",
            "8 Trello" => "fab fa-trello",
            "9 Tripadvisor" => "fab fa-tripadvisor",
            "1 Tumblr" => "fab fa-tumblr",
            "2 Tumblr Square" => "fab fa-tumblr-square",
            "3 Twitter" => "fab fa-twitter",
            "4 Twitter Square" => "fab fa-twitter-square",
            "5 Typo3" => "fab fa-typo3",
            "6 Uber" => "fab fa-uber",
            "7 Ubuntu" => "fab fa-ubuntu",
            "8 Uikit" => "fab fa-uikit",
            "9 Uniregistry" => "fab fa-uniregistry",
            "1 Untappd" => "fab fa-untappd",
            "2 Ups" => "fab fa-ups",
            "3 Usb" => "fab fa-usb",
            "4 Usps" => "fab fa-usps",
            "5 Ussunnah" => "fab fa-ussunnah",
            "6 Vaadin" => "fab fa-vaadin",
            "7 Viacoin" => "fab fa-viacoin",
            "8 Viadeo" => "fab fa-viadeo",
            "9 Viadeo Square" => "fab fa-viadeo-square",
            "1 Viber" => "fab fa-viber",
            "2 Vimeo" => "fab fa-vimeo",
            "3 Vimeo Square" => "fab fa-vimeo-square",
            "4 Vimeo V" => "fab fa-vimeo-v",
            "5 Vine" => "fab fa-vine",
            "6 Vk" => "fab fa-vk",
            "7 Vnv" => "fab fa-vnv",
            "8 Vuejs" => "fab fa-vuejs",
            "9 Waze" => "fab fa-waze",
            "1 Weebly" => "fab fa-weebly",
            "2 Weibo" => "fab fa-weibo",
            "3 Weixin" => "fab fa-weixin",
            "4 Whatsapp" => "fab fa-whatsapp",
            "5 Whatsapp Square" => "fab fa-whatsapp-square",
            "6 Whmcs" => "fab fa-whmcs",
            "7 Wikipedia W" => "fab fa-wikipedia-w",
            "8 Windows" => "fab fa-windows",
            "9 Wix" => "fab fa-wix",
            "1 Wolf Pack Battalion" => "fab fa-wolf-pack-battalion",
            "2 Wordpress" => "fab fa-wordpress",
            "3 Wordpress Simple" => "fab fa-wordpress-simple",
            "4 Wpbeginner" => "fab fa-wpbeginner",
            "5 Wpexplorer" => "fab fa-wpexplorer",
            "6 Wpforms" => "fab fa-wpforms",
            "7 Wpressr" => "fab fa-wpressr",
            "8 Xing" => "fab fa-xing",
            "9 Xing Square" => "fab fa-xing-square",
            "Y Combinator" => "fab fa-y-combinator",
            "Yahoo" => "fab fa-yahoo",
            "Yammer" => "fab fa-yammer",
            "Yandex" => "fab fa-yandex",
            "Yandex International" => "fab fa-yandex-international",
            "Yarn" => "fab fa-yarn",
            "Yelp" => "fab fa-yelp",
            "Yoast" => "fab fa-yoast",
            "Youtube Square" => "fab fa-youtube-square",
            "Zhihu" => "fab fa-zhihu"
        );

      return array_reverse( $icons );

    }
    
}
