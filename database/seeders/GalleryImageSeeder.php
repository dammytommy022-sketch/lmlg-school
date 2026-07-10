<?php

namespace Database\Seeders;

use App\Models\GalleryImage;
use Illuminate\Database\Seeder;

class GalleryImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $images = [
            ['title' => 'Morning Assembly', 'category' => 'school-activities', 'image' => 'assets/images/gallery/pic1.jpg'],
            ['title' => 'Reading & Literacy', 'category' => 'classroom-learning', 'image' => 'assets/images/gallery/pic2.jpg'],
            ['title' => 'Inter-House Sports', 'category' => 'sports', 'image' => 'assets/images/gallery/pic3.jpg'],
            ['title' => 'Cultural Day', 'category' => 'cultural-events', 'image' => 'assets/images/gallery/pic4.jpg'],
            ['title' => 'Prize Giving', 'category' => 'graduation', 'image' => 'assets/images/gallery/pic5.jpg'],
            ['title' => 'Educational Visit', 'category' => 'excursions', 'image' => 'assets/images/gallery/pic6.jpg'],
            ['title' => 'Numeracy Practice', 'category' => 'classroom-learning', 'image' => 'assets/images/gallery/pic7.jpg'],
            ['title' => 'Club Activities', 'category' => 'school-activities', 'image' => 'assets/images/gallery/pic8.jpg'],
            ['title' => 'Team Spirit', 'category' => 'sports', 'image' => 'assets/images/gallery/pic9.jpg'],
            ['title' => 'Cultural Performance', 'category' => 'cultural-events', 'image' => 'assets/images/gallery/pic11.jpg'],
            ['title' => 'Moving-Up Ceremony', 'category' => 'graduation', 'image' => 'assets/images/gallery/pic21.jpg'],
            ['title' => 'Learning Beyond Class', 'category' => 'excursions', 'image' => 'assets/images/gallery/pic31.jpg'],
        ];

        foreach ($images as $index => $image) {
            GalleryImage::updateOrCreate(
                ['image' => $image['image']],
                $image + ['sort_order' => $index]
            );
        }
    }
}
