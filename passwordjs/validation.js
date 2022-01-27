function validate_change_password()
{
    var oldpassword = document.getElementById("oldpassword").value;
    var newpassword = document.getElementById("newpassword").value;
    var conformpassword= document.getElementById("conformpassword").value;
    var re = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/;

   if (newpassword != conformpassword)
   {
       alert("New Password & Conform Password do not match");
       return false;
    }
    else if (re.test(newpassword)!=true)
    {
        alert("Password Must have Alphanumeric and Symbols");
        return false;
    }
    else if (oldpassword == newpassword)
    {
        alert("New Password must not be the Old Password");
        return false;
    }
    else
    {
        alert("Password Change Success");
        return true;
    }
}
