
*Create laravel project :* 
`laravel new Tp2_blog`

*Initialized git repository* 
`git init` 

*add every file to the repository* 
`git add .` 

*See what git's gonna do*
`git status`

*each commit is a point the history of the code repository.*
`git commit -m 'initial commit'`

*shows the history of the code repository* 
`git log`

*git commit --amend modify the latest commit*
`git commit --amend`

*git checkout copy commit hash to return to that point in code*
`git checkout hash`

*to upload to github first create repository and then:*
`git remote add origin https://github.com/salgadox/Tp2_blog.git`

*force it*
`git push -f`

*to uploade normally :*
`git push`

*1.1. first route already made with function "@index",*


* 	2.1. create first layout (main.blade.php)
	2.2. change content inside views: ex...* 
	`@section('title', 'about us'), <title>@yield('title', 'Laravel')</title>`
	2.3.Already have a menu:  Home / Articles / Contact (two new views: aticles.blade.php & contact-blade.php) with controlers in web
	`Route::get('/contact', 'HomeController@contact');
	Route::get('/articles', 'HomeController@articles');`*

* 3 
Create sqlite file: tp2_BD.sqlite (create new file named it and put the .sqlite at the end :)) 

int the .env file
DB_CONNECTION=sqlite
DB_HOST=127.0.0.1
DB_PORT=8001
DB_DATABASE=/Users/xsal/code/Tp2_blog/db.sqlite
#DB_USERNAME=homestead
#DB_PASSWORD=secret

DB_HOST 8001 is the one that I use in my laptop. You can change it if you use another. 
DB_DATABASE= UserPATH to get to the sqlite file

to migrate : 
`php artisan migrate`

then create two tables: "post" & "contact" 
`php artisan make:migration create_contact_table --create=contact`
`php artisan make:migration create_post_table --create=post`

Create One seeder for test : 
`php artisan make:seeder UsersTableSeeder`

Copy this text inside the run function it and decomment line 14 from /database/seeds/DatabaseSeeder.php/

`public function run()
    {
          DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => bcrypt('secret'),
        ]);
    }`

To see all the changes in the db file : 
`php artisan migrate:fresh --seed`
*

*Eloquent
made Post & Contact models*
`php artisan make:model Post
php artisan make:model Contact`
*We have to create a model for each table that he does*

*Complete tables (post and contact)*

*DEBUGED Change post table to posts table and contact table to contacts. now I can acces the data base.*



