function contact(){
    console.log("Reason for Contacting me Choose a option from below");
    console.log("1)Project");
    console.log("2)Thesis");
    console.log("3)Meet and Greet");
    var x=prompt("Reason for Contacting me Choose a option from below\n 1)Project\n2)Thesis\n3)Meet and Greet");
    if(Number(x)===1)
    {
        alert(" You selected Project");
    }
    else if(Number(x)==2)
    {
        alert(" You selected Thesis");
    }
    else if(Number(x)==3)
    {
        alert(" You selected Meet and Greet");
    }
}