<?php

namespace Database\Seeders;

use App\Models\PageSection;
use Illuminate\Database\Seeder;

class PageSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sections = [
            ...$this->about(),
            ...$this->academics(),
            ...$this->admissions(),
            ...$this->contact(),
            ...$this->donate(),
            ...$this->alumni(),
            ...$this->documents(),
            ...$this->sponsorship(),
        ];

        foreach ($sections as $section) {
            PageSection::updateOrCreate(
                ['page' => $section['page'], 'section_key' => $section['section_key']],
                $section
            );
        }
    }

    protected function about(): array
    {
        $page = 'about';

        return [
            [
                'page' => $page,
                'section_key' => 'banner',
                'heading' => 'About LMLG Primary School Fadeyi',
                'body' => 'A respected government primary school committed to learning, discipline, service, and community progress.',
            ],
            [
                'page' => $page,
                'section_key' => 'intro',
                'heading' => 'About',
                'heading_accent' => 'Our School',
                'subheading' => 'Welcome to LMLG Primary School One, Fadeyi- Yaba, Lagos.',
                'body' => "Lagos Mainland Local Government Primary School One, Fadeyi-Yaba, Lagos (formerly Lagos City Council Primary School (LCC),  stands as a proud symbol of academic foundation, discipline, and community heritage. For decades, our school has nurtured young minds, built character, and produced outstanding individuals contributing positively to society across the world.\n\nToday, we celebrate our past, strengthen our present, and build a sustainable future through innovation, alumni collaboration, and educational development.",
            ],
            [
                'page' => $page,
                'section_key' => 'history',
                'heading' => 'Our History',
                'body' => "Lagos Mainland Local Government Primary School One, Fadeyi-Yaba, Lagos, was established to provide quality foundational education to children within the Lagos Mainland community and beyond.\n\nOver the years, the school has become more than an academic institution — it is a meeting point of cultures, friendships, and lifelong memories.\n\nGenerations of pupils educated here have gone on to become professionals, entrepreneurs, public servants, educators, and community leaders worldwide.",
            ],
            [
                'page' => $page,
                'section_key' => 'core-values',
                'heading' => 'Our Core',
                'heading_accent' => 'Values',
            ],
            [
                'page' => $page,
                'section_key' => 'impact',
                'heading' => 'Our',
                'heading_accent' => 'Impact',
            ],
            [
                'page' => $page,
                'section_key' => 'mandate',
                'heading' => 'Our Public Education',
                'heading_accent' => 'Mandate',
                'body' => 'We exist to make quality foundational education accessible, inclusive, and meaningful for children in our community.',
            ],
            [
                'page' => $page,
                'section_key' => 'legacy-project',
                'heading' => 'The Legacy',
                'heading_accent' => 'Project',
                'body' => 'The Legacy Project focuses on:',
            ],
            [
                'page' => $page,
                'section_key' => 'our-future',
                'heading' => 'Our',
                'heading_accent' => 'Future',
                'body' => 'We remain committed to preserving our history while embracing technology and innovation to support present and future pupils.',
            ],
        ];
    }

    protected function academics(): array
    {
        $page = 'academics';

        return [
            [
                'page' => $page,
                'section_key' => 'banner',
                'heading' => 'Academics',
                'body' => 'Building strong foundations for excellence, character, creativity, and future leadership.',
            ],
            [
                'page' => $page,
                'section_key' => 'intro',
                'heading' => 'Academic',
                'heading_accent' => 'Excellence',
                'subheading' => 'Purposeful learning for every stage of primary education.',
                'body' => "At Lagos Main Land Goverment Primary School, our academic programme helps pupils build strong literacy, numeracy, problem-solving, communication, creativity, and leadership skills.\n\nWe combine structured teaching, practical activities, character development, and continuous feedback so every child is supported to learn with confidence and grow with discipline.",
                'cta_label' => 'Apply for Admission',
                'cta_link' => '/admissions',
            ],
            [
                'page' => $page,
                'section_key' => 'curriculum',
                'heading' => 'Our',
                'heading_accent' => 'Curriculum',
                'body' => 'A balanced curriculum that develops knowledge, values, skills, and confidence.',
            ],
            [
                'page' => $page,
                'section_key' => 'learning-areas',
                'heading' => 'Learning',
                'heading_accent' => 'Areas',
                'body' => 'Every subject is taught to strengthen understanding, confidence, and real-life application.',
            ],
            [
                'page' => $page,
                'section_key' => 'methodology',
                'heading' => 'Teaching',
                'heading_accent' => 'Methodology',
                'subheading' => 'Modern, child-centred teaching with clear academic standards.',
                'body' => 'Our teachers use engaging lessons, guided practice, group work, questioning, storytelling, demonstrations, projects, and feedback to make learning active and meaningful.',
            ],
            [
                'page' => $page,
                'section_key' => 'extracurricular',
                'heading' => 'Extracurricular',
                'heading_accent' => 'Activities',
                'subheading' => 'Helping pupils discover talent, confidence, and teamwork beyond the classroom.',
                'body' => 'We encourage pupils to participate in activities that build leadership, discipline, expression, healthy competition, and a balanced school experience.',
            ],
            [
                'page' => $page,
                'section_key' => 'facilities',
                'heading' => 'School',
                'heading_accent' => 'Facilities',
                'body' => 'Learning spaces and resources that support safety, focus, creativity, and growth.',
            ],
            [
                'page' => $page,
                'section_key' => 'why-stand-out',
                'heading' => 'Why Our Academic Programme',
                'heading_accent' => 'Stands Out',
                'body' => 'Premium learning standards, caring teachers, strong values, and a clear focus on every child.',
            ],
            [
                'page' => $page,
                'section_key' => 'cta',
                'heading' => 'Give Your Child a',
                'heading_accent' => 'Strong Academic Start',
                'body' => 'Speak with us about admissions, class placement, school visits, and how our academic programme can support your child.',
                'cta_label' => 'Start Admission',
                'cta_link' => '/admissions',
            ],
        ];
    }

    protected function admissions(): array
    {
        $page = 'admissions';

        return [
            [
                'page' => $page,
                'section_key' => 'banner',
                'heading' => 'Admissions',
                'body' => "Begin your child's journey in a caring, disciplined, and inspiring learning community.",
            ],
            [
                'page' => $page,
                'section_key' => 'intro',
                'heading' => 'Join Our',
                'heading_accent' => 'School Community',
                'subheading' => 'A simple, transparent admission process for parents and guardians.',
                'body' => "We welcome families who desire quality primary education, strong values, dedicated teachers, and a safe learning environment where children can thrive.\n\nOur admissions team is available to guide parents through enquiries, school visits, documentation, assessment, and placement.",
                'cta_label' => 'Make an Enquiry',
                'cta_link' => '/contact',
            ],
            [
                'page' => $page,
                'section_key' => 'admission-steps',
                'heading' => 'Admission',
                'heading_accent' => 'Steps',
                'body' => 'Clear guidance from first enquiry to classroom welcome.',
            ],
            [
                'page' => $page,
                'section_key' => 'required-documents',
                'heading' => 'Required',
                'heading_accent' => 'Documents',
            ],
            [
                'page' => $page,
                'section_key' => 'who-can-apply',
                'heading' => 'Who Can',
                'heading_accent' => 'Apply?',
                'body' => 'Applications are welcome for early years and primary classes, subject to available spaces and appropriate placement.',
            ],
            [
                'page' => $page,
                'section_key' => 'cta',
                'heading' => 'Ready to',
                'heading_accent' => 'Apply?',
                'body' => 'Speak with our admissions office to confirm available spaces, visit dates, and the next steps for your child.',
                'cta_label' => 'Contact Admissions',
                'cta_link' => '/contact',
            ],
        ];
    }

    protected function contact(): array
    {
        $page = 'contact';

        return [
            [
                'page' => $page,
                'section_key' => 'banner',
                'heading' => 'Contact Us',
                'body' => 'We are ready to support admissions, enquiries, partnerships, and parent communication.',
            ],
            [
                'page' => $page,
                'section_key' => 'enquiry',
                'heading' => 'Send an',
                'heading_accent' => 'Enquiry',
                'body' => 'Complete the form and our school office will respond as soon as possible.',
            ],
            [
                'page' => $page,
                'section_key' => 'office-hours',
                'heading' => 'Office',
                'heading_accent' => 'Hours',
            ],
        ];
    }

    protected function donate(): array
    {
        $page = 'donate';

        return [
            [
                'page' => $page,
                'section_key' => 'banner',
                'heading' => 'Support Our School',
                'body' => 'Help strengthen classrooms, resources, opportunities, and learning outcomes for pupils in our community.',
            ],
            [
                'page' => $page,
                'section_key' => 'why-support',
                'heading' => 'Why Support',
                'heading_accent' => 'Our School?',
                'subheading' => 'Every gift helps a child learn in a better, safer, and more inspiring environment.',
                'body' => "Lagos Main Land Government Primary School welcomes support from old pupils, parents, organizations, community leaders, and well-wishers who believe that quality public primary education deserves continued investment.\n\nYour donation helps us improve classrooms, expand learning resources, strengthen pupil support, and create opportunities that prepare children for academic success, good character, and future leadership.",
                'cta_label' => 'Make a Pledge',
                'cta_link' => '#donation-form',
            ],
            [
                'page' => $page,
                'section_key' => 'ways-helps',
                'heading' => 'Ways Your Donation',
                'heading_accent' => 'Helps',
                'body' => 'Donations are directed toward practical improvements that support teaching, learning, safety, and pupil confidence.',
            ],
            [
                'page' => $page,
                'section_key' => 'pledge-form',
                'heading' => 'Donation',
                'heading_accent' => 'Pledge Form',
                'subheading' => 'Frontend design only. No payment is processed on this form.',
                'body' => 'Use this form design to indicate the area you would like to support. The school office can then follow up with official donation details, documentation, and acknowledgement.',
            ],
            [
                'page' => $page,
                'section_key' => 'thank-you',
                'heading' => 'Thank You for Investing in Our Pupils',
                'body' => 'Your generosity helps us build a stronger school, support hardworking teachers, and give children the learning environment they deserve.',
                'cta_label' => 'Make a Pledge',
                'cta_link' => '#donation-form',
            ],
        ];
    }

    protected function alumni(): array
    {
        $page = 'alumni';

        return [
            [
                'page' => $page,
                'section_key' => 'banner',
                'heading' => 'Alumni Database (1980 – Present)',
                'body' => 'Connecting former pupils of LMLG Primary School across generations.',
            ],
            [
                'page' => $page,
                'section_key' => 'welcome',
                'heading' => 'Welcome to the LMLG',
                'heading_accent' => 'Alumni Database',
                'body' => 'This platform connects former pupils of LMLG Primary School from 1980 to the present day, helping classmates reconnect and strengthening our global alumni network.',
            ],
            [
                'page' => $page,
                'section_key' => 'purpose',
                'heading' => 'Purpose of the',
                'heading_accent' => 'Database',
            ],
            [
                'page' => $page,
                'section_key' => 'info-included',
                'heading' => 'Information',
                'heading_accent' => 'Included',
            ],
            [
                'page' => $page,
                'section_key' => 'privacy-commitment',
                'heading' => 'Privacy Commitment',
                'body' => 'Personal information submitted is protected and used strictly for alumni engagement and school-related communication.',
            ],
            [
                'page' => $page,
                'section_key' => 'join-database',
                'heading' => 'Join the Database',
                'body' => 'Former pupils are encouraged to register and become part of our growing alumni network.',
            ],
            [
                'page' => $page,
                'section_key' => 'register',
                'heading' => 'Register as',
                'heading_accent' => 'Alumni',
                'body' => 'Complete the form below to join the LMLG Alumni Database.',
            ],
        ];
    }

    protected function documents(): array
    {
        $page = 'documents';

        return [
            [
                'page' => $page,
                'section_key' => 'banner',
                'heading' => 'Document Application',
                'body' => 'Certificates & Testimonials for former pupils of LMLG Primary School.',
            ],
            [
                'page' => $page,
                'section_key' => 'intro',
                'heading' => 'Request Academic',
                'heading_accent' => 'Documents',
                'body' => 'Former pupils can conveniently apply for official school documents online.',
            ],
            [
                'page' => $page,
                'section_key' => 'available-documents',
                'heading' => 'Available',
                'heading_accent' => 'Documents',
            ],
            [
                'page' => $page,
                'section_key' => 'application-process',
                'heading' => 'Application',
                'heading_accent' => 'Process',
            ],
            [
                'page' => $page,
                'section_key' => 'processing-time',
                'heading' => 'Processing Time',
                'body' => 'Applications are typically processed within 10–15 working days.',
            ],
            [
                'page' => $page,
                'section_key' => 'delivery-options',
                'heading' => 'Delivery Options',
            ],
            [
                'page' => $page,
                'section_key' => 'need-help',
                'heading' => 'Need Help?',
                'body' => 'Contact the school administrative office for assistance.',
            ],
            [
                'page' => $page,
                'section_key' => 'application-form',
                'heading' => 'Application',
                'heading_accent' => 'Form',
                'body' => 'Provide the information below to request your document.',
            ],
        ];
    }

    protected function sponsorship(): array
    {
        $page = 'sponsorship';

        return [
            [
                'page' => $page,
                'section_key' => 'banner',
                'heading' => 'Sponsorship',
                'body' => 'Support the future of LMLG Primary School.',
            ],
            [
                'page' => $page,
                'section_key' => 'intro',
                'heading' => 'Support the Future of',
                'heading_accent' => 'LMLG Primary School',
                'body' => 'The growth and development of our school depend on collective support from alumni, friends, and partners who believe in quality education.',
            ],
            [
                'page' => $page,
                'section_key' => 'why-sponsor',
                'heading' => 'Why',
                'heading_accent' => 'Sponsor?',
                'body' => 'Your contribution helps to:',
            ],
            [
                'page' => $page,
                'section_key' => 'ways-support',
                'heading' => 'Ways to',
                'heading_accent' => 'Support',
            ],
            [
                'page' => $page,
                'section_key' => 'legacy-sponsorship',
                'heading' => 'Legacy Project Sponsorship',
                'body' => 'Sponsors become part of a lasting impact that benefits generations of pupils.',
            ],
            [
                'page' => $page,
                'section_key' => 'recognition',
                'heading' => 'Recognition',
                'body' => 'Sponsors may be acknowledged through:',
            ],
            [
                'page' => $page,
                'section_key' => 'cta',
                'heading' => 'Become a',
                'heading_accent' => 'Sponsor',
                'body' => 'Together, we build a legacy that outlives us.',
                'cta_label' => 'Donate / Sponsor',
                'cta_link' => '/donate#donation-form',
            ],
        ];
    }
}
