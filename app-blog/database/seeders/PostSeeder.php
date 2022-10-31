<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create([
            'title' => 'First Post',
            'slug' => 'first-post',
            'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. At unde doloribus laudantium corporis doloremque vitae ut quos. Quibusdam beatae aut nesciunt quis, soluta iste adipisci hic, dolor itaque quia aliquam! Ullam quia a magni porro natus explicabo ad, delectus quibusdam voluptas veniam fugit beatae rerum illum repudiandae, in laboriosam. Possimus.',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis quam minus ad dolore ratione laborum. Impedit odio consectetur nam earum ex sint dolorum eum. Facilis laborum dolorum maxime nesciunt sapiente iusto magni eum itaque. Dicta nemo voluptatibus, omnis ea quod amet ratione consequuntur nam voluptate laboriosam, impedit repellat optio iste quidem cupiditate non! Iure quod aliquid deleniti voluptatem nisi culpa labore deserunt consequatur velit, earum, possimus blanditiis, autem aspernatur optio perferendis iste eius non aut unde mollitia vero sequi? Veniam.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem iusto, repudiandae fugiat saepe numquam praesentium tenetur animi alias sunt pariatur temporibus laudantium, neque deleniti vel minima adipisci debitis aut vitae ex voluptates eaque dolores sint quis. Ab laboriosam accusamus quia, amet debitis voluptate ipsum laudantium, ut facere vel vero excepturi.</p><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vitae porro sapiente possimus fugit eos praesentium quia, veritatis quam? Dolorum praesentium assumenda facere doloremque rem at ipsa molestias cupiditate, nihil fugit inventore veniam eum porro alias quibusdam optio placeat tempore excepturi sint incidunt, repudiandae omnis! Quasi minima cumque adipisci quibusdam corporis eveniet obcaecati nemo sunt totam cupiditate! Corrupti harum officiis dolor repellendus distinctio magni aliquid, exercitationem incidunt dolorem, quae laudantium et.</p>',
            'category_id'=> 1,
            'user_id' =>1
        ]);

        Post::create([
            'title' => 'Second Post',
            'slug' => 'second-post',
            'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. At unde doloribus laudantium corporis doloremque vitae ut quos. Quibusdam beatae aut nesciunt quis, soluta iste adipisci hic, dolor itaque quia aliquam! Ullam quia a magni porro natus explicabo ad, delectus quibusdam voluptas veniam fugit beatae rerum illum repudiandae, in laboriosam. Possimus.',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis quam minus ad dolore ratione laborum. Impedit odio consectetur nam earum ex sint dolorum eum. Facilis laborum dolorum maxime nesciunt sapiente iusto magni eum itaque. Dicta nemo voluptatibus, omnis ea quod amet ratione consequuntur nam voluptate laboriosam, impedit repellat optio iste quidem cupiditate non! Iure quod aliquid deleniti voluptatem nisi culpa labore deserunt consequatur velit, earum, possimus blanditiis, autem aspernatur optio perferendis iste eius non aut unde mollitia vero sequi? Veniam.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem iusto, repudiandae fugiat saepe numquam praesentium tenetur animi alias sunt pariatur temporibus laudantium, neque deleniti vel minima adipisci debitis aut vitae ex voluptates eaque dolores sint quis. Ab laboriosam accusamus quia, amet debitis voluptate ipsum laudantium, ut facere vel vero excepturi.</p><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vitae porro sapiente possimus fugit eos praesentium quia, veritatis quam? Dolorum praesentium assumenda facere doloremque rem at ipsa molestias cupiditate, nihil fugit inventore veniam eum porro alias quibusdam optio placeat tempore excepturi sint incidunt, repudiandae omnis! Quasi minima cumque adipisci quibusdam corporis eveniet obcaecati nemo sunt totam cupiditate! Corrupti harum officiis dolor repellendus distinctio magni aliquid, exercitationem incidunt dolorem, quae laudantium et.</p>',
            'category_id'=> 2,
            'user_id' =>2
        ]);

        Post::create([
            'title' => 'Third Post',
            'slug' => 'third-post',
            'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. At unde doloribus laudantium corporis doloremque vitae ut quos. Quibusdam beatae aut nesciunt quis, soluta iste adipisci hic, dolor itaque quia aliquam! Ullam quia a magni porro natus explicabo ad, delectus quibusdam voluptas veniam fugit beatae rerum illum repudiandae, in laboriosam. Possimus.',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis quam minus ad dolore ratione laborum. Impedit odio consectetur nam earum ex sint dolorum eum. Facilis laborum dolorum maxime nesciunt sapiente iusto magni eum itaque. Dicta nemo voluptatibus, omnis ea quod amet ratione consequuntur nam voluptate laboriosam, impedit repellat optio iste quidem cupiditate non! Iure quod aliquid deleniti voluptatem nisi culpa labore deserunt consequatur velit, earum, possimus blanditiis, autem aspernatur optio perferendis iste eius non aut unde mollitia vero sequi? Veniam.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem iusto, repudiandae fugiat saepe numquam praesentium tenetur animi alias sunt pariatur temporibus laudantium, neque deleniti vel minima adipisci debitis aut vitae ex voluptates eaque dolores sint quis. Ab laboriosam accusamus quia, amet debitis voluptate ipsum laudantium, ut facere vel vero excepturi.</p><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vitae porro sapiente possimus fugit eos praesentium quia, veritatis quam? Dolorum praesentium assumenda facere doloremque rem at ipsa molestias cupiditate, nihil fugit inventore veniam eum porro alias quibusdam optio placeat tempore excepturi sint incidunt, repudiandae omnis! Quasi minima cumque adipisci quibusdam corporis eveniet obcaecati nemo sunt totam cupiditate! Corrupti harum officiis dolor repellendus distinctio magni aliquid, exercitationem incidunt dolorem, quae laudantium et.</p>',
            'category_id'=> 3,
            'user_id' =>1
        ]);
    }
}
