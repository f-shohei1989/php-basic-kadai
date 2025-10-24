<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        class Food {
            // プロパティを定義する                        
            private $name;
            private $price;

            // コンストラクタを定義する
            public function __construct(string $name, int $price) {
              $this->name = $name;
              $this->price = $price;
            }

            // 出力メソッド
            public function show_price() {
                // echo $this->name ."<br>";
                echo $this->price ."<br>";
            }
        }

        class Animal {
            // プロパティを定義する                        
            private $name;
            private $height;
            private $weight;

            // コンストラクタを定義する
            public function __construct(string $name, int $height, int $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }

            // 出力メソッド
            public function show_height() {
                // echo $this->name ."<br>";
                echo $this->height ."<br>";
                // echo $this->weight ."<br>";
            }
        }

        $food = new Food("potato", 250);
        print_r($food);
        echo "<br>";
        $animal = new Animal("dog", 60, 5000);
        print_r($animal);
        echo "<br>";
        
        $food->show_price();
        $animal->show_height();

        ?>
    </p>
</body>

</html>