<?php
    $connect = mysqli_connect(
        'db',
        'demo',
        123456,
        'demo'
    );

    $query = 'SELECT * FROM colours ORDER BY name';
    $result = mysqli_query($connect, $query);

    //associative array displays 1 record each time ...once it gives the last record after that fetching will break the while loop
    while($record = mysqli_fetch_assoc($result))
    {
        echo '<h2>'.$record['name'].'</h2>
            <div style="
                width:100%;
                height:100px;
                background-color: #'.$record['rgb'].';"></div>
            <hr>';

        echo '<span>';
        print_r($record);
        echo '</span>';
    }
?>