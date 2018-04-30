<?php

use Illuminate\Database\Seeder;
use App\Product;
use App\Home;
use App\About;
use App\Lainnya;
use App\kategori;
use App\kategori_blog;
use App\blogs;



class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {




$kategori_blogs = kategori_blog::create([
'id' => '1',
'nama_kategori' => 'Fashion',
'slug' => 'fashion',
'created_at' => '2018-04-29 13:22:02',
'updated_at' => '2018-04-29 13:22:02']);

 $kategori_blogs = kategori_blog::create([
'id' => '2',
'nama_kategori' => 'Beauty',
'slug' => 'beauty',
'created_at' => '2018-04-29 13:22:14',
'updated_at' => '2018-04-29 13:22:14']);


 $kategori_blogs = kategori_blog::create([
'id' => '3',
'nama_kategori' => 'Street Style',
'slug' => 'street-style',
'created_at' => '2018-04-29 13:22:25',
'updated_at' => '2018-04-29 13:22:25']);

$kategori_blogs = kategori_blog::create([
'id' => '4',
'nama_kategori' => 'Life Style',
'slug' => 'life-style',
'created_at' => '2018-04-29 13:22:35',
'updated_at' => '2018-04-29 13:22:35']);

$kategori_blogs = kategori_blog::create([
'id' => '5',
'nama_kategori' => 'DIY & Crafts',
'slug' => 'diy-crafts',
'created_at' => '2018-04-29 13:22:47',
'updated_at' => '2018-04-29 13:22:47']);


