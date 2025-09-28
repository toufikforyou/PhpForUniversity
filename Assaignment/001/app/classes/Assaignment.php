<?php

namespace App\Classes;

class Assaignment
{
    private array $bangladeshDivisions;

    public function __construct()
    {
        $this->bangladeshDivisions = [
            [
                "name" => "Dhaka",
                "districts" => [
                    "Dhaka" => [
                        "name" => "Dhaka",
                        "upazila" => ["Dhamrai", "Dohar", "Keraniganj", "Savar"]
                    ],
                    "Gazipur" => [
                        "name" => "Gazipur",
                        "upazila" => ["Kaliganj", "Kapasia", "Sreepur", "Tongi"]
                    ],
                    "Narayanganj" => [
                        "name" => "Narayanganj",
                        "upazila" => ["Araihazar", "Bandar", "Rupganj", "Sonargaon"]
                    ],
                ]
            ],

            [
                "name" => "Chattogram",
                "districts" => [
                    "Chattogram" => [
                        "name" => "Chattogram",
                        "upazila" => ["Boalkhali", "Chandanaish", "Fatikchhari", "Hathazari"]
                    ],
                    "Cox's Bazar" => [
                        "name" => "Cox's Bazar",
                        "upazila" => ["Chakaria", "Kutubdia", "Maheshkhali", "Ukhia"]
                    ],
                    "Rangamati" => [
                        "name" => "Rangamati",
                        "upazila" => ["Bagaichhari", "Barkal", "Kaptai", "Langadu"]
                    ]
                ]
            ],

            [
                "name" => "Rajshahi",
                "districts" => [
                    "Rajshahi" => [
                        "name" => "Rajshahi",
                        "upazila" => ["Bagha", "Charghat", "Godagari", "Paba"]
                    ],
                    "Natore" => [
                        "name" => "Natore",
                        "upazila" => ["Bagatipara", "Baraigram", "Gurudaspur", "Lalpur"]
                    ],
                    "Sirajganj" => [
                        "name" => "Sirajganj",
                        "upazila" => ["Kazipur", "Bera", "Chatmohar", "Ishwardi"]
                    ]
                ]
            ],

            [
                "name" => "Khulna",
                "districts" => [
                    "Khulna" => [
                        "name" => "Khulna",
                        "upazila" => ["Batiaghata", "Dacope", "Dumuria", "Koyra"]
                    ],
                    "Jessore" => [
                        "name" => "Jessore",
                        "upazila" => ["Abhaynagar", "Bagherpara", "Chaugachha", "Jhikargachha"]
                    ],
                    "Satkhira" => [
                        "name" => "Satkhira",
                        "upazila" => ["Assasuni", "Debhata", "Kaliganj", "Satkhira Sadar"]
                    ]
                ]
            ],

            [
                "name" => "Sylhet",
                "districts" => [
                    "Sylhet" => [
                        "name" => "Sylhet",
                        "upazila" => ["Balaganj", "Beanibazar", "Bishwanath", "Companiganj"]
                    ],
                    "Moulvibazar" => [
                        "name" => "Moulvibazar",
                        "upazila" => ["Barlekha", "Juri", "Kamalganj", "Kulaura"]
                    ],
                    "Habiganj" => [
                        "name" => "Habiganj",
                        "upazila" => ["Ajmiriganj", "Bahubal", "Baniachong", "Chunarughat"]
                    ]
                ]
            ],

            [
                "name" => "Barishal",
                "districts" => [
                    "Barishal" => [
                        "name" => "Barishal",
                        "upazila" => ["Agailjhara", "Babuganj", "Bakerganj", "Banaripara"]
                    ],
                    "Bhola" => [
                        "name" => "Bhola",
                        "upazila" => ["Bhola Sadar", "Borhanuddin", "Char Fasson", "Daulatkhan"]
                    ],
                    "Patuakhali" => [
                        "name" => "Patuakhali",
                        "upazila" => ["Bauphal", "Dashmina", "Dumki", "Galachipa"]
                    ]
                ]
            ],

            [
                "name" => "Rangpur",
                "districts" => [
                    "Rangpur" => [
                        "name" => "Rangpur",
                        "upazila" => ["Badarganj", "Gangachara", "Kaunia", "Mithapukur"]
                    ],
                    "Dinajpur" => [
                        "name" => "Dinajpur",
                        "upazila" => ["Birampur", "Birganj", "Bochaganj", "Chirirbandar"]
                    ],
                    "Kurigram" => [
                        "name" => "Kurigram",
                        "upazila" => ["Bhurungamari", "Char Rajibpur", "Chilmari", "Kurigram Sadar"]
                    ]
                ]
            ]
        ];
    }

    public function getBangladeshDivision()
    {
        return $this->bangladeshDivisions;
    }

    public function index()
    {
        return header('Location: action.php?page=division');
    }
}
