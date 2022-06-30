<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

class Validation extends BaseConfig
{
    //--------------------------------------------------------------------
    // Setup
    //--------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */
    public $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    //--------------------------------------------------------------------
    // Rules
    //--------------------------------------------------------------------

    public $admin = [
        'username' => [
            'rules' => 'required|min_length[5]|is_unique[admin.username]',
            ],
        'email' => [
            'rules' => 'required',
            ],
        'name' => [
            'rules' => 'required',
            ],
        'password' => [
            'rules' => 'required',
            ],
            
        ];
    public $user =[
        'username' => [
            'rules' => 'required|min_length[5]|is_unique[user.username]',
            ],
        'email' => [
            'rules' => 'required',
            ],
        'name' => [
            'rules' => 'required',
            ],
        'password' => [
            'rules' => 'required',
            ],
        ];
        public $userUpdate =[
            'username' => [
                'rules' => 'required|min_length[5]',
                ],
            'email' => [
                'rules' => 'required',
                ],
            'name' => [
                'rules' => 'required',
                ],
            'password' => [
                'rules' => 'required',
                ],
            ];

    public $resep = [
        'judul' => [
            'rules' => 'required',
            ],
        'bahan' => [
            'rules' => 'required',
            ],
        'cara' => [
            'rules' => 'required',
            ],
        'image' => [
            'rules' => 'required',
                ],
        ];
    
    
    public $tips =[
        'judul' => [
            'rules' => 'required',
            ],
        'link' => [
            'rules' => 'required',
            ],
        
        ];

}

