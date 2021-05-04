<h1>Users table</h1>

<?php
    // print_r($users_data);
?>

<table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Email</th>
        <th>Fullname</th>
        <th>Mobile</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>

    <?php
    foreach($users_data as $row)
    {
      echo "<tr>";
      echo "<td>".$row->id."</td>";
      echo "<td>".$row->username."</td>";
      echo "<td>".$row->email."</td>";
      echo "<td>".$row->fullname."</td>";
      echo "<td>".$row->mobile."</td>";
      echo "<td>".$row->status."</td>";
      echo "</tr>";
    }
    ?>
     
    </tbody>
  </table>

  <a href="<?php echo base_url();?>backend/logout">Logout</a>