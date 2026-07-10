<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            [
                'slug' => 'new-reading-programme',
                'title' => 'New Reading Programme Strengthens Literacy Skills',
                'published_at' => '2026-06-10',
                'author' => 'School Office',
                'image' => 'assets/images/blog/latest-blog/pic1.jpg',
                'category' => 'Latest News',
                'excerpt' => 'Pupils are building stronger vocabulary, comprehension, and reading confidence through guided class activities.',
                'body' => "Pupils are building stronger vocabulary, comprehension, and reading confidence through guided class activities as part of the new reading programme introduced this term.\n\nThe programme pairs daily guided reading sessions with classroom discussion, encouraging pupils to read widely, ask questions, and express their understanding with confidence.\n\nTeachers report noticeable improvement in pupil participation and enthusiasm, with reading corners across classrooms now in regular use during free periods.",
            ],
            [
                'slug' => 'numeracy-week',
                'title' => 'Pupils Celebrate Excellence in Numeracy Week',
                'published_at' => '2026-05-28',
                'author' => 'Academic Team',
                'image' => 'assets/images/blog/latest-blog/pic2.jpg',
                'category' => 'Latest News',
                'excerpt' => 'Class competitions and practical problem-solving tasks encouraged teamwork, accuracy, and confidence.',
                'body' => "Numeracy Week brought classrooms together in friendly competition, with practical problem-solving tasks designed to build accuracy, speed, and confidence with numbers.\n\nPupils worked in teams to tackle real-world maths challenges, reinforcing lessons through play and collaboration rather than rote drills alone.\n\nThe week closed with a school-wide recognition assembly celebrating outstanding individual and class performances.",
            ],
            [
                'slug' => 'classroom-improvements',
                'title' => 'Parents and Alumni Support Classroom Improvements',
                'published_at' => '2026-04-18',
                'author' => 'Community Desk',
                'image' => 'assets/images/blog/latest-blog/pic3.jpg',
                'category' => 'Latest News',
                'excerpt' => 'Community partners continue to help create a safer, brighter, and more inspiring school environment.',
                'body' => "Community partners continue to help create a safer, brighter, and more inspiring school environment through ongoing classroom improvement projects.\n\nRecent contributions from parents and alumni groups have supported repairs, repainting, and the replacement of worn furniture across several classrooms.\n\nThe school remains grateful for this continued partnership and welcomes further support toward improving learning conditions for every pupil.",
            ],
            [
                'slug' => 'class-of-1986-legacy-project',
                'title' => 'LMLG Class of 1986 Legacy Project Initiative',
                'published_at' => '2026-03-02',
                'author' => 'Alumni Relations',
                'image' => 'assets/images/blog/latest-blog/pic1.jpg',
                'category' => 'Recent Highlight',
                'excerpt' => 'The Class of 1986 launches a legacy project to give back to the school that shaped their journey.',
                'body' => "Members of the Class of 1986 have come together to launch a legacy project aimed at giving back to the school that shaped their early education.\n\nThe initiative focuses on infrastructure improvement and the creation of sustainable resources that will benefit current and future pupils.\n\nThe class set encourages other alumni groups to consider similar initiatives as part of the wider Legacy Project movement.",
            ],
            [
                'slug' => 'homecoming-celebration',
                'title' => 'Homecoming Celebration Announcements',
                'published_at' => '2026-02-14',
                'author' => 'Alumni Relations',
                'image' => 'assets/images/blog/latest-blog/pic2.jpg',
                'category' => 'Recent Highlight',
                'excerpt' => 'Details of the upcoming homecoming celebration bringing generations of former pupils together.',
                'body' => "Plans are underway for this year's homecoming celebration, bringing together generations of former pupils for a day of reconnection and reflection.\n\nThe event will feature a school tour, alumni networking session, and recognition of long-serving staff and distinguished old pupils.\n\nFurther details on registration and scheduling will be shared through the alumni database and official school channels.",
            ],
            [
                'slug' => 'library-redevelopment',
                'title' => 'Library Redevelopment Updates',
                'published_at' => '2026-01-20',
                'author' => 'Legacy Project Team',
                'image' => 'assets/images/blog/latest-blog/pic3.jpg',
                'category' => 'Recent Highlight',
                'excerpt' => 'Progress continues on the re-engineering of the school library as part of the Legacy Project.',
                'body' => "Work continues on the re-engineering of the school library as part of the broader Legacy Project initiative.\n\nPlans include updated shelving, a dedicated reading corner, and a refreshed collection of age-appropriate books and reference materials.\n\nThe redevelopment is being made possible through the support of alumni and community contributors committed to preserving a strong reading culture.",
            ],
            [
                'slug' => 'alumni-reconnection-events',
                'title' => 'Alumni Reconnection Events',
                'published_at' => '2025-12-05',
                'author' => 'Alumni Relations',
                'image' => 'assets/images/gallery/pic4.jpg',
                'category' => 'Recent Highlight',
                'excerpt' => 'A series of informal gatherings helping former classmates reconnect across class sets.',
                'body' => "A series of informal reconnection events have been organised to help former classmates find one another across different class sets and generations.\n\nThese gatherings complement the Alumni Database, giving old pupils a chance to meet in person and rebuild lasting friendships.\n\nFormer pupils interested in joining future reconnection events are encouraged to register on the Alumni Database.",
            ],
        ];

        foreach ($posts as $post) {
            Post::updateOrCreate(['slug' => $post['slug']], $post);
        }
    }
}
