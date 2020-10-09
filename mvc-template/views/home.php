<table>
  <tr>
    <td>Username</td>
    <td>Password</td>
  </tr>
  <?php foreach ($students as $student): ?>
    <tr>
      <td><?php echo $student['username'] ?></td>
      <td><?php echo $student['password'] ?></td>
    </tr>
  <?php endforeach; ?>
</table>
