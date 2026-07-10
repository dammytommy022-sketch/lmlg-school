<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $slides = [
            [
                'title' => 'Welcome to LMLG Primary School One, Fadeyi- Yaba, Lagos.',
                'subtitle' => 'Inspiring Excellence, Building Character',
                'image' => 'assets/images/slider/slide1.jpg',
                'button1_label' => 'READ MORE',
                'button1_link' => '/about',
                'button2_label' => 'Admission',
                'button2_link' => '/admissions',
                'sort_order' => 0,
                'is_active' => true,
            ],
            [
                'title' => 'Welcome to LMLG Primary School One, Fadeyi- Yaba, Lagos.',
                'subtitle' => 'Building Strong Foundations',
                'image' => 'assets/images/slider/slide2.jpg',
                'button1_label' => 'READ MORE',
                'button1_link' => '/about',
                'button2_label' => 'Academics',
                'button2_link' => '/academics',
                'sort_order' => 1,
                'is_active' => true,
            ],
        ];

        foreach ($slides as $slide) {
            Slider::updateOrCreate(
                ['image' => $slide['image']],
                $slide
            );
        }
    }
}
