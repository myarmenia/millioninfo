<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categories;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function run()
    {
            Categories::create( [
            'id'=>1,
            'name'=>'{\"En\": \"Eating\", \"hy\": \"Ուտել\", \"ru\": \"Кушать\"}',
            'status'=>1,
            'created_at'=>NULL,
            'updated_at'=>'2022-02-16 02:22:28'
            ] );
                        
            Categories::create( [
            'id'=>2,
            'name'=>'{\"EN\": \"To live\", \"HY\": \"Ապրել\", \"РУ\": \"Жить\"}',
            'status'=>1,
            'created_at'=>NULL,
            'updated_at'=>'2022-02-16 01:19:26'
            ] );
                        
            Categories::create( [
            'id'=>3,
            'name'=>'{\"en\": \"Entertainment center\", \"hy\": \"Զվարճանքի կետրոն\", \"ru\": \"Развлекательный центр\"}',
            'status'=>1,
            'created_at'=>NULL,
            'updated_at'=>NULL
            ] );
                        
            Categories::create( [
            'id'=>4,
            'name'=>'{\"en\": \"Medicine\", \"hy\": \"Բժշկություն\", \"ru\": \"Медицина\"}',
            'status'=>1,
            'created_at'=>NULL,
            'updated_at'=>'2022-02-15 06:27:16'
            ] );
                        
            Categories::create( [
            'id'=>5,
            'name'=>'{\"en\": \"The Shops\", \"hy\": \"խանութներ \", \"ru\": \"Магазины\"}',
            'status'=>1,
            'created_at'=>NULL,
            'updated_at'=>NULL
            ] );
                        
            Categories::create( [
            'id'=>6,
            'name'=>'{\"en\": \"finance\", \"hy\": \"ֆինանսներ \", \"ru\": \"Финансы\"}',
            'status'=>1,
            'created_at'=>NULL,
            'updated_at'=>NULL
            ] );
                        
            Categories::create( [
            'id'=>7,
            'name'=>'{\"en\": \"Beauty\", \"hy\": \"Գեղեցկություն \", \"ru\": \"Красота\"}',
            'status'=>1,
            'created_at'=>NULL,
            'updated_at'=>NULL
            ] );
                        
            Categories::create( [
            'id'=>8,
            'name'=>'{\"en\":\"Tours\": \"To live\", \"hy\": \"Տուրեր \", \"ru\": \"Туры\"}',
            'status'=>1,
            'created_at'=>NULL,
            'updated_at'=>NULL
            ] );
                        
            Categories::create( [
            'id'=>9,
            'name'=>'{\"en\": \"Work\", \"hy\": \"Աշխատանք \", \"ru\": \"Работа\"}',
            'status'=>1,
            'created_at'=>NULL,
            'updated_at'=>NULL
            ] );
                        
            Categories::create( [
            'id'=>10,
            'name'=>'{\"en\": \"Training Centers\", \"hy\": \"Ուսումնական կենտրոններ\", \"ru\": \"Центры обучения\"}',
            'status'=>1,
            'created_at'=>NULL,
            'updated_at'=>NULL
            ] );
                        
            Categories::create( [
            'id'=>27,
            'name'=>'{\"en\":\"Table\",\"hy\":\"\\u057d\\u0565\\u0572\\u0561\\u0576\",\"ru\":\"\\u0441\\u0442\\u0443\\u043b\"}',
            'status'=>1,
            'created_at'=>'2022-02-16 03:23:58',
            'updated_at'=>'2022-02-16 03:23:58'
            ] );
    }
    
}
