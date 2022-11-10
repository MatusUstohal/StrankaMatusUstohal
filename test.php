<php>
Name: <input type="text" name="name" value="<?php echo $name;?>">
  
$file1 = fopen("Zadanie_Ulozene.txt","w");
  fwrite($file1, $name);
        fclose($file1);
</br>
E-mail: <input type="text" name="email" value="<?php echo $email;?>">

$file2 = fopen("Zadanie_Ulozene.txt","w");
  fwrite($file2, $email);
        fclose($file2);
</br>
Website: <input type="text" name="website" value="<?php echo $website;?>">

$file3 = fopen("Zadanie_Ulozene.txt","w");
  fwrite($file3, $website);
        fclose($file3);
</br>
Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>

$file4 = fopen("Zadanie_Ulozene.txt","w");
  fwrite($file4, $comment);
        fclose($file4);
</br>
Gender:
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="female") echo "checked";?>
value="female">Female
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="male") echo "checked";?>
value="male">Male
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="other") echo "checked";?>
value="other">Other
</php>
