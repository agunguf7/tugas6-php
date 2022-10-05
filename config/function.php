<?php

// post limit
function getPostLimit()
{
    $posts = [
        [
            'id' => 1,
            'judul' => 'Belajar HTML bagi pemula',
            'gambar' => url . 'assets/img/img04.jpg'
        ],
        [
            'id' => 2,
            'judul' => 'Belajar CSS bagi pemula',
            'gambar' => url . 'assets/img/img02.jpg'
        ],
        [
            'id' => 3,
            'judul' => 'Belajar Bootstrap untuk pembula',
            'gambar' => url . 'assets/img/img03.jpg'
        ]
    ];

    return $posts;
}

// posts
function getAllPost()
{
    $posts = [
        [
            'id' => 1,
            'judul' => 'Belajar HTML bagi pemula',
            'kategori' => 'Frontend',
            'penulis' => 'Agung Kusaeri',
            'deskripsi' => 'The standard Lorem Ipsum passage, used since the 1500s
    "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
    
    Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC
    "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
    
    1914 translation by H. Rackham
    "But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?"
    
    Section 1.10.33 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC
    "At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat."',
            'tanggal_dibuat' => '10 Agustus 2022',
            'gambar' => url . 'assets/img/img04.jpg'
        ],
        [
            'id' => 2,
            'judul' => 'Belajar CSS bagi pemula',
            'kategori' => 'Frontend',
            'penulis' => 'Agung Kusaeri',
            'deskripsi' => 'The standard Lorem Ipsum passage, used since the 1500s
    "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
    
    Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC
    "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
    
    1914 translation by H. Rackham
    "But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?"
    
    Section 1.10.33 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC
    "At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat."',
            'tanggal_dibuat' => '11 Agustus 2022',
            'gambar' => url . 'assets/img/img02.jpg'
        ],
        [
            'id' => 3,
            'judul' => 'Belajar Bootstrap untuk pembula',
            'kategori' => 'Frontend',
            'penulis' => 'Agung Kusaeri',
            'deskripsi' => 'The standard Lorem Ipsum passage, used since the 1500s
    "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
    
    Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC
    "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
    
    1914 translation by H. Rackham
    "But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?"
    
    Section 1.10.33 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC
    "At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat."',
            'tanggal_dibuat' => '13 Agustus 2022',
            'gambar' => url . 'assets/img/img03.jpg'
        ],
        [
            'id' => 4,
            'judul' => 'Belajar HTML 5 bagi pemula',
            'kategori' => 'Frontend',
            'penulis' => 'Agung Kusaeri',
            'deskripsi' => 'The standard Lorem Ipsum passage, used since the 1500s
    "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
    
    Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC
    "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
    
    1914 translation by H. Rackham
    "But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?"
    
    Section 1.10.33 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC
    "At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat."',
            'tanggal_dibuat' => '15 Agustus 2022',
            'gambar' => url . 'assets/img/img04.jpg'
        ],
        [
            'id' => 5,
            'judul' => 'Belajar CSS 3 bagi pemula',
            'kategori' => 'Frontend',
            'penulis' => 'Agung Kusaeri',
            'deskripsi' => 'The standard Lorem Ipsum passage, used since the 1500s
    "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
    
    Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC
    "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
    
    1914 translation by H. Rackham
    "But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?"
    
    Section 1.10.33 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC
    "At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat."',
            'tanggal_dibuat' => '17 Agustus 2022',
            'gambar' => url . 'assets/img/img02.jpg'
        ],
        [
            'id' => 6,
            'judul' => 'Belajar Bootstrap 5 untuk pembula',
            'kategori' => 'Frontend',
            'penulis' => 'Agung Kusaeri',
            'deskripsi' => 'The standard Lorem Ipsum passage, used since the 1500s
    "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
    
    Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC
    "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
    
    1914 translation by H. Rackham
    "But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?"
    
    Section 1.10.33 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC
    "At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat."',
            'tanggal_dibuat' => '12 Agustus 2022',
            'gambar' => url . 'assets/img/img03.jpg'
        ],
    ];

    return $posts;
}