 $blogs = blogs::create(['id' => '1','judul' => 'Lorem Ipsum','slug' => 'lorem-ipsum','cover' => '127e9c3aa6bd266b390faa801b99a189.jpg','isi' => '<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p class="p-b-25">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed turpis sed lorem dignissim vulputate nec cursus ante. Nunc sit amet tempor magna. Donec eros sem, porta eget leo et, varius eleifend mauris. Donec eu leo congue, faucibus quam eu, viverra mauris. Nulla consectetur lorem mi, at scelerisque metus hendrerit vitae. Proin vel magna vel neque porta ultricies non eget mauris. Suspendisse potenti.</p>
<p class="p-b-25">Aliquam faucibus scelerisque placerat. Vestibulum vel libero eu nulla varius pretium eget eu magna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean dictum faucibus felis, ac vestibulum risus mollis in. Phasellus neque dolor, euismod vitae auctor eget, dignissim a felis. Etiam malesuada elit a nibh aliquam, placerat ultricies nibh dictum. Nam ut egestas velit. Pellentesque viverra tincidunt tellus. Etiam cursus, ligula id vehicula cursus, turpis mauris facilisis massa, eget tincidunt est purus et odio. Nam quis luctus libero, non posuere velit. Ut eu varius diam, eu euismod elit. Donec efficitur, neque eu consectetur consectetur, dui sem consectetur felis, vitae rutrum risus urna vel arcu. Aliquam semper ullamcorper laoreet. Sed arcu lectus, fermentum imperdiet purus eu, ornare ornare libero.</p>
</body>
</html>','view' => '0','tanggal' => '2018-04-29','kategori_id' => '1','created_at' => '2018-04-29 13:24:10','updated_at' => '2018-04-29 13:24:10']);




  $blogs = blogs::create(['id' => '2','judul' => 'Lorem ipsum 1','slug' => 'lorem-ipsum-1','cover' => '3e7080126c595a85812b02d2b54f6deb.jpg','isi' => '<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p class="p-b-25">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed turpis sed lorem dignissim vulputate nec cursus ante. Nunc sit amet tempor magna. Donec eros sem, porta eget leo et, varius eleifend mauris. Donec eu leo congue, faucibus quam eu, viverra mauris. Nulla consectetur lorem mi, at scelerisque metus hendrerit vitae. Proin vel magna vel neque porta ultricies non eget mauris. Suspendisse potenti.</p>
<p class="p-b-25">Aliquam faucibus scelerisque placerat. Vestibulum vel libero eu nulla varius pretium eget eu magna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean dictum faucibus felis, ac vestibulum risus mollis in. Phasellus neque dolor, euismod vitae auctor eget, dignissim a felis. Etiam malesuada elit a nibh aliquam, placerat ultricies nibh dictum. Nam ut egestas velit. Pellentesque viverra tincidunt tellus. Etiam cursus, ligula id vehicula cursus, turpis mauris facilisis massa, eget tincidunt est purus et odio. Nam quis luctus libero, non posuere velit. Ut eu varius diam, eu euismod elit. Donec efficitur, neque eu consectetur consectetur, dui sem consectetur felis, vitae rutrum risus urna vel arcu. Aliquam semper ullamcorper laoreet. Sed arcu lectus, fermentum imperdiet purus eu, ornare ornare libero.</p>
</body>
</html>','view' => '1','tanggal' => '2018-04-29','kategori_id' => '1','created_at' => '2018-04-29 13:24:42','updated_at' => '2018-04-29 13:49:19']);



  $blogs = blogs::create(['id' => '3','judul' => 'Lorem ipsum 2','slug' => 'lorem-ipsum-2','cover' => '76944c601e6697f3a11087054203e3e2.jpg','isi' => '<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p class="p-b-25">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed turpis sed lorem dignissim vulputate nec cursus ante. Nunc sit amet tempor magna. Donec eros sem, porta eget leo et, varius eleifend mauris. Donec eu leo congue, faucibus quam eu, viverra mauris. Nulla consectetur lorem mi, at scelerisque metus hendrerit vitae. Proin vel magna vel neque porta ultricies non eget mauris. Suspendisse potenti.</p>
<p class="p-b-25">Aliquam faucibus scelerisque placerat. Vestibulum vel libero eu nulla varius pretium eget eu magna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean dictum faucibus felis, ac vestibulum risus mollis in. Phasellus neque dolor, euismod vitae auctor eget, dignissim a felis. Etiam malesuada elit a nibh aliquam, placerat ultricies nibh dictum. Nam ut egestas velit. Pellentesque viverra tincidunt tellus. Etiam cursus, ligula id vehicula cursus, turpis mauris facilisis massa, eget tincidunt est purus et odio. Nam quis luctus libero, non posuere velit. Ut eu varius diam, eu euismod elit. Donec efficitur, neque eu consectetur consectetur, dui sem consectetur felis, vitae rutrum risus urna vel arcu. Aliquam semper ullamcorper laoreet. Sed arcu lectus, fermentum imperdiet purus eu, ornare ornare libero.</p>
</body>
</html>','view' => '12','tanggal' => '2018-04-29','kategori_id' => '1','created_at' => '2018-04-29 13:25:07','updated_at' => '2018-04-29 13:47:07']);


  $blogs = blogs::create(['id' => '4','judul' => 'Lorem Ipsum 3','slug' => 'lorem-ipsum-3','cover' => '35f9f443c314b0f13e6887be578750a0.jpg','isi' => '<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p class="p-b-25">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed turpis sed lorem dignissim vulputate nec cursus ante. Nunc sit amet tempor magna. Donec eros sem, porta eget leo et, varius eleifend mauris. Donec eu leo congue, faucibus quam eu, viverra mauris. Nulla consectetur lorem mi, at scelerisque metus hendrerit vitae. Proin vel magna vel neque porta ultricies non eget mauris. Suspendisse potenti.</p>
<p class="p-b-25">Aliquam faucibus scelerisque placerat. Vestibulum vel libero eu nulla varius pretium eget eu magna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean dictum faucibus felis, ac vestibulum risus mollis in. Phasellus neque dolor, euismod vitae auctor eget, dignissim a felis. Etiam malesuada elit a nibh aliquam, placerat ultricies nibh dictum. Nam ut egestas velit. Pellentesque viverra tincidunt tellus. Etiam cursus, ligula id vehicula cursus, turpis mauris facilisis massa, eget tincidunt est purus et odio. Nam quis luctus libero, non posuere velit. Ut eu varius diam, eu euismod elit. Donec efficitur, neque eu consectetur consectetur, dui sem consectetur felis, vitae rutrum risus urna vel arcu. Aliquam semper ullamcorper laoreet. Sed arcu lectus, fermentum imperdiet purus eu, ornare ornare libero.</p>
</body>
</html>','view' => '1','tanggal' => '2018-04-29','kategori_id' => '2','created_at' => '2018-04-29 13:47:45','updated_at' => '2018-04-29 13:50:43']);



  $blogs = blogs::create(['id' => '5','judul' => 'Lorem Ipsum 4','slug' => 'lorem-ipsum-4','cover' => '15d0bc776469b47359c8fef7f1d9788c.jpg','isi' => '<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p class="p-b-25">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed turpis sed lorem dignissim vulputate nec cursus ante. Nunc sit amet tempor magna. Donec eros sem, porta eget leo et, varius eleifend mauris. Donec eu leo congue, faucibus quam eu, viverra mauris. Nulla consectetur lorem mi, at scelerisque metus hendrerit vitae. Proin vel magna vel neque porta ultricies non eget mauris. Suspendisse potenti.</p>
<p class="p-b-25">Aliquam faucibus scelerisque placerat. Vestibulum vel libero eu nulla varius pretium eget eu magna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean dictum faucibus felis, ac vestibulum risus mollis in. Phasellus neque dolor, euismod vitae auctor eget, dignissim a felis. Etiam malesuada elit a nibh aliquam, placerat ultricies nibh dictum. Nam ut egestas velit. Pellentesque viverra tincidunt tellus. Etiam cursus, ligula id vehicula cursus, turpis mauris facilisis massa, eget tincidunt est purus et odio. Nam quis luctus libero, non posuere velit. Ut eu varius diam, eu euismod elit. Donec efficitur, neque eu consectetur consectetur, dui sem consectetur felis, vitae rutrum risus urna vel arcu. Aliquam semper ullamcorper laoreet. Sed arcu lectus, fermentum imperdiet purus eu, ornare ornare libero.</p>
</body>
</html>','view' => '0','tanggal' => '2018-04-29','kategori_id' => '2','created_at' => '2018-04-29 13:50:58','updated_at' => '2018-04-29 13:50:58']);



  $blogs = blogs::create(['id' => '6','judul' => 'Lorem Ipsum 5','slug' => 'lorem-ipsum-5','cover' => '6a9c11d7a6348aead57adc507253818e.jpg','isi' => '<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p class="p-b-25">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed turpis sed lorem dignissim vulputate nec cursus ante. Nunc sit amet tempor magna. Donec eros sem, porta eget leo et, varius eleifend mauris. Donec eu leo congue, faucibus quam eu, viverra mauris. Nulla consectetur lorem mi, at scelerisque metus hendrerit vitae. Proin vel magna vel neque porta ultricies non eget mauris. Suspendisse potenti.</p>
<p class="p-b-25">Aliquam faucibus scelerisque placerat. Vestibulum vel libero eu nulla varius pretium eget eu magna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean dictum faucibus felis, ac vestibulum risus mollis in. Phasellus neque dolor, euismod vitae auctor eget, dignissim a felis. Etiam malesuada elit a nibh aliquam, placerat ultricies nibh dictum. Nam ut egestas velit. Pellentesque viverra tincidunt tellus. Etiam cursus, ligula id vehicula cursus, turpis mauris facilisis massa, eget tincidunt est purus et odio. Nam quis luctus libero, non posuere velit. Ut eu varius diam, eu euismod elit. Donec efficitur, neque eu consectetur consectetur, dui sem consectetur felis, vitae rutrum risus urna vel arcu. Aliquam semper ullamcorper laoreet. Sed arcu lectus, fermentum imperdiet purus eu, ornare ornare libero.</p>
</body>
</html>','view' => '0','tanggal' => '2018-04-29','kategori_id' => '2','created_at' => '2018-04-29 13:51:55','updated_at' => '2018-04-29 13:51:55']);



  $blogs = blogs::create(['id' => '7','judul' => 'Lorem Ipsum 6','slug' => 'lorem-ipsum-6','cover' => '04767dbb1411a2d90cd49e1358cca767.jpg','isi' => '<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p class="p-b-25">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed turpis sed lorem dignissim vulputate nec cursus ante. Nunc sit amet tempor magna. Donec eros sem, porta eget leo et, varius eleifend mauris. Donec eu leo congue, faucibus quam eu, viverra mauris. Nulla consectetur lorem mi, at scelerisque metus hendrerit vitae. Proin vel magna vel neque porta ultricies non eget mauris. Suspendisse potenti.</p>
<p class="p-b-25">Aliquam faucibus scelerisque placerat. Vestibulum vel libero eu nulla varius pretium eget eu magna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean dictum faucibus felis, ac vestibulum risus mollis in. Phasellus neque dolor, euismod vitae auctor eget, dignissim a felis. Etiam malesuada elit a nibh aliquam, placerat ultricies nibh dictum. Nam ut egestas velit. Pellentesque viverra tincidunt tellus. Etiam cursus, ligula id vehicula cursus, turpis mauris facilisis massa, eget tincidunt est purus et odio. Nam quis luctus libero, non posuere velit. Ut eu varius diam, eu euismod elit. Donec efficitur, neque eu consectetur consectetur, dui sem consectetur felis, vitae rutrum risus urna vel arcu. Aliquam semper ullamcorper laoreet. Sed arcu lectus, fermentum imperdiet purus eu, ornare ornare libero.</p>
</body>
</html>','view' => '0','tanggal' => '2018-04-29','kategori_id' => '5','created_at' => '2018-04-29 13:52:59','updated_at' => '2018-04-29 13:52:59']);



  $blogs = blogs::create(['id' => '8','judul' => 'Lorem Ipsum 8','slug' => 'lorem-ipsum-8','cover' => 'ab6939c12d71bd2e822c6e84c124033f.jpg','isi' => '<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p class="p-b-25">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed turpis sed lorem dignissim vulputate nec cursus ante. Nunc sit amet tempor magna. Donec eros sem, porta eget leo et, varius eleifend mauris. Donec eu leo congue, faucibus quam eu, viverra mauris. Nulla consectetur lorem mi, at scelerisque metus hendrerit vitae. Proin vel magna vel neque porta ultricies non eget mauris. Suspendisse potenti.</p>
<p class="p-b-25">Aliquam faucibus scelerisque placerat. Vestibulum vel libero eu nulla varius pretium eget eu magna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean dictum faucibus felis, ac vestibulum risus mollis in. Phasellus neque dolor, euismod vitae auctor eget, dignissim a felis. Etiam malesuada elit a nibh aliquam, placerat ultricies nibh dictum. Nam ut egestas velit. Pellentesque viverra tincidunt tellus. Etiam cursus, ligula id vehicula cursus, turpis mauris facilisis massa, eget tincidunt est purus et odio. Nam quis luctus libero, non posuere velit. Ut eu varius diam, eu euismod elit. Donec efficitur, neque eu consectetur consectetur, dui sem consectetur felis, vitae rutrum risus urna vel arcu. Aliquam semper ullamcorper laoreet. Sed arcu lectus, fermentum imperdiet purus eu, ornare ornare libero.</p>
</body>
</html>','view' => '0','tanggal' => '2018-04-29','kategori_id' => '5','created_at' => '2018-04-29 13:54:03','updated_at' => '2018-04-29 13:54:03']);

    $blogs = blogs::create(['id' => '9','judul' => 'Lorem Ipsum 9','slug' => 'lorem-ipsum-9','cover' => '367439808d61f4b046ca282a84751205.jpg','isi' => '<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p class="p-b-25">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed turpis sed lorem dignissim vulputate nec cursus ante. Nunc sit amet tempor magna. Donec eros sem, porta eget leo et, varius eleifend mauris. Donec eu leo congue, faucibus quam eu, viverra mauris. Nulla consectetur lorem mi, at scelerisque metus hendrerit vitae. Proin vel magna vel neque porta ultricies non eget mauris. Suspendisse potenti.</p>
<p class="p-b-25">Aliquam faucibus scelerisque placerat. Vestibulum vel libero eu nulla varius pretium eget eu magna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean dictum faucibus felis, ac vestibulum risus mollis in. Phasellus neque dolor, euismod vitae auctor eget, dignissim a felis. Etiam malesuada elit a nibh aliquam, placerat ultricies nibh dictum. Nam ut egestas velit. Pellentesque viverra tincidunt tellus. Etiam cursus, ligula id vehicula cursus, turpis mauris facilisis massa, eget tincidunt est purus et odio. Nam quis luctus libero, non posuere velit. Ut eu varius diam, eu euismod elit. Donec efficitur, neque eu consectetur consectetur, dui sem consectetur felis, vitae rutrum risus urna vel arcu. Aliquam semper ullamcorper laoreet. Sed arcu lectus, fermentum imperdiet purus eu, ornare ornare libero.</p>
</body>
</html>','view' => '0','tanggal' => '2018-04-29','kategori_id' => '5','created_at' => '2018-04-29 13:54:42','updated_at' => '2018-04-29 13:54:42']);

    $blogs = blogs::create(['id' => '10','judul' => 'Lorem Ipsum 10','slug' => 'lorem-ipsum-10','cover' => 'a7c33ed6a077171bc7972dd2c23cfd4b.jpg','isi' => '<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p>&nbsp;</p>
<p class="p-b-25">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed turpis sed lorem dignissim vulputate nec cursus ante. Nunc sit amet tempor magna. Donec eros sem, porta eget leo et, varius eleifend mauris. Donec eu leo congue, faucibus quam eu, viverra mauris. Nulla consectetur lorem mi, at scelerisque metus hendrerit vitae. Proin vel magna vel neque porta ultricies non eget mauris. Suspendisse potenti.</p>
<p class="p-b-25">Aliquam faucibus scelerisque placerat. Vestibulum vel libero eu nulla varius pretium eget eu magna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean dictum faucibus felis, ac vestibulum risus mollis in. Phasellus neque dolor, euismod vitae auctor eget, dignissim a felis. Etiam malesuada elit a nibh aliquam, placerat ultricies nibh dictum. Nam ut egestas velit. Pellentesque viverra tincidunt tellus. Etiam cursus, ligula id vehicula cursus, turpis mauris facilisis massa, eget tincidunt est purus et odio. Nam quis luctus libero, non posuere velit. Ut eu varius diam, eu euismod elit. Donec efficitur, neque eu consectetur consectetur, dui sem consectetur felis, vitae rutrum risus urna vel arcu. Aliquam semper ullamcorper laoreet. Sed arcu lectus, fermentum imperdiet purus eu, ornare ornare libero.</p>
</body>
</html>','view' => '0','tanggal' => '2018-04-29','kategori_id' => '4','created_at' => '2018-04-29 13:56:14','updated_at' => '2018-04-29 13:56:14']);

    $blogs = blogs::create(['id' => '11','judul' => 'Lorem Ipsum 11','slug' => 'lorem-ipsum-11','cover' => 'a8fd3b3f0a07c9542dc6309e0a0e4037.jpg','isi' => '<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p class="p-b-25">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed turpis sed lorem dignissim vulputate nec cursus ante. Nunc sit amet tempor magna. Donec eros sem, porta eget leo et, varius eleifend mauris. Donec eu leo congue, faucibus quam eu, viverra mauris. Nulla consectetur lorem mi, at scelerisque metus hendrerit vitae. Proin vel magna vel neque porta ultricies non eget mauris. Suspendisse potenti.</p>
<p class="p-b-25">Aliquam faucibus scelerisque placerat. Vestibulum vel libero eu nulla varius pretium eget eu magna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean dictum faucibus felis, ac vestibulum risus mollis in. Phasellus neque dolor, euismod vitae auctor eget, dignissim a felis. Etiam malesuada elit a nibh aliquam, placerat ultricies nibh dictum. Nam ut egestas velit. Pellentesque viverra tincidunt tellus. Etiam cursus, ligula id vehicula cursus, turpis mauris facilisis massa, eget tincidunt est purus et odio. Nam quis luctus libero, non posuere velit. Ut eu varius diam, eu euismod elit. Donec efficitur, neque eu consectetur consectetur, dui sem consectetur felis, vitae rutrum risus urna vel arcu. Aliquam semper ullamcorper laoreet. Sed arcu lectus, fermentum imperdiet purus eu, ornare ornare libero.</p>
</body>
</html>','view' => '0','tanggal' => '2018-04-29','kategori_id' => '4','created_at' => '2018-04-29 13:56:36','updated_at' => '2018-04-29 13:56:36']);

  $blogs = blogs::create(['id' => '12','judul' => 'Lorem Ipsum 12','slug' => 'lorem-ipsum-12','cover' => '071d7b6c521a382368bcd6afdc45379b.jpg','isi' => '<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p class="p-b-25">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed turpis sed lorem dignissim vulputate nec cursus ante. Nunc sit amet tempor magna. Donec eros sem, porta eget leo et, varius eleifend mauris. Donec eu leo congue, faucibus quam eu, viverra mauris. Nulla consectetur lorem mi, at scelerisque metus hendrerit vitae. Proin vel magna vel neque porta ultricies non eget mauris. Suspendisse potenti.</p>
<p class="p-b-25">Aliquam faucibus scelerisque placerat. Vestibulum vel libero eu nulla varius pretium eget eu magna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean dictum faucibus felis, ac vestibulum risus mollis in. Phasellus neque dolor, euismod vitae auctor eget, dignissim a felis. Etiam malesuada elit a nibh aliquam, placerat ultricies nibh dictum. Nam ut egestas velit. Pellentesque viverra tincidunt tellus. Etiam cursus, ligula id vehicula cursus, turpis mauris facilisis massa, eget tincidunt est purus et odio. Nam quis luctus libero, non posuere velit. Ut eu varius diam, eu euismod elit. Donec efficitur, neque eu consectetur consectetur, dui sem consectetur felis, vitae rutrum risus urna vel arcu. Aliquam semper ullamcorper laoreet. Sed arcu lectus, fermentum imperdiet purus eu, ornare ornare libero.</p>
</body>
</html>','view' => '0','tanggal' => '2018-04-29','kategori_id' => '4','created_at' => '2018-04-29 13:57:10','updated_at' => '2018-04-29 13:57:10']);

    $blogs = blogs::create(['id' => '13','judul' => 'Lorem Ipsum 13','slug' => 'lorem-ipsum-13','cover' => 'a23be8a0e156f7e3105b3f07e562ec07.jpg','isi' => '<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p class="p-b-25">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed turpis sed lorem dignissim vulputate nec cursus ante. Nunc sit amet tempor magna. Donec eros sem, porta eget leo et, varius eleifend mauris. Donec eu leo congue, faucibus quam eu, viverra mauris. Nulla consectetur lorem mi, at scelerisque metus hendrerit vitae. Proin vel magna vel neque porta ultricies non eget mauris. Suspendisse potenti.</p>
<p class="p-b-25">Aliquam faucibus scelerisque placerat. Vestibulum vel libero eu nulla varius pretium eget eu magna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean dictum faucibus felis, ac vestibulum risus mollis in. Phasellus neque dolor, euismod vitae auctor eget, dignissim a felis. Etiam malesuada elit a nibh aliquam, placerat ultricies nibh dictum. Nam ut egestas velit. Pellentesque viverra tincidunt tellus. Etiam cursus, ligula id vehicula cursus, turpis mauris facilisis massa, eget tincidunt est purus et odio. Nam quis luctus libero, non posuere velit. Ut eu varius diam, eu euismod elit. Donec efficitur, neque eu consectetur consectetur, dui sem consectetur felis, vitae rutrum risus urna vel arcu. Aliquam semper ullamcorper laoreet. Sed arcu lectus, fermentum imperdiet purus eu, ornare ornare libero.</p>
</body>
</html>','view' => '0','tanggal' => '2018-04-29','kategori_id' => '3','created_at' => '2018-04-29 13:58:06','updated_at' => '2018-04-29 13:58:06']);

    $blogs = blogs::create(['id' => '14','judul' => 'Lorem Ipsum 14','slug' => 'lorem-ipsum-14','cover' => 'd9f9b86e73997473661f38d60d552cea.jpg','isi' => '<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p class="p-b-25">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed turpis sed lorem dignissim vulputate nec cursus ante. Nunc sit amet tempor magna. Donec eros sem, porta eget leo et, varius eleifend mauris. Donec eu leo congue, faucibus quam eu, viverra mauris. Nulla consectetur lorem mi, at scelerisque metus hendrerit vitae. Proin vel magna vel neque porta ultricies non eget mauris. Suspendisse potenti.</p>
<p class="p-b-25">Aliquam faucibus scelerisque placerat. Vestibulum vel libero eu nulla varius pretium eget eu magna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean dictum faucibus felis, ac vestibulum risus mollis in. Phasellus neque dolor, euismod vitae auctor eget, dignissim a felis. Etiam malesuada elit a nibh aliquam, placerat ultricies nibh dictum. Nam ut egestas velit. Pellentesque viverra tincidunt tellus. Etiam cursus, ligula id vehicula cursus, turpis mauris facilisis massa, eget tincidunt est purus et odio. Nam quis luctus libero, non posuere velit. Ut eu varius diam, eu euismod elit. Donec efficitur, neque eu consectetur consectetur, dui sem consectetur felis, vitae rutrum risus urna vel arcu. Aliquam semper ullamcorper laoreet. Sed arcu lectus, fermentum imperdiet purus eu, ornare ornare libero.</p>
</body>
</html>','view' => '0','tanggal' => '2018-04-29','kategori_id' => '3','created_at' => '2018-04-29 13:58:28','updated_at' => '2018-04-29 13:58:28']);

  $blogs = blogs::create(['id' => '15','judul' => 'Lorem Ipsum 15','slug' => 'lorem-ipsum-15','cover' => '3591b9d0ed90d1959db869dd1a5ccc42.jpg','isi' => '<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p class="p-b-25">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed turpis sed lorem dignissim vulputate nec cursus ante. Nunc sit amet tempor magna. Donec eros sem, porta eget leo et, varius eleifend mauris. Donec eu leo congue, faucibus quam eu, viverra mauris. Nulla consectetur lorem mi, at scelerisque metus hendrerit vitae. Proin vel magna vel neque porta ultricies non eget mauris. Suspendisse potenti.</p>
<p class="p-b-25">Aliquam faucibus scelerisque placerat. Vestibulum vel libero eu nulla varius pretium eget eu magna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean dictum faucibus felis, ac vestibulum risus mollis in. Phasellus neque dolor, euismod vitae auctor eget, dignissim a felis. Etiam malesuada elit a nibh aliquam, placerat ultricies nibh dictum. Nam ut egestas velit. Pellentesque viverra tincidunt tellus. Etiam cursus, ligula id vehicula cursus, turpis mauris facilisis massa, eget tincidunt est purus et odio. Nam quis luctus libero, non posuere velit. Ut eu varius diam, eu euismod elit. Donec efficitur, neque eu consectetur consectetur, dui sem consectetur felis, vitae rutrum risus urna vel arcu. Aliquam semper ullamcorper laoreet. Sed arcu lectus, fermentum imperdiet purus eu, ornare ornare libero.</p>
</body>
</html>','view' => '0','tanggal' => '2018-04-29','kategori_id' => '3','created_at' => '2018-04-29 13:58:50','updated_at' => '2018-04-29 13:58:50']);





/* `test`.`kategoris` */
$kategori = kategori::create(['id' => '1','nama_kategori' => 'Baju','cover' => '1dc53e66e41551ee4cf86869fe8ae789.jpg','slug' => 'baju','created_at' => '2018-04-29 12:32:26','updated_at' => '2018-04-29 12:32:26']);
$kategori = kategori::create(['id' => '2','nama_kategori' => 'Jam','cover' => 'd4651b4df0f7eb38c63a6dc169cb24db.jpg','slug' => 'jam','created_at' => '2018-04-29 12:32:34','updated_at' => '2018-04-29 12:32:34']);
  $kategori = kategori::create(['id' => '3','nama_kategori' => 'Tas','cover' => '27fef12638de8d6a89d1132c6832dcdd.jpg','slug' => 'tas','created_at' => '2018-04-29 12:32:43','updated_at' => '2018-04-29 12:32:43']);
$kategori = kategori::create(['id' => '4','nama_kategori' => 'Kacamata','cover' => '3414a4f6137fd945cfe31e9da37cf9a8.jpg','slug' => 'kacamata','created_at' => '2018-04-29 12:32:55','updated_at' => '2018-04-29 12:32:55']);
$kategori = kategori::create(['id' => '5','nama_kategori' => 'Sepatu','cover' => '90ca4db1760b31b9818ecd78993a6e25.jpg','slug' => 'sepatu','created_at' => '2018-04-29 12:33:19','updated_at' => '2018-04-29 12:33:19']);



$product =Product::create(['id' => '1','Kode' => ' Lorem Ipsum ','kategori_id' => '1','nama_product' => 'Lorem Ipsum ','bahan' => 'Lorem Ipsum ','ukuran' => 'S,M,L,XL','warna' => 'Lorem Ipsum ','harga' => '234','views' => '0','cover' => 'aee840517ad0e67a9925e0f2387e0669.jpg','cover1' => 'aee840517ad0e67a9925e0f2387e0669.jpg','cover2' => 'aee840517ad0e67a9925e0f2387e0669.jpg','created_at' => '2018-04-29 12:35:08','updated_at' => '2018-04-29 12:35:08']);
$product =Product::create(['id' => '2','Kode' => 'Lorem Ipsum 1','kategori_id' => '2','nama_product' => 'Lorem Ipsum 1','bahan' => 'Lorem Ipsum 1','ukuran' => 'S,M,L,XL','warna' => 'Lorem Ipsum 1','harga' => '123','views' => '1','cover' => 'd6cbf3046ec96d7496dfa3c34c054cd1.jpg','cover1' => 'd6cbf3046ec96d7496dfa3c34c054cd1.jpg','cover2' => 'd6cbf3046ec96d7496dfa3c34c054cd1.jpg','created_at' => '2018-04-29 12:35:54','updated_at' => '2018-04-29 13:05:42']);
$product =Product::create(['id' => '3','Kode' => 'Lorem Ipsum 2','kategori_id' => '3','nama_product' => 'Lorem Ipsum 2','bahan' => 'Lorem Ipsum 2','ukuran' => 'S,M,L,XL','warna' => 'Lorem Ipsum 2','harga' => '131','views' => '0','cover' => 'c6562b5fb7f193da7a365db671789444.jpg','cover1' => 'c6562b5fb7f193da7a365db671789444.jpg','cover2' => 'c6562b5fb7f193da7a365db671789444.jpg','created_at' => '2018-04-29 12:36:32','updated_at' => '2018-04-29 12:36:32']);
$product =Product::create(['id' => '4','Kode' => 'Lorem Ipsum 3','kategori_id' => '3','nama_product' => 'Lorem Ipsum 3','bahan' => 'Lorem Ipsum 3','ukuran' => 'S,M,L,XL','warna' => 'Lorem Ipsum 3','harga' => '1312','views' => '0','cover' => '3036fcf5a13f7b4dcd550aa94112c81c.jpg','cover1' => '3036fcf5a13f7b4dcd550aa94112c81c.jpg','cover2' => '3036fcf5a13f7b4dcd550aa94112c81c.jpg','created_at' => '2018-04-29 12:37:11','updated_at' => '2018-04-29 12:37:11']);
$product =Product::create(['id' => '5','Kode' => 'Lorem Ipsum 4','kategori_id' => '4','nama_product' => 'Lorem Ipsum 4','bahan' => 'Lorem Ipsum 4','ukuran' => 'S,M,L,XL','warna' => 'Lorem Ipsum 4','harga' => '121','views' => '0','cover' => 'abd9b0c40ed91be078082c43a204fc7e.jpg','cover1' => 'abd9b0c40ed91be078082c43a204fc7e.jpg','cover2' => 'abd9b0c40ed91be078082c43a204fc7e.jpg','created_at' => '2018-04-29 12:37:50','updated_at' => '2018-04-29 12:37:50']);
$product =Product::create(['id' => '6','Kode' => 'Lorem Ipsum 5','kategori_id' => '5','nama_product' => 'Lorem Ipsum 5','bahan' => 'Lorem Ipsum 5','ukuran' => 'S,M,L,XL','warna' => 'Lorem Ipsum 5','harga' => '121','views' => '0','cover' => '615458632d3493be9141a22e4154b389.jpg','cover1' => '615458632d3493be9141a22e4154b389.jpg','cover2' => '615458632d3493be9141a22e4154b389.jpg','created_at' => '2018-04-29 12:38:25','updated_at' => '2018-04-29 12:38:25']);
$product =Product::create(['id' => '7','Kode' => 'Lorem Ipsum 6','kategori_id' => '1','nama_product' => 'Lorem Ipsum 6','bahan' => 'Lorem Ipsum 6','ukuran' => 'S,M,L,XL','warna' => 'Lorem Ipsum 6','harga' => '123','views' => '0','cover' => '26c94e686deeaa5d5fbee889a5bcbd9e.jpg','cover1' => '26c94e686deeaa5d5fbee889a5bcbd9e.jpg','cover2' => '26c94e686deeaa5d5fbee889a5bcbd9e.jpg','created_at' => '2018-04-29 13:00:19','updated_at' => '2018-04-29 13:00:19']);
$product =Product::create(['id' => '8','Kode' => 'Lorem Ipsum 7','kategori_id' => '1','nama_product' => 'Lorem Ipsum 7','bahan' => 'Lorem Ipsum 7','ukuran' => 'S,M,L,XL','warna' => 'Lorem Ipsum 7','harga' => '123','views' => '0','cover' => '2cd2b57fa90e412e5f2954c1622afd38.jpg','cover1' => '2cd2b57fa90e412e5f2954c1622afd38.jpg','cover2' => '2cd2b57fa90e412e5f2954c1622afd38.jpg','created_at' => '2018-04-29 13:00:57','updated_at' => '2018-04-29 13:00:57']);
$product =Product::create(['id' => '9','Kode' => 'Lorem Ipsum 8','kategori_id' => '1','nama_product' => 'Lorem Ipsum 8','bahan' => 'Lorem Ipsum 8','ukuran' => 'S,M,L,XL','warna' => 'Lorem Ipsum 8','harga' => '123','views' => '0','cover' => '5a9a55746472bc05d2b1fb741e0a8486.jpg','cover1' => '5a9a55746472bc05d2b1fb741e0a8486.jpg','cover2' => '5a9a55746472bc05d2b1fb741e0a8486.jpg','created_at' => '2018-04-29 13:02:07','updated_at' => '2018-04-29 13:02:07']);
$product =Product::create(['id' => '10','Kode' => 'Lorem Ipsum 9','kategori_id' => '1','nama_product' => 'Lorem Ipsum 9','bahan' => 'Lorem Ipsum 9','ukuran' => 'S,M,L,XL','warna' => 'Lorem Ipsum 9','harga' => '123','views' => '0','cover' => 'a62598a7e8e1a9187df4090f3eafd2da.jpg','cover1' => 'a62598a7e8e1a9187df4090f3eafd2da.jpg','cover2' => 'a62598a7e8e1a9187df4090f3eafd2da.jpg','created_at' => '2018-04-29 13:03:15','updated_at' => '2018-04-29 13:03:15']);
$product =Product::create(['id' => '11','Kode' => 'Lorem Ipsum 10','kategori_id' => '1','nama_product' => 'Lorem Ipsum 10','bahan' => 'Lorem Ipsum 10','ukuran' => 'S,M,L,XL','warna' => 'Lorem Ipsum 10','harga' => '123','views' => '0','cover' => 'e6e32c451ea5b5f5798ddb856d9650d8.jpg','cover1' => 'e6e32c451ea5b5f5798ddb856d9650d8.jpg','cover2' => 'e6e32c451ea5b5f5798ddb856d9650d8.jpg','created_at' => '2018-04-29 13:03:57','updated_at' => '2018-04-29 13:03:57']);
$product =Product::create(['id' => '12','Kode' => 'Lorem Ipsum 11','kategori_id' => '1','nama_product' => 'Lorem Ipsum 11','bahan' => 'Lorem Ipsum 11','ukuran' => 'S,M,L,XL','warna' => 'Lorem Ipsum 11','harga' => '132','views' => '0','cover' => '0b770715bc2b5f7c5c73fac326783e85.jpg','cover1' => '0b770715bc2b5f7c5c73fac326783e85.jpg','cover2' => '0b770715bc2b5f7c5c73fac326783e85.jpg','created_at' => '2018-04-29 13:04:29','updated_at' => '2018-04-29 13:04:29']);
$product =Product::create(['id' => '13','Kode' => 'Lorem Ipsum 12','kategori_id' => '2','nama_product' => 'Lorem Ipsum 12','bahan' => 'Lorem Ipsum 12','ukuran' => 'S,M,L,XL','warna' => 'Lorem Ipsum 12','harga' => '123','views' => '0','cover' => 'a1b9d67f128d11f63571e62faec9af4d.jpg','cover1' => 'a1b9d67f128d11f63571e62faec9af4d.jpg','cover2' => 'a1b9d67f128d11f63571e62faec9af4d.jpg','created_at' => '2018-04-29 13:05:34','updated_at' => '2018-04-29 13:05:34']);
$product =Product::create(['id' => '14','Kode' => 'Lorem Ipsum 13','kategori_id' => '2','nama_product' => 'Lorem Ipsum 13','bahan' => 'Lorem Ipsum 13','ukuran' => 'Lorem Ipsum 13','warna' => 'Lorem Ipsum 13','harga' => '123','views' => '0','cover' => '415c8ba54c0140c9e58419bb498042c6.jpg','cover1' => '415c8ba54c0140c9e58419bb498042c6.jpg','cover2' => '415c8ba54c0140c9e58419bb498042c6.jpg','created_at' => '2018-04-29 13:07:05','updated_at' => '2018-04-29 13:07:05']);
$product =Product::create(['id' => '15','Kode' => 'Lorem Ipsum 14','kategori_id' => '2','nama_product' => 'Lorem Ipsum 14','bahan' => 'Lorem Ipsum 14','ukuran' => 'Lorem Ipsum 14','warna' => 'Lorem Ipsum 14','harga' => '123','views' => '0','cover' => 'c83dd25f0af84e96cb19cc2dd72fe86d.jpg','cover1' => 'c83dd25f0af84e96cb19cc2dd72fe86d.jpg','cover2' => 'c83dd25f0af84e96cb19cc2dd72fe86d.jpg','created_at' => '2018-04-29 13:07:32','updated_at' => '2018-04-29 13:07:32']);
$product =Product::create(['id' => '16','Kode' => 'Lorem Ipsum 15','kategori_id' => '2','nama_product' => 'Lorem Ipsum 15','bahan' => 'Lorem Ipsum 15','ukuran' => 'Lorem Ipsum 15','warna' => 'Lorem Ipsum 15','harga' => '123','views' => '0','cover' => 'bec095c5454d2ad9931d7b273d4f8a9c.jpg','cover1' => 'bec095c5454d2ad9931d7b273d4f8a9c.jpg','cover2' => 'bec095c5454d2ad9931d7b273d4f8a9c.jpg','created_at' => '2018-04-29 13:08:03','updated_at' => '2018-04-29 13:08:03']);
$product =Product::create(['id' => '17','Kode' => 'Lorem Ipsum 16','kategori_id' => '2','nama_product' => 'Lorem Ipsum 16','bahan' => 'Lorem Ipsum 16','ukuran' => 'Lorem Ipsum 16','warna' => 'Lorem Ipsum 16','harga' => '123','views' => '0','cover' => '49e7d46c869ca152b0842dbf581261ea.jpg','cover1' => '49e7d46c869ca152b0842dbf581261ea.jpg','cover2' => '49e7d46c869ca152b0842dbf581261ea.jpg','created_at' => '2018-04-29 13:08:42','updated_at' => '2018-04-29 13:08:42']);
$product =Product::create(['id' => '18','Kode' => 'Lorem Ipsum 17','kategori_id' => '2','nama_product' => 'Lorem Ipsum 17','bahan' => 'Lorem Ipsum 17','ukuran' => 'Lorem Ipsum 17','warna' => 'Lorem Ipsum 17','harga' => '123','views' => '0','cover' => 'd7a059cf3930af52663780d53b560516.jpg','cover1' => 'd7a059cf3930af52663780d53b560516.jpg','cover2' => 'd7a059cf3930af52663780d53b560516.jpg','created_at' => '2018-04-29 13:09:14','updated_at' => '2018-04-29 13:09:14']);
$product =Product::create(['id' => '19','Kode' => 'Lorem Ipsum 18','kategori_id' => '3','nama_product' => 'Lorem Ipsum 18','bahan' => 'Lorem Ipsum 18','ukuran' => 'Lorem Ipsum 18','warna' => 'Lorem Ipsum 18','harga' => '123','views' => '0','cover' => '9187fd14b042730bb34eca340b1c70be.jpg','cover1' => '9187fd14b042730bb34eca340b1c70be.jpg','cover2' => '9187fd14b042730bb34eca340b1c70be.jpg','created_at' => '2018-04-29 13:10:03','updated_at' => '2018-04-29 13:10:03']);
$product =Product::create(['id' => '20','Kode' => 'Lorem Ipsum 19','kategori_id' => '3','nama_product' => 'Lorem Ipsum 19','bahan' => 'Lorem Ipsum 19','ukuran' => 'Lorem Ipsum 19','warna' => 'Lorem Ipsum 19','harga' => '123','views' => '0','cover' => '04b06466c5286bc46f280160a77a7067.jpg','cover1' => '04b06466c5286bc46f280160a77a7067.jpg','cover2' => '04b06466c5286bc46f280160a77a7067.jpg','created_at' => '2018-04-29 13:10:43','updated_at' => '2018-04-29 13:10:43']);
$product =Product::create(['id' => '21','Kode' => 'Lorem Ipsum 20','kategori_id' => '3','nama_product' => 'Lorem Ipsum 20','bahan' => 'Lorem Ipsum 20','ukuran' => 'Lorem Ipsum 20','warna' => 'Lorem Ipsum 20','harga' => '123','views' => '0','cover' => 'e30588d0ac3e0fe8486110ba0b44a975.jpg','cover1' => 'e30588d0ac3e0fe8486110ba0b44a975.jpg','cover2' => 'e30588d0ac3e0fe8486110ba0b44a975.jpg','created_at' => '2018-04-29 13:11:31','updated_at' => '2018-04-29 13:11:31']);
$product =Product::create(['id' => '22','Kode' => 'Lorem Ipsum 21','kategori_id' => '3','nama_product' => 'Lorem Ipsum 21','bahan' => 'Lorem Ipsum 21','ukuran' => 'Lorem Ipsum 21','warna' => 'Lorem Ipsum 21','harga' => '123','views' => '0','cover' => '616ea15cd408b51b6b2d150f48c3fab5.jpg','cover1' => '616ea15cd408b51b6b2d150f48c3fab5.jpg','cover2' => '616ea15cd408b51b6b2d150f48c3fab5.jpg','created_at' => '2018-04-29 13:12:02','updated_at' => '2018-04-29 13:12:02']);
$product =Product::create(['id' => '23','Kode' => 'Lorem Ipsum 22','kategori_id' => '3','nama_product' => 'Lorem Ipsum 22','bahan' => 'Lorem Ipsum 22','ukuran' => 'Lorem Ipsum 22','warna' => 'Lorem Ipsum 22','harga' => '123','views' => '0','cover' => '0d4f8aff6a5567b5df504ee1aeefef8d.jpg','cover1' => '0d4f8aff6a5567b5df504ee1aeefef8d.jpg','cover2' => '0d4f8aff6a5567b5df504ee1aeefef8d.jpg','created_at' => '2018-04-29 13:12:31','updated_at' => '2018-04-29 13:12:31']);
$product =Product::create(['id' => '24','Kode' => 'Lorem Ipsum 23','kategori_id' => '4','nama_product' => 'Lorem Ipsum 23','bahan' => 'Lorem Ipsum 23','ukuran' => 'Lorem Ipsum 23','warna' => 'Lorem Ipsum 23','harga' => '123','views' => '0','cover' => 'ae3cb6624a54b8cf64ebbc07b4c2002b.jpg','cover1' => 'ae3cb6624a54b8cf64ebbc07b4c2002b.jpg','cover2' => 'ae3cb6624a54b8cf64ebbc07b4c2002b.jpg','created_at' => '2018-04-29 13:13:24','updated_at' => '2018-04-29 13:13:25']);
$product =Product::create(['id' => '25','Kode' => 'Lorem Ipsum 24','kategori_id' => '4','nama_product' => 'Lorem Ipsum 24','bahan' => 'Lorem Ipsum 24','ukuran' => 'Lorem Ipsum 24','warna' => 'Lorem Ipsum 24','harga' => '123','views' => '0','cover' => 'f837492d1ff7a42a233f35bcf7c41fa9.jpg','cover1' => 'f837492d1ff7a42a233f35bcf7c41fa9.jpg','cover2' => 'f837492d1ff7a42a233f35bcf7c41fa9.jpg','created_at' => '2018-04-29 13:13:47','updated_at' => '2018-04-29 13:13:47']);
$product =Product::create(['id' => '26','Kode' => 'Lorem Ipsum 25','kategori_id' => '4','nama_product' => 'Lorem Ipsum 25','bahan' => 'Lorem Ipsum 25','ukuran' => 'Lorem Ipsum 25','warna' => 'Lorem Ipsum 25','harga' => '123','views' => '0','cover' => 'c30dbdcfd4c135db082efc1dbdfa9815.jpg','cover1' => 'c30dbdcfd4c135db082efc1dbdfa9815.jpg','cover2' => 'c30dbdcfd4c135db082efc1dbdfa9815.jpg','created_at' => '2018-04-29 13:14:12','updated_at' => '2018-04-29 13:14:13']);
$product =Product::create(['id' => '27','Kode' => 'Lorem Ipsum 26','kategori_id' => '4','nama_product' => 'Lorem Ipsum 26','bahan' => 'Lorem Ipsum 26','ukuran' => 'Lorem Ipsum 26','warna' => 'Lorem Ipsum 26','harga' => '123','views' => '0','cover' => '0c8d417c969340fbab3d8359ce7cd19d.jpg','cover1' => '0c8d417c969340fbab3d8359ce7cd19d.jpg','cover2' => '0c8d417c969340fbab3d8359ce7cd19d.jpg','created_at' => '2018-04-29 13:14:45','updated_at' => '2018-04-29 13:14:45']);
$product =Product::create(['id' => '28','Kode' => 'Lorem Ipsum 27','kategori_id' => '4','nama_product' => 'Lorem Ipsum 27','bahan' => 'Lorem Ipsum 27','ukuran' => 'Lorem Ipsum 27','warna' => 'Lorem Ipsum 27','harga' => '123','views' => '2','cover' => 'c324affe590a62a9e8eb1fb64230a9f8.jpg','cover1' => 'e5b67cefb8050284ca67cd084bf2ccca.jpg','cover2' => 'e5b67cefb8050284ca67cd084bf2ccca.jpg','created_at' => '2018-04-29 13:15:26','updated_at' => '2018-04-29 13:20:32']);
$product =Product::create(['id' => '29','Kode' => 'Lorem Ipsum 28','kategori_id' => '4','nama_product' => 'Lorem Ipsum 28','bahan' => 'Lorem Ipsum 28','ukuran' => 'Lorem Ipsum 28','warna' => 'Lorem Ipsum 28','harga' => '123','views' => '0','cover' => '52313773ab7b1e64c95577386c5d5148.jpg','cover1' => '52313773ab7b1e64c95577386c5d5148.jpg','cover2' => '52313773ab7b1e64c95577386c5d5148.jpg','created_at' => '2018-04-29 13:16:03','updated_at' => '2018-04-29 13:16:03']);
$product =Product::create(['id' => '30','Kode' => 'Lorem Ipsum 29','kategori_id' => '5','nama_product' => 'Lorem Ipsum 29','bahan' => 'Lorem Ipsum 29','ukuran' => 'Lorem Ipsum 29','warna' => 'Lorem Ipsum 29','harga' => '123','views' => '1','cover' => 'f749ffa60d0314f60d3bd2b2f68e35bf.jpg','cover1' => 'f749ffa60d0314f60d3bd2b2f68e35bf.jpg','cover2' => 'f749ffa60d0314f60d3bd2b2f68e35bf.jpg','created_at' => '2018-04-29 13:16:41','updated_at' => '2018-04-29 13:34:49']);
$product =Product::create(['id' => '31','Kode' => 'Lorem Ipsum 30','kategori_id' => '5','nama_product' => 'Lorem Ipsum 30','bahan' => 'Lorem Ipsum 30','ukuran' => 'Lorem Ipsum 30','warna' => 'Lorem Ipsum 30','harga' => '123','views' => '0','cover' => '1def47c0ece4b9a94fbdb7bfe8dde991.jpg','cover1' => '1def47c0ece4b9a94fbdb7bfe8dde991.jpg','cover2' => '1def47c0ece4b9a94fbdb7bfe8dde991.jpg','created_at' => '2018-04-29 13:17:04','updated_at' => '2018-04-29 13:17:04']);
$product =Product::create(['id' => '32','Kode' => 'Lorem Ipsum 31','kategori_id' => '5','nama_product' => 'Lorem Ipsum 31','bahan' => 'Lorem Ipsum 31','ukuran' => 'Lorem Ipsum 31','warna' => 'Lorem Ipsum 31','harga' => '123','views' => '0','cover' => 'a07d0461aaf8dc1eb0dd6e45a83b626a.jpg','cover1' => 'a07d0461aaf8dc1eb0dd6e45a83b626a.jpg','cover2' => 'a07d0461aaf8dc1eb0dd6e45a83b626a.jpg','created_at' => '2018-04-29 13:17:27','updated_at' => '2018-04-29 13:17:28']);
$product =Product::create(['id' => '33','Kode' => 'Lorem Ipsum 32','kategori_id' => '5','nama_product' => 'Lorem Ipsum 32','bahan' => 'Lorem Ipsum 32','ukuran' => 'Lorem Ipsum 32','warna' => 'Lorem Ipsum 32','harga' => '123','views' => '0','cover' => 'b85cb7971226fa4b701bdffc9bc3a673.jpg','cover1' => 'b85cb7971226fa4b701bdffc9bc3a673.jpg','cover2' => 'b85cb7971226fa4b701bdffc9bc3a673.jpg','created_at' => '2018-04-29 13:18:08','updated_at' => '2018-04-29 13:18:08']);
$product =Product::create(['id' => '34','Kode' => 'Lorem Ipsum 33','kategori_id' => '5','nama_product' => 'Lorem Ipsum 33','bahan' => 'Lorem Ipsum 33','ukuran' => 'Lorem Ipsum 33','warna' => 'Lorem Ipsum 33','harga' => '123','views' => '0','cover' => '3b1c3cd407c25ccd25f8059835c1af23.jpg','cover1' => '3b1c3cd407c25ccd25f8059835c1af23.jpg','cover2' => '3b1c3cd407c25ccd25f8059835c1af23.jpg','created_at' => '2018-04-29 13:18:38','updated_at' => '2018-04-29 13:18:38']);
$product =Product::create(['id' => '35','Kode' => 'Lorem Ipsum 34','kategori_id' => '5','nama_product' => 'Lorem Ipsum 34','bahan' => 'Lorem Ipsum 34','ukuran' => 'Lorem Ipsum 34','warna' => 'Lorem Ipsum 34','harga' => '132','views' => '2','cover' => '97618c92a0d4d4f22e68d5e8f56dc3f2.jpg','cover1' => '97618c92a0d4d4f22e68d5e8f56dc3f2.jpg','cover2' => '97618c92a0d4d4f22e68d5e8f56dc3f2.jpg','created_at' => '2018-04-29 13:19:16','updated_at' => '2018-04-29 13:34:57']);






$about =About::create(['id' => '1','cover' => '4ffbc9e1e3a6212e16bc479294e547b9.jpg','cover1' => '4ffbc9e1e3a6212e16bc479294e547b9.jpg','atas' => 'Our story','tengah' => '<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p>Phasellus egestas nisi nisi, lobortis ultricies risus semper nec. Vestibulum pharetra ac ante ut pellentesque. Curabitur fringilla dolor quis lorem accumsan, vitae molestie urna dapibus. Pellentesque porta est ac neque bibendum viverra. Vivamus lobortis magna ut interdum laoreet. Donec gravida lorem elit, quis condimentum ex semper sit amet. Fusce eget ligula magna. Aliquam aliquam imperdiet sodales. Ut fringilla turpis in vehicula vehicula. Pellentesque congue ac orci ut gravida. Aliquam erat volutpat. Donec iaculis lectus a arcu facilisis, eu sodales lectus sagittis. Etiam pellentesque, magna vel dictum rutrum, neque justo eleifend elit, vel tincidunt erat arcu ut sem. Sed rutrum, turpis ut commodo efficitur, quam velit convallis ipsum, et maximus enim ligula ac ligula. Vivamus tristique vulputate ultricies. Sed vitae ultrices orci.</p>
</body>
</html>','bawah' => '<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p class="p-b-11">Creativity is just connecting things. When you ask creative people how they did something, they feel a little guilty because they didn\'t really do it, they just saw something. It seemed obvious to them after a while.</p>
<p><span class="s-text7">- Steve Job&rsquo;s</span></p>
</body>
</html>','created_at' => NULL,'updated_at' => '2018-04-29 14:49:42']);



/* `test`.`lainnyas` */
$lainnya = Lainnya::create(['id' => '1','link' => 'https://www.youtube.com/embed/8PA-GcyNda8','cover' => '9f537529a6ed9f4723b2e1c5b19f88c4.jpg','cover1' => 'bca0086ded007d610347bd14b0fc5b97.jpg','created_at' => NULL,'updated_at' => '2018-04-29 15:14:34']);



    }
}
