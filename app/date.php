<h1>Home Page<h1>
<?php $day = date('D') ?>
<p>
    <?php
        $result = match ($day){
            "Sat", "Sun" => "Weekend",
            default => "Weekday"
        };

        echo $result;
    ?>
</p>