function getPostById($id)
{
    switch ($id) {
        case 1:
            $post = [
                'id' => 1,
                'judul' => 'Belajar HTML bagi pemula',
                'kategori' => 'Frontend',
                'penulis' => 'Agung Kusaeri',
                'deskripsi' => 'The standard Lorem Ipsum passage, used since the 1500s
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
        
        Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC
        "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
        
        1914 translation by H. Rackham
        "But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?"
        
        Section 1.10.33 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC
        "At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat."',
                'tanggal_dibuat' => '10 Agustus 2022',
                'gambar' => url . 'assets/img/img04.jpg'
            ];
            break;
        case 2:
            $post = [
                'id' => 2,
                'judul' => 'Belajar CSS bagi pemula',
                'kategori' => 'Frontend',
                'penulis' => 'Agung Kusaeri',
                'deskripsi' => 'The standard Lorem Ipsum passage, used since the 1500s
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
        
        Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC
        "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
        
        1914 translation by H. Rackham
        "But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?"
        
        Section 1.10.33 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC
        "At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat."',
                'tanggal_dibuat' => '11 Agustus 2022',
                'gambar' => url . 'assets/img/img02.jpg'
            ];
            break;
        case 3:
            $post =  [
                'id' => 3,
                'judul' => 'Belajar Bootstrap untuk pembula',
                'kategori' => 'Frontend',
                'penulis' => 'Agung Kusaeri',
                'deskripsi' => 'The standard Lorem Ipsum passage, used since the 1500s
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
        
        Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC
        "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
        
        1914 translation by H. Rackham
        "But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?"
        
        Section 1.10.33 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC
        "At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat."',
                'tanggal_dibuat' => '13 Agustus 2022',
                'gambar' => url . 'assets/img/img03.jpg'
            ];
        case 4:
            $post = [
                'id' => 4,
                'judul' => 'Belajar HTML 5 bagi pemula',
                'kategori' => 'Frontend',
                'penulis' => 'Agung Kusaeri',
                'deskripsi' => 'The standard Lorem Ipsum passage, used since the 1500s
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
        
        Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC
        "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
        
        1914 translation by H. Rackham
        "But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?"
        
        Section 1.10.33 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC
        "At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat."',
                'tanggal_dibuat' => '15 Agustus 2022',
                'gambar' => url . 'assets/img/img04.jpg'
            ];
            break;
        case 5:
            $post =  [
                'id' => 5,
                'judul' => 'Belajar CSS 3 bagi pemula',
                'kategori' => 'Frontend',
                'penulis' => 'Agung Kusaeri',
                'deskripsi' => 'The standard Lorem Ipsum passage, used since the 1500s
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
        
        Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC
        "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
        
        1914 translation by H. Rackham
        "But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?"
        
        Section 1.10.33 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC
        "At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat."',
                'tanggal_dibuat' => '17 Agustus 2022',
                'gambar' => url . 'assets/img/img02.jpg'
            ];
            break;
        case 6:
            $post = [
                'id' => 6,
                'judul' => 'Belajar Bootstrap 5 untuk pembula',
                'kategori' => 'Frontend',
                'penulis' => 'Agung Kusaeri',
                'deskripsi' => 'The standard Lorem Ipsum passage, used since the 1500s
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
        
        Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC
        "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
        
        1914 translation by H. Rackham
        "But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?"
        
        Section 1.10.33 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC
        "At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat."',
                'tanggal_dibuat' => '12 Agustus 2022',
                'gambar' => url . 'assets/img/img03.jpg'
            ];
            break;
        default:
            $post = [];
            break;
    }

    return $post;
}
// project portofolio
function getProjectLimit()
{
    $projects = [
        [
            'id' => 1,
            'nama' => 'Portofolio Pertama Saya',
            'kategori' => 'Web',
            'gambar' => url . 'assets/img/img01.jpg'
        ],
        [
            'id' => 2,
            'nama' => 'Portofolio Kedua Saya',
            'kategori' => 'Mobile',
            'gambar' => url . 'assets/img/img02.jpg'
        ],
        [
            'id' => 3,
            'nama' => 'Portofolio Ketiga Saya',
            'kategori' => 'Web',
            'gambar' => url . 'assets/img/img03.jpg'
        ]
    ];
    return $projects;
}

