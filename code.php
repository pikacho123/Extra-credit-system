if(isset($_POST['login']))
{
//if($_POST['pwd']==.'password'.){
        $name=$_POST['usr'];
        $pass=$_POST['pwd'];
        $query="select * from registration where name='$name' and password='$password'
        $run=pg_query($connect,$query);
        if(pg_query($connect,$query);
        {
           foreach($run as $row)
           {
                   $user=$row['r_id'];
                   $password=$row['password'];
            }
//          $_SESSION['auth']=$name;
            $_SESSION['auth_user']=[
                            'stud_id'=$user,
                            'name'=$name,
                            'contact'=$contact,
                            'profession'=$profession,
                            'password'=$password,
                            ];
            header("location:dashboard.html");
            exit(0);
          }
}
/*else{
            echo '<script type="text/javascript">
                  window.onload
