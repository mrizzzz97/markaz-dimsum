<?php
header('Content-Type: application/json');

// Dummy data produk (bisa diganti query MySQL nanti)
$produk = [
    [
        'nama' => 'Dimsum mix isi 50 HALAL HARGA PABRIK',
        'harga' => 105000,
        'stok' => 20,
        'rating' => 4.9,
        'gambar' => 'images/products/isi 50.png',
        'deskripsi' => 'Dimsum mix isi 50, halal, harga pabrik.'
    ],
    [
        'nama' => 'Dimsum mix isi 20 HALAL HARGA PABRIK',
        'harga' => 50000,
        'stok' => 15,
        'rating' => 4.9,
        'gambar' => 'images/products/isi 20.png',
        'deskripsi' => 'Dimsum mix isi 20, halal, harga pabrik.'
    ],
    [
        'nama' => 'Dimsum mix isi 100 HALAL HARGA PABRIK',
        'harga' => 210000,
        'stok' => 10,
        'rating' => 4.9,
        'gambar' => 'images/banner.jpg',
        'deskripsi' => 'Dimsum mix isi 100, halal, harga pabrik.'
    ],
    [
        'nama' => 'Dimsum mentai 6pcs',
        'harga' => 26000,
        'stok' => 12,
        'rating' => 4.9,
        'gambar' => 'images/products/mentai-6.jpg',
        'deskripsi' => 'Dimsum mentai isi 6, creamy dan lezat.'
    ],
    [
        'nama' => 'Dimsum mentai 8pcs',
        'harga' => 32000,
        'stok' => 8,
        'rating' => 4.9,
        'gambar' => 'images/products/mentai-8.jpg',
        'deskripsi' => 'Dimsum mentai isi 8, creamy dan lezat.'
    ],
    [
        'nama' => 'Sambosa Isi Daging Sapi Isi 9',
        'harga' => 40000,
        'stok' => 7,
        'rating' => 4.7,
        'gambar' => 'images/products/sambosa.jpg',
        'deskripsi' => 'Sambosa isi daging sapi, isi 9 pcs.'
    ],
    [
        'nama' => 'Bento homemade kaki Naga isi 10',
        'harga' => 25000,
        'stok' => 9,
        'rating' => 5.0,
        'gambar' => 'images/products/bento-naga.jpg',
        'deskripsi' => 'Bento homemade kaki naga isi 10.'
    ],
    [
        'nama' => 'Saos Dimsum',
        'harga' => 6000,
        'stok' => 30,
        'rating' => 4.9,
        'gambar' => 'images/banner.jpg',
        'deskripsi' => 'Saos dimsum homemade.'
    ]
];

echo json_encode($produk);
