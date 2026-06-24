<?php

namespace Database\Seeders;

use App\Models\Listing;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = User::firstOrCreate(
            ['email' => 'test@example.com'],
            [
                'name' => 'Test User',
                'password' => bcrypt('password'),
            ]
        );

        $jobs = [
            [
                'title' => 'Laravel Senior Developer',
                'tags' => 'laravel, php, mysql',
                'company' => 'Haddis Tech',
                'location' => 'Bahir Dar',
                'email' => 'careers@haddistech.com',
                'website' => 'https://haddistech.com',
                'description' => 'Haddis Tech is hiring an experienced Laravel developer to build and maintain job board and SaaS products for Ethiopian businesses. You will work with PHP 8, MySQL, and modern frontend tooling in a collaborative team based in Bahir Dar.',
            ],
            [
                'title' => 'React Frontend Developer',
                'tags' => 'react, javascript, tailwind',
                'company' => 'Gebeya',
                'location' => 'Addis Ababa',
                'email' => 'jobs@gebeya.com',
                'website' => 'https://gebeya.com',
                'description' => 'Join Gebeya to build responsive web applications for clients across Africa. We are looking for a React developer with strong JavaScript skills, experience with REST APIs, and an eye for clean UI implementation.',
            ],
            [
                'title' => 'Full Stack Engineer',
                'tags' => 'nodejs, react, postgresql',
                'company' => 'Ride Ethiopia',
                'location' => 'Addis Ababa',
                'email' => 'hr@rideethiopia.et',
                'website' => 'https://rideethiopia.et',
                'description' => 'Ride Ethiopia is scaling its mobility platform and needs a full stack engineer to develop new rider and driver features, improve performance, and integrate payment systems used widely in Ethiopia.',
            ],
            [
                'title' => 'Data Analyst',
                'tags' => 'sql, excel, power bi',
                'company' => 'Commercial Bank of Ethiopia',
                'location' => 'Addis Ababa',
                'email' => 'recruitment@cbe.com.et',
                'website' => 'https://www.combanketh.et',
                'description' => 'Support data-driven decision making across retail and corporate banking operations. You will prepare reports, build dashboards, and work with large financial datasets to identify trends and opportunities.',
            ],
            [
                'title' => 'UI/UX Designer',
                'tags' => 'figma, design, prototyping',
                'company' => 'Chapa',
                'location' => 'Addis Ababa',
                'email' => 'design@chapa.co',
                'website' => 'https://chapa.co',
                'description' => 'Design intuitive payment and merchant experiences for one of Ethiopia\'s fastest-growing fintech products. You will create wireframes, prototypes, and design systems that work well on mobile-first users.',
            ],
            [
                'title' => 'DevOps Engineer',
                'tags' => 'docker, aws, linux',
                'company' => 'Arifpay',
                'location' => 'Addis Ababa',
                'email' => 'talent@arifpay.net',
                'website' => 'https://arifpay.net',
                'description' => 'Help Arifpay maintain reliable, secure infrastructure for digital payments. Responsibilities include CI/CD pipelines, monitoring, cloud deployments, and on-call support for production systems.',
            ],
            [
                'title' => 'Android Developer',
                'tags' => 'kotlin, android, mobile',
                'company' => 'Jiji Ethiopia',
                'location' => 'Addis Ababa',
                'email' => 'dev@jiji.et',
                'website' => 'https://jiji.com.et',
                'description' => 'Build and improve the Jiji Ethiopia marketplace app used by thousands of buyers and sellers nationwide. Experience with Kotlin, offline-friendly UX, and API integration is required.',
            ],
            [
                'title' => 'Network Engineer',
                'tags' => 'cisco, networking, security',
                'company' => 'Ethio Telecom',
                'location' => 'Addis Ababa',
                'email' => 'careers@ethiotelecom.et',
                'website' => 'https://www.ethiotelecom.et',
                'description' => 'Ethio Telecom is seeking a network engineer to support enterprise connectivity, troubleshoot routing issues, and help expand reliable internet services across Ethiopia\'s major cities and regions.',
            ],
            [
                'title' => 'Accountant',
                'tags' => 'accounting, finance, erp',
                'company' => 'Dashen Bank',
                'location' => 'Hawassa',
                'email' => 'jobs@dashenbanksc.com',
                'website' => 'https://www.dashenbanksc.com',
                'description' => 'Manage daily accounting operations, reconciliations, and financial reporting for the Hawassa branch. Candidates should be detail-oriented and familiar with Ethiopian banking standards and ERP tools.',
            ],
            [
                'title' => 'Digital Marketing Manager',
                'tags' => 'marketing, seo, social media',
                'company' => 'Ethiopian Airlines',
                'location' => 'Addis Ababa',
                'email' => 'careers@ethiopianairlines.com',
                'website' => 'https://www.ethiopianairlines.com',
                'description' => 'Lead digital campaigns that promote Ethiopian Airlines routes and services globally. You will manage social channels, paid ads, content calendars, and performance analytics for international audiences.',
            ],
            [
                'title' => 'Agricultural Extension Officer',
                'tags' => 'agriculture, field work, training',
                'company' => 'Ministry of Agriculture',
                'location' => 'Bahir Dar',
                'email' => 'hr@moa.gov.et',
                'website' => 'https://www.moa.gov.et',
                'description' => 'Support smallholder farmers around Lake Tana with modern farming techniques, crop advisory services, and community training programs aimed at improving productivity and food security in the Amhara region.',
            ],
            [
                'title' => 'QA Software Tester',
                'tags' => 'testing, selenium, api',
                'company' => 'Kifiya Financial Technology',
                'location' => 'Addis Ababa',
                'email' => 'careers@kifiya.com',
                'website' => 'https://kifiya.com',
                'description' => 'Ensure quality across lending and digital finance products serving underserved communities in Ethiopia. You will write test cases, automate regression suites, and work closely with developers before each release.',
            ],
        ];

        foreach ($jobs as $job) {
            Listing::create([
                ...$job,
                'user_id' => $user->id,
            ]);
        }
    }
}
