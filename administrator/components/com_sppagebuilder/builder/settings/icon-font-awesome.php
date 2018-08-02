<?php
/**
* @package SP Page Builder
* @author JoomShaper http://www.joomshaper.com
* @copyright Copyright (c) 2010 - 2016 JoomShaper
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
*/
//no direct accees
defined ('_JEXEC') or die ('restricted aceess');

$icon_list = array(
	'linearicons-home',
	'linearicons-home2',
	'linearicons-home3',
	'linearicons-home4',
	'linearicons-home5',
	'linearicons-home6',
	'linearicons-bathtub',
	'linearicons-toothbrush',
	'linearicons-bed',
	'linearicons-couch',
	'linearicons-chair',
	'linearicons-city',
	'linearicons-apartment',
	'linearicons-pencil',
	'linearicons-pencil2',
	'linearicons-pen',
	'linearicons-pencil3',
	'linearicons-eraser',
	'linearicons-pencil4',
	'linearicons-pencil5',
	'linearicons-feather',
	'linearicons-feather2',
	'linearicons-feather3',
	'linearicons-pen2',
	'linearicons-pen-add',
	'linearicons-pen-remove',
	'linearicons-vector',
	'linearicons-pen3',
	'linearicons-blog',
	'linearicons-brush',
	'linearicons-brush2',
	'linearicons-spray',
	'linearicons-paint-roller',
	'linearicons-stamp',
	'linearicons-tape',
	'linearicons-desk-tape',
	'linearicons-texture',
	'linearicons-eye-dropper',
	'linearicons-palette',
	'linearicons-color-sampler',
	'linearicons-bucket',
	'linearicons-gradient',
	'linearicons-gradient2',
	'linearicons-magic-wand',
	'linearicons-magnet',
	'linearicons-pencil-ruler',
	'linearicons-pencil-ruler2',
	'linearicons-compass',
	'linearicons-aim',
	'linearicons-gun',
	'linearicons-bottle',
	'linearicons-drop',
	'linearicons-drop-crossed',
	'linearicons-drop2',
	'linearicons-snow',
	'linearicons-snow2',
	'linearicons-fire',
	'linearicons-lighter',
	'linearicons-knife',
	'linearicons-dagger',
	'linearicons-tissue',
	'linearicons-toilet-paper',
	'linearicons-poop',
	'linearicons-umbrella',
	'linearicons-umbrella2',
	'linearicons-rain',
	'linearicons-tornado',
	'linearicons-wind',
	'linearicons-fan',
	'linearicons-contrast',
	'linearicons-sun-small',
	'linearicons-sun',
	'linearicons-sun2',
	'linearicons-moon',
	'linearicons-cloud',
	'linearicons-cloud-upload',
	'linearicons-cloud-download',
	'linearicons-cloud-rain',
	'linearicons-cloud-hailstones',
	'linearicons-cloud-snow',
	'linearicons-cloud-windy',
	'linearicons-sun-wind',
	'linearicons-cloud-fog',
	'linearicons-cloud-sun',
	'linearicons-cloud-lightning',
	'linearicons-cloud-sync',
	'linearicons-cloud-lock',
	'linearicons-cloud-gear',
	'linearicons-cloud-alert',
	'linearicons-cloud-check',
	'linearicons-cloud-cross',
	'linearicons-cloud-crossed',
	'linearicons-cloud-database',
	'linearicons-database',
	'linearicons-database-add',
	'linearicons-database-remove',
	'linearicons-database-lock',
	'linearicons-database-refresh',
	'linearicons-database-check',
	'linearicons-database-history',
	'linearicons-database-upload',
	'linearicons-database-download',
	'linearicons-server',
	'linearicons-shield',
	'linearicons-shield-check',
	'linearicons-shield-alert',
	'linearicons-shield-cross',
	'linearicons-lock',
	'linearicons-rotation-lock',
	'linearicons-unlock',
	'linearicons-key',
	'linearicons-key-hole',
	'linearicons-toggle-off',
	'linearicons-toggle-on',
	'linearicons-cog',
	'linearicons-cog2',
	'linearicons-wrench',
	'linearicons-screwdriver',
	'linearicons-hammer-wrench',
	'linearicons-hammer',
	'linearicons-saw',
	'linearicons-axe',
	'linearicons-axe2',
	'linearicons-shovel',
	'linearicons-pickaxe',
	'linearicons-factory',
	'linearicons-factory2',
	'linearicons-recycle',
	'linearicons-trash',
	'linearicons-trash2',
	'linearicons-trash3',
	'linearicons-broom',
	'linearicons-game',
	'linearicons-gamepad',
	'linearicons-joystick',
	'linearicons-dice',
	'linearicons-spades',
	'linearicons-diamonds',
	'linearicons-clubs',
	'linearicons-hearts',
	'linearicons-heart',
	'linearicons-star',
	'linearicons-star-half',
	'linearicons-star-empty',
	'linearicons-flag',
	'linearicons-flag2',
	'linearicons-flag3',
	'linearicons-mailbox-full',
	'linearicons-mailbox-empty',
	'linearicons-at-sign',
	'linearicons-envelope',
	'linearicons-envelope-open',
	'linearicons-paperclip',
	'linearicons-paper-plane',
	'linearicons-reply',
	'linearicons-reply-all',
	'linearicons-inbox',
	'linearicons-inbox2',
	'linearicons-outbox',
	'linearicons-box',
	'linearicons-archive',
	'linearicons-archive2',
	'linearicons-drawers',
	'linearicons-drawers2',
	'linearicons-drawers3',
	'linearicons-eye',
	'linearicons-eye-crossed',
	'linearicons-eye-plus',
	'linearicons-eye-minus',
	'linearicons-binoculars',
	'linearicons-binoculars2',
	'linearicons-hdd',
	'linearicons-hdd-down',
	'linearicons-hdd-up',
	'linearicons-floppy-disk',
	'linearicons-disc',
	'linearicons-tape2',
	'linearicons-printer',
	'linearicons-shredder',
	'linearicons-file-empty',
	'linearicons-file-add',
	'linearicons-file-check',
	'linearicons-file-lock',
	'linearicons-files',
	'linearicons-copy',
	'linearicons-compare',
	'linearicons-folder',
	'linearicons-folder-search',
	'linearicons-folder-plus',
	'linearicons-folder-minus',
	'linearicons-folder-download',
	'linearicons-folder-upload',
	'linearicons-folder-star',
	'linearicons-folder-heart',
	'linearicons-folder-user',
	'linearicons-folder-shared',
	'linearicons-folder-music',
	'linearicons-folder-picture',
	'linearicons-folder-film',
	'linearicons-scissors',
	'linearicons-paste',
	'linearicons-clipboard-empty',
	'linearicons-clipboard-pencil',
	'linearicons-clipboard-text',
	'linearicons-clipboard-check',
	'linearicons-clipboard-down',
	'linearicons-clipboard-left',
	'linearicons-clipboard-alert',
	'linearicons-clipboard-user',
	'linearicons-register',
	'linearicons-enter',
	'linearicons-exit',
	'linearicons-papers',
	'linearicons-news',
	'linearicons-reading',
	'linearicons-typewriter',
	'linearicons-document',
	'linearicons-document2',
	'linearicons-graduation-hat',
	'linearicons-license',
	'linearicons-license2',
	'linearicons-medal-empty',
	'linearicons-medal-first',
	'linearicons-medal-second',
	'linearicons-medal-third',
	'linearicons-podium',
	'linearicons-trophy',
	'linearicons-trophy2',
	'linearicons-music-note',
	'linearicons-music-note2',
	'linearicons-music-note3',
	'linearicons-playlist',
	'linearicons-playlist-add',
	'linearicons-guitar',
	'linearicons-trumpet',
	'linearicons-album',
	'linearicons-shuffle',
	'linearicons-repeat-one',
	'linearicons-repeat',
	'linearicons-headphones',
	'linearicons-headset',
	'linearicons-loudspeaker',
	'linearicons-equalizer',
	'linearicons-theater',
	'linearicons-3d-glasses',
	'linearicons-ticket',
	'linearicons-presentation',
	'linearicons-play',
	'linearicons-film-play',
	'linearicons-clapboard-play',
	'linearicons-media',
	'linearicons-film',
	'linearicons-film2',
	'linearicons-surveillance',
	'linearicons-surveillance2',
	'linearicons-camera',
	'linearicons-camera-crossed',
	'linearicons-camera-play',
	'linearicons-time-lapse',
	'linearicons-record',
	'linearicons-camera2',
	'linearicons-camera-flip',
	'linearicons-panorama',
	'linearicons-time-lapse2',
	'linearicons-shutter',
	'linearicons-shutter2',
	'linearicons-face-detection',
	'linearicons-flare',
	'linearicons-convex',
	'linearicons-concave',
	'linearicons-picture',
	'linearicons-picture2',
	'linearicons-picture3',
	'linearicons-pictures',
	'linearicons-book',
	'linearicons-audio-book',
	'linearicons-book2',
	'linearicons-bookmark',
	'linearicons-bookmark2',
	'linearicons-label',
	'linearicons-library',
	'linearicons-library2',
	'linearicons-contacts',
	'linearicons-profile',
	'linearicons-portrait',
	'linearicons-portrait2',
	'linearicons-user',
	'linearicons-user-plus',
	'linearicons-user-minus',
	'linearicons-user-lock',
	'linearicons-users',
	'linearicons-users2',
	'linearicons-users-plus',
	'linearicons-users-minus',
	'linearicons-group-work',
	'linearicons-woman',
	'linearicons-man',
	'linearicons-baby',
	'linearicons-baby2',
	'linearicons-baby3',
	'linearicons-baby-bottle',
	'linearicons-walk',
	'linearicons-hand-waving',
	'linearicons-jump',
	'linearicons-run',
	'linearicons-woman2',
	'linearicons-man2',
	'linearicons-man-woman',
	'linearicons-height',
	'linearicons-weight',
	'linearicons-scale',
	'linearicons-button',
	'linearicons-bow-tie',
	'linearicons-tie',
	'linearicons-socks',
	'linearicons-shoe',
	'linearicons-shoes',
	'linearicons-hat',
	'linearicons-pants',
	'linearicons-shorts',
	'linearicons-flip-flops',
	'linearicons-shirt',
	'linearicons-hanger',
	'linearicons-laundry',
	'linearicons-store',
	'linearicons-haircut',
	'linearicons-store-24',
	'linearicons-barcode',
	'linearicons-barcode2',
	'linearicons-barcode3',
	'linearicons-cashier',
	'linearicons-bag',
	'linearicons-bag2',
	'linearicons-cart',
	'linearicons-cart-empty',
	'linearicons-cart-full',
	'linearicons-cart-plus',
	'linearicons-cart-plus2',
	'linearicons-cart-add',
	'linearicons-cart-remove',
	'linearicons-cart-exchange',
	'linearicons-tag',
	'linearicons-tags',
	'linearicons-receipt',
	'linearicons-wallet',
	'linearicons-credit-card',
	'linearicons-cash-dollar',
	'linearicons-cash-euro',
	'linearicons-cash-pound',
	'linearicons-cash-yen',
	'linearicons-bag-dollar',
	'linearicons-bag-euro',
	'linearicons-bag-pound',
	'linearicons-bag-yen',
	'linearicons-coin-dollar',
	'linearicons-coin-euro',
	'linearicons-coin-pound',
	'linearicons-coin-yen',
	'linearicons-calculator',
	'linearicons-calculator2',
	'linearicons-abacus',
	'linearicons-vault',
	'linearicons-telephone',
	'linearicons-phone-lock',
	'linearicons-phone-wave',
	'linearicons-phone-pause',
	'linearicons-phone-outgoing',
	'linearicons-phone-incoming',
	'linearicons-phone-in-out',
	'linearicons-phone-error',
	'linearicons-phone-sip',
	'linearicons-phone-plus',
	'linearicons-phone-minus',
	'linearicons-voicemail',
	'linearicons-dial',
	'linearicons-telephone2',
	'linearicons-pushpin',
	'linearicons-pushpin2',
	'linearicons-map-marker',
	'linearicons-map-marker-user',
	'linearicons-map-marker-down',
	'linearicons-map-marker-check',
	'linearicons-map-marker-crossed',
	'linearicons-radar',
	'linearicons-compass2',
	'linearicons-map',
	'linearicons-map2',
	'linearicons-location',
	'linearicons-road-sign',
	'linearicons-calendar-empty',
	'linearicons-calendar-check',
	'linearicons-calendar-cross',
	'linearicons-calendar-31',
	'linearicons-calendar-full',
	'linearicons-calendar-insert',
	'linearicons-calendar-text',
	'linearicons-calendar-user',
	'linearicons-mouse',
	'linearicons-mouse-left',
	'linearicons-mouse-right',
	'linearicons-mouse-both',
	'linearicons-keyboard',
	'linearicons-keyboard-up',
	'linearicons-keyboard-down',
	'linearicons-delete',
	'linearicons-spell-check',
	'linearicons-escape',
	'linearicons-enter2',
	'linearicons-screen',
	'linearicons-aspect-ratio',
	'linearicons-signal',
	'linearicons-signal-lock',
	'linearicons-signal-80',
	'linearicons-signal-60',
	'linearicons-signal-40',
	'linearicons-signal-20',
	'linearicons-signal-0',
	'linearicons-signal-blocked',
	'linearicons-sim',
	'linearicons-flash-memory',
	'linearicons-usb-drive',
	'linearicons-phone',
	'linearicons-smartphone',
	'linearicons-smartphone-notification',
	'linearicons-smartphone-vibration',
	'linearicons-smartphone-embed',
	'linearicons-smartphone-waves',
	'linearicons-tablet',
	'linearicons-tablet2',
	'linearicons-laptop',
	'linearicons-laptop-phone',
	'linearicons-desktop',
	'linearicons-launch',
	'linearicons-new-tab',
	'linearicons-window',
	'linearicons-cable',
	'linearicons-cable2',
	'linearicons-tv',
	'linearicons-radio',
	'linearicons-remote-control',
	'linearicons-power-switch',
	'linearicons-power',
	'linearicons-power-crossed',
	'linearicons-flash-auto',
	'linearicons-lamp',
	'linearicons-flashlight',
	'linearicons-lampshade',
	'linearicons-cord',
	'linearicons-outlet',
	'linearicons-battery-power',
	'linearicons-battery-empty',
	'linearicons-battery-alert',
	'linearicons-battery-error',
	'linearicons-battery-low1',
	'linearicons-battery-low2',
	'linearicons-battery-low3',
	'linearicons-battery-mid1',
	'linearicons-battery-mid2',
	'linearicons-battery-mid3',
	'linearicons-battery-full',
	'linearicons-battery-charging',
	'linearicons-battery-charging2',
	'linearicons-battery-charging3',
	'linearicons-battery-charging4',
	'linearicons-battery-charging5',
	'linearicons-battery-charging6',
	'linearicons-battery-charging7',
	'linearicons-chip',
	'linearicons-chip-x64',
	'linearicons-chip-x86',
	'linearicons-bubble',
	'linearicons-bubbles',
	'linearicons-bubble-dots',
	'linearicons-bubble-alert',
	'linearicons-bubble-question',
	'linearicons-bubble-text',
	'linearicons-bubble-pencil',
	'linearicons-bubble-picture',
	'linearicons-bubble-video',
	'linearicons-bubble-user',
	'linearicons-bubble-quote',
	'linearicons-bubble-heart',
	'linearicons-bubble-emoticon',
	'linearicons-bubble-attachment',
	'linearicons-phone-bubble',
	'linearicons-quote-open',
	'linearicons-quote-close',
	'linearicons-dna',
	'linearicons-heart-pulse',
	'linearicons-pulse',
	'linearicons-syringe',
	'linearicons-pills',
	'linearicons-first-aid',
	'linearicons-lifebuoy',
	'linearicons-bandage',
	'linearicons-bandages',
	'linearicons-thermometer',
	'linearicons-microscope',
	'linearicons-brain',
	'linearicons-beaker',
	'linearicons-skull',
	'linearicons-bone',
	'linearicons-construction',
	'linearicons-construction-cone',
	'linearicons-pie-chart',
	'linearicons-pie-chart2',
	'linearicons-graph',
	'linearicons-chart-growth',
	'linearicons-chart-bars',
	'linearicons-chart-settings',
	'linearicons-cake',
	'linearicons-gift',
	'linearicons-balloon',
	'linearicons-rank',
	'linearicons-rank2',
	'linearicons-rank3',
	'linearicons-crown',
	'linearicons-lotus',
	'linearicons-diamond',
	'linearicons-diamond2',
	'linearicons-diamond3',
	'linearicons-diamond4',
	'linearicons-linearicons',
	'linearicons-teacup',
	'linearicons-teapot',
	'linearicons-glass',
	'linearicons-bottle2',
	'linearicons-glass-cocktail',
	'linearicons-glass2',
	'linearicons-dinner',
	'linearicons-dinner2',
	'linearicons-chef',
	'linearicons-scale2',
	'linearicons-egg',
	'linearicons-egg2',
	'linearicons-eggs',
	'linearicons-platter',
	'linearicons-steak',
	'linearicons-hamburger',
	'linearicons-hotdog',
	'linearicons-pizza',
	'linearicons-sausage',
	'linearicons-chicken',
	'linearicons-fish',
	'linearicons-carrot',
	'linearicons-cheese',
	'linearicons-bread',
	'linearicons-ice-cream',
	'linearicons-ice-cream2',
	'linearicons-candy',
	'linearicons-lollipop',
	'linearicons-coffee-bean',
	'linearicons-coffee-cup',
	'linearicons-cherry',
	'linearicons-grapes',
	'linearicons-citrus',
	'linearicons-apple',
	'linearicons-leaf',
	'linearicons-landscape',
	'linearicons-pine-tree',
	'linearicons-tree',
	'linearicons-cactus',
	'linearicons-paw',
	'linearicons-footprint',
	'linearicons-speed-slow',
	'linearicons-speed-medium',
	'linearicons-speed-fast',
	'linearicons-rocket',
	'linearicons-hammer2',
	'linearicons-balance',
		'linearicons-briefcase',
		'linearicons-luggage-weight',
		'linearicons-dolly',
		'linearicons-plane',
		'linearicons-plane-crossed',
		'linearicons-helicopter',
		'linearicons-traffic-lights',
		'linearicons-siren',
		'linearicons-road',
		'linearicons-engine',
		'linearicons-oil-pressure',
		'linearicons-coolant-temperature',
		'linearicons-car-battery',
		'linearicons-gas',
		'linearicons-gallon',
		'linearicons-transmission',
		'linearicons-car',
		'linearicons-car-wash',
		'linearicons-car-wash2',
		'linearicons-bus',
		'linearicons-bus2',
		'linearicons-car2',
		'linearicons-parking',
		'linearicons-car-lock',
		'linearicons-taxi',
		'linearicons-car-siren',
		'linearicons-car-wash3',
		'linearicons-car-wash4',
		'linearicons-ambulance',
		'linearicons-truck',
		'linearicons-trailer',
		'linearicons-scale-truck',
		'linearicons-train',
		'linearicons-ship',
		'linearicons-ship2',
		'linearicons-anchor',
		'linearicons-boat',
		'linearicons-bicycle',
		'linearicons-bicycle2',
		'linearicons-dumbbell',
		'linearicons-bench-press',
		'linearicons-swim',
		'linearicons-football',
		'linearicons-baseball-bat',
		'linearicons-baseball',
		'linearicons-tennis',
		'linearicons-tennis2',
		'linearicons-ping-pong',
		'linearicons-hockey',
		'linearicons-8ball',
		'linearicons-bowling',
		'linearicons-bowling-pins',
		'linearicons-golf',
		'linearicons-golf2',
		'linearicons-archery',
		'linearicons-slingshot',
		'linearicons-soccer',
		'linearicons-basketball',
		'linearicons-cube',
		'linearicons-3d-rotate',
		'linearicons-puzzle',
		'linearicons-glasses',
		'linearicons-glasses2',
		'linearicons-accessibility',
		'linearicons-wheelchair',
		'linearicons-wall',
		'linearicons-fence',
		'linearicons-wall2',
		'linearicons-icons',
		'linearicons-resize-handle',
		'linearicons-icons2',
		'linearicons-select',
		'linearicons-select2',
		'linearicons-site-map',
		'linearicons-earth',
		'linearicons-earth-lock',
		'linearicons-network',
		'linearicons-network-lock',
		'linearicons-planet',
		'linearicons-happy',
		'linearicons-smile',
		'linearicons-grin',
		'linearicons-tongue',
		'linearicons-sad',
		'linearicons-wink',
		'linearicons-dream',
		'linearicons-shocked',
		'linearicons-shocked2',
		'linearicons-tongue2',
		'linearicons-neutral',
		'linearicons-happy-grin',
		'linearicons-cool',
		'linearicons-mad',
		'linearicons-grin-evil',
		'linearicons-evil',
		'linearicons-wow',
		'linearicons-annoyed',
		'linearicons-wondering',
		'linearicons-confused',
		'linearicons-zipped',
		'linearicons-grumpy',
		'linearicons-mustache',
		'linearicons-tombstone-hipster',
		'linearicons-tombstone',
		'linearicons-ghost',
		'linearicons-ghost-hipster',
		'linearicons-halloween',
		'linearicons-christmas',
		'linearicons-easter-egg',
		'linearicons-mustache2',
		'linearicons-mustache-glasses',
		'linearicons-pipe',
		'linearicons-alarm',
		'linearicons-alarm-add',
		'linearicons-alarm-snooze',
		'linearicons-alarm-ringing',
		'linearicons-bullhorn',
		'linearicons-hearing',
		'linearicons-volume-high',
		'linearicons-volume-medium',
		'linearicons-volume-low',
		'linearicons-volume',
		'linearicons-mute',
		'linearicons-lan',
		'linearicons-lan2',
		'linearicons-wifi',
		'linearicons-wifi-lock',
		'linearicons-wifi-blocked',
		'linearicons-wifi-mid',
		'linearicons-wifi-low',
		'linearicons-wifi-low2',
		'linearicons-wifi-alert',
		'linearicons-wifi-alert-mid',
		'linearicons-wifi-alert-low',
		'linearicons-wifi-alert-low2',
		'linearicons-stream',
		'linearicons-stream-check',
		'linearicons-stream-error',
		'linearicons-stream-alert',
		'linearicons-communication',
		'linearicons-communication-crossed',
		'linearicons-broadcast',
		'linearicons-antenna',
		'linearicons-satellite',
		'linearicons-satellite2',
		'linearicons-mic',
		'linearicons-mic-mute',
		'linearicons-mic2',
		'linearicons-spotlights',
		'linearicons-hourglass',
		'linearicons-loading',
		'linearicons-loading2',
		'linearicons-loading3',
		'linearicons-refresh',
		'linearicons-refresh2',
		'linearicons-undo',
		'linearicons-redo',
		'linearicons-jump2',
		'linearicons-undo2',
		'linearicons-redo2',
		'linearicons-sync',
		'linearicons-repeat-one2',
		'linearicons-sync-crossed',
		'linearicons-sync2',
		'linearicons-repeat-one3',
		'linearicons-sync-crossed2',
		'linearicons-return',
		'linearicons-return2',
		'linearicons-refund',
		'linearicons-history',
		'linearicons-history2',
		'linearicons-self-timer',
		'linearicons-clock',
		'linearicons-clock2',
		'linearicons-clock3',
		'linearicons-watch',
		'linearicons-alarm2',
		'linearicons-alarm-add2',
		'linearicons-alarm-remove',
		'linearicons-alarm-check',
		'linearicons-alarm-error',
		'linearicons-timer',
		'linearicons-timer-crossed',
		'linearicons-timer2',
		'linearicons-timer-crossed2',
		'linearicons-download',
		'linearicons-upload',
		'linearicons-download2',
		'linearicons-upload2',
		'linearicons-enter-up',
		'linearicons-enter-down',
		'linearicons-enter-left',
		'linearicons-enter-right',
		'linearicons-exit-up',
		'linearicons-exit-down',
		'linearicons-exit-left',
		'linearicons-exit-right',
		'linearicons-enter-up2',
		'linearicons-enter-down2',
		'linearicons-enter-vertical',
		'linearicons-enter-left2',
		'linearicons-enter-right2',
		'linearicons-enter-horizontal',
		'linearicons-exit-up2',
		'linearicons-exit-down2',
		'linearicons-exit-left2',
		'linearicons-exit-right2',
		'linearicons-cli',
		'linearicons-bug',
		'linearicons-code',
		'linearicons-file-code',
		'linearicons-file-image',
		'linearicons-file-zip',
		'linearicons-file-audio',
		'linearicons-file-video',
		'linearicons-file-preview',
		'linearicons-file-charts',
		'linearicons-file-stats',
		'linearicons-file-spreadsheet',
		'linearicons-link',
		'linearicons-unlink',
		'linearicons-link2',
		'linearicons-unlink2',
		'linearicons-thumbs-up',
		'linearicons-thumbs-down',
		'linearicons-thumbs-up2',
		'linearicons-thumbs-down2',
		'linearicons-thumbs-up3',
		'linearicons-thumbs-down3',
		'linearicons-share',
		'linearicons-share2',
		'linearicons-share3',
		'linearicons-magnifier',
		'linearicons-file-search',
		'linearicons-find-replace',
		'linearicons-zoom-in',
		'linearicons-zoom-out',
		'linearicons-loupe',
		'linearicons-loupe-zoom-in',
		'linearicons-loupe-zoom-out',
		'linearicons-cross',
		'linearicons-menu',
		'linearicons-list',
		'linearicons-list2',
		'linearicons-list3',
		'linearicons-menu2',
		'linearicons-list4',
		'linearicons-menu3',
		'linearicons-exclamation',
		'linearicons-question',
		'linearicons-check',
		'linearicons-cross2',
		'linearicons-plus',
		'linearicons-minus',
		'linearicons-percent',
		'linearicons-chevron-up',
		'linearicons-chevron-down',
		'linearicons-chevron-left',
		'linearicons-chevron-right',
		'linearicons-chevrons-expand-vertical',
		'linearicons-chevrons-expand-horizontal',
		'linearicons-chevrons-contract-vertical',
		'linearicons-chevrons-contract-horizontal',
		'linearicons-arrow-up',
		'linearicons-arrow-down',
		'linearicons-arrow-left',
		'linearicons-arrow-right',
		'linearicons-arrow-up-right',
		'linearicons-arrows-merge',
		'linearicons-arrows-split',
		'linearicons-arrow-divert',
		'linearicons-arrow-return',
		'linearicons-expand',
		'linearicons-contract',
		'linearicons-expand2',
		'linearicons-contract2',
		'linearicons-move',
		'linearicons-tab',
		'linearicons-arrow-wave',
		'linearicons-expand3',
		'linearicons-expand4',
		'linearicons-contract3',
		'linearicons-notification',
		'linearicons-warning',
		'linearicons-notification-circle',
		'linearicons-question-circle',
		'linearicons-menu-circle',
		'linearicons-checkmark-circle',
		'linearicons-cross-circle',
		'linearicons-plus-circle',
		'linearicons-circle-minus',
		'linearicons-percent-circle',
		'linearicons-arrow-up-circle',
		'linearicons-arrow-down-circle',
		'linearicons-arrow-left-circle',
		'linearicons-arrow-right-circle',
		'linearicons-chevron-up-circle',
		'linearicons-chevron-down-circle',
		'linearicons-chevron-left-circle',
		'linearicons-chevron-right-circle',
		'linearicons-backward-circle',
		'linearicons-first-circle',
		'linearicons-previous-circle',
		'linearicons-stop-circle',
		'linearicons-play-circle',
		'linearicons-pause-circle',
		'linearicons-next-circle',
		'linearicons-last-circle',
		'linearicons-forward-circle',
		'linearicons-eject-circle',
		'linearicons-crop',
		'linearicons-frame-expand',
		'linearicons-frame-contract',
		'linearicons-focus',
		'linearicons-transform',
		'linearicons-grid',
		'linearicons-grid-crossed',
		'linearicons-layers',
		'linearicons-layers-crossed',
		'linearicons-toggle',
		'linearicons-rulers',
		'linearicons-ruler',
		'linearicons-funnel',
		'linearicons-flip-horizontal',
		'linearicons-flip-vertical',
		'linearicons-flip-horizontal2',
		'linearicons-flip-vertical2',
		'linearicons-angle',
		'linearicons-angle2',
		'linearicons-subtract',
		'linearicons-combine',
		'linearicons-intersect',
		'linearicons-exclude',
		'linearicons-align-center-vertical',
		'linearicons-align-right',
		'linearicons-align-bottom',
		'linearicons-align-left',
		'linearicons-align-center-horizontal',
		'linearicons-align-top',
		'linearicons-square',
		'linearicons-plus-square',
		'linearicons-minus-square',
		'linearicons-percent-square',
		'linearicons-arrow-up-square',
		'linearicons-arrow-down-square',
		'linearicons-arrow-left-square',
		'linearicons-arrow-right-square',
		'linearicons-chevron-up-square',
		'linearicons-chevron-down-square',
		'linearicons-chevron-left-square',
		'linearicons-chevron-right-square',
		'linearicons-check-square',
		'linearicons-cross-square',
		'linearicons-menu-square',
		'linearicons-prohibited',
		'linearicons-circle',
		'linearicons-radio-button',
		'linearicons-ligature',
		'linearicons-text-format',
		'linearicons-text-format-remove',
		'linearicons-text-size',
		'linearicons-bold',
		'linearicons-italic',
		'linearicons-underline',
		'linearicons-strikethrough',
		'linearicons-highlight',
		'linearicons-text-align-left',
		'linearicons-text-align-center',
		'linearicons-text-align-right',
		'linearicons-text-align-justify',
		'linearicons-line-spacing',
		'linearicons-indent-increase',
		'linearicons-indent-decrease',
		'linearicons-text-wrap',
		'linearicons-pilcrow',
		'linearicons-direction-ltr',
		'linearicons-direction-rtl',
		'linearicons-page-break',
		'linearicons-page-break2',
		'linearicons-sort-alpha-asc',
		'linearicons-sort-alpha-desc',
		'linearicons-sort-numeric-asc',
		'linearicons-sort-numeric-desc',
		'linearicons-sort-amount-asc',
		'linearicons-sort-amount-desc',
		'linearicons-sort-time-asc',
		'linearicons-sort-time-desc',
		'linearicons-sigma',
		'linearicons-pencil-line',
		'linearicons-hand',
		'linearicons-pointer-up',
		'linearicons-pointer-right',
		'linearicons-pointer-down',
		'linearicons-pointer-left',
		'linearicons-finger-tap',
		'linearicons-fingers-tap',
		'linearicons-reminder',
		'linearicons-fingers-crossed',
		'linearicons-fingers-victory',
		'linearicons-gesture-zoom',
		'linearicons-gesture-pinch',
		'linearicons-fingers-scroll-horizontal',
		'linearicons-fingers-scroll-vertical',
		'linearicons-fingers-scroll-left',
		'linearicons-fingers-scroll-right',
		'linearicons-hand2',
		'linearicons-pointer-up2',
		'linearicons-pointer-right2',
		'linearicons-pointer-down2',
		'linearicons-pointer-left2',
		'linearicons-finger-tap2',
		'linearicons-fingers-tap2',
		'linearicons-reminder2',
		'linearicons-gesture-zoom2',
		'linearicons-gesture-pinch2',
		'linearicons-fingers-scroll-horizontal2',
		'linearicons-fingers-scroll-vertical2',
		'linearicons-fingers-scroll-left2',
		'linearicons-fingers-scroll-right2',
		'linearicons-fingers-scroll-vertical3',
		'linearicons-border-style',
		'linearicons-border-all',
		'linearicons-border-outer',
		'linearicons-border-inner',
		'linearicons-border-top',
		'linearicons-border-horizontal',
		'linearicons-border-bottom',
		'linearicons-border-left',
		'linearicons-border-vertical',
		'linearicons-border-right',
		'linearicons-border-none',
		'linearicons-ellipsis',
		'fa-500px',
			'fa-adjust',
			'fa-adn',
			'fa-align-center',
			'fa-align-justify',
			'fa-align-left',
			'fa-align-right',
			'fa-amazon',
			'fa-ambulance',
			'fa-anchor',
			'fa-android',
			'fa-angellist',
			'fa-angle-double-down',
			'fa-angle-double-left',
			'fa-angle-double-right',
			'fa-angle-double-up',
			'fa-angle-down',
			'fa-angle-left',
			'fa-angle-right',
			'fa-angle-up',
			'fa-apple',
			'fa-archive',
			'fa-area-chart',
			'fa-arrow-circle-down',
			'fa-arrow-circle-left',
			'fa-arrow-circle-o-down',
			'fa-arrow-circle-o-left',
			'fa-arrow-circle-o-right',
			'fa-arrow-circle-o-up',
			'fa-arrow-circle-right',
			'fa-arrow-circle-up',
			'fa-arrow-down',
			'fa-arrow-left',
			'fa-arrow-right',
			'fa-arrow-up',
			'fa-arrows',
			'fa-arrows-alt',
			'fa-arrows-h',
			'fa-arrows-v',
			'fa-asterisk',
			'fa-at',
			'fa-automobile',
			'fa-backward',
			'fa-balance-scale',
			'fa-ban',
			'fa-bank',
			'fa-bar-chart',
			'fa-bar-chart-o',
			'fa-barcode',
			'fa-bars',
			'fa-battery-0',
			'fa-battery-1',
			'fa-battery-2',
			'fa-battery-3',
			'fa-battery-4',
			'fa-battery-empty',
			'fa-battery-full',
			'fa-battery-half',
			'fa-battery-quarter',
			'fa-battery-three-quarters',
			'fa-bed',
			'fa-beer',
			'fa-behance',
			'fa-behance-square',
			'fa-bell',
			'fa-bell-o',
			'fa-bell-slash',
			'fa-bell-slash-o',
			'fa-bicycle',
			'fa-binoculars',
			'fa-birthday-cake',
			'fa-bitbucket',
			'fa-bitbucket-square',
			'fa-bitcoin',
			'fa-black-tie',
			'fa-bluetooth',
			'fa-bluetooth-b',
			'fa-bold',
			'fa-bolt',
			'fa-bomb',
			'fa-book',
			'fa-bookmark',
			'fa-bookmark-o',
			'fa-briefcase',
			'fa-btc',
			'fa-bug',
			'fa-building',
			'fa-building-o',
			'fa-bullhorn',
			'fa-bullseye',
			'fa-bus',
			'fa-buysellads',
			'fa-cab',
			'fa-calculator',
			'fa-calendar',
			'fa-calendar-check-o',
			'fa-calendar-minus-o',
			'fa-calendar-o',
			'fa-calendar-plus-o',
			'fa-calendar-times-o',
			'fa-camera',
			'fa-camera-retro',
			'fa-car',
			'fa-caret-down',
			'fa-caret-left',
			'fa-caret-right',
			'fa-caret-square-o-down',
			'fa-caret-square-o-left',
			'fa-caret-square-o-right',
			'fa-caret-square-o-up',
			'fa-caret-up',
			'fa-cart-arrow-down',
			'fa-cart-plus',
			'fa-cc',
			'fa-cc-amex',
			'fa-cc-diners-club',
			'fa-cc-discover',
			'fa-cc-jcb',
			'fa-cc-mastercard',
			'fa-cc-paypal',
			'fa-cc-stripe',
			'fa-cc-visa',
			'fa-certificate',
			'fa-chain',
			'fa-chain-broken',
			'fa-check',
			'fa-check-circle',
			'fa-check-circle-o',
			'fa-check-square',
			'fa-check-square-o',
			'fa-chevron-circle-down',
			'fa-chevron-circle-left',
			'fa-chevron-circle-right',
			'fa-chevron-circle-up',
			'fa-chevron-down',
			'fa-chevron-left',
			'fa-chevron-right',
			'fa-chevron-up',
			'fa-child',
			'fa-chrome',
			'fa-circle',
			'fa-circle-o',
			'fa-circle-o-notch',
			'fa-circle-thin',
			'fa-clipboard',
			'fa-clock-o',
			'fa-clone',
			'fa-close',
			'fa-cloud',
			'fa-cloud-download',
			'fa-cloud-upload',
			'fa-cny',
			'fa-code',
			'fa-code-fork',
			'fa-codepen',
			'fa-codiepie',
			'fa-coffee',
			'fa-cog',
			'fa-cogs',
			'fa-columns',
			'fa-comment',
			'fa-comment-o',
			'fa-commenting',
			'fa-commenting-o',
			'fa-comments',
			'fa-comments-o',
			'fa-compass',
			'fa-compress',
			'fa-connectdevelop',
			'fa-contao',
			'fa-copy',
			'fa-copyright',
			'fa-creative-commons',
			'fa-credit-card',
			'fa-credit-card-alt',
			'fa-crop',
			'fa-crosshairs',
			'fa-css3',
			'fa-cube',
			'fa-cubes',
			'fa-cut',
			'fa-cutlery',
			'fa-dashboard',
			'fa-dashcube',
			'fa-database',
			'fa-dedent',
			'fa-delicious',
			'fa-desktop',
			'fa-deviantart',
			'fa-diamond',
			'fa-digg',
			'fa-dollar',
			'fa-dot-circle-o',
			'fa-download',
			'fa-dribbble',
			'fa-dropbox',
			'fa-drupal',
			'fa-edge',
			'fa-edit',
			'fa-eject',
			'fa-ellipsis-h',
			'fa-ellipsis-v',
			'fa-empire',
			'fa-envelope',
			'fa-envelope-o',
			'fa-envelope-square',
			'fa-eraser',
			'fa-eur',
			'fa-euro',
			'fa-exchange',
			'fa-exclamation',
			'fa-exclamation-circle',
			'fa-exclamation-triangle',
			'fa-expand',
			'fa-expeditedssl',
			'fa-external-link',
			'fa-external-link-square',
			'fa-eye',
			'fa-eye-slash',
			'fa-eyedropper',
			'fa-facebook',
			'fa-facebook-f',
			'fa-facebook-official',
			'fa-facebook-square',
			'fa-fast-backward',
			'fa-fast-forward',
			'fa-fax',
			'fa-feed',
			'fa-female',
			'fa-fighter-jet',
			'fa-file',
			'fa-file-archive-o',
			'fa-file-audio-o',
			'fa-file-code-o',
			'fa-file-excel-o',
			'fa-file-image-o',
			'fa-file-movie-o',
			'fa-file-o',
			'fa-file-pdf-o',
			'fa-file-photo-o',
			'fa-file-picture-o',
			'fa-file-powerpoint-o',
			'fa-file-sound-o',
			'fa-file-text',
			'fa-file-text-o',
			'fa-file-video-o',
			'fa-file-word-o',
			'fa-file-zip-o',
			'fa-files-o',
			'fa-film',
			'fa-filter',
			'fa-fire',
			'fa-fire-extinguisher',
			'fa-firefox',
			'fa-flag',
			'fa-flag-checkered',
			'fa-flag-o',
			'fa-flash',
			'fa-flask',
			'fa-flickr',
			'fa-floppy-o',
			'fa-folder',
			'fa-folder-o',
			'fa-folder-open',
			'fa-folder-open-o',
			'fa-font',
			'fa-fonticons',
			'fa-fort-awesome',
			'fa-forumbee',
			'fa-forward',
			'fa-foursquare',
			'fa-frown-o',
			'fa-futbol-o',
			'fa-gamepad',
			'fa-gavel',
			'fa-gbp',
			'fa-ge',
			'fa-gear',
			'fa-gears',
			'fa-genderless',
			'fa-get-pocket',
			'fa-gg',
			'fa-gg-circle',
			'fa-gift',
			'fa-git',
			'fa-git-square',
			'fa-github',
			'fa-github-alt',
			'fa-github-square',
			'fa-gittip',
			'fa-glass',
			'fa-globe',
			'fa-google',
			'fa-google-plus',
			'fa-google-plus-square',
			'fa-google-wallet',
			'fa-graduation-cap',
			'fa-gratipay',
			'fa-group',
			'fa-h-square',
			'fa-hacker-news',
			'fa-hand-grab-o',
			'fa-hand-lizard-o',
			'fa-hand-o-down',
			'fa-hand-o-left',
			'fa-hand-o-right',
			'fa-hand-o-up',
			'fa-hand-paper-o',
			'fa-hand-peace-o',
			'fa-hand-pointer-o',
			'fa-hand-rock-o',
			'fa-hand-scissors-o',
			'fa-hand-spock-o',
			'fa-hand-stop-o',
			'fa-hashtag',
			'fa-hdd-o',
			'fa-header',
			'fa-headphones',
			'fa-heart',
			'fa-heart-o',
			'fa-heartbeat',
			'fa-history',
			'fa-home',
			'fa-hospital-o',
			'fa-hotel',
			'fa-hourglass',
			'fa-hourglass-1',
			'fa-hourglass-2',
			'fa-hourglass-3',
			'fa-hourglass-end',
			'fa-hourglass-half',
			'fa-hourglass-o',
			'fa-hourglass-start',
			'fa-houzz',
			'fa-html5',
			'fa-i-cursor',
			'fa-ils',
			'fa-image',
			'fa-inbox',
			'fa-indent',
			'fa-industry',
			'fa-info',
			'fa-info-circle',
			'fa-inr',
			'fa-instagram',
			'fa-institution',
			'fa-internet-explorer',
			'fa-intersex',
			'fa-ioxhost',
			'fa-italic',
			'fa-joomla',
			'fa-jpy',
			'fa-jsfiddle',
			'fa-key',
			'fa-keyboard-o',
			'fa-krw',
			'fa-language',
			'fa-laptop',
			'fa-lastfm',
			'fa-lastfm-square',
			'fa-leaf',
			'fa-leanpub',
			'fa-legal',
			'fa-lemon-o',
			'fa-level-down',
			'fa-level-up',
			'fa-life-bouy',
			'fa-life-buoy',
			'fa-life-ring',
			'fa-life-saver',
			'fa-lightbulb-o',
			'fa-line-chart',
			'fa-link',
			'fa-linkedin',
			'fa-linkedin-square',
			'fa-linux',
			'fa-list',
			'fa-list-alt',
			'fa-list-ol',
			'fa-list-ul',
			'fa-location-arrow',
			'fa-lock',
			'fa-long-arrow-down',
			'fa-long-arrow-left',
			'fa-long-arrow-right',
			'fa-long-arrow-up',
			'fa-magic',
			'fa-magnet',
			'fa-mail-forward',
			'fa-mail-reply',
			'fa-mail-reply-all',
			'fa-male',
			'fa-map',
			'fa-map-marker',
			'fa-map-o',
			'fa-map-pin',
			'fa-map-signs',
			'fa-mars',
			'fa-mars-double',
			'fa-mars-stroke',
			'fa-mars-stroke-h',
			'fa-mars-stroke-v',
			'fa-maxcdn',
			'fa-meanpath',
			'fa-medium',
			'fa-medkit',
			'fa-meh-o',
			'fa-mercury',
			'fa-microphone',
			'fa-microphone-slash',
			'fa-minus',
			'fa-minus-circle',
			'fa-minus-square',
			'fa-minus-square-o',
			'fa-mixcloud',
			'fa-mobile',
			'fa-mobile-phone',
			'fa-modx',
			'fa-money',
			'fa-moon-o',
			'fa-mortar-board',
			'fa-motorcycle',
			'fa-mouse-pointer',
			'fa-music',
			'fa-navicon',
			'fa-neuter',
			'fa-newspaper-o',
			'fa-object-group',
			'fa-object-ungroup',
			'fa-odnoklassniki',
			'fa-odnoklassniki-square',
			'fa-opencart',
			'fa-openid',
			'fa-opera',
			'fa-optin-monster',
			'fa-outdent',
			'fa-pagelines',
			'fa-paint-brush',
			'fa-paper-plane',
			'fa-paper-plane-o',
			'fa-paperclip',
			'fa-paragraph',
			'fa-paste',
			'fa-pause',
			'fa-pause-circle',
			'fa-pause-circle-o',
			'fa-paw',
			'fa-paypal',
			'fa-pencil',
			'fa-pencil-square',
			'fa-pencil-square-o',
			'fa-percent',
			'fa-phone',
			'fa-phone-square',
			'fa-photo',
			'fa-picture-o',
			'fa-pie-chart',
			'fa-pied-piper',
			'fa-pied-piper-alt',
			'fa-pinterest',
			'fa-pinterest-p',
			'fa-pinterest-square',
			'fa-plane',
			'fa-play',
			'fa-play-circle',
			'fa-play-circle-o',
			'fa-plug',
			'fa-plus',
			'fa-plus-circle',
			'fa-plus-square',
			'fa-plus-square-o',
			'fa-power-off',
			'fa-print',
			'fa-product-hunt',
			'fa-puzzle-piece',
			'fa-qq',
			'fa-qrcode',
			'fa-question',
			'fa-question-circle',
			'fa-quote-left',
			'fa-quote-right',
			'fa-ra',
			'fa-random',
			'fa-rebel',
			'fa-recycle',
			'fa-reddit',
			'fa-reddit-alien',
			'fa-reddit-square',
			'fa-refresh',
			'fa-registered',
			'fa-remove',
			'fa-renren',
			'fa-reorder',
			'fa-repeat',
			'fa-reply',
			'fa-reply-all',
			'fa-retweet',
			'fa-rmb',
			'fa-road',
			'fa-rocket',
			'fa-rotate-left',
			'fa-rotate-right',
			'fa-rouble',
			'fa-rss',
			'fa-rss-square',
			'fa-rub',
			'fa-ruble',
			'fa-rupee',
			'fa-safari',
			'fa-save',
			'fa-scissors',
			'fa-scribd',
			'fa-search',
			'fa-search-minus',
			'fa-search-plus',
			'fa-sellsy',
			'fa-send',
			'fa-send-o',
			'fa-server',
			'fa-share',
			'fa-share-alt',
			'fa-share-alt-square',
			'fa-share-square',
			'fa-share-square-o',
			'fa-shekel',
			'fa-sheqel',
			'fa-shield',
			'fa-ship',
			'fa-shirtsinbulk',
			'fa-shopping-bag',
			'fa-shopping-basket',
			'fa-shopping-cart',
			'fa-sign-in',
			'fa-sign-out',
			'fa-signal',
			'fa-simplybuilt',
			'fa-sitemap',
			'fa-skyatlas',
			'fa-skype',
			'fa-slack',
			'fa-sliders',
			'fa-slideshare',
			'fa-smile-o',
			'fa-soccer-ball-o',
			'fa-sort',
			'fa-sort-alpha-asc',
			'fa-sort-alpha-desc',
			'fa-sort-amount-asc',
			'fa-sort-amount-desc',
			'fa-sort-asc',
			'fa-sort-desc',
			'fa-sort-down',
			'fa-sort-numeric-asc',
			'fa-sort-numeric-desc',
			'fa-sort-up',
			'fa-soundcloud',
			'fa-space-shuttle',
			'fa-spinner',
			'fa-spoon',
			'fa-spotify',
			'fa-square',
			'fa-square-o',
			'fa-stack-exchange',
			'fa-stack-overflow',
			'fa-star',
			'fa-star-half',
			'fa-star-half-empty',
			'fa-star-half-full',
			'fa-star-half-o',
			'fa-star-o',
			'fa-steam',
			'fa-steam-square',
			'fa-step-backward',
			'fa-step-forward',
			'fa-stethoscope',
			'fa-sticky-note',
			'fa-sticky-note-o',
			'fa-stop',
			'fa-stop-circle',
			'fa-stop-circle-o',
			'fa-street-view',
			'fa-strikethrough',
			'fa-stumbleupon',
			'fa-stumbleupon-circle',
			'fa-subscript',
			'fa-subway',
			'fa-suitcase',
			'fa-sun-o',
			'fa-superscript',
			'fa-support',
			'fa-table',
			'fa-tablet',
			'fa-tachometer',
			'fa-tag',
			'fa-tags',
			'fa-tasks',
			'fa-taxi',
			'fa-television',
			'fa-tencent-weibo',
			'fa-terminal',
			'fa-text-height',
			'fa-text-width',
			'fa-th',
			'fa-th-large',
			'fa-th-list',
			'fa-thumb-tack',
			'fa-thumbs-down',
			'fa-thumbs-o-down',
			'fa-thumbs-o-up',
			'fa-thumbs-up',
			'fa-ticket',
			'fa-times',
			'fa-times-circle',
			'fa-times-circle-o',
			'fa-tint',
			'fa-toggle-down',
			'fa-toggle-left',
			'fa-toggle-off',
			'fa-toggle-on',
			'fa-toggle-right',
			'fa-toggle-up',
			'fa-trademark',
			'fa-train',
			'fa-transgender',
			'fa-transgender-alt',
			'fa-trash',
			'fa-trash-o',
			'fa-tree',
			'fa-trello',
			'fa-tripadvisor',
			'fa-trophy',
			'fa-truck',
			'fa-try',
			'fa-tty',
			'fa-tumblr',
			'fa-tumblr-square',
			'fa-turkish-lira',
			'fa-tv',
			'fa-twitch',
			'fa-twitter',
			'fa-twitter-square',
			'fa-umbrella',
			'fa-underline',
			'fa-undo',
			'fa-university',
			'fa-unlink',
			'fa-unlock',
			'fa-unlock-alt',
			'fa-unsorted',
			'fa-upload',
			'fa-usb',
			'fa-usd',
			'fa-user',
			'fa-user-md',
			'fa-user-plus',
			'fa-user-secret',
			'fa-user-times',
			'fa-users',
			'fa-venus',
			'fa-venus-double',
			'fa-venus-mars',
			'fa-viacoin',
			'fa-video-camera',
			'fa-vimeo',
			'fa-vimeo-square',
			'fa-vine',
			'fa-vk',
			'fa-volume-down',
			'fa-volume-off',
			'fa-volume-up',
			'fa-warning',
			'fa-wechat',
			'fa-weibo',
			'fa-weixin',
			'fa-whatsapp',
			'fa-wheelchair',
			'fa-wifi',
			'fa-wikipedia-w',
			'fa-windows',
			'fa-won',
			'fa-wordpress',
			'fa-wrench',
			'fa-xing',
			'fa-xing-square',
			'fa-y-combinator',
			'fa-y-combinator-square',
			'fa-yahoo',
			'fa-yc',
			'fa-yc-square',
			'fa-yelp',
			'fa-yen',
			'fa-youtube',
			'fa-youtube-play',
			'fa-youtube-square',
	);