function getAllProject()
{
    $projects = [
        [
            'id' => 1,
            'nama' => 'Portofolio Pertama Saya',
            'kategori' => 'Web',
            'dibuat' => '10 September 2022',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores laboriosam enim facere mollitia ut? A officiis qui corporis possimus ut voluptatum fugit perspiciatis rem, laboriosam rerum, suscipit repellat ea aliquid, eveniet fugiat unde ad magnam pariatur hic nesciunt nisi dignissimos fuga? Nostrum aut totam eos omnis, alias sapiente repellendus voluptatum itaque excepturi, fuga odio, obcaecati laudantium. Quasi et saepe eius dolorem quisquam adipisci labore cumque modi facere facilis, quibusdam dolores hic, earum sunt repudiandae! Nobis quisquam placeat quaerat blanditiis, corporis numquam debitis laboriosam quasi dolor animi provident unde, rerum earum est voluptate magni. Autem officia quia voluptates illum accusantium adipisci ipsam impedit cumque distinctio libero voluptatum, eius, aperiam quos vero. Sint id ad culpa earum! Ipsam iste vero vitae natus sunt eligendi quod veniam neque autem, sit sapiente non aperiam. Ipsum deleniti porro, minima voluptas nobis in commodi nihil, error illo vitae similique! Rem doloribus porro esse, quia repellat tempore atque dolores magni cumque aliquid nam. Unde error voluptas fugit maxime! Minus sapiente suscipit harum ad ducimus. Incidunt fugiat ea eveniet molestias fuga porro aperiam neque, voluptates iusto in aliquid eaque ut consequatur tempore voluptatum iste repellendus dicta, autem illum quis quos illo est eius a. Saepe repudiandae nisi cum?',
            'gambar' => url . 'assets/img/img01.jpg'
        ],
        [
            'id' => 2,
            'nama' => 'Portofolio Kedua Saya',
            'kategori' => 'Mobile',
            'dibuat' => '10 September 2022',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores laboriosam enim facere mollitia ut? A officiis qui corporis possimus ut voluptatum fugit perspiciatis rem, laboriosam rerum, suscipit repellat ea aliquid, eveniet fugiat unde ad magnam pariatur hic nesciunt nisi dignissimos fuga? Nostrum aut totam eos omnis, alias sapiente repellendus voluptatum itaque excepturi, fuga odio, obcaecati laudantium. Quasi et saepe eius dolorem quisquam adipisci labore cumque modi facere facilis, quibusdam dolores hic, earum sunt repudiandae! Nobis quisquam placeat quaerat blanditiis, corporis numquam debitis laboriosam quasi dolor animi provident unde, rerum earum est voluptate magni. Autem officia quia voluptates illum accusantium adipisci ipsam impedit cumque distinctio libero voluptatum, eius, aperiam quos vero. Sint id ad culpa earum! Ipsam iste vero vitae natus sunt eligendi quod veniam neque autem, sit sapiente non aperiam. Ipsum deleniti porro, minima voluptas nobis in commodi nihil, error illo vitae similique! Rem doloribus porro esse, quia repellat tempore atque dolores magni cumque aliquid nam. Unde error voluptas fugit maxime! Minus sapiente suscipit harum ad ducimus. Incidunt fugiat ea eveniet molestias fuga porro aperiam neque, voluptates iusto in aliquid eaque ut consequatur tempore voluptatum iste repellendus dicta, autem illum quis quos illo est eius a. Saepe repudiandae nisi cum?',
            'gambar' => url . 'assets/img/img02.jpg'
        ],
        [
            'id' => 3,
            'nama' => 'Portofolio Ketiga Saya',
            'kategori' => 'Web',
            'dibuat' => '10 September 2022',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores laboriosam enim facere mollitia ut? A officiis qui corporis possimus ut voluptatum fugit perspiciatis rem, laboriosam rerum, suscipit repellat ea aliquid, eveniet fugiat unde ad magnam pariatur hic nesciunt nisi dignissimos fuga? Nostrum aut totam eos omnis, alias sapiente repellendus voluptatum itaque excepturi, fuga odio, obcaecati laudantium. Quasi et saepe eius dolorem quisquam adipisci labore cumque modi facere facilis, quibusdam dolores hic, earum sunt repudiandae! Nobis quisquam placeat quaerat blanditiis, corporis numquam debitis laboriosam quasi dolor animi provident unde, rerum earum est voluptate magni. Autem officia quia voluptates illum accusantium adipisci ipsam impedit cumque distinctio libero voluptatum, eius, aperiam quos vero. Sint id ad culpa earum! Ipsam iste vero vitae natus sunt eligendi quod veniam neque autem, sit sapiente non aperiam. Ipsum deleniti porro, minima voluptas nobis in commodi nihil, error illo vitae similique! Rem doloribus porro esse, quia repellat tempore atque dolores magni cumque aliquid nam. Unde error voluptas fugit maxime! Minus sapiente suscipit harum ad ducimus. Incidunt fugiat ea eveniet molestias fuga porro aperiam neque, voluptates iusto in aliquid eaque ut consequatur tempore voluptatum iste repellendus dicta, autem illum quis quos illo est eius a. Saepe repudiandae nisi cum?',
            'gambar' => url . 'assets/img/img03.jpg'
        ],
        [
            'id' => 4,
            'nama' => 'Portofolio Keempat Saya',
            'kategori' => 'Web',
            'dibuat' => '10 September 2022',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores laboriosam enim facere mollitia ut? A officiis qui corporis possimus ut voluptatum fugit perspiciatis rem, laboriosam rerum, suscipit repellat ea aliquid, eveniet fugiat unde ad magnam pariatur hic nesciunt nisi dignissimos fuga? Nostrum aut totam eos omnis, alias sapiente repellendus voluptatum itaque excepturi, fuga odio, obcaecati laudantium. Quasi et saepe eius dolorem quisquam adipisci labore cumque modi facere facilis, quibusdam dolores hic, earum sunt repudiandae! Nobis quisquam placeat quaerat blanditiis, corporis numquam debitis laboriosam quasi dolor animi provident unde, rerum earum est voluptate magni. Autem officia quia voluptates illum accusantium adipisci ipsam impedit cumque distinctio libero voluptatum, eius, aperiam quos vero. Sint id ad culpa earum! Ipsam iste vero vitae natus sunt eligendi quod veniam neque autem, sit sapiente non aperiam. Ipsum deleniti porro, minima voluptas nobis in commodi nihil, error illo vitae similique! Rem doloribus porro esse, quia repellat tempore atque dolores magni cumque aliquid nam. Unde error voluptas fugit maxime! Minus sapiente suscipit harum ad ducimus. Incidunt fugiat ea eveniet molestias fuga porro aperiam neque, voluptates iusto in aliquid eaque ut consequatur tempore voluptatum iste repellendus dicta, autem illum quis quos illo est eius a. Saepe repudiandae nisi cum?',
            'gambar' => url . 'assets/img/img01.jpg'
        ],
        [
            'id' => 5,
            'nama' => 'Portofolio Kelima Saya',
            'kategori' => 'Mobile',
            'dibuat' => '10 September 2022',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores laboriosam enim facere mollitia ut? A officiis qui corporis possimus ut voluptatum fugit perspiciatis rem, laboriosam rerum, suscipit repellat ea aliquid, eveniet fugiat unde ad magnam pariatur hic nesciunt nisi dignissimos fuga? Nostrum aut totam eos omnis, alias sapiente repellendus voluptatum itaque excepturi, fuga odio, obcaecati laudantium. Quasi et saepe eius dolorem quisquam adipisci labore cumque modi facere facilis, quibusdam dolores hic, earum sunt repudiandae! Nobis quisquam placeat quaerat blanditiis, corporis numquam debitis laboriosam quasi dolor animi provident unde, rerum earum est voluptate magni. Autem officia quia voluptates illum accusantium adipisci ipsam impedit cumque distinctio libero voluptatum, eius, aperiam quos vero. Sint id ad culpa earum! Ipsam iste vero vitae natus sunt eligendi quod veniam neque autem, sit sapiente non aperiam. Ipsum deleniti porro, minima voluptas nobis in commodi nihil, error illo vitae similique! Rem doloribus porro esse, quia repellat tempore atque dolores magni cumque aliquid nam. Unde error voluptas fugit maxime! Minus sapiente suscipit harum ad ducimus. Incidunt fugiat ea eveniet molestias fuga porro aperiam neque, voluptates iusto in aliquid eaque ut consequatur tempore voluptatum iste repellendus dicta, autem illum quis quos illo est eius a. Saepe repudiandae nisi cum?',
            'gambar' => url . 'assets/img/img02.jpg'
        ],
        [
            'id' => 6,
            'nama' => 'Portofolio Keenam Saya',
            'kategori' => 'Web',
            'dibuat' => '10 September 2022',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores laboriosam enim facere mollitia ut? A officiis qui corporis possimus ut voluptatum fugit perspiciatis rem, laboriosam rerum, suscipit repellat ea aliquid, eveniet fugiat unde ad magnam pariatur hic nesciunt nisi dignissimos fuga? Nostrum aut totam eos omnis, alias sapiente repellendus voluptatum itaque excepturi, fuga odio, obcaecati laudantium. Quasi et saepe eius dolorem quisquam adipisci labore cumque modi facere facilis, quibusdam dolores hic, earum sunt repudiandae! Nobis quisquam placeat quaerat blanditiis, corporis numquam debitis laboriosam quasi dolor animi provident unde, rerum earum est voluptate magni. Autem officia quia voluptates illum accusantium adipisci ipsam impedit cumque distinctio libero voluptatum, eius, aperiam quos vero. Sint id ad culpa earum! Ipsam iste vero vitae natus sunt eligendi quod veniam neque autem, sit sapiente non aperiam. Ipsum deleniti porro, minima voluptas nobis in commodi nihil, error illo vitae similique! Rem doloribus porro esse, quia repellat tempore atque dolores magni cumque aliquid nam. Unde error voluptas fugit maxime! Minus sapiente suscipit harum ad ducimus. Incidunt fugiat ea eveniet molestias fuga porro aperiam neque, voluptates iusto in aliquid eaque ut consequatur tempore voluptatum iste repellendus dicta, autem illum quis quos illo est eius a. Saepe repudiandae nisi cum?',
            'gambar' => url . 'assets/img/img03.jpg'
        ]
    ];

    return $projects;
}

