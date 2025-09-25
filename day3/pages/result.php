<body style="background: black">
    <h1 align="center" style="color:white;">My Result Grade Sheet</h1>
    <table border="1" align="center" width="800">
        <tr style="background: chartreuse">
            <th>Course</th>
            <th>Course Code</th>
            <th>Grade</th>
        </tr>
        <?php foreach ($results as $result) { ?>
            <tr style="background: aquamarine">
                <td><?php echo $result['course'] ?></td>
                <td><?php echo $result['course_code'] ?></td>
                <td><?php echo $result['grade'] ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
