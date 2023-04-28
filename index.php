<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap-5/css/bootstrap.min.css">
    <title>Practical Test</title>
</head>
<body>
<div class="container m-5">
    <table class="table">
        <h4>Rendering Data from an API with PHP</h4>
        <thead>
            <tr>
                <th>Region</th>
                <th>Report Date</th>
                <th>Field Year</th>
                <th>Month</th>
                <th>Number Missing</th>
                <th>Migrant Route</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $api_url = 'https://missingmigrants.iom.int/mediterranean-figures/2023/json';

            $json_data = file_get_contents($api_url);
        
            // $response_data = json_decode($json_data, true);
            $datas = json_decode($json_data, true);
           
            // var_dump($datas);
            
            foreach($datas as $data) {
                $region = $data['region'];
                $report_date = $data['report_date'];
                $field_year = $data['field_year'];
                $month = $data['month'];
                $number_missing = $data['number_missing'];
                $migrant_route = $data['migrant_route'];
        

                    echo "
                    <tr>
                        <td>$region</td>
                        <td>$report_date</td>
                        <td>$field_year</td>
                        <td>$month</td>
                        <td>$number_missing</td>
                        <td>$migrant_route</td>
                    </tr>
                    ";
                }
            ?>
        </tbody>
    </table>
    <script src="./bootstrap-5/js/bootstrap.min.js"></script>
</body>
</html>
