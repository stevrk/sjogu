<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramsController extends Controller
{
    /**
     * Display the programs listing page.
     */
    public function index()
    {
        return view('pages.programs.programs_index');
    }

    /**
     * Get all programs data (merged Generic & Upgrading)
     */
    private function getAllPrograms()
    {
        return [
            // Clinical Medicine - Generic Program (Separate)
            'diploma-in-clinical-medicine-generic' => [
                'title' => 'Diploma in Clinical Medicine',
                'slug' => 'diploma-in-clinical-medicine-generic',
                'department' => 'Clinical Medicine',
                'image' => 'programs/clinical.jpg',
                'overview' => 'Comprehensive training in clinical medicine preparing students for primary healthcare delivery. The program equips students with knowledge and skills to diagnose, treat, and manage common medical conditions.',
                'accreditation' => 'Accredited by Medical Council of Malawi (MCM) and National Council for Higher Education (NCHE)',
                'has_generic' => true,
                'has_upgrading' => false,
                'generic' => [
                    'type' => 'Generic',
                    'duration' => '3 Years',
                    'duration_semesters' => '6 Semesters',
                    'study_mode' => 'Full-time',
                    'structure' => [
                        'Year 1: Basic Sciences (Anatomy, Physiology, Biochemistry)',
                        'Year 2: Clinical Medicine, Pharmacology, Pathology',
                        'Year 3: Clinical Rotations, Community Health, Internship'
                    ],
                    'entry_requirements' => [
                        'Full Malawi School Certificate of Education (MSCE) with six (6) credits',
                        'Credits must include: English, Mathematics, Biology, Physics, Chemistry',
                        'Minimum grade of C in each required subject'
                    ],
                    'career_opportunities' => [
                        'Clinical Officer in public/private hospitals',
                        'Rural Health Center Medical Officer',
                        'NGO Health Program Coordinator',
                        'Private Practice'
                    ]
                ],
                'upgrading' => null
            ],

            // Clinical Medicine - Upgrading Program (Separate)
            'diploma-in-clinical-medicine-upgrading' => [
                'title' => 'Diploma in Clinical Medicine (Upgrading)',
                'slug' => 'diploma-in-clinical-medicine-upgrading',
                'department' => 'Clinical Medicine',
                'image' => 'programs/clinical1.jpg',
                'overview' => 'Upgrading program for qualified Medical Assistants with Certificate in Clinical Medicine. Bridges knowledge gaps and enhances clinical competencies to Diploma level.',
                'accreditation' => 'Accredited by Medical Council of Malawi (MCM) and National Council for Higher Education (NCHE)',
                'has_generic' => false,
                'has_upgrading' => true,
                'generic' => null,
                'upgrading' => [
                    'type' => 'Upgrading',
                    'duration' => '2 Years',
                    'duration_semesters' => '4 Semesters',
                    'study_mode' => 'Full-time',
                    'structure' => [
                        'Advanced Clinical Medicine',
                        'Pharmacology and Therapeutics',
                        'Community Health',
                        'Clinical Rotations',
                        'Research Methods'
                    ],
                    'entry_requirements' => [
                        'Certificate in Clinical Medicine from accredited institution',
                        'Registered with Medical Council of Malawi',
                        'Minimum two (2) years post-qualification work experience',
                        'Full MSCE with six (6) credits including English and relevant sciences'
                    ],
                    'career_opportunities' => [
                        'Senior Clinical Officer',
                        'Clinical Medicine Educator',
                        'Health Center Manager',
                        'Clinical Research Associate'
                    ]
                ]
            ],

            // BSc Clinical Medicine Mental Health - Upgrading Only
            'bsc-clinical-medicine-mental-health' => [
                'title' => 'BSc in Clinical Medicine (Mental Health) - Upgrading',
                'slug' => 'bsc-clinical-medicine-mental-health',
                'department' => 'Clinical Medicine',
                'image' => 'programs/clinical3.jpg',
                'overview' => 'Upgrading program for qualified Clinical Officers specializing in mental health. Focuses on psychiatric assessment, diagnosis, treatment, and mental health policy.',
                'accreditation' => 'Accredited by Medical Council of Malawi (MCM) and National Council for Higher Education (NCHE)',
                'has_generic' => false,
                'has_upgrading' => true,
                'generic' => null,
                'upgrading' => [
                    'type' => 'Upgrading',
                    'duration' => '2 Years',
                    'duration_semesters' => '4 Semesters',
                    'study_mode' => 'Full-time',
                    'structure' => [
                        'Advanced Psychiatric Assessment',
                        'Psychopharmacology',
                        'Mental Health Policy & Management',
                        'Clinical Rotations in Psychiatric Units',
                        'Research Project'
                    ],
                    'entry_requirements' => [
                        'Diploma in Clinical Medicine or Mental Health from accredited institution',
                        'Registered with Medical Council of Malawi',
                        'Minimum two (2) years post-qualification experience',
                        'Full MSCE with six (6) credits including English and relevant sciences'
                    ],
                    'career_opportunities' => [
                        'Mental Health Clinical Officer',
                        'Psychiatric Unit Supervisor',
                        'Mental Health Program Coordinator',
                        'Forensic Mental Health Officer'
                    ]
                ]
            ],

            // BSc Public Health - Generic Only
            'bsc-public-health' => [
                'title' => 'Bachelor of Science in Public Health',
                'slug' => 'bsc-public-health',
                'department' => 'Clinical Medicine',
                'image' => 'public health.jpg',
                'overview' => 'Comprehensive program focusing on community health, epidemiology, health promotion, disease prevention, and health policy. Students learn to address public health challenges at local and global levels.',
                'accreditation' => 'Accredited by National Council for Higher Education (NCHE)',
                'has_generic' => true,
                'has_upgrading' => false,
                'generic' => [
                    'type' => 'Generic',
                    'duration' => '4 Years',
                    'duration_semesters' => '8 Semesters',
                    'study_mode' => 'Full-time',
                    'structure' => [
                        'Epidemiology & Biostatistics',
                        'Health Promotion & Education',
                        'Environmental Health',
                        'Health Policy & Management',
                        'Research Methods & Community Projects'
                    ],
                    'entry_requirements' => [
                        'Full Malawi School Certificate of Education (MSCE) with six (6) credits',
                        'Credits must include: English, Mathematics, Biology',
                        'Minimum grade of C in required subjects'
                    ],
                    'career_opportunities' => [
                        'Public Health Officer',
                        'Epidemiologist',
                        'Health Program Manager',
                        'NGO Health Coordinator',
                        'Health Policy Analyst'
                    ]
                ],
                'upgrading' => null
            ],

            // Nursing and Midwifery - BSc in Nursing and Midwifery (Generic Only)
            'bsc-nursing-midwifery-generic' => [
                'title' => 'BSc in Nursing and Midwifery',
                'slug' => 'bsc-nursing-midwifery-generic',
                'department' => 'Nursing and Midwifery',
                'image' => 'programs/nursing.jpg',
                'overview' => 'Professional nursing program combining theoretical knowledge with practical clinical skills. Students learn patient care, midwifery, community health nursing, and leadership skills.',
                'accreditation' => 'Accredited by Nurses and Midwives Council of Malawi (NMCM) and NCHE',
                'has_generic' => true,
                'has_upgrading' => false,
                'generic' => [
                    'type' => 'Generic',
                    'duration' => '4 Years',
                    'duration_semesters' => '8 Semesters',
                    'study_mode' => 'Full-time',
                    'structure' => [
                        'Year 1: Nursing Fundamentals, Anatomy, Physiology',
                        'Year 2: Medical-Surgical Nursing, Pharmacology',
                        'Year 3: Midwifery, Pediatric Nursing, Mental Health',
                        'Year 4: Community Health, Leadership, Research, Internship'
                    ],
                    'entry_requirements' => [
                        'Full Malawi School Certificate of Education (MSCE) with six (6) credits',
                        'Credits must include: English, Mathematics, Biology, Physics, Chemistry',
                        'Minimum grade of C in required subjects'
                    ],
                    'career_opportunities' => [
                        'Registered Nurse/Midwife in hospitals',
                        'Nurse Educator',
                        'Community Health Nurse',
                        'Nursing Administrator',
                        'Clinical Nurse Specialist'
                    ]
                ],
                'upgrading' => null
            ],

            // Nursing and Midwifery - BSc in Mental Health Psychiatric Nursing - Upgrading Only
            'bsc-psychiatric-nursing-upgrading' => [
                'title' => 'BSc in Mental Health Psychiatric Nursing - Upgrading',
                'slug' => 'bsc-psychiatric-nursing-upgrading',
                'department' => 'Nursing and Midwifery',
                'image' => 'programs/nursing_up.jpg',
                'overview' => 'Advanced nursing program for Registered Nurses specializing in psychiatric and mental health care. Focuses on therapeutic interventions, mental health assessment, and patient management.',
                'accreditation' => 'Accredited by Nurses and Midwives Council of Malawi (NMCM) and NCHE',
                'has_generic' => false,
                'has_upgrading' => true,
                'generic' => null,
                'upgrading' => [
                    'type' => 'Upgrading',
                    'duration' => '2 Years',
                    'duration_semesters' => '4 Semesters',
                    'study_mode' => 'Full-time',
                    'structure' => [
                        'Advanced Psychiatric Nursing',
                        'Therapeutic Interventions',
                        'Mental Health Assessment',
                        'Clinical Practice',
                        'Research in Mental Health'
                    ],
                    'entry_requirements' => [
                        'Diploma in Nursing or Midwifery from accredited institution',
                        'Registered with Nurses and Midwives Council of Malawi',
                        'Minimum two (2) years clinical experience',
                        'Full MSCE with six (6) credits including English and relevant sciences'
                    ],
                    'career_opportunities' => [
                        'Psychiatric Nurse Specialist',
                        'Mental Health Unit Manager',
                        'Community Mental Health Nurse',
                        'Nurse Educator in Psychiatry'
                    ]
                ]
            ],

            // Psycho-Social Counselling Programs
            'bsc-psychotherapy-generic' => [
                'title' => 'BSc in Psychotherapy (Psychosocial Counselling)',
                'slug' => 'bsc-psychotherapy-generic',
                'department' => 'Psycho-Social Counselling',
                'image' => 'programs/psychotherapy.jpg',
                'overview' => 'Two exit points: Diploma in Psychosocial Counselling after 4 semesters, BSc in Psychotherapy after 8 semesters. Prepares students for professional counselling and psychotherapy practice.',
                'accreditation' => 'Accredited by National Council for Higher Education (NCHE)',
                'has_generic' => true,
                'has_upgrading' => false,
                'generic' => [
                    'type' => 'Generic',
                    'duration' => '4 Years',
                    'duration_semesters' => '8 Semesters',
                    'study_mode' => 'Full-time',
                    'structure' => [
                        'Year 1-2: Foundation in Counselling Skills',
                        'Year 3-4: Advanced Psychotherapy Techniques',
                        'Clinical Supervision and Practice',
                        'Research Project'
                    ],
                    'entry_requirements' => [
                        'Full Malawi School Certificate of Education (MSCE) with six (6) credits',
                        'Credits must include: English and Mathematics',
                        'Minimum grade of C in English'
                    ],
                    'career_opportunities' => [
                        'Psychosocial Counsellor',
                        'Psychotherapist',
                        'School Counsellor',
                        'NGO Mental Health Coordinator',
                        'Private Practice Therapist'
                    ]
                ],
                'upgrading' => null
            ],

            'bsc-psychotherapy-upgrading' => [
                'title' => 'BSc in Psychotherapy - Upgrading',
                'slug' => 'bsc-psychotherapy-upgrading',
                'department' => 'Psycho-Social Counselling',
                'image' => 'programs/psychotherapy_up.jpg',
                'overview' => 'Upgrading program for qualified Counsellors with Diploma in Psychosocial Counselling. Advanced training in psychotherapy techniques, mental health assessment, and therapeutic interventions.',
                'accreditation' => 'Accredited by National Council for Higher Education (NCHE)',
                'has_generic' => false,
                'has_upgrading' => true,
                'generic' => null,
                'upgrading' => [
                    'type' => 'Upgrading',
                    'duration' => '2 Years',
                    'duration_semesters' => '4 Semesters',
                    'study_mode' => 'Full-time',
                    'structure' => [
                        'Advanced Psychotherapy Theories',
                        'Mental Health Assessment',
                        'Trauma Counselling',
                        'Clinical Supervision',
                        'Research in Psychotherapy'
                    ],
                    'entry_requirements' => [
                        'Diploma in Psychosocial Counselling from accredited institution',
                        'Minimum two (2) years counselling experience',
                        'Full MSCE with six (6) credits including English'
                    ],
                    'career_opportunities' => [
                        'Senior Psychotherapist',
                        'Counselling Supervisor',
                        'Mental Health Program Manager',
                        'Clinical Supervisor'
                    ]
                ]
            ],
        ];
    }

    /**
     * Display Clinical Medicine department programs
     */
    public function clinicalMedicine()
    {
        $allPrograms = $this->getAllPrograms();
        
        $programs = [];
        if (is_array($allPrograms)) {
            foreach ($allPrograms as $slug => $program) {
                if (isset($program['department']) && $program['department'] === 'Clinical Medicine') {
                    $programs[$slug] = $program;
                }
            }
        }
        
        return view('pages.programs.department_programs', [
            'programs' => $programs,
            'department' => 'Clinical Medicine'
        ]);
    }

    /**
     * Display Nursing and Midwifery department programs
     */
    public function nursingMidwifery()
    {
        $allPrograms = $this->getAllPrograms();
        
        $programs = [];
        if (is_array($allPrograms)) {
            foreach ($allPrograms as $slug => $program) {
                if (isset($program['department']) && $program['department'] === 'Nursing and Midwifery') {
                    $programs[$slug] = $program;
                }
            }
        }
        
        return view('pages.programs.department_programs', [
            'programs' => $programs,
            'department' => 'Nursing and Midwifery'
        ]);
    }

    /**
     * Display Psycho-Social Counselling department programs
     */
    public function psychoSocialCounselling()
    {
        $allPrograms = $this->getAllPrograms();
        
        $programs = [];
        if (is_array($allPrograms)) {
            foreach ($allPrograms as $slug => $program) {
                if (isset($program['department']) && $program['department'] === 'Psycho-Social Counselling') {
                    $programs[$slug] = $program;
                }
            }
        }
        
        return view('pages.programs.department_programs', [
            'programs' => $programs,
            'department' => 'Psycho-Social Counselling'
        ]);
    }

    /**
     * Display a specific program detail page.
     */
    public function show($slug)
    {
        $programs = $this->getAllPrograms();
        $program = $programs[$slug] ?? null;

        if (!$program) {
            abort(404);
        }

        return view('pages.programs.program_detail', compact('program'));
    }
}