<form action="/redirect.php" method="post">
  <label for="fName">First Name:</label><br>
  <input type="text" id="fName" name="fName"><br>
  <label for="lName">Last Name:</label><br>
  <input type="text" id="lName" name="lName"><br>
  <label for="email">Email:</label><br>
  <input type="text" id="email" name="email"><br>
  <label for="age">Age:</label><br>
  <input type="number" id="age" name="age"><br>
  <label for="gender">Gender:</label><br>
  <select id="gender" name="gender">
    <option value="male">Male</option>
    <option value="female">Female</option>
    <option value="nonBinary">Non Binary</option>
  </select><br><br>
   <label for="relationship">Relation with Person:</label><br>
  <select id="relationship" name="relationship">
    <option value="friend">Friend</option>
    <option value="coworker">Coworker</option>
    <option value="familyMember">Family Member</option>
  </select><br><br>
  <input type="submit" value="Submit">
</form>