function getProjectById($id)
{
    switch ($id) {
        case 1:
            $projects = [
                'id' => 1,
                'nama' => 'Portofolio Pertama Saya',
                'kategori' => 'Web',
                'dibuat' => '10 September 2022',
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores laboriosam enim facere mollitia ut? A officiis qui corporis possimus ut voluptatum fugit perspiciatis rem, laboriosam rerum, suscipit repellat ea aliquid, eveniet fugiat unde ad magnam pariatur hic nesciunt nisi dignissimos fuga? Nostrum aut totam eos omnis, alias sapiente repellendus voluptatum itaque excepturi, fuga odio, obcaecati laudantium. Quasi et saepe eius dolorem quisquam adipisci labore cumque modi facere facilis, quibusdam dolores hic, earum sunt repudiandae! Nobis quisquam placeat quaerat blanditiis, corporis numquam debitis laboriosam quasi dolor animi provident unde, rerum earum est voluptate magni. Autem officia quia voluptates illum accusantium adipisci ipsam impedit cumque distinctio libero voluptatum, eius, aperiam quos vero. Sint id ad culpa earum! Ipsam iste vero vitae natus sunt eligendi quod veniam neque autem, sit sapiente non aperiam. Ipsum deleniti porro, minima voluptas nobis in commodi nihil, error illo vitae similique! Rem doloribus porro esse, quia repellat tempore atque dolores magni cumque aliquid nam. Unde error voluptas fugit maxime! Minus sapiente suscipit harum ad ducimus. Incidunt fugiat ea eveniet molestias fuga porro aperiam neque, voluptates iusto in aliquid eaque ut consequatur tempore voluptatum iste repellendus dicta, autem illum quis quos illo est eius a. Saepe repudiandae nisi cum?',
                'gambar' => url . 'assets/img/img01.jpg'
            ];
            break;
        case 2:
            $projects =  [
                'id' => 2,
                'nama' => 'Portofolio Kedua Saya',
                'kategori' => 'Mobile',
                'dibuat' => '10 September 2022',
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores laboriosam enim facere mollitia ut? A officiis qui corporis possimus ut voluptatum fugit perspiciatis rem, laboriosam rerum, suscipit repellat ea aliquid, eveniet fugiat unde ad magnam pariatur hic nesciunt nisi dignissimos fuga? Nostrum aut totam eos omnis, alias sapiente repellendus voluptatum itaque excepturi, fuga odio, obcaecati laudantium. Quasi et saepe eius dolorem quisquam adipisci labore cumque modi facere facilis, quibusdam dolores hic, earum sunt repudiandae! Nobis quisquam placeat quaerat blanditiis, corporis numquam debitis laboriosam quasi dolor animi provident unde, rerum earum est voluptate magni. Autem officia quia voluptates illum accusantium adipisci ipsam impedit cumque distinctio libero voluptatum, eius, aperiam quos vero. Sint id ad culpa earum! Ipsam iste vero vitae natus sunt eligendi quod veniam neque autem, sit sapiente non aperiam. Ipsum deleniti porro, minima voluptas nobis in commodi nihil, error illo vitae similique! Rem doloribus porro esse, quia repellat tempore atque dolores magni cumque aliquid nam. Unde error voluptas fugit maxime! Minus sapiente suscipit harum ad ducimus. Incidunt fugiat ea eveniet molestias fuga porro aperiam neque, voluptates iusto in aliquid eaque ut consequatur tempore voluptatum iste repellendus dicta, autem illum quis quos illo est eius a. Saepe repudiandae nisi cum?',
                'gambar' => url . 'assets/img/img02.jpg'
            ];
            break;
        case 3:
            $projects =  [
                'id' => 3,
                'nama' => 'Portofolio Ketiga Saya',
                'kategori' => 'Web',
                'dibuat' => '10 September 2022',
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores laboriosam enim facere mollitia ut? A officiis qui corporis possimus ut voluptatum fugit perspiciatis rem, laboriosam rerum, suscipit repellat ea aliquid, eveniet fugiat unde ad magnam pariatur hic nesciunt nisi dignissimos fuga? Nostrum aut totam eos omnis, alias sapiente repellendus voluptatum itaque excepturi, fuga odio, obcaecati laudantium. Quasi et saepe eius dolorem quisquam adipisci labore cumque modi facere facilis, quibusdam dolores hic, earum sunt repudiandae! Nobis quisquam placeat quaerat blanditiis, corporis numquam debitis laboriosam quasi dolor animi provident unde, rerum earum est voluptate magni. Autem officia quia voluptates illum accusantium adipisci ipsam impedit cumque distinctio libero voluptatum, eius, aperiam quos vero. Sint id ad culpa earum! Ipsam iste vero vitae natus sunt eligendi quod veniam neque autem, sit sapiente non aperiam. Ipsum deleniti porro, minima voluptas nobis in commodi nihil, error illo vitae similique! Rem doloribus porro esse, quia repellat tempore atque dolores magni cumque aliquid nam. Unde error voluptas fugit maxime! Minus sapiente suscipit harum ad ducimus. Incidunt fugiat ea eveniet molestias fuga porro aperiam neque, voluptates iusto in aliquid eaque ut consequatur tempore voluptatum iste repellendus dicta, autem illum quis quos illo est eius a. Saepe repudiandae nisi cum?',
                'gambar' => url . 'assets/img/img03.jpg'
            ];
            break;
        case 4:
            $projects =    [
                'id' => 4,
                'nama' => 'Portofolio Keempat Saya',
                'kategori' => 'Web',
                'dibuat' => '10 September 2022',
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores laboriosam enim facere mollitia ut? A officiis qui corporis possimus ut voluptatum fugit perspiciatis rem, laboriosam rerum, suscipit repellat ea aliquid, eveniet fugiat unde ad magnam pariatur hic nesciunt nisi dignissimos fuga? Nostrum aut totam eos omnis, alias sapiente repellendus voluptatum itaque excepturi, fuga odio, obcaecati laudantium. Quasi et saepe eius dolorem quisquam adipisci labore cumque modi facere facilis, quibusdam dolores hic, earum sunt repudiandae! Nobis quisquam placeat quaerat blanditiis, corporis numquam debitis laboriosam quasi dolor animi provident unde, rerum earum est voluptate magni. Autem officia quia voluptates illum accusantium adipisci ipsam impedit cumque distinctio libero voluptatum, eius, aperiam quos vero. Sint id ad culpa earum! Ipsam iste vero vitae natus sunt eligendi quod veniam neque autem, sit sapiente non aperiam. Ipsum deleniti porro, minima voluptas nobis in commodi nihil, error illo vitae similique! Rem doloribus porro esse, quia repellat tempore atque dolores magni cumque aliquid nam. Unde error voluptas fugit maxime! Minus sapiente suscipit harum ad ducimus. Incidunt fugiat ea eveniet molestias fuga porro aperiam neque, voluptates iusto in aliquid eaque ut consequatur tempore voluptatum iste repellendus dicta, autem illum quis quos illo est eius a. Saepe repudiandae nisi cum?',
                'gambar' => url . 'assets/img/img01.jpg'
            ];
            break;
        case 5:
            $projects =   [
                'id' => 5,
                'nama' => 'Portofolio Kelima Saya',
                'kategori' => 'Mobile',
                'dibuat' => '10 September 2022',
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores laboriosam enim facere mollitia ut? A officiis qui corporis possimus ut voluptatum fugit perspiciatis rem, laboriosam rerum, suscipit repellat ea aliquid, eveniet fugiat unde ad magnam pariatur hic nesciunt nisi dignissimos fuga? Nostrum aut totam eos omnis, alias sapiente repellendus voluptatum itaque excepturi, fuga odio, obcaecati laudantium. Quasi et saepe eius dolorem quisquam adipisci labore cumque modi facere facilis, quibusdam dolores hic, earum sunt repudiandae! Nobis quisquam placeat quaerat blanditiis, corporis numquam debitis laboriosam quasi dolor animi provident unde, rerum earum est voluptate magni. Autem officia quia voluptates illum accusantium adipisci ipsam impedit cumque distinctio libero voluptatum, eius, aperiam quos vero. Sint id ad culpa earum! Ipsam iste vero vitae natus sunt eligendi quod veniam neque autem, sit sapiente non aperiam. Ipsum deleniti porro, minima voluptas nobis in commodi nihil, error illo vitae similique! Rem doloribus porro esse, quia repellat tempore atque dolores magni cumque aliquid nam. Unde error voluptas fugit maxime! Minus sapiente suscipit harum ad ducimus. Incidunt fugiat ea eveniet molestias fuga porro aperiam neque, voluptates iusto in aliquid eaque ut consequatur tempore voluptatum iste repellendus dicta, autem illum quis quos illo est eius a. Saepe repudiandae nisi cum?',
                'gambar' => url . 'assets/img/img02.jpg'
            ];
            break;
        case 6:
            $projects =  [
                'id' => 6,
                'nama' => 'Portofolio Keenam Saya',
                'kategori' => 'Web',
                'dibuat' => '10 September 2022',
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores laboriosam enim facere mollitia ut? A officiis qui corporis possimus ut voluptatum fugit perspiciatis rem, laboriosam rerum, suscipit repellat ea aliquid, eveniet fugiat unde ad magnam pariatur hic nesciunt nisi dignissimos fuga? Nostrum aut totam eos omnis, alias sapiente repellendus voluptatum itaque excepturi, fuga odio, obcaecati laudantium. Quasi et saepe eius dolorem quisquam adipisci labore cumque modi facere facilis, quibusdam dolores hic, earum sunt repudiandae! Nobis quisquam placeat quaerat blanditiis, corporis numquam debitis laboriosam quasi dolor animi provident unde, rerum earum est voluptate magni. Autem officia quia voluptates illum accusantium adipisci ipsam impedit cumque distinctio libero voluptatum, eius, aperiam quos vero. Sint id ad culpa earum! Ipsam iste vero vitae natus sunt eligendi quod veniam neque autem, sit sapiente non aperiam. Ipsum deleniti porro, minima voluptas nobis in commodi nihil, error illo vitae similique! Rem doloribus porro esse, quia repellat tempore atque dolores magni cumque aliquid nam. Unde error voluptas fugit maxime! Minus sapiente suscipit harum ad ducimus. Incidunt fugiat ea eveniet molestias fuga porro aperiam neque, voluptates iusto in aliquid eaque ut consequatur tempore voluptatum iste repellendus dicta, autem illum quis quos illo est eius a. Saepe repudiandae nisi cum?',
                'gambar' => url . 'assets/img/img03.jpg'
            ];
            break;
        default:
            $projects = [];
            break;
    }

    return $projects;
}

