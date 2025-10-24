<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        function sort_2way($array, $orde) {
            // $order が TRUE のとき → 昇順
            // $order が FALSE のとき → 降順
            if ($order) {
                echo "昇順にソートします<br>";
                sort($array);  // 昇順
            } else {
                echo "降順にソートします<br>";
                rsort($array); // 降順
            }

            // foreachで中身を表示
            foreach ($array as $num) {
                echo "{$num}<br>";
            }

            // ソート後の配列を返す
            return $array;
        }

        $nums = [15, 4, 18, 23, 10];

        // 昇順ソート
        sort_2way($nums, TRUE);

        // 降順ソート
        sort_2way($nums, FALSE);

        ?>
    </p>
</body>

</html>