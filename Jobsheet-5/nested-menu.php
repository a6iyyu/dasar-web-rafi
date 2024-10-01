<?php
$menu = [
	[
		"nama" => "Beranda"
	],
	[
		"nama" => "Berita",
		"sub_menu" => [
			[
				"nama" => "Wisata",
				"sub_menu" => [
					[
						"nama" => "Pantai"
					],
					[
						"nama" => "Gunung"
					]
				]
			],
			[
				"nama" => "Kuliner"
			],
			[
				"nama" => "Hiburan"
			]
		]
	],
	[
		"nama" => "Tentang"
	],
	[
		"nama" => "Kontak"
	],
];

function tampilkan_menu_bertingkat(array $menu) {
	echo "<ul>";
	foreach($menu as $key => $item) {
		echo "<li>{$item['nama']}</li>";
		if (isset($item['sub_menu'])) tampilkan_menu_bertingkat($item['sub_menu']);
	}
	echo "</ul>";
}

tampilkan_menu_bertingkat($menu);
?>
