<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
    <style>
        table { border-collapse: collapse; width: 90%; margin: auto; }
        th, td { border: 1px solid black; padding: 8px; text-align: center; }
    </style>
</head>
<body>
<table>
    <thead>
    <tr>
        <th>Division</th>
        <th>District</th>
        <th>Police Station</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($divisions as $division){ ?>
        <?php $firstDivision = true; ?>
        
        <?php foreach($division['districts'] as $district){ ?>
            <?php $firstDistrict = true; ?>

            <?php foreach($district['upazila'] as $upazila){ ?>
                <tr>
                    <?php if($firstDivision){ ?>
                        <td rowspan="12"><?php echo $division['name']; ?></td>
                        <?php $firstDivision = false; ?>
                    <?php } ?>

                    <?php if($firstDistrict){ ?>
                        <td rowspan="4"><?php echo $district['name']; ?></td>
                        <?php $firstDistrict = false; ?>
                    <?php } ?>

                    <td><?php echo $upazila; ?></td>
                </tr>
            <?php } ?>
        <?php } ?>
    <?php } ?>
    </tbody>
</table>
</body>
</html>
