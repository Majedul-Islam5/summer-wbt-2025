var database=[
    {
        userName:"Anas",
        password:5
    }
];

var uName=prompt("Enter your user name");
var pass=prompt("Enter your password");



function signIn(uName,pass)
{
    if(uName==database[0].userName && pass==database[0].password)
    {
        var para=new URLSearchParams(window.location.search);
        var fname=para.get("fname");
        var lname=para.get("lname");
        var email=para.get("email");
        var reason=para.get("reason");
        var service=para.getAll("service");
        var hire=para.get("hire");
        var position=para.get("pos");


        console.log(fname);
        console.log(lname);
        console.log(email);
        console.log(reason);
        console.log(service.join(", ")); 
        console.log(hire);
        console.log(position);
    }
    else
    {
        console.log("Incorrect Username or Password");
    }
}
signIn(uName,pass);