// task
function getAllTask()
{
    $tasks = [
        [
            'id' => 1,
            'nama' => 'DESAIN WEB (HTML, CSS DAN BOOTSTRAP)',
            'gambar' => url . 'assets/img/html.png'
        ],
        [
            'id' => 2,
            'nama' => 'DESAIN UI/UX',
            'gambar' => url . 'assets/img/figma.png'
        ],
        [
            'id' => 3,
            'nama' => 'PEMROGRAMAN JAVASCRIPT',
            'gambar' => url . 'assets/img/javascript.png'
        ],
        [
            'id' => 4,
            'nama' => 'VERSION CONTROL SYSTEM GIT/GITHUB',
            'gambar' => url . 'assets/img/github.png'
        ],
        [
            'id' => 5,
            'nama' => 'PEMROGRAMAN PHP',
            'gambar' => url . 'assets/img/php.png'
        ]
    ];

    return $tasks;
}

function getTugasByTask($id)
{
    switch ($id) {
        case 1:
            $tugas = [
                [
                    'nama' => 'Perkenalan diri dengan format latihan1.html yang sudah dibahas pada live session di pagi.',
                    'pertemuan' => 1,
                    'task_id' => 1,
                    'gambar' => url . 'assets/img/desain_web/tugas1.png'
                ],
                [
                    'nama' => 'Buatlah jadwal mata kuliah seperti tampak gambar di bawah ini:',
                    'pertemuan' => 2,
                    'task_id' => 1,
                    'gambar' => url . 'assets/img/desain_web/tugas2.png'
                ],
                [
                    'nama' => 'Buatlah 2 form seperti tampak di bawah ini:',
                    'pertemuan' => 3,
                    'task_id' => 1,
                    'gambar' => url . 'assets/img/desain_web/tugas3.png'
                ]
            ];
            break;
        case 2:
            $tugas = [
                [
                    'nama' => 'Copy work',
                    'pertemuan' => 1,
                    'task_id' => 2,
                    'gambar' => url . 'assets/img/img01.jpg'
                ],
                [
                    'nama' => 'buatlah tampilan web dengan ketentuan sbb :',
                    'pertemuan' => 2,
                    'task_id' => 2,
                    'gambar' => url . 'assets/img/img02.jpg'
                ]
            ];
            break;
        case 3:
            $tugas = [
                [
                    'nama' => 'TUGAS 1 JAVASCRIPT',
                    'pertemuan' => 1,
                    'task_id' => 1,
                    'gambar' => url . 'assets/img/javascript/tugas1.png'
                ],
                [
                    'nama' => 'TUGAS 2 JAVASCRIPT',
                    'pertemuan' => 2,
                    'task_id' => 3,
                    'gambar' => url . 'assets/img/javascript/tugas2.png'
                ]
            ];
            break;
        case 4:
            $tugas = [
                [
                    'nama' => 'Buat repository ',
                    'pertemuan' => 1,
                    'task_id' => 4,
                    'gambar' => url . 'assets/img/img01.jpg'
                ],
                [
                    'nama' => 'TBuat repository private dan kolaborasikan semua anggota masing-masing kelompok ',
                    'pertemuan' => 2,
                    'task_id' => 4,
                    'gambar' => url . 'assets/img/img02.jpg'
                ]
            ];
            break;
        case 5:
            $tugas = [
                [
                    'nama' => 'Installasi XAMPP minimum versi 8.0',
                    'pertemuan' => 1,
                    'task_id' => 5,
                    'gambar' => url . 'assets/img/php/tugas1.png'
                ],
                [
                    'nama' => 'Buatlah form method POST menggunakan form builder boostrap (misal: https://startbootstrap.com/sb-form-builder) dengan element form:',
                    'pertemuan' => 2,
                    'task_id' => 5,
                    'gambar' => url . 'assets/img/php/tugas2.png'
                ]
            ];
            break;
        default:
            $tugas = [];
            break;
    }

    return $tugas;
}


// studies
function getAllStudy()
{
    $studies = [
        [
            'nama' => 'Sekolah Tinggi Teknologi Wastukancana',
            'tahun_masuk' => 2020,
            'tahun_keluar' => 'Sekarang',
            'jurusan' => 'Teknik Informatika'
        ],
        [
            'nama' => 'SMK Kharisma Nusantara',
            'tahun_masuk' => 2016,
            'tahun_keluar' => 2019,
            'jurusan' => 'Rekayasa Perangkat Lunak'
        ],
        [
            'nama' => 'MTs Khairunnas',
            'tahun_masuk' => 2013,
            'tahun_keluar' => 2016,
            'jurusan' => NULL
        ],
        [
            'nama' => 'SDN 1 Citeko Kaler',
            'tahun_masuk' => 2007,
            'tahun_keluar' => 2016,
            'jurusan' => NULL
        ]
    ];

    return $studies;
}

// 