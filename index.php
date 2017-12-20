<html>
  <head>
      <title>input</title>
  </head>
  <body>
        <br>
    <center>
    <h1> Guest Book </h1>
    <form action="simpan.php" method="post" name="form1">
    <table border="0" bgcolor="#339999" align="center" height="250" width="100" cellpadding="20">
  <tr>
      <tr>
         <td width="50" height="50" valign="top">Nama   </td>
         <td valign="top"><input type="text" name="nama"
         size="30" maxlength="25" placeholder="Masukkan Nama Depan" required></td>
      </tr>
      <tr>
          <td valign="top" height="50" width="50">Email   </td>
          <td valign="top"><input type="text" name="email"
         size="40" maxlength="40" placeholder="Masukkan Email" required></td>
      </tr>
          <tr>
          <td valign="top" height="50">Komentar  </td>
          <td valign="top"><textarea name="komen" maxlength="200"
         cols="35" rows="5" placeholder="Masukkan Komentar Anda" required></textarea></td>
          </tr>
            <input value="Send" style="background-color: #12D53F; height: 50; width: 150;" type="submit">
          <td>
            <input value="Clear" style="background-color: #12D53F; height: 50; width: 150;" type="reset">
          </td>
 </tr>
    </table>
    </form>
    </center>
  </body>
</html>
