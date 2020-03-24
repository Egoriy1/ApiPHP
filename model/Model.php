<?php


class Model {
    public static function createNameHero($post) {
        $collection = (new MongoDB\Client)->test1->users;
//        $insertOneResult = $collection->insertOne([0000
//    'username' => $post,
//
//]);
        echo '<pre>';
        var_dump($collection->findOneAndUpdate(["test" => 123], ['$addToSet' => ['username' => ['$each' => $post]]]));
        echo '</pre>';
        //        var_dump($collection::findAndModifay([
//            'test' => 123
//        ]));
//printf("Inserted %d document(s)\n", $insertOneResult->getInsertedCount());

//var_dump($insertOneResult->getInsertedId());
    }

    public static function addAllName (){
        $collection = (new MongoDB\Client)->test1->users;
        return json_encode($collection->findOne(["test" => 123])['username']);
    }

}