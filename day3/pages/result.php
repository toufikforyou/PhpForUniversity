<table border="1" align="center" width="800">
    <tr>
        <th>Name</th>
        <th>Mobile</th>
        <th>Email</th>
    </tr>
    <?php foreach ($results as $result) { ?>
        <tr>
            <td><?php echo $result['course'] ?></td>
            <td><?php echo $result['course_code'] ?></td>
            <td><?php echo $result['grade'] ?></td>
        </tr>
        <?php } ?>
